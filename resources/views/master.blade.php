-<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-based Ecosystem (OnCE)</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
        <div class="row nav-row trans-menu navbar navbar-fixed-top" style="position:fixed; top:0 ; left : ; background:black;">
            <div class="container nav-container">
				<div class="top-navbar">
					<div class = "pull-right">
						<div class="top-nav-social pull-left">
								<a href="https://www.facebook.com/citedfpum"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/CITeD14"><i class="fa fa-twitter"></i></a>
								<a href="https://www.youtube.com/channel/UCv2nJkf5Zg4i1c3ImlC6CVQ?view_as=subscriber"><i class="fa fa-youtube"></i></a>
								{{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
						</div>
						<div class="top-nav-login-btn pull-right">
              @if (Auth::guest())

              <a href="login"><i class="fa fa-sign-in"></i>LOGIN/REGISTER</a>
              @else

                <a href="{{route('logout')}}" target="_blank"><i class="fa fa-sign-in"></i>LOG OUT</a>
              @endif

						</div>

					</div>
					<div class = "clearfix"></div>
				</div>
				<!--<div class="logo"><a href="#"><img src="assets/img/cited.jpg" alt="CITeD"></a></div>
				--><div class = "clearfix"></div>
                <nav id="pathshalaNavbar" class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pathshalaNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="pull-right"><img src="assets/img/once.png" width="100px" height="100px">  </div>
                        <!--<a class="navbar-brand" href="home">Online Community-based <br/> Ecosystem (OnCE)</a>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pathshalaNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="home"><i class="fa fa-home"></i>HOME</a></li>

                            <li><a href="management"><i class="fa fa-tasks"></i>MANAGEMENT </a>
                            </li>
@if (Auth::guest())

<li><a href="commercial"><i class="fa fa-industry"></i>TECHNOSPHERE</a></li>
@else
							<li class="dropdown">
                                <a href="commercial"><i class="fa fa-industry"></i>TECHNOSPHERE<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                	 <li><a href="intechpro"><i class="fa fa-calendar"></i>INTECHPRO</a></li>
                                    <li><a href="inventor"><i class="fa fa-calendar"></i>INVENTOR'S HUB</a></li>
                                    <li><a href="intech"><i class="fa fa-calendar-o"></i>INTECH</a></li>
                                    <li><a href="stationhome"><i class="fa fa-calendar-o"></i>STATION</a></li>
                                </ul>
                            </li>
                            @endif
                            <li class="dropdown">
                                <a href="networking" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-wifi"></i>NETWORKING <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="social"><i class="fa fa-user-secret"></i>SOCIAL NETWORK</a></li>
									<li><a href="broadcast"><i class="fa fa-user"></i>BROADCAST NETWORK</a></li>
                                </ul>
                            </li>
						 <li><a href="contact"><i class="fa fa-phone-square"></i>CONTACT US</a></li>

                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>


       @yield('content')

		<div class="row apply-know-row">
			<div class="container">
				<div class="col-sm-6 admission-row">
					<h3>REGISTER TO BE A MEMBER</h3>
					<p>Register today to join our learning community.</p>
					<a href="register"><i class="fa fa-edit"></i>REGISTER</a>
				</div>
				<div class="col-sm-6 info-row">
					<h3>HAVE ANY QUERIES?</h3>
					<p>Contact our friendly help desk for enquiries today</p>
					<div class="input-wrapper">
						<input type="text" placeholder="e.g. email@once.com"/><a href="#"><i class="fa fa-paper-plane"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Section -->
		<div class="row footer-row">
			<div class="container">
				<div class="school-logo">
					<i class="fa fa-graduation-cap"></i>
					<h3>UNIVERSITI MALAYA</h3>
					<h6>BETTER WAY TO LEARN & GROW</h6>
				</div>
				<div class="col-md-4 col-sm-6 footer-item">
					<h5>CONTACT US</h5>
					<p><i class="fa fa-map-marker"></i>Jalan SS 7/2</p>
					<p><i class="fa fa-mobile"></i> +60367100891</p>
					<p><i class="fa fa-envelope"></i>email@once.com</p>
				</div>
				<div class="col-md-2 col-sm-6 footer-item">
					<h5>QUICK LINKS</h5>
					<div class="quick-link-box">
						<a href="management"><i class="fa fa-graduation-cap"></i>MANAGEMENT</a>
						<a href="stationhome"><i class="fa fa-users"></i>STATION</a>
						<a href="commercial"><i class="fa fa-calendar"></i>TECHNOSPHERE</a>
						<a href="networking"><i class="fa fa-thumbs-up"></i>NETWORKING</a>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>

				<div class="col-md-3 col-sm-6 footer-item">
					<h5>SUBSCRIBE</h5>
					<div class="footer-subscribe">
						<i class="fa fa-envelope"></i></a><input type="text" placeholder="admin@once.com" />
					</div>
					<a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
				</div>
			</div>
			<div class="footer-social-row">
				<a href="https://www.facebook.com/citedfpum"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/CITeD14"><i class="fa fa-twitter"></i></a>
				<a href="https://www.youtube.com/channel/UCv2nJkf5Zg4i1c3ImlC6CVQ?view_as=subscriber"><i class="fa fa-youtube"></i></a>
			</div>
		</div>

		<!-- Login Modal -->
		<!-- Modal -->
		<div class="modal fade" id="loginModal" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content login-modal">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN/REGISTER</h4>
					</div>
					<div class="modal-body">
            <form method="post" action="{{url('mylogin')}}">
              {{ csrf_field() }}
						<div>
							<label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
							<input class="form-control" name="username" type="text" placeholder="Username/Email">
						</div>
						<div>
							<label><i class="fa fa-key"></i>PASSWORD</label>
							<input class="form-control" name="password" type="password" placeholder="Password">
						</div>
						<a href="#" class="forgot-link">FORGOT PASSWORD?</a>
						<button type="submit" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</button>
          </form>
					</div>
				</div>
			</div>
		</div>
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>
        <!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/js.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
