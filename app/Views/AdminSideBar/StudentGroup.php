<?php echo view('AdminSideBar.php'); ?>
    <style>
    .group-button {
        margin-right: 10px;
        cursor: pointer;
    }

    .group-records {
        border: 1px solid #ddd;
        padding: 10px;
        display: none;
        margin-top: 10px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .faculty-dropdown {
        width: 100%;
    }

    </style>


    <div class="content-wrapper" style="min-height: 1172.73px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Groups of Student</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Groups of Student</li>
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

                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home"
                                            role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                                            <div class="group-buttons-container">
                                                <?php foreach ($groups as $group): ?>
                                                <button class="group-button btn-primary"
                                                    data-group="<?= $group['groupName'] ?>">
                                                    <?= $group['groupName'] ?>
                                                </button>
                                                <?php endforeach; ?>
                                            </div>

                                            <?php foreach ($groups as $group): ?>
                                            <div class="group-records"
                                                data-group-id="<?= $group['groupName'] ?>-records">
                                                <form action="<?= base_url('AssignFacultyToGroup') ?>" method="post">
                                                    <input type="hidden" name="group"
                                                        value="<?= $group['groupName'] ?>">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Course</th>
                                                                <th>Sub-course</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($records[$group['groupName']] as $record): ?>
                                                            <tr>
                                                                <td><?= $record->full_name; ?></td>
                                                                <td><?= $record->email; ?></td>
                                                                <td><?= $record->course; ?></td>
                                                                <td><?= $record->sub_course; ?></td>
                                                                <!-- Remove the dropdown from here -->

                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>

                                                    <div class="text-left" style="margin-top: 10px;">
                                                        <!-- Label and dropdown in the same row -->
                                                        <label for="facultyDropdown" style="margin-right: 10px;">Select
                                                            Faculty:</label>

                                                        <!-- Dropdown menu for faculty with reduced size -->
                                                        <select class="faculty-dropdown" name="faculty"
                                                            id="facultyDropdown" style="width: 135px;">
                                                            <?php foreach ($Faculty as $faculty): ?>
                                                            <?php if ($faculty->course == $record->course && $faculty->sub_course == $record->sub_course): ?>
                                                            <option value="<?= $faculty->id; ?>">
                                                                <?= $faculty->full_name; ?>
                                                            </option>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>

                                                        <?php if ($record->Assign_Techer_id !== null): ?>
                                                        <!-- If Assign_Techer_id is not null, show this button -->
                                                        <button type="submit" id="facultyButton"
                                                            class="btn btn-primary">Change Faculty</button>
                                                        <?php else: ?>
                                                        <!-- If Assign_Techer_id is null, show this button -->
                                                        <button type="submit" id="postSelectedRows"
                                                            class="btn btn-primary">Assign Teacher</button>
                                                        <?php endif; ?>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php endforeach; ?>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
        </section>

    </div>
<?php echo view('AdminSideBar/AdminFooter.php');?> 
