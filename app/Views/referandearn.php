<?php echo view('StudentSidebar/Studentsidebar'); ?>
<style>
.content .card-body p {
    font-size: 29px;
        text-align: center;
        font-weight: 700;
        line-height: normal;
        }
    .content .card-body h5{
        font-weight: 700;
    }
    .content .card-body .paradiv{
        padding: 4% 0%;
    }
    /* .nav-sidebar>.nav-item {
    background-color: transparent;
    background-image: linear-gradient(90deg, #ff68f8 0%, #dde100 100%);
    } */
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Refer And Earn</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Refer And Earn</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Refer And Earn</h3>
                    </div> 
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="<?=base_url();?>public/images/referafriend.png">
                                </div>
                                <div class="col-md-11 text-center paradiv">
                                    <p> <span class="para">Refer a friend and earn INR 3500. Amount <br>    credited to your wallet upon your friend's first <br> completed transaction.<span>
                                        
                                    </p>
                                </div>
                            </div>



                                <h5> Terms & Conditions</h5>
                                <ul>
                                    <li>Referral reward of INR 3500 is applicable upon the referee's successful completion of their first transaction.</li>
                                    <li>Referrer must have an active account to receive the reward.</li>
                                    <li>The referee must use the referral link provided by the referral link provided by the referrer to be eligilble for the reward.</li>
                                    <li>Reward will be credited to the referrer's wallet automatically within 15 days of the referee's first completed transaction.</li>
                                    <li>
                                        This offer is subject to Change or withdrawal without prior notice.
                                    </li>
                                    <li>
                                        The referral program is valid for a limited time only.
                                    </li>
                                    <li>Any abuse or fraudulent activity will result in disqualification from the program.</li>
                                    <li>Other terms and conditions may apply.</li>
                                </ul>
                               
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
  <?php echo view('StudentSidebar/StudentFooter.php');?>