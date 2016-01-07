@extends('layouts.master')

@section('content')

    <h1>Create New Discount</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/discounts', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}">
                {!! Form::label('products_id', 'Products Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('products_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                {!! Form::label('category_id', 'Category Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('percent') ? 'has-error' : ''}}">
                {!! Form::label('percent', 'Percent: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('percent', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('percent', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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