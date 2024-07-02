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

#todaySessionsTable th {
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

.toggle-button {
    cursor: pointer;
}

.icon-link {
    cursor: pointer;
}

.availability-link {
    cursor: pointer;
}

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
}

#groupListModal {
    color: #333;
}

#groupListModal .modal-content {
    background-color: #f8f9fa;
}

#groupListModal .modal-header {
    background-color: #007bff;
    color: #fff;
    border-bottom: 1px solid #dee2e6;
}

#groupListModal .modal-title {
    font-weight: bold;
}

#groupListModal .modal-body {
    max-height: 300px;
    overflow-y: auto;
}

#groupListModal .modal-footer {
    border-top: 1px solid #dee2e6;
}
</style>

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

                        <li class="breadcrumb-item active"> <a href="<?php echo base_url(); ?>FacultyDashboard">
                                Dashboard </a></li>


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
                        <span class="info-box-icon bg-danger elevation-1"><i
                                class='fas fa-chalkboard-teacher'></i></span>
                        <div class="info-box-content">
                            <a class="icon-link" id="todaySessionsTable"> <span class="info-box-text">Today's
                                    Sessions</span></a>

                            <!-- <span class="info-box-text toggle-button" data-target="todaySessionsTable" id="">Today's Sessions</span>
                    <span class="info-box-number"></span> -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-calendar"
                                aria-hidden="true"></i></span>
                        <div class="info-box-content">
                            <a class="icon-link" id="GroupTable"> <span class="info-box-text">Group List</span></a>

                            <!-- <span class="info-box-text availability-link" data-target="GroupTable">Group List</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <a class="icon-link" id="showTableLink"> <span class="info-box-text">Student List</span></a>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <a class="icon-link" id="conductedClassesTable"> <span class="info-box-text">Conducted
                                    Classes</span></a>

                            <!-- <a class="icon-link toggle-button" data-target="conductedClassesTable">
                                <span class="info-box-text">Conducted Classes</span>
                            </a> -->
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
                <!-- <form method="post"  enctype="multipart/form-data" action="<?php echo base_url('uploadVideo'); ?>"> -->

            </div>

            <div class="col-md-12 card" id="studentTable" style="display: none;">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
    <?php if (!empty($data)): ?>
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Join Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($data as $row) : ?>
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <!-- Format the date as day monthname year -->
                <td><?php echo date('d F Y', strtotime($row['created_at'])); ?></td>
                <td>
                    <a href="<?php echo base_url()?>chatuser/<?php echo $row['register_id']; ?>"
                        class="btn btn-sm bg-teal"><i class="fas fa-comments"></i></a>
                    <a href="<?php echo base_url() ?>facultyinfo?student_id=<?php echo $row['student_id']; ?>"
                        class="btn btn-sm  badge-primary"><i class="fas fa-file-upload"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>No students are assigned.</p>
    <?php endif; ?>
</div>
            </div>
            <div class="col-md-12 card" id="todaySessionsTableshow" style="display:none;">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Existing search input on the left side -->
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                                <!-- Your search input here -->
                            </div>
                        </div>
                        <?php if (!empty($todaysession)): ?>
                        <p class="mb-0">
                            <?= date('l, F j, Y'); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (empty($todaysession)) : ?>
                    <p>No classes today.</p>
                    <?php else : ?>
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Start Time</th>
                               
                                <th>Join Link</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($todaysession as $session) : ?>
                            <tr>
                                <td><?= $session->student_name; ?></td>
                                <td><?= $session->shedules_time; ?></td>
                               
                                <td>
                                <a href="<?= $session->meetlink; ?>" target="_blank">Join the session</a>
                                </td>
                               
                            </tr>

                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>

            </div>

            <!-- Add a PHP function to format time -->
            <div class="col-md-12 card" id="GroupTableshow" style="display:none">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Existing search input on the left side -->
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Group Name</th>
                                <th>Courses/Sub Courses</th>
                                <th>Student Names</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // echo "<pre>";print_r($group_data);exit();
                            if(!empty($group_data)) { $i=1; ?>

                                
                                <?php foreach($group_data as $datas) {
                                    
                                    
                                    $student_id = explode(',', $datas->student_id);

                                    $studentNames = array(); // To store student names
                                    $wherec = '';


                                    if (!empty($student_id)) {
                                        foreach ($student_id as $student_id_data) {
                                                $wherec = array('id' => $student_id_data);
                                            // Assuming you have a method in your model to get student names by ID
                                            $student = $adminModel->getsinglerow('register',$wherec);
                                            // echo "<pre>";print_r($student);exit();


                                            // Assuming the method returns an object with a 'name' property
                                            // $studentNames[] = $student->full_name;

                                            if (is_object($student) && property_exists($student, 'full_name')) {
                                                    $studentNames[] = $student->full_name;
                                             }

                                            // echo "<pre>";print_r($student);exit();

                                        }
                                    }
                                    ?>
                            <tr>
                                <td><?=$i;?></td>
                                <td><?=$datas->group_name; ?></td>
                                <td><?=$datas->courses_name; ?>/<?=$datas->sub_courses_name;?></td>
                                <td>
                                            <?php $x= 1;
                                                foreach ($studentNames as $studentName) {
                                                    echo $x . ') ' . $studentName . '<br>';
                                                    $x++; // Increment the counter
                                            }
                                            ?>
                                </td>

                                <td>
                             
                                    <a href="<?php echo base_url() ?>addlink/<?=base64_encode($datas->group_name); ?>"
                                        class="btn btn-sm badge-primary"><i class="fas fa-file-upload"></i></a>
                                </td>
                             
                            </tr>
                            <?php } ?>
                            <?php }else{ ?>
                                <tr colspan="4"> No Data Availabel.</tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 card" id="conductedClassesTableshow" style="display: none;">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
    <?php if (!empty($conductedClasses)): ?>
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Session no</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $idCounter = 1; // Initialize the ID counter
                foreach ($conductedClasses as $rows) : ?>
                    <tr>
                        <td><?php echo $idCounter; ?></td>
                        <td><?php echo $rows->student_name; ?></td>
                        <td><?php echo $rows->Session_no; ?></td>
                        <td><?php echo date('l F j, Y', strtotime($rows->date)); ?></td>
                        <td><?php echo date('g:i A', strtotime($rows->date)); ?></td>
                    </tr>
                    <?php $idCounter++; // Increment the ID counter ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No classes found.</p>
    <?php endif; ?>
</div>

            </div>
            <div class="modal fade" id="groupListModal" tabindex="-1" role="dialog"
                aria-labelledby="groupListModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="groupListModalLabel">Group List</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="groupListModalBody">
                            <!-- Content of the modal body will be dynamically populated with JavaScript -->
                        </div>

                    </div>
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