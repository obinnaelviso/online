@extends('dashboard.adminmaster')

@section('content')


<form action="{{url('addlecturernote')}}" method="post" enctype="multipart/form-data">
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


											<label for="category">Select Lecturer</label>
  <select id="lecturer" name="lecturer" onchange="countryChange(this);">
    <option value="empty">Select a Lecturer</option>
    <option value="Dr. Rafiza Abdul Razak">Dr. Rafiza Abdul Razak</option>
    <option value="Dr. Mohd Shahril">Dr. Mohd Shahril</option>
    <option value="Dr. Siti Hajar">Dr. Siti Hajar</option>
    <option value="Dr. Chin Hai Leng">Dr. Chin Hai Leng</option>
    <option value="Dr. Umi Kalsom Mohd Salleh">Dr. Umi Kalsom Mohd Salleh</option>
    <option value="Dr. Tee Meng Yew">Dr. Tee Meng Yew</option>
    <option value="Dr. Dorothy Dewitt">Dr. Dorothy Dewitt</option>
    <option value="AP Dr. Norlidah">AP Dr. Norlidah </option>
    <option value="Dr Farahdinah Yusof">Dr Farahdinah Yusof</option>
    <option value="Mr. Hashlani Md. Saad">Mr. Hashlani Md. Saad</option>
  </select>
  <br/>
  <label for="country">Select a Document</label>
  <select id="document" name="document">
  	<option value="empty">Select</option>
   <option value="note">Lecture Note</option>
    <option value="documents">Lecture Documents</option>
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
