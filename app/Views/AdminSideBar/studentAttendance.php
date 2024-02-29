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
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#RenewalYes" data-toggle="tab">Before Renewal </a></li>
                                <li class="nav-item"><a class="nav-link" href="#RenewalNull" data-toggle="tab"> After Renewal </a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="RenewalYes">
                                    <?php if(!empty($renewalYes)): ?>
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Student Name</th>
                                                    <th>Session Start Date</th>
                                                    <!-- <th>Attendance</th> -->
                                                    <?php
                                                    // Extract session information directly from the first student's data
                                                    $maxSessions = 0;
                                                    foreach ($renewalYes as $student) {
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
                                            $uniqueStudents = []; // To keep track of unique students   ?>
                                            <?php foreach ($renewalYes as $index => $record):
                                            // Check if the student ID is already processed and renewal is null
                                            if (!in_array($student->student_registerid, $uniqueStudents)) {
                                            $uniqueStudents[] = $student->student_registerid; ?>
                                            <tr class="student-row">
                                                <td><?= count($uniqueStudents); ?></td>
                                                <td><?= $student->student_name; ?></td>
                                                <td><?= $student->date; ?></td>

                                                    <?php
                                                    // Display Attendance_status for each session based on Session_no
                                                    for ($session = 1; $session <= $maxSessions; $session++) {
                                                        echo '<td>';
                                                        $attendanceStatus = 'N/A';

                                                        foreach ($renewalYes as $sessionRecord) {
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
                                            </tbody>
                                        </table>
                                        <?php } ?>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                            <p>No attendance data found for Renewal Yes.</p>
                                        <?php endif; ?>
                                </div>

                                <div class="tab-pane" id="RenewalNull">
                                    <?php if(!empty($renewalNull)): ?>
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Student Name</th>
                                                    <th>Session Start Date</th>
                                                    <!-- <th>Attendance</th> -->
                                                    <?php
                                        // Extract session information directly from the first student's data
                                        $maxSessions = 0;
                                        foreach ($renewalNull as $student) {
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
                            $uniqueStudents = []; // To keep track of unique students   ?>
    <?php foreach ($renewalNull as $index => $record):
        // Check if the student ID is already processed and renewal is null
        if (!in_array($student->student_registerid, $uniqueStudents)) {
            $uniqueStudents[] = $student->student_registerid; ?>
            <tr class="student-row">
                <td><?= count($uniqueStudents); ?></td>
                <td><?= $student->student_name; ?></td>
                <td><?= $student->date; ?></td>

                <?php
                // Display Attendance_status for each session based on Session_no
                for ($session = 1; $session <= $maxSessions; $session++) {
                    echo '<td>';
                    $attendanceStatus = 'N/A';

                    foreach ($renewalNull as $sessionRecord) {
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
                                             
            </tbody>
        </table>
    <?php } ?>
    <?php endforeach; ?>
    <?php else: ?>
        <p>No attendance data found for Renewal Null.</p>
    <?php endif; ?>
                                </div>
                            </div>
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
