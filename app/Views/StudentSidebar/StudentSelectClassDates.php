<?php echo view('Studentsidebar/Studentsidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Faculty Slots</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
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
    <?php if ($assignFacultyData['assignFacultyData'] === null) : ?>
        <p>You have already selected a class Time .</p>
    <?php else : ?>
        <form id="facultyForm" action="<?= base_url('selectedslotsfromstudent'); ?>" method="post">
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
                    <?php if (!empty($assignFacultyData['assignFacultyData'])) : ?>
                        <?php foreach ($assignFacultyData['assignFacultyData'] as $facultyData) : ?>
                            <tr>
                                <td><?= $facultyData->full_name; ?></td>
                                <td><?= $facultyData->date; ?></td>
                                <td><?= $facultyData->start_time; ?></td>
                                <td><?= $facultyData->end_time; ?></td>
                                <td>
                                    <!-- Submit button with the id value -->
                                    <button type="submit" name="selectedId" value="<?= $facultyData->id; ?>" class="btn btn-block btn-success">Select</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">No available classes.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </form>
    <?php endif; ?>
</div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>