<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <?php include(APPPATH . 'views/AdminSidebar.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>
</head>

<body>


    <div class="content-wrapper" style="min-height: 1172.73px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url() ?>Admindashboard" class="nav-link">Dashboard </a>
                            </li>
                            <li class="breadcrumb-item active">Admin Details</li>
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
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Admin List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <!-- <div>
                                                <label for="courseSearch">Search by Course:</label>
                                                <input type="text" id="courseSearch">
                                                <label for="subCourseSearch">Search by Sub Course:</label>
                                                <input type="text" id="subCourseSearch">
                                            </div> -->
                                            <table id="AdminListTable" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Password</th>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($adminUsers  as $admin) : ?>
                                                        <tr class="student-row">
                                                            <td><input type="checkbox" class="select-checkbox"></td>
                                                            <td><?= $admin['full_name'] ?></td>
                                                            <td><?= $admin['email'] ?></td>
                                                            <td><?= $admin['mobile_no'] ?></td>
                                                            <td><?= $admin['password'] ?></td>
                                                            <!-- Add more columns as needed -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>

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