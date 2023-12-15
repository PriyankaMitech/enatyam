<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add sub courses</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add sub courses</li>
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
                            <h3 class="card-title">Add sub courses <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>set_sub_courses" method="post" id="add_sub_courses_form">
                            <div class="row card-body">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">

                            <div class="col-lg-12 col-md-3 col-12 form-group">
                                    <label for="courses_id">Courses Name</label>

                                    <select name="courses_id" id="courses_id" class="form-control">
                                                <option>Select courses</option>
                                                <?php if(!empty($courses_data)){?>
                                                <?php foreach ($courses_data as $data){ ?>
                                               
                                                <option value="<?=$data->id; ?>"
                                                    <?php if ((!empty($single_data)) && $single_data->courses_id === $data->id ) { echo 'selected'; } ?>>
                                                    <?= $data->courses_name; ?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>


                                </div>
                                <div class="col-lg-12 col-md-3 col-12 form-group">
                                    <label for="sub_courses_name">Sub Courses Name</label>
                                    <input type="text" name="sub_courses_name" class="form-control" id="sub_courses_name"  placeholder="Enter courses Name" value="<?php if(!empty($single_data)){ echo $single_data->sub_courses_name; } ?>">

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
    

 
