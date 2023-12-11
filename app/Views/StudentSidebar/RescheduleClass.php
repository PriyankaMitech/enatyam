<?php echo view('Studentsidebar/Studentsidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Reschedule </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label for="selectOption">Select:</label>
                                <select id="selectOption" class="form-control form-select">
                                    <option selected>Select</option>
                                    <option value="form1">Reschedule</option>
                                    <option value="form2">Leave</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <form> -->
                    <form id="form1" class="dynamic-form">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date:</label>
                                <div class="input-group ">
                                    <input type="date" class="form-control" name="form_date" id="form_date" />
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label> Current Class time:</label>
                                <div class="input-group ">
                                    <input type="time" class="form-control" name="current_time" id="current_time" />
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label> Reschedule Class time:</label>
                                <div class="input-group ">
                                    <input type="time" class="form-control" name="reschedule_time" id="reschedule_time" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group mb-3">
                                <label> Reason : </label>
                                <div class="input-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="form2" class="dynamic-form">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date:</label>
                                <div class="input-group ">
                                    <input type="date" class="form-control" name="form_date" id="leave_date" />
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                            <div class="col-sm-6 form-group mb-3">
                                <label> Reason : </label>
                                <div class="input-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                    <option>Date</option>
                                    <option>Current Class Time</option>
                                    <option>Reschdule Class Time</option>
                                    <option>Reason</option>

                                </select>
                            </div>
                        </div> -->
                </div>

                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
                </form>
            </div>

            <?php echo view('StudentSidebar/StudentFooter.php'); ?>