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
                        <li class="breadcrumb-item active">Videos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content" id="result-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"> Faculty Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Student Videos</a></li>

                                <!-- <li class="nav-item"><a class="nav-link" href="#FacultyImages" data-toggle="tab"> Images By Faculty</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="#StudentImages" data-toggle="tab"> Images By Student</a></li> -->

                            </ul>
                            <div class="text-right mt-0">
                                <a href="<?php echo base_url() ?>uploaded_video" class="btn btn-primary">Back</a>
                            </div>


                        </div>

                        <div class="card-body">

                            <div class="tab-content">
                                <!-- <div class="active tab-pane" id="activity">
                                    <?php if (!empty($FacultyVideoData)) {
                                    ?>
                                        <div class="row">
                                            <?php foreach ($FacultyVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                ?>
                                                <?php if ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov' || $extension == 'mkv' || $extension == 'wmv') : ?>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                 Adjust the video size 
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

                </div> -->

                                <!-- <div class="card-body"> -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="active tab-pane" id="activity">
                                            <form action="<?php echo base_url(); ?>searchFacultyVideos" method="post" id="searchForm">

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="startDate">Start Date:</label>
                                                            <?php $currentUrl = current_url();  ?>
                                                            <input type="date" class="form-control" id="startDate" placeholder="Enter start date:" name="startDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('startDate'))) {
                                                                                                                                                                                echo session()->getFlashdata('startDate');
                                                                                                                                                                            } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="endDate">End Date:</label>
                                                            <input type="date" class="form-control" id="endDate" placeholder="Enter end date:" name="endDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('endDate'))) {
                                                                                                                                                                            echo session()->getFlashdata('endDate');
                                                                                                                                                                        } ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dropdown">Select Faculty:</label>
                                                            <select id="dropdown" name="facultyName" class="form-control custom-select">
                                                                <option value="">Select</option>
                                                                <?php foreach ($facultyList as $item) : ?>
                                                                    <option value="<?= $item->id; ?>" <?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('facultyName')) && session()->getFlashdata('facultyName') === $item->id) echo 'selected'; ?>>
                                                                        <?= $item->full_name; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dropdown">Select Student:</label>
                                                            <select id="dropdown" name="studentName" class="form-control custom-select">
                                                                <option value="">Select</option>
                                                                <?php foreach ($studentList as $item) : ?>
                                                                    <option value="<?php echo  $item->student_id; ?>" <?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('studentName')) && session()->getFlashdata('studentName') === $item->student_id) echo 'selected'; ?>>
                                                                        <?php echo $item->student_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group text-right">
                                                            <input type="hidden" name="table" value="uplode_video_to_student">
                                                            <button type="button" value="searchfacvideo" id="searchfacvideo" class="btn btn-primary">Search</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <hr>
                                            <div class="row mt-4" id="facultyVideosContainer">
                                                <?php if (empty($searchdata)) { ?>

                                                    <?php if (!empty($FacultyVideoData)) { ?>
                                                        <?php foreach ($FacultyVideoData as $data) {
                                                            // List of allowed video file extensions
                                                            $allowedVideoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];

                                                            $extension = pathinfo($data->video_name, PATHINFO_EXTENSION);
                                                            // echo $extension;
                                                            // Check if the file extension is in the allowed list
                                                            if (in_array(strtolower($extension), $allowedVideoExtensions)) {

                                                                // Generate a random background color based on the student's name
                                                                $randomColor1 = '#' . substr(md5($data->student_name), 0, 4); ?>
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class="position-relative videoofs">
                                                                        <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                                                                        <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                            <!-- Adjust the video size -->
                                                                            <source class="img-fluid" src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $data->video_name) ?>" type="video/mp4">
                                                                        </video>

                                                                        <?php
                                                                        // Generate a random background color based on the student's name
                                                                        $randomColor = '#' . substr(md5($data->student_name), 0, 6); ?>
                                                                        <div class="ribbon-wrapper ribbon-lg">
                                                                            <!-- <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg"> -->
                                                                            <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                                                <p class="card-text" style="color:#fff; background-color: <?= $randomColor ?>"><?= $data->student_name ?> </p>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                        $time = new DateTime($data->DateTime);
                                                                        $date = date("j M Y", strtotime($data->DateTime));
                                                                        $time = $time->format('H:i');
                                                                        ?>
                                                                        <div class="p">
                                                                            <p class="card-text" style="padding: 6%; color:#fff; background-color: <?= $randomColor ?>">Date &nbsp; : &nbsp; <?= $date; ?>
                                                                                <br>
                                                                                Faculty Name &nbsp; : &nbsp; <?= $data->faculty_name; ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php }
                                                    ?>

                                                <?php } else { ?>

                                                    <?php foreach ($searchdata as $data) {
                                                        // List of allowed video file extensions
                                                        $allowedVideoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];

                                                        $extension = pathinfo($data->video_name, PATHINFO_EXTENSION);
                                                        // echo $extension;
                                                        // Check if the file extension is in the allowed list
                                                        if (in_array(strtolower($extension), $allowedVideoExtensions)) {

                                                            // Generate a random background color based on the student's name
                                                            $randomColor1 = '#' . substr(md5($data->student_name), 0, 4); ?>
                                                            <div class="col-sm-3 mt-3">
                                                                <div class="position-relative videoofs">
                                                                    <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                                                                    <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                        <!-- Adjust the video size -->
                                                                        <source class="img-fluid" src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $data->video_name) ?>" type="video/mp4">
                                                                    </video>

                                                                    <?php
                                                                    // Generate a random background color based on the student's name
                                                                    $randomColor = '#' . substr(md5($data->student_name), 0, 6); ?>
                                                                    <div class="ribbon-wrapper ribbon-lg">
                                                                        <!-- <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg"> -->
                                                                        <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                                            <p class="card-text" style="color:#fff; background-color: <?= $randomColor ?>"><?= $data->student_name ?> </p>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    $time = new DateTime($data->DateTime);
                                                                    $date = date("j M Y", strtotime($data->DateTime));
                                                                    $time = $time->format('H:i');
                                                                    ?>
                                                                    <div class="p">
                                                                        <p class="card-text" style="padding: 6%; color:#fff; background-color: <?= $randomColor ?>">Date &nbsp; : &nbsp; <?= $date; ?>
                                                                            <br>
                                                                            Faculty Name &nbsp; : &nbsp; <?= $data->faculty_name; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    <?php }
                                                    ?>


                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="timeline">
                                            <form action="<?php echo base_url(); ?>searchStudentVideos" method="post" id="studentVideoForm">

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="startDate">Start Date:</label>
                                                            <?php $currentUrl = current_url();  ?>
                                                            <input type="date" class="form-control" id="studentVideoStartDate" placeholder="Enter start date:" name="startDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('startDate'))) {  echo session()->getFlashdata('startDate');  } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="endDate">End Date:</label>
                                                            <input type="date" class="form-control" id="studentVideoEndDate" placeholder="Enter end date:" name="endDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('endDate'))) { echo session()->getFlashdata('startDate');} ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dropdown">Select Faculty:</label>
                                                            <select id="facultyNamesDropdown" name="facultyName" class="form-control custom-select">
                                                                <option value="">Select</option>
                                                                <?php foreach ($facultyList as $item) : ?>
                                                                    <option value="<?= $item->id; ?>" <?php if (strpos($currentUrl, 'searchStudentVideos') !== false && !empty(session()->getFlashdata('facultyName')) && session()->getFlashdata('facultyName') === $item->id) echo 'selected'; ?>>
                                                                        <?= $item->full_name; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dropdown">Select Student:</label>
                                                            <select id="studentNamesDropdown" name="studentName" class="form-control custom-select">
                                                                <option value="">Select</option>
                                                                <?php foreach ($studentList as $item) : ?>
                                                                    <option value="<?php echo  $item->student_id; ?>" <?php if (strpos($currentUrl, 'searchStudentVideos') !== false && !empty(session()->getFlashdata('studentName')) && session()->getFlashdata('studentName') === $item->student_id) echo 'selected'; ?>>
                                                                        <?php echo $item->student_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group text-right">
                                                            <input type="hidden" name="table" value="uplode_study_video_from_student">
                                                            <button type="button" id="searchstudvideo" class="btn btn-primary">Search</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <hr>



                                            <div class="row mt-4" id="studentVideosContainer">
                                                <!-- Display faculty videos here -->
                                                <?php if (empty($searchdata)) { ?>

                                                    <?php if (!empty($studentVideoData)) { ?>
                                                        <?php foreach ($studentVideoData as $data) {
                                                            // print_r($data);
                                                            // die;
                                                            // List of allowed video file extensions
                                                            $allowedVideoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];

                                                            $extension = pathinfo($data->name, PATHINFO_EXTENSION);
                                                            // echo $extension;
                                                            // Check if the file extension is in the allowed list
                                                            if (in_array(strtolower($extension), $allowedVideoExtensions)) {

                                                                // Generate a random background color based on the student's name
                                                                $randomColor1 = '#' . substr(md5($data->Student_name), 0, 4); ?>
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class="position-relative videoofs">
                                                                        <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                                                                        <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                            <!-- Adjust the video size -->
                                                                            <source class="img-fluid" src="<?= base_url('public/uploads/videos/' . $data->name) ?>" type="video/mp4">
                                                                        </video>

                                                                        <?php
                                                                        // Generate a random background color based on the student's name
                                                                        $randomColor = '#' . substr(md5($data->Student_name), 0, 6); ?>
                                                                        <div class="ribbon-wrapper ribbon-lg">
                                                                            <!-- <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg"> -->
                                                                            <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                                                <p class="card-text" style="color:#fff; background-color: <?= $randomColor ?>"><?= $data->Student_name ?> </p>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                        $time = new DateTime($data->DateTime);
                                                                        $date = date("j M Y", strtotime($data->DateTime));
                                                                        $time = $time->format('H:i');
                                                                        ?>
                                                                        <div class="p">
                                                                            <p class="card-text" style="padding: 6%; color:#fff; background-color: <?= $randomColor ?>">Date &nbsp; : &nbsp; <?= $date; ?>
                                                                                <br>
                                                                                Faculty Name &nbsp; : &nbsp; <?= $data->faculty_name; ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php }
                                                    ?>

                                                <?php } else { ?>

                                                    <?php foreach ($searchdata as $data) {
                                                        // List of allowed video file extensions
                                                        $allowedVideoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];

                                                        $extension = pathinfo($data->video_name, PATHINFO_EXTENSION);
                                                        // echo $extension;
                                                        // Check if the file extension is in the allowed list
                                                        if (in_array(strtolower($extension), $allowedVideoExtensions)) {

                                                            // Generate a random background color based on the student's name
                                                            $randomColor1 = '#' . substr(md5($data->student_name), 0, 4); ?>
                                                            <div class="col-sm-3 mt-3">
                                                                <div class="position-relative videoofs">
                                                                    <!-- <img src="<?= base_url(); ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid"> -->
                                                                    <video width="100%" height="200px" controls poster="<?= base_url(); ?>public/images/play.jpg">
                                                                        <!-- Adjust the video size -->
                                                                        <source class="img-fluid" src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $data->video_name) ?>" type="video/mp4">
                                                                    </video>

                                                                    <?php
                                                                    // Generate a random background color based on the student's name
                                                                    $randomColor = '#' . substr(md5($data->student_name), 0, 6); ?>
                                                                    <div class="ribbon-wrapper ribbon-lg">
                                                                        <!-- <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg"> -->
                                                                        <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                                            <p class="card-text" style="color:#fff; background-color: <?= $randomColor ?>"><?= $data->student_name ?> </p>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    $time = new DateTime($data->DateTime);
                                                                    $date = date("j M Y", strtotime($data->DateTime));
                                                                    $time = $time->format('H:i');
                                                                    ?>
                                                                    <div class="p">
                                                                        <p class="card-text" style="padding: 6%; color:#fff; background-color: <?= $randomColor ?>">Date &nbsp; : &nbsp; <?= $date; ?>
                                                                            <br>
                                                                            Faculty Name &nbsp; : &nbsp; <?= $data->faculty_name; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    <?php }
                                                    ?>


                                                <?php } ?>
                                            </div>





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
                                                                        <?php echo '<img src="' . $fullImagePath . '" alt="Faculty Image" width="100%" height="200px">'; ?>

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
                </div> <!--container-fluid -->
    </section>




</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>