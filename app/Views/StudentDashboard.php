<?php echo view('StudentSidebar/Studentsidebar'); ?>
<style>
.notification-dropdown {
    max-height: 300px;
    /* Adjust the maximum height as needed */
    overflow-y: auto;
}

.notification-scroll {
    overflow-x: hidden;
    overflow-y: auto;
    max-height: 200px;
    /* Adjust the maximum height for side-scrolling */
}
</style>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="<?=base_url();?>StudentAttendancerecord" class="info-box bg-info">
                        <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">My Attendance</span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <a href="<?=base_url();?>StudentProfile" class="info-box bg-warning">
                        <span class="info-box-icon"><i class='fas fa-address-card'></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">My Profile</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="<?=base_url();?>SelectDate" class="info-box bg-info">
                        <span class="info-box-icon"><i class='fas fa-address-card'></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Faculty Availability</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="<?=base_url();?>UplodeVideo" class="info-box bg-warning">
                        <span class="info-box-icon"><i class='fas fa-address-card'></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Uplode Video</span>
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">JOIN THIS LINK FOR DAILY CLASSES</h4>
                        </div>
                        <div class="card-body">
                            <p>Welcome! Click the button below to join our daily class sessions. Don't miss out on the
                                valuable learning experience!</p>
                            <?php if(isset($meeting->meetlink)): ?>
                            <a href="<?= $meeting->meetlink ?>" class="btn btn-primary">Join Session Now</a>
                            <?php else: ?>
                            <p>No meeting link available at the moment.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>