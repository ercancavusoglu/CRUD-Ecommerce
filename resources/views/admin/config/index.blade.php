@extends('layouts.master')

@section('content')

    <h1>Config <a href="{{ url('admin/config/create') }}" class="btn btn-primary pull-right btn-sm">Add New Config</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Meta Title</th><th>Meta Description</th><th>Meta Keywords</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($config as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/config', $item->id) }}">{{ $item->meta_title }}</a></td><td>{{ $item->meta_description }}</td><td>{{ $item->meta_keywords }}</td>
                    <td>
                        <a href="{{ url('admin/config/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/config', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $config->render() !!} </div>
    </div>

@endsection
