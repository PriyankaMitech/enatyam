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
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">

        <div class="row">
    <?php
    $today = date('Y-m-d'); // Current date in 'Y-m-d' format

    $sessionsCount = !is_null($SessionCount) ? $SessionCount->SessionsCount : 0;

    for ($i = 0; $i < $sessionsCount; $i++) {
        $conductedClass = isset($slots[$i]->Conducted_Class) ? $slots[$i]->Conducted_Class : 'N/A';
        $clasdate = isset($slots[$i]->date) ? date('Y-m-d', strtotime($slots[$i]->Session_Start_Date)) : null;
        $startTime = isset($slots[$i]->start_time) ? date('H:i', strtotime($slots[$i]->start_time)) : 'N/A';
        
        // Determine button text based on Conducted_Class and demo date
        if ($conductedClass == 'Y') {
            $buttonText = 'Done';
        } elseif ($conductedClass == 'N' && $clasdate < $today) {
            $buttonText = 'Reschedule';
        } elseif ($clasdate >= $today) {
            $buttonText = 'Join';
        } else {
            $buttonText = ''; // No button for other cases
        }

        $infoBoxColor = ($conductedClass == 'Y') ? 'bg-success' : (($conductedClass == 'N') ? 'bg-danger' : 'bg-warning');
        $formattedDate = isset($slots[$i]->Session_Start_Date) ? date('d/m/Y', strtotime($slots[$i]->Session_Start_Date)) : 'N/A';
        $demoDate = $clasdate;
        $d = 0;
        $demoDate = date('Y-m-d', strtotime(''.$demoDate.' '.$d.' day'));
        // print_r($clasdate);
        $d++;
        print_r($demoDate);
        ?>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <div class="info-box-icon <?= $infoBoxColor; ?> flex-column">
                    <p class="info-box-number m-0"><?= $i + 1 ?></p>
                    <small class="info-box-date"><?= $demoDate ?></small>
                    <small class="info-box-date">Monday</small>
                </div>

                <div class="info-box-content">
                    <span class="info-box-text mb-3"><strong>Start time : </strong><?= $startTime ?></span>
                    <?php if (!empty($buttonText)) : ?>
                        <button class="btn btn-sm btn-primary float-right"><?= $buttonText ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
        // $d++;
        // Increase the date for the next iteration
    }
    ?>
</div>
                </div>
    </section>
</div>

</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>