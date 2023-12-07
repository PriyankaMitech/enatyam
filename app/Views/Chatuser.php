<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<?php //echo view('FacultySidebar2.php');?> 
<?php
    if (isset($_SESSION['sessiondata'])) {
        $role = $_SESSION['sessiondata']['role'];
        if ($role == 'Faculty') {
            echo view('FacultySidebar2.php');
        } elseif ($role == 'Student') {
            echo view('StudentSidebar/Studentsidebar');
        } else {
            echo view('AdminSideBar');
        }
    }
?>


<div class="content-wrapper chat">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-8">
            <div class="card card-success card-outline direct-chat direct-chat-success">
                <div class="card-header">
                    <h3 class="card-title"><?php //echo '<pre>';print_r($chatdata);die;?><?php //$chatdata[0]['full_name']?></h3>

                    <div class="card-tools">
                    <span title="3 New Messages" class="badge bg-success">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool chatopen" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <?php if (isset($chatdata)) {
                        foreach ($chatdata as $chat) {
                            $time = new DateTime($chat['created_at']);
                            $date = date("j M ", strtotime($chat['created_at']));
                            
                            $time = $time->format('H:i');
                            // print_r($time); die;
                            if ($chat['sender_id'] == $_SESSION['sessiondata']['id']) { ?>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right"><?= $date; echo $time ;?></span>
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
                                <span class="direct-chat-timestamp float-left"><?=$date; echo $time?></span>
                                </div>
                                <img class="direct-chat-img" src="<?php echo base_url()?>public/images/user.png" alt="Message User Image">
                                <div class="direct-chat-text">
                                <?php echo $chat['message'] ?>
                                </div>
                            </div>
                        <?php } } } else { ?> Select user to chat <?php } ?>
                    </div>

                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <?php //if (!$_SESSION['sessiondata']['role'] == 'Admin') {?>
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
                            <?php //} ?>
                            <?php if (isset($getuser) && !empty($getuser)) {
                                foreach ($getuser as $chat) { 
                                    if ($_SESSION['sessiondata']['role'] == 'Faculty' || $_SESSION['sessiondata']['role'] == 'Admin') {
                                        $id= $chat->id;
                                        $full_name = $chat->full_name;
                                    }else if($_SESSION['sessiondata']['role'] == 'Student') {
                                        $id = $chat->register_id;
                                        $full_name = $chat->faculty_name;
                                    }
                                    // print_r($chat);die;
                            ?>
                            <li>
                                <a href="<?= base_url()?>chatuser/<?=$id?>">
                                    <img class="contacts-list-img" src="<?php echo base_url()?>public/images/user.png" alt="User">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        <?=$full_name?>
                                        <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <?php
                                       if($_SESSION['sessiondata']['role'] == 'Admin'){
                                    ?>
                                    <span class="contacts-list-msg"><?=$chat->role?></span>
                                    <?php } ?>
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