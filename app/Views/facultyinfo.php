<?php include('FacultySidebar2.php'); ?>
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
                                    <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="true">Upload Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Meet
                                        Link</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                    <form action="<?= site_url('uploadVideo'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="student_id" value="<?= $studentData['student_id']; ?>">
                                        <div class="form-group">
                                            <label for="videoFile">Upload Video/Image:</label>
                                            <input type="file" name="videoFile" id="videoFile" class="form-control-file">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                                    <form action="sendmeetinglink" method="post">
                                        <div class="form-group">
                                            <label for="linkInput">Link</label>
                                            <input type="hidden" name="student_registerid" value="<?= $studentData['register_id']; ?>">
                                            <input type="url" class="form-control" name="linkInput" aria-describedby="linkHelp" placeholder="Enter link" required>
                                            <small id="linkHelp" class="form-text text-muted">Provide the link you want
                                                to send.</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>

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
<?php include('FacultysideBar/FacultyFooter.php'); ?>