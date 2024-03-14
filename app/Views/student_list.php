<?php include('AdminSideBar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Payment Status</th>
                        <th>Renewal Status</th>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Course - Sub Course</th>
                        <th>Faculty Name</th>
                        <th>Session Type</th>
                        <th>Group Name</th>
                        <th>Session Start Date</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                          // echo "<pre>";print_r($student_list);exit();

                    if(!empty($student_list)){ $i='1';?>
                    <?php foreach ($student_list as $data) {
                      $adminModel = new \App\Models\AdminModel(); //
                      $wherecon = array('student_registerid' => $data->id);
                      $orderby = array('date' => 'DESC');
                      $attendeance_details = $adminModel->getsingleroworderby('attendeance_table', $wherecon, $orderby);

                      $days = 0;
                      if($data->SessionsCount){
                      $days= $data->SessionsCount;

                      }

                      if(!empty($attendeance_details)){

                        $wherecon = array('id' => $attendeance_details->payment_id);

                      $payment_details = $adminModel->getsinglerow('payment', $wherecon);

                      if(!empty($payment_details)){

                      $days = $payment_details->no_of_session -  $attendeance_details->Session_no;
                      }

                      // echo $days;


                      
                      }
                      



                      // echo "<pre>";print_r($attendeance_details);exit();
    

                      
                      $createdAt = strtotime($data->created_at);
                      $currentDate = strtotime(date("Y-m-d"));
                      $tenDaysAgo = strtotime("-10 days");
                      $new = "";
                      if (
                          $createdAt >= $tenDaysAgo &&
                          ($createdAt = $currentDate)
                      ) {
                          $new = '<small class="badge badge-info">New</small>';
                      }
                      ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?php if($data->Payment_status == 'Y'){ ?>
                              <small class="badge badge-success">Done</small>

                                
                              <?php }else{ ?>
                               
                                <small class="badge badge-danger"> Not Done</small>

                                <?php } ?>
                          
                            </td>
                            <td><?php if($days == '0') { ?> <?php if($data->Payment_status == 'N'){ ?>  <small class="badge badge-danger"> Plase Pay </small> <?php }else{ ?> <small class="badge badge-success"> <?php echo $days ?> Days For Renewal</small> <?php } ?> <?php }else if($days == '2' && $days == '1'){  ?><small class="badge badge-danger"> <?php echo $days; ?> days Remaining For Renewal Please Hurry Up.</small>  <?php }else{ ?> <small class="badge badge-success"> <?php echo $days ?> Days For Renewal</small> <?php } ?></td>
                            <td style="width:100px"><p><?= $data->full_name ?><sup> <?php echo $new; ?></sup></p></td>
                            <td><?= $data->email; ?></td>
                            <td><?= $data->courses_name; ?> - <?= $data->sub_courses_name; ?></td>
                            <td><?= $data->teacher_name; ?></td>
                            <td><?= $data->SessionType; ?></td>

                            <td><?= $data->groupName; ?></td>
                            <?php
                            if (!empty($data->Session_Start_Date)) {
                                $formattedDate = date('j F Y', strtotime($data->Session_Start_Date));
                                echo "<td>{$formattedDate}</td>";
                            } else {
                                echo "<td>No date available</td>";
                            }
                            ?>
                        </tr>
                        <?php $i++;} ?>
                        <?php } ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php echo view('AdminSideBar/AdminFooter.php');?>

