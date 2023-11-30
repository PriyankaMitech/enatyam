<?php include('FacultySidebar2.php');?>
<style>
    .video-row {
        display: flex;
        justify-content: space-between; /* Distribute videos evenly within the row */
        margin-bottom: 20px; /* Add some space between rows */
    }

    .video-card {
        width: 30%;
        border: 1px solid #ccc;
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .video-info {
        margin-top: 10px;
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
            <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
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
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logout">Logout</a></li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="video-container"> <!-- Adjust max-width as needed -->
                <?php if (!empty($results)): ?>
                    <div class="video-row">
                        <?php $videoCount = 0; ?>
                        <?php foreach ($results as $result): ?>
                            <div class="video-card" style="width: 19%; margin: 1%;"> <!-- Adjust width and margin as needed -->
                                <video width="100%" height="auto" controls> <!-- Adjust the video size -->
                                    <source src="<?= base_url('public/uploads/StudentStudyvideos/' . $result->name) ?>" type="video/mp4">
                                </video>
                                <div class="video-info"> <!-- Create a container for video information -->
                                    <b><p>Uploaded by: <?= $result->Student_name ?></p></b>
                                    <b><p>Uploaded Date/Time: <?= $result->DateTime ?></p></b>
                                </div>
                            </div>
                            <?php
                            $videoCount++;
                            if ($videoCount % 5 == 0) { // Display 5 videos in one row
                                echo '</div><div class="video-row">';
                            }
                            ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>No videos found.</p>
                <?php endif; ?>
            </div> 
        </div>

</div>
 <?php include('FacultysideBar/FacultyFooter.php');?>

 
   
   
