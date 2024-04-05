<?php include('header.php'); ?>
<style>
select {
  width: 200px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  appearance: none; /* Removes default dropdown arrow */
  -webkit-appearance: none; /* For older versions of Chrome/Safari */
  -moz-appearance: none; /* For older versions of Firefox */
}

select::-ms-expand {
  display: none; /* Hides arrow on Internet Explorer/Edge */
}

/* Styling the selected option */
select option:checked {
  background-color: #ff1561 !important;
  color: #fff!important;
}

/* Styling the dropdown options on hover */
/* This won't work reliably across all browsers */
select option:hover {
  background-color: #ff1561!important;
  color: #fff!important;
}



select option:checked {
    background-color: #ff1561 !important; /* Your desired color */
    color: white; /* Text color for better visibility */
}

select:hover option:hover {
    background-color: red !important;
    color: white;
}

/* Define the color for the first option */
select option:first-child {
    background-color: #ff1561; /* Your desired color */
    color: white; /* Text color for better visibility */
}



.form-control:focus {
color: #000 !important;
    border-color: #e9175b !important;

    box-shadow: 0 0 0 0.25rem #ff006738 !important;
}

select{
    cursor: pointer
}

input[type="date"] {
    cursor: pointer;
}


.body-content img {
    border-radius: 100%;
   width: 100%;
}



.whatdssaus-body {
        display: flex;
        align-items: center; /* Center vertically */
        justify-content: center; /* Center horizontally */
        text-align: center; /* Center text horizontally */
    }

    .whatdssaus-body .body-content {
        display: flex;
        align-items: center; /* Center vertically */
        justify-content: center; /* Center horizontally */
        text-align: left; /* Reset text alignment */
    }

.whatdssaus .whatdssaus-header h5{
text-align:center;
}
.whatdssaus .whatdssaus-header .imgs{
text-align:center;
}
.userimage{
padding: 10px;
}
.userdata{
    padding: 10px;
}
.userdata p {
    text-align :center;
}
.whatdssaus{
    background-color: #6e5c50;
    padding: 10px;
    border-radius: 10px;
}
.whatdssausdata {
    padding: 10px;
}
.whatdssaus .userimage h6{
    padding: 10px 0px;
text-align:center;
}
.heading {
    text-align:center;
}
.imgs{
    text-align:center;
  
}
.scondsection{
    padding: 10px;
}
.imgs img{
    width: 100%;
}
.starcolor{
    color: #fad32c !important;
}
.topfeatures .bfdf{
padding: 5px;
}
.topfeatures {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bfdf {
        text-align: center;
    }
    .fatures {
        width: 18%;
        height: auto; /* Adjust as needed */
        display: block;
        margin: 0 auto; /* Centers the image horizontally */
    }

</style>

<section class="btnSection1 bookdemos">
    <div class="container container_bookdemo">
        <div class="typesOfYoga-tab">

            <div class="tab-content" id="pills-tabContent">
                <!-- Prenatal Yoga   -->
                <div class="tab-pane fade show active" id="pills-PrenatalYoga" role="tabpanel" aria-labelledby="pills-PrenatalYoga-tab">
                    <form action="<?php base_url(); ?>bookDemo" method="post" id="demobookingform">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-16 whatdssausdata">
                                <div class="whatdssaus">
                                    <div class="whatdssaus-header">
                                        <h5 class="text-white ">What do students say about us?</h5>
                                        <div class="imgs">
                                            <img src="<?=base_url(); ?>public/images/boarder1.webp" alt="Image Description">
                                        </div>
                                       
                                    </div>
                                    <div class="whatdssaus-body">
                                        <div class="body-content row">
                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/18h.webp" alt="Image Description">
                                                <h6 class="text-white ">Isabella (USA)</h6>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    Being an English speaker, my fondness for Krishna
                                                    led me to Kathak with Enatyam. Their platform
                                                    made my Kathak journey incredibly easy to follow.
                                                    It seamlessly blends tradition with accessibility,
                                                    it's like diving into the exciting world of Kathak
                                                    without any hassle.
                                                </p>
                                            </div>

                                           
                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    For the past year and a half, I've been learning
                                                    Kathak from Priti Singh, and I'm incredibly
                                                    grateful. Priti's graceful teaching style and deep
                                                    knowledge of the subject make each session
                                                    interesting and well-rounded. Her online lessons,
                                                    coupled with flexible scheduling, have made my
                                                    learning journey both convenient and enriching
                                                </p>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/17h.webp" alt="Image Description">
                                                <h6 class="text-white ">Smitha (UK )</h6>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/12h.webp" alt="Image Description">
                                                <h6 class="text-white ">Scarlett Family (Germany )</h6>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    As a father, seeing my kids enjoy Enatyam's
                                                    Bollywood dance classes is heartwarming. The
                                                    instructors create an environment where learning
                                                    feels like play. It's like they've turned our living
                                                    room into a dance party.
                                                </p>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    As a father, seeing my kids enjoy Enatyam's
                                                    Bollywood dance classes is heartwarming. The
                                                    instructors create an environment where learning
                                                    feels like play. It's like they've turned our living
                                                    room into a dance party.

                                                </p>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/19h.webp" alt="Image Description">
                                                <h6 class="text-white ">Kiran (Sweden)</h6>
                                            </div>


                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/20h.webp" alt="Image Description">
                                                <h6 class="text-white ">James W (USA )</h6>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    Enatyam is revolutionizing the scene with its
                                                    accessible yoga classes. Instructors don't just
                                                    target the physical side but also stress the mental
                                                    benefits of consistent yoga practice
                                                </p>
                                            </div>

                                           

                                            

                                            <div class="col-lg-8 col-md-6 col-8 userdata">
                                                <p class="text-white ">
                                                    I appreciate how Enatyam's yoga classes cater to
                                                    various levels. Whether you're a beginner or an
                                                    experienced yogi, there's always room for growth.
                                                    The instructors make sure everyone feels
                                                    welcome
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-4 userimage">
                                                <img src="<?=base_url(); ?>public/images/happyfaces/11h.webp" alt="Image Description">
                                                <h6 class="text-white ">Kajal (Delhi )</h6>
                                            </div>

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 text-left text-col tpm scondsection">
                                <h1 class="heading Title_main__VrmF4"> Book Free Online Trial Class</h1>
                                <div class="imgs">
                                            <img src="<?=base_url(); ?>public/images/boarder1.webp" alt="Image Description">
                                </div>
                                <div class="row fetures text-white topfeatures">
                                    <div class="col-lg-3 col-md-6 col-6 bfdf">
                                        <img class="fatures" src="public/images/instructors-svg.svg">
                                        <span>Top Instructors</span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6 bfdf">
                                        <img class="fatures text-white" src="public/images/live.svg">
                                        <span>2 Live Classes Per Week</span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6 bfdf">
                                        <img class="fatures text-white" src="public/images/materials-svg.svg">
                                        <span>Revision Material</span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6 bfdf">
                                        <img class="fatures text-white" src="public/images/certification-svg.svg">
                                        <span>Performance & Certificate</span>
                                    </div>
                                </div>
                                <div class="StickyAdsFooter_hr__Tx8qF hiddenXs"></div>
                                <small class="smallnotedemo">Note : All fields are mandatory</small>


                                <div class="Step_step__mxxn1">Step
                                    <!-- -->1
                                    <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Student Details :-</span>
                                </div>


                                <div class="row tpm">
                                    <span class="col-lg-4 col-md-12 col-12 text-white fmname">Your Name :</span>
                                    <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF">
                                        <input type="text" name="name" value="">
                                    </span>

                                </div>

                                <div class="row tpm">
                                    <span class="col-lg-4 col-md-12 col-12 text-white fmname">Email :</span>
                                    <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF">
                                        <input type="email" name="email" value="" id="demoemail">
                                        <span id="demoemailError"></span>



                                </div>
                      

                                <div class="row tpm">
                                    <span class="col-lg-4 col-md-12 col-12 text-white fmname">Password :</span>
                                    <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF">
                                        <input type="password" name="password" value="">
                                        <br>
                                        <small class="smallnotedemo">(8 characters -1 uppercase, 1 lowercase, 1 numeric, 1 special character)</small>
                                    </span>
                                       

                                </div>





                                <div class="row tpm">
                                    <label class="col-lg-4 col-md-12 col-12 text-white fmname" for="mobile_no">Mobile No. :</label>
                                    <div class="col-lg-2 col-md-4 col-4 seletbook">
                                        <select name="telephone_country_code" class="form-control countrycode" id="telephoneCountryCode"></select>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-8 seletbook">
                                        <input required type="text" autocomplete="off" id="demoMobileNo" class="form-control" value="<?php echo set_value("mobile_number"); ?>" name="mobile_number" id="Code_MobileNo" placeholder="Enter Mobile No." onkeypress="$(this).val($(this).val().replace(/[^\d]/ig, ''))">
                                        <span id="demoMobileNoError"></span>
                                       
                                       
                              
                                    </div>

                                    <div class="col-lg-4" >
                                    </div>
                                    <div class="col-lg-8 " >
                                    <input type='hidden' name="register_id" id="register_id" >
                                        <input type="text" name="otpdemo" id="otpdemo" class="form-control d-none" placeholder="Enter otp">
                                        <span class="error" id="otpErrordemo" class="error"></span>
                                    </div>
                                    <div class="col-lg-8" >
                                    </div>
                                    <div class="col-lg-4" >
                                        <button type="button"  id="verifyPhoneNumberBtn" class="btn btn-primary active">Verify Phone Number</button>
                                    </div>
                                </div>
                                <!-- </div> -->

                                <div class="row tpm">
                                    <span class="col-lg-4 col-md-12 col-12 text-white fmname">Age Group :</span>
                                    <span class="col-lg-8 col-md-12 col-12 seletbook">
                                        <button type="button" class="btn btn-primary ptage ageb active">Below 10
                                            Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">10-15 Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">16-25 Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">Above 25 Yrs</button>
                                    </span>
                                    <input type="hidden" id="ageInput" name="Age1">
                                </div>

                                <div class="row tpm">
                                    <span class="col-lg-4 col-md-12 col-12 text-white fmname">Have you learned any Classes*:</span>
                                    <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF seletbook">
                                        <button type="button" class="btn btn-primary ptage classd active">Yes</button>
                                        <button type="button" class="btn btn-primary ptage classd">No</button>
                                    </span>
                                    <input type="hidden" id="statusc" name="exprience">
                                </div>
                            
                            <div class="Step_step__mxxn1 tpm">Step
                                <!-- -->2
                                <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Other Details :-</span>
                            </div>

                            <div class="row tpm">
                                <span class="col-lg-4 col-md-12 col-12 text-white fmname">Select Country : </span>

                                <div class="col-lg-8 col-md-12 col-12 ">
                                    <select class="form-control" id="inputCountry" name="Country" >

                                        <option value="">Select Country</option>
                                        <?php if (!empty($country_data)) { ?>
                                            <?php foreach ($country_data as $data) : ?>
                                                <option value="<?= $data->name; ?>">
                                                    <?= $data->name; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php } ?>

                                        <span style="color:red;" id="Countryspanid">

                                        </span>


                                    </select>
                                    <span style="color:red;" id="Countryspanid"></span>

                                </div>

                            </div>
                            <div class="row tpm">
                                <span class="col-lg-4 col-md-12 col-12 text-white fmname">City :</span>
                                <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF">
                                    <input type="text" name="city" value="">
                                    <span>
                            </div>

                            <div class="Step_step__mxxn1 tpm">Step
                                <!-- -->3
                                <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Choose a Class :-</span>
                            </div>


                            <div class="row tpm">
                                <span class="col-lg-4 col-md-12 col-12 text-white fmname">Please select course :</span>


                                <div class="col-lg-8 col-md-12 col-12 form-group seletbook" id="category_div">
                                    <select class="form-control" name="courses_id_d" id="courses_id_d"
                                        style="width: 100%;">

                                        <option>Please select Course</option>
                                        <?php if (!empty($courses_data)) { ?>
                                            <?php foreach ($courses_data as $data) { ?>
                                                <option value="<?= $data->id; ?>" <?php if ((!empty($single_data)) && $single_data->courses_id === $data->id) {
                                                                                        echo 'selected';
                                                                                    }
                                                                                    ?>>
                                                    <?= $data->courses_name; ?>
                                                </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <span style="color:red;" id="coursespanid"></span>
                                </div>
                            </div>
                            <div class="row tpm">

                                <span class="col-lg-4 col-md-12 col-12 text-white fmname">Please select sub courses :</span>
                                <div class="col-lg-8 col-md-12 col-12 sub_category_div form-group seletbook"  id="sub_category_div">
                                    <input type="hidden" id="selected_sub_courses_id_d"
                                        value="<?php if (isset($edit)) {echo ($edit['sub_courses_id_d']);} ?>">

                                    <select name="sub_courses_id_d" id="sub_courses_id_d" class="form-control">
                                        <option value="">Please select sub courses</option>
                                    </select>
                                    <span style="color:red;" id="sub_coursespanid"></span>
                                </div>
                            </div>



                            <div class="row tpm">


                                <span class="col-lg-4 col-md-12 col-12 text-white fmname">Demo Class Date :</span>
                                <span class="col-lg-8 col-md-12 col-12 BookingSecondPage_formInput__n8MhF">

                                    <input type="date" name="Book_Date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                                        value="">

                                    <span>

                            </div>
                            <div class="row tpm">

                            <span class="col-lg-12 col-md-12 col-12 text-white fmname"> Demo Timing -  We'll reach out soon to find the best time for you.</span>
                            
                            </div>
                            <div class="BookingSecondPage_stickyBottom__G_tzG tpm row showdiv">
                                <div class="text-white tpm col-lg-12 col-md-12 col-12 p-2">
                                    By Confirm, you agree to receive calls and WhatsApp messages from Enatyam.
                                    No time zone worries—we'll handle it! Calls or WhatsApp between 8 AM to 8 PM
                                    your time.We won't be crashing into your dreamland adventures with our calls
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success changec d-none">Confirm Booking</button>
                                    </div>
                            </div>
                        </div>
                            </div>
                            <div class="BookingSecondPage_stickyBottom__G_tzG tpm row hidediv">

                                <div class="text-white tpm col-lg-12 col-md-12 col-12 p-2">
                                        By Confirm, you agree to receive calls and WhatsApp messages from Enatyam.
                                        No time zone worries—we'll handle it! Calls or WhatsApp between 8 AM to 8 PM
                                        your time.We won't be crashing into your dreamland adventures with our calls
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success changec d-none" id="signupbtndemo" value="Confirm Booking">Confirm Booking</button>
                                </div>
                            </div>
                       
                </div>
            </div>

      

  
            </form>

        </div>

    </div>

</section>





<?php include('footer.php'); ?>
