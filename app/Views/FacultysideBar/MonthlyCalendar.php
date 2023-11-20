<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>

    <link rel="stylesheet" href="dist/css/style.css">
  
</head>
<body class="hold-transition sidebar-mini">
  <?php echo view('FacultySidebar2'); 
  // include('FacultySidebar2.php');?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url(); ?>/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
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
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url(); ?>/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="<?=base_url(); ?>/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="<?=base_url(); ?>/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Set Shedule</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Set Shedule</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->

        <!-- /.card -->




        <div class="row">

          <!-- /.col (left) -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Set Shedule</h3>
              </div>
              <div class="row card-body">
                <!-- Date -->
        
                <!-- Date and time -->
                <div class="col-md-4 form-group">
                  <label>Date:</label>
                    <div class="input-group " >
                        <input type="date" class="form-control" name="form_date" id="form_date"/>
                       
                    </div>
                </div>


                <div class="col-md-4 form-group">
                  <label>Star Time:</label>
                    <div class="input-group " >
                        <input type="time" class="form-control" name="form_time" id="form_time"/>
                       
                    </div>
                </div>


                <!-- <div class="col-md-6 form-group">
                  <label>To Date:</label>
                    <div class="input-group " >
                        <input type="date" class="form-control" name="to_date" id="to_date"/>
                       
                    </div>
                </div> -->


                <div class="col-md-4 form-group">
                  <label>End Time:</label>
                    <div class="input-group " >
                        <input type="time" class="form-control" name="to_time" id="to_time"/>
                       
                    </div>
                </div>

                <div class="col-md-4 p-2">
                  <button type="button" class="btn btn-primary"  id="addAppointment">Add More Shedule</button>

                </div>

                <div class="col-md-12 " >
                <form action="FacultyController/selectfacultySchedule" method="post" id="appointmentForm">
                <input type="hidden" name="faculty_register_id" value="<?= $registerId; ?>">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Shedule Data</h3>
                    </div>
                    <div class="card-body p-0" id="selectedAppointments" >
                      <table class="table table-striped">
                        <thead>
                          <tr>
                      
                            <th>Date</th>
                            <th>Star Time</th>
                            <!-- <th>To Date</th> -->
                            <th>End Time</th>
                            
                          </tr>
                        </thead>
                        <tbody>
              
                        </tbody>
                      </table>
                    </div>
                  
                  </div>
                  <div class="col-md-4 p-2">
                      <button type="submit" class="btn btn-success"  >Save Data</button>
                    </div>
                  </form>
                </div>
           
          </div>

       

     
       
              </div>
         
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       

      
          </div>
          <!-- /.col (right) -->

        </div>
        <!-- /.row -->
 
    
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
 
    <strong>Copyright &copy; 2023-2024 <a href="https://mitech">MI-TECH</a>.</strong> All rights reserved.
  </footer>


</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const addAppointmentButton = document.getElementById("addAppointment");
    const formDatesInput = document.getElementById("form_date");

    const currentDate = new Date().toISOString().split("T")[0];
    formDatesInput.min = currentDate;

    const formTimeInput = document.getElementById("form_time");
    const toTimeInput = document.getElementById("to_time");

    const selectedAppointmentsContainer = document.querySelector("#selectedAppointments table tbody");

    // Set min time for "form_time" input based on current time
    const currentHour = new Date().getHours();
    const currentMinute = new Date().getMinutes();
    const currentTimeString = `${currentHour.toString().padStart(2, "0")}:${currentMinute.toString().padStart(2, "0")}`;
    formTimeInput.min = currentTimeString;

    formTimeInput.addEventListener("input", function() {
        toTimeInput.min = this.value;
        toTimeInput.value = this.value; // Automatically set "to_time" to match "form_time"
    });

    addAppointmentButton.addEventListener("click", function() {
        const selectedformDate = formDatesInput.value;
        const selectedformTime = formTimeInput.value;
        const selectedtoTime = toTimeInput.value;

        if (selectedformDate && selectedformTime && selectedtoTime) {
            const tr = createTableRow(selectedformDate, selectedformTime, selectedtoTime);
            selectedAppointmentsContainer.appendChild(tr);

            formDatesInput.value = "";
            formTimeInput.value = "";
            toTimeInput.value = "";
        }
    });

    function createTableRow(formdate, formtime, totime) {
        const tr = document.createElement("tr");
        const formdateTd = document.createElement("td");
        const formtimeTd = document.createElement("td");
        const totimeTd = document.createElement("td");

        formdateTd.textContent = formdate;
        formtimeTd.textContent = formtime;
        totimeTd.textContent = totime;

        tr.appendChild(formdateTd);
        tr.appendChild(formtimeTd);
        tr.appendChild(totimeTd);

        return tr;
    }

    document.getElementById("appointmentForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const selectedDateInputs = selectedAppointmentsContainer.querySelectorAll("td:first-child");
        const formTimeInputs = selectedAppointmentsContainer.querySelectorAll("td:nth-child(2)");
        const toTimeInputs = selectedAppointmentsContainer.querySelectorAll("td:last-child");

        const selectedAppointments = [];

        selectedDateInputs.forEach((dateTd, index) => {
            selectedAppointments.push({
                date: dateTd.textContent,
                formTime: formTimeInputs[index].textContent,
                toTime: toTimeInputs[index].textContent
            });
        });

        const selectedAppointmentsJSON = JSON.stringify(selectedAppointments);

        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "selected_appointments";
        hiddenInput.value = selectedAppointmentsJSON;
        this.appendChild(hiddenInput);

        this.submit();
    });
});

    
</script>


</body>
</html>
