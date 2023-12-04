
<?php echo view('AdminSideBar.php'); ?>
<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>

  
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="">
            <div class="sticky-top mb-3">


                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                  
                    <div class="checkbox">
                    
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-body p-0">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </div>


  <?php echo view('AdminSideBar/AdminFooter.php');?>   

