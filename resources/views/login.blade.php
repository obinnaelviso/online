@extends('master')

@section('content')

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>ACCESS THE ENDLESS POSSIBILITIES OF OUR COMMUNITY</h2>
    </div>
  </div>

  <!-- Login Modal -->
  <form action="{{url('mylogin')}}" method="post">
{{ csrf_field() }}
  <div class="row contact-row">
    <div class="container">
      <div class="contact-form col-sm-6">
        <div class="col-xs-12">
          <h3><i class="fa fa-edit"></i>LOGIN</h3>

                    @if(count($errors) > 0)


          @foreach($errors->all() as $error)

          <h4 style="color:red">*{{$error}}</h4>


          @endforeach





                    @endif
        </div>
        <div class="col-xs-12">
          <label>EMAIL</label>
          <input type="text" placeholder="Email" class="form-control" name="email" id="email">
        </div>

        <div class="col-xs-12">
          <label>PASSWORD</label>
          <input name="password" type="password" placeholder="Password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>

        <div class="col-xs-12">
          <a href="enteremail" class="forgot-link">FORGOT PASSWORD?</a>
          <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> LOGIN</button>
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</form>


  	@endsection
