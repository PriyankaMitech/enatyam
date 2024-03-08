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
            <!-- <?php //echo "<pre>";print_r($attendance);exit(); ?> -->
            <?php
// Group attendance data by payment_id
$groupedAttendance = [];
foreach ($attendance as $row) {
    $paymentId = $row->payment_id;
    if (!isset($groupedAttendance[$paymentId])) {
        $groupedAttendance[$paymentId] = $row;
    }
}
?>

<?php foreach ($groupedAttendance as $paymentId => $row): ?>
    <tr>
        <td><?= $counter++ ?></td>
        <td><?= $row->faculty_name ?></td>
        <td><?= $row->student_name ?></td>
        <td><?= $row->no_of_session ?></td>
        <!-- ... other columns ... -->
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





<?php echo view('AdminSideBar/AdminFooter.php');?>