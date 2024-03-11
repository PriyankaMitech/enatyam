<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Faculty Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Faculty Attendance</li>
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
                            <h3 class="card-title">Schedule</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Faculty Name</th>
                                        <th>Student Name</th>
                                        <th>Session count</th>
                                        <th>Conducted Sessions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // Initialize sessionCounts array
                                    $sessionCounts = [];

                                    // Loop through attendance to calculate session counts
                                    foreach ($attendance as $row) {
                                        $paymentId = $row->payment_id;
                                        $attendanceStatus = $row->Attendance_status;

                                        if (!isset($sessionCounts[$paymentId])) {
                                            $sessionCounts[$paymentId] = ['p' => 0, 'a' => 0];
                                        }

                                        if ($attendanceStatus === 'p') {
                                            $sessionCounts[$paymentId]['p']++;
                                        } elseif ($attendanceStatus === 'a') {
                                            $sessionCounts[$paymentId]['a']++;
                                        }
                                    }
                                    // Initialize row counter
                                    $rowCounter = 1;

                                    // Loop through sessionCounts to display data
                                        foreach ($sessionCounts as $paymentId => $counts): ?>
                                            <tr>
                                            <td><?= $rowCounter++ ?></td> <!-- Display serial number -->
                                                <?php
                                                    // Find the attendance record corresponding to the current payment ID
                                                    $matchingRecord = null;
                                                    foreach ($attendance as $record) {
                                                        if ($record->payment_id == $paymentId) {
                                                            $matchingRecord = $record;
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                            <?php if ($matchingRecord): ?>
                                                <td><?= $matchingRecord->faculty_name ?></td>
                                                <td><?= $matchingRecord->student_name ?></td>
                                                <td><?= $matchingRecord->no_of_session ?></td>
                                            <?php else: ?>
                                                <td colspan="3">No attendance record found</td>
                                            <?php endif; ?>
                                            <td>
                                                Present: <?= $counts['p'] ?>,
                                                Absent: <?= $counts['a'] ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('AdminSideBar/AdminFooter.php'); ?>
