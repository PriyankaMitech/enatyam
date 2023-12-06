<?php echo view('AdminSideBar.php'); ?>
<style>
    .video-card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .video-card .card-body {
        background-color: #f8f9fa;
        padding: 15px;
        text-align: center;
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
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"> Uploaded Faculty Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Uploaded Student Videos</a></li>

                                <li class="nav-item"><a class="nav-link" href="#FacultyImages" data-toggle="tab"> Images By Faculty</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#StudentImages" data-toggle="tab"> Images By Student</a></li> -->
                            </ul>
                        </div><!-- /.card-header -->


                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <?php if (!empty($FacultyVideoData)) {
                                        // echo "<pre>";
                                        // print_r($FacultyVideoData);
                                        // exit();
                                    ?>
                                        <div class="row">
                                            <?php foreach ($FacultyVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                // echo $extension;
                                                // print_r($faculty);
                                                // die;
                                                ?>
                                                <?php if ($extension == 'mp4') : ?>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                <!-- Adjust the video size -->
                                                                <source class="img-fluid" src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $faculty->video_name) ?>" type="video/mp4">
                                                            </video>
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                    <?php if ($faculty) : ?>


                                                                <div class="p">
                                                                    <p class="card-text">Faculty Name: <?= $faculty->faculty_name; ?></p>
                                                                    <p class="card-text">Date &nbsp;&&nbsp; Time : &nbsp;<?= $faculty->DateTime ?> </p>
                                                                    <p class="card-text">student name: <?= $faculty->student_name ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                            </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php } ?>

                                        </div>
                                    <?php } ?>

                                </div>


                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">

                                    <?php if (!empty($studentVideoData)) { ?>

                                        <div class="row">
                                            <?php foreach ($studentVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->name, PATHINFO_EXTENSION);
                                                // echo $extension;
                                                ?>
                                                <?php if ($extension == 'mp4') : ?>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                <!-- Adjust the video size -->
                                                                <source class="img-fluid" src="<?= base_url('public/uploads/videos/' . $faculty->name) ?>" type="video/mp4">
                                                            </video>
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                    <?php if ($faculty) : ?>
                                                                        <strong>Upload Video Date:</strong> <?= $faculty->DateTime; ?>
                                                                    <?php endif; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php } ?>

                                        </div>
                                    <?php } ?>

                                </div>

                                <div class="tab-pane" id="FacultyImages">
                                    <?php if (!empty($FacultyVideoData)) { ?>

                                        <div class="row">
                                            <?php foreach ($FacultyVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                // echo $extension;
                                                ?>
                                                <?php if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') : ?>

                                                    <?php $imagePath = '/public/uploads/images/facultyUploadedImages/' . $faculty->video_name;
                                                    $fullImagePath = base_url($imagePath);
                                                    // Check if the image file exists
                                                    if (file_exists(FCPATH . $imagePath)) : ?>
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <!-- Image exists, display it -->
                                                                <?php echo '<img src="' . $fullImagePath . '" alt="Faculty Image">'; ?>

                                                                <div class="p">
                                                                    <p class="card-text">Date &nbsp;&&nbsp; Time : &nbsp;<?= $faculty->DateTime ?> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php } ?>

                                        </div>
                                    <?php } ?>
                                </div>





                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>




</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>