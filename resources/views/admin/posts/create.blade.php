@extends('layouts.admin')
@section('content')

<h1>create posts</h1>

<div class="row">

{!! Form::open(['method' => 'POST' , 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
{{ csrf_field() }}

<div class="form-group">
	{!! Form::label('title', 'Titlerte') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category_id', 'Category') !!}
	{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('photo_id', 'Photo') !!}
	{!! Form::file('photo_id', null,
	['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Body') !!}
	{!! Form::textarea('body', null, 
	['class'=>'form-control', 'rows'=>5]) !!}
</div>

	{!! Form::submit('Create Post', ['class'=> 'btn btn-primary']) !!}
</div>
{!!Form::close() !!}

</div>

<div class="row">


@include('includes.errors')	

</div>

@endsection
