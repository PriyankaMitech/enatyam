<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <style>
    .btn-secondary {
        margin-left: 255px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    thead {
        background-color: antiquewhite;
    }

    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
    }
    </style> -->
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
    <div class="content-wrapper" style="min-height: 1172.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Demo Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Demo Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="sticky-top mb-3">
                <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">GroupSession</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">One To One Session</a>
                    </li>
                  
                
                    </ul>
                </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel"               aria-labelledby="custom-tabs-four-home-tab">
             <table class="table table-bordered">
                  <thead>
                     <tr>
                     <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Sub Course</th>

                     </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($groupSessionStudents as $student): ?>
                    <tr class="student-row" data-course="<?= $student->course ?>"
                        data-subcourse="<?= $student->sub_course ?>">
                        <td><input type="checkbox" class="select-checkbox"></td>
                        <td><?= $student->full_name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->course ?></td>
                        <td><?= $student->sub_course ?></td>
                        
                        <!-- Add more columns as needed -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
                    </div>
                    <div class="tab-pane fade " id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                     
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Sub Course</th>
                        <!-- Add more columns as needed -->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($OneToOneSession as $student): ?>
                    <tr class="student-row" data-course="<?= $student->course ?>"
                        data-subcourse="<?= $student->sub_course ?>">
                        
                        <td><?= $student->full_name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->course ?></td>
                        <td><?= $student->sub_course ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
          </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                    
                    </tr>
                    </thead>
                    <tbody> 
                    </tbody>
                   
            </table>
                    </div>
                    
                    </div>
                </div>
              
                </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <table class="table table-bordered" id="selectedRowsTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Sub Course</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody id="selectedRowsBody"></tbody>
</table>
  </div>
  <script>
$(document).ready(function() {
    // Hide the selected rows table initially
    $('#selectedRowsTable').hide();

    // Handle checkbox change in the main tables
    $('.select-checkbox').change(function() {
        if ($(this).prop('checked')) {
            // If checkbox is checked, get the corresponding row data
            var rowData = $(this).closest('tr').clone();

            // Append the row data to the selected rows table
            $('#selectedRowsBody').append(rowData);
        } else {
            // If checkbox is unchecked, remove the corresponding row from the selected rows table
            var rowIndex = $(this).closest('tr').index();
            $('#selectedRowsBody tr').eq(rowIndex).remove();
        }

        // Check if there are selected rows
        var hasSelectedRows = $('#selectedRowsBody tr').length > 0;

        // Show or hide the selected rows table based on whether there are selected rows
        $('#selectedRowsTable').toggle(hasSelectedRows);
    });
});
</script>
</body>

</html>