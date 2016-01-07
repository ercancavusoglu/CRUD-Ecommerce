@extends('layouts.master')

@section('content')

    <h1>Edit Order</h1>
    <hr/>

    {!! Form::model($order, [
        'method' => 'PATCH',
        'url' => ['admin/orders', $order->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('invoice_no') ? 'has-error' : ''}}">
                {!! Form::label('invoice_no', 'Invoice No: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('invoice_no', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('invoice_no', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('users_id') ? 'has-error' : ''}}">
                {!! Form::label('users_id', 'Users Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('users_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
                {!! Form::label('total', 'Total: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                {!! Form::label('phone', 'Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
                {!! Form::label('fax', 'Fax: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('payment_method') ? 'has-error' : ''}}">
                {!! Form::label('payment_method', 'Payment Method: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('payment_method', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('payment_method', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('payment_name') ? 'has-error' : ''}}">
                {!! Form::label('payment_name', 'Payment Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('payment_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('payment_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('payment_address') ? 'has-error' : ''}}">
                {!! Form::label('payment_address', 'Payment Address: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('payment_address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('payment_address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('payment_city') ? 'has-error' : ''}}">
                {!! Form::label('payment_city', 'Payment City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('payment_city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('payment_city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('payment_postcode') ? 'has-error' : ''}}">
                {!! Form::label('payment_postcode', 'Payment Postcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('payment_postcode', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('payment_postcode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('shipping_name') ? 'has-error' : ''}}">
                {!! Form::label('shipping_name', 'Shipping Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('shipping_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shipping_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('shipping_address') ? 'has-error' : ''}}">
                {!! Form::label('shipping_address', 'Shipping Address: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('shipping_address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shipping_address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('shipping_city') ? 'has-error' : ''}}">
                {!! Form::label('shipping_city', 'Shipping City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('shipping_city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shipping_city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('shipping_postcode') ? 'has-error' : ''}}">
                {!! Form::label('shipping_postcode', 'Shipping Postcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('shipping_postcode', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shipping_postcode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
                {!! Form::label('comment', 'Comment: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ip') ? 'has-error' : ''}}">
                {!! Form::label('ip', 'Ip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user_agent') ? 'has-error' : ''}}">
                {!! Form::label('user_agent', 'User Agent: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('user_agent', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_agent', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('accept_language') ? 'has-error' : ''}}">
                {!! Form::label('accept_language', 'Accept Language: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('accept_language', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('accept_language', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection