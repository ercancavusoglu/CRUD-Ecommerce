@extends('layouts.master')

@section('content')

    <h1>Product</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Slug</th><th>Images</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->id }}</td> <td> {{ $product->name }} </td><td> {{ $product->slug }} </td><td> {{ $product->images }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection