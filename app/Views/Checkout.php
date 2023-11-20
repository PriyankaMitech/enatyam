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
                                        <option value="3">Lesotho</option>
                                        <option value="3">Lew Chew</option>
                                        <option value="3">Liberia</option>
                                        <option value="3">Libya</option>
                                        <option value="3">Liechtenstein</option>
                                        <option value="3">Lithuania</option>
                                        <option value="3">Luxembourg</option>

                                        <option value="3">Madagascar</option>
                                        <option value="3">Malawi</option>
                                        <option value="3">Malaysia</option>
                                        <option value="3">Maldives</option>
                                        <option value="3">Mali</option>
                                        <option value="3">Malta</option>
                                        <option value="3">Marshall Islands</option>
                                        <option value="3">Mauritania</option>
                                        <option value="3">Mauritius</option>
                                        <option value="3">Mecklenburg-Schwerin</option>
                                        <option value="3">Mecklenburg-Strelitz</option>
                                        <option value="3">Mexico</option>
                                        <option value="3">Micronesia</option>
                                        <option value="3">Moldova</option>
                                        <option value="3">Monaco</option>
                                        <option value="3">Mongolia</option>
                                        <option value="3">Montenegro</option>
                                        <option value="3">Morocco</option>
                                        <option value="3">Mozambique</option>

                                        <option value="3">Namibia</option>
                                        <option value="3">Nassau</option>
                                        <option value="3">Nauru</option>
                                        <option value="3">Nepal</option>
                                        <option value="3">Netherlands</option>
                                        <option value="3">New Zealand</option>
                                        <option value="3">Nicaragua</option>
                                        <option value="3">Niger</option>
                                        <option value="3">Nigeria</option>
                                        <option value="3">North German Confederation</option>
                                        <option value="3">North German Union</option>
                                        <option value="3">North Macedonia</option>
                                        <option value="3">Norway</option>


                                        <option value="3">Oman</option>


                                        <option value="3">Pakistan</option>
                                        <option value="3">Palau</option>
                                        <option value="3">Panama</option>
                                        <option value="3">Papua New Guinea</option>
                                        <option value="3">Paraguay</option>
                                        <option value="3">Peru</option>
                                        <option value="3">Philippines</option>
                                        <option value="3">Poland</option>
                                        <option value="3">Portugal</option>
                                        <option value="3">Puerto Rico</option>

                                        <option value="3">Qatar</option>

                                        <option value="3">Russian Federation</option>
                                        <option value="3">Romania</option>
                                        <option value="3">Rwanda</option>

                                        <option value="3">Samoa</option>
                                        <option value="3">San Marino</option>
                                        <option value="3">Sao Tome and Principe</option>
                                        <option value="3">Saudi Arabia</option>
                                        <option value="3">Senegal</option>
                                        <option value="3">Serbia</option>
                                        <option value="3">Seychelles</option>
                                        <option value="3">Sierra Leone</option>
                                        <option value="3">Singapore</option>
                                        <option value="3">Sint Maarten (Dutch part)</option>
                                        <option value="3">Slovak Republic</option>
                                        <option value="3">Slovenia</option>
                                        <option value="3">Solomon Islands</option>
                                        <option value="3">Somalia</option>
                                        <option value="3">South Africa</option>
                                        <option value="3">South Sudan</option>
                                        <option value="3">Spain</option>
                                        <option value="3">Sri Lanka</option>
                                        <option value="3">St. Kitts and Nevis</option>
                                        <option value="3">St. Lucia</option>
                                        <option value="3">St. Martin (French part)</option>
                                        <option value="3">St. Vincent and the Grenadines</option>
                                        <option value="3">Sudan</option>
                                        <option value="3">Suriname</option>
                                        <option value="3">Sweden</option>
                                        <option value="3">Switzerland</option>
                                        <option value="3">Syrian Arab Republic</option>

                                        <option value="3">Tajikistan</option>
                                        <option value="3">Tanzania</option>
                                        <option value="3">Thailand</option>
                                        <option value="3">Timor-Leste</option>
                                        <option value="3">Togo</option>
                                        <option value="3">Tonga</option>
                                        <option value="3">Trinidad and Tobago</option>
                                        <option value="3">Tunisia</option>
                                        <option value="3">Turkiye</option>
                                        <option value="3">Turkmenistan</option>
                                        <option value="3">Turks and Caicos Islands</option>
                                        <option value="3">Tuvalu</option>

                                        <option value="3">Uganda</option>
                                        <option value="3">Ukraine</option>
                                        <option value="3">United Arab Emirates</option>
                                        <option value="3">United Kingdom</option>
                                        <option value="3">United States</option>
                                        <option value="3">Uruguay</option>
                                        <option value="3">Uzbekistan</option>

                                        <option value="3">Vanuatu</option>
                                        <option value="3">Venezuela, RB</option>
                                        <option value="3">Vietnam</option>
                                        <option value="3">Virgin Islands (U.S.)</option>
                                        <option value="3"> West Bank and Gaza</option>
                                        <option value="3">Yemen, Rep.</option>
                                        <option value="3">Zambia</option>
                                        <option value="3">Zimbabwe</option>

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