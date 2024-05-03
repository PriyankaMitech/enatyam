<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enatyam</title>
  <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/fontawesome-stars.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/custom.css">
  <link rel="stylesheet" href="<?= base_url(); ?>public/css/admindashboard_style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.0/sweetalert2.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="image_sprite/ip2location-image-sprite.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <style>

    @keyframes flip-top {
  to {
    transform: rotateX(90deg);
  }
}
@keyframes flip-bottom {
  to {
    transform: rotateX(0deg);
  }
}
main {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
  
}
main .cards {
  display: flex;
  gap: 15px;
  
}
main .cards .card {
  text-align: center;
  font-size: 25px;
  margin-bottom: 0rem !important;
}
main .cards .card p {
  color: #8486a9;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  margin-bottom: 0rem !important;
}
main .cards .card .flip-card {
  display: flex;
  flex-direction: column;
    position: relative;
    margin: 10px auto;
}
main .cards .card .top-half,
main .cards .card .bottom-half,
main .cards .card .top-flip,
main .cards .card .bottom-flip {
  color: #fb6087;
  font-size: 35px;
  height: 43px;
  width: 77px;
  padding: 23px 7px;
  overflow: hidden;
  text-align: center;
  will-change: transform !important;
}
main .cards .card .top-half,
main .cards .card .top-flip {
  color: #d54d6f;
  border-radius: 5px 5px 0 0;
  background-color: #2c2c44;
}
main .cards .card .top-half::before,
main .cards .card .top-flip::before {
  content: "";
  background-color: #191a24;
  height: 10px;
  width: 10px;
  border-radius: 100%;
  position: absolute;
  bottom: -5px;
  left: -5px;
}
main .cards .card .top-half::after,
main .cards .card .top-flip::after {
  content: "";
  background-color: #191a24;
  height: 10px;
  width: 10px;
  border-radius: 100%;
  position: absolute;
  bottom: -5px;
  right: -5px;
}
main .cards .card .bottom-half,
main .cards .card .bottom-flip {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  border-radius: 0 0 5px 5px;
  background-color: #343650;
  box-shadow: 0 -2px 5px 0 rgba(71, 83, 115, 0.7) inset;
}
main .cards .card .bottom-half::before,
main .cards .card .bottom-flip::before {
  content: "";
  background-color: #191a24;
  height: 10px;
  width: 10px;
  border-radius: 100%;
  position: absolute;
  top: -5px;
  left: -5px;
}
main .cards .card .bottom-half::after,
main .cards .card .bottom-flip::after {
  content: "";
  background-color: #191a24;
  height: 10px;
  width: 10px;
  border-radius: 100%;
  position: absolute;
  top: -5px;
  right: -5px;
}
main .cards .card .top-flip {
  position: absolute;
  transform-origin: bottom;
  transform: rotateX(0deg);
  animation: flip-top 0.5s ease-in forwards;
}
main .cards .card .bottom-flip {
  position: absolute;
  bottom: 0;
  transform-origin: top;
  transform: rotateX(90deg);
  animation: flip-bottom 0.5s ease-out 0.5s;
}



@media screen and (min-width: 700px) {
  main h1 {
    font-size: 31px;
  }
  main .cards {
    gap: 25px;
  }
  main .cards .top-half,
main .cards .bottom-half,
main .cards .top-flip,
main .cards .bottom-flip {
  font-size: 27px !important;
    height: 42px !important;
    width: 72px !important;
    padding: 0px 0px !important;
  }
}
  </style>
</head>

<body>

<?php 
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));


?>
<?php

$adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

$wherecond = [
    'register_id' => $_SESSION['sessiondata']['id'],
    'Conducted_Demo' => 'N'
];
$orderby = ['created_on' => 'DESC'];

$counter_data = $adminModel->getsingleroworderby('free_demo_table', $wherecond, $orderby);
$currentDayOfWeek = date('l');
$wherecond2 = [
  'student_id' => $_SESSION['sessiondata']['id'],
  'days' => $currentDayOfWeek
];

$scounter_data = $adminModel->getsinglerow('tbl_student_shedule',$wherecond2);


// echo "<pre>";print_r($scounter_data);exit();
?>
  <div id="flash-message-container">
    <?php if (session()->has('errormessage')) : ?>
      <div class="flash-message">
        <?= session('errormessage') ?>
      </div>
    <?php endif; ?>
  </div>

  <div id="flash-success-container">
    <?php if (session()->has('success')) : ?>
      <div class="flash-success">
        <?= session('success') ?>
      </div>
    <?php endif; ?>
  </div>




  <?php
  $session = \Config\Services::session();
  $adminModel = new \App\Models\AdminModel();
  $student_id = $session->get('id');
  $userType = 'student';
  $notifications = $adminModel->getUserRole($student_id, $userType);
  $wherecon = array('id' => $student_id);
  $alldata = $adminModel->getsinglerow('register',  $wherecon);
  // print_r($alldata);
  // die;
  $register_id;
  if (!empty($alldata)) {
    $register_id = $alldata->Assign_Techer_id;
  }
  $wherecon1 = array('register_id' => $register_id);
  $alldataoff = $adminModel->getsinglerow('faculty',  $wherecon1);
  // print_r($alldataoff);
  // die;

  $carrier_id = '';
  if (!empty($alldataoff)) {
    $carrier_id = $alldataoff->carrier_id;
  }
  $wherecon2 = array('D_id' => $carrier_id);
  $alldatac = $adminModel->getsinglerow('carrier',  $wherecon2);

  $count = 0;


  if ($notifications) {
    $count = count($notifications);
  } else {
    $count = 0;
  }


  ?>

  
  <div class="wrapper">
  
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    
      <!-- Left navbar links -->
      <ul class="navbar-nav">
 
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url(); ?>" class="nav-link">Home </span></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
        </li>
      </ul>



     
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <?php 
date_default_timezone_set('Asia/Kolkata');

if (!empty($scounter_data)) {
    // Convert start time string to DateTime object
    $startTime = $scounter_data->start_time;
    
    // Get the current time
    $currentTime = new DateTime();
    
    // Convert the current time to a string in a specific format
    $currentTimeString = $currentTime->format('H:i:s');


  //   echo $currentTimeString;

  //  exit();


  // echo $startTime;
  // echo $currentTimeString;exit();

    // Check if the current time is greater than or equal to the start time
    if ($startTime > $currentTimeString ) {

        // Display the countdown timer
?>
<main  id="countdown-container">
    <div class='cards'>
        <div class='card hours'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Hours</p>
        </div>

        <div class='card minutes'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Minutes</p>
        </div>

        <div class='card seconds'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Seconds</p>
        </div>
    </div>
</main>
<?php } else {?>
    
    <main id="countdown-container" style="display:none">
    <div class='cards'>
        <div class='card hours'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Hours</p>
        </div>

        <div class='card minutes'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Minutes</p>
        </div>

        <div class='card seconds'>
            <div class='flip-card'>
                <div class='top-half'>00</div>
            </div>
            <p>Seconds</p>
        </div>
    </div>
</main>
  <?php  }}
?>
        </li>
        <?php if ($_SESSION['sessiondata']['Payment_status'] == 'Y') { ?>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <!-- <?php $displayedNotificationCount = 0; ?>
              <span class="badge badge-danger navbar-badge">
                <?//= $count; ?>
              </span> -->

              <span class="notificationCounter badge badge-danger navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notification-dropdown">
              <div class="notification-scroll">

              </div>

              <a href="<?= base_url(); ?>notification" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
   <?php }?>
        <li class="nav-item">
          <?php 
date_default_timezone_set('Asia/Kolkata');

if (!empty($counter_data)) {
    // Convert date and time strings to DateTime objects
   $bookDate = $counter_data->Book_Date;

  //  echo $bookDate; exit();
    $bookTime = $counter_data->Book_Date_Time;
    
    // Combine date and time
    $bookDateTime = new DateTime($bookDate . ' ' . $bookTime);
     $currentDate = date('Y-m-d'); 
    // Get current date and time
    $currentDateTime = new DateTime();


    // Check if current date matches booked date or if current time is greater than booked time
    if ($currentDate != $bookDate || $currentDateTime >= $bookDateTime) {
?>

<main id="countdown-container" style="display:none !important">

<div class='cards'>
  <div class='card hours'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Hours</p>
  </div>

  <div class='card minutes'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Minutes</p>
  </div>

  <div class='card seconds'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Seconds</p>
  </div>

</div>
</main>
 

<?php 
    } else {
        // Display none if conditions are not met
?>
 <main id="countdown-container">

<div class='cards'>
  <div class='card hours'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Hours</p>
  </div>

  <div class='card minutes'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Minutes</p>
  </div>

  <div class='card seconds'>
    <div class='flip-card'>
      <div class='top-half'>00</div>
      <!-- <div class='bottom-half'>00</div> -->
    </div>
    <p>Seconds</p>
  </div>

</div>
</main>
 <?php 
    }
}
?>




<!-- <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a> -->
        </li>
      </ul>
    </nav>
    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
          <div class="image">
            <img src="<?= base_url() ?>public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
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
                <a href="<?= base_url(); ?>StudentDashboard" class="nav-link <?php if($page == 'StudentDashboard') { echo "active-nav-link";  }?>">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>StudentProfile" class="nav-link <?php if($page == 'StudentProfile') { echo "active-nav-link";  }?>">
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
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url() ?>ScheduleStudent" class="nav-link">
                      <i class="nav-icon fas fa-calendar-alt"></i>
                      <p> Schedule
                      </p>
                    </a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url() ?>reschedule" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Leave</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>SelectDate" class="nav-link <?php if($page == 'SelectDate') { echo "active-nav-link";  }?>">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                      <p>My Schedule</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>StudentAttendancerecord" class="nav-link <?php if($page == 'StudentAttendancerecord') { echo "active-nav-link";  }?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attendance</p>
                    </a>
                  </li>
                  

                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon 	fa fa-credit-card"></i>
                  <p>
                    Files
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>UplodeVideo" class="nav-link <?php if($page == 'UplodeVideo') { echo "active-nav-link";  }?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Add Videos / Images</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>StudentSideBarVideo" class="nav-link <?php if($page == 'StudentSideBarVideo') { echo "active-nav-link";  }?>">
                      <i class="nav-icon far fa-image"></i>
                      <p>Videos</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>StudentSideBarImages" class="nav-link <?php if($page == 'StudentSideBarImages') { echo "active-nav-link";  }?>">
                      <i class="nav-icon far fa-image"></i>
                      <p>Images</p>
                    </a>
                  </li>
                  <!-- Add other Student menu items with access level checks here -->
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>Renewal" class="nav-link <?php if($page == 'Renewal') { echo "active-nav-link";  }?>">
                  <i class="nav-icon 	fa fa-child"></i>
                  <p>
                    Renewal
                  </p>
                </a>
              </li>

              <!-- <li class="nav-item">


                <a href="<?php echo base_url() ?>Chat" class="nav-link">
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
                    <span class="chatCounter badge badge-danger right"></span>

                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>chatuser" class="nav-link <?php if($page == 'chatuser') { echo "active-nav-link";  }?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Chat <span class="chatCounter badge badge-danger right"></span></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>View_certificate" class="nav-link <?php if($page == 'View_certificate') { echo "active-nav-link";  }?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Certificate</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>feedback" class="nav-link <?php if($page == 'feedback') { echo "active-nav-link";  }?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Feedback</p>
                    </a>
                  </li>
                <?php }
              if ($_SESSION['sessiondata']['Payment_status'] == 'N') { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>ModelForLogin" class="nav-link <?php if($page == 'ModelForLogin') { echo "active-nav-link";  }?>">
                      <i class="nav-icon fas fa-th"></i>
                      <p>Plan details</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>bookdemo2" class="nav-link <?php if($page == 'bookdemo2') { echo "active-nav-link";  }?>">
                    <i class=" nav-icon fa fa-calendar"></i>
                      <p>Book Demo</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>demojoininglink" class="nav-link <?php if($page == 'demojoininglink') { echo "active-nav-link";  }?>">
                    <i class=" nav-icon fa fa-link"></i>
                      <p>Demo Joining Link</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>Coupon_Codes" class="nav-link <?php if($page == 'Coupon_Codes') { echo "active-nav-link";  }?>">
                    <i class=" nav-icon fa fa-gift"></i>
                      <p>Coupon Codes</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>referandearn" class="nav-link <?php if($page == 'referandearn') { echo "active-nav-link";  }?>">
                    <i class=" nav-icon fa fa-money"></i>
                      <p>Refer and Earn</p>
                    </a>
                  </li>
                <?php } ?>

                
                </ul>
        </nav>
      </div>
      <img src="<?= base_url(); ?>public/images/demobk.png" class="bottom-image">

    </aside>

             