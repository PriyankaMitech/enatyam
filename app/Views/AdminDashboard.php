<?php include "AdminSideBar.php"; ?>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;

}

.demo-card {
    padding: 10px;
}

.demo-card h3 {
    color: #28a745 !important;
    font-size: 18px
}

.demo-card h4 {
    color: #17a2b8 !important;
    font-weight: 600
}

.demo-card i {
    color: #ffc107 !important;
    float: right;
    display: block;
    text-align: right;
    width: 30px;
    height: 30px;
    background: #ffc10733;
    line-height: 30px;
    text-align: center;
    margin-left: auto;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.5s;
}

.demo-card i:hover {
    color: #fff !important;

    background: #ffc107;
}

.hidden {
    display: none;
}

.show {
    display: block;
    /* or inline, flex, etc. based on your layout */
}

.tc,
.tc a {
    color: #fff !important;
}
</style>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Dashboard </li>
                        <li class="breadcrumb-item"><a href="https://www.google.com/calendar/" target="_blank">Google
                                Calendar</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php if (!empty($records)) : ?>
                            <h3><?= count($records) ?></h3>
                            <?php else : ?>
                            <h3>0</h3>
                            <?php endif; ?>
                            <p>Today's Demo Sessions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"
                                id="toggle-table5"></i></a>


                    </div>
                </div>



                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo count($alldemolist); ?></sup></h3>

                            <p> Demos List</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer book-more-info" id="toggle-table2">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->

                    <div class="small-box bg-warning tc">
                        <div class="inner">
                            <?php if (!empty($students)) : ?>
                            <h3><?= count($students) ?></h3>
                            <?php else : ?>
                            <h3>0</h3>

                            <?php endif; ?>
                            <p>Students</p>
                        </div>

                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer stud-more-info" id="toggle-table">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php if (!empty($Faculty)) : ?>
                            <h3><?= count($Faculty) ?></h3>
                            <?php else : ?>
                            <h3>0</h3>

                            <?php endif; ?>
                            <p>Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer teach-more-info" id="toggle-table4">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>


                </div>


                <div class="col-md-12 card" id="faculty-table5" style="display:none">
                    <div class="card-header">
                        <h3 class="card-title"> Today Demo List</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Sub Course</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($records)) : ?>
                                <?php foreach ($records as $row) : ?>
                                <tr>
                                    <td><?= $row->name ?></td>
                                    <td><?= $row->courses_name ?></td>
                                    <td><?= $row->sub_courses_name ?></td>
                                    <td><?= $row->Book_Date ?></td>

                                </tr>
                                <?php endforeach; ?>
                                <?php else : ?>
                                <tr>
                                    <td class="text-center" colspan="4">No data available</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="div-hide" id="faculty-table2" style="display:none">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card demo-card">
                                    <h4><?= count($UnattendedDemoList) ?></h4>
                                    <h3>Unattended Demo List</h3>
                                    <i class="fas fa-long-arrow-alt-right UnattendedList"></i>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="card demo-card">
                                    <h4><?php echo abs(
                                            count($PendingDemo)
                                        ); ?></h4>
                                    <h3>Pending Demo</h3>
                                    <i class="fas fa-long-arrow-alt-right pend-demo"></i>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card demo-card">
                                    <h4><?= count($ConductedDemo) ?></h4>
                                    <h3>Conducted Demo</h3>
                                    <i class="fas fa-long-arrow-alt-right coundd_demo"></i>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="card demo-card">
                                    <h4><?php echo count($alldemolist); ?></h4>
                                    <h3>Total Demo</h3>
                                    <i class="fas fa-long-arrow-alt-right comp-payment"></i>
                                </div>
                            </div>
                            <!--  -->

                            <div class="col-md-12 card" id="coundd_demo-payment-table" style="display:none">
                                <div class="card-header">
                                    <h3 class="card-title"> Conducted Demo List</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
                                            <th>Sub-Course</th>


                                            <th>Demo Date</th>

                                        </tr>
                                        <?php
                                        if (!empty($ConductedDemo)) { ?>
                                        <?php foreach ($ConductedDemo
                                                as $faculty) : ?>
                                        <tr>
                                            <form action="<?= base_url(
                                                                        "AdminController/addStudent"
                                                                    ) ?>" method="post">
                                                <td><?= $faculty->name ?></td>
                                                <td><?= $faculty->email ?></td>
                                                <td><?= $faculty->courses_name ?></td>

                                                <td><?= $faculty->sub_courses_name ?></td>
                                                <td><?= $faculty->Conducted_Demo_Date ?></td>

                                                <input type="hidden" name="email" value="<?= $faculty->email ?>">
                                                <!-- <button class="btn btn-primary" type="submit">Add
                                                            Student</button> -->

                                            </form>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php } else { ?>
                                        <tr>
                                            <td class="text-center" colspan=5>No data available</td>

                                        </tr>
                                        <?php } ?>


                                    </table>
                                </div>

                            </div>
                            <!--  -->
                            <div class="col-md-12 card" id="comp-payment-table" style="display:none">
                                <div class="card-header">
                                    <h3 class="card-title">Total Demo List</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Sub Course</th>

                                                <th>Demo Date</th>
                                                <th>Status</th>
                                                <th>Remark</th>

                                            </tr>
                                        </thead>
                                        <?php // Sort the $alldemolist array in descending order based on the Booking_Date_Time field
                                        usort($alldemolist, function (
                                            $a,
                                            $b
                                        ) {
                                            return strtotime(
                                                $b->Booking_Date_Time
                                            ) -
                                                strtotime(
                                                    $a->Booking_Date_Time
                                                );
                                        }); ?>
                                        <?php if (!empty($alldemolist)) {
                                            // echo "<pre>";print_r($alldemolist);exit();
                                            ?>
                                        <?php foreach ($alldemolist
                                                as $status) : ?>
                                                
                                        <tr>
                                            <td><?= $status->name ?></td>
                                            <td><?= $status->courses_name ?></td>
                                            <td><?= $status->sub_courses_name ?></td>

                                            <td><?= date(
                                                            "d/m/Y",
                                                            strtotime(
                                                                $status->Book_Date
                                                            )
                                                        ) ?></td>
                                            <td>
                                                <?php if (
                                                            $status->Conducted_Demo ==
                                                            "Y"
                                                        ) : ?>
                                                <small class="badge badge-success ">Conducted</small>
                                                <?php elseif (
                                                            $status->Conducted_Demo ==
                                                            "N"
                                                        ) : ?>
                                                <small class="badge badge-warning ">Not Conducted</small>
                                                <?php elseif (
                                                            $status->Conducted_Demo ==
                                                            "Reschedule"
                                                        ) : ?>

                                                <small class="badge badge-danger"> Rescheduled</small>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                            <select class="form-control"  name="remark" onchange="updateRemark(this, <?=$status->D_id; ?>)" >
                                                <option value="" selected>Select remark</option>
                                                <option value="Interested" <?php if ($status->remark == 'Interested') {
                                                echo "selected";
                                            } ?>>Interested</option>
                                                <option value="Not Interested" <?php if ($status->remark == 'Not Interested') {
                                                echo "Not selected";
                                            } ?>>Not Interested</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php } else { ?>
                                        <tr>
                                            <td class="text-center" colspan=5>No data available</td>

                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <!-- unattended DemoList -->

                            <div class="col-md-12 card" id="unattended-tabal" style="display:none">
                                <div class="card-header">
                                    <h3 class="card-title">Unattended Demo List</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
                                            <th>Sub Course</th>

                                            <th>Demo Date</th>
                                            <!-- <th>Assign faculty</th> -->
                                            <th>Reschedule</th>
                                        </tr>
                                        <?php if (!empty($UnattendedDemoList)) : ?>
                                        <?php foreach ($UnattendedDemoList as $status) : ?>
                                        <tr>
                                            <td><?= $status->name ?></td>
                                            <td><?= $status->email ?></td>
                                            <td><?= $status->courses_name ?></td>
                                            <td><?= $status->sub_courses_name ?></td>

                                            <td><?php echo $status->Book_Date; ?></td>
                                            <!-- <td>
                                                <?php if ($status->AssignTecher_id === null) : ?>
                                                <?php
                                                            $matchingFaculties = array_filter(
                                                                $Faculty,
                                                                function ($faculty) use ($status) {
                                                                    return $faculty->course == $status->course &&
                                                                        $faculty->sub_course == $status->sub_course;
                                                                }
                                                            );
                                                            ?>
                                                <?php if (!empty($matchingFaculties)) : ?>
                                                <form action="AssignTecherForDemo" method="post">
                                                    <div style="display: flex; align-items: center;">
                                                        <select name="faculty_id" class="form-control">
                                                            <option value="">Select</option>
                                                            <?php foreach ($matchingFaculties as $faculty) : ?>
                                                            <option value="<?= $faculty->id ?>">
                                                                <?= $faculty->full_name ?>
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <input type="hidden" name="studentid"
                                                            value="<?= $status->D_id ?>">
                                                        <button type="submit" class="btn btn-success ml-3"
                                                            id="assignButton">Assign</button>
                                                        <div class="loader-container" id="loaderContainer">
                                                            <div class="loader"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php else : ?>
                                                
                                                <small class="badge badge-success ">No faculty available</small>
                                                <?php endif; ?>
                                                <?php else : ?>
                                                <?php

                                                            $assignedFaculty = array_filter(
                                                                $Faculty,
                                                                function ($faculty) use ($status) {
                                                                    return $faculty->id == $status->AssignTecher_id;
                                                                }
                                                            );
                                                            if (!empty($assignedFaculty)) {
                                                                $assignedFaculty = reset($assignedFaculty);
                                                                echo $assignedFaculty->full_name;
                                                            }
                                                            ?>
                                                <?php endif; ?>
                                            </td> -->
                                            <!-- <td>
                                                <?php if ($status->AssignTecher_id == null) : ?>
                                            
                                                <small class="badge badge-success ">Not available</small>
                                                <?php else : ?>
                                                <a href="<?=base_url(); ?>getDemoDetails">Reschedule</a>
                                                <?php endif; ?>
                                            </td> -->
                                            <td>
                                                <form method="post" action="DemoController/resheduleDemo">
                                                    <input type="hidden" name="action" value="Reschedule">
                                                    <input type="hidden" name="D_id"
                                                        value="<?php echo htmlspecialchars($status->D_id); ?>">
                                                    <button type="submit" class="btn btn-danger"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Add to Reschedule">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add to Reschedule
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php else : ?>
                                        <tr>
                                            <td class="text-center" colspan="8">No data available</td>
                                        </tr>
                                        <?php endif; ?>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-12 card" id="pending-demo-table" style="display:none">
                                <div class="card-header">
                                    <h3 class="card-title">Pending Demo List</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Booking Date</th>

                                                <th>Demo Time</th>
                                                <th>Reschedule Date</th>
                                                <th>Faculty</th>
                                                <th>Course</th>
                                                <th>Sub Course</th>
                                                <th>Assign Faculty Status</th>
                                                <th>Link</th>
                                                <th>Assign</th>
                                            </tr>
                                        </thead>
                                        <?php usort($PendingDemo, function ($a, $b) {
                                return strtotime($b->Book_Date) - strtotime($a->Book_Date);
                            }); ?>
                                        <?php
                            if (!empty($PendingDemo)) { ?>
                                        <?php foreach ($PendingDemo as $facult) : ?>
                                        <tr>
                                            <form action="<?php echo base_url(); ?>AssignTecherForDemo" method="POST">
                                                <input type="hidden" name="studentid" value="<?= $facult->D_id ?>">
                                                <td><?= $facult->name ?></td>
                                                <td><?= $facult->email ?></td>
                                                <td><?= date('j F Y', strtotime($facult->Book_Date)); ?></td>

                                                <!-- <td>
                                                    <?php if (($facult->Book_Date_Time)) : ?>
                                                    <input type="time" name="Book_Date_Time"
                                                        value="<?= $facult->Book_Date_Time ?>" disabled>
                                                    <?php else : ?>
                                                    <input type="time" name="Book_Date_Time" require>
                                                    <?php endif; ?>
                                                </td> -->
                                                <td>
                                                    <?php if (!empty($facult->Reshedule_Time)) : ?>
                                                    <input type="time" name="Book_Date_Time"
                                                        value="<?= $facult->Reshedule_Time ?>" disabled>
                                                    <?php else : ?>
                                                    <input type="time" name="Book_Date_Time"
                                                        value="<?= $facult->Book_Date_Time ?>" required>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php
                                                if ($facult->Reshedule_date && $facult->Reshedule_date != '0000-00-00') {
                                                    echo date('j F Y', strtotime($facult->Reshedule_date));
                                                } else {
                                                   
                                                   echo '<small class="badge badge-success ">Wait for date</small>';
                                                }
                                                ?>
                                                </td>

                                                <td>
                                                    <select name="faculty_id">
                                                        <option value="" selected>Select Faculty</option>
                                                        <?php foreach ($Faculty as $facultyItems) : ?>
                                                        <?php if ($facultyItems->course == $facult->course && $facultyItems->sub_course == $facult->sub_course) : ?>
                                                        <option value="<?= $facultyItems->id ?>" <?php if ($facult->AssignTecher_id == $facultyItems->id) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                                            <?= $facultyItems->full_name ?>
                                                        </option>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td><?= $facult->courses_name ?></td>
                                                <td><?= $facult->sub_courses_name ?></td>
                                                <td>
                                                    <?php if ($facult->AssignTecher_id > 0) : ?>
                                                    <p>Assign</p>
                                                    <?php else : ?>
                                                    <p>Not Assign</p>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if (!empty($facult->meetlink)) : ?>
                                                    <a href="<?php echo htmlspecialchars($facult->meetlink); ?>"
                                                        target="_blank"><?php echo htmlspecialchars($facult->meetlink); ?></a>
                                                    <?php else : ?>
                                                    <input type="text" name="meetlink" placeholder="Enter Meeting Link"
                                                        require>
                                                    <?php endif; ?>
                                                </td>
                                                <td>

                                                    <?php if (
                                                    $facult->AssignTecher_id > 0
                                                ) { ?>
                                                    <button type="submit" name="change_faculty_button"
                                                        class="btn btn-info" style="font-size: 12px;">Change
                                                        Faculty</button>
                                                    <?php } else { ?>
                                                    <button type="submit" name="assign_button" class="btn btn-warning"
                                                        style="font-size: 13px;">Assign</button>
                                                    <?php } ?>
                                                </td>
                                            </form>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php } else { ?>
                                        <tr>
                                            <td class="text-center" colspan=10>No data available</td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                    <table id="faculty-table2" class="table" style="display: none;">
                        <tr>
                            <th>Total Demo</th>
                            <th>Pending Demo</th>
                            <th>Conducted Demo</th>
                            <th>Cancel Demo</th>
                        </tr>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td>
                                <b id="toggle-table6"><?php echo abs(
                                                            count($ConductedDemo) - $count
                                                        ); ?></b>
                                <!-- Pending DemoList -->
                                <table id="faculty-table6" class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Booking Date</th>

                                        <th>Faculty</th>
                                        <th>Assign</th>
                                        <th>Stetus</th>
                                    </tr>
                                    
                                    <?php if(!empty($PendingDemo)){?>
                                    <?php foreach ($PendingDemo as $facult) : ?>

                                    <tr>
                                        <form action="<?php echo base_url(
                                                                "AssignTecherForDemo"
                                                            ); ?>" method="POST">
                                            <input type="hidden" name="studentid" value="<?= $facult->D_id ?>">
                                            <td><?= $facult->name ?></td>
                                            <td><?= $facult->email ?></td>
                                            <td><?= $facult->Dates ?></td>  

                                            <td>
                                                <select name="faculty_name">

                                                    <?php foreach ($Faculty
                                                            as $faculty) : ?>
                                                    <option value="<?= $faculty->id ?>">
                                                        <?= $faculty->full_name ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                  
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" name="assign_button">Assign</button>
                                            </td>
                                            <td>
                                                <?php if (
                                                        $ConductedDemoStatus >= 0
                                                    ) : ?>
                                                <p>AssignTecher Succesfully</p>
                                                <?php else : ?>
                                                <p>Not AssignTecher</p>
                                                <?php endif; ?>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php } ?>
                                </table>
                            </td>
                            <td id="toggle-table7"><b><?= count(
                                                            $ConductedDemo
                                                        ) ?></b>
                                <table id="faculty-table7" style="display:none;" class="table">
                                    <?php foreach ($ConductedDemo
                                        as $faculty) : ?>
                                    <tr>
                                        <td><?= $faculty->name ?></td>
                                        <td><?= $faculty->email ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </td>
                            <td>Data 2</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </table>
                    <!-- </form> -->
                    <!--  -->

                    <!-- assign techers to student -->


                    <div class="col-md-12 card" id="faculty-table" style="display:none">
                        <div class="card-header">
                            <h3 class="card-title">Student List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Sub Course</th>
                                    <th>Session Type</th>
                                    <th>Assign Faculty</th>
                                    <th>Session Date</th>
                                    <th>Action</th>
                                </tr>
                                <?php if ($students) { ?>
                                <?php foreach ($students as $data) :

                                        $createdAt = strtotime($data->created_at);
                                        $currentDate = strtotime(date("Y-m-d"));
                                        $tenDaysAgo = strtotime("-10 days");
                                        $new = "";
                                        if (
                                            $createdAt >= $tenDaysAgo &&
                                            ($createdAt = $currentDate)
                                        ) {
                                            $new = '<small class="badge badge-danger">New</small>';
                                        }
                                    ?>
                                <tr>
                                    <form action="<?= base_url(); ?>AssignTecherToStudent" method="POST">
                                        <input type="hidden" name="studentid" value="<?= $data->id ?>">
                                        <td style="width:100px">
                                            <p><?= $data->full_name ?><sup> <?php echo $new; ?></sup></p>
                                        </td>
                                        <td><?= $data->email ?></td>
                                        <td><?= $data->courses_name ?></td>
                                        <td><?= $data->sub_courses_name ?></td>
                                        <td><?= $data->SessionType ?></td>


                                        <td class="faculty-select">
                                            <?php if ($data->SessionType == "OneToOneSession") { ?>
                                            <select name="faculty_name" required>
                                                <option value="" selected>Select Faculty</option>
                                                <?php foreach ($Faculty as $facultyItem) : ?>
                                                <?php if ($facultyItem->course == $data->course && $facultyItem->sub_course == $data->sub_course) : ?>
                                                <option value="<?= $facultyItem->id ?>"
                                                    <?php if ($data->Assign_Techer_id == $facultyItem->id) echo "selected"; ?>>
                                                    <?= $facultyItem->full_name ?>
                                                </option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php } elseif ($data->SessionType == "GroupSession") { ?>
                                            <?= $data->teacher_name ?>

                                            <?php } ?>
                                        </td>
                                        <?php if ($data->SessionType == "OneToOneSession" && !$data->Session_Start_Date) { ?>
                                        <td>
                                            <input type="date" name="Session_Start_Date" class="Session_Start_Date"
                                                required>
                                        </td>
                                        <?php } elseif ($data->SessionType == "OneToOneSession" && $data->Session_Start_Date) { ?>
                                        <td><?= $data->Session_Start_Date ?><input type="hidden"
                                                name="Session_Start_Date" class="Session_Start_Date"
                                                value="<?= $data->Session_Start_Date ?>"></td>


                                        <?php } else { ?>
                                        <td><?= $data->Session_Start_Date ?></td>
                                        <?php } ?>


                                        <td class="change_f">
                                            <?php if (
                                                        $data->Assign_Techer_id > 0 &&
                                                        $data->SessionType ==
                                                        "OneToOneSession"
                                                    ) { ?>
                                            <button type="submit" name="change_faculty_button" class="btn btn-info"
                                                style="font-size: 12px;">Change Faculty</button>
                                            <?php } elseif (
                                                        $data->SessionType ==
                                                        "GroupSession"
                                                    ) { ?>
                                            <!-- You Can't Assign Faculty Here -->
                                            <small class="badge badge-success ">You Can't Assign Faculty Here</small>
                                            <?php } else { ?>
                                            <button type="submit" name="assign_button" class="btn btn-warning"
                                                style="font-size: 13px;">Assign</button>
                                            <?php } ?>
                                            <!-- Add delete button -->
                        <!-- <a href="<?= base_url(); ?>DeleteStudent/<?= $data->id ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this student?')">Delete</a> -->

                            <a href="<?= base_url(); ?>delete/<?php echo base64_encode($data->id); ?>/register" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                        </td>
                                    </form>
                                </tr>
                                <?php
                                    endforeach; ?>
                                <?php } else { ?>
                                <tr>
                                    <td class="text-center" colspan=8>No data available</td>

                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12 card" id="faculty-table4" style="display:none">
                        <div class="card-header">
                            <h3 class="card-title"> Teachers List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Sub-Course</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>

                                </tr>

                                <?php if (!empty($Faculty)) {
                                ?>
                                <?php foreach ($Faculty as $faculty) : ?>

                                <tr>
                                    <td><?= $faculty->full_name ?></td>
                                    <td><?= $faculty->email ?></td>
                                    <td><?= $faculty->courses_name; ?></td>
                                    <td><?= $faculty->sub_courses_name; ?></td>
                                    <td><?= $faculty->phone ?></td>
                                    <td> <a href="<?= base_url(); ?>delete/<?php echo base64_encode($faculty->id); ?>/register" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a></td>
                                    <!-- <td><button onclick="showStudentTable(this)" class="btn btn-info">Assign -->
                                    <!-- Students</button></td> -->

                                </tr>
                                <?php endforeach; ?>
                                <?php } else { ?>
                                <tr>
                                    <td class="text-center" colspan=5>No data available</td>

                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

                    <!-- Faculty -->


                    <table id="student-assignment-table" style="display: none;" class="table">
                        <tr>
                            <th>Student Name</th>
                            <th>Student ID</th>
                            <th>course</th>
                            <th>Add</th>
                        </tr>
                        <?php foreach ($students as $faculty) : ?>
                        <?php foreach ($SessionData as $session) : ?>
                        <tr>
                            <td><?= $faculty->full_name ?></td>
                            <td><?= $faculty->id ?></td>
                            <td><?= $session["course"] ?></td>
                            </td>
                            <td> <button class="btn btn-success">Assign</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                    </table>
                </div>


            </div>

            <div class="row">

            </div>

        </div>
    </section>

</div>


<?php echo view("AdminSideBar/AdminFooter.php"); ?>
<script>
function updateRemark(selectElement, id) {
    var selectedValue =  selectElement.value;
    var id = id;

    // Make AJAX request
    $.ajax({
        type: "POST",
        url: "<?=base_url(); ?>update_remark", // URL to your server-side script
        data: { id: id, selectedValue: selectedValue },
        success: function(response) {
            // Handle success response
            console.log("Remark updated successfully");
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error("Error updating remark:", error);
        }
    });
}
</script>