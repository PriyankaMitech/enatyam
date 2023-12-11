
<?php echo view('FacultySidebar2'); ?>

<style>
    table th {
        padding: 10px;
        text-align: left;
        background-color: #f2f2f2;
    }

    table td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .reschedule-button {
        background-color: #FF6347;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .take-demo-button {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Demo List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>FacultyDashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Demo List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">


                </div>
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Today's Demos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Demo List</a>
                                </li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <?php if (!empty($data)) : ?>
                                        <!-- If $data is not empty, display the table -->
                                        <table id="table1" style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; margin-top: 26px;">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date/Time</th>
                                                    <th>Course/subcorce</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $item) : ?>
                                                    <tr>
                                                        <td><?= $item['name']; ?></td>
                                                        <td><?= $item['Book_Date_Time'] ?></td>
                                                        <td><?= $item['course']; ?>/<?= $item['sub_course']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary">Take Demo</button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php else : ?>
                                        <!-- If $data is empty, display a message -->
                                        <p>No demos today.</p>
                                    <?php endif; ?>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->

                                    <table id="table2" style="width: 100%;border-collapse: collapse;border: 1px solid #ccc;margin-top: 26px;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Date/Time</th>
                                                <th>Course</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($allData as $ite) : ?>
                                                <tr>
                                                    <td><?= $ite['name']; ?></td>
                                                    <td> <?php
                                                            if ($ite['Reshedule_date'] !== null) {
                                                                echo $ite['Reshedule_date'] . ' ' . $ite['Reshedule_Time'];
                                                            } else {
                                                                echo $ite['Book_Date_Time'];
                                                            }
                                                            ?></td>
                                                    <td><?= $ite['course']; ?></td>

                                                    <td>
                                                        <?php
                                                        $today = date('Y-m-d');
                                                        $demoDate = date('Y-m-d', strtotime($ite['Book_Date_Time']));

                                                        if ($today < $demoDate) {
                                                            echo '<p style="background-color: darkgoldenrod;">Be ready For Take Demo</p>';
                                                        } elseif ($ite['Reshedule_date'] !== null && strtotime($ite['Reshedule_date']) > strtotime($today)) {
                                                            echo '<p style="background-color: aquamarine;">Be ready For Take Demo</p>';
                                                        } else {
                                                            echo '<p style="background-color: aquamarine;">Wait For Reschedule</p>';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">

                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>