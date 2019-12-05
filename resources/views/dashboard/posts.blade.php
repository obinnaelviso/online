	@extends('dashboard.facilitatormaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>POSTS</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			@if(session()->has('success'))
				<div class="col-md-8">
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				</div>
			@endif
			<div class="col-md-4 col-6">
					<b> POSTS COUNT: </b>{{ $posts->count() }} <br>
			</div>
		</div>
		<div class="row">
			<ul>
				@foreach($posts as $post)
					<li>
						<div class="col-12 mb-5">
							<h4><a href="{{ route('viewPost', $post->id) }}">{{ $post->title }}</a></h4>
							{{-- limit_text($post->body, 70) --}}
							<div class="btn-group"><a class="btn btn-warning" href="{{ route('editPost', $post->id) }}"><span class="fa fa-pencil"></span> Edit</a><a class="btn btn-danger" data-toggle="modal" data-target="#deleteDetailModal_{{ $post->id }}"><span class="fa fa-trash"></span> Delete</a> @include('dashboard.deletepost')</div>
						</div>
					</li>
					<hr>
				@endforeach
			</ul>
		</div>
		<div class="row">
			<div class="col-md-4 col-6">
				{{ $posts->links() }}
			</div>
		</div>
	</div>
</div>
@endsection
