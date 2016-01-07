@extends('layouts.master')

@section('content')

    <h1>Information <a href="{{ url('admin/information/create') }}" class="btn btn-primary pull-right btn-sm">Add New Information</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Slug</th><th>Content</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($information as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/information', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->slug }}</td><td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ url('admin/information/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/information', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $information->render() !!} </div>
    </div>

@endsection
