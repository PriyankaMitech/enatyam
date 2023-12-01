
<?php echo view('AdminSideBar.php'); ?>
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url() ?>Admindashboard" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(''); ?>logout" class="nav-link">Logout</a>
            </li>
    </ul>
  </nav>
</div>


    <div class="content-wrapper" style="min-height: 1172.73px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Demo Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Demo Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-top mb-3">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">GroupSession</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">One To One
                                                Session</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <!-- <div>
                                                <label for="courseSearch">Search by Course:</label>
                                                <input type="text" id="courseSearch">
                                                <label for="subCourseSearch">Search by Sub Course:</label>
                                                <input type="text" id="subCourseSearch">
                                            </div> -->
                                            <table id="groupSessionTable" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Sub Course</th>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($groupSessionStudents as $student) : ?>
                                                        <tr class="student-row" data-id="<?= $student->id ?>" data-course="<?= $student->course ?>" data-subcourse="<?= $student->sub_course ?>">
                                                            <td><input type="checkbox" class="select-checkbox"></td>
                                                            <td><?= $student->full_name ?></td>
                                                            <td><?= $student->email ?></td>
                                                            <td><?= $student->course ?></td>
                                                            <td><?= $student->sub_course ?></td>
                                                            <!-- Add more columns as needed -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <form action="<?= base_url('SelectedForGroup') ?>" method="post">
                                                <div class="form-group">
                                                    <label for="groupName">Group Name:</label>
                                                    <input type="text" class="form-control" id="groupName" name="groupName" required>
                                                    <!-- Display validation error for groupName if it exists -->
                                                    <?= isset($validation) ? $validation->getError('groupName') : ''; ?>
                                                </div>
                                                <table class="table table-bordered" id="selectedRowsTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Course</th>
                                                            <th>Sub Course</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="selectedRowsBody"></tbody>
                                                </table>
                                                <div class="text-right" style="margin-right: 41px;">
                                                    <button type="submit" id="postSelectedRows" class="btn btn-primary">Create
                                                        Group</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <table id="oneToOneSessionTable" class="table table-bordered">
                                                <thead>
                                                    <tr>

                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Sub Course</th>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($OneToOneSession as $student) : ?>
                                                        <tr class="student-row" data-course="<?= $student->course ?>" data-subcourse="<?= $student->sub_course ?>">

                                                            <td><?= $student->full_name ?></td>
                                                            <td><?= $student->email ?></td>
                                                            <td><?= $student->course ?></td>
                                                            <td><?= $student->sub_course ?></td>
                                                            <!-- Add more columns as needed -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Selected Rows Table -->

    </div>
        <?php echo view('AdminSideBar/AdminFooter.php');?>  

