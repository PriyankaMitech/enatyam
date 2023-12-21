<?php echo view('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Group</li>
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
            <h3 class="card-title">Create Group</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?=base_url(); ?>set_create_group_data" method="post" id="create_group_form">
              <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Group Name</label>
                    <input type="text" class="form-control" name="group_name" id="group_name" value="<?php if (isset($single_data)) { echo ($single_data->group_name); } ?>">
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                      <label>Courses</label>
                      <input type="hidden" id="id" name="id" value="<?php if (isset($single_data)) { echo ($single_data->id); } ?>">

                      <select class="form-control" name="courses_id_g" id="courses_id_g" >
                          <option >Please select course</option>
                          <?php if(!empty($courses_data)){?>
                              <?php foreach ($courses_data as $data){ ?>
                                  <option value="<?=$data->id; ?>"
                                      <?php if ((!empty($single_data)) && $single_data->courses_id_g === $data->id ) { echo 'selected'; } ?>>
                                      <?= $data->courses_name; ?>
                                  </option>
                              <?php } ?>
                          <?php } ?>
                      </select>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Sub Courses</label>
                        <input type="hidden" id="selected_sub_courses_id_g" value="<?php if (isset($single_data)) { echo ($single_data->sub_courses_id_g); } ?>">
                        <select name="sub_courses_id_g" id="sub_courses_id_g" class="form-control">
                            <option value="">Please select sub courses</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                  <label>Student</label>
                  <input type="hidden" id="selected_student_id" value="<?php if (isset($single_data)) { echo ($single_data->student_id); } ?>">
                  <select name="student_id[]" id="student_id" class="select2" multiple="multiple" data-placeholder="Select a student" style="width: 100%;">
                  </select>
                  <label id="student_id-error" class="error" for="student_id" style="display:none;">Please select at least one student.</label>
              </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                    <label>Faculty</label>
                    <select class="form-control" name="faculty_id_g" id="faculty_id_g" style="width: 100%;">
                    <option value="">Please select faculty</option>

                    </select>
                    </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label>Session Start Date</label>
                    <input type="date" class="form-control" name="session_start_date" id="session_start_date" value="<?php if (isset($single_data)) { echo ($single_data->session_start_date); }else{ echo date('Y-m-d');} ?>">
                  </div>
                </div>

                <div class="col-md-12 text-right">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
                </div>
              </div>
            </form>
          </div>
      </div>
      <!-- /.container-fluid -->

    </section>
    </div>
    <!-- /.content -->




<?php echo view('AdminSideBar/AdminFooter.php');?>  



