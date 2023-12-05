<?php include('FacultySidebar2.php'); ?>
<style>
    #studentTable {
        width: 100%;
        border-collapse: collapse;
    }

    #studentTable th,
    #studentTable td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    #studentTable th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0074D9;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    #toggle-content {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        background-color: #f9f9f9;
        width: 404px;
        height: 122px;
    }
    div.dataTables_wrapper div.dataTables_filter input {
        margin-left: 0.5em;
        display: inline-block;
        width: auto;
    }
</style>
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
        </li>
    </ul>
</nav>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active"> <a href="<?php echo base_url(); ?>FacultyDashboard"> Dashboard </a></li>


                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class='fas fa-chalkboard-teacher'></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text" id="toggle-button">Today's Sessions</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Availability</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <a class="icon-link" id="showTableLink"> <span class="info-box-text">Student
                                    List</span></a>
                            <span class="info-box-number">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <a class="icon-link"> <span class="info-box-text">conducted classes

                                </span></a>
                            <span class="info-box-number">
                            </span>
                        </div>
                    </div>
                </div>
                <!-- <form method="post"  enctype="multipart/form-data" action="<?php echo base_url('uploadVideo'); ?>"> -->
                <table id="studentsTable" style="display: none;">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Email</th>

                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?php echo $row['student_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <!-- <td> <a href="<?php echo base_url() ?>facultyinfo">View Profile</td> -->
                                <!-- <td>
                                <a
                                    href="<?php echo base_url() ?>facultyinfo?student_id=<?php echo $row['student_id']; ?>">Uplode Video
                                    </a>
                            </td> -->
                                <td>
                                    <a href="<?php echo base_url() ?>facultyinfo?student_id=<?php echo $row['student_id']; ?>" class="button">Upload Video</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                <div class="card" id="studentTable"  style="display: none;">
                    <div class="card-header">
                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Join Date</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?php echo $row['student_id']; ?></td>
                                    <td><?php echo $row['student_name']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td>
                                    <a href="<?php echo base_url()?>Chat" class="btn btn-sm bg-teal"><i class="fas fa-comments"></i></a>
                                    <a href="<?php echo base_url() ?>facultyinfo?student_id=<?php echo $row['student_id']; ?>" class="btn btn-sm bg-teal"><i class="fas fa-file-upload"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div id="" class="collapse">Availability
                <label for="sessiontime">Session (date and time):</label>
                <input type="datetime-local" id="sessiontime" name="sessiontime">
            </div>
            <?php if (!empty($Studentdata)) { ?>
                <div id="StudentList" class="">
                    <p class="info-box-number h3 text-center"><b> Student List</b></p>

                    <table id="studentList-table" class="table">
                        <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Student Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($Studentdata as $data) { ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $data->student_name; ?></td>
                                    <td>
                                        <a class="btn btn-primary mr-4" href="#">Edit</a>
                                        <a class="btn btn-danger mr-4" href="#">Delete</a>
                                        <a class="btn btn-warning mr-4" href="#">Upload</a>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>

                        </tbody>

                    </table>
                </div>
            <?php } ?>

            <!-- datepicker mdb -->
            <!--Grid row-->
            <div class="collapse" id="availability">

                <!-- <h3>daterangepicker - get date example</h3> -->
                <input type="text" name="datetimes" />
                <p id="startDate">Start Date:</p>
                <p id="endDate">End Date:</p>
                <script>
                    //$("input[name='datetimes']").daterangepicker();
                </script>


            </div>


        </div>
        <!-- print the video that uplode by student -->

</div>
<?php include('FacultysideBar/FacultyFooter.php'); ?>