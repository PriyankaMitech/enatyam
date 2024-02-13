<?php echo view('AdminSideBar'); ?>
    <?php 
// echo "<pre>";print_r($profile_data);exit();
        if(!empty($profile_data)){ 
            
            $session = \Config\Services::session();
            $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
    
            // Get the 'id' from the session
            $D_id = $profile_data->D_id;

            $wherecon = array('carrier_id ' => $D_id);

            
            // Rest of your code
            $register_data = $adminModel->getsinglerow('register',$wherecon);
       
            $r_id = '';
            if(!empty($register_data)){

            $r_id = $register_data->id;
            }
       
            $wherecon1 = array('register_faculty_id' => $r_id);

            $video_data = $adminModel->getalldata('uplode_video_to_student',$wherecon1);
// echo "<pre>";print_r($video_data);exit();


            // if(!empty($profile_data)){
                       
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
                          
<!-- 
                            <h3 class="profile-username text-center"><?=$profile_data->name;  ?></h3>

                            <p class="text-muted text-center"><?=$profile_data->course_info;  ?> - <?=$profile_data->sub_course_info;  ?></p> -->

                            <h3 class="profile-username text-center"><?=$profile_data->name;  ?></h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Mobile No. :</b> <a class="float-right"><?=$profile_data->phone;  ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email Id :</b> <a class="float-right"><?=$profile_data->email;  ?></a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>

                <div class="col-md-9 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Faculty Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                            <?=$profile_data->education;  ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted"> <?=$profile_data->Country;  ?>, <?=$profile_data->State;  ?>, <?=$profile_data->District;  ?></p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger"><?=$profile_data->course_info;  ?> - <?=$profile_data->sub_course_info;  ?></span>
  
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Experience</strong>

                            <p class="text-muted"> <?=$profile_data->exprience;  ?> Yers</p>


          

                          
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9 offset-md-3">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                            <!-- <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab">Payment</a></li> -->
                                <li class="nav-item"><a class="nav-link active" href="#attendance" data-toggle="tab">Attendance</a></li>
                                <li class="nav-item"><a class="nav-link" href="#schedule" data-toggle="tab">Schedule</a></li>
                                <li class="nav-item"><a class="nav-link" href="#videos" data-toggle="tab">Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#images" data-toggle="tab">Images</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="videos">
                                    <section class="content">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <?php if(!empty($video_data)){ ?>
                                                <!-- <?php// echo'<pre>';print_r($video_data);die; ?> -->
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

                                                    <h3 class="timeline-header"><a href="#"><?=$profile_data->name;  ?></a> shared a video</h3>

                                            
                                                        
                                                            
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

                                                        <h3 class="timeline-header"><a href="#"><?=$profile_data->name;  ?></a> shared a Image</h3>

                                                     
                                                       
                                          
                                                
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

                                <!-- <div class="active tab-pane" id="attendance"> -->
                                <div class="active tab-pane" id="attendance">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <?php if (!empty($attendanceRecord)) : ?>
                                                                <h3 class="card-title">Attendance Table</h3>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body table-responsive p-0">
                                                            <?php if (!empty($attendanceRecord)) : ?>
                                                                <table class="table table-hover text-nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Faculty Name</th>
                                                                            <th>Student Name</th>
                                                                            <th>Session count</th>
                                                                            <th>Conducted Sessions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            // Group attendance records by faculty ID and student ID
                                                                            $groupedRecords = [];
                                                                            foreach ($attendanceRecord as $record) {
                                                                                $groupedRecords[$record->faculty_id][$record->student_registerid][] = $record;
                                                                            }
                                                                        ?>
                                                                        <?php foreach ($groupedRecords as $facultyId => $students) : ?>
                                                                            <?php foreach ($students as $studentId => $records) : ?>
                                                                                <?php 
                                                                                    // Calculate the count of conducted sessions for this student
                                                                                    $conductedSessions = array_reduce($records, function ($carry, $record) {
                                                                                        return $carry + ($record->Attendance_status === 'p' ? 1 : 0);
                                                                                    }, 0);
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?= $studentId ?></td>
                                                                                    <td><?= $records[0]->faculty_name ?></td>
                                                                                    <td><?= $records[0]->student_name ?></td>
                                                                                    <td><?= $records[0]->no_of_session ?></td>
                                                                                    <td><?= $conductedSessions ?></td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php else : ?>
                                                                Data is not available.
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                    </section>
                                </div>

   
    <!-- Schedule Tab -->
                                <div class="tab-pane" id="schedule">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <?php if (!empty($scheduleRecord)) : ?>
                                                                <h3 class="card-title">Schedule Table</h3>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body table-responsive p-0">
                                                            <?php if (!empty($scheduleRecord)) : ?>
                                                                <table class="table table-hover text-nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Faculty Name</th>
                                                                            <th>Days</th>
                                                                            <th>Start Date</th>
                                                                            <th>End Date</th>
                                                                            <th>Start Time</th>
                                                                            <th>End Time</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($scheduleRecord as $slot) : ?>
                                                                            <tr>
                                                                                <td><?= $slot->id ?></td>
                                                                                <td><?= $slot->faculty_name ?></td>
                                                                                <td><?= $slot->days ?></td>
                                                                                <td><?= $slot->start_date ?></td>
                                                                                <td><?= $slot->end_date ?></td>
                                                                                <td><?= $slot->start_time ?></td>
                                                                                <td><?= $slot->end_time ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php else : ?>
                                                                Schedule data is not available.
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                    </section>
                                </div>
                           


<!-- </div> -->
 

                             
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                        
                    </div>
                    <!-- /.card -->

                    <!-- <div class="col-md-12">
                    <div class="card">
                    <div class="card-body">
                    <div class="row">
                                <?php
                                $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

                                foreach ($days as $day) :
                                ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title"><?= $day ?></h3>
                                            </div>
                                            <div class="card-body row">
                                                <?php
                                                if (is_array($faculty_slots)) {
                                                    $filteredSlots = array_filter($faculty_slots, function ($slot) use ($day) {
                                                        return $slot->Day === $day; 
                                                    });

                                                    usort($filteredSlots, function ($a, $b) {
                                                        return strtotime($a->start_time) - strtotime($b->start_time); 
                                                    });

                                                    foreach ($filteredSlots as $slot) :
                                                        $startTime = date('H:i', strtotime($slot->start_time));
                                                        $endTime = date('H:i', strtotime($slot->end_time)); 
                                                        $buttonStyle = ($slot->student_register_id > 0) ? 'btn-secondary' : 'btn-primary';
                                                        $buttonDisabled = ($slot->student_register_id > 0) ? 'disabled' : '';
                                                ?>
                                                        <button type="button" class="btn btn-sm mr-1 <?= $buttonStyle ?>" style="margin-top: 10px;" <?= $buttonDisabled ?> data-toggle="tooltip" title="This Time Is Booked"><?= $startTime ?> To <?= $endTime ?></button>
                                                <?php
                                                    endforeach;
                                                } else {
                                                    echo 'No slots available for ' . $day;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                    </div>
                    </div>
                </div> -->
                </div>
                
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php }  ?>

<!-- /.content-wrapper -->

<?php echo view('AdminSideBar/AdminFooter.php'); ?>