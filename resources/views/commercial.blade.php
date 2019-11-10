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
                        <img src="assets/img/slider/co.jpg" class="navy" alt="slide1">
                        <div class="carousel-caption">
							<h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
							<large><h1><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h1></large>

                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provide the best education <br />  </p>
                           <!-- <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/com.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
							<h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
							<large><h1><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h1></large>

                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provide the best education <br />  </p>
                           <!-- <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/slide61.jpg" class="navy" alt="slide2">
                       <div class="carousel-caption">
							<h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
							<large><h1><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h1></large>

                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provide the best education <br />  </p>
                           <!-- <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
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


		<!-- Events Section -->

		<div class="row section-row evets-row">
			<div class="container">
				<div class="">
					<div class="academic-content-box">
					<center>
						<h3>EVENTS CALENDAR</h3>
						<p>Our Upcoming Events.</p>
						<img class="curriculum-img" width="330" height="300" src="assets/img/cited.jpg" alt="preschool" />

						<div class="section-divider"></div>


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
									<i class="fa fa-calendar"></i>Mon, Aug 20, 2017 - Sat, Sep 01, 2017
								</td>
							</tr>
							<tr>
								<td>
									Mid Term Examination.
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Sep 02, 2017 - Sat, Sep 05, 2017
								</td>
							</tr>
							<tr>
								<td>
									Holidays (School will remain closed)
								</td>
							</tr>
						</table>
					<!--	<a href="#" class="download-calendar" onclick=saveFile() value='Save Text Box' ><i class="fa fa-download"></i>DOWNLOAD CALENDAR</a>
-->
					</div>
				</div>
				</center>
			</div>
		</div>

		<br/>

	<div class="section-divider"></div>
		<!-- Know More Info & Admission apply row -->
		<div class="row apply-know-row">
			<div class="container">
				<div class="col-sm-3 admission-row">
					<h3>InTechPro</h3>
					<p>Register today to join our <br/> learning digital broadcasting studio.</p>
          @if (Auth::guest())

          <a href="login"><i class="fa fa-sign-in"></i>LOGIN</a>
          @else

            <a href="{{route('logout')}}"><i class="fa fa-sign-in"></i>LOG OUT</a>
          @endif
				</div>
				<div class="col-sm-3  admission-row">
					<h3>Inventor's <br/> Hub</h3>
					<p>Register today to join our inventor's hub community.</p>
          @if (Auth::guest())

          <a href="login"><i class="fa fa-sign-in"></i>LOGIN</a>
          @else

            <a href="{{route('logout')}}"><i class="fa fa-sign-in"></i>LOG OUT</a>
          @endif

				</div>
				<div class="col-sm-3  admission-row">
					<h3>InTech</h3>
					<p>Register today to join our professional development community.</p>
          @if (Auth::guest())

          <a href="login"><i class="fa fa-sign-in"></i>LOGIN</a>
          @else

            <a href="{{route('logout')}}"><i class="fa fa-sign-in"></i>LOG OUT</a>
          @endif

				</div>
				<div class="col-sm-3  admission-row">
					<h3>Immensive Learning Studio</h3>
					<p>Register today to join our learning Studio.</p>

          @if (Auth::guest())

          <a href="login"><i class="fa fa-sign-in"></i>LOGIN</a>
          @else

            <a href="{{route('logout')}}"><i class="fa fa-sign-in"></i>LOG OUT</a>
          @endif
				</div>
			</div>
		</div>

		@endsection
