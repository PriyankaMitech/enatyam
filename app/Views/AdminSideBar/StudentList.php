<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>
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
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-top mb-3">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                href="#custom-tabs-four-home" role="tab"
                                                aria-controls="custom-tabs-four-home"
                                                aria-selected="false">GroupSession</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-four-profile" role="tab"
                                                aria-controls="custom-tabs-four-profile" aria-selected="true">One To One
                                                Session</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home"
                                            role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <div>
                                                <!-- Add search inputs for Course and Sub Course -->
                                                <label for="courseSearch">Search by Course:</label>
                                                <input type="text" id="courseSearch">
                                                <label for="subCourseSearch">Search by Sub Course:</label>
                                                <input type="text" id="subCourseSearch">
                                            </div>
                                            <table id="groupSessionTable" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Sub Course</th>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($groupSessionStudents as $student): ?>
                                                    <tr class="student-row" data-id="<?= $student->id ?>"
                                                        data-course="<?= $student->course ?>"
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
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-profile-tab">
                                            <table id="oneToOneSessionTable" class="table table-bordered">
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
                                    </div>
                                </div>
                                <form action="<?= base_url('SelectedForGroup') ?>" method="post">
                                    <div class="form-group">
                                        <label for="groupName">Group Name:</label>
                                        <input type="text" class="form-control" id="groupName" name="groupName"
                                            required>
                                        <!-- Display validation error for groupName if it exists -->
                                        <?= isset($validation) ? $validation->getError('groupName') : ''; ?>
                                    </div>
                                    <table class="table table-bordered" id="selectedRowsTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Course</th>
                                                <th>Sub Course</th>
                                            </tr>
                                        </thead>
                                        <tbody id="selectedRowsBody"></tbody>
                                    </table>
                                    <div class="text-right" style="margin-right: 41px;">
                                        <button type="submit" id="postSelectedRows" class="btn btn-primary">Create
                                            Group</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Selected Rows Table -->

        <script>
        $(document).ready(function() {
            var groupSessionTable = $('#groupSessionTable').DataTable();
            $('#selectedRowsTable').hide();
            $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
                if ($(this).prop('checked')) {
                    var rowData = $(this).closest('tr').clone();
                    rowData.find('td:first-child input').remove();
                    $('#selectedRowsBody').append(rowData);
                } else {
                    var rowIndex = $(this).closest('tr').index();
                    $('#selectedRowsBody tr').eq(rowIndex).remove();
                }
                updateRowNumbers();
                var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
                $('#selectedRowsTable').toggle(hasSelectedRows);
            });

            function toggleGroupNameInputVisibility() {
                var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
                $('#groupNameContainer').toggle(hasSelectedRows);
            }
            toggleGroupNameInputVisibility();
            $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
                toggleGroupNameInputVisibility();
            });
            $('#postSelectedRows').on('click', function() {
                var selectedRowIds = [];
                $('#selectedRowsBody tr').each(function() {
                    var rowId = $(this).attr('data-id');
                    selectedRowIds.push(rowId);
                });
                $('#selectedRowsTable').append('<input type="hidden" name="selectedRowIds" value="' +
                    selectedRowIds.join(',') + '">');
            });
            $('#courseSearch').on('input', function() {
                groupSessionTable.columns(3).search(this.value).draw();
            });
            $('#subCourseSearch').on('input', function() {
                groupSessionTable.columns(4).search(this.value).draw();
            });
        });

        function updateRowNumbers() {
            $('#selectedRowsBody tr').each(function(index) {
                $(this).find('td:first-child').text(index + 1);
            });
        }
        </script>

</body>

</html>