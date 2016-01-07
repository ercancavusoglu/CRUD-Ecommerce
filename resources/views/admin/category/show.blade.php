@extends('layouts.master')

@section('content')

    <h1>Category</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Slug</th><th>Images</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td> <td> {{ $category->name }} </td><td> {{ $category->slug }} </td><td> {{ $category->images }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection