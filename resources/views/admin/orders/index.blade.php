@extends('layouts.master')

@section('content')

    <h1>Orders <a href="{{ url('admin/orders/create') }}" class="btn btn-primary pull-right btn-sm">Add New Order</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Invoice No</th><th>Users Id</th><th>Total</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($orders as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/orders', $item->id) }}">{{ $item->invoice_no }}</a></td><td>{{ $item->users_id }}</td><td>{{ $item->total }}</td>
                    <td>
                        <a href="{{ url('admin/orders/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/orders', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $orders->render() !!} </div>
    </div>

@endsection
