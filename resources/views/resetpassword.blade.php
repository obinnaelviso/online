@extends('master')

@section('content')

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>RESET YOUR PASSWORD</h2>
    </div>
  </div>

  <!-- Login Modal -->
  <form action="{{url('resetpassword')}}" method="post">
{{ csrf_field() }}
  <div class="row contact-row">
    <div class="container">
      <div class="contact-form col-sm-6">
        <div class="col-xs-12">
          <h3><i class="fa fa-edit"></i>ENTER NEW PASSWORD</h3>
          @if(count($errors) > 0)


        @foreach($errors->all() as $error)

        <h4 style="color:red">*{{$error}}</h4>


        @endforeach

          @endif

        </div>


        <div class="col-xs-12">
          <label>ENTER NEW PASSWORD</label>
          <input name="password" type="password" placeholder="Password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
        <div class="col-xs-12">
          <label>CONFIRM PASSWORD</label>
          <input type="password" placeholder="Confirm Password" class="form-control" name="confirmpassword" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
            <input name="email" type="hidden" value="{{$email}}">
        <div class="col-xs-12">

          <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> SUBMIT</button>
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</form>


  	@endsection
