<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dashboard </title>
    <style>
        #studentTable {
            width: 100%;
            /* Set the table width to 100% of its container */
            border-collapse: collapse;
            /* Collapse table borders */
        }

        #studentTable th,
        #studentTable td {
            padding: 10px;
            /* Adjust cell padding to increase cell size */
            text-align: center;
            /* Center-align cell content */
            border: 1px solid #ccc;
            /* Add borders to cells */
        }

        /* Style table header cells */
        #studentTable th {
            background-color: #f2f2f2;
            /* Background color for header cells */
            font-weight: bold;
            /* Make header text bold */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            /* Adjust padding as needed */
            background-color: #0074D9;
            /* Your desired background color */
            color: #fff;
            /* Text color */
            text-decoration: none;
            /* Remove underlines from the link */
            border-radius: 5px;
            /* Add rounded corners */
            font-weight: bold;
            /* Make the text bold */
        }

        #toggle-content {
            /* Add your styling here */
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            background-color: #f9f9f9;
            width: 404px;
            height: 122px;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- links for date picker -->
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />



</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    
<?php include('FacultySidebar2.php');?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logout">Logout</a></li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->

                </div>
            </section>
          
        <!-- /.col -->
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
        // Get the elements
        //   var from_input = $('#startingDate').pickadate(),
        //     from_picker = from_input.pickadate('picker')
        //   var to_input = $('#endingDate').pickadate(),
        //     to_picker = to_input.pickadate('picker')

        // Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
        //   if (from_picker.get('value')) {
        //     to_picker.set('min', from_picker.get('select'))
        //   }
        //   if (to_picker.get('value')) {
        //     from_picker.set('max', to_picker.get('select'))
        //   }

        // Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
        //   from_picker.on('set', function (event) {
        //     if (event.select) {
        //       to_picker.set('min', from_picker.get('select'))
        //     } else if ('clear' in event) {
        //       to_picker.set('min', false)
        //     }
        //   })
        //   to_picker.on('set', function (event) {
        //     if (event.select) {
        //       from_picker.set('max', to_picker.get('select'))
        //     } else if ('clear' in event) {
        //       from_picker.set('max', false)
        //     }
        //   })
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

    <!-- <script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script> -->


    <script>
        document.getElementById('showTableLink').addEventListener('click', function() {
            var table = document.getElementById('studentTable');
            if (table.style.display === 'none') {
                table.style.display = 'table';
            } else {
                table.style.display = 'none';
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggle-button");
            const toggleContent = document.getElementById("toggle-content");

            toggleButton.addEventListener("click", function() {
                if (toggleContent.style.display === "none") {
                    toggleContent.style.display = "block";
                } else {
                    toggleContent.style.display = "none";
                }
            });
        });
    </script>

</body>

</html>