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

$(document).ready(function(){
    $('#msgsend').click(function () {
        var formdata = $('#chatform').serialize();
        console.log($('.chatmsg').text())
        if(formdata){
            $.ajax({
                url: 'http://localhost/enatyam/insertChat', // Make sure this URL matches your CodeIgniter route
                type: "POST",
                data: formdata,
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                    $('#chatform').trigger("reset") 
                    var html = '<div class="direct-chat-msg right"><div class="direct-chat-infos clearfix"><span class="direct-chat-name float-right">Sarah Bullock</span><span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span></div><img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><div class="direct-chat-text">'+response.getdata.message+'</div></div>'
                    $('.direct-chat-messages').append(html)
                },
            });
        }
    })

    var SELECTOR_DIRECT_CHAT = '.direct-chat';
    var CLASS_NAME_DIRECT_CHAT_OPEN = 'direct-chat-contacts-open';
    $('.chatopen').click(function(){
        $(SELECTOR_DIRECT_CHAT).toggleClass(CLASS_NAME_DIRECT_CHAT_OPEN);
    });  
})