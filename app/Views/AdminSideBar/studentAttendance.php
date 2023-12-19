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
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Session Start Date</th>
                                        <?php
                            // Access ConductedSessionsCount from the first student (assuming it's the same for all)
                            $firstStudent = reset($attendance);
                            $conductedSessionsCount = explode(',', $firstStudent->ConductedSessionsCount);
                            foreach ($conductedSessionsCount as $session) {
                                // Extract the numeric part of the session status (e.g., "Session 1-P" => "1")
                                $sessionNumber = filter_var($session, FILTER_SANITIZE_NUMBER_INT);
                                echo '<th>Session ' . $sessionNumber . '</th>';
                            }
                            ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($attendance as $student): ?>
                                    <tr class="student-row">
                                        <td><?= $student->student_id; ?></td>
                                        <td><?= $student->student_name; ?></td>
                                        <td><?= $student->Session_Start_Date; ?></td>
                                        <?php
                            // Assuming ConductedSessionsCount is a comma-separated string of session statuses
                            $sessionStatuses = explode(',', $student->ConductedSessionsCount);
                            if (empty($sessionStatuses[0])) {
                                // Display "NA" if there is no data for ConductedSessionsCount
                                echo '<td colspan="' . count($conductedSessionsCount) . '">NA</td>';
                            } else {
                                foreach ($sessionStatuses as $status) {
                                    // Check if the explode returned an array with at least two elements
                                    $explodedStatus = explode('-', $status);
                                    if (count($explodedStatus) >= 2) {
                                        list($sessionNumber, $attendanceStatus) = $explodedStatus;

                                        // Set Bootstrap badge class based on attendance status
                                        $badgeClass = ($attendanceStatus == 'P') ? 'bg-success' : 'bg-danger';

                                        // Set label based on attendance status
                                        $label = ($attendanceStatus == 'P') ? 'Present' : 'Absent';

                                        // You can customize the display based on attendance status
                                        echo '<td><span class="badge ' . $badgeClass . '">' . $label . '</span></td>';
                                    } else {
                                        // Handle the case where the format is unexpected
                                        echo '<td>Invalid Format</td>';
                                    }
                                }
                            }
                            ?>
                                    </tr>
                                    <?php endforeach; ?>
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
</div>
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