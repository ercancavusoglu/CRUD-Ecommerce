@extends('layouts.master')

@section('content')

    <h1>Discount</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Products Id</th><th>Category Id</th><th>Percent</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $discount->id }}</td> <td> {{ $discount->products_id }} </td><td> {{ $discount->category_id }} </td><td> {{ $discount->percent }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection