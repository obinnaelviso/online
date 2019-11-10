@extends('dashboard.adminmaster')

@section('content')


<form action="{{url('addlecturernote')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>ADMIN DOCUMENTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADMIN'S DOCUMENTS</h6>
									<div class="inner-item">
										<div class="dash-form">


											@if(count($errors) > 0)


											@foreach($errors->all() as $error)

											<h4 style="color:red">*{{$error}}</h4>


											@endforeach





											@endif


											<label for="category">Select Document to Upload</label>
  <select id="document" name="document" onchange="countryChange(this);">
    <option value="empty">Select Document to Upload</option>
    <option value="Curriculum Review">Curriculum Review</option>
    <option value="PSAR Documents">PSAR Documents</option>
    <option value="Conference">Conference</option>
    <option value="Workshop/Seminar">Workshop/Seminar</option>
    <option value="Exposition">Exposition</option>
    <option value="MOU/MOA">MOU/MOA</option>
  </select>
  <br/>
  <label for="country">Select a Year</label>
  <select name="Year">
<option>- Year -</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
   </select>

    <label for="input">Enter description </label>
   <input type="text" name="description" value=""><br><br>
   Select file to upload:
    <input type="file" name="adminfile" id="adminfile">
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
