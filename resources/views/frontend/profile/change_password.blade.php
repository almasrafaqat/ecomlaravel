@extends('frontend.main_master')

@section('content')

	<div class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2"><br><br>
					<img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path): url('upload/no_image.jpg')}}" height="100%" width="100%" alt=""><br><br>
					<ul class="list-group list-group-flush">
						<a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
						<a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Update Profile</a>
						<a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
						<a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
					</ul>
				</div><!--col-md-2-->
				<div class="col-md-2"></div><!--col-md-2-->
				<div class="col-md-6">
					<div class="card">
						<h3 class="text-center"><span class="text-danger"> Change Password </span><strong></strong></h3>
					</div>
					<div class="card-body">
						<form method="POST" action="{{ route('user.password.update') }}" class="register-form outer-top-xs" role="form">
						@csrf
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Current Password <span></span></label>
							    <input type="password" name="oldpassword"  id="current_password"  class="form-control unicase-form-control text-input" >
							</div>
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1"> Password <span></span></label>
							    <input type="password" id="password" name="password"  class="form-control unicase-form-control text-input" >
							</div>
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Confirm Password <span></span></label>
							    <input type="password" id="password_confirmation" name="password_confirmation"  class="form-control unicase-form-control text-input" >
							</div>
							
							<div class="form-group">
							    
							    <button type="submit" class="btn btn-danger">Update</button>
							</div>
						</form>
					</div>
				</div><!--col-md-6-->
			</div>
		</div>
	</div>

@endsection