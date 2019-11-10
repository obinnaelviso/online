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
                        <img src="assets/img/slider/broad1.jpg" alt="slide1">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                        <!--    <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/broa.jpg" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                    <!--        <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/broad.jpg" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                        <!--   <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
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
		<div class="section-divider"></div>

		<div class="row ">
			<div class="container">
				<div class="col-sm-6 admission-row">
					<center><h3>WATCH OUR VIDEOS</h3></center>
					<iframe width="530" height="345" src="https://www.youtube.com/embed/MsKwFrBX-ZI">
					</iframe>
				</div>
				<div class="col-sm-6 info-row">
					<center><h3>LISTEN TO OUR RADIO</h3></center>
					<iframe sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups" scrolling=no width="530" height="185" frameborder="0" src="https://embed.radiopublic.com/e?if=educate-GqzxO1"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- Our Teaacher section -->




  @endsection
