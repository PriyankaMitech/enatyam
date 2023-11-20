<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <style>
    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
    }

    .list {
        margin-left: 50px;
    }

    #studentDropdown {
        font-size: 20px;
    }

    .list label {
        font-size: 20px;
    }

    #teacherDropdown {
        font-size: 20px;
    }
    table {
        border-collapse: collapse;
        width: 40%;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
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
    <div class="countariner">
        <div class="row">
            <div class="list">
                <label for="studentDropdown">Select Student:</label>

                <select id="studentDropdown" name="studentDropdown" class="form-select form-select-lg mb-5"
                    aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <?php
                    foreach ($StudentList as $student) {
                        echo "<option value='{$student->id}'>{$student->full_name}</option>";
                    }
                    ?>
                </select>
                <label for="teacherDropdown">Select Teacher:</label>

                <select id="teacherDropdown" name="teacherDropdown" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">

                </select>
                <button id="submitButton">Submit</button>
            </div>
        </div>
        <div class="row" style=" display: flex; justify-content: space-around; margin: 20px;">
        <table id="studentTable" style="border: 1px;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>End Time</th>
                    <!-- Add more columns as needed for students -->
                </tr>
            </thead>
            <tbody>
                <!-- Data for students will be inserted here dynamically -->
            </tbody>
        </table>

        <table id="teacherTable" style="border: 1px;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <!-- Add more columns as needed for teachers -->
                </tr>
            </thead>
            <tbody>
                <!-- Data for teachers will be inserted here dynamically -->
            </tbody>
        </table>
        </div>
    </div>
   
        
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $('#studentDropdown').on('change', function() {
        var studentId = $(this).val();
        $.ajax({
            url: '<?= site_url('AdminController/getTeachersByStudent') ?>',
            method: 'POST',
            data: {
                studentId: studentId
            },
            dataType: 'json',
            success: function(data) {
                $('#teacherDropdown').empty();
                console.log(data);
                $.each(data, function(key, teacher) {
                    $('#teacherDropdown').append('<option value="' + teacher
                        .Assign_Techer_id + '">' + teacher.full_name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#submitButton').on('click', function() {
        var selectedStudent = $('#studentDropdown').val();
        var selectedTeacher = $('#teacherDropdown').val();

        $.ajax({
            url: '<?= site_url('AdminController/processSelection') ?>',
            method: 'POST',
            data: {
                studentId: selectedStudent,
                teacherId: selectedTeacher
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                // Clear existing table rows
                $('#studentTable tbody').empty();
                $('#teacherTable tbody').empty();

                // Append new rows based on the response
                $.each(response.studentData, function(key, studentRow) {
                    $('#studentTable tbody').append('<tr><td>' + studentRow.date +
                        '</td><td>' + studentRow.start_time + '</td></tr>'+ studentRow.end_time + '</td></tr>');
                });

                $.each(response.teacherData, function(key, teacherRow) {
                    $('#teacherTable tbody').append('<tr><td>' + teacherRow.date +
                        '</td><td>' + teacherRow.start_time + '</td></tr>'+ teacherRow.end_time + '</td></tr>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
    </script>
</body>

</html>