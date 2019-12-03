<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-Based Ecosystem</title>

        <!-- Styles -->
        <link href="/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
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
    						<a href="lecturerdashboard"><i class="fa fa-home menu-icon"></i> HOME</a>
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
            <a href="{{ route('facilitatorDashboard') }}"><i class="fa fa-home menu-icon"></i> HOME</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file menu-icon" ></i>  PRODUCT<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addbook"><i class="fa fa-caret-right"></i> ADD PRODUCT</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file menu-icon" ></i>  POSTS<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('createPost') }}"><i class="fa fa-caret-right"></i> CREATE POST</a>
              </li>
              <li>
                <a href="{{ route('posts') }}"><i class="fa fa-caret-right"></i>POSTS</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>
          <li class="dropdown">
            <li>
              <a href="contact"><i class="fa fa-phone"></i>CONTACT </a>
            </li>
            <li ul class="dropdown">
              <div class="all-notifications">

                <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>LOG OUT</a>
              </div>
            </li>
          </li>
        </ul>
      </div>
		  @yield('content')
    </div>

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
        <script src="/dashboard/assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="/dashboard/assets/js/jquery-ui.min.js"></script>
        <script src="/dashboard/assets/js/bootstrap.min.js"></script>
		<script src="/dashboard/assets/plugins/owl.carousel.min.js"></script>
		<script src="/dashboard/assets/plugins/jquery.dataTables.min.js"></script>
		<script src="/dashboard/assets/plugins/dataTables.responsive.min.js"></script>
    <script src="/dashboard/assets/js/js.js"></script>
    <script src="/dashboard/assets/js/sidebar.js"></script>
        <!-- Ck editor -->
    <script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
    
    @yield('js')
    </body>
</html>
