@extends('layouts.master')

@section('content')

    <h1>Products <a href="{{ url('admin/products/create') }}" class="btn btn-primary pull-right btn-sm">Add New Product</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Slug</th><th>Images</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($products as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/products', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->slug }}</td><td>{{ $item->images }}</td>
                    <td>
                        <a href="{{ url('admin/products/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/products', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $products->render() !!} </div>
    </div>

@endsection
