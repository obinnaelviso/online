@extends('master')

@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>


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
                        <img src="assets/img/slider/net.jpg" class="navy" alt="slide1">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>

                   <div class="item">
                        <img src="assets/img/slider/slide3.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
							<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>
                            <h2>EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
					<div class="item">
                        <img src="assets/img/slider/ne.jpg" class="navy" alt="slide2">
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
		<div class="row apply-know-row">
			<div class="container">
				<div class="col-sm-6 admission-row">
					<h3>SOCIAL NETWORK</h3>
					<p>Register today to join our learning community.</p>
					<a href="social" target="_blank"><i class="fa fa-facebook"></i>JOIN US</a>
				</div>
				<div class="col-sm-6 admission-row">
					<h3>BROADCAST NETWORK</h3>
					<p>Watch and Listen to us now</p>
					<div class="input-wrapper">
						<a href="broadcast" target="_blank"><i class="fa fa-television"></i>WATCH NOW</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-divider"></div>
		<!-- Events Section -->
		<br/>
		<div class="section-divider"></div>
				<div class="section-divider"></div>
				<div class="container">
					<button class="accordion accordion-header"><h4><i class="fa fa-facebook"></i> &nbsp; &nbsp; SOCIAL NETWORK</h4></button>
						<div class="panel">
              <div class="fb-page"
              data-tabs="timeline,events,messages"
    data-href="https://www.facebook.com/citedfpum"
    data-width="340"
    data-hide-cover="false"
    data-show-facepile="true"></div>
 							 </div>

				<button class="accordion accordion-header"><h4><i class="fa fa-television"></i> &nbsp; &nbsp; ONLINE TELEVISION</h4></button>
				<div class="panel">
 					 <p> Follow and Watch more on our TV, <a href="https://www.youtube.com/watch?v=MsKwFrBX-ZI&feature=youtu.be" target="_blank">here</a>. </p>
           <video width="500px" controls>
 <source src="assets/img/tv.mp4" type="video/mp4">
 <source src="mov_bbb.ogg" type="video/ogg">

</video>

</div>

				<button class="accordion accordion-header"><h4><i class="fa fa-wifi"></i> &nbsp; &nbsp; ONLINE RADIO</h4></button>
<div class="panel">
  <p> Our online radio is one of a kind, our radio broadcasts are educative.</p>
  <iframe sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups" scrolling=no width="530" height="185" frameborder="0" src="https://embed.radiopublic.com/e?if=educate-GqzxO1"></iframe>


</div>
</div>

@endsection

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
