var options = {
    key:            "rzp_live_jNHwGY4NBVWWah",
    amount:         100,
    name:           "RazorPay Infovistar",
    description:    "Order # ABC-.date('YmdHis')",
    netbanking:     true,
    currency:       "INR", // INR
    prefill: {
        name:       "Test",
        email:      "tests",
        contact:    "7977878878"
    },
    notes: {
        soolegal_order_id: "1234",
    },
    handler: function (transaction) {
        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
        document.getElementById('razorpay-form').submit();
    },
    "modal": {
        "ondismiss": function(){
            location.reload()
        }
    }
};

var razorpay_pay_btn, instance;
function razorpaySubmit(el) {
    if(typeof Razorpay == 'undefined') {
        setTimeout(razorpaySubmit, 200);
        if(!razorpay_pay_btn && el) {
            razorpay_pay_btn    = el;
            el.disabled         = true;
            el.value            = 'Please wait...';  
        }
    } else {
        if(!instance) {
            instance = new Razorpay(options);
            if(razorpay_pay_btn) {
            razorpay_pay_btn.disabled   = false;
            razorpay_pay_btn.value      = "Pay Now";
            }
        }
        instance.open();
    }
}

$('#msgsend').click(function (e) {
    var formdata = $('#chatform').serialize();
    $.ajax({
        url: 'http://localhost/enatyam/insertChat', // Make sure this URL matches your CodeIgniter route
        type: "POST",
        data: formdata,
        dataType: "JSON",
        success: function (response) {
            console.log(response);
            var html = '<div class="direct-chat-msg right">'+response.getdata.message+'</div>'
            $('.direct-chat-messages').append(html)
        },
    });
})