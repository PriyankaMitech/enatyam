<?php echo view('StudentSidebar/Studentsidebar'); ?>
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
                                            $maxSessions = max($maxSessions, $student->Session_no);
                                        }

                                        // Create columns based on Session_no value
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
                                        if (!in_array($student->student_registerid, $uniqueStudents)) {
                                            $uniqueStudents[] = $student->student_registerid;
                                    ?>
                                            <tr class="student-row">
                                                <td><?= count($uniqueStudents); ?></td>
                                                <td><?= $student->full_name; ?></td>
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

<?php echo view('StudentSidebar/StudentFooter.php'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('table_search').addEventListener('input', function () {
            var searchValue = this.value.trim().toLowerCase();

            // Get all rows with class 'student-row'
            var rows = document.querySelectorAll('.student-row');

            // Iterate through each row and toggle visibility based on search input
            rows.forEach(function (row) {
                var studentName = row.querySelector('td:nth-child(2)').textContent.trim()
                    .toLowerCase();
                var isVisible = studentName.includes(searchValue);

                // Toggle visibility
                row.style.display = isVisible ? 'table-row' : 'none';
            });
        });
    });
</script>