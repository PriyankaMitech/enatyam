<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>
</head>
<body>
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
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Give Slots</h1>
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
                <form action="selectStudentSchedule" method="post" id="appointmentForm">
                <input type="hidden" name="register_student_id" value="<?= $registerId; ?>">
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