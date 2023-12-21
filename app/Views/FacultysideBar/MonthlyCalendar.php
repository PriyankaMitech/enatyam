<?php echo view('FacultySidebar2'); ?>

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
              <h3 class="card-title">Share your Availability</h3>
            </div>
            <div class="card-body">
            <?php if(isset($schedule_data) && !empty($schedule_data)) { 
                $Monday_Start_Time = null;
                $Monday_End_Time = null;

                foreach($schedule_data as $day_row){
                    if($day_row->DAY_NAME == "Monday") {
                        $Monday_Start_Time = $day_row->START_TIME;
                        $Monday_End_Time = $day_row->END_TIME;
                    }
                }         
            } ?>
                <form action="<?php echo base_url()?>save_schedule_data" method="post">
                    <div class="row dynamic_add_slot">
                        <div class="form-group col-lg-12 col-md-12 ">
                            <label class="form-label col-lg-4 col-md-6 weekday_label mon_err">Monday</label>
                        </div>
                        <div class="form-group  col-lg-4 col-md-6">
                            <input type="time" id="start_time" name="START_TIME[]" value="" class="form-control monday_start_hour start-hour">
                        </div>
                        <div class="form-group  col-lg-4 col-md-6">
                            <input type="time" name="END_TIME[]" value="" id="monday_end0" class="form-control monday_finish_hour monday-finish-hour">
                            <input type="hidden" name="DAY_ARRAY[]" value="Monday" id="monday_end">
                        </div> 
                        <div class="form-group  col-lg-4 col-md-6"> 
                            <button type="button" id="monday_add_btn" class="btn btn-primary waves-effect waves-light  add_new_slot_details_btn" value="Validate" onclick="return Validate_monend()">Add </button>
                        </div>
                    </div>
                    <?php foreach($schedule_data as $day_row){?>
                        <div class="row">
                            <div class="form-group  col-lg-4 col-md-6">
                                <input type="time" id="start_time" name="START_TIME[]" value="<?php echo (isset($Monday_Start_Time) && !empty($Monday_Start_Time)) ? $Monday_Start_Time:"" ;?>" class="form-control monday_start_hour start-hour">
                            </div>
                            <div class="form-group  col-lg-4 col-md-6">
                                <input type="time" name="END_TIME[]" value="<?php echo (isset($Monday_End_Time) && !empty($Monday_End_Time)) ? $Monday_End_Time:"" ;?>" id="monday_end0" class="form-control monday_finish_hour monday-finish-hour">
                                <input type="hidden" name="DAY_ARRAY[]" value="Monday" id="monday_end">
                            </div> 
                        </div>
                    <?php } ?>
                    <div class="col-md-4 p-2">
                        <button type="submit" class="btn btn-success schedulebtn">Submit</button>
                    </div>
                </form>
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