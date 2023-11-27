<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <style>
    /* Style for buttons */
    .group-button {
        margin-right: 10px;
        cursor: pointer;
    }

    /* Style for records container */
    .group-records {
        border: 1px solid #ddd;
        padding: 10px;
        display: none;
        margin-top: 10px;
    }

    /* Style for table */
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

    /* Style for faculty dropdown */
    .faculty-dropdown {
        width: 100%;
    }
    </style>
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
                                                                <th>Faculty</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($records[$group['groupName']] as $record): ?>
                                                            <tr>
                                                                <td><?= $record->full_name; ?></td>
                                                                <td><?= $record->email; ?></td>
                                                                <td><?= $record->course; ?></td>
                                                                <td><?= $record->sub_course; ?></td>
                                                                <td>
                                                                    <!-- Dropdown menu for faculty -->
                                                                    <select class="faculty-dropdown" name="faculty">
                                                                        <?php foreach ($Faculty as $faculty): ?>
                                                                        <?php if ($faculty->course == $record->course && $faculty->sub_course == $record->sub_course): ?>
                                                                        <option value="<?= $faculty->id; ?>">
                                                                            <?= $faculty->full_name; ?>
                                                                        </option>
                                                                        <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <!-- Submit button within the form -->

                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>

                                                    </table>
                                                    <div class="text-right" style="margin-top: 10px;">
                                                        <?php if ($record->Assign_Techer_id !== null): ?>
                                                        <!-- If Assign_Techer_id is not null, show this button -->
                                                        <button type="submit" id="facultyButton"
                                                            class="btn btn-primary">Change Faculty</button>
                                                        <?php else: ?>
                                                        <!-- If Assign_Techer_id is null, show this button -->
                                                        <button type="submit" id="postSelectedRows"
                                                            class="btn btn-primary">Create Group</button>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.group-button');
        var recordsContainers = document.querySelectorAll('.group-records');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var group = this.getAttribute('data-group');
                var clickedRecordsContainer = document.querySelector('[data-group-id="' +
                    group + '-records"]');

                // Toggle the visibility of the records for the clicked group
                recordsContainers.forEach(function(container) {
                    if (container === clickedRecordsContainer) {
                        container.style.display = 'block';
                    } else {
                        container.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>

</body>

</html>