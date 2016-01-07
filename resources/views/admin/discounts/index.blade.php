@extends('layouts.master')

@section('content')

    <h1>Discounts <a href="{{ url('admin/discounts/create') }}" class="btn btn-primary pull-right btn-sm">Add New Discount</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Products Id</th><th>Category Id</th><th>Percent</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($discounts as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/discounts', $item->id) }}">{{ $item->products_id }}</a></td><td>{{ $item->category_id }}</td><td>{{ $item->percent }}</td>
                    <td>
                        <a href="{{ url('admin/discounts/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/discounts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $discounts->render() !!} </div>
    </div>

@endsection
