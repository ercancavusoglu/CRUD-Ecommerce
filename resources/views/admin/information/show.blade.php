@extends('layouts.master')

@section('content')

    <h1>Information</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Slug</th><th>Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $information->id }}</td> <td> {{ $information->name }} </td><td> {{ $information->slug }} </td><td> {{ $information->content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection