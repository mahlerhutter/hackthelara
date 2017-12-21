//@extends('layouts.admin')

@section('content')
<h1>Create Users</h1>




{!! Form::open(['method' => 'POST' , 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
{{ csrf_field() }}
<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('role_id', 'Role') !!}
	{!! Form::select('role_id',[''=>'choose options'] + $roles, 1, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password',  ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('is_active', 'is_active') !!}
	{!! Form::select('is_active', array(1=>'Active', 0=>'not Active'),0, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('File', 'Title') !!}
	{!! Form::file('file', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit('Create User', ['class'=> 'btn btn-primary']) !!}
</div>
{!!Form::close() !!}	

@include('includes.errors')


@endsection

