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
                                    <input type="text" name="Fname" class="form-control" id="Fname" value="<?php echo $_SESSION['user_name']?>" disabled />
                                </div>
                                <div class="col-lg-6">
                                    <label>Last name <sup>*</sup></label>
                                    <input type="text" name="Lname" class="form-control" id="Lname" />
                                </div>
                                <div class="col-lg-12">
                                    <label>Country/Region <sup>*</sup></label>
                                    <select class="form-select form-control required" name="country" aria-label="Default select example" id="country" disabled>

                                        <option value="">Open this select menu</option>
                                        <option <?php echo $_SESSION['country']=='Afghanistan' ? 'selected' : ''?> value="Afghanistan">Afghanistan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Åland Islands">Åland Islands</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Albania">Albania</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Algeria">Algeria</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="American Samoa">American Samoa</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Andorra">Andorra</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Angola">Angola</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Anguilla">Anguilla</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Antarctica">Antarctica</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Argentina">Argentina</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Armenia">Armenia</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Aruba">Aruba</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Australia">Australia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Austria">Austria</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Azerbaijan">Azerbaijan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bahamas">Bahamas</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Baden">Baden</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bahrain">Bahrain</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bangladesh">Bangladesh</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Barbados">Barbados</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bavaria">Bavaria</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Belarus">Belarus</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Belgium">Belgium</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Belize">Belize</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Benin">Benin</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bolivia">Bolivia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bosnia">Bosnia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Botswana">Botswana</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Brazil">Brazil</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Brunei">Brunei</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Brunswick">Brunswick</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Bulgaria">Bulgaria</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Burkina">Burkina</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Burma">Burma</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Burundi">Burundi</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cabo Verde">Cabo Verde</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cambodia">Cambodia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cameroon">Cameroon</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Canada">Canada</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cayman Islands, The">Cayman Islands, The</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Central African Republic">Central African Republic</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Central American Federation">Central American Federation</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Chad">Chad</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Chile">Chile</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="China">China</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Colombia">Colombia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Comoros">Comoros</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Congo Free State">Congo Free State</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Costa Rica">Costa Rica</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cote d’Ivoire">Cote d’Ivoire </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Croatia">Croatia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cuba">Cuba</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Cyprus">Cyprus</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Czechia">Czechia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Czechoslovakia">Czechoslovakia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Denmark">Denmark</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Djibouti">Djibouti</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Dominica">Dominica</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Dominican Republic">Dominican Republic</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Duchy of Parma">Duchy of Parma</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="East Germany">East Germany </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Ecuadora">Ecuadora</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Egypt">Egypt</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="El Salvador">El Salvador </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Eritrea">Eritrea </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Estonia">Estonia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Eswatini">Eswatini </option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Ethiopia">Ethiopia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Federal Government of Germany">Federal Government of Germany</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Fiji">Fiji</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Finland">Finland</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="France">France</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Gabon">Gabon</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Gambia">Gambia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Georgia">Georgia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Germany">Germany</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Ghana">Ghana</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Grand Duchy of Tuscany">Grand Duchy of Tuscany</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Greece">Greece</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Grenada">Grenada</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Guatemala">Guatemala</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Guinea">Guinea</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Guyana">Guyana</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Haiti">Haiti</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Hanover">Hanover</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Hanseatic Republics">Hanseatic Republics</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Hawaii">Hawaii</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Hesse">Hesse</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Holy See">Holy See</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Honduras">Honduras</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Hungary">Hungary</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Iceland">Iceland</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="India">India</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Indonesia">Indonesia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Iran">Iran</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Iraq">Iraq</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Ireland">Ireland</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Israel">Israel</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Italy">Italy</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Jamaica">Jamaica</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Japan">Japan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Jordan">Jordan</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kazakhstan">Kazakhstan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kenya">Kenya</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kingdom of Serbia/Yugoslavia">Kingdom of Serbia/Yugoslavia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kiribati">Kiribati</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Korea">Korea</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kosovo">Kosovo</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kosovo">Kuwait</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Kyrgyzstan">Kyrgyzstan</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Laos">Laos</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Latvia">Latvia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Lebanon">Lebanon</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Lesotho">Lesotho</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Lew Chew">Lew Chew</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Liberia">Liberia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Libya">Libya</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Liechtenstein">Liechtenstein</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Lithuania">Lithuania</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Luxembourg">Luxembourg</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Madagascar">Madagascar</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Malawi">Malawi</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Malaysia">Malaysia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Maldives">Maldives</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mali">Mali</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Malta">Malta</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Marshall Islands">Marshall Islands</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mauritania">Mauritania</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mauritius">Mauritius</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mecklenburg-Schwerin">Mecklenburg-Schwerin</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mecklenburg-Strelitz">Mecklenburg-Strelitz</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mexico">Mexico</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Micronesia">Micronesia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Moldova">Moldova</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Monaco">Monaco</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mongolia">Mongolia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Montenegro">Montenegro</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Morocco">Morocco</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Mozambique">Mozambique</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Namibia">Namibia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Nassau">Nassau</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Nauru">Nauru</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Nepal">Nepal</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Netherlands">Netherlands</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="New Zealand">New Zealand</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Nicaragua">Nicaragua</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Niger">Niger</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Nigeria">Nigeria</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="North German Confederation">North German Confederation</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="North German Union">North German Union</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="North Macedonia">North Macedonia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Norway">Norway</option>


                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Oman">Oman</option>


                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Pakistan">Pakistan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Palau">Palau</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Panama">Panama</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Papua New Guinea">Papua New Guinea</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Paraguay">Paraguay</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Peru">Peru</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Philippines">Philippines</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Poland">Poland</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Portugal">Portugal</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Puerto Rico">Puerto Rico</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Qatar">Qatar</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Russian Federation">Russian Federation</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Romania">Romania</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Rwanda">Rwanda</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Samoa">Samoa</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="San Marino">San Marino</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Saudi Arabia">Saudi Arabia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Senegal">Senegal</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Serbia">Serbia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Seychelles">Seychelles</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sierra Leone">Sierra Leone</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Singapore">Singapore</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Slovak Republic">Slovak Republic</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Slovenia">Slovenia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Solomon Islands">Solomon Islands</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Somalia">Somalia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="South Africa">South Africa</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="South Sudan">South Sudan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Spain">Spain</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sri Lanka">Sri Lanka</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="St. Lucia">St. Lucia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="St. Martin (French part)">St. Martin (French part)</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sudan">Sudan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Suriname">Suriname</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Sweden">Sweden</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Switzerland">Switzerland</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Syrian Arab Republic">Syrian Arab Republic</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Tajikistan">Tajikistan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Tanzania">Tanzania</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Thailand ">Thailand</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Timor-Leste">Timor-Leste</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Togo">Togo</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Tonga">Tonga</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Tunisia">Tunisia</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Turkiye">Turkiye</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Turkmenistan">Turkmenistan</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Tuvalu">Tuvalu</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Uganda">Uganda</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Ukraine">Ukraine</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="United Arab Emirates">United Arab Emirates</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="United Kingdom">United Kingdom</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="United States">United States</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Uruguay">Uruguay</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Uzbekistan">Uzbekistan</option>

                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Vanuatu">Vanuatu</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Venezuela, RB">Venezuela, RB</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Vietnam">Vietnam</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="West Bank and Gaza"> West Bank and Gaza</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Yemen, Rep.">Yemen, Rep.</option>
                                        <option <?php echo $_SESSION ? 'selected' : ''?> value="Zambia">Zambia</option>
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
                                    <input type="text" name="phone" placeholder="Enter Your Mobile number" id="phone" class="form-control" value="<?php echo $_SESSION['mobile_no']?>" disabled pattern="[0-9]{10}">
                                </div>
                                <div class="col-lg-12">
                                    <label>Email<sup>*</sup></label>
                                    <input type="email" name="email" placeholder="Enter Your Email " id="Email" class="form-control" value="<?php echo $_SESSION['email']?>" disabled>
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