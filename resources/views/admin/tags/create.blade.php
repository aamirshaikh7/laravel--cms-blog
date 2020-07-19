@extends('layouts.app')

@section('title') Create Tags @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Create a new tag
		</div>

		<div class="card-body">
			<form action="{{ route('tag.store') }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Store Tag</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection