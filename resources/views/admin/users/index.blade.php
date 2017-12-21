@extends('layouts.admin')


@section('content')
<h1>Users</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
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
       <td>{{$user->name}}</td>
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