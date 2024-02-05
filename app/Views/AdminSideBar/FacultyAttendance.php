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
                            <h3 class="card-title">Schedule </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Faculty Name</th>
                <th>Student Name</th>
                <th>Session count</th>
                <th>Conducted Sessions</th>
                <!-- <th>Start Time</th>
                <th>End Time</th> -->
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php $displayedIds = []; ?>
            <?php foreach ($attendance as $row): ?>
                <?php if (!in_array($row->student_registerid, $displayedIds)): ?>
                    <?php
                    // Count the conducted sessions for the current student
                    $conductedSessionsCount = array_reduce($attendance, function ($carry, $item) use ($row) {
                        return $carry + ($item->student_registerid == $row->student_registerid);
                    }, 0);
                    ?>
                    <tr>
                        <td><?= $counter++ ?></td>
                        <td><?= $row->faculty_name ?></td>
                        <td><?= $row->student_name ?></td>
                        <td><?= $row->no_of_session ?></td>
                        <td><?= $conductedSessionsCount ?></td>
                        <!-- <td></td>
                        <td></td> -->
                        <!-- ... other columns ... -->
                    </tr>
                    <?php $displayedIds[] = $row->student_registerid; ?>
                <?php endif; ?>
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





<?php echo view('AdminSideBar/AdminFooter.php');?>