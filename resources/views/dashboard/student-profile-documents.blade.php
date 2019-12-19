@extends('dashboard.studentmaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>STUDENT PROFILE DOCUMENTS</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="mb-5">
			<div class="col-md-8">
				@if(session()->has('success'))
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				@endif
			</div>
			<form action="{{ route('student.profile.documents') }}" method="post" enctype="multipart/form-data">
				@csrf @method('put')
				<div class="clearfix"></div>
				<div class="col-md-3 mb-4">
					<label for="resume">Upload Resume</label>
					<input type="file" name="resume" @if($user->student_info->resume_url) disabled @endif>
				</div>
				<div class="col-md-3 mb-4">
					<label for="portfolio">E-Portfolio</label>
					<input type="file" name="portfolio" @if($user->student_info->e_portfolio_url) disabled @endif>
				</div>
				<div class="col-md-3 mb-4">
					<label for="publication1">Publication 1</label>
					<input type="file" name="publication1" @if($user->student_info->publication1_url) disabled @endif>
				</div>
				<div class="col-md-3 mb-4">
					<label for="publication2">Publication 2</label>
					<input type="file" name="publication2" @if($user->student_info->publication2_url) disabled @endif>
				</div>'
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>
				</div>
			</form>		
		</div>
		<div class="clearfix"></div>
		<div class="row mt-5">
			<div class="col-md-12">
				<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th><b>E-Portfolio</b></th>
							<th>@if($user->student_info->e_portfolio_url)<div class="label label-success">AVAILABLE</div>@else <div class="label label-danger">NOT AVAILABLE</div> @endif</th>
							<th>
								<form method="post" action="{{ route('student.profile.remove.portfolio') }}">
									@csrf @method('put')
									<a href="/storage/{{ str_replace("public/", "", $user->student_info->e_portfolio_url) }}" class="btn btn-primary" download @if(!$user->student_info->e_portfolio_url) hidden @endif><span class="fa fa-download"></span> Download</a>  <button class="btn btn-danger" @if(!$user->student_info->e_portfolio_url) disabled @endif> <span class="fa fa-trash"></span> Remove</button>
								</form>
							</th>
						</tr>
						<tr>
							<th><b>Resume</b></th>
							<th>@if($user->student_info->resume_url)<div class="label label-success">AVAILABLE</div> @else <div class="label label-danger">NOT AVAILABLE</div> @endif</th>
							<th>
								<form method="post" action="{{ route('student.profile.remove.resume') }}">
									@csrf @method('put')
									<a href="/storage/{{ str_replace("public/", "", $user->student_info->resume_url) }}" class="btn btn-primary" download @if(!$user->student_info->resume_url) hidden @endif><span class="fa fa-download"></span> Download</a>  <button class="btn btn-danger" @if(!$user->student_info->resume_url) disabled @endif> <span class="fa fa-trash"></span> Remove</button>
								</form>
							</th>
						</tr>
						<tr>
							<th><b>Publication 1</b></th>
							<th>@if($user->student_info->publication1_url)<div class="label label-success">AVAILABLE</div> @else <div class="label label-danger">NOT AVAILABLE</div> @endif</th>
							<th>
								<form method="post" action="{{ route('student.profile.remove.publication1') }}">
									@csrf @method('put')
									<a href="/storage/{{ str_replace("public/", "", $user->student_info->publication1_url) }}" class="btn btn-primary" download @if(!$user->student_info->publication1_url) hidden @endif><span class="fa fa-download"></span> Download</a>  <button class="btn btn-danger" @if(!$user->student_info->publication1_url) disabled @endif> <span class="fa fa-trash"></span> Remove</button>
								</form>
							</th>
						</tr>
						<tr>
							<th><b>Publication 2</b></th>
							<th>@if($user->student_info->publication2_url)<div class="label label-success">AVAILABLE</div> @else <div class="label label-danger">NOT AVAILABLE</div> @endif</th>
							<th>
								<form method="post" action="{{ route('student.profile.remove.publication2') }}">
									@csrf @method('put')
									<a href="/storage/{{ str_replace("public/", "", $user->student_info->publication2_url) }}" class="btn btn-primary" download @if(!$user->student_info->publication2_url) hidden @endif><span class="fa fa-download"></span> Download</a>  <button class="btn btn-danger" @if(!$user->student_info->publication2_url) disabled @endif> <span class="fa fa-trash"></span> Remove</button>
								</form>
							</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection