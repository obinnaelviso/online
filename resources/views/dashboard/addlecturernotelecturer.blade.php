@extends('dashboard.lecturermaster')

@section('content')


<form action="{{url('addlecturernotelecturer')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>Lecturer's Documents and Notes</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>LECTURER'S DOCUMENTS</h6>
									<div class="inner-item">
										<div class="dash-form">
											<!--<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-calendar"></i>CATEGORY</label>
												<select>
													<option>-- Select --</option>
													<option>ACADEMIC</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
												</select>
											</div>-->

											@if(count($errors) > 0)


											@foreach($errors->all() as $error)

											<h4 style="color:red">*{{$error}}</h4>


											@endforeach





											@endif
											<label for="country">Select a Session</label>
										  <select id="session" name="session">
										  	<option value="empty">Select</option>
										   <option value="Session 2019/2020">Session 2019/2020</option>
										    <option value="Session 2020/20210">Session 2020/2021</option>
										   </select>
<br/>
<label for="country">Select a Semester</label>
<select id="semester" name="semester">
	<option value="empty">Select</option>
 <option value="Semester 1">Semester 1</option>
	<option value="Semester 2">Semester 2</option>
 </select>
											<label for="category">Select Course</label>
  <select id="course" name="course" onchange="countryChange(this);">
    <option value="empty">Select a Course</option>
    <option value="Research Methodolgy">Research Methodolgy</option>
    <option value="Early Childhood Educationy">Early Childhood Education</option>
    <option value="Administrative Studies">Administrative Studies</option>

  </select>
  <br/>
  <label for="country">Select a Document</label>
  <select id="document" name="document">
  	<option value="empty">Select</option>
   <option value="Lecture Note">Lecture Note</option>
    <option value="Lecture Documents">Lecture Documents</option>
   </select>

    <label for="input">Enter description </label>
   <input type="text" name="description" value=""><br><br>
   Select file to upload:
    <input type="file" name="lecturefile" id="lecturefile">
		<!-- to attach user id to a request -->
  <input type="hidden" name="userid" value="{{Auth::user()->id}}" hidden>
   <input type="submit" value="Submit" name="submit">

										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
</form>
@endsection
