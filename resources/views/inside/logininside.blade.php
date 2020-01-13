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
        <style>
      body
      {background-color: black;
      }

      img {
    max-width: 100%;
    }
      .how-section1{
    margin-top:-15%;
    padding: 10%;
    }
    .how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
    }

    .text-muted {
    color: #ffffff;
    }
    .how-section1 .subheading{
    color: yellow;
    font-size: 20px;
    }
    .how-section1 .row
    {
    margin-top: 10%;
    }
    .how-img
    {
    text-align: center;
    }
    .how-img img{
    width: 40%;
    }


    </style>
    </head>
    <body>
        <div class="row nav-row trans-menu navbar navbar-fixed-top" style="position:fixed; top:0 ; left : ; background:black;">
            <div class="container nav-container">
				<div class="top-navbar">
					<div class = "pull-right">
						<div class="top-nav-social pull-left">
								<a href="https://www.facebook.com/Inside2020-100229861502346/?modal=admin_todo_tour"  target="_blank"><i class="fa fa-facebook " style="background-color:orange;"></i></a>
								<a href="https://instagram.com/cited_um?igshid=qbj7bzzyumi9"  target="_blank"><i class="fa fa-instagram " style="background-color:orange;"></i></a>

								{{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
						</div>
					<div class="top-nav-login-btn pull-right" style="background-color:orange;">
              @if (Auth::guest())

              <a href="registerinside" style="background-color:orange;"><i class="fa fa-sign-in"></i>SIGN UP</a>
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
                        <div class="pull-left"><img src="assets/img/once.png" width="100px" height="100px">  </div>
                        <!--<a class="navbar-brand" href="home">Online Community-based <br/> Ecosystem (OnCE)</a>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pathshalaNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="inside2020" ><i class="fa fa-home"></i>HOME</a></li>

                              <li><a href="aboutinside" ><i class="fa fa-info-circle"></i>ABOUT InSIDE</a></li>
                                <li><a href="terms" ><i class="fa fa-book"></i>SUBMISSION</a></li>
                                <li><a href="paymentinside" ><i class="fa fa-money"></i>PAYMENT </a>
                                  <li><a href="awardsinside" ><i class="fa fa-trophy"></i>AWARDS </a>   </li>
                              <li><a href="galleryinside" ><i class="fa fa-image"></i>GALLERY</a></li>




				<!--		 <li><a href="contact" target="_blank"><i class="fa fa-phone-square"></i>CONTACT US</a></li>-->

                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="contaisstner">
      <h2><i class="fa fa-users"></i>ACCESS THE ENDLESS POSSIBILITIES OF InSIDE2020</h2>
    </div>
  </div>

  <!-- Login Modal -->
  <form action="{{url('mylogin')}}" method="post">
{{ csrf_field() }}
  <div class="row contact-row">
    <div class="container">
      <div class="contact-form col-sm-6">
        <div class="col-xs-12">
          <h3><i class="fa fa-edit"></i>LOGIN</h3>

                    @if(count($errors) > 0)


          @foreach($errors->all() as $error)

          <h4 style="color:red">*{{$error}}</h4>


          @endforeach





                    @endif
        </div>
        <div class="col-xs-12">
          <label>EMAIL / USERNAME</label>
          <input type="text" placeholder="Email / Username" class="form-control" name="email" id="email">
        </div>

        <div class="col-xs-12">
          <label>PASSWORD</label>
          <input name="password" type="password" placeholder="Password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>

        <div class="col-xs-12">
          <a href="enteremail" class="forgot-link">FORGOT PASSWORD?</a>
          <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> LOGIN</button>
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</form>


<div class="container">
      <div class="row  bg-dark text-white" style="color:white;">


          <div class="col-md-4 col-sm-6 footer-item">
            <h5>CONTACT US</h5>
            <br>
            <p><i class="fa fa-map-marker"></i>Faculty of Education, University of Malaya</p>
            <p><i class="fa fa-envelope"></i>inside@um.edu.my</p>
          </div>
          <div class="col-md-8 col-sm-6 footer-item">
            <h5>LOCATION MAP</h5>
            <br>
            <div class="quick-link-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.90328037946!2d101.65095391379509!3d3.1202800977279126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc497a51563b45%3A0x8ba24c4f114f8d19!2sFaculty%20of%20Education%2C%20University%20of%20Malaya!5e0!3m2!1sen!2smy!4v1578750971072!5m2!1sen!2smy"
            class="embed-responsive-item" height="290" allowfullscreen></iframe>
            </div>
            <br>
          </div>
          <div class="clearfix visible-sm"></div>

  <!--				<div class="col-md-3 col-sm-6 footer-item">
            <h5>SUBSCRIBE</h5>
            <div class="footer-subscribe">
              <i class="fa fa-envelope"></i></a><input type="text" placeholder="admin@once.com" />
            </div>
            <a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
          </div>
        </div>-->
        <div class="footer-social-row">
        <!--	<a href="https://www.facebook.com/citedfpum"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/CITeD14"><i class="fa fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCv2nJkf5Zg4i1c3ImlC6CVQ?view_as=subscriber"><i class="fa fa-youtube"></i></a>-->
        </div>

    </div>
</div>
