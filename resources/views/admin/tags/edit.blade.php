@extends('layouts.app')

@section('title') Edit Tag @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Editing tag | "<strong>{{ $tag->tag }}</strong>"
		</div>

		<div class="card-body">
			<form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Tag</label>
					<input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Update Tag</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection