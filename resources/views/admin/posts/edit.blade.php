@extends('layouts.app')

@section('title') Edit Post @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Editing post | "<strong>{{ $post->title }}</strong>"
		</div>

		<div class="card-body">
			<form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" value="{{ $post->title }}">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select class="form-control" name="category_id" id="category">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"
								@if($post->Category->id == $category->id)
									selected 
								@endif
								>
								{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="tags">Select a Tag</label>
					@foreach($tags as $tag)
						<div class="checkbox">
							<label for="tags"><input name="tags[]" type="checkbox" value="{{ $tag->id }}"
								@foreach($post->tags as $t)
									@if($tag->id == $t->id)
										checked 
									@endif
								@endforeach
								>
								{{ $tag->tag }}
							</label>
						</div>
					@endforeach
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control">
						{{ $post->content }}
					</textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Update Post</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection