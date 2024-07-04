<?php include('Studentsidebar.php'); ?>
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
                    <div class="col-md-3 mt-3">
                        <div class="cardt rounded-0 shadow">
                            <div class="card-header bg-gradient bg-primary text-light">
                                <h5 class="card-title">Select Schedule</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url()?>selectslotsbystudent" method="post"
                                        id="schedule-form">
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="student_id" id="student_id" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">
                                        <input type="hidden" name="faculty_id" id="faculty_id" value="<?php echo isset($_SESSION['Assign_Techer_id']) ? $_SESSION['Assign_Techer_id'] : ''; ?>">


                                        <div class="form-group mb-2" >
                                          
                                            <div class="row">
                                            <div class="col-md-12">


                                            
                                                        <?php if (!empty($fshedules)) : ?>
                                                            <div class="form-group mb-2">
                                                                <label class="control-label">Select Day's</label>
                                                                <?php 
                                                                    $selectedDays = array(); // Initialize an empty array to store all days

                                                                    foreach($fshedules as $data) {
                                                                        $selectedDays = array_merge($selectedDays, explode(',', $data->days)); // Merge days from each iteration
                                                                    }

                                                                    $selectedDays = array_unique($selectedDays);

                                                                    ?>

                                                                <?php
                                                                $allDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                                                                foreach ($allDays as $day) :
                                                                    $isDisabled = in_array($day, $selectedDays) ? '' : 'disabled';
                                                                ?>
                                                                    <div class="form-check">
                                                                        <input type="radio" class="days form-check-input" name="days[]" value="<?= $day ?>"  <?= $isDisabled ?>>
                                                                        <label class="form-check-label"><?= $day ?></label>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>


                                                        <div class="form-group mb-2">
                                                            <label for="start_date" class="control-label">Start Date</label>
                                                            <input type="date" class="start_date form-control form-control-sm rounded-0"  id="start_date"  disabled>
                                                            <input type="hidden" class="start_date form-control form-control-sm rounded-0" name="start_date" id="start_date"  >

                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label for="end_date" class="control-label">End Date</label>
                                                            <input type="date" class="end_date form-control form-control-sm rounded-0"  id="end_date"  disabled>
                                                            <input type="hidden" class="end_date form-control form-control-sm rounded-0" name="end_date" id="end_date"  >

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Select Time</label>
                                                            <input type="hidden" id="selected_shedules_time"
                                                                value="<?php if (isset($single_data)) { echo ($single_data->shedules_time); } ?>">
                                                            <select name="shedules_time" id="shedules_time"
                                                                class="form-control">
                                                                <option value="">Please select Time</option>
                                                            </select>
                                                        </div>

                                            
                                                </div>
                                            
                                            </div>
                                        </div>
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
            <!-- Event Details Modal -->
            <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-header rounded-0">
                            <h5 class="modal-title">Schedule Details</h5>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body rounded-0">
                            <div class="container-fluid">
                                <dl>
                                    <!-- <dt class="text-muted">Faculty Name</dt>
                                    <dd id="title" class="fw-bold fs-4"></dd> -->
                                    <dt class="text-muted">Link for Meeting</dt>
                                    <a>
                                        <dd id="description" class=""></dd>
                                    </a>
                                    <dt class="text-muted">Start Time</dt>
                                    <dd id="start" class=""></dd>
                                    <dt class="text-muted">End Time </dt>
                                    <dd id="end" class=""></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="modal-footer rounded-0">
                            <div class="text-end">
                                <!-- <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit"
                                    data-id="">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                                    data-id="">Delete</button> -->
                                <!-- <button type="button" class="btn btn-secondary btn-sm rounded-0"
                                    data-bs-dismiss="modal">Close</button> -->
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

<?php include('StudentFooter.php') ; ?>
<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script>
$(document).ready(function() {
    var selectedDays = [];
var addedTimeSlots = [];


$('input[name="days[]"]').on('change', function() {

    // Clear the selectedDays array
    selectedDays = [];

    // Loop through all checked checkboxes and add their values to selectedDays
    $('input[name="days[]"]:checked').each(function() {
        selectedDays.push($(this).val());
    });

    // var_dump(selectedDays); // Output variable information for debugging
    // alert(selectedDays);

    // Now you have an array of the values of the selected days (selectedDays)
    fetchData(selectedDays);


});


    function resetDropdownAndFetchData() {
        $('#shedules_time').empty();
        $('#shedules_time').append('<option value="">Please select time</option>');
        addedTimeSlots = []; // Reset added time slots
        fetchData(selectedDays);
        
        
$('input[name="days[]"]').on('change', function() {

    // Clear the selectedDays array
    selectedDays = [];

    // Loop through all checked checkboxes and add their values to selectedDays
    $('input[name="days[]"]:checked').each(function() {
        selectedDays.push($(this).val());
    });

    // var_dump(selectedDays); // Output variable information for debugging
    // alert(selectedDays);

    // Now you have an array of the values of the selected days (selectedDays)
    fetchData(selectedDays);


});
    }

    function createOneHourSlots(start, end) {
        var slots = [];
        var currentSlot = new Date(start);

        while (currentSlot < end) {
            var formattedStart = formatTo12Hour(currentSlot);
            currentSlot.setHours(currentSlot.getHours() + 1);
            var formattedEnd = formatTo12Hour(currentSlot);
            var slot = formattedStart + ' - ' + formattedEnd;
            slots.push(slot);
        }

        return slots;
    }

    function formatTo12Hour(time) {
        var hours = time.getHours();
        var period = hours >= 12 ? 'PM' : 'AM';
        hours = (hours % 12) || 12;
        var minutes = time.getMinutes().toString().padStart(2, '0');
        return hours + ':' + minutes + ' ' + period;
    }

function fetchData(selectedDays) {
    // alert(selectedDays);
    
    // Refresh the page before executing fetchData function
    // location.reload();
    $.ajax({
        url: '<?= base_url(); ?>get_shedule_data_for_student',
        type: 'POST',
        data: {
    selectedDays: selectedDays
},
        dataType: 'json',
        success: function (data) {
            if (!Array.isArray(data)) {
                data = [data];
            }

            $.each(data, function (key, value) {
                var startTime = value.start_time;
                var endTime = value.end_time;

                var slots = createOneHourTimeSlots(startTime, endTime);
                $.each(slots, function (index, slot) {
                    if (!addedTimeSlots.includes(slot)) {
                        $('#shedules_time').append('<option value="' + slot + '">' + slot + '</option>');
                        addedTimeSlots.push(slot);
                    }
                });
            });

            // var selectedStateId = $('#selected_shedules_time').val();
            // $('#shedules_time').val(selectedStateId);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('AJAX Error:', textStatus, errorThrown);
        }
    });
}

function createOneHourTimeSlots(startTime, endTime) {
    var slots = [];
    var currentSlot = startTime;

    while (currentSlot < endTime) {
        var slot = currentSlot + ' - ' + addOneHour(currentSlot);
        slots.push(slot);
        currentSlot = addOneHour(currentSlot);
    }

    return slots;
}

function addOneHour(time) {
    var parts = time.split(':');
    var hours = parseInt(parts[0], 10);
    var minutes = parseInt(parts[1], 10);

    // Add one hour
    hours += 1;

    // Format to 'HH:mm:ss'
    return pad(hours) + ':' + pad(minutes) + ':00';
}

function pad(number) {
    return (number < 10 ? '0' : '') + number;
}





resetDropdownAndFetchData();
});
</script>


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
    $(document).ready(function() {
        var facultySchedules = <?= json_encode($fshedules) ?>;

        // Function to update the end date based on the selected day
        function updateEndDate(selectedDay) {
            var endDate = ''; // Default end date
            
            // Loop through faculty schedules to find the end date for the selected day
            facultySchedules.forEach(function(schedule) {
                if (schedule.days.includes(selectedDay)) {
                    endDate = schedule.end_date;
                }
            });

            // Set the value of the end date input field
            $('.end_date').val(endDate);
        }

        // Event listener for changes in the selected day(s)
        $('input[name="days[]"]').on('change', function() {
            // Get the value of the selected day
            var selectedDay = $(this).val();

            // Update the end date based on the selected day
            updateEndDate(selectedDay);
        });

        // Additional initialization code if needed
    });
</script>

