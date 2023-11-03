<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
   
    <style>
    .nav-item ul {
        display: none;
        /* Initially hide the submenu */
    }

    /* Style for the dropdown menu */
    .nav-item:hover ul {
        display: block;
        /* Show the submenu on hover */
    }
    </style>
</head>

<body>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- /:\xampp\htdocs\MISdashboard\public\assets\plugins\fontawesome-free\css\all.min.css -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="public/images/Student2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light"></span>
        </a>

        <!-- Sidebar -->


        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="public/images/Studentimage.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo base_url()?>StudentDashboard" class="d-block">Student</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                
                   

                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="toggleFacultyProfile()">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>Faculty</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="<?php echo base_url()?>StudentSideBarVideo" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Watch Videos
                            </p>
                        </a>

                    </li>

                    <li class="nav-item" id="uploadLink">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Upload Videos
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" method="post" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Payment Details
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" method="post" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Schedule
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" method="post" class="nav-link">

                            <i class="far fa-circle nav-icon"></i>
                            <p>Chat</p>
                        </a>
                        <ul>
                            <li><a href="#">
                                    <p>Admin</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Faculty</p>
                                </a></li>
                        </ul>
                    </li>




                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>

        <!-- /.sidebar -->
    </aside>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>