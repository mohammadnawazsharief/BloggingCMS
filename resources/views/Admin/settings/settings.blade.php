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
		Edit Blog Settings
	</div>
	<div class="panel-body">
		<form action=" {{ route('settings.update')}}" method="post" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Site Name</label>
				<input class="form-control" type="text" id="name" 		name="site_name" value=" {{$settings->site_name}} ">
			</div>
			<div class="form-group">
				<label for="phone">Contact Phone</label>
				<input class="form-control" type="phone" id="phone" 		name="contact_number" value="{{$settings->contact_number}}">
			</div>
			<div class="form-group">
				<label for="email">Contact Email</label>
				<input class="form-control" type="email" id="email" 		name="contact_email" value="{{$settings->contact_email}}">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input class="form-control" type="text" id="address" 		name="address" value="{{$settings->address}}">
			</div>
			
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Update Site Settings
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@stop