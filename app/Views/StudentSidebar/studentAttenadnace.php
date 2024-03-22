<?php
$showReviewModal = false;

// Check if the $attendance array is not empty
if (!empty($attendance)) {
    // Get the last record
    $lastAttendance = end($attendance);

    // Check if the last record exists and has the properties 'renewal' and 'verify_by_student'
    if ($lastAttendance && is_null($lastAttendance->renewal) && is_null($lastAttendance->verify_by_student)) {
        $showReviewModal = true;
        
        // Check previous session attendance status
        $previousSessionStatus = $lastAttendance->Attendance_status == 'p' ? 'present' : 'absent';
    }
}
?>
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

<!-- Modal for taking review -->
<?php if ($showReviewModal): ?>
<div id="reviewModal" class="modal" style="background-color: rgba(0, 0, 0, 0.5); display: block;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5><b>Give rating for previous session </b></h5>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form id="sessionfeedbackform" method="post" action="submit_review">
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item p-4">
                                <select class='rating text-center' name="rating"
                                    id='faculty<?php echo $student->faculty_id; ?>'
                                    data-id='rating_ue_<?php echo $student->id; ?>'>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                            </li>
                        </ul>
                    </div>
                    <!-- Hidden input to pass student id or any other necessary data -->


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
    <p>You were <?php echo $previousSessionStatus; ?> in session number <?php echo $student->Session_no; ?>.
    </p>
    <form id="verifyForm" method="post" action="submit_review">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="verify_by_student" id="verifyRadio" value="Y" required>
            <label class="form-check-label" for="verifyRadio">Verify</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="verify_by_student" id="declineRadio" value="N" required>
            <label class="form-check-label" for="declineRadio">Decline</label>
        </div>
        <input type="hidden" name="student_id" value="<?php echo $student->id; ?>" required>
        <input type="hidden" name="Session_no" value="<?php echo $student->Session_no; ?>" required>
        <input type="hidden" name="faculty_id" value="<?php echo $student->faculty_id; ?>" required>
        <input type="hidden" name="course" value="<?php echo $student->course; ?>" required>
        <input type="hidden" name="sub_course" value="<?php echo $student->sub_course; ?>" required>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
        </div>
    </div>
    <?php endif; ?>
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

    // Add a script to hide modal when clicked outside of it
    window.onclick = function(event) {
        var modal = document.getElementById('reviewModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
