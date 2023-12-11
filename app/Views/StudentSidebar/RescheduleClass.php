<?php echo view('Studentsidebar/Studentsidebar'); ?>

<!-- <div class="content-wrapper">
    <section class="content-header"> -->
<!-- <div class="container-fluid"> -->

<!-- </div> -->
<!-- </section>
    <section class="content">
        <div class="container-fluid"> -->

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reschedule</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>StudentDashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Reschedule</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
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
                                <select id="selectOption" class="form-control form-select" name="RescheduleSelect">
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
                                    <input type="date" class="form-control" name="form1_date" id="form_date" />
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
                                    <textarea class="form-control" name="form1Reason" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="form2" class="dynamic-form">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date:</label>
                                <div class="input-group ">
                                    <input type="date" class="form-control" name="form2_date" id="leave_date" />
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                            <div class="col-sm-6 form-group mb-3">
                                <label> Reason : </label>
                                <div class="input-group">
                                    <textarea class="form-control" name="form2Reason" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>



<?php echo view('StudentSidebar/StudentFooter.php'); ?>