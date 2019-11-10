<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-Based Ecosystem</title>

        <!-- Styles -->
        <link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="dashboard/assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="dashboard/assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="dashboard/assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
    <link href="dashboard/assets/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
		<link href="dashboard/assets/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">
        <link href="dashboard/assets/css/style.css" rel="stylesheet" media="screen">
<meta http-equiv="content-type" content="text/xhtml; charset=utf-8" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="dashboard/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
		<div class="row dashboard-top-nav">
			<div class="col-sm-5 logo">
				<h5><i class="fa fa-book"></i>Online Community-Based Ecosystem</h5>
			</div>

			<div class="col-sm-7 notification-area">
				<ul class="top-nav-list">
				<!--	<li class="notification dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="badge nav-badge">3</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-bullhorn"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Dr Rafiza's radio show</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-tv"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Dr Sharil's Edutube is on</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 hour ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Annual fest</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Upcoming Sports Meet</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL NOTIFICATIONS</a>
								</div>
							</li>
						</ul>
					</li>
					<li class="message dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i>
							<span class="badge nav-badge">5</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent2.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">John Doe</a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent1.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Lenore Doe</a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL MESSAGES</a>
								</div>
							</li>
						</ul>
					</li>-->
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
    				<!--	<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    							<i class="fa fa-users menu-icon"></i> STUDENTS <span class="caret"></span>
    						</a>
    						<ul class="dropdown-menu">
    							<li>
    								<a href="add_student_dashboard"><i class="fa fa-caret-right menu-icon"></i>ADD</a>
    							</li>
    							<li>
    								<a href="admin_student_dashboard"><i class="fa fa-caret-right menu-icon"></i>ALL STUDENT  </a>
    							</li>
    						</ul>
    						<div class="clearfix"></div>
    					</li>
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    							<i class="fa fa-user-secret menu-icon"></i> LECTURERS <span class="caret"></span>
    						</a>
    						<ul class="dropdown-menu">
    							<li>
    								<a href="admin_add_teacher"><i class="fa fa-caret-right menu-icon"></i>ADD</a>
    							</li>
    							<li>
    								<a href="admin_teacher_list"><i class="fa fa-caret-right menu-icon"></i>ALL LECTURERS</a>
    							</li>
                  <li>
    								<a href="lecturernote"><i class="fa fa-caret-right menu-icon"></i>LECTURER'S DOCUMENT</a>
    							</li>
                  <li>
    								<a href="admin"><i class="fa fa-caret-right menu-icon"></i>LECTURER'S KPI</a>
    							</li>
                  <li>
    								<a href="addbook"><i class="fa fa-caret-right menu-icon"></i>ADD BOOKS AND JOURNALS</a>
    							</li>
    						</ul>
    						<div class="clearfix"></div>
    					</li>-->

						<!--	<li>
								<a href="#"><i class="fa fa-users"></i> USER PROFILE</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-key"></i> CHANGE PASSWORD</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>-->
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
            <a href="lecturerdashboard"><i class="fa fa-home menu-icon"></i> HOME</a>
          </li>
            <!--  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-users menu-icon"></i> STUDENTS <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="admin_add_student"><i class="fa fa-caret-right"></i>ADD</a>
                  </li>
                  <li>
                    <a href="admin_student_list"><i class="fa fa-caret-right"></i>ALL STUDENT  </a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </li>-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file menu-icon"></i> DOCUMENT <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addlecturernotelecturer" target="_blank"><i class="fa fa-file menu-icon"></i>ADD LECTURER'S DOCUMENT</a>
              </li>
              <li>
                <a href="lecturernotelecturer" target="_blank"><i class="fa fa-file menu-icon"></i>LECTURER'S DOCUMENT</a>
              </li>
            </ul>


            <div class="clearfix"></div>
          </li>
      
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file menu-icon"></i> FORMS <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="borang" target="_blank"><i class="fa fa-file menu-icon"></i> DOWNLOAD FORMS</a>
              </li>
              <li>
                <a href="borangpemetaan" target="_blank"><i class="fa fa-file menu-icon"></i>ADD BORANG </a>
              </li>
              <li>
                <a href="viewborangpemetaan" target="_blank"><i class="fa fa-file menu-icon"></i>VIEW BORANG</a>
              </li>
        <!--   <li>
                <a href="borangpenyaringan"><i class="fa fa-file menu-icon"></i>ADD BORANG PENYARINGAN</a>
              </li>
              <li>
                <a href="viewborangpenyaringan"><i class="fa fa-file menu-icon"></i>VIEW BORANG PENEYARINGAN</a>
              </li>-->
          </ul>


            <div class="clearfix"></div>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file menu-icon"></i> CTES <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('ctes') }}" target="_blank"><i class="fa fa-file menu-icon"></i>ADD CTES </a>
              </li>
              <li>
                <a href="{{ route('viewctes') }}" target="_blank"><i class="fa fa-file menu-icon"></i>VIEW CTES</a>
              </li>
          </ul>


            <div class="clearfix"></div>
          </li>

        <!--  <li>
            <a href="message"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
          </li>-->
        <!--  <li>
            <a href="admin_add_announcement"><i class="fa fa-bullhorn menu-icon"></i> ANNOUNCEMENTS</a>
          </li>-->
        <!--      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file-o menu-icon"></i> CLASSES <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="admin_add_class"><i class="fa fa-caret-right"></i>ADD CLASS</a>
              </li>
              <li>
                <a href="admin_add_section"><i class="fa fa-caret-right"></i>ADD SECTION</a>
              </li>
              <li>
                <a href="admin_add_class"><i class="fa fa-caret-right"></i>VIEW SECTIONS</a>
              </li>
              <li>
                <a href="admin_add_section"><i class="fa fa-caret-right"></i>VIEW CLASSES</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-book menu-icon"></i> SUBJECTS <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="admin_add_subject"><i class="fa fa-caret-right"></i>ADD</a>
              </li>
              <li>
                <a href="admin_add_subject"><i class="fa fa-caret-right"></i>VIEW SUBJECTS</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-calendar menu-icon"></i> TIMETABLE <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="admin_create_timetable"><i class="fa fa-caret-right"></i>CREATE</a>
              </li>
              <li>
                <a href="admin_class_timetable"><i class="fa fa-caret-right"></i>VIEW</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-address-card menu-icon"></i> REPORTS <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="teacher-attendence-report.html"><i class="fa fa-caret-right"></i>ATTENDENCE</a>
              </li>
              <li>
                <a href="teacher-marks-report.html"><i class="fa fa-caret-right"></i>MARKS</a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </li>-->
          <li>
            <a href="addbooklecturer" target="_blank"><i class="fa fa-book menu-icon"></i>ADD PRODUCT</a>
          </li>
          <li class="dropdown">
            <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-calendar menu-icon"></i> TIMETABLE <span class="caret"></span>
            </a>
          <ul class="dropdown-menu">
              <li>
                <a href="addclasstimetable" target="_blank"><i class="fa fa-calendar menu-icon"></i>SETUP TIMETABLE</a>
              </li>
              <li>
                <a href="lecturerclasstimetable" target="_blank"><i class="fa fa-calendar-o menu-icon"></i>VIEW TIMETABLE</a>
              </li>
              <li>
                <a href="editclasstimetable" target="_blank"><i class="fa fa-calendar-plus-o menu-icon"></i>EDIT TIMETABLE</a>
              </li>
            </li>
            </ul>-->
            <li>
              <a href="contact" target="_blank"><i class="fa fa-user"></i>CONTACT </a>
            </li>
          <li ul class="dropdown">
            <div class="all-notifications">

              <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>LOG OUT</a>

      </div>
    </div>


		@yield('content')

    </div>

		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
        <script src="dashboard/assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="dashboard/assets/js/jquery-ui.min.js"></script>
        <script src="dashboard/assets/js/bootstrap.min.js"></script>
		<script src="dashboard/assets/plugins/owl.carousel.min.js"></script>
		<script src="dashboard/assets/plugins/Chart.min.js"></script>
		<script src="dashboard/assets/plugins/jquery.dataTables.min.js"></script>
		<script src="dashboard/assets/plugins/dataTables.responsive.min.js"></script>
        <script src="dashboard/assets/js/js.js"></script>

    </body>
</html>
