@extends('dashboard.adminmaster')

@section('content')

<!-- MAIN CONTENT -->
<div class="main-content" id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 clear-padding-xs">
        <h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
        <div class="section-divider"></div>
        <div class="dashboard-stats">
          <div class="col-sm-6 col-md-3">
            <div class="stat-item">
              <div class="stats">
                <div class="col-xs-8 count">
                  <h1>199</h1>
                  <p>STUDENTS</p>
                </div>
                <div class="col-xs-4 icon">
                  <i class="fa fa-users ex-icon"></i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="status">
                <p class="text-ex"><i class="fa fa-pencil-square-o"></i>10 Joined Today</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="stat-item">
              <div class="stats">
                <div class="col-xs-8 count">
                  <h1>111</h1>
                  <p>TEACHERS</p>
                </div>
                <div class="col-xs-4 icon">
                  <i class="fa fa-user-secret danger-icon"></i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="status">
                <p class="text-danger"><i class="fa fa-exclamation-triangle"></i>5 Seminars Today</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="clearfix visible-sm"></div>
          <div class="col-sm-6 col-md-3">
            <div class="stat-item">
              <div class="stats">
                <div class="col-xs-8 count">
                  <h1>900</h1>
                  <p>SEMINARS</p>
                </div>
                <div class="col-xs-4 icon">
                  <i class="fa fa-flag look-icon"></i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="status">
                <p class="text-look"><i class="fa fa-clock-o"></i>1 Seminar tomorrow</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="stat-item">
              <div class="stats">
                <div class="col-xs-8 count">
                  <h1>799</h1>
                  <p>MESSAGES</p>
                </div>
                <div class="col-xs-4 icon">
                  <i class="fa fa-envelope-o success-icon"></i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="status">
                <p class="text-success"><i class="fa fa-folder-open-o"></i>10 Unread messages</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br/><br/><br/><br/>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Lecturer's Documents </h3>
            <p class="card-text">All Lecturer's Note and Documents</p>
            <a href="lecturernote" target="_blank" class="btn btn-primary">Lecturer's Documents</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Lecturer's KPI</h3>
            <p class="card-text">Update KPI for Lecturers</p>
            <a href="admin" target="_blank" class="btn btn-primary">Update KPI</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Students Information</h3>
            <p class="card-text">View all students information here</p>
           <a href="admin-student-list" target="_blank" class="btn btn-primary">Students Information</a>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Add Book </h3>
            <p class="card-text">All Books and Journals</p>
            <a href="station.index" target="_blank" class="btn btn-primary">Books and Jornals</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="menu-togggle-btn">
    <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
  </div>

  <br/>


  <div class="dash-footer col-lg-12">
    <p>Copyright OnCE</p>
  </div>
</div>
@endsection
