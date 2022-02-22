@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Main content -->
<section class="content">
 <!-- Basic Forms -->
  <div class="box">
	<div class="box-header with-border">
	  <h4 class="box-title">Admin Edit Profile</h4>
	  <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="">official website </a></h6>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	  <div class="row">
		<div class="col">
			<form novalidate action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
			  <div class="row">
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Admin Name<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="name" value={{ $editData->name }} class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Admin Email<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="email" name="email" value={{ $editData->email }} class="form-control" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
			</div><!--row-->
			<div class="row">
				<div class="col-md-6">						
					<div class="form-group">
						<h5>Admin Image<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="file" name="profile_photo_path" class="form-control" id="image" required data-validation-required-message="This field is required"> </div>
					</div>
				</div>
				<div class="col-md-6">						
					<div class="form-group">
						
						<div class="controls">
							<img id="showImage" src="{{ (!empty($editData->profile_photo_path)) ? url('upload/admin_images/'. $editData->profile_photo_path) : url('upload/no_image.jpg') }}" style="width: 100px;height: 100px;" />
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="text-xs-right">
				<button type="submit" class="btn btn-rounded btn-info">Submit</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$("#image").change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$("#showImage").attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>



@endsection