<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-Based Ecosystem</title>

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		 <link href="/dashboard/assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="/dashboard/assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="/dashboard/assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
    <link href="/dashboard/assets/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
		<link href="/dashboard/assets/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">
        <link href="/dashboard/assets/css/style.css" rel="stylesheet" media="screen">
<meta http-equiv="content-type" content="text/xhtml; charset=utf-8" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="/dashboard/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
		<div class="row dashboard-top-nav">
			<div class="col-sm-7 logo">
				<span class="visible-xs" style="position: absolute; margin-top: 20px; margin-right: -40px;"><a href="javascript:void(0);" class="btn btn-default sidebtn" id="sidebar-btn">☰</a></span> <h5><i class="fa fa-book"></i> Online Community-Based Ecosystem</h5>
			</div>

			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list">
					<li class="user dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if (Auth::guest())

              @else
                    <span>{{Auth::user()->firstname}}&nbsp;{{Auth::user()->lastname}}<span class="caret"></span></span>
              @endif


						</a>
						<ul class="dropdown-menu notification-list">
              <li>
    						<a href="student-dashboard" target="_blank"><i class="fa fa-home menu-icon"></i> HOME</a>
    					</li>
							<li>
								<div class="all-notifications">

                  <a href="{{route('logout')}}"><i class="fa fa-sign-in"></i>LOG OUT</a>

								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="parent-wrapper toggled" id="outer-wrapper">
			<!-- SIDE MENU -->
      <div class="sidebar-nav-wrapper" id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li>
            <a href="{{ route('insidedashboard') }}"><i class="fa fa-home menu-icon"></i> HOME</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" target="_blank">
              <i class="fa fa-user menu-icon" ></i>  PROFILE
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('insideprofile') }}" target="_blank"><i class="fa fa-caret-right"></i>VIEW PROFILE</a>
              </li>
              <li>
                <a href="{{ route('insideprofileedit') }}" target="_blank"><i class="fa fa-caret-right"></i> EDIT PROFILE</a>
              </li>
              <li>
                <a href="{{ route('inside.documents') }}" target="_blank"><i class="fa fa-caret-right"></i> PROFILE DOCUMENTS</a>
              </li>
              <li>
                <a href="{{ route('changePasswordinside') }}"><i class="fa fa-caret-right"></i> CHANGE PASSWORD</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>



          <li>
              <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>LOG OUT</a>
          </li>
        </ul>
      </div>
		  @yield('content')
    </div>
<!--footer-->
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


            <div class="footer-social-row">
            </div>

        </div>
    </div>

		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
        <script src="/dashboard/assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="/dashboard/assets/js/jquery-ui.min.js"></script>
        <script src="/dashboard/assets/js/bootstrap.min.js"></script>
		<script src="/dashboard/assets/plugins/owl.carousel.min.js"></script>
		<script src="/dashboard/assets/plugins/jquery.dataTables.min.js"></script>
		<script src="/dashboard/assets/plugins/dataTables.responsive.min.js"></script>
        <script src="/dashboard/assets/js/js.js"></script>
        <script src="/dashboard/assets/js/sidebar.js"></script>

    </body>
</html>
