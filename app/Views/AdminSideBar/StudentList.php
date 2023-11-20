<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    .btn-secondary {
        margin-left: 255px;
    }

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

    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
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
                <a href="<?php echo base_url()?>today" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>


        </ul>

    </nav>
    <button type="button" class="btn btn-secondary" id="groupSessionBtn">GroupSession</button>

    <button type="button" class="btn btn-warning" id="oneToOneSessionBtn">One To One Session</button>
    <label  for="courseSelect">Select Course:</label>
    <select id="courseSelect">
        <!-- Add options dynamically based on available courses -->
    </select>

    <label for="subcourseSelect">Select Sub Course:</label>
    <select id="subcourseSelect">
        <!-- Add options dynamically based on available sub-courses -->
    </select>
    <div class="container">
        <div class="row">


        </div>
    </div>
    <div class="container" id="videoContainer">
        <div class="row">
            <!-- Initially hide the table using the "d-none" class -->
            <table class="table d-none" id="groupSessionTable">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Sub Course</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($groupSessionStudents as $student): ?>
                    <tr class="student-row" data-course="<?= $student->course ?>"
                        data-subcourse="<?= $student->sub_course ?>">
                        <td><input type="checkbox" class="select-checkbox"></td>
                        <td><?= $student->full_name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->course ?></td>
                        <td><?= $student->sub_course ?></td>
                        
                        <!-- Add more columns as needed -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Initially hide the table using the "d-none" class -->
            <table class="table d-none" id="oneToOneSessionTable">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Sub Course</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($OneToOneSession as $student): ?>
                    <tr class="student-row" data-course="<?= $student->course ?>"
                        data-subcourse="<?= $student->sub_course ?>">
                        <td><input type="checkbox" class="select-checkbox"></td>
                        <td><?= $student->full_name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->course ?></td>
                        <td><?= $student->sub_course ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
      <!-- Empty table to move selected rows -->
      <div class="container">
        <div class="row">
            <form action="book" method="post">
      <table class="table" id="selectedStudentsTable">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Sub Course</th>
                <!-- Add more columns as needed -->
            </tr>
            </thead>
            <tbody>
            <!-- Selected rows will be dynamically added here -->
            </tbody>
            
        </table>
        <input type="submit">
            </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Initially hide the selected students table
        $('#selectedStudentsTable').addClass('d-none');

        // Handle checkbox change event
        $('.select-checkbox').change(function () {
            // Get the current row
            var row = $(this).closest('tr').clone();

            // If the checkbox is checked, add the row to the selected students table
            if ($(this).is(':checked')) {
                $('#selectedStudentsTable tbody').append(row);
            } else {
                // If the checkbox is unchecked, remove the corresponding row from the selected students table
                var studentId = $(this).closest('tr').index(); // assuming each row has a unique identifier
                $('#selectedStudentsTable tbody tr:eq(' + studentId + ')').remove();
            }

            // Show or hide the selected students table based on whether there are selected rows
            $('#selectedStudentsTable').toggleClass('d-none', $('#selectedStudentsTable tbody tr').length === 0);
        });
    });
</script>
    <script>
    $(document).ready(function() {
        // Add a click event listener to the "GroupSession" button
        $('#groupSessionBtn').click(function() {
            // Toggle the visibility of the table
            $('#groupSessionTable').toggleClass('d-none');
        
            updateTableContent();
        });

        function updateTableContent() {
            // Get the selected course and sub-course values
            var selectedCourse = $('#courseSelect').val();
            var selectedSubCourse = $('#subcourseSelect').val();

            // Show or hide rows based on the selected values
            $('.student-row').each(function() {
                var row = $(this);
                var rowCourse = row.data('course');
                var rowSubCourse = row.data('subcourse');

                if (
                    (selectedCourse === 'all' || rowCourse === selectedCourse) &&
                    (selectedSubCourse === 'all' || rowSubCourse === selectedSubCourse)
                ) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        }

        // Add event listeners for course and sub-course selection changes
        $('#courseSelect, #subcourseSelect').change(function() {
            updateTableContent();
        });

        // Populate the course and sub-course dropdowns with unique values
        var courses = Array.from(new Set($('.student-row').map(function() {
            return $(this).data('course');
        }).get()));
        var subcourses = Array.from(new Set($('.student-row').map(function() {
            return $(this).data('subcourse');
        }).get()));

        // Add "all" option to both dropdowns
        courses.unshift('all');
        subcourses.unshift('all');

        // Populate course and sub-course dropdowns
        $('#courseSelect').html(courses.map(course => `<option value="${course}">${course}</option>`));
        $('#subcourseSelect').html(subcourses.map(subcourse =>
            `<option value="${subcourse}">${subcourse}</option>`));
    });
    </script>
    <script>
    // Add a click event listener to the "OneToOneSession" button
    document.getElementById('oneToOneSessionBtn').addEventListener('click', function() {
        // Toggle the visibility of the table
        document.getElementById('oneToOneSessionTable').classList.toggle('d-none');
    });
    </script>
</body>

</html>