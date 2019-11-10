@extends($user->usertype == 3 ? 'dashboard.adminmaster' : 'dashboard.lecturermaster')

@section('content')
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i> VIEW CTES</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
                  				<div class="top-nav-login-btn pull-left">
      								<a href="addlecturernotelecturer"><i class="fa fa-sign-in"></i>ADD NEW DOCUMENT</a>
      							</div>
								<div class="inner-item">
									<div class="row">
										<div class="col-sm-12">
											<h3 class="text-center">PEMETAAN / MATRIKS KAEDAH PENILAIAN BERASASKAN HASIL PEMBELAJARAN UNTUK KURSUS</h3>
										</div>
										@if(session()->has('success'))
											<div class="alert alert-success">{{ session()->get('success') }}</div>
										@endif
									</div>
									<div class="row">
										<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
												<thead>
													<tr>
														@if($user->usertype != 1)
															<th>Lecturer</th>
														@endif
														<th>Student</th>
														<th>Akademik / Fakulti / Pusat</th>
														<th>Semester</th>
														<th>Session</th>
														<th>Jabatan</th>
														<th>Course</th>
														<th>Description</th>
														<th>File</th>
														@if($user->usertype == 1)
															<th>Actions</th>
														@endif
													</tr>
												</thead>
												<tbody>
													@foreach($ctes as $cte)
													<tr>
														@if($user->usertype != 1)
															<td>{{ ucfirst($cte->lecturer->firstname.' '.$cte->lecturer->lastname) }}</td>
														@endif
														<td>{{ ucfirst($cte->student->firstname.' '.$cte->student->lastname) }}</td>
														<td>{{ $cte->faculty }}</td>
														<td>{{ $cte->semester }}</td>
														<td>{{ $cte->session }}</td>
														<td>{{ $cte->jabatan }}</td>
														<td>{{ $cte->course }}</td>
														<td>{{ $cte->description }}</td>
														<td>{{ $cte->borangfile_name }}</td>
														@if($user->usertype == 1)
															<td class="action-link">
																<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal_{{ $cte->id }}"><i class="fa fa-edit"></i></a> @include('dashboard.edit-ctes')
																<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal_{{ $cte->id }}"><i class="fa fa-remove"></i></a> @include('dashboard.deletectes')
															</td>
														@endif
													</tr>
													@endforeach
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
			</div>
		</div>


@endsection
