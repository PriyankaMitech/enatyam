<?php include('FacultySidebar2.php');?>
<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
        </li>
    </ul>
</nav>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-two-profile" role="tab"
                                        aria-controls="custom-tabs-two-profile" aria-selected="true">Upload Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-two-messages" role="tab"
                                        aria-controls="custom-tabs-two-messages" aria-selected="false">Messages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-profile-tab">
                                    <form action="<?= site_url('uploadVideo'); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="student_id"
                                            value="<?= $studentData['student_id']; ?>">
                                        <div class="form-group">
                                            <label for="videoFile">Upload Video:</label>
                                            <input type="file" name="videoFile" id="videoFile"
                                                class="form-control-file">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-messages-tab">
                                    <!-- Your Messages content goes here -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo base_url() ?>FacultyDashboard" class="btn btn-primary mb-3">Back to Faculty Page</a>
    </div>
</div>
</div>
<?php include('FacultysideBar/FacultyFooter.php');?>