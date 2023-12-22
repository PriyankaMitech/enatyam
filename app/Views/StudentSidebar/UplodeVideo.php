<?php echo view('Studentsidebar/Studentsidebar'); ?>

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
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Uplode video / Images</h3>
            </div>
            <form enctype="multipart/form-data" action="<?= site_url('uploadMedia'); ?>" method="POST">
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="Upoad Video">Upoad Video</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="videoFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit" value="Upload Video">Upload</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Upload Image">Upload Image </label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="imageFile" name="imageFile" accept="image/*">
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