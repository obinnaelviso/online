@extends('master')

@section('content')
  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>BE A PART OF OUR COMMUNITY</h2>
    </div>
  </div>

  <!-- register row -->
  <form action="{{url('myregister')}}" method="post">
    {{ csrf_field() }}
    <div class="row contact-row">
      <div class="container">
        <div class="contact-form col-sm-6">
          <div class="col-xs-12">
            <h3><i class="fa fa-edit"></i>LET US KNOW YOU.</h3>
            @if(count($errors) > 0)
              @foreach($errors->all() as $error)
              <h4 style="color:red">*{{$error}}</h4>
              @endforeach
            @endif
          </div>
          <div class="col-xs-6">
            <label>FIRST NAME</label>
            <input type="text" placeholder="First Name" class="form-control" name="firstname" value="{{ old('firstname') }}">
          </div>
          <div class="col-xs-6">
            <label>LAST NAME</label>
            <input type="text" placeholder="Last Name" class="form-control" name="lastname" value="{{ old('lastname') }}">
          </div>
          <div class="clearfix"></div>

          <div class="col-xs-12 ">
            <label>ARE YOU A STAFF, A STUDENT OR JUST VISITING UM?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="exampleRadios1" value="0" checked onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios1">
                STUDENT
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="exampleRadios2" value="1"  onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios2">
                LECTURER
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="exampleRadios3" value="2"  onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios3">
                VISITOR
              </label>
           </div>
          </div>
          <div class="col-xs-12" id="programSection">
            <label>SELECT PROGRAM</label>
            <select class="form-control" name="program" required>
              <option value="">- Select -</option>
              <option>POST-GRAD DIPLOMA (EDUCATION) </option>
              <option>POST-GRAD DIPLOMA (ENGINEERING) </option>
              <option>POST-GRAD DIPLOMA (INSTRUCTIONAL TECHNOLOGY) </option>
              <option>MASTERS IN CURRICULUM DEVELOPMENT </option>
              <option>MASTERS IN INSTRUCTIONAL TECHNOLOGY </option>
              <option>PhD </option>
            </select>
          </div>

          <div class="col-xs-12">
            <label>IDENTIFICATION NUMBER</label>
            <input type="text" placeholder="Identification Number" class="form-control" name="idnum" value="{{ old('idnum') }}">
          </div>
          <div class="col-xs-12">
            <label>EMAIL</label>
            <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="{{ old('email') }}">
          </div>
          <div class="col-xs-12">
            <label>CONFIRM EMAIL</label>
            <input type="text" placeholder="Confirm Email" class="form-control" name="email_confirmation" id="confirmEmail">
          </div>
          <div class="col-xs-12">
            <label>PASSWORD</label>
            <input name="password" type="password" placeholder="Password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div class="col-xs-12">
            <label>CONFIRM PASSWORD</label>
            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div class="col-xs-12">
            <label>SECURITY QUESTION</label>
            <input type="text" placeholder="Insert a security question you may need to reset your account" class="form-control" name="question" value="{{ old('question') }}">
          </div>
          <div class="col-xs-12">
            <label>SECURITY ANSWER</label>
            <input type="text" placeholder="Insert security answer" class="form-control" name="answer" value="{{ old('answer') }}">
          </div>
          <div class="col-xs-12">
            <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> REGISTER</button>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </form>
</br>
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
