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
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Pending
                                            Application</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">Rejected
                                            List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Create
                                            Password</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        <?php if (!empty($carrer)) : ?>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Applicant Name</th>
                                                        <th>Contact Number</th>
                                                        <th>Email</th>
                                                        <th>Course/Subcourse</th>
                                                        <th>Action</th>
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
                                                            <td><?= $faculty->courses_name ?>/<?= $faculty->sub_courses_name ?>
                                                            </td>

                                                            <td>
                                                                <form method="POST" action="<?php echo base_url(); ?>Steusupdate">
                                                                    <input type="hidden" name="D_id" value="<?= $faculty->D_id ?>">

                                                                    <a href="<?= base_url(); ?>viewProfile/<?= $faculty->D_id ?>" type="submit" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                    <button type="submit" class="btn btn-sm btn-success" name="action" value="approve" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Approve">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>

                                                                    <button type="submit" class="btn btn-sm btn-danger" name="action" value="decline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decline">
                                                                    <i class="fa fa-remove"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        <?php else : ?>
                                            <p>No pending applications</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tab-pane fade " id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                        <?php if (!empty($cansalList)) : ?>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Applicant Name</th>
                                                        <th>Contact Number</th>
                                                        <th>Email</th>
                                                        <th>Course/Subcourse</th>
                                                        <th>View</th>
                                                        <th>Action</th>
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
                                                            <td><?= $facult->courses_name ?>/<?= $facult->sub_courses_name ?>
                                                            </td>
                                                            <td><a href="<?= base_url(); ?>viewProfile/<?= $faculty->D_id ?>" type="submit" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a></td>
                                                            <td>
                                                                <form method="POST" action="AdminController/backtoApplication">
                                                                    <input type="hidden" name="action" value="Pending">
                                                                    <input type="hidden" name="D_id" value="<?= $facult->D_id ?>">
                                                                    <button class="approve-button" type="submit">Back</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        <?php else : ?>
                                            <p>No applications</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                        <?php if (!empty($createPassword)) : ?>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Applicant Name</th>
                                                        <th>Email</th>
                                                        <th>Enter Password</th>
                                                        <th>Action</th>
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

                                                            <form method="POST" action="<?= base_url('AdminController/createpassword') ?>" onsubmit="return validatePassword()">
                                                                <td>
                                                                    <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" required oninput="validatePasswordOnInput()">
                                                                    <span id="passwordError" style="color: red;"></span>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="id" value="<?= $Password->id ?>">
                                                                    <input type="hidden" name="mobile_no" value="<?= $Password->mobile_no ?>">
                                                                    <button class="btn btn-info" type="submit">Update Password</button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        <?php else : ?>
                                            <p>No applications</p>
                                        <?php endif; ?>
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
<?php echo view('AdminSideBar/AdminFooter.php'); ?>