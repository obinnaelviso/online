@extends('master')

@section('content')


		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
		<!--		<h2><i class="fa fa-phone"></i>GET IN TOUCH</h2>-->
			</div>
		</div>

		<!-- contact row -->
		<div class="row contact-row">
			<div class="container">
				<div class="contact-form col-sm-6">
					<div class="col-xs-12">
						<h3><i class="fa fa-edit"></i>WRITE TO US.</h3>
					</div>
					<div class="col-xs-6">
						<label>FIRST NAME</label>
						<input type="text" placeholder="First Name" class="form-control">
					</div>
					<div class="col-xs-6">
						<label>LAST NAME</label>
						<input type="text" placeholder="Last Name" class="form-control">
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-12">
						<label>EMAIL</label>
						<input type="text" placeholder="Email" class="form-control">
					</div>
					<!--<div class="col-xs-12">
						<label>EMAIL</label>
						<input type="text" placeholder="Email" class="form-control">
					</div>-->
					<div class="col-xs-12">
						<label>CONTACT REGARDING</label>
						<select class="form-control">
							<option>- Select -</option>
							<option>Query regarding contributing </option>
							<option>Query regarding partnership </option>
							<option>Others</option>
						</select>
					</div>
					<div class="col-xs-12">
						<label>YOUR MESSAGE</label>
						<textarea rows="3" placeholder="Write here" class="form-control"></textarea>
					</div>
					<div class="col-xs-12">
						<a href="#" class="submit-contact-form"><i class="fa fa-paper-plane"></i> SEND</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-6 address-box">
					<h3><i class="fa fa-phone"></i>CONTACT US.</h3>
					<div class="address-body">
						<div class="address-item">
							<div class="col-xs-1">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="col-xs-11">
								<p>OnCE, Universiti Malaya</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item">
							<div class="col-xs-1">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="col-xs-11">
								<p>info@once.com</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item">
							<div class="col-sm-1">
								<i class="fa fa-phone"></i>
							</div>
							<div class="col-xs-11">
								<p>+601234567890</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item no-border">
							<div class="col-xs-1">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="col-xs-11">
								<p>MON to FRI: 09:00 AM - 03:00 PM </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>  <br/> <br/> <br/> <br/>
<div class="container">
	<h2>Visit Us</h2>
	<div style="width: 100%"><iframe width="100%" height="600"
		src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=50603%20Kuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur+(CiTED)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />
</div>

			</div>
		</div>
    @endsection
