
<?php echo view('AdminSideBar.php'); ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        thead {
            background-color: antiquewhite;
        }

        .approve-button {
            background-color: green;
            width: 79px
        }

        .decline-button {
            background-color: red;
            width: 79px
        }

        .btn-secondary {
            margin-left: 255px;
        }
    </style>


<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
     <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url() ?>Admindashboard" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
            </li>
    </ul>
  </nav>
</div>
    <div class="content-wrapper" style="min-height: 1172.73px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faculty Application</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Faculty Application</li>
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
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Pending Application</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">Rejected List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Create Password</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Date</th>
                                                        <th> Applicant Name</th>
                                                        <th> Contact Number</th>
                                                        <th> Email</th>
                                                        <th> Course/Subcourse</th>
                                                        <th> Resume</th>
                                                        <th> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($carrer as $faculty) : ?>
                                                        <tr>
                                                            <?php

                                                            $dateTime = new DateTime($faculty->Booking_Date_Time);
                                                            $date = $dateTime->format('Y-m-d');

                                                            ?>

                                                            <td><?= $date ?></td>

                                                            <td><?= $faculty->name ?></td>
                                                            <td><?= $faculty->phone ?></td>
                                                            <td><?= $faculty->email ?></td>
                                                            <td><?= $faculty->course ?>/<?= $faculty->sub_course ?></td>

                                                            <td></td>
                                                            <td>

                                                                <form method="POST" action="AdminController/Steusupdate">
                                                                    <input type="hidden" name="action" value="approve">
                                                                    <input type="hidden" name="D_id" value="<?= $faculty->D_id ?>">

                                                                    <!-- <td class="project-actions text-right"> -->
                                                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        View
                                                                    </a> -->
                                                                    <button type="submit" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </button>
                                                                    <!-- <a class="btn btn-info btn-sm" href="#">
                                                                        <i class="fas fa-pencil-alt">
                                                                        </i>
                                                                        approve
                                                                    </a> -->

                                                                    <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Approve">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>

                                                                    <!-- </td><button class="approve-button" type="submit">Approve</button> -->
                                                                </form>
                                                                <form method="POST" action="AdminController/Steusupdate">
                                                                    <input type="hidden" name="action" value="decline">
                                                                    <input type="hidden" name="D_id" value="<?= $faculty->D_id ?>">
                                                                    <!-- <a class="btn btn-danger btn-sm" href="#">
                                                                        <i class="fas fa-trash">
                                                                        </i>
                                                                        Decline
                                                                    </a> -->
                                                                    <!-- <button class="decline-button" type="submit">Decline</button> -->
                                                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="decline">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>

                                                                </form>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade " id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Date</th>
                                                        <th> Applicant Name</th>
                                                        <th> Contact Number</th>
                                                        <th> Email</th>
                                                        <th> Course/Subcourse</th>
                                                        <th> Resume</th>
                                                        <th> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($cansalList as $facult) : ?>
                                                        <tr>
                                                            <?php
                                                            $dateTime = new DateTime($facult->Booking_Date_Time);
                                                            $date = $dateTime->format('Y-m-d');
                                                            ?>
                                                            <td><?= $date ?></td>
                                                            <td><?= $facult->name ?></td>
                                                            <td><?= $facult->phone ?></td>
                                                            <td><?= $facult->email ?></td>
                                                            <td><?= $facult->course ?>/<?= $facult->sub_course ?></td>
                                                            <td></td>
                                                            <td>
                                                                <form method="POST" action="AdminController/backtoApplication">
                                                                    <input type="hidden" name="action" value="Pending">
                                                                    <input type="hidden" name="D_id" value="<?= $facult->D_id ?>">
                                                                    <button class="approve-button" type="submit">Back </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Date</th>
                                                        <th> Applicant Name</th>
                                                        <th> Email</th>
                                                        <th>Enter Password</th>
                                                        <th> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($createPassword as $Password) : ?>
                                                        <tr>
                                                            <?php
                                                            $dateTime = new DateTime($Password->created_at);
                                                            $date = $dateTime->format('Y-m-d');
                                                            ?>

                                                            <td><?= $date ?></td>

                                                            <td><?= $Password->full_name ?></td>

                                                            <td><?= $Password->email ?></td>

                                                            <form method="POST" action="AdminController/createpassword">
                                                                <td> <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password"></td>
                                                                <td>

                                                                    <input type="hidden" name="id" value="<?= $Password->id ?>">
                                                                    <button class="btn btn-info" type="submit">update Password </button>

                                                                </td>
                                                            </form>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
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
  <?php echo view('AdminSideBar/AdminFooter.php');?> 

