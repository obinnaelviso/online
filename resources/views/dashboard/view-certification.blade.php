@extends(Auth::guard('facilitator')->check() ? 'dashboard.facilitatormaster' : 'dashboard.bicmaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>BIC CERTIFICATION</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			@if($user->certificate)
				<div class="col-md-12">
					<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Theme</th>
								<th>Facilitator</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>{{ $user->first_name }} {{ $user->last_name }}</a></th>
								<th>{{ $user->school }}</th>
								<th>{{ $user->certificate->facilitator->first_name.' '.$user->certificate->facilitator->last_name --}}</th>
								<th>{{ date_format($user->created_at, 'd-m-Y') }}</th>
								<th>
									<a class="btn btn-primary" href="{{ route('printCertificate') }}">View Certificate</a>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
			@else
				<div class="col-md-12" style="text-align: center">
					<div class="label label-danger" style="font-size: 28px">Sorry! Certificate not ready yet. Please check back later!</div>
				</div>
			@endif
		</div>
	</div>
</div>
@endsection