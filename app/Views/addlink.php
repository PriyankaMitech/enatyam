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
                                    <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-two-profile" role="tab"
                                        aria-controls="custom-tabs-two-profile" aria-selected="true">Google Meet
                                        Link</a>
                                </li>
                        
                            </ul>
                        </div>
                        
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-two-profile-tab">
                                    <form action="<?=base_url(); ?>setlinkforgroup" method="post">
                                        <div class="form-group">
                                            <label for="linkInput">Link</label>
                                            <input type="hidden" name="faculty_id"
                                            value="<?php echo $sessionId = session()->get('id'); ?>" >
                                            <input type="hidden" name="group_name"
                                            value="<?php echo $segment_2 =  base64_decode(request()->uri->getSegment(2)); ?>" >
                                            <input type="url" class="form-control" name="linkInput"
                                             aria-describedby="linkHelp" placeholder="Enter link" required>
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