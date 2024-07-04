<?php
$file = __DIR__ . "/Studentsidebar.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>
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
            <p>You have <?php echo $sessions; ?> sessions remaining. Renew After  <?php echo $sessions; ?> sessions now!</p>
        </div>
    </div>
</div>
            </div>
        </div>
    </section>
</div>

<?php
$file = __DIR__ . "/StudentFooter.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>


