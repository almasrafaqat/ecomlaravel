@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Main content -->
<section class="content">
 <!-- Basic Forms -->
  <div class="box">
	<div class="box-header with-border">
	  <h4 class="box-title">Change Password</h4>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	  <div class="row">
		<div class="col">
			<form novalidate action="{{route('admin.update.password')}}" method="POST">
				@csrf
			  <div class="row">
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Current Password<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="oldpassword"  id="current_password" class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Password<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" id="password" name="password"  class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Confirm Password<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
				
			</div><!--row-->
			
			
			<div class="text-xs-right">
				<button type="submit" class="btn btn-rounded btn-info">Submit</button>
			</div>
		
	
		</form>
		</div><!--col-->
	</div>
</div>


</div>
</section>

@endsection