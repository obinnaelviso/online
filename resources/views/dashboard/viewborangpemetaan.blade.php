@extends($user->usertype == 3 ? 'dashboard.adminmaster' : 'dashboard.lecturermaster')


@section('content')
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i> VIEW BORANG</h5>
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
									</div>
									<div class="row">
										<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
												<thead>
													<tr>
														@if($user->usertype != 1)
															<th>Lecturer</th>
														@endif
														<th>Akademik / Fakulti / Pusat:</th>
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
													@foreach($borangpemetaans as $borangpemetaan)
													<tr>
														@if($user->usertype != 1)
															<th>{{ ucfirst($borangpemetaan->lecturer->firstname.' '.$borangpemetaan->lecturer->lastname) }}</th>
														@endif
														<td>{{ $borangpemetaan->faculty }}</td>
														<td>{{ $borangpemetaan->semester }}</td>
														<td>{{ $borangpemetaan->session }}</td>
														<td>{{ $borangpemetaan->jabatan }}</td>
														<td>{{ $borangpemetaan->course }}</td>
														<td>{{ $borangpemetaan->description }}</td>
														<td><a href="/storage/{{ $borangpemetaan->borangfile }}" download>{{ $borangpemetaan->borangfile_name }}</a></td>
														@if($user->usertype == 1)
															<td class="action-link">
																<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal_{{ $borangpemetaan->id }}"><i class="fa fa-edit"></i></a> @include('dashboard.edit-borangpemetaan')
																<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal_{{ $borangpemetaan->id }}"><i class="fa fa-remove"></i></a> @include('dashboard.deleteborangpemetaan')
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
