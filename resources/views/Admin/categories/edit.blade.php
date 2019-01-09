@extends('layouts.app')

@section('content')

	@include('Admin.includes.error')

<div class="panel panel-default">
	<div class="panel-heading text-center">
		Update Category: {{$category->name}}
	</div>
	<div class="panel-body">
		<form action=" {{ route('category.update',['id'=>$category->id])}}" method="post" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" id="name" 		name="name" value="{{$category->name}} ">
			</div>
			
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Update Category
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@stop