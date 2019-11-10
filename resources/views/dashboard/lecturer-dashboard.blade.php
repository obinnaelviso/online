



@extends('dashboard.lecturermaster')

@section('content')

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
				<!--	<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
							<div class="section-divider"></div>
							<div class="dashboard-stats">
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>999</h1>
												<p>ASSIGNMENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-code ex-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-ex"><i class="fa fa-pencil-square-o"></i>1 Submission Tomorrow</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>65.8%</h1>
												<p>ATTENDENCE</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-line-chart danger-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-danger"><i class="fa fa-exclamation-triangle"></i>Below 70%</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix visible-sm"></div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>900</h1>
												<p>EVENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-flag look-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-look"><i class="fa fa-clock-o"></i>1 Event tomorrow</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>799</h1>
												<p>MESSAGES</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-envelope-o success-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-success"><i class="fa fa-folder-open-o"></i>10 Unread messages</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--<div class="row">
						<div class="col-sm-4 dash-item">
							<div class="col-xs-12">
								<div class="user-details">
									<div class="user-img">
										<img src="assets/img/parent/parent2.jpg" alt="user" />
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-6">
								<div class="my-msg dash-item">
									<h6 class="item-title"><i class="fa fa-address-book-o"></i>MY PROFILE</h6>
									<div class="inner-item">
										<div class="profile-intro">
											<div class="col-xs-4 col-sm-12 col-md-4 clear-padding">
												<img src="assets/img/parent/parent2.jpg" alt="user" />
											</div>
											<div class="col-xs-8 col-sm-12 col-md-8">
												@if (Auth::guest())

					              @else
					                    <span><img src="assets/img/parent/parent2.jpg" alt="user">{{Auth::user()->firstname}}&nbsp;{{Auth::user()->lastname}}<span class="caret"></span></span>
					              @endif
												<h6>Lecturer, Std 5</h6>
												<h6>Reg#: 109010</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="profile-details">
											<div class="detail-row">
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>NAME</span>
													@if (Auth::guest())

						              @else
						                    <span><img src="assets/img/parent/parent2.jpg" alt="user">{{Auth::user()->firstname}}&nbsp;{{Auth::user()->lastname}}<span class="caret"></span></span>
						              @endif
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>LECTURER #</span>
													<p>109010</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div class="detail-row">
											<!--	<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>ROLL NO</span>
													<p>PTH030A10</p>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>SECTION</span>
													<p>PTH030A</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div class="detail-row">
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>ROLL NO</span>
													<p>PTH030A10</p>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>SECTION</span>
													<p>PTH030A</p>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
			<!--				<div class="col-sm-4">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-envelope-o"></i>EXAM MARKS</h6>
										<div class="inner-item">
											<div class="msg-item">
												<div class="col-xs-2 clear-padding">
													<img src="assets/img/parent/parent1.jpg" alt="user" />
												</div>
												<div class="col-xs-10">
													<p class="title">RESEARCH METHODOLOGY</p>
													<p class="sent-by">JOHN DOE, MATH TEACHER</p>
													<p class="msg-desc"></p>
													<p class="timestamp"><i class="fa fa-clock-o"></i> <i>SEPTEMBER 2019</i></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="msg-item">
												<div class="col-xs-2 clear-padding">
													<img src="assets/img/parent/parent2.jpg" alt="user" />
												</div>
												<div class="col-xs-10">
													<p class="title">EARLY CHILDHOOD EDUCATION</p>
													<p class="sent-by">LENNORE, ACCOUNTANT</p>
													<p class="msg-desc">Lorem Ipsum is simply dummy text of the printing.</p>
													<p class="timestamp"><i class="fa fa-clock-o"></i> <i>JANUARY </i></p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>-->
							<div class="col-sm-6">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-bar-chart"></i>EACH CLASS ATTENDENCE</h6>
										<div class="inner-item">
											<div class="timetable-item">

												<div class="col-xs-9">
                          <div class="my-msg dash-item">

        										<div class="chart-item">
        											<canvas id="studentAttendenceChart" height = 230px></canvas>
        											<div class="chart-legends">
        												<span class="red"><60%</span>
        												<span class="orange"><75%</span>
        												<span class="green">>75%</span>
        											</div>
        										</div>
        									</div>

												</div>

											</div>
											<div class="timetable-item">


												<div class="clearfix"></div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-8">
								<div class="my-msg dash-item">
									<h6 class="item-title"><i class="fa fa-bullhorn"></i></h6>
									<div class="inner-item dashboard-tabs">
										<ul class="nav nav-tabs">
											<li class="active">

												<a href="#2" data-toggle="tab"><i class="fa fa-users"></i><span>COURSE INFORMATION</span></a>
											</li>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="2">
												<div class="announcement-item">
													<h5>Research Methodology<span class="new">New</span></h5>
													<h6><i class="fa fa-clock-o"></i> </h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
													<div class="posted-by">
														<p></p>
														<h6></h6>
													</div>

												</div>
												<div class="announcement-item">
													<h5>Early Childhood Education</h5>
													<h6><i class="fa fa-clock-o"></i>SEMESTER 2</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
													<div class="posted-by">
														<p></p>
														<h6></h6>
													</div>
												</div>
											</div>

										</div>
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
					<p>Copyright OnCE
				</div>
			</div>
		</div>
@endsection
