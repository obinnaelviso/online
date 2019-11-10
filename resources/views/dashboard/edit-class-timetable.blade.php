@extends('dashboard.lecturermaster')

@section('content')

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-edit"></i>EDIT DETAILS</h4>
          </div>
          <div class="modal-body dash-form">
            <div class="col-sm-3">
              <label class="clear-top-margin"><i class="fa fa-clock-o"></i>SLOT</label>
              <select>
                <option>09 - 10 AM </option>
                <option>09 - 10 AM </option>
                <option>10 - 11 AM </option>
                <option>11 - 12 PM </option>
              </select>
            </div>
            <div class="col-sm-3">
              <label class="clear-top-margin"><i class="fa fa-calendar"></i>MONDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label class="clear-top-margin"><i class="fa fa-calendar"></i>TUESDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label class="clear-top-margin"><i class="fa fa-calendar"></i>WEDNESDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-3">
              <label><i class="fa fa-calendar"></i>THURSDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label><i class="fa fa-calendar"></i>FRIDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label><i class="fa fa-calendar"></i>SATURDAY</label>
              <select>
                <option>MTH101 </option>
                <option>PHY101</option>
                <option>BIO101</option>
                <option>CHE101</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>
				</div>
        <div class="modal-footer">
          <div class="table-action-box">
            <a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
            <a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
          </div>
        </div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>

			</div>
		</div>





        <div class="dash-footer col-lg-12">
          <p>Copyright OnCE
        </div>
      </div>
    </div>
    @endsection
