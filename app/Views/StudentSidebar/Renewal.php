<?php echo view('StudentSidebar/Studentsidebar'); ?>
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Renewal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>StudentDashboard">Schedule</a></li>
                        <li class="breadcrumb-item active">Renewal</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Remaining Sessions</h3>
                        </div>
                        <div class="card-body">
                            <p>You have 2 sessions remaining. Renew your sessions now!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>
