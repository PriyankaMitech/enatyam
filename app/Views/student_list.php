<?php include('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course - Sub Course</th>
                        <th>Faculty Name</th>
                        <th>Session Type</th>
                        <th>Group Name</th>
                        <th>Session Start Date</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($student_list)){ $i='1';?>
                    <?php foreach ($student_list as $data) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data->full_name; ?></td>
                            <td><?= $data->email; ?></td>
                            <td><?= $data->course; ?> - <?= $data->sub_course; ?></td>
                            <td><?= $data->teacher_name; ?></td>
                            <td><?= $data->SessionType; ?></td>

                            <td><?= $data->groupName; ?></td>
                            <td><?= $data->Session_Start_Date;?></td>



                    

                        </tr>
                        <?php $i++;} ?>
                        <?php } ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php echo view('AdminSideBar/AdminFooter.php');?>

