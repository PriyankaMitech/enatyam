<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));

    if (isset($_SESSION['sessiondata'])) {
        $role = $_SESSION['sessiondata']['role'];
        if ($role == 'Faculty') {
            include('FacultySidebar2.php');
        } elseif ($role == 'Student') {
            include('StudentSidebar/Studentsidebar.php'); 
        } else {
            include('AdminSideBar.php');
        }
    }

?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


      <div class="row">
    <div class="col-md-12">
        <!-- Box Comment -->
        <div class="card card-widget">
            <!-- /.card-body -->
            <div class="card-body card-comments">
            <?php
            $todayDate = date('Y-m-d H:i:s');
            usort($notifications, function ($a, $b) {
                return strtotime($a['timestamp']) - strtotime($b['timestamp']);
            });

            foreach ($notifications as $notification):
                $notificationDate = strtotime($notification['timestamp']);
                $todayDateTime = strtotime($todayDate);

                // Only show notifications with timestamps equal to or after today
            ?>
                    <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?php echo base_url()?>dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            <?= $notification['full_name'] ?>

                                <span class="text-muted float-right"><?php echo $notification['timestamp']; ?></span>
                            </span><!-- /.username -->
                            <?php echo $notification['notification_description']; ?>
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.card-comment -->
                    <?php
endforeach;
?>
            </div>
            <!-- /.card-footer -->

            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
</div>

        <!-- /.row -->


 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

  <?php
    if (isset($_SESSION['sessiondata'])) {
        $role = $_SESSION['sessiondata']['role'];
        if ($role == 'Faculty' || $role == 'Admin' || $role == 'student') {
            echo view('FacultysideBar/FacultyFooter');
        } elseif ($role == 'Student') {
            echo view('StudentSidebar/StudentFooter');
        } else {
            echo view('AdminSideBar/AdminFooter');
        }
    }
?>

