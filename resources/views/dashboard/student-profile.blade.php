@extends('dashboard.studentmaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>STUDENT PROFILE</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">FIRST NAME</h5><hr>
				    <p class="card-text">{{ $user->firstname }}</p>
				  </div>
				</div>
			</div><br>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">LAST NAME</h5><hr>
				    <p class="card-text">{{ $user->lastname }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">IDENTIFICATION NUMBER</h5><hr>
				    <p class="card-text">{{ $user->idnum }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">PROGRAM</h5><hr>
				    <p class="card-text">{{ $user->program }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">EMAIL ADDRESS</h5><hr>
				    <p class="card-text">{{ $user->email }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">SUPERVISOR</h5><hr>
				    <p class="card-text">{{ $user->student_info->lecturer->firstname.' '.$user->student_info->lecturer->lastname }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">NATIONALITY</h5><hr>
				    <p class="card-text">{{ $user->student_info->nationality }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">ADDRESS</h5><hr>
				    <p class="card-text">{{ $user->student_info->address }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">CONTACT NUMBER</h5><hr>
				    <p class="card-text">{{ $user->student_info->contact_number }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">HOME COUNTRY CONTACT NUMBER</h5><hr>
				    <p class="card-text">{{ $user->student_info->home_country_contact }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">QUALIFICATION 1</h5><hr>
				    <p class="card-text">{{ $user->student_info->qualification1 }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">QUALIFICATION 2</h5><hr>
				    <p class="card-text">{{ $user->student_info->qualification2 }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">QUALIFICATION 3</h5><hr>
				    <p class="card-text">{{ $user->student_info->qualification3 }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">FACEBOOK</h5><hr>
				    <p class="card-text">{{ $user->student_info->facebook_link }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">INSTAGRAM</h5><hr>
				    <p class="card-text">{{ $user->student_info->instagram_link }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<a class="btn btn-warning" href="{{ route('student.profile.edit') }}"><i class="fa fa-users"></i> Edit Profile</a>
			</div>
		</div>
	</div>
</div>
@endsection