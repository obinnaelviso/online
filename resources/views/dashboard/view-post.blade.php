@extends('dashboard.facilitatormaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i> {{ $post->title }}</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="padding-left: 40px; text-align: justify">
				{!! $post->body !!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>
@endsection