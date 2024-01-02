<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<?php //echo view('FacultySidebar2.php');
?>
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
<style>
    .direct-chat-messages, .direct-chat-contacts {
        height: 428px !important;
            }
</style>


<div class="content-wrapper chat">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <!-- <div class="card card-success card-outline direct-chat direct-chat-success direct-chat-contacts-open"> -->

                    <div class="card card-success card-outline direct-chat direct-chat-success">
                        <div class="card-header">
                            <?php if(!empty($chat_user_data)){ ?>
                                
                            <h3 class="card-title"><?php echo $chat_user_data->full_name ?></h3>
                            <?php } ?>

                            <div class="card-tools">
                                <!-- <span title="3 New Messages" class="badge bg-success"><?php if(!empty($chat_count)) {echo count($chat_count);}?></span> -->
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool chatopen" title="Contacts" data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"><?php if(!empty($chat_count)) {echo count($chat_count);}?></i>

                                </button> -->
                                <button type="button" class="btn btn-tool chatopen position-relative" title="Contacts" data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                    <?php if (!empty($chat_count)) : ?>
                                        <span class="badge badge-danger position-absolute top-0 start-100 translate-middle"><?= count($chat_count); ?></span>
                                    <?php endif; ?>
                                </button>

  
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="direct-chat-messages">
                                <?php
                                // echo "<pre>";print_r($chatdata);exit();
                                if (isset($chatdata)) {
                                    foreach ($chatdata as $chat) {
                                        $time = new DateTime($chat['created_at']);
                                        $date = date("j M ", strtotime($chat['created_at']));

                                        $time = $time->format('H:i');
                                        // print_r($time); die;
                                        if ($chat['sender_id'] == $_SESSION['sessiondata']['id']) { ?>
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-left"><?php echo  $chat['sender_name'] ?></span>
                                                    <span class="direct-chat-timestamp float-right"><?= $date;
                                                                                                    echo $time; ?></span>
                                                </div>
                                                <img class="direct-chat-img" src="<?php echo base_url() ?>public/images/user.png" alt="Message User Image">
                                                <div class="direct-chat-text">
                                                    <?php echo $chat['message'] ?>
                                                </div>
                                            </div>
                                        <?php  } else { ?>
                                            <div class="direct-chat-msg ">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-right"><?php echo  $chat['sender_name'] ?></span>
                                                    <span class="direct-chat-timestamp float-left"><?= $date;
                                                                                                    echo $time ?></span>
                                                </div>
                                                <img class="direct-chat-img" src="<?php echo base_url() ?>public/images/user.png" alt="Message User Image">
                                                <div class="direct-chat-text">
                                                    <?php echo $chat['message'] ?>
                                                </div>
                                            </div>
                                    <?php }
                                    }
                                } else { ?> 


                                
                                <ul class="contacts-list">
                                    <?php if ($_SESSION['sessiondata']['role'] != 'Admin') { ?>
                                        <li>
                                            <a href="<?= base_url() ?>chatuser/1">
                                                <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

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
                                    <?php
                                    // echo '<pre>';
                                    // print_r($getuser);
                                    // die;
                                    if (!empty($getuser)) {
                                    //       echo '<pre>';
                                    // print_r($getuser);
                                    // die;
                                        foreach ($getuser as $chat) {
                                            if ($_SESSION['sessiondata']['role'] == 'Faculty' || $_SESSION['sessiondata']['role'] == 'Admin') {
                                                $id = $chat->id;
                                                $full_names = $chat->full_name;
                                            } else if ($_SESSION['sessiondata']['role'] == 'Student') {
                                                $id = $chat->id;
                                                $full_names = $chat->full_name;
                                            }
                                    ?>
                                            <li onclick="seen_chat(<?php echo $id; ?>)">
                                                <a href="<?= base_url() ?>chatuser/<?= $id ?>">
                                                    <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

                                                    <div class="contacts-list-info" style="color:#000 !important">
                                                        <span class="contacts-list-name">
                                                            <?= $full_names ?>
                                                            <!-- <small class="contacts-list-date float-right">2/28/2015</small> -->
                                                        </span>
                                                        <?php
                                                        if ($_SESSION['sessiondata']['role'] == 'Admin') {
                                                        ?>
                                                            <span class="contacts-list-msg"><?= $chat->role ?></span>
                                                        <?php } ?>
                                                    </div>

                                                </a>
                                            </li>
                                    <?php }
                                    } ?>
                                </ul>

                         
                                
                                
                                <?php } ?>
                            </div>

                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <?php if ($_SESSION['sessiondata']['role'] != 'Admin') { ?>
                                        <li >
                                            <a href="<?= base_url() ?>chatuser/1">
                                                <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

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
                                    <?php
                                    // echo '<pre>';
                                    // print_r($getuser);
                                    // die;
                                    if (!empty($getuser)) {
                                    //       echo '<pre>';
                                    // print_r($getuser);
                                    // die;
                                        foreach ($getuser as $chat) {
                                            if ($_SESSION['sessiondata']['role'] == 'Faculty' || $_SESSION['sessiondata']['role'] == 'Admin') {
                                                $id = $chat->id;
                                                $full_name = $chat->full_name;
                                            } else if ($_SESSION['sessiondata']['role'] == 'Student') {
                                                $id = $chat->id;
                                                $full_name = $chat->full_name;
                                            }
                                    ?>
                                            <li onclick="seen_chat(<?php echo $id; ?>)">
                                                <a href="<?= base_url() ?>chatuser/<?= $id ?>">
                                                    <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            <?= $full_name ?>
                                                            <!-- <small class="contacts-list-date float-right">2/28/2015</small> -->
                                                        </span>
                                                        <?php
                                                        if ($_SESSION['sessiondata']['role'] == 'Admin') {
                                                        ?>
                                                            <span class="contacts-list-msg"><?= $chat->role ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </a>
                                            </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                            $receiverid = current_url(true)->getSegment(3);
                            // echo  $receiverid; exit();
                        if(!empty($receiverid)){ ?>
                        <div class="card-footer">
                            <form action="#" id="chatform" method="post">
                                <div class="input-group">
                                    <input type="hidden" name="sender_id" value="<?php print_r($_SESSION['sessiondata']['id']); ?>">
                                    <input type="hidden" name="receiver_id" value="<?php print_r($page) ?>">
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control chatmsg">
                                    <span class="input-group-append">
                                        <button type="button" id="msgsend" class="btn btn-success">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
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



<script>
function seen_chat(id) {
    alert(id);

    // Use the parameter id instead of $(this).val()
    var id = id;

    if (id) {
        $.ajax({
            url: '<?= base_url(); ?>update_seen_status',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {
                // Handle success if needed
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    } else {
        // Handle the case where countryId is not defined
    }
}

 
</script>