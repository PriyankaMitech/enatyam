<?php echo view('Studentsidebar/Studentsidebar'); ?>
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reschedule</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>StudentDashboard">Schedule</a></li>
                        <li class="breadcrumb-item active">Reschedule</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Reschedule </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="selectOption">Select:</label>
                                <select id="selectOption" class="form-control form-select" name="RescheduleSelect">
                                    <option selected>Select</option>
                                    <option value="form1">Reschedule</option>
                                    <option value="form2">Leave</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <form action="submitForm" method="post" id="form1" class="dynamic-form">
                        <div class="row">
                            <div class="col-sm-5 form-group">
                                <label>Date:</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="Session_date" id="form_date" readonly />
                                </div>
                            </div>
                            <div class="col-sm-5 form-group">
                                <label>Current Class time:</label>
                                <div class="input-group">
                                    <input type="time" class="form-control" name="current_time" id="current_time" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 form-group">
                                <label>Reschedule Class date:</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="reschedule_date"
                                        id="reschedule_date" />
                                </div>
                            </div>
                            
                            <div class="col-sm-5 form-group">
                                <label>Reschedule Class time:</label>
                                <div class="input-group">
                                    <input type="time" class="form-control" name="reschedule_time"
                                        id="reschedule_time" />
                                </div>
                            </div>
                            <div class="col-sm-6 form-group mb-3">
                                <label>Reason:</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="reason" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="sessionNumber" id="session_number" value="">
                        <input type="hidden" name="action" value="Reschedule">
                        <button type="button" class="btn btn-primary" onclick="submitForm('form1')">Submit Reschedule</button>
                    </form>

                    <form action="submitForm" method="post" id="form2" class="dynamic-form" style="display: none;">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Date:</label>
                                <div class="input-group ">
                                    <input type="date" class="form-control" name="form2_date" id="leave_date" />
                                </div>
                            </div>
                            <div class="col-sm-6 form-group mb-3">
                                <label> Reason : </label>
                                <div class="input-group">
                                    <textarea class="form-control" name="form2Reason" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="action" value="Leave">
                        <button type="button" class="btn btn-primary" onclick="submitForm('form2')">Submit
                            Leave</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>



<?php echo view('StudentSidebar/StudentFooter.php'); ?>