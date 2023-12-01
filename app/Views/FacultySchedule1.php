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
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url(); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(''); ?>logout" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>
</div>
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Demo List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item active">Demo List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- <button class="btn btn-warning" onclick="showTable1()">Today Demo</button>
            <button class="btn btn-info" onclick="showTable2()"> Demo List</button> -->

            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Today Demo 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Demo List 1</a></li>

                </ul>
            </div><!-- /.card-header -->
            <table id="table1" style="display: none; width: 100%;border-collapse: collapse;border: 1px solid #ccc;margin-top: 26px;">
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
                                <?php ?> <button type="button" class="btn btn-secondary">Take Demo</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <table id="table2" style=" width: 100%;border-collapse: collapse;border: 1px solid #ccc;margin-top: 26px;">
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
    </section>
</div>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>