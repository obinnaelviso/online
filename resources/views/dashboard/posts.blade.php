@extends(Auth::guard('facilitator')->check() ? 'dashboard.facilitatormaster' : 'dashboard.bicmaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>FACILITATOR POSTS</h5>
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
			<ul>
				@foreach($posts as $post)
					<li>
						<div class="col-12 mb-5">
							<h4><a href="{{ route('viewPost', $post->id) }}">{{ $post->title }}</a></h4>
							<div style="color: grey; font-style: oblique;"><b>Author:</b> {{ $post->facilitator->username }}, <b>Date:</b> {{ $post->created_at }}</div>
							{{-- limit_text($post->body, 70) --}}
							@if(Auth::guard('facilitator')->check())
								<br><div class="btn-group"><a class="btn btn-warning" href="{{ route('editPost', $post->id) }}"><span class="fa fa-pencil"></span> Edit</a><a class="btn btn-danger" data-toggle="modal" data-target="#deleteDetailModal_{{ $post->id }}"><span class="fa fa-trash"></span> Delete</a> @include('dashboard.deletepost')</div>
							@endif
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