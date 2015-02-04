@extends('layouts.master')
@section('title')
@parent - Sign Up
@stop
@section('content')
@include('components.navbar')
<section class="container-fluid banner news">
	<span class="banner-text">Lawyers forget.<br>Computers remember.</span>
</section>
<h2 class="highlight">News</h2>
<div class="news-entries">
	<?php $even = false; ?>
	@foreach($news as $entry)
		<div id="news-{{ $entry->id }}" class="news-section news-{{ ($even = !$even) ? 'even' : 'odd' }}">
			<section class="container">
				<h3>{{{ $entry->title }}}</h3>
				<h4>{{{ $entry->source }}}</h4>
				{{ $entry->body }}
			</section>
		</div>
	@endforeach
</div>
@stop
