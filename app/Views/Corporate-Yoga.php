<?php include('header.php'); ?>
<style>
.corporateyoga {
    font-size: 23px;
    color: black;
    /* margin-top: 100px; */
    /* Adjust as needed */
    padding-top: 120px;
    padding-bottom: 100px;
    padding-left: 20px;
    padding-right: 20px;
    /* Add padding to all sides */
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
    /* Center-align the content */
    background: rgb(255, 219, 88);
    background: linear-gradient(98deg, rgba(255, 219, 88, 1) 0%, rgba(255, 219, 88, 1) 35%, rgba(255, 150, 78, 1) 100%);

}

.corporateyoga p {
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
    font-size: 20px
}

.Yoga-btn {
    /* background-color: #FF1561; */
    border-radius: 60px;
    padding: 2px 11px;
    border: none;
    font-family: "Roboto Slab", Sans-serif;
    background: rgb(10, 10, 10);
    background: linear-gradient(98deg, rgba(10, 10, 10, 1) 0%, rgba(66, 65, 65, 1) 35%, rgba(107, 107, 107, 1) 100%);
    color: #FFD658;
    font-size: 17px
}

.Yoga-btn p {
    margin-top: 10px;
    font-family: "Roboto Slab", Sans-serif;
}

.Yogamodi {
    /* margin-top: 50px; */
    background-color: black;
    font-family: "Roboto Slab", Sans-serif;
}

.hedesings h1 {
    padding: 43px 0px 0px;
    font-family: "Roboto Slab", Sans-serif;
    background: rgb(35, 219, 164);
    background: linear-gradient(81deg, #7028EE 0%, #366CE3 62%, #0CADD1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 600
}

.hedeyog {
    color: aliceblue;
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
}

.hedesingsbot h1 {
    color: aliceblue;
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
    font-size: 35px;
    background: rgb(35, 219, 164);
    background: linear-gradient(81deg, #93EE2A 0%, #3AE386 62%, #93EE2A 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 600 padding: 0px 0px 30px 0px;
}

.modiimg {
    height: 100%;
    max-width: 100%;
    border: none;
    border-radius: 0;
    box-shadow: none;
    width: 100%;
    /* margin-left: 15%; */
    border-radius: 44px;
}

.activeempl {
    /* margin-top: 50px; */
    background-color: #FAD32C;
    font-family: "Roboto Slab", Sans-serif;
}

.exer {
    padding: 0px 0px 21px 100px;

}

.smaller-image {
    max-width: 80px;
    /* Adjust the maximum width as needed */
    max-height: 80px;
    /* Adjust the maximum height as needed */
}

.circle {
    width: 220px;
    /* Increase width */
    height: 220px;
    /* Increase height */
    border-radius: 50%;
    background: linear-gradient(135deg, #00aaff, #00ff00);
    /* Gradient from blue to green */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    /* Text color */
    font-size: 18px;
    text-align: center;
    /* Font size */
}

.circle1 {
    background-color: #323296d1;
    /* Red color with transparency */
}

.circle2 {
    background-color: #00ff00;
    /* Green color */
}

.connect {
    height: 20vh;

}

.activeempl button {
    padding: 10px 16px 0px 20px;
    font-size: 18px;
    border-radius: 31px;
    border: none;
    background: linear-gradient(135deg, #d21bed, #335c33);
}

.benifitsyoga {
    margin-top: 50px;
    background-color: black;
    font-family: "Roboto Slab", Sans-serif;
}

.benifitsyoga button {
    padding: 10px 16px 0px 20px;
    font-size: 18px;
    border-radius: 31px;
    border: none;
    background: linear-gradient(135deg, #d21bed, #335c33);
}

.benifitsyoga p {
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
    color: white;
    padding: 9px 73px 40px 42px;
}

.connect p {
    text-align: center;
    font-family: "Roboto Slab", Sans-serif;
    color: white;
    padding: 5px 39px 0px 17px;
}

.rectangle {
    background: linear-gradient(135deg, #1bc8ed, #335c33);
    /* margin: 10px;  */
    border-radius: 10px;
    margin-right: 71px;
    margin-left: 85px;
    font-family: "Roboto Slab", Sans-serif;
}

.rectangle p {
    text-align: center;
    padding: 8px 12px 14px 0px;
    font-family: "Roboto Slab", Sans-serif;
}

.alarmings {
    max-width: 66%;
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin-left: 17%;
    margin-top: 16px;
    font-family: "Roboto Slab", Sans-serif;
}

/* .alarmingcircle {
    width: 50px;
    height: 50px;
    background-color: #FF5733;
    border-radius: 50%;
    margin-left: -60px; /* Adjust the position of the circle */
/* margin-top: 6px; Adjust the position of the circle */
/* position: absolute; Position the circle relative to its parent */
/* } */
/* .alarmingcircle {
    width: 72px;
    height: 64px;
    background-color: #FF5733;
    border-radius: 69%;
    margin-left: -31px;
    margin-top: -2px;
    position: absolute;
} */

.alarmingrectangle {
    background: linear-gradient(135deg, #1bc8ed, #335c33);
    border-radius: 10px;
    /* margin-right: 71px; */
    margin-left: 85px;
    font-family: "Roboto Slab", Sans-serif;
    position: relative;
    /* Position the text relative to its parent */
}

.alarmingrectangle p {
    text-align: center;
    padding: 2px 5px 8px 39px;
    margin-top: 30px;
    font-family: "Roboto Slab", Sans-serif;
}

.Platform {
    background-color: black;
    font-family: "Roboto Slab", Sans-serif;
}

.features {
    background: linear-gradient(135deg, #e1d582, #999b8d);
    padding: 5px;
    margin-top: 10px;
    border-radius: 13px;
    font-family: "Roboto Slab", Sans-serif;
    position: relative;
    /* Position the text relative to its parent */
}

.hex-1 {
    background: #CAF7B7 !important
}

.hex-1::before {
    border-bottom: 78px solid #CAF7B7 !important;
}

.hex-1::after {
    border-top: 78px solid #CAF7B7 !important;
}

.hex-2 {
    background: #82C16F !important
}

.hex-2::before {
    border-bottom: 78px solid #82C16F !important
}

.hex-2::after {
    border-top: 78px solid #82C16F !important
}

.hex-3 {
    background: #ddd !important
}

.hex-3::before {
    border-bottom: 78px solid #ddd !important
}

.hex-3::after {
    border-top: 78px solid #ddd !important
}

.hexagon {
    width: 250px;
    height: 112px;
    background: #fff;
    position: relative;
    overflow: visible;
    box-sizing: border-box;

    line-height: 40px;
}

.hexagon:before {
    content: "";
    position: absolute;
    left: 0;
    width: 0;
    height: 0;
    top: -78px;
    border-left: 125px solid transparent;
    border-right: 125px solid transparent;
    border-bottom: 78px solid #fff;
}

.hexagon:after {
    content: "";
    position: absolute;
    left: 0;
    width: 0;
    height: 0;
    bottom: -78px;
    border-left: 125px solid transparent;
    border-right: 125px solid transparent;
    border-top: 78px solid #fff;
}

.hex-section {
    padding: 100px 0 0 0;
    display: block;
    text-align: center;
    margin: 0 auto;
}



.hex-section ul {
    padding: 0;
    margin-top: 0px;
    margin-bottom: 0px;
    /* margin-left: 10px; */
    list-style: none;
    display: inline-block;
}

.hex-section ul li {
    float: left;
    margin: 0;
    /* padding: 0 15px; */
}

.hex-section h3 {
    font-size: 27px;
    font-weight: 600;
    position: relative;
    top: 37px;
}

.hex-3 {
    position: relative;
    top: -30px;
    left: 33px;
}

.hex-div {
    padding-left: 30px
}

.quote-btn {
    background: #FAD32C;
    color: #000;
    margin-top: 115px;
    padding: 20px 100px;
    font-size: 20px;
    font-weight: 600;
    border-radius: 16px
}


.why-enatyam {
    background: rgb(129, 235, 249);
    background: linear-gradient(98deg, rgba(129, 235, 249, 1) 0%, rgba(194, 227, 184, 1) 35%, rgba(237, 222, 142, 1) 100%);
    padding: 40px 0px
}

.why-enatyam h1 {
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 100px !important
}

.ena-img {
    text-align: center;
    position: absolute;
    top: -65px;
    width: 60%;
    margin: auto;
    left: 0;
    right: 0;
}

.ena-card1 {
    background: linear-gradient(to right, #0f0f0f 0%, #686868 100%);
    border: none
}

.ena-card2 {
    background: linear-gradient(to right, #1c1503 0%, #b38214 100%);
    border: none
}

.ena-card3 {
    background: linear-gradient(to right, #aeaeae 0%, #f0f0f0 100%);
    border: none
}

.why-enatyam .card {
    padding: 70px 40px 40px 40px;
    height: 100%;
    border-radius: 30px
}

.ena-card1 a,
.ena-card2 a {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    display: block;
    margin-bottom: 20px
}

.ena-card3 a {
    color: #000;
    font-size: 20px;
    font-weight: 600;
    display: block;
    margin-bottom: 20px
}

.ena-card1 p,
.ena-card2 p {
    font-size: 17px;
    color: #fff
}

.ena-card3 p {
    color: #777;
    font-size: 17px
}

.why-enatyam .col-lg-4 {
    padding: 0px 15px
}

.e-table-section {
    padding: 60px 30px;
    background: #323232
}

.e-table-section h1 {
    background: linear-gradient(270deg, #00c2cb 20%, #3a74d8 24.13%, #e6b32c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 2.5rem;
    font-weight: 600;
}

.e-table-section tr,
.e-table-section td {
    border: 2px solid #eee;
    color: #fff;
    vertical-align: middle
}

.sil-div {
    background: linear-gradient(to right, #afafaf 0%, #f1f1f1 100%);
    border: none;
    color: #000 !important;
    padding: 10px;
    border-radius: 14px;
    font-size: 18px;
    font-weight: 600
}

.gol-div {
    background: linear-gradient(to right, #fad32c 0%, #fad32c 100%);
    border: none;
    color: #000 !important;
    padding: 10px;
    border-radius: 14px;
    font-size: 18px;
    font-weight: 600
}

.pal-div {
    background: linear-gradient(to right, #e4cbcb 0%, #787474 100%);
    border: none;
    color: #000 !important;
    padding: 10px;
    border-radius: 14px;
    font-size: 18px;
    font-weight: 600
}

.sil-div,
.pal-div,
.gol-div {
    width: 100%
}

.image-section {
    background: #000000;
    padding: 60px 30px
}

.image-section h1 {
    background: linear-gradient(270deg, #ffde4b 20%, #f97ad2 24.13%, #7a1ca5 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 2.5rem;
    font-weight: 600;
}

.image-section img {
    width: 120px;
    height: 120px;
    object-fit: contain;
    text-align: center;
    margin: auto
}

.image-section .row {
    justify-content: center;
}

.image-section .col-lg-2 {
    text-align: center
}

.move-section {
    background: linear-gradient(to right, #82ebf8 0%, #8c8450 100%);
    padding: 60px 30px;
    border-bottom: 1px solid #ddd
}

.faq-section {
    background: linear-gradient(to right, #82ebf8 0%, #8c8450 100%);
    padding: 60px 30px;
    border-bottom: 1px solid #ddd
}

.move-section h1 {
    font-size: 2.5rem;
    font-weight: 600;
}

.faq-section h1 {
    font-size: 2.5rem;
    font-weight: 600;
}

.form-section {
    background: linear-gradient(to right, #82ebf8 0%, #8c8450 100%);
    padding: 60px 30px;
}

.form-section h1 {
    font-size: 2.5rem;
    font-weight: 600;
}

.form-section input {
    height: 50px;
    margin-bottom: 15px
}
</style>
<section class="corporateyoga">
    <div class="content">

        <p>At Enatyam, we recognize the challenges posed by today's fast-paced work environments.
            Our<br> <b>Employee Wellness Program (EWP)</b> is meticulously crafted to address your
            organization's needs in promoting employee well-being and welfare. Stress and burnout
            have become prevalent issues for leaders, prompting us to design a course that
            underscores the significance of yoga and meditation. Our EWP is tailored to meet the
            demands of modern workplaces, empowering leaders to effectively manage stress,
            nurture well-being, and amplify performance. With our online programs, we offer
            convenience for busy professionals, facilitating both physical and mental health benefits.
            Choose Enatyam to equip your team with wellness resources, fostering a happier and
            more productive workforce.</p>

        </p>

        <p>Join us on a journey of self-discovery and growth to unlock your full leadership potential</p>

    </div>
    <div class="col-lg-12">
        <ul class="nav nav-pills row">
            <li class="nav-item col-md-6 col-lg-6 col-6">
                <button class="Yoga-btn">
                    <p>Yoga Program for Corporates</p>
                </button>
            </li>
            <li class="nav-item col-md-6 col-lg-6 col-6">
                <button class="Yoga-btn" id="pills-profile-tab">

                    <p>Mindfulness for Top Leaders</p>
                </button>
            </li>

        </ul>
    </div>


</section>
<section class="Yogamodi pb-2">
    <div class="content container-fluid px-4">
        <div class=" hedesings">
            <h1 class="text-center"><b>Fit India Movement</b></h1>
        </div>
        <div class="row p-3">
            <div class="col-md-5 col-12">
                <img src="<?=base_url(); ?>public/images/corporateyoga/modi.png" class="modiimg home">
            </div>

            <div class="col-md-6 col-12 text-col mx-auto hedeyog">
                <!-- <h3 class="heading"> Kathak</h3> -->
                <div class="text-right">
                    <div class="h3">When it comes to brand ambassadors, is
                        there anyone bigger than our honorable
                        Prime Minister, Mr. Narendra Modi?</div>
                </div>
                <p class="text-justify mt-4">
                    Our vision is to create a healthier India by
                    embodying the ideals and aspirations of our
                    honorable Prime Minister, Mr. Modi, for a fitter
                    nation. We strive to inspire individuals across the
                    country to adopt healthier lifestyles, prioritize
                    fitness, and contribute to the overall well-being of
                    society. Through our initiatives and efforts, we
                    aim to realize the vision of a healthier nation as
                    envisioned by Mr. Modi.

                </p>


            </div>
        </div>
        <div class="my-3  hedesingsbot">
            <h1 class="text-center mb-4 mt-3"><b>Join us and let's make India stronger, happier and healthier
                    together</b>
            </h1>
        </div>
    </div>
</section>
<section class="activeempl ">
    <div class="content">
        <div class="mt-5 hedesings">
            <h1 class="text-center"><b>Fit India Movement</b></h1>
        </div>
        <div class="row exer">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="<?=base_url(); ?>public/images/corporateyoga/human-footprint.png" alt="Image 1"
                    class="img-fluid smaller-image">
            </div>
            <div class="col-md-2">
                <img src="<?=base_url(); ?>public/images/corporateyoga/apples.png" alt="Image 2"
                    class="img-fluid smaller-image">
            </div>
            <div class="col-md-2">
                <img src="<?=base_url(); ?>public/images/corporateyoga/stretching.png" alt="Image 3"
                    class="img-fluid smaller-image">
            </div>
            <div class="col-md-2">
                <img src="<?=base_url(); ?>public/images/corporateyoga/lotus.png" alt="Image 4"
                    class="img-fluid smaller-image">
            </div>
            <div class="col-md-2">
                <img src="<?=base_url(); ?>public/images/corporateyoga/wellbeing.png" alt="Image 5"
                    class="img-fluid smaller-image">
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row mt-4 circletest">
            <div class="col-md-3"></div>
            <div class="col-md-4 col-4">
                <div class="circle circle1">Active
                    Employees</div>
            </div>
            <div class="col-md-4 col-4">
                <div class="circle circle2">Productive
                    Worksplace</div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="connect d-flex justify-content-center align-items-center">
            <button>
                <p>Connect with us</p>
            </button>
        </div>
    </div>
</section>
<section class="benifitsyoga">
    <div class="content">
        <div class="mt-5 hedesings">
            <h1 class="text-center"><b>Benefits of Yoga and Mindfulness for Employees</b></h1>
        </div>
        <p>Investing in employee well-being is an investment in the success of your business. Yoga and
            mindfulness practices have been scientifically proven to reduce stress, improve focus, and
            enhance overall health. By incorporating these practices into their daily routine, employees
            can experience increased productivity, better work-life balance, and a greater sense of
            fulfillment. At Enatyam, we empower individuals to thrive in both their personal and
            professional lives through the power of yoga and mindfulness.</p>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Reduced stress and anxiety levels</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Improved focus and concentration</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Better sleep quality and overall well-being</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Enhanced emotional regulation and resilience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Increased productivity and creativity</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Strengthened immune system</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Greater job satisfaction and engagement</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Enhanced work-life balance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Improved decision-making abilities</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="rectangle">
                            <p>Increased self-awareness & personal growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="connect d-flex justify-content-center align-items-center mt-4">
            <button>
                <p>Get Quote</p>
            </button>
        </div>
    </div>
</section>
<section class="alarming">
    <div class="content">
        <div class="mt-5 hedesings">
            <h1 class="text-center"><b>Alarming Situation</b></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="alarmingrectangle">
                        <div class="alarmingcircle"
>
                        </div>
                        <p>National Institutes of Health (NIH), 13.9 percent of employees suffer from
                            high blood pressure.</p>
                    </div>
                    <div class="alarmingrectangle">
                        <div class="alarmingcircle"
                            >
                        </div>
                        <p>64 % of employees reported struggling with mental or behavioral health
                            issues, and 91% said they're less productive as a result.</p>
                    </div>

                    <div class="alarmingrectangle">
                        <div class="alarmingcircle"
                           >
                        </div>
                        <p>According to the National Institutes of Health (NIH), 28% of employed
                            individuals are suffering from obesity.</p>
                    </div>
                    <div class="alarmingrectangle">
                        <div class="alarmingcircle"
                            >
                        </div>
                        <p>80% of workers feel job stress, with nearly half needing help
                            managing it, and 42% say their coworkers need assistance too.</p>
                    </div>
                    <div class="alarmingrectangle">
                        <div class="alarmingcircle"
                            >
                        </div>
                        <p>81% of working professionals do not exercise regularly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?=base_url(); ?>public/images/corporateyoga/modi.png" class="alarmings home"
                        alt="Modi Image">
                    <img src="<?=base_url(); ?>public/images/corporateyoga/modi.png" class="alarmings home"
                        alt="Modi Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Platform">
    <div class="content">
        <div class="mt-5 hedesings">
            <h1 class="text-center"><b>Platform features</b></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="features">
                        <p><b>Flexible Scheduling: </b> sessions at your convenience, fitting wellness
                            practices seamlessly into your busy schedule</p>
                    </div>
                    <div class="features">
                        <p><b>Tailored Plans:</b> Customize your wellness journey with personalized plans
                            designed to meet your specific needs and goals.</p>
                    </div>
                    <div class="features">
                        <p><b>User-Friendly Dashboard:</b> Access content and track progress easily through
                            our intuitive platform, ensuring a seamless experience</p>
                    </div>
                    <div class="features">
                        <p><b>Expert Guidance: </b> from expert-led sessions and personalized
                            support to maximize the effectiveness of your wellness journey</p>
                    </div>
                    <div class="features">

                        <p><b>Customized Nutrition Plans:</b> Receive personalized guidance on nutrition
                            and diet, complementing your wellness journey for comprehensive support</p>
                    </div>
                    <div class="features">

                        <p><b>Holistic Approach:</b> Experience a holistic approach to well-being, addressing
                            physical, mental, and emotional aspects for optimal results</p>
                    </div>
                    <div class="features">

                        <p><b>Community Support:</b> Connect with like-minded individuals and receive
                            support from a supportive community of wellness enthusiasts</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="hex-div">



                        <div class="d-flex">
                            <section class="hex-section">
                                <ul>
                                    <li>
                                        <div class="hexagon hex-1">
                                            <h3>Flexibility</h3>
                                        </div>
                                    </li>

                                </ul>
                            </section>
                            <section class="hex-section">
                                <ul>
                                    <li>
                                        <div class="hexagon hex-2">
                                            <h3>Tailored Plan</h3>
                                        </div>
                                    </li>

                                </ul>
                            </section>

                        </div>

                        <div class="d-flex">
                            <section class="hex-section">
                                <ul>
                                    <li>
                                        <div class="hexagon hex-3">
                                            <h3>User-Friendly
                                                Dashboard</h3>
                                        </div>
                                    </li>

                                </ul>
                            </section>
                        </div>


                        <div class="text-center">
                            <!-- <button class="btn quote-btn">Get Quote</button> -->
                            <a class="btn quote-btn" href="">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-enatyam">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1>Why Enatyam EWP</h1>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card ena-card1">
                    <div class="ena-img">
                        <img src="<?=base_url(); ?>public/images/icon/img.png" alt="Image 4" class="img-fluid mx-auto "
                            width="50%">
                    </div>

                    <div style="text-align:center">
                        <a href="#">Employee Well-being </a>
                        <p>Our EWP offers a
                            comprehensive suite of
                            yoga and mindfulness
                            practices designed to
                            promote physical health,
                            mental clarity, and
                            emotional resilience
                            among employees,
                            resulting in a happier
                            and healthier workforce.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card ena-card2">
                    <div class="ena-img">
                        <img src="<?=base_url(); ?>public/images/icon/img-2.png" alt="Image 4"
                            class="img-fluid mx-auto " width="50%">
                    </div>

                    <div style="text-align:center">
                        <a href="#">Improved Productivity </a>
                        <p>By prioritizing employee
                            wellness, HR can boost
                            productivity and
                            engagement levels
                            within the organization.
                            Our EWP helps
                            employees manage
                            stress, improve focus,
                            and maintain work-life
                            balance, resulting in
                            higher performance and
                            job satisfaction
                            .</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="card ena-card3">
                    <div class="ena-img">
                        <img src="<?=base_url(); ?>public/images/icon/img-1.png" alt="Image 4"
                            class="img-fluid mx-auto " width="50%">
                    </div>

                    <div style="text-align:center">
                        <a href="#">Talent Retention</a>
                        <p>Offering an EWP
                            demonstrates a
                            commitment to employee
                            well-being, which can
                            enhance the employer
                            brand and attract top
                            talent. HR teams can
                            leverage our program to
                            differentiate their
                            organization in the
                            competitive talent market
                            and retain valuable
                            employees.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="e-table-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1 class="mb-3">Corporate Plan </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 table-responsive">
                <table class="table table-bordered text-center mt-5 mb-0">
                    <tr>
                        <td style="font-size:25px">Features</td>
                        <td style="width:150px">
                            <div class="sil-div">Silver</div>
                        </td>
                        <td style="width:150px">
                            <div class="gol-div">Gold</div>
                        </td>
                        <td style="width:150px">
                            <div class="pal-div">Platinum</div>
                        </td>

                    </tr>

                    <tr>
                        <td>otal Number of Sessions included in the package</td>
                        <td>
                            <div style="font-size:20px;font-weight:600">21</div>
                        </td>
                        <td>
                            <div style="font-size:20px;font-weight:600">51</div>
                        </td>
                        <td>
                            <div style="font-size:20px;font-weight:600">101</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Weekly Sessions</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>

                    <tr>

                        <td>Private One-on-One Counseling to Employee</td>
                        <td> <img src="<?=base_url(); ?>public/images/icon/shape.png" alt="Image 4"
                                class="img-fluid mx-auto " /></td>
                        <td>Top Leaders</td>
                        <td> <img src="<?=base_url(); ?>public/images/icon/next.png" alt="Image 4"
                                class="img-fluid mx-auto " /></td>

                    </tr>

                    <tr>

                        <td>Customized Nutritional Guidance to each employee</td>
                        <td> <img src="<?=base_url(); ?>public/images/icon/shape.png" alt="Image 4"
                                class="img-fluid mx-auto " /></td>
                        <td>Top Leaders</td>
                        <td><img src="<?=base_url(); ?>public/images/icon/next.png" alt="Image 4"
                                class="img-fluid mx-auto " /></td>

                    </tr>

                    <tr>
                        <td>Customization</td>
                        <td>Limited </td>
                        <td>Moderate</td>
                        <td>Fully customizable</td>


                    </tr>
                    <tr>
                        <td>Access to Exclusive Resources and full access to dashboard </td>
                        <td>HR Team Only</td>
                        <td>Top Leaders</td>
                        <td>Everyone</td>

                    </tr>

                    <tr>
                        <td>Progress Tracking and Reporting of each employee</td>
                        <td> <img src="<?=base_url(); ?>public/images/icon/shape.png" alt="Image 4"
                                class="img-fluid mx-auto " /></td>
                        <td>Top Leaders</td>
                        <td>Everyone</td>


                    </tr>

                    <tr>
                        <td>Suited For </td>
                        <td>Small Scale</td>
                        <td>Medium Scale </td>
                        <td>Large Scale</td>
                    </tr>

                </table>

                <div class="text-center mb-0">
                    <a class="btn quote-btn" href="">Customize your Plan</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="image-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1>Fortune 500 Titan Adopts EWP</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/google.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/per.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/tcs.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/godrej.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/ola.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
        </div>


        <div class="row mt-4">
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/tata.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/mahindra.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/mercedes.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/hdfc.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/itc.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/adani.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/asainpaint.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/zomato.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>
            <div class="col-lg-2"><img src="<?=base_url(); ?>public/images/icon/lupin.png" alt="Image 4"
                    class="img-fluid mx-auto " /></div>

        </div>
    </div>
</section>

<section class="move-section pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1>We move with you, going wherever you go</h1>
                <p style="font-size:18px;" class="mt-3">Experience the flexibility of streaming classes on your mobile
                    device ,Laptop or TV at your
                    convenience, anytime and anywhere, with our user-friendly platform available for Android, iPhone,
                    iPad, laptop, or TV.</p>

            </div>


        </div>


        <div class="row mt-4">
            <div class="col-lg-4">
                <img src="<?=base_url(); ?>public/images/icon/move1.png" alt="Image 4" class="img-fluid mx-auto "
                    width="100%" />
            </div>

            <div class="col-lg-4 text-center mt-0 mb-0">
                <img src="<?=base_url(); ?>public/images/icon/move2.png" alt="Image 4" class="img-fluid mx-auto "
                    width="60%" />
                <img src="<?=base_url(); ?>public/images/icon/move3.png" alt="Image 4" class="img-fluid mx-auto "
                    width="60%" />

            </div>

            <div class="col-lg-4">
                <img src="<?=base_url(); ?>public/images/icon/move4.png" alt="Image 4" class="img-fluid mx-auto "
                    width="100%" />
            </div>

        </div>
    </div>

</section>


<!-- <section class="faq-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1>FAQ's</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-2">
                <p><b>What is Enatyam's Employee Wellness Program (EWP)?</b> </p>
                <p>Answer: Enatyam's EWP is a comprehensive corporate wellness solution designed to promote physical
                    health,
                    mental clarity, and emotional resilience among employees through yoga and mindfulness practices.</p>


            </div>

            <div class="col-lg-12 mb-2">
                <p><b>How does the EWP benefit employees?
                    </b> </p>
                <p>Answer: The EWP benefits employees by reducing stress, improving focus and productivity, enhancing
                    overall
                    well-being, and fostering a positive work culture.</p>


            </div>

        </div>

    </div>

</section> -->
<?php include('Corporatefaq.php'); ?>

<section class="form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-0 mb-0">
                <h1>We're Just a Click Away: Connect Now</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img src="<?=base_url(); ?>public/images/icon/form-img.png" alt="Image 4" class="img-fluid mx-auto "
                    width="100%" />

            </div>

            <div class="col-lg-6 my-auto">

                <form>
                    <input type="text" class="form-control" placeholder="Name" />
                    <input type="text" class="form-control" placeholder="Company" />
                    <input type="email" class="form-control" placeholder="Official Email" />
                    <input type="text" class="form-control" placeholder="Mobile" />
                    <input type="text" class="form-control" placeholder="Sector" />

                    <div class="text-center mt-0">
                        <!-- <button class="btn quote-btn">Get Quote</button> -->
                        <button type="submit" class="btn quote-btn mt-4">Get Quote</button>
                    </div>


                </form>



            </div>

        </div>

    </div>

</section>




<?php include('footer.php'); ?>