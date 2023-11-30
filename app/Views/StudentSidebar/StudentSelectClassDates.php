<?php echo view('Studentsidebar/Studentsidebar');?>
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
</div>
<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Faculty Slots</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Faculty Slots</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Selelect Faculty Slots From This</h3>
                            </div>
                            <div class="card-body">
                                <form id="facultyForm" action="<?= base_url('selectedslotsfromstudent'); ?>"
                                    method="post">
                                    <!-- Hidden input for registerId -->
                                    <input type="hidden" name="registerId" value="<?= $registerId; ?>">

                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Faculty Name</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Select</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($assignFacultyData['assignFacultyData'] as $facultyData): ?>
                                            <tr>
                                                <td><?= $facultyData->full_name; ?></td>
                                                <td><?= $facultyData->date; ?></td>
                                                <td><?= $facultyData->start_time; ?></td>
                                                <td><?= $facultyData->end_time; ?></td>
                                                <td>
                                                    <!-- Submit button with the id value -->
                                                    <button type="submit" name="selectedId"
                                                        value="<?= $facultyData->id; ?>"
                                                        class="btn btn-block btn-success">Select</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
    
          </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php');?>      
   