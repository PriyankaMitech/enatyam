<?php echo view('AdminSideBar.php'); ?>
<style>
       

        .card-body {
            background-color: greenyellow;
        }

        .smaller-image {
            width: 75px;
            /* Adjust the size as needed */
            height: 75px;
            /* Adjust the size as needed */
            float: right;
        }

        .faculty-info {
            float: left;
            background-color: #FCA5EA;
            border-radius: 22px;
        }

        .p {
            padding-left: 12px;
        }

        .card {

            background-color: #8a94b3;
        }

        .viddeo {
            height: 160px;
            width: 288px;
        }

        .btn-lg {
            margin-left: 30% !important;
            width: 315px;
            margin-bottom: 10px;
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
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-block btn-success btn-lg" id="showVideoContainer">Uplode Video By Student</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-block btn-success btn-lg" id="showFacultyVideoContainer">Uplode Video By Faculty</button>
        </div>
    </div>
    <div class="container" id="videoContainer" style="display: none;">
        <?php if (!empty($studentVideoData)) { ?>
            <div class="row">
                <?php foreach ($studentVideoData as $faculty) { ?>
                    <?php


                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="faculty-info">
                                <video class="viddeo" controls>
                                    <source src="<?= base_url('public/uploads/videos/' . $faculty->name) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="p">
                                    <p class="card-text">Faculty Name: <?= $faculty->faculty_name; ?>
                                    </p>
                                    <p class="card-text">Date &nbsp;&&nbsp; Time : &nbsp;<?= $faculty->DateTime ?> </p>
                                    <p class="card-text">student name: <?= $faculty->Student_name ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            </div>
    </div>
    <div class="container" id="FacultyVideoContainer" style="display: none;">
        <?php if (isset($FacultyVideoData) && !empty($FacultyVideoData)) :   ?>
            <div class="row">
                <?php foreach ($FacultyVideoData as $faculty) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="faculty-info">
                                <video class="viddeo" controls>
                                    <source src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $faculty->video_name) ?>" type="video/mp4">
                                </video>
                                <div class="p">
                                    <p class="card-text">Faculty Name: <?= $faculty->faculty_name ?></p>
                                    <p class="card-text">Date:<?= $faculty->DateTime  ?> </p>
                                    <p class="card-text">student name: <?= $faculty->student_name ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
    </div>

    </div>
</section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>  
   

   
    