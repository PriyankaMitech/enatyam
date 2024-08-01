<!-- <section class="btnSection">
    <div class="container ">
        <div class="row dancetypes-tab ">

            <ul class="list-inline ">
                <li class="list-inline-item dancetypes active">Kathak</li>
                <li class="list-inline-item dancetypes">Bharatanatayam</li>
                <li class="list-inline-item dancetypes">Bollywood Dance</li>
                <li class="list-inline-item dancetypes">Hindustani Vocal</li>
                <li class="list-inline-item dancetypes">Carnatic Vocal</li>
                <li class="list-inline-item  dancetypes bigger">Western Singing</li>
                <li class="list-inline-item  dancetypes bigger">Guitar</li>
                <li class="list-inline-item dancetypes bigger">Keyborad</li>
                <li class="list-inline-item  dancetypes bigger">Yoga</li>
                <li class="list-inline-item dancetypes bigger">Coming Soon</li>
        </div>

    </div>
</section>
<section class="dancedesc">
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <img src="<?=base_url(); ?>public/images/homeb.svg" class="danceimg" width="400px">

            </div>
            <div class="col-6 text-center text-col">
                <p class="textP">
                    Looking for the best online Kathak classes with a comprehensive syllabus? Look no further than our
                    platform! Our online Kathak classes are designed to provide you with an immersive learning
                    experience that will help you master this beautiful dance form. Our syllabus covers everything from
                    the basics of footwork and hand gestures to complex choreography and improvisation techniques. With
                    our experienced instructors and state-of-the-art technology, you can learn Kathak from the comfort
                    of your own home and at your own pace. Join us today and discover the joy of Kathak dancing!
                </p>
                <div class="btn btndemo"><a href="<?php echo base_url('StartNowPricing'); ?>">START NOW</a> </div>
            </div>
        </div>
    </div>

</section> -->

<section class="btnSection mb-5">
    <div class="container">

        <!-- pills -->
        <div class="row typesOfDance-tab">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <!-- Kathak -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-Kathak-tab" data-bs-toggle="pill" data-bs-target="#pills-Kathak" type="button" role="tab" aria-controls="pills-Kathak" aria-selected="true">Kathak</button>
                </li>
                <!-- Bharatnatyam -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Bharatnatyam-tab" data-bs-toggle="pill" data-bs-target="#pills-Bharatnatyam" type="button" role="tab" aria-controls="pills-Bharatnatyam" aria-selected="false">Bharatnatyam</button>
                </li>
                <!-- Bollywood Dance -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-BollywoodDance-tab" data-bs-toggle="pill" data-bs-target="#pills-BollywoodDance" type="button" role="tab" aria-controls="pills-BollywoodDance" aria-selected="false">Bollywood Dance</button>
                </li>
                <!-- Hindustani Vocal -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-HindustaniVocal-tab" data-bs-toggle="pill" data-bs-target="#pills-HindustaniVocal" type="button" role="tab" aria-controls="pills-HindustaniVocal" aria-selected="false">Hindustani Vocal</button>
                </li>
                <!-- Carnatic Vocal -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-CarnaticVocal-tab" data-bs-toggle="pill" data-bs-target="#pills-CarnaticVocal" type="button" role="tab" aria-controls="pills-CarnaticVocal" aria-selected="false">Carnatic Vocal</button>
                </li>
                <!-- Western Singing -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-WesternSinging-tab" data-bs-toggle="pill" data-bs-target="#pills-WesternSinging" type="button" role="tab" aria-controls="pills-WesternSinging" aria-selected="false">Western Singing</button>
                </li>
                <!-- Guitar -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Guitar-tab" data-bs-toggle="pill" data-bs-target="#pills-Guitar" type="button" role="tab" aria-controls="pills-Guitar" aria-selected="false">Guitar</button>
                </li>
                <!-- Keyboard -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Keyboard-tab" data-bs-toggle="pill" data-bs-target="#pills-Keyboard" type="button" role="tab" aria-controls="pills-Keyboard" aria-selected="false">Keyboard</button>
                </li>
                <!-- Yoga -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Yoga-tab" data-bs-toggle="pill" data-bs-target="#pills-Yoga" type="button" role="tab" aria-controls="pills-Yoga" aria-selected="false">Yoga</button>
                </li>
                <!-- Coming Soon -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-ComingSoon-tab" data-bs-toggle="pill" data-bs-target="#pills-ComingSoon" type="button" role="tab" aria-controls="pills-ComingSoon" aria-selected="false">Coming Soon</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Kathak -->
                <div class="tab-pane fade show active" id="pills-Kathak" role="tabpanel" aria-labelledby="pills-Kathak-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/kathak.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                <!-- <?php //echo phpinfo(); 
                                        ?> -->
                                Looking for the best online Kathak classes with a comprehensive syllabus? Look no further than our platform! Our online Kathak classes are designed to provide you with an immersive learning experience that will help you master this beautiful dance form. Our syllabus covers everything from the basics of footwork and hand gestures to complex choreography and improvisation techniques. With our experienced instructors and state-of-the-art technology, you can learn Kathak from the comfort of your own home and at your own pace. Join us today and discover the joy of Kathak dancing!
                            </p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bhratnatyam -->
                <div class="tab-pane fade show" id="pills-Bharatnatyam" role="tabpanel" aria-labelledby="pills-Bharatnatyam-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/bharatnatyam.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Experience the grace and beauty of Bharatanatyam with our online dance classes! Our syllabus covers the fundamentals of this ancient Indian classical dance form, from basic postures and hand gestures to complex choreography and improvisation techniques. Our experienced instructors provide personalized guidance and support to help you perfect your technique and develop your own unique style. With our convenient online platform, you can learn Bharatanatyam from the comfort of your own home and at your own pace. Join our community of dancers today and discover the rich cultural heritage and artistry of Bharatanatyam! </p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bollywood Dance -->
                <div class="tab-pane fade show" id="pills-BollywoodDance" role="tabpanel" aria-labelledby="pills-BollywoodDance-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/bollywood-dance.png" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Ready to add some Bollywood ﬂair to your dance routine? Our online Bollywood dance classes have got you covered! Our expert instructors will guide you through everything from basic steps to complex choreography, helping you master the signature moves of Bollywood dance. Our comprehensive syllabus includes techniques for Bollywood-style footwork, hand gestures, and facial expressions, as well as tips for incorporating your own personal style into your dancing. With our ﬂexible scheduling and convenient online platform, you can learn Bollywood dance from anywhere, at any time. Join us today and start moving to the beat of Bollywood!</p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HindustaniVocal -->
                <div class="tab-pane fade show" id="pills-HindustaniVocal" role="tabpanel" aria-labelledby="pills-HindustaniVocal-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/hindustani-vocal.png" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Looking for an immersive and authentic Hindustani vocal learning experience? Join our Online Hindustani Vocal Class today! Unlock the rich heritage of Indian classical music from the comfort of your home. Our expert instructors provide comprehensive lessons tailored to all skill levels, whether you’re a beginner or advanced learner. Explore the intricacies of ragas, taal, and classical techniques while honing your voice and expression. With interactive virtual sessions, personalized feedback, and a supportive community, you’ll experience remarkable progress in no time. Embark on a soulful journey into the realm of Hindustani music. Enroll in our Online Hindustani Vocal Class and discover the beauty of this ancient art form. </p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CarnaticVocal -->
                <div class="tab-pane fade show" id="pills-CarnaticVocal" role="tabpanel" aria-labelledby="pills-CarnaticVocal-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/carnatic-vocal.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Embark on a melodious journey through the divine sounds of Carnatic music with our Online Carnatic Vocal Class. Discover the rich heritage and intricate nuances of this classical South Indian art form from the comfort of your own home. Our experienced instructors provide comprehensive lessons for all skill levels, from beginners to advanced learners. Dive deep into the world of ragas, talas, and improvisation, while refining your vocal technique and expression. With interactive virtual sessions, personalized guidance, and a supportive community, you’ll witness remarkable progress in your Carnatic vocal skills. Enroll in our Online Carnatic Vocal Class today and unleash your musical talent. </p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Western Singing -->
                <div class="tab-pane fade show" id="pills-WesternSinging" role="tabpanel" aria-labelledby="pills-WesternSinging-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/western.png" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Unleash your inner diva and elevate your singing skills with our Online Western Singing Class. Whether you’re a beginner or an experienced vocalist, our comprehensive virtual lessons cater to all skill levels. Discover the fundamentals of Western singing, including vocal technique, breath control, pitch, and expression. From pop to rock, jazz to R&B, our expert instructors will guide you through various genres and help you develop your unique style. With interactive sessions, personalized feedback, and a supportive community, you’ll witness remarkable progress in your vocal abilities. Enroll in our Online Western Singing Class today and let your voice soar to new heights. </p>

                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Guitar  -->
                <div class="tab-pane fade show" id="pills-Guitar" role="tabpanel" aria-labelledby="pills-Guitar-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/guitar.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Looking to master the guitar from the comfort of your own home? Our comprehensive online guitar course is designed to take you from a beginner to a conﬁdent player in no time. With expert instruction and step-by-step lessons, you’ll learn essential techniques, chord progressions, scales, and music theory. Our interactive platform offers practice exercises, video tutorials, and personalized feedback to ensure your progress. Whether you’re into rock, blues, or acoustic styles, our course covers a wide range of genres and helps you develop your own unique sound. Join our online guitar course today and unleash your musical potential with convenience and ﬂexibility. </p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Keyboard -->
                <div class="tab-pane fade show" id="pills-Keyboard" role="tabpanel" aria-labelledby="pills-Keyboard-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/keyboard.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Unlock the magic of the keyboard with our online keyboard course. Whether you’re a beginner or intermediate player, our comprehensive program is designed to help you master this versatile instrument from the comfort of your own home. Over 12 months, you’ll progress through step-by-step lessons covering keyboard techniques, music theory, and popular repertoire. Our experienced instructors will guide you through engaging video lessons, provide personalized feedback, and offer practice resources to ensure steady improvement. Whether you dream of playing your favorite songs, exploring different genres, or even composing your own music, our online keyboard course offers convenience, ﬂexibility, and expert guidance to help you become a skilled keyboardist. <br><br>
                                Enroll today and let your musical journey begin!</p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Yoga -->
                <div class="tab-pane fade show" id="pills-Yoga" role="tabpanel" aria-labelledby="pills-Yoga-tab">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url(); ?>public/images/Home/yoga.svg" class="danceimg home">
                        </div>
                        <div class="col-6 text-center text-col">
                            <p class="textP">
                                Online everyday yoga classes offer a convenient and effective way to incorporate yoga into your daily routine. Yoga is a great way to improve overall health and wellness, reduce stress and anxiety, and increase strength and ﬂexibility. With online classes, you can practice yoga from the comfort of your own home, at a time that works for you. <br><br>
                                Additionally, online classes often offer a variety of options, from quick morning stretches to longer, more intensive classes, so you can ﬁnd a class that ﬁts your schedule and ﬁtness level. Joining an online everyday yoga class can be a great way to improve your physical and mental wellbeing and make yoga a regular part of your daily routine.</p>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btndemo step start">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coming Soon -->
                <div class="tab-pane fade show" id="pills-ComingSoon" role="tabpanel" aria-labelledby="pills-ComingSoon-tab">
                    <div class="row">
                        <div class="col-6  text-col">
                            <p class=" ">Coming Soon</p>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr> -->