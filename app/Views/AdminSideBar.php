<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Enatyam</title>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="<?= base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


    <link rel="stylesheet" href="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/fontawesome-stars.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/admindashboard_style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fullcalendar/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/jquery.dataTables.css">
    <link href="<?php echo base_url() ?>public/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">


    <style>
        .payment-card #example1_wrapper .btn-group {
            display: none !important;

        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div id="flash-success-container">
        <?php if (session()->has('success')) : ?>
            <div class="flash-success">
                <?= session('success') ?>
            </div>
        <?php endif; ?>
    </div>
    <div id="flash-message-container">
        <?php if (session()->has('errormessage')) : ?>
            <div class="flash-message">
                <?= session('errormessage') ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url(); ?>Home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
                </li>
            </ul>
            <?php
            $adminModel = new \App\Models\AdminModel();
            $data = $adminModel->getRecordsBefore7Days();
            $counteing = count($data);
            ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="badge badge-warning navbar-badge"><?= $counteing ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"><?= $counteing ?> Notifications</span>
                        <div class="dropdown-divider"></div>

                        <?php foreach ($data as $notification) : ?>
                            <?php if (isset($notification->D_id)) : ?>
                                <a href="<?= base_url() ?>NewFacultyApplication" class="dropdown-item">
                                    <i class="fas fa-users  mr-2"></i><?= $notification->nname ?>
                                </a>
                            <?php elseif (isset($notification->id)) : ?>
                                <a href="<?= base_url(); ?>studentProfiledata" class="dropdown-item">
                                    <i class="fas fa-users  mr-2"></i><?= $notification->nname ?>
                                </a>
                            <?php endif ?>
                            <div class="dropdown-divider"></div>
                        <?php endforeach; ?>

                    </div>



                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        </nav>
        <?php if ((!empty($_SESSION))) {
            
        ?>
            <?php  if (($_SESSION['sessiondata']['role']) == 'sub_admin') { ?>
                <?php
                if (isset($_SESSION['sessiondata']['access_level'])) {
                    $access_levels = explode(',', $_SESSION['sessiondata']['access_level']);
                ?>
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <div class="sidebar">
                            <!-- Sidebar user (optional) -->
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="<?= base_url('public/AdmoinLogo.png'); ?>" class="img-circle elevation-2" alt="User Image">
                                </div>
                                <div class="info">
                                    <a href="<?php echo base_url() ?>Admindashboard" class="d-block">
                                        <?php echo ($_SESSION['sessiondata']['user_name']); ?> </a>
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

                                    <li class="nav-item" <?php if (in_array('Admindashboard', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="<?= base_url(); ?>Admindashboard" class="nav-link">
                                            <i class="nav-icon fas fa-th"></i>
                                            <p>
                                                Dashboard
                                            </p>
                                        </a>
                                    </li>

                                    <!-- Schedule Menu -->
                                    <li class="nav-item" <?php if (in_array('AdminList', $access_levels) || in_array('getDemoDetails', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class=" nav-icon fa fa-calendar"></i>
                                            <p>
                                                Schedule
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <!-- <li class="nav-item" <?php if (in_array('AdminList', $access_levels)) {
                                                                            echo "style='display:block'";
                                                                        } else {
                                                                            echo "style='display:none'";
                                                                        } ?>>
                                                <a href="<?php echo base_url() ?>AdminList" class="nav-link">
                                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                                    <p>Admin List</p>
                                                </a>
                                            </li> -->
                                            <li class="nav-item" <?php if (in_array('getDemoDetails', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>getDemoDetails" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Demo</p>
                                                </a>
                                            </li>
                                            <!-- Add other Schedule menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Menu Menu -->
                                    <li class="nav-item" <?php if (in_array('add_menu', $access_levels) || in_array('menu_list', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class=" nav-icon fa fa-calendar"></i>
                                            <p>
                                                Menu
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('add_menu', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>add_menu" class="nav-link">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    <p>Add menu</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('menu_list', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>menu_list" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Menu List</p>
                                                </a>
                                            </li>
                                            <!-- Add other Menu menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Menu Master -->
                                    <li class="nav-item" <?php if (in_array('add_courses', $access_levels) || in_array('courses_list', $access_levels) || in_array('add_sub_courses', $access_levels) || in_array('sub_courses_list', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class=" nav-icon fa fa-calendar"></i>
                                            <p>
                                                Master
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview" <?php if (in_array('add_courses', $access_levels)) {
                                                                            echo "style='display:block'";
                                                                        } else {
                                                                            echo "style='display:none'";
                                                                        } ?>>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>add_courses" class="nav-link">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    <p>Add courses</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('courses_list', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>courses_list" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Courses List</p>
                                                </a>
                                            </li>

                                            <li class="nav-item" <?php if (in_array('add_sub_courses', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>add_sub_courses" class="nav-link">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    <p>Add sub courses</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('sub_courses_list', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>sub_courses_list" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Sub courses List</p>
                                                </a>
                                            </li>
                                            <!-- Add other Menu menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- New User Menu -->
                                    <li class="nav-item" <?php if (in_array('AddNewUser', $access_levels) || in_array('user_list', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                                            <p>
                                                New User
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('AddNewUser', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>AddNewUser" class="nav-link">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    <p>Add New User</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('user_list', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url(); ?>user_list" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>User List</p>
                                                </a>
                                            </li>
                                            <!-- Add other New User menu items with access level checks here -->
                                        </ul>
                                    </li>



                                    <!-- File Menu -->
                                    <li class="nav-item" <?php if (in_array('UplodedvideoByStudent', $access_levels) || in_array('UploadedImages', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-credit-card"></i>
                                            <p>
                                                Files
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">

                                            <!-- Videos -->
                                            <li class="nav-item" <?php if (in_array('UplodedvideoByStudent', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>uploaded_video" class="nav-link">
                                                    <i class="nav-icon far fa-image"></i>
                                                    <p>Videos</p>
                                                </a>
                                            </li>

                                            <!-- Images -->
                                            <li class="nav-item" <?php if (in_array('UploadedImages', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>UploadedImages" class="nav-link">
                                                    <i class="nav-icon far fa-image"></i>
                                                    <p>Images</p>
                                                </a>
                                            </li>

                                            <!-- Add other Student menu items with access level checks here -->
                                        </ul>
                                    </li>


                                    <!-- Student Menu -->
                                    <li class="nav-item" <?php if (in_array('studentProfiledata', $access_levels) || in_array('Attendance', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon 	fa fa-child"></i>
                                            <p>
                                                Student
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('studentProfiledata', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>studentProfiledata" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('Attendance', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>Attendance" class="nav-link">
                                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                                    <p>Attendance</p>
                                                </a>
                                            </li>

                                            <!-- Add other Student menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Groups Menu -->
                                    <li class="nav-item" <?php if (in_array('student_list_of_group', $access_levels) || in_array('create_group', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa fa-users"></i>

                                            <p>
                                                Groups
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('create_group', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>create_group" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Create Groups</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('student_list_of_group', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>student_list_of_group" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Groups List</p>
                                                </a>
                                            </li>

                                            <!-- Add other Groups menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Faculty Menu -->
                                    <li class="nav-item" <?php if (in_array('getAdminSideBarAll', $access_levels) || in_array('FacultyShedule', $access_levels) || in_array('Attendance', $access_levels) || in_array('NewFacultyApplication', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon 	fa fa-users"></i>
                                            <p>
                                                Faculty
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('getAdminSideBarAll', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>getAdminSideBarAll" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('FacultyShedule', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>FacultyShedule" class="nav-link">
                                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                                    <p>Schedule</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('Attendance', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>Attendance" class="nav-link">
                                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                                    <p>Attendance</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('NewFacultyApplication', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>NewFacultyApplication" class="nav-link">
                                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                                    <p>New Enrollment</p>
                                                </a>
                                            </li>
                                            <!-- Add other Faculty menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <li class="nav-item" <?php if (in_array('demo_classes', $access_levels) || in_array('student', $access_levels) || in_array('faculty', $access_levels) || in_array('payment_history', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon 	fa fa-credit-card"></i>
                                            <p>
                                                Report
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('demo_classes', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>demo_classes" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Demo Classes</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('student', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>student" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Student</p>
                                                </a>
                                            </li>

                                            <li class="nav-item" <?php if (in_array('faculty', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>faculty" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Faculty</p>
                                                </a>
                                            </li>

                                            <li class="nav-item" <?php if (in_array('payment_history', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>payment_history" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Payment History</p>
                                                </a>
                                            </li>


                                            <!-- Add other Finance menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Finance Menu -->
                                    <li class="nav-item" <?php if (in_array('faculty_pamentrecords', $access_levels) || in_array('studentpaments', $access_levels) || in_array('payments', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon 	fa fa-credit-card"></i>
                                            <p>
                                                Finance
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <!-- <li class="nav-item" <?php if (in_array('faculty_pamentrecords', $access_levels)) {
                                                                            echo "style='display:block'";
                                                                        } else {
                                                                            echo "style='display:none'";
                                                                        } ?>>
                                                <a href="<?php echo base_url() ?>faculty_pamentrecords" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Faculty Payment Records</p>
                                                </a>
                                            </li> -->
                                            <li class="nav-item" <?php if (in_array('payments', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>payments" class="nav-link">
                                                    <i class="nav-icon fas fa-book"></i>
                                                    <p>Student Payments</p>
                                                </a>
                                            </li>
                                            <li class="nav-item" <?php if (in_array('payments', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>

                                            </li>
                                            <!-- Add other Finance menu items with access level checks here -->
                                        </ul>
                                    </li>

                                    <!-- Messages Menu -->
                                    <li class="nav-item" <?php if (in_array('chatuser', $access_levels) || in_array('email', $access_levels) || in_array('add_notifications', $access_levels)) {
                                                                echo "style='display:block'";
                                                            } else {
                                                                echo "style='display:none'";
                                                            } ?>>
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-comment-dots"></i>
                                            <p>
                                                Messages
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item" <?php if (in_array('chatuser', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?= base_url() ?>chatuser" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Chat
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item" <?php if (in_array('Email', $access_levels)) {
                                                                            echo "style='display:block'";
                                                                        } else {
                                                                            echo "style='display:none'";
                                                                        } ?>>
                                                <a href="email" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Email</p>
                                                </a>
                                            </li> -->
                                            <li class="nav-item" <?php if (in_array('add_notifications', $access_levels)) {
                                                                        echo "style='display:block'";
                                                                    } else {
                                                                        echo "style='display:none'";
                                                                    } ?>>
                                                <a href="<?php echo base_url() ?>add_notifications" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Notifications</p>
                                                </a>
                                            </li>
                                            <!-- Add other Messages menu items with access level checks here -->
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.sidebar-menu -->

                        </div>
                        <!-- /.sidebar -->
                    </aside>
                <?php } ?>

            <?php } else { ?>

                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="<?php echo base_url() ?>public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="<?php echo base_url() ?>Admindashboard" class="d-block">
                                    <?php echo ($_SESSION['sessiondata']['user_name']); ?> </a>
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

                                <!-- Schedule Menu -->
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>Admindashboard" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Dashboard
                                        </p>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>getDemoDetails" class="nav-link">
                                        <i class=" nav-icon fa fa-calendar"></i>
                                        <p>
                                           Demo
                                            <!-- <i class="right fas fa-angle-left"></i> -->
                                        </p>
                                    </a>
                                    <!-- <ul class="nav nav-treeview"> -->
                                        <!-- <li class="nav-item"  >
                                <a href="<?php echo base_url() ?>AdminList" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Admin List</p>
                                </a>
                            </li> -->
                                        <!-- <li class="nav-item">
                                            <a href="<?php echo base_url() ?>getDemoDetails" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Demo</p>
                                            </a>
                                        </li> -->
                                        <!-- Add other Schedule menu items with access level checks here -->
                                    <!-- </ul> -->
                                </li>

                                <!-- Menu Menu -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class=" nav-icon fa fa-calendar"></i>
                                        <p>
                                            Menu
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>add_menu" class="nav-link">
                                                <i class="nav-icon fas fa-edit"></i>
                                                <p>Add menu</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>menu_list" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Menu List</p>
                                            </a>
                                        </li>
                                        <!-- Add other Menu menu items with access level checks here -->
                                    </ul>
                                </li>


                                <!-- Menu Master -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class=" nav-icon fa fa-calendar"></i>
                                        <p>
                                            Master
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>add_courses" class="nav-link">
                                                <i class="nav-icon fas fa-edit"></i>
                                                <p>Add courses</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>courses_list" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Courses List</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>add_sub_courses" class="nav-link">
                                                <i class="nav-icon fas fa-edit"></i>
                                                <p>Add sub courses</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>sub_courses_list" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Sub courses List</p>
                                            </a>
                                        </li>
                                        <!-- Add other Menu menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- New User Menu -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class=" nav-icon fa fa-user" aria-hidden="true"></i>

                                        <p>
                                            New User
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>AddNewUser" class="nav-link">
                                                <i class="nav-icon fas fa-edit"></i>
                                                <p>Add New User</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>user_list" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>User List</p>
                                            </a>
                                        </li>
                                        <!-- Add other New User menu items with access level checks here -->
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
                                            <a href="<?php echo base_url() ?>uploaded_video" class="nav-link">
                                                <i class="nav-icon far fa-image"></i>
                                                <p>Videos</p>
                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>UploadedImages" class="nav-link">
                                                <i class="nav-icon far fa-image"></i>
                                                <p>Images</p>
                                            </a>
                                        </li>
                                        <!-- Add other Student menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- Student Menu -->
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
                                            <a href="<?php echo base_url() ?>studentProfiledata" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Profile</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>Attendance" class="nav-link">
                                                <i class="nav-icon fas fa-calendar-alt"></i>
                                                <p>Attendance</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>studentSlots" class="nav-link">
                                                <i class="nav-icon fas fa-calendar-alt"></i>
                                                <p>Schedule</p>
                                            </a>
                                        </li>
                                        <!-- Add other Student menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- Groups Menu -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa fa-users"></i>
                                        <p>
                                            Groups
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>create_group" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Create Groups</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>student_list_of_group" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Groups List</p>
                                            </a>
                                        </li>

                                        <!-- Add other Groups menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- Faculty Menu -->
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
                                            <a href="<?php echo base_url() ?>FacultyShedule" class="nav-link">
                                                <i class="nav-icon fas fa-calendar-alt"></i>
                                                <p>Schedule</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>FacultyAttendance" class="nav-link">
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
                                        <!-- Add other Faculty menu items with access level checks here -->
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon 	fa fa-credit-card"></i>
                                        <p>
                                            Report
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>demo_classes" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Demo Classes</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>student" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Student</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>faculty" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Faculty</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>payment_history" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Payment History</p>
                                            </a>
                                        </li>


                                        <!-- Add other Finance menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- Finance Menu -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon 	fa fa-credit-card"></i>
                                        <p>
                                            Finance
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <!-- <li class="nav-item">
                                            <a href="<?php echo base_url() ?>faculty_pamentrecords" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Faculty Payment Records</p>
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>payments" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Student Payments</p>
                                            </a>
                                        </li>

                                        <!-- Add other Finance menu items with access level checks here -->
                                    </ul>
                                </li>

                                <!-- Messages Menu -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-comment-dots"></i>
                                        <p>
                                            Messages
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>chatuser" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Chat
                                                </p>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="<?php echo base_url() ?>email" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Email</p>
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>add_notifications" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Notifications</p>
                                            </a>
                                        </li>
                                        <!-- Add other Messages menu items with access level checks here -->
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->

                    </div>
                    <!-- /.sidebar -->
                </aside>
        <?php }
        } ?>