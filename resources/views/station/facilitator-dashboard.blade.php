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
		<div class="row">
			<div class="col-md-5 md-mb-40">
				<h4><b>FIRST NAME</b></h4>
				<div>{{ Auth::guard('facilitator')->user()->first_name }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>LAST NAME</b></h4>
				<div>{{ Auth::guard('facilitator')->user()->last_name }}</div>
			</div>
			<div class="col-md-5">
				<h4><b>USERNAME</b></h4>
				<div>{{ Auth::guard('facilitator')->user()->username }}</div>
			</div>
			<div class="col-md-7">
				<h4><b>SCHOOL</b></h4>
				<div>{{ Auth::guard('facilitator')->user()->school }}</div>
			</div>
	</div>
</div>
@endsection