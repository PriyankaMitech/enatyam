<?php echo view('StudentSidebar/Studentsidebar'); ?>
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
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"> Uploaded Images</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Uploaded Videos</a></li>

                                </ul>
                            </div><!-- /.card-header -->


                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <?php if (!empty($videos)) { ?>

                                            <div class="row">
                                                <?php foreach ($videos as $faculty) { ?>

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
                                                <?php } ?>

                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">

                                        <?php if (!empty($videos)) { ?>

                                            <div class="row">
                                                <?php foreach ($videos as $faculty) { ?>
                                                    <?php
                                                    $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                    echo $extension;
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
    <?php echo view('FacultysideBar/FacultyFooter.php'); ?>