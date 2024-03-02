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


            <!-- <select name="optCountries" class="countrycode" id="telephoneCountryCode"> </select> -->
    <!-- <input type="text" type="number" pattern="[0-9]{1,5}" id="Code_MobileNo"/> -->
    <!-- <script>
      window.addEventListener("DOMContentLoaded", (event) => {
        console.log("DOM fully loaded and parsed");
        let details = 
    [ {"code": "N.A.", "label": "Please click to select country code", "phone": "000", "data-phoneLength": 0},
    { "code": "AD", "label": "Andorra", "phone": "376", "data-phoneLength": 6},
    { "code": "AE", "label": "United Arab Emirates", "phone": "971", "data-phoneLength": 9},
    { "code": "AF", "label": "Afghanistan", "phone": "93", "data-phoneLength": 9},
    { "code": "AG", "label": "Antigua and Barbuda", "phone": "1-268", "data-phoneLength": 10},
    { "code": "AI", "label": "Anguilla", "phone": "1-264", "data-phoneLength": 10},
    { "code": "AL", "label": "Albania", "phone": "355", "data-phoneLength": 9},
    { "code": "AM", "label": "Armenia", "phone": "374", "data-phoneLength": 6},
    { "code": "AO", "label": "Angola", "phone": "244", "data-phoneLength": 9},
    { "code": "AQ", "label": "Antarctica", "phone": "672", "data-phoneLength": 6},
    { "code": "AR", "label": "Argentina", "phone": "54", "data-phoneLength": 8},
    { "code": "AS", "label": "American Samoa", "phone": "1-684", "data-phoneLength": 10},
    { "code": "AT", "label": "Austria", "phone": "43", "data-phoneLength": 11},
    { "code": "AU", "label": "Australia", "phone": "61", "data-phoneLength": 9},
    { "code": "AW", "label": "Aruba", "phone": "297", "data-phoneLength": 7},
    { "code": "AX", "label": "Alland Islands", "phone": "358", "data-phoneLength": 10},
    { "code": "AZ", "label": "Azerbaijan", "phone": "994", "data-phoneLength": 9},
    { "code": "BA", "label": "Bosnia and Herzegovina", "phone": "387", "data-phoneLength": 8},
    { "code": "BB", "label": "Barbados", "phone": "1-246", "data-phoneLength": 10},
    { "code": "BD", "label": "Bangladesh", "phone": "880", "data-phoneLength": 10},
    { "code": "BE", "label": "Belgium", "phone": "32", "data-phoneLength": 9},
    { "code": "BF", "label": "Burkina Faso", "phone": "226", "data-phoneLength": 8},
    { "code": "BG", "label": "Bulgaria", "phone": "359", "data-phoneLength": 9},
    { "code": "BH", "label": "Bahrain", "phone": "973", "data-phoneLength": 8},
    { "code": "BI", "label": "Burundi", "phone": "257", "data-phoneLength": 8},
    { "code": "BJ", "label": "Benin", "phone": "229", "data-phoneLength": 8},
    { "code": "BL", "label": "Saint Barthelemy", "phone": "590", "data-phoneLength": 9},
    { "code": "BM", "label": "Bermuda", "phone": "1-441", "data-phoneLength": 10},
    { "code": "BN", "label": "Brunei Darussalam", "phone": "673", "data-phoneLength": 7},
    { "code": "BO", "label": "Bolivia", "phone": "591", "data-phoneLength": 9},
    { "code": "BR", "label": "Brazil", "phone": "55", "data-phoneLength": 11},
    { "code": "BS", "label": "Bahamas", "phone": "1-242", "data-phoneLength": 10},
    { "code": "BT", "label": "Bhutan", "phone": "975", "data-phoneLength": 7},
    { "code": "BV", "label": "Bouvet Island", "phone": "47","data-phoneLength": 10 },
    { "code": "BW", "label": "Botswana", "phone": "267", "data-phoneLength": 7},
    { "code": "BY", "label": "Belarus", "phone": "375", "data-phoneLength": 9},
    { "code": "BZ", "label": "Belize", "phone": "501", "data-phoneLength": 7},
    { "code": "CA", "label": "Canada", "phone": "1", "data-phoneLength": 10},
    { "code": "CC", "label": "Cocos (Keeling) Islands", "phone": "61", "data-phoneLength": 10},
    { "code": "CD", "label": "Congo, Democratic Republic of the", "phone": "243", "data-phoneLength": 7},
    { "code": "CF", "label": "Central African Republic", "phone": "236", "data-phoneLength": 8},
    { "code": "CG", "label": "Congo, Republic of the", "phone": "242", "data-phoneLength": 9},
    { "code": "CH", "label": "Switzerland", "phone": "41", "data-phoneLength": 9},
    { "code": "CI", "label": "Cote d'Ivoire", "phone": "225", "data-phoneLength": 8},
    { "code": "CK", "label": "Cook Islands", "phone": "682", "data-phoneLength": 5},
    { "code": "CL", "label": "Chile", "phone": "56", "data-phoneLength": 9},
    { "code": "CM", "label": "Cameroon", "phone": "237", "data-phoneLength": 9},
    { "code": "CN", "label": "China", "phone": "86", "data-phoneLength": 11},
    { "code": "CO", "label": "Colombia", "phone": "57", "data-phoneLength": 10},
    { "code": "CR", "label": "Costa Rica", "phone": "506", "data-phoneLength": 8},
    { "code": "CU", "label": "Cuba", "phone": "53", "data-phoneLength": 8},
    { "code": "CV", "label": "Cape Verde", "phone": "238", "data-phoneLength": 7},
    { "code": "CW", "label": "Curacao", "phone": "599", "data-phoneLength": 7},
    { "code": "CX", "label": "Christmas Island", "phone": "61", "data-phoneLength": 9},
    { "code": "CY", "label": "Cyprus", "phone": "357", "data-phoneLength": 8},
    { "code": "CZ", "label": "Czech Republic", "phone": "420", "data-phoneLength": 9},
    { "code": "DE", "label": "Germany", "phone": "49", "data-phoneLength": 10},
    { "code": "DJ", "label": "Djibouti", "phone": "253", "data-phoneLength": 10},
    { "code": "DK", "label": "Denmark", "phone": "45", "data-phoneLength": 8},
    { "code": "DM", "label": "Dominica", "phone": "1-767", "data-phoneLength": 10},
    { "code": "DO", "label": "Dominican Republic", "phone": "1-809", "data-phoneLength": 10},
    { "code": "DZ", "label": "Algeria", "phone": "213", "data-phoneLength": 9},
    { "code": "EC", "label": "Ecuador", "phone": "593", "data-phoneLength": 9},
    { "code": "EE", "label": "Estonia", "phone": "372", "data-phoneLength": 8},
    { "code": "EG", "label": "Egypt", "phone": "20", "data-phoneLength": 10},
    { "code": "EH", "label": "Western Sahara", "phone": "212", "data-phoneLength": 9},
    { "code": "ER", "label": "Eritrea", "phone": "291", "data-phoneLength": 7},
    { "code": "ES", "label": "Spain", "phone": "34", "data-phoneLength": 9},
    { "code": "ET", "label": "Ethiopia", "phone": "251", "data-phoneLength": 9},
    { "code": "FI", "label": "Finland", "phone": "358", "data-phoneLength": 11},
    { "code": "FJ", "label": "Fiji", "phone": "679", "data-phoneLength": 7},
    { "code": "FK", "label": "Falkland Islands (Malvinas)", "phone": "500", "data-phoneLength": 5},
    { "code": "FM", "label": "Micronesia, Federated States of", "phone": "691", "data-phoneLength": 7},
    { "code": "FO", "label": "Faroe Islands", "phone": "298", "data-phoneLength": 5},
    { "code": "FR", "label": "France", "phone": "33", "data-phoneLength": 9},
    { "code": "GA", "label": "Gabon", "phone": "241", "data-phoneLength": 7},
    { "code": "GB", "label": "United Kingdom", "phone": "44", "data-phoneLength": 10},
    { "code": "GD", "label": "Grenada", "phone": "1-473", "data-phoneLength": 10},
    { "code": "GE", "label": "Georgia", "phone": "995", "data-phoneLength": 9},
    { "code": "GF", "label": "French Guiana", "phone": "594", "data-phoneLength": 9},
    { "code": "GG", "label": "Guernsey", "phone": "44", "data-phoneLength": 10},
    { "code": "GH", "label": "Ghana", "phone": "233", "data-phoneLength": 9},
    { "code": "GI", "label": "Gibraltar", "phone": "350", "data-phoneLength": 8},
    { "code": "GL", "label": "Greenland", "phone": "299", "data-phoneLength": 6},
    { "code": "GM", "label": "Gambia", "phone": "220", "data-phoneLength": 7},
    { "code": "GN", "label": "Guinea", "phone": "224", "data-phoneLength": 9},
    { "code": "GP", "label": "Guadeloupe", "phone": "590", "data-phoneLength": 9},
    { "code": "GQ", "label": "Equatorial Guinea", "phone": "240", "data-phoneLength": 9},
    { "code": "GR", "label": "Greece", "phone": "30", "data-phoneLength": 10},
    { "code": "GS", "label": "South Georgia and the South Sandwich Islands", "phone": "500", "data-phoneLength": 5},
    { "code": "GT", "label": "Guatemala", "phone": "502", "data-phoneLength": 8},
    { "code": "GU", "label": "Guam", "phone": "1-671", "data-phoneLength": 10},
    { "code": "GW", "label": "Guinea-Bissau", "phone": "245", "data-phoneLength": 9},
    { "code": "GY", "label": "Guyana", "phone": "592", "data-phoneLength": 7},
    { "code": "HK", "label": "Hong Kong", "phone": "852", "data-phoneLength": 8},
    { "code": "HM", "label": "Heard Island and McDonald Islands", "phone": "672","data-phoneLength": 10 },
    { "code": "HN", "label": "Honduras", "phone": "504", "data-phoneLength": 8},
    { "code": "HR", "label": "Croatia", "phone": "385", "data-phoneLength": 9},
    { "code": "HT", "label": "Haiti", "phone": "509", "data-phoneLength": 8},
    { "code": "HU", "label": "Hungary", "phone": "36", "data-phoneLength": 9},
    { "code": "ID", "label": "Indonesia", "phone": "62", "data-phoneLength": 11},
    { "code": "IE", "label": "Ireland", "phone": "353", "data-phoneLength": 9},
    { "code": "IL", "label": "Israel", "phone": "972", "data-phoneLength": 9},
    { "code": "IM", "label": "Isle of Man", "phone": "44", "data-phoneLength": 10},
    { "code": "IN", "label": "India", "phone": "91", "data-phoneLength": 10},
    { "code": "IO", "label": "British Indian Ocean Territory", "phone": "246", "data-phoneLength": 7},
    { "code": "IQ", "label": "Iraq", "phone": "964", "data-phoneLength": 10},
    { "code": "IR", "label": "Iran, Islamic Republic of", "phone": "98", "data-phoneLength": 11},
    { "code": "IS", "label": "Iceland", "phone": "354", "data-phoneLength": 7},
    { "code": "IT", "label": "Italy", "phone": "39", "data-phoneLength": 10},
    { "code": "JE", "label": "Jersey", "phone": "44", "data-phoneLength": 10},
    { "code": "JM", "label": "Jamaica", "phone": "1-876", "data-phoneLength": 10},
    { "code": "JO", "label": "Jordan", "phone": "962", "data-phoneLength": 9},
    { "code": "JP", "label": "Japan", "phone": "81", "suggested": true },
    { "code": "KE", "label": "Kenya", "phone": "254", "data-phoneLength": 10},
    { "code": "KG", "label": "Kyrgyzstan", "phone": "996", "data-phoneLength": 9},
    { "code": "KH", "label": "Cambodia", "phone": "855", "data-phoneLength": 9},
    { "code": "KI", "label": "Kiribati", "phone": "686", "data-phoneLength": 8},
    { "code": "KM", "label": "Comoros", "phone": "269", "data-phoneLength": 7},
    { "code": "KN", "label": "Saint Kitts and Nevis", "phone": "1-869", "data-phoneLength": 10},
    { "code": "KP", "label": "Korea, Democratic People's Republic of", "phone": "850", "data-phoneLength": 13},
    { "code": "KR", "label": "Korea, Republic of", "phone": "82", "data-phoneLength": 8},
    { "code": "KW", "label": "Kuwait", "phone": "965", "data-phoneLength": 8},
    { "code": "KY", "label": "Cayman Islands", "phone": "1-345", "data-phoneLength": 7},
    { "code": "KZ", "label": "Kazakhstan", "phone": "7", "data-phoneLength": 10},
    { "code": "LA", "label": "Lao People's Democratic Republic", "phone": "856", "data-phoneLength": 9},
    { "code": "LB", "label": "Lebanon", "phone": "961", "data-phoneLength": 8},
    { "code": "LC", "label": "Saint Lucia", "phone": "1-758", "data-phoneLength": 7},
    { "code": "LI", "label": "Liechtenstein", "phone": "423", "data-phoneLength": 7},
    { "code": "LK", "label": "Sri Lanka", "phone": "94", "data-phoneLength": 7},
    { "code": "LR", "label": "Liberia", "phone": "231", "data-phoneLength": 9},
    { "code": "LS", "label": "Lesotho", "phone": "266", "data-phoneLength": 8},
    { "code": "LT", "label": "Lithuania", "phone": "370", "data-phoneLength": 8},
    { "code": "LU", "label": "Luxembourg", "phone": "352", "data-phoneLength": 9},
    { "code": "LV", "label": "Latvia", "phone": "371", "data-phoneLength": 8},
    { "code": "LY", "label": "Libya", "phone": "218", "data-phoneLength": 10},
    { "code": "MA", "label": "Morocco", "phone": "212", "data-phoneLength": 9},
    { "code": "MC", "label": "Monaco", "phone": "377", "data-phoneLength": 8},
    { "code": "MD", "label": "Moldova, Republic of", "phone": "373", "data-phoneLength": 8},
    { "code": "ME", "label": "Montenegro", "phone": "382", "data-phoneLength": 8},
    { "code": "MF", "label": "Saint Martin (French part)", "phone": "590", "data-phoneLength": 6},
    { "code": "MG", "label": "Madagascar", "phone": "261", "data-phoneLength": 7},
    { "code": "MH", "label": "Marshall Islands", "phone": "692", "data-phoneLength": 7},
    { "code": "MK", "label": "Macedonia, the Former Yugoslav Republic of", "phone": "389", "data-phoneLength": 8},
    { "code": "ML", "label": "Mali", "phone": "223", "data-phoneLength": 8},
    { "code": "MM", "label": "Myanmar", "phone": "95", "data-phoneLength": 10},
    { "code": "MN", "label": "Mongolia", "phone": "976", "data-phoneLength": 8},
    { "code": "MO", "label": "Macao", "phone": "853", "data-phoneLength": 8},
    { "code": "MP", "label": "Northern Mariana Islands", "phone": "1-670", "data-phoneLength": 7},
    { "code": "MQ", "label": "Martinique", "phone": "596", "data-phoneLength": 9},
    { "code": "MR", "label": "Mauritania", "phone": "222", "data-phoneLength": 8},
    { "code": "MS", "label": "Montserrat", "phone": "1-664", "data-phoneLength": 10},
    { "code": "MT", "label": "Malta", "phone": "356", "data-phoneLength": 8},
    { "code": "MU", "label": "Mauritius", "phone": "230", "data-phoneLength": 8},
    { "code": "MV", "label": "Maldives", "phone": "960", "data-phoneLength": 7},
    { "code": "MW", "label": "Malawi", "phone": "265", "data-phoneLength": 9},
    { "code": "MX", "label": "Mexico", "phone": "52", "data-phoneLength": 10},
    { "code": "MY", "label": "Malaysia", "phone": "60", "data-phoneLength": 7},
    { "code": "MZ", "label": "Mozambique", "phone": "258", "data-phoneLength": 12},
    { "code": "NA", "label": "Namibia", "phone": "264", "data-phoneLength": 7},
    { "code": "NC", "label": "New Caledonia", "phone": "687", "data-phoneLength": 6},
    { "code": "NE", "label": "Niger", "phone": "227", "data-phoneLength": 8},
    { "code": "NF", "label": "Norfolk Island", "phone": "672", "data-phoneLength": 6},
    { "code": "NG", "label": "Nigeria", "phone": "234", "data-phoneLength": 8},
    { "code": "NI", "label": "Nicaragua", "phone": "505", "data-phoneLength": 8},
    { "code": "NL", "label": "Netherlands", "phone": "31", "data-phoneLength": 9},
    { "code": "NO", "label": "Norway", "phone": "47", "data-phoneLength": 8},
    { "code": "NP", "label": "Nepal", "phone": "977", "data-phoneLength": 10},
    { "code": "NR", "label": "Nauru", "phone": "674", "data-phoneLength": 7},
    { "code": "NU", "label": "Niue", "phone": "683", "data-phoneLength": 4},
    { "code": "NZ", "label": "New Zealand", "phone": "64", "data-phoneLength": 9},
    { "code": "OM", "label": "Oman", "phone": "968", "data-phoneLength": 8},
    { "code": "PA", "label": "Panama", "phone": "507", "data-phoneLength": 8},
    { "code": "PE", "label": "Peru", "phone": "51", "data-phoneLength": 9},
    { "code": "PF", "label": "French Polynesia", "phone": "689", "data-phoneLength": 8},
    { "code": "PG", "label": "Papua New Guinea", "phone": "675", "data-phoneLength": 8},
    { "code": "PH", "label": "Philippines", "phone": "63", "data-phoneLength": 10},
    { "code": "PK", "label": "Pakistan", "phone": "92", "data-phoneLength": 10},
    { "code": "PL", "label": "Poland", "phone": "48", "data-phoneLength": 9},
    { "code": "PM", "label": "Saint Pierre and Miquelon", "phone": "508", "data-phoneLength": 6},
    { "code": "PN", "label": "Pitcairn", "phone": "870", "data-phoneLength": 9},
    { "code": "PR", "label": "Puerto Rico", "phone": "1", "data-phoneLength": 10},
    { "code": "PS", "label": "Palestine, State of", "phone": "970", "data-phoneLength": 9},
    { "code": "PT", "label": "Portugal", "phone": "351", "data-phoneLength": 9},
    { "code": "PW", "label": "Palau", "phone": "680", "data-phoneLength": 7},
    { "code": "PY", "label": "Paraguay", "phone": "595", "data-phoneLength": 9},
    { "code": "QA", "label": "Qatar", "phone": "974", "data-phoneLength": 8},
    { "code": "RE", "label": "Reunion", "phone": "262", "data-phoneLength": 10},
    { "code": "RO", "label": "Romania", "phone": "40", "data-phoneLength": 10},
    { "code": "RS", "label": "Serbia", "phone": "381", "data-phoneLength": 9},
    { "code": "RU", "label": "Russian Federation", "phone": "7", "data-phoneLength": 10},
    { "code": "RW", "label": "Rwanda", "phone": "250", "data-phoneLength": 9},
    { "code": "SA", "label": "Saudi Arabia", "phone": "966", "data-phoneLength": 9},
    { "code": "SB", "label": "Solomon Islands", "phone": "677", "data-phoneLength": 7},
    { "code": "SC", "label": "Seychelles", "phone": "248", "data-phoneLength": 7},
    { "code": "SD", "label": "Sudan", "phone": "249", "data-phoneLength": 7},
    { "code": "SE", "label": "Sweden", "phone": "46", "data-phoneLength": 7},
    { "code": "SG", "label": "Singapore", "phone": "65", "data-phoneLength": 8},
    { "code": "SH", "label": "Saint Helena", "phone": "290", "data-phoneLength": 4},
    { "code": "SI", "label": "Slovenia", "phone": "386", "data-phoneLength": 9},
    { "code": "SJ", "label": "Svalbard and Jan Mayen", "phone": "47", "data-phoneLength": 8},
    { "code": "SK", "label": "Slovakia", "phone": "421", "data-phoneLength": 9},
    { "code": "SL", "label": "Sierra Leone", "phone": "232", "data-phoneLength": 8},
    { "code": "SM", "label": "San Marino", "phone": "378", "data-phoneLength": 10},
    { "code": "SN", "label": "Senegal", "phone": "221", "data-phoneLength": 9},
    { "code": "SO", "label": "Somalia", "phone": "252", "data-phoneLength": 9},
    { "code": "SR", "label": "Suriname", "phone": "597", "data-phoneLength": 7},
    { "code": "SS", "label": "South Sudan", "phone": "211", "data-phoneLength": 7},
    { "code": "ST", "label": "Sao Tome and Principe", "phone": "239", "data-phoneLength": 7},
    { "code": "SV", "label": "El Salvador", "phone": "503", "data-phoneLength": 8},
    { "code": "SX", "label": "Sint Maarten (Dutch part)", "phone": "1-721", "data-phoneLength": 10},
    { "code": "SY", "label": "Syrian Arab Republic", "phone": "963", "data-phoneLength": 7},
    { "code": "SZ", "label": "Swaziland", "phone": "268", "data-phoneLength": 8},
    { "code": "TC", "label": "Turks and Caicos Islands", "phone": "1-649", "data-phoneLength": 10},
    { "code": "TD", "label": "Chad", "phone": "235", "data-phoneLength": 6},
    { "code": "TF", "label": "French Southern Territories", "phone": "262", "data-phoneLength": 10},
    { "code": "TG", "label": "Togo", "phone": "228", "data-phoneLength": 8},
    { "code": "TH", "label": "Thailand", "phone": "66", "data-phoneLength": 9},
    { "code": "TJ", "label": "Tajikistan", "phone": "992", "data-phoneLength": 9},
    { "code": "TK", "label": "Tokelau", "phone": "690", "data-phoneLength": 5},
    { "code": "TL", "label": "Timor-Leste", "phone": "670", "data-phoneLength": 7},
    { "code": "TM", "label": "Turkmenistan", "phone": "993", "data-phoneLength": 8},
    { "code": "TN", "label": "Tunisia", "phone": "216", "data-phoneLength": 8},
    { "code": "TO", "label": "Tonga", "phone": "676", "data-phoneLength": 5},
    { "code": "TR", "label": "Turkey", "phone": "90", "data-phoneLength": 11},
    { "code": "TT", "label": "Trinidad and Tobago", "phone": "1-868", "data-phoneLength": 7},
    { "code": "TV", "label": "Tuvalu", "phone": "688", "data-phoneLength": 5},
    { "code": "TW", "label": "Taiwan, Province of China", "phone": "886", "data-phoneLength": 9},
    { "code": "TZ", "label": "United Republic of Tanzania", "phone": "255", "data-phoneLength": 7},
    { "code": "UA", "label": "Ukraine", "phone": "380", "data-phoneLength": 9},
    { "code": "UG", "label": "Uganda", "phone": "256", "data-phoneLength": 7},
    { "code": "US", "label": "United States", "phone": "1", "data-phoneLength": 10},
    { "code": "UY", "label": "Uruguay", "phone": "598", "data-phoneLength": 8},
    { "code": "UZ", "label": "Uzbekistan", "phone": "998", "data-phoneLength": 9},
    { "code": "VA", "label": "Holy See (Vatican City State)", "phone": "379" ,"data-phoneLength": 10},
    { "code": "VC", "label": "Saint Vincent and the Grenadines", "phone": "1-784", "data-phoneLength": 7},
    { "code": "VE", "label": "Venezuela", "phone": "58", "data-phoneLength": 7},
    { "code": "VG", "label": "British Virgin Islands", "phone": "1-284", "data-phoneLength": 7},
    { "code": "VI", "label": "US Virgin Islands", "phone": "1-340", "data-phoneLength": 10},
    { "code": "VN", "label": "Vietnam", "phone": "84", "data-phoneLength": 9},
    { "code": "VU", "label": "Vanuatu", "phone": "678", "data-phoneLength": 5},
    { "code": "WF", "label": "Wallis and Futuna", "phone": "681", "data-phoneLength": 6},
    { "code": "WS", "label": "Samoa", "phone": "685", "data-phoneLength": 7},
    { "code": "XK", "label": "Kosovo", "phone": "383", "data-phoneLength": 8},
    { "code": "YE", "label": "Yemen", "phone": "967", "data-phoneLength": 9},
    { "code": "YT", "label": "Mayotte", "phone": "262", "data-phoneLength": 9},
    { "code": "ZA", "label": "South Africa", "phone": "27", "data-phoneLength": 9},
    { "code": "ZM", "label": "Zambia", "phone": "260", "data-phoneLength": 9},
    { "code": "ZW", "label": "Zimbabwe", "phone": "263", "data-phoneLength": 9}];

        // let details = JSON.parse(countyCode)
        let dropDown = document.getElementById("telephoneCountryCode")
        for (let i=0; i<details.length; i++){
          //let txtOption = '<option value="' + details[i]['code'] + '"' + ' name="' + details[i]['data-phoneLength'] + '">' + details[i]['label'] + '</option>';
          let txtOption = '<option value="' + details[i]['phone'] + '"' + ' data-phonelength="' + details[i]['data-phoneLength'] + '">' + details[i]['label'] + '</option>';
          console.log (txtOption)
          // let txtOption = '<option value="' + details[i]['code'] + '">' + details[i]['label'] + '</option>';
        dropDown.innerHTML = dropDown.innerHTML + txtOption
        console.log(dropDown.innerHTML)
        }
 
      });
      </script> -->

      <script>
window.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM fully loaded and parsed");
    let details = [{
            "code": "N.A.",
            "label": "Please click to select country code",
            "phone": "000",
            "data-phoneLength": 0
        },
        {
            "code": "AD",
            "label": "Andorra",
            "phone": "376",
            "data-phoneLength": 6
        },
        {
            "code": "AE",
            "label": "United Arab Emirates",
            "phone": "971",
            "data-phoneLength": 9
        },
        {
            "code": "AF",
            "label": "Afghanistan",
            "phone": "93",
            "data-phoneLength": 9
        },
        {
            "code": "AG",
            "label": "Antigua and Barbuda",
            "phone": "1-268",
            "data-phoneLength": 10
        },
        {
            "code": "AI",
            "label": "Anguilla",
            "phone": "1-264",
            "data-phoneLength": 10
        },
        {
            "code": "AL",
            "label": "Albania",
            "phone": "355",
            "data-phoneLength": 9
        },
        {
            "code": "AM",
            "label": "Armenia",
            "phone": "374",
            "data-phoneLength": 6
        },
        {
            "code": "AO",
            "label": "Angola",
            "phone": "244",
            "data-phoneLength": 9
        },
        {
            "code": "AQ",
            "label": "Antarctica",
            "phone": "672",
            "data-phoneLength": 6
        },
        {
            "code": "AR",
            "label": "Argentina",
            "phone": "54",
            "data-phoneLength": 8
        },
        {
            "code": "AS",
            "label": "American Samoa",
            "phone": "1-684",
            "data-phoneLength": 10
        },
        {
            "code": "AT",
            "label": "Austria",
            "phone": "43",
            "data-phoneLength": 11
        },
        {
            "code": "AU",
            "label": "Australia",
            "phone": "61",
            "data-phoneLength": 9
        },
        {
            "code": "AW",
            "label": "Aruba",
            "phone": "297",
            "data-phoneLength": 7
        },
        {
            "code": "AX",
            "label": "Alland Islands",
            "phone": "358",
            "data-phoneLength": 10
        },
        {
            "code": "AZ",
            "label": "Azerbaijan",
            "phone": "994",
            "data-phoneLength": 9
        },
        {
            "code": "BA",
            "label": "Bosnia and Herzegovina",
            "phone": "387",
            "data-phoneLength": 8
        },
        {
            "code": "BB",
            "label": "Barbados",
            "phone": "1-246",
            "data-phoneLength": 10
        },
        {
            "code": "BD",
            "label": "Bangladesh",
            "phone": "880",
            "data-phoneLength": 10
        },
        {
            "code": "BE",
            "label": "Belgium",
            "phone": "32",
            "data-phoneLength": 9
        },
        {
            "code": "BF",
            "label": "Burkina Faso",
            "phone": "226",
            "data-phoneLength": 8
        },
        {
            "code": "BG",
            "label": "Bulgaria",
            "phone": "359",
            "data-phoneLength": 9
        },
        {
            "code": "BH",
            "label": "Bahrain",
            "phone": "973",
            "data-phoneLength": 8
        },
        {
            "code": "BI",
            "label": "Burundi",
            "phone": "257",
            "data-phoneLength": 8
        },
        {
            "code": "BJ",
            "label": "Benin",
            "phone": "229",
            "data-phoneLength": 8
        },
        {
            "code": "BL",
            "label": "Saint Barthelemy",
            "phone": "590",
            "data-phoneLength": 9
        },
        {
            "code": "BM",
            "label": "Bermuda",
            "phone": "1-441",
            "data-phoneLength": 10
        },
        {
            "code": "BN",
            "label": "Brunei Darussalam",
            "phone": "673",
            "data-phoneLength": 7
        },
        {
            "code": "BO",
            "label": "Bolivia",
            "phone": "591",
            "data-phoneLength": 9
        },
        {
            "code": "BR",
            "label": "Brazil",
            "phone": "55",
            "data-phoneLength": 11
        },
        {
            "code": "BS",
            "label": "Bahamas",
            "phone": "1-242",
            "data-phoneLength": 10
        },
        {
            "code": "BT",
            "label": "Bhutan",
            "phone": "975",
            "data-phoneLength": 7
        },
        {
            "code": "BV",
            "label": "Bouvet Island",
            "phone": "47",
            "data-phoneLength": 10
        },
        {
            "code": "BW",
            "label": "Botswana",
            "phone": "267",
            "data-phoneLength": 7
        },
        {
            "code": "BY",
            "label": "Belarus",
            "phone": "375",
            "data-phoneLength": 9
        },
        {
            "code": "BZ",
            "label": "Belize",
            "phone": "501",
            "data-phoneLength": 7
        },
        {
            "code": "CA",
            "label": "Canada",
            "phone": "1",
            "data-phoneLength": 10
        },
        {
            "code": "CC",
            "label": "Cocos (Keeling) Islands",
            "phone": "61",
            "data-phoneLength": 10
        },
        {
            "code": "CD",
            "label": "Congo, Democratic Republic of the",
            "phone": "243",
            "data-phoneLength": 7
        },
        {
            "code": "CF",
            "label": "Central African Republic",
            "phone": "236",
            "data-phoneLength": 8
        },
        {
            "code": "CG",
            "label": "Congo, Republic of the",
            "phone": "242",
            "data-phoneLength": 9
        },
        {
            "code": "CH",
            "label": "Switzerland",
            "phone": "41",
            "data-phoneLength": 9
        },
        {
            "code": "CI",
            "label": "Cote d'Ivoire",
            "phone": "225",
            "data-phoneLength": 8
        },
        {
            "code": "CK",
            "label": "Cook Islands",
            "phone": "682",
            "data-phoneLength": 5
        },
        {
            "code": "CL",
            "label": "Chile",
            "phone": "56",
            "data-phoneLength": 9
        },
        {
            "code": "CM",
            "label": "Cameroon",
            "phone": "237",
            "data-phoneLength": 9
        },
        {
            "code": "CN",
            "label": "China",
            "phone": "86",
            "data-phoneLength": 11
        },
        {
            "code": "CO",
            "label": "Colombia",
            "phone": "57",
            "data-phoneLength": 10
        },
        {
            "code": "CR",
            "label": "Costa Rica",
            "phone": "506",
            "data-phoneLength": 8
        },
        {
            "code": "CU",
            "label": "Cuba",
            "phone": "53",
            "data-phoneLength": 8
        },
        {
            "code": "CV",
            "label": "Cape Verde",
            "phone": "238",
            "data-phoneLength": 7
        },
        {
            "code": "CW",
            "label": "Curacao",
            "phone": "599",
            "data-phoneLength": 7
        },
        {
            "code": "CX",
            "label": "Christmas Island",
            "phone": "61",
            "data-phoneLength": 9
        },
        {
            "code": "CY",
            "label": "Cyprus",
            "phone": "357",
            "data-phoneLength": 8
        },
        {
            "code": "CZ",
            "label": "Czech Republic",
            "phone": "420",
            "data-phoneLength": 9
        },
        {
            "code": "DE",
            "label": "Germany",
            "phone": "49",
            "data-phoneLength": 10
        },
        {
            "code": "DJ",
            "label": "Djibouti",
            "phone": "253",
            "data-phoneLength": 10
        },
        {
            "code": "DK",
            "label": "Denmark",
            "phone": "45",
            "data-phoneLength": 8
        },
        {
            "code": "DM",
            "label": "Dominica",
            "phone": "1-767",
            "data-phoneLength": 10
        },
        {
            "code": "DO",
            "label": "Dominican Republic",
            "phone": "1-809",
            "data-phoneLength": 10
        },
        {
            "code": "DZ",
            "label": "Algeria",
            "phone": "213",
            "data-phoneLength": 9
        },
        {
            "code": "EC",
            "label": "Ecuador",
            "phone": "593",
            "data-phoneLength": 9
        },
        {
            "code": "EE",
            "label": "Estonia",
            "phone": "372",
            "data-phoneLength": 8
        },
        {
            "code": "EG",
            "label": "Egypt",
            "phone": "20",
            "data-phoneLength": 10
        },
        {
            "code": "EH",
            "label": "Western Sahara",
            "phone": "212",
            "data-phoneLength": 9
        },
        {
            "code": "ER",
            "label": "Eritrea",
            "phone": "291",
            "data-phoneLength": 7
        },
        {
            "code": "ES",
            "label": "Spain",
            "phone": "34",
            "data-phoneLength": 9
        },
        {
            "code": "ET",
            "label": "Ethiopia",
            "phone": "251",
            "data-phoneLength": 9
        },
        {
            "code": "FI",
            "label": "Finland",
            "phone": "358",
            "data-phoneLength": 11
        },
        {
            "code": "FJ",
            "label": "Fiji",
            "phone": "679",
            "data-phoneLength": 7
        },
        {
            "code": "FK",
            "label": "Falkland Islands (Malvinas)",
            "phone": "500",
            "data-phoneLength": 5
        },
        {
            "code": "FM",
            "label": "Micronesia, Federated States of",
            "phone": "691",
            "data-phoneLength": 7
        },
        {
            "code": "FO",
            "label": "Faroe Islands",
            "phone": "298",
            "data-phoneLength": 5
        },
        {
            "code": "FR",
            "label": "France",
            "phone": "33",
            "data-phoneLength": 9
        },
        {
            "code": "GA",
            "label": "Gabon",
            "phone": "241",
            "data-phoneLength": 7
        },
        {
            "code": "GB",
            "label": "United Kingdom",
            "phone": "44",
            "data-phoneLength": 10
        },
        {
            "code": "GD",
            "label": "Grenada",
            "phone": "1-473",
            "data-phoneLength": 10
        },
        {
            "code": "GE",
            "label": "Georgia",
            "phone": "995",
            "data-phoneLength": 9
        },
        {
            "code": "GF",
            "label": "French Guiana",
            "phone": "594",
            "data-phoneLength": 9
        },
        {
            "code": "GG",
            "label": "Guernsey",
            "phone": "44",
            "data-phoneLength": 10
        },
        {
            "code": "GH",
            "label": "Ghana",
            "phone": "233",
            "data-phoneLength": 9
        },
        {
            "code": "GI",
            "label": "Gibraltar",
            "phone": "350",
            "data-phoneLength": 8
        },
        {
            "code": "GL",
            "label": "Greenland",
            "phone": "299",
            "data-phoneLength": 6
        },
        {
            "code": "GM",
            "label": "Gambia",
            "phone": "220",
            "data-phoneLength": 7
        },
        {
            "code": "GN",
            "label": "Guinea",
            "phone": "224",
            "data-phoneLength": 9
        },
        {
            "code": "GP",
            "label": "Guadeloupe",
            "phone": "590",
            "data-phoneLength": 9
        },
        {
            "code": "GQ",
            "label": "Equatorial Guinea",
            "phone": "240",
            "data-phoneLength": 9
        },
        {
            "code": "GR",
            "label": "Greece",
            "phone": "30",
            "data-phoneLength": 10
        },
        {
            "code": "GS",
            "label": "South Georgia and the South Sandwich Islands",
            "phone": "500",
            "data-phoneLength": 5
        },
        {
            "code": "GT",
            "label": "Guatemala",
            "phone": "502",
            "data-phoneLength": 8
        },
        {
            "code": "GU",
            "label": "Guam",
            "phone": "1-671",
            "data-phoneLength": 10
        },
        {
            "code": "GW",
            "label": "Guinea-Bissau",
            "phone": "245",
            "data-phoneLength": 9
        },
        {
            "code": "GY",
            "label": "Guyana",
            "phone": "592",
            "data-phoneLength": 7
        },
        {
            "code": "HK",
            "label": "Hong Kong",
            "phone": "852",
            "data-phoneLength": 8
        },
        {
            "code": "HM",
            "label": "Heard Island and McDonald Islands",
            "phone": "672",
            "data-phoneLength": 10
        },
        {
            "code": "HN",
            "label": "Honduras",
            "phone": "504",
            "data-phoneLength": 8
        },
        {
            "code": "HR",
            "label": "Croatia",
            "phone": "385",
            "data-phoneLength": 9
        },
        {
            "code": "HT",
            "label": "Haiti",
            "phone": "509",
            "data-phoneLength": 8
        },
        {
            "code": "HU",
            "label": "Hungary",
            "phone": "36",
            "data-phoneLength": 9
        },
        {
            "code": "ID",
            "label": "Indonesia",
            "phone": "62",
            "data-phoneLength": 11
        },
        {
            "code": "IE",
            "label": "Ireland",
            "phone": "353",
            "data-phoneLength": 9
        },
        {
            "code": "IL",
            "label": "Israel",
            "phone": "972",
            "data-phoneLength": 9
        },
        {
            "code": "IM",
            "label": "Isle of Man",
            "phone": "44",
            "data-phoneLength": 10
        },
        {
            "code": "IN",
            "label": "India",
            "phone": "91",
            "data-phoneLength": 10
        },
        {
            "code": "IO",
            "label": "British Indian Ocean Territory",
            "phone": "246",
            "data-phoneLength": 7
        },
        {
            "code": "IQ",
            "label": "Iraq",
            "phone": "964",
            "data-phoneLength": 10
        },
        {
            "code": "IR",
            "label": "Iran, Islamic Republic of",
            "phone": "98",
            "data-phoneLength": 11
        },
        {
            "code": "IS",
            "label": "Iceland",
            "phone": "354",
            "data-phoneLength": 7
        },
        {
            "code": "IT",
            "label": "Italy",
            "phone": "39",
            "data-phoneLength": 10
        },
        {
            "code": "JE",
            "label": "Jersey",
            "phone": "44",
            "data-phoneLength": 10
        },
        {
            "code": "JM",
            "label": "Jamaica",
            "phone": "1-876",
            "data-phoneLength": 10
        },
        {
            "code": "JO",
            "label": "Jordan",
            "phone": "962",
            "data-phoneLength": 9
        },
        {
            "code": "JP",
            "label": "Japan",
            "phone": "81",
            "suggested": true
        },
        {
            "code": "KE",
            "label": "Kenya",
            "phone": "254",
            "data-phoneLength": 10
        },
        {
            "code": "KG",
            "label": "Kyrgyzstan",
            "phone": "996",
            "data-phoneLength": 9
        },
        {
            "code": "KH",
            "label": "Cambodia",
            "phone": "855",
            "data-phoneLength": 9
        },
        {
            "code": "KI",
            "label": "Kiribati",
            "phone": "686",
            "data-phoneLength": 8
        },
        {
            "code": "KM",
            "label": "Comoros",
            "phone": "269",
            "data-phoneLength": 7
        },
        {
            "code": "KN",
            "label": "Saint Kitts and Nevis",
            "phone": "1-869",
            "data-phoneLength": 10
        },
        {
            "code": "KP",
            "label": "Korea, Democratic People's Republic of",
            "phone": "850",
            "data-phoneLength": 13
        },
        {
            "code": "KR",
            "label": "Korea, Republic of",
            "phone": "82",
            "data-phoneLength": 8
        },
        {
            "code": "KW",
            "label": "Kuwait",
            "phone": "965",
            "data-phoneLength": 8
        },
        {
            "code": "KY",
            "label": "Cayman Islands",
            "phone": "1-345",
            "data-phoneLength": 7
        },
        {
            "code": "KZ",
            "label": "Kazakhstan",
            "phone": "7",
            "data-phoneLength": 10
        },
        {
            "code": "LA",
            "label": "Lao People's Democratic Republic",
            "phone": "856",
            "data-phoneLength": 9
        },
        {
            "code": "LB",
            "label": "Lebanon",
            "phone": "961",
            "data-phoneLength": 8
        },
        {
            "code": "LC",
            "label": "Saint Lucia",
            "phone": "1-758",
            "data-phoneLength": 7
        },
        {
            "code": "LI",
            "label": "Liechtenstein",
            "phone": "423",
            "data-phoneLength": 7
        },
        {
            "code": "LK",
            "label": "Sri Lanka",
            "phone": "94",
            "data-phoneLength": 7
        },
        {
            "code": "LR",
            "label": "Liberia",
            "phone": "231",
            "data-phoneLength": 9
        },
        {
            "code": "LS",
            "label": "Lesotho",
            "phone": "266",
            "data-phoneLength": 8
        },
        {
            "code": "LT",
            "label": "Lithuania",
            "phone": "370",
            "data-phoneLength": 8
        },
        {
            "code": "LU",
            "label": "Luxembourg",
            "phone": "352",
            "data-phoneLength": 9
        },
        {
            "code": "LV",
            "label": "Latvia",
            "phone": "371",
            "data-phoneLength": 8
        },
        {
            "code": "LY",
            "label": "Libya",
            "phone": "218",
            "data-phoneLength": 10
        },
        {
            "code": "MA",
            "label": "Morocco",
            "phone": "212",
            "data-phoneLength": 9
        },
        {
            "code": "MC",
            "label": "Monaco",
            "phone": "377",
            "data-phoneLength": 8
        },
        {
            "code": "MD",
            "label": "Moldova, Republic of",
            "phone": "373",
            "data-phoneLength": 8
        },
        {
            "code": "ME",
            "label": "Montenegro",
            "phone": "382",
            "data-phoneLength": 8
        },
        {
            "code": "MF",
            "label": "Saint Martin (French part)",
            "phone": "590",
            "data-phoneLength": 6
        },
        {
            "code": "MG",
            "label": "Madagascar",
            "phone": "261",
            "data-phoneLength": 7
        },
        {
            "code": "MH",
            "label": "Marshall Islands",
            "phone": "692",
            "data-phoneLength": 7
        },
        {
            "code": "MK",
            "label": "Macedonia, the Former Yugoslav Republic of",
            "phone": "389",
            "data-phoneLength": 8
        },
        {
            "code": "ML",
            "label": "Mali",
            "phone": "223",
            "data-phoneLength": 8
        },
        {
            "code": "MM",
            "label": "Myanmar",
            "phone": "95",
            "data-phoneLength": 10
        },
        {
            "code": "MN",
            "label": "Mongolia",
            "phone": "976",
            "data-phoneLength": 8
        },
        {
            "code": "MO",
            "label": "Macao",
            "phone": "853",
            "data-phoneLength": 8
        },
        {
            "code": "MP",
            "label": "Northern Mariana Islands",
            "phone": "1-670",
            "data-phoneLength": 7
        },
        {
            "code": "MQ",
            "label": "Martinique",
            "phone": "596",
            "data-phoneLength": 9
        },
        {
            "code": "MR",
            "label": "Mauritania",
            "phone": "222",
            "data-phoneLength": 8
        },
        {
            "code": "MS",
            "label": "Montserrat",
            "phone": "1-664",
            "data-phoneLength": 10
        },
        {
            "code": "MT",
            "label": "Malta",
            "phone": "356",
            "data-phoneLength": 8
        },
        {
            "code": "MU",
            "label": "Mauritius",
            "phone": "230",
            "data-phoneLength": 8
        },
        {
            "code": "MV",
            "label": "Maldives",
            "phone": "960",
            "data-phoneLength": 7
        },
        {
            "code": "MW",
            "label": "Malawi",
            "phone": "265",
            "data-phoneLength": 9
        },
        {
            "code": "MX",
            "label": "Mexico",
            "phone": "52",
            "data-phoneLength": 10
        },
        {
            "code": "MY",
            "label": "Malaysia",
            "phone": "60",
            "data-phoneLength": 7
        },
        {
            "code": "MZ",
            "label": "Mozambique",
            "phone": "258",
            "data-phoneLength": 12
        },
        {
            "code": "NA",
            "label": "Namibia",
            "phone": "264",
            "data-phoneLength": 7
        },
        {
            "code": "NC",
            "label": "New Caledonia",
            "phone": "687",
            "data-phoneLength": 6
        },
        {
            "code": "NE",
            "label": "Niger",
            "phone": "227",
            "data-phoneLength": 8
        },
        {
            "code": "NF",
            "label": "Norfolk Island",
            "phone": "672",
            "data-phoneLength": 6
        },
        {
            "code": "NG",
            "label": "Nigeria",
            "phone": "234",
            "data-phoneLength": 8
        },
        {
            "code": "NI",
            "label": "Nicaragua",
            "phone": "505",
            "data-phoneLength": 8
        },
        {
            "code": "NL",
            "label": "Netherlands",
            "phone": "31",
            "data-phoneLength": 9
        },
        {
            "code": "NO",
            "label": "Norway",
            "phone": "47",
            "data-phoneLength": 8
        },
        {
            "code": "NP",
            "label": "Nepal",
            "phone": "977",
            "data-phoneLength": 10
        },
        {
            "code": "NR",
            "label": "Nauru",
            "phone": "674",
            "data-phoneLength": 7
        },
        {
            "code": "NU",
            "label": "Niue",
            "phone": "683",
            "data-phoneLength": 4
        },
        {
            "code": "NZ",
            "label": "New Zealand",
            "phone": "64",
            "data-phoneLength": 9
        },
        {
            "code": "OM",
            "label": "Oman",
            "phone": "968",
            "data-phoneLength": 8
        },
        {
            "code": "PA",
            "label": "Panama",
            "phone": "507",
            "data-phoneLength": 8
        },
        {
            "code": "PE",
            "label": "Peru",
            "phone": "51",
            "data-phoneLength": 9
        },
        {
            "code": "PF",
            "label": "French Polynesia",
            "phone": "689",
            "data-phoneLength": 8
        },
        {
            "code": "PG",
            "label": "Papua New Guinea",
            "phone": "675",
            "data-phoneLength": 8
        },
        {
            "code": "PH",
            "label": "Philippines",
            "phone": "63",
            "data-phoneLength": 10
        },
        {
            "code": "PK",
            "label": "Pakistan",
            "phone": "92",
            "data-phoneLength": 10
        },
        {
            "code": "PL",
            "label": "Poland",
            "phone": "48",
            "data-phoneLength": 9
        },
        {
            "code": "PM",
            "label": "Saint Pierre and Miquelon",
            "phone": "508",
            "data-phoneLength": 6
        },
        {
            "code": "PN",
            "label": "Pitcairn",
            "phone": "870",
            "data-phoneLength": 9
        },
        {
            "code": "PR",
            "label": "Puerto Rico",
            "phone": "1",
            "data-phoneLength": 10
        },
        {
            "code": "PS",
            "label": "Palestine, State of",
            "phone": "970",
            "data-phoneLength": 9
        },
        {
            "code": "PT",
            "label": "Portugal",
            "phone": "351",
            "data-phoneLength": 9
        },
        {
            "code": "PW",
            "label": "Palau",
            "phone": "680",
            "data-phoneLength": 7
        },
        {
            "code": "PY",
            "label": "Paraguay",
            "phone": "595",
            "data-phoneLength": 9
        },
        {
            "code": "QA",
            "label": "Qatar",
            "phone": "974",
            "data-phoneLength": 8
        },
        {
            "code": "RE",
            "label": "Reunion",
            "phone": "262",
            "data-phoneLength": 10
        },
        {
            "code": "RO",
            "label": "Romania",
            "phone": "40",
            "data-phoneLength": 10
        },
        {
            "code": "RS",
            "label": "Serbia",
            "phone": "381",
            "data-phoneLength": 9
        },
        {
            "code": "RU",
            "label": "Russian Federation",
            "phone": "7",
            "data-phoneLength": 10
        },
        {
            "code": "RW",
            "label": "Rwanda",
            "phone": "250",
            "data-phoneLength": 9
        },
        {
            "code": "SA",
            "label": "Saudi Arabia",
            "phone": "966",
            "data-phoneLength": 9
        },
        {
            "code": "SB",
            "label": "Solomon Islands",
            "phone": "677",
            "data-phoneLength": 7
        },
        {
            "code": "SC",
            "label": "Seychelles",
            "phone": "248",
            "data-phoneLength": 7
        },
        {
            "code": "SD",
            "label": "Sudan",
            "phone": "249",
            "data-phoneLength": 7
        },
        {
            "code": "SE",
            "label": "Sweden",
            "phone": "46",
            "data-phoneLength": 7
        },
        {
            "code": "SG",
            "label": "Singapore",
            "phone": "65",
            "data-phoneLength": 8
        },
        {
            "code": "SH",
            "label": "Saint Helena",
            "phone": "290",
            "data-phoneLength": 4
        },
        {
            "code": "SI",
            "label": "Slovenia",
            "phone": "386",
            "data-phoneLength": 9
        },
        {
            "code": "SJ",
            "label": "Svalbard and Jan Mayen",
            "phone": "47",
            "data-phoneLength": 8
        },
        {
            "code": "SK",
            "label": "Slovakia",
            "phone": "421",
            "data-phoneLength": 9
        },
        {
            "code": "SL",
            "label": "Sierra Leone",
            "phone": "232",
            "data-phoneLength": 8
        },
        {
            "code": "SM",
            "label": "San Marino",
            "phone": "378",
            "data-phoneLength": 10
        },
        {
            "code": "SN",
            "label": "Senegal",
            "phone": "221",
            "data-phoneLength": 9
        },
        {
            "code": "SO",
            "label": "Somalia",
            "phone": "252",
            "data-phoneLength": 9
        },
        {
            "code": "SR",
            "label": "Suriname",
            "phone": "597",
            "data-phoneLength": 7
        },
        {
            "code": "SS",
            "label": "South Sudan",
            "phone": "211",
            "data-phoneLength": 7
        },
        {
            "code": "ST",
            "label": "Sao Tome and Principe",
            "phone": "239",
            "data-phoneLength": 7
        },
        {
            "code": "SV",
            "label": "El Salvador",
            "phone": "503",
            "data-phoneLength": 8
        },
        {
            "code": "SX",
            "label": "Sint Maarten (Dutch part)",
            "phone": "1-721",
            "data-phoneLength": 10
        },
        {
            "code": "SY",
            "label": "Syrian Arab Republic",
            "phone": "963",
            "data-phoneLength": 7
        },
        {
            "code": "SZ",
            "label": "Swaziland",
            "phone": "268",
            "data-phoneLength": 8
        },
        {
            "code": "TC",
            "label": "Turks and Caicos Islands",
            "phone": "1-649",
            "data-phoneLength": 10
        },
        {
            "code": "TD",
            "label": "Chad",
            "phone": "235",
            "data-phoneLength": 6
        },
        {
            "code": "TF",
            "label": "French Southern Territories",
            "phone": "262",
            "data-phoneLength": 10
        },
        {
            "code": "TG",
            "label": "Togo",
            "phone": "228",
            "data-phoneLength": 8
        },
        {
            "code": "TH",
            "label": "Thailand",
            "phone": "66",
            "data-phoneLength": 9
        },
        {
            "code": "TJ",
            "label": "Tajikistan",
            "phone": "992",
            "data-phoneLength": 9
        },
        {
            "code": "TK",
            "label": "Tokelau",
            "phone": "690",
            "data-phoneLength": 5
        },
        {
            "code": "TL",
            "label": "Timor-Leste",
            "phone": "670",
            "data-phoneLength": 7
        },
        {
            "code": "TM",
            "label": "Turkmenistan",
            "phone": "993",
            "data-phoneLength": 8
        },
        {
            "code": "TN",
            "label": "Tunisia",
            "phone": "216",
            "data-phoneLength": 8
        },
        {
            "code": "TO",
            "label": "Tonga",
            "phone": "676",
            "data-phoneLength": 5
        },
        {
            "code": "TR",
            "label": "Turkey",
            "phone": "90",
            "data-phoneLength": 11
        },
        {
            "code": "TT",
            "label": "Trinidad and Tobago",
            "phone": "1-868",
            "data-phoneLength": 7
        },
        {
            "code": "TV",
            "label": "Tuvalu",
            "phone": "688",
            "data-phoneLength": 5
        },
        {
            "code": "TW",
            "label": "Taiwan, Province of China",
            "phone": "886",
            "data-phoneLength": 9
        },
        {
            "code": "TZ",
            "label": "United Republic of Tanzania",
            "phone": "255",
            "data-phoneLength": 7
        },
        {
            "code": "UA",
            "label": "Ukraine",
            "phone": "380",
            "data-phoneLength": 9
        },
        {
            "code": "UG",
            "label": "Uganda",
            "phone": "256",
            "data-phoneLength": 7
        },
        {
            "code": "US",
            "label": "United States",
            "phone": "1",
            "data-phoneLength": 10
        },
        {
            "code": "UY",
            "label": "Uruguay",
            "phone": "598",
            "data-phoneLength": 8
        },
        {
            "code": "UZ",
            "label": "Uzbekistan",
            "phone": "998",
            "data-phoneLength": 9
        },
        {
            "code": "VA",
            "label": "Holy See (Vatican City State)",
            "phone": "379",
            "data-phoneLength": 10
        },
        {
            "code": "VC",
            "label": "Saint Vincent and the Grenadines",
            "phone": "1-784",
            "data-phoneLength": 7
        },
        {
            "code": "VE",
            "label": "Venezuela",
            "phone": "58",
            "data-phoneLength": 7
        },
        {
            "code": "VG",
            "label": "British Virgin Islands",
            "phone": "1-284",
            "data-phoneLength": 7
        },
        {
            "code": "VI",
            "label": "US Virgin Islands",
            "phone": "1-340",
            "data-phoneLength": 10
        },
        {
            "code": "VN",
            "label": "Vietnam",
            "phone": "84",
            "data-phoneLength": 9
        },
        {
            "code": "VU",
            "label": "Vanuatu",
            "phone": "678",
            "data-phoneLength": 5
        },
        {
            "code": "WF",
            "label": "Wallis and Futuna",
            "phone": "681",
            "data-phoneLength": 6
        },
        {
            "code": "WS",
            "label": "Samoa",
            "phone": "685",
            "data-phoneLength": 7
        },
        {
            "code": "XK",
            "label": "Kosovo",
            "phone": "383",
            "data-phoneLength": 8
        },
        {
            "code": "YE",
            "label": "Yemen",
            "phone": "967",
            "data-phoneLength": 9
        },
        {
            "code": "YT",
            "label": "Mayotte",
            "phone": "262",
            "data-phoneLength": 9
        },
        {
            "code": "ZA",
            "label": "South Africa",
            "phone": "27",
            "data-phoneLength": 9
        },
        {
            "code": "ZM",
            "label": "Zambia",
            "phone": "260",
            "data-phoneLength": 9
        },
        {
            "code": "ZW",
            "label": "Zimbabwe",
            "phone": "263",
            "data-phoneLength": 9
        }
    ];

    // let details = JSON.parse(countyCode)
    let dropDown = document.getElementById("telephoneCountryCode")
    for (let i = 0; i < details.length; i++) {
        //let txtOption = '<option value="' + details[i]['code'] + '"' + ' name="' + details[i]['data-phoneLength'] + '">' + details[i]['label'] + '</option>';
        let txtOption = '<option value="' + details[i]['phone'] + '"' + ' data-phonelength="' + details[i][
            'data-phoneLength'
        ] + '">' + details[i]['label'] + '</option>';
        console.log(txtOption)
        // let txtOption = '<option value="' + details[i]['code'] + '">' + details[i]['label'] + '</option>';
        dropDown.innerHTML = dropDown.innerHTML + txtOption
        console.log(dropDown.innerHTML)
    }

});
</script>
    <script>
    let demoDropDown = document.getElementById("telephoneCountryCode")
    let demoMobileNo = document.getElementById("Code_MobileNo")
    
    demoDropDown.addEventListener('change', function() {
        demoMobileNo.maxLength = event.target.options[event.target.selectedIndex].dataset.phonelength
        demoMobileNo.placeholder = "limit: " + event.target.options[event.target.selectedIndex].dataset.phonelength + " characters"
    })
  </script>
  <script>
    // Restricts input for the given textbox to the given inputFilter.
    function setInputFilter(textbox, inputFilter, errMsg) {
      [ "input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout" ].forEach(function(event) {
        textbox.addEventListener(event, function(e) {
          if (inputFilter(this.value)) {
            // Accepted value.
            if ([ "keydown", "mousedown", "focusout" ].indexOf(e.type) >= 0) {
              this.classList.remove("input-error");
              this.setCustomValidity("");
            }
            
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          }
          else if (this.hasOwnProperty("oldValue")) {
            // Rejected value: restore the previous one.
            this.classList.add("input-error");
            this.setCustomValidity(errMsg);
            this.reportValidity();
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          }
          else {
            // Rejected value: nothing to restore.
            this.value = "";
          }
        });
      });
    }
  </script>
  <script>
    setInputFilter(document.getElementById("Code_MobileNo"), function(value) {
      return /^\d*$/.test(value);
    }, "Must be a number");
  </script>
  <script>
 
  </script>
            </form>

        </div>

    </div>

</section>





<?php include('footer.php'); ?>
