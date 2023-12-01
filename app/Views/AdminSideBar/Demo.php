<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <?php include(APPPATH . 'views/AdminSidebar.php'); ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-secondary {
            margin-left: 255px;
        }

        .status-faculty-not-assigned {
            background-color: green;
            /* Red background color */
            color: #ffffff;
            /* White text color */

            border-radius: 4px;
            /* Rounded corners */
        }

        .btn-info {
            border-radius: 58px;
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
                <a href="<?php echo base_url() ?>Admindashboard" class="nav-link">Home</a>
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
                        <h1>Demo Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Demo Details</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-top mb-3">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Conducted
                                                Demo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">pending
                                                Demo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Reschedule please</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Cource/Subcource</th>
                                                        <th>Email</th>
                                                        <th>Contact Number</th>
                                                        <th>Conducted Demo Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($ConductedDemo as $Demo) : ?>
                                                        <tr>
                                                            <td><?= $Demo->name ?></td>
                                                            <td><?= $Demo->course ?>/<?= $Demo->sub_course ?></td>
                                                            <td><?= $Demo->email ?></td>
                                                            <td><?= $Demo->phone ?></td>
                                                            <td></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade " id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Course/Subcourse</th>
                                                        <th>Email</th>
                                                        <th>Contact Number</th>
                                                        <th>Book Demo Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // Sort the $PendingDemo array by Book_Date_Time
                                                    usort($PendingDemo, function ($a, $b) {
                                                        return strtotime($a->Book_Date) - strtotime($b->Book_Date);
                                                    });

                                                    foreach ($PendingDemo as $PDemo) :
                                                    ?>

                                                        <tr>
                                                            <td><?= $PDemo->name ?></td>
                                                            <td><?= $PDemo->course ?>/<?= $PDemo->sub_course ?></td>
                                                            <td><?= $PDemo->email ?></td>
                                                            <td><?= $PDemo->phone ?></td>
                                                            <td><?= $PDemo->Book_Date ?></td>
                                                            <td> <?php
                                                                    $today = date('Y-m-d');
                                                                    $demoDate = date('Y-m-d', strtotime($PDemo->Book_Date));

                                                                    if ($demoDate < $today) {
                                                                        echo '<form method="post" action="DemoController/resheduleDemo">';
                                                                        echo '<input type="hidden" name="action" value="Reschedule">';
                                                                        echo '<input type="hidden" name="D_id" value="' . $PDemo->D_id . '">';
                                                                        echo '<button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add to Reschedule">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                      </button>';
                                                                        // echo '<button type="submit" class="btn btn-danger" style="font-size: 10px;">Add to Reschedule</button>';
                                                                        echo '</form>';
                                                                    } else {
                                                                        if ($PDemo->AssignTecher_id === null) {
                                                                            echo '<span class="status-faculty-not-assigned">Assign Faculty</span>';
                                                                        } else {
                                                                            echo '<form method="post" action="DemoController/resheduleDemo">';
                                                                            echo '<input type="hidden" name="action" value="Take Demo">';
                                                                            echo '<input type="hidden" name="D_id" value="' . $PDemo->D_id . '">';
                                                                            echo '<button type="submit" class="btn btn-info" style="font-size: 10px;">Wait For Date</button>';
                                                                            echo '</form>';
                                                                        }
                                                                    }
                                                                    ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Course/Subcourse</th>
                                                        <th>Email</th>
                                                        <th>Contact Number</th>

                                                        <th>Reshedule date/Time</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // Sort the $resheduleDemo array by Book_Date_Time
                                                    usort($resheduleDemo, function ($a, $b) {
                                                        return strtotime($a->Book_Date_Time) - strtotime($b->Book_Date_Time);
                                                    });

                                                    foreach ($resheduleDemo as $PDemo) :
                                                        // Format the date and time in 'd-m-y H:i' format
                                                        $formattedDateTime = date('d-m-y H:i', strtotime($PDemo->Book_Date_Time));
                                                    ?>
                                                        <tr>
                                                            <td><?= $PDemo->name ?></td>
                                                            <td><?= $PDemo->course ?>/<?= $PDemo->sub_course ?></td>
                                                            <td><?= $PDemo->email ?></td>
                                                            <td><?= $PDemo->phone ?></td>

                                                            <form method="POST" action="AdminController/ResheduleByadmin">
                                                                <td>
                                                                    <div>
                                                                        <input type="date" name="Reshedule_date">
                                                                        <!-- Date input field -->
                                                                        <input type="time" style="margin-top: 7px;
    width: 131px;" name="Reshedule_Time">
                                                                        <!-- Time input field -->
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <input type="hidden" name="action" value="N">
                                                                    <input type="hidden" name="D_id" value="<?= $PDemo->D_id ?>">
                                                                    <button class="btn btn-info" type="submit">Reschedule</button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    <?php endforeach; ?>


                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>

    <script>
        document.getElementById("showVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "block";
            document.getElementById("rescheduleContainer").style.display = "none";
            document.getElementById("imageContainer").style.display = "none";
        });

        document.getElementById("showImageContainer").addEventListener("click", function() {
            document.getElementById("imageContainer").style.display = "block";
            document.getElementById("rescheduleContainer").style.display = "none";
            document.getElementById("videoContainer").style.display = "none";

        });
        document.getElementById("showRescheduleContainer").addEventListener("click", function() {
            document.getElementById("rescheduleContainer").style.display = "block";
            document.getElementById("videoContainer").style.display = "none";
            document.getElementById("imageContainer").style.display = "none";
        });

        // document.getElementById("showReschedule").addEventListener("click", function() {
        //     document.getElementById("getrescheduleContainer").style.display = "block";
        //     document.getElementById("videoContainer").style.display = "none";
        //     document.getElementById("imageContainer").style.display = "none";
        // });
    </script>
</body>

</html>