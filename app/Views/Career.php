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
                        <a href="<?php echo base_url('home'); ?>">Home</a>
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
            <div class="col-lg-12 text-center aanidiv">

                <h3>Apply An Instructor
                </h3>
                <p class="text-grey">Lorem ipsum dolor sit amet, consectetur

                </p>
                <span class="line"> </span>
                <p class="light-grey">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis
                    dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </p>
            </div>
        </div>
    </div>


</section>


<section class="career-main-section pt-0">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h3>Steps to become a Faculty

                </h3>
                <p class="text-grey">Lorem ipsum dolor sit amet, consectetur

                </p>
                <span class="line"> </span>
            </div>


        </div>
    </div>
</section>

<div class="demo_page">
    <div class="container Faculty demopage">
        <div class="accordion" id="accordionExample">
            <div class="steps">
                <progress id="progress" class="progressbarcarrier" value=0 max=100></progress>
                <div class="step-item">
                    <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1
                    </button>
                    <div class="step-title">
                        First Step
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        2
                    </button>
                    <div class="step-title">
                        Second Step
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        3
                    </button>
                    <div class="step-title">
                        Third Step
                    </div>
                </div>


            </div>
            <form action="<?php echo base_url(); ?>carrier_h" method="post" enctype="multipart/form-data">
                <div class="card cards">
                    <div id="headingOne">
                    </div>


                    <!-- gfffdfdggdfsdgsagsgsgsgggdgdfggdggdggegdgggggsgsddfsdfsfsdggsddggdsgdfggddgdgfg -->
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="col-lg-12 " style="padding-left:0px" width="100%">



                                <div class="demo-form">
                                    <div class="position-relative">
                                        <h5 class="title">
                                            <u>Personal Information</u>
                                        </h5>
                                        <div class="f-info">
                                            <div>
                                                <input class="form-control" size="40" aria-required="true"
                                                    aria-invalid="false" id="name" placeholder="Your Name *" value=""
                                                    type="text" name="name">
                                                <span style="color:red;" id="namespanid"></span> </span>
                                            </div>

                                            <div>
                                                <input class="form-control" size="40" aria-required="true"
                                                    aria-invalid="false" id="femail" placeholder="Email *" value=""
                                                    type="email" name="email">
                                                <span style="color:red;" id="emailspanid"></span>
                                            </div>

                                            <div>
                                                <input class="form-control" size="40" aria-required="true"
                                                    aria-invalid="false" id="phone" pattern="[0-9]{10}"
                                                    placeholder="Phone *" value="" type="tel" name="phone" required>
                                                <span style="color:red;" id="phonespanid"></span>
                                            </div>

                                            <div>


                                                <select class="form-control" name="courses" id="courses">
                                                    <option>Please select course</option>
                                                    <?php if(!empty($courses_data)){?>
                                                    <?php foreach ($courses_data as $data){ ?>
                                                    <option value="<?=$data->id; ?>"
                                                        <?php if ((!empty($single_data)) && $single_data->courses_id_g === $data->id ) { echo 'selected'; } ?>>
                                                        <?= $data->courses_name; ?>
                                                    </option>
                                                    <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <span style="color:red;" id="coursespanid"></span>
                                            </div>
                                            <div>
                                                <input type="hidden" id="selected_sub_courses"
                                                    value="<?php if (isset($single_data)) { echo ($single_data->sub_courses_id_g); } ?>">
                                                <select name="sub_courses" id="sub_courses" class="form-control">
                                                    <option value="">Please select sub courses</option>
                                                </select>
                                                <span style="color:red;" id="subcoursespanid"></span>
                                            </div>



                                            <div class="form-group updloaddata mt-3">
                                                <label class="mr-4">Upload your profile photo:</label>
                                                <input type="file" accept="image/jpeg, image/png" name="profile_photo"
                                                    required>

                                            </div>
                                            <div>
                                                <div style="text-align: center;">
                                                    <input class="btn btnstart saveEnrollTopic"
                                                        onclick="handleSubmit('collapseOne')"
                                                        data-bs-target="#collapseTwo" type="button" name="next"
                                                        value="Next" />
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
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
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
                                            <input type="file" accept="application/pdf" name="cvFile" required>
                                            <span id="cvFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your Education certificates:</label>
                                            <input type="file" accept="application/pdf" name="educationCertificateFile"
                                                required>
                                            <span id="educaionCertificateFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your course related certificates:</label>
                                            <input type="file" accept="application/pdf" name="courseCertificateFile"
                                                required>
                                            <span id="courseCertificateFileError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your videos:</label>
                                            <input type="file" accept="video/mp4, video/webm, video/ogg" name="videos"
                                                required>
                                            <span id="videosError" style="color: red;"></span>
                                        </div>

                                        <div class="form-group updloaddata mt-3">
                                            <label class="mr-4">Upload your Images:</label>
                                            <input type="file" accept="image/jpeg, image/png" name="img" required>
                                            <span id="imgError" style="color: red;"></span>
                                        </div>

                                        <div style="text-align: center;">
                                            <input class="btn btnstart saveEnrollTopic"
                                                onclick="handleSubmit('collapseFour')" type="button" name="next"
                                                value="Next" />
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

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
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
                                                <option value="SelectCountry">Select Country</option>
                                                <option value="Bharat">Bharat</option>
                                                <span style="color:red;" id="Countryspanid">
                                                </span>
                                            </select>
                                        </div>
                                        <div class="form-group slcsfields col-md-10">
                                            <label for="inputState">State:</label>
                                            <select class="form-control" id="inputState" name="State">
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


                                        </div>
                                        <div class="form-group slcsfields col-md-10">
                                            <label for="inputDistrict">District:</label>
                                            <select class="form-control" id="inputDistrict" name="District">
                                                <option value="">Select District</option>
                                            </select>

                                            <span style="color:red;" id="Districtspanid">

                                            </span>

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
<div class="container ">
    <div class="row">
        <div class="col-lg-12 nsrad">

            <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request">Not sure ?? Request a call
                back</a>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>