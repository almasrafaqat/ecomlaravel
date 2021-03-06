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
						<h3 class="text-center"><span class="text-danger">Hi.. </span><strong>{{Auth::user()->name}} </strong>Update Profile</h3>
					</div>
					<div class="card-body">
						<form method="POST" action="{{ route('user.profile.store') }}" class="register-form outer-top-xs" role="form" enctype="multipart/form-data">
						@csrf
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Name <span></span></label>
							    <input type="text" name="name" value="{{$user->name}}"  class="form-control unicase-form-control text-input" >
							</div>
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Email Address <span></span></label>
							    <input type="email" name="email" value="{{$user->email}}" class="form-control unicase-form-control text-input" >
							</div>
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Phone <span></span></label>
							    <input type="text" name="phone" value="{{$user->phone}}" class="form-control unicase-form-control text-input" >
							</div>
							<div class="form-group">
							    <label class="info-title" for="exampleInputEmail1">Image <span></span></label>
							    <input type="file" name="profile_photo_path" class="form-control unicase-form-control text-input" >
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