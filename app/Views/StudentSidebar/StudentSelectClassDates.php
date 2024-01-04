<?php echo view('StudentSidebar/Studentsidebar'); ?>

<!-- <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Faculty Slots</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Faculty Slots</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="your_form_action_url" method="post">
                            <label for="classDate">Select Class Date:</label>
                            <select name="classDate" id="classDate" class="form-control">
                                <?php foreach ($Slots as $slot): ?>
                                    <?php
                                    $startDateTime = new DateTime($slot->start_datetime);
                                    while ($startDateTime < new DateTime($slot->end_datetime)) {
                                        $formattedTime = $startDateTime->format('Y-m-d H:i:s');
                                        echo "<option value=\"$formattedTime\">{$startDateTime->format('Y-m-d H:i:s')}</option>";
                                        $startDateTime->add(new DateInterval('PT1H'));
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </select>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div> -->


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

                                        
                                        <button class="btn btn-primary btn-sm rounded-0" type="submit"
                                            form="schedule-form"><i class="fa fa-save"></i>View</button>
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

</html>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>