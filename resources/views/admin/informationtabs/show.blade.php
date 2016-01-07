@extends('layouts.master')

@section('content')

    <h1>Informationtab</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Sort Order</th><th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $informationtab->id }}</td> <td> {{ $informationtab->name }} </td><td> {{ $informationtab->sort_order }} </td><td> {{ $informationtab->status }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection