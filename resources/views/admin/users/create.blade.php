@extends('layouts.app')

@section('title') Create User @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Create a new User
		</div>

		<div class="card-body">
			<form action="{{ route('user.store') }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">User</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" name="email" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Add User</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection