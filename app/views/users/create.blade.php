@extends('layouts.master')
@section('title')
@parent
User
@stop
@section('content')
<div class="container create-user">
<h1>Create New User</h1>


{{ Form::open(array('route' => 'users.store', 'class' => 'form-horizontal')) }}
 

         <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username',null, array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'control-label') ) }}
            {{ Form::text('password', null, array('class' => 'form-control') ) }}
		    </div>
      {{ Form::submit('Submit', array('class' => 'btn')) }}

{{ Form::close() }}

</div>

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
