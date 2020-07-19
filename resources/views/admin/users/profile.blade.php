@extends('layouts.app')

@section('title') Edit Profile @endsection

@section('content')

	@include('admin.includes.errors')

	<div class="card card-default">
		<div class="card-header p-2">
			Edit your profile
		</div>

		<div class="card-body">
			<form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="name">Upload Avatar</label>
					<input type="file" name="avatar" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Username</label>
					<input type="text" name="name" value="{{ $user->name }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" name="email" value="{{ $user->email }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="about">About</label>
					<textarea name="about" id="about" cols="6" rows="6" class="form-control">
						{{ $user->profile->about }}
					</textarea>
				</div>

				<div class="form-group">
					<label for="name">Facebook Profile</label>
					<input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Instagram Profile</label>
					<input type="text" name="instagram" value="{{ $user->profile->instagram }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">YouTube Profile</label>
					<input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Github Profile</label>
					<input type="text" name="github" value="{{ $user->profile->github }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">LinkedIn Profile</label>
					<input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-dark" type="submit">Update Profile</button>
					</div>
				</div>

			</form>
		</div>
	</div>
@endsection