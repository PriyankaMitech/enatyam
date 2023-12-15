<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Sub Courses List </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sub Courses List </li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sub Courses List </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Courses Name</th>

                            <th>Sub Courses Name</th>
                            <th>Action</th>
            
                        </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($sub_courses_data)){ $i=1;?>
                                <?php foreach($sub_courses_data as $data){  
                                    
                                    $session = \Config\Services::session();
                                    $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
                           
                                    // Get the 'id' from the session
                                    $courses_id = $data->courses_id;
                                    
                                    // Rest of your code
                                  
                           
                                    $wherecon = array('id' => $courses_id);
                           
                                    $alldata = $adminModel->getsinglerow('tbl_courses',  $wherecon);
                                    // echo "<pre>";print_r($alldata);exit();
                                   
                                    ?>
                                    <tr>
                                        <td><?=$i; ?></td>
                                        <td><?php if(!empty($alldata)){ echo $alldata->courses_name;} ?></td>
                                        <td><?=$data->sub_courses_name; ?></td>
                                        <td>
                                            <a href="edit_sub_courses/<?=$data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                            <a href="<?=base_url(); ?>delete/<?php echo base64_encode($data->id); ?>/tbl_sub_courses" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                        </td>
                                    
                                    </tr>
                                <?php $i++;} ?>
                        <?php } ?>
                    
                        </tbody>
             
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>      
    

 
