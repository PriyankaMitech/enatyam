<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <?php include(APPPATH . 'views/AdminSidebar.php'); ?>
    <style>
        .row {
            margin-left: 213px;
            height: auto;
            width: auto;
        }

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
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url() ?>today" class="nav-link">Home</a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
            </li>

        </ul>

    </nav>

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
    <script>
        // document.getElementById("showVideoContainer").addEventListener("click", function() {
        //     document.getElementById("videoContainer").style.display = "block";
        //     document.getElementById("imageContainer").style.display = "none";
        // });

        // document.getElementById("showImageContainer").addEventListener("click", function() {
        //     document.getElementById("imageContainer").style.display = "block";
        //     document.getElementById("videoContainer").style.display = "none";
        // });
        // document.getElementById("showFacultyVideoContainer").addEventListener("click", function() {
        //     document.getElementById("FacultyVideoContainer").style.display = "block";
        //     document.getElementById("imageContainer").style.display = "none";
        // });
        document.getElementById("showVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "block";
            document.getElementById("FacultyVideoContainer").style.display = "none"; // Hide FacultyVideoContainer
        });

        document.getElementById("showFacultyVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "none"; // Hide videoContainer
            document.getElementById("FacultyVideoContainer").style.display = "block";
        });
    </script>
</body>

</html>