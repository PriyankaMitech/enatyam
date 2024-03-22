<?php echo view('StudentSidebar/Studentsidebar'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">


<style>
    .button-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-container {
    display: flex;
    justify-content: space-between;

}
.btn-primary{border-radius: 26px;
    margin-left: 50px;
    margin-top: 21px;}
.price-card-body {
    text-align: justify;
    line-height: 2;
}


.price-card-head h3 {
  color: #000;
  font-size: 30px;
  font-weight: 600;
  font-family: "Roboto slab", serif !important;
}

.price-card-head .line {
  background: #e61357 !important;
  width: 40px !important;
}

.price-card-body h2 {
  color: #000;
  font-size: 25px;
  font-weight: 600;
  font-family: "Roboto slab", serif !important;
  text-align: center;
}

.price-card-body h4 {
  color: #000;
  font-weight: 600;
  font-size: 18px;
  font-family: "Roboto slab", serif !important;
  margin: 25px 0px;
  text-align:center;
}
.price-card-head h3 {
  color: #000;
}
.price-card-body p{
    text-align: center;
}
.price-card-body img{    padding-left: 54px;
}

.button1-card {
    border-radius: 24px;
    background-color: #ebe7e7;
    padding: 5%;
}

.button1-card {
    border-radius: 24px;
    
}
.button1-card.price-card-body p {
  color: #000;
}

.button1-card:hover {
  background-color: transparent;
  background-image: linear-gradient(90deg, #cbfcc5 0%, #ffd215 100%);
}
.button1-card:hover .shop-now-btn {
  color: #ff236e !important;
  background-color: #fafafa !important;
}
ul li{
    list-style-type: none;
    font-size: 17px;
    font-weight: 500;
}
.pricing-card-section .card {
    padding: 10px 10px !important;
}
.price-card-body .fa-times-circle-o {
    width: 2.5rem;
}
.price-card-body .fa-check-circle-o {
    width: 2.5rem;
}
.price-card-body span:last-child {
    font-size: 13px;
}

</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Select Sessions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Select Sessions</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select Sessions</h3>

        
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <div class="container-fluid">
            

            <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['SessionType'] == 'OneToOneSession') { ?>  active <?php } ?>" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">One on One Private Session</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['SessionType'] == 'GroupSession') { ?>  active <?php } ?>"    id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Group Session Up to 10 Students</a>
                  </li>
                 
                </ul>
              </div>
              <div class="card-body" style="background-color: #f4f4f4;">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade <?php if ($_SESSION['SessionType'] == 'OneToOneSession') { ?>  show active <?php } ?> " id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-12">
                                <div class="row pricing-card-section sd">
                                    <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                        <div class="card text-center card-1">
                                            <div class="price-card-head">
                                                <h3 >Basic</h3>
                                                <span class="line"></span>
                                            </div>
                                            <div class="price-card-body">
                                                <h2>8 Sessions
                                                </h2>
                                                <h4>₹ 1200 /- session</h4>
                                                <h4>Total Price: ₹ 9600 /- <br><span class="del-price"><del> ₹ 10105 /- </del></span></h4>

                                                <img src="public/images/price-coupn.png" />
                                                <p style="">Duration : 60 Days</p>

                                                <ul style="padding-left:0px!important">

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            One on One Private Live Class.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Practice Video- weekly 2 Video.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Time Slot preference.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Weekly -quiz.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn Any 1 subject.

                                                        </span>
                                                    </li>

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-times-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn at your own Pace - customisation.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-times-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            24 X 7 unlimited support for content & doubt clearing.

                                                        </span>
                                                    </li>
                                                </ul>


                                                <div class="button-container">
                                                    <?php if (!(session()->get('sessiondata'))) : ?>
                                                        <input class="btn shop-now-btn bt" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Explore Pricing">
                                                    <?php else : ?>
                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=1" type="button">Explore Pricing</a>

                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                        <div class="card text-center card-1">
                                            <div class="price-card-head">
                                                <h3>Pro</h3>
                                                <span class="line"></span>
                                            </div>

                                            <div class="price-card-body">
                                                <h2>21 Sessions
                                                </h2>
                                                <h4>₹ 1090 /- session</h4>
                                                <h4>Total Price: ₹ 22890 /- <br> <span class="del-price"><del> ₹ 24880 /- </del></span></h4>

                                                <img src="public/images/pro.png" />
                                                <p >Duration : 120 Days</p>

                                                <ul class="" style="padding-left:0px!important">

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            One on One Private Live Class.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Practice Video- Unlimited.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Time Slot preference.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Weekly -quiz.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn as many subject as you want.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn at your own Pace - customisation.
                                                        </span>
                                                    </li>

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-times-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            24 X 7 unlimited support for content & doubt clearing.

                                                        </span>
                                                    </li>

                                                </ul>
                                                <div class="button-container">
                                                    <?php if (!(session()->get('sessiondata'))) : ?>
                                                        <a class="btn shop-now-btn" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Explore Pricing</a>
                                                    <?php else : ?>
                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=2" type="button">Explore Pricing</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                        <div class="card text-center card-1">
                                            <div class="price-card-head">
                                                <h3>Elite</h3>
                                                <span class="line"></span>
                                            </div>

                                            <div class="price-card-body">
                                                <h2>51 Sessions</h2>
                                                <h4>₹ 975 /- session</h4>
                                                <h4>Total Price: ₹ 49725 /- <br><span class="del-price"><del> ₹ 59910 /- </del></span></h4>

                                                <img src="public/images/Elite.png" />
                                                <p >Duration : 360 Days</p>

                                                <ul style="padding-left:0px!important">

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            One on One Private Live Class.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Practice Video- Unlimited.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Time Slot preference.

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Weekly -quiz.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn as many subject as you want.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            Learn at your own Pace - customisation.
                                                        </span>
                                                    </li>

                                                    <li>
                                                        <span>
                                                            <i class="fa fa-check-circle-o"></i>

                                                        </span>
                                                        <span>
                                                            24 X 7 unlimited support for content & doubt clearing.

                                                        </span>
                                                    </li>

                                                </ul>

                                                <div class="button-container">
                                                    <?php if (!(session()->get('sessiondata'))) : ?>
                                                        <a class="btn shop-now-btn" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Explore Pricing</a>
                                                    <?php else : ?>
                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=3" type="button">Explore Pricing</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-lg-2  pddn">
                                <img src="public/images/price1.png" width="100%" class="opman" />

                            </div>
                        </div>
                   
                  </div>
                  <div class="tab-pane fade <?php if ($_SESSION['SessionType'] == 'GroupSession') { ?>  show active <?php } ?>" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <div class="row">
                            <div class="col-lg-10 col-md-12 col-12">
                                <form name="razorpay-form" id="razorpay-form" action="<?php echo base_url() ?>payment" method="POST">
                                    <div class="row pricing-card-section">
                                        <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                            <div class="card text-center card-1">
                                                <div class="price-card-head">
                                                    <h3>Basic</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>21 Sessions
                                                    </h2>
                                                    <h4>₹ 475 /- session</h4>
                                                    <h4>Total Price: ₹ 9990 /- <br><span class="del-price"><del> ₹ 10500 /- </del></span></h4>

                                                    <img src="public/images/price-coupn.png" />
                                                    <p >Duration : 120 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                One on One Private Live Class.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- weekly 2 Video.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Learn Any 1 subject.

                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>
                                                    </ul>


                                                    <div class="button-container">
                                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                            <a class="btn shop-now-btn" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Explore Pricing</a>
                                                        <?php else : ?>
                                                            <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=4" type="button">Explore Pricing</a>

                                                        <?php endif; ?>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                            <div class="card text-center card-1">
                                                <div class="price-card-head">
                                                    <h3>Pro</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>51 Sessions
                                                    </h2>
                                                    <h4>₹ 450 /- session</h4>
                                                    <h4>Total Price: ₹ 22950 /- <br><span class="del-price"><del>₹ 24950 /- </del></span></h4>
                                                    <img src="public/images/pro.png" />
                                                    <p >Duration : 200 Days</p>

                                                    <ul class="" style="padding-left:0px!important">
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Group Live Class- upto 10 students.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Learn Any 1 subject.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="button-container">

                                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                            <a class="btn shop-now-btn" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Explore Pricing</a>
                                                        <?php else : ?>
                                                            <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=5" type="button">Explore Pricing</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 pfp ppsb">
                                            <div class="card text-center card-1">
                                                <div class="price-card-head">
                                                    <h3>Elite</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>101 Sessions</h2>
                                                    <h4>₹ 423 /- session</h4>
                                                    <h4>Total Price: ₹ 429777 /- <br> <span class="del-price"><del>₹ 51777 /- </del></span></h4>

                                                    <img src="public/images/Elite.png" />
                                                    <p >Duration : 360 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Group Live Class- upto 10 students.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o"></i>

                                                            </span>
                                                            <span>
                                                                Learn as many subject as you want.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o"></i>
                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.
                                                            </span>
                                                        </li>
                                                    </ul>

                                                    <div class="button-container">
                                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                            <a class="btn shop-now-btn" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Explore Pricing</a>
                                                        <?php else : ?>
                                                            <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=6" type="button">Explore Pricing</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-2 pddn">
                                <img src="public/images/price1.png" class="opman" width="100%" />

                            </div>

                        </div>                  </div>
                
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
       
        </div>
        </div>
            <!-- /.row -->

          </div>
          <!-- /.card-body -->
 
        </div>
        <!-- /.card -->


      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php echo view('StudentSidebar/StudentFooter.php');?>