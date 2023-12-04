<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link href="<?php echo base_url()?>public/css/custom.css"></link>
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
</head>

<body>
  <div class="wrapper"> -->
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>



    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url() ?>Admindashboard" class="d-block">Admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->


            </a>

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
                  <a href="<?php //echo base_url() 
                            ?>AddNewUser" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Add New User
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>getDemoDetails" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Demo</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="<?php echo base_url() ?>DailyClass" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Class</p>
                  </a>
                </li> -->
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon 	fa fa-child"></i>
                <p>
                  Student
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentDate" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentListToAdmin" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>StudentList</p>
                  </a>
                </li> -->
                <!-- <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentGroups" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>StudentGroups</p>
                  </a>
                </li> -->
                <!-- <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Payments</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Attendance" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Attendance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>UplodedvideoByStudent" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>Videos/Images</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa fa-child"></i>
                <p>
                  Groups
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentGroups" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Groups List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>StudentListToAdmin" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Groups</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon 	fa fa-users"></i>
                <p>
                  Faculty
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>getAdminSideBarAll" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>FacultysidebarShedule" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Attendance" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Attendance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>NewFacultyApplication" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>New Enrollment</p>
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
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Student Payments</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Payments</p>
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

              </ul>
            </li>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
    
      </div>
      <!-- /.sidebar -->
    </aside>
 

 