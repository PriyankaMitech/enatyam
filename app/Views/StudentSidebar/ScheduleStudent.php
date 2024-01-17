<?php  echo view('StudentSidebar/Studentsidebar'); ?>
<link rel="stylesheet" href="public/calendar/fullcalendar/lib/main.min.css">
<script src="public/calendar/js/jquery-3.6.0.min.js"></script>
<script src="public/calendar/fullcalendar/lib/main.min.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="container py-5" id="page-container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="calendar"></div>
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
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body rounded-0">
                <div class="container-fluid">
                    <dl>
                         <dt class="text-muted">Google Meet Link</dt>
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
                    <!-- <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0"
                        data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$sched_res = [];
if(!empty($schedule_data)){
foreach($schedule_data as $data){
    $sdate = date("F d, Y h:i A",strtotime($data->start_date));
    $edate = date("F d, Y h:i A",strtotime($data->end_date));
    $sched_res[$data->id] = $data;
}
}

?>
<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="public/calendar/js/slots.js"></script>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>


