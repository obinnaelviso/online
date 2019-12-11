@extends(Auth::guard('facilitator')->check() ? 'dashboard.facilitatormaster' : 'dashboard.bicmaster')

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
				<h4><span class="fa fa-upload"></span> <b>UPLOADS</b></h4><hr>
				@if(session()->has('success'))
					<div class="col-md-10">
					    <div class="alert alert-success" role="alert">
					        {{ session()->get('success') }}
					    </div>
					</div>
				@endif <br>
				<form method="POST" action="{{ route('uploadModule', $post->id) }}" enctype="multipart/form-data">
					@csrf
					<div class="col-md-12 mb-5">
						<label for="files">Select file to upload:</label>
						<input type="file" name="module" required><br>
					</div>
					<div class="col-md-8 mb-5">
						<div class="form-group">
							<textarea class="form-control" id="description" rows="3" name="description" required></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">UPLOAD</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row" style="margin-top: 10px">

			<div class="col-md-12">
				<table id="attendenceDetailedTable" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Date</th>
							<th>Action</th>	
						</tr>
					</thead>
					<tbody>
						@foreach($modules as $module)
							<tr>
								<th>{{ $module->name }}</a></th>
								<th>{{ $module->description }}</th>
								<th>{{ $module->created_at }}</th>
								<th>
									<a href="/storage/{{ str_replace("public/", "", $module->url) }}" class="btn btn-danger" download><span class="fa fa-download"></span> Download</a>
								</th>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" style="margin-top: 10px">
			<div class="col-md-12">
				<h4><span class="fa fa-comments"></span> <b>COMMENTS</b></h4><hr>
				@if(session()->has('successComment'))
					<div class="col-md-10">
					    <div class="alert alert-success" role="alert">
					        {{ session()->get('successComment') }}
					    </div>
					</div> <br>
				@endif
				@foreach($comments as $comment)
					<div class="form-group col-md-8">
						<div style="font-weight: 900; font-size: 18px">{{ $comment->username }} @if($comment->usertype === 'f')<span class="label label-danger">F</span>@endif</div>
						<div style="color: grey">{{ $comment->created_at->diffForHumans() }}</div>
						<div>{{ $comment->message }}</div>
					</div>
				@endforeach
				<form method="POST" action="{{ route('addFacilitatorComment', $post->id) }}">
					@csrf
					<div class="col-md-8 mb-5">
						<div class="form-group">
							<textarea class="form-control" id="message" rows="5" name="message" placeholder="Type in your comment and submit" required></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">SUBMIT</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection