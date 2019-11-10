<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-based Ecosystem (OnCE)</title>

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
			<div class="col-sm-3 logo">
				<h5><i class="fa fa-book"></i>Online Community-Based Ecosystem</h5>
			</div>
			<div class="col-sm-4 top-search">
				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="Search">
				</div>
			</div>
			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list">
					<li class="notification dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="badge nav-badge">3</span>
						</a>
						<ul class="dropdown-menu notification-list">
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
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Fine art workshop</a></h5>
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
					</li>
					<li class="user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span><img src="assets/img/parent/parent2.jpg" alt="user">JOHN DOE<span class="caret"></span></span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-users"></i> USER PROFILE</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-key"></i> CHANGE PASSWORD</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">LOGOUT</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<div class="sidebar-nav-wrapper" id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li>
						<a href="student-dashboard.html"><i class="fa fa-home menu-icon"></i> HOME</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file-code-o menu-icon"></i> ASSIGNMENTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="student-assignment-download.html"><i class="fa fa-caret-right"></i>DOWNLOAD</a>
							</li>
							<li>
								<a href="student-assignment-upload.html"><i class="fa fa-caret-right"></i>UPLOAD</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bar-chart menu-icon"></i> ATTENDENCE <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="student-attendence.html"><i class="fa fa-caret-right"></i>SUMMARY</a>
							</li>
							<li>
								<a href="student-attendence-detailed.html"><i class="fa fa-caret-right"></i>DETAILED</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="message.html"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-address-card menu-icon"></i> VIEW MARKS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="student-marks.html"><i class="fa fa-caret-right"></i>CLASS ASSESSMENT</a>
							</li>
							<li>
								<a href="student-marks.html"><i class="fa fa-caret-right"></i>MID TERM</a>
							</li>
							<li>
								<a href="student-marks.html"><i class="fa fa-caret-right"></i>END TERM</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="student-timetable.html"><i class="fa fa-calendar menu-icon"></i> TIME TABLE</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-book menu-icon"></i> EXAMINATION <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="student-exam-plan.html"><i class="fa fa-caret-right"></i>SEATING PLAN</a>
							</li>
							<li>
								<a href="student-exam-schedule.html"><i class="fa fa-caret-right"></i>EXAM SCHEDULE</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="student-fees.html"><i class="fa fa-money menu-icon"></i> FEE DETAILS</a>
					</li>
				</ul>
			</div>

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bar-chart"></i>ATTENDENCE DETAILED</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>VIEW DETAILED ATTENDENCE</h6>
									<div class="inner-item dash-search-form">
										<div class="col-sm-6 col-md-3">
											<label>START DATE</label>
											<input id = "startDate" type="text" placeholder="MM/DD/YYYY"/>
										</div>
										<div class="col-sm-6 col-md-3">
											<label>END DATE</label>
											<input id = "endDate" type="text" placeholder="MM/DD/YYYY"/>
										</div>
										<div class="clearfix visible-sm"></div>
										<div class="col-sm-6 col-md-3">
											<label>COURSE CODE</label>
											<select>
												<option>Basic Mathematics (MTH101)</option>
												<option>Physics (PHY101)</option>
												<option>Biology (BIO101)</option>
											</select>
										</div>
										<div class="col-sm-6 col-md-3">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SEARCH</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>BASIC MATHEMATICS (MTH101)</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-book"></i>COURSE CODE</th>
													<th><i class="fa fa-calendar"></i>DATE</th>
													<th><i class="fa fa-clock-o"></i>TIMING</th>
													<th><i class="fa fa-check"></i>STATUS</th>
													<th><i class="fa fa-user"></i>TEACHER NAME</th>
													<th><i class="fa fa-ban"></i>ATTENDENCE BLOCKED</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>Copyright OnCE</p>
				</div>
			</div>
		</div>

		<!-- Scripts -->
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
