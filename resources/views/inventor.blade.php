@extends('master')

@section('content')

		 <div class="row">
            <div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#homeSlider" data-slide-to="1"></li>
					<li data-target="#homeSlider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/img/slider/inventos.jpg" alt="slide1">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/inventor3.jpg" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/inventor1.jpg" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                           <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Slide Controls -->
                <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
		<!-- Academics Section -->
		<div class="row section-row">
			<div class="container">
				<div class="col-sm-4 col-md-3">
					<div class="academic-nav-box">
						<h5><i class="fa fa-code"></i>QUICK LINKS</h5>
						<div class="academic-nav-inner-box">
							<a href="intechpro" target="_blank"><i class="fa fa-video-camera"></i>InTechPro</a>
							<a href="#"><i class="fa fa-trophy"></i>Inventor's Hub</a>
							<a href="intech" target="_blank"><i class="fa fa-users"></i>InTecH</a>
							<a href="" target="_blank"><i class="fa fa-book"></i>Immensive Learning Studio</a>
							<a href="stationhome" target="_blank"><i class="fa fa-book"></i>Station</a>
						</div>
					</div>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="academic-content-box">
						<h3>OUR INVENTORS' HUB</h3>
						<p>Inventors Hub is a place for inventors, makers and entrepreneurs to collaborate and innovate. The inventor’s hub allows access to the developments inventors have for exhibition, virtual reality, activities organised, as well as gallery, and booking of space</p>
						<div class="section-divider"></div>
						<h3>CALENDER OF ACTIVITIES</h3>
						<p>As a digital production studio for online television and radio broadcasting, we have activities you may be interested in joining below; </p>
						<table class="academic-calendar">
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Mar 31, 2017 - Sat, Apr 20, 2017
								</td>
							</tr>
							<tr>
								<td>
									Admission for the Session 2017 - 2018.
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
								</td>
							</tr>
							<tr>
								<td>
									Freshman Induction Program for newly joined student.
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
								</td>
							</tr>

						</table>
						<a href="#" class="download-calendar"><i class="fa fa-download"></i>DOWNLOAD CALENDAR</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row page-title page-title-about">
		<div class="container">
				<h2><i class="fa fa-picture-o"></i>INVENTORS' HUB</h2>
			</div>
		</div>
<!-- START: GALLERY -->
		<div class="row gallery-row">
			<div class="container clear-padding">
				<div class="image-set">
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/inventor4.jpg" alt="Inventor">
							<div class="img-caption">
								<div class="link">
									<a title="Fine Arts" href="assets/img/inventor4.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/inventor5.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/inventor5.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/slider/inventor.jpg" alt="inventor">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/slider/inventor.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/inventor8.jpg" alt="inventor">
							<div class="img-caption">
								<div class="link">
									<a title="Fine Arts" href="assets/img/inventor8.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/inventor9.jpg" alt="Inventor">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/inventor9.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="assets/img/inventor3.jpg" alt="Inventor">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/inventor3.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: GALLERY -->
<div class="section-divider"></div>
<!-- book row -->

<form action="{{ route('inventor') }}" method="post">
{{ csrf_field() }}
<div class="container-fluid row contact-row">
	<div class="container">
		<div class="contact-form col-sm-6">
			<div class="col-xs-12">
				<h3><i class="fa fa-edit"></i>BOOK OUR SPACE TODAY.</h3>
				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
						<h4 style="color:red">*{{$error}}</h4>
					@endforeach
				  @endif
				  @if(session()->has('success'))
			          <div class="alert alert-danger">
			            {{ session()->get('success') }}
			          </div>
			        @endif
			</div>
			<div class="col-xs-6">
				<label>FIRST NAME</label>
				<input type="text" placeholder="First Name" class="form-control" name="firstname">
			</div>
			<div class="col-xs-6">
				<label>LAST NAME</label>
				<input type="text" placeholder="Last Name" class="form-control" name="lastname">
			</div>
			<div class="clearfix"></div>
				<div class="col-xs-12">
				<label>ARE YOU A UM STAFF, A UM STUDENT OR A MEMBER OF THE PUBLIC?</label>
					<div class="radio">
					<label><input type="radio" name="user_type" value="um_student" checked> UM STUDENT</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="user_type" value="um_lecturer"> UM LECTURER</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="user_type" value="public">PUBLIC</label>
				</div>
			</div>
			<div class="col-xs-12">
				<label>IDENTIFICATION NUMBER</label>
				<input type="text" placeholder="Identification Number" class="form-control" name="idnum">
			</div>
			<div class="col-xs-12">
				<label>EMAIL</label>
				<input type="text" placeholder="Email" class="form-control" name="email" id="email">
			</div>
			<div class="col-xs-12">
				<label>NUMBER OF HOURS (Maximum of 5)</label>
				<input type="number" name="hours" min="1" max="5" class="form-control">
			</div>
			<div class="col-xs-12">
				<label>CHOOSE A DATE AND TIME</label>
				<input type="datetime-local" name="date_time" class="form-control">
			</div>
			<div class="col-xs-12">
				<label>PURPOSE OF BOOKING</label>
				<textarea type="text-area" name="purpose" class="form-control" rows="4" cols="50"></textarea>
			</div>
			<div class="col-xs-12">
				<label>NUMBER OF USERS (Maximum of 20)</label>
				<input type="number" name="users_count" min="1" max="20" class="form-control">
			</div>
			<div class="col-xs-12">
				<button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> BOOK ROOM</button>
			</div>
			<div class="clearfix"></div>

		</div>

	</div>
</div>
</form>
			@endsection
