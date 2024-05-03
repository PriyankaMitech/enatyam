<?php echo view('AdminSideBar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Offilinstudio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Offilinstudio</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Add Offline Studio Form -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Offline Studios</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Pincode</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($offlineStudios)) {
                $i = 1;
                foreach ($offlineStudios as $studio) { ?>
                    <tr>
                        <td><?php echo $i; ?></td> <!-- Corrected this line -->
                        <td><?php echo $studio->pincode; ?></td>
                        <td><?php echo $studio->address; ?></td>
                        <td>
                            <form action="deletoffline" method="post">
                                <input type="hidden" name="id" value="<?php echo $studio->id; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php $i++;
                }
            } ?>
        </tbody>
    </table>
</div>


                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>

<?php echo view('AdminSideBar/AdminFooter');?>