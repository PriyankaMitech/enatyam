<?php
$description        = "Product Description";
$txnid              = date("YmdHis");
$key_id             = "rzp_test_Ctoq9lGccMcZwj";
$currency_code      = 'INR';
$total              = (1 * 100); // 100 = 1 indian rupees
$amount             = 1;
$merchant_order_id  = "ABC-" . date("YmdHis");
$card_holder_name   = 'Junaid Shaikh';
$email              = 'coexistech@gmail.com';
$phone              = '9158876092';
$name               = "RazorPay Infovistar";
?>
<section class="pricing-section MusicSec pricingforhome" id="pricing">
    <div class="container ">
        <div class="row heading-div m-0">
            <div class="col-lg-12 text-center op testimonialsdiv" id="pricing-section">
                <h3 class="text-white">Our Pricing
                </h3>
                <span class="line"></span>

            </div>

        </div>
        <div class="row">

            <div class="col-lg-12">
                <ul class="nav nav-pills mb-5 row" id="pills-tab" role="tablist">
                    <li class="nav-item col-md-6 col-lg-6 col-6 pltag oops" role="presentation">
                        <button class="price-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <p>One on One Private Session</p>
                        </button>
                    </li>
                    <li class="nav-item col-md-6 col-lg-6 col-6 pltag" role="presentation">
                        <button class="price-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">

                            <p>Group Session Up to 10 Students</p>
                        </button>
                    </li>

                </ul>
                <div class="tab-content pr" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                                <!-- <h4>₹ 1200 per session</h4>
                                                <h4>Total Price: 9600 <span class="del-price"><del>10105 </del></span></h4> -->

                                                <!-- <img src="public/images/price-coupn.png" /> -->
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


                                                <div>
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
                                                <!-- <h4>₹ 1090 per session</h4>
                                                <h4>Total Price: 22890 <span class="del-price"><del>24880 </del></span></h4>

                                                <img src="public/images/pro.png" /> -->
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
                                                <div>
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
                                                <!-- <h4>₹ 975 per session</h4>
                                                <h4>Total Price: 49725 <span class="del-price"><del>59910 </del></span></h4>

                                                <img src="public/images/Elite.png" /> -->
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

                                                <div>
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
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

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
                                                    <!-- <h4>₹ 475 per session</h4>
                                                    <h4>Total Price: 9990<span class="del-price"><del>10500 </del></span></h4>

                                                    <img src="public/images/price-coupn.png" /> -->
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


                                                    <div>
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
                                                    <!-- <h4>₹ 450 per session</h4>
                                                    <h4>Total Price: 22950 <span class="del-price"><del>24950 </del></span></h4>
                                                    <img src="public/images/pro.png" /> -->
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
                                                    <div>

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
                                                    <!-- <h4>₹ 423 per session</h4>
                                                    <h4>Total Price: 429777 <span class="del-price"><del>51777 </del></span></h4>

                                                    <img src="public/images/Elite.png" /> -->
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

                                                    <div>
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

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
</section>