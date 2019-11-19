@extends('dashboard.lecturermaster')

@section('content')


<form action="{{url('borangpemetaan')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i> ADD BORANG 
</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<div class="inner-item">
										<div class="dash-form">
											@if(count($errors) > 0)
												@foreach($errors->all() as $error)
												<h4 style="color:red">*{{$error}}</h4>
												@endforeach
										@endif
										@if(session()->has('success'))
												<div class="alert alert-success">{{ session()->get('success') }}</div>
											@endif





											<label for="faculty">Akademik / Fakulti / Pusat</label>
										  <select id="faculty" name="faculty">
										  	<option value="empty">Select</option>
										   <option value="Pendidikan">Pendidikan</option>
										<!--    <option value="Session 2020/20210">Session 2020/2021</option>-->
										   </select>
<br/>
<label for="session">Select a Session</label>
<select id="session" name="session">
	<option value="empty">Select</option>
 <option value="Session 2019/2020">Session 2019/2020</option>
	<option value="Session 2020/2021">Session 2020/2021</option>
 </select>
 <br>
<label for="semester">Select a Semester</label>
<select id="semester" name="semester">
	<option value="empty">Select</option>
 <option value="Semester 1">Semester 1</option>
	<option value="Semester 2">Semester 2</option>
 </select>

 <label for="jabatan">Jabatan</label>
 <input type="text" name="jabatan" value=""><br><br>


	<label for="course">Course</label>
	<input type="text" name="course" value=""><br><br>


	<label for="input">Enter description</label>
 <input type="text" name="description" value=""><br><br>
 <label for="borangfile">Select file to upload:</label>
	<input type="file" name="borangfile" id="borangfile">
  <input type="hidden" name="userid" value="{{Auth::user()->id}}" hidden>
   <input type="submit" value="Submit" name="submit">

										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
</form>
@endsection