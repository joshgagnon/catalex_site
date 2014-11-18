@extends('layouts.master')
@section('title')
@parent
User
@stop
@section('content')
<div class="container create-user">
<h1>Edit User Entry</h1>


{{ Form::model($user, array('method' => 'PATCH', 'route' =>
 array('users.update', $user->id), 'class' => 'form-horizontal')) }}
 
         <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username',null, array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'control-label') ) }}
            {{ Form::text('password', '', array('class' => 'form-control') ) }}
        </div>

      {{ Form::submit('Update', array('class' => 'btn')) }}

{{ Form::close() }}


</div>
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
