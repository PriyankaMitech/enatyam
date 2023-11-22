<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty profile</title>
    <?php include(APPPATH.'Views/AdminSideBar.php');?>
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
        background-color: beige;
        border-radius: 22px;
    }

    .p {
        padding-left: 12px;
    }

    .card {

        background-color: #8a94b3;
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
                <a href="<?php echo base_url()?>today" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>


        </ul>

    </nav>
    <div class="content-wrapper" style="min-height: 1172.73px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faculty Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Faculty Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-top mb-3">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="row">
                                    <?php foreach ($facultyData as $faculty): ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="faculty-info">
                                                <div class="faculty-image">
                                                    <img src="<?= base_url('public/sid.jpeg')?>" class="smaller-image"
                                                        alt="Faculty Image">
                                                </div>
                                                <div class="p">
                                                    <p class="card-text">Name: <?= $faculty->faculty_name ?></p>
                                                    <p class="card-text">Email: <?= $faculty->email ?></p>
                                                    <p class="card-text">Contact No: <?= $faculty->email ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>