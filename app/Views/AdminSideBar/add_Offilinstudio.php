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
                        <li class="breadcrumb-item active"><a href="<?=base_url(); ?>list_Offilinstudio">Offilinstudio List</a></li>
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
                <h3 class="card-title">Add Offline Studio</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="addoffstudio" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_no">Contact Number</label>
                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Enter Contact Number" required>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control-file" id="img" name="img">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter Address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="google_location">Google Location</label>
                        <input type="text" class="form-control" id="google_location" name="google_location" placeholder="Enter Google Location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>

</div>

<?php echo view('AdminSideBar/AdminFooter');?>
