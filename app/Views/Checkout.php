<?php include('header.php'); ?>

<body>


    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
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

    <!-- <div class="container cont-width mb-3">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid check-cont">
                        <p>Kathak Lehanga has been added to your cart.</p>

                        <a href="<?php echo base_url('shop'); ?>" class="cont-shop">CONTINUE SHOPPING</a>
                    </div>
                </nav>

            </div>
        </div>


    </div> -->



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
                                    <input type="text" name="Fname" class="form-control" id="Fname" />
                                    <!-- <span id="message" class="error"></span> -->
                                </div>
                                <div class="col-lg-6">
                                    <label>Last name <sup>*</sup></label>
                                    <input type="text" name="Lname" class="form-control" id="Lname" />
                                </div>
                                <div class="col-lg-12">
                                    <label>Country/Region <sup>*</sup></label>
                                    <select class="form-select form-control required" name="country" aria-label="Default select example" id="country">

                                        <option value="">Open this select menu</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>

                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Baden">Baden</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Bavaria">Bavaria</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia">Bosnia</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Brunswick">Brunswick</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina">Burkina</option>
                                        <option value="Burma">Burma</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cayman Islands, The">Cayman Islands, The</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Central American Federation">Central American Federation</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo Free State">Congo Free State</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d’Ivoire">Cote d’Ivoire </option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czechia">Czechia</option>
                                        <option value="Czechoslovakia">Czechoslovakia</option>
                                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Duchy of Parma">Duchy of Parma</option>
                                        <option value="East Germany">East Germany </option>
                                        <option value="Ecuadora">Ecuadora</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador </option>
                                        <option value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option value="Eritrea">Eritrea </option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini </option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Federal Government of Germany">Federal Government of Germany</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Grand Duchy of Tuscany">Grand Duchy of Tuscany</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>

                                        <option value="Haiti">Haiti</option>
                                        <option value="Hanover">Hanover</option>
                                        <option value="Hanseatic Republics">Hanseatic Republics</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Hesse">Hesse</option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>

                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>

                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>

                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kingdom of Serbia/Yugoslavia">Kingdom of Serbia/Yugoslavia</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea">Korea</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kosovo">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Lew Chew">Lew Chew</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>

                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mecklenburg-Schwerin">Mecklenburg-Schwerin</option>
                                        <option value="Mecklenburg-Strelitz">Mecklenburg-Strelitz</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>

                                        <option value="Namibia">Namibia</option>
                                        <option value="Nassau">Nassau</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North German Confederation">North German Confederation</option>
                                        <option value="North German Union">North German Union</option>
                                        <option value="North Macedonia">North Macedonia</option>
                                        <option value="Norway">Norway</option>


                                        <option value="Oman">Oman</option>


                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>

                                        <option value="Qatar">Qatar</option>

                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Rwanda">Rwanda</option>

                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                        <option value="Slovak Republic">Slovak Republic</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                        <option value="St. Lucia">St. Lucia</option>
                                        <option value="St. Martin (French part)">St. Martin (French part)</option>
                                        <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand ">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkiye">Turkiye</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>

                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>

                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela, RB">Venezuela, RB</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="West Bank and Gaza"> West Bank and Gaza</option>
                                        <option value="Yemen, Rep.">Yemen, Rep.</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>

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
                                    <input type="text" name="phone" placeholder="Enter Your Mobile number" id="phone" class="form-control" pattern="[0-9]{10}">
                                </div>
                                <div class="col-lg-12">
                                    <label>Email<sup>*</sup></label>
                                    <input type="email" name="email" placeholder="Enter Your Email " id="Email" class="form-control">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Create an account?
                                    </label>
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