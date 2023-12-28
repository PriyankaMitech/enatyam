<?php echo view('StudentSidebar/Studentsidebar'); ?>

<style>
    .video-card:hover {
        transform: scale(1.05);
        transition: transform 0.2s ease;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .video-card .card-body {
        background-color: #3498DB;;
        padding: 15px;
        text-align: center;
    }

    .ribbon-wrapper {
        position: absolute;
        z-index: 1;
    }

    .ribbon {
        background-color: #3498db; /* Adjust the ribbon color */
        color: #fff;
        padding: 6px 12px;
        font-size: 16px;
        position: relative;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Videos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Videos / Images</li>
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
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"> My video</a></li>
            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Study Videos</a></li>
        </ul>
    </div>

    <?php
function formatDateTime($dateTimeString)
{
    $dateTime = new DateTime($dateTimeString);
    return $dateTime->format('j M Y');
}
?>

    <!-- Display for both faculty and student videos -->
    <div class="card-body">
    <div class="tab-content">
        <div class="active tab-pane" id="activity">
            <?php if (!empty($stdvideos)) { ?>
                <div class="row mt-4">
                    <?php foreach ($stdvideos as $mystdvideo) {
                        $imagePath = 'public/uploads/StudentStudyvideos/' . $mystdvideo->name;
                        $fullImagePath = base_url($imagePath);

                        // Check if the image file exists
                        if (file_exists(FCPATH . $imagePath)) :
                    ?>
                            <div class="col-md-3">
                                <div class="card video-card position-relative">
                                    <!-- Image exists, display it -->
                                    <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                        <source class="img-fluid" src="<?= base_url( ) ?>public/uploads/StudentStudyvideos/<?=$mystdvideo->name ?>" type="video/mp4">
                                    </video>
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon">
                                            <p class="card-text"><?=($mystdvideo->student_name); ?></p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php if ($mystdvideo) : ?>
                                                <strong>Video Date:</strong>
                                                <?= formatDateTime($mystdvideo->DateTime); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    } ?>
                </div>
            <?php } else { ?>
                No videos uploaded yet.
            <?php } ?>
        </div>

        <div class="tab-pane" id="timeline">
            <?php if (!empty($videos)) {  ?>
                <div class="row mt-4">
                    <?php foreach ($videos as $faculty) {
                        $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                        if ($extension == 'mp4') :
                    ?>
                            <div class="col-md-4">
                                <div class="card video-card position-relative">
                                    <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                        <source class="img-fluid" src="<?= base_url( ) ?>public/uploads/FacultyUplodedVideos/<?=$faculty->video_name ?>" type="video/mp4">
                                    </video>
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon">
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php if ($faculty) : ?>
                                                <strong>Upload Video Date:</strong>
                                                <?= formatDateTime($faculty->DateTime); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    } ?>
                </div>
            <?php } else {?>
                No videos uploaded yet.
            <?php } ?>
        </div>
    </div>
</div>
</div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>
