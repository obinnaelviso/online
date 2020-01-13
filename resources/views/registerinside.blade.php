<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Online Community-based Ecosystem (OnCE)</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
        <div class="row nav-row trans-menu navbar navbar-fixed-top" style="position:fixed; top:0 ; left : ; background:black;">
            <div class="container nav-container">
				<div class="top-navbar">
					<div class = "pull-right">
						<div class="top-nav-social pull-left">
								<a href="https://www.facebook.com/citedfpum" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/CITeD14" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.youtube.com/channel/UCv2nJkf5Zg4i1c3ImlC6CVQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a>
								{{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
						</div>
						<div class="top-nav-login-btn pull-right">
              @if (Auth::guest())

              <a href="registerinside"><i class="fa fa-sign-in"></i>REGISTER FOR InSIDE2020</a>
              @else

                <a href="{{route('logout')}}" target="_blank"><i class="fa fa-sign-in"></i>LOG OUT</a>
              @endif

						</div>

					</div>
					<div class = "clearfix"></div>
				</div>
				<!--<div class="logo"><a href="#"><img src="assets/img/cited.jpg" alt="CITeD"></a></div>
				--><div class = "clearfix"></div>
                <nav id="pathshalaNavbar" class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pathshalaNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="pull-right"><img src="assets/img/once.png" width="100px" height="100px">  </div>
                        <!--<a class="navbar-brand" href="home">Online Community-based <br/> Ecosystem (OnCE)</a>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pathshalaNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="home" target="_blank"><i class="fa fa-home"></i>HOME</a></li>
                            <li><a href="inside2020" target="_blank"><i class="fa fa-user"></i>InSIDE2020</a></li>
                              <li><a href="aboutinside" target="_blank"><i class="fa fa-image"></i>ABOUT InSIDE</a></li>
                              <li><a href="galleryinside" target="_blank"><i class="fa fa-image"></i>GALLERY</a></li>
                            <li><a href="terms" target="_blank"><i class="fa fa-tasks"></i>TERMS AND CONDITION </a>
                            </li>


						 <li><a href="contact" target="_blank"><i class="fa fa-phone-square"></i>CONTACT US</a></li>

                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>

        <div class="row " id="overlay">
          <br/> </br>
          <div class="jumbotron"> </div>

        </div>

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>BE A PART OF InSIDE2020</h2>
    </div>
  </div>

  <!-- register row -->
  <form action="{{ route('registerInside') }}" method="post">
    @csrf
    <div class="row contact-row">
      <div class="container">
        <div class="contact-form col-sm-6">
          <div class="col-xs-12">
            <h3><i class="fa fa-edit"></i>FILL ALL FIELDS.</h3>
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
            <label>CHOOSE A CATEGORY</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="catype" id="exampleRadios1" value="Primary school pupils (with teacher/pupils)" checked onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios1">
              Primary school pupils (with teacher/pupils)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="catype" id="exampleRadios2" value="Secondary school students (with teacher/ students)"  onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios2">
              Secondary school students (with teacher/ students)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="catype" id="exampleRadios3" value="Primary school or secondary teachers"  onclick="checkRadio(name)">
              <label class="form-check-label" for="exampleRadios3">
            	Primary school or secondary teachers
              </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="catype" id="exampleRadios4" value="Higher educational institution students"  onclick="checkRadio(name)">
             <label class="form-check-label" for="exampleRadios4">
             Higher educational institution students
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="catype" id="exampleRadios5" value="Higher educational institution - academic members"  onclick="checkRadio(name)">
             <label class="form-check-label" for="exampleRadios5">
             Higher educational institution - academic members
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="catype" id="exampleRadios6" value="Higher educational institution - non-academic members"  onclick="checkRadio(name)">
             <label class="form-check-label" for="exampleRadios6">
            Higher educational institution - non-academic members
             </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="catype" id="exampleRadios7" value="Industry"  onclick="checkRadio(name)">
            <label class="form-check-label" for="exampleRadios7">
          Industry
            </label>
         </div>
          </div>


          <div class="col-xs-12">
            <label>IDENTIFICATION NUMBER</label>
            <input type="text" placeholder="IC Number" class="form-control" name="idnum" value="{{ old('idnum') }}">
          </div>
          <div class="col-xs-12">
            <label>CORRESPONDENCE</label>
            <input type="text" placeholder="Correspondence" class="form-control" name="correspondence" value="{{ old('correspondence') }}">
          </div>
          <div class="col-xs-12">
            <label>EMAIL</label>
            <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="{{ old('email') }}">
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
            <label>MAILING ADDRESS</label>
            <textarea type="text" rows="5" placeholder="Insert Mailing Address" class="form-control" name="mailaddress" value="{{ old('mailaddress') }}"></textarea>
          </div>
          <div class="col-xs-12">
            <label>TELEPHONE</label>
            <input type="text" placeholder="Insert contact phone number" class="form-control" name="telephone" value="{{ old('telephone') }}">
          </div>
          <div class="col-xs-12">
            <label>WHATSAPP NUMBER</label>
            <input type="text" placeholder="Insert whatsapp phone number" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">
          </div>
          <div class="col-xs-12">
            <span data-toggle="tooltip" title="Insert your instituition / school / industry">
            <label>NAME OF INSTITUITION / SCHOOL / INDUSTRY </label> <i class="fa fa-question-circle-o"></i></span>
            <textarea type="text" rows="5" placeholder="Insert your instituition / school / industry" class="form-control" name="schoolname" value="{{ old('schoolname') }}">
            </textarea>
          </div>
          <div class="col-xs-12">
            <span data-toggle="tooltip" title="Insert PARTICPANTS FULL NAME WITH A COMMA TO SEPERATE">
            <label>NAMES OF PARTICIPANTS</label> <i class="fa fa-question-circle-o"></i></span>
            <textarea type="text" rows="5" placeholder="Insert PARTICPANTS FULL NAME WITH A COMMA TO SEPERATE" class="form-control" name="participants" value="{{ old('participants') }}">
            </textarea>
          </div>
          <div class="col-xs-12">
            <label>PRODUCT NAME</label>
            <input type="text" placeholder="Product Name" class="form-control" name="productname" value="{{ old('productname') }}">
          </div>
          <div class="col-xs-12" id="cert">
                <span data-toggle="tooltip" title="For more than 1 certificate, please select additonal number of certificates to pre-order">
                  <label>SELECT NUMBER OF CERTIFICATE(S)</label> <i class="fa fa-question-circle-o"></i></span>
                  <select class="form-control" name="cert" required>
                    <option value="">- Select  -</option>
                    <option>0</option>
                    <option>1 </option>
                    <option>2 </option>
                    <option>3 </option>
                    <option>4 </option>
                    <option>5 </option>
                    <option>6</option>
                    <option>7 </option>

                  </select>
                </div>
                <div class="col-xs-12" id="medal">
                  <span data-toggle="tooltip" title="For more than 1 medal, please select additonal number of medals to pre-order">
                        <label>SELECT NUMBER OF MEDAL(S)</label> <i class="fa fa-question-circle-o"></i></span>
                        <select class="form-control" name="medal" required>
                          <option value="">- Select  -</option>
                          <option>0</option>
                          <option>1 </option>
                          <option>2 </option>
                          <option>3 </option>
                          <option>4 </option>
                          <option>5 </option>
                          <option>6</option>
                          <option>7 </option>
                        </select>
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
<div class="row footer-row">
  <div class="container">
    <div class="school-logo">
      <i class="fa fa-graduation-cap"></i>
      <h3>UNIVERSITI MALAYA</h3>
      <h6>BETTER WAY TO LEARN & GROW</h6>
    </div>
    <div class="col-md-4 col-sm-6 footer-item">
      <h5>CONTACT US</h5>
      <p><i class="fa fa-map-marker"></i>Jalan SS 7/2</p>
      <p><i class="fa fa-mobile"></i> +60367100891</p>
      <p><i class="fa fa-envelope"></i>email@once.com</p>
    </div>
    <div class="col-md-2 col-sm-6 footer-item">
      <h5>QUICK LINKS</h5>
      <div class="quick-link-box">
        <a href="management"><i class="fa fa-graduation-cap"></i>MANAGEMENT</a>
        <a href="stationhome"><i class="fa fa-users"></i>STATION</a>
        <a href="commercial"><i class="fa fa-calendar"></i>TECHNOSPHERE</a>
        <a href="networking"><i class="fa fa-thumbs-up"></i>NETWORKING</a>
      </div>
    </div>
    <div class="clearfix visible-sm"></div>

    <div class="col-md-3 col-sm-6 footer-item">
      <h5>SUBSCRIBE</h5>
      <div class="footer-subscribe">
        <i class="fa fa-envelope"></i></a><input type="text" placeholder="admin@once.com" />
      </div>
      <a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
    </div>
  </div>
  <div class="footer-social-row">
    <a href="https://www.facebook.com/citedfpum"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/CITeD14"><i class="fa fa-twitter"></i></a>
    <a href="https://www.youtube.com/channel/UCv2nJkf5Zg4i1c3ImlC6CVQ?view_as=subscriber"><i class="fa fa-youtube"></i></a>
  </div>
</div>

<!-- Login Modal -->
<!-- Modal -->
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content login-modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN/REGISTER</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('mylogin')}}">
          {{ csrf_field() }}
        <div>
          <label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
          <input class="form-control" name="username" type="text" placeholder="Username/Email">
        </div>
        <div>
          <label><i class="fa fa-key"></i>PASSWORD</label>
          <input class="form-control" name="password" type="password" placeholder="Password">
        </div>
        <a href="#" class="forgot-link">FORGOT PASSWORD?</a>
        <button type="submit" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</button>
      </form>
      </div>
    </div>
  </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
    <!-- Scripts -->
    <script src="assets/js/jQuery_v3_2_0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
