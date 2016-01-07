@extends('layouts.master')

@section('content')

    <h1>Informationtabs <a href="{{ url('admin/informationtabs/create') }}" class="btn btn-primary pull-right btn-sm">Add New Informationtab</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Sort Order</th><th>Status</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($informationtabs as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/informationtabs', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->sort_order }}</td><td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ url('admin/informationtabs/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/informationtabs', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $informationtabs->render() !!} </div>
    </div>

@endsection
