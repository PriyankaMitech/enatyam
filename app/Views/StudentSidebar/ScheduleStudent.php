<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>
    <!-- <style>
    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
    }
    </style> -->
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
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sesions</li>
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
                                <h3 class="card-title">Your Session status</h3>
                            </div>
       <div class="card-body">
                                <div class="row">
                                    <?php
        if (!is_null($SessionCount) && $SessionCount->SessionsCount > 0) {
            usort($slots, function ($a, $b) {
                return strtotime($a->date) - strtotime($b->date);
            });

            for ($i = 0; $i < $SessionCount->SessionsCount; $i++) {
                $cardColor = 'bg-warning'; // Default color for no data

                if (isset($slots[$i])) {
                    $conductedClass = $slots[$i]->Conducted_Class;
                    $cardColor = ($conductedClass == 'Y') ? 'bg-success' : (($conductedClass == 'N') ? 'bg-danger' : 'bg-warning');
                }
        ?>
                                    <div class="col-md-3 mb-3">
                                        <div class="card <?= $cardColor; ?>">
                                            <div class="card-body" style="height: 150px;">
                                                <!-- Set your desired height -->
                                                <h5 class="card-title">Session <?= $i + 1 ?></h5><br>
                                                <?php if (isset($slots[$i])) : ?>
                                                <ul>
                                                    <li><strong>Date:</strong>
                                                        <?= date('d/m/Y', strtotime($slots[$i]->date)) ?? 'N/A' ?></li>
                                                    <li><strong>Start Time:</strong>
                                                        <?= $slots[$i]->start_time ?? 'N/A' ?></li>
                                                    <li><strong>End Time:</strong> <?= $slots[$i]->end_time ?? 'N/A' ?>
                                                    </li>
                                                    <!-- Add other date properties as needed -->
                                                </ul>
                                                <?php else : ?>
                                                <p>No dates available for this session.</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
            } 
        } else { ?>
                                    <div class="col-md-12 mb-3">
                                        <div class="card bg-warning">
                                            <div class="card-body" style="height: 200px;">
                                                <!-- Set your desired height -->
                                                <p>No session count available.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
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