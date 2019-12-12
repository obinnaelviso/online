@extends('dashboard.facilitatormaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>FACILITATOR HOME</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row" style="margin-left: +20px">
			<div class="col-md-5 md-mb-40">
				<h4><b>FIRST NAME</b></h4>
				<div>{{ $user->first_name }}</div>
			</div>
			<div class="col-md-7 md-mb-40">
				<h4><b>LAST NAME</b></h4>
				<div>{{ $user->last_name }}</div>
			</div>
			<div class="col-md-5">
				<h4><b>USERNAME</b></h4>
				<div>{{ $user->username }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>SCHOOL</b></h4>
				<div>{{ $user->school }}</div>
			</div>
			<div class="col-md-5">
				<h4><b>THEME</b></h4>
				<div>{{ $user->theme->name }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>REGISTERED BICS</b></h4>
				@foreach($bics as $bic)
					<div>{{ $bic->first_name }} {{ $bic->last_name }}</div>
				@endforeach
			</div>
			<div class="col-md-12" style="margin-top: 50px">
				<a href="{{ route('changePasswordPage') }}" class="btn btn-warning">Change Password</a>
			</div>
	</div>
</div>
@endsection