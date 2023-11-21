<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>
    <style>
    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
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
    <!-- Check if SessionCount is not null -->
    <div class="container">
    <div class="row">
        <?php if (!is_null($SessionCount)): ?>
            <?php for ($i = 1; $i <= $SessionCount->SessionsCount; $i++): ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card <?= $i ?></h5>
                            <!-- You can add more content or styling here -->
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        <?php else: ?>
            <p>No session count available.</p>
        <?php endif; ?>
    </div>
</div>
</body>

</html>