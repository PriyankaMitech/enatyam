<?php echo view('FacultySidebar2'); ?> <div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Set Schedule</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="
								<?= base_url(); ?>FacultyDashboard">Dashboard </a>
            </li>
            <li class="breadcrumb-item active">Set Schedule</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Share your Availability</h3>
                </div>
                <div class="card-body">
                    <form id="scheduleForm" action="
                      <?= base_url('saveschedule') ?>" method="post">
                      <div class="row">
                        <div class="col-md-4 form-group">
                          <label>Day:</label>
                          <select class="form-control" name="form_day" id="form_day" required>
                          <option value="">select</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                          </select>
                        </div>
                    <div class="col-md-4 form-group">
                      <label for="form_time">Start Time:</label>
                          <input type="time" class="form-control" name="form_time" id="form_time" onchange="updateEndTime()"  />
                  </div>
                  <div class="col-md-4 form-group">
                    <label>End Time:</label>
                      <input type="time" class="form-control" name="to_time" id="to_time" readonly />
                  </div>
                  <div class="col-md-4 p-2">
                    <?php 
// Access the session data
$sessionData = $_SESSION['sessiondata'];

// Access the 'id' from the session data
$id = $sessionData['id'];


?>
                    <input type="hidden" name="faculty_register_id" value="
											<?= $id; ?>">
                    <button type="button" class="btn btn-success" onclick="submitForm()">Save Data</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
    <?php
    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    foreach ($days as $day) {
        ?>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $day ?></h3>
                </div>
                <div class="card-body row">
                    <?php
                    // Filter the slots for the current day
                    $filteredSlots = array_filter($faculty_slots, function ($slot) use ($day) {
                        return $slot['day'] === $day;
                    });

                    // Sort the filtered slots by start time
                    usort($filteredSlots, function ($a, $b) {
                        return strtotime($a['start_time']) - strtotime($b['start_time']);
                    });

                    foreach ($filteredSlots as $slot) {
                        // Remove trailing ":00" for minutes that are "00"
                        $startTime = date('H:i', strtotime($slot['start_time']));
                        $endTime = date('H:i', strtotime($slot['end_time']));

                        // Check student_register_id and apply the style and disable the button
                        $buttonStyle = ($slot['student_register_id'] > 0) ? 'btn-secondary' : 'btn-primary';
                        $buttonDisabled = ($slot['student_register_id'] > 0) ? 'disabled' : '';
                        ?>
                        <button type="button" class="btn btn-sm mr-1 <?= $buttonStyle ?>" style="margin-top: 10px;" <?= $buttonDisabled ?>
                                data-toggle="tooltip" title="This Time Is Booked"><?= $startTime ?> To <?= $endTime ?></button>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
    </div>
  </section>
</div> <?php echo view('FacultysideBar/FacultyFooter.php'); ?>