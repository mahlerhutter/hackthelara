//@extends('layouts.admin')

@section('content')
<h1>Create Users</h1>

<div class="row">
@include('includes.errors')
</div>

<div class="col-sm-3">
	<img src="{{$user->photo ? $user->photo->path :'http://placehold.it/400x400	'}}" height=100>
</div>
<div class="col-sm-9">

{!! Form::model($user,['method' => 'PATCH' , 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
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
	{!! Form::select('role_id', $roles, 0, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password',  ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('is_active', 'is_active') !!}
	{!! Form::select('is_active', array(1=>'Active', 0=>'not Active'),null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('photo_id', 'Photo') !!}
	{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit('Create User', ['class'=> 'btn btn-primary']) !!}
</div>
{!!Form::close() !!}	


{!! Form::model($user,['method' => 'DELETE' , 'action'=>['AdminUsersController@destroy', $user->id], 'files'=>true]) !!}
{{ csrf_field() }}

<div class="form-group">
	{!! Form::submit('Delete User', ['class'=> 'btn btn-danger']) !!}
</div>




{!!Form::close() !!}
</div>




@endsection

