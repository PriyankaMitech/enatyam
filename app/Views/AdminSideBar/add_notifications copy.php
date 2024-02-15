<?php echo view('AdminSideBar.php'); ?>
<style>
    .scrollable-list {
        max-height: 150px;
        overflow-y: auto;
        margin-bottom: 10px;
    }
</style>
<div class="content-wrapper" style="min-height: 1172.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Notifications</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Notifications</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <!-- <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Notifications</h3>

                            </div>

                            <form id="notificationForm" method="post" action="<?php echo base_url(); ?>setnotification">
                                <div class="card-body">
                                    <div class="form-row">-->
                                        <!-- User Type Selection -->
                                        <!-- <div class="form-group col-md-12">
                                            <label for="inputUserType">User Type</label>
                                            <select id="inputUserType" class="form-control custom-select" required>
                                                <option selected disabled>Select one</option>
                                                <option value="student">Student</option>
                                                <option value="faculty">Faculty</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div> -->

                                        <!-- Student Form Elements -->
                                        <!-- <div class="form-group col-md-6" id="studentFormElements" style="display:none;">
                                            <label>Select Students</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="all" id="selectAllStudents" name="selected_students[]">
                                                <label class="form-check-label" for="selectAllStudents">
                                                    Select All Students
                                                </label>
                                            </div> -->
                                            <!-- <div class="scrollable-list" id="studentList"> -->
                                                <!-- Display all student names here with checkboxes -->
                                                <!-- <?php foreach ($admins as $student) : ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?= $student->id ?>" name="selected_students[]">
                                                        <label class="form-check-label" for="student<?= $student->id ?>">
                                                            <?= $student->full_name ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?> -->
                                            <!-- </div>
                                        </div> -->

                                        <!-- Faculty Form Elements -->
                                        <!-- <div class="form-group col-md-6" id="facultyFormElements" style="display:none;">
                                            <label>Select Faculty</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="all" id="selectAllFaculty" name="selected_faculty[]">
                                                <label class="form-check-label" for="selectAllFaculty">
                                                    Select All Faculty
                                                </label>
                                            </div>
                                            <div class="scrollable-list" id="facultyList"> -->
                                                <!-- Display all faculty names here with checkboxes -->
                                                <!-- <?php foreach ($Faculty as $faculty) : ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?= $faculty->id ?>" name="selected_faculty[]">
                                                        <label class="form-check-label" for="faculty<?= $faculty->id ?>">
                                                            <?= $faculty->full_name ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?> -->
                                            <!-- </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="notification_date">Select Date</label>
                                        <input type="date" id="notification_date" class="form-control" name="notification_date" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div> -->
                                    <!-- Other common form elements -->
                                    <!-- <div class="form-group">
                                        <label for="notification_description">Create Notifications</label>
                                        <textarea id="notification_description" class="form-control" rows="4" name="notification_description" required></textarea>
                                    </div> -->

                                    <!-- Form Action -->
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div> -->
                <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
            


    
        <!-- </section> -->

        <!-- Main content -->
    <section class="content">
        <!-- Your existing content code -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Notifications</h3>

                            </div>

                            <form id="notificationForm" method="post" action="<?php echo base_url(); ?>setnotification">
                                <div class="card-body">
                                    <div class="form-row">
                                        <!-- User Type Selection -->
                                        <div class="form-group col-md-12">
                                            <label for="inputUserType">User Type</label>
                                            <select id="inputUserType" class="form-control custom-select" required>
                                                <option selected disabled>Select one</option>
                                                <option value="student">Student</option>
                                                <option value="faculty">Faculty</option>
                                                <option value="both">Both</option>
                                            </select>
                                        </div>

                                        <!-- Student Form Elements -->
                                        <div class="form-group col-md-6" id="studentFormElements" style="display:none;">
                                            <label>Select Students</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="all" id="selectAllStudents" name="selected_students[]">
                                                <label class="form-check-label" for="selectAllStudents">
                                                    Select All Students
                                                </label>
                                            </div>
                                            
                                             <!-- <div class="scrollable-list" id="studentList"> -->
                                                <!-- Display all student names here with checkboxes -->
                                                <!-- <?php foreach ($admins as $student) : ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?= $student->id ?>" name="selected_students[]">
                                                        <label class="form-check-label" for="student<?= $student->id ?>">
                                                            <?= $student->full_name ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>  -->

                                            <div class="col-md-4"> 
                                                <div class="form-group">
                                                    <label>Student</label>
                                                    <div id="student_checkbox_list">
                                                        <!-- Student checkboxes will be dynamically generated here -->
                                                    </div>
                                                    <input type="hidden" id="selected_student_id" value="<?php if (isset($single_data)) { echo ($single_data->student_id); } ?>">
                                                    <label id="student_id-error" class="error" for="student_id" style="display:none;">Please select at least one student.</label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Faculty Form Elements -->
                                        <div class="form-group col-md-6" id="facultyFormElements" style="display:none;">
                                            <label>Select Faculty</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="all" id="selectAllFaculty" name="selected_faculty[]">
                                                <label class="form-check-label" for="selectAllFaculty">
                                                    Select All Faculty
                                                </label>
                                            </div>
                                            <div class="scrollable-list" id="facultyList">
                                                <!-- Display all faculty names here with checkboxes -->
                                                <?php foreach ($Faculty as $faculty) : ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?= $faculty->id ?>" name="selected_faculty[]">
                                                        <label class="form-check-label" for="faculty<?= $faculty->id ?>">
                                                            <?= $faculty->full_name ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="notification_date">Select Date</label>
                                        <input type="date" id="notification_date" class="form-control" name="notification_date" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                    <!-- Other common form elements -->
                                    <div class="form-group">
                                        <label for="notification_description">Create Notifications</label>
                                        <textarea id="notification_description" class="form-control" rows="4" name="notification_description" required></textarea>
                                    </div>

                                    <!-- Form Action -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->
            </div>

        <div class="container-fluid">
            <!-- Add filtering options for courses and subcourses -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputCourse">Course</label>
                        <select class="form-control" name="courses_id_n" id="courses_id_n" >
                          <option >Please select course</option>
                          <?php if(!empty($courses_data)){?>
                              <?php foreach ($courses_data as $data){ ?>
                                  <option value="<?=$data->id; ?>">
                                      <?= $data->courses_name; ?>
                                  </option>
                              <?php } ?>
                          <?php } ?>
                      </select>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputSubCourse">Sub Course</label>
                        <select id="inputSubCourse" class="form-control">
                            <option value="">Select Sub Course</option>
                             Populate options dynamically based on the selected course 
                        </select>
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sub Courses</label>
                        <!-- <input type="hidden" id="selected_sub_courses_id_n" value="<?php //if (isset($single_data)) { echo ($single_data->sub_courses_id_n); } ?>">  -->
                        <select name="sub_courses_id_n" id="sub_courses_id_n" class="form-control">
                            <option value="">Please select sub courses</option>
                        </select>
                    </div>
                </div> 
            </div>

            <!-- Your existing form code -->

        </div>
    </section>

</div>

<?php echo view('AdminSideBar/AdminFooter.php'); ?>