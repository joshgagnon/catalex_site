@extends('layouts.master')
@section('title')
@parent
Blog
@stop
@section('content')
<div class="content blog-page"><br/>
{{ link_to_route('blogs.create', 'New Blog Entry', null, array('class' => 'btn btn-primary')) }}
</div>

@if ($blogs->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Title</th>
        <th>Text</th>
        <th>Date</th>
        <th colspan="3"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
          <td>{{ $blog->body }}</td>
          <td>{{ $blog->date }}</td>
                    <td>{{ link_to_route('blogs.edit', 'Edit',
 array($blog->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('blogs.destroy', $blog->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no blogs
@endif
@stop