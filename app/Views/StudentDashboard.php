<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dashboard </title>
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>
    <!-- <link rel="stylesheet" href="public/css/StudentDashboard.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->

    <!-- links for date picker -->
    <!-- Include Required Prerequisites -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> -->

    <!-- Include Date Range Picker -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> -->

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url()?>today" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>


        </ul>

    </nav>
       
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <script>
        function toggleUploadForm() {
            var uploadForm = document.getElementById("uploadForm");
            if (uploadForm.style.display === "none") {
                uploadForm.style.display = "block";
            } else {
                uploadForm.style.display = "none";
            }
        }
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("input[name='datetimes']").daterangepicker({},
                function(start, end, label) {
                    let startDate = start.format("YYYY-MM-DD").toString();
                    let endDate = end.format("YYYY-MM-DD").toString();

                    document.getElementById("startDate").innerHTML =
                        "Start date: " + startDate;
                    document.getElementById("endDate").innerHTML = "End date: " + endDate;

                }
            );
        });
    </script>

    <!-- show video sections -->
    <script>
        // Get a reference to the "Upload recording" text element by its id
        var uploadText = document.getElementById("uploadRecording");

        // Get a reference to the video section container by its id
        var videoSection = document.getElementById("videoSection");

        // Add a click event listener to the "Upload recording" text
        uploadText.addEventListener("click", function() {
            // Toggle the visibility of the video section
            if (videoSection.style.display === "none") {
                videoSection.style.display = "block";
            } else {
                videoSection.style.display = "none";
            }
        });
    </script>

    <script>
        document.getElementById("uploadLink").addEventListener("click", function() {
            var uploadForm = document.getElementById("uploadForm");

            if (uploadForm.style.display === "none" || uploadForm.style.display === "") {
                uploadForm.style.display = "block";

            } else {
                uploadForm.style.display = "none";

            }
        });
    </script>
    <script>
        function toggleFacultyProfile() {
            const facultyProfile = document.getElementById("faculty-profile");
            facultyProfile.classList.toggle("hidden");
            $("#uploadForm").hide();

        }
    </script>

</body>

</html>