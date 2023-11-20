<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty profile</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <style>
    .row {
        margin-left: 213px;
        height:auto;
        width: auto;
    }
    .card-body{
        background-color: greenyellow;
    }
    .smaller-image {
    width: 75px; /* Adjust the size as needed */
    height: 75px; /* Adjust the size as needed */
    float: right;
}
.faculty-info {
    float: left;
    background-color: bisque;
    border-radius: 22px;
}
.p{
    padding-left: 12px;
}
.card{
    
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
    <div class="container">
    <div class="row">
        <?php foreach ($facultyData as $faculty): ?>
            <div class="col-md-4">
                <div class="card">
                <div class="faculty-info">
                <div class="faculty-image">
                            <img src="<?= base_url('public/sid.jpeg')?>" class="smaller-image" alt="Faculty Image">
                        </div>
                        <div class="p">
                            <p class="card-text">Name: <?= $faculty->student_name ?></p>
                            <p class="card-text">Email: <?= $faculty->email ?></p>
                            <p class="card-text">Contact No: <?= $faculty->email ?></p>
                        </div>
                        </div>
                       
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</body>

</html>