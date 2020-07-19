@extends('layouts.app')

@section('title') Create Category @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Create a new category
		</div>

		<div class="card-body">
			<form action="{{ route('category.store') }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Store Category</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection