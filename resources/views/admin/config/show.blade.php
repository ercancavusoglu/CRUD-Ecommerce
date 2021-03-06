@extends('layouts.master')

@section('content')

    <h1>Config</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Meta Title</th><th>Meta Description</th><th>Meta Keywords</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $config->id }}</td> <td> {{ $config->meta_title }} </td><td> {{ $config->meta_description }} </td><td> {{ $config->meta_keywords }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection