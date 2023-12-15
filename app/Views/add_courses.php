<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add courses</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add courses</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add courses <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>set_courses" method="post" id="add_courses_form">
                            <div class="row card-body">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">

                                <div class="col-lg-12 col-md-3 col-12 form-group">
                                    <label for="courses_name">Courses Name</label>
                                    <input type="text" name="courses_name" class="form-control" id="courses_name"  placeholder="Enter courses Name" value="<?php if(!empty($single_data)){ echo $single_data->courses_name; } ?>">
                                    <span id="menu_nameError" style="color: red;"></span>

                                </div>
                               
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" value=""  name="submit" id="submit" class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
    
            </div>
    
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>      
    

 
