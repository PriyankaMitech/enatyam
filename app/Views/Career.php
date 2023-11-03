<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/Career.css">

</head>

<body>

    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
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
                            <a href="<?php echo base_url('home');?>">Home</a>
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
                <div class="col-lg-12 text-center">

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
        <div class="container Faculty">
            <div class="accordion" id="accordionExample">
                <div class="steps">
                    <progress id="progress" value=0 max=100></progress>
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
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2
                        </button>
                        <div class="step-title">
                            Second Step
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3
                        </button>
                        <div class="step-title">
                            Third Step
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4
                        </button>
                        <div class="step-title">
                            Fourth Step
                        </div>
                    </div>

                </div>
                <form action="bookDemo" method="post">
                    <div class="card">
                        <div id="headingOne">
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <div class="col-lg-12 " style="padding-left:0px" width="100%">


                                    <div class="demo-form">
                                        <div class="position-relative">
                                            <h5 class="title">
                                                <u>Free Demo Class</u>
                                            </h5>
                                            <div class="f-info">
                                                <div>
                                                    <input class="form-control" size="40" aria-required="true"
                                                        aria-invalid="false" id="name" placeholder="Your Name *"
                                                        value="" type="text" name="name">
                                                    <span style="color:red;" id="namespanid"></span> </span>
                                                </div>

                                                <div>
                                                    <input class="form-control" size="40" aria-required="true"
                                                        aria-invalid="false" id="email" placeholder="Email *" value=""
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
                                                    <select class="form-control" id="course" aria-required="true"
                                                        aria-invalid="false" name="course">
                                                        <option value="">Position Applying For*</option>
                                                        <option value="Dance">Dance</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Yoga">Yoga</option>
                                                        <option value="Instruments">Instruments</option>

                                                    </select>
                                                    <span style="color:red;" id="coursespanid"></span>
                                                </div>
                                                <div>
                                                    <!-- <input class="form-group-submit" type="submit" value="Next"> -->
                                                    <div style="text-align: center;">
                                                        <input class="btn btnstart saveEnrollTopic"
                                                            onclick="handleSubmit('collapseOne')"
                                                            data-bs-target="#collapseTwo" type="button" name="next"
                                                            value="Next" />

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

                    <div class="card">
                        <div id="headingTwo">

                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
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
                                                    <u>What would you like to Teach?</u>
                                                </h5>



                                                <div class="f-info">

                                                    <ul
                                                        class="greenCheckbox multiSelectContainer scrollForAttribute mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                                                        <div id="mCSB_1"
                                                            class="mCustomScrollBox mCS-light3 mCSB_vertical mCSB_inside"
                                                            tabindex="0">
                                                            <div id="mCSB_1_container"
                                                                class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                style="position:relative; top:0; left:0;" dir="ltr">

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Bollywood Dance Classes,"><span></span>
                                                                        Bollywood Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Bharatanatyam Dance Classes,"><span></span>
                                                                        Bharatanatyam Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Kathak Dance Classes,"><span></span>
                                                                        Kathak Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Odissi Dance Classes,"><span></span>
                                                                        Odissi Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Western Dance Classes,"><span></span>
                                                                        Western Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Semi classical Dance Classes,"><span></span>
                                                                        Semi classical Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Bhangara Dance Classes,"><span></span>
                                                                        Bhangara Dance Classes</label>
                                                                </li>

                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" class="checkboxCondition"
                                                                            name="sub_course"
                                                                            value="Folk Dance Classes,"><span></span>
                                                                        Folk Dance Classes</label>
                                                                </li>
                                                                <span style="color:red;" id="sub_coursespanid"></span>

                                                            </div>
                                                            <div style="text-align: center;">
                                                                <!-- <input class="btn btnstart saveEnrollTopic" onclick="handlePrevious('collapseTwo')" type="button" name="previous" value="Previous" /> -->
                                                                <input class="btn btnstart saveEnrollTopic"
                                                                    onclick="handleSubmit('collapseTwo')" type="button"
                                                                    name="next" value="Next" />
                                                                <!-- <a onclick="handleSubmit()"
                                                                    class="btn btnstart saveEnrollTopic"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree">Next</a> -->
                                                            </div>
                                                            <div id="mCSB_1_scrollbar_vertical"
                                                                class="mCSB_scrollTools mCSB_1_scrollbar mCS-light3 mCSB_scrollTools_vertical"
                                                                style="display: none;">
                                                                <div class="mCSB_draggerContainer">
                                                                    <div id="mCSB_1_dragger_vertical"
                                                                        class="mCSB_dragger"
                                                                        style="position: absolute; min-height: 30px; height: 0px; top: 0px;"
                                                                        oncontextmenu="return false;">
                                                                        <div class="mCSB_dragger_bar"
                                                                            style="line-height: 30px;">
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

                    <div class="card">
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



                                        <div class="f-info">
                                            <div>
                                                <p>Education</p>
                                                <select class="form-control dropdown" id="education" name="education">
                                                    <option value="" selected="selected" disabled="disabled">-- select
                                                        one --</option>
                                                    <option value="No formal education">No formal education</option>
                                                    <option value="Primary education">Primary education</option>
                                                    <option value="Secondary education">Secondary education or high
                                                        school</option>
                                                    <option value="GED">GED</option>
                                                    <option value="Vocational qualification">Vocational qualification
                                                    </option>
                                                    <option value="Bachelor's degree">Bachelor's degree</option>
                                                    <option value="Master's degree">Master's degree</option>
                                                    <option value="Doctorate or higher">Doctorate or higher</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="mr-4">Upload your CV:</label>
                                                <input type="file" name="file">
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="mr-4">Upload your Education certificates:</label>
                                                <input type="file" name="file">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label class="mr-4">Upload your course related certificates:</label>
                                                <input type="file" name="file">
                                            </div>


                                            <div style="text-align: center;">

                                                <input class="btn btnstart saveEnrollTopic"
                                                    onclick="handleSubmit('collapseThree')" type="button" name="next"
                                                    value="Next" />

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
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



                                        <div class="f-info">




                                            <div class="form-group col-md-10">
                                                <label for="inputcountry">Country:</label>
                                                <select class="form-control" id="inputCountry" name="Country">
                                                    <option value="SelectCountry">Select Country</option>
                                                    <option value="Bharat">Bharat</option>

                                                    <span style="color:red;" id="Countryspanid">

                                                    </span>

                                                </select>

                                            </div>
                                            <div class="form-group col-md-10">
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
                                            <div class="form-group col-md-10">
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
    <div class="col-lg-12 style=margin-left:200px;">

        <a href="<?php echo base_url('Contactus');?>" class="btnnew btn-request">Not sure ?? Request a call back</a>
    </div>


    <!-- java script logic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button, index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 / (stepButtons.length -
                1)); //there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex) => {
                if (index > secindex) {
                    item.classList.add('done');
                }
                if (index < secindex) {
                    item.classList.remove('done');
                }
            })
        })
    })
    </script>
    <script>
    var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna",
        "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram",
        "West Godavari"
    ];
    var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang",
        "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley",
        "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap",
        "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
    ];
    var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo",
        "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat",
        "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)",
        "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon",
        "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur",
        "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"
    ];
    var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur",
        "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad",
        "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
        "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
        "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi",
        "Siwan", "Supaul", "Vaishali", "West Champaran"
    ];
    var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur",
        "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa",
        "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund",
        "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
        "Surguja"
    ];
    var Goa = ["North Goa", "South Goa"];
    var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch",
        "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka",
        "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar",
        "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
        "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
    ];
    var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram",
        "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh",
        "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
        "Yamunanagar"
    ];
    var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu",
        "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"
    ];
    var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal",
        "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch",
        "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
    ];
    var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum",
        "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma",
        "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj",
        "Seraikela Kharsawan", "Simdega", "West Singhbhum"
    ];
    var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary",
        "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru",
        "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga",
        "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur",
        "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
    ];
    var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam",
        "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta",
        "Thiruvananthapuram", "Thrissur", "Wayanad"
    ];
    var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat",
        "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara",
        "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
        "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone",
        "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen",
        "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
        "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi",
        "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
    ];
    var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara",
        "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon",
        "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded",
        "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad",
        "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha",
        "Washim", "Yavatmal"
    ];
    var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West",
        "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati",
        "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
    ];
    var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills",
        "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills",
        "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills",
        "West Khasi Hills"
    ];
    var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha",
        "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit",
        "Saiha", "Serchhip"
    ];
    var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren",
        "Phek", "Tuensang", "Wokha", "Zunheboto"
    ];
    var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack",
        "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur",
        "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha",
        "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
        "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
    ];
    var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka",
        "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana",
        "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur",
        "Shaheed Bhagat Singh Nagar", "Tarn Taran"
    ];
    var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara",
        "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur",
        "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar",
        "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
        "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
    ];
    var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
    var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul",
        "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai",
        "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
        "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
        "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai",
        "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"
    ];
    var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon",
        "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem",
        "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool",
        "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy",
        "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
        "Warangal Urban", "Yadadri Bhuvanagiri"
    ];
    var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura",
        "Unakoti", "West Tripura"
    ];
    var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha",
        "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda",
        "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr",
        "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad",
        "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
        "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur",
        "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi",
        "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri",
        "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit",
        "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
        "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra",
        "Sultanpur", "Unnao", "Varanasi"
    ];
    var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar",
        "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar",
        "Uttarkashi"
    ];
    var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur",
        "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata",
        "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman",
        "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia",
        "South 24 Parganas", "Uttar Dinajpur"
    ];
    var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
    var Chandigarh = ["Chandigarh"];
    var DadraHaveli = ["Dadra Nagar Haveli"];
    var DamanDiu = ["Daman", "Diu"];
    var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi",
        "North West Delhi", "Shahdara", "South Delhi", "South East Delhi",
        "South West Delhi", "West Delhi"
    ];
    var Lakshadweep = ["Lakshadweep"];
    var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


    $("#inputState").change(function() {
        var StateSelected = $(this).val();
        var optionsList;
        var htmlString = "";

        switch (StateSelected) {
            case "Andra Pradesh":
                optionsList = AndraPradesh;
                break;
            case "Arunachal Pradesh":
                optionsList = ArunachalPradesh;
                break;
            case "Assam":
                optionsList = Assam;
                break;
            case "Bihar":
                optionsList = Bihar;
                break;
            case "Chhattisgarh":
                optionsList = Chhattisgarh;
                break;
            case "Goa":
                optionsList = Goa;
                break;
            case "Gujarat":
                optionsList = Gujarat;
                break;
            case "Haryana":
                optionsList = Haryana;
                break;
            case "Himachal Pradesh":
                optionsList = HimachalPradesh;
                break;
            case "Jammu and Kashmir":
                optionsList = JammuKashmir;
                break;
            case "Jharkhand":
                optionsList = Jharkhand;
                break;
            case "Karnataka":
                optionsList = Karnataka;
                break;
            case "Kerala":
                optionsList = Kerala;
                break;
            case "Madya Pradesh":
                optionsList = MadhyaPradesh;
                break;
            case "Maharashtra":
                optionsList = Maharashtra;
                break;
            case "Manipur":
                optionsList = Manipur;
                break;
            case "Meghalaya":
                optionsList = Meghalaya;
                break;
            case "Mizoram":
                optionsList = Mizoram;
                break;
            case "Nagaland":
                optionsList = Nagaland;
                break;
            case "Orissa":
                optionsList = Orissa;
                break;
            case "Punjab":
                optionsList = Punjab;
                break;
            case "Rajasthan":
                optionsList = Rajasthan;
                break;
            case "Sikkim":
                optionsList = Sikkim;
                break;
            case "Tamil Nadu":
                optionsList = TamilNadu;
                break;
            case "Telangana":
                optionsList = Telangana;
                break;
            case "Tripura":
                optionsList = Tripura;
                break;
            case "Uttaranchal":
                optionsList = Uttaranchal;
                break;
            case "Uttar Pradesh":
                optionsList = UttarPradesh;
                break;
            case "West Bengal":
                optionsList = WestBengal;
                break;
            case "Andaman and Nicobar Islands":
                optionsList = AndamanNicobar;
                break;
            case "Chandigarh":
                optionsList = Chandigarh;
                break;
            case "Dadar and Nagar Haveli":
                optionsList = DadraHaveli;
                break;
            case "Daman and Diu":
                optionsList = DamanDiu;
                break;
            case "Delhi":
                optionsList = Delhi;
                break;
            case "Lakshadeep":
                optionsList = Lakshadeep;
                break;
            case "Pondicherry":
                optionsList = Pondicherry;
                break;
        }


        for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value='" + optionsList[i] + "'>" +
                optionsList[i] + "</option>";
        }
        $("#inputDistrict").html(htmlString);

    });
    </script>





</body>


<?php include('footer.php'); ?>
<script>
{
    if (collapse_val == "collapseOne") {
        var phoneno_regx = /^\d{10}$/;
        var name_error_msg = "Name field is required";
        var email_error_msg = "Email field is required";
        var phone_error_msg = "Phone Number field is required"; // Define phone_error_msg
        var  Position_for_error_msg = "Book Demo for field is required";

        if ($("#name").val() == '') {
            name_error_msg = "Name field is required";
        } else {
            name_error_msg = "";
        }
        if ($("#email").val() == '') {
            email_error_msg = "Email field is required";
        } else {
            email_error_msg = "";
        }
        if ($("#phone").val()) {
            if (!phoneno_regx.test($("#phone").val())) {
                phone_error_msg = "Please enter valid 10 digits phone number.";
            } else {
                phone_error_msg = "";
            }
        } else {
            phone_error_msg = "Phone Number field is required";
        }
        if ($("#course").val() == '') {
            Position_for_error_msg = "Position Applying For field is required";
        } else {
            Position_for_error_msg = "";
        }

        $("#namespanid").html(name_error_msg);
        $("#emailspanid").html(email_error_msg);
        $("#phonespanid").html(phone_error_msg); // Update the phonespanid error message
        $("#coursespanid").html(Position_for_error_msg);

        if (name_error_msg == "" && email_error_msg == "" && phone_error_msg == "" &&  Position_for_error_msg == "") {
            $("#collapseTwo").collapse('show');
        }

        // Step-2 validation

    }
    if (collapse_val == "collapseTwo") {
        var sub_course_error_msg = "At least one sub_course must be selected"; // Initial error message

        // Check if at least one checkbox with the class "checkboxCondition" is checked
        if ($(".checkboxCondition:checked").length === 0) {
            sub_course_error_msg =
                "At least one sub_course must be selected"; // Update error message if none are checked
        } else {
            sub_course_error_msg = ""; // No error if at least one is checked
        }

        $("#sub_coursespanid").html(sub_course_error_msg);

        // Check if all previous validation (name, email, phone, and demo_for) passed
        if (sub_course_error_msg == "") {
            // Show the "collapseThree" section
            $("#collapseThree").collapse('show');
        }
    }



    // Step-3 validation

    if (collapse_val == "collapseThree") {
        var age_error_msg = "Select at least one age group";
        var experience_error_msg = "Select whether you have learned any classes";
        var information_error_msg = "Information field is required";

        // Check if at least one age checkbox is checked
        if ($(".checkboxCondition[name='Age']:checked").length === 0) {
            age_error_msg = "At least one Age must be selected";
        } else {
            age_error_msg = "";
        }
        $("#Agespanid").html(age_error_msg);

        // Check if the experience radio buttons are selected
        if ($("input[name='exprience']:checked").length === 0) {
            experience_error_msg = "Select whether you have learned any classes";
        } else {
            experience_error_msg = "";

            // Check if "Yes" is selected for experience
            if ($("input[name='exprience']:checked").val() === "Yes") {
                // Check if the information field is empty
                if ($("#information").val().trim() === "") {
                    information_error_msg = "Information field is required";
                } else {
                    information_error_msg = "";
                }
            }
        }

        $("#expriencespanid").html(experience_error_msg);
        $("#informationspanid").html(information_error_msg);

        // If all validation passes, show the next collapse section
        if (age_error_msg === "" && experience_error_msg === "") {
            $("#collapseFour").collapse('show');
        }
    }




    // Step-4 validation

    $("form").submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Define validation variables and set them to default values
        var countryError = "";
        var stateError = "";
        var districtError = "";
        var dateTimeError = "";

        // Validate the Country field
        if ($("#inputCountry").val() === "SelectCountry") {
            countryError = "Please select a Country.";
        }

        // Validate the State field
        if ($("#inputState").val() === "SelectState") {
            stateError = "Please select a State.";
        }

        // Validate the District field (if needed)
        if ($("#inputDistrict").val() === "") {
            districtError = "Please select a District.";
        }

        // Validate the Date & Time field
        
        var selectedDate = new Date($("#demo_class-time").val());
        var currentDate = new Date();

        // Calculate the minimum allowed date (next day)
        var minimumDate = new Date(currentDate);
        minimumDate.setDate(currentDate.getDate() + 1);

        // Validate the Date & Time field
        if (selectedDate < minimumDate) {
            dateTimeError = "Please choose a Demo Class Date & Time from the next day.";
        }

        // Display validation error messages
        $("#Countryspanid").text(countryError);
        $("#Statespanid").text(stateError);
        $("#Districtspanid").text(districtError);
        $("#demo_class-timespanid").text(dateTimeError);

        // If there are no errors, allow the form submission
        if (countryError === "" && stateError === "" && districtError === "" && dateTimeError === "") {
            this.submit(); // Allow form submission
        }
    });
}
</script>
</html>