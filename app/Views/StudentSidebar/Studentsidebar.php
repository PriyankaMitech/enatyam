<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/css/custom.css">
  <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
        <!-- integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
</head>

<body>
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
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link">
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
          <div class="image">
            <img src="<?=base_url()?>public/AdmoinLogo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url() ?>StudentDashboard" class="d-block"><?= $username = session()->get('user_name'); ?></a>
          </div>
        </div>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">

            </div>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            </a>
            <?php if ($_SESSION['sessiondata']['Payment_status'] == 'Y') { ?>
              <li class="nav-item">
              <li class="nav-item">
                <a href="<?=base_url();?>StudentDashboard" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>StudentProfile" class="nav-link">
                  <i class="nav-icon 	fa fa-child"></i>
                  <p>
                    Profile
                  </p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class=" nav-icon fa fa-calendar"></i>
                  <p>
                    Schedule
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>ScheduleStudent" class="nav-link">
                      <i class="nav-icon fas fa-calendar-alt"></i>
                      <p> Schedule
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reshedule</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>SelectDate" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Faculty Availability</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon 	fa fa-child"></i>
                  <p>
                    Faculty
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>UplodeVideo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Uplode Video</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>StudentSideBarVideo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Faculty uploded Video</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- <li class="nav-item">


                <a href="<?php echo base_url()?>Chat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chat</p>

                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>Payment Records
                      </p>
                    </a>
                  </li>

                </ul>
              </li> -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-comment-dots"></i>
                  <p>
                    Massages
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>chatuser" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Chat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Email</p>
                    </a>
                  </li>
                <?php } ?>
                <?php
                if ($_SESSION['sessiondata']['Payment_status'] == 'N') { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>ModelForLogin" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>Plan details</p>
                    </a>
                  </li>
                <?php } ?>
                </ul>
              </li>
              </li>
          </ul>
        </nav>
      </div>
    </aside>