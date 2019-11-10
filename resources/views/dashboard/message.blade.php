<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - Responsive Education Template</title>

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
		<div class="row dashboard-top-nav">
			<div class="col-sm-3 logo">
				<h5><i class="fa fa-book"></i>PATHSHALA</h5>
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
						<a href="#"><i class="fa fa-home menu-icon"></i> HOME</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file-code-o menu-icon"></i> ASSIGNMENTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="#"><i class="fa fa-caret-right"></i>VIEW</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>DOWNLOAD</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>UPLOAD</a>
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
								<a href="#"><i class="fa fa-caret-right"></i>SUMMARY</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>DETAILED</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="#"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-address-card menu-icon"></i> VIEW MARKS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="#"><i class="fa fa-caret-right"></i>CLASS ASSESSMENT</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>MID TERM</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>END TERM</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="#"><i class="fa fa-calendar menu-icon"></i> TIME TABLE</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-book menu-icon"></i> EXAMINATION <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="#"><i class="fa fa-caret-right"></i>SEATING PLAN</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-caret-right"></i>EXAM SCHEDULE</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="#"><i class="fa fa-money menu-icon"></i> FEE DETAILS</a>
					</li>
				</ul>
			</div>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-envelope-o"></i>MESSAGES</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-6">
								<div class="my-msg dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-envelope-o"></i>MY MESSAGES</h6>
									<div class="inner-item">
										<div class="msg-item">
											<div class="col-xs-2 clear-padding">
												<img src="assets/img/parent/parent1.jpg" alt="user" />
											</div>
											<div class="col-xs-10">
												<p class="title">Submit your assigment.</p>
												<p class="sent-by">JOHN DOE, MATH TEACHER</p>
												<p class="msg-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
												<p class="timestamp"><i class="fa fa-clock-o"></i> <i>45 mins ago.</i></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="msg-item">
											<div class="col-xs-2 clear-padding">
												<img src="assets/img/parent/parent2.jpg" alt="user" />
											</div>
											<div class="col-xs-10">
												<p class="title">Your fee is due.</p>
												<p class="sent-by">LENNORE, ACCOUNTANT</p>
												<p class="msg-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
												<p class="timestamp"><i class="fa fa-clock-o"></i> <i>45 mins ago.</i></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="msg-item">
											<div class="col-xs-2 clear-padding">
												<img src="assets/img/parent/parent1.jpg" alt="user" />
											</div>
											<div class="col-xs-10">
												<p class="title">Submit your assigment.</p>
												<p class="sent-by">JOHN DOE, MATH TEACHER</p>
												<p class="msg-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
												<p class="timestamp"><i class="fa fa-clock-o"></i> <i>45 mins ago.</i></p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-paper-plane"></i>CREATE NEW MESSAGE</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-xs-6">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>TO</label>
												<input type="text" placeholder="TO" />
											</div>
											<div class="col-xs-6">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FROM</label>
												<input type="text" placeholder="FROM" />
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<label><i class="fa fa-bullhorn"></i>SUBJECT</label>
												<input type="text" placeholder="SUBJECT" />
											</div>
											<div class="col-sm-12">
												<label><i class="fa fa-info-circle"></i>MESSAGE</label>
												<textarea placeholder="MESSAGE"></textarea>
											</div>
											<div class="col-sm-12">
												<a href="#"><i class="fa fa-paper-plane"></i> SEND</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>Copyright Pathshala</p>
				</div>
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
		<script src="assets/plugins/Chart.min.js"></script>
		<script src="assets/plugins/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/dataTables.responsive.min.js"></script>
        <script src="assets/js/js.js"></script>
		
    </body>
</html>