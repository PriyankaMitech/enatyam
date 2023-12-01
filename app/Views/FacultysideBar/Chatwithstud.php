<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<?php echo view('FacultySidebar2.php');?>
<!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div> -->
<style>
  
.chat .direct-chat-messages, .chat .products-list {
    height: 400px;
}
.chat .products-list{
  border: 1px solid rgba(0,0,0,.125);
}
</style>
<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
    </li>
    </ul>
</nav>
<div class="content-wrapper chat">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-10">
              <div class="card direct-chat direct-chat-primary">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">Direct Chat</h3>

                  <div class="card-tools">
                    <span title="3 New Messages" class="badge badge-primary">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                      <i class="fas fa-comments"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <ul class="products-list product-list-in-card">
                        <li class="item pl-2 pr-2">
                          <div class="product-img">
                            <img src="<?php echo base_url()?>public/images/user.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Samsung TV
                              <span class="badge badge-warning float-right">$1800</span></a>
                            <span class="product-description">
                              Samsung 32" 1080p 60Hz LED Smart HDTV.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item pl-2 pr-2">
                          <div class="product-img">
                            <img src="<?php echo base_url()?>public/images/user.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Bicycle
                              <span class="badge badge-info float-right">$700</span></a>
                            <span class="product-description">
                              26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item pl-2 pr-2">
                          <div class="product-img">
                            <img src="<?php echo base_url()?>public/images/user.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">
                              Xbox One <span class="badge badge-danger float-right">
                              $350
                            </span>
                            </a>
                            <span class="product-description">
                              Xbox One Console Bundle with Halo Master Chief Collection.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item pl-2 pr-2">
                          <div class="product-img">
                            <img src="<?php echo base_url()?>public/images/user.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                              <span class="badge badge-success float-right">$399</span></a>
                            <span class="product-description">
                              PlayStation 4 500GB Console (PS4)
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                      </ul>
                    </div>
                    <div class="col-lg-8">
                      <div class="direct-chat-messages">
                        <?php
                          if ($chatdata) {
                          foreach ($chatdata as $chat) {
                              if ($chat['sender_id'] == $_SESSION['id']) {  ?>
                              <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-right"><?php print_r($_SESSION['user_name']);?></span>
                                  <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <img class="direct-chat-img" src="<?php echo base_url()?>public/images/user.png" alt="message user image">
                                <div class="direct-chat-text"><?php echo $chat['message'] ?> </div>
                              </div>
                          <?php  } else { ?>
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><?php print_r($getdata->full_name); ?></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                              </div>
                              <img class="direct-chat-img" src="<?php echo base_url()?>public/images/user.png" alt="message user image">
                              <div class="direct-chat-text">
                                <?php echo $chat['message'] ?> 
                              </div>
                            </div>
                        <?php } } } ?>
                      </div>
                      <div class="card-footer">
                    <form action="#" id="chatform" method="post">
                      <div class="input-group">
                        <input type="hidden" name="sender_id" value="<?php print_r($_SESSION['id']);?>">
                        <input type="hidden" name="receiver_id" value="<?php print_r($page)?>">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                          <button type="button" id="msgsend" class="btn btn-primary">Send</button>
                        </span>
                      </div>
                    </form>
                  </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
 <?php echo view('FacultysideBar/FacultyFooter.php');?>

<script>
    $(document).ready(function() {
        $('.test').click(function (e) {
            alert('sfd')
        })
});
</script>