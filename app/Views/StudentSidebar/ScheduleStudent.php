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
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                if (!is_null($SessionCount) && $SessionCount->SessionsCount > 0) {
                                    usort($slots, function ($a, $b) {
                                        return strtotime($a->date) - strtotime($b->date);
                                    });

                                    for ($i = 0; $i < $SessionCount->SessionsCount; $i++) {
                                        $cardColor = 'bg-warning'; // Default color for no data

                                        if (isset($slots[$i])) {
                                            $conductedClass = $slots[$i]->Conducted_Class;
                                            $cardColor = ($conductedClass == 'Y') ? 'bg-success' : (($conductedClass == 'N') ? 'bg-danger' : 'bg-warning');
                                        }
                                ?>
                                        <div class="col-md-3 mb-3">
                                            <div class="card <?= $cardColor; ?>">
                                                <div class="card-body" style="height: 150px;">
                                                    <!-- Set your desired height -->
                                                    <h5 class="card-title">Session <?= $i + 1 ?></h5><br>
                                                    <?php if (isset($slots[$i])) : ?>
                                                        <ul>
                                                            <li><strong>Date:</strong>
                                                                <?= date('d/m/Y', strtotime($slots[$i]->date)) ?? 'N/A' ?></li>
                                                            <li><strong>Start Time:</strong>
                                                                <?= $slots[$i]->start_time ?? 'N/A' ?></li>
                                                            <li><strong>End Time:</strong> <?= $slots[$i]->end_time ?? 'N/A' ?>
                                                            </li>
                                                            <!-- Add other date properties as needed -->
                                                        </ul>
                                                    <?php else : ?>
                                                        <p>No dates available for this session.</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <div class="col-md-12 mb-3">
                                        <div class="card bg-warning">
                                            <div class="card-body" style="height: 200px;">
                                                <!-- Set your desired height -->
                                                <p>No session count available.</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>