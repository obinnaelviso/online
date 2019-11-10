@extends('dashboard.adminmaster')

@section('content')

<script type="text/javascript">
 //<![CDATA[
 // array of possible countries in the same order as they appear in the country selection list
 var countryLists = new Array(9)
 countryLists["empty"] = ["Select a Category"];
 countryLists["Category"] = ["Academic", "Teaching & Learning", "Research, Publication and Innovation", "Internationalization & Networking", "Award/ Stewardship", "Recognition & Professional Services", "Income Generation", "Promotion Initiatives", "Employability"];
 countryLists["Academic"] = ["Post Graduate students registered", "GOT"];
 countryLists["Teaching & Learning"] = ["Execution of Program according to MQF requirement", "Innovative teaching", "Quality Graduates"];
 countryLists["Research, Publication and Innovation"]= ["Consultation","Publication", "Critical Mass", "Research Grant", "Innovation", "Network & Linkages", "International Academic staff"];
 countryLists["Internationalization & Networking"]= ["International Students", "Multi national joint research programs", "International Student Exchange Initiatives"];
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

<form action="{{url('addcitedkpi')}}" method="post">
{{ csrf_field() }}

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>CITeD KPI</h5>
							<div class="section-divider"></div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>CATEGORY</h6>
                  @if(count($errors) > 0)


        @foreach($errors->all() as $error)

        <h4 style="color:red">*{{$error}}</h4>


        @endforeach





                  @endif
									<div class="inner-item">
										<div class="dash-form">
											<!--<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-calendar"></i>CATEGORY</label>
												<select>
													<option>-- Select --</option>
													<option>ACADEMIC</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
													<option>TEACHING & LEARNING</option>
												</select>
											</div>-->
											<label for="category">Select Category</label>
  <select id="category" name="category" onchange="countryChange(this);">
    <option value="empty">Select a Category</option>
    <option value="Academic">Academic</option>
    <option value="Teaching & Learning">Teaching & Learning</option>
    <option value="Research, Publication and Innovation">Research, Publication and Innovation</option>
    <option value="Internationalization & Networking">Internationalization & Networking</option>
    <option value="Award/ Stewardship">Award/ Stewardship</option>
    <option value="Recognition & Professional Services">Recognition & Professional Services</option>
    <option value="Income Generation">Income Generation</option>
    <option value="Promotion Initiatives">Promotion Initiatives</option>
    <option value="Employability">Employability</option>
  </select>
  <br/>
  <label for="country">Select a KPI</label>
  <select id="country" name="kpi">
    <option value="0">Select a KPI</option>
  </select>
  <label for="input">Enter number </label>
   <input type="text" name="number" value=""><br><br>
    <label for="input">Enter description </label>
   <input type="text" name="description" value=""><br><br>
   Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

   <input type="submit" value="Submit" name="submit">

</form>
		@endsection
