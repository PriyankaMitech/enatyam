<?php echo view('Studentsidebar/Studentsidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Sessions</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>StudentDashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sessions</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Your Session status</h3>

                            <div class="float-right">
                                <a href="<?php echo base_url() ?>reschedule" class="btn btn-primary active" role="button" aria-pressed="true">Reschedule</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                if (!is_null($SessionCount) && $SessionCount->SessionsCount > 0) {
                                    usort($slots, function ($a, $b) {
                                        return strtotime($a->date) - strtotime($b->date);
                                    });

    $sessionsCount = !is_null($SessionCount) ? $SessionCount->SessionsCount : 0;
    $currentDate = isset($slots[0]->Session_Start_Date) ? date('Y-m-d', strtotime($slots[0]->Session_Start_Date)) : null;

    for ($i = 0; $i < $sessionsCount; $i++) {
        $conductedSessions = isset($SessionCount->ConductedSessionsCount) ? explode(',', $SessionCount->ConductedSessionsCount) : [];
        $statusParts = explode('-', isset($conductedSessions[$i]) ? $conductedSessions[$i] : '');
        $status = isset($statusParts[1]) ? $statusParts[1] : '';

        $conductedClass = ($status == 'P') ? 'Y' : (($status == 'A') ? 'N' : 'N/A');
        $demoDate = isset($slots[$i]->Session_Start_Date) ? date('Y-m-d', strtotime($slots[$i]->Session_Start_Date)) : null;
        // $startTime = isset($slots[$i]->start_time) ? date('H:i', strtotime($slots[$i]->start_time)) : 'N/A';
        $commonStartTime = isset($slots[0]->start_time) ? date('H:i', strtotime($slots[0]->start_time)) : 'N/A';
        // Determine button text based on Conducted_Class and demo date
        if ($conductedClass == 'Y') {
            $buttonText = 'Done';
            $infoBoxColor = 'bg-success';
        } elseif ($conductedClass == 'N' && $demoDate < $today) {
            $buttonText = 'Reschedule';
            $infoBoxColor = 'bg-danger';
        } elseif ($demoDate >= $today) {
            $buttonText = 'Join';
            $infoBoxColor = 'bg-warning';
        } else {
            $buttonText = 'Join'; // No button for other cases
            $infoBoxColor = 'bg-secondary';
        }
        ?>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <div class="info-box-icon <?= $infoBoxColor; ?> flex-column">
                    <p class="info-box-number m-0"><?= $i + 1 ?></p>
                    <small class="info-box-date"><?= $currentDate ?></small>
                </div>

                <div class="info-box-content">
                    <span class="info-box-text mb-3"><strong>Start time : </strong><?= $commonStartTime ?></span>
                    <?php if (!empty($buttonText)) : ?>
                        <button class="btn btn-sm btn-primary float-right"><?= $buttonText ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php
        // Increase the date for the next iteration
        $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
    }
    ?>
</div>
                </div>
    </section>
</div>

</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>