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
<?php
function formatDateTime($dateTimeString)
{
    $dateTime = new DateTime($dateTimeString);
    return $dateTime->format('j M Y');
}
?>


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
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#StudentImages" data-toggle="tab"> My Images</a></li>
                                <li class="nav-item"><a class="nav-link" href="#FacultyImages" data-toggle="tab"> Faculty Images</a></li>
                                <li class="nav-item"><a class="nav-link" href="#MyPDFs" data-toggle="tab"> My PDFs</a></li>
                                <li class="nav-item"><a class="nav-link" href="#FacultyPDFs" data-toggle="tab"> Faculty PDFs</a></li>
                            </ul>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class=" active tab-pane" id="StudentImages">
                                    <?php if (!empty($stdvideos)) { ?>

                                        <div class="row">
                                            <?php foreach ($stdvideos as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->name, PATHINFO_EXTENSION);
                                                // echo $extension;

                                                //    List of allowed video file extensions 
                                                $allowedVideoExtensions = ['jpg', 'png', 'jpeg'];

                                                // Check if the file extension is in the allowed list
                                                // Check if the file extension is in the allowed list
                                                if (in_array(strtolower($extension), $allowedVideoExtensions)) {

                                                    $imagePath = '/public/uploads/images/studentUploadedImages/' . $faculty->name;
                                                    $fullImagePath = base_url($imagePath);

                                                    // Generate a random background color based on the student's name
                                                    $randomColor = '#' . substr(md5($faculty->student_name), 0, 4); ?>

                                                    <div class="col-md-3 mt-3">
                                                        <div class="position-relative videoofs">

                                                            <!-- Check if the image file exists -->
                                                            <?php if (file_exists(FCPATH . $imagePath)) :  ?>
                                                                <!-- <div class="col-md-4"> -->
                                                                <div class="card">
                                                                    <!-- Image exists, display it -->
                                                                    <div class="ribbon-wrapper ribbon-lg">
                                                                        <div class="ribbon" style="background-color: <?= $randomColor ?>; text-lg">
                                                                            <p class="card-text" style="color:#fff; background-color: <?= $randomColor ?>">
                                                                                <?= $faculty->student_name ?> </p>
                                                                        </div>
                                                                    </div>
                                                                    <?php echo '<img src="' . $fullImagePath . '" alt="Student Image" width="100%" height="200px">'; ?>

                                                                    <div class="p">
                                                                        <p class="card-text" style=" padding: 6%; color:#fff; background-color: <?= $randomColor ?>">
                                                                            <?php if ($faculty) : ?>
                                                                                <strong> Image Date:</strong>
                                                                                <?= formatDateTime($faculty->DateTime); ?>
                                                                                <br>
                                                                            <?php endif; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- </div> -->
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>

                                        </div>
                                    <?php } ?>
                                </div>




                                <div class="tab-pane" id="FacultyImages">
                                    <?php if (!empty($videos)) { ?>
                                        <?php //echo '<pre>';
                                        //  print_r($videos);
                                        // die; 
                                        ?>

                                        <div class="row">
                                            <?php foreach ($videos as $faculty) { ?>
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

                                                                <!-- <div class="p">
                                                                    <p class="card-text">Date &nbsp;&&nbsp; Time : &nbsp;<?= $faculty->DateTime ?> </p>
                                                                </div> -->
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        <?php if ($faculty) : ?>
                                                                            <strong> Image Date:</strong>
                                                                            <?= formatDateTime($faculty->DateTime); ?>
                                                                        <?php endif; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php } ?>

                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="tab-pane" id="MyPDFs">
                                    <?php if (!empty($stdvideos)) { ?>
                                        
                                        <div class="row">
                                            <?php foreach ($stdvideos as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->name, PATHINFO_EXTENSION);
                                                 
                                                if ($extension == 'pdf') :
                                                    $pdfPath = '/public/uploads/PDFs/studentUploadedPDFs/' . $faculty->name;
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


                                <div class="tab-pane" id="FacultyPDFs">
                                    <?php if (!empty($videos)) { ?>
                                        <div class="row">
                                            <?php foreach ($videos as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                if ($extension == 'pdf') :
                                                    $pdfPath = '/public/uploads/PDFs/facultyUploadedPDFs/' . $faculty->video_name;
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
<?php echo view('StudentSidebar/StudentFooter.php'); ?>