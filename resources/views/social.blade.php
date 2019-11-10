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
                        <img src="assets/img/slider/social.jpg" class="navy" alt="slide1">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/slide5.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/social2.jpg" class="navy" alt="slide2">
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

		<!-- Principal Intro Section -->
		<div class="section-divider"></div>
		<div class="row ">
			<div class="container">
				<div class="col-sm-12 admission-row">
					<center><h3>SOCIAL NETWORK</h3></center>
					<p>Register today to join our learning community.</p>
					<div class="fb-page"
					  data-href="https://www.facebook.com/citedfpum"
					  data-width="380"
					  data-hide-cover="false"
					  data-show-facepile="false">
					  <a href="http://www.facebook.com/citedfpum">Follow us on facebook</a>
            <a href="http://www.facebook.com/citedfpum" style="background: #3B5998; color: white; padding: 10px; font-size: 30px;  width: 30px; border-radius: 20%; margin: 5px 2px;" 
            class="fa fa-facebook"></a>
					</div>
				</div>

			</div>
		</div>
		<div class="section-divider"></div>
		<!-- Events Section -->

		<!-- Our Teaacher section -->

	<br/>
	<div class="section-divider"></div>


		@endsection
