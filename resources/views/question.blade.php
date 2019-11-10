@extends('master')

@section('content')

  <!-- Page Title Section -->
  <div class="row page-title page-title-about">
    <div class="container">
      <h2><i class="fa fa-users"></i>PLEASE ANSWER YOUR SECURITY ANSWER</h2>
    </div>
  </div>

  <!-- Login Modal -->
  <form action="{{url('answer')}}" method="post">
{{ csrf_field() }}
  <div class="row contact-row">
    <div class="container">
      <div class="contact-form col-sm-6">
        <div class="col-xs-12">
          <h3><i class="fa fa-edit"></i> ANSWER SECURITY QUESTION</h3>
          @if(count($errors) > 0)


        @foreach($errors->all() as $error)

        <h4 style="color:red">*{{$error}}</h4>


        @endforeach

          @endif

        </div>
        <div class="col-xs-12">
          <label>SECURITY QUESTION:{{$securityquestion}}</label>
          <label></label>
        </div>

        <div class="col-xs-12">
          @if(count($errors) > 0)


@foreach($errors->all() as $error)

<h4 style="color:red">*{{$error}}</h4>


@endforeach





          @endif
          <label>PLEASE ENTER THE ANSWER BELOW</label>
          <input name="answer" type="text" placeholder="Security Answer" class="form-control"  required>
            <input name="email" type="hidden" value="{{$email}}">
        </div>

        <div class="col-xs-12">

          <button type="submit" class="submit-contact-form" style="width:100%"><i class="fa fa-paper-plane"></i> SUBMIT</button>
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</form>


  	@endsection
