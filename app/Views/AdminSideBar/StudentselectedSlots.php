
<?php echo view('AdminSideBar.php'); ?>
<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>

  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Schedule List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Schedule List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Schedule </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Faculty Name</th>
                                    <th>Days</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; ?>
                                <?php foreach ($schedule_data as $slot): ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $slot->student_name ?></td>
                                        <td><?= $slot->faculty_name ?></td>
                                        <td><?= $slot->days ?></td>
                                        <td><?= $slot->start_date ?></td>
                                        <td><?= $slot->end_date ?></td>
                                        <td><?= $slot->start_time ?></td>
                                        <td><?= $slot->end_time ?></td>
                                    </tr>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
</div>

  <?php echo view('AdminSideBar/AdminFooter.php');?>   

