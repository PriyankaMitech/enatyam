<?php include('header.php'); ?>


<section class="btnSection1 bookdemos">
    <div class="container container_bookdemo">
        <div class="typesOfYoga-tab">

            <div class="tab-content" id="pills-tabContent">
                <!-- Prenatal Yoga   -->
                <div class="tab-pane fade show active" id="pills-PrenatalYoga" role="tabpanel" aria-labelledby="pills-PrenatalYoga-tab">
                    <form action="<?php base_url(); ?>bookDemo" method="post" id="demobookingform">
                        <div class="row">

                            <div class="col-md-4">
                                <img src="public/images/dance1.jpg" class="danceimgbd">
                            </div>

                            <div class="col-md-8 text-left text-col tpm">
                                <h1 class="heading Title_main__VrmF4"> Book Free Online Trial Class.</h1>

                                <div class="row fetures text-white">
                                    <div class="col-md-3">
                                        <img class="fatures" src="public/images/instructors-svg.svg">
                                        <span>Top Instructors<span>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="fatures text-white" src="public/images/live.svg">
                                        <span>2 Live classes per week<span>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="fatures text-white" src="public/images/materials-svg.svg">
                                        <span>Revision Material<span>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="fatures text-white" src="public/images/certification-svg.svg">
                                        <span>Performance & Certificate<span>
                                    </div>
                                </div>
                                <div class="StickyAdsFooter_hr__Tx8qF hiddenXs"></div>

                                <div class="Step_step__mxxn1">Step
                                    <!-- -->1
                                    <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Student details</span>
                                </div>


                                <div class="row tpm">
                                    <span class="col-md-4 text-white fmname">Your name* :</span>
                                    <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                        <input type="text" name="name" value="">
                                        <span>

                                </div>

                                <div class="row tpm">
                                    <span class="col-md-4 text-white fmname">Email* :</span>
                                    <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                        <input type="email" name="email" value="">
                                        <span>

                                </div>


                                <!-- <div class="form-group"> -->

                                    <div class="row tpm">
                                        <label class="col-md-4 text-white fmname" for="mobile_no">Mobile No.<span class="required">*</span></label>
                                        <div class="col-md-2">
                                            <select name="telephone_country_code" class="form-control countrycode" id="telephoneCountryCode"></select>
                                        </div>
                                        <div class="col-md-6">
                                            <input required type="text" autocomplete="off" class="form-control" value="<?php echo set_value("mobile_number"); ?>" name="mobile_number" id="Code_MobileNo" placeholder="Enter Mobile No." onkeypress="$(this).val($(this).val().replace(/[^\d]/ig, ''))">
                                        </div>
                                    </div>
                                <!-- </div> -->

                                <div class="row tpm">
                                    <span class="col-md-4 text-white fmname">Age group* :</span>
                                    <span class="col-md-8">
                                        <button type="button" class="btn btn-primary ptage ageb active">Below 10
                                            Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">10-15 Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">16-25 Yrs</button>
                                        <button type="button" class="btn btn-primary ptage ageb">Above 25 Yrs</button>
                                    </span>
                                    <input type="hidden" id="ageInput" name="Age1">
                                </div>

                                <div class="row tpm">
                                    <span class="col-md-4 text-white fmname">Have you learned Any classes*:</span>
                                    <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                        <button type="button" class="btn btn-primary ptage classd active">Yes</button>
                                        <button type="button" class="btn btn-primary ptage classd">No</button>
                                    </span>
                                    <input type="hidden" id="statusc" name="exprience">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="Step_step__mxxn1 tpm">Step
                                <!-- -->2
                                <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Other Details</span>
                            </div>

                            <div class="row tpms">
                                <span class="col-md-4 text-white fmname">Select Country* : </span>

                                <div class="col-md-8 form-group slcsfieldsd ">
                                    <select class="form-control" id="inputCountry" name="Country">

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
                                <span class="col-md-4 text-white fmname">City* :</span>
                                <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                    <input type="text" name="city" value="">
                                    <span>
                            </div>

                            <div class="Step_step__mxxn1 tpm">Step
                                <!-- -->3
                                <!-- -->&nbsp;:&nbsp;&nbsp;&nbsp;<span>Choose a class</span>
                            </div>


                            <div class="row tpm">
                                <span class="col-md-4 text-white fmname">Please select course* :</span>

                                <div class="col-md-8 form-group " id="category_div">
                                    <select class="form-control" name="courses_id_d" id="courses_id_d" style="width: 100%;">
                                        <option>Please select course</option>
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
                                <span class="col-md-4 text-white fmname">Please select sub courses* :</span>
                                <div class="col-md-8 sub_category_div form-group" id="sub_category_div">
                                    <input type="hidden" id="selected_sub_courses_id_d" value="<?php if (isset($edit)) {
                                                                                                    echo ($edit['sub_courses_id_d']);
                                                                                                } ?>">
                                    <select name="sub_courses_id_d" id="sub_courses_id_d" class="form-control">
                                        <option value="">Please select sub courses</option>
                                    </select>
                                    <span style="color:red;" id="sub_coursespanid"></span>
                                </div>
                            </div>



                            <div class="row tpm">
                                <span class="col-md-4 text-white fmname">Demo Class Date:* :</span>
                                <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                    <input type="date" name="Book_Date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" value="">
                                    <span>

                            </div>
                            <!-- <div class="row tpm">
                                                <span class="col-md-4 text-white fmname">Start Time:* :</span>
                                                <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                                    <input type="time" name="Start_Time" value="" >                                      
                                                <span>
                                            </div> -->
                            <!-- <div class="row tpm">
                                                <span class="col-md-4 text-white fmname">End Time:* :</span>
                                                <span class="col-md-8 BookingSecondPage_formInput__n8MhF">
                                                    <input type="time" name="End_Time" value="" >                                      
                                                <span>
                                            </div> -->

                            <div class="BookingSecondPage_stickyBottom__G_tzG tpm">
                                <div class="text-white tpm">
                                    By Confirming, you give consent to receiving Calls and WhatsApp messages from
                                    Enatyam.
                                </div>
                                <div class="tpm">
                                    <button type="submit" class="btn btn-success changec">Confirm Booking</button>
                                </div>

                            </div>
                        </div>
                </div>
            </div>

      

  
            </form>

        </div>

    </div>

</section>





<?php include('footer.php'); ?>
