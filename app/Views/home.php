<?php include('header.php'); ?>
<section class="s_header-section">
    <div class="container-fluid">

        <!-- image & button -->
        <div class="row">

            <div class="col-lg-12" style="padding-left:0px">
                <img src="public/images/image1.png" class="banner" width="100%" />
                <div class="row">


                </div>
                <!-- <div class="col-lg-8 ">
                    <button class="button-content" role="button">
                        <span class="button-content-wrapper">
                            <span class="button-text">Start Now </span>
                        </span>
                    </button>
                    </div> -->
                <!-- pc image      -->
                <!-- <div class="col-log-8 col-sm-12 sc_heading text-center">
                        <p class="title-pc">Your time @ Your Place .</p>
                        <img decoding="async" width="150" height="100" src="public/image/pc-img.svg"
                            class="attachment-full size-full wp-image-17039" alt loading="lazy" />
                    </div> -->

            </div>
            <!--  form  page         -->



        </div>

    </div>

</section>


<div class="howenatyamWorks mt-5">
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
                <img src="public/images/hew1.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">1</span> <span>Book a Demo</span></p>
                <p class="hwDesc">Book a Free Demo Class with a Tutor.</p>
            </div>
            <div class="col-md-4 col-4 howWorkBlock">
                <img src="public/images/hew2.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">2</span> <span>Join LIVE Demo Class</span></p>
                <p class="hwDesc">Attend the Demo class as scheduled.</p>
            </div>

            <div class="col-md-4 col-4 howWorkBlock howWorkBlock3">
                <img src="public/images/hew3.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">3</span> <span>Pay and Start</span></p>
                <p class="hwDesc">Use enatyam SecurePay to pay and start your Classes.</p>
            </div>
            <div class="col-md-4 col-4"></div>
            <div class="col-md-4 col-4"><a href="<?php echo base_url('demo'); ?>" class="btn btnstart textAlignCen">Get Started</a> </div>
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
    <div class="container">

        <!-- pills -->
        <div class="typesOfDance-tab">

            <ul class="row nav nav-pills" id="pills-tab" role="tablist">
                <!-- Kathak -->
                <li class="col-lg-1 nav-item hide">
                </li>
                <li class="col-lg-2 col-md-3  col-6 nav-item " role="presentation">
                    <button class="nav-link active" id="pills-Kathak-tab" data-bs-toggle="pill" data-bs-target="#pills-Kathak" type="button" role="tab" aria-controls="pills-Kathak" aria-selected="true">Kathak</button>
                </li>
                <!-- Bharatnatyam -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Bharatnatyam-tab" data-bs-toggle="pill" data-bs-target="#pills-Bharatnatyam" type="button" role="tab" aria-controls="pills-Bharatnatyam" aria-selected="false">Bharatnatyam</button>
                </li>
                <!-- Bollywood Dance -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-BollywoodDance-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodDance" type="button" role="tab" aria-controls="pills-BollywoodDance" aria-selected="false">Bollywood Dance</button>
                </li>
                <!-- Hindustani Vocal -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-HindustaniVocal-tab" data-bs-toggle="pill" data-bs-target="#pills-HindustaniVocal" type="button" role="tab" aria-controls="pills-HindustaniVocal" aria-selected="false">Hindustani Vocal</button>
                </li>
                <!-- Carnatic Vocal -->
                <li class="col-lg-2 col-md-3 col-6 av-item" role="presentation">
                    <button class="nav-link" id="pills-CarnaticVocal-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocal" type="button" role="tab" aria-controls="pills-CarnaticVocal" aria-selected="false">Carnatic Vocal</button>
                </li>
                <!-- Western Singing -->
                <li class="col-lg-1 nav-item hide">
                </li>
                <li class="col-lg-1 nav-item hide">
                </li>
                <!-- Western Singing -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-WesternSinging-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternSinging" type="button" role="tab" aria-controls="pills-WesternSinging" aria-selected="false">Western Singing</button>
                </li>
                <!-- Guitar -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Guitar-tab" data-bs-toggle="pill" data-bs-target="#pills-Guitar" type="button" role="tab" aria-controls="pills-Guitar" aria-selected="false">Guitar</button>
                </li>
                <!-- Keyboard -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Keyboard-tab" data-bs-toggle="pill" data-bs-target="#pills-Keyboard" type="button" role="tab" aria-controls="pills-Keyboard" aria-selected="false">Keyboard</button>
                </li>
                <!-- Yoga -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-Yoga-tab" data-bs-toggle="pill" data-bs-target="#pills-Yoga" type="button" role="tab" aria-controls="pills-Yoga" aria-selected="false">Yoga</button>
                </li>
                <!-- Coming Soon -->
                <li class="col-lg-2 col-md-3 col-6 nav-item" role="presentation">
                    <button class="nav-link" id="pills-ComingSoon-tab" data-bs-toggle="pill" data-bs-target="#pills-ComingSoon" type="button" role="tab" aria-controls="pills-ComingSoon" aria-selected="false">Coming Soon</button>
                </li>
                <li class="col-lg-1 nav-item hide">
                </li>

            </ul>

            <div class="tab-content mt-1" id="pills-tabContent">
                <!-- Kathak -->
                <div class="tab-pane fade show active" id="pills-Kathak" role="tabpanel" aria-labelledby="pills-Kathak-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/kathak.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Kathak</h3>
                            <p class="">


                                Looking for the best online Kathak classes with a comprehensive syllabus? Look no further than our platform! Our online Kathak classes are designed to provide you with an immersive learning experience that will help you master this beautiful dance form. Our syllabus covers everything from the basics of footwork and hand gestures to complex choreography and improvisation techniques. With our experienced instructors and state-of-the-art technology, you can learn Kathak from the comfort of your own home and at your own pace. Join us today and discover the joy of Kathak dancing!
                            </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bhratnatyam -->
                <div class="tab-pane fade show" id="pills-Bharatnatyam" role="tabpanel" aria-labelledby="pills-Bharatnatyam-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/bharatnatyam.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Bharatnatyam</h3>
                            <p>
                                Experience the grace and beauty of Bharatanatyam with our online dance classes! Our syllabus covers the fundamentals of this ancient Indian classical dance form, from basic postures and hand gestures to complex choreography and improvisation techniques. Our experienced instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our convenient online platform, you can learn Bharatanatyam from the comfort of your own home and at your own pace. Join our community of dancers today and discover the rich cultural heritage and artistry of Bharatanatyam! </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bollywood Dance -->
                <div class="tab-pane fade show" id="pills-BollywoodDance" role="tabpanel" aria-labelledby="pills-BollywoodDance-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/bollywood-dance.png" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Bollywood Dance</h3>

                            <p>
                                Ready to add some Bollywood ﬂair to your dance routine? Our online Bollywood dance classes have got you covered! Our expert instructors will guide you through everything from basic steps to complex choreography, helping you master the signature moves of Bollywood dance. Our comprehensive syllabus includes techniques for Bollywood-style footwork, hand gestures, and facial expressions, as well as tips for incorporating your own personal style into your dancing. With our ﬂexible scheduling and convenient online platform, you can learn Bollywood dance from anywhere, at any time. Join us today and start moving to the beat of Bollywood!</p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HindustaniVocal -->
                <div class="tab-pane fade show" id="pills-HindustaniVocal" role="tabpanel" aria-labelledby="pills-HindustaniVocal-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/hindustani-vocal.png" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Hindustani Vocal</h3>
                            <p>

                                Looking for an immersive and authentic Hindustani vocal learning experience? Join our Online Hindustani Vocal Class today! Unlock the rich heritage of Indian classical music from the comfort of your home. Our expert instructors provide comprehensive lessons tailored to all skill levels, whether you’re a beginner or advanced learner. Explore the intricacies of ragas, taal, and classical techniques while honing your voice and expression. With interactive virtual sessions, personalized feedback, and a supportive community, you’ll experience remarkable progress in no time. Embark on a soulful journey into the realm of Hindustani music. Enroll in our Online Hindustani Vocal Class and discover the beauty of this ancient art form. </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CarnaticVocal -->
                <div class="tab-pane fade show" id="pills-CarnaticVocal" role="tabpanel" aria-labelledby="pills-CarnaticVocal-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/carnatic-vocal.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Carnatic Vocal</h3>

                            <p>
                                Embark on a melodious journey through the divine sounds of Carnatic music with our Online Carnatic Vocal Class. Discover the rich heritage and intricate nuances of this classical South Indian art form from the comfort of your own home. Our experienced instructors provide comprehensive lessons for all skill levels, from beginners to advanced learners. Dive deep into the world of ragas, talas, and improvisation, while refining your vocal technique and expression. With interactive virtual sessions, personalized guidance, and a supportive community, you’ll witness remarkable progress in your Carnatic vocal skills. Enroll in our Online Carnatic Vocal Class today and unleash your musical talent. </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Western Singing -->
                <div class="tab-pane fade show" id="pills-WesternSinging" role="tabpanel" aria-labelledby="pills-WesternSinging-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/western.png" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Western Singing</h3>

                            <p>
                                Unleash your inner diva and elevate your singing skills with our Online Western Singing Class. Whether you’re a beginner or an experienced vocalist, our comprehensive virtual lessons cater to all skill levels. Discover the fundamentals of Western singing, including vocal technique, breath control, pitch, and expression. From pop to rock, jazz to R&B, our expert instructors will guide you through various genres and help you develop your unique style. With interactive sessions, personalized feedback, and a supportive community, you’ll witness remarkable progress in your vocal abilities. Enroll in our Online Western Singing Class today and let your voice soar to new heights. </p>

                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Guitar  -->
                <div class="tab-pane fade show" id="pills-Guitar" role="tabpanel" aria-labelledby="pills-Guitar-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/guitar.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Guitar</h3>

                            <p>
                                Looking to master the guitar from the comfort of your own home? Our comprehensive online guitar course is designed to take you from a beginner to a conﬁdent player in no time. With expert instruction and step-by-step lessons, you’ll learn essential techniques, chord progressions, scales, and music theory. Our interactive platform offers practice exercises, video tutorials, and personalized feedback to ensure your progress. Whether you’re into rock, blues, or acoustic styles, our course covers a wide range of genres and helps you develop your own unique sound. Join our online guitar course today and unleash your musical potential with convenience and ﬂexibility. </p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Keyboard -->
                <div class="tab-pane fade show" id="pills-Keyboard" role="tabpanel" aria-labelledby="pills-Keyboard-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/keyboard.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Keyboard</h3>
                            <p>
                                Unlock the magic of the keyboard with our online keyboard course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this versatile instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering keyboard techniques, music theory, and popular repertoire. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you dream of playing your favorite songs, exploring different genres, or even composing your own music, our online keyboard course offers convenience, ﬂexibility, and expert guidance to help you become a skilled keyboardist. <br><br>
                                Enroll today and let your musical journey begin!</p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Yoga -->
                <div class="tab-pane fade show" id="pills-Yoga" role="tabpanel" aria-labelledby="pills-Yoga-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="public/images/Home/yoga.svg" class="danceimg home">
                        </div>

                        <div class="col-md-6 col-12 text-col mt-5">
                            <h3 class="heading"> - Yoga</h3>

                            <p>
                                Online everyday yoga classes offer a convenient and effective way to incorporate yoga into your daily routine. Yoga is a great way to improve overall health and wellness, reduce stress and anxiety, and increase strength and ﬂexibility. With online classes, you can practice yoga from the comfort of your own home, at a time that works for you. <br><br>
                                Additionally, online classes often offer a variety of options, from quick morning stretches to longer, more intensive classes, so you can ﬁnd a class that ﬁts your schedule and ﬁtness level. Joining an online everyday yoga class can be a great way to improve your physical and mental wellbeing and make yoga a regular part of your daily routine.</p>
                            <div class="text-end mt-4">
                                <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Home#pricing-section">START NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coming Soon -->
                <div class="tab-pane fade show" id="pills-ComingSoon" role="tabpanel" aria-labelledby="pills-ComingSoon-tab">
                    <div class="row">
                        <div class="col-md-12 col-12 mt-5">
                            <h6 class="heading ml-5"> - Coming Soon </h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Stories That Inspire - Section -->


<section class="stories-section">
    <div class="container">
        <div class="row">

            <div class="sc_heading text-center scm">
                Stories That Inspire<span class="line"></span>
            </div>

        </div>

        <div class="line_1">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-12">


                    <div class="ST_Inspire-element ST_Inspire-element-3e3fada ST_Inspire-widget ST_Inspire-widget-video" data-id="3e3fada" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/LxDF2EzI-8Y&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">

                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <!-- <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="enatyam kathak student feedback II Swara USA  II kathak for beginners II" width="640" height="360" src="https://www.youtube.com/embed/LxDF2EzI-8Y?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=1" id="widget2"></iframe> -->

                                <video width="640" height="360" controls>
                                    <source src="https://youtu.be/LxDF2EzI-8Y" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-12">


                    <div class="ST_Inspire-element ST_Inspire-element-6ca1fbd ST_Inspire-widget ST_Inspire-widget-video" data-id="6ca1fbd" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/qXWNN-sakqk&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">
                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="enatyam kathak student feedback and progressII kids beginners kathak batch II Roohi Delhi" width="640" height="360" src="https://www.youtube.com/embed/qXWNN-sakqk?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=3" id="widget4"></iframe>
                                <!-- <video width="640" height="360" controls>
                                    <source src="https://youtu.be/qXWNN-sakqk" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video> -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-12">


                    <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video" data-id="66164fa" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/96eSNaPxFBc&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">
                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <!-- <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Enatyam student's father feedback" width="640" height="360" src="https://www.youtube.com/embed/96eSNaPxFBc?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=5" id="widget6"></iframe> -->

                                <video width="640" height="360" controls>
                                    <source src="https://www.youtube.com/watch?v=96eSNaPxFBc" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-12">

                    <div class="ST_Inspire-element ST_Inspire-element-6b952c1 ST_Inspire-widget ST_Inspire-widget-video" data-id="6b952c1" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/XLAu2-6zcxQ&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">
                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="fatema learning experience on enatyam platform testimonial" width="640" height="360" src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=7" id="widget8"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-12">

                    <div class="ST_Inspire-element ST_Inspire-element-c74e2f6 ST_Inspire-widget ST_Inspire-widget-video" data-id="c74e2f6" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/djM1jTlnLlk&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">
                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="kathak online class #enatyam" width="640" height="360" src="https://www.youtube.com/embed/djM1jTlnLlk?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=9" id="widget10"></iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4 col-12">

                    <div class="ST_Inspire-element ST_Inspire-element-aa0bc0c ST_Inspire-widget ST_Inspire-widget-video" data-id="aa0bc0c" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/aV_xErXRUYE&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="ST_Inspire-widget-container">
                            <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Kathak online learning expereince on enatyam II Tia Canada II kids kathak learning from beginners" width="640" height="360" src="https://www.youtube.com/embed/aV_xErXRUYE?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfobeckon.com&amp;widgetid=11" id="widget12"></iframe>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 col-lg-12 col-12 ST_Inspire-widget-container2 mb-5">

                    <a class="btn join-now-btn" href="">Inspired ?<br>Join Now!</a>

                </div>
            </div>
        </div>




    </div>

</section>


<!-- Line Sepretor Part -->



<!-- Indias Most Loved Art learning Platform -->






<section class="learning_Platform-section mb-5">
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


<!-- Line Sepretor Part -->



<!-- How To Get Started? -->

<section class="how_Started-section">
    <div class="container">
        <div class="row m-0">
            <div class="heading_new text-center">
                <b>
                    <h3 class="title_4"> How To Get Started? <span class="line"></span></h3>
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
                    <h3 class="heading__primary">2. Trial class</h3>
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
<section class="faculty-section">
    <div class="container cont-width">
        <div class="row heading-div m-0">
            <div class="col-lg-12 col-12 text-center">
                <h3>Super Star Faculty
                </h3>
                <span class="line"></span>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/veera.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Veera</div>
                                <div class="faculty-content-team__member-position">
                                    Yoga
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/priti.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Priti</div>
                                <div class="faculty-content-team__member-position">
                                    Kathak Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/neha.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Neha</div>
                                <div class="faculty-content-team__member-position">
                                    Semi Classical Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/priyanka.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Priyanka</div>
                                <div class="faculty-content-team__member-position">
                                    Kathak Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/priya.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Priya</div>
                                <div class="faculty-content-team__member-position">
                                    Yoga
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/sweta.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">sweta</div>
                                <div class="faculty-content-team__member-position">
                                    Carnatic Music
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/jaya.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Jaya</div>
                                <div class="faculty-content-team__member-position">
                                    Bharatanatyam Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/ketki.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">ketki</div>
                                <div class="faculty-content-team__member-position">
                                    Hindustani Music
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/Koyali.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Koyali</div>
                                <div class="faculty-content-team__member-position">
                                    Hindustani Music
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/krutika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">krutika</div>
                                <div class="faculty-content-team__member-position">
                                    Semi Classical Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/Anila.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Anila</div>
                                <div class="faculty-content-team__member-position">
                                    Bollywood Dance
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/Anika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Anika</div>
                                <div class="faculty-content-team__member-position">
                                    Yoga
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/Ila.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Ila</div>
                                <div class="faculty-content-team__member-position">
                                    Bollywood Singing
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/Samira.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Samira</div>
                                <div class="faculty-content-team__member-position">
                                    Yoga
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="public/images/sanjay.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name">Sanjay</div>
                                <div class="faculty-content-team__member-position">
                                    Yoga
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include('pricing.php'); ?>


<!-- one stop solution -->


<!-- comming soon -->
<section class="comming-section">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 text-center coming-soon-img "><img src="public/images/logo3.png" width="15%" class="commingsoonimg" /></div>
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
                        <p class="comming-soon-p">Exciting times ahead! We are thrilled to announce that a new <br>subject tailored specifically for kids is on its way to our eLearning<br> platform. Currently in the test phase, this engaging and educational <br> content is designed to spark curiosity and fuel young minds. Stay <br> tuned as we prepare to
                            launch an enriching learning experience for<br> children everywhere!</p>
                        <P class="comming-soon-p">
                            Join our exclusive test run program and experience the future of education firsthand. Limited spots available!
                        </P>
                        <P class="comming-soon-p">
                            write us to be the part of our test run program :<br><b><a href="mailTo:hello@enatyam.com"> hello@enatyam.com</a></b>
                        </p>
                    </div>
                </div>
</section>






<?php include('bookdemocallb.php'); ?>



<?php include('footer.php'); ?>