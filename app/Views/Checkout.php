<?php include('header.php'); ?>

<body>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= $_SESSION; session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>

    </section>
    <section class="cont-main-section">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-ul">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12  ">
                <form class="check-form" action="<?php echo base_url(); ?>BillingInformation" method="post" id="checkoutForm">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>BILLING DETAILS</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>First name <sup>*</sup></label>
                                    <input type="text" name="Fname" class="form-control" id="Fname" value="<?php echo $_SESSION['user_name']?>" readonly />
                                </div>
                                <div class="col-lg-6">
                                    <label>Last name <sup>*</sup></label>
                                    <input type="text" name="Lname" class="form-control" id="Lname" />
                                </div>
                                <div class="col-lg-12">
                                    <label>Country/Region <sup>*</sup></label>
                                    <select class="form-select form-control required" name="country" aria-label="Default select example" id="country" readonly>

                                        <option value="">Open this select menu</option>
                                        <option <?php echo $_SESSION['country']=='Afghanistan' ? 'selected' : ''?> value="Afghanistan">Afghanistan</option>
                                        <option <?php echo $_SESSION['country']=='Åland Islands' ? 'selected' : ''?> value="Åland Islands">Åland Islands</option>
                                        <option <?php echo $_SESSION['country']=='Albania' ? 'selected' : ''?> value="Albania">Albania</option>
                                        <option <?php echo $_SESSION['country']=='Algeria' ? 'selected' : ''?> value="Algeria">Algeria</option>
                                        <option <?php echo $_SESSION['country']=='American Samoa' ? 'selected' : ''?> value="American Samoa">American Samoa</option>
                                        <option <?php echo $_SESSION['country']=='Andorra' ? 'selected' : ''?> value="Andorra">Andorra</option>
                                        <option <?php echo $_SESSION['country']=='Angola' ? 'selected' : ''?> value="Angola">Angola</option>
                                        <option <?php echo $_SESSION['country']=='Anguilla' ? 'selected' : ''?> value="Anguilla">Anguilla</option>
                                        <option <?php echo $_SESSION['country']=='Antarctica' ? 'selected' : ''?> value="Antarctica">Antarctica</option>
                                        <option <?php echo $_SESSION['country']=='Antigua and Barbuda' ? 'selected' : ''?> value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option <?php echo $_SESSION['country']=='Argentina' ? 'selected' : ''?> value="Argentina">Argentina</option>
                                        <option <?php echo $_SESSION['country']=='Armenia' ? 'selected' : ''?> value="Armenia">Armenia</option>

                                        <option <?php echo $_SESSION['country']=='Aruba' ? 'selected' : ''?> value="Aruba">Aruba</option>
                                        <option <?php echo $_SESSION['country']=='Australia' ? 'selected' : ''?> value="Australia">Australia</option>
                                        <option <?php echo $_SESSION['country']=='Austria' ? 'selected' : ''?> value="Austria">Austria</option>
                                        <option <?php echo $_SESSION['country']=='Azerbaijan' ? 'selected' : ''?> value="Azerbaijan">Azerbaijan</option>
                                        <option <?php echo $_SESSION['country']=='Bahamas' ? 'selected' : ''?> value="Bahamas">Bahamas</option>
                                        <option <?php echo $_SESSION['country']=='Baden' ? 'selected' : ''?> value="Baden">Baden</option>
                                        <option <?php echo $_SESSION['country']=='Bahrain' ? 'selected' : ''?> value="Bahrain">Bahrain</option>
                                        <option <?php echo $_SESSION['country']=='Bangladesh' ? 'selected' : ''?> value="Bangladesh">Bangladesh</option>
                                        <option <?php echo $_SESSION['country']=='Barbados' ? 'selected' : ''?> value="Barbados">Barbados</option>
                                        <option <?php echo $_SESSION['country']=='Bavaria' ? 'selected' : ''?> value="Bavaria">Bavaria</option>
                                        <option <?php echo $_SESSION['country']=='Belarus' ? 'selected' : ''?> value="Belarus">Belarus</option>
                                        <option <?php echo $_SESSION['country']=='Belgium' ? 'selected' : ''?> value="Belgium">Belgium</option>
                                        <option <?php echo $_SESSION['country']=='Belize' ? 'selected' : ''?> value="Belize">Belize</option>
                                        <option <?php echo $_SESSION['country']=='Benin' ? 'selected' : ''?> value="Benin">Benin</option>
                                        <option <?php echo $_SESSION['country']=='Bolivia' ? 'selected' : ''?> value="Bolivia">Bolivia</option>
                                        <option <?php echo $_SESSION['country']=='Bosnia' ? 'selected' : ''?> value="Bosnia">Bosnia</option>
                                        <option <?php echo $_SESSION['country']=='Botswana' ? 'selected' : ''?> value="Botswana">Botswana</option>
                                        <option <?php echo $_SESSION['country']=='Brazil' ? 'selected' : ''?> value="Brazil">Brazil</option>
                                        <option <?php echo $_SESSION['country']=='Brunei' ? 'selected' : ''?> value="Brunei">Brunei</option>
                                        <option <?php echo $_SESSION['country']=='Brunswick' ? 'selected' : ''?> value="Brunswick">Brunswick</option>
                                        <option <?php echo $_SESSION['country']=='Bulgaria' ? 'selected' : ''?> value="Bulgaria">Bulgaria</option>
                                        <option <?php echo $_SESSION['country']=='Burkina' ? 'selected' : ''?> value="Burkina">Burkina</option>
                                        <option <?php echo $_SESSION['country']=='Burma' ? 'selected' : ''?> value="Burma">Burma</option>
                                        <option <?php echo $_SESSION['country']=='Burundi' ? 'selected' : ''?> value="Burundi">Burundi</option>
                                        <option <?php echo $_SESSION['country']=='Cabo Verde' ? 'selected' : ''?> value="Cabo Verde">Cabo Verde</option>
                                        <option <?php echo $_SESSION['country']=='Cambodia' ? 'selected' : ''?> value="Cambodia">Cambodia</option>
                                        <option <?php echo $_SESSION['country']=='Cameroon' ? 'selected' : ''?> value="Cameroon">Cameroon</option>
                                        <option <?php echo $_SESSION['country']=='Canada' ? 'selected' : ''?> value="Canada">Canada</option>
                                        <option <?php echo $_SESSION['country']=='Cayman Islands, The' ? 'selected' : ''?> value="Cayman Islands, The">Cayman Islands, The</option>
                                        <option <?php echo $_SESSION['country']=='Central African Republic' ? 'selected' : ''?> value="Central African Republic">Central African Republic</option>
                                        <option <?php echo $_SESSION['country']=='Central American Federation' ? 'selected' : ''?> value="Central American Federation">Central American Federation</option>
                                        <option <?php echo $_SESSION['country']=='Chad' ? 'selected' : ''?> value="Chad">Chad</option>
                                        <option <?php echo $_SESSION['country']=='Chile' ? 'selected' : ''?> value="Chile">Chile</option>
                                        <option <?php echo $_SESSION['country']=='China' ? 'selected' : ''?> value="China">China</option>
                                        <option <?php echo $_SESSION['country']=='Colombia' ? 'selected' : ''?> value="Colombia">Colombia</option>
                                        <option <?php echo $_SESSION['country']=='Comoros' ? 'selected' : ''?> value="Comoros">Comoros</option>
                                        <option <?php echo $_SESSION['country']=='Congo Free State' ? 'selected' : ''?> value="Congo Free State">Congo Free State</option>
                                        <option <?php echo $_SESSION['country']=='Costa Rica' ? 'selected' : ''?> value="Costa Rica">Costa Rica</option>
                                        <option <?php echo $_SESSION['country']=='Cote d’Ivoire' ? 'selected' : ''?> value="Cote d’Ivoire">Cote d’Ivoire </option>
                                        <option <?php echo $_SESSION['country']=='Croatia' ? 'selected' : ''?> value="Croatia">Croatia</option>
                                        <option <?php echo $_SESSION['country']=='Cuba' ? 'selected' : ''?> value="Cuba">Cuba</option>
                                        <option <?php echo $_SESSION['country']=='Cyprus' ? 'selected' : ''?> value="Cyprus">Cyprus</option>
                                        <option <?php echo $_SESSION['country']=='Czechia' ? 'selected' : ''?> value="Czechia">Czechia</option>
                                        <option <?php echo $_SESSION['country']=='Czechoslovakia' ? 'selected' : ''?> value="Czechoslovakia">Czechoslovakia</option>
                                        <option <?php echo $_SESSION['country']=='Democratic Republic of the Congo' ? 'selected' : ''?> value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option <?php echo $_SESSION['country']=='Denmark' ? 'selected' : ''?> value="Denmark">Denmark</option>
                                        <option <?php echo $_SESSION['country']=='Djibouti' ? 'selected' : ''?> value="Djibouti">Djibouti</option>
                                        <option <?php echo $_SESSION['country']=='Dominica' ? 'selected' : ''?> value="Dominica">Dominica</option>
                                        <option <?php echo $_SESSION['country']=='Dominican Republic' ? 'selected' : ''?> value="Dominican Republic">Dominican Republic</option>
                                        <option <?php echo $_SESSION['country']=='Duchy of Parma' ? 'selected' : ''?> value="Duchy of Parma">Duchy of Parma</option>
                                        <option <?php echo $_SESSION['country']=='East Germany' ? 'selected' : ''?> value="East Germany">East Germany </option>
                                        <option <?php echo $_SESSION['country']=='Ecuadora' ? 'selected' : ''?> value="Ecuadora">Ecuadora</option>
                                        <option <?php echo $_SESSION['country']=='Egypt' ? 'selected' : ''?> value="Egypt">Egypt</option>
                                        <option <?php echo $_SESSION['country']=='El Salvador' ? 'selected' : ''?> value="El Salvador">El Salvador </option>
                                        <option <?php echo $_SESSION['country']=='Equatorial Guinea' ? 'selected' : ''?> value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option <?php echo $_SESSION['country']=='Eritrea' ? 'selected' : ''?> value="Eritrea">Eritrea </option>
                                        <option <?php echo $_SESSION['country']=='Estonia' ? 'selected' : ''?> value="Estonia">Estonia</option>
                                        <option <?php echo $_SESSION['country']=='Eswatini' ? 'selected' : ''?> value="Eswatini">Eswatini </option>
                                        <option <?php echo $_SESSION['country']=='Ethiopia' ? 'selected' : ''?> value="Ethiopia">Ethiopia</option>
                                        <option <?php echo $_SESSION['country']=='Federal Government of Germany' ? 'selected' : ''?> value="Federal Government of Germany">Federal Government of Germany</option>
                                        <option <?php echo $_SESSION['country']=='Fiji' ? 'selected' : ''?> value="Fiji">Fiji</option>
                                        <option <?php echo $_SESSION['country']=='Finland' ? 'selected' : ''?> value="Finland">Finland</option>
                                        <option <?php echo $_SESSION['country']=='France' ? 'selected' : ''?> value="France">France</option>
                                        <option <?php echo $_SESSION['country']=='Gabon' ? 'selected' : ''?> value="Gabon">Gabon</option>
                                        <option <?php echo $_SESSION['country']=='Gambia' ? 'selected' : ''?> value="Gambia">Gambia</option>
                                        <option <?php echo $_SESSION['country']=='Georgia' ? 'selected' : ''?> value="Georgia">Georgia</option>
                                        <option <?php echo $_SESSION['country']=='Germany' ? 'selected' : ''?> value="Germany">Germany</option>
                                        <option <?php echo $_SESSION['country']=='Ghana' ? 'selected' : ''?> value="Ghana">Ghana</option>
                                        <option <?php echo $_SESSION['country']=='Grand Duchy of Tuscany' ? 'selected' : ''?> value="Grand Duchy of Tuscany">Grand Duchy of Tuscany</option>
                                        <option <?php echo $_SESSION['country']=='Greece' ? 'selected' : ''?> value="Greece">Greece</option>
                                        <option <?php echo $_SESSION['country']=='Grenada' ? 'selected' : ''?> value="Grenada">Grenada</option>
                                        <option <?php echo $_SESSION['country']=='Guatemala' ? 'selected' : ''?> value="Guatemala">Guatemala</option>
                                        <option <?php echo $_SESSION['country']=='Guinea' ? 'selected' : ''?> value="Guinea">Guinea</option>
                                        <option <?php echo $_SESSION['country']=='Guinea-Bissau' ? 'selected' : ''?> value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option <?php echo $_SESSION['country']=='Guyana' ? 'selected' : ''?> value="Guyana">Guyana</option>

                                        <option <?php echo $_SESSION['country']=='Haiti' ? 'selected' : ''?> value="Haiti">Haiti</option>
                                        <option <?php echo $_SESSION['country']=='Hanover' ? 'selected' : ''?> value="Hanover">Hanover</option>
                                        <option <?php echo $_SESSION['country']=='Hanseatic Republics' ? 'selected' : ''?> value="Hanseatic Republics">Hanseatic Republics</option>
                                        <option <?php echo $_SESSION['country']=='Hawaii' ? 'selected' : ''?> value="Hawaii">Hawaii</option>
                                        <option <?php echo $_SESSION['country']=='Hesse' ? 'selected' : ''?> value="Hesse">Hesse</option>
                                        <option <?php echo $_SESSION['country']=='Holy See' ? 'selected' : ''?> value="Holy See">Holy See</option>
                                        <option <?php echo $_SESSION['country']=='Honduras' ? 'selected' : ''?> value="Honduras">Honduras</option>
                                        <option <?php echo $_SESSION['country']=='Hungary' ? 'selected' : ''?> value="Hungary">Hungary</option>

                                        <option <?php echo $_SESSION['country']=='Iceland' ? 'selected' : ''?> value="Iceland">Iceland</option>
                                        <option <?php echo $_SESSION['country']=='India' ? 'selected' : ''?> value="India">India</option>
                                        <option <?php echo $_SESSION['country']=='Indonesia' ? 'selected' : ''?> value="Indonesia">Indonesia</option>
                                        <option <?php echo $_SESSION['country']=='Iran' ? 'selected' : ''?> value="Iran">Iran</option>
                                        <option <?php echo $_SESSION['country']=='Iraq' ? 'selected' : ''?> value="Iraq">Iraq</option>
                                        <option <?php echo $_SESSION['country']=='Ireland' ? 'selected' : ''?> value="Ireland">Ireland</option>
                                        <option <?php echo $_SESSION['country']=='Israel' ? 'selected' : ''?> value="Israel">Israel</option>
                                        <option <?php echo $_SESSION['country']=='Italy' ? 'selected' : ''?> value="Italy">Italy</option>

                                        <option <?php echo $_SESSION['country']=='Jamaica' ? 'selected' : ''?> value="Jamaica">Jamaica</option>
                                        <option <?php echo $_SESSION['country']=='Japan' ? 'selected' : ''?> value="Japan">Japan</option>
                                        <option <?php echo $_SESSION['country']=='Jordan' ? 'selected' : ''?> value="Jordan">Jordan</option>

                                        <option <?php echo $_SESSION['country']=='Kazakhstan' ? 'selected' : ''?> value="Kazakhstan">Kazakhstan</option>
                                        <option <?php echo $_SESSION['country']=='Kenya' ? 'selected' : ''?> value="Kenya">Kenya</option>
                                        <option <?php echo $_SESSION['country']=='Kingdom of Serbia/Yugoslavia' ? 'selected' : ''?> value="Kingdom of Serbia/Yugoslavia">Kingdom of Serbia/Yugoslavia</option>
                                        <option <?php echo $_SESSION['country']=='Kiribati' ? 'selected' : ''?> value="Kiribati">Kiribati</option>
                                        <option <?php echo $_SESSION['country']=='Korea' ? 'selected' : ''?> value="Korea">Korea</option>
                                        <option <?php echo $_SESSION['country']=='Kosovo' ? 'selected' : ''?> value="Kosovo">Kosovo</option>
                                        <option <?php echo $_SESSION['country']=='Kuwait' ? 'selected' : ''?> value="Kuwait">Kuwait</option>
                                        <option <?php echo $_SESSION['country']=='Kyrgyzstan' ? 'selected' : ''?> value="Kyrgyzstan">Kyrgyzstan</option>

                                        <option <?php echo $_SESSION['country']=='Laos' ? 'selected' : ''?> value="Laos">Laos</option>
                                        <option <?php echo $_SESSION['country']=='Latvia' ? 'selected' : ''?> value="Latvia">Latvia</option>
                                        <option <?php echo $_SESSION['country']=='Lebanon' ? 'selected' : ''?> value="Lebanon">Lebanon</option>
                                        <option <?php echo $_SESSION['country']=='Lesotho' ? 'selected' : ''?> value="Lesotho">Lesotho</option>
                                        <option <?php echo $_SESSION['country']=='Lew Chew' ? 'selected' : ''?> value="Lew Chew">Lew Chew</option>
                                        <option <?php echo $_SESSION['country']=='Liberia' ? 'selected' : ''?> value="Liberia">Liberia</option>
                                        <option <?php echo $_SESSION['country']=='Libya' ? 'selected' : ''?> value="Libya">Libya</option>
                                        <option <?php echo $_SESSION['country']=='Liechtenstein' ? 'selected' : ''?> value="Liechtenstein">Liechtenstein</option>
                                        <option <?php echo $_SESSION['country']=='Lithuania' ? 'selected' : ''?> value="Lithuania">Lithuania</option>
                                        <option <?php echo $_SESSION['country']=='Luxembourg' ? 'selected' : ''?> value="Luxembourg">Luxembourg</option>

                                        <option <?php echo $_SESSION['country']=='Madagascar' ? 'selected' : ''?> value="Madagascar">Madagascar</option>
                                        <option <?php echo $_SESSION['country']=='Malawi' ? 'selected' : ''?> value="Malawi">Malawi</option>
                                        <option <?php echo $_SESSION['country']=='Malaysia' ? 'selected' : ''?> value="Malaysia">Malaysia</option>
                                        <option <?php echo $_SESSION['country']=='Maldives' ? 'selected' : ''?> value="Maldives">Maldives</option>
                                        <option <?php echo $_SESSION['country']=='Mali' ? 'selected' : ''?> value="Mali">Mali</option>
                                        <option <?php echo $_SESSION['country']=='Malta' ? 'selected' : ''?> value="Malta">Malta</option>
                                        <option <?php echo $_SESSION['country']=='Marshall Islands' ? 'selected' : ''?> value="Marshall Islands">Marshall Islands</option>
                                        <option <?php echo $_SESSION['country']=='Mauritania' ? 'selected' : ''?> value="Mauritania">Mauritania</option>
                                        <option <?php echo $_SESSION['country']=='Mauritius' ? 'selected' : ''?> value="Mauritius">Mauritius</option>
                                        <option <?php echo $_SESSION['country']=='Mecklenburg-Schwerin' ? 'selected' : ''?> value="Mecklenburg-Schwerin">Mecklenburg-Schwerin</option>
                                        <option <?php echo $_SESSION['country']=='Mecklenburg-Strelitz' ? 'selected' : ''?> value="Mecklenburg-Strelitz">Mecklenburg-Strelitz</option>
                                        <option <?php echo $_SESSION['country']=='Mexico' ? 'selected' : ''?> value="Mexico">Mexico</option>
                                        <option <?php echo $_SESSION['country']=='Micronesia' ? 'selected' : ''?> value="Micronesia">Micronesia</option>
                                        <option <?php echo $_SESSION['country']=='Moldova' ? 'selected' : ''?> value="Moldova">Moldova</option>
                                        <option <?php echo $_SESSION['country']=='Monaco' ? 'selected' : ''?> value="Monaco">Monaco</option>
                                        <option <?php echo $_SESSION['country']=='Mongolia' ? 'selected' : ''?> value="Mongolia">Mongolia</option>
                                        <option <?php echo $_SESSION['country']=='Montenegro' ? 'selected' : ''?> value="Montenegro">Montenegro</option>
                                        <option <?php echo $_SESSION['country']=='Morocco' ? 'selected' : ''?> value="Morocco">Morocco</option>
                                        <option <?php echo $_SESSION['country']=='Mozambique' ? 'selected' : ''?> value="Mozambique">Mozambique</option>

                                        <option <?php echo $_SESSION['country']=='Namibia' ? 'selected' : ''?> value="Namibia">Namibia</option>
                                        <option <?php echo $_SESSION['country']=='Nassau' ? 'selected' : ''?> value="Nassau">Nassau</option>
                                        <option <?php echo $_SESSION['country']=='Nauru' ? 'selected' : ''?> value="Nauru">Nauru</option>
                                        <option <?php echo $_SESSION['country']=='Nepal' ? 'selected' : ''?> value="Nepal">Nepal</option>
                                        <option <?php echo $_SESSION['country']=='Netherlands' ? 'selected' : ''?> value="Netherlands">Netherlands</option>
                                        <option <?php echo $_SESSION['country']=='New Zealand' ? 'selected' : ''?> value="New Zealand">New Zealand</option>
                                        <option <?php echo $_SESSION['country']=='Nicaragua' ? 'selected' : ''?> value="Nicaragua">Nicaragua</option>
                                        <option <?php echo $_SESSION['country']=='Niger' ? 'selected' : ''?> value="Niger">Niger</option>
                                        <option <?php echo $_SESSION['country']=='Nigeria' ? 'selected' : ''?> value="Nigeria">Nigeria</option>
                                        <option <?php echo $_SESSION['country']=='North German Confederation' ? 'selected' : ''?> value="North German Confederation">North German Confederation</option>
                                        <option <?php echo $_SESSION['country']=='North German Union' ? 'selected' : ''?> value="North German Union">North German Union</option>
                                        <option <?php echo $_SESSION['country']=='North Macedonia' ? 'selected' : ''?> value="North Macedonia">North Macedonia</option>
                                        <option <?php echo $_SESSION['country']=='Norway' ? 'selected' : ''?> value="Norway">Norway</option>


                                        <option <?php echo $_SESSION['country']=='Oman' ? 'selected' : ''?> value="Oman">Oman</option>


                                        <option <?php echo $_SESSION['country']=='Pakistan' ? 'selected' : ''?> value="Pakistan">Pakistan</option>
                                        <option <?php echo $_SESSION['country']=='Palau' ? 'selected' : ''?> value="Palau">Palau</option>
                                        <option <?php echo $_SESSION['country']=='Panama' ? 'selected' : ''?> value="Panama">Panama</option>
                                        <option <?php echo $_SESSION['country']=='Papua New Guinea' ? 'selected' : ''?> value="Papua New Guinea">Papua New Guinea</option>
                                        <option <?php echo $_SESSION['country']=='Paraguay' ? 'selected' : ''?> value="Paraguay">Paraguay</option>
                                        <option <?php echo $_SESSION['country']=='Peru' ? 'selected' : ''?> value="Peru">Peru</option>
                                        <option <?php echo $_SESSION['country']=='Philippines' ? 'selected' : ''?> value="Philippines">Philippines</option>
                                        <option <?php echo $_SESSION['country']=='Poland' ? 'selected' : ''?> value="Poland">Poland</option>
                                        <option <?php echo $_SESSION['country']=='Portugal' ? 'selected' : ''?> value="Portugal">Portugal</option>
                                        <option <?php echo $_SESSION['country']=='Puerto Rico' ? 'selected' : ''?> value="Puerto Rico">Puerto Rico</option>

                                        <option <?php echo $_SESSION['country']=='Qatar' ? 'selected' : ''?> value="Qatar">Qatar</option>

                                        <option <?php echo $_SESSION['country']=='Russian Federation' ? 'selected' : ''?> value="Russian Federation">Russian Federation</option>
                                        <option <?php echo $_SESSION['country']=='Romania' ? 'selected' : ''?> value="Romania">Romania</option>
                                        <option <?php echo $_SESSION['country']=='Rwanda' ? 'selected' : ''?> value="Rwanda">Rwanda</option>

                                        <option <?php echo $_SESSION['country']=='Samoa' ? 'selected' : ''?> value="Samoa">Samoa</option>
                                        <option <?php echo $_SESSION['country']=='San Marino' ? 'selected' : ''?> value="San Marino">San Marino</option>
                                        <option <?php echo $_SESSION['country']=='Sao Tome and Principe' ? 'selected' : ''?> value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option <?php echo $_SESSION['country']=='Saudi Arabia' ? 'selected' : ''?> value="Saudi Arabia">Saudi Arabia</option>
                                        <option <?php echo $_SESSION['country']=='Senegal' ? 'selected' : ''?> value="Senegal">Senegal</option>
                                        <option <?php echo $_SESSION['country']=='Serbia' ? 'selected' : ''?> value="Serbia">Serbia</option>
                                        <option <?php echo $_SESSION['country']=='Seychelles' ? 'selected' : ''?> value="Seychelles">Seychelles</option>
                                        <option <?php echo $_SESSION['country']=='Sierra Leone' ? 'selected' : ''?> value="Sierra Leone">Sierra Leone</option>
                                        <option <?php echo $_SESSION['country']=='Singapore' ? 'selected' : ''?> value="Singapore">Singapore</option>
                                        <option <?php echo $_SESSION['country']=='Sint Maarten (Dutch part)' ? 'selected' : ''?> value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                        <option <?php echo $_SESSION['country']=='Slovak Republic' ? 'selected' : ''?> value="Slovak Republic">Slovak Republic</option>
                                        <option <?php echo $_SESSION['country']=='Slovenia' ? 'selected' : ''?> value="Slovenia">Slovenia</option>
                                        <option <?php echo $_SESSION['country']=='Solomon Islands' ? 'selected' : ''?> value="Solomon Islands">Solomon Islands</option>
                                        <option <?php echo $_SESSION['country']=='Somalia' ? 'selected' : ''?> value="Somalia">Somalia</option>
                                        <option <?php echo $_SESSION['country']=='South Africa' ? 'selected' : ''?> value="South Africa">South Africa</option>
                                        <option <?php echo $_SESSION['country']=='South Sudan' ? 'selected' : ''?> value="South Sudan">South Sudan</option>
                                        <option <?php echo $_SESSION['country']=='Spain' ? 'selected' : ''?> value="Spain">Spain</option>
                                        <option <?php echo $_SESSION['country']=='Sri Lanka' ? 'selected' : ''?> value="Sri Lanka">Sri Lanka</option>
                                        <option <?php echo $_SESSION['country']=='St. Kitts and Nevis' ? 'selected' : ''?> value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                        <option <?php echo $_SESSION['country']=='St. Lucia' ? 'selected' : ''?> value="St. Lucia">St. Lucia</option>
                                        <option <?php echo $_SESSION['country']=='St. Martin (French part)' ? 'selected' : ''?> value="St. Martin (French part)">St. Martin (French part)</option>
                                        <option <?php echo $_SESSION['country']=='St. Vincent and the Grenadines' ? 'selected' : ''?> value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                        <option <?php echo $_SESSION['country']=='Sudan' ? 'selected' : ''?> value="Sudan">Sudan</option>
                                        <option <?php echo $_SESSION['country']=='Suriname' ? 'selected' : ''?> value="Suriname">Suriname</option>
                                        <option <?php echo $_SESSION['country']=='Sweden' ? 'selected' : ''?> value="Sweden">Sweden</option>
                                        <option <?php echo $_SESSION['country']=='Switzerland' ? 'selected' : ''?> value="Switzerland">Switzerland</option>
                                        <option <?php echo $_SESSION['country']=='Syrian Arab Republic' ? 'selected' : ''?> value="Syrian Arab Republic">Syrian Arab Republic</option>

                                        <option <?php echo $_SESSION['country']=='Tajikistan' ? 'selected' : ''?> value="Tajikistan">Tajikistan</option>
                                        <option <?php echo $_SESSION['country']=='Tanzania' ? 'selected' : ''?> value="Tanzania">Tanzania</option>
                                        <option <?php echo $_SESSION['country']=='Thailand' ? 'selected' : ''?> value="Thailand">Thailand</option>
                                        <option <?php echo $_SESSION['country']=='Timor-Leste' ? 'selected' : ''?> value="Timor-Leste">Timor-Leste</option>
                                        <option <?php echo $_SESSION['country']=='Togo' ? 'selected' : ''?> value="Togo">Togo</option>
                                        <option <?php echo $_SESSION['country']=='Tonga' ? 'selected' : ''?> value="Tonga">Tonga</option>
                                        <option <?php echo $_SESSION['country']=='Trinidad and Tobago' ? 'selected' : ''?> value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option <?php echo $_SESSION['country']=='Tunisia' ? 'selected' : ''?> value="Tunisia">Tunisia</option>
                                        <option <?php echo $_SESSION['country']=='Turkiye' ? 'selected' : ''?> value="Turkiye">Turkiye</option>
                                        <option <?php echo $_SESSION['country']=='urkmenistan' ? 'selected' : ''?> value="Turkmenistan">Turkmenistan</option>
                                        <option <?php echo $_SESSION['country']=='Turks and Caicos Islands' ? 'selected' : ''?> value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option <?php echo $_SESSION['country']=='Tuvalu' ? 'selected' : ''?> value="Tuvalu">Tuvalu</option>

                                        <option <?php echo $_SESSION['country']=='Uganda' ? 'selected' : ''?> value="Uganda">Uganda</option>
                                        <option <?php echo $_SESSION['country']=='Ukraine' ? 'selected' : ''?> value="Ukraine">Ukraine</option>
                                        <option <?php echo $_SESSION['country']=='United Arab Emirates' ? 'selected' : ''?> value="United Arab Emirates">United Arab Emirates</option>
                                        <option <?php echo $_SESSION['country']=='United Kingdom' ? 'selected' : ''?> value="United Kingdom">United Kingdom</option>
                                        <option <?php echo $_SESSION['country']=='United States' ? 'selected' : ''?> value="United States">United States</option>
                                        <option <?php echo $_SESSION['country']=='Uruguay' ? 'selected' : ''?> value="Uruguay">Uruguay</option>
                                        <option <?php echo $_SESSION['country']=='Uzbekistan' ? 'selected' : ''?> value="Uzbekistan">Uzbekistan</option>

                                        <option <?php echo $_SESSION['country']=='Vanuatu' ? 'selected' : ''?> value="Vanuatu">Vanuatu</option>
                                        <option <?php echo $_SESSION['country']=='Venezuela, RB' ? 'selected' : ''?> value="Venezuela, RB">Venezuela, RB</option>
                                        <option <?php echo $_SESSION['country']=='Vietnam' ? 'selected' : ''?> value="Vietnam">Vietnam</option>
                                        <option <?php echo $_SESSION['country']=='Virgin Islands (U.S.)' ? 'selected' : ''?> value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option <?php echo $_SESSION['country']=='West Bank and Gaza' ? 'selected' : ''?> value="West Bank and Gaza"> West Bank and Gaza</option>
                                        <option <?php echo $_SESSION['country']=='Yemen, Rep.' ? 'selected' : ''?> value="Yemen, Rep.">Yemen, Rep.</option>
                                        <option <?php echo $_SESSION['country']=='Zambia' ? 'selected' : ''?> value="Zambia">Zambia</option>
                                        <option <?php echo $_SESSION['country']=='Zimbabwe' ? 'selected' : ''?> value="Zimbabwe">Zimbabwe</option>

                                    </select>
                                </div>

                                <div class="col-lg-12">

                                    <label>Street address <sup>*</sup></label>
                                    <input type="text" name="address" placeholder="House number and street name" id="address" class="form-control">
                                </div>

                                <div class="col-lg-12">

                                    <label>Town / City <sup>*</sup></label>
                                    <input type="text" name="city" placeholder="House number and street name" id="city" class="form-control">
                                </div>

                                <div class="col-lg-12">
                                    <label>Postcode/ZIP <sup>*</sup></label>
                                    <input type="text" name="pincode" placeholder="Pincode number and Zip" id="pincode" class="form-control">
                                </div>
                                <div class="col-lg-12">
                                    <label>Mobile Number<sup>*</sup></label>
                                    <input type="text" name="phone" placeholder="Enter Your Mobile number" id="phone" class="form-control" value="<?php echo $_SESSION['mobile_no']?>" readonly pattern="[0-9]{10}">
                                </div>
                                <div class="col-lg-12">
                                    <label>Email<sup>*</sup></label>
                                    <input type="email" name="email" placeholder="Enter Your Email " id="Email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h5>ADDITIONAL DETAILS</h5>
                            <label>Order notes (optional)
                            </label>
                            <textarea class="form-control " name="notes" placeholder="Notes about your order, e.g. special notes for delivery.">
                           </textarea>
                        </div>
                        <div class=" mt-3 text-center">
                            <button class="btn btn-success" type="submit" id="checkoutButton">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- <div class="container cont-width mt-4">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <nav class="navbar bg-body-tertiary1 p-3">
                    <div class="container-fluid justify-content-start">

                        <a class="navbar-brand" href="#">
                            <h6>Credit Card/Debit Card/NetBanking </h6>
                        </a>
                        <span>
                            <div class="payment-logo">
                                <img src="public\images\payment.svg ">
                        </span>
                    </div>
            </div>
            <div class="col-lg-12">
                <div class="pay-method ">
                    <p>Pay securely by Credit or Debit card or Internet Banking through Razorpay.</p>
                </div>
            </div>
            <div class="pay-method-1">
                <p>Your personal data will be used to process your order, support your experience throughout this
                    website, and for other purposes described in our<a href="<?php echo base_url('privacypolicy'); ?>">privacy policy</a> </p>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label f-label" for="flexCheckDefault">
                    I have read and agree to the website <a href="<?php echo base_url('privacypolicy'); ?>"> terms
                        and conditions *</a>
                </label>
            </div>

            <div class="place-btn d-block w-100 ">
                <button class="button-content  " type="submit" role="button">

                    <span class="button-text">PLACE ORDER</a> </span>

                </button>
            </div>

        </nav>
        </form>
        </div>
    </div> -->

    <?php include('footer.php'); ?>