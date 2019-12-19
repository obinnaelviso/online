@extends('dashboard.studentmaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>STUDENT HOME</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		{{-- <div class="row">
			<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 md-mb-40 text-center">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">FIRST NAME</h5><hr>
				    <p class="card-text">{{ $user->firstname }}</p>
				  </div>
				</div>
			</div>
		</div> --}}
		<div class="row text-center">
			<div class="col-12 mb-5">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">NAME</h5><hr>
				    <p class="card-text">{{ $user->firstname.' '.$user->lastname }}</p>
				  </div>
				</div>
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">ID. NUMBER</h5><hr>
				    <p class="card-text">{{ $user->idnum }}</p>
				  </div>
				</div>
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">PROGRAM</h5><hr>
				    <p class="card-text">{{ $user->program }}</p>
				  </div>
				</div>
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">COURSES REGISTERED</h5><hr>
				    <p class="card-text">{{ $user->studentCourses->count() }}</p>
				  </div>
				</div>
			</div>
			<div class="col-md-12 mb-5">
				<div class="btn-group">
					<a href="{{ route('student.profile.courses') }}" class="btn btn-default">Register Courses</a>
					<a href="{{ route('student.profile') }}" class="btn btn-dark">View Profile</a>
					<a href="{{ route('changePasswordPage') }}" class="btn btn-warning">Change Password</a>
				</div>
			</div>
	</div>
</div>
@endsection