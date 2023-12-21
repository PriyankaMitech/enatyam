<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="<?php echo base_url() ?>public/css/custom.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">


  <link rel="stylesheet" href="<?php echo base_url()?>plugins/jqvmap/jqvmap.min.css">


  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fullcalendar/main.css">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link href="<?php echo base_url() ?>public/extcss/dataTables.bootstrap4.min.css">
  <link href="<?php echo base_url() ?>public/extcss/buttons.bootstrap4.min.css">
  <link href="<?php echo base_url() ?>public/extcss/responsive.bootstrap4.min.css">





</head>

<body>

<?php 
         $session = \Config\Services::session();
         $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

         // Get the 'id' from the session
         $teacherId = $session->get('id');
         
         // Rest of your code
         $notifications = $adminModel->getUserRole($teacherId);
         if ($notifications) {
            $count = count($notifications);
         }else {
          $count = 0;
         }

?>
  <div id="flash-success-container">
    <?php if (session()->has('success')) : ?>
        <div class="flash-success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>
</div>
<?php
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".ZOOM_CLIENT_ID."&redirect_uri=".ZOOM_REDIRECT_URI;
?>
 
<a href="<?php echo $url; ?>" target="_blank" >Login with Zoom</a>
  <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a> -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url()?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url()?>dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url()?>dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <?php
    // Get today's date and time in the required format
    $todayDate = date('Y-m-d H:i:s');?>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <?php $displayedNotificationCount = 0; ?>
                <span class="badge badge-danger navbar-badge">
                    <?= $count; ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notification-dropdown">
                <div class="notification-scroll">
                <?php
                  if ($notifications) {
                    usort($notifications, function ($a, $b) {
                        return strtotime($a['timestamp']) - strtotime($b['timestamp']);
                    });

                  foreach ($notifications as $notification):
                      $notificationDate = strtotime($notification['timestamp']);
                      $todayDateTime = strtotime($todayDate);
                  ?>
                      <a href="#" class="dropdown-item view-notification">
                          <!-- Message Start -->
                          <div class="media">
                              <img src="<?php echo base_url()?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                              <div class="media-body">
                                  <h3 class="dropdown-item-title">
                                      <?= $notification['full_name'] ?>
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                  </h3>
                                  <p class="text-sm">
                                      <?php
                                      // Split the description into lines
                                      $descriptionLines = explode("\n", $notification['notification_description']);

                                      // Display the first four lines of the description
                                      $maxLines = 1;
                                      echo implode("\n", array_slice($descriptionLines, 0, $maxLines));

                                      // If the description has more than four lines, show "..."
                                      if (count($descriptionLines) > $maxLines):
                                      ?>
                                          <span class="read-more-link">...</span>
                                      <?php endif; ?>
                                  </p>                <p class="text-sm text-muted">
                                      <?= $notification['timestamp'] ?>
                                  </p>
                              </div>
                          </div>
                          <!-- Message End -->
                      </a>
                  <?php
                  endforeach; }
                  ?>


                </div>
                <a href="<?=base_url(); ?>notification" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url()?>public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url() ?>FacultyDashboard" class="d-block"><?= $username = session()->get('user_name'); ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">

            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


   

            <li class="nav-item">
                <a href="<?=base_url();?>FacultyDashboard" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                </a>
              </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class=" nav-icon fa fa-calendar"></i>
                <p>
                  Schedule
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>SelectSlot" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p> Add Schedule
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>fetchTofacultyShuduleSidebar" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>My slots
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>FacultySchedule" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Demo Class</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentAttendance" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>StudentAttendance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Class</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon 	fa fa-child"></i>
                <p>
                  Files
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentUploadedVideo" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Videos</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon 	fa fa-credit-card"></i>
                <p>
                  Finance
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Faculty Payment Records
                    </p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-comment-dots"></i>
                <p>
                  Massages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Whats App
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Email</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?= base_url(); ?>chat" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Chat</p>
                  </a>
                </li>


              </ul>
            </li>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->
    </aside>