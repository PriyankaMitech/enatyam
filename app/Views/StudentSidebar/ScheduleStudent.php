<?php echo view('Studentsidebar/Studentsidebar'); ?>
<style>
#myModal {
    width: 24%;
    align-items: center;
    justify-content: center;
    align-content: center;
    margin-left: 44%;
    margin-top: 9%;
    height: 50%;
}
</style>
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
            <a href="<?php echo base_url() ?>reschedule" class="btn btn-primary mb-2" role="button" aria-pressed="true">Reschedule</a>
            <div class="row">
                <?php
                    $today = date('Y-m-d'); 
                    $sessionsCount = !is_null($SessionCount) ? $SessionCount->no_of_session : 0;
                    $currentDate = isset($slots[0]->Session_Start_Date) ? date('Y-m-d', strtotime($slots[0]->Session_Start_Date)) : null;

                    for ($i = 0; $i < $sessionsCount; $i++) {
                        $conductedSessions = isset($SessionCount->ConductedSessionsCount) ? explode(',', $SessionCount->ConductedSessionsCount) : [];
                        $statusParts = explode('-', isset($conductedSessions[$i]) ? $conductedSessions[$i] : '');
                        $status = isset($statusParts[1]) ? $statusParts[1] : '';

                        $conductedClass = ($status == 'P') ? 'Y' : (($status == 'A') ? 'N' : 'N/A');
                        $demoDate = isset($slots[$i]->Session_Start_Date) ? date('Y-m-d', strtotime($slots[$i]->Session_Start_Date)) : null;
                        $commonStartTime = isset($slots[0]->start_time) ? date('H:i', strtotime($slots[0]->start_time)) : 'N/A';
                    
                        if ($conductedClass == 'Y') {
                            $buttonText = 'Done';
                            $infoBoxColor = 'bg-success';
                        } elseif ($conductedClass == 'N' && $demoDate < $today) {
                            $buttonText = 'Reschedule';
                            $infoBoxColor = 'bg-danger';
                        } elseif ($currentDate == $today) {
                        
                            $buttonText = 'Join';
                            $infoBoxColor = 'bg-warning';
                        } else {
                            $buttonText = '';
                            $infoBoxColor = 'bg-secondary';
                        }
        
                ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <div class="info-box-icon <?= $infoBoxColor; ?> flex-column">
                            <p class="info-box-number m-0"><?= $i + 1 ?></p>
                            <small class="info-box-date"><?= !is_null($currentDate) ? $currentDate : 'N/A' ?></small>
                        </div>

                        <div class="info-box-content">
                            <?php if ($commonStartTime !== 'N/A') : ?>
                            <span class="info-box-text mb-3"><strong>Start time :
                                </strong><?= $commonStartTime ?></span>
                            <?php endif; ?>
                            <?php if (!empty($buttonText)) : ?>
                            <button class="btn btn-sm btn-primary float-right"
                                onclick="redirectToOtherPage('<?= $currentDate ?>', <?= $i + 1 ?>, '<?= $buttonText ?>', '<?= $commonStartTime ?>')">
                                <?= $buttonText ?>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php
            $currentDate = !is_null($currentDate) ? date('Y-m-d', strtotime($currentDate . ' +1 day')) : null;
        }
        ?>
            </div>


            <!-- Modal structure -->
            <form action="SessionConduct" method="post">
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>

                        <input type="hidden" id="modalCurrentDate" name="modalCurrentDate">
                        <input type="hidden" id="modalSessionNumber" name="modalSessionNumber">
                        <input type="hidden" id="modalButtonText" name="modalButtonText">

                        <p><button type="submit" name="conduct" value="S"
                                class="btn btn-block btn-success">Success</button></p><br>
                        <p><button type="submit" name="conduct" value="N" class="btn btn-block btn-danger">Not
                                Conducted</button></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>
