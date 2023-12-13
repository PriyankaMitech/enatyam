<?php include('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Demo Classes List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Demo Classes List</li>
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
                <h3 class="card-title">Demo Classes List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>course</th>
                        <th>Sub Course</th>
                        <th>Faculty Name</th>
                        <th>Demo Date</th>
                        <th>Status</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($demo_list)){ $i='1';?>
                    <?php foreach ($demo_list as $data) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data->name; ?></td>
                            <td><?= $data->course; ?></td>
                            <td><?= $data->sub_course; ?></td>
                            <td><?= $data->full_name; ?></td>


                            <td><?= $data->Booking_Date_Time; ?></td>
                            <td><?php if($data->Conducted_Demo == 'Reschedule'){ echo 'Reschedule'; }else if($data->Conducted_Demo == 'Y'){ echo  'Done'; }else{
                                echo 'Not Conducted';
                            } ?></td>

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

