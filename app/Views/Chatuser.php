<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<?php echo view('FacultySidebar2.php');?>

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
          <div class="col-md-8">
            <div class="card card-success card-outline direct-chat direct-chat-success">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                    <span title="3 New Messages" class="badge bg-success">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool chatopen" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <?php if (isset($chatdata)) {
                        foreach ($chatdata as $chat) {
                            if ($chat['sender_id'] == $_SESSION['sessiondata']['id']) { ?>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <img class="direct-chat-img" src="<?php echo base_url()?>public/images/user.png" alt="Message User Image">
                                <div class="direct-chat-text">
                                <?php echo $chat['message'] ?>
                                </div>
                            </div>
                            <?php  } else { ?>
                            <div class="direct-chat-msg ">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <img class="direct-chat-img" src="<?php echo base_url()?>public/images/user.png" alt="Message User Image">
                                <div class="direct-chat-text">
                                <?php echo $chat['message'] ?>
                                </div>
                            </div>
                        <?php } } } else { ?> No chats yet <?php } ?>
                    </div>

                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <?php if (!$_SESSION['sessiondata']['role'] == 'Admin') {?>
                            <li>
                                <a href="<?= base_url()?>chatuser/1">
                                    <img class="contacts-list-img" src="<?php echo base_url()?>public/images/user.png" alt="User">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Admin
                                        <!-- <small class="contacts-list-date float-right">2/28/2015</small> -->
                                    </span>
                                    <!-- <span class="contacts-list-msg">How have you been? I was...</span> -->
                                    </div>
                                </a>
                            </li> 
                            <?php } ?>
                            <?php if (isset($getuser) && !empty($getuser)) {
                                foreach ($getuser as $chat) { 
                                    if ($_SESSION['sessiondata']['role'] == 'Faculty' || $_SESSION['sessiondata']['role'] == 'Admin') {
                                        $id= $chat->id;
                                        $full_name = $chat->full_name;
                                    }else if($_SESSION['sessiondata']['role'] == 'Student') {
                                        $id = $chat->faculty_id;
                                        $full_name = $chat->faculty_name;
                                    }
                            ?>
                            <li>
                                <a href="<?= base_url()?>chatuser/<?=$id?>">
                                    <img class="contacts-list-img" src="<?php echo base_url()?>public/images/user.png" alt="User">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        <?=$full_name?>
                                        <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg"><?=$chat->role?></span>
                                    </div>
                                </a>
                            </li>
                            <?php } }?>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" id="chatform" method="post">
                    <div class="input-group">
                        <input type="hidden" name="sender_id" value="<?php print_r($_SESSION['sessiondata']['id']);?>">
                        <input type="hidden" name="receiver_id" value="<?php print_r($page)?>">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control chatmsg">
                        <span class="input-group-append">
                        <button type="button" id="msgsend" class="btn btn-success">Send</button>
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
<?php echo view('FacultysideBar/FacultyFooter.php');?>
