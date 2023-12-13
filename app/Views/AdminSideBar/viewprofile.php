<?php echo view('AdminSideBar'); ?>
    <?php 
// echo "<pre>";print_r($profile_data);exit();
        if(!empty($profile_data)){ 
            
            $session = \Config\Services::session();
            $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
    
            // Get the 'id' from the session
            $carrier_id = $profile_data->carrier_id;

            $wherecon = array('D_id ' => $carrier_id);

            
            // Rest of your code
            $all_datac = $adminModel->getsinglerow('carrier',$wherecon);


            // echo "<pre>";print_r($all_datac);exit();

            if(!empty($all_datac)){
                       
    ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?=base_url(); ?>public/images/user.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?=$all_datac->name;  ?></h3>

                            <p class="text-muted text-center"><?=$all_datac->course;  ?> - <?=$all_datac->sub_course;  ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Resume</b> <a href="<?=base_url(); ?>public/uploads/cv/<?=$all_datac->cv_filename;  ?>" target="_blank" class="float-right"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Education Certificates</b> <a href="<?=base_url(); ?>public/uploads/educationCertificates/<?=$all_datac->education_certificates_filename;  ?>" target="_blank" class="float-right"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Course Related Certificates</b> <a href="<?=base_url(); ?>public/uploads/courseCertificates/<?=$all_datac->course_certificates_filename;  ?>" target="_blank" class="float-right"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Approve</b></a>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                            <?=$all_datac->education;  ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted"> <?=$all_datac->Country;  ?>, <?=$all_datac->State;  ?>, <?=$all_datac->District;  ?></p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger"><?=$all_datac->course;  ?> - <?=$all_datac->sub_course;  ?></span>
  
                            </p>

          

                          
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#videos" data-toggle="tab">Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#images" data-toggle="tab">Images</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="videos">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <!-- The time line -->
                                                <div class="timeline">
                                            
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-green"><span class="bg-green"><?= (new DateTime($all_datac->Booking_Date_Time))->format('j M. Y') ?></span></span>
                                                </div>
                                       
                                                <div>
                                                    <i class="fas fa-video bg-maroon"></i>

                                                    <div class="timeline-item">
                                                    <span class="time"><?php
                                                            $bookingDateTime = new DateTime($all_datac->Booking_Date_Time);
                                                            $currentDateTime = new DateTime();
                                                            $interval = $currentDateTime->diff($bookingDateTime);

                                                            $daysAgo = $interval->days;
                                                            $timeAgo = $daysAgo > 0 ? $daysAgo . ' days ago' : 'today';

                                                            echo '<span class="time"><i class="fas fa-clock"></i> ' . $timeAgo . '</span>';
                                                            ?>
                                                        </span>

                                                    <h3 class="timeline-header"><a href="#"><?=$all_datac->name;  ?></a> shared a video</h3>

                                                    <div class="timeline-body">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                             
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="fas fa-clock bg-gray"></i>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="images">
                                    <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <!-- The time line -->
                                                    <div class="timeline">
                                                
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-green"><span class="bg-green"><?= (new DateTime($all_datac->Booking_Date_Time))->format('j M. Y') ?></span></span>
                                                    </div>
                                        
                                                    <div>
                                                    <i class="fa fa-camera bg-purple"></i>
                                                        <div class="timeline-item">
                                                        <span class="time"><?php
                                                            $bookingDateTime = new DateTime($all_datac->Booking_Date_Time);
                                                            $currentDateTime = new DateTime();
                                                            $interval = $currentDateTime->diff($bookingDateTime);

                                                            $daysAgo = $interval->days;
                                                            $timeAgo = $daysAgo > 0 ? $daysAgo . ' days ago' : 'today';

                                                            echo '<span class="time"><i class="fas fa-clock"></i> ' . $timeAgo . '</span>';
                                                            ?>
                                                        </span>

                                                        <h3 class="timeline-header"><a href="#"><?=$all_datac->name;  ?></a> shared a Image</h3>

                                                        <div class="timeline-body">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <div>
                                                        <i class="fas fa-clock bg-gray"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                                </div>
                                            </div>
                                    </section>
                                </div>
                                <!-- /.tab-pane -->

                             
                                <!-- /.tab-pane -->
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
    <!-- /.content -->
</div>
<?php } } ?>

<!-- /.content-wrapper -->

<?php echo view('AdminSideBar/AdminFooter.php'); ?>