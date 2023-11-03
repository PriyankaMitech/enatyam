<?php include('StudentSidebar/sidebar.php');?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile Mangement</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Profile Mangement</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profile Mangement</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
             
                  <form method="post" action="<?php echo base_url();?>update_profile_data">
                  <input type="hidden" class="form-control" name="id" id="id" placeholder="Enter id" value="<?php if(!empty($user_data)){ echo $user_data->id; } ?>"/>

                  <input type="hidden" class="form-control" name="role" id="role" placeholder="Enter role" value="<?php if(!empty($user_data)){ echo $user_data->role; } ?>"/>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php if(!empty($user_data)){ echo $user_data->full_name; } ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="<?php if(!empty($user_data)){ echo $user_data->email; } ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMobileno1">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Enter mobile" value="<?php if(!empty($user_data)){ echo $user_data->mobile_no; } ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1" 
                                name="password"
                                placeholder="Password" value="<?php if(!empty($user_data)){ echo $user_data->password; } ?>"
                                />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputCPassword1">Confirm Password</label>
                                <input
                                type="password"
                                class="form-control"
                                id="exampleInputCPassword1"
                                name="cpassword"
                                placeholder="Confirm Password" value="<?php if(!empty($user_data)){ echo $user_data->confirm_pass; } ?>"
                                />
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-primary" name="submit" value="submit">
                          Submit 
                        </button> -->
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">
                        </div>
                    </form>
                </div>
                <!-- /.card -->

          
              </div>
              <!--/.col (left) -->
              <!-- right column -->
       
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include('StudentSidebar/footer.php');?>