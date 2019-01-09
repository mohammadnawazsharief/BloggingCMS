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
		Create a New Post
	</div>
	<div class="panel-body">
		<form action=" {{ route('post.store')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" id="title" 		name="title">
			</div>
			<div class="form-group">
				<label for="featured">Featured Image</label>
				<input class="form-control" type="file" id="featured" 	name="featured">
			</div>
			<div class="form-group">
				<label for="category">Select Category</label>
				<select class="form-control" id="category" name="category_id">
					@foreach($categories as $category)
						<option value=" {{$category->id}} ">
							{{$category->name}}
						</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group">
				<label for="tags">Select tags</label>
				@foreach($tags as $tag)
				<div class="checkbox">
					<label><input type="checkbox" name="tags[]" value="{{$tag->id}}">
						{{$tag->tag}}					
					</label>
				</div>
				@endforeach
			</div>

			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Store Post
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@stop