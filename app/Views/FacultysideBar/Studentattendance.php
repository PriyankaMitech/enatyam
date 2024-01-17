<?php echo view('FacultySidebar2'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Student Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>FacultyDashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student Attendance</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <div class="card-body">
                    <form id="attendanceForm" action="#" method="post">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Attendance</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($studentList as $student): ?>
                                    <tr>
                                        <td><?= $student->full_name ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="attendance[<?= $student->id ?>][present]" id="present<?= $student->id ?>"
                                                    value="p">
                                                <label class="form-check-label" style="margin-right:54px;"
                                                    for="present<?= $student->id ?>">Present</label>
                                                <input class="form-check-input" type="checkbox"
                                                    name="attendance[<?= $student->id ?>][absent]" id="absent<?= $student->id ?>"
                                                    value="a">
                                                <label class="form-check-label" for="absent<?= $student->id ?>">Absent</label>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="form-control" name="session[<?= $student->id ?>]">
                                                <option value="">Select</option>
                                                <?php for ($i = 1; $i <= $student->no_of_session; $i++): ?>
                                                    <option value="<?= $i ?>">Session <?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary"
                                                onclick="submitAttendance(<?= $student->id ?>)">Submit Attendance</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>
