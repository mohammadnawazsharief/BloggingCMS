@extends('layouts.app')

@section('content')

<!-- @if(count($errors)>0)
	<ul class="list-group">
		@foreach($errors->all() as $error)
			<li class="list-group-item text-danger">
				{{ $error }}
			</li>
		@endforeach
	</ul>
@endif -->
@include('Admin.includes.error')

<div class="panel panel-default">
	<div class="panel-heading text-center">
		Edit Your Profile
	</div>
	<div class="panel-body">
		<form action=" {{ route('user.profile.update')}}" method="post" enctype="multipart/form-data" >
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">User Name</label>
				<input class="form-control" type="text" id="name" 		name="name" value="{{$user->name}} ">
			</div>
			<div class="form-group">
				<label for="name">Email</label>
				<input class="form-control" type="email" id="name" 		name="email" value="{{$user->email}} ">
			</div>
			<div class="form-group">
				<label for="newPassword">New Password</label>
				<input class="form-control" type="password" id="newPassword" name="password" >
			</div>
			<div class="form-group">
				<label for="avatar">Upload New Avatar</label>
				<input class="form-control" type="file" id="avatar" 
				name="avatar">
			</div>
			<div class="form-group">
				<label for="facebook">Facebook Profile</label>
				<input class="form-control" type="text" id="facebook" name="facebook" value="{{$user->profile->facebook}} ">
			</div>
			<div class="form-group">
				<label for="youtube">Youtube Profile</label>
				<input class="form-control" type="text" id="youtube" name="youtube" value="{{$user->profile->youtube}}">
			</div>
			<div class="form-group">
				<label for="about">Tell Us About Yourself</label>
				<textarea class="form-control" id="about" name="about" cols="6" rows="6" >{{$user->profile->about}}
				</textarea>   
			</div>
			

			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Update Profile
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@stop