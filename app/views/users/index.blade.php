@extends('layouts.master')
@section('title')
@parent
Users
@stop
@section('content')
<div class="container user-page"><br/>
{{ link_to_route('users.create', 'New User', null, array('class' => 'btn btn-primary')) }}
<br/>
<br/>
@if ($users->count())
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>            
            <th>Last Login</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ link_to_route('users.show', $user->username,array($user->id)) }}</td>
            <td>{{ $user->plaintext_pw or 'secret'}}</td>
            <td>{{ $user->role }}</td>
            <td>{{ link_to_route('users.edit', 'Edit',
            array($user->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method'
                => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                {{ Form::submit('Delete', array('class'
                => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        
    </tbody>
    
</table>
</div>
@else
    There are no users
@endif
@stop