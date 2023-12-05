<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper" style="min-height: 1172.73px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>AdminList</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">AdminList</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
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
                                            aria-controls="custom-tabs-four-home" aria-selected="false">Admin List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="true">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
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
</div>
    <?php echo view('AdminSideBar/AdminFooter.php');?>