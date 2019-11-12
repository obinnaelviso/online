@extends('dashboard.lecturermaster')

@section('content')


<form action="{{ route('ctes') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i> ADD CTES</h5>
							<div class="section-divider"></div>
						</div>
					</div>



					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
							<!--<h6 class="item-title"><i class="fa fa-plus-circle"></i>LECTURER'S DOCUMENTS</h6>-->
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
											@if(session()->has('success'))
												<div class="alert alert-success">{{ session()->get('success') }}</div>
											@endif



										 <label for="student">Student</label>
										  <select id="student" name="student">
										  	<option value="empty">Select</option>
										  	@foreach($students as $student)
										    	<option value="{{ $student->id }}">{{ ucfirst($student->firstname.' '.$student->lastname) }}</option>
										    @endforeach
										   </select>
<br/>
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


<!--	 <label for="kod">Kod / Tajuk Kursus (Jam Kredit)</label>
	<input type="text" name="kod" value=""><br><br>

	<label for="pemberatan">Pemberatan</label>
 <input type="text" name="pemberatan" value=""><br><br>

 <label for="Pemeriksa">Pemeriksa</label>
<input type="text" name="pemeriksa" value=""><br><br>

<label for="Penyaring">Penyaring</label>
<input type="text" name="penyaring" value=""><br><br>

<table class="table table-bordered">
  <thead>
		<tr>
      <th colspan="4" class="pull-center">PEMERIKSA</th>
      <th colspan="2">PENYARING</td>

    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hasil Pembelajaran(Learning Outcomes, LO)</th>
      <th scope="col">Kaedah Penilaian</th>
      <th scope="col">Soalan Peperiksaan Berkaitan LO</th>
			<th scope="col">Kesesuaian Soalan Dengan LO (Ya / Tidak / *TB) </th>
      <th scope="col">Pandangan Tambahan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="text" name="hasil1" value=""><br><br></td>
      <td><input type="text" name="kaedah1" value=""><br><br></td>
      <td><input type="text" name="soalan1" value=""><br><br></td>
			<td><input type="text" name="kesesuaian1" value=""><br><br></td>
			<td><input type="text" name="pandangan1" value=""><br><br></td>
    </tr>
    <tr>
      <th scope="row">2</th>
			<td><input type="text" name="hasil2" value=""><br><br></td>
      <td><input type="text" name="kaedah2" value=""><br><br></td>
      <td><input type="text" name="soalan2" value=""><br><br></td>
			<td><input type="text" name="kesesuaian2" value=""><br><br></td>
			<td><input type="text" name="pandangan2" value=""><br><br></td>
    </tr>
    <tr>
      <th scope="row">3</th>
			<td><input type="text" name="hasil3" value=""><br><br></td>
      <td><input type="text" name="kaedah3" value=""><br><br></td>
      <td><input type="text" name="soalan3" value=""><br><br></td>
			<td><input type="text" name="kesesuaian3" value=""><br><br></td>
			<td><input type="text" name="pandangan3" value=""><br><br></td>
    </tr>
		<tr>
			<th scope="row">4</th>
			<td><input type="text" name="hasil4" value=""><br><br></td>
			<td><input type="text" name="kaedah4" value=""><br><br></td>
			<td><input type="text" name="soalan4" value=""><br><br></td>
			<td><input type="text" name="kesesuaian4" value=""><br><br></td>
			<td><input type="text" name="pandangan4" value=""><br><br></td>
		</tr>
  </tbody>
</table> -->


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
