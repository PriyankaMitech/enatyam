<?php include('header.php'); ?>


<style>
.nav-pills .nav-link {
    display: flex;    align-items: center;
    justify-content: center;
    height: 100%; 
}
.happyFaces-div1 .limited-height {
    max-height: 4.8rem;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.happyFaces-div1:hover .limited-height {
    max-height: none;
}
.img-fluid{
    max-height: 11rem;
}
</style>


<section class="s_header-section">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 p-5" style="background-color: black;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp">
                        <h2 class="heading text-white">Embark on a Journey with Kathak Dance</h2>
                        <p class="text-white">
                        Kathak, one of the eight classical dance forms of India, is celebrated for its intricate footwork, expressive gestures, and captivating spins. Originating from the storytelling traditions of Northern India, Kathak combines rhythmic movements with narrative expression, making it both a visual and emotive art form.                        </p>
                        <div class="singleline">
                            <div class="stars">
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star" style="  margin-right: 0.5rem !important; "></i>
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
                    <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp text-center">
                        <img src="public/images/Dance/kathakImg2.webp" class="rightimg" alt="Yoga Class" style="width:100%;">
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    
</section>


<section class="MusicSec" >
    <div class="">
        <!-- pills -->
        <div class="typesOfDance-tab">
            <div class=" ">
                <div class="">



                    <div class="row text-lg-start">
                    <div class="col-lg-12 col-md-12 col-12 imgs text-center pb-5">
                    <img src="<?=base_url(); ?>public/images/boarder1.webp" alt="Image Description" class="img-fluid">
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 coh">
                  
                        <h3 class="text-white" >Courses Offering
                        <span class="line linessf"></span> </h3>
                    </div>

  

                        <div class="col-lg-3 col-md-4 col-6 ">
                             <h5 class="text-white" style="text-align: center;">Kathak </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Kathak" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo  base_url(); ?>public/images/courseoffering/1-rbg.webp" alt="">
                                </a>
                            </div>

                    
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">Bharatanatyam </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Bharatnatyam" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/2-rbg.webp" alt=""
                                       >
                                </a>
                            </div>

                           
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">Odissi </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Odissi" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/odissi.webp" alt=""
                                       >
                                </a>
                            </div>
                         
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">
                                Bollywood Dance </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Bollywood" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/bollywood-dance.webp" alt=""
                                       >
                                </a>
                            </div>
                       
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">Western Dance </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Western" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/western.jpg" alt=""
                                       >
                                </a>
                            </div>
                           
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">Semi Classical</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Semiclassical" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/kathakImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                       
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">
                                Bhangra</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Bhangra" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/bhangra.webp" alt=""
                                       >
                                </a>
                            </div>
                      
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="text-white" style="text-align: center;">
                            Folk Dance </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Folk" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Dance/folk-dance.webp" alt=""
                                       >
                                </a>
                            </div>
                         
                        </div>
            
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="dancepage MusicSec">
    <div class="container dancepagec">

        <!-- pills -->
        <div class="typesOfDance-tab">
<!-- 
        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="col-lg-1 col-md-1 dancebthide"></li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link " id="pills-Kathak-tab" href="<?=base_url(); ?>Kathak" target="_blank" role="tab" aria-controls="pills-Kathak" aria-selected="true">Kathak</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link active" id="pills-Bharatnatyam-tab" href="<?=base_url(); ?>Bharatnatyam" target="_blank" role="tab" aria-controls="pills-Bharatnatyam" aria-selected="false">Bharatnatyam</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link" id="pills-Odissi-tab" href="<?=base_url(); ?>Odissi" target="_blank" role="tab" aria-controls="pills-Odissi" aria-selected="false">Odissi</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link" id="pills-Bollywood-tab" href="<?=base_url(); ?>Bollywood" target="_blank" role="tab" aria-controls="pills-Bollywood" aria-selected="false">Bollywood Dance</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link" id="pills-Western-tab" href="<?=base_url(); ?>Western" target="_blank" role="tab" aria-controls="pills-Western" aria-selected="false">Western Dance</a>
            </li>

            <li class="col-lg-1 col-md-1 dancebthide"></li>
            <li class="col-lg-1 col-md-1 dancebthide"></li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link big" id="pills-Semiclassical-tab" href="<?=base_url(); ?>Semiclassical" target="_blank" role="tab" aria-controls="pills-Semiclassical" aria-selected="false">Semi Classical</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link big" id="pills-Bhangra-tab" href="<?=base_url(); ?>Bhangra" target="_blank" role="tab" aria-controls="pills-Bhangra" aria-selected="false">Bhangra</a>
            </li>

            <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                <a class="nav-link big" id="pills-Folk-tab" href="<?=base_url(); ?>Folk" target="_blank" role="tab" aria-controls="pills-Folk" aria-selected="false">Folk Dance</a>
            </li>
        </ul> -->
            <div class="tab-content" id="pills-tabContent">
                <!-- Kathak -->
                <div class="tab-pane fade show active" id="pills-Kathak" role="tabpanel" aria-labelledby="pills-Kathak-tab">
                    <div class="row pddyd">
                    <div class="col-lg-12 col-md-12 col-12 imgs text-center pt-5">
                    <img src="<?=base_url(); ?>public/images/boarder1.webp" alt="Image Description" class="img-fluid">
                    </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/kathakImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp">
                            <h3 class="heading"> Kathak</h3>
                            <p>
                                Looking for the best online Kathak classes with a comprehensive syllabus? Look no further than our platform! Our online Kathak classes are designed to provide you with an immersive learning experience that will help you master this beautiful dance form. Our syllabus covers everything from the basics of footwork and hand gestures to complex choreography and improvisation techniques. With our experienced instructors and state-of-the-art technology, you can learn Kathak from the comfort of your own home and at your own pace. Join us today and discover the joy of Kathak dancing!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnKathak" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-kathak" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="lear">
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3>What you will learn</h3>
                                    <p class="">
                                    The Kathak syllabus consists of a progressive series of steps and techniques that build
                        upon each other to create a complete dance form. Here is a brief overview of the Kathak
                        syllabus:
                                    </p>
                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Tatkaar - Basic Footwork</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Aamad - Introduction of Rhythm</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Tora and Tukda - Combination of Footwork and Rhythm</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Tihai - Combination of Three Rhythmic Cycles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Chakkar - Spins and Turns</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Gat Bhava - Combination of Footwork and Expressions</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Paran - Complex Footwork Patterns</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                         Ladi - Group of Footwork Phrases</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                         Thaat - Posture and Basic Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Parhant - Reciting the Rhythmic Cycles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Abhinaya - Expression through Face and Body</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Raas - Combination of Expressions and Rhythm</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Tarana - Combination of Rhythm and Melody</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Padhant - Reciting the Syllables and Rhythmic Patterns</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="public/images/Dance/kathakImg2.svg" class="danceimg">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-kathak">
                        <div class="container">
                   
                            <div class="month-row">
                                <div class="row">
                                    <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center imgmodule">
                                        <img src="public/images/Dance/kathakImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 kathakp">
                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-KathakMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth1" type="button" role="tab" aria-controls="pills-KathakMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth2" type="button" role="tab" aria-controls="pills-KathakMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth3" type="button" role="tab" aria-controls="pills-KathakMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth4" type="button" role="tab" aria-controls="pills-KathakMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth5" type="button" role="tab" aria-controls="pills-KathakMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth6" type="button" role="tab" aria-controls="pills-KathakMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth7" type="button" role="tab" aria-controls="pills-KathakMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth8" type="button" role="tab" aria-controls="pills-KathakMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth9" type="button" role="tab" aria-controls="pills-KathakMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth10" type="button" role="tab" aria-controls="pills-KathakMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth11" type="button" role="tab" aria-controls="pills-KathakMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KathakMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-KathakMonth12" type="button" role="tab" aria-controls="pills-KathakMonth12" aria-selected="false">Month 12</button>
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
                                                        <div class="tab-pane fade show active" id="pills-KathakMonth1" role="tabpanel" aria-labelledby="pills-KathakMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Kathak Dance Style.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Footwork Techniques.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Hand Gestures (Mudras).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding Rhythm and Timing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth2" role="tabpanel" aria-labelledby="pills-KathakMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Chakkar (Spins).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Tatkar (Footwork with Bells). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Simple Hand and Feet Coordination.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Kathak postures.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth3" role="tabpanel" aria-labelledby="pills-KathakMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Pirouette Technique.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Kavitt (Narrative Dance). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Hastak (Hand Movement) Exercises.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Basic Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth4" role="tabpanel" aria-labelledby="pills-KathakMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Tihai (A Three-fold Repetition).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Teen Taal (16-Beat Rhythm Cycle). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Expression Techniques (Abhinaya).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Basic Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth5" role="tabpanel" aria-labelledby="pills-KathakMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Footwork Techniques.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Intermediate Chakkar (Spins). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Hand and Feet Coordination.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Intermediate Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth6" role="tabpanel" aria-labelledby="pills-KathakMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advanced Footwork Techniques.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Advanced Chakkar (Spins). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advanced Hand and Feet Coordination.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Advanced Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth7" role="tabpanel" aria-labelledby="pills-KathakMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Vilambit Laya (Slow Tempo).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Ek Taal (12-Beat Rhythm Cycle). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bandish (Lyrics).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Vilambit Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth8" role="tabpanel" aria-labelledby="pills-KathakMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Drut Laya (Fast Tempo).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Jhap Taal (10-Beat Rhythm Cycle). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Tukda (Short Compositions).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Drut Laya Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth9" role="tabpanel" aria-labelledby="pills-KathakMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advanced Expression Techniques (Abhinaya).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Advanced Kathak Compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Kavit (Poetry).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Kavit-Based Kathak Compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth10" role="tabpanel" aria-labelledby="pills-KathakMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Tarana (Musical Composition).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practice of Tarana-Based Kathak Compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advanced Practice of Footwork and Hand Gestures.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Guru-Shishya Tradition.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth11" role="tabpanel" aria-labelledby="pills-KathakMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Thaat (Posture).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Jaati (Complex Rhythm Patterns). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advanced Practice of Kathak Compositions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Choreography for Stage Performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-KathakMonth12" role="tabpanel" aria-labelledby="pills-KathakMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Kathak Compositions for Stage Performances.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Review and Recap of Techniques and Compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practice of Abhinaya.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Final Performance and Certiﬁcation.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                Each month could have more speciﬁc topics and exercises, depending on the level and goals of the students. Additionally, it is important to have regular assessments and feedback to ensure progress and adaptation to the individual needs of the students.
                                                            </p>
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

                <!-- Bharatnatyam -->
                <div class="tab-pane fade " id="pills-Bharatnatyam" role="tabpanel" aria-labelledby="pills-Bharatnatyam-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/Bharatnatyam.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Bharatnatyam</h3>
                            <p>
                                Experience the grace and beauty of Bharatanatyam with our online dance classes! Our syllabus covers the fundamentals of this ancient Indian classical dance form, from basic postures and hand gestures to complex choreography and improvisation techniques. Our experienced instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our convenient online platform, you can learn Bharatanatyam from the comfort of your own home and at your own pace. Join our community of dancers today and discover the rich cultural heritage and artistry of Bharatanatyam!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6 ">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnbharatnatyam" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-bharatnatyam" class="btn btndemo step" role="button">
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
                    <section class="learningsec yellowb" id="learnbharatnatyam">
                        <div class="container">
                            <div class="row ">
                            <div  class="col-lg-12 col-md-12 col-12">
                                 <h3 class="">What you will learn</h3>
                                 <p>
                                    The Bharatanatyam syllabus consists of a progressive series of steps and techniques that
                                    build upon each other to create a complete dance form. Here is a brief overview of the
                                    Bharatanatyam syllabus:
                                    </p>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                   
                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Adavus - Basic Steps</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Hasta Mudras - Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Margam - A Sequence of Items</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Alarippu - A Combination of Adavus and Hasta Madras</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Jathiswaram - A Combination of Adavus and Rhythmic Patterns</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Sabdam - A Combination of Adavus, Hasta Mudras, and Expressions</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                             Varnam - A Combination of Adavus, Hasta Mudras, Expressions, and Narration</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Padam - An Expressive Dance with Lyrics</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Tillana - A Fast-paced Dance with Complex Footwork</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">1 Shlokam - Devotional Dance with Sanskrit Verses</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Abhinaya - Expression through Face and Body</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Natya - A Narrative Dance Form</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Samyukta Hastas - Combination of Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Asamyukta Hastas - Single Hand Gestures</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="public/images/Dance/2.svg" class="danceimg">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Folk -->
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn
                                    Bharatanatyam from anywhere in the world, at your own pace. Join us today and let's start
                                    dancing!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-bharatnatyam">
                        <div class="container">
        
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/bharatnatyam-3.svg" class="danceimg danceimg5">

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
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bharatanatyam and its history.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic posture and hand gestures (hastas).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Simple adavus (basic steps).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Mudras (hand gestures) and their meanings.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythm (tala) exercises.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth2" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to facial expressions (abhinaya).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different rhythms (tala). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Jathis (rhythmic patterns).</li>

                                                                </ul>


                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth3" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music in Bharatanatyam.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different speeds (laya). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Asamyuta Hasta (single hand gestures).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth4" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Natya Shastra (ancient Indian text on performing arts).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different directions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Samyuta Hasta (double hand gestures).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth5" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Bhava (emotions).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different tempos (gati). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Hastas used in Natya (dramatic) pieces.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth6" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Rasa (aesthetic emotions) .
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different styles (bhavas). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Adavu combinations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth7" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the Abhinaya Darpana (classical text on Abhinaya).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Abhinaya (expression) in Bharatanatyam. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (steps) in different Nayikas (heroine) and Nayakas (hero) styles.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth8" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Hastas used in Nritta (pure dance) pieces.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different Hastas combinations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Alarippu (opening dance).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth9" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Varnam (a complex dance piece that combines both Nritta and Abhinaya).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different Varnam styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Pada Varnam (dance piece with lyrics).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth10" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Tala (rhythm) and its variations.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different Tala variations. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Laya (tempo) and its variations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth11" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11:</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Tillana (fast-paced pure dance piece).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (steps) in different Tillana styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Shabdam (dance piece with lyrics and Abhinaya).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-BharatnatyamMonth12" role="tabpanel" aria-labelledby="pills-BharatnatyamMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Margam (traditional Bharatanatyam repertoire).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Recap of all adavus and Hastas learned in the previous months. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to performance techniques and stage presence.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                Each month could have more speciﬁc topics and exercises, depending on the level and goals of the students. Additionally, it is important to have regular assessments and feedback to ensure progress and adaptation to the individual needs of the students.
                                                            </p>
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

                <!-- Odissi -->
                <div class="tab-pane fade" id="pills-Odissi" role="tabpanel" aria-labelledby="pills-Odissi-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/odissi.webp" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Odissi</h3>
                            <p>
                                Explore the captivating rhythms and movements of Odissi with our online dance classes! Our expert instructors offer a comprehensive syllabus that covers the basics of this traditional Indian classical dance form, from footwork and hand gestures to complex choreography and storytelling techniques. Our personalized approach and state-of-the-art technology allow you to learn Odissi from anywhere in the world, at your own pace. Whether you’re a beginner or an experienced dancer, our online Odissi classes provide a fun and engaging way to develop your skills and deepen your appreciation of this beautiful art form. Join us today and discover the magic of Odissi!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6 ">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnodissi" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-odissi" class="btn btndemo step" role="button">
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
                    <section class="learningsec yellowb" id="learnodissi">
                        <div class="container">
                            <div class="row">
                            <div  class="col-lg-12 col-md-12 col-12">
                                 <h3 class="">What you will learn</h3>
                                 <p>
                                    Our online folk dance classes offer a vibrant syllabus that showcases the diverse and rich
                                    cultural heritage of various regions around the world. Here is an overview of our syllabus:   
                                    </p>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    
                                    <ul class="list-group">
                                        <h6>Level 1 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic Footwork and Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to Rhythm and Timing</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Sthayee - Static Poses</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Chauka - A Square Stance</span>
                                        </li>
                                        <h6>Level 2 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Intermediate Footwork and Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Tribhangi - A Three-fold Bend</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Bhangis - Dance Movements with Stance Changes</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Pallavi - A Pure Dance Form</span>
                                        </li>
                                        <h6>Level 3 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Footwork and Hand Gestures</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Abhinaya - Expressive Interpretation of Dance</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Moksha - A Spiritual Interpretation of Dance </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Guru Vandana - Offering Gratitude to the Guru</span>
                                        </li>
                                    </ul>
                                    <p class="mt-3">
                                 
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Odissi -->
                                    <div class="folkImg">
                                    <img src="public/images/Dance/odissi-3.webp" class="danceimg">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Folk -->
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn Odissi
                                    dance from anywhere in the world, at your own pace. Join us today and let's start dancing to
                                    the rhythms of Odissi!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-odissi">
                        <div class="container">
                           
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/odissi-4.webp" class="danceimg danceimg5">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 & 2 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes CombTwoMonths" id="pills-OdissiMonth1-2-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth1-2" type="button" role="tab" aria-controls="pills-OdissiMonth1-2" aria-selected="true">Month 1-2</button>
                                            </li>
                                            <!-- Month 3 & 4-->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-OdissiMonth3-4-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth3-4" type="button" role="tab" aria-controls="pills-OdissiMonth3-4" aria-selected="false">Month 3-4</button>
                                            </li>
                                            <!-- Month 5 & 6-->
                                            <li class="col-lg-4 col-md-4 col-6  nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-OdissiMonth5-6-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth5-6" type="button" role="tab" aria-controls="pills-OdissiMonth5-6" aria-selected="false">Month 5-6</button>
                                            </li>
                                            <!-- Month  7 & 8  -->
                                            <li class="col-lg-4 col-md-4 col-6  nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month7-8-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth7-8" type="button" role="tab" aria-controls="pills-OdissiMonth7-8" aria-selected="false">Month 7-8 </button>
                                            </li>
                                            <!-- Month 9 & 10 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month9-10-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth9-10" type="button" role="tab" aria-controls="pills-OdissiMonth9-10" aria-selected="false">Month 9-10</button>
                                            </li>
                                            <!-- Month  11 & 12  -->
                                            <li class="col-lg-4 col-md-4 col-6  nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month11-12-tab" data-bs-toggle="pill" data-bs-target="#pills-OdissiMonth11-12" type="button" role="tab" aria-controls="pills-OdissiMonth11-12" aria-selected="false">Month 11-12 </button>
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
                                                        <!-- Month 1 & 2 -->
                                                        <div class="tab-pane fade show active" id="pills-OdissiMonth1-2" role="tabpanel" aria-labelledby="pills-OdissiMonth1-2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1-2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Odissi and its history.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic posture and hand gestures (hastas).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythm (tala) exercises.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the Odissi music and its instruments.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic mudras (hand gestures) and their meanings.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (dance steps) in different rhythms (tala).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Bhava (emotions) in Odissi.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 & 4 -->
                                                        <div class="tab-pane fade" id="pills-OdissiMonth3-4" role="tabpanel" aria-labelledby="pills-OdissiMonth3-4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3-4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the three primary positions (tribhangi, chowk and samabhanga).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (dance steps) in different positions (tribhangi, chowk and samabhanga). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic abhinaya (facial expressions) in Odissi.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (dance steps) in different tempos (laya).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic repertoire of Odissi.</li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                        <!-- Month 5 & 6 -->
                                                        <div class="tab-pane fade" id="pills-OdissiMonth5-6" role="tabpanel" aria-labelledby="pills-OdissiMonth5-6-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5-6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic mudras (hand gestures) and their use in Odissi.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (dance steps) in different directions and lines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic tala (rhythm) exercises with music.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic poses (asanas) in Odissi.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (dance steps) in different speeds (gati)</li>
                                                                </ul>

                                                            </div>


                                                        </div>

                                                        <!-- Month 7 & 8  -->
                                                        <div class="tab-pane fade" id="pills-OdissiMonth7-8" role="tabpanel" aria-labelledby="pills-OdissiMonth7-8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7-8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic hasta (hand gestures) and their use in Odissi.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic adavus (dance steps) in different styles (bhava). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic abhinaya (facial expressions) in different emotions (rasa).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (dance steps) in different Nayikas (heroine) and Nayakas (hero) styles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Taala (rhythm) and its variations.</li>
                                                                </ul>

                                                            </div>


                                                        </div>

                                                        <!-- Month 9 & 10 -->
                                                        <div class="tab-pane fade" id="pills-OdissiMonth9-10" role="tabpanel" aria-labelledby="pills-OdissiMonth9-10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9-10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) and their variations.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Intermediate tala (rhythm) exercises with music. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate abhinaya (facial expressions) in different emotions (rasa)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate mudras (hand gestures) and their use in Odissi.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) in different Nayikas (heroine) and Nayakas (hero) styles.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 & 12 -->
                                                        <div class="tab-pane fade" id="pills-OdissiMonth11-12" role="tabpanel" aria-labelledby="pills-OdissiMonth11-12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11-12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses (asanas) in Odissi.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Intermediate adavus (dance steps) in different speeds (gati). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic repertoire of Abhinaya (expressive) pieces.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) in different positions (tribhangi, chowk and samabhanga).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) in different tempos (laya).
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                The syllabus may vary based on the instructor’s preference and the student’s progress. It’s important to practice regularly and seek feedback from the instructor to improve.
                                                            </p>
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

                <!-- Bollywood -->
                <div class="tab-pane fade" id="pills-Bollywood" role="tabpanel" aria-labelledby="pills-Bollywood-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/bollywood-dance.webp" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Bollywood</h3>
                            <p>
                                Ready to add some Bollywood ﬂair to your dance routine? Our online Bollywood dance classes have got you covered! Our expert instructors will guide you through everything from basic steps to complex choreography, helping you master the signature moves of Bollywood dance. Our comprehensive syllabus includes techniques for Bollywood-style footwork, hand gestures, and facial expressions, as well as tips for incorporating your own personal style into your dancing. With our ﬂexible scheduling and convenient online platform, you can learn Bollywood dance from anywhere, at any time. Join us today and start moving to the beat of Bollywood!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnBollywood" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-Bollywood" class="btn btndemo step" role="button">
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
                    <section class="learningsec yellowb" id="learnBollywood">
                        <div class="container">
                            <div class="row">
                            <div  class="col-lg-12 col-md-12 col-12">
                                 <h3 class="">What you will learn</h3>
                                 <p>
                                    Our online folk dance classes offer a vibrant syllabus that showcases the diverse and rich
                                    cultural heritage of various regions around the world. Here is an overview of our syllabus:   
                                    </p>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    
                                    <ul class="list-group">
                                        <h6>Level 1 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic Bollywood Dance Steps</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to Bollywood Music and Rhythm</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Hands and Feet Coordination</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Bollywood-style Walks and Turns</span>
                                        </li>
                                        <h6>Level 2 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Intermediate Bollywood Dance Steps</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Complex Hand Gestures and Expressions</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Choreography for Popular Bollywood Songs</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Introduction to Bollywood Fusion Styles</span>
                                        </li>
                                        <h6>Level 3 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Bollywood Dance Steps</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">High-energy Performance Techniques</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Choreography for Popular Bollywood Songs</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Bollywood Fusion Styles</span>
                                        </li>
                                    </ul>
                                  
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Bollywood -->
                                    <div class="folkImg">
                                        <img src="public/images/Dance/bollywood-21.webp" class="danceimg">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Folk -->
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn Bollywood
                                    dance from anywhere in the world, at your own pace. Join us today and let's start dancing to
                                    the beats of Bollywood! 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-Bollywood">
                        <div class="container">
                          
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/bollywood-3.webp" class="danceimg danceimg5">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 & 2 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes CombTwoMonths" id="pills-BollywoodMonth1-2-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth1-2" type="button" role="tab" aria-controls="pills-BollywoodMonth1-2" aria-selected="true">Month 1-2</button>
                                            </li>
                                            <!-- Month 3 & 4-->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-BollywoodMonth3-4-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth3-4" type="button" role="tab" aria-controls="pills-BollywoodMonth3-4" aria-selected="false">Month 3-4</button>
                                            </li>
                                            <!-- Month 5 & 6-->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-BollywoodMonth5-6-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth5-6" type="button" role="tab" aria-controls="pills-BollywoodMonth5-6" aria-selected="false">Month 5-6</button>
                                            </li>
                                            <!-- Month  7 & 8  -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-BollywoodMonth7-8-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth7-8" type="button" role="tab" aria-controls="pills-BollywoodMonth7-8" aria-selected="false">Month 7-8 </button>
                                            </li>
                                            <!-- Month 9 & 10 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-BollywoodMonth9-10-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth9-10" type="button" role="tab" aria-controls="pills-BollywoodMonth9-10" aria-selected="false">Month 9-10</button>
                                            </li>
                                            <!-- Month  11 & 12  -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-BollywoodMonth11-12-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodMonth11-12" type="button" role="tab" aria-controls="pills-BollywoodMonth11-12" aria-selected="false">Month 11-12 </button>
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
                                                        <!-- Month 1 & 2 -->
                                                        <div class="tab-pane fade show active" id="pills-BollywoodMonth1-2" role="tabpanel" aria-labelledby="pills-BollywoodMonth1-2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1-2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bollywood dance and its history.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic posture and hand gestures (mudras).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Simple footwork and grooves.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythm (beat) exercises.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the Indian ﬁlm industry and music composers.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic facial expressions and emotions (bhavas).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic poses and movements.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Month 3 & 4 -->
                                                        <div class="tab-pane fade" id="pills-BollywoodMonth3-4" role="tabpanel" aria-labelledby="pills-BollywoodMonth3-4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3-4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different styles of Bollywood dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in dance compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate footwork and grooves.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Intermediate rhythm (beat) exercises with hand claps.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different Indian musical genres used in Bollywood dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate facial expressions and emotions (bhavas).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the use of props in Bollywood dance.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Month 5 & 6 -->
                                                        <div class="tab-pane fade" id="pills-BollywoodMonth5-6" role="tabpanel" aria-labelledby="pills-BollywoodMonth5-6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5-6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in different styles (bhava).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Intermediate footwork and grooves in different tempos (laya). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (beat) exercises with footwork and hand claps.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate facial expressions and emotions (bhavas) in different songs.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bollywood choreography and its elements.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses and movements with different expressions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Month 7 & 8  -->
                                                        <div class="tab-pane fade" id="pills-BollywoodMonth7-8" role="tabpanel" aria-labelledby="pills-BollywoodMonth7-8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7-8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses and movements with different emotions (rasa)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Intermediate footwork and grooves in different styles (bhava) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (beat) exercises with footwork, hand claps and music</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the use of facial expressions and gestures in storytelling</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Bollywood choreography and its variations</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the use of costumes in Bollywood dance</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Month 9 & 10 -->
                                                        <div class="tab-pane fade" id="pills-BollywoodMonth9-10" role="tabpanel" aria-labelledby="pills-BollywoodMonth9-10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9-10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Bollywood choreography and its complexities</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses and movements with expressions and emotions </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (beat) exercises with footwork, hand claps and music</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the use of different dance formations in Bollywood dance</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate use of facial expressions and gestures in storytelling</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate use of costumes in Bollywood dance</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Month 11 & 12 -->
                                                        <div class="tab-pane fade" id="pills-BollywoodMonth11-12" role="tabpanel" aria-labelledby="pills-BollywoodMonth11-12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11-12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses and movements with different styles (bhava)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate footwork and grooves with different emotions (rasa) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (beat) exercises with footwork, hand claps, and music variations</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the use of props and themes in Bollywood dance</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate use of different dance formations and group choreography </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Performance-based learning and putting together all the skills learned throughout the course </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Note -->
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                The syllabus may vary based on the instructor’s preference and the student’s progress. It’s important to practice regularly and seek feedback from the instructor to improve.
                                                            </p>
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


                <!-- Western -->
                <div class="tab-pane fade" id="pills-Western" role="tabpanel" aria-labelledby="pills-Western-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/western-dance.webp" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Western</h3>
                            <p>
                                Get ready to move to the rhythm of Western dance with our online classes! Our syllabus covers a variety of styles, from contemporary and jazz to hip-hop and tap dance. Our expert instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our state-of-the-art technology and convenient online platform, you can learn Western dance from anywhere in the world, at your own pace. Whether you’re a beginner or an experienced dancer, our online classes provide a fun and engaging way to explore the richness of Western dance culture. Join us today and let’s dance!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnWestern" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-Western" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learnWestern">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Folk -->
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn Folk dance
                                    from anywhere in the world, at your own pace. Join us today and let's explore the beauty and
                                    diversity of Folk dance together!
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                   
                                    <ul class="list-group">
                                        <h6>Level 1 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic Rhythm and Timing</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to Body Alignment and Posture</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic Steps and Techniques for Contemporary, Jazz, and Ballet</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Choreography for Simple Dance Combinations</span>
                                        </li>
                                        <h6>Level 2 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Intermediate Techniques for Contemporary, Jazz, and Ballet</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to Hip Hop Dance Style</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Choreography for Intermediate Dance Combinations</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Expressive Interpretation of Dance</span>
                                        </li>
                                        <h6>Level 3 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Techniques for Contemporary, Jazz, and Ballet</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Choreography for Contemporary, Jazz, and Ballet</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Techniques for Hip Hop Dance Style</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Choreography for Advanced Hip Hop Dance Combinations</span>
                                        </li>
                                    </ul>
                                
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Western -->
                                    <div class="folkImg">
                                        <img src="public/images/Dance/western-3.webp" class="danceimg">
                                    </div>   
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn Western
                                    dance from anywhere in the world, at your own pace. Join us today and let's start dancing to
                                    the beats of Western dance!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec mft" id="mod-Western">
                        <div class="container">
                           
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/western-dance-2.webp" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-WesternMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth1" type="button" role="tab" aria-controls="pills-WesternMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth2" type="button" role="tab" aria-controls="pills-WesternMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth3" type="button" role="tab" aria-controls="pills-WesternMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth4" type="button" role="tab" aria-controls="pills-WesternMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth5" type="button" role="tab" aria-controls="pills-WesternMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth6" type="button" role="tab" aria-controls="pills-WesternMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth7" type="button" role="tab" aria-controls="pills-WesternMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth8" type="button" role="tab" aria-controls="pills-WesternMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth9" type="button" role="tab" aria-controls="pills-WesternMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth10" type="button" role="tab" aria-controls="pills-WesternMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth11" type="button" role="tab" aria-controls="pills-WesternMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-WesternMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternMonth12" type="button" role="tab" aria-controls="pills-WesternMonth12" aria-selected="false">Month 12</button>
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
                                                        <div class="tab-pane fade show active" id="pills-WesternMonth1" role="tabpanel" aria-labelledby="pills-WesternMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 : Introduction to Western Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of various Western dance styles like Jazz, Ballet, Contemporary, and Hip-Hop.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of Western dance posture and footwork.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the rhythm and beats of Western music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth2" role="tabpanel" aria-labelledby="pills-WesternMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 : Intermediate Western Dance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> More advanced Western dance footwork and movements. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on building stamina and strength. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating hand and arm movements in Western dance.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth3" role="tabpanel" aria-labelledby="pills-WesternMonth3-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 : Western Dance Choreography</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn a complete Western dance routine.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>

                                                                        Focus on precision and timing in dance steps. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Western music composition and structure.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth4" role="tabpanel" aria-labelledby="pills-WesternMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 : Jazz Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Jazz dance techniques and history.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on Jazz walk, turns, and jumps. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning a Jazz dance routine.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth5" role="tabpanel" aria-labelledby="pills-WesternMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 : Ballet Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Ballet dance techniques and history.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on Ballet positions, plies, and pirouettes. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning a Ballet dance routine.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth6" role="tabpanel" aria-labelledby="pills-WesternMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 : Contemporary Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Contemporary dance techniques and history.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on ﬂuid and expressive movements</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning a Contemporary dance routine.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth7" role="tabpanel" aria-labelledby="pills-WesternMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 : Hip-Hop Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Hip-Hop dance techniques and history.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on Hip-Hop groove, isolation, and footwork. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning a Hip-Hop dance routine.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth8" role="tabpanel" aria-labelledby="pills-WesternMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 : Advanced Western Dance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on advanced Western dance movements and footwork.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating more complex hand and arm movements in dance routines.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to lifts and partner work in Western dance.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth9" role="tabpanel" aria-labelledby="pills-WesternMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 : Dance Improvisation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to improvisation and freestyle dance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on self-expression and creativity in dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to improvise to different music styles.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth10" role="tabpanel" aria-labelledby="pills-WesternMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 : Dance Fitness and Conditioning</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to dance ﬁtness and conditioning exercises.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on building strength and endurance for dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning dance ﬁtness routines.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth11" role="tabpanel" aria-labelledby="pills-WesternMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Production and Performance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Collaborate with other students to create a dance production.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Focus on teamwork and communication in dance productions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to stage design, lighting, and sound.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-WesternMonth12" role="tabpanel" aria-labelledby="pills-WesternMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 : Final Performance and Showcase</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Rehearse and perform a full Western dance production. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on showcasing the skills and techniques learned throughout the course. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Celebration of completion of the course and achievement of dance goals.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Note -->
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                Each month could have more speciﬁc topics and exercises, depending on the level and goals of the students. Additionally, it is important to have regular assessments and feedback to ensure progress and adaptation to the individual needs of the students.
                                                            </p>
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


                <!-- Semi-classical -->
                <div class="tab-pane fade" id="pills-Semiclassical" role="tabpanel" aria-labelledby="pills-Semiclassical-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/kathakImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Semi-classical</h3>

                            <p>
                                Unleash your inner artist with our online semi-classical dance classes! Our syllabus covers the fusion of classical and contemporary dance styles, blending the grace and elegance of classical dance with the energy and excitement of modern dance. Our expert instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our convenient online platform, you can learn semi-classical dance from the comfort of your own home and at your own pace. Whether you’re a beginner or an experienced dancer, our online classes provide a fun and engaging way to explore the richness of Indian dance culture. Join us today and let’s dance!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnSemiclassical" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-Semiclassical" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learnSemiclassical">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="mt-4">What you will learn</h3>
                                    <p>
                                         
                                    </p>
                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic postures and hand gestures.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focuses on the footwork and rhythms.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduces the spins and turns.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Chakkars.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explores complex footwork patterns.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Delves into abhinaya, the art of facial expressions.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Combines all the elements into a cohesive dance piece.</span>
                                        </li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">


                                    <!-- Semi-classical  -->

                                    <img src="public/images/Dance/kathakImg2.svg" class="danceimg">

                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-Semiclassical">
                        <div class="container">
                        
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/kathakImg3.svg" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 mftm">

                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 & 2 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes CombTwoMonths" id="pills-Month1_2-tab" data-bs-toggle="pill" data-bs-target="#pills-Month1_2" type="button" role="tab" aria-controls="pills-Month1_2" aria-selected="true">Month 1-2</button>
                                            </li>
                                            <!-- Month 3 & 4-->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month3_4-tab" data-bs-toggle="pill" data-bs-target="#pills-Month3_4" type="button" role="tab" aria-controls="pills-Month3_4" aria-selected="false">Month 3-4</button>
                                            </li>
                                            <!-- Month 5 & 6-->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month5_6-tab" data-bs-toggle="pill" data-bs-target="#pills-Month5_6" type="button" role="tab" aria-controls="pills-Month5_6" aria-selected="false">Month 5-6</button>
                                            </li>
                                            <!-- Month  7 & 8  -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month7_8-tab" data-bs-toggle="pill" data-bs-target="#pills-Month7_8" type="button" role="tab" aria-controls="pills-Month7_8" aria-selected="false">Month 7-8 </button>
                                            </li>
                                            <!-- Month 9 & 10 -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month9_10-tab" data-bs-toggle="pill" data-bs-target="#pills-Month9_10" type="button" role="tab" aria-controls="pills-Month9_10" aria-selected="false">Month 9-10</button>
                                            </li>
                                            <!-- Month  11 & 12  -->
                                            <li class="col-lg-4 col-md-4 col-6 nav-item" role="presentation">
                                                <button class="nav-link monthtypes CombTwoMonths" id="pills-Month11_12-tab" data-bs-toggle="pill" data-bs-target="#pills-Month11_12" type="button" role="tab" aria-controls="pills-Month11_12" aria-selected="false">Month 11-12 </button>
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
                                                        <!-- Month 1 & 2 -->
                                                        <div class="tab-pane fade show active" id="pills-Month1_2" role="tabpanel" aria-labelledby="pills-Month1_2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1-2 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to semi-classical dance and its history</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic posture and hand gestures (mudras)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Simple footwork</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythm (tala) exercises</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Introduction to the classical music and its instruments</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Abhinaya (expressions) and facial gestures (bhava)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic poses (asanas) and movements (karanas)</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 & 4 -->
                                                        <div class="tab-pane fade" id="pills-Month3_4" role="tabpanel" aria-labelledby="pills-Month3_4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3-4 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the three primary positions</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic hand gestures (hastas) and their use in dance compositions </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic adavus (dance steps) in different tempos (laya)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythm (tala) exercises with hand claps</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic Abhinaya (expressions) in different emotions (rasa)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic poses (asanas) and their variations </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 & 6 -->
                                                        <div class="tab-pane fade" id="pills-Month5_6" role="tabpanel" aria-labelledby="pills-Month5_6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5-6 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in dance compositions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate footwork (tatkar and tattadavu) in different tempos (laya) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (tala) exercises with hand claps</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Abhinaya (expressions) in different emotions (rasa)</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Abhinaya Darpana and its application in dance</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses (asanas) and their variations </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 & 8  -->
                                                        <div class="tab-pane fade" id="pills-Month7_8" role="tabpanel" aria-labelledby="pills-Month7_8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7-8 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) in different styles (bhava) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (tala) exercises with footwork </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in different compositions </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the concept of Natya Shastra and its relevance to dance </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Abhinaya (expressions) in different compositions </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses (asanas) and their variations </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 & 10 -->
                                                        <div class="tab-pane fade" id="pills-Month9_10" role="tabpanel" aria-labelledby="pills-Month9_10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9-10 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses (asanas) and their variations </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate footwork in different tempos (laya) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (tala) exercises with footwork and hand claps </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in different emotions (rasa) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Abhinaya (expressions) in different compositions </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the basic repertoire of semi-classical dance</li>

                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 & 12 -->
                                                        <div class="tab-pane fade" id="pills-Month11_12" role="tabpanel" aria-labelledby="pills-Month11_12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11-12 :</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Abhinaya (expressions) in different styles (bhava) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate poses (asanas) and their variations </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate adavus (dance steps) in different rhythms (tala) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate rhythm (tala) exercises with footwork, hand claps and music </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate hand gestures (hastas) and their use in different styles (bhava) </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Intermediate Abhinaya (expressions) in different compositions </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                The syllabus may vary based on the instructor’s preference and the student’s progress. It’s important to practice regularly and seek feedback from the instructor to improve.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                    </section>
                </div>

                <!-- Bhangra -->
                <div class="tab-pane fade" id="pills-Bhangra" role="tabpanel" aria-labelledby="pills-Bhangra-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/bhangra.webp" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Bhangra</h3>
                            <p>
                                Get ready to experience the vibrant energy and infectious rhythm of Bhangra with our online dance classes! Our syllabus covers the basics of this traditional Punjabi dance form, from footwork and hand gestures to the high-energy movements that make Bhangra so exhilarating. Our expert instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our state-of-the-art technology and convenient online platform, you can learn Bhangra dance from anywhere in the world, at your own pace. Whether you’re a beginner or an experienced dancer, our online classes provide a fun and engaging way to explore the richness of Bhangra dance culture.
                                Join us today and let’s dance to the beat of Bhangra!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnBhangra" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-Bhangra" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learnBhangra">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="">What you will learn</h3>
                                    <p>
                                         
                                    </p>
                                    <ul class="list-group">
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic postures and hand gestures.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focuses on the footwork and rhythms.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduces the spins and turns.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Chakkars.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explores complex footwork patterns.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Delves into abhinaya, the art of facial expressions.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                                Combines all the elements into a cohesive dance piece.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Bhangra -->
                                    <img src="public/images/Dance/bhangra-2.webp" class="danceimg">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-Bhangra">
                        <div class="container">
                     
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/bhangra-2-1.webp" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-BhangraMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth1" type="button" role="tab" aria-controls="pills-BharatnatyamMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth2" type="button" role="tab" aria-controls="pills-BharatnatyamMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth3" type="button" role="tab" aria-controls="pills-BharatnatyamMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth4" type="button" role="tab" aria-controls="pills-BharatnatyamMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth5" type="button" role="tab" aria-controls="pills-BharatnatyamMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth6" type="button" role="tab" aria-controls="pills-BharatnatyamMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth7" type="button" role="tab" aria-controls="pills-BharatnatyamMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth8" type="button" role="tab" aria-controls="pills-BharatnatyamMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth9" type="button" role="tab" aria-controls="pills-BharatnatyamMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth10" type="button" role="tab" aria-controls="pills-BharatnatyamMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth11" type="button" role="tab" aria-controls="pills-BharatnatyamMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-BhangraMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-BhangraMonth12" type="button" role="tab" aria-controls="pills-BharatnatyamMonth12" aria-selected="false">Month 12</button>
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
                                                        <div class="tab-pane fade show active" id="pills-BhangraMonth1" role="tabpanel" aria-labelledby="pills-BhangraMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 : Introduction to Bhangra dance and its history</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of Bhangra posture and footwork.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the rhythm and beats of Bhangra music.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to traditional Bhangra dance steps.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth2" role="tabpanel" aria-labelledby="pills-BhangraMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 : Intermediate Bhangra dance techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> More advanced Bhangra footwork and movements. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on building stamina and strength </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating hand and arm movements in Bhangra dance. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth3" role="tabpanel" aria-labelledby="pills-BhangraMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 : Bhangra dance choreography</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn a complete Bhangra dance routine. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on precision and timing in dance steps. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhangra music composition and structure.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth4" role="tabpanel" aria-labelledby="pills-BhangraMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 : Introduction to props in Bhangra dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of props in Bhangra dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Dhol and its role in Bhangra music. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to dance with Dhol sticks.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth5" role="tabpanel" aria-labelledby="pills-BhangraMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 : Advanced Bhangra dance techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on advanced Bhangra movements and footwork. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating more complex hand and arm movements in dance routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhangra acrobatics and lifts.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth6" role="tabpanel" aria-labelledby="pills-BhangraMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 : Fusion Bhangra dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn to combine Bhangra dance with other dance styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of Bhangra in Bollywood and Western music. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhangra ﬁtness and workout routines.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth7" role="tabpanel" aria-labelledby="pills-BhangraMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 : Choreography and performance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn and rehearse a full Bhangra dance performance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on stage presence and audience engagement. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to costume design and stage lighting.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth8" role="tabpanel" aria-labelledby="pills-BhangraMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 : Advanced Bhangra dance choreography</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning more advanced Bhangra dance routines. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of storytelling in Bhangra dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhangra dance competitions and events.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth9" role="tabpanel" aria-labelledby="pills-BhangraMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 : Contemporary Bhangra dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn to combine Bhangra with contemporary dance styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on improvisation and self-expression in Bhangra dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to Bhangra fusion music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth10" role="tabpanel" aria-labelledby="pills-BhangraMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 : Fusion Bhangra dance performances</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn and rehearse a fusion Bhangra dance performance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on incorporating different dance styles in Bhangra dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to video production and editing for dance performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth11" role="tabpanel" aria-labelledby="pills-BhangraMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Choreography and production</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Collaborate with other students to create a Bhangra dance production. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on teamwork and communication in dance productions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to marketing and promotion for dance productions.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-BhangraMonth12" role="tabpanel" aria-labelledby="pills-BhangraMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 : Final performance and showcase</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Rehearse and perform a full Bhangra dance production. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on showcasing the skills and techniques learned throughout the course. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Celebration of completion of the course and achievement of dance goals.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                Each month could have more speciﬁc topics and exercises, depending on the level and goals of the students. Additionally, it is important to have regular assessments and feedback to ensure progress and adaptation to the individual needs of the students.
                                                            </p>
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

                <!-- Folk -->
                <div class="tab-pane fade" id="pills-Folk" role="tabpanel" aria-labelledby="pills-Folk-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/Dance/folk-dance.webp" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 textPara-col">
                            <h3 class="heading"> Folk</h3>

                            <p>
                                Explore the richness and diversity of traditional folk dances with our online classes! Our syllabus covers a variety of styles from different regions of India, including Garba, Bihu, Dandiya, and more. Our expert instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our convenient online platform, you can learn these dynamic and expressive folk dances from the comfort of your own home and at your own pace. Whether you’re a beginner or an experienced dancer, our online classes provide a fun and engaging way to discover the beauty and richness of Indian folk dance culture.
                                Join us today and let’s dance to the rhythm of tradition!
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

                    <section class="learningBtn yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <!-- <button type="button" class="btn btndemo step">What you will learn</button> -->
                                    <a href="#learnFolk" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item col-lg-2 col-md-2 col-6">
                                    <!-- <button type="button" class="btn btndemo step">Modules</button> -->
                                    <a href="#mod-Folk" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learnFolk">
                        <div class="container">
                            <div class="row">
                                 <div  class="col-lg-12 col-md-12 col-12">
                                 <h3 class="">What you will learn</h3>
                                 <p>
                                    Our online folk dance classes offer a vibrant syllabus that showcases the diverse and rich
                                    cultural heritage of various regions around the world. Here is an overview of our syllabus:   
                                    </p>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    
                                    
                                    <ul class="list-group">
                                        <h6>Level 1 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to Folk Dance Styles from Various Regions</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic Steps and Techniques for Folk Dance Styles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding Rhythm and Timing for Folk Dance</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Choreography for Simple Folk Dance Combinations</span>
                                        </li>
                                        <h6>Level 2 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Intermediate Techniques for Folk Dance Styles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Rhythm and Timing for Folk Dance</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Choreography for Intermediate Folk Dance Combinations</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Expressive Interpretation of Folk Dance</span>
                                        </li>
                                        <h6>Level 3 :</h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Techniques for Folk Dance Styles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Advanced Choreography for Folk Dance Styles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Combining Different Folk Dance Styles</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">
                                            Presentation Techniques for Folk Dance Performances</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Folk -->
                                    <div class="folkImg">
                                    <img src="public/images/Dance/folk-dance-2.webp" class="danceimg">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Folk -->
                                    <p class="mt-3">
                                    Our expert instructors provide personalized guidance and support to help you master each
                                    level and progress to the next. With our convenient online platform, you can learn Folk dance
                                    from anywhere in the world, at your own pace. Join us today and let's explore the beauty and
                                    diversity of Folk dance together!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec mft" id="mod-Folk">
                        <div class="container">
                         
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center modulesdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center">
                                        <img src="public/images/Dance/folk-dance.webp" class="danceimg danceimg5">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-FolkMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth1" type="button" role="tab" aria-controls="pills-FolkMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth2" type="button" role="tab" aria-controls="pills-FolkMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth3" type="button" role="tab" aria-controls="pills-FolkMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth4" type="button" role="tab" aria-controls="pills-FolkMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth5" type="button" role="tab" aria-controls="pills-FolkMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth6" type="button" role="tab" aria-controls="pills-FolkMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth7" type="button" role="tab" aria-controls="pills-FolkMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth8" type="button" role="tab" aria-controls="pills-FolkMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth9" type="button" role="tab" aria-controls="pills-FolkMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth10" type="button" role="tab" aria-controls="pills-FolkMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth11" type="button" role="tab" aria-controls="pills-FolkMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-4 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FolkMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-FolkMonth12" type="button" role="tab" aria-controls="pills-FolkMonth12" aria-selected="false">Month 12</button>
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
                                                        <div class="tab-pane fade show active" id="pills-FolkMonth1" role="tabpanel" aria-labelledby="pills-FolkMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1 : Introduction to Folk Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of various folk dance styles from different regions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basics of folk dance posture and footwork.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the rhythm and beats of folk music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth2" role="tabpanel" aria-labelledby="pills-FolkMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2 : Intermediate Folk Dance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> More advanced folk dance footwork and movements </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on building stamina and strength.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating hand and arm movements in Folk dance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth3" role="tabpanel" aria-labelledby="pills-FolkMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3 : Folk dance choreography</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn a complete folk dance routine.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on precision and timing in dance steps. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to folk music composition and structure.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth4" role="tabpanel" aria-labelledby="pills-FolkMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4 : Traditional Folk Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn traditional folk dances from different regions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the cultural signiﬁcance of different dance styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to regional costumes and accessories.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth5" role="tabpanel" aria-labelledby="pills-FolkMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5 : Folk Dance with Props</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of props in folk dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to various props used in folk dances. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to dance with props like sticks, scarves, and ribbons.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth6" role="tabpanel" aria-labelledby="pills-FolkMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6 : Fusion Folk Dance</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn to combine folk dance with other dance styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of folk dance in modern music and dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to fusion music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth7" role="tabpanel" aria-labelledby="pills-FolkMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7 : Choreography and Performance </h5>
                                                                    <ul class="icon-list-items">
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn and rehearse a full Folk dance performance. </li>
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on stage presence and audience engagement. </li>
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to stage design and lighting.</li>
                                                                    </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth8" role="tabpanel" aria-labelledby="pills-FolkMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8 : Advanced Folk Dance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on advanced folk dance movements and footwork.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating more complex hand and arm movements in dance routines.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to folk acrobatics and lifts.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth9" role="tabpanel" aria-labelledby="pills-FolkMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9 : Folk Dance and Storytelling</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of storytelling in folk dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn dances that tell a story.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on expression and conveying emotion in dance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth10" role="tabpanel" aria-labelledby="pills-FolkMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10 : Contemporary Folk Dances</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learn to combine folk dance with contemporary dance styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on improvisation and self-expression in folk dance. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to contemporary folk music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth11" role="tabpanel" aria-labelledby="pills-FolkMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Folk Dance and Globalization</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the impact of globalization on folk dance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to appreciate and preserve folk dance traditions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to cultural exchange and collaboration in dance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-FolkMonth12" role="tabpanel" aria-labelledby="pills-FolkMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12 : Final Performance and Showcase</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Rehearse and perform a full folk dance production. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on showcasing the skills and techniques learned throughout the course. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Celebration of completion of the course and achievement of dance goals.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                Each month could have more speciﬁc topics and exercises, depending on the level and goals of the students. Additionally, it is important to have regular assessments and feedback to ensure progress and adaptation to the individual needs of the students.
                                                            </p>
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
<!-- </section> -->
<section class="how_Started-section pb-3 MusicSec">
    <div class="container">
        <div class="row m-0">

        <div class="col-lg-12 col-md-12 col-12 imgs text-center pt-5 pb-5">

                    <img src="<?=base_url(); ?>public/images/boarder1.webp" alt="Image Description" class="img-fluid">
                    </div>
            <div class="heading_new text-center">
                <b>
                    <h3 class="title_4 "> Course Highlights
                        <span class="line"></span></h3>
                </b>
            </div>
        </div>

        <div class="row justify-content-center htgs g-3">

            <div class="col-6 col-md-2 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch1.png" alt="Icon 1" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">World Class top Trainers </h2>
                </div>
            </div>

            <div class="col-6 col-md-2 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch2.png" alt="Icon 2" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">1 on 1 Private live class with flexible timing </h2>
                </div>
            </div>

            <div class="col-6 col-md-2 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch3.png" alt="Icon 3" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">Comprehensive Curriculum </h2>
                </div>
            </div>

            <div class="col-6 col-md-2 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch4.png" alt="Icon 4" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">Five Star Rated Platform</h2>
                </div>
            </div>

            <div class="col-6 col-md-2 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch5.png" alt="Icon 5" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">Lifetime Access to Resources and 24 x 7 support</h2>
                </div> 
            </div>
        </div>

    </div>
</section>




<!-- Happy faces -->
<!-- superstar slide -->




    </div>
    </div>
    </div>
</section>

<?php include('InstruInstructer.php'); ?>


<section class="faculty-section faculty-sectiononhome p-3 ">
    <div class="container cont-width mt-5 ">
        <div class="row heading-div m-0">

            <div class="col-lg-12 col-12 text-center">
                <h3 class="title_4 ">Happy Faces
                </h3>
                <span class="line"></span>
            </div>
        </div>
        <div class="row homapageview">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/1.png" class="centered-image" />
                                            <div class="hft">
                                                <h5>Smita Sebastian (UK)</h5>
                                                <p class="limited-height">For the past year and a half, I've been learning Kathak from Priti Singh,
                                                    and I'm incredibly grateful. Priti's graceful teaching style and deep knowledge of the subject
                                                    make each session interesting and well-rounded. Her online lessons,
                                                    coupled with flexible scheduling, have made my learning journey both convenient and enriching
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/Dance/2.png" class="centered-image"  />
                                            <div class="hft">
                                                <h5>Oorja Sinha ( Pune)</h5>
                                                <p class="limited-height">I made significant improvement in my dancing under the guidance of
                                                    Priti mam, I excelled in Kathak, completing my first-year exam.
                                                    Once just a dream, now a reality thanks to her dedication.
                                                    Her patient teaching and E-natyam platform make learning accessible and enriching.</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/3.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Reshma ( Pune )</h5>
                                        <p class="limited-height">Enatyam's Kathak online course has been a lifeline for me amidst my
                                            extremely busy schedule. The moments spent learning and immersing myself in Kathak dance
                                            have provided a much-needed escape from the pressures of daily life</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/4.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Tejashvi (Pune)</h5>
                                            <p class="limited-height">I never thought I'd get back into dancing after so many years, but
                                            Enatyam's Kathak online course made it possible. The structured lessons and supportive
                                            instructors gently guided me back to my long-forgotten hobby, and I couldn't be happier.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/5.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Swapna ( USA)</h5>
                                            <p class="limited-height">Enatyam's Kathak online course has been a delightful journey of rediscovery for me.
                                            After putting my passion for dance on hold for years, the accessibility of
                                            online learning allowed me to reconnect with Kathak and reclaim it as a cherished hobby</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/6.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vaanya’father ( Australia)</h5>
                                            <p class="limited-height">Enatyam's Kathak online course has exceeded our expectations in every way.
                                            The convenience of learning from home has made it easy for my child to fit
                                            dance practice into their schedule, and the joy it brings them is truly priceless</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/7.png" class="centered-image" />
                                        <div class="hft">
                                        <h5>Kavya (USA)</h5>
                                        <p class="limited-height">As a busy parent, I couldn't be happier with Enatyam's Bharatanatyam online
                                            course. It allows my child to pursue their passion for dance without
                                            the constraints of rigid schedules, and the progress they've made is truly remarkable</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                    
                            <div class="item in">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/8.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Isabella (USA)</h5>
                                            <p class="limited-height">Being an English speaker, my fondness for Krishna led me to Kathak with
                                                Enatyam. Their platform made my Kathak journey incredibly easy to follow.
                                                It seamlessly blends tradition with accessibility, it's like
                                                diving into the exciting world of Kathak without any hassle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/9.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Pradanya ( Singapore)</h5>
                                        <p class="limited-height">Enatyam's Kathak course is a must-try
                                            for anyone passionate about Indian classical dance.
                                            The curriculum is well-structured, catering to students of all levels</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/10.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Dr Riddhi Ketan Shukla ( Ahmedabad )</h5>
                                        <p class="limited-height">Thanks to Enatyam's Kathak online course, I've found a way to cut through the noise of my busy schedule and
                                            reconnect with myself through dance. The graceful movements and
                                            intricate footwork provide a sense of calm and clarity that I desperately needed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/11.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Pearllan ( UK)</h5>
                                        <p class="limited-height">I never imagined I could learn Kathak Dance online
                                            with such ease and depth. Enatyam's course structure is comprehensive,
                                            and the instructors are incredibly supportive</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/12.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Roohi’Mom ( Delhi )</h5>
                                        <p class="limited-height">Roohi's journey from beginner to performing on renowned stages in
                                        just two years with Enatyam fills me with immense pride and happiness. Seeing her passion
                                        for dance blossom is truly rewarding. Thank you, Enatyam, for making her dreams a reality
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/13.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Tia’mom ( Canada)</h5>
                                        <p class="limited-height">My daughter Antara has been learning Kathak from Enatyam for almost 3 years now.
                                            Our overall experience has been extremely satisfactory. The class timings are adjusted as per our convenience since we are overseas.
                                            The pace of teaching both theory and practical is based as per the student's needs. I would recommend it for any parent who
                                            wants to enroll their kids for any of the various art forms that they offer</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/14.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Meera (canada)</h5>
                                        <p class="limited-height">Discovering Enatyam E-Learning Kathak during the pandemic was a boon for my daughter
                                            Meera. In 3+ years, she's made remarkable progress, finding comfort in online learning.
                                            Detailed theoretical explanations enhance her expression. Grateful for accommodating time
                                            zones and confident in Meera's Kathak journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/15.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Raamya ( Singapore)</h5>
                                        <p class="limited-height">Enatyam's Bharatanatyam course is a gem! The instructors break down <br>complex movements into manageable steps, making it accessible for beginners like me
                                        </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/16.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Aarushi ( USA)</h5>
                                        <p class="limited-height">The smiles on my daughter’s faces during Enatyam's Bharatanatyam
                                            dance classes are priceless. The instructors have a gift for making dance accessible and
                                            enjoyable. It's like they've sprinkled a bit of magic in every session,
                                            turning learning into a delightful experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mobilepageview">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/1.png" class="centered-image" />
                                            <div class="hft">
                                                <h5>Smita Sebastian (UK)</h5>
                                                <p class="limited-height">For the past year and a half, I've been learning Kathak from Priti Singh,
                                                    and I'm incredibly grateful. Priti's graceful teaching style and deep knowledge of the subject
                                                    make each session interesting and well-rounded. Her online lessons,
                                                    coupled with flexible scheduling, have made my learning journey both convenient and enriching
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/2.png" class="centered-image"  />
                                            <div class="hft">
                                                <h5>Oorja Sinha ( Pune)</h5>
                                                <p class="limited-height">I made significant improvement in my dancing under the guidance of
                                                    Priti mam, I excelled in Kathak, completing my first-year exam.
                                                    Once just a dream, now a reality thanks to her dedication.
                                                    Her patient teaching and E-natyam platform make learning accessible and enriching.</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/3.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Reshma ( Pune )</h5>
                                        <p class="limited-height">Enatyam's Kathak online course has been a lifeline for me amidst my
                                            extremely busy schedule. The moments spent learning and immersing myself in Kathak dance
                                            have provided a much-needed escape from the pressures of daily life</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/4.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Tejashvi (Pune)</h5>
                                            <p class="limited-height">I never thought I'd get back into dancing after so many years, but
                                            Enatyam's Kathak online course made it possible. The structured lessons and supportive
                                            instructors gently guided me back to my long-forgotten hobby, and I couldn't be happier.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/5.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Swapna ( USA)</h5>
                                            <p class="limited-height">Enatyam's Kathak online course has been a delightful journey of rediscovery for me.
                                            After putting my passion for dance on hold for years, the accessibility of
                                            online learning allowed me to reconnect with Kathak and reclaim it as a cherished hobby</p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="item">
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/Dance/6.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vaanya’father ( Australia)</h5>
                                            <p class="limited-height">Enatyam's Kathak online course has exceeded our expectations in every way.
                                            The convenience of learning from home has made it easy for my child to fit
                                            dance practice into their schedule, and the joy it brings them is truly priceless</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                   
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/7.png" class="centered-image" />
                                        <div class="hft">
                                        <h5>Kavya (USA)</h5>
                                        <p class="limited-height">As a busy parent, I couldn't be happier with Enatyam's Bharatanatyam online
                                            course. It allows my child to pursue their passion for dance without
                                            the constraints of rigid schedules, and the progress they've made is truly remarkable</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>    
                        </div>

                        <div class="item">
                            <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/8.png" class="centered-image" />
                                        <div class="hft">
                                            <h5>Isabella (USA)</h5>
                                            <p class="limited-height">Being an English speaker, my fondness for Krishna led me to Kathak with
                                                Enatyam. Their platform made my Kathak journey incredibly easy to follow.
                                                It seamlessly blends tradition with accessibility, it's like
                                                diving into the exciting world of Kathak without any hassle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/9.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Pradanya ( Singapore)</h5>
                                        <p class="limited-height">Enatyam's Kathak course is a must-try
                                            for anyone passionate about Indian classical dance.
                                            The curriculum is well-structured, catering to students of all levels</p>
                                    </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                    <div class="item">
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/10.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Dr Riddhi Ketan Shukla ( Ahmedabad )</h5>
                                        <p class="limited-height">Thanks to Enatyam's Kathak online course, I've found a way to cut through the noise of my busy schedule and
                                            reconnect with myself through dance. The graceful movements and
                                            intricate footwork provide a sense of calm and clarity that I desperately needed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/Dance/11.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Pearllan ( UK)</h5>
                                        <p class="limited-height">I never imagined I could learn Kathak Dance online
                                            with such ease and depth. Enatyam's course structure is comprehensive,
                                            and the instructors are incredibly supportive</p>
                                    </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/12.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Roohi’Mom ( Delhi )</h5>
                                        <p class="limited-height">Roohi's journey from beginner to performing on renowned stages in
                                        just two years with Enatyam fills me with immense pride and happiness. Seeing her passion
                                        for dance blossom is truly rewarding. Thank you, Enatyam, for making her dreams a reality
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/13.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Tia’mom ( Canada)</h5>
                                        <p class="limited-height">My daughter Antara has been learning Kathak from Enatyam for almost 3 years now.
                                            Our overall experience has been extremely satisfactory. The class timings are adjusted as per our convenience since we are overseas.
                                            The pace of teaching both theory and practical is based as per the student's needs. I would recommend it for any parent who
                                            wants to enroll their kids for any of the various art forms that they offer</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/14.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Meera (canada)</h5>
                                        <p class="limited-height">Discovering Enatyam E-Learning Kathak during the pandemic was a boon for my daughter
                                            Meera. In 3+ years, she's made remarkable progress, finding comfort in online learning.
                                            Detailed theoretical explanations enhance her expression. Grateful for accommodating time
                                            zones and confident in Meera's Kathak journey.
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/15.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Raamya ( Singapore)</h5>
                                        <p class="limited-height">Enatyam's Bharatanatyam course is a gem! The instructors break down <br>complex movements into manageable steps, making it accessible for beginners like me
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/Dance/16.png" class="centered-image" />
                                    <div class="hft">
                                        <h5>Aarushi ( USA)</h5>
                                        <p class="limited-height">The smiles on my daughter’s faces during Enatyam's Bharatanatyam
                                            dance classes are priceless. The instructors have a gift for making dance accessible and
                                            enjoyable. It's like they've sprinkled a bit of magic in every session,
                                            turning learning into a delightful experience
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>



 
</section>



<?php include('pricingforhome.php'); ?>



<?php include('Dancefaq.php'); ?>



<?php include('bookdemocallb.php'); ?>

<section class="mb-5 opc">
    <div class="">
        <!-- pills -->
        <div class="typesOfDance-tab">
            <div class="MusicSec copage">
                <div class="">
                    <div class="row text-lg-start">
                        <div class="col-lg-12 col-md-12 col-12 coh">
                            <h3 class="text-white" style="text-align:center"> Other Popular Courses
                                <span class="line linessf"></span>
                            </h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <h5 class="text-white" style="text-align: center;">Everyday Yoga </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Western" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc1.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Western" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <h5 class="text-white" style="text-align: center;">Yoga for Chronic Disease </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Semiclassical" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc2.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Semiclassical" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <h5 class="text-white" style="text-align: center;">Yoga for Kids</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Bhangra" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc3.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Bhangra" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <h5 class="text-white" style="text-align: center;">Meditation </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Folk" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc4.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Folk" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="tstmwy">
    <div class="container ">
        <div class="row">
            <h1 class="studioText text-center ">The Studio That Moves With You</h1>
            <img src="<?php echo base_url(); ?>public/images/Home/GoesWhereverGo!.webp" /> 
        </div>
    </div>
</section>




<?php include('footer.php'); ?>