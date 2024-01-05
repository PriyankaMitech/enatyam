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
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="session_id" value="<?php echo esc($session_id); ?>">
                                        <div class="form-group mb-2" id="select_day">
                                            <label class="control-label">Select Option</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="option_type"
                                                            value="day" checked>
                                                        <label class="form-check-label">Select Day</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="option_type"
                                                            value="allDay">
                                                        <label class="form-check-label">All days</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dayOptions" class="form-group mb-2">
                                            <!-- This div will be populated dynamically based on the user's selection -->
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="start_datetime" class="control-label">Start</label>
                                            <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                                name="start_datetime" id="start_datetime" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="end_datetime" class="control-label">End</label>
                                            <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                                name="end_datetime" id="end_datetime" required>
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
                    <button type="button" class="btn btn-secondary btn-sm rounded-0"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 

$sched_res = [];
if(!empty($schedule_data)){

foreach($schedule_data as $data){
    $sdate = date("F d, Y h:i A",strtotime($data->start_datetime));
    $edate = date("F d, Y h:i A",strtotime($data->end_datetime));
    $sched_res[$data->id] = $data;
}
}
?>

<script src="public/calendar/js/script.js"></script>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>

<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var optionTypeRadio = document.getElementsByName("option_type");

    function toggleDayOptions() {
        var dayOptionsDiv = document.getElementById("dayOptions");
        if (optionTypeRadio[0].checked) {
            dayOptionsDiv.innerHTML = '<label class="control-label">Select Day(s)</label>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Monday">' +
                '<label class="form-check-label">Monday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Tuesday">' +
                '<label class="form-check-label">Tuesday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Wednesday">' +
                '<label class="form-check-label">Wednesday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Thursday">' +
                '<label class="form-check-label">Thursday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Friday">' +
                '<label class="form-check-label">Friday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Saturday">' +
                '<label class="form-check-label">Saturday</label>' +
                '</div>' +
                '<div class="form-check">' +
                '<input type="checkbox" class="form-check-input" name="days[]" value="Sunday">' +
                '<label class="form-check-label">Sunday</label>' +
                '</div>';
        } else {

            dayOptionsDiv.innerHTML = '';
        }
    }
    for (var i = 0; i < optionTypeRadio.length; i++) {
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
</script>