@extends('dashboard.facilitatormaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>CREATE POST</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				@if(session()->has('success'))
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }} <a href="{{ route('posts') }}"><u>View Post</u></a>
				    </div>
				@endif
				<form action="{{ route('createPost') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
				        <label for="title">Title</label>
				        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
				    </div>
					<div class="form-group mb-5">
				        <label for="body">Body</label>
				        <textarea class="form-control" id="body" rows="10" name="body" required>{{ old('body') }}</textarea>
				    </div>
				    <div class="col-12 mb-5">
				        <button class="btn btn-primary" type="submit">Submit</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection