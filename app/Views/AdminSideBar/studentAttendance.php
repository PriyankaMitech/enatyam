<?php echo view('AdminSideBar.php'); ?>
<!-- /.navbar -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Attendance Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" id="table_search" name="table_search"
                                        class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Student Name</th>
                                        <th>Session Start Date</th>

                                        <?php
                                        // Extract session information directly from the first student's data
                                        $maxSessions = 0;
                                        foreach ($attendance as $student) {
                                            $maxSessions = max($maxSessions, $student->no_of_session);
                                        }

                                        // Create columns based on no_of_session value
                                        for ($session = 1; $session <= $maxSessions; $session++) {
                                            echo '<th>Session ' . $session . '</th>';
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $uniqueStudents = []; // To keep track of unique students

                                    foreach ($attendance as $student):
                                        // Check if the student ID is already processed
                                        if (!in_array($student->student_registerid, $uniqueStudents) && $student->renewal != 'Y') {
                                            $uniqueStudents[] = $student->student_registerid;
                                    ?>
                                        <tr class="student-row">
                                            <td><?= count($uniqueStudents); ?></td>
                                            <td><?= $student->student_name; ?></td>
                                            <td><?= $student->date; ?></td>

                                            <?php
                                            // Display Attendance_status for each session based on Session_no
                                            for ($session = 1; $session <= $maxSessions; $session++) {
                                                echo '<td>';
                                                $attendanceStatus = 'N/A';

                                                foreach ($attendance as $sessionRecord) {
                                                    if ($sessionRecord->student_registerid == $student->student_registerid
                                                        && $sessionRecord->Session_no == $session) {
                                                        $badgeClass = ($sessionRecord->Attendance_status == 'p') ? 'bg-success' : 'bg-danger';
                                                        $attendanceStatus = ($sessionRecord->Attendance_status == 'p') ? 'Present' : 'Absent';
                                                        echo '<span class="badge ' . $badgeClass . '">' . $attendanceStatus . '</span>';
                                                        break; // Stop searching for this session once found
                                                    }
                                                }

                                                echo '</td>';
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                        }
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

<!-- Another table for records with renewal = Y -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Records with Renewal = Y</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Student Name</th>
                                        <th>Session Start Date</th>
                                        <th>Attendance Status</th>
                                        <!-- Add more columns if needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $renewalRecords = []; // To keep track of records with renewal = Y

                                    foreach ($attendance as $student):
                                        // Check if the student ID is already processed and renewal = Y
                                        if ($student->renewal == 'Y' && !in_array($student->student_registerid, $renewalRecords)) {
                                            $renewalRecords[] = $student->student_registerid;
                                    ?>
                                        <tr>
                                            <td><?= count($renewalRecords); ?></td>
                                            <td><?= $student->student_name; ?></td>
                                            <td><?= $student->date; ?></td>
                                            <td>
                                                <?php 
                                                    // Determine attendance status
                                                    $attendanceStatus = ($student->Attendance_status == 'p') ? 'Present' : 'Absent';
                                                    echo $attendanceStatus;
                                                ?>
                                            </td>
                                            <!-- Add more columns if needed -->
                                        </tr>
                                    <?php
                                        }
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('table_search').addEventListener('input', function() {
        var searchValue = this.value.trim().toLowerCase();

        // Get all rows with class 'student-row'
        var rows = document.querySelectorAll('.student-row');

        // Iterate through each row and toggle visibility based on search input
        rows.forEach(function(row) {
            var studentName = row.querySelector('td:nth-child(2)').textContent.trim()
                .toLowerCase();
            var isVisible = studentName.includes(searchValue);

            // Toggle visibility
            row.style.display = isVisible ? 'table-row' : 'none';
        });
    });
});
</script>