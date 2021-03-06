@extends('layouts.master')
@section('title')
@parent
Blog
@stop
@section('content')
<div class="container create-blog">
<h1>Create Blog Entry</h1>


{{ Form::open(array('route' => 'blogs.store', 'class' => 'form-horizontal')) }}
 

         <div class="form-group">
            {{ Form::label('title', 'Title', array('class' => 'control-label')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('body', 'Body', array('class' => 'control-label') ) }}
            {{ Form::textarea('body', null, array('class' => 'form-control') ) }}
		</div>
      {{ Form::submit('Submit', array('class' => 'btn')) }}

{{ Form::close() }}

<hr/>
<h3>Preview</h3>
<div class="preview">
<div class="blog">
<div class="blog-entry">
<h4></h4>
<div></div>
</div>
</div>
</div>
</div>
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
