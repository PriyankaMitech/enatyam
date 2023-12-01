

<?php include('AdminSideBar.php'); ?>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;

        }

        .demo-card {
            padding: 10px;
        }

        .demo-card h3 {
            color: #28a745 !important;
            font-size: 18px
        }

        .demo-card h4 {
            color: #17a2b8 !important;
            font-weight: 600
        }

        .demo-card i {
            color: #ffc107 !important;
            float: right;
            display: block;
            text-align: right;
            width: 30px;
            height: 30px;
            background: #ffc10733;
            line-height: 30px;
            text-align: center;
            margin-left: auto;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.5s;
        }

        .demo-card i:hover {
            color: #fff !important;

            background: #ffc107;
        }

        .hidden {
            display: none;
        }

        .show {
            display: block;
            /* or inline, flex, etc. based on your layout */
        }
    </style>

  

<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url(); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
</div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php if (!empty($records)) : ?>
                                        <h3><?= count($records) ?></h3>


                                    <?php else : ?>
                                        <h3>0</h3>
                                    <?php endif; ?>
                                    <p>Today Demo Session</p>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" id="toggle-table5"></i></a>
                                <table id="faculty-table5" class="table" style="display: none;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($records as $row) : ?>
                                            <tr>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['course'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $count ?></sup></h3>

                                    <p> Demos List</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer book-more-info" id="toggle-table2">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>

                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php if (!empty($admins)) : ?>
                                        <h3><?= count($admins) ?></h3>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    <p>Students</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer stud-more-info" id="toggle-table">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>

                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php if (!empty($Faculty)) : ?>
                                        <h3><?= count($Faculty) ?></h3>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    <p>Teachers</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer teach-more-info" id="toggle-table4">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>


                        </div>

                        <div class="col-lg-12">



                            <div class="div-hide" id="faculty-table2" style="display:none">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card demo-card">
                                            <h4><?= count($UnattendedDemoList) ?></h4>
                                            <h3>Unattended Demo List</h3>
                                            <i class="fas fa-long-arrow-alt-right UnattendedList"></i>
                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="card demo-card">
                                            <h4><?php echo abs(count($ConductedDemo) - $count); ?></h4>
                                            <h3>Pending Demo</h3>
                                            <i class="fas fa-long-arrow-alt-right pend-demo"></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="card demo-card">
                                            <h4><?= count($ConductedDemo) ?></h4>
                                            <h3>Conducted Demo</h3>
                                            <i class="fas fa-long-arrow-alt-right coundd_demo"></i>
                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="card demo-card">
                                            <h4><?php echo $count ?></h4>
                                            <h3>Total Demo</h3>
                                            <i class="fas fa-long-arrow-alt-right comp-payment"></i>
                                        </div>
                                    </div>
                                    <!--  -->

                                    <div class="col-lg-12">
                                        <table id="coundd_demo-payment-table" class="table" style="display:none">

                                            <?php foreach ($ConductedDemo as $faculty) : ?>
                                                <tr>
                                                    <form action="<?= base_url('AdminController/addStudent'); ?>" method="post">
                                                        <td><?= $faculty->name; ?></td>
                                                        <td><?= $faculty->email; ?></td>
                                                        <td>
                                                            <input type="hidden" name="email" value="<?= $faculty->email; ?>">
                                                            <button class="btn btn-primary" type="submit">Add
                                                                Student</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php endforeach; ?>


                                        </table>


                                    </div>
                                    <!--  -->
                                    <div class="col-lg-12">
                                        <table id="comp-payment-table" class="table" style="display:none">
                                            <tr>
                                                <th>Name</th>
                                                <th>course</th>
                                                <th>Demo Date</th>

                                            </tr>
                                            <?php foreach ($getAllDemoList as $status) : ?>
                                                <tr>
                                                    <td><?= $status->name; ?></td>
                                                    <td><?= $status->course; ?></td>
                                                    <td><?= $status->Booking_Date_Time; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>


                                    </div>
                                    <!-- unattended DemoList -->
                                    <div class="col-lg-12">
                                        <table id="unattended-tabal" class="table" style="display:none">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>course</th>
                                                <th>Demo Date</th>

                                            </tr>
                                            <?php foreach ($UnattendedDemoList as $status) : ?>
                                                <tr>
                                                    <td><?= $status->name; ?></td>
                                                    <td><?= $status->email; ?></td>
                                                    <td><?= $status->course; ?></td>
                                                    <td><?= $status->Booking_Date_Time; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>


                                    </div>
                                    <div class="col-lg-12">
                                        <table id="pending-demo-table" class="table" style="display:none">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Booking Date</th>
                                                <th>Faculty</th>
                                                <th>course</th>
                                                <th>sub_course</th>
                                                <th>Assign Faculty Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            <?php foreach ($PendingDemo as $facult) : ?>

                                                <tr>
                                                    <form action="<?php echo base_url('AssignTecherForDemo'); ?>" method="POST">
                                                        <input type="hidden" name="studentid" value="<?= $facult->D_id; ?>">
                                                        <td><?= $facult->name; ?></td>
                                                        <td><?= $facult->email; ?></td>
                                                        <td><?= $facult->Date; ?></td>

                                                        <td>
                                                            <select name="faculty_name" class="form-control">

                                                                <?php foreach ($Faculty as $faculty) : ?>
                                                                    <option value="<?= $faculty->id; ?>">
                                                                        <?= $faculty->full_name; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td><?= $facult->course; ?></td>
                                                        <td><?= $facult->sub_course; ?></td>
                                                        <td>
                                                            <?php if ($facult->AssignTecher_id > 0) : ?>
                                                                <p>Assign</p>
                                                            <?php else : ?>
                                                                <p>Not Assign</p>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($facult->AssignTecher_id > 0) : ?>
                                                                <!-- Do nothing or display alternative content when the condition is true -->
                                                            <?php else : ?>
                                                                <button type="submit" name="assign_button" class="btn btn-info">Assign</button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>


                                    </div>
                                </div>
                            </div>


                            <table id="faculty-table2" class="table" style="display: none;">
                                <tr>
                                    <th>Total Demo</th>
                                    <th>Pending Demo</th>
                                    <th>Conducted Demo</th>
                                    <th>Cancel Demo</th>
                                </tr>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td>
                                        <b id="toggle-table6"><?php echo abs(count($ConductedDemo) - $count); ?></b>
                                        <!-- Pending DemoList -->
                                        <table id="faculty-table6" class="table">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Booking Date</th>

                                                <th>Faculty</th>
                                                <th>Assign</th>
                                                <th>Stetus</th>
                                            </tr>
                                            <?php foreach ($PendingDemo as $facult) : ?>

                                                <tr>
                                                    <form action="<?php echo base_url('AssignTecherForDemo'); ?>" method="POST">
                                                        <input type="hidden" name="studentid" value="<?= $facult->D_id; ?>">
                                                        <td><?= $facult->name; ?></td>
                                                        <td><?= $facult->email; ?></td>
                                                        <td><?= $facult->Date; ?></td>

                                                        <td>
                                                            <select name="faculty_name">

                                                                <?php foreach ($Faculty as $faculty) : ?>
                                                                    <option value="<?= $faculty->id; ?>">
                                                                        <?= $faculty->full_name; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button type="submit" name="assign_button">Assign</button>
                                                        </td>
                                                        <td>
                                                            <?php if ($ConductedDemoStatus >= 0) : ?>
                                                                <p>AssignTecher Succesfully</p>
                                                            <?php else : ?>
                                                                <p>Not AssignTecher</p>
                                                            <?php endif; ?>
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </td>
                                    <td id="toggle-table7"><b><?= count($ConductedDemo) ?></b>
                                        <table id="faculty-table7" style="display:none;" class="table">
                                            <?php foreach ($ConductedDemo as $faculty) : ?>
                                                <tr>
                                                    <td><?= $faculty->name; ?></td>
                                                    <td><?= $faculty->email; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </td>
                                    <td>Data 2</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </table>
                            <!-- </form> -->
                            <!--  -->

                            <!-- assign techers to student -->

                            
            <div class="card" id="faculty-table">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
                            <div class="card-body">
                            
    <table id="example1" class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Sub Course</th>
                <th>Assign Faculty</th>
                <th>Assign Faculty Status</th>
                <th>Action</th>
            </tr>
            <?php foreach ($admins as $admin): ?>
        <tr>
            <form action="<?= base_url('AssignTecherToStudent'); ?>" method="POST">
                <input type="hidden" name="studentid" value="<?= $admin->id; ?>">
                <td><?= $admin->full_name; ?></td>
                <td><?= $admin->email; ?></td>
                <td><?= $admin->course; ?></td>
                <td><?= $admin->sub_course; ?></td>
        
                <td class="faculty-select" >
             <select name="faculty_name">
                 <option value="" selected>Select Faculty</option>
                   <?php foreach ($Faculty as $facultyItem): ?>
                  <?php if ($facultyItem->course == $admin->course && $facultyItem->sub_course == $admin->sub_course): ?>
               <option value="<?= $facultyItem->id; ?>" <?php if ($admin->Assign_Techer_id == $facultyItem->id) { echo 'selected'; } ?>>
                   <?= $facultyItem->full_name; ?>
               </option>
               <?php endif; ?>
              <?php endforeach; ?>
             </select>

                </td>
                <td>
                    <?php if ($admin->Assign_Techer_id > 0): ?>
                        AssignTeacher Successfully
                    <?php else: ?>
                        Not AssignTeacher
                    <?php endif; ?>
                </td>
                <td class="change_f">
                    <?php if ($admin->Assign_Techer_id > 0): ?>
                        <button type="submit" name="change_faculty_button" class="btn btn-info"
                                                style="font-size: 12px;">Change Faculty</button>
                    <?php else: ?>
                        <button type="submit" name="assign_button" class="btn btn-warning" style="font-size: 13px;">Assign</button>
                    <?php endif; ?>
                </td>
            </form>
        </tr>
    <?php endforeach; ?>
 </table>




                    </div>
                    </div>
 <!-- Faculty --> 
          
                  <table id="faculty-table4" class="table table-bordered table-striped" style="display: none;" class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>course</th>
                                    <th>sub course</th>
                                    <th>Contact Number</th>
                                    <!-- <th>Assign Students</th> -->

                                </tr>
                                <?php foreach ($Faculty as $faculty) : ?>
                                    <tr>
                                        <td><?= $faculty->full_name; ?></td>
                                        <td><?= $faculty->email; ?></td>
                                        <td><?= $faculty->course; ?></td>
                                        <td><?= $faculty->sub_course; ?></td>
                                        <td><?= $faculty->mobile_no; ?></td>
                                        <!-- <td><button onclick="showStudentTable(this)" class="btn btn-info">Assign -->
                                        <!-- Students</button></td> -->

                                    </tr>
                                <?php endforeach; ?>
                    </table>
                 
        
                            <!-- Faculty -->
                        

                            <table id="student-assignment-table" style="display: none;" class="table">
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>course</th>
                                    <th>Add</th>
                                </tr>
                                <?php foreach ($admins as $faculty) : ?>
                                    <?php foreach ($SessionData as $session) : ?>
                                        <tr>
                                            <td><?= $faculty->full_name; ?></td>
                                            <td><?= $faculty->id; ?></td>
                                            <td><?= $session['course']; ?></td>
                                            </td>
                                            <td> <button class="btn btn-success">Assign</button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>


                    </div>

                    <div class="row">

                    </div>

                </div>
            </section>

        </div>


     <?php echo view('AdminSideBar/AdminFooter.php');?>      
   
    
  

