<?php include('header.php'); ?>

<style>
.nav-link {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    text-align: center;
}
</style>


<section class="s_header-section ">
    <div class="container-fluid mt-2">
        <div class="row ">
        <div class="col-lg-12 col-md-12 col-12 p-5 mt-5" style="background-color: black;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp">
                        <h2 class="heading text-white">Online Stress Reduction Yoga Classes<br>1-on-1 Live by Top Trainer</h2>
                        <p class="text-white">
                            Embark on a transformative journey with our <br>online stress reduction yoga classes. Guided by <br>skilled instructors, and five star rated by learners. <br>Immerse yourself in soothing practices that <br>promote inner peace and resilience. Join us
                        </p>
                        <div class="singleline">
                            <div class="stars">
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                            </div>
                            <p class="text-white mt-2">4.9 out of 5.0 from 3796 ratings</p>

                        </div>
                    
                        <div class="temp">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                                <input type="text" class="form-control" placeholder="Whatsapp Number" aria-label="Username" aria-describedby="basic-addon1">
                            </div>   
                            <input type="button" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Book a free trial" style="border-radius: 5px; height: 4rem; width: 13rem; color: white; background-color: #ff1561">                            
                        </div>
                        <div class="text-end mt-4">
                            <!-- <?php if (!(session()->get('sessiondata'))) : ?>
                                <input class="btn btndemoh" type="button" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now"> -->
                            <?php else : ?>
                                <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp">
                        <img src="public/images/courseoffering/7-rbg.webp" class="rightimg" alt="Yoga Class" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="btnSection mftm pl-0 MusicSec">
    <div class="container dancepagec">

        <!-- pills -->
        <div class="typesOfDance-tab">

        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="col-lg-1 col-md-1"></li>

    <!-- Hindustani Vocal -->
    <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
        <a class="nav-link " id="pills-HindustaniVocal-tab" href="<?=base_url(); ?>HindustaniVocal" target="_blank" role="tab" aria-controls="pills-HindustaniVocal" aria-selected="true">Hindustani Vocal</a>
    </li>
    
    <!-- Carnatic Vocal -->
    <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
        <a class="nav-link" id="pills-CarnaticVocal-tab" href="<?=base_url(); ?>CarnaticVocal" target="_blank" role="tab" aria-controls="pills-CarnaticVocal" aria-selected="false">Carnatic Vocal</a>
    </li>
    
    <!-- Semi Classical -->
    <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
        <a class="nav-link active" id="pills-SemiClassical-tab" href="<?=base_url(); ?>SemiClassicals" target="_blank" role="tab" aria-controls="pills-SemiClassical" aria-selected="false">Semi Classical</a>
    </li>
    
    <!-- Western Singing -->
    <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
        <a class="nav-link" id="pills-WesternSinging-tab" href="<?=base_url(); ?>WesternSinging" target="_blank" role="tab" aria-controls="pills-WesternSinging" aria-selected="false">Western Singing</a>
    </li>
    
    <!-- Playback Singing -->
    <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
        <a class="nav-link" id="pills-PlaybackSinging-tab" href="<?=base_url(); ?>PlaybackSinging" target="_blank" role="tab" aria-controls="pills-PlaybackSinging" aria-selected="false">Playback Singing</a>
    </li>

    <li class="col-lg-1 col-md-1"></li>
</ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Hindustani Vocal -->
                <div class="tab-pane fade " id="pills-HindustaniVocal" role="tabpanel" aria-labelledby="pills-HindustaniVocal-tab">
                    <!-- 1st section : image and description -->
                    <section class="dancedesc musicdancedesc">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="public/images/courseoffering/5-rbg.webp" class="danceimg wsized" >
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 text-left text-col musicp">
                                    <h3 class="heading"> Hindustani Vocal</h3>
                                    <p>
                                        Looking for an immersive and authentic Hindustani vocal learning experience?
                                        Join our Online Hindustani Vocal Class today! Unlock the rich heritage of Indian classical music from the comfort of your home.
                                        Our expert instructors provide comprehensive lessons tailored to all skill levels, whether you’re a beginner or advanced learner.
                                        Explore the intricacies of ragas, taal, and classical techniques while honing your voice and expression.
                                        With interactive virtual sessions, personalized feedback, and a supportive community, you’ll experience remarkable progress in no time.
                                        Embark on a soulful journey into the realm of Hindustani music.
                                        Enroll in our Online Hindustani Vocal Class and discover the beauty of this ancient art form.
                                    </p>
                                    <div class="text-end mt-4">
                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                <input class="btn btndemoh" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now">
                                        <?php else : ?>
                                                <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="learningBtn mlearingbtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnmusic" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-music" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Testimonials</button> -->
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Instructors</button> -->
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Pricing</button> -->
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
                    <section class="learningsec yellowb" id="learnmusic">
                        <div class="container">
                            <div class="row kathakp">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Warm-ups and Techniques - Learn how to properly warm up your voice and develop essential vocal techniques such as breath control, posture, and vocal placement.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Pitch and Intonation - Improve your ability to sing in tune by practicing exercises that help you develop a keen sense of pitch and intonation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Range Expansion - Work on expanding your vocal range through targeted exercises that gradually increase the upper and lower limits of your voice.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Exercises - Practice various vocal exercises designed to strengthen and develop your voice, including exercises that improve agility, flexibility, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Song Interpretation - Learn how to interpret songs and convey emotions effectively through your singing, focusing on techniques such as phrasing, dynamics, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Style Exploration - Explore different musical styles and genres to broaden your repertoire and develop versatility in your singing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Performance Skills - Gain confidence and stage presence by learning performance skills,
                                                                    including microphone techniques, stage movement, and connecting with an audience</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnMusicImg">     
                                        <img src="public/images/Music/musicImg2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  3rd section : modules section (month) -->
                    <section class="modulesec" id="mod-music">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center mbfim">
                                        <img src="public/images/Music/musicImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-Month1-tab" data-bs-toggle="pill" data-bs-target="#pills-Month1" type="button" role="tab" aria-controls="pills-Month1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month2-tab" data-bs-toggle="pill" data-bs-target="#pills-Month2" type="button" role="tab" aria-controls="pills-Month2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month3-tab" data-bs-toggle="pill" data-bs-target="#pills-Month3" type="button" role="tab" aria-controls="pills-Month3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month4-tab" data-bs-toggle="pill" data-bs-target="#pills-Month4" type="button" role="tab" aria-controls="pills-Month4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month5-tab" data-bs-toggle="pill" data-bs-target="#pills-Month5" type="button" role="tab" aria-controls="pills-Month5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month6-tab" data-bs-toggle="pill" data-bs-target="#pills-Month6" type="button" role="tab" aria-controls="pills-Month6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month7-tab" data-bs-toggle="pill" data-bs-target="#pills-Month7" type="button" role="tab" aria-controls="pills-Month7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month8-tab" data-bs-toggle="pill" data-bs-target="#pills-Month8" type="button" role="tab" aria-controls="pills-Month8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month9-tab" data-bs-toggle="pill" data-bs-target="#pills-Month9" type="button" role="tab" aria-controls="pills-Month9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month10-tab" data-bs-toggle="pill" data-bs-target="#pills-Month10" type="button" role="tab" aria-controls="pills-Month10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month11-tab" data-bs-toggle="pill" data-bs-target="#pills-Month11" type="button" role="tab" aria-controls="pills-Month11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month12-tab" data-bs-toggle="pill" data-bs-target="#pills-Month12" type="button" role="tab" aria-controls="pills-Month12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -8
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -6
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-Month1" role="tabpanel" aria-labelledby="pills-Month1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Hindustani Classical Music.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of Swara (notes) and Saptak (octave).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal warm-up exercises.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Raagas and Taals.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of basic Sargam (vocal exercises).</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-Month2" role="tabpanel" aria-labelledby="pills-Month2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on developing proper breath control and voice projection </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Alankars (musical patterns). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning and practicing basic compositions in Raagas like Bhairavi and Yaman .</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the concept of Aaroh and Avroh (ascending and descending notes).</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-Month3" role="tabpanel" aria-labelledby="pills-Month3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced Taals like Teentaal and Ektaal.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Semi-Classical genres like Thumri, Dadra, and Ghazal. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Taan and its variations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal exercises to improve agility and flexibility in voice.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-Month4" role="tabpanel" aria-labelledby="pills-Month4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Deep dive into different Ragas and their characteristics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to complex rhythm patterns and improvisation techniques. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of advanced Sargam and Alankar patterns.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Bandish (composition).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-Month5" role="tabpanel" aria-labelledby="pills-Month5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on developing voice modulation and expression.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Bandish in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Laya and Layakari (rhythm patterns).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Gamak and Meend (musical ornaments).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-Month6" role="tabpanel" aria-labelledby="pills-Month6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Dhrupad and Dhamar styles of singing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Dhrupad and Dhamar compositions . </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced Taans and Sargam variations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring different approaches to improvisation.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-Month7" role="tabpanel" aria-labelledby="pills-Month7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Tappa and Tarana styles of singing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Tappa and Tarana compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced techniques like Murki, Khatka, and Zamzama.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-Month8" role="tabpanel" aria-labelledby="pills-Month8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhajans and Devotional Music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Bhajans in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Focus on devotional expression and emotional depth in singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-Month9" role="tabpanel" aria-labelledby="pills-Month9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to regional folk music styles and compositions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of folk songs from different regions of India. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the nuances of regional folk music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-Month10" role="tabpanel" aria-labelledby="pills-Month10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Thumri and Dadra genres.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Thumri and Dadra compositions in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on expressiveness and storytelling in Thumri and Dadra.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-Month11" role="tabpanel" aria-labelledby="pills-Month11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to light classical genres like Ghazal and Sufi music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of popular Ghazals and Sufi compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the poetry and emotions in Ghazals and Sufi music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-Month12" role="tabpanel" aria-labelledby="pills-Month12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Recap and consolidation of learned concepts and techniques.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on individual expression and style development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparation for a final performance showcasing the progress made throughout the course.</li>
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

                <!-- Carnatic Vocal -->
                <div class="tab-pane fade" id="pills-CarnaticVocal" role="tabpanel" aria-labelledby="pills-CarnaticVocal-tab">
                    <section class="dancedesc">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="public/images/courseoffering/6-rbg.webp" class="danceimg wsized" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 text-left text-col musicp">
                                    <h3 class="heading"> Carnatic Vocal</h3>
                                    <p>
                                        Embark on a melodious journey through the divine sounds of Carnatic music with our Online Carnatic Vocal Class.
                                        Discover the rich heritage and intricate nuances of this classical South Indian art form from the comfort of your own home.
                                        Our experienced instructors provide comprehensive lessons for all skill levels, from beginners to advanced learners.
                                        Dive deep into the world of ragas, talas, and improvisation, while refining your vocal technique and expression.
                                        With interactive virtual sessions, personalized guidance, and a supportive community, you’ll witness remarkable progress in your Carnatic vocal skills.
                                        Enroll in our Online Carnatic Vocal Class today and unleash your musical talent.
                                        <div class="text-end mt-4">
                                            <?php if (!(session()->get('sessiondata'))) : ?>
                                                    <input class="btn btndemoh" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now">
                                            <?php else : ?>
                                                    <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                                            <?php endif; ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 2nd section :  what will you learn(buttons) and learning section -->

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learncarnatic" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-carnatic" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Testimonials</button> -->
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Instructors</button> -->
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Pricing</button> -->
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
                    <section class="learningsec yellowb" id="learncarnatic">
                        <div class="container">
                            <div class="row kathakp">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Warm-ups and Techniques - Learn how to properly warm up your voice and develop essential vocal techniques such as breath control, posture, and vocal placement.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Pitch and Intonation - Improve your ability to sing in tune by practicing exercises that help you develop a keen sense of pitch and intonation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Range Expansion - Work on expanding your vocal range through targeted exercises that gradually increase the upper and lower limits of your voice.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Exercises - Practice various vocal exercises designed to strengthen and develop your voice, including exercises that improve agility, flexibility, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Song Interpretation - Learn how to interpret songs and convey emotions effectively through your singing, focusing on techniques such as phrasing, dynamics, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Style Exploration - Explore different musical styles and genres to broaden your repertoire and develop versatility in your singing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Performance Skills - Gain confidence and stage presence by learning performance skills,
                                                                    including microphone techniques, stage movement, and connecting with an audience</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 ">
                                    <div class="learnMusicImg">     
                                        <img src="public/images/Music/musicImg2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  3rd section : modules section (month) -->

                    <section class="modulesec" id="mod-carnatic">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center mbfim">
                                        <img src="public/images/Music/musicImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-CarnaticVocalMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth1" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth2" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth3" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth4" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth5" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth6" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth7" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth8" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth9" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth10" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth11" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-CarnaticVocalMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocalMonth12" type="button" role="tab" aria-controls="pills-CarnaticVocalMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -8
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -6
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-CarnaticVocalMonth1" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Carnatic music and its principles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of swara (notes) and talam (rhythm).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to varnams and geethams.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal warm-up exercises and breath control techniques.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth2" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on developing voice clarity and proper pronunciation of lyrics .
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to different talams and their variations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of simple varnams and geethams in popular Ragas like Mayamalavagowla and Saveri.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth3" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced Ragas and their characteristics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of compositions in Ragas like Bhairavi and Kalyani. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Introduction to alapana (improvisation) and niraval (variation).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth4" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced talams like Adi talam and Rupakam.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of complex varnams and geethams. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to gamakas (ornamentations) and their applications.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth5" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to kritis and their structure.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of kritis in popular Ragas like Todi and Kambhoji. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on laya (rhythm) and tala variations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth6" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different types of kalpana swarams (improvised melodic phrases).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of kalpana swarams in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to different gharanas (schools) of Carnatic music .</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth7" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced Ragas and rare compositions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of compositions by renowned composers like Tyagaraja and Muthuswami Dikshitar. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on intricate patterns and melodic phrases.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth8" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Pallavi singing and manodharma (creative improvisation).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Pallavi singing in different talams and Ragas.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Ragam-Tanam-Pallavi (RTP) format.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth9" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Thillanas and Padams.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Thillanas and Padams in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on expressiveness and emotive aspects of singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth10" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Devotional Music and Bhajans.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of popular Bhajans and compositions in praise of deities. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the devotional essence in Carnatic music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth11" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Javalis and Tillanas.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Javalis and Tillanas in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Focus on intricate rhythmic patterns and footwork.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-CarnaticVocalMonth12" role="tabpanel" aria-labelledby="pills-CarnaticVocalMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Recap and consolidation of learned concepts and techniques.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on individual expression and style development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparation for a final performance showcasing the progress made throughout the course.</li>
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

                <!-- SemiClassical -->
                <div class="tab-pane fade show active" id="pills-SemiClassical" role="tabpanel" aria-labelledby="pills-SemiClassical-tab">
                    <section class="dancedesc">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                <img src="public/images/courseoffering/7-rbg.webp" class="danceimg wsized" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 text-left text-col musicp">
                                    <h3 class="heading"> Semi Classical</h3>
                                    <p>
                                        Unlock the mesmerizing blend of classical and contemporary music with our Online Semi-Classical Singing Class.
                                        Dive into the world of semi-classical music, where traditional Indian melodies meet modern compositions.
                                        Whether you’re a beginner or an experienced singer, our expert instructors will guide you through the intricacies of semi-classical techniques, including thumri, ghazal, and bhajan.
                                        Enhance your vocal range, expression, and improvisation skills while exploring the soulful melodies of this captivating genre. With interactive virtual sessions, personalized feedback, and a supportive community, you’ll witness remarkable growth in your semi-classical singing abilities.
                                        Enroll in our Online Semi-Classical Singing Class today and unleash your artistic prowess.
                                    </p>
                                    <div class="text-end mt-4">
                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                <input class="btn btndemoh" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now">
                                        <?php else : ?>
                                                <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 2nd section :  what will you learn(buttons) and learning section -->

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnsemi" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-semi" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Testimonials</button> -->
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Instructors</button> -->
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Pricing</button> -->
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
                    <section class="learningsec yellowb" id="learnsemi">
                        <div class="container">
                            <div class="row kathakp">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Warm-ups and Techniques - Learn how to properly warm up your voice and develop essential vocal techniques such as breath control, posture, and vocal placement.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Pitch and Intonation - Improve your ability to sing in tune by practicing exercises that help you develop a keen sense of pitch and intonation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Range Expansion - Work on expanding your vocal range through targeted exercises that gradually increase the upper and lower limits of your voice.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Exercises - Practice various vocal exercises designed to strengthen and develop your voice, including exercises that improve agility, flexibility, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Song Interpretation - Learn how to interpret songs and convey emotions effectively through your singing, focusing on techniques such as phrasing, dynamics, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Style Exploration - Explore different musical styles and genres to broaden your repertoire and develop versatility in your singing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Performance Skills - Gain confidence and stage presence by learning performance skills,
                                                                    including microphone techniques, stage movement, and connecting with an audience</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 ">
                                    <div class="learnMusicImg">     
                                        <img src="public/images/Music/musicImg2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  3rd section : modules section (month) -->

                    <section class="modulesec" id="mod-semi">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center mbfim">
                                        <img src="public/images/Music/musicImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-SemiClassicalMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth1" type="button" role="tab" aria-controls="pills-SemiClassicalMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth2" type="button" role="tab" aria-controls="pills-SemiClassicalMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth3" type="button" role="tab" aria-controls="pills-SemiClassicalMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth4" type="button" role="tab" aria-controls="pills-SemiClassicalMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth5" type="button" role="tab" aria-controls="pills-SemiClassicalMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth6" type="button" role="tab" aria-controls="pills-SemiClassicalMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth7" type="button" role="tab" aria-controls="pills-SemiClassicalMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth8" type="button" role="tab" aria-controls="pills-SemiClassicalMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth9" type="button" role="tab" aria-controls="pills-SemiClassicalMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth10" type="button" role="tab" aria-controls="pills-SemiClassicalMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth11" type="button" role="tab" aria-controls="pills-SemiClassicalMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SemiClassicalMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-SemiClassicalMonth12" type="button" role="tab" aria-controls="pills-SemiClassicalMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -8
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -6
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-SemiClassicalMonth1" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Semi-Classical Music and its genres.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal warm-up exercises and breathing techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of Swara (notes) and Tala (rhythm).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of simple semi-classical vocal exercises.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth2" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Introduction to Thumri, Dadra, and Ghazal genres.

                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning and practicing semi-classical compositions in Thumri and Dadra styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on expressiveness and emotive aspects of singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth3" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhajans and Devotional Music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Bhajans in different Ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the devotional essence and spiritual depth in semi-classical singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth4" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Qawwali and Sufi Music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning and practicing Qawwali and Sufi compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on rhythm and improvisation in Qawwali singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth5" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to fusion genres like Sufi Rock and Indo-Western fusion.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of semi-classical fusion songs. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploration of blending traditional elements with contemporary styles.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth6" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Thumri and Dadra variations.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of advanced semi-classical compositions in Thumri and Dadra styles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on ornamentations (Meend, Gamak, etc.) and improvisation techniques.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth7" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to regional semi-classical styles like Lavani, Baul, and Bhangra.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of regional semi-classical songs and compositions.. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the cultural context and unique elements of regional styles.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth8" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to light classical genres like Ghazal and Geet.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Ghazals and Geets in different Ragas.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on lyrical interpretation and melodic embellishments.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth9" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Natya Sangeet (music in Indian classical dance dramas).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning and practicing Natya Sangeet compositions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on syncopation, rhythm, and expressiveness in dance-oriented songs.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth10" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to folk-inspired semi-classical styles.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of semi-classical folk songs from different regions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the storytelling and cultural aspects of folk music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth11" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to fusion with classical elements like Thumri-Jazz and Ghazal-Pop fusion.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of fusion compositions with classical and contemporary elements.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on versatility and experimentation in fusion singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-SemiClassicalMonth12" role="tabpanel" aria-labelledby="pills-SemiClassicalMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 : </h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Recap and consolidation of learned concepts and techniques.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on individual expression and style development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparation for a final performance showcasing the progress made throughout the course.</li>
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

                <!-- Western Singing -->
                <div class="tab-pane fade" id="pills-WesternSinging" role="tabpanel" aria-labelledby="pills-WesternSinging-tab">
                    <section class="dancedesc">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                <img src="public/images/courseoffering/8-rbg.webp" class="danceimg wsized" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 text-left text-col musicp">
                                    <h3 class="heading"> Western Singing</h3>
                                    <p>
                                        Unleash your inner diva and elevate your singing skills with our Online Western Singing Class.
                                        Whether you’re a beginner or an experienced vocalist, our comprehensive virtual lessons cater to all skill levels.
                                        Discover the fundamentals of Western singing, including vocal technique, breath control, pitch, and expression.
                                        From pop to rock, jazz to R&B, our expert instructors will guide you through various genres and help you develop your unique style.
                                        With interactive sessions, personalized feedback, and a supportive community, you’ll witness remarkable progress in your vocal abilities.
                                        Enroll in our Online Western Singing Class today and let your voice soar to new heights.
                                    </p>
                                    <div class="text-end mt-4">
                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                <input class="btn btndemoh" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now">
                                        <?php else : ?>
                                                <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 2nd section :  what will you learn(buttons) and learning section -->

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnwestern" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-western" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Testimonials</button> -->
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Instructors</button> -->
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Pricing</button> -->
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
                    <section class="learningsec yellowb" id="learnwestern">
                        <div class="container">
                            <div class="row kathakp">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Warm-ups and Techniques - Learn how to properly warm up your voice and develop essential vocal techniques such as breath control, posture, and vocal placement.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Pitch and Intonation - Improve your ability to sing in tune by practicing exercises that help you develop a keen sense of pitch and intonation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Range Expansion - Work on expanding your vocal range through targeted exercises that gradually increase the upper and lower limits of your voice.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Exercises - Practice various vocal exercises designed to strengthen and develop your voice, including exercises that improve agility, flexibility, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Song Interpretation - Learn how to interpret songs and convey emotions effectively through your singing, focusing on techniques such as phrasing, dynamics, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Style Exploration - Explore different musical styles and genres to broaden your repertoire and develop versatility in your singing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Performance Skills - Gain confidence and stage presence by learning performance skills,
                                                                    including microphone techniques, stage movement, and connecting with an audience</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 ">
                                    <div class="learnMusicImg">     
                                        <img src="public/images/Music/musicImg2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  3rd section : modules section (month) -->

                    <section class="modulesec music" id="mod-western">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center mbfim">
                                        <img src="public/images/Music/musicImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-BharatnatyamMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth1" type="button" role="tab" aria-controls="pills-BharatnatyamMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth2" type="button" role="tab" aria-controls="pills-BharatnatyamMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth3" type="button" role="tab" aria-controls="pills-BharatnatyamMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth4" type="button" role="tab" aria-controls="pills-BharatnatyamMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth5" type="button" role="tab" aria-controls="pills-BharatnatyamMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth6" type="button" role="tab" aria-controls="pills-BharatnatyamMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth7" type="button" role="tab" aria-controls="pills-BharatnatyamMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth8" type="button" role="tab" aria-controls="pills-BharatnatyamMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth9" type="button" role="tab" aria-controls="pills-BharatnatyamMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth10" type="button" role="tab" aria-controls="pills-BharatnatyamMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth11" type="button" role="tab" aria-controls="pills-BharatnatyamMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BharatnatyamMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-BharatnatyamMonth12" type="button" role="tab" aria-controls="pills-BharatnatyamMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -8
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -6
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-BharatnatyamMonth1" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Western Vocal Techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal warm-up exercises and breath control techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of pitch, tone, and resonance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to popular music genres.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth2" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on developing proper vocal posture and alignment.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Ear training exercises for pitch accuracy. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal exercises for range expansion and flexibility.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to basic music theory and notation.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth3" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different vocal styles (pop, rock, jazz, etc.).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of songs in various genres. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasis on vocal expression and interpretation.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth4" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to vocal dynamics and phrasing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Techniques for developing vocal power and control. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of songs with varying dynamics and musicality.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth5" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to advanced vocal techniques (belting, vibrato, etc.).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of challenging songs to expand vocal abilities. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on vocal improvisation and ad-libbing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth6" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to performance skills and stage presence.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of songs with emphasis on stage performance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding microphone techniques and stage movement.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth7" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to vocal harmony and ensemble singing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of group songs and harmonizing techniques. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on blend and balance within a vocal group.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth8" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to songwriting and composition.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of writing lyrics and melodies.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding song structure and arrangement.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth9" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to recording techniques and studio etiquette.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of recording vocals for studio sessions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Emphasis on vocal clarity and studio performance.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth10" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music production and sound engineering.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of recording vocals with different effects and processing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the technical aspects of vocal recording.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth11" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music performance technology (looping, live effects, etc.).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of using technology in live performances. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on integrating technology with vocal performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth12" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Recap and consolidation of learned techniques and skills.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on individual expression and style development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparation for a final performance showcasing the progress made throughout the course.</li>
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

                <!-- Playback Singing -->
                <div class="tab-pane fade" id="pills-PlaybackSinging" role="tabpanel" aria-labelledby="pills-PlaybackSinging-tab">
                    <section class="dancedesc">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="public/images/Music/musicImg1.svg" class="danceimg">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 text-col musicp">
                                    <h3 class="heading"> Playback Singing </h3>
                                    <p>
                                        Unleash your inner playback singer and bring your favorite melodies to life with our Online Playback Singing Class.
                                        Perfect for aspiring singers and enthusiasts alike, our comprehensive virtual lessons will help you master the art of playback singing.
                                        Learn the techniques and nuances required to convey emotion, modulate your voice, and synchronize with the on-screen performances.
                                        Our expert instructors will guide you through various genres, including film songs, bhajans, and folk tunes.
                                        With interactive sessions, personalized feedback, and a supportive community, you’ll witness remarkable growth in your playback singing skills.
                                        Enroll in our Online Playback Singing Class today and embark on a journey towards becoming a versatile and expressive playback singer.
                                    </p>
                                    <!-- <div class="btn btndemoh">START NOW</div> -->
                                    <div class="text-end mt-4">
                                        <?php if (!(session()->get('sessiondata'))) : ?>
                                                <input class="btn btndemoh" type="button"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup" value="Enroll Now">
                                        <?php else : ?>
                                                <a class="btn btndemoh" href="<?php echo base_url('ModelForLogin'); ?>" type="button">Explore Pricing</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- 2nd section :  what will you learn(buttons) and learning section -->
                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnplay" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-play" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Modules</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Testimonials</button> -->
                                    <a href="#testimonials" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Testimonials</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Instructors</button> -->
                                    <a href="#Instructors" class="btn btndemo step" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Instructors</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Pricing</button> -->
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
                    <section class="learningsec yellowb" id="learnplay">
                        <div class="container">
                            <div class="row kathakp">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Warm-ups and Techniques - Learn how to properly warm up your voice and develop essential vocal techniques such as breath control, posture, and vocal placement.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Pitch and Intonation - Improve your ability to sing in tune by practicing exercises that help you develop a keen sense of pitch and intonation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Range Expansion - Work on expanding your vocal range through targeted exercises that gradually increase the upper and lower limits of your voice.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Vocal Exercises - Practice various vocal exercises designed to strengthen and develop your voice, including exercises that improve agility, flexibility, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Song Interpretation - Learn how to interpret songs and convey emotions effectively through your singing, focusing on techniques such as phrasing, dynamics, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Style Exploration - Explore different musical styles and genres to broaden your repertoire and develop versatility in your singing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Performance Skills - Gain confidence and stage presence by learning performance skills,
                                                                    including microphone techniques, stage movement, and connecting with an audience</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 ">
                                    <div class="learnMusicImg">    
                                        <img src="public/images/Music/musicImg2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  3rd section : modules section (month) -->

                    <section class="modulesec" id="mod-play">
                        <div class="container">
                     
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center mbfim">
                                        <img src="public/images/Music/musicImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-PlaybackMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth1" type="button" role="tab" aria-controls="pills-PlaybackMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth2" type="button" role="tab" aria-controls="pills-PlaybackMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth3" type="button" role="tab" aria-controls="pills-PlaybackMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth4" type="button" role="tab" aria-controls="pills-PlaybackMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth5" type="button" role="tab" aria-controls="pills-PlaybackMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth6" type="button" role="tab" aria-controls="pills-PlaybackMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth7" type="button" role="tab" aria-controls="pills-PlaybackMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth8" type="button" role="tab" aria-controls="pills-PlaybackMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth9" type="button" role="tab" aria-controls="pills-PlaybackMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth10" type="button" role="tab" aria-controls="pills-PlaybackMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth11" type="button" role="tab" aria-controls="pills-PlaybackMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PlaybackMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-PlaybackMonth12" type="button" role="tab" aria-controls="pills-PlaybackMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -8
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -6
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-PlaybackMonth1" role="tabpanel" aria-labelledby="pills-PlaybackMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bollywood Singing and its unique characteristics.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Vocal warm-up exercises and breath control techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of pitch, tone, and vocal range.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to popular Bollywood music genres.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth2" role="tabpanel" aria-labelledby="pills-PlaybackMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on vocal clarity and diction in Hindi language.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Techniques for developing vocal control and expression. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of popular Bollywood songs in different styles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the emotional connection to the lyrics.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth3" role="tabpanel" aria-labelledby="pills-PlaybackMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to melody and rhythm in Bollywood singing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of songs with varying tempos and rhythmic patterns. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on vocal dynamics, phrasing, and accentuation.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing a sense of groove and musicality.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth4" role="tabpanel" aria-labelledby="pills-PlaybackMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different vocal textures and timbres in Bollywood music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of songs with different vocal textures. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Techniques for conveying different emotions through vocals.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the use of vocal ornaments and embellishments.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth5" role="tabpanel" aria-labelledby="pills-PlaybackMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to improvisation and ad-libbing in Bollywood singing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Techniques for creating melodic variations and improvisations. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of songs with improvised sections.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the importance of spontaneity in Bollywood singing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth6" role="tabpanel" aria-labelledby="pills-PlaybackMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to song interpretation and storytelling in Bollywood music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Analyzing the lyrics and delivering the intended message. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of songs with emphasis on storytelling and expression.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing stage presence and connecting with the audience.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth7" role="tabpanel" aria-labelledby="pills-PlaybackMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to vocal harmony and backing vocals in Bollywood songs.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of duets and group songs with harmonies. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding vocal balance within an ensemble.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on synchronized performances and cohesive vocal arrangements.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth8" role="tabpanel" aria-labelledby="pills-PlaybackMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to microphone techniques and studio etiquette.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of recording vocals for studio sessions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the technical aspects of studio recording.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasis on vocal clarity and control in a studio environment.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth9" role="tabpanel" aria-labelledby="pills-PlaybackMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music production and post-production processes in Bollywood music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of working with producers and engineers. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of technology in Bollywood singing.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring vocal effects and processing techniques in a Bollywood context.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth10" role="tabpanel" aria-labelledby="pills-PlaybackMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to live performances and stagecraft in Bollywood music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of performing Bollywood songs in live settings. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on stage presence, movement, and engaging the audience.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Managing technical aspects of live performances (sound checks, monitor mixes, etc.).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth11" role="tabpanel" aria-labelledby="pills-PlaybackMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music marketing and promotion in the Bollywood industry.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the industry and building a personal brand. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Creating professional recordings and demo reels.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring opportunities in the Bollywood singing industry.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-PlaybackMonth12" role="tabpanel" aria-labelledby="pills-PlaybackMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Recap and consolidation of learned techniques and skills.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on individual expression and style development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparation for a final performance or showcase.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Guidance on building a portfolio and pursuing Bollywood singing opportunities.</li>
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
    </div>
</section>


<!-- Testimonials -->
<section class="testimonials dancet ft" id="testimonials">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 text-center testimonialsdiv">
                <h3 class="title_4 ">Testimonials
                </h3>
                <span class="line"></span>
            </div>
            <!-- Main Carousel -->
            <div class="col-lg-12 col-md-12 col-12 testimonialsp">
                <div id="combinedCarousel" class="carousel slide" data-ride="carousel"> 
                        <div class="carousel-inner">
                            <div class="carousel-item motd active">
                                <div class="row">
                               
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Aiden C ( London -Uk )<span></p>
                                            <p>Enatyam's yoga courses are a total game-changer for me.<br> The instructors keep it real, making every pose feel achievable. <br>It's like having a personal yoga guide right in my living room.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/1h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Sweta ( Australia )</span></p>
                                            <p>I'm new to yoga, and Enatyam is the perfect starting point.<br> The classes are not intimidating, and  <br>the instructors break down each pose in a way that's easy to understand.<br> Feeling more zen already!</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/2h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Sneha ( Canada )</span></p>
                                            <p>Enatyam's yoga classes are like a breath of fresh air. <br> The instructors create a friendly atmosphere, making the sessions enjoyable. <br> It's become a daily ritual that I genuinely look forward to."</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/3h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Kavita ( Pune )</span></p>
                                            <p>I've tried a few online yoga platforms, but Enatyam stands out.<br> The variety of classes keeps things interesting, and <br>the instructors feel like friends guiding you through a mindful journey. <br> Highly recommend!"</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/4h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Ayesha ( Singapore )</span></p>
                                            <p>Enatyam's yoga is a perfect fit for a busy mom like me. <br> The quick
                                                sessions are manageable, and <br>the instructors make it feel like a mini wellness retreat. <br>
                                                Grateful for this accessible and effective platform!
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/6h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Rajiv ( Lucknow )</span></p>
                                            <p>The variety of yoga classes on Enatyam is impressive. Whether I need a <br>
                                                gentle stretch or an energizing flow, <br> there's something for every mood.  The instructors
                                                make <br> it easy for anyone to enjoy the benefits of yoga.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/7h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Vikram ( Delhi )</span></p>
                                            <p>Enatyam's yoga classes have made me realize that yoga is for everyone. <br>
                                                The inclusive approach of the instructors and <br>the straightforward guidance make it a
                                                comfortable and enjoyable practice."
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/8h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Vishal ( Chandigarh )</span></p>
                                            <p>I've always struggled to stick with a workout routine, <br> but
                                                Enatyam's yoga has been a consistent part of my day. <br>The short sessions fit into my
                                                schedule, and the instructors'<br> encouragement keeps me motivated."
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/10h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Kajal ( Delhi )</span></p>
                                            <p>I appreciate how Enatyam's yoga classes cater to various levels.<br> Whether
                                                you're a beginner or an experienced yogi, there's always  <br>room for growth. The instructors
                                                make sure everyone feels welcome."
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/11h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Scarlett family ( Germany )</span></p>
                                            <p>Yoga is a daily dose of positivity for me . The instructors <br>
                                                radiate good vibes, and the classes have become <br>my source of calm in the midst of a
                                                busy schedule.<br> A fantastic platform for holistic well-being!"
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/12h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Emma ( UK )</span></p>
                                            <p>Yoga is my daily escape from the hustle. The instructors make it easy to<br>
                                                disconnect and focus on the present moment.It's a simple yet powerful  <br>practice that has
                                                become a non-negotiable in my routine.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/14h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item motd">
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <p class="semicolone"><i aria-hidden="true" class="fas fa-quote-left"></i><span>Michael (Mike) ( USA)</span></p>
                                            <p>Enatyam's yoga is like a personal wellness retreat at home. <br>The
                                                instructors create a serene atmosphere,<br> and the classes feel like a journey into both 
                                                physical <br> and mental well-being. Truly transformative
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 himg">
                                        <img src="public/images/happyfaces/15h.webp" class="haimg">
                                    </div>
                                </div>
                            </div>
                            <!-- Add more carousel items as needed -->
                        </div>

                        <a class="carousel-control-prev" href="#combinedCarousel" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#combinedCarousel" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('InstruInstructer.php'); ?>
<?php include('pricing.php'); ?>
<?php include('Instrumentsfaq.php'); ?>

<?php include('bookdemocallb.php'); ?>
<?php include('footer.php'); ?>