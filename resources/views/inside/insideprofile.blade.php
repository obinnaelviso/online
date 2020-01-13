@extends('inside.insidemaster')

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
				    <h5 class="card-title">CATEGORY</h5><hr>
				    <p class="card-text">{{ $user->category }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">CORRESPONDING ADDRESS</h5><hr>
				    <p class="card-text">{{ $user->corresponding }}</p>
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
				    <h5 class="card-title">TELEPHONE</h5><hr>
				    <p class="card-text">{{ $user->telephone }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">WHATSAPP NUMBER</h5><hr>
				    <p class="card-text">{{ $user->whatsapp }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">MAILING ADDRESS</h5><hr>
				    <p class="card-text">{{ $user->mailaddress }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">NAME OF INSTITUITION / SCHOOL / INDUSTRY</h5><hr>
				    <p class="card-text">{{ $user->schoolname }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">>NAMES OF PARTICIPANTS</h5><hr>
				    <p class="card-text">{{ $user-participants }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">PRODUCT NAME</h5><hr>
				    <p class="card-text">{{ $user->productname }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">NUMBER OF CERTIFICATE(S)</h5><hr>
				    <p class="card-text">{{ $user->cert }}</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">NUMBER OF MEDAL(S)</h5><hr>
				    <p class="card-text">{{ $user->medal }}</p>
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
