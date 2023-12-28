<?php include('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Faculty List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Faculty List</li>
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
                <h3 class="card-title">Faculty List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>course</th>
                        <th>sub course</th>
       

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $session = \Config\Services::session();
                       $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

                    if(!empty($faculty_list)){ $i='1';
                    
                      // echo "<pre>";print_r($faculty_list);
                    ?>
                    <?php foreach ($faculty_list as $data) { 

                      
                     

                      // echo "<pre>";print_r($faculty_list);exit();
                      ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data->full_name; ?></td>
                            <td><?= $data->email; ?></td>
                            <td><?= $data->phone; ?></td>
                            <td><?= $data->courses_name;?></td>
                            <td><?= $data->sub_courses_name; ?></td>
       


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

