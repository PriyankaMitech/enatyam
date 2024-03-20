<?php include('header.php'); ?>


<!-- <section class="s_header-section">
    <div class="container-fluid mt-2">
        <div class="row ">
            <div class="col-lg-8 col-md-8 col-12 p-5">
                <div class="bannervs">
                    <video class="video-dance bannerv"  controls="1" autoplay="0" loop="0">
                        <source src="<?=base_url(); ?>public/images/Yoga/videoforYogaPageheader.mp4" type="video/mp4">
                    </video>                
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="banneris">
                <img src="<?=base_url(); ?>public/images/Yoga/yogablack.png" class="img-fluid mt-5" alt="Image 4">
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="s_header-section">
    <div class="container-fluid mt-2">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-12 p-5">
                <div class="bannervs">
                    <video class="video-dance bannerv" autoplay loop muted controls="1">
                        <source src="<?=base_url(); ?>public/images/Yoga/videoforYogaPageheader.mp4" type="video/mp4">
                    </video>                
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 bsimg">
            <div class="banneris">
                <img src="<?=base_url(); ?>public/images/Home/ball.png" class="img-fluid mt-5" alt="Image 4">
                </div>
            </div> -->
        </div>
    </div>
</section>
<section class="btnSection1 yogapagebtn">
    <div class="container">
        <div class="typesOfYoga-tab">


            <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                <!-- Prenatal Yoga -->
                <li class="col-lg-1 col-md-1 hidey">
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link active" id="pills-PrenatalYoga-tab" data-bs-toggle="pill" data-bs-target="#pills-PrenatalYoga" type="button" role="tab" aria-controls="pills-PrenatalYoga" aria-selected="true">Prenatal Yoga</button>
                </li>
                <!-- Stress Reduction Yoga -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-StressReduction-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReduction" type="button" role="tab" aria-controls="pills-StressReduction" aria-selected="false">Stress Reduction Yoga</button>
                </li>
                <!-- Flexibility Yoga -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Flexibility-tab" data-bs-toggle="pill" data-bs-target="#pills-Flexibility" type="button" role="tab" aria-controls="pills-Flexibility" aria-selected="false">Flexibility Yoga</button>
                </li>
                <!-- Weight Loss Yoga -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-WeightLossYoga-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossYoga" type="button" role="tab" aria-controls="pills-WeightLossYoga" aria-selected="false">Weight Loss Yoga</button>
                </li>
                <!-- Everyday Yoga -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-EverydayYoga-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYoga" type="button" role="tab" aria-controls="pills-EverydayYoga" aria-selected="false">Everyday Yoga</button>
                </li>
                <li class="col-lg-1 col-md-1 hidey">
                </li>
                <li class="col-lg-1 col-md-1 hidey">
                </li>

                <!-- Yoga for chronic Disease -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-YogaforChronic-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronic" type="button" role="tab" aria-controls="pills-YogaforChronic" aria-selected="false">Yoga for Chronic Disease</button>
                </li>
                <!-- Yoga for Kids -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-YogaforKids-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKids" type="button" role="tab" aria-controls="pills-YogaforKids" aria-selected="false">Yoga for Kids</button>
                </li>
                <!-- Meditation -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Meditation-tab" data-bs-toggle="pill" data-bs-target="#pills-Meditation" type="button" role="tab" aria-controls="pills-Meditation" aria-selected="false">Meditation</button>
                </li>
                <!-- Customise your Yoga Plan -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-CustomiseYoga-tab" data-bs-toggle="pill" data-bs-target="#pills-CustomiseYoga" type="button" role="tab" aria-controls="pills-CustomiseYoga" aria-selected="false">Customise your Yoga Plan</button>
                </li>

                <!-- Nutrition Counselling  -->
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-NutritionCounselling-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounselling" type="button" role="tab" aria-controls="pills-NutritionCounselling" aria-selected="false">Nutrition Counselling</button>
                </li>
                <li class="col-lg-1 col-md-1 hidey">
                </li>
            </ul>

            <div class="tab-content " id="pills-tabContent">
                <!-- Prenatal Yoga   -->
                <div class="tab-pane fade show active" id="pills-PrenatalYoga" role="tabpanel" aria-labelledby="pills-PrenatalYoga-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/prenatalYoga.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left text-col">
                            <h3 class="heading"> Prenatal Yoga</h3>

                            <p class="yogapagecotent">
                                The course focuses on making life healthier and building core stength by practicing Yoga in scientific way . Online prenatal yoga classes provide expectant mothers with a convenient and accessible way to stay active and healthy throughout their pregnancy. These classes are designed to help pregnant women reduce stress, alleviate common pregnancy-related discomforts, and prepare for childbirth. Online classes offer flexibility for busy schedules and can be accessed from the comfort of one’s own home. In addition to physical benefits, prenatal yoga classes can also provide emotional support and a sense of community for expectant mothers. With the rise of virtual platforms, there has never been a better time to take advantage of the many benefits of online prenatal yoga classes.ogical well-being, and overall health.
                            </p>
                            <div class="text-end mt-4 yogabtn">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>

                        </div>
                    </div>
                    <section class="learningBtn learningBtny learningBtnyoga">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 col-md-1 hide">

                                </li>

                                <li class="col-lg-2 col-md-3 col-6 list-inline-item ">
                                    <a href="#learnyoga" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-2 col-md-2 col-6 list-inline-item ">
                                    <a href="#mod-yoga" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-2 col-md-2 col-6 list-inline-item ">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="col-lg-2 col-md-2 col-6 list-inline-item ">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-2 col-md-3 col-6 list-inline-item ">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 col-md-1 hide">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>
                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mtfyogm" id="mod-yoga">
                        <div class="container">
                       
                            <div class="month-row">
                                <div class="row ">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-Month1-tab" data-bs-toggle="pill" data-bs-target="#pills-Month1" type="button" role="tab" aria-controls="pills-Month1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month2-tab" data-bs-toggle="pill" data-bs-target="#pills-Month2" type="button" role="tab" aria-controls="pills-Month2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month3-tab" data-bs-toggle="pill" data-bs-target="#pills-Month3" type="button" role="tab" aria-controls="pills-Month3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month4-tab" data-bs-toggle="pill" data-bs-target="#pills-Month4" type="button" role="tab" aria-controls="pills-Month4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month5-tab" data-bs-toggle="pill" data-bs-target="#pills-Month5" type="button" role="tab" aria-controls="pills-Month5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month6-tab" data-bs-toggle="pill" data-bs-target="#pills-Month6" type="button" role="tab" aria-controls="pills-Month6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month7-tab" data-bs-toggle="pill" data-bs-target="#pills-Month7" type="button" role="tab" aria-controls="pills-Month7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month8-tab" data-bs-toggle="pill" data-bs-target="#pills-Month8" type="button" role="tab" aria-controls="pills-Month8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month9-tab" data-bs-toggle="pill" data-bs-target="#pills-Month9" type="button" role="tab" aria-controls="pills-Month9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month10-tab" data-bs-toggle="pill" data-bs-target="#pills-Month10" type="button" role="tab" aria-controls="pills-Month10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month11-tab" data-bs-toggle="pill" data-bs-target="#pills-Month11" type="button" role="tab" aria-controls="pills-Month11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month12-tab" data-bs-toggle="pill" data-bs-target="#pills-Month12" type="button" role="tab" aria-controls="pills-Month12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-Month1" role="tabpanel" aria-labelledby="pills-Month1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Prenatal Yoga:</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The beneﬁts of prenatal yoga.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the changes in the body during pregnancy.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic prenatal yoga poses and modiﬁcations. </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-Month2" role="tabpanel" aria-labelledby="pills-Month2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Breathing and Relaxation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Breathing techniques for relaxation and stress relief.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Prenatal yoga poses for relaxation. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of relaxation for a healthy pregnancy.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-Month3" role="tabpanel" aria-labelledby="pills-Month3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Balance and Stability</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Balancing prenatal yoga poses for stability and core strength.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating balance training into a prenatal yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of balance training during pregnancy. </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-Month4" role="tabpanel" aria-labelledby="pills-Month4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Digestion and Constipation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses that aid digestion and prevent constipation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for digestive health. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between digestion and a healthy pregnancy.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-Month5" role="tabpanel" aria-labelledby="pills-Month5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Flexibility and Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for improving ﬂexibility and reducing pain.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating stretching into a prenatal yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of ﬂexibility training during pregnancy.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-Month6" role="tabpanel" aria-labelledby="pills-Month6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6 : Yoga for Labor Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for labor preparation and pain management.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for labor. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the stages of labor and how yoga can help.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-Month7" role="tabpanel" aria-labelledby="pills-Month7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 7: Yoga for Back Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for relieving back pain during pregnancy.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating back pain relief into a prenatal yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of back pain relief during pregnancy.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-Month8" role="tabpanel" aria-labelledby="pills-Month8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Hip and Pelvic Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for relieving hip and pelvic pain during pregnancy.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating hip and pelvic pain relief into a prenatal yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of hip and pelvic pain relief during pregnancy.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-Month9" role="tabpanel" aria-labelledby="pills-Month9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Mindful Pregnancy</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mindful practices for a healthy pregnancy.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Prenatal yoga poses for improving body awareness and self-care. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of mindfulness during pregnancy.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-Month10" role="tabpanel" aria-labelledby="pills-Month10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Self-Love and Acceptance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for self-love and acceptance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for self-acceptance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between self-love and a healthy pregnancy.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-Month11" role="tabpanel" aria-labelledby="pills-Month11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Labor and Delivery</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for labor and delivery.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for labor and delivery. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of prenatal yoga for labor and delivery.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Choreography for Stage Performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-Month12" role="tabpanel" aria-labelledby="pills-Month12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Postpartum Recovery</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Prenatal yoga poses for postpartum recovery.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the changes in the body after birth. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of postpartum yoga for recovery.</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!-- Stress Reduction Yoga  -->
                <div class="tab-pane fade" id="pills-StressReduction" role="tabpanel" aria-labelledby="pills-StressReduction-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/StressReductionImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Stress Reduction Yoga</h3>
                            <p>
                                Online stress reduction yoga is becoming increasingly popular as people look for ways to manage their stress levels in a busy and demanding world. Stress reduction yoga combines physical poses, breathing exercises, and mindfulness techniques to help reduce stress and anxiety, improve focus and concentration, and promote relaxation. Online classes offer the convenience of practicing from home and at any time of the day.

                                Moreover, many online stress reduction yoga classes cater to different skill levels, making it accessible to everyone. Practicing yoga regularly can also have numerous physical beneﬁts, such as reducing inﬂammation, improving sleep quality, and boosting the immune system. If you’re looking for an effective way to reduce stress and enhance your overall well-being, online stress reduction yoga could be the perfect solution.
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga1" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga1" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>
                    <section class="learningsec" id="learnyoga1">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mtfyogm" id="mod-yoga1">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-StressReductionMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth1" type="button" role="tab" aria-controls="pills-StressReductionMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth2" type="button" role="tab" aria-controls="pills-StressReductionMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth3" type="button" role="tab" aria-controls="pills-StressReductionMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth4" type="button" role="tab" aria-controls="pills-StressReductionMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth5" type="button" role="tab" aria-controls="pills-StressReductionMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth6" type="button" role="tab" aria-controls="pills-StressReductionMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth7" type="button" role="tab" aria-controls="pills-StressReductionMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth8" type="button" role="tab" aria-controls="pills-StressReductionMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth9" type="button" role="tab" aria-controls="pills-StressReductionMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth10" type="button" role="tab" aria-controls="pills-StressReductionMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth11" type="button" role="tab" aria-controls="pills-StressReductionMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-StressReductionMonth12" type="button" role="tab" aria-controls="pills-StressReductionMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-StressReductionMonth1" role="tabpanel" aria-labelledby="pills-StressReductionMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Stress Reduction Yoga</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the effects of stress on the body and mind.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The beneﬁts of stress reduction yoga.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic stress reduction yoga poses and modiﬁcations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth2" role="tabpanel" aria-labelledby="pills-StressReductionMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Breathing and Relaxation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Breathing techniques for relaxation and stress relief./li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Stress reduction yoga poses for relaxation. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of relaxation for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth3" role="tabpanel" aria-labelledby="pills-StressReductionMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Balance and Stability:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Balancing stress reduction yoga poses for stability and core strength.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating balance training into a stress reduction yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of balance training for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth4" role="tabpanel" aria-labelledby="pills-StressReductionMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Digestion and Gut Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses that aid digestion and promote gut health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for digestive health. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between digestion and stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth5" role="tabpanel" aria-labelledby="pills-StressReductionMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Flexibility and Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for improving ﬂexibility and reducing pain.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating stretching into a Stress reduction yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of ﬂexibility training for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth6" role="tabpanel" aria-labelledby="pills-StressReductionMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Mindful Living</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mindful practices for reducing stress.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Stress reduction yoga poses for improving body awareness and self-care. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of mindfulness for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth7" role="tabpanel" aria-labelledby="pills-StressReductionMonth7-tab">
                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 7: Yoga for Back Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for relieving back pain and tension.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating back pain relief into a stress reduction yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of back pain relief for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth8" role="tabpanel" aria-labelledby="pills-StressReductionMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Neck and Shoulder Pain Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for relieving neck and shoulder pain and tension.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating neck and shoulder pain relief into a stress reduction yoga practice .</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of neck and shoulder pain relief for reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth9" role="tabpanel" aria-labelledby="pills-StressReductionMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Self-Care and Self-Love</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for self-care and self-love.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for self-acceptance and stress reduction. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between self-care, self-love, and reducing stress.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth10" role="tabpanel" aria-labelledby="pills-StressReductionMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Sleep and Insomnia</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for improving sleep and reducing insomnia.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for relaxation and better sleep. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of stress reduction yoga for improving sleep.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth11" role="tabpanel" aria-labelledby="pills-StressReductionMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Anxiety Reduction</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for reducing anxiety.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for anxiety reduction.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of stress reduction yoga for reducing anxiety.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-StressReductionMonth12" role="tabpanel" aria-labelledby="pills-StressReductionMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Overall Well-being</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Stress reduction yoga poses for overall well-being.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the connection between stress reduction yoga and a healthy lifestyle. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of stress reduction yoga for overall well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>


                <!-- Flexibility Yoga -->
                <div class="tab-pane fade show" id="pills-Flexibility" role="tabpanel" aria-labelledby="pills-Flexibility-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/FlexibilityYogaImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Flexibility Yoga</h3>
                            <p class="">
                                Online ﬂexibility yoga classes provide a convenient and effective way to improve ﬂexibility and range of motion. Yoga is a low-impact form of exercise that focuses on stretching and relaxation techniques, which can help to increase ﬂexibility and reduce stiffness in the body. Online classes offer a ﬂexible option for people to practice yoga from the comfort of their own homes, at their own pace.
                                Additionally, online classes often offer a range of options, from beginner to advanced, so people of all ﬁtness levels can ﬁnd a class that meets their needs.
                                Joining an online ﬂexibility yoga class can be a great way to improve your physical ﬁtness and enhance your overall wellbeing.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga2" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga2" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga2">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga2">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-FlexibiityMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth1" type="button" role="tab" aria-controls="pills-FlexibiityMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth2" type="button" role="tab" aria-controls="pills-FlexibiityMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth3" type="button" role="tab" aria-controls="pills-FlexibiityMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth4" type="button" role="tab" aria-controls="pills-FlexibiityMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth5" type="button" role="tab" aria-controls="pills-FlexibiityMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth6" type="button" role="tab" aria-controls="pills-FlexibiityMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth7" type="button" role="tab" aria-controls="pills-FlexibiityMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth8" type="button" role="tab" aria-controls="pills-FlexibiityMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth9" type="button" role="tab" aria-controls="pills-FlexibiityMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth10" type="button" role="tab" aria-controls="pills-FlexibiityMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month11-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth11" type="button" role="tab" aria-controls="pills-FlexibiityMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FlexibiityMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-FlexibiityMonth12" type="button" role="tab" aria-controls="pills-FlexibiityMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-FlexibiityMonth1" role="tabpanel" aria-labelledby="pills-FlexibiityMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Flexibility Yoga</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the beneﬁts of ﬂexibility yoga.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic ﬂexibility yoga poses and modiﬁcations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Proper alignment and breathing techniques for safe practice.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth2" role="tabpanel" aria-labelledby="pills-FlexibiityMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Breathing and Relaxation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Week 2: Yoga for Hamstring Flexibility
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Flexibility yoga poses for stretching the hamstrings. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating hamstring stretching into a ﬂexibility yoga practice.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of hamstring ﬂexibility for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth3" role="tabpanel" aria-labelledby="pills-FlexibiityMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Hip Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Flexibility yoga poses for stretching the hips.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating hip stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of hip ﬂexibility for overall ﬂexibility and mobility. </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth4" role="tabpanel" aria-labelledby="pills-FlexibiityMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Shoulder Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for stretching the shoulders.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating shoulder stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of shoulder ﬂexibility for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth5" role="tabpanel" aria-labelledby="pills-FlexibiityMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Spine Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for stretching the spine.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating spine stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of spine ﬂexibility for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth6" role="tabpanel" aria-labelledby="pills-FlexibiityMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Chest and Heart Opening</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for opening the chest and heart.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating chest and heart opening into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of chest and heart opening for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth7" role="tabpanel" aria-labelledby="pills-FlexibiityMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 7: Yoga for Full-Body Flexibilityf</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for stretching the entire body.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating full-body stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of full-body ﬂexibility for overall ﬂexibility and mobility.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth8" role="tabpanel" aria-labelledby="pills-FlexibiityMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Wrist and Hand Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for stretching the wrists and hands.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating wrist and hand stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of wrist and hand ﬂexibility for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth9" role="tabpanel" aria-labelledby="pills-FlexibiityMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Ankle and Foot Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for stretching the ankles and feet.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating ankle and foot stretching into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of ankle and foot ﬂexibility for overall ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth10" role="tabpanel" aria-labelledby="pills-FlexibiityMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Balance and Stability</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Balancing ﬂexibility yoga poses for stability and core strength.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating balance training into a ﬂexibility yoga practice.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of balance training for improving ﬂexibility and mobility.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth11" role="tabpanel" aria-labelledby="pills-FlexibiityMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Relaxation and Stress Reduction</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Flexibility yoga poses for relaxation and stress reduction.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating relaxation and stress reduction into a ﬂexibility yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of relaxation and stress reduction for improving ﬂexibility and mobility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-FlexibiityMonth12" role="tabpanel" aria-labelledby="pills-FlexibiityMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Overall Well-being</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> PFlexibility yoga poses for overall well-being.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the connection between ﬂexibility yoga and a healthy lifestyle.. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of ﬂexibility yoga for overall well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!-- WeightLoss Yoga -->
                <div class="tab-pane fade show" id="pills-WeightLossYoga" role="tabpanel" aria-labelledby="pills-WeightLossYoga-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/WeightLossYogaImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Weight Loss Yoga</h3>
                            <p class="">
                                Online weight loss yoga classes offer a convenient and effective way to shed those extra pounds and achieve a healthy body weight. Yoga can be a great addition to a weight loss program, as it helps to increase strength, ﬂexibility, and mindfulness. Online classes provide a ﬂexible option for people to practice yoga from the comfort of their own homes, at their own pace.

                                Additionally, online classes often offer a variety of options, from beginner to advanced, so people of all ﬁtness levels can ﬁnd a class that meets their needs. Joining an online weight loss yoga class can be a great way to jumpstart your weight loss journey and achieve your ﬁtness goals.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga3" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga3" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga3">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga3">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-WeightLossMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth1" type="button" role="tab" aria-controls="pills-WeightLossMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth2" type="button" role="tab" aria-controls="pills-WeightLossMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth3" type="button" role="tab" aria-controls="pills-WeightLossMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth4" type="button" role="tab" aria-controls="pills-WeightLossMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth5" type="button" role="tab" aria-controls="pills-WeightLossMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth6" type="button" role="tab" aria-controls="pills-WeightLossMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth7" type="button" role="tab" aria-controls="pills-WeightLossMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth8" type="button" role="tab" aria-controls="pills-WeightLossMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth9" type="button" role="tab" aria-controls="pills-WeightLossMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth10" type="button" role="tab" aria-controls="pills-WeightLossMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth11" type="button" role="tab" aria-controls="pills-WeightLossMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WeightLossMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-WeightLossMonth12" type="button" role="tab" aria-controls="pills-WeightLossMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-WeightLossMonth1" role="tabpanel" aria-labelledby="pills-WeightLossMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Yoga for Weight Loss</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic yoga poses for weight loss.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Breathing techniques for weight loss.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mindfulness and meditation for weight loss./li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth2" role="tabpanel" aria-labelledby="pills-WeightLossMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Digestion</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Poses that aid digestion and improve metabolism.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for digestive health.. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between digestion and weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth3" role="tabpanel" aria-labelledby="pills-WeightLossMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Strength</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Yoga poses for building strength and toning muscles.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating strength training into a yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of strength training for weight loss. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth4" role="tabpanel" aria-labelledby="pills-WeightLossMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Balance and Stability</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Balancing yoga poses for stability and core strength.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating balance training into a yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of balance training for weight loss.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth5" role="tabpanel" aria-labelledby="pills-WeightLossMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Flexibility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving ﬂexibility and range of motion.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating stretching into a yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of ﬂexibility training for weight loss.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth6" role="tabpanel" aria-labelledby="pills-WeightLossMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Stress Relief</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for stress relief and relaxation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for stress reduction. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between stress and weight gain.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth7" role="tabpanel" aria-labelledby="pills-WeightLossMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 7: Yoga for Cardiovascular Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses that get your heart rate up and improve cardiovascular health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating cardio into a yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of cardiovascular exercise for weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth8" role="tabpanel" aria-labelledby="pills-WeightLossMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Detoxiﬁcation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses that aid in detoxiﬁcation and elimination of toxins.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating detoxiﬁcation practices into a yoga practice. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between detoxiﬁcation and weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth9" role="tabpanel" aria-labelledby="pills-WeightLossMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Mindful Eating</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mindful eating practices for weight loss.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Yoga poses for improving body awareness and self-control. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of mindful eating for weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth10" role="tabpanel" aria-labelledby="pills-WeightLossMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Energy and Vitality</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for boosting energy and vitality.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating energizing practices into a yoga practice.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the connection between energy and weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth11" role="tabpanel" aria-labelledby="pills-WeightLossMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Self-Love and Acceptance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for self-love and acceptance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Breathing techniques for self-acceptance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Understanding the connection between self-love and weight loss.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-WeightLossMonth12" role="tabpanel" aria-labelledby="pills-WeightLossMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Maintenance and Sustainability</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for maintaining weight loss and building a sustainable practice.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Creating a long-term yoga plan for weight loss and overall health. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reviewing the beneﬁts of yoga for weight loss and health.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!--Everyday Yoga  -->
                <div class="tab-pane fade show" id="pills-EverydayYoga" role="tabpanel" aria-labelledby="pills-EverydayYoga-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/EverydayYoga.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Everyday Yoga</h3>
                            <p class="">
                                Online everyday yoga classes offer a convenient and effective way to incorporate yoga into your daily routine. Yoga is a great way to improve overall health and wellness, reduce stress and anxiety, and increase strength and ﬂexibility. With online classes, you can practice yoga from the comfort of your own home, at a time that works for you.

                                Additionally, online classes often offer a variety of options, from quick morning stretches to longer, more intensive classes, so you can ﬁnd a class that ﬁts your schedule and ﬁtness level. Joining an online everyday yoga class can be a great way to improve your physical and mental wellbeing and make yoga a regular part of your daily routine.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga4" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga4" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga4">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga4">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-EverydayYogaMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth1" type="button" role="tab" aria-controls="pills-WeightLossMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth2" type="button" role="tab" aria-controls="pills-WeightLossMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth3" type="button" role="tab" aria-controls="pills-WeightLossMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth4" type="button" role="tab" aria-controls="pills-WeightLossMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth5" type="button" role="tab" aria-controls="pills-WeightLossMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth6" type="button" role="tab" aria-controls="pills-WeightLossMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth7" type="button" role="tab" aria-controls="pills-WeightLossMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth8" type="button" role="tab" aria-controls="pills-WeightLossMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth9" type="button" role="tab" aria-controls="pills-WeightLossMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth10" type="button" role="tab" aria-controls="pills-WeightLossMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth11" type="button" role="tab" aria-controls="pills-WeightLossMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-EverydayYogaMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-EverydayYogaMonth12" type="button" role="tab" aria-controls="pills-WeightLossMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-EverydayYogaMonth1" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Yoga and Mindfulness</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding what yoga is and the beneﬁts for general health.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to mindfulness and breathing techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic yoga poses and modiﬁcations for beginners.</li>

                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth2" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Strength and Balance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for building strength and balance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into physical activities and sports. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for overall physical health.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth3" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Flexibility and Mobility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Yoga poses for improving ﬂexibility and mobility.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into stretching routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for injury prevention and rehabilitation. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth4" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Stress Reduction</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for managing stress and anxiety.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily routines and stress-management techniques. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for mental health and well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth5" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Relaxation and Sleep</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving relaxation and sleep.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into bedtime routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for stress reduction and better sleep.</li>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth6" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Digestive Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving digestion and gut health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into dietary habits and digestion-promoting practices. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for overall health and well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth7" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 7: Yoga for Back Pain</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for managing back pain and improving spinal health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily routines and posture-promoting techniques. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for pain relief and improved mobility. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth8" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Immunity</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for boosting immune system function and overall health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into dietary habits and immune-boosting practices. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for overall health and well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth9" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Heart Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving cardiovascular health and reducing risk of heart disease.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>

                                                                        Incorporating yoga into daily routines and heart-healthy habits.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for improved heart health and overall well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth10" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Joint Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving joint health and reducing risk of arthritis.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily routines and joint-healthy habits.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for improved heart health and overall well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth11" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Mind-Body Connection</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for promoting mind-body connection and overall well-being.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily mindfulness and self-care practices.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for mental and physical health.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-EverydayYogaMonth12" role="tabpanel" aria-labelledby="pills-EverydayYogaMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Personal Growth and Development</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for personal growth and development.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into goal-setting and self-improvement practices. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for personal growth, self-awareness, and overall well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!-- Yoga for chronic disease -->
                <div class="tab-pane fade show" id="pills-YogaforChronic" role="tabpanel" aria-labelledby="pills-YogaforChronic-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/chronicYoga.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Yoga for Chronic Disease</h3>
                            <p class="">
                                Online yoga classes for chronic disease offer a safe and effective way to manage symptoms and improve quality of life for those living with chronic conditions. Yoga has been shown to be effective in managing symptoms of chronic diseases such as arthritis, diabetes, blood pressure and heart disease etc . Online classes provide a ﬂexible option for people to practice yoga from the comfort of their own homes, at their own pace.

                                Additionally, online classes often offer modiﬁcations for poses and sequences, making it accessible for people with different physical abilities. Joining an online yoga for chronic disease class can be a great way to manage symptoms, reduce stress, and improve overall quality of life.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga5" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga5" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga5">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga5">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-YogaforChronicMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth1" type="button" role="tab" aria-controls="pills-YogaforChronicMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth2" type="button" role="tab" aria-controls="pills-YogaforChronicMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth3" type="button" role="tab" aria-controls="pills-YogaforChronicMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth4" type="button" role="tab" aria-controls="pills-YogaforChronicMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth5" type="button" role="tab" aria-controls="pills-YogaforChronicMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth6" type="button" role="tab" aria-controls="pills-YogaforChronicMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth7" type="button" role="tab" aria-controls="pills-YogaforChronicMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth8" type="button" role="tab" aria-controls="pills-YogaforChronicMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth9" type="button" role="tab" aria-controls="pills-YogaforChronicMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth10" type="button" role="tab" aria-controls="pills-YogaforChronicMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth11" type="button" role="tab" aria-controls="pills-YogaforChronicMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforChronicMonth12" type="button" role="tab" aria-controls="pills-YogaforChronicMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-YogaforChronicMonth1" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 1: Introduction to Yoga for Chronic Disease</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the beneﬁts of yoga for managing chronic diseases.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic yoga poses and modiﬁcations for different chronic diseases.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Proper alignment and breathing techniques for safe practice.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth2" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 2: Yoga for Diabetes</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for regulating blood sugar levels and improving insulin sensitivity.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into diabetes management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Beneﬁts of yoga for diabetes management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth3" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 3: Yoga for Arthritis</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Yoga poses for reducing joint pain and stiffness.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into arthritis management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for arthritis management. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth4" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Asthma</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving breathing and reducing asthma symptoms.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into asthma management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for asthma management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth5" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for High Blood Pressure</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for lowering blood pressure and improving cardiovascular health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into high blood pressure management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for high blood pressure management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth6" role="tabpanel" aria-labelledby="pillsYogaforChronicMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Chronic Pain</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for reducing chronic pain and improving quality of life.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into chronic pain management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for chronic pain management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth7" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Week 7: Yoga for Digestive Disorders</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving digestion and reducing symptoms of digestive disorders.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into digestive disorder management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for digestive disorder management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth8" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 8: Yoga for Multiple Sclerosis</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving balance, coordination, and mobility in people with MS.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into MS management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for MS management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth9" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Cancer</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for reducing stress, anxiety, and depression in people with cancer.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into cancer treatment and management. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for cancer management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth10" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Chronic Fatigue Syndrome</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for reducing fatigue and improving energy levels.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into chronic fatigue syndrome management.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for chronic fatigue syndrome management</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth11" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 11: Yoga for Fibromyalgia</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for reducing pain and improving sleep in people with ﬁbromyalgia.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into ﬁbromyalgia management.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for ﬁbromyalgia management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-YogaforChronicMonth12" role="tabpanel" aria-labelledby="pills-YogaforChronicMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Overall Well-being</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for overall well-being and stress reduction.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the connection between yoga and a healthy lifestyle. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for overall well-being and chronic disease management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!-- Yoga for kids -->
                <div class="tab-pane fade show" id="pills-YogaforKids" role="tabpanel" aria-labelledby="pills-YogaforKids-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/YogaforKids.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Yoga for Kids</h3>
                            <p class="">
                                Online yoga classes for kids offer a fun and engaging way to promote physical activity and mindfulness in children. Yoga can help children to develop strength, ﬂexibility, balance, and focus, while also reducing stress and anxiety. Online classes provide a convenient and accessible option for parents to introduce yoga to their children at home.

                                Additionally, online classes often incorporate games, storytelling, and music to make yoga more engaging for kids. Joining an online yoga for kids class can be a great way to promote a healthy lifestyle and encourage children to develop a lifelong appreciation for exercise and mindfulness.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga6" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga6" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga6">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga6">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-YogaforKidsMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth1" type="button" role="tab" aria-controls="pills-YogaforKidsMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth2" type="button" role="tab" aria-controls="pills-YogaforKidsMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth3" type="button" role="tab" aria-controls="pills-YogaforKidsMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth4" type="button" role="tab" aria-controls="pills-YogaforKidsMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth5" type="button" role="tab" aria-controls="pills-YogaforKidsMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth6" type="button" role="tab" aria-controls="pills-YogaforKidsMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth7" type="button" role="tab" aria-controls="pills-YogaforKidsMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforKidsMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth8" type="button" role="tab" aria-controls="pills-YogaforKidsMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaKidsMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth9" type="button" role="tab" aria-controls="pills-YogaforKidsMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaKidsMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth10" type="button" role="tab" aria-controls="pills-YogaforKidsMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaKidsMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth11" type="button" role="tab" aria-controls="pills-YogaforKidsMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaKidsMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-YogaforKidsMonth12" type="button" role="tab" aria-controls="pills-YogaforKidsMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-YogaforKidsMonth1" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 1: Introduction to Yoga and Mindfulness</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding what yoga is and the beneﬁts for kids.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to mindfulness and breathing techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic yoga poses and modiﬁcations for kids.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth2" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 2: Yoga for Focus and Concentration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving focus and concentration.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily routines and study habits.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Beneﬁts of yoga for academic success.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth3" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 3: Yoga for Strength and Balance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Yoga poses for building strength and balance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into physical activities and sports. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for overall physical health. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth4" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Yoga for Flexibility and Mobility</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving ﬂexibility and mobility.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into stretching routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Beneﬁts of yoga for injury prevention and rehabilitation.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth5" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Yoga for Conﬁdence and Self-Esteem</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving conﬁdence and self-esteem.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into positive self-talk and visualization. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for mental health and well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth6" role="tabpanel" aria-labelledby="pillsYogaforKidsMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 6: Yoga for Sleep and Relaxation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for improving sleep and relaxation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into bedtime routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for stress reduction and better sleep.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth7" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Week 7: Yoga for Creativity and Imagination</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for stimulating creativity and imagination.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into artistic activities and playtime. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for developing imagination and self-expression.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth8" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 8: Yoga for Teamwork and Cooperation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for promoting teamwork and cooperation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into group activities and games. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for social and emotional development.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth9" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Yoga for Emotional Regulation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for managing emotions and promoting emotional regulation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into coping strategies and mindfulness practices. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for emotional well-being and self-awareness.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth10" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Yoga for Gratitude and Kindness</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for promoting gratitude and kindness.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into daily gratitude practices and acts of kindness.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for positive thinking and emotional resilience.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth11" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 11: Yoga for Cultural Awareness and Diversity</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses that incorporate cultural traditions and diversity.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into learning about different cultures and perspectives.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Beneﬁts of yoga for understanding and respecting cultural differences.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-YogaforKidsMonth12" role="tabpanel" aria-labelledby="pills-YogaforKidsMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Yoga for Celebration and Reﬂection</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Yoga poses for celebrating progress and achievements.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating yoga into reﬂection and goal-setting. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Beneﬁts of yoga for personal growth and development.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>

                <!-- Meditation -->
                <div class="tab-pane fade show" id="pills-Meditation" role="tabpanel" aria-labelledby="pills-Meditation-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/MeditationImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Meditation</h3>
                            <p class="">
                                Online meditation and mindfulness classes offer a convenient and effective way to reduce stress, increase self-awareness, and improve overall wellbeing. Meditation and mindfulness practices involve focusing on the present moment and becoming more aware of your thoughts, emotions, and physical sensations. Online classes provide a ﬂexible option for people to practice meditation and mindfulness from the comfort of their own homes, at their own pace.

                                Additionally, online classes often offer a variety of techniques, from guided meditations to mindfulness exercises, so people can ﬁnd a practice that works best for them. Joining an online meditation and mindfulness class can be a great way to reduce stress, improve mental clarity, and enhance overall wellbeing.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga7" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <!-- <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                            <a href="#mod-yoga" class="btn btndemo step" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Modules</span>
                                                </span>
                                            </a>
                                        </li> -->
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga7">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>


                </div>

                <!-- Customize Yoga Plan -->
                <div class="tab-pane fade show" id="pills-CustomiseYoga" role="tabpanel" aria-labelledby="pills-CustomiseYoga-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/CustomizeYogaImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Customise your Yoga Plan</h3>
                            <p>
                                Online customized yoga sessions offer a personalized and effective way to practice yoga according to your individual needs and goals. A customized yoga practice can help individuals to address speciﬁc concerns, such as chronic pain, injuries, or stress-related issues. Online customized sessions provide a ﬂexible option for people to practice yoga from the comfort of their own homes, with guidance from experienced teachers who can tailor the practice to their individual needs.

                                Additionally, online customized sessions often offer one-on-one consultations, personalized sequences, and modiﬁcations for poses, making it accessible for people with different physical abilities. Joining an online customized yoga session can be a great way to address speciﬁc concerns, improve overall physical and mental wellbeing, and make yoga a truly personalized practice.
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>

                        </div>

                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga8" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <!-- <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                            <a href="#mod-yoga" class="btn btndemo step" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Modules</span>
                                                </span>
                                            </a>
                                        </li> -->
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga8">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>


                </div>

                <!-- Nutrition Yoga -->
                <div class="tab-pane fade show" id="pills-NutritionCounselling" role="tabpanel" aria-labelledby="pills-NutritionCounselling-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Yoga/NutritionCounsellingImg.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="heading"> Nutrition Counselling</h3>
                            <p class="textPara1">
                                Nutritionist will provide personalized recommendations and support to help you achieve your health goals, whether it’s weight loss, managing chronic conditions, or improving athletic performance. Online counseling provides a ﬂexible option for people to receive nutrition advice and support from the comfort of their own homes, at a time that works for them.
                                Additionally, online counseling often uses digital tools and resources to help clients track their progress and stay motivated. Joining an online nutritional counseling program can be a great way to receive personalized support, improve your diet and lifestyle habits, and achieve optimal health. </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <section class="learningBtn">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learnyoga9" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-yoga9" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#pricing" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Pricing</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-lg-1 ">

                                </li>

                            </ul>
                        </div>
                    </section>

                    <section class="learningsec" id="learnyoga9">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading">What you will learn</h3>

                                    <ul class="list-group">
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basis Postures for warm up ( practice before start of Yoga session ).</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice Yoga Technique & Poster in mentor.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Dos & don’t of Yoga.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Practice yoga that targets therapy, prevention, and overall wellness.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Way of living life healthier and stress free.</span>
                                        </li>
                                        <li class="mb-4"><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Nutritional guidance.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <div class="chgimg" > -->

                                    <img src="public/images/Yoga/YogaImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mtfyogm" id="mod-yoga9">
                        <div class="container">
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center muduleimg">
                                        <img src="public/images/Yoga/YogaImg3.svg" class="danceimgy">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-YogaforKidsMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth1" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth2" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth3" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth4" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth5" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth6" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth7" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-NutritionCounsellingMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth8" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pilNutritionCounsellingMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth9" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pilNutritionCounsellingMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth10" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pilNutritionCounsellingMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth11" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pilNutritionCounsellingMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-NutritionCounsellingMonth12" type="button" role="tab" aria-controls="pills-NutritionCounsellingMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.png">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.png">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Week 1 -->
                                                        <div class="tab-pane fade show active" id="pills-NutritionCounsellingMonth1" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 1: Introduction to Nutrition and Healthy Eating</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the basics of nutrition and healthy eating.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The beneﬁts of healthy eating habits for overall health.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Healthy food choices and portion control.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth2" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 2: Macronutrients and Micronutrients</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding macronutrients (carbohydrates, proteins, and fats) and their role in a healthy diet.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding micronutrients (vitamins and minerals) and their importance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Balancing macro- and micronutrients in a healthy diet.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth3" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 3: Hydration and Fluids</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        The importance of hydration and the beneﬁts of water.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Other healthy ﬂuid choices and their beneﬁts. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>How to incorporate healthy ﬂuids into a daily routine. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth4" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 4: Healthy Snacks and Eating on the Go</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The beneﬁts of healthy snacks and eating on the go.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Healthy snack choices and their beneﬁts. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Planning healthy meals and snacks ahead of time.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth5" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 5: Healthy Eating and Weight Management</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The relationship between healthy eating and weight management.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        The importance of portion control and mindful eating. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Balancing healthy eating with physical activity.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth6" role="tabpanel" aria-labelledby="pillsNutritionCounsellingMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 6: Healthy Eating and Mental Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The relationship between healthy eating and mental health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        The beneﬁts of healthy eating for stress reduction and overall well-being. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mindful eating and its impact on mental health..</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth7" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Week 7: Healthy Eating and Digestive Health</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The relationship between healthy eating and digestive health.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Foods that promote healthy digestion and gut health. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Healthy eating habits and their impact on digestion.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth8" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 8: Healthy Eating for Disease Prevention</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The beneﬁts of healthy eating for disease prevention.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Healthy eating habits to prevent chronic diseases. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The role of nutrition in disease prevention and management.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth9" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 9: Healthy Eating and Immune System Function</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The relationship between healthy eating and immune system function.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Foods that promote immune system health and function. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Healthy eating habits and their impact on immune system function.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth10" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 10: Special Dietary Needs</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Special dietary needs and their impact on healthy eating habits.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Healthy eating options for people with dietary restrictions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>How to incorporate healthy eating habits into a special dietary needs plan.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth11" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Week 11: Sustainable Eating Habits and the Environment</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> The impact of healthy eating habits on the environment.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Sustainable food choices and their beneﬁts.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>How to incorporate sustainable eating habits into a daily routine.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-NutritionCounsellingMonth12" role="tabpanel" aria-labelledby="pills-NutritionCounsellingMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Week 12: Nutrition and Lifestyle Changes</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> How to make healthy eating habits a lifestyle change.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating healthy eating habits into a daily routine. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Maintaining healthy eating habits for long-term health and well-being.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>



            </div>
        </div>
    </div>
</section>


<section class="testimonials tyoga" id="testimonials">
    <div class="container">
        
        <div class="">
            <div class="row">
                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                    <h3>Testimonials
                    </h3>
                    <span class="line"></span>

                </div>
                <div class="col-lg-6 col-md-6 col-12">

                    <!-- slider -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item cify active">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>
                                    <h4>Smitha, USA</h4>
                                    <p class="">
                                        I've been practicing yoga for years, but I've never felt as connected to my practice as I do with this online class. The instructor's cues are so clear and easy to follow, and I love being able to practice in the comfort of my own home.</p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>
                                    <h4>Angela, UK</h4>

                                    <p>I was hesitant to try an online yoga class, but I'm so glad I did! The teacher is incredibly knowledgeable and supportive, and I've noticed a huge improvement in my flexibility and strength since I started taking the class.</p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>I have to say, I was skeptical about the idea of doing yoga online. But this class has exceeded my expectations in every way. The instructor is attentive and engaging, and I love being able to fit a yoga practice into my busy schedule without leaving the house.</p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>I'm a beginner when it comes to yoga, but this class has been perfect for me. The instructor is patient and encouraging, and the online format allows me to take things at my own pace without feeling self-conscious. I can't wait to see how much progress I'll make over time!</p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>I've tried a lot of different yoga classes, both in person and online, but this one is by far my favorite. The instructor has a way of making every practice feel fresh and challenging, and the online community is so supportive and welcoming. I feel grateful to be a part of it!</p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>
                                    <h4>Supriya</h4>

                                    <p> I absolutely loved taking yoga classes online with enatyam ! Her classes are challenging, yet accessible for all levels. I felt so much more centered and relaxed after each session. Highly recommend! </p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>I've been practicing yoga for years, but I was a bit skeptical about doing it online. Enatyam yoga classes are just as effective as in-person sessions, and able to provide adjustments and modifications virtually. I'll definitely be taking more online classes in the future. </p>
                                </div>
                            </div>

                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p class="testimonialPara">As someone who's new to yoga, I was nervous about taking an online class. Teacher instructions were clear and easy to follow, and I never felt lost or confused. I'm so glad I tried it! </p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>I've been dealing with back pain for years, and online yoga classes with enatyam have been a game changer. His gentle approach has helped me relieve tension and improve my flexibility. I'm so grateful! </p>
                                </div>
                            </div>
                            <div class="carousel-item cify">
                                <div class="carousel-caption">
                                    <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i></p>

                                    <p>Taking yoga classes online with enatyam has been such a blessing during the pandemic. Her positive energy and calming presence have helped me stay centered and focused during these challenging times. Thank you! </p>
                                </div>
                            </div>
                            <a class="carousel-control-prev mta" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next mta" href="#carouselExampleControls" role="button" data-slide="next">
                                <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>


                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="public/images/Yoga/yoga-test.svg" class="danceimg">
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
</section>

<?php include('InstruInstructer.php'); ?>
<?php include('pricing.php'); ?>
<?php include('Dancefaq.php'); ?>
<?php include('bookdemocallb.php'); ?>
<?php include('footer.php'); ?>