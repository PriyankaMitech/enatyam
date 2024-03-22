<?php echo view('FacultySidebar2.php'); ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Payment Request</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Dashboard</a></li>
            <li class="breadcrumb-item active">Payment Request</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Send Message</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="messageForm" method="post" action="Payment_msg">
            <div class="card-body">
              <!-- <div class="form-group">
                <label for="recipient">Recipient:</label>
                <input type="text" class="form-control" id="recipient" placeholder="Enter recipient email">
              </div> -->
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="5" name="massage" id="message" placeholder="Enter your message"></textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

</div>

<?php echo view('FacultysideBar/FacultyFooter.php'); ?>