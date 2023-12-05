<?php echo view('StudentSidebar/Studentsidebar');?>
    <style>
        .video-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .video-card .card-body {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
        }
    </style>


<body>
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url(); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
</div>
<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Videos</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Videos</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            
        <div class="container">
        <?php if (!empty($videos)) : ?>
           
            <?php $count = 0; ?>
            <div class="row">

                <?php foreach ($videos as $video) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <video class="card-img-top" width="320" height="240" controls>
                                <source src="<?= base_url('public/uploads/FacultyUplodedVideos/' . $video->video_name); ?>" type="video/mp4">
                            </video>
                            <div class="card-body">

                                <p class="card-text">

                                    <?php if ($video) : ?>
                                        <strong>Upload Video Date:</strong> <?= $video->DateTime; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>

                    <?php if ($count % 3 === 0) : ?>
            </div>
            <div class="row">
            <?php endif; ?>
        <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>No videos found.</p>
        <?php endif; ?>
    </div>
        </div>
    </section>
</div>
<?php echo view('FacultysideBar/FacultyFooter.php');?>      
    
    
