@extends(Auth::guard('facilitator')->check() ? 'dashboard.facilitatormaster' : 'dashboard.bicmaster')

@section('content')

<div class="main-content" id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>CHANGE PASSWORD</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				@if(session()->has('success'))
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				@endif
				@if(session()->has('error'))
				    <div class="alert alert-danger" role="alert">
				        {{ session()->get('error') }}
				    </div>
				@endif
				<form action="{{ route('changePasswordPage') }}" method="post">
					@csrf
					<div class="form-group">
				        <label for="old_password">Old Password</label>
				        <input type="password" class="form-control" id="old_password" name="old_password" required>
				    </div>
				    <div class="form-group">
				        <label for="password">New Password</label>
				        <input type="password" class="form-control" id="new_password" name="password" required>
				    </div>
				    <div class="form-group">
				        <label for="password">Confirm Password</label>
				        <input type="password" class="form-control" id="password" name="password_confirmation" required>
				    </div>
				    <div class="col-12 mb-5">
				        <button class="btn btn-warning" type="submit">Change Password</button>
				    </div>
				</form>
				@if($errors->any())
		            <div class="col-lg-12">
		              <div class="alert alert-danger">
		                <ul>
		                  @foreach($errors->all() as $error)
		                    <li>{{ $error }}</li>
		                  @endforeach
		                </ul>
		              </div>
		            </div>
	         	@endif
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