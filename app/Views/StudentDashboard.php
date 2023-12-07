<?php echo view('Studentsidebar/Studentsidebar'); ?>
<style>
    .notification-dropdown {
        max-height: 300px; /* Adjust the maximum height as needed */
        overflow-y: auto;
    }

    .notification-scroll {
        overflow-x: hidden;
        overflow-y: auto;
        max-height: 200px; /* Adjust the maximum height for side-scrolling */
    }
</style>
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>logout" class="nav-link">Logout</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <?php
    // Get today's date and time in the required format
    $todayDate = date('Y-m-d H:i:s');
?>

<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <?php
            // Initialize the count
            $displayedNotificationCount = 0;
        ?>
        <span class="badge badge-danger navbar-badge">
            <?php foreach ($notifications as $key => $notification):
                $notificationDate = $notification['timestamp'];
                // Only count notifications with timestamps equal to or after today
                if ($notificationDate >= $todayDate):
                    $displayedNotificationCount++;
                endif;
            endforeach;
            echo $displayedNotificationCount; // Display the count
            ?>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notification-dropdown">
        <div class="notification-scroll">
            <?php foreach ($notifications as $key => $notification):
                $notificationDate = $notification['timestamp'];
                // Only show notifications with timestamps equal to or after today
                if ($notificationDate >= $todayDate):
            ?>
                    <a href="#" class="dropdown-item view-notification" data-index="<?= $key ?>">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Admin
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm"><?= $notification['notification_description'] ?></p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?= $notification['timestamp'] ?></p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
            <?php
                endif;
            endforeach;
            ?>
        </div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
</li>
      <!-- Notifications Dropdown Menu -->
    
    </ul>
</nav>
</div>
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->

  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">


        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">My Attendance</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-warning">
            <span class="info-box-icon"><i class='fas fa-address-card'></i></span>
            <div class="info-box-content">
              <span class="info-box-text">My Profile</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


    </div>
  </section>
</div>
<?php echo view('StudentSidebar/StudentFooter.php'); ?>
