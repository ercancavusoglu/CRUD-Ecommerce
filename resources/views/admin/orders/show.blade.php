@extends('layouts.master')

@section('content')

    <h1>Order</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Invoice No</th><th>Users Id</th><th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td> <td> {{ $order->invoice_no }} </td><td> {{ $order->users_id }} </td><td> {{ $order->total }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection