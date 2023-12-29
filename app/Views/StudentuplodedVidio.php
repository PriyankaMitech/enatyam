<?php include('FacultySidebar2.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students Videos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>FacultyDashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Students Videos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Students Videos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="post" id="studentVideoForm">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="startDate">Start Date:</label>
                                        <?php $currentUrl = current_url();  ?>
                                        <input type="date" class="form-control" id="studentVideoStartDate"
                                            placeholder="Enter start date:" name="startDate"
                                            value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('startDate'))) { echo session()->getFlashdata('startDate');                                                                                                                                } ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="endDate">End Date:</label>
                                        <input type="date" class="form-control" id="studentVideoEndDate"
                                            placeholder="Enter end date:" name="endDate"
                                            value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('endDate'))) { echo session()->getFlashdata('startDate'); } ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dropdown">Select Student:</label>
                                    <select id="dropdown" name="studentName" class="form-control custom-select">
                                        <option value="">Select</option>
                                        <?php foreach ($studentList as $item) : ?>
                                        <option value="<?php echo  $item->register_id; ?>"
                                            <?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('studentName')) && session()->getFlashdata('studentName') === $item->student_id) echo 'selected'; ?>>
                                            <?php echo $item->student_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <input type="hidden" name="table" value="uplode_study_video_from_student">
                                        <input type="hidden" name="facultyName" value="<?= $_SESSION['id']?>">
                                       
                                        <button type="button" id="searchstudvideo"
                                            class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                  <div class="row mt-4" id="studentVideosContainer">
                        <?php
                              if (!empty($results)) { ?>
                                            <?php foreach ($results as $data) {
                                  $allowedVideoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];
                                  $extension = pathinfo($data->name, PATHINFO_EXTENSION);
                                  if (in_array(strtolower($extension), $allowedVideoExtensions)) {
                                $randomColor1 = '#' . substr(md5($data->Student_name), 0, 4);
                          ?>
                          <div class="col-sm-3 mt-3">
                              <div class="position-relative videoofs card">
                                              <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                                  <video width="100%" height="200px" controls
                                          poster="<?= base_url(); ?>public/images/play.jpg">
                                     <source class="img-fluid" src="<?= base_url('public/uploads/StudentStudyvideos/' . $data->name) ?>" type="video/mp4">
                                   </video>
                          <?php
                                
                                  $randomColor = '#' . substr(md5($data->Student_name), 0, 6); ?>
                                 <div class="ribbon-wrapper ribbon-lg">
                                                  <!-- <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg"> -->
                                      <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                <p class="card-text"
                                                style="color:#fff; background-color: <?= $randomColor ?>">
                                                <?= $data->Student_name ?> </p>
                                        </div>
                                  </div>
                                              <?php
                                  $time = new DateTime($data->DateTime);
                                  $date = date("j M Y", strtotime($data->DateTime));
                                  $time = $time->format('H:i');
                                  ?>
                                    <div class="p">
                                        <p class="card-text"style="padding: 6%; color:#fff; background-color: <?= $randomColor ?>">Date &nbsp; : &nbsp; <?= $date; ?> </p>
                                  </div>
                              </div>
                            </div>
                                      <?php } ?>
                                      <?php } ?>
                                      <?php }
                          ?>
                    </div>
                  </div>
                  
                </div>
              
            </div>
          

        </div>
     
    </div>
 
    </section>
 
</div>
</div>
<?php include('FacultysideBar/FacultyFooter.php'); ?>