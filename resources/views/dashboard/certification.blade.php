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
			@if(session()->has('success'))
				<div class="col-md-10">
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				</div><br>
			@endif 
			{{-- <div class="col-md-4 col-6">
					<b> POSTS COUNT: </b>{{ $posts->count() }} <br>
			</div> --}}
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>School</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bics as $bic)
							<tr>
								<th>{{ $bic->first_name }} {{ $bic->last_name }}</a></th>
								<th>{{ $bic->school }}</th>
								<th>{{ date_format($bic->created_at, 'd/m/Y') }}</th>
								<th>
									@if(!$bic->certificate)
										<form method="post" action="{{ route('issueCertificate', $bic->id) }}">
											@csrf
											<button class="btn btn-success">Issue Certificate</button>
										</form>
									@else
										<button class="btn btn-danger" disabled="">Certificate Issued</button>
									@endif
								</th>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection