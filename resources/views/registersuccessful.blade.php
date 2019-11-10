@extends('master')

@section('content')

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>BE A PART OF OUR COMMUNITY</h2>
    </div>
  </div>

  <!-- contact row -->

  <div class="row contact-row">
    <div class="container">
      <div class="contact-form col-sm-12">
        <div class="col-xs-12">
          <h3><i class="fa fa-check"></i>Registration Successful.</h3>
        </div>

        <div class="clearfix"></div>

      </div>

    </div>
  </div>



  <script type="text/JavaScript">
redirectTime = "1000";
redirectURL = "http://localhost/once/public/login";
function timedRedirect() {
    setTimeout("location.href = redirectURL;",redirectTime);
}

timedRedirect();
</script>

  	@endsection
