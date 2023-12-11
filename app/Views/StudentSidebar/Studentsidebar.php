<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/css/custom.css">
  <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
        <!-- integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
</head>

<body>


<?php 
         $session = \Config\Services::session();
         $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

         // Get the 'id' from the session
         $teacherId = $session->get('id');
         
         // Rest of your code
         $notifications = $adminModel->getUserRole($teacherId);
         $count = count($notifications);


?>
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
                  // Sort notifications array based on timestamp
                  usort($notifications, function ($a, $b) {
                      return strtotime($a['timestamp']) - strtotime($b['timestamp']);
                  });

                  foreach ($notifications as $notification):
                      $notificationDate = strtotime($notification['timestamp']);
                      $todayDateTime = strtotime($todayDate);

                      // Only show notifications with timestamps equal to or after today
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
                  endforeach;
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
      <a href="#" class="brand-link">
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
          <div class="image">
            <img src="<?=base_url()?>public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url() ?>StudentDashboard" class="d-block"><?= $username = session()->get('user_name'); ?></a>
          </div>
        </div>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">

            </div>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            </a>
            <?php if ($_SESSION['sessiondata']['Payment_status'] == 'Y') { ?>
              <li class="nav-item">
              <li class="nav-item">
                <a href="<?=base_url();?>StudentDashboard" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>StudentProfile" class="nav-link">
                  <i class="nav-icon 	fa fa-child"></i>
                  <p>
                    Profile
                  </p>
                </a>
              </li>
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
                    <a href="<?php echo base_url() ?>ScheduleStudent" class="nav-link">
                      <i class="nav-icon fas fa-calendar-alt"></i>
                      <p> Schedule
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reshedule</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>SelectDate" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Faculty Availability</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon 	fa fa-child"></i>
                  <p>
                    Faculty
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>UplodeVideo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Uplode Video</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>StudentSideBarVideo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Faculty uploded Video</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- <li class="nav-item">


                <a href="<?php echo base_url()?>Chat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chat</p>

                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>Payment Records
                      </p>
                    </a>
                  </li>

                </ul>
              </li> -->
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
                    <a href="<?php echo base_url()?>chatuser" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Chat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Email</p>
                    </a>
                  </li>
                <?php } ?>
                <?php
                if ($_SESSION['sessiondata']['Payment_status'] == 'N') { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>ModelForLogin" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>Plan details</p>
                    </a>
                  </li>
                <?php } ?>
                </ul>
              </li>
              </li>
          </ul>
        </nav>
      </div>
    </aside>
