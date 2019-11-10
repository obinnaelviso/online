@extends('dashboard.lecturermaster')

@section('content')


<form action="{{url('borangpenyaringan')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>PENYARINGAN KERTAS SOALAN PEPERIKSAAN/UJIAN
</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
							<!--		<h6 class="item-title"><i class="fa fa-plus-circle"></i>LECTURER'S DOCUMENTS</h6>-->
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


											<div class="row">
											    <div class="col-sm-6">
														<label for="akedemik">Sesi Akademik </label>
 		 										  <input type="text" name="akademik" value=""><br><br>
											    </div>
											    <div class="col-sm-6">
														<label for="semester">Semester</label>
 													 <input type="text" name="semester" value=""><br><br>
											    </div>
											</div>
											<div class="row">
													<div class="col-sm-6">
														<label for="kodkursus">Kod Kursus  </label>
													<input type="text" name="kodkursus" value=""><br><br>
													</div>
													<div class="col-sm-6">
														<label for="tujukkursus">Tajuk Kursus </label>
													 <input type="text" name="TajukKursus" value=""><br><br>
													</div>
											</div>
<p>Saya telah menyaring soalan peperiksaan/ujian ini dan mencadangkan perkara di
	 bawah untuk meningkatkan lagi kualiti soalan peperiksaan/ujian yang disediakan (jika ada) </p>

<br/>

 <br>
<label for="format">1. Format :</label>
<input type="text" name="format" value=""><br><br>

 <label for="tatabahasa">2.	Tatabahasa :</label>
 <input type="text" name="tatabahasa" value=""><br><br>


	<label for="keselarasan">3.	Keselarasan versi BM dengan versi BI : </label>
	<input type="text" name="keselarasan" value=""><br><br>

	 <label for="Soalan">4.	Soalan yang disediakan menepati matriks hasil pembelajaran : </label>
	<input type="textarea" name="Soalan" value=""><br><br>

	<label for="Kejelasan">5. 	Kejelasan : </label>
 <input type="text" name="Kejelasan" value=""><br><br>

 <label for="Skema">6.	Skema Permakahan :</label>
<input type="text" name="Skema" value=""><br><br>

<label for="NamaPenyaring">Nama Penyaring: </label>
<input type="text" name="NamaPenyaring" value=""><br><br>

<div class="row">
		<div class="col-sm-6">
			<label for="Tandatangan">Tandatangan:  </label>
		<input type="text" name="Tandatangan" value=""><br><br>
		</div>
		<div class="col-sm-6">
			<label for="Tarikh">Tarikh : </label>
	 <input class="form-control" type="date" value="" id="example-date-input">
		</div>
</div>
<p class="font-weight-bold text-center"> PENGESAHAN PINDAAN PENYARINGAN KERTAS SOALAN
PEPERIKSAAN/UJIAN
</p>
<br>
 <p class="text-justify">Saya <input type="text" name="saya" value=""><br><br> telah menyemak pindaan
	 kepada cadangan yang telah dikemukakan dan mengesahkan bahawa pindaan untuk
	 meningkatkan kualiti soalan peperiksaan/ujian telah dilakukan. </p>

	 <label for="Ketua">Ketua Jabatan:</label>
	 <input type="text" name="Ketua" value=""><br><br>

	 <label for="Tarikh:">Tarikh: </label>
	   <input class="form-control" type="date" value="" id="example-date-input">
<br>
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
