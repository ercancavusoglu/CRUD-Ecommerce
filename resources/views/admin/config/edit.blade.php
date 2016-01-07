@extends('layouts.master')

@section('content')

    <h1>Edit Config</h1>
    <hr/>

    {!! Form::model($config, [
        'method' => 'PATCH',
        'url' => ['admin/config', $config->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('meta_title') ? 'has-error' : ''}}">
                {!! Form::label('meta_title', 'Meta Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('meta_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : ''}}">
                {!! Form::label('meta_description', 'Meta Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
                {!! Form::label('meta_keywords', 'Meta Keywords: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
                {!! Form::label('logo', 'Logo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('logo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
                {!! Form::label('facebook', 'Facebook: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('facebook', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('instagram') ? 'has-error' : ''}}">
                {!! Form::label('instagram', 'Instagram: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('instagram', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_smtp') ? 'has-error' : ''}}">
                {!! Form::label('mail_smtp', 'Mail Smtp: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_smtp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_smtp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_mail') ? 'has-error' : ''}}">
                {!! Form::label('mail_mail', 'Mail Mail: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_mail', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_mail', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_pass') ? 'has-error' : ''}}">
                {!! Form::label('mail_pass', 'Mail Pass: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_pass', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_pass', '<p class="help-block">:message</p>') !!}
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