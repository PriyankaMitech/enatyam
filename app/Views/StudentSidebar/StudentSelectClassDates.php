<?php echo view('StudentSidebar/Studentsidebar'); ?>



<link rel="stylesheet" href="public/calendar/fullcalendar/lib/main.min.css">
<script src="public/calendar/js/jquery-3.6.0.min.js"></script>
<script src="public/calendar/fullcalendar/lib/main.min.js"></script>
   
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

        <div class="container py-5" id="page-container">
    <div class="row">
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
        <div class="col-md-3">
                        <div class="cardt rounded-0 shadow">
                            <div class="card-header bg-gradient bg-primary text-light">
                                <h5 class="card-title">Select Schedule </h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url()?>gy" method="post"
                                        id="schedule-form">
                                        <input type="hidden" name="id" value="">
                                        <label for="classDate">Select Class Date:</label>
                                        <select name="student_shedule_time[]" id="student_shedule_time" class="select2" multiple="multiple" data-placeholder="Select a student" style="width: 100%;">
                                            <?php if(!empty($slots)){
                                                // echo "<pre>";print_r($slots);exit();
                                                ?>
                                             <?php
                                                $groupedSlots = [];

                                                // Group time slots by weekdays
                                                foreach ($slots as $data) {
                                                    $startDateTime = new DateTime($data->start_datetime);
                                                    $endDateTime = new DateTime($data->end_datetime);

                                                    // Calculate the total hours (ceil to ensure we include the last hour)
                                                    $totalHours = ceil($startDateTime->diff($endDateTime)->h + $startDateTime->diff($endDateTime)->i / 60);

                                                    // Reset start time
                                                    $startDateTime = new DateTime($data->start_datetime);

                                                    for ($i = 0; $i < $totalHours; $i++) {
                                                        $dayOfWeek = $startDateTime->format('l'); // Get the day of the week (e.g., Monday)
                                                        $startTime = $startDateTime->format('H:i');
                                                        
                                                        // Calculate end time (add 1 hour)
                                                        $endDateTime = clone $startDateTime;
                                                        $endDateTime->add(new DateInterval('PT1H'));
                                                        $endTime = $endDateTime->format('H:i');

                                                        // Add the time slot to the corresponding day if it doesn't exist
                                                        if (!isset($groupedSlots[$dayOfWeek][$startTime])) {
                                                            $groupedSlots[$dayOfWeek][$startTime] = true;
                                                            $groupedSlots[$dayOfWeek][] = "<option value=\"$startTime\">{$startTime} - {$endTime}</option>";
                                                        }

                                                        $startDateTime->add(new DateInterval('PT1H'));
                                                    }
                                                }

                                                // Sort days in the correct sequence
                                                $sequence = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                                                // Display time slots for each day in sequence
                                                foreach ($sequence as $day) {
                                                    if (isset($groupedSlots[$day])) {
                                                        echo "<optgroup label=\"$day\">";
                                                        foreach ($groupedSlots[$day] as $slot) {
                                                            echo $slot;
                                                        }
                                                        echo "</optgroup>";
                                                    }
                                                }
                                                ?>

                                            <?php } ?>
                                        </select>
                         
                                        
                                        <button class="btn btn-primary btn-sm rounded-0" type="submit"
                                            form="schedule-form"><i class="fa fa-save"></i> View</button>
                                        <button class="btn btn-default border btn-sm rounded-0" type="reset"
                                            form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                           <a> <dd id="description" class=""></dd></a>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
</div>
<?php

$sched_res = [];
if(!empty($slots)){

foreach($slots as $data){
    $sdate = date("F d, Y h:i A",strtotime($data->start_datetime));
    $edate = date("F d, Y h:i A",strtotime($data->end_datetime));
    $sched_res[$data->id] = $data;
}
}
?>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>


<script src="public/calendar/js/script.js"></script>

<script>
    // jQuery script to handle selection change
    $(document).ready(function () {
        var $select = $('#student_id');

        $select.on('change', function () {
            var selectedOptions = $(this).val();

            if (selectedOptions) {
                // Check for duplicate selections
                var uniqueSelections = Array.from(new Set(selectedOptions));

                // Update the select box with unique selections
                $select.val(uniqueSelections).trigger('change.select2');
            }
        });

        // Initialize select2
        $select.select2();
    });
</script>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>