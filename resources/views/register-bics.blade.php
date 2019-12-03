@extends('master')

@section('content')
  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>BE A PART OF OUR COMMUNITY</h2>
    </div>
  </div>

  <!-- register row -->
  <form action="{{url('bics')}}" method="post">
  {{ csrf_field() }}
    <div class="row contact-row">
      <div class="container">
        <div class="contact-form col-sm-6">
          <div class="col-xs-12">
            <h3><i class="fa fa-edit"></i>LET US KNOW YOU.</h3>
            @if($errors->any())
              @foreach($errors->all() as $error)
              <h4 style="color:red">*{{$error}}</h4>
              @endforeach
            @endif
          </div>
          <div class="col-xs-6">
            <label>FIRST NAME</label>
            <input type="text" placeholder="First Name" class="form-control" name="first_name">
          </div>
          <div class="col-xs-6">
            <label>LAST NAME</label>
            <input type="text" placeholder="Last Name" class="form-control" name="last_name">
          </div>
          <div class="clearfix"></div>
          <div class="col-xs-12">
            <label>USERNAME</label>
            <input type="text" placeholder="Username" class="form-control" name="username" id="username">
          </div>
           <div class="col-xs-12">
            <input class="form-check-input" type="radio" name="usertype" id="exampleRadios2" value="bic" required>
            <label class="form-check-label" for="exampleRadios2">
              BIC
            </label>
          </div>

          <div class="col-xs-12">
            <input class="form-check-input" type="radio" name="usertype" id="exampleRadios3" value="facilitator" required>
            <label class="form-check-label" for="exampleRadios3">
              FACILITATOR
            </label>
          </div>
          <div class="col-xs-12">
            <label>SCHOOL</label>
            <input type="text" placeholder="School" class="form-control" name="school" id="school">
          </div>
          <div class="col-xs-6">
            <label>PASSWORD</label>
            <input name="password" type="password" placeholder="Password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div class="col-xs-6">
            <label>CONFIRM PASSWORD</label>
            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>
          <div class="col-xs-12">
            <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> REGISTER</button>
          </div>
          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </form>
  <br/>
  </br>
  <script>
  function checkRadio(name) {
  if(document.getElementById("exampleRadios1").checked){
      $("#programSection").show();
  }else{
      $("#programSection").hide();
  }

    /*  if(name == "one"){

          document.getElementById("one-variable-equations").checked = true;
          document.getElementById("multiple-variable-equations").checked = false;

      } else if (name == "multiple"){
          console.log("Choice: ", name);
          document.getElementById("multiple-variable-equations").checked = true;
          document.getElementById("one-variable-equations").checked = false;
      }*/
  }
  </script>
@endsection
