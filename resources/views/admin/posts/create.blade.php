@extends('layouts.app')

@section('title') Create Post @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Create a new post
		</div>

		<div class="card-body">
			<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select class="form-control" name="category_id" id="category">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="tags">Select a Tag</label>
					@foreach($tags as $tag)
						<div class="checkbox">
							<label for="tags"><input name="tags[]" type="checkbox" value="{{ $tag->id }}">{{ $tag->tag }}</label>
						</div>
					@endforeach
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control">
						
					</textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Store Post</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection

@section('styles')
	{{-- include summernote css --}}
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
	{{-- include summernote js --}} 
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

	<script>
		$(document).ready(function() {
	        $('#content').summernote();
	    });
    </script>

@endsection