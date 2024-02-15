<?php echo view('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notifications</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Notifications</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form id="notificationForm" method="post" action="<?php echo base_url(); ?>setnotification">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Courses</label>
                      <input type="hidden" id="id" name="id" value="<?php if (isset($single_data)) { echo ($single_data->id); } ?>">

                      <select class="form-control" name="courses_id_n" id="courses_id_n" >
                          <option >Please select course</option>
                          <?php if(!empty($courses_data)){?>
                              <?php foreach ($courses_data as $data){ ?>
                                  <option value="<?=$data->id; ?>"
                                      <?php if ((!empty($single_data)) && $single_data->courses_id_n === $data->id ) { echo 'selected'; } ?>>
                                      <?= $data->courses_name; ?>
                                  </option>
                              <?php } ?>
                          <?php } ?>
                      </select>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sub Courses</label>
                        <input type="hidden" id="selected_sub_courses_id_n" value="<?php if (isset($single_data)) { echo ($single_data->sub_courses_id_n); } ?>">
                        <select name="sub_courses_id_n" id="sub_courses_id_n" class="form-control">
                            <option value="">Please select sub courses</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 checbox" style="display:none"> 
                    <div class="form-group">
                      <label>Please Select Student</label><br>
                      <input type="checkbox" id="select_all_students" > Select All Students
                      <div id="student_id_n"></div>

                      </div>
                </div>

                
                <!-- <div class="col-md-3"> 
                  <div class="form-group">
                    <label>Student</label>
                    <input type="hidden" id="selected_student_id" value="<?php if (isset($single_data)) { echo ($single_data->student_id); } ?>">
                    <select name="student_id[]" id="student_id" class="select2" multiple="multiple" data-placeholder="Select a student" style="width: 100%;">
                    </select>
                    <label id="student_id-error" class="error" for="student_id" style="display:none;">Please select at least one student.</label>
                  </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="form-group">
                    <label>Faculty</label>
                    <input type="hidden" id="selected_faculty_id_n" value="<?php if (isset($single_data)) { echo ($single_data->faculty_id_n); } ?>">

                    <select class="form-control" name="faculty_id_n" id="faculty_id_n" style="width: 100%;">
                   
                    <option value="">Please select faculty</option>

                    </select>
                    </div>
                </div>   -->

               

                <div class="col-md-6 checbox" style="display:none"> 
                    <div class="form-group">
                      <label>Please Select Faculty</label><br>
                      <input type="checkbox" id="select_all_faculty"> Select All Faculty
                      <div id="faculty_id_n"></div>

                      </div>
                </div>


                <!-- <div class="col-md-3">
    <div class="form-group">
        <label>Student</label><br>
        <?php 
        // Loop through the student data and create checkboxes
        if(!empty($admins)) {
            foreach ($admins as $student) { 
                ?>
                <input type="checkbox" name="student_id[]" value="<?= $student->id; ?>"> <?= $student->full_name; ?><br>
            <?php 
            } 
        }
        ?>
        <label id="student_id-error" class="error" for="student_id" style="display:none;">Please select at least one student.</label>
    </div>
</div> -->

<!-- <div class="col-md-3">
    <div class="form-group">
        <label>Faculty</label><br>
        <?php 
        // Loop through the faculty data and create checkboxes
        if(!empty($Faculty)) {
            foreach ($Faculty as $faculty) { 
                ?>
                <input type="checkbox" name="faculty_id[]" value="<?= $faculty->id; ?>"> <?= $faculty->full_name; ?><br>
            <?php 
            } 
        }
        ?>
    </div>
</div> -->


              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="notification_date">Select Date</label>
                      <input type="date" id="notification_date" class="form-control" name="notification_date" value="<?php echo date('Y-m-d'); ?>" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="notification_description">Create Notifications</label>
                    <textarea id="notification_description" class="form-control" rows="4" name="notification_description" required></textarea>
                  </div>
                </div>
                <!-- Other common form elements -->
               
              </div>   
              <div class="row">
              <div class="col-md-4">                   
                  <!-- Form Action -->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
              </div>                

               

              

                <!-- <div class="col-md-12 text-right">
                    <button type="submit" name="submit" value="submit" class="submitButton btn btn-primary" >Submit</button>
                </div> -->
              
            </form>
          </div>
      </div>
      <!-- /.container-fluid -->

    </section>
    </div>
    <!-- /.content -->




<?php echo view('AdminSideBar/AdminFooter.php');?>  



                                    