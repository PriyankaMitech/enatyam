<?php include('header.php'); ?>


<section class="contactus">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1><b>Career</b></h1>
            </div>
        </div>
    </div>
</section>
<section class="cont-main-section">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-ul">
                    <li>
                        <a href="<?php echo base_url('/'); ?>">Home</a>
                    </li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                        Career
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="career-main-section ">
    <div class="container ">
 
        <div class="row">
            <h3 class="text-center">If teaching and arts are your passions: join us now ! </h3>
            <div class="col-md-6 col-12">
                <img src="public/images/guitar.jpg" class="danceimg1 home">
            <!-- public/images/Home/4.png -->
            </div>

            <div class="col-md-6 col-12 text-col mt-5">
                <h5 class="heading">Leave everything else to us if you can tick right</h5>
             
                    <ul class="list-unstyled">
                        <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> Master's degree in performing arts (Dance ,Music or Yoga )</li>
                        <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> Passionate about teaching</li>
                        <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> Reliable internet connectivity </li>
                        <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> Willingness to work in flexible hours</li>
                    </ul>
                    
                

                        <input class="btn btnstart btnc" onclick="showcarier()" type="button"  value="Join Now" />

            </div>

            <div class="demo_page" id="carier" style="display:none">
    <div class="container Faculty demopage">
        <div class="accordion" id="accordionExample">
            <!-- <div class="steps">
                <progress id="progress" class="progressbarcarrier" value=0 max=100></progress>
                <div class="step-item">
                    <button class="step-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1
                    </button>
                    <div class="step-title">
                        First Step
                    </div>
                </div>
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


            </div> -->
            <form action="<?php echo base_url(); ?>carrier_h" method="post" enctype="multipart/form-data">
                <div class="card cards">
                    <div id="headingOne">
                    </div>
                    <!-- gfffdfdggdfsdgsagsgsgsgggdgdfggdggdggegdgggggsgsddfsdfsfsdggsddggdsgdfggddgdgfg -->
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="col-lg-12 " style="padding-left:0px" width="100%">
                                <div class="demo-form">
                                    <div class="position-relative">
                                        <h5 class="title">
                                            <u>Personal Information</u>
                                        </h5>
                                        <div class="f-info uploadinfo">
                                            <div>
                                                <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="name" placeholder="Your Name *" value="" type="text" name="name">
                                                <span style="color:red;" id="namespanid"></span> </span>
                                            </div>
                                            <div>
                                                <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="femail" placeholder="Email *" value="" type="email" name="email">
                                                <span style="color:red;" id="emailspanid"></span>
                                            </div>
                                           
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select name="countrie_code" class="form-control countrycode"
                                                id="phoneCountryCode"></select>
                                            </div>
                                            <div class="col-md-8">
                                                <input required type="text" autocomplete="off" class="form-control"
                                                value="<?php echo set_value("mobile_number");?>" name="mobile_number"
                                                id="code_mobileNo" placeholder="Enter your whatsapp number"
                                                onkeypress="$(this).val($(this).val().replace(/[^\d]/ig, ''))">
                                                <span id="mobile_noError" class="error"></span>
                                            </div>
                                        </div>
                           

                                        <div>
                                            <select class="form-control" name="courses" id="courses">
                                                <option>Please select course</option>
                                                    <?php if (!empty($courses_data)) { ?>
                                                        <?php foreach ($courses_data as $data) { ?>
                                                            <option value="<?= $data->id; ?>" <?php if ((!empty($single_data)) && $single_data->courses_id_g === $data->id) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                                <?= $data->courses_name; ?>
                                                            </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <span style="color:red;" id="coursespanid"></span>
                                        </div>
                                        <div>
                                            <input type="hidden" id="selected_sub_courses" value="<?php if (isset($single_data)) {
                                                                                                            echo ($single_data->sub_courses_id_g);
                                                                                                        } ?>">
                                            <select name="sub_courses" id="sub_courses" class="form-control">
                                                <option value="">Please select sub courses</option>
                                            </select>
                                            <span style="color:red;" id="subcoursespanid"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your profile photo:</label>
                                            <input type="file" accept="image/jpeg, image/png" name="profile_photo">
                                        </div>
                                        <div>
                                            <div style="text-align: center;">

                                                <input class="btn btnstart saveEnrollTopic" onclick="handleSubmit('collapseOne')" data-bs-target="#collapseTwo" type="button" name="next" value="Next" />
                                                    <!-- 
                                                    <button class="btn btnstart saveEnrollTopic" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" onclick="handleSubmit('collapseOne')" aria-expanded="false" aria-controls="collapseThree">
                    Next
                    </button>   -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- gfffdfdggdfsdgsagsgsgsgggdgdfggdggdggegdgggggsgsddfsdfsfsdggsddggdsgdfggddgdgfg -->

                </div>

                <div class="card cards">
                    <div id="headingThree">

                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="demo-form">
                                <div class="position-relative">
                                    <h5 class="title">
                                        <u>Education details</u>
                                    </h5>
                                    <div class="f-info uploadinfo">
                                        <div>
                                            <p>Education</p>
                                            <select class="form-control dropdown" id="education" name="education">
                                                <option value="" selected="selected" disabled="disabled">-- select one
                                                    --</option>
                                                <option value="No formal education">No formal education</option>
                                                <option value="Primary education">Primary education</option>
                                                <option value="Secondary education">Secondary education or high school
                                                </option>
                                                <option value="GED">GED</option>
                                                <option value="Vocational qualification">Vocational qualification
                                                </option>
                                                <option value="Bachelor's degree">Bachelor's degree</option>
                                                <option value="Master's degree">Master's degree</option>
                                                <option value="Doctorate or higher">Doctorate or higher</option>
                                            </select>
                                            <span id="educationError" style="color: red;"></span>
                                        </div>

                                        <div>
                                            <p>Experience </p>
                                            <select class="form-control dropdown" id="experience" name="experience">
                                                <option value="" selected="selected" disabled="disabled">Please select
                                                </option>
                                                <option value="0-1">0-1</option>
                                                <option value="1-2">1-2</option>
                                                <option value="2-3">2-3</option>
                                                <option value="Above-3">Above-3</option>
                                            </select>
                                            <span id="experienceError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your CV:</label>
                                            <input type="file" accept="application/pdf" name="cvFile">
                                            <span id="cvFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your Education certificates:</label>
                                            <input type="file" accept="application/pdf" name="educationCertificateFile">
                                            <span id="educaionCertificateFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your course related certificates:</label>
                                            <input type="file" accept="application/pdf" name="courseCertificateFile">
                                            <span id="courseCertificateFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your videos:</label>
                                            <input type="file" accept="video/mp4, video/webm, video/ogg" name="videos">
                                            <span id="videosError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your Images:</label>
                                            <input type="file" accept="image/jpeg, image/png" name="img">
                                            <span id="imgError" style="color: red;"></span>
                                        </div>

                                        <div style="text-align: center;">
                                            <input class="btn btnstart saveEnrollTopic" onclick="handleSubmit('collapseFour')" type="button" name="next" value="Next" />
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
                                    <div class="f-info slcs">
                                        <div class="form-group slcsfields col-md-10">
                                            <label for="inputcountry">Country:</label>
                                            <select class="form-control" id="inputCountry" name="Country">
                                                <!-- <option value="SelectCountry">Select Country</option>
                                                <option value="Bharat">Bharat</option> -->
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
                                        </div>

                                        <div class="form-group slcsfields col-md-10">
                                            <label for="State">State:</label>
                                            <input class="form-control" aria-required="true" aria-invalid="false" id="State" placeholder="Enter Your State" value="" type="text" name="State">
                                            <span style="color:red;" id="Statespanid"></span>
                                        </div>

                                        <div class="form-group slcsfields col-md-10">
                                            <label for="state">District:</label>
                                            <input class="form-control" size="40" aria-required="true" aria-invalid="false" id="District" placeholder="Enter Your District" value="" type="text" name="District">
                                            <span style="color:red;" id="Districtspanid"></span>
                                        </div>
                                        
                                        <div>
                                            <input class="form-group-submit" type="submit" value="Apply Now">
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


        </div>
    </div>
</section>

<!-- <section class="career-main-section pt-0 mt-5">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Steps to become a Faculty</h3>
                <p class="text-grey">Lorem ipsum dolor sit amet, consectetur</p>
                <span class="line"> </span>
            </div>
        </div>
    </div>
</section> -->


<div class="container rcbtn">
    <div class="row">
        <div class="col-lg-12 nsrad">

            <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request">Not sure ?? Request a call
                back</a>
        </div>
    </div>
</div>




<?php include('footer.php'); ?>