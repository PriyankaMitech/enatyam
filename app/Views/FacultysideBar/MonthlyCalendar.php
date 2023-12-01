<?php echo view('FacultySidebar2'); ?>
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
</div>
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Set Schedule</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>FacultyDashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Set Schedule</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Set Schedule</h3>
            </div>
            <div class="row card-body">
              <div class="col-md-4 form-group">
                <label>Date:</label>
                <div class="input-group ">
                  <input type="date" class="form-control" name="form_date" id="form_date" />
                </div>
              </div>
              <div class="col-md-4 form-group">
                <label>Star Time:</label>
                <div class="input-group ">
                  <input type="time" class="form-control" name="form_time" id="form_time" />
                </div>
              </div>
              <div class="col-md-4 form-group">
                <label>End Time:</label>
                <div class="input-group ">
                  <input type="time" class="form-control" name="to_time" id="to_time" />
                </div>
              </div>
              <div class="col-md-4 p-2">
                <button type="button" class="btn btn-primary" id="addAppointment">Add More Schedule</button>

              </div>

              <div class="col-md-12 ">
                <form action="FacultyController/selectfacultySchedule" method="post" id="appointmentForm">
                  <input type="hidden" name="faculty_register_id" value="<?= $registerId; ?>">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Schedule Data</h3>
                    </div>
                    <div class="card-body p-0" id="selectedAppointments">
                      <table class="table table-striped">
                        <thead>
                          <tr>

                            <th>Date</th>
                            <th>Star Time</th>
                            <!-- <th>To Date</th> -->
                            <th>End Time</th>

                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="col-md-4 p-2">
                    <button type="submit" class="btn btn-success">Save Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>