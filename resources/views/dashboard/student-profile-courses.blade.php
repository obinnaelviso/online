@extends('dashboard.studentmaster')

@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>STUDENT COURSE REGISTRATION</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="mb-5">
			@if(session()->has('success'))
				<div class="col-md-8">
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				</div>
			@endif
			<div class="col-md-8">
				@if($errors->any())
	                  @foreach($errors->all() as $error)
	                  	<div class="alert alert-danger" role="alert">
	                    	{{ $error }}
	                    </div>
	                  @endforeach
		            </div>
	         	@endif
			</div>
			<form action="{{ route('student.profile.courses') }}" method="post">
				@csrf
				@if($courses->count() < 1)
					<div class="col-md-9 mb-4">
						<div class="alert alert-warning" role="alert">
							Please you need to register a minimum of 2 courses.
						</div>
					</div> 
				@endif
				@if($courses->count() >= 9)
					<div class="col-md-8 mb-4">
						<div class="alert alert-danger" role="alert">
					        Sorry, but you cannot register any more courses.
					    </div>
					</div>
				@else
					<div class="col-md-6 mb-4">
						<label for="course">Course Name</label>
						<input type="text" name="course" id="course" class="form-control" required max="255">
					</div>
					<div class="col-md-12 mb-4">
						<div class="input-group">
							<input type="checkbox" name="semester1" value="yes"> Semester 1 
							<input type="checkbox" name="semester2" value="yes"> Semester 2
						</div>
					</div>
					<div class="col-md-12 mb-4">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				@endif
			</form>		
		</div>
		<div class="clearfix"></div>
		<div class="row ml-2">
			<div class="col-md-12">
				<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Course Name</th>
							<th>Semester 1</th>
							<th>Semester 2</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($courses as $course)
							<tr>
								<th>{{ $course->course }}</th>
								<th>@if($course->semester1)<div class="label label-success">YES</div> @else <div class="label label-danger">NO</div> @endif</th>
								<th>@if($course->semester2)<div class="label label-success">YES</div> @else <div class="label label-danger">NO</div> @endif</th>
								<th><a class="btn btn-warning" href="javascript:void" data-toggle="modal" data-target="#editDetailModal_{{ $course->id }}"> Edit</a> @include('dashboard.student-profile-courses-edit')</th>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection