<?php include('header.php'); ?>
<!-- <div class="wrapper-container ">
    <div class="video-container">
        <video class="video-dance banerforinstuments" controls="false" autoplay="1" loop="1" id="danceVideo" >
            <source src="public/images/instrument/instrument-video-1.mp4" type="video/mp4">
        </video>



    </div>
</div> -->
<style>
    .pricing-section {
    padding-top: 8%;
    }
    .nav-pills .nav-link {
    display: flex;    align-items: center;
    justify-content: center;
    height: 100%; /* Ensure the link takes the full height of its parent */
}
</style>

<section class="s_header-section ">
    <div class="container-fluid mt-2">
        <div class="row ">
        <div class="col-lg-12 col-md-12 col-12 p-5 mt-5" style="background-color: black;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 textPara-col kathakp">
                        <h2 class="heading text-white">Unleash Your Musical Creativity with the Timeless Veena!</h2>
                        <p class="text-white">
                        Whether you’re starting out or looking to advance your skills, our veena community offers the resources, lessons, and support you need to grow as a musician. Whether you’re a beginner or an experienced musician, the veena offers a unique and fulfilling musical journey.                        </p>
                        <div class="singleline">
                            <div class="stars">
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                                <i class="fas fa-star golden-star"></i>
                            </div>
                            <p class="text-white">4.9 out of 5.0 from 3796 ratings</p>

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
                    <div class="col-lg-6 col-md-6 col-12  textPara-col kathakp" >
                        <img src="<?php echo  base_url(); ?>public/images/instrument/Veena.jpeg" class="rightimg" alt="Yoga Class" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-5" >
    <div class="">
        <!-- pills -->
        <div class="typesOfDance-tab">
            <div class=" copage">
                <div class="">



                    <div class="row text-lg-start">
                    <div class="col-lg-12 col-md-12 col-12 coh">
                        <h3 class="" style="text-align:center">Courses Offering
                        <span class="line linessf"></span> </h3>
                    </div>

  

                        <div class="col-lg-3 col-md-4 col-6 ">
                             <h5 class="" style="text-align: center;">Guitar </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Guitar" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo  base_url(); ?>public/images/instrument/g-1.svg" alt="">
                                </a>
                            </div>

                    
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">Flute</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Flute" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/fluteImg1.svg" alt=""
                                       >
                                </a>
                            </div>

                           
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">Tabla</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Tabla" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/tablaImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                         
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">
                             Sitar </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Sitar" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/sitarImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                       
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">Veena</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Veena" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/VeenaImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                           
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">Piano</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Piano" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/pianoImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                       
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">
                             Violin</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Violin" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/vio.jpeg" alt=""
                                       >
                                </a>
                            </div>
                      
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">
                             Keyboard</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Keyboard" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/keyboardImg1.svg" alt=""
                                       >
                                </a>
                            </div>
                         
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="" style="text-align: center;">
                             Harmonium</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Harmonium" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/instrument/Harmonium.jpeg" alt=""
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

<section class="btnSection btnSectionI MusicSec instumentpage">
    <div class="container dancepagec">
        <div class="typesOfYoga-tab">
            <!-- <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="col-lg-1 col-md-1 hidefi">
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Guitar-tab" href="<?=base_url(); ?>Guitar" data-url="<?=base_url(); ?>Guitar" role="tab" aria-controls="pills-Guitar" aria-selected="true">Guitar</a>
                </li>

                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Flute-tab" href="<?=base_url(); ?>Flute" data-url="<?=base_url(); ?>Guitar" role="tab" aria-controls="pills-Guitar" aria-selected="false">Flute</a>
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Tabla-tab" href="<?=base_url(); ?>Tabla" data-url="<?=base_url(); ?>Tabla" role="tab" aria-controls="pills-Tabla" aria-selected="false">Tabla</a>
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Sitar-tab" href="<?=base_url(); ?>Sitar" data-url="<?=base_url(); ?>Sitar" role="tab" aria-controls="pills-Sitar" aria-selected="false">Sitar</a>
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link active" id="pills-Veena-tab" href="<?=base_url(); ?>Veena" data-url="<?=base_url(); ?>Veena" role="tab" aria-controls="pills-Veena" aria-selected="false">Veena</a>
                </li>
                <li class="col-lg-1 col-md-1 hidefi">
                </li>
                <li class="col-lg-1 col-md-1 hidefi">
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Piano-tab" href="<?=base_url(); ?>Piano" data-url="<?=base_url(); ?>Piano" role="tab" aria-controls="pills-Piano" aria-selected="false">Piano</a>
                </li>
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Violin-tab" href="<?=base_url(); ?>Violin" data-url="<?=base_url(); ?>Violin" role="tab" aria-controls="pills-Violin" aria-selected="false">Violin</a>
                </li>
               
                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Keyboard-tab" href="<?=base_url(); ?>Keyboard" data-url="<?=base_url(); ?>Keyboard" role="tab" aria-controls="pills-Keyboard" aria-selected="false">Keyboard</a>
                </li>

                <li class="col-lg-2 col-md-2 col-6 nav-item" role="presentation">
                    <a class="nav-link" id="pills-Harmonium-tab" href="<?=base_url(); ?>Harmonium" data-url="<?=base_url(); ?>Harmonium" role="tab" aria-controls="pills-Harmonium" aria-selected="false">Harmonium</a>
                </li>

                <li class="col-lg-1 col-md-1 hidefi">
                </li>
            </ul> -->

            <div class="tab-content" id="pills-tabContent">
                <!-- Guitar   -->
                <div class="tab-pane fade show active" id="pills-Guitar" role="tabpanel" aria-labelledby="pills-Guitar-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/veenaImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Veena</h3>
                            <p class="">
                            Immerse yourself in the serene melodies of the veena with our online veena course. Designed for beginners and intermediate players, this comprehensive program will help you master this ancient Indian string instrument. Over 12 months, you’ll learn veena techniques, ﬁngering, and the intricacies of Indian classical music. Our experienced instructors will provide engaging video lessons, personalized feedback, and practice materials to enhance your progress. Whether you seek to explore the spiritual realm of Carnatic music or captivate audiences with your veena skills, our online course offers convenience and ﬂexibility.
                                Enroll now and embark on a melodic journey with the enchanting veena!
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
                    <section class="learningBtn learningBtnI yellowb">
                        <div class="container">
                            <ul class="list-inline row ">
                                <li class="col-lg-1 ">

                                </li>

                                <li class="list-inline-item col-lg-2 col-md-3 col-6">
                                    <a href="#learninstruments" class="btn btndemo step active " role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-Month1-tab" data-bs-toggle="pill" data-bs-target="#pills-Month1" type="button" role="tab" aria-controls="pills-Month1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month2-tab" data-bs-toggle="pill" data-bs-target="#pills-Month2" type="button" role="tab" aria-controls="pills-Month2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month3-tab" data-bs-toggle="pill" data-bs-target="#pills-Month3" type="button" role="tab" aria-controls="pills-Month3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month4-tab" data-bs-toggle="pill" data-bs-target="#pills-Month4" type="button" role="tab" aria-controls="pills-Month4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month5-tab" data-bs-toggle="pill" data-bs-target="#pills-Month5" type="button" role="tab" aria-controls="pills-Month5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month6-tab" data-bs-toggle="pill" data-bs-target="#pills-Month6" type="button" role="tab" aria-controls="pills-Month6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month7-tab" data-bs-toggle="pill" data-bs-target="#pills-Month7" type="button" role="tab" aria-controls="pills-Month7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month8-tab" data-bs-toggle="pill" data-bs-target="#pills-Month8" type="button" role="tab" aria-controls="pills-Month8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month9-tab" data-bs-toggle="pill" data-bs-target="#pills-Month9" type="button" role="tab" aria-controls="pills-Month9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month10-tab" data-bs-toggle="pill" data-bs-target="#pills-Month10" type="button" role="tab" aria-controls="pills-Month10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month11-tab" data-bs-toggle="pill" data-bs-target="#pills-Month11" type="button" role="tab" aria-controls="pills-Month11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Month12-tab" data-bs-toggle="pill" data-bs-target="#pills-Month12" type="button" role="tab" aria-controls="pills-Month12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
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
                                                                <h5 class="MonthHeading">Month 1: Introduction to Guitar</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Getting acquainted with the guitar: parts, tuning, and proper posture.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic strumming patterns and finger exercises to develop coordination and dexterity.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to open chords (e.g., C, G, D) and practicing chord transitions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 2 -->
                                                        <div class="tab-pane fade" id="pills-Month2" role="tabpanel" aria-labelledby="pills-Month2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Essential Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Further exploration of strumming techniques: palm muting, alternate picking, and dynamics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to power chords and barre chords. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning basic fingerpicking patterns and exercises.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 3 -->
                                                        <div class="tab-pane fade" id="pills-Month3" role="tabpanel" aria-labelledby="pills-Month3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Music Theory Foundations</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the major and minor scales and their application on the guitar.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introducing music notation, tablature, and rhythm reading. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying scales to create melodies and improvisation. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 4 -->
                                                        <div class="tab-pane fade" id="pills-Month4" role="tabpanel" aria-labelledby="pills-Month4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Expanding Chord Knowledge</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning more advanced chord shapes and voicings.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring chord progressions in different musical genres. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to extended chords and their usage.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 5 -->
                                                        <div class="tab-pane fade" id="pills-Month5" role="tabpanel" aria-labelledby="pills-Month5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Rhythm and Groove</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on developing a solid sense of rhythm and groove.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to syncopation, strumming patterns, and rhythm variations. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Playing along with backing tracks and practicing in different time signatures.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 6 -->
                                                        <div class="tab-pane fade" id="pills-Month6" role="tabpanel" aria-labelledby="pills-Month6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 6: Lead Guitar Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to guitar scales (e.g., pentatonic, blues, and major) for lead playing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Techniques for bending, vibrato, hammer-ons, and pull-offs. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing soloing over chord progressions and developing improvisational skills.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 7 -->
                                                        <div class="tab-pane fade" id="pills-Month7" role="tabpanel" aria-labelledby="pills-Month7-tab">

                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 7: Music Theory Deep Dive</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring advanced music theory concepts: modes, chord construction, and harmonic analysis.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Analyzing songs and understanding their chord progressions and harmonic structure.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying theory knowledge to songwriting and composition.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Week 8 -->
                                                        <div class="tab-pane fade" id="pills-Month8" role="tabpanel" aria-labelledby="pills-Month8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Fingerstyle and Acoustic Guitar</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to fingerstyle playing and fingerpicking patterns.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different fingerstyle techniques and approaches. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning popular acoustic guitar songs and arrangements.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 9 -->
                                                        <div class="tab-pane fade" id="pills-Month9" role="tabpanel" aria-labelledby="pills-Month9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Advanced Techniques and Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Dive into advanced guitar techniques, such as sweep picking, tapping, and string bending.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to different guitar styles: blues, jazz, rock, funk, or country. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Studying influential guitarists and learning signature licks.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 10 -->
                                                        <div class="tab-pane fade" id="pills-Month10" role="tabpanel" aria-labelledby="pills-Month10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on refining techniques, timing, and dynamics for live performances.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing stage presence and overcoming performance anxiety.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing and rehearsing a setlist for a virtual or live performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-Month11" role="tabpanel" aria-labelledby="pills-Month11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Studio Recording and Effects</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to recording techniques for guitarists.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding effects pedals and their usage. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring guitar tone, amplification, and sound engineering.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-Month12" role="tabpanel" aria-labelledby="pills-Month12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12: Mastering Your Guitar Journey</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reflect on progress and set personal musical goals.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Advanced improvisation techniques and developing a unique playing style. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Final project: Create a solo arrangement, compose an original piece, or record a performance.</li>
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

                <!-- Flute  -->
                <div class="tab-pane fade" id="pills-Flute" role="tabpanel" aria-labelledby="pills-Flute-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/fluteImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Flute</h3>

                            <p class="">
                                Discover the enchanting world of ﬂute playing with our online ﬂute course. Designed for beginners and intermediate players, this comprehensive program will guide you through the fundamentals of ﬂute technique, note reading, and music theory. Over the course of 12 months, you’ll learn to produce beautiful melodies and explore a variety of musical genres. Our expert instructors will provide step-by-step video lessons, personalized feedback, and practice materials to enhance your progress. Whether you’re passionate about classical, jazz, or world music, our online ﬂute course offers convenience and ﬂexibility, empowering you to become a skilled ﬂutist from the comfort of your home. Enroll now and let the music take ﬂight!
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
                                    <a href="#learninstruments1" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments1" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments1">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>


                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec tmm minstument" id="mod-instruments1">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-FluteMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth1" type="button" role="tab" aria-controls="pills-FluteMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth2" type="button" role="tab" aria-controls="pills-FluteMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth3" type="button" role="tab" aria-controls="pills-FluteMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth4" type="button" role="tab" aria-controls="pills-FluteMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth5" type="button" role="tab" aria-controls="pills-FluteMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth6" type="button" role="tab" aria-controls="pills-FluteMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-StressReductionMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth7" type="button" role="tab" aria-controls="pills-SFluteonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth8" type="button" role="tab" aria-controls="pills-FluteMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth9" type="button" role="tab" aria-controls="pills-FluteMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth10" type="button" role="tab" aria-controls="pills-FluteMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth11" type="button" role="tab" aria-controls="pills-FluteMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month 12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-FluteMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-FluteMonth12" type="button" role="tab" aria-controls="pills-FluteMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>
                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-FluteMonth1" role="tabpanel" aria-labelledby="pills-FluteMonth1-tab">
                                                            <div class="content">
                                                                <p> Week- 1 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to the Flute</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the different parts of the ﬂute and proper assembly.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic ﬂute technique: holding the ﬂute, hand position, and posture.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Producing the ﬁrst sounds and learning to control breath and embouchure.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth2" role="tabpanel" aria-labelledby="pills-FluteMonth2-tab">
                                                            <div class="content">
                                                                <p> Week- 2 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Note Reading and Basic Music Theory</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music notation and reading ﬂute sheet music.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Learning the names of the notes and their corresponding ﬁngerings. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic music theory concepts, including rhythm, time signatures, and dynamics.</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth3" role="tabpanel" aria-labelledby="pills-FluteMonth3-tab">
                                                            <div class="content">
                                                                <p> Week- 3 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Developing Technique and Tone</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Further developing embouchure control and breath support.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exercises for improving ﬁnger dexterity and ﬂuidity. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focusing on achieving a clear and resonant tone on the ﬂute.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth4" role="tabpanel" aria-labelledby="pills-FluteMonth4-tab">
                                                            <div class="content">
                                                                <p> Week- 4 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Scales and Finger Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning major and minor scales and their arpeggios.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different scale patterns and practicing scale runs. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Finger exercises to improve coordination and agility.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth5" role="tabpanel" aria-labelledby="pills-FluteMonth5-tab">
                                                            <div class="content">
                                                                <p> Week- 5 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Articulation Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different articulation techniques, including tonguing and slurring.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing articulation exercises and applying them to simple melodies. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing control and clarity in articulating various musical passages.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth6" role="tabpanel" aria-labelledby="pills-FluteMonth6-tab">
                                                            <div class="content">
                                                                <p> Week- 6 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Expressive Playing and Phrasing</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring dynamics, musical expression, and phrasing.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing a sense of musicality and interpretation in playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying expressive techniques to musical pieces and exercises.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth7" role="tabpanel" aria-labelledby="pills-FluteMonth7-tab">
                                                            <div class="content">
                                                                <p> Week- 7 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 7: Intonation and Tuning</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding ﬂute intonation and tuning.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing the ability to play in tune with other instruments or accompaniment. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing exercises and techniques to improve intonation.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth8" role="tabpanel" aria-labelledby="pills-FluteMonth8-tab">
                                                            <div class="content">
                                                                <p> Week- 8 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8: Extended Techniques and Ornamentation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to extended techniques such as ﬂutter tonguing and harmonics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring ornamentation techniques, such as trills and grace notes.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating extended techniques and ornamentation into musical pieces.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth9" role="tabpanel" aria-labelledby="pills-FluteMonth9-tab">
                                                            <div class="content">
                                                                <p> Week- 9 syllabus will cover below points:</p>
                                                            </div>

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Repertoire Expansion - Classical</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring classical ﬂute repertoire, including etudes and solo compositions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning and studying selected classical ﬂute pieces. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focus on interpretation, phrasing, and musical expression in classical music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth10" role="tabpanel" aria-labelledby="pills-FluteMonth10-tab">
                                                            <div class="content">
                                                                <p> Week- 10 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Repertoire Expansion - World Music</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring ﬂute music from different cultures and world music genres.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning traditional melodies and ornamentation styles from various regions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Appreciating the diversity of ﬂute music across different cultures.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth11" role="tabpanel" aria-labelledby="pills-FluteMonth11-tab">
                                                            <div class="content">
                                                                <p> Week- 11 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Ensemble Playing and Collaborations</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to playing in ensemble settings. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing ﬂute duets, chamber music, or collaborating with other musicians.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing skills in listening, blending, and synchronizing with other instruments.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-FluteMonth12" role="tabpanel" aria-labelledby="pills-FluteMonth12-tab">
                                                            <div class="content">
                                                                <p> Week- 12 syllabus will cover below points:</p>
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12: Performance Preparation and Reﬂection</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a ﬁnal performance or recording.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, expression, and stage presence. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course and setting future goals.</li>
                                                                </ul>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class=" row  mt-3 Notediv">
                                                            <p class="Notepara">
                                                                <strong>Note : </strong>
                                                                The syllabus can be adjusted based on the individual's progress and interests. Regular
                                                                practice, seeking feedback, and exploring different musical genres are essential for a well-rounded flute education.                                                            </p>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    </section>
                </div>


                <!-- Tabla -->
                <div class="tab-pane fade show" id="pills-Tabla" role="tabpanel" aria-labelledby="pills-Tabla-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/tablaImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Tabla</h3>
                            <p class="">
                                Embark on a rhythmic journey with our online tabla course. Perfect for beginners and intermediate players, this comprehensive program delves into the art of playing the tabla, a versatile Indian percussion instrument. Over 12 months, you’ll master the intricacies of tabla strokes, bols (syllables), and the rhythmic patterns of Indian classical music. Our experienced instructors will provide engaging video lessons, personalized feedback, and practice materials to enhance your skills. Whether you aspire to perform solo or accompany other musicians, our online tabla course offers convenience and ﬂexibility, allowing you to learn and excel at your own pace. Join us today and explore the captivating world of tabla rhythms!
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
                                    <a href="#learninstruments2" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments2" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments2">
                    <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>

                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="modulesec tmm minstument" id="mod-instruments2">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-TablaMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth1" type="button" role="tab" aria-controls="pills-TablaMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth2" type="button" role="tab" aria-controls="pills-TablaMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth3" type="button" role="tab" aria-controls="pills-TablaMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth4" type="button" role="tab" aria-controls="pills-TablaMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth5" type="button" role="tab" aria-controls="pills-TablaMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth6" type="button" role="tab" aria-controls="pills-TablaMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth7" type="button" role="tab" aria-controls="pills-TablaMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth8" type="button" role="tab" aria-controls="pills-TablaMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth9" type="button" role="tab" aria-controls="pills-TablaMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth10" type="button" role="tab" aria-controls="pills-TablaMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth11" type="button" role="tab" aria-controls="pills-TablaMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-TablaMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-TablaMonth12" type="button" role="tab" aria-controls="pills-TablaMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-TablaMonth1" role="tabpanel" aria-labelledby="pills-TablaMonth1-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to Tabla</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the tabla instrument, its history, and signiﬁcance in Indian classical music.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to tabla parts, hand positions, and basic strokes (bols).</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic rhythmic patterns and counting techniques (tala) in Indian classical music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth2" role="tabpanel" aria-labelledby="pills-TablaMonth2-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 2: Tabla Technique and Hand Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing proper hand technique and ﬁnger control.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing different stroke combinations and variations. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Building hand strength and speed through speciﬁc exercises.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth3" role="tabpanel" aria-labelledby="pills-TablaMonth3-tab">


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Tabla Bols and Basic Tala Patterns</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Expanding tabla vocabulary with additional bols and syllables.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning basic tala patterns, such as Teental and Dadra. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing bols in different rhythmic cycles (avartan) and subdivisions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth4" role="tabpanel" aria-labelledby="pills-TablaMonth4-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Theka and Accompaniment</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the concept of theka, the basic rhythmic pattern for a particular tala.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning popular thekas for different talas and their variations. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Accompanying instrumental or vocal music using the learned thekas.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth5" role="tabpanel" aria-labelledby="pills-TablaMonth5-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5: Tabla and Vocal Duet</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the interplay between tabla and vocal music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to accompany vocalists with appropriate bols and rhythmic patterns.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing coordination and communication skills while accompanying singers.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth6" role="tabpanel" aria-labelledby="pills-TablaMonth6-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Tabla Solo Compositions - Kaidas and Relas</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to kaidas and relas, which are composed tabla solo compositions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning different kaidas and relas in various talas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing variations and improvisations within the framework of the compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth7" role="tabpanel" aria-labelledby="pills-TablaMonth7-tab">


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 7: Tabla Solo Compositions - Gat, Paran, and Tukra</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring additional solo compositions, such as gats, parans, and tukras.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning their structures, variations, and development. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing clarity, precision, and rhythmic creativity while playing solo compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth8" role="tabpanel" aria-labelledby="pills-TablaMonth8-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Tabla and Kathak Collaboration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the rhythmic relationship between tabla and Kathak dance.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to accompany Kathak dancers with appropriate bols and rhythmic patterns. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the synchronization of footwork and hand movements with tabla strokes.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth9" role="tabpanel" aria-labelledby="pills-TablaMonth9-tab">



                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Tabla and Instrumental Collaboration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Collaborating with instrumentalists, such as sitar, sarod, or ﬂute players.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the role of tabla in providing rhythm and support to instrumental music. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing the ability to respond to melodic improvisations and intricate instrumental patterns.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth10" role="tabpanel" aria-labelledby="pills-TablaMonth10-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 10: Tabla Repertoire - Qawwali and Ghazal</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring tabla accompaniment in Qawwali and Ghazal genres.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common rhythmic patterns and compositions used in these styles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing an understanding of the speciﬁc requirements and nuances of accompanying Qawwali and Ghazal performances.</li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth11" role="tabpanel" aria-labelledby="pills-TablaMonth11-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Tabla Solo Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a tabla solo performance or recital.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, speed, and control. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing improvisational skills and composing original tabla compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-TablaMonth12" role="tabpanel" aria-labelledby="pills-TablaMonth12-tab">
                                                            <div class="content">
                                                                s
                                                                <!-- <p> Week- 12 syllabus will cover below points:</p> -->
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in tabla playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Sitar -->
                <div class="tab-pane fade show" id="pills-Sitar" role="tabpanel" aria-labelledby="pills-Sitar-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/sitarImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Sitar</h3>
                            <p class="">
                                Embark on a soul-stirring musical journey with our online sitar course. Whether you’re a beginner or have some experience, our comprehensive program will guide you through the intricacies of this iconic Indian string instrument. Over 12 months, you’ll learn sitar techniques, melodic improvisation, and the rich traditions of Indian classical music. With expert instructors and interactive video lessons, you’ll receive personalized guidance and feedback to enhance your skills. From mesmerizing ragas to captivating performances, our online sitar course offers convenience and ﬂexibility for you to delve into the enchanting world of sitar music.
                                Unleash your inner musician and join us today!
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
                                    <a href="#learninstruments3" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments3" class="btn btndemo step" role="button">
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
                    <section class="learningsec yellowb" id="learninstruments3">
                    <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments3">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-SitarMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth1" type="button" role="tab" aria-controls="pills-SitarMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth2" type="button" role="tab" aria-controls="pills-SitarMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth3" type="button" role="tab" aria-controls="pills-SitarMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth4" type="button" role="tab" aria-controls="pills-SitarMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth5" type="button" role="tab" aria-controls="pills-SitarMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth6" type="button" role="tab" aria-controls="pills-SitarMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth7" type="button" role="tab" aria-controls="pills-SitarMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month  8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth8" type="button" role="tab" aria-controls="pills-SitarMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth9" type="button" role="tab" aria-controls="pills-SitarMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth10" type="button" role="tab" aria-controls="pills-SitarMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth11" type="button" role="tab" aria-controls="pills-SitarMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-SitarMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-SitarMonth12" type="button" role="tab" aria-controls="pills-SitarMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-SitarMonth1" role="tabpanel" aria-labelledby="pills-SitarMonth1-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to the Sitar</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the sitar instrument, its history, and cultural signiﬁcance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to the different parts of the sitar and their functions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Basic sitar playing posture and hand positions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth2" role="tabpanel" aria-labelledby="pills-SitarMonth2-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 2: Right Hand Technique</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing proper right-hand technique (picking hand).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play the basic strokes (meend, da, ra, ta) and their variations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing exercises to improve ﬁnger dexterity and coordination.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth3" role="tabpanel" aria-labelledby="pills-SitarMonth3-tab">


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 3: Left Hand Technique</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing proper left-hand technique (fretting hand).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play different types of slides (meend) and ornamentations (gamak). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing fretting exercises for accuracy and speed.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth4" role="tabpanel" aria-labelledby="pills-SitarMonth4-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 4: Sitar Scales and Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different sitar scales (ragas) and their structures.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales and melodic patterns (alankars) for ﬁnger control and dexterity. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the unique tuning and playing techniques speciﬁc to the sitar.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth5" role="tabpanel" aria-labelledby="pills-SitarMonth5-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Sitar Tala and Rhythm</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the concept of tala (rhythmic cycles) in Indian classical music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common talas such as Teental and Ektaal. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing rhythmic patterns (tihais, kaydas) and developing sense of laya (tempo).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth6" role="tabpanel" aria-labelledby="pills-SitarMonth6-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Sitar Ragas and Alap</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to sitar ragas (melodic frameworks) and their characteristics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play the alap, the slow and melodic exposition of a raga. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Developing the ability to express emotions and create melodic phrases.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth7" role="tabpanel" aria-labelledby="pills-SitarMonth7-tab">


                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7: Sitar Gat and Bandish</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to play gat, the composed and rhythmic section of a raga.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the structure and variations of gat compositions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing bandish, which are vocal compositions adapted for the sitar.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth8" role="tabpanel" aria-labelledby="pills-SitarMonth8-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8: Sitar and Tabla Collaboration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the interplay between sitar and tabla.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to accompany tabla players and understanding rhythmic nuances. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing the ability to respond to tabla compositions and improvisations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!--  Month 9 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth9" role="tabpanel" aria-labelledby="pills-SitarMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Sitar Concert Style and Performance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the elements of a sitar concert and its structure.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing stage presence and performance etiquette. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing improvisational techniques and developing personal style.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth10" role="tabpanel" aria-labelledby="pills-SitarMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Sitar Repertoire - Classical Compositions</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring traditional sitar compositions (gats, jor, jhala).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play compositions by renowned sitar maestros.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing phrasing, ornamentation, and dynamics in classical compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth11" role="tabpanel" aria-labelledby="pills-SitarMonth11-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Sitar Fusion and Collaborations</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring sitar fusion with other musical genres.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Collaborating with musicians from different musical backgrounds.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Developing the ability to adapt and blend sitar in various musical contexts.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-SitarMonth12" role="tabpanel" aria-labelledby="pills-SitarMonth12-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in sitar playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Veena -->
                <div class="tab-pane fade show" id="pills-Veena" role="tabpanel" aria-labelledby="pills-Veena-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/VeenaImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Veena</h3>
                            <p class="">
                                Immerse yourself in the serene melodies of the veena with our online veena course. Designed for beginners and intermediate players, this comprehensive program will help you master this ancient Indian string instrument. Over 12 months, you’ll learn veena techniques, ﬁngering, and the intricacies of Indian classical music. Our experienced instructors will provide engaging video lessons, personalized feedback, and practice materials to enhance your progress. Whether you seek to explore the spiritual realm of Carnatic music or captivate audiences with your veena skills, our online course offers convenience and ﬂexibility.
                                Enroll now and embark on a melodic journey with the enchanting veena!
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
                                    <a href="#learninstruments4" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments4" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments4">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments4">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-VeenaMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth1" type="button" role="tab" aria-controls="pills-VeenaMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth2" type="button" role="tab" aria-controls="pills-VeenaMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth3" type="button" role="tab" aria-controls="pills-VeenaMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth4" type="button" role="tab" aria-controls="pills-VeenaMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth5" type="button" role="tab" aria-controls="pills-VeenaMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!--Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth6" type="button" role="tab" aria-controls="pills-VeenaMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth7" type="button" role="tab" aria-controls="pills-VeenaMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth8" type="button" role="tab" aria-controls="pills-VeenaMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth9" type="button" role="tab" aria-controls="pills-VeeenaMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth10" type="button" role="tab" aria-controls="pills-VeeenaMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth11" type="button" role="tab" aria-controls="pills-VeeenaMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-VeenaMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-VeenaMonth12" type="button" role="tab" aria-controls="pills-VeeenaMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-VeenaMonth1" role="tabpanel" aria-labelledby="pills-VeenaMonth1-tab">

                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 1: Introduction to Veena</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the veena instrument, its history, and cultural signiﬁcance.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the different parts of the veena and their functions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic veena playing posture and hand positions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth2" role="tabpanel" aria-labelledby="pills-VeenaMonth2-tab">
                                                            <div class="content">
                                                                <!-- <p> Week- 2 syllabus will cover below points:</p> -->
                                                            </div>
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Right Hand Technique</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing proper right-hand technique (plucking hand).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to pluck the strings with different ﬁngers and variations.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing exercises to improve ﬁnger dexterity and control.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth3" role="tabpanel" aria-labelledby="pills-VeenaMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Left Hand Technique</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing proper left-hand technique (fretting hand).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to press and slide the strings for accurate pitch. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing fretting exercises for ﬁnger strength and agility. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth4" role="tabpanel" aria-labelledby="pills-VeenaMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Veena Scales and Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to different veena scales (ragas) and their structures.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales and melodic patterns (alankars) for ﬁnger control and coordination.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the unique tuning and playing techniques speciﬁc to the veena.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth5" role="tabpanel" aria-labelledby="pills-VeenaMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Veena Tala and Rhythm</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the concept of tala (rhythmic cycles) in Indian classical music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common talas such as Adi Tala and Rupaka Tala. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing rhythmic patterns (korvai, nadai) and developing a sense of laya (tempo).</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth6" role="tabpanel" aria-labelledby="pills-VeenaMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Veena Ragas and Alap</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to veena ragas (melodic frameworks) and their characteristics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play the alap, the slow and melodic exposition of a raga. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Developing the ability to express emotions and create melodic phrases.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth7" role="tabpanel" aria-labelledby="pills-VeenaMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 7: Veena Kritis and Compositions</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to play kritis, the structured compositions in Carnatic music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding the lyrics and meaning of the kritis. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing different compositions in different ragas. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth8" role="tabpanel" aria-labelledby="pills-VeenaMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8: Veena and Mridangam Collaboration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the interplay between veena and mridangam.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to accompany mridangam players and understanding rhythmic nuances.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing the ability to respond to mridangam compositions and improvisations.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth9" role="tabpanel" aria-labelledby="pills-VeenaMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9: Veena Concert Style and Performance Techniques</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the elements of a veena concert and its structure.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing stage presence and performance etiquette.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing improvisational techniques and developing personal style.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth10" role="tabpanel" aria-labelledby="pills-VeenaMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Veena Repertoire - Varnams and Javalis</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring traditional veena compositions like varnams and javalis.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play complex compositions with intricate melodic and rhythmic patterns..</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing expression, ornamentation, and dynamics in performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 11 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth11" role="tabpanel" aria-labelledby="pills-VeenaMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Veena Fusion and Collaborations</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring veena fusion with other musical genres.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Collaborating with musicians from different musical backgrounds.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Developing the ability to adapt and blend veena in various musical contexts.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Week 12 -->
                                                        <div class="tab-pane fade" id="pills-VeenaMonth12" role="tabpanel" aria-labelledby="pills-VeenaMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in veena playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- piano -->
                <div class="tab-pane fade show" id="pills-Piano" role="tabpanel" aria-labelledby="pills-Piano-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/pianoImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Piano</h3>
                            <p class="">
                                Unlock your musical potential with our online piano course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master the piano from the comfort of your own home. Over the course of 12 months, you’ll progress through step-by-step lessons covering piano technique, music theory, and repertoire. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you dream of playing classical masterpieces or popular tunes, our online piano course offers convenience, ﬂexibility, and expert guidance to help you become a conﬁdent pianist.
                                Enroll today and let the music ﬂow!
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
                                    <a href="#learninstruments5" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments5" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments5">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments5">
                        <div class="container">
                            
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-PianoMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth1" type="button" role="tab" aria-controls="pills-PianoMonth1" aria-selected="true">Week 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth2" type="button" role="tab" aria-controls="pills-PianoMonth2" aria-selected="false">Week 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth3" type="button" role="tab" aria-controls="pills-PianoMonth3" aria-selected="false">Week 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth4" type="button" role="tab" aria-controls="pills-PianoMonth4" aria-selected="false">Week 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth5" type="button" role="tab" aria-controls="pills-PianoMonth5" aria-selected="false">Week 5 </button>
                                            </li>
                                            <!-- Month 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-YogaforChronicMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth6" type="button" role="tab" aria-controls="pills-PianoMonth6" aria-selected="false">Week 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth7" type="button" role="tab" aria-controls="pills-PianoMonth7" aria-selected="false">Week 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth8" type="button" role="tab" aria-controls="pills-PianoMonth8" aria-selected="false">Week 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth9" type="button" role="tab" aria-controls="pills-PianoMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth10" type="button" role="tab" aria-controls="pills-PianoMonth10" aria-selected="false">Week 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth11" type="button" role="tab" aria-controls="pills-PianoMonth11" aria-selected="false">Week 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-PianoMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-PianoMonth12" type="button" role="tab" aria-controls="pills-PianoMonth12" aria-selected="false">Week 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-PianoMonth1" role="tabpanel" aria-labelledby="pills-PianoMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to the Piano</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the piano instrument, its layout, and functionality.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the keyboard, black and white keys, and hand positions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic technique exercises for ﬁnger strength and dexterity.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth2" role="tabpanel" aria-labelledby="pills-PianoMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Note Reading and Music Theory</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music notation and reading sheet music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning the names of the notes on the staff and corresponding piano keys. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic music theory concepts such as rhythm, time signatures, and scales.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth3" role="tabpanel" aria-labelledby="pills-PianoMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Finger Independence and Technique</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing ﬁnger independence and coordination through exercises.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales and arpeggios in major and minor keys. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring different articulation techniques like legato and staccato.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth4" role="tabpanel" aria-labelledby="pills-PianoMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Chords and Harmony</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to chords and chord progressions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common chord voicings and inversions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing playing chords in different rhythms and patterns.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth5" role="tabpanel" aria-labelledby="pills-PianoMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Playing Melodies and Accompaniment</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to play melodies with the right hand while maintaining accompaniment with the left hand.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding how to balance melody and accompaniment. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing different styles and genres of music with varied accompaniment patterns.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth6" role="tabpanel" aria-labelledby="pillsPianoMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 6: Music Theory and Analysis</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Further exploration of music theory concepts such as intervals, key signatures, and chord functions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Analyzing musical pieces and understanding their structure. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying music theory knowledge to improve interpretation and musical expression.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth7" role="tabpanel" aria-labelledby="pills-PianoMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 7: Technique and Artistry Development</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focusing on developing technique and control through exercises and etudes.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring expressive playing techniques like dynamics, phrasing, and pedal usage. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating musicality and emotion into performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth8" role="tabpanel" aria-labelledby="pills-PianoMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 8: Classical Repertoire</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to classical piano repertoire from different periods (Baroque, Classical, Romantic).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning selected pieces by renowned composers. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing interpretation, stylistic elements, and technical challenges in classical music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth9" role="tabpanel" aria-labelledby="pills-PianoMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9: Popular and Contemporary Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring popular and contemporary piano styles (pop, jazz, blues).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning chord progressions and improvisation techniques. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing playing by ear and accompanying popular songs.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth10" role="tabpanel" aria-labelledby="pills-PianoMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Music Composition and Arrangement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music composition and arranging for the piano.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning basic composition techniques and songwriting principles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Arranging and reinterpreting existing music for the piano.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth11" role="tabpanel" aria-labelledby="pills-PianoMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 11: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a ﬁnal performance or recital.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, expression, and stage presence.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Working on selected repertoire and preparing for a polished performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-PianoMonth12" role="tabpanel" aria-labelledby="pills-PianoMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in piano playing.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Violin -->
                <div class="tab-pane fade show" id="pills-Violin" role="tabpanel" aria-labelledby="pills-Violin-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/VeenaImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Violin</h3>

                            <p class="">
                                Unleash the beauty of the violin with our online violin course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this enchanting string instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering violin technique, music theory, and repertoire. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you aspire to play classical masterpieces or explore various genres, our online violin course offers convenience, ﬂexibility, and expert guidance to help you become a skilled violinist.
                                Enroll today and let the melodies soar!
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
                                    <a href="#learninstruments6" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments6" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments6">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments6">
                        <div class="container">
                           
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-ViolinMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth1" type="button" role="tab" aria-controls="pills-ViolinMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth2" type="button" role="tab" aria-controls="pills-ViolinMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth3" type="button" role="tab" aria-controls="pills-ViolinMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth4" type="button" role="tab" aria-controls="pills-ViolinMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth5" type="button" role="tab" aria-controls="pills-ViolinMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth6" type="button" role="tab" aria-controls="pills-ViolinMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth7" type="button" role="tab" aria-controls="pills-ViolinMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth8" type="button" role="tab" aria-controls="pills-ViolinMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth9" type="button" role="tab" aria-controls="pills-ViolinMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth10" type="button" role="tab" aria-controls="pills-ViolinMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth11" type="button" role="tab" aria-controls="pills-ViolinMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-ViolinMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-ViolinMonth12" type="button" role="tab" aria-controls="pills-ViolinMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-ViolinMonth1" role="tabpanel" aria-labelledby="pills-ViolinMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 1: Introduction to the Violin</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the violin instrument, its parts, and tuning.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the bow and bowing technique.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic hand positions and ﬁnger placements on the ﬁngerboard</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth2" role="tabpanel" aria-labelledby="pills-ViolinMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Bowing Technique and Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing proper bowing technique, including bow hold and bowing motion.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing bowing exercises to improve control, tone, and dynamics.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different bowing styles such as legato, staccato, and spiccato.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth3" role="tabpanel" aria-labelledby="pills-ViolinMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 3: Left Hand Technique and Finger Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing proper left-hand technique, including ﬁnger placement and intonation.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing ﬁnger exercises and scales to improve ﬁnger agility and coordination. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Introducing shifting and position changes on the ﬁngerboard. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth4" role="tabpanel" aria-labelledby="pills-ViolinMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Reading Sheet Music and Music Theory</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music notation and reading sheet music for the violin.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning the names of the notes on the staff and their corresponding positions on the violin. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic music theory concepts such as rhythm, time signatures, and key signatures.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth5" role="tabpanel" aria-labelledby="pills-ViolinMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5: Bowing Articulation and Expression</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring different bowing articulations, such as legato, détaché, and spiccato.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                    Practicing expressive bowing techniques, dynamics, and phrasing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Applying articulation and expression to musical pieces.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth6" role="tabpanel" aria-labelledby="pillsViolinMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 6: Violin Scales and Finger Patterns</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning major and minor scales in different keys.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales in various ﬁnger patterns and positions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing familiarity with different scale patterns and intervals.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth7" role="tabpanel" aria-labelledby="pills-ViolinMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 7: Classical Violin Repertoire</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to classical violin repertoire from different periods (Baroque, Classical, Romantic).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning selected pieces by renowned composers. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing interpretation, musicality, and technical challenges in classical music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth8" role="tabpanel" aria-labelledby="pills-ViolinMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Vibrato and Ornamentation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to vibrato technique and exercises.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring ornamentation techniques such as trills, grace notes, and slides. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating vibrato and ornamentation into musical performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth9" role="tabpanel" aria-labelledby="pills-ViolinMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Chamber Music and Ensemble Playing</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Collaborating with other musicians in chamber music settings.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to play in ensemble settings and following a conductor or leader. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing skills in ensemble communication, intonation, and dynamics.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth10" role="tabpanel" aria-labelledby="pills-ViolinMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 10: Contemporary and Popular Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring contemporary and popular violin styles (jazz, folk, fusion).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning improvisation techniques and exploring different musical genres.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing playing by ear and incorporating improvisation into performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth11" role="tabpanel" aria-labelledby="pills-ViolinMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 11: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a ﬁnal performance or recital.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, expression, and stage presence.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Working on selected repertoire and preparing for a polished performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-ViolinMonth12" role="tabpanel" aria-labelledby="pills-ViolinMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in violin playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Drum -->
                <div class="tab-pane fade show" id="pills-Drum" role="tabpanel" aria-labelledby="pills-Drum-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/drumImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Drum</h3>
                            <p class="">
                                Experience the rhythm and power of drums with our online drum course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this dynamic percussion instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering drumming techniques, rudiments, and rhythmic patterns. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you dream of rocking out in a band or exploring different drumming styles, our online drum course offers convenience, ﬂexibility, and expert guidance to help you become a skilled drummer.
                                Enroll today and let the beats begin!
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
                                    <a href="#learninstruments7" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments7" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments7">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments7">
                        <div class="container">
                           
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-DrumMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth1" type="button" role="tab" aria-controls="pills-DrumMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth2" type="button" role="tab" aria-controls="pills-DrumMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth3" type="button" role="tab" aria-controls="pills-DrumMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth4" type="button" role="tab" aria-controls="pills-DrumMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth5" type="button" role="tab" aria-controls="pills-DrumMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth6" type="button" role="tab" aria-controls="pills-DrumMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth7" type="button" role="tab" aria-controls="pills-DrumMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth8" type="button" role="tab" aria-controls="pills-DrumMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth9" type="button" role="tab" aria-controls="pills-DrumMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth10" type="button" role="tab" aria-controls="pills-DrumMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth11" type="button" role="tab" aria-controls="pills-DrumMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-DrumMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-DrumMonth12" type="button" role="tab" aria-controls="pills-DrumMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-DrumMonth1" role="tabpanel" aria-labelledby="pills-DrumMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 1: Introduction to Drumming</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the drum set and its components.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to basic drumming techniques, including grip and posture.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning essential rudiments and drumming exercises for hand and foot coordination.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth2" role="tabpanel" aria-labelledby="pills-DrumMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Drum Set Setup and Tuning</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Proper drum set setup and arrangement.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Understanding drum tuning and achieving desired tones.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different drumhead options and their impact on sound.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth3" role="tabpanel" aria-labelledby="pills-DrumMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 3: Basic Grooves and Rhythms</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning foundational drum grooves, such as rock, pop, and funk.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing basic drum beats and ﬁlls to develop timing and control. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Applying rhythmic variations and dynamics to enhance musicality. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth4" role="tabpanel" aria-labelledby="pills-DrumMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Rudiments and Technique Development</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Advancing rudimental skills with more complex patterns.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Incorporating rudiments into drum beats and ﬁlls. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing speed, accuracy, and precision in drumming technique.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth5" role="tabpanel" aria-labelledby="pills-DrumMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5: Styles and Genres</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring various musical styles and genres, such as jazz, blues, Latin, and reggae.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning characteristic rhythms and techniques associated with each style. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Analyzing and playing drum parts from iconic songs within different genres.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth6" role="tabpanel" aria-labelledby="pills-DrumMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 6: Drum Notation and Chart Reading</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to drum notation and reading drum charts.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales in various ﬁnger patterns and positions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing sight-reading exercises and playing along with sheet music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth7" role="tabpanel" aria-labelledby="pills-DrumMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 7: Advanced Grooves and Fills</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning advanced drum grooves and ﬁlls in different styles.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing coordination between hands and feet for more intricate patterns. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Expanding vocabulary of drumming techniques and improvisational skills.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth8" role="tabpanel" aria-labelledby="pills-DrumMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Drum Soloing and Improvisation</h5>
                                                                    <ul class="icon-list-items">
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring soloing techniques and creating drum solos.
                                                                        </li>
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                            Studying various improvisation concepts, such as phrasing and dynamics. </li>
                                                                        <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying improvisational skills in different musical contexts.</li>
                                                                    </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth9" role="tabpanel" aria-labelledby="pills-DrumMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Song Analysis and Drumming Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Analyzing drum parts in songs from various genres and eras.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Studying inﬂuential drummers and their signature playing styles. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Replicating and adapting drum parts to ﬁt personal style and musical expression.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth10" role="tabpanel" aria-labelledby="pills-DrumMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 10: Drumming in a Band Setting</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Understanding the role of the drummer in a band.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing band dynamics, communication, and synchronization.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Collaborating with other musicians and learning to support the song.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth11" role="tabpanel" aria-labelledby="pills-DrumMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 11: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a ﬁnal performance or recording session.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, timing, and stage presence.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Rehearsing selected songs and developing a repertoire.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-DrumMonth12" role="tabpanel" aria-labelledby="pills-DrumMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in drumming. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Keyboard -->
                <div class="tab-pane fade show" id="pills-Keyboard" role="tabpanel" aria-labelledby="pills-Keyboard-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/keyboardImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Keyboard</h3>
                            <p class="">
                                Unlock the magic of the keyboard with our online keyboard course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this versatile instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering keyboard techniques, music theory, and popular repertoire. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you dream of playing your favorite songs, exploring different genres, or even composing your own music, our online keyboard course offers convenience, ﬂexibility, and expert guidance to help you become a skilled keyboardist.
                                Enroll today and let your musical journey begin! </p>
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
                                    <a href="#learninstruments8" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments8" class="btn btndemo step" role="button">
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

                    <section class="learningsec yellowb" id="learninstruments8">
                         <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="modulesec tmm minstument" id="mod-instruments8">
                        <div class="container">
                           
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Month 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-KeyboardMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth1" type="button" role="tab" aria-controls="pills-KeyboardMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Month 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth2" type="button" role="tab" aria-controls="pills-KeyboardMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Month 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth3" type="button" role="tab" aria-controls="pills-KeyboardMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Month 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth4" type="button" role="tab" aria-controls="pills-KeyboardMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Month 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth5" type="button" role="tab" aria-controls="pills-KeyboardMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth6" type="button" role="tab" aria-controls="pills-KeyboardMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Month 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth7" type="button" role="tab" aria-controls="pills-KeyboardMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Month 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth8" type="button" role="tab" aria-controls="pills-KeyboardMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Month 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth9" type="button" role="tab" aria-controls="pills-KeyboardMonth9" aria-selected="false">Month 9</button>
                                            </li>
                                            <!-- Month 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth10" type="button" role="tab" aria-controls="pills-KeyboardMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Month 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth11" type="button" role="tab" aria-controls="pills-KeyboardMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Month  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-KeyboardMonth12-tab" data-bs-toggle="pill" data-bs-target="#pills-KeyboardMonth12" type="button" role="tab" aria-controls="pills-KeyboardMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-KeyboardMonth1" role="tabpanel" aria-labelledby="pills-KeyboardMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to the Keyboard</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the keyboard instrument and its layout.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the black and white keys, hand positions, and posture.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic ﬁnger exercises to develop coordination and dexterity.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth2" role="tabpanel" aria-labelledby="pills-KeyboardMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 2: Note Reading and Music Theory</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music notation and reading sheet music.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning the names of the notes on the staff and their corresponding positions on the keyboard.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Basic music theory concepts such as rhythm, time signatures, and scales.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth3" role="tabpanel" aria-labelledby="pills-KeyboardMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 3: Technique and Finger Independence</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning foundational drum grooves, such as rock, pop, and funk.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing scales, arpeggios, and exercises for ﬁnger strength and control. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring different touch and articulation techniques. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth4" role="tabpanel" aria-labelledby="pills-KeyboardMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Chords and Harmony</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to chords and chord progressions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common chord voicings and inversions on the keyboard. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing playing chords in different rhythmic patterns and progressions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth5" role="tabpanel" aria-labelledby="pills-KeyboardMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 5: Playing Melodies and Accompaniment</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning to play melodies with the right hand while maintaining accompaniment with the left hand.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different accompaniment styles and pattern. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing coordination between both hands for balanced playing.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth6" role="tabpanel" aria-labelledby="pills-KeyboardMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Music Theory and Analysis</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Further exploration of music theory concepts such as intervals, key signatures, and chord functions.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Analyzing musical pieces and understanding their structure and harmony. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying music theory knowledge to improve interpretation and musical expressions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth7" role="tabpanel" aria-labelledby="pills-KeyboardMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 7: Technique and Artistry Development</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Focusing on developing technique and control through exercises and etudes.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring expressive playing techniques like dynamics, phrasing, and pedal usage (if applicable). </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Incorporating musicality and emotion into performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth8" role="tabpanel" aria-labelledby="pills-KeyboardMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Classical Repertoire</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to classical piano repertoire adapted for the keyboard.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning selected pieces by renowned composers. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Emphasizing interpretation, stylistic elements, and technical challenges in classical music.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth9" role="tabpanel" aria-labelledby="pills-KeyboardMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 9: Popular and Contemporary Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring popular and contemporary keyboard styles (pop, jazz, blues).
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning chord progressions, improvisation techniques, and playing by ear. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing playing along with popular songs and developing personal style.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth10" role="tabpanel" aria-labelledby="pills-KeyboardMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 10: Music Composition and Arrangement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music composition and arrangement for the keyboard.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning basic composition techniques and songwriting principles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Arranging and reinterpreting existing music for the keyboard.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth11" role="tabpanel" aria-labelledby="pills-KeyboardMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 11: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a ﬁnal performance or recital.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Reﬁning technique, expression, and stage presence.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Working on selected repertoire and preparing for a polished performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-KeyboardMonth12" role="tabpanel" aria-labelledby="pills-KeyboardMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in keyboard playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Exploring opportunities for continued learning, collaboration, and performance.</li>
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

                <!-- Harmonium -->
                <div class="tab-pane fade show" id="pills-Harmonium" role="tabpanel" aria-labelledby="pills-Harmonium-tab">
                    <div class="row pddyd">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="public/images/instrument/VeenaImg1.svg" class="danceimg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-left ptfi">
                            <h3 class="heading"> Harmonium</h3>
                            <p class="">
                                Discover the soulful melodies of the harmonium with our online harmonium course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this beloved Indian keyboard instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering harmonium techniques, notation reading, and Indian classical music. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you aspire to accompany devotional singing or explore the versatility of the harmonium, our online course offers convenience, ﬂexibility, and expert guidance to help you become a skilled harmonium player.
                                Enroll today and let the harmonium melodies resonate!</p>
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
                                    <a href="#learninstruments9" class="btn btndemo step active" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">What you will learn</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item  col-lg-2 col-md-2 col-6">
                                    <a href="#mod-instruments9" class="btn btndemo step" role="button">
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
                    <section class="learningsec yellowb" id="learninstruments9">
                        <div class="container-fluid instruContainer">
                            <div class="row pddyd">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="heading"> What you will learn</h3>
                                    <ul class="list-group">
                                        <h6 class="mt-2"><b>Step 1: Introduction to the Instrument</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Overview of the instrument, its history, and its role in different musical genres. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text"> Introduction to the parts and components of the instrument. </span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Explanation of how the instrument produces sound and basic maintenance tips.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 2: Instrument Technique and Basics</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Proper posture and positioning for optimal playing.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Technique exercises to develop finger dexterity, hand coordination, and control.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to basic playing techniques specific to the instrument.</span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 3: Music Theory Fundamentals</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to music notation, including reading sheet music or tablature.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding rhythm, notes, scales, and intervals.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Basic understanding of key signatures and time signatures. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 4: Repertoire and Song Study</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduction to a selection of beginner-level songs or pieces suitable for the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Breakdown of songs into sections for practice and learning.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Focus on playing songs with proper technique and expression. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 5: Music Theory Application</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Building on previous knowledge, expand understanding of music theory concepts.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Exploring chord progressions, harmonization, and basic improvisation.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Analysis of songs to understand their musical structure and composition. </span>
                                        </li>
                                        <h6 class="mt-2"> <b>Step 6: Performance Skills and Interpretation</b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Developing performance skills through regular practice and playing exercises.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Understanding dynamics, phrasing, articulation, and expression.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Techniques for stage presence and overcoming performance anxiety. </span>
                                        </li>
                                        <h6 class="mt-2"><b>Step 7: Advanced Techniques and Personalization </b></h6>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Introduce advanced playing techniques specific to the instrument.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Encourage exploration of different musical genres and styles.</span>
                                        </li>
                                        <li class=""><span class="list-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                                            <span class="list-text">Provide resources for further learning and self-study beyond the course. </span>
                                        </li>    
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="learnInstrumentImg" >
                                        <img src="public/images/instrument/c-2.svg" class="danceimg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="modulesec tmm minstument" id="mod-instruments9">
                        <div class="container">
                          
                            <div class="month-row">
                                <div class="row">
                                <div class="col-lg-12 col-12 text-center testimonialsdiv">
                                        <h3>Modules
                                        </h3>
                                        <span class="line"></span>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 miic">
                                        <img src="public/images/instrument/s-3.svg" class="danceimg mimg1">

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">


                                        <!-- trying new tab  -->
                                        <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <!-- Week 1 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link active monthtypes kathak" id="pills-HarmoniumMonth1-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth1" type="button" role="tab" aria-controls="pills-HarmoniumMonth1" aria-selected="true">Month 1</button>
                                            </li>
                                            <!-- Week 2 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth2-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth2" type="button" role="tab" aria-controls="pills-HarmoniumMonth2" aria-selected="false">Month 2</button>
                                            </li>
                                            <!-- Week 3 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth3-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth3" type="button" role="tab" aria-controls="pillsHarmoniumMonth3" aria-selected="false">Month 3</button>
                                            </li>
                                            <!-- Week 4 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth4-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth4" type="button" role="tab" aria-controls="pills-HarmoniumMonth4" aria-selected="false">Month 4 </button>
                                            </li>
                                            <!-- Week 5 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth5-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth5" type="button" role="tab" aria-controls="pills-HarmoniumMonth5" aria-selected="false">Month 5 </button>
                                            </li>
                                            <!-- Week 6 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth6-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth6" type="button" role="tab" aria-controls="pills-HarmoniumMonth6" aria-selected="false">Month 6 </button>
                                            </li>
                                            <!-- Week 7 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth7-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth7" type="button" role="tab" aria-controls="pills-HarmoniumMonth7" aria-selected="false">Month 7</button>
                                            </li>
                                            <!-- Week 8 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth8-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth8" type="button" role="tab" aria-controls="pills-HarmoniumMonth8" aria-selected="false">Month 8</button>
                                            </li>
                                            <!-- Week 9 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth9-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth9" type="button" role="tab" aria-controls="pills-HarmoniumMonth9" aria-selected="false">Week 9</button>
                                            </li>
                                            <!-- Week 10 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth10-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth10" type="button" role="tab" aria-controls="pills-HarmoniumMonth10" aria-selected="false">Month 10</button>
                                            </li>
                                            <!-- Week 11 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-HarmoniumMonth11-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth11" type="button" role="tab" aria-controls="pills-HarmoniumMonth11" aria-selected="false">Month 11</button>
                                            </li>
                                            <!-- Week  12 -->
                                            <li class="col-lg-3 col-md-3 col-6 nav-item1 nav-item" role="presentation">
                                                <button class="nav-link monthtypes kathak" id="pills-Harmonium12-tab" data-bs-toggle="pill" data-bs-target="#pills-HarmoniumMonth12" type="button" role="tab" aria-controls="pills-HarmoniumMonth12" aria-selected="false">Month 12</button>
                                            </li>
                                        </ul>
                                        <div class="contentSec">
                                            <div class="">
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Live Private class -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8.webp">
                                                    Practice video -2
                                                </div>
                                                <div class="content">
                                                    <img src="public/images/Dance/icons8-literature.webp">
                                                    Reading content/Quiz - 2
                                                </div>

                                                <div class="module-text">

                                                    <div class="tab-content" id="pills-tabContent">
                                                        <!-- Month 1 -->
                                                        <div class="tab-pane fade show active" id="pills-HarmoniumMonth1" role="tabpanel" aria-labelledby="pills-HarmoniumMonth1-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 1: Introduction to the Harmonium</h5>

                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Overview of the harmonium instrument and its components.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to the keyboard layout and hand positions.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Basic technique exercises for finger strength and coordination.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 2 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth2" role="tabpanel" aria-labelledby="pills-HarmoniumMonth2-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 2: Scales and Finger Exercises</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning major and minor scales on the harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing finger exercises and patterns to develop dexterity.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring different bellows techniques for sound production.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 3 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth3" role="tabpanel" aria-labelledby="pills-HarmoniumMonth3-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 3: Indian Classical Music Basics</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Introduction to Indian classical music concepts, such as ragas and talas.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning basic notes (swaras) and their variations in different ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing simple compositions and improvisation within ragas. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 4 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth4" role="tabpanel" aria-labelledby="pills-HarmoniumMonth4-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 4: Chords and Accompaniment</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to chords and chord progressions on the harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning common chord voicings and inversions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing playing chords while accompanying vocal or instrumental performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 5 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth5" role="tabpanel" aria-labelledby="pills-HarmoniumMonth5-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 5: Devotional and Bhajan Repertoire</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Learning popular devotional songs and bhajans on the harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Developing an understanding of devotional music styles and expressions. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Practicing playing bhajans with appropriate ornamentation and embellishments.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 6 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth6" role="tabpanel" aria-labelledby="pillsHarmoniumMonth6-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 6: Ghazal and Light Music Styles</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring ghazal and light music styles on the harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning popular melodies and compositions in these genres. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Practicing playing along with recordings and developing improvisational skills.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 7 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth7" role="tabpanel" aria-labelledby="pills-HarmoniumMonth7-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">
                                                                    Month 7: Music Theory and Notation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Introduction to music notation and reading sheet music for harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                    Understanding notation symbols, rhythmic patterns, and phrasing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing sight-reading and playing from notated compositions.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 8 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth8" role="tabpanel" aria-labelledby="pills-HarmoniumMonth8-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 8: Advanced Techniques and Ornamentation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Developing advanced techniques such as meend, gamak, and taan on the harmonium.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Exploring ornamentation techniques specific to Indian classical music. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Applying ornamentation and improvisation in performances.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 9 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth9" role="tabpanel" aria-labelledby="pills-HarmoniumMonth9-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 9: Raga Exploration</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Deepening knowledge of different ragas and their characteristics.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing playing alankars and compositions in specific ragas. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring the nuances and emotions associated with each raga.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 10 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth10" role="tabpanel" aria-labelledby="pills-HarmoniumMonth10-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading">Month 10: Fusion and Collaborative Music</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring fusion genres and collaborating with other musicians.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Learning to blend harmonium with other instruments and styles.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Practicing improvisation and adapting harmonium to diverse musical contexts.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 11 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth11" role="tabpanel" aria-labelledby="pills-HarmoniumMonth11-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 11: Performance Preparation</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Preparing for a final performance or recital.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Preparing for a final performance or recital.</li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>Working on selected repertoire and preparing for a polished performance.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Month 12 -->
                                                        <div class="tab-pane fade" id="pills-HarmoniumMonth12" role="tabpanel" aria-labelledby="pills-HarmoniumMonth12-tab">
                                                            <div class="month-text">
                                                                <h5 class="MonthHeading"> Month 12: Reﬂection and Advancement</h5>
                                                                <ul class="icon-list-items">
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Reﬂecting on the progress made throughout the course.
                                                                    </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i>
                                                                        Setting future goals for further advancement in harmonium playing. </li>
                                                                    <li class="icon-list-item"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Exploring opportunities for continued learning, collaboration, and performance.</li>
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




<section class="how_Started-section pb-3 MusicSec">
    <div class="container">
        <div class="row m-0">
        <div class="col-lg-12 col-md-12 col-12 imgs text-center p-5">
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

            <div class="col-6 col-md-6 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch1.png" alt="Icon 1" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">World Class top Trainers </h2>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch2.png" alt="Icon 2" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">1 on 1 Private live class with flexible timing </h2>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch3.png" alt="Icon 3" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">Comprehensive Curriculum </h2>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>public/images/ch4.png" alt="Icon 4" class="rounded-circle custom-img">
                </div>
                <div class="sc-heading">
                    <h2 class="heading__primary text-white custom-h2">Five Star Rated Platform</h2>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-4 col-xl-2 text-center mb-4 mb-lg-0">
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
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It's like having a personal yoga guide right in my living room.
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.webp" class="centered-image"  />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that's easy to understand. Feeling more zen already!</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It's become a daily ritual that I genuinely look forward to.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/7h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Rajiv ( Lucknow )</h5>
                                            <p class="reviewName">The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there's something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.webp" class="centered-image" />
                                        
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                    
                            <div class="item in">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors' encouragement keeps me motivated.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels. Whether you're a beginner or an experienced yogi, there's always room for growth. The instructors make sure everyone feels welcome. </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It's a simple yet powerful practice that has become a non-negotiable in my routine.</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/15h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Michael (Mike) ( USA)</h5>
                                        <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative</p>
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
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It's like having a personal yoga guide right in my living room.
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
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that\'s easy to understand. Feeling more zen already!</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It's become a daily ritual that I genuinely look forward to.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="item">
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 ">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/7h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Rajiv ( Lucknow )</h5>
                                                <p class="reviewName">The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there's something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.'</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                   
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.webp" class="centered-image" />
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.</p>
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
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors encouragement keeps me motivated.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels. Whether you're a beginner or an experienced yogi, there's always room for growth. The instructors make sure everyone feels welcome. </p>
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
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It's a simple yet powerful practice that has become a non-negotiable in my routine.</p>
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
                                    <img src="<?=base_url(); ?>public/images/happyfaces/15h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Michael (Mike) ( USA)</h5>
                                            <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative</p>
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
<section class="mb-5">
    <div class="">
        <!-- pills -->
        <div class="typesOfDance-tab">
            <div class=" copage opc">
                <div class="">
                    <div class="row text-lg-start">
                        <div class="col-lg-12 col-md-12 col-12 coh">
                            <h3  style="text-align:center"> Other Popular Courses
                                <span class="line linessf"></span>
                            </h3>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 style="text-align: center;">Everyday Yoga </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Western" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc1.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Western" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="" style="text-align: center;">Yoga for Chronic Desiese </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Semiclassical" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc2.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Semiclassical" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="" style="text-align: center;">Yoga for Kids</h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Bhangra" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>public/images/courseoffering/opc3.png" alt="">
                                </a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="<?= base_url(); ?>Bhangra" class="btn shop-now-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="" style="text-align: center;">Meditation </h5>
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


<?php include('Instrumentsfaq.php'); ?>
<?php include('bookdemocallb.php'); ?>

<?php include('footer.php'); ?>