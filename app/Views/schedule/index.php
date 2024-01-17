<?php echo view('FacultySidebar2.php'); ?>
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
                                <h5 class="card-title">Schedule Form</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url()?>save_schedule" method="post"
                                        id="schedule-form">
                                        <input type="hidden" name="id" value="<?php echo esc($session_id); ?>">
                                        <input type="hidden" name="session_id" value="<?php echo esc($session_id); ?>">
                                        
                        
                                            <?php if(!empty($single)){ ?>
                                                <div class="form-group mb-2">
                                                    <label class="control-label">Select Day's</label>

                                                        <?php
                                                    
                                                        $selectedDays = explode(',', $single->days); // Assuming $yourObject contains your data
                                                        $allDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                                                        foreach ($allDays as $day) {
                                                            $isChecked = in_array($day, $selectedDays) ? 'checked' : '';
                                                            $isdisabled = in_array($day, $selectedDays) ? 'disabled' : '';
                                                        ?>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="days[]" value="<?= $day ?>" <?= $isChecked ?> <?= $isChecked ?> <?=$isdisabled; ?>>
                                                                <label class="form-check-label"><?= $day ?></label>
                                                            </div>

                                                        <?php }?>
                                                    </div>

                                                
                                        <!-- <div class="form-group mb-2">
                                            <label for="start_date" class="control-label">Start Date</label>
                                            <input type="date" class="start_date form-control form-control-sm rounded-0" id="start_date" disabled>
                                            <input type="hidden" class="start_date form-control form-control-sm rounded-0" name="start_date" id="start_date" value="<?=$single->start_date;?>" >

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="end_date" class="control-label">End Date</label>
                                            <input type="date" class="end_date form-control form-control-sm rounded-0" id="end_date" disabled>
                                            <input type="hidden" class="end_date form-control form-control-sm rounded-0" name="end_date" id="end_date" value="<?=$single->end_date;?>" >

                                        </div> -->


                                    
                                        <!-- <div class="form-group mb-2">
                                            <label for="start_time" class="control-label">Start Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0" name="start_time" id="start_time" >
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="end_time" class="control-label">End Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0" name="end_time" id="end_time" >
                                        </div> -->
                                        <?php }else{ ?>

                                            <div class="form-group mb-2">
                                                    <label class="control-label">Select Day's</label>

                                                        <?php
                                                    
                                                            $allDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                                                            foreach ($allDays as $day) {
                                                        
                                                        ?>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="days[]" value="<?= $day ?>" >
                                                                <label class="form-check-label"><?= $day ?></label>
                                                            </div>

                                                        <?php }?>
                                            </div>


                                        <div class="form-group mb-2">
                                            <label for="start_date" class="control-label">Start Date</label>
                                            <input type="date" class="start_date form-control form-control-sm rounded-0" id="start_date" disabled>
                                            <input type="hidden" class="start_date form-control form-control-sm rounded-0" name="start_date" id="start_date" >

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="end_date" class="control-label">End Date</label>
                                            <input type="date" class="end_date form-control form-control-sm rounded-0" id="end_date" disabled>
                                            <input type="hidden" class="end_date form-control form-control-sm rounded-0" name="end_date" id="end_date" >

                                        </div>


                                    
                                        <div class="form-group mb-2">
                                            <label for="start_time" class="control-label">Start Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0" name="start_time" id="start_time" >
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="end_time" class="control-label">End Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0" name="end_time" id="end_time" >
                                        </div>
                                        <?php } ?>
                                        <button class="btn btn-primary btn-sm rounded-0" type="submit"
                                            form="schedule-form"><i class="fa fa-save"></i> Save</button>
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
        </div>
    </section>
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
                         <!-- <dt class="text-muted">Description</dt>
                         <a> <dd id="description" class=""></dd></a> -->
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
                    <button type="button" class="btn btn-secondary btn-sm rounded-0"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$sched_res = [];
// echo "<pre>";print_r($schedule_data);exit();

if(!empty($schedule_data)){


foreach($schedule_data as $data){
    $sdate = date("F d, Y h:i A",strtotime($data->start_date));
    $edate = date("F d, Y h:i A",strtotime($data->end_date));
    $sched_res[$data->id] = $data;
}
}
?>

<script src="public/calendar/js/script.js"></script>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>


<!-- Your HTML code -->

<script>
    $(document).ready(function() {
        function updateEndDateState() {
            var start_date_value = $('.start_date').val();
        
        }

        var currentDate = new Date();
        var tomorrowDate = new Date(currentDate);
        tomorrowDate.setDate(currentDate.getDate() + 1);
        var start_date_formatted = tomorrowDate.toISOString().split('T')[0];
        $('.start_date').val(start_date_formatted);

        var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

        var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');

        var end_date_formatted = currentDate.getFullYear() + '-' + month + '-' + lastDayOfMonth;


        $('.end_date').val(end_date_formatted);

        $('.start_date').attr('min', start_date_formatted);

        updateEndDateState();

        $('.start_date').on('change', function() {
            updateEndDateState();
        });
    });
</script>




<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script>


document.addEventListener("DOMContentLoaded", function() {
    var currentDate = new Date();
    var startDatetimeInput = document.getElementById("start_datetime");
    var endDatetimeInput = document.getElementById("end_datetime");

    startDatetimeInput.min = formatDate(currentDate);
    endDatetimeInput.min = formatDate(currentDate);

    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        var hours = date.getHours().toString().padStart(2, '0');
        var minutes = date.getMinutes().toString().padStart(2, '0');
        return `${year}-${month}-${day}T${hours}:${minutes}`;
    }
});




</script>


