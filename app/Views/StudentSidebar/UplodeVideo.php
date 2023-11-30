<?php echo view('Studentsidebar/Studentsidebar');?>
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

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            
        <div class="center">
        <div class="video-container" style="max-width: 1000px;background-color: #FFA500;border-radius: 26px; margin-top: 59px;">
            <!-- Adjust max-width as needed -->

            <h2><b style="margin-left: 82.5px;">Upload Media</b></h2>
            <form enctype="multipart/form-data" action="<?= site_url('uploadMedia'); ?>" method="POST">
                <!-- Row 1: Input for uploading a video -->
                <div class="row" style="margin-left: 82.5px;">
                    <div class="col">
                        <input type="file" name="videoFile" id="videoFile" class="form-control-file">
                    </div>
                    <div class="col">
                        <input type="submit" value="Upload Video">
                    </div>
                </div>
                <!-- Row 2: Input for uploading an image -->
                <div class="row" style="margin-left: 82.5px;">
                    <div class="col">
                        <input type="file" name="imageFile" class="form-control-file" accept="image/*">
                    </div>
                    <div class="col">
                        <input type="submit" value="Upload Image">
                    </div>
                </div>
            </form>
        </div>

    </div>

        </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php');?>    

