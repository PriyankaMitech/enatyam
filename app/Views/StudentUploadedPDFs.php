<?php include('FacultySidebar2.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students PDFs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>FacultyDashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Students PDFs</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <?php
    function formatDateTime($dateTimeString)
    {
        $dateTime = new DateTime($dateTimeString);
        return $dateTime->format('j M Y');
    }
    ?>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Students PDFs</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="post" id="studentVideoForm">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="startDate">Start Date:</label>
                                        <?php $currentUrl = current_url();  ?>
                                        <input type="date" class="form-control" id="studentVideoStartDate" placeholder="Enter start date:" name="startDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('startDate'))) {
                                                                                                                                                                        echo session()->getFlashdata('startDate');
                                                                                                                                                                    } ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="endDate">End Date:</label>
                                        <input type="date" class="form-control" id="studentVideoEndDate" placeholder="Enter end date:" name="endDate" value="<?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('endDate'))) {
                                                                                                                                                                    echo session()->getFlashdata('startDate');
                                                                                                                                                                } ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dropdown">Select Student:</label>
                                    <select id="dropdown" name="studentName" class="form-control custom-select">
                                        <option value="">Select</option>
                                        <?php foreach ($studentList as $item) : ?>
                                            <option value="<?php echo  $item->register_id; ?>" <?php if (strpos($currentUrl, 'searchFacultyVideos') !== false && !empty(session()->getFlashdata('studentName')) && session()->getFlashdata('studentName') === $item->student_id) echo 'selected'; ?>>
                                                <?php echo $item->student_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <input type="hidden" name="table" value="uplode_study_video_from_student">
                                        <input type="hidden" name="facultyName" value="<?= $_SESSION['id'] ?>">

                                        <button type="button" id="searchstudvideo" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        


                        <div class="row mt-4" id="studentVideosContainer">
                                    <?php if (!empty($videos)) { ?>
                                        <div class="row">
                                            <?php foreach ($videos as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                if ($extension == 'pdf') :
                                                    $pdfPath = '/public/uploads/PDFs/studentUploadedPDFs/' . $faculty->video_name;
                                                    // E:\xampp\htdocs\enatyam\public\uploads\PDFs\studentUploadedPDFs
                                                    $fullPdfPath = base_url($pdfPath);
                                                   
                                                    // Check if the PDF file exists
                                                    if (file_exists(FCPATH . $pdfPath)) : ?>
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        <?php if ($faculty) : ?>
                                                                            <strong>PDF Date:</strong> <?= formatDateTime($faculty->DateTime); ?>
                                                                        <?php endif; ?>
                                                                    </p>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <!-- Display the PDF using an iframe -->
                                                                    <iframe src="<?= $fullPdfPath ?>" width="100%" height="300px" frameborder="0"></iframe>
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
                </div>
            </div>
        </div> 

    </div>

    </section>

</div>
</div>
<?php include('FacultysideBar/FacultyFooter.php'); ?>