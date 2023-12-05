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
                    <h1>Notifications</h1>
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
            <div class="row">
            <div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Notifications</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <form id="notificationForm" method="post" action="SendNotifications">
            <div class="card-body">
                <div class="form-row">
                    <!-- User Type Selection -->
                    <div class="form-group col-md-12">
                        <label for="inputUserType">User Type</label>
                        <select id="inputUserType" class="form-control custom-select">
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
                        <div class="scrollable-list" id="studentList">
                            <!-- Display all student names here with checkboxes -->
                            <?php foreach ($admins as $student) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $student->id ?>" name="selected_students[]">
                                    <label class="form-check-label" for="student<?= $student->id ?>">
                                        <?= $student->full_name ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
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

                <!-- Other common form elements -->
                <div class="form-group">
                    <label for="inputDescription">Create Notifications</label>
                    <textarea id="inputDescription" class="form-control" rows="4" name="notification_description"></textarea>
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
    <!-- /.card -->
</div>


            </div>
    </section>

</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>