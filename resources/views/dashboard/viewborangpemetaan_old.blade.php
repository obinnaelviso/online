
@extends('dashboard.lecturermaster')

@section('content')
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i> VIEW BORANG
 </h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-sliders"></i></h6>
                  <div class="top-nav-login-btn pull-left">
      							<a href="addlecturernotelecturer"><i class="fa fa-sign-in"></i>ADD NEW DOCUMENT</a>
      						</div>
									<div class="inner-item">
								<div class="row">
									<div class="col-sm-4">
										<img src="assets/img/umlogo.jpg"
									</div>
									<div class="col-sm-8">
										<h3 class="text-center">PEMETAAN / MATRIKS KAEDAH PENILAIAN BERASASKAN HASIL
PEMBELAJARAN UNTUK KURSUS
</h3>
									</div>
								</div>

								<div class="row">
									<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Akademik / Fakulti / Pusat:</th>
													<th>Semester</th>
													<th>Sesi</th>
													<th>Jabatan</th>
													<th>Course</th>
													<th>Description</th>
													<th>File</th>
												</tr>
											</thead>
											<tbody>
												@foreach($alllecturer as $row)
												<tr>
													<td>{{ $borangpemetaan->faculty }}</td>
													<td>{{ $borangpemetaan->semester }}</td>
													<td>{{ $borangpemetaan->session }}</td>
													<td>{{ $borangpemetaan->jabatan }}</td>
													<td>{{ $borangpemetaan->course }}</td>
													<td>{{ $borangpemetaan->description }}</td>
													<td>{{ $borangpemetaan->borangfile }}</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>

									@foreach($borangpemetaans as $borangpemetaan)
									<div class="col-sm-4">
										<label for="faculty">Akademik / Fakulti / Pusat: </label> {{ $borangpemetaan->faculty }}
									</div>
									<div class="col-sm-4">
									<label for="semester">Semester</label> {{ $borangpemetaan->semester }}
									</div>
									<div class="col-sm-4">
									<label for="session">Sesi</label> {{ $borangpemetaan->session }}
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="jabatan">Jabatan: </label> {{ $borangpemetaan->jabatan }}
									</div>


								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="course">Course: </label> {{ $borangpemetaan->course }}
									</div>
								</div>

								<hr>
								<div class="row">
									<div class="col-sm-12">
										<label for="program">Description: </label> {{ $borangpemetaan->description }}
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="program">File: </label> {{ $borangpemetaan->borangfile }}
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<label for="kod">Kod / Tajuk Kursus (Jam Kredit): </label> 
									</div>


								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="pemberatan">Pemberatan: </label> 
									</div>


								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="pemeriksa">Pemeriksa: </label> 
									</div>


								</div>

										<table class="table table-bordered">
										  <thead>
												<tr>
										      <th colspan="4" class="pull-center">PEMERIKSA</th>
										      <th colspan="2">PENYARING</td>

										    </tr>
										    <tr>
										      <th scope="col">#</th>
										      <th scope="col">Hasil Pembelajaran(Learning Outcomes, LO)</th>
										      <th scope="col">Kaedah Penilaian</th>
										      <th scope="col">Soalan Peperiksaan Berkaitan LO</th>
													<th scope="col">Kesesuaian Soalan Dengan LO (Ya / Tidak / *TB) </th>
										      <th scope="col">Pandangan Tambahan</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <th scope="row">1</th>
										      <td></td>
										      <td></td>
										      <td></td>
													<td></td>
													<td></td>
										    </tr>
										    <tr>
										      <th scope="row">2</th>
													<td></td>
										      <td></td>
										      <td>{{$row['soalan2']}}</td>
													<td>{{$row['kesesuaian2']}}</td>
													<td>{{$row['pandangan2']}}</td>
										    </tr>
										    <tr>
										      <th scope="row">3</th>
													<td>{{$row['hasil3']}}</td>
										      <td>{{$row['kaedah3']}}</td>
										      <td>{{$row['soalan3']}}</td>
													<td>{{$row['kesesuaian3']}}</td>
													<td>{{$row['pandangan3']}}</td>
										    </tr>
												<tr>
													<th scope="row">4</th>
													<td>{{$row['hasil3']}}</td>
													<td>{{$row['kaedah4']}}</td>
													<td>{{$row['soalan4']}}</td>
													<td>{{$row['kesesuaian4']}}</td>
													<td>{{$row['pandangan4']}}</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
													@endforeach
												</tr>
<p>*TB : Tidak Berkenaan </p>
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



				<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE </h4>
							</div>
							<div class="modal-body">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>


				<!--Edit details modal-->
				<div id="editDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT STUDENT DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>FIRST NAME</label>
									<input type="text" placeholder="First Name" value="John" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>MIDDLE NAME</label>
									<input type="text" placeholder="Middle Name" value="Fidler" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>LAST NAME</label>
									<input type="text" placeholder="Last Name" value="Doe" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
									<input type="text" placeholder="Standard" value="5 STD" />
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-3">
									<label><i class="fa fa-cogs"></i>SECTION</label>
									<input type="text" placeholder="Section" value="PTH05A" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-puzzle-piece"></i>ROLL #</label>
									<input type="text" placeholder="Roll Number" value="Fidler" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-phone"></i>CONTACT #</label>
									<input type="text" placeholder="Contact Number" value="1234567890" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-envelope-o"></i>EMAIL</label>
									<input type="text" placeholder="Email" value="john@gmail.com" />
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection
