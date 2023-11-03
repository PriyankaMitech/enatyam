<section class="pricing-section ">
    <form action="/sessions/store" method="post">
        <div class="container ">
            <div class="row heading-div ">
                <div class="col-lg-12 text-center">
                    <h3>Our Pricing
                    </h3>
                    <span class="line"></span>

                </div>

            </div>
            <div class="row">

                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 row" id="pills-tab" role="tablist">
                        <li class="nav-item col-lg-6" role="presentation">
                            <button class="price-btn " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <p>One on One</p>
                                <p>Private Session</p>
                            </button>
                        </li>
                        <li class="nav-item col-lg-6" role="presentation">
                            <button class="price-btn  " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">

                                <p>Group Session</p>
                                <p>Up to 10 Students</p>
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="row pricing-card-section">
                                        <div class="col-lg-4">
                                            <div class="card text-center card-1">
                                                <div class="price-card-head">
                                                    <h3>Basic</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>8 Sessions
                                                    </h2>
                                                    <h4>₹ 1200 per session</h4>
                                                    <h4>Total Price: 9600 <span class="del-price"><del>10105 </del></span></h4>

                                                    <img src="public/images/price-coupn.png" />
                                                    <p style="color:#000;font-size:16px;margin:20px 0px">Duration : 60 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                One on One Private Live Class.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- weekly 2 Video.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time Slot preference.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn Any 1 subject.

                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>
                                                    </ul>


                                                    <div>
                                                        <!-- <a class="btn shop-now-btn" href="<?php //echo base_url('Checkout'); 
                                                                                                ?>" type="button">Book Now</a> -->
                                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                            <a class="btn shop-now-btn" href="javascript:void(0);" onclick="showbooknowLoginModal()" data-bs-toggle="modal" data-bs-target="#bookloginformpopup">Book Now</a>

                                                        <?php else : ?>
                                                            <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=1" type="button">Book Now</a>

                                                        <?php endif; ?>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center card-2">
                                                <div class="price-card-head">
                                                    <h3>Pro</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>21 Sessions
                                                    </h2>
                                                    <h4>₹ 1090 per session</h4>
                                                    <h4>Total Price: 22890 <span class="del-price"><del>24880 </del></span></h4>

                                                    <img src="public/images/pro.png" />
                                                    <p style="color:#fff;font-size:16px;margin:20px 0px">Duration : 120 Days</p>

                                                    <ul class="" style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                One on One Private Live Class.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time Slot preference.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn as many subject as you want.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>

                                                    </ul>


                                                    <div>

                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=2" type="button">Book Now</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center card-3">
                                                <div class="price-card-head">
                                                    <h3>Elite</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>51 Sessions</h2>
                                                    <h4>₹ 975 per session</h4>
                                                    <h4>Total Price: 49725 <span class="del-price"><del>59910 </del></span></h4>

                                                    <img src="public/images/Elite.png" />
                                                    <p style="color:#000;font-size:16px;margin:20px 0px">Duration : 360 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                One on One Private Live Class.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time Slot preference.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn as many subject as you want.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>

                                                    </ul>


                                                    <div>

                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?>?id=3" type="button">Book Now</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <img src="public/images/price.png" width="100%" />

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="row pricing-card-section">
                                        <div class="col-lg-4">
                                            <div class="card text-center card-1">
                                                <div class="price-card-head">
                                                    <h3>Basic</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>21 Sessions
                                                    </h2>
                                                    <h4>₹ 475 per session</h4>
                                                    <h4>Total Price: 9990<span class="del-price"><del>10500 </del></span></h4>

                                                    <img src="public/images/price-coupn.png" />
                                                    <p style="color:#000;font-size:16px;margin:20px 0px">Duration : 120 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                One on One Private Live Class.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- weekly 2 Video.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn Any 1 subject.

                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>
                                                    </ul>


                                                    <div>

                                                        <a class="btn shop-now-btn" href="<?php echo base_url('Checkout'); ?> ?id=4" type="button">Book Now</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center card-2">
                                                <div class="price-card-head">
                                                    <h3>Pro</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>51 Sessions
                                                    </h2>
                                                    <h4>₹ 450 per session</h4>
                                                    <h4>Total Price: 22950 <span class="del-price"><del>24950 </del></span></h4>

                                                    <img src="public/images/pro.png" />
                                                    <p style="color:#fff;font-size:16px;margin:20px 0px">Duration : 200 Days</p>

                                                    <ul class="" style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Group Live Class- upto 10 students.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>

                                                                Learn Any 1 subject.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.

                                                            </span>
                                                        </li>

                                                    </ul>


                                                    <div>

                                                        <a class="btn shop-now-btn" type="submit" href="<?php echo base_url('Checkout'); ?> ?id=5" type="button">Book Now</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center card-3">
                                                <div class="price-card-head">
                                                    <h3>Elite</h3>
                                                    <span class="line"></span>
                                                </div>

                                                <div class="price-card-body">
                                                    <h2>101 Sessions</h2>
                                                    <h4>₹ 423 per session</h4>
                                                    <h4>Total Price: 429777 <span class="del-price"><del>51777 </del></span></h4>

                                                    <img src="public/images/Elite.png" />
                                                    <p style="color:#000;font-size:16px;margin:20px 0px">Duration : 360 Days</p>

                                                    <ul style="padding-left:0px!important">

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Group Live Class- upto 10 students.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Practice Video- Unlimited.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Time : IST 5 Pm to 7 PM.

                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Weekly -quiz.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn as many subject as you want.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                Learn at your own Pace - customisation.
                                                            </span>
                                                        </li>

                                                        <li>
                                                            <span>
                                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>

                                                            </span>
                                                            <span>
                                                                24 X 7 unlimited support for content & doubt clearing.
                                                            </span>
                                                        </li>

                                                    </ul>

                                                    <div>

                                                        <a class="btn shop-now-btn" id="bookNowButton" type="submit" href="<?php echo base_url('Checkout'); ?>?id=6" type="button">Book Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <img src="public/images/price.png" width="100%" />

                                </div>

                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>


    </form>

</section>