<?php echo view('StudentSidebar/Studentsidebar'); ?>

<?php

$session = session();
if (empty($session->sessiondata['Assign_Techer_id'])) {
  // Display an error message
  $session->setFlashdata('errormessage', 'You cannot upload a video because you do not have a faculty assigned.'); ?>

  <!-- Redirect or display a message and stop rendering the view -->
  <div class="content-wrapper">
    <?php echo '<div class="alert alert-danger uploadVideoError">You cannot upload a video because you do not have a faculty assigned.</div>'; ?>
  </div>
<?php echo view('StudentSidebar/StudentFooter.php');
  exit;
} // Stop rendering the view  
?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <?php
  $session = session();
  if (empty($session->sessiondata['Assign_Techer_id'])) {

    $session->setFlashdata('errormessage', 'You cannot upload a video because you do not have a faculty assigned.');
  } ?>
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Upload video / Images</h3>
            </div>
            <form enctype="multipart/form-data" action="<?= site_url('uploadMedia'); ?>" method="POST">
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="UploadVideo">Upload Video</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="videoFile" name="videoFile" onchange="updateLabel('videoFile')">
                          <label class="custom-file-label" for="videoFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit" value="Upload Video">Upload</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="UploadImage">Upload Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="imageFile" name="imageFile" accept="image/*" onchange="updateLabel('imageFile')">
                          <label class="custom-file-label" for="imageFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit" value="Upload Image">Upload</button>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


<?php echo view('StudentSidebar/StudentFooter.php'); ?>