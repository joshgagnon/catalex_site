@extends('layouts.master')
@section('title')
@parent
User History
@stop
@section('content')

<div class="container user-page"><br/>
<h2>History for {{ $user->username }}</h2>

<br/>
<br/>


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    	        @foreach ($user->history as $hist)
    	        <tr><td>{{ $hist->created_at->timezone('Pacific/Auckland'); }}</td></tr>
    	        @endforeach
    </tbody>
</table>
</div>
@stop