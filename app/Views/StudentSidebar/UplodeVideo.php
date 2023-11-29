<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/StudentDashboard.css">
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>

    <!-- <style>
    .video-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
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
    </style> -->
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>
        </ul>

       
    </nav>
    <div class="center" style="margin-left: 260px;">
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


</body>

</html>