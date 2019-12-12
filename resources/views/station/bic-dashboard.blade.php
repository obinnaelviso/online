@extends('dashboard.bicmaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>BIC HOME</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			@if($user->certificate)
				<div class="col-md-12" style="margin-bottom: 20px; text-align: center">
					<div class="label label-success" style="font-size: 20px;">Congratulations! You have received a <a href="{{ route('viewCertificate') }}">certificate.</a></div><br>
				</div>
			@endif
			<div class="col-md-5 md-mb-40">
				<h4><b>FIRST NAME</b></h4>
				<div>{{ Auth::guard('bic')->user()->first_name }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>LAST NAME</b></h4>
				<div>{{ Auth::guard('bic')->user()->last_name }}</div>
			</div>
			<div class="col-md-5">
				<h4><b>USERNAME</b></h4>
				<div>{{ Auth::guard('bic')->user()->username }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>SCHOOL</b></h4>
				<div>{{ Auth::guard('bic')->user()->school }}</div>
			</div>
			<div class="col-md-5">
				1<h4><b>THEME</b></h4>
				<div>{{ $user->theme->name }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>REGISTERED FACILITATORS</b></h4>
				@foreach($facilitators as $facilitator)
					<div>{{ $facilitator->first_name }} {{ $facilitator->last_name }}</div>
				@endforeach
			</div>
			<br>
			<div class="col-md-12" style="margin-top: 50px">
				<a href="{{ route('changePasswordPage') }}" class="btn btn-warning">Change Password</a>
			</div>
	</div>
</div>
@endsection