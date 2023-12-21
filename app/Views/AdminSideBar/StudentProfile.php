<?php echo view('AdminSideBar.php'); ?>
<div class="content-wrapper">



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        <?php if(!empty($student_data)){ ?>
                        <?php foreach ($student_data as $data) { ?>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                              

                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b><?= $data->student_name ?></b></h2>
                                                <p class="text-muted text-sm"><b>Email: </b><?= $data->email ?> </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone <?= $data->mobile_no ?></li>
                                                  
                                                </ul>
                                                <small class="badge badge-success"> Confirmed</small>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="<?php echo base_url() ?>public/images/user.png" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="<?php echo base_url() ?>viewProfiles/<?=$data->student_id  ?>" class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>