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
		Create a New User
	</div>
	<div class="panel-body">
		<form action=" {{ route('user.store')}}" method="post" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">User</label>
				<input class="form-control" type="text" id="name" 		name="name">
			</div>
			<div class="form-group">
				<label for="name">Email</label>
				<input class="form-control" type="email" id="name" 		name="email">
			</div>
			
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Add User
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@stop