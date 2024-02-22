<?php include('header.php'); ?>


<section class="s_header-section">
    <div class="container-fluid mt-2">
        <div class="row ">
            <div class="col-lg-8 col-md-8 col-12 p-5">
                <div class="bannervs">
                    <video class="video-dance bannerv"  controls="1" autoplay="0" loop="0">
                        <source src="<?=base_url(); ?>public/images/Home/Video for home page header.mp4" type="video/mp4">
                    </video>                
                </div>
            </div>
            <div class="col-lg-4 col-md-4 ">
            <div class="banneris">
                <img src="<?=base_url(); ?>public/images/Home/ball.png" class="img-fluid mt-5" alt="Image 4">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="howenatyamWorks mt-5" style="display:none">
    <div class="heading text-center">
        <b<h3 class="title-3">How enatyam Works?</h3></b><span class="line"></span>
    </div>



    <div class="howItWorkSteps">
        <span class="indStep activeStep">
            <span class="stepNum">1</span>
        </span>
        <span class="stepLine"></span>
        <span class="indStep">
            <span class="stepNum">2</span>
        </span>
        <span class="stepLine"></span>
        <span class="indStep">
            <span class="stepNum">3</span>
        </span>
    </div>


    <div>

        <div class="row workSections text-center m-0">
            <div class="col-md-4 col-4 howWorkBlock howWorkBlock1">
                <img src="<?=base_url(); ?>public/images/hew1.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">1</span> <span>Book a Demo</span></p>
                <p class="hwDesc">Book a Free Demo Class with a Tutor.</p>
            </div>
            <div class="col-md-4 col-4 howWorkBlock">
                <img src="<?=base_url(); ?>public/images/hew2.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">2</span> <span>Join LIVE Demo Class</span></p>
                <p class="hwDesc">Attend the Demo class as scheduled.</p>
            </div>

            <div class="col-md-4 col-4 howWorkBlock howWorkBlock3">
                <img src="<?=base_url(); ?>public/images/hew3.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">3</span> <span>Pay and Start</span></p>
                <p class="hwDesc">Use enatyam SecurePay to pay and start your Classes.</p>
            </div>
            <div class="col-md-4 col-4"></div>
            <div class="col-md-4 col-4"><a href="<?php echo base_url('demo'); ?>" class="btn btnstart textAlignCen">Get
                    Started</a> </div>
            <div class="col-md-4 col-4"></div>
        </div>

    </div>


    <!-- <a href="" class="textAlignCen">Get Started</a>
    </div> -->

    <!-- <div class="textAlignCen getStarted">
        <a href="#showCategory" class="primaryButton toCapitalize loud" style="padding: 7px 30px;">Get Started</a>
    </div> -->

</div>
<!-- Line Sepretor Part -->


<div class="row heading-div m-0 pt-5">
    <div class="col-lg-12 text-center co">
        <h3>Courses Offering</h3>
        <span class="line"></span>
    </div>
</div>
<section class="mb-5">
    <div class="">

        <!-- pills -->
        <div class="typesOfDance-tab">

           
            <div class="MusicSec">
                <div class="">

                    <!-- <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Thumbnail Gallery</h1> -->

                    <hr class="mt-2 mb-5">

                    <div class="row text-lg-start">

                        <div class="col-lg-3 col-md-4 col-12 ">
                            <h5 class="text-white" style="text-align: center;">Kathak </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php base_url(); ?>public/images/Home/4.png" alt=""
                                       >
                                </a>
                            </div>

                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem">
                                        <p>3569</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white">4.99</li>
                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Bharatanatyam </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/5.png" alt=""
                                       >
                                </a>
                            </div>

                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem">
                                        <p>2698</p>
                                    </li>
                                   
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Bollywood </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/1.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>

                                    <li class="list-inline-item text-white ml-5">4.9</li>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Western Dance </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/1.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white">4.9</li>
                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Hindustani Vocal </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                                   
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Carnatic Vocal </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                                  
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Bollywood Singing </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Playback Singing </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;">
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                                    
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Yoga </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>

                                    <li class="list-inline-item text-white ml-5">4.9</li>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Meditation </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;">
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                                 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Nuitritional Guidance </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                           
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="text-white" style="text-align: center;">Musical Instruments </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Music/music.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb" style="display:none;" >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white">
                                        <p>2698</p>
                                    </li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white ml-5">4.9</li>
                               
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


            <div class="row p-3 MusicSec1">
                <div class="col-md-6 col-12">
                    <img src="<?=base_url(); ?>public/images/Home/4.png" class="danceimg1 home">
                    <!-- public/images/Home/4.png -->
                </div>

                <div class="col-md-6 col-12 text-col mt-5">
                    <!-- <h3 class="heading"> Kathak</h3> -->
                    <div class="text-right">
                        <div class="h1">Online Dance Classes</div>
                   </div>
                    <p class="text-justify">
                        Embark on a dance adventure like never before with
                        our diverse range of online classes. Immerse yourself in
                        the classical elegance of Kathak, the grace of
                        Bharatanatyam, the vibrant energy of Bollywood, and
                        the contemporary flair of Western dance forms. Our
                        expert instructors bring these styles to life, providing
                        personalized guidance in every online session. Whether
                        you're a beginner or a seasoned dancer, our platform
                        ensures a seamless and enjoyable learning experience.
                        Join us and let the rhythm fuel you passion .

                    </p>

                    <div class="text-center mt-4">
                        <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Dance">START NOW</a>
                    </div>
                </div>
            </div>

            <div class="MusicSec MusicSec1">
                <div class="row m-0 omcd">
                    <div class="col-md-6 col-12 text-col p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right">
                            <div class="h1  text-white">Online Music Classes</div>
                        </div>
                        <p class="text-justify text-white ">
                            Dive into the soulful world of Indian music with our
                            diverse online classes. Elevate your vocal prowess with
                            Hindustani and Carnatic vocal classes, where classical
                            traditions meet modern techniques. Unleash your
                            Bollywood dreams through our specialized Bollywood
                            singing classes, and delve into the art of playback singing
                            for a truly immersive experience. Our faculty, renowned
                            for their exceptional talent, guide you through each note,
                            nurturing your musical journey. At enatyam , we
                            harmonize tradition with innovation, ensuring a
                            melodious learning experience that resonates with the
                            essence of Indian music. Join us and let your musical
                            aspirations reach new heights!
                        </p>

                        <div class="text-center mt-4">
    <a type="button" class="btn btndemoh" href="<?= base_url(); ?>music">START NOW</a>
</div>
                    </div>

                    <div class="col-md-6 col-12 p-0 text-center">
                        <img src="<?=base_url(); ?>public/images/Home/11.png" class="danceimg home">

                    </div>
                </div>
            </div>

            <div class="p-3 MusicSec1">
                <div class="row m-0">
                    <div class="col-md-6 col-12 p-0">
                        <img src="<?=base_url(); ?>public/images/Home/14.png" class="danceimg1 home">

                    </div>

                    <div class="col-md-6 col-12 text-col mt-3 p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right">
                            <div class="h1 ">Online Yoga Classes</div>
                        </div>
                        <p class="text-justify ">
                            Embark on a transformative journey with our online platform, offering
                            a holistic blend of yoga, meditation, and nutritional guidance. Immerse
                            yourself in rejuvenating online yoga and meditation classes, where
                            tranquility meets strength. Seek solace in our expert-led sessions,
                            designed to heal chronic diseases through the therapeutic power of
                            yoga. Complementing our mindful practices is personalized online
                            nutritional guidance, ensuring a comprehensive approach to your wellbeing. Our renowned
                            faculty, known for their expertise, are dedicated
                            to guiding you towards a harmonious life. Join enatyam for a
                            profound experience that nurtures your mind, body, and soul to
                            achieve optimal wellness.
                        </p>

                        <div class="text-center mt-4">
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Yoga">START NOW</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="MusicSec MusicSec1">
                <div class="row m-0 omcd">
                    <div class="col-md-6 col-12 text-col p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right ">
                            <div class="h1 text-white">Online Music Instruments Classes</div>
                        </div>
                        <p class="text-justify text-white ">
                            Strum, Pluck, and Play: Unleash Your Musical Potential
                            Online!
                            Discover the joy of playing musical instruments with our
                            diverse online training. From the soulful strumming of guitars
                            to the intricate melodies of sitars, and the classic notes of
                            keyboards and pianos, our platform offers a harmonious
                            journey for every music enthusiast. Our renowned faculty,
                            brimming with talent and expertise, ensures that your musical
                            aspirations are met with precision and passion. Join enatyam
                            for an immersive experience, where every chord, key, and note
                            is a step towards unlocking your musical prowess. Let the
                            melody begin – learn, play, and create with us!
                        </p>
   
                        <div class="text-center mt-4 ">
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Instruments">START NOW</a>

                        </div>

                    </div>

                    <div class="col-md-6 col-12 p-0 text-center omici">
                        <img src="<?=base_url(); ?>public/images/instrument/c-2.svg" class="danceimg home">
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- Stories That Inspire - Section -->

<section class="learning_Platform-section mb-3">
    <div class="container">
        <div class="row">
            <div class="heading_new text-center imlalp">
                <b>
                    <h3 class="title_4"> India's Most Loved Art Learning Platform<span class="line"></span>
                </b></h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-1">
            </div>


            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">10000</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Students</div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">100</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Instructors</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">25</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Courses</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">50</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Countries</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 Alp-main">
                <div class="Alp-populated">

                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">5</span>
                            <span class="Alp-number-suffix">*</span>
                        </div>
                        <div class="Alp-title">Rated Platform</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
        </div>

    </div>

</section>


<section class="how_Started-section pb-3">
    <div class="container">
        <div class="row m-0">
            <div class="heading_new text-center">
                <b>
                    <h3 class="title_4 "> How To Get Started? <span class="line"></span></h3>
                </b>
            </div>
        </div>

        <div class="row justify-content-center htgs">

            <div class="col-lg-1"></div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon1">
                    <span class="fas fa-bell"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">1. Choose the Right course</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Choose the right course of your choice.</div>
                </div>
                <!-- End of Icon box -->
            </div>


            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon2">
                    <span class="fas fa-book-reader"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">2. Demo class</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Book a FREE live demo session.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon3">
                    <span class="fas fa-pen"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">3. Enroll</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Register with us in any of our program.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon4">
                    <span class="fas fa-search-plus"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">4. Start Learning</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Start learning from your home with the help of our
                        experienced mentors.</div>
                </div>
                <!-- End of Icon box -->
            </div>


            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon5">
                    <span class="fas fa-certificate"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">5. Certification</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Get successfully complete all assessments to
                        demonstrate your proficiency and get certification.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-1"></div>

        </div>

    </div>
</section>
<!-- superstar slide -->


<section class="MusicSec faculty-section p-5">
    <div class="cont-width">

        <div class="row ">
        <h3 class="text-white pb-5" style="text-align:center">Super Star Faculty
        <span class="line linessf"></span> 

        </h3>
      
                
            <div class="col-lg-12">
           
                <div class="owl-carousel owl-theme">
                <div class="item" onclick="showModal('Aditya', 'Yoga Faculty', 'public/images/facultyProfileLatest/2.png','M.Sc.(Human Consciousness and Yogic Science)','Certification YTTC: 200 Hours & E-RYT 500','4 years +','Hath Yoga, Yoga for Strength and Fitness-Weight management- Yoga for anxiety and stress management , Mindfulness practices - Weight Loss, Flexibility and Fitness,Chronic illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/2.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Aditya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>

                             <div class="overlay-text">
                                <h4 class="hedingfsf">Aditya</h4>
                                    <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                    <!-- <p>Certification YTTC: 200 Hours & E-RYT 500</p> -->
                                    <p>Experience 4+ years</p>
                                    <p>Read more...</p>                                        
                                    <p></p>
                             </div>

                        </div>
                    </div>
                    <div class="item" onclick="showModal('Veera', 'Yoga', 'public/images/veera.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/veera.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Veera</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>

                             <div class="overlay-text">
                                <h4 class="hedingfsf">Veera</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>

                        </div>
                    </div>
                    <div class="item" onclick="showModal('Priti S', 'Kathak Dance Faculty', 'public/images/priti.jpg','M.A. in Performing Arts(Kathak)', 'Gold Medalist in Kathak (University Topper)','15 Years +','Kathak, Semi classical and Choreography, An internationally acclaimed kathak artist and professionally trained and graced many international stage')">
                        <div class="faculty-div">
                            <div class="faculty-div1">  
                                <img src="<?=base_url(); ?>public/images/priti.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Priti S</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Kathak Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Priti</h4>
                                <p>M.A. in Performing Arts(Kathak), Gold Medalist in Kathak (University Topper)<br></p>
                                <p>Experience 15 Years +</p>
                                <p>Read more...</p>

                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Neha', 'Semi Classical Dance' ,'public/images/neha.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/neha.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Neha</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Semi Classical Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Neha</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Priyanka B', 'Kathak Dance Faculty', 'public/images/priyanka.jpeg','M.A. in Performing Arts(Kathak)','','5 Years +','Kathak, Semi classical and Choreography, Worked with many Bollywood choreographer and performed at many national level renowed stages')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/priyanka.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Priyanka B</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Kathak Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Priyanka B</h4>
                                <p>M.A. in Performing Arts(Kathak)<br></p>
                                <p>Experience: 5 Years +</p>
                                <p>Read more...</p>    

                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Supriya', 'Yoga Faculty', 'public/images/facultyProfileLatest/4.png','Post Gratuate Diploma in Yoga Science','YTTC 100hrs','Experience 3 Years +','Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/4.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Supriya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga 
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Supriya</h4>
                                <p>Yoga Faculty</p>
                                <p>Post Gratuate Diploma in Yoga Science</p>
                                <!-- <p>Certification: YTTC 100hrs</p> -->
                                <p>Experience - 3 Years + </p>
                                    <!-- <p>techniques : Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains</p>       -->
                                    <p class="">Read More...</p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Amrita M', 'Yoga', 'public/images/facultyProfileLatest/6.png', 'M.Sc.(Human Consciousness and Yogic Science)', 'YTTC 125 Hrs', '3+ years','Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains')">


                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/6.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Amrita M</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Amrita M</h4>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <!-- <p>Certification: YTTC 125 Hrs</p> -->
                                <p>Experience 3+ years </p>
                                <p>Read more...</p>
                                    <!-- <p>techniques : Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains</p>       -->
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Shekhar Pathak', 'Yoga Faculty', 'public/images/facultyProfileLatest/8.png','Phd - Yogic Science, M.Sc.(Human Consciousness and Yogic Science)','Certification: YTTC 125 Hrs','10 years +','Yogic management of Diseases - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/8.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Shekhar Pathak</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Shekhar Pathak</h4>
                                <p>Phd - Yogic Science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <!-- <p>Certification: YTTC 125 Hrs</p> -->
                                <p>Experience 10 years + </p>
                                <p>Read more...</p>
                                    <!-- <p>techniques : Yogic management of Techniques - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness</p>       -->
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Vivek R', 'Yoga Faculty', 'public/images/facultyProfileLatest/9.png','Phd - Yogic and Sports science, M.Sc.(Human Consciousness and Yogic Science), Diploma in Counselling Psychotherapy, B.Sc. in Military Science','YTTC 125 Hrs','4 years +','Hath Yoga, Yoga Nidra, Yoga for Strength and General Fitness, Weight management, Yoga for anxiety and stress management, Mindfulness practices, Weight Loss, Flexibility and Fitness, Chronic illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/10.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Vivek R</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Vivek R</h4>
                                <p>Phd - Yogic and Sports science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <p>Diploma in Counselling Psychotherapy<br></p>
                                <p>Read more...</p>
                                <!-- <p>Certification: YTTC 125 Hrs</p>
                                <p>Experience 3+ years </p>
                                
                                    <p>techniques : Yogic management of Techniques - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness</p>       -->
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Swetha', 'Carnatic Music', 'public/images/sweta.jpg','MA in Carnatic Vocal','Trained over 500 students in Carnatic classical music','Teaching Experience 10 Years +','Carnatic Vocal and Sanskrit Chanting')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/sweta.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Swetha</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Carnatic Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Swetha</h4>
                                   <p>MA in Carnatic Vocal</p>
                                   <p>Experience 10 Years +</p>
                                   <p>Read more...</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item" onclick="showModal('Jaya', 'Bharatanatyam Dance' ,'public/images/jaya.png')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/jaya.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Jaya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bharatanatyam Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Jaya</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Ketki M', 'Hindustani Music Faculty', 'public/images/ketki.jpg','MA in Hindustani Vocal','Doordarshan Grade Artist','6 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal cords, ragas and sur')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/ketki.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Ketki M</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Hindustani Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">ketki</h4>
                                <p>MA in Hindustani Vocal<br></p>
                                <p>Experience 6 years +</p>    
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Koyali S', 'Hindustani Music Faculty', 'public/images/Koyali.png','MA in Hindustani Vocal','Doordarshan Grade Artist, Trained 500+ students, nurturing musical excellence', '10 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal cords, ragas and sur')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Koyali.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Koyali S</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Hindustani Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Koyali S</h4>
                                <p>MA in Hindustani Vocal<br></p>
                                <p>Experience 10 Years +</p>
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Krutika B', 'Bollywood Dance Faculty' ,'public/images/krutika.jpg','Bollywood Dance','Certified Bollywood Dance faculty with training from Shaimak Davar Institute','4 Years +','Collaborated with renowned choreographers, blending expertise in Choreography and performance for a dynamic teaching approach')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/krutika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Krutika B</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Krutika B</h4>
                                <p>Bollywood Dance</p>
                                <p>Certified Bollywood Dance faculty with training from Shaimak Davar Institute</p>
                                <p>Read more...</p>
                                   
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Anika S', 'MA in Hindustani Vocal Faculty' ,'public/images/user.png','Hindustani Vocal','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anika S</div>
                                <div class="faculty-content-team__member-position text-white">
                                Hindustani Vocal
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika S</h4>
                                <p>Hindustani Vocal</p>
                                <p>Doordarshan Grade Artist</p>
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Malvika', 'MA in Bharatnatyam Faculty' ,'public/images/user.png','Bharatnatyam','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Malvika</div>
                                <div class="faculty-content-team__member-position text-white">
                                Bharatnatyam
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika S</h4>
                                <p>Hindustani Dance</p>
                                <p>MA in Bharatnatyam</p>
                                <p>Read more...</p>
                                   
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Anila', 'Bollywood Dance' ,'public/images/Anila.jpeg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Anila.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anila</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anila</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Anika', 'Yoga' ,'public/images/Anika.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Anika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anika</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Ila', 'Bollywood Singing', 'public/images/Ila.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Ila.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Ila</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Singing
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Ila</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Samira', 'Yoga', 'public/images/Samira.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Samira.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Samira</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Samira</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Sanjay', 'Yoga', 'public/images/sanjay.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/sanjay.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Sanjay</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Sanjay</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Happy faces -->
<!-- superstar slide -->
<section class="faculty-section faculty-section1 p-3">
    <div class="container cont-width mt-5">
        <div class="row heading-div m-0">
            <div class="col-lg-12 col-12 text-center">
                <h3>Happy Faces
                </h3>
                <span class="line"></span>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                    <div class="item ">
                        <div class="happyFaces-div row">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/1.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/2.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/3.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/4.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/5.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/7-2.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/8.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/9.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/11-1.png" />
                                <div class="hft">
                                    <h5>Meera (canada)</h5>
                                    <p>During pandemic, I found Enatyam E Learning Kathak dance Platform for
                                    my daughter Meera. It has been now 3+ years and she has done tremendous progress. Meera
                                    finds it very comfortable to learn online. We never thought E-learning could be so much
                                    impactfull. Each dance step is taught with proper theoretical explanation which helps to
                                    bring out facial and body expressions which is the heart of any dance form. Along with regular
                                    online classes, students get enough practice by sharing practice videos. We are grateful to
                                    Enatyam classes for adjusting different time zones. Meera is confident that she will achieve
                                    her milestone in Kathak dance with the help on Enatyam E-Learning Kathak dance Platform.
                                    Thank you</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/16.png" />
                                <div class="hft">
                                    <h5>Aahana ( Canada)</h5>
                                    <p> Enrolling in Enatyam's online Kathak class has been a transformative
                                    experience for my 7-year-old daughter. The instructors' passion and dedication to this
                                    classical dance form are evident in every session. Through clear and engaging instruction,
                                    they break down complex movements into manageable steps, allowing students to progress
                                    at their own pace. Despite the virtual format, the classes are interactive and personalized,
                                    fostering a strong sense of connection within the dance community. I'm grateful for the
                                    opportunity to learn Kathak with Enatyam and would highly recommend it to anyone seeking
                                    to embark on a journey of cultural discovery and artistic expression.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/17.png" />
                                <div class="hft">
                                    <h5>Lavanya (Dubai)</h5>
                                    <p>Initially I was bit hesitant to go for online kathak classes.But Enatyam has
                                    been an incredible online platform which transformed my journey into the world of kathak.
                                    The instructor is not only highly skilled but also deeply passionate about sharing the art form.
                                    The online platform Enatyam is seamless, offering convenient scheduling and high-quality
                                    instruction. I highly recommend Enatyam to anyone looking to embark on a transformative
                                    dance journey.
                                    </p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/19-2.png" />
                                <div class="hft">
                                    <h5>Sweta ( Australia)</h5>
                                    <p>< I'm new to yoga, and Enatyam is the perfect starting point. The
                                    classes are not intimidating, and the instructors break down each pose in a way that's
                                    easy to understand. Feeling more zen already!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/20-2.png" />
                                <div class="hft">
                                    <h5>Sneha (Canada )</h5>
                                    <p >Enatyam's yoga classes are like a breath of fresh air. The instructors
                                    create a friendly atmosphere, making the sessions enjoyable. It's become a daily ritual
                                    that I genuinely look forward to.</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/10-1.png" />
                                <div class="hft">
                                    <h5>Tia’mom ( Canada)</h5>
                                    <p>My daughter Antara has been learning Kathak from Enatyam for
                                    almost 3 years now. Our overall experience has been extremely satisfactory. The class timings
                                    are adjusted as per our convenience since we are overseas. The pace of teaching both theory
                                    and practical is based as per the student's needs. I would recommend it for any parent who
                                    wants to enroll their kids for any of the various art forms that they offer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/21-1.png" />
                                <div class="hft">
                                    <h5>Kavita ( Pune)</h5>
                                    <p> I've tried a few online yoga platforms, but Enatyam stands out. The
                                    variety of classes keeps things interesting, and the instructors feel like friends guiding
                                    you through a mindful journey. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/23-1.png" />
                                <div class="hft">
                                    <h5>Ayesha ( Singapore )</h5>
                                    <p>Enatyam's yoga is a perfect fit for a busy mom like me. The quick
                                    sessions are manageable, and the instructors make it feel like a mini wellness retreat.
                                    Grateful for this accessible and effective platform!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/24-1.png" />
                                <div class="hft">
                                    <h5>Rajiv ( Lucknow )</h5>
                                    <p>The variety of yoga classes on Enatyam is impressive. Whether I need a
                                    gentle stretch or an energizing flow, there's something for every mood. The instructors
                                    make it easy for anyone to enjoy the benefits of yoga</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/25.png" />
                                <div class="hft">
                                    <h5>Vikram ( Delhi )</h5>
                                    <p>Enatyam's yoga classes have made me realize that yoga is for everyone.
                                    The inclusive approach of the instructors and the straightforward guidance make it a
                                    comfortable and enjoyable practice."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/27-1.png" />
                                <div class="hft">
                                    <h5> Vishal ( Chandigarh ) </h5>
                                    <p>I've always struggled to stick with a workout routine, but
                                    Enatyam's yoga has been a consistent part of my day. The short sessions fit into my
                                    schedule, and the instructors' encouragement keeps me motivated."</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/28-1.png" />
                                <div class="hft">
                                    <h5> Kajal ( Delhi ) </h5>
                                    <p>I appreciate how Enatyam's yoga classes cater to various levels. Whether
                                    you're a beginner or an experienced yogi, there's always room for growth. The instructors
                                    make sure everyone feels welcome."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/29-1.png" />
                                <div class="hft">
                                    <h5>Scarlett family ( Germany ) </h5>
                                    <p>yoga is a daily dose of positivity for me . The instructors
                                    radiate good vibes, and the classes have become my source of calm in the midst of a
                                    busy schedule. A fantastic platform for holistic well-being!"
                                    </p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/31.png" />
                                <div class="hft">
                                    <h5>Emma ( UK )</h5>
                                    <p>yoga is my daily escape from the hustle. The instructors make it easy to
                                    disconnect and focus on the present moment. It's a simple yet powerful practice that has
                                    become a non-negotiable in my routine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/32.png" />
                                <div class="hft">
                                    <h5>Michael (Mike) ( USA)</h5>
                                    <p>Enatyam's yoga is like a personal wellness retreat at home. The
                                    instructors create a serene atmosphere, and the classes feel like a journey into both
                                    physical and mental well-being. Truly transformative
                                    </p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-2">
                                <img src="<?=base_url(); ?>public/images/happyfaces/16.png" />
                                <div class="hft">
                                    <h5> Oorja Sinha ( Pune)</h5>
                                    <p>I made significant improvement in my dancing under the guidance of
                                    Priti mam, I was able to complete first year exam in Kathak. Earlier I could only dream of
                                    learning Kathak but this dream became a reality with the blessings and dedication of my
                                    teacher.Priti mam teaches with immense patience and detail. E-natyam allows me to learn
                                    from anywhere with convenient timings from amazing gurus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/18-1.png" />
                                <div class="hft">
                                    <h5>Aiden C ( London -Uk)</h5>
                                    <p>Enatyam's yoga courses are a total game-changer for me. The
                                    instructors keep it real, making every pose feel achievable. It's like having a personal yoga
                                    guide right in my living room.</p>
                                </div>
                            </div>
                            <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/4.png" />
                                <div class="hft">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faculty-section faculty-section2 p-3">
    <div class="container cont-width mt-5">
        <div class="row heading-div m-0">
            <div class="col-lg-12 col-12 text-center">
                <h3>Happy Faces
                </h3>
                <span class="line"></span>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                    <div class="item ">
                        <div class="happyFaces-div row">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/1.png" />
                                <div class="hft">
                                    <h5>Raj</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                           
                            
                           

                 
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/3.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                      

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/5.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/8.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                          

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/11-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/17.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                         

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/20-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                          

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/21-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/24-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                          

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/27-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/29-1.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                          

                        </div>
                    </div>
                    <div class="item">
                        <div class="happyFaces-div">
                            <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/32.png" />
                                <div class="hft">
                                    <h5>Riya</h5>
                                    <p >It is a long established fact that a reader will be distracted by the readable content of a...</p>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="stories-section MusicSec p-3">
    <div class="container">
        <div class="line_1">
            <div class="row">
                <h3 class="text-white p-3" style="text-align:center"> Testimonials<br>
                    <span class="line"></span> 
                </h3> 
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div>
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                            width="540" height="480"
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- <div class="col-md-6 col-lg-6 col-12"> -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                        <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                            width="640" height="260"
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                            width="640" height="260"
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="ST_Inspire-element ST_Inspire-element-6b952c1 ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="6b952c1" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/XLAu2-6zcxQ","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                    <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                            width="640" height="260"
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-12">
                        <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                            width="640" height="260"
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-4 col-lg-4 col-12">
                    <div class="ST_Inspire-element ST_Inspire-element-aa0bc0c ST_Inspire-widget ST_Inspire-widget-video" data-id="aa0bc0c" data-element_type="widget" data-settings="{"youtube_url":"https:\/\/youtu.be\/aV_xErXRUYE","video_type":"youtube","controls":"yes"}" data-widget_type="video.default">
                    <div class="ST_Inspire-widget-container">
                    <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                    <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Kathak online learning expereince on enatyam II Tia Canada II kids kathak learning from beginners" width="640" height="360" src="https://www.youtube.com/embed/aV_xErXRUYE?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=11" id="widget12"></iframe>
                    </div>
                    </div>
                    </div>

                    </div> -->

                <!-- <div class="col-md-12 col-lg-12 col-12 ST_Inspire-widget-container2 mb-5">
                    <a class="btn join-now-btn" href="<? // php // echo base_url('demo');
                    ?>">Inspired ?<br>Join Now!</a>
                    </div> -->
            </div>
        </div>
    </div>
</section>


<!-- Line Sepretor Part -->



<!-- Indias Most Loved Art learning Platform -->

<?php include('pricing.php'); ?>


<!-- one stop solution -->


<!-- comming soon -->
<section class="comming-section" style="display:none">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 text-center coming-soon-img "><img src="<?=base_url(); ?>public/images/logo3.png" width="15%"
                    class="commingsoonimg" /></div>
            <div class="col-lg-12" style="padding-left:opx">
                <div class="accordion-item">
                </div>
                <div class="row coms-row">
                    <div class="col-lg-6 col-md-7 col-xs-6 col-sm-4">
                        <ul class="coming-soon-ul">
                            <li> Super Speaker : Public Speaking</li>
                            <li>Young Shakespeare : Creative Writing</li>
                            <li>Super Coder : Coding for Kids</li>
                            <li>Video Editing</li>
                            <li>Art & Craft</li>
                            <li>Creative Thinking</li>
                            <li>Vedic Mathematics</li>
                            <li>Language Learning</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5  ">
                        <p class="comming-soon-p">Exciting times ahead! We are thrilled to announce that a new
                            <br>subject tailored specifically for kids is on its way to our eLearning<br> platform.
                            Currently in the test phase, this engaging and educational <br> content is designed to spark
                            curiosity and fuel young minds. Stay <br> tuned as we prepare to
                            launch an enriching learning experience for<br> children everywhere!</p>
                        <P class="comming-soon-p">
                            Join our exclusive test run program and experience the future of education firsthand.
                            Limited spots available!
                        </P>
                        <P class="comming-soon-p">
                            write us to be the part of our test run program :<br><b><a href="mailTo:hello@enatyam.com">
                                    hello@enatyam.com</a></b>
                        </p>
                    </div>
                </div>
</section>

<?php include('bookdemocallb.php'); ?>
<section class="faq-section MusicSec">
<div class="container cont-width">
<!-- <div class="row">
<div class="col-lg-1 col-md-1 col-12 faqd"><img src="<?=base_url(); ?>public/images/logo2.png" class="dancefimg" /></div> -->
<div class="row">
<h3 class="text-white p-3" style="text-align:center"> FAQ<br>
        <span class="line"></span> 
                </h3>
<div class="col-lg-6 col-md-6 col-12 faqdance">

<div class="">
        <div class="accordion-item">
        <div class="accordion-item-header text-white">
        <span class="question-text"> What types of yoga classes do you offer online? </span>
        </div>
        <div class="accordion-item-body">
        <div class="accordion-item-body-content text-white">
        We offer a variety of yoga classes online, including vinyasa, hatha, restorative, yin,
        and more..</div>
        </div>
        </div>
</div>
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Do I need to have any prior experience with yoga to join your online classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            No, our online classes are suitable for all levels, from beginner to advanced.</div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What equipment do I need for online yoga classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            You will need a yoga mat and any additional props that your instructor recommends, such
            as blocks, straps, or blankets.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How do I join an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Simply sign up for a class on our website and we will provide you with a link to join
            the class online. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I join a class at any time, or do I need to join at a speciﬁc time? </span> </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Our online classes are offered at speciﬁc times, so you will need to join the class
            at the designated time. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What if I can't make it to a live online class?</span> </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            We also offer on-demand classes that you can access at any time, so you can
            practice yoga on your own schedule.</div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Is there any special software or technology required to join an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            You will need a device (such as a computer, tablet, or smartphone) with internet
            access and a webcam in order to join our online classes. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How long are your online yoga classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Our classes typically run for 60-90 minutes, depending on the type of class.
            </div>
            </div>
            </div>
<!-- </div> -->

<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I interact with the instructor during an online class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Yes, our online classes include interactive elements such as Q&A sessions
            and feedback from the instructor. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What is online yoga? </span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Online yoga is the practice of yoga that is done through a virtual platform
            like Zoom, Skype, or YouTube. It allows you to practice yoga from the
            comfort of your own home.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What equipment do I need for online yoga?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            All you need is a yoga mat, comfortable clothing, and a stable internet
            connection. Some classes may also require additional props like blocks,
            straps, and blankets.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How do I choose the right online yoga class for me?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Consider your experience level, the type of yoga you prefer, and your
            goals when choosing an online yoga class. Look for classes that are
            tailored to your needs and interests.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I ask questions during an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Yes, most online yoga classes offer the opportunity to ask questions and
            receive feedback. You can use the chat feature or unmute yourself to ask
            questions during the class. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <!-- <div class="accordion-item-header">
            <span class="question-text"> Is online yoga as effective as in-person yoga? </span>
            </div> -->
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Online yoga can be just as effective as in-person yoga, as long as you
            have a good internet connection and a dedicated space to practice. Many
            online yoga classes offer personalized instruction and modiﬁcations to
            help you get the most out of your practice. </div>
            </div>
            </div>
            </div>
<!-- </div> -->

                <div class="col-lg-6 col-md-6 col-12 faqdance">
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Is online yoga as effective as in-person yoga? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Online yoga can be just as effective as in-person yoga, as long as you
                                have a good internet connection and a dedicated space to practice. Many
                                online yoga classes offer personalized instruction and modiﬁcations to
                                help you get the most out of your practice. </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Can I practice online yoga if I am a beginner?</span> </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Yes, online yoga is suitable for beginners. Many online yoga classes
                                offer modiﬁed poses and variations to accommodate different experience
                                levels. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How often should I practice online yoga?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                The frequency of your online yoga practice depends on your goals and
                                schedule. It's generally recommended to practice yoga at least 2-3 times
                                a week for maximum beneﬁts. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What are the beneﬁts of practicing online yoga?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                The beneﬁts of practicing online yoga are similar to those of in-person
                                yoga, including improved ﬂexibility, strength, balance, and stress
                                relief. Additionally, practicing yoga from home can save you time and
                                money on commuting to a studio.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What would be my batch timing ? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                <ul style="padding-left: 1rem;">
                                    <li>Age group 6 to 13: 1-4 PM</li>
                                    <li>Age group 14 to 20: 4-7 PM</li>
                                    <li>Age group 21 to 45: 7 to 9 PM</li>
                                    <li>Age group 45+: 6:30-10:30 PM</li>
                                    <li>International Students (USA/Europe): 8PM to 12PM IST</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How many students will be accommodated in a single batch?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                Per batch maximum 6 students will be admitted.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Will the course provide a certificate?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Yes, we do provide certifications after completion of course.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How to cover up if I missed a session?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                We provide recorded content of the class to cover whatever is missed.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text">What are the policies for refund if i am not comfortable with the class?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                We have no question asked refund policy and all the balances will be
                                transferred within a weeks time. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What are the minimum qualifications and prerequisites to attend the classes?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                No, minimum qualifications required, anyone above 6+ can attend.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How can I arrange a doubt clearing session?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                You can record your practice video and our mentors will do counselling after every class
                                and give you suggestions if required. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text">How do I contact the team in case of any doubts and queries?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                You can drop a mail at contact@www.enatyam.org and our team will get in touch with you
                                within 24-48 hours.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> I’ve done the payment but haven’t received the access to my classes yet? </span></div>
                        <div class="accordion-item-body"> 
                            <div class="accordion-item-body-content text-white">
                                You can drop a mail at contact@www.enatyam.org and our team will get in touch with you
                                within 24-48 hours. </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

</section>


<!-- The studio that goes with you -->
<section class="p-5">
    <div class="container pt-5">
        <div class="row">
            <!-- <div class="row heading-div m-0"> -->
            <!-- <div class="col-lg-12 col-12 text-center"> -->
            <h1 class="studioText text-center ">The Studio That Moves With You</h1>
            <!-- <span class="line"></span> -->
            <img src="<?php echo base_url(); ?>public/images/Home/GoesWhereverGo!.png" />
            <!-- </div> -->
            <!-- </div> -->


            <!-- C:\xampp\htdocs\enatyam\public\images\Home\GoesWherever YouGo!-2.png -->
        </div>
    </div>
</section>


<div id="facultyModal" class="modal">

    <div class="modal-content wm">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="staff-wrapper maxwidth"> 
    
            <article class="staff-box"> 
                <img src="" alt="Susan Stark"  id="imgf" />
                <header id="facultyName"></header>
                <div id="facultyDesignation"></div>
                <div id="facultyQualifications"></div>
                <div id="facultyCertifications"></div>
                <div id="facultyExperience"></div>
                <div id="FacultyDetails"></div>
                <!-- <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is...</p> -->
                <!-- <a href="mailto:">sstark@asn-online.org</a> -->
            </article>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>

