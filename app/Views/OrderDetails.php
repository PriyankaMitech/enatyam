<?php include('header.php'); ?>

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
<?php

$txnid = time();
$surl = $surl;
$furl = $furl;
$key_id = RAZOR_KEY_ID;
$currency_code = $currency_code;  
          
$per_session_price = $matchingRecords->Per_Session_Price; 
$amount = $matchingRecords->Total_Price;
// $amount = '100';
$billing_id = $lastinsert_id;
$merchant_order_id = $id;
$card_holder_name = 'TechArise Team';
$email = 'info@techarise.com';
$phone = '9000000001';
$name = APPLICATION_NAME;

$return_url = site_url().'PaymentController/payment';
?>

<form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
  <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
  <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
  <input type="hidden" name="per_session_price" id="per_session_price" value="<?php echo $per_session_price; ?>"/>
  <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['sessiondata']['id']; ?>"/>
  <input type="hidden" name="total_amount" id="total_amount" value="<?php echo $amount; ?>"/>
  <input type="hidden" name="billing_id" id="billing_id" value="<?php echo $billing_id; ?>"/>
  <input type="hidden" name="no_of_session" id="no_of_session" value="<?php echo $matchingRecords->No_of_Sessions; ?>"/>
  <input type="hidden" name="description" id="description" value="<?php echo $matchingRecords->Description; ?>"/>
  <input type="hidden" name="duration" id="duration" value="<?php echo $matchingRecords->Duration; ?>"/>

</form>

<div class="container cont-width">
    <div class="row">
        <div class="col-lg-12">
            <?php if (!(session()->get('sessiondata'))) : ?>

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
            <?php endif; ?>
            <div class="login-div">
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
                        <?php if (!empty($matchingRecords)) : ?>
                            <td class="product-name">
                                <span id="pname"><?php echo $matchingRecords->Name; ?></span>

                            </td>
                            <td class="product-No_of_Sessions">
                                <span id="sessno"><?php echo $matchingRecords->No_of_Sessions  ?></span>
                            </td>

                            <td class="product-Duration">
                                <span id="duration"><?php echo $matchingRecords->Duration  ?></span>
                            </td>

                            <td class="product-PerSession-Price">
                                <span id="price">₹</span><?php echo $matchingRecords->Per_Session_Price  ?></span>
                            </td>

                            <td class="product-total">
                                <span id="total">₹</span><?php echo $matchingRecords->Total_Price   ?></span>
                            </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr class="">
                        <td colspan="5" style="padding:1rem;"> </td>
                    </tr>
                    <tr class="order-total">
                        <td colspan="4"> <span class="woocommerce-Price-amount amount"><b>Total</b> </td>
                        <td><b>₹<?php echo $matchingRecords->Total_Price ?></b></td>
                    </tr>

                <?php endif; ?>
                </tfoot>
            </table>

        </div>


    </div>


</div>

<div class="container cont-width mt-4">
    <div class="row">
        <div class="col-lg-12 mt-3 mb-5">
            <nav class="navbar bg-body-tertiary1 p-3">
                <div class="container justify-content-start">
                    <span>
                        <h6>Credit Card/Debit Card/NetBanking </h6>
                    </span>

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
                I have read and agree to the website <a target="_blank" href="<?php echo base_url(); ?>termsandconditions"> terms
                    and conditions *</a>
            </label>
        </div>

        <div class="place-btn d-block w-100 ">
            <input type="hidden" id="uemail" value="<?php echo $billingdetails['email']  ?>">
            <input type="hidden" id="name" value="<?php echo $billingdetails['Fname'] . ' ' . $billingdetails['Lname']  ?>">
            <input type="hidden" id="phone" value="<?php echo $billingdetails['phone']  ?>">
            <button class="button-content" onclick="razorpaySubmit(this);" type="submit" role="button">PLACE ORDER</button>
        </div>

        </nav>
        </form>
    </div>
</div>

<div class="row m-0">
    <div class="col-md-6 col-12 text-end mb-2">
        <a href="<?php echo base_url('demo'); ?>" class="btnnew btn-book text-center byfd">Book your Free demo now</a>
    </div>
    <div class="col-md-6 col-12 text-star">
        <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request text-center nsracb">Not sure ?? Request a call back</a>
    </div>
</div>

<?php include('footer.php'); ?>

<script>
    // var options = {
    //     key:            "rzp_test_Ctoq9lGccMcZwj",
    //     amount:         100,
    //     name:           "RazorPay Infovistar",
    //     description:    "Order # ABC-.date('YmdHis')",
    //     netbanking:     true,
    //     currency:       "INR", // INR
    //     prefill: {
    //         name:       $('#name').val(),
    //         email:      $('#uemail').val(),
    //         contact:    $('#phone').val()
    //     },
    //     notes: {
    //         soolegal_order_id: "1234",
    //     },
    //     handler: function (transaction) {
    //         document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
    //         document.getElementById('razorpay-form').submit();
    //     },
    //     "modal": {
    //         "ondismiss": function(){
    //             location.reload()
    //         }
    //     }
    // };

    // var razorpay_pay_btn, instance;
    // function razorpaySubmit(el) {
    //     if(typeof Razorpay == 'undefined') {
    //         setTimeout(razorpaySubmit, 200);
    //         if(!razorpay_pay_btn && el) {
    //             razorpay_pay_btn    = el;
    //             el.disabled         = true;
    //             el.value            = 'Please wait...';  
    //         }
    //     } else {
    //         if(!instance) {
    //             instance = new Razorpay(options);
    //             if(razorpay_pay_btn) {
    //             razorpay_pay_btn.disabled   = false;
    //             razorpay_pay_btn.value      = "Pay Now";
    //             }
    //         }
    //         instance.open();
    //     }
    // }


    var dynamicAmount = <?php echo $amount; ?>;


    var razorpay_options = {
        key: "<?php echo $key_id; ?>",
        amount: "",
        amount: dynamicAmount * 100, //
        name: "<?php echo $name; ?>",
        description: "Order # <?php echo $merchant_order_id; ?>",
        netbanking: true,
        currency: "<?php echo $currency_code; ?>",
        prefill: {
            name: "<?php echo $card_holder_name; ?>",
            email: "<?php echo $email; ?>",
            contact: "<?php echo $phone; ?>"
        },
        notes: {
            soolegal_order_id: "<?php echo $merchant_order_id; ?>",
        },
        handler: function(transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function() {
                location.reload()
            }
        }
    };
    var razorpay_submit_btn, razorpay_instance;


    function razorpaySubmit(el) {
       
    var checkbox = document.getElementById('flexCheckDefault');
    
    if (checkbox.checked) {
        if (typeof Razorpay == 'undefined') {
            setTimeout(razorpaySubmit, 200);
            if (!razorpay_submit_btn && el) {
                razorpay_submit_btn = el;
                el.disabled = true;
                el.value = 'Please wait...';
            }
        } else {
            if (!razorpay_instance) {
                razorpay_instance = new Razorpay(razorpay_options);
                if (razorpay_submit_btn) {
                    razorpay_submit_btn.disabled = false;
                    razorpay_submit_btn.value = "Pay Now";
                }
            }
            razorpay_instance.open();
        }
    } else {
        // Display an alert or any other indication that the checkbox is not checked.
        alert("Please read and agree to the terms and conditions.");
    }
}
</script>

