

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
                <?php foreach ($facultyData as $faculty): ?>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Digital Strategist

                            </div>
                            <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                <h2 class="lead"><b><?= $faculty->student_name ?></b></h2>
                                <p class="text-muted text-sm"><b>Email: </b><?= $faculty->email ?> </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone <?= $faculty->mobile_no ?></li>
                                </ul>
                                </div>
                                <div class="col-5 text-center">
                                <img src="<?php echo base_url()?>public/images/user.png" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>

                            </div>
                            <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> View Profile
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
<?php echo view('AdminSideBar/AdminFooter.php');?> 