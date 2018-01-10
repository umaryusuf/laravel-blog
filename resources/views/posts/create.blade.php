@extends('layouts.app')

@section('content')
	<h1>Create Posts</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body'])}}
    	</div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
    	<div class="form-group">
    		{{Form::submit('Add Post', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection