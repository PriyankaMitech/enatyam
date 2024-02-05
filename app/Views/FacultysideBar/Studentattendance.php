<?php echo view('FacultySidebar2'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-two-profile" role="tab"
                                        aria-controls="custom-tabs-two-profile" aria-selected="true">Individual</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-two-messages" role="tab"
                                        aria-controls="custom-tabs-two-messages" aria-selected="false">Group</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-profile-tab">
                                    <!--  -->
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
                                                                    name="attendance[<?= $student->id ?>][present]"
                                                                    id="present<?= $student->id ?>" value="p">
                                                                <label class="form-check-label"
                                                                    style="margin-right:54px;"
                                                                    for="present<?= $student->id ?>">Present</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="attendance[<?= $student->id ?>][absent]"
                                                                    id="absent<?= $student->id ?>" value="a">
                                                                <label class="form-check-label"
                                                                    for="absent<?= $student->id ?>">Absent</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <select class="form-control"
                                                                name="session[<?= $student->id ?>]">
                                                                <option value="">Select</option>
                                                                <?php for ($i = 1; $i <= $student->no_of_session; $i++): ?>
                                                                <option value="<?= $i ?>">Session <?= $i ?></option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                onclick="submitAttendance(<?= $student->id ?>)">Submit
                                                                Attendance</button>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-messages-tab">
                                    <!--  -->
                                    <div class="card-body">
                                        <?php
                                    $currentGroup = null;
                                    foreach ($GroupList as $student):
                                        if ($currentGroup !== $student->groupName):
                                            // Close previous card and start a new card for a different group
                                            if ($currentGroup !== null):
                                    ?>
                                        </tbody>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Group: <?= $student->groupName ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <form id="attendanceForm_<?= $student->groupName ?>" action="#" method="post">
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
                                                    <?php
            endif;
            ?>
                                                    <tr>
                                                        <td><?= $student->full_name ?></td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="attendance[<?= $student->id ?>][present]"
                                                                    id="present<?= $student->id ?>" value="p">
                                                                <label class="form-check-label"
                                                                    style="margin-right:54px;"
                                                                    for="present<?= $student->id ?>">Present</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="attendance[<?= $student->id ?>][absent]"
                                                                    id="absent<?= $student->id ?>" value="a">
                                                                <label class="form-check-label"
                                                                    for="absent<?= $student->id ?>">Absent</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <select class="form-control"
                                                                name="session[<?= $student->id ?>]">
                                                                <option value="">Select</option>
                                                                <?php for ($i = 1; $i <= $student->no_of_session; $i++): ?>
                                                                <option value="<?= $i ?>">Session <?= $i ?></option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                onclick=" (<?= $student->id ?>)">Submit
                                                                Attendance</button>
                                                        </td>
                                                    </tr>
                                                    <?php
            $currentGroup = $student->groupName;
            endforeach;
            ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

</div>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>