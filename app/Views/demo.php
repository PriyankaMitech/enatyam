<?php include('header.php'); ?>
<div class="demo_page">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="steps stepsdemo">
                <progress id="progress" class="progressbar" value=0 max=100></progress>
                <div class="step-item">
                    <button class="step-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1
                    </button>
                    <div class="step-title">
                        First Step
                    </div>
                </div>
                <!-- <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2
                    </button>
                    <div class="step-title">
                        Second Step
                    </div>
                </div> -->
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        2
                    </button>
                    <div class="step-title">
                        Second Step

                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        3
                    </button>
                    <div class="step-title">
                        Third Step
                    </div>
                </div>

            </div>
            <form action="<?php base_url(); ?>bookDemo" method="post">
                <div class="card cards">
                    <div id="headingOne">
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="col-lg-12 " style="padding-left:0px" width="100%">
                                <div class="demo-form">
                                    <div class="position-relative">
                                        <h5 class="title">
                                            <u>Free Demo Class</u>
                                        </h5>
                                        <div class="f-info demofdc">
                                            <div>
                                                <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="name" placeholder="Your Name *" value="" type="text" name="name">
                                                <span style="color:red;" id="namespanid"></span> </span>
                                            </div>

                                            <!-- <div>
                                                    <input class="form-control" size="40" aria-required="true"
                                                        aria-invalid="false" id="email" placeholder="Email *" value=""
                                                        type="email" name="email">
                                                    <span style="color:red;" id="emailspanid"></span>
                                                </div> -->
                                            <div>
                                                <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="Inputemail" placeholder="Email *" value="" type="email" name="email">
                                                <span style="color:red;" id="emailspanid"></span>
                                            </div>

                                            <div>
                                                <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="phone1" pattern="[0-9]{10}" placeholder="Phone *" value="" type="tel" name="phone" required>
                                                <span style="color:red;" id="phonespanid"></span>
                                            </div>

                                            <div class="form-group" id="category_div">
                                                <select class="form-control" name="courses_id_d" id="courses_id_d" style="width: 100%;">
                                                    <option>Please select course</option>
                                                    <?php if (!empty($courses_data)) { ?>
                                                        <?php foreach ($courses_data as $data) { ?>

                                                            <option value="<?= $data->id; ?>" <?php if ((!empty($single_data)) && $single_data->courses_id === $data->id) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                                <?= $data->courses_name; ?>
                                                            </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <span style="color:red;" id="coursespanid"></span>
                                            </div>
                                            <!-- </div> -->
                                            <div class="sub_category_div form-group" id="sub_category_div">
                                                <input type="hidden" id="selected_sub_courses_id_d" value="<?php if (isset($edit)) {
                                                                                                                echo ($edit['sub_courses_id_d']);
                                                                                                            } ?>">
                                                <select name="sub_courses_id_d" id="sub_courses_id_d" class="form-control">
                                                    <option value="">Please select sub courses</option>

                                                </select>
                                                <span style="color:red;" id="sub_coursespanid"></span>
                                            </div>
                                            <div>
                                                <!-- <input class="form-group-submit" type="submit" value="Next"> -->
                                                <div style="text-align: center;">
                                                    <input class="btn btnstart saveEnrollTopic" onclick="handleSubmit('collapseOne')" data-bs-target="#collapseTwo" type="button" name="next" value="Next" />

                                                    <!-- <a onclick="handleSubmit()" class="btn btnstart saveEnrollTopic"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo">Next</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card cards">
                    <div id="headingTwo">

                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="card-body">

                            <input type="hidden" value="9182491" name="id" id="branchTopic">
                            <input type="hidden" name="totalStudent-9182491" id="totalStudent9182491" value="1">
                            <input type="hidden" name="increment-9182491" id="increment-9182491" value="0">
                            <input type="hidden" id="cityName" value="">
                            <input type="hidden" name="fromPage" value="enrollMainTopicDetails">


                            <div id="288-9182491" class="topicAttributeContainer container ">

                                <div class="col-lg-12 " style="padding-left:0px" width="100%">

                                    <div class="demo-form">
                                        <div class="position-relative">
                                            <h5 class="title">
                                                <u>What would you like to Learn?</u>
                                            </h5>

                                            <div class="f-info">
                                                <ul class="greenCheckbox multiSelectContainer scrollForAttribute mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                                                    <div id="mCSB_1" class="mCustomScrollBox mCS-light3 mCSB_vertical mCSB_inside" tabindex="0">
                                                        <div style="text-align: center;">
                                                            <!-- <input class="btn btnstart saveEnrollTopic" onclick="handlePrevious('collapseTwo')" type="button" name="previous" value="Previous" /> -->
                                                            <input class="btn btnstart saveEnrollTopic" onclick="handleSubmit('collapseTwo')" type="button" name="next" value="Next" />
                                                            <!-- <a onclick="handleSubmit()"
                                                                    class="btn btnstart saveEnrollTopic"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree">Next</a> -->
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light3 mCSB_scrollTools_vertical" style="display: none;">
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;">
                                                                    <div class="mCSB_dragger_bar" style="line-height: 30px;">
                                                                    </div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card cards">
                    <div id="headingThree">

                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="demo-form">
                                <div class="position-relative">
                                    <h5 class="title">
                                        <u>Select Your Age</u>
                                    </h5>

                                    <div class="f-info syademo">
                                        <ul class="greenCheckbox multiSelectContainer row">
                                            <li class="col-md-6">
                                                <label>
                                                    <input type="radio" class="checkboxCondition" name="Age1" value="Below 10 yrs"><span></span>
                                                    Below 10 yrs
                                                </label>
                                            </li>
                                            <li class="col-md-6">
                                                <label>
                                                    <input type="radio" class="checkboxCondition" name="Age1" value="10 yrs to 15 yrs"><span></span>
                                                    10 yrs to 15 yrs
                                                </label>
                                            </li>
                                            <!-- Add more li elements as needed with the col-md-6 class -->
                                            <li class="col-md-6">
                                                <label>
                                                    <input type="radio" class="checkboxCondition" name="Age1" value=" 16 yrs to 25 yrs"><span></span>
                                                    16 yrs to 25 yrs
                                                </label>
                                            </li>
                                            <li class="col-md-6">
                                                <label>
                                                    <input type="radio" class="checkboxCondition" name="Age1" value="Above 25 yrs"><span></span>
                                                    Above 25 yrs
                                                </label>
                                            </li>
                                        </ul>
                                        <span style="color:red;" id="Agespanid"></span>

                                        <div class="About">
                                            <div>
                                                <h5>If you learned Any classes :</h5>
                                                <label for="radio">
                                                    <input type="radio" class="radioCondition" name="exprience" value="Yes">Yes
                                                </label>
                                                <label for="radio">
                                                    <input type="radio" class="radioCondition" name="exprience" value="No">No
                                                </label>
                                                <br>
                                                <span style="color:red;" id="expriencespanid"></span>
                                            </div>
                                            <div class="exprience-details" style="display: none;">
                                                <h5>Write here what you learned in Previous class:</h5>
                                                <input type="text" class="md-6" name="information" id="information" placeholder="ex:-bollywood dance">
                                                <span style="color:red;" id="informationspanid"></span>
                                            </div>
                                        </div>

                                        <div style="text-align: center;">
                                            <input class="btn btnstart saveEnrollTopic" onclick="handleSubmit('collapseThree')" type="button" name="next" value="Next" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cards">
                    <div id="headingFour">
                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="card-body">

                            <div class="demo-form">
                                <div class="position-relative">
                                    <h5 class="title">
                                        <u>Select Your Locality</u>
                                    </h5>
                                    <div class="f-info syldemo">


                                        <!-- <div class="form-group slcsfieldsd col-md-10">

                                            <select id="countryDropdown">
                                                <option value="">Select Country</option>
                                            </select>

                                            <select id="stateDropdown">
                                                <option value="">Select State</option>
                                            </select>

                                            <select id="cityDropdown">
                                                <option value="">Select City</option>
                                            </select>

                                        </div> -->


                                        <div class="form-group slcsfieldsd col-md-10">
                                            <label for="inputcountry">Country:</label>
                                            <select class="form-select" id="inputCountry" name="Country">
                                                <!-- <option value="SelectCountry">Select Country</option> -->
                                                <!-- <option value="Bharat">Bharat</option> -->
                                                <option value="">Select Country</option>
                                                <!-- JavaScript will populate this list -->
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
                                        <div class="form-group slcsfieldsd col-md-10">
                                            <label for="State">State:</label>
                                            <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="State" placeholder="Enter Your State" value="" type="text" name="State">
                                            <span style="color:red;" id="Statespanid"></span>
                                        </div>

                                        <div class="form-group slcsfieldsd col-md-10">
                                            <label for="state">District:</label>
                                            <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="District" placeholder="Enter Your District" value="" type="text" name="District">
                                            <span style="color:red;" id="Districtspanid"></span>
                                        </div>
                                        <!-- <div class="form-group slcsfieldsd col-md-10">
                                            <label for="inputState">State:</label>
                                            <select class="form-select" id="inputState" name="State">
                                                <option value="SelectState">Select State</option>
                                                <option value="Andra Pradesh">Andra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh
                                                </option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh
                                                </option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir
                                                </option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madya Pradesh">Madya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttaranchal">Uttaranchal</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                                <option disabled style="background-color:#aaa; color:#fff">
                                                    UNION
                                                    Territories
                                                </option>
                                                <option value="Andaman and Nicobar Islands">Andaman and
                                                    Nicobar Islands
                                                </option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar
                                                    Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadeep">Lakshadeep</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                            </select>

                                            <span style="color:red;" id="Statespanid">

                                            </span>
                                        </div> -->
                                        <!-- <div class="form-group slcsfieldsd col-md-10">
                                            <label for="inputDistrict">District:</label>
                                            <select class="form-select" id="inputDistrict" name="District">
                                                <option value="">Select District</option>
                                            </select>

                                            <span style="color:red;" id="Districtspanid"></span>
                                        </div> -->
                                        <div class="date_time">
                                            <p>Choose your Demo Class Date & Time</p>

                                            <label for="demo_class_date">Demo Class Date:</label>
                                            <input class="form-control" type="date" id="demo_class_date" name="Book_Date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" required>

                                            <label for="start-time">Start Time:</label>
                                            <input class="form-control" type="time" name="Start_Time" required>

                                            <label for="end-time">End Time:</label>
                                            <input class="form-control" type="time" name="End_Time" required>

                                            <span style="color:red;" id="demo_class"></span>
                                        </div>

                                        <input class="form-group-submit bookdemosubmit" type="submit" value="Book Demo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>