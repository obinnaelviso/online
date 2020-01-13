@extends('inside.insidemaster')

@section('content')

<script type="text/javascript">
 //<![CDATA[
 // array of possible countries in the same order as they appear in the country selection list
 var countryLists = new Array(9)
 countryLists["empty"] = ["Select your study status"];
 countryLists["Status"] = ["Seminar 1", "Seminar 2", "VIVA/BOE", "Not Applicable"];
 countryLists["Seminar 1"] = ["Submitted", "Making Corrections", "Completed"];
 countryLists["Seminar 2"] = ["Submitted", "Making Corrections", "Completed"];
 countryLists["VIVA/BOE"]= ["Submitted", "Making Corrections", "Completed", "Three Months Notice"];
 countryLists["Not Applicable"]= ["Not Applicable"];
 countryLists["Award/ Stewardship"]= ["Staff", "Student"];
 countryLists["Recognition & Professional Services"]= ["Appointment as adjunct/honorary/visiting professor/visiting fellows/external examiner/accessor", "Appointment as Chairmanship/committee/assoc./editorial board member"];
 countryLists["Income Generation"]= ["Income generated"];
 countryLists["Promotion Initiatives"]= ["Event/promotion organised ", "Alumni", "Employer"];
 countryLists["Employability"]= ["Graduates being employed"];
 /* CountryChange() is called from the onchange event of a select element.
 * param selectObj - the select object which fired the on change event.
 */
 function countryChange(selectObj) {
 // get the index of the selected option
 var idx = selectObj.selectedIndex;
 // get the value of the selected option
 var which = selectObj.options[idx].value;
 // use the selected option value to retrieve the list of items from the countryLists array
 cList = countryLists[which];
 // get the country select element via its known id
 var cSelect = document.getElementById("country");
 // remove the current options from the country select
 var len=cSelect.options.length;
 while (cSelect.options.length > 0) {
 cSelect.remove(0);
 }
 var newOption;
 // create new options
 for (var i=0; i<cList.length; i++) {
 newOption = document.createElement("option");
 newOption.value = cList[i];  // assumes option string and value are the same
 newOption.text=cList[i];
 // add the new option
 try {
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
 }
 catch (e) {
 cSelect.appendChild(newOption);
 }
 }
 }
//]]>
</script>


<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-clock-o"></i>INSIDE PARTICIPANT EDIT PROFILE</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div>
			<div class="col-md-8">
				@if(session()->has('success'))
				    <div class="alert alert-success" role="alert">
				        {{ session()->get('success') }}
				    </div>
				@endif
			</div>
			<form action="{{ route('insideprofileedit') }}" method="post">
				@csrf
				@method('put')
				<div class="clearfix"></div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="firstname">First Name</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}" readonly>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="lastname">Last Name</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}" readonly>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="idnum">Identification Number</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="idnum" name="idnum" value="{{ $user->idnum }}" readonly>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="category">Category</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="program" name="category" value="{{ $user->category }}" readonly>
				    </div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
				        <label for="corresponding">Corresponding Address</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="corresponding" name="corresponding" value="{{ $user->corresponding }}" required>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="mailaddress">Mailing Address</label><span style="color: red !important; display: inline; float: none;">*</span>
				          <input type="text" class="form-control" id="mailaddress" name="mailaddress" value="{{ $user->mailaddress }}" required>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="telephone">Telephone</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}" required>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="whatsapp">Whatsapp Number</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ $user->whatsapp }}" required>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="schoolname">NAME OF INSTITUITION / SCHOOL / INDUSTRY</label><span style="color: red !important; display: inline; float: none;">*</span>
				        <input type="text" class="form-control" id="schoolname" name="schoolname" value="{{ $user->schoolname }}" required>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="participants">Name of Participants</label>
				        <textarea type="text" rows="5" class="form-control" id="participants" name="participants" value="{{ $user->participants }}">
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				        <label for="productname">Product Name</label>
				        <input type="text" class="form-control" id="productname" name="productname" value="{{ $user->productname }}">
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
            <span data-toggle="tooltip" title="For more than 1 certificate, please select additonal number of certificates to pre-order">
              <label>Number of Certificate(S)</label> <i class="fa fa-question-circle-o"></i></span>
                <select class="form-control" name="cert" id="cert" required>
                  <option value="{{ $user->cert}}">- Select  -</option>
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
				</div>
				<div class="col-md-4">
					<div class="form-group">
            <span data-toggle="tooltip" title="For more than 1 medal, please select additonal number of medals to pre-order">
              <label>Number of Medal(S)</label> <i class="fa fa-question-circle-o"></i></span>
              <select class="form-control" name="medal" required>
                <option value="{{ $user->medal}}">- Select  -</option>
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
				</div>

				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Update Info</button>
				</div>
			</form>
			<div class="col-md-8">
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
