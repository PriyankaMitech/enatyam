<?php echo view('FacultySidebar2.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col">
                    <form id="scheduleForm" action="<?= base_url('saveshedule') ?>" method="POST">
                        <div class="row">
                            <input type="hidden" name="id" value="<?php echo esc($session_id); ?>">
                            <!-- Day Selection, Start Date, and End Date in one row -->
                            <div class="col">
                                <div class="form-group mt-4">
                                    <label for="day" class="form-label">Select Day:</label>
                                    <select id="day" name="day" class="form-select">
                                        <option>select</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="control-label">Start Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="start_date"
                                        id="start_date" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="end_date" class="control-label">End Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="end_date"
                                        id="end_date" value="<?php echo date('Y-m-t'); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- Start Time, End Time, and Add Time Button in another row -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="time" class="form-label">Start Time:</label>
                                    <input type="time" id="time" name="start_time" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="time" class="form-label">End Time:</label>
                                    <input type="time" id="time" name="end_time" class="form-control">
                                </div>
                            </div>
                            <div class="col mt-2">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Add Time</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <?php 
                        $day = date('l', strtotime("+$i days"));
                        $slotsForDay = array_filter($myslots, function($slot) use ($day) {
                            return $slot['days'] === $day;
                        });
                    ?>
                    <div class="col-md-4">
                        <div class="card rounded-0 shadow">
                            <div class="card-header bg-gradient bg-primary text-light">
                                <h5 class="card-title">Schedule for <?php echo $day; ?></h5>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($slotsForDay)) : ?>
                                    <?php foreach ($slotsForDay as $slot): ?>
                                        <p>Start Time: <?php echo $slot['start_time']; ?> - End Time: <?php echo $slot['end_time']; ?></p>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <p>No slots available for <?php echo $day; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<?php echo view('FacultysideBar/FacultyFooter.php'); ?>
