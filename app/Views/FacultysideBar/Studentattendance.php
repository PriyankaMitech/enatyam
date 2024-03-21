<?php echo view('FacultySidebar2'); ?>
<style>
.loader-container {
    position: fixed;
    /* Position the container relative to the viewport */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Semi-transparent black background */
    z-index: 9999;
    /* Ensure the loader is above other content */
}

.loader {
    color: black;
    font-size: 10px;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    position: absolute;
    /* Position the loader relative to the container */
    top: 50%;
    /* Center the loader vertically */
    left: 50%;
    /* Center the loader horizontally */
    margin-top: -0.5em;
    /* Adjust margin to vertically center */
    margin-left: -0.5em;
    /* Adjust margin to horizontally center */
    text-indent: -9999em;
    animation: mulShdSpin 1.3s infinite linear;
    transform: translateZ(0);
    background-color: transparent;
    /* Transparent background */
}

@keyframes mulShdSpin {

    0%,
    100% {
        box-shadow: 0 -3em 0 0.2em,
            2em -2em 0 0em, 3em 0 0 -1em,
            2em 2em 0 -1em, 0 3em 0 -1em,
            -2em 2em 0 -1em, -3em 0 0 -1em,
            -2em -2em 0 0;
    }

    12.5% {
        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em,
            3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em,
            -2em 2em 0 -1em, -3em 0 0 -1em,
            -2em -2em 0 -1em;
    }

    25% {
        box-shadow: 0 -3em 0 -0.5em,
            2em -2em 0 0, 3em 0 0 0.2em,
            2em 2em 0 0, 0 3em 0 -1em,
            -2em 2em 0 -1em, -3em 0 0 -1em,
            -2em -2em 0 -1em;
    }

    37.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em,
            3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em,
            -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }

    50% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em,
            3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em,
            -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }

    62.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em,
            3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0,
            -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
    }

    75% {
        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em,
            3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em,
            -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
    }

    87.5% {
        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em,
            3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em,
            -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
    }
}
</style>

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
                        <div id="loader"  style="display: none;" class="loader-container">
                            <div class="loader"></div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-two-profile" role="tabpanel"
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
                                                    <?php $attendanceVerified = false; ?>
                                                    <?php if(!empty($varifyattandance)){foreach ($varifyattandance as $attendance): ?>
                                                    <?php if ($attendance->student_registerid == $student->id && $attendance->renewal === null && $attendance->verify_by_student === null): ?>
                                                    <?php $attendanceVerified = true; ?>
                                                    <?php break; ?>
                                                    <?php endif; ?>
                                                    <?php endforeach;} ?>
                                                    <tr>
                                                        <td><?= $student->full_name ?></td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="attendance[<?= $student->id ?>][present]"
                                                                    id="present<?= $student->id ?>" value="p" required>
                                                                <label class="form-check-label"
                                                                    style="margin-right:54px;"
                                                                    for="present<?= $student->id ?>">Present</label>
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="attendance[<?= $student->id ?>][absent]"
                                                                    id="absent<?= $student->id ?>" value="a" required>
                                                                <label class="form-check-label"
                                                                    for="absent<?= $student->id ?>">Absent</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <select class="form-control"
                                                                name="session[<?= $student->id ?>]">
                                                                <?php 
                                                                // Convert Session_nos string to an array
                                                                $excludedSessions = explode(',', $student->Session_nos);
                                                                for ($i = 1; $i <= $student->no_of_session; $i++): 
                                                                    // Check if the current session number is not in the excludedSessions array
                                                                    if (!in_array($i, $excludedSessions)): ?>
                                                                <option value="<?= $i ?>">Session <?= $i ?></option>
                                                                <?php endif; ?>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <!-- Add a hidden input for payment_id -->
                                                            <input type="hidden" name="payment_id[<?= $student->id ?>]"
                                                                value="<?= $student->payment_id ?>">
                                                            <?php if ($attendanceVerified): ?>
                                                            <span class="text-danger"> Last session Attendance not
                                                                verified by student</span>
                                                            <?php else: ?>
                                                            <button type="button" class="btn btn-primary"
                                                                onclick="submitAttendance(<?= $student->id ?>)">Submit
                                                                Attendance</button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane " id="custom-tabs-two-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-messages-tab">
                                    <!--  -->
                                    <div class="card-body">
                                        <?php
                                    $currentGroup = null;

                                    // echo "<pre>";print_r($GroupList);exit();
                                    foreach ($GroupList as $student):

                                        $adminModel = new \App\Models\AdminModel(); //
                                        $wherecon = array('user_id' => $student->id);
                                        $orderby = array('created_at' => 'DESC');
                                        $pament_details = $adminModel->getsingleroworderby('payment', $wherecon, $orderby);

                                    // echo "<pre>";print_r($pament_details);exit();
   
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
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td><?= $student->full_name ?></td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="hidden"
                                                                    name="payment_id[<?= $student->id ?>]"
                                                                    value="<?php if(!empty($pament_details)){ echo $pament_details->id; } ?>">
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
                                                                <?php 
    // Convert Session_nos string to an array
    $excludedSessions = explode(',', $student->Session_nos);
    for ($i = 1; $i <= $student->no_of_session; $i++): 
        // Check if the current session number is not in the excludedSessions array
        if (!in_array($i, $excludedSessions)): ?>
                                                                <option value="<?= $i ?>">Session <?= $i ?></option>
                                                                <?php endif; ?>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                onclick="submitAttendance(<?= $student->id ?>)">Submit
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