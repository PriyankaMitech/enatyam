<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Menu List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Menu List</li>
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
                        <h3 class="card-title">Menu List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Menu Name</th>
                            <th>URL Location</th>
                            <th>Action</th>
            
                        </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($menu_data)){ $i=1;?>
                                <?php foreach($menu_data as $data){  ?>
                                    <tr>
                                        <td><?=$i; ?></td>
                                        <td><?=$data['menu_name']; ?></td>
                                        <td><?=$data['url_location']; ?></td>
                                        <td>
                                    
                                                    <a href="edit_menu/<?=$data['id']; ?>"><i class="far fa-edit me-2"></i></a>
                                                    <a href="<?=base_url(); ?>delete/<?php echo base64_encode($data['id']); ?>/tbl_menu" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                                
                                        
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
    

 
