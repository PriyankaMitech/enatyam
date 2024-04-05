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
                    <h1>PDFs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">PDFs</li>
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
                                <li class="nav-item"><a class="nav-link active" href="#FacultyPDFs" data-toggle="tab"> Faculty PDFs</a></li>
                                <li class="nav-item"><a class="nav-link" href="#StudentPDFs" data-toggle="tab"> Student PDFs</a></li>
                            </ul>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">

                                <div class="tab-pane" id="FacultyPDFs">
                                    <?php if (!empty($FacultyVideoData)) { ?>
                                     
                                        <div class="row">
                                            <?php foreach ($FacultyVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->video_name, PATHINFO_EXTENSION);
                                                if ($extension === 'pdf') :
                                                    $pdfPath = '/public/uploads/PDFs/facultyUploadedPDFs/' . $faculty->video_name;
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

                                <div class="tab-pane" id="StudentPDFs">
                                    <?php if (!empty($studentVideoData)) { ?>
                                       
                                        <div class="row">
                                            <?php foreach ($studentVideoData as $faculty) { ?>
                                                <?php
                                                $extension = pathinfo($faculty->name, PATHINFO_EXTENSION);
                                              
                                                
                                                if ($extension === 'pdf') :
                                                    $pdfPath = 'public/uploads/PDFs/studentUploadedPDFs/' . $faculty->name;
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
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
    </section>




</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>