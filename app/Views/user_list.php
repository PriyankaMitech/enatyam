<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>User List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User List</li>
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
                        <h3 class="card-title">User List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                            
            
                        </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($user_data)){ $i=1;?>
                                <?php foreach($user_data as $data){  ?>
                                    <tr>
                                        <td><?=$i; ?></td>
                                        <td><?=$data['full_name']; ?></td>
                                        <td><?=$data['email']; ?></td>
                                        <td><?=$data['mobile_no']; ?></td>
                                        <td>
                                    
                                                    <a href="edit_user/<?=$data['id']; ?>"><i class="far fa-edit me-2"></i></a>
                                                    <a href="<?=base_url(); ?>delete/<?php echo base64_encode($data['id']); ?>/register" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                                
                                        
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
    

 
