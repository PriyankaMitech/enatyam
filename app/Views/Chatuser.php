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

            .nav-link {
    /* padding: 0rem 0rem !important; */
}
.contacts-list-info1{
color:#000 !important;
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


                                
                                <ul class="contacts-list nav-item " >
                                   
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

                                            $adminModel = new \App\Models\AdminModel();
                                            // echo $chat->id;exit();

                                            // echo "<pre>"; print_r($_SESSION);exit();
                                            $whenc = array('status' => 'N','receiver_id' => $_SESSION['sessiondata']['id'],'sender_id' => $chat->id);
                                            $countmess = $adminModel->getalldata('online_chat', $whenc);


                                            
                                            // echo "<pre>";print_r($countmess);exit();

                                            if (is_array($countmess)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });
                                            
                                                $lastMessageDate = null;
                                                $lastMessageContent = null;
                                            
                                                // Check if there are any messages
                                                if (!empty($countmess)) {
                                                    // Access the date and content of the last message
                                                    $lastMessageDate = $countmess[0]->created_at;
                                                    $lastMessageContent = $countmess[0]->message;
                                            
                                                    // Convert the string date to a DateTime object
                                                    $lastMessageDateTime = new DateTime($lastMessageDate);
                                                    $currentDateTime = new DateTime();
                                            
                                                    // Compare the dates
                                                    if ($lastMessageDateTime->format('Y-m-d') == $currentDateTime->format('Y-m-d')) {
                                                        // Display time if the message was sent today
                                                        $formattedDate = $lastMessageDateTime->format('H:i');
                                                    } elseif ($lastMessageDateTime < $currentDateTime) {
                                                        // Display "Yesterday" if the message was sent in the past
                                                        $formattedDate = 'Yesterday';
                                                    } else {
                                                        // Display the full date for future messages
                                                        $formattedDate = $lastMessageDateTime->format('Y-m-d H:i');
                                                    }
                                            
                                                    // Output or use $formattedDate and $lastMessageContent as needed
                                                }
                                            } else {
                                                // Handle the case where $countmess is not an array (query failure or no results)
                                                $formattedDate = null; // or set a default value
                                                $lastMessageContent = null;
                                            }
                                            
                                            $counteing = '';
                                            if (!empty($countmess)) {
                                                $counteing = count($countmess);
                                            }
                                


                                            $whenc1 = array('sender_id' => $chat->id,'receiver_id' => $_SESSION['sessiondata']['id']);
                                            $countmess1 = $adminModel->getalldata('online_chat', $whenc1);



                                            // echo "<pre>";print_r($countmess);exit();

                                            if (is_array($countmess1)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess1, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });
                                            
                                                $lastMessageDate1 = null;
                                                $lastMessageContent1 = null;
                                            
                                                // Check if there are any messages
                                                if (!empty($countmess1)) {
                                                    // Access the date and content of the last message
                                                    $lastMessageDate1 = $countmess1[0]->created_at;
                                                    $lastMessageContent1 = $countmess1[0]->message;
                                            
                                                    // Convert the string date to a DateTime object
                                                    $lastMessageDateTime1 = new DateTime($lastMessageDate1);
                                                    $currentDateTime1 = new DateTime();
                                            
                                                    // Compare the dates
                                                    if ($lastMessageDateTime1->format('Y-m-d') == $currentDateTime1->format('Y-m-d')) {
                                                        // Display time if the message was sent today
                                                        $formattedDate1 = $lastMessageDateTime1->format('H:i');
                                                    } elseif ($lastMessageDateTime1 < $currentDateTime1) {
                                                        // Display "Yesterday" if the message was sent in the past
                                                        $formattedDate1 = 'Yesterday';
                                                    } else {
                                                        // Display the full date for future messages
                                                        $formattedDate1 = $lastMessageDateTime1->format('Y-m-d H:i');
                                                    }
                                            
                                                    // Output or use $formattedDate and $lastMessageContent as needed
                                                }
                                            } else {
                                                // Handle the case where $countmess is not an array (query failure or no results)
                                                $formattedDate1 = null; // or set a default value
                                                $lastMessageContent1 = null;
                                            }
                                            
                                            $countein1g = '';
                                            if (!empty($countmess1)) {
                                                $counteing1 = count($countmess1);
                                            }

                                           

                                            $whenc2 = array('sender_id' => $_SESSION['sessiondata']['id'], 'receiver_id' =>  $chat->id);
                                            $countmess2 = $adminModel->getalldata('online_chat', $whenc2);

                                            $formattedDate2 = '';
                                            $lastMessageContent2  = '';

                                            if (is_array($countmess2)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess2, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });

                                                // Check if there are any messages
                                                if (!empty($countmess2)) {
                                                    // Access the content and sender_id of the last message
                                                    $lastMessageContent2 = $countmess2[0]->message;
                                                    $lastMessageSenderId1 = $countmess2[0]->sender_id;


                                                    $whenc3 = array('id' => $lastMessageSenderId1);
                                                    $senderInfo = $adminModel->get_single_data('register', $whenc3);

                                                    // Retrieve sender information (assuming you have a function to get user data by ID)

                                                    // Check if sender information is available
                                                    if ($senderInfo) {
                                                        $lastMessageSender2 = $senderInfo->full_name; // Replace with the actual field containing sender's name
                                                        $formattedDate2 = date('Y-m-d H:i', strtotime($countmess2[0]->created_at));

                                                        // Output or use $formattedDate1, $lastMessageContent1, and $lastMessageSender1 as needed
                                                        // echo "Last message from $lastMessageSender2 sent at $formattedDate2: $lastMessageContent2";
                                                    }
                                                } else {
                                                    // Handle the case where $countmess1 is an empty array (no messages available)
                                                    echo "No messages available.";
                                                }
                                            }         
                                    ?>
                                            <li onclick="seen_chat(<?php echo $id; ?>)">
                                                <a href="<?= base_url() ?>chatuser/<?= $id ?>" >
                                                    <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

                                                    <div class="contacts-list-info contacts-list-info1" >
                                                        <span class="contacts-list-name">
                                                            <?= $full_names ?><?php
                                                        if ($_SESSION['sessiondata']['role'] == 'Admin') {
                                                        ?>
                                                            <span class="contacts-list-msg">(<?= $chat->role ?>)</span>
                                                        <?php } ?>
                                                            <small class="contacts-list-date float-right">                                                            
                                                                <span class="float-right">
                                                                    <?php
                                                                        $latestDateTime = null;
                                                                        $latestMessageContent = null;

                                                                        if (!empty($formattedDate1) && !empty($formattedDate2)) {
                                                                            $dateTime1 = new DateTime($formattedDate1);
                                                                            $dateTime2 = new DateTime($formattedDate2);

                                                                            if ($dateTime1 > $dateTime2) {
                                                                                // Message from sender1 is the latest
                                                                                $latestDateTime = $dateTime1;
                                                                                $latestMessageContent = $lastMessageContent1;
                                                                            } else {
                                                                                // Message from sender2 is the latest
                                                                                $latestDateTime = $dateTime2;
                                                                                $latestMessageContent = $lastMessageContent2;
                                                                            }
                                                                        } elseif (!empty($formattedDate1)) {
                                                                            // Only message from sender1 is available
                                                                            $latestDateTime = new DateTime($formattedDate1);
                                                                            $latestMessageContent = $lastMessageContent1;
                                                                        } elseif (!empty($formattedDate2)) {
                                                                            // Only message from sender2 is available
                                                                            $latestDateTime = new DateTime($formattedDate2);
                                                                            $latestMessageContent = $lastMessageContent2;
                                                                        } 

                                                                        if ($latestDateTime !== null && $latestMessageContent !== null) {
                                                                            $now = new DateTime();
                                                                            $yesterday = new DateTime('yesterday');
                                                                            $today = new DateTime();

                                                                            if ($latestDateTime->format('Y-m-d') == $today->format('Y-m-d')) {
                                                                                // Display today's time
                                                                                echo $latestDateTime->format('H:i');
                                                                            } elseif ($latestDateTime < $today && $latestDateTime >= $yesterday) {
                                                                                // Display "Yesterday"
                                                                                echo "Yesterday";
                                                                            } else {
                                                                                // Display the date
                                                                                echo $latestDateTime->format('j F'); // Format as '2 July'
                                                                            }
                                                                        }
                                                                        ?>
                                                                    <br>
                                                                    <?php if(!empty($counteing)){ ?>
                                                                        <span class="badge bg-success float-right" style="border-radius: 50%; padding:4px 6px !important"><?=$counteing; ?></span>
                                                                    <?php } ?>
                                                            </small>
                                                   
                                                        </span>
                                                        <span>
                                                            
                                                            <?php if (!empty($formattedDate1) && !empty($formattedDate2)) {
                                                                    $dateTime1 = new DateTime($formattedDate1);
                                                                    $dateTime2 = new DateTime($formattedDate2);

                                                                    if ($dateTime1 > $dateTime2) {
                                                                        // Message from sender1 is the latest
                                                                        echo "$lastMessageContent1";
                                                                    } else {
                                                                        // Message from sender2 is the latest
                                                                        echo "$lastMessageContent2";
                                                                    }
                                                                } elseif (!empty($formattedDate1)) {
                                                                    // Only message from sender1 is available
                                                                    echo "$lastMessageContent1";
                                                                } elseif (!empty($formattedDate2)) {
                                                                    // Only message from sender2 is available
                                                                    echo "$lastMessageContent2";
                                                                } else {
                                                                    // No messages available
                                                                    echo "No messages available.";
                                                                }?>
                                                        </span>
                                                       
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

                                            $adminModel = new \App\Models\AdminModel();
                                            $whenc = array('status' => 'N','sender_id' => $chat->id ,'receiver_id' => $_SESSION['sessiondata']['id'],);
                                            $countmess = $adminModel->getalldata('online_chat', $whenc);
                                            // echo "<pre>";print_r($countmess);exit();

                                            if (is_array($countmess)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });
                                            
                                                $lastMessageDate = null;
                                                $lastMessageContent = null;
                                            
                                                // Check if there are any messages
                                                if (!empty($countmess)) {
                                                    // Access the date and content of the last message
                                                    $lastMessageDate = $countmess[0]->created_at;
                                                    $lastMessageContent = $countmess[0]->message;
                                            
                                                    // Convert the string date to a DateTime object
                                                    $lastMessageDateTime = new DateTime($lastMessageDate);
                                                    $currentDateTime = new DateTime();
                                            
                                                    // Compare the dates
                                                    if ($lastMessageDateTime->format('Y-m-d') == $currentDateTime->format('Y-m-d')) {
                                                        // Display time if the message was sent today
                                                        $formattedDate = $lastMessageDateTime->format('H:i');
                                                    } elseif ($lastMessageDateTime < $currentDateTime) {
                                                        // Display "Yesterday" if the message was sent in the past
                                                        $formattedDate = 'Yesterday';
                                                    } else {
                                                        // Display the full date for future messages
                                                        $formattedDate = $lastMessageDateTime->format('Y-m-d H:i');
                                                    }
                                            
                                                    // Output or use $formattedDate and $lastMessageContent as needed
                                                }
                                            } else {
                                                // Handle the case where $countmess is not an array (query failure or no results)
                                                $formattedDate = null; // or set a default value
                                                $lastMessageContent = null;
                                            }
                                            
                                            $counteing = '';
                                            if (!empty($countmess)) {
                                                $counteing = count($countmess);
                                            }
                                


                                            $whenc1 = array('sender_id' => $chat->id, 'receiver_id' => $_SESSION['sessiondata']['id'],);
                                            $countmess1 = $adminModel->getalldata('online_chat', $whenc1);



                                            // echo "<pre>";print_r($countmess);exit();

                                            if (is_array($countmess1)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess1, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });
                                            
                                                $lastMessageDate1 = null;
                                                $lastMessageContent1 = null;
                                            
                                                // Check if there are any messages
                                                if (!empty($countmess1)) {
                                                    // Access the date and content of the last message
                                                    $lastMessageDate1 = $countmess1[0]->created_at;
                                                    $lastMessageContent1 = $countmess1[0]->message;
                                            
                                                    // Convert the string date to a DateTime object
                                                    $lastMessageDateTime1 = new DateTime($lastMessageDate1);
                                                    $currentDateTime1 = new DateTime();
                                            
                                                    // Compare the dates
                                                    if ($lastMessageDateTime1->format('Y-m-d') == $currentDateTime1->format('Y-m-d')) {
                                                        // Display time if the message was sent today
                                                        $formattedDate1 = $lastMessageDateTime1->format('H:i');
                                                    } elseif ($lastMessageDateTime1 < $currentDateTime1) {
                                                        // Display "Yesterday" if the message was sent in the past
                                                        $formattedDate1 = 'Yesterday';
                                                    } else {
                                                        // Display the full date for future messages
                                                        $formattedDate1 = $lastMessageDateTime1->format('Y-m-d H:i');
                                                    }
                                            
                                                    // Output or use $formattedDate and $lastMessageContent as needed
                                                }
                                            } else {
                                                // Handle the case where $countmess is not an array (query failure or no results)
                                                $formattedDate1 = null; // or set a default value
                                                $lastMessageContent1 = null;
                                            }
                                            
                                            $countein1g = '';
                                            if (!empty($countmess1)) {
                                                $counteing1 = count($countmess1);
                                            }

                                            $whenc2 = array('sender_id' => $_SESSION['sessiondata']['id'], 'receiver_id' =>  $chat->id);
                                            $countmess2 = $adminModel->getalldata('online_chat', $whenc2);

                                            $formattedDate2 = '';
                                            $lastMessageContent2  = '';

                                            if (is_array($countmess2)) {
                                                // Sort the messages by created_at in descending order
                                                usort($countmess2, function ($a, $b) {
                                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                                });

                                                // Check if there are any messages
                                                if (!empty($countmess2)) {
                                                    // Access the content and sender_id of the last message
                                                    $lastMessageContent2 = $countmess2[0]->message;
                                                    $lastMessageSenderId1 = $countmess2[0]->sender_id;


                                                    $whenc3 = array('id' => $lastMessageSenderId1);
                                                    $senderInfo = $adminModel->get_single_data('register', $whenc3);

                                                    // Retrieve sender information (assuming you have a function to get user data by ID)

                                                    // Check if sender information is available
                                                    if ($senderInfo) {
                                                        $lastMessageSender2 = $senderInfo->full_name; // Replace with the actual field containing sender's name
                                                        $formattedDate2 = date('Y-m-d H:i', strtotime($countmess2[0]->created_at));

                                                        // Output or use $formattedDate1, $lastMessageContent1, and $lastMessageSender1 as needed
                                                        // echo "Last message from $lastMessageSender2 sent at $formattedDate2: $lastMessageContent2";
                                                    }
                                                } else {
                                                    // Handle the case where $countmess1 is an empty array (no messages available)
                                                    echo "No messages available.";
                                                }
                                            }         
                                    ?>
                                            <li onclick="seen_chat(<?php echo $id; ?>)">
                                                <a href="<?= base_url() ?>chatuser/<?= $id ?>">
                                                    <img class="contacts-list-img" src="<?php echo base_url() ?>public/images/user.png" alt="User">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            <?= $full_name ?><?php
                                                        if ($_SESSION['sessiondata']['role'] == 'Admin') {
                                                        ?>
                                                            <span class="contacts-list-msg">(<?= $chat->role ?>)</span>
                                                        <?php } ?>
                                                        <small class="contacts-list-date float-right">                                                            
                                                                <span class="float-right">
                                                                <?php
                                                                        $latestDateTime = null;
                                                                        $latestMessageContent = null;

                                                                        if (!empty($formattedDate1) && !empty($formattedDate2)) {
                                                                            $dateTime1 = new DateTime($formattedDate1);
                                                                            $dateTime2 = new DateTime($formattedDate2);

                                                                            if ($dateTime1 > $dateTime2) {
                                                                                // Message from sender1 is the latest
                                                                                $latestDateTime = $dateTime1;
                                                                                $latestMessageContent = $lastMessageContent1;
                                                                            } else {
                                                                                // Message from sender2 is the latest
                                                                                $latestDateTime = $dateTime2;
                                                                                $latestMessageContent = $lastMessageContent2;
                                                                            }
                                                                        } elseif (!empty($formattedDate1)) {
                                                                            // Only message from sender1 is available
                                                                            $latestDateTime = new DateTime($formattedDate1);
                                                                            $latestMessageContent = $lastMessageContent1;
                                                                        } elseif (!empty($formattedDate2)) {
                                                                            // Only message from sender2 is available
                                                                            $latestDateTime = new DateTime($formattedDate2);
                                                                            $latestMessageContent = $lastMessageContent2;
                                                                        } 

                                                                        if ($latestDateTime !== null && $latestMessageContent !== null) {
                                                                            $now = new DateTime();
                                                                            $yesterday = new DateTime('yesterday');
                                                                            $today = new DateTime();

                                                                            if ($latestDateTime->format('Y-m-d') == $today->format('Y-m-d')) {
                                                                                // Display today's time
                                                                                echo $latestDateTime->format('H:i');
                                                                            } elseif ($latestDateTime < $today && $latestDateTime >= $yesterday) {
                                                                                // Display "Yesterday"
                                                                                echo "Yesterday";
                                                                            } else {
                                                                                // Display the date
                                                                                echo $latestDateTime->format('j F'); // Format as '2 July'
                                                                            }
                                                                        }
                                                                        ?>
                                                                    
                                                                    <br>
                                                                    <?php if(!empty($counteing)){ ?>
                                                                        <span class="badge bg-success float-right" style="border-radius: 50%; padding:4px 6px !important"><?=$counteing; ?></span>
                                                                    <?php } ?>
                                                            </small>
                                                   
                                                        </span>
                                                        <span>
                                                            
                                                        <?php if (!empty($formattedDate1) && !empty($formattedDate2)) {
                                                                    $dateTime1 = new DateTime($formattedDate1);
                                                                    $dateTime2 = new DateTime($formattedDate2);

                                                                    if ($dateTime1 > $dateTime2) {
                                                                        // Message from sender1 is the latest
                                                                        echo "$lastMessageContent1";
                                                                    } else {
                                                                        // Message from sender2 is the latest
                                                                        echo "$lastMessageContent2";
                                                                    }
                                                                } elseif (!empty($formattedDate1)) {
                                                                    // Only message from sender1 is available
                                                                    echo "$lastMessageContent1";
                                                                } elseif (!empty($formattedDate2)) {
                                                                    // Only message from sender2 is available
                                                                    echo "$lastMessageContent2";
                                                                } else {
                                                                    // No messages available
                                                                    echo "No messages available.";
                                                                }?>
                                                        </span>
                                                      
                                                    </div>
                                                </a>
                                            </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                        <?php

                                $uri = current_url(true);
                                $segmentCount = $uri->getTotalSegments();
                                $receiverid = '';
                                if ($segmentCount >= 3) {
                                    $receiverid = $uri->getSegment(3);
                                } else {
                                    $receiverid = null; // or whatever default value you want to set
                                }
                            // $receiverid = current_url(true)->getSegment(3);
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