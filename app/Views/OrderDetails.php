<?php include('header.php'); ?>
<?php if (session()->getFlashdata('success')) : ?>

    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>
<section class="contactus">
    <!-- <?php// print_r(session()->get('sessiondata'));
        //die; ?> -->

    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12">
                <h1>Checkout</h1>
            </div>
        </div>
    </div>
    <!-- <?php //print_r($SessionPricingData); 
            ?> -->

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
<?php
// $value = $_GET['id']; // This will retrieve the value '100'
// echo $value;
?>
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
        <div class="col-lg-12">
            <?php if (!(session()->get('sessiondata'))) : ?>

                <!-- <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid check-cont justify-content-start">
                            <p>Returning customer?
                            </p>

                            <a class="cont-shop1" id="log-btn">Click here to login</a>
                        </div>
                    </nav> -->

                <div class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Please Login/Register</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                        please proceed to the Billing section.

                    </p> -->
                <!-- <div class="container cont-width"> -->
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


                        <div class="coupon-div log-div">
                            <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                                please proceed to the Billing section.
                            </p>
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
                <!-- </div> -->


            <?php endif; ?>
            <!-- <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid check-cont justify-content-start">
                        <p>Returning customer?
                        </p>

                        <a class="cont-shop1" id="log-btn">Click here to login</a>
                    </div>
                </nav> -->

            <div class="login-div">

                <!-- <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                        please proceed to the Billing section.

                    </p> -->

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
<!-- <div class="container cont-width">
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
    </div> -->




<div class="container cont-width">
    <div class="row">
        <div class="col-lg-12">

            <h4 class="heading-order">YOUR ORDER</h4>
            <table class="table table-bordered check-table" style="background-color:transparent!important">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-No-of-Sessions">No Of Sessions </th>
                        <th class="product-Duration">Duration </th>
                        <th class="product-PerSession-Price"> Per Session Price</th>
                        <th class="product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-name">
                            <?php echo $matchingRecords[0]->Name ?>
                        </td>
                        <td class="product-No_of_Sessions">
                            <?php echo $matchingRecords[0]->No_of_Sessions  ?>
                        </td>

                        <td class="product-Duration">
                            <?php echo $matchingRecords[0]->Duration  ?>
                        </td>

                        <td class="product-PerSession-Price">
                            ₹</span><?php echo $matchingRecords[0]->Per_Session_Price  ?>
                        </td>

                        <td class="product-total">
                            ₹</span><?php echo $matchingRecords[0]->Total_Price   ?>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr class="">
                        <td colspan="5" style="padding:1rem;"> </td>
                        <!-- <td></td> -->
                    </tr>
                    <tr class="order-total">
                        <td colspan="4" style=""> <span class="woocommerce-Price-amount amount"><b>Total</b> </td>
                        <td><b>₹<?php echo $matchingRecords[0]->Total_Price ?></b></td>
                    </tr>

                </tfoot>
            </table>

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
</div>

<?php include('footer.php'); ?>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->




<!-- 
</body>


</html> -->