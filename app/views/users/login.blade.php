@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
<section class="container-fluid login">
</section>
<section class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 centered login-form">
      {{ Form::open(array('url'=>'sessions/signin', 'class'=>'form-signin')) }}
      <div class="form-group has-error has-feedback">
        @if(Session::has('message'))
        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
        @endif
         {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
        {{ Form::text('username', null, array('class'=>'form-control ', 'placeholder'=>'Username')) }}
      </div>
      <div class="form-group has-error has-feedback">
        @if(Session::has('message'))
        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
        @endif
         {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
      </div>
      {{ Form::submit('Login', array('class'=>'btn btn-primary '))}}
      {{ Form::close() }}
    </div>
  </div>
</section>


@stop