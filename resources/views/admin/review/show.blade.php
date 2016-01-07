@extends('layouts.master')

@section('content')

    <h1>Review</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Products Id</th><th>Users Id</th><th>Author</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $review->id }}</td> <td> {{ $review->products_id }} </td><td> {{ $review->users_id }} </td><td> {{ $review->author }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection