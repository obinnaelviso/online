@extends('dashboard.adminmaster')

@section('content')



<form action="{{url('addbookprocess')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>Products</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>Products </h6>
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


											<label for="category">Select Product Category</label>
  <select id="bookcategory" name="bookcategory" onchange="countryChange(this);">
    <option value="empty">Select a Product Category</option>
    <option value="invention">Invention</option>
    <option value="journal">Journal</option>
    <option value="book">Book</option>

  </select>
  <br/>


    <label for="input">Enter Product Name </label>
   <input type="text" name="bookname" value=""><br><br>
	 <br/>

	 <label for="input">Enter Product Author </label>
	<input type="text" name="bookauthor" value=""><br><br>
	<br/>

	 <label for="input">Enter Product Price </label>
	<input type="number" name="bookprice" value=""><br><br>
	<br/>

	<label for="input">Enter Product Description </label>
 <input type="textarea" name="bookdesc" value=""><br><br>
 <br/>

 <label for="input">Enter Year Created</label>
<input type="text" name="bookyear" value=""><br><br>
<br/>

   Select product to upload:
    <input type="file" name="bookfile" id="bookfile">

		Select Cover Image to upload:
		 <input type="file" name="coverimage" id="coverimage">
   <input type="submit" value="Submit" name="submit">

										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
</form>
@endsection
