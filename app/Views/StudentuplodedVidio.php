<?php include('FacultySidebar2.php');?>

<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
    </li>
    </ul>
</nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students Videos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students Videos</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Students Videos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row mt-4">
              <?php 
              
              if (!empty($results)){ ?>
                <?php foreach ($results as $data){ ?>
                    <?php
                            // Generate a random background color based on the student's name
                            $randomColor1 = '#' . substr(md5($data->Student_name), 0, 4);
                            ?>
                    <div class="col-sm-4 mt-3" >
                        <div class="position-relative videoofs" >
                            <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                            <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                <!-- Adjust the video size -->
                                <source class="img-fluid"
                                    src="<?= base_url('public/uploads/StudentStudyvideos/' . $data->name) ?>" type="video/mp4">
                            </video>
                            <?php
                            // Generate a random background color based on the student's name
                            $randomColor = '#' . substr(md5($data->Student_name), 0, 6);
                            ?>
                            <div class="ribbon-wrapper ribbon-lg">
                                <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                    <?= $data->Student_name ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
                  
   
             
                </div>
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
  <!-- /.content-wrapper -->


<!-- ./wrapper -->


