@extends('layouts.master')

@section('content')

    <h1>Review <a href="{{ url('admin/review/create') }}" class="btn btn-primary pull-right btn-sm">Add New Review</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Products Id</th><th>Users Id</th><th>Author</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($review as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/review', $item->id) }}">{{ $item->products_id }}</a></td><td>{{ $item->users_id }}</td><td>{{ $item->author }}</td>
                    <td>
                        <a href="{{ url('admin/review/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/review', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $review->render() !!} </div>
    </div>

@endsection
