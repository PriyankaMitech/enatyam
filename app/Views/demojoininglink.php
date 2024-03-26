<?php //echo view('StudentSidebar/Studentsidebar'); ?>
<?php include 'StudentSidebar/Studentsidebar.php';

 ?>

<style>
   .content .card-body p{
        font-size: 22px;
    }
    /* .nav-sidebar>.nav-item {
    background-color: transparent;
    background-image: linear-gradient(90deg, #ff68f8 0%, #dde100 100%);
    } */
</style>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Demo Joining Link</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Demo Joining Link</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Demo Joining Link</h3>
                    </div> 
                    <div class="card-body">
                        <div class="container-fluid">
                            <?php if(!empty($demo_data)){?>
                                <?php if($demo_data->meetlink != ''){ ?>
                                <p>Join the demo session now by clicking the link below</p>
                                <a href="<?=$demo_data->meetlink; ?>"><?=$demo_data->meetlink; ?></a>
                                <?php }else{ ?>
                                    <p>Demo Link Is Not available now.</p>
                                    <?php } ?>


                            <?php }else{  ?>
                                <p>Demo Link Is Not available now.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
  <?php include 'StudentSidebar/StudentFooter.php';?>