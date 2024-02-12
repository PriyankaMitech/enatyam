<?php echo view('AdminSideBar'); ?>
    <?php 
// echo "<pre>";print_r($profile_data);
        if(!empty($profile_data)){ 
            
            $session = \Config\Services::session();
            $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
    
            // Get the 'id' from the session
            // $register_id = $profile_data->register_id;

            // $wherecon = array('id ' => $register_id);

            
            // Rest of your code
            // $profile_datars = $adminModel->getsinglerow('register',$wherecon);


            $student_id = '';
          

            $student_id = $profile_data->student_id ;
          
       

            $wherecon1 = array('student_id' => $student_id);


            $video_data = $adminModel->getalldata('uplode_video_to_student',$wherecon1);

            // echo "<pre>";print_r($video_data);exit();
                       
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
                                 <?php if(!empty($profile_data->profile_photo)){ ?>
                                    <img class="profile-user-img img-fluid img-circle" src="<?=base_url(); ?>public/uploads/profile_photo/<?=$profile_data->profile_photo;  ?>" alt="User profile picture">
                                <?php }else{ ?>
                                    <img class="profile-user-img img-fluid img-circle" src="<?=base_url(); ?>public/images/user.png" alt="User profile picture">

                                <?php } ?>                           
                            </div>

                            <h3 class="profile-username text-center"><?=$profile_data->student_name;  ?></h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Mobile No. :</b> <a class="float-right"><?=$profile_data->mobile_no;  ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email Id :</b> <a class="float-right"><?=$profile_data->email;  ?></a>
                                </li> 
                            </ul>
                        </div>
                    </div>    
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Student Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fa fa-envelope" aria-hidden="true"></i> Course - Subcourse</strong>
                            <p class="text-muted"><?=$profile_data->courses_name;  ?> - <?=$profile_data->sub_courses_name;  ?></p>
                                <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted"><?=$profile_data->country;  ?></p> 
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#payment" data-toggle="tab">Payment</a></li>
                                <li class="nav-item"><a class="nav-link" href="#attendance" data-toggle="tab">Attendance</a></li>
                                <li class="nav-item"><a class="nav-link" href="#videos" data-toggle="tab">Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Schedule</a></li>
                                
                            </ul>

    

                        </div><!-- /.card-header -->
                        <div class="card-body">
                        <!-- <div class="card-body"> -->
                            <div class="tab-content">
                                <div class="tab-pane" id="videos">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <?php if(!empty($video_data)){ ?>
                                                <!-- <?php //echo'<pre>';print_r($video_data);die; ?> -->
                                                <?php foreach($video_data as $data){ ?>

                                                    <?php
                                                $extension = pathinfo($data->video_name, PATHINFO_EXTENSION);
                                                // echo $extension;
                                                // print_r($faculty);
                                                // die;
                                                ?>
                                                <?php if ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov' || $extension == 'mkv' || $extension == 'wmv') { ?>
                                                <!-- The time line -->
                                                <div class="timeline">
                                            
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-green"><span class="bg-green"><?= (new DateTime($data->DateTime))->format('j M. Y') ?></span></span>
                                                </div>
                                       
                                                <div>
                                                    <i class="fas fa-video bg-maroon"></i>

                                                    <div class="timeline-item">
                                                    <span class="time"><?php
                                                            $bookingDateTime = new DateTime($data->DateTime);
                                                            $currentDateTime = new DateTime();
                                                            $interval = $currentDateTime->diff($bookingDateTime);

                                                            $daysAgo = $interval->days;
                                                            $timeAgo = $daysAgo > 0 ? $daysAgo . ' days ago' : 'today';

                                                            echo '<span class="time"><i class="fas fa-clock"></i> ' . $timeAgo . '</span>';
                                                            ?>
                                                    </span>

                                                    <h3 class="timeline-header"><a href="#"><?=$profile_data->student_name;  ?></a> shared a video</h3>
                                                        <div class="timeline-body">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="<?=base_url();?>public/uploads/videos/<?=$data->video_name;  ?>" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="fas fa-clock bg-gray"></i>
                                                </div>
                                                </div>
                                                <?php }?>
                                                <?php } ?>
                                                <?php }else{ ?>
                                                    Data is not available.
                                                <?php } ?>
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
                                                <?php if(!empty($video_data)){ ?>
                                                <?php foreach($video_data as $data){ ?>

                                                    <?php
                                                $extension = pathinfo($data->video_name, PATHINFO_EXTENSION);
                                                // echo $extension;
                                                // print_r($faculty);
                                                // die;
                                                ?>
                                                <?php if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') { ?>
                                                    <!-- The time line -->
                                                    <div class="timeline">
                                                
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                    <span class="bg-green"><span class="bg-green"><?= (new DateTime($data->DateTime))->format('j M. Y') ?></span></span>
                                                </div>
                                                    <div>
                                                    <i class="fa fa-camera bg-purple"></i>
                                                        <div class="timeline-item">
                                                        <span class="time"><?php
                                                            $bookingDateTime = new DateTime($data->DateTime);
                                                            $currentDateTime = new DateTime();
                                                            $interval = $currentDateTime->diff($bookingDateTime);

                                                            $daysAgo = $interval->days;
                                                            $timeAgo = $daysAgo > 0 ? $daysAgo . ' days ago' : 'today';

                                                            echo '<span class="time"><i class="fas fa-clock"></i> ' . $timeAgo . '</span>';
                                                            ?>
                                                        </span>

                                                        <h3 class="timeline-header"><a href="#"><?=$profile_data->student_name;  ?></a> shared a Image</h3>

                                                     
                                                       
                                          
                                                
                                                            <div class="timeline-body">
                                                            <div class="embed-responsive embed-responsive-16by9">

                                                                <img class="embed-responsive-item" style="height:auto;" src="<?=base_url();?>public/uploads/images/<?=$data->video_name;  ?>">
                                                                </div>
                                                        </div>
                                                                                      
                                                     
                                                
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <div>
                                                        <i class="fas fa-clock bg-gray"></i>
                                                    </div>
                                                    </div>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php }else{ ?>
                                                    Data is not available.
                                                <?php } ?>
                                                </div>
                                                <!-- /.col -->
                                                </div>
                                            </div>
                                    </section>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="attendance">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                        <?php if(!empty($attendanceRecord)){ ?>
                                                            <h3 class="card-title">Attendance Table</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body table-responsive p-0">
                                                            <table class="table table-hover text-nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Session Start Date</th>
                                                                        <th>Attendance Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>            
                                                                    <?php foreach ($attendanceRecord as $index => $record): ?>
                                                                        <tr>
                                                                            <td><?= $index + 1 ?></td>
                                                                            <td><?= $record->date ?></td>
                                                                            <td><?= $record->Attendance_status === 'p' ? 'Present' : 'Absent' ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                
                                                                    <?php }else{ ?>
                                                                        Data is not available.
                                                                    <?php } ?>
                                                    `           </tbody>
                                                            </table>           
                                                        </div> 
                                                         <!-- /.card-body -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                    </section>
                                </div> 
                                <!-- /.tab-pane -->


                                <div class="active tab-pane" id="payment">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                        <?php if(!empty($paymentRecord)){ ?>
                                                            <h3 class="card-title">Payment Record </h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body table-responsive p-0">
                                                            <table class="table table-hover text-nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Student Name</th>
                                                                        <th>Merchant Id</th>
                                                                        <th> total Session</th>
                                                                        <th>Amount </th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>            
                                                                    <?php foreach ($paymentRecord as $index => $record): ?>
                                                                        <tr>
                                                                            <td><?= $index + 1 ?></td>
                                                                            <td><?= $record->full_name ?></td>
                                                                            <td><?= $record->merchant_trans_id  ?></td>
                                                                            <td><?= $record->no_of_session  ?></td>
                                                                            <td><?= $record->total_amount  ?></td>
                                                                            <td><?= $record->status === 'Y' ? 'Successful' :'Fail' ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                
                                                                    <?php }else{ ?>
                                                                        Data is not available.
                                                                    <?php } ?>
                                                    `           </tbody>
                                                            </table>           
                                                        </div> 
                                                         <!-- /.card-body -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                    </section>
                                </div> 
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                        <!-- </div>/.card-body -->
                        <!-- </div> -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php }  ?>

<!-- /.content-wrapper -->

<?php echo view('AdminSideBar/AdminFooter.php'); ?>