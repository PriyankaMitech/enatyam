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

      <!-- <div class="center">
        <div class="video-container">

            <h2><b style="margin-left: 82.5px;">Upload Media</b></h2>
            <form enctype="multipart/form-data" action="<?= site_url('uploadMedia'); ?>" method="POST">
                <div class="row" style="margin-left: 82.5px;">
                    <div class="col">
                        <input type="file" name="videoFile" id="videoFile" class="form-control-file">
                    </div>
                    <div class="col">
                        <input type="submit" value="Upload Video">
                    </div>
                </div>
                <div class="row" style="margin-left: 82.5px;">
                    <div class="col">
                        <input type="file" name="imageFile" class="form-control-file" accept="image/*">
                    </div>
                    <div class="col">
                        <input type="submit" value="Upload Image">
                    </div>
                </div>
            </form>
            
        </div>

    </div> -->
      <!-- <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
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
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
    </div> -->
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

</div>
</section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php'); ?>