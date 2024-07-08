<?php
$file = __DIR__ . "/Studentsidebar.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>


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
 <style>
    /* Loader styling */
    .loader {
      border: 8px solid #f3f3f3;
      border-radius: 50%;
      border-top: 8px solid #3498db;
      width: 60px;
      height: 60px;
      animation: spin 2s linear infinite;
      position: fixed;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      display: none;
      z-index: 1000;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Overlay to cover the page */
    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }
  </style>
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

      <!-- <div class="row">
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
                    <div class="form-group">
                      <label for="UploadPDF">Upload PDF</label>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="pdfFile" name="pdfFile" accept="application/pdf" onchange="updateLabel('pdfFile')">
                              <label class="custom-file-label" for="pdfFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="submit" value="Upload PDF">Upload</button>
                          </div>
                      </div>
                  </div>

 


                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div> -->
      <div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Upload video / Images</h3>
      </div>
      <form enctype="multipart/form-data" action="<?= site_url('uploadMedia'); ?>" method="POST" id="uploadForm">
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
              <div class="form-group">
                <label for="UploadPDF">Upload PDF</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdfFile" name="pdfFile" accept="application/pdf" onchange="updateLabel('pdfFile')">
                        <label class="custom-file-label" for="pdfFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" value="Upload PDF">Upload</button>
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
<div class="overlay" id="overlay"></div>
<div class="loader" id="loader"></div>
    </div>
  </section>

</div>


<?php
$file = __DIR__ . "/StudentFooter.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>
<script>
  // Function to update the label of the file input
  function updateLabel(inputId) {
    const input = document.getElementById(inputId);
    const label = input.nextElementSibling;
    const fileName = input.files[0] ? input.files[0].name : 'Choose file';
    label.innerText = fileName;
  }

  $(document).ready(function () {
    // Attach the submit event to show the loader
    $('#uploadForm').on('submit', function (e) {
      $('#overlay').show();
      $('#loader').show();
    });
  });
</script>