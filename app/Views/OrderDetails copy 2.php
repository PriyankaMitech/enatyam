<?php echo view('StudentSidebar/Studentsidebar'); ?>
<link rel="stylesheet" href="public/css/Checkout.css">


<style>
    .error {
        color: red !important;
    }
    .content{
        background-color:#fff !important;
        margin:10px;
        
    }
</style>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Checkout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php

            $txnid = time();
            $surl = $surl;
            $furl = $furl;
            $key_id = RAZOR_KEY_ID;
            $currency_code = $currency_code;  
                    
            $per_session_price = $matchingRecords->Per_Session_Price;

            // Assuming $billingdetails contains the discount information
            $discount = isset($billingdetails['ccdiscount']) ? $billingdetails['ccdiscount'] : 0; // Default discount to 0 if not set

            // Calculate the total price after discount
            $totalPrice = $matchingRecords->Total_Price;
            $discountAmount = ($totalPrice * $discount) / 100;
            $amount = ($totalPrice - $discountAmount) * 100; // Convert to paisa (assuming the amount is in rupees)

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
                                    <th>Discount</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <?php 
                                    
                                    if (!empty($matchingRecords)) : ?>
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
                                        <td class="product-PerSession-discont">
                                            <?php if (!empty($billingdetails) && isset($billingdetails['ccdiscount'])) { ?>
                                                <span id="discont"><?php echo $billingdetails['ccdiscount']; ?> %</span>
                                            <?php } ?>
                                        </td>
                                        <td class="product-total">
                                        <?php if (!empty($billingdetails) && isset($billingdetails['ccdiscount'])) { 
                                            // Convert discount percentage to decimal
                                            $discountPercentage = $billingdetails['ccdiscount'] / 100;
                                            // Calculate the discount amount
                                            $discountAmount = $matchingRecords->Total_Price * $discountPercentage;
                                            // Calculate the discounted price
                                            $discountedPrice = $matchingRecords->Total_Price - $discountAmount;
                                            ?>
                                            <span id="total">₹ <?php echo number_format($discountedPrice, 2); ?> </span>
                                        <?php } ?>
                                        </td>
                                </tr>
                            </tbody>
                            <tfoot>

                                <tr class="">
                                    <td colspan="6" style="padding:1rem;"> </td>
                                </tr>
                                <tr class="order-total">
                                    <td colspan="5"> <span class="woocommerce-Price-amount amount"><b>Total</b> </td>
                                    <td><b>   <?php if (!empty($billingdetails) && isset($billingdetails['ccdiscount'])) { 
                                            // Convert discount percentage to decimal
                                            $discountPercentage = $billingdetails['ccdiscount'] / 100;
                                            // Calculate the discount amount
                                            $discountAmount = $matchingRecords->Total_Price * $discountPercentage;
                                            // Calculate the discounted price
                                            $discountedPrice = $matchingRecords->Total_Price - $discountAmount;
                                            ?>
                                            <span id="total">₹ <?php echo number_format($discountedPrice, 2); ?> </span>
                                        <?php } ?></b></td>
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
                                        <img src="<?=base_url(); ?>public\images\payment.svg ">
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

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php echo view('StudentSidebar/StudentFooter.php');?>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


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




    var razorpay_options = {
        key: "<?php echo $key_id; ?>",
        amount: "",
        amount: <?php echo $amount; ?>, //
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
             console.log("hhhh");
            setTimeout(razorpaySubmit, 200);
            if (!razorpay_submit_btn && el) {
                razorpay_submit_btn = el;
                el.disabled = true;
                el.value = 'Please wait...';
            }
        } else {
            if (!razorpay_instance) {
                console.log("YYYY");

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


  