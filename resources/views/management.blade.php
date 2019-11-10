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
                        <img src="assets/img/slider/mag2.jpg" class="navy" alt="slide1">
                        <div class="carousel-caption">
						<!--	<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                          <!--  <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/slide51.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
					<!--		<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <!--  <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                              <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/mag.jpg" class="navy" alt="slide3">
                        <div class="carousel-caption">
						<!--	<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                           <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                           <!--  <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                             <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
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

		<!-- Principal Intro Section -->

		<!-- Events Section -->
		<div class="section-divider"></div>
		<div class="container">
			<div class="row contact-row">
			<div class="container">
				<div class="contact-form col-sm-6">
					<div class="col-xs-12">
						<h3><i class="fa fa-user"></i>ARE YOU AN ADMIN? <a href="login"><i class="fa fa-sign-in"></i>LOGIN</a> TO ACCESS MANAGEMENT</h3>
						<h5>Check with your administrator for your login details</h5>
					</div>

				</div>
        <div class="contact-form col-sm-6">
          <div class="col-xs-12">
            <h3><i class="fa fa-user"></i>VISIT OUR  <a href="/station"><i class="fa fa-sign-in"></i>STATION</a> FOR FREE BOOKS AND JOURNALS</h3>
            <h5>Books, journals, publications, projects, etc.</h5>
          </div>

        </div>
			</div>
		</div>

		</div>

	@endsection
