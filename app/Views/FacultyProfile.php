<!DOCTYPE html>
<html lang="en">
<?php $session = \Config\Services::session(); ?>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
   <!-- css added for hide save button priya -->
   <?php $session = \Config\Services::session(); ?>
   <style>
      #save {
         display: none
      }
   </style>
</head>

<body>
   <?php include(APPPATH . 'views/Navbar.php'); ?>
   <?php include(APPPATH . 'views/FacultySidebar2.php'); ?>
   <div class="content-wrapper" style="min-height: 1777.5px;">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 offset-3 mb-3">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                     <?php //$faculty_id = $session->get('faculty_id'); echo $faculty_id;die ?>
                     <form action="<?php echo base_url(); ?>insertProfile" method="post">
                        <div class="card-body box-profile">
                           <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle" src="public/images/priyanka.jpeg" alt="User profile picture">
                           </div>
                           <h3 class="profile-username text-center"></h3>
                           <p class="text-muted text-center">Kathak Dancer</p>
                           <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                 <b>joining Date</b> <a class="float-right">12-4-2021</a>
                              </li>
                              <!-- <div class="card-body">

                                
                                 <strong><i class="fas fa-user mr-1"></i> Name</strong>
                                 <p class="text-muted">
                                    <input class="form-control readonly-text" id="inputName" name="education" type="text" placeholder=" <?php
                                                                                                                                          $full_name = $session->get('username');
                                                                                                                                          echo $full_name;
                                                                                                                                          ?>" readonly>
                                 </p>
                                 <hr>

                                 <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                 <p class="text-muted">
                                    <input class="form-control readonly-text" id="inputEmail" name="email" type="text" placeholder=" <?php
                                                                                                                                       $email = $session->get('email');
                                                                                                                                       echo $email;
                                                                                                                                       ?>" readonly>
                                 </p>
                                 <hr>

                                 <strong><i class="fas fa-book mr-1"></i> Qualification</strong>
                                 <p class="text-muted">
                                    <input class="form-control readonly-text" id="inputEducation" name="education" type="text" placeholder="Enter your Qualification" value=" " readonly>
                                 </p>
                                 <hr>
                                 <strong><i class="fas fa-book mr-1"></i> Teaching Experience</strong>
                                 <p class="text-muted">
                                    <input class="form-control readonly-text" id="inputExperience" name="experience" type="text" placeholder="Enter your Experience" value=" " readonly>
                                 </p>
                                 <hr>
                                 <strong><i class="fas fa-map-marker-alt mr-1"></i> Country</strong>
                                 <input class="form-control readonly-text" id="inputCountry" name="current_address" type="text" placeholder="Enter your country" value=" " readonly>
                                 <hr>
                                 <strong><i class="fas fa-award-alt mr-1"></i> Awards</strong>
                                 <input class="form-control readonly-text" id="inputSkills" name="skills" type="text" placeholder="Enter your awards" value="" readonly>
                                 <button type="button" class="btn btn-outline-dark mt-3" id="edit"><a href="#">Edit</a></button>
                                 <button type="button" class="btn btn-outline-dark mt-3" id="save"><a href="#">Save</a></button>
                                 <hr>

                              </div> -->

                              <form method="post" action="<?php echo base_url();?>insertProfile" >
                                 <div class="card-body">
                                 <div class="form-group">
                                       <label for="inputName">Name</label>
                                       <input type="text" class="form-control" id="inputName" name="Faculty_name" placeholder= "<?php $full_name = $session->get('username');
                                                                                                                                          echo $full_name;
                                                                                                                                          ?>">
                                    </div>
                                    <div class="form-group">
                                       <label for="inputEmail">Email address</label>
                                       <input type="email" class="form-control" id="inputEmail" name="Faculty_Email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                       <label for="inputQualification">Qualification</label>
                                       <input type="text" class="form-control" id="inputQualification" name="Faculty_Qualification" placeholder="Enter Qualification">
                                    </div>
                                    <div class="form-group">
                                       <label for="inputExperience">Teaching Experience</label>
                                       <input type="text" class="form-control" id="inputExperience" name="Faculty_Experience" placeholder="Enter Teaching Experience">
                                    </div>
                                    <div class="form-group">
                                       <label for="inputCountry"> Country </label>
                                       <input type="text" class="form-control" id="inputCountry"  name="Faculty_Country"  placeholder="Enter Country">
                                    </div>
                                    <div class="form-group">
                                       <label for="inputAvailability">Availability</label>
                                       <input type="text" class="form-control" id="inputAvailability"  name="Faculty_Availability" placeholder="Enter Availability">
                                    </div>
                                    <!-- <div class="form-group">
                                       <label for="exampleInputFile">File input</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" class="custom-file-input" id="exampleInputFile">
                                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                          <div class="input-group-append">
                                             <span class="input-group-text">Upload</span>
                                          </div>
                                       </div>
                                    </div> -->
                                    <div class="form-check">
                                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                       <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                 </div>
                                 <!-- /.card-body -->

                                 <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </form>
                           </ul>
                        </div>
                  </div>
                  <!-- </div> -->
               </div>
               <!-- /.row -->
            </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>

   <!-- jQuery -->
   <!-- jQuery -->
   <script src="public/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE App -->
   <script src="public/dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="public/dist/js/demo.js"></script>
   <!-- js added for editable filelds priya  -->
   <script>
      jQuery(document).ready(function() {
         jQuery("#edit").click(function() {
            jQuery(".readonly-text").removeAttr("readonly");
            $('#inputLocation').focus();
            jQuery("#edit").css("display", "none");
            jQuery("#save").css("display", "block");


         });

      });
   </script>
</body>

</html>