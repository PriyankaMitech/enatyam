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
                                <h5 class="card-title">Select Schedule</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="<?php echo base_url()?>selectslotsbystudent" method="post"
                                        id="schedule-form">
                                        <input type="hidden" name="id" value="">
                                        <div class="form-group mb-2" id="select_day">
                                          
                                            <div class="row">
                                              

                                                <div class="col-md-12">
                                                <?php if (!empty($fshedules)) : ?>
                                                    <div class="form-group mb-2">
                                                        <label class="control-label">Select Day's</label>
                                                        <?php
                                                        $selectedDays = explode(',', $fshedules->days); // Assuming $fshedules contains your data
                                                        $allDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                                                        foreach ($allDays as $day) :
                                                            $isDisabled = in_array($day, $selectedDays) ? '' : 'disabled';
                                                        ?>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="days[]" value="<?= $day ?>"  <?= $isDisabled ?>>
                                                                <label class="form-check-label"><?= $day ?></label>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>


                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Select Shedule</label>
                                                        <input type="hidden" id="selected_shedules_time"
                                                            value="<?php if (isset($single_data)) { echo ($single_data->shedules_time); } ?>">
                                                        <select name="shedules_time" id="shedules_time"
                                                            class="form-control">
                                                            <option value="">Please select sub courses</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"
                                                value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>_<?php echo isset($_SESSION['Assign_Techer_id']) ? $_SESSION['Assign_Techer_id'] : ''; ?>">
                                            <i class="fa fa-save"></i> Submit
                                        </button>
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
                                    <a>
                                        <dd id="description" class=""></dd>
                                    </a>
                                    <dt class="text-muted">Start</dt>
                                    <dd id="start" class=""></dd>
                                    <dt class="text-muted">End</dt>
                                    <dd id="end" class=""></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="modal-footer rounded-0">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit"
                                    data-id="">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                                    data-id="">Delete</button>
                                <button type="button" class="btn btn-secondary btn-sm rounded-0"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>
<?php 

$sched_res = [];
if(!empty($data)){

foreach($data as $data){
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
document.addEventListener("DOMContentLoaded", function() {
    var optionTypeRadio = document.getElementsByName("option_type");

    function toggleDayOptions() {
        var dayOptionsDiv = document.getElementById("dayOptions");
        if (optionTypeRadio[0].checked) {
            <?php if (!empty($day_wise_shedules)) : ?>
            dayOptionsDiv.innerHTML = '<label class="control-label">Select Day(s)</label>';
            <?php foreach ($day_wise_shedules as $data) : ?>
            dayOptionsDiv.innerHTML += '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="<?php echo $data->Daystype; ?>" <?php echo ($data->Daystype !== $data->Daystype) ? 'disabled' : ''; ?>>' +
                '<label class="form-check-label"><?php echo $data->Daystype; ?></label>' +
                '</div>';
            <?php endforeach; ?>
            <?php else : ?>
            dayOptionsDiv.innerHTML = '';
            <?php endif; ?>
        } else {
            dayOptionsDiv.innerHTML = '';
        }
    }

    for (var i = 0; optionTypeRadio && i < optionTypeRadio.length; i++) {
        optionTypeRadio[i].addEventListener("change", toggleDayOptions);
    }

    toggleDayOptions();
});

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

$(document).ready(function() {
    var selectedDays = [];
    var addedTimeSlots = [];

    $('input[name="days[]"]').on('change', function() {
        selectedDays = [];
        fetchData(selectedDays);
    });


    function resetDropdownAndFetchData() {
        $('#shedules_time').empty();
        $('#shedules_time').append('<option value="">Please select time</option>');
        addedTimeSlots = []; // Reset added time slots
        fetchData(selectedDays);
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

//     function fetchData(selectedDays) {
//     $.ajax({
//         url: '<?= base_url(); ?>get_shedule_data_for_student',
//         type: 'POST',
//         data: {
//             selectedDays: selectedDays,
//         },
//         dataType: 'json',
//         success: function (data) {
//             // Check if 'data' is an array, if not, convert it to an array
//             if (!Array.isArray(data)) {
//                 data = [data];
//             }

//             $.each(data, function (key, value) {
//                 // Combine date and time components
//                 var startDateTimeString = value.start_date + ' ' + value.start_time;
//                 var endDateTimeString = value.end_date + ' ' + value.end_time;

//                 // Parse combined date and time strings into JavaScript Date objects
//                 var startDatetime = new Date(startDateTimeString);
//                 var endDatetime = new Date(endDateTimeString);

//                 // Generate one-hour time slots
//                 var slots = createOneHourSlots(startDatetime, endDatetime);

           


//                 $.each(slots, function (index, slot) {
//                     if (!addedTimeSlots.includes(slot)) {
//                         $('#shedules_time').append('<option value="' + value.id + '">' + slot + '</option>');
//                         addedTimeSlots.push(slot);
//                     }
//                 });
//             });

//             var selectedStateId = $('#selected_shedules_time').val();
//             $('#shedules_time').val(selectedStateId);
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.error('AJAX Error:', textStatus, errorThrown);
//         }
//     });
// }


function fetchData(selectedDays) {
    $.ajax({
        url: '<?= base_url(); ?>get_shedule_data_for_student',
        type: 'POST',
        data: {
            selectedDays: selectedDays,
        },
        dataType: 'json',
        success: function (data) {
            // Check if 'data' is an array, if not, convert it to an array
            if (!Array.isArray(data)) {
                data = [data];
            }

            $.each(data, function (key, value) {
                // Assuming 'start_time' and 'end_time' are in the format 'HH:mm:ss'
                var startTime = value.start_time;
                var endTime = value.end_time;

                // Generate one-hour time slots
                var slots = createOneHourTimeSlots(startTime, endTime);

                $.each(slots, function (index, slot) {
                    if (!addedTimeSlots.includes(slot)) {
                        $('#shedules_time').append('<option value="' + value.id + '">' + slot + '</option>');
                        addedTimeSlots.push(slot);
                    }
                });
            });

            var selectedStateId = $('#selected_shedules_time').val();
            $('#shedules_time').val(selectedStateId);
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




    $('#schedule-form').submit(function(e) {
        e.preventDefault();
        var selectedTime = $('#shedules_time option:selected').text();
        var selectedTimePeriod = selectedTime.split(' - ').join(' ');
        var formData = {
            option_type: $('input[name="option_type"]:checked').val(),
            days: $('input[name="days[]"]:checked').map(function() {
                return this.value;
            }).get(),
            selected_time_period: selectedTimePeriod,
            id: '<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>',
            Assign_Techer_id: '<?php echo isset($_SESSION['Assign_Techer_id']) ? $_SESSION['Assign_Techer_id'] : ''; ?>'
        };

    $.ajax({
        url: '<?= base_url(); ?>selectslotsbystudent',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
            
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX Error:', textStatus, errorThrown);
        }
    });
});

function checkSlot(slot) {
    
        var teacherId = '<?php echo isset($_SESSION['Assign_Techer_id']) ? $_SESSION['Assign_Techer_id'] : ''; ?>';

    $.each(slot, function(index, slot) {
        $.ajax({
         url: '<?= base_url(); ?>check_slot_availability',
            type: 'POST',
            data: {
                selectedSlot: slot,
                studentId: '<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>',

                teacherId: teacherId
            },
            dataType: 'json',
            success: function(data) {
                
                    // console.log(value);
                if (data.available == 'true') { 
                    $.each(slots, function(index, slot) {
                        if (!addedTimeSlots.includes(slot)) {
                      
                            $('#shedules_time').append('<option value="' + value
                                .id + '">' + slot + '</option>');
                            addedTimeSlots.push(slot); 
                        }
                    });
                  
                } else {
                    // console.log(data)
                    $('#shedules_time').append('<option value="1">+ slot + </option>');
                    addedTimeSlots.push(slot);
                    // If the slot is not available, you can handle it as needed
                    // console.log('Slot not available:', value);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
            }
        });
    });

}

resetDropdownAndFetchData();
});
</script>