<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Student List Of Group</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Student List Of Group</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="card card-default">
                        <div class="row card-header">
                            <div class="col-md-6">
                                <h3 class="col-md-6 card-title">Search Group</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="<?=base_url();?>student_list_of_group" class="btn btn-primary ">Back</a>
                            </div>
                               
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url(); ?>serch_data_of_group" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Courses</label>
                                            <input type="hidden" id="id" name="id" value="<?php if (isset($single_data)) { echo ($single_data->id); } ?>">
                                            <select class="form-control" name="courses_id_g" id="courses_id_g" style="width: 100%;" >
                                                <option value="">Please select course</option>
                                                <?php if (!empty($courses_data)) { ?>
                                                    <?php foreach ($courses_data as $data) { ?>
                                                        <option value="<?= $data->id; ?>" <?= set_select('courses_id_g', $data->id, isset($session) && $session->courses_id_g == $data->id); ?>>
                                                            <?= $data->courses_name; ?>
                                                        </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sub Courses</label>
                                            <input type="hidden" id="selected_sub_courses_id_g" name="selected_sub_courses_id_g" value="<?php $session = session(); echo $session->sub_courses_id_g; ?>">
                                            <select name="sub_courses_id_g" id="sub_courses_id_g" class="form-control">
                                                <option value="">Please select sub courses</option>
                                                <!-- Add your sub-courses options here -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Student List Of Group</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Courses Name / Sub Courses Name</th>
                            <th>Group Name</th>

                            <th>Student Name</th>
                            <th>Faculty Name</th>
                            <th>Created Group Date</th>
                            <th>Session Start Date</th>


                            <th>Action</th>
            
                        </tr>
                        </thead>
                        <?php if(!empty($group_data)){ ?>

                            <tbody>
                            <?php if(!empty($group_data)){ $i=1;?>
                                <?php foreach($group_data as $data){  
                                    
                                    
                                    $session = \Config\Services::session();
                                    $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
                                    $wherec1 = array('D_id ' => $data->faculty_id_g);


                                    $falculty_data = $adminModel->getsinglerow('carrier',$wherec1);

                                    $wherec2 = array('id ' => $data->courses_id_g);


                                    $courses_data = $adminModel->getsinglerow('tbl_courses',$wherec2);

                                    $wherec3 = array('id ' => $data->sub_courses_id_g);


                                    $subcourses_data = $adminModel->getsinglerow('tbl_sub_courses',$wherec3);


                                    $student_id = explode(',', $data->student_id);

                                    $studentNames = array(); // To store student names
                                    $wherec = '';


                                    if (!empty($student_id)) {
                                        // echo "<pre>";print_r($student_id);
                                        foreach ($student_id as $student_id_data) {
                                            // echo "<pre>";print_r($student_id_data);
                                                $wherec = array('id' => $student_id_data);
                                            // Assuming you have a method in your model to get student names by ID
                                            $student = $adminModel->getsinglerow('register',$wherec);
                                            // echo "<pre>";print_r($student);exit();


                                            // Assuming the method returns an object with a 'name' property
                                            $studentNames[] = $student->full_name;

                                            // echo "<pre>";print_r($student);exit();

                                        }
                                    }


                                  
                                    

                                    ?>
                                    <tr>
                                        <td><?=$i; ?></td>
                                        <td><?php if(!empty($courses_data)){ echo $courses_data->courses_name; } ?> - <?php if(!empty($subcourses_data)){ echo $subcourses_data->sub_courses_name; } ?></td>
                                   


                                        <td><?=$data->group_name; ?></td>

                                    
                                        <td>
                                            <?php $x= 1;
                                                foreach ($studentNames as $studentName) {
                                                    echo $x . ') ' . $studentName . '<br>';
                                                    $x++; // Increment the counter
                                            }
                                            ?>
                                        </td>

                                        </td>                                        
                                        <td><?php if(!empty($falculty_data)){ echo $falculty_data->name; } ?></td>
                                        <td><?= date('j F Y', strtotime($data->created_on)); ?></td>
                                        <td><?= date('j F Y', strtotime($data->session_start_date)); ?></td>



                                        <td>
                                            <a href="edit_group/<?=$data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                            <a href="<?=base_url(); ?>delete/<?php echo base64_encode($data->id); ?>/tbl_menu" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                        </td>
                                    
                                    </tr>
                                <?php $i++;} ?>
                        <?php } ?>
                    
                        </tbody>

                        <?php }else{ ?>

                        <tbody>
                            <?php if(!empty($student_list_of_group)){ $i=1;?>
                                <?php foreach($student_list_of_group as $data){  
                                    
                                    
                                    $session = \Config\Services::session();
                                    $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly
                                    $wherec1 = array('D_id ' => $data->faculty_id_g);


                                    $falculty_data = $adminModel->getsinglerow('carrier',$wherec1);

                                    $wherec2 = array('id ' => $data->courses_id_g);


                                    $courses_data = $adminModel->getsinglerow('tbl_courses',$wherec2);

                                    $wherec3 = array('id ' => $data->sub_courses_id_g);


                                    $subcourses_data = $adminModel->getsinglerow('tbl_sub_courses',$wherec3);


                                    $student_id = explode(',', $data->student_id);

                                    $studentNames = array(); // To store student names
                                    $wherec = '';


                                    if (!empty($student_id)) {
                                        // echo "<pre>";print_r($student_id);
                                        foreach ($student_id as $student_id_data) {
                                            // echo "<pre>";print_r($student_id_data);
                                                $wherec = array('id' => $student_id_data);
                                            // Assuming you have a method in your model to get student names by ID
                                            $student = $adminModel->getsinglerow('register',$wherec);
                                            // echo "<pre>";print_r($student);exit();


                                            // Assuming the method returns an object with a 'name' property
                                            $studentNames[] = $student->full_name;

                                            // echo "<pre>";print_r($student);exit();

                                        }
                                    }


                                  
                                    

                                    ?>
                                    <tr>
                                        <td><?=$i; ?></td>
                                        <td><?php if(!empty($courses_data)){ echo $courses_data->courses_name; } ?> - <?php if(!empty($subcourses_data)){ echo $subcourses_data->sub_courses_name; } ?></td>
                                   


                                        <td><?=$data->group_name; ?></td>

                                    
                                        <td>
                                            <?php $x= 1;
                                                foreach ($studentNames as $studentName) {
                                                    echo $x . ') ' . $studentName . '<br>';
                                                    $x++; // Increment the counter
                                            }
                                            ?>
                                        </td>

                                        </td>                                        
                                        <td><?php if(!empty($falculty_data)){ echo $falculty_data->name; } ?></td>
                                        <td><?= date('j F Y', strtotime($data->created_on)); ?></td>
                                        <td><?= date('j F Y', strtotime($data->session_start_date)); ?></td>



                                        <td>
                                            <a href="edit_group/<?=$data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                            <a href="<?=base_url(); ?>delete/<?php echo base64_encode($data->id); ?>/tbl_menu" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                        </td>
                                    
                                    </tr>
                                <?php $i++;} ?>
                        <?php } ?>
                    
                        </tbody>
                        <?php } ?>
             
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
    

 
