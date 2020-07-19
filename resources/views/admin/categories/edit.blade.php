@extends('layouts.app')

@section('title') Edit Category @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Edit Category | "<strong>{{ $category->name }}</strong>"
		</div>

		<div class="card-body">
			<form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" value="{{ $category->name }}" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Update Category</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection