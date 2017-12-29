@extends('layouts.admin')
@section('content')

<h1>admin posts</h1>

<table  class="table table-dark">
	<thead>
		<tr>
		<th>ID</th>
		<th>Photo</th>
		<th>User</th>
		
		<th>Title</th>
		<th>Post</th>
		<th>created</th>
		<th>updated</th>
	</tr>
	</thead>

	<tbody>

			@if ($posts)

			@foreach($posts as $post)
		<tr>

			<td> {{$post->id}}</td>
			<td> <img height='30' src="{{$post->photo ? $post->photo->path : 'http://placehold.it/400x400'}}" ></td>
			<td> {{$post->user->name}}</td>
			<td> {{$post->category_id}}</td>
			
			<td> {{$post->category ? $post->category->name :'uncategorized'}}</td>
			
			<td> {{$post->title}}</td>
			<td> {{$post->body}}</td>
			<td> {{$post->created_at->diffForHumans()}}</td>
			<td> {{$post->updated_at->diffForHumans()}}</td>
		
		
			


		</tr>
		@endforeach

		@endif

	</tbody>





</table>

@endsection
