<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/Checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fontawesome icon cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->

</head>

<body>
    <?php include('header.php');?>
    <?php if (session()->getFlashdata('success')): ?>
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

                        <a href="<?php echo base_url('shop');?>" class="cont-shop">CONTINUE SHOPPING</a>
                    </div>
                </nav>

            </div>
        </div>


    </div> -->
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid check-cont justify-content-start">
                        <p>Returning customer?
                        </p>

                        <a class="cont-shop1" id="log-btn">Click here to login</a>
                    </div>
                </nav>

                <div class="login-div">

                    <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                        please proceed to the Billing section.

                    </p>

                    <form>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label>Username or email <sup>*</sup></label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Password<sup>*</sup></label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="col-lg-2 ">
                                <button type="submit" class="btn log-btn">LOGIN</button>
                            </div>
                            <div class="col-lg-10 my-auto ">
                                <input type="checkbox" id="rembme"> <label> Remember me</label>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <a href="">Lost your password?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid check-cont justify-content-start">
                        <p>Have a coupon?
                        </p>

                        <a id="log-btn1" class="cont-shop1">Click here to enter your code
                        </a>
                    </div>
                </nav>


                <div class="login-div log-div">

                    <p>If you have a coupon code, please apply it below.



                    </p>

                    <form>
                        <div class="row">
                            <div class="col-lg-6 my-auto">

                                <input type="text" class="form-control" placeholder="Coupon Code" />
                            </div>

                            <div class="col-lg-3 ">
                                <button type="submit" class="btn log-btn">APPLY COUPOUN</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container cont-width">
        <div class="row">

            <div class="col-lg-12  ">
                <form class="check-form" action="BillingInformation" method="post">


                    <div class="row">
                        <div class="col-lg-6">
                            <h5>BILLING DETAILS</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>First name <sup>*</sup></label>
                                    <input type="text" name="Fname" class="form-control" />

                                </div>
                                <div class="col-lg-6">

                                    <label>Last name <sup>*</sup></label>
                                    <input type="text" name="Lname" class="form-control" />
                                </div>

                                <div class="col-lg-12">

                                    <label>Country/Region <sup>*</sup></label>
                                    <select class="form-select form-control" name="country"
                                        aria-label="Default select example">

                                        <option selected>Open this select menu</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Åland Islands</option>
                                        <option value="3">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="3">American Samoa</option>
                                        <option value="3">Andorra</option>
                                        <option value="3">Angola</option>
                                        <option value="3">Anguilla</option>
                                        <option value="3">Antarctica</option>
                                        <option value="3">Antigua and Barbuda</option>
                                        <option value="3">Argentina</option>
                                        <option value="3">Armenia</option>

                                        <option value="3">Aruba</option>
                                        <option value="3">Australia</option>
                                        <option value="3">Austria</option>
                                        <option value="3">Azerbaijan</option>
                                        <option value="3">Bahamas</option>
                                        <option value="3">Baden</option>
                                        <option value="3">Bahrain</option>
                                        <option value="3">Bangladesh</option>
                                        <option value="3">Barbados</option>
                                        <option value="3">Bavaria</option>
                                        <option value="3">Belarus</option>
                                        <option value="3">Belgium</option>
                                        <option value="3">Belize</option>
                                        <option value="3">Benin</option>
                                        <option value="3">Bolivia</option>
                                        <option value="3">Bosnia</option>
                                        <option value="3">Botswana</option>
                                        <option value="3">Brazil</option>
                                        <option value="3">Brunei</option>
                                        <option value="3">Brunswick</option>
                                        <option value="3">Bulgaria</option>
                                        <option value="3">Burkina</option>
                                        <option value="3">Burma</option>
                                        <option value="3">Burundi</option>
                                        <option value="3">Cabo Verde</option>
                                        <option value="3">Cambodia</option>
                                        <option value="3">Cameroon</option>
                                        <option value="3">Canada</option>
                                        <option value="3">Cayman Islands, The</option>
                                        <option value="3">Central African Republic</option>
                                        <option value="3">Central American Federation</option>
                                        <option value="3">Chad</option>
                                        <option value="3">Chile</option>
                                        <option value="3">China</option>
                                        <option value="3">Colombia</option>
                                        <option value="3">Comoros</option>
                                        <option value="3">Congo Free State</option>
                                        <option value="3">Costa Rica</option>
                                        <option value="3">Cote d’Ivoire </option>
                                        <option value="3">Croatia</option>
                                        <option value="3">Cuba</option>
                                        <option value="3">Cyprus</option>
                                        <option value="3">Czechia</option>
                                        <option value="3">Czechoslovakia</option>
                                        <option value="3">Democratic Republic of the Congo</option>
                                        <option value="3">Denmark</option>
                                        <option value="3">Djibouti</option>
                                        <option value="3">Dominica</option>
                                        <option value="3">Dominican Republic</option>
                                        <option value="3">Duchy of Parma</option>
                                        <option value="3">East Germany </option>
                                        <option value="3">Ecuadora</option>
                                        <option value="3">Egypt</option>
                                        <option value="3">El Salvador </option>
                                        <option value="3">Equatorial Guinea </option>
                                        <option value="3">Eritrea </option>
                                        <option value="3">Estonia</option>
                                        <option value="3">Eswatini </option>
                                        <option value="3">Ethiopia</option>
                                        <option value="3">Federal Government of Germany</option>
                                        <option value="3">Fiji</option>
                                        <option value="3">Finland</option>
                                        <option value="3">France</option>
                                        <option value="3">Gabon</option>
                                        <option value="3">Gambia</option>
                                        <option value="3">Georgia</option>
                                        <option value="3">Germany</option>
                                        <option value="3">Ghana</option>
                                        <option value="3">Grand Duchy of Tuscany</option>
                                        <option value="3">Greece</option>
                                        <option value="3">Grenada</option>
                                        <option value="3">Guatemala</option>
                                        <option value="3">Guinea</option>
                                        <option value="3">Guinea-Bissau</option>
                                        <option value="3">Guyana</option>

                                        <option value="3">Haiti</option>
                                        <option value="3">Hanover</option>
                                        <option value="3">Hanseatic Republics</option>
                                        <option value="3">Hawaii</option>
                                        <option value="3">Hesse</option>
                                        <option value="3">Holy See</option>
                                        <option value="3">Honduras</option>
                                        <option value="3">Hungary</option>

                                        <option value="3">Iceland</option>
                                        <option value="3">India</option>
                                        <option value="3">Indonesia</option>
                                        <option value="3">Iran</option>
                                        <option value="3">Iraq</option>
                                        <option value="3">Ireland</option>
                                        <option value="3">Israel</option>
                                        <option value="3">Italy</option>

                                        <option value="3">Jamaica</option>
                                        <option value="3">Japan</option>
                                        <option value="3">Jordan</option>

                                        <option value="3">Kazakhstan</option>
                                        <option value="3">Kenya</option>
                                        <option value="3">Kingdom of Serbia/Yugoslavia</option>
                                        <option value="3">Kiribati</option>
                                        <option value="3">Korea</option>
                                        <option value="3">Kosovo</option>
                                        <option value="3">Kuwait</option>
                                        <option value="3">Kyrgyzstan</option>

                                        <option value="3">Laos</option>
                                        <option value="3">Latvia</option>
                                        <option value="3">Lebanon</option>
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
                                    <input type="address" name="address" placeholder="House number and street name"
                                        id="address" class="form-control" aria-describedby="addHelpBlock">
                                </div>

                                <div class="col-lg-12">

                                    <label>Town / City <sup>*</sup></label>
                                    <input type="address" name="city" placeholder="House number and street name"
                                        id="address" class="form-control" aria-describedby="addHelpBlock">
                                </div>

<!-- 
                                <div class="col-lg-12">

                                    <label>State/County <sup>*</sup></label>
                                    <select class=" form-control" name="state" aria-required="true" aria-invalid="false"
                                        aria-label="Default select example">

                                        <option selected>Open this select menu</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Åland Islands</option>
                                        <option value="3">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="3">American Samoa</option>
                                        <option value="3">Andorra</option>
                                        <option value="3">Angola</option>
                                        <option value="3">Anguilla</option>
                                        <option value="3">Antarctica</option>
                                        <option value="3">Antigua and Barbuda</option>
                                        <option value="3">Argentina</option>
                                        <option value="3">Armenia</option>

                                        <option value="3">Aruba</option>
                                        <option value="3">Australia</option>
                                        <option value="3">Austria</option>
                                        <option value="3">Azerbaijan</option>
                                    </select>
                                </div> -->


                                <div class="col-lg-12">

                                    <label>Postcode/ZIP <sup>*</sup></label>
                                    <input type="pincode" name="pincode" placeholder="Pincode number and Zip"
                                        id="pincode" class="form-control" aria-describedby="addHelpBlock">
                                </div>



                                <div class="col-lg-12">

                                    <label>Phone<sup>*</sup></label>
                                    <input type="phone" name="phone" placeholder="Enter Your Phone number" id="phone"
                                        class="form-control" aria-describedby="addHelpBlock">
                                </div>


                                <div class="col-lg-12">

                                    <label>Email<sup>*</sup></label>
                                    <input type="Email" name="email" placeholder="Enter Your Email " id="Email"
                                        class="form-control" aria-describedby="addHelpBlock">
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
                            <textarea class="form-control " name="notes"
                                placeholder="Notes about your order, e.g. special notes for delivery.">



                           </textarea>


                        </div>

                    </div>

            </div>
        </div>




    </div>


    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12">

                <h4 class="heading-order">YOUR ORDER</h4>
                <table class="table table-bordered check-table" style="background-color:transparent!important">
                    <thead>
                        <tr>
                            <th class="product-name">Product</th>
                            <th class="product-total">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td class="product-name">
                                Kathak Lehanga&nbsp; <strong class="product-quantity">×&nbsp;1</strong> </td>
                            <td class="product-total">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">₹</span>12,000.00</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                        <tr class="cart-subtotal">

                            <td colspan="2" style="text-align:center"> <span
                                    class="woocommerce-Price-amount amount"><b>Subtotal</b> <span class=""
                                        style="margin-left:10px">₹</span>12,000.00</span></td>
                        </tr>






                        <tr class="order-total">
                            <td colspan="2" style="text-align:center"> <span
                                    class="woocommerce-Price-amount amount"><b>Total</b> <span class=""
                                        style="margin-left:10px">₹</span>12,000.00</span></td>

                        </tr>


                    </tfoot>
                </table>
            </div>
        </div>
    </div>



    <div class="container cont-width mt-4">
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
                    website, and for other purposes described in our<a
                        href="<?php echo base_url('privacypolicy');?>">privacy policy</a> </p>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label f-label" for="flexCheckDefault">
                    I have read and agree to the website <a href="<?php echo base_url('privacypolicy');?>"> terms
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


    </div>

    <?php include('footer.php'); ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
    jQuery(document).ready(function() {
        jQuery("#log-btn").click(function() {

            jQuery(".login-div").toggle("");
        })

    });

    jQuery(document).ready(function() {
        jQuery("#log-btn1").click(function() {

            jQuery(".log-div").toggle("");
        })

    });
    </script>



</body>


</html>