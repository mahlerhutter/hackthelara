@extends('layouts.admin')


@section('content')

@if(Session::has('deleted_user'))

<p>{{session('deleted_user')}}</p>

@endif

@if(Session::has('updated_user'))

<p>{{session('updated_user')}}</p>

@endif


<h1>Users</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Photo</th>
        <th>email</th>
        <th>active</th>
        <th>role</th>
        <th>created</th>
        <th>updated</th>
        <
      </tr>
    </thead>
    <tbody>

    	@if($users)

    	@foreach($users as $user)

      <tr>
       <td>{{$user->id}}</td>
       <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
       <td><img src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400 '}}" height=50></td>
       <td>{{$user->email}}</td>
       <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
       <td>{{$user->role->name}}</td>
       <td>{{$user->created_at->diffForHumans()}}</td>
       <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>

      @endforeach

      @endif
 
     
    </tbody>
  </table>

@endsection