var options = {
    key:            "rzp_test_Ctoq9lGccMcZwj",
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

    $('.rating').barrating({
        theme: 'fontawesome-stars'
    });

    $('#rate').click(function(){
        var formData = $("#feedbackform").serialize()
        var review_message = $('#review_message').val()
        $('#feedbackform .error').hide()
        if (review_message == '') {
            $('#review_message').after('<span class="error">Write something </span>').focus()
            return false
        }
        $.ajax({
            type: "POST",
            url: 'savefeedback',
            data: formData,
            dataType: "JSON",
            success: function(response)
            {
                $("#feedbackform").trigger("reset") 
                location.reload(true)
                // swal.fire("Success", "Feedback submitted!", "succcess");
            },
            error: function(response){
                console.log(response)
            }
        });
    })


        $('#courses').on('change', function(){
            var countryId = $(this).val();
       
            if(countryId){

                $.ajax({
                    type: 'POST',
                    url: 'get_sub_courses_data',
                    data: {courses_id_g: countryId},
                    dataType: 'json',
                    success: function(data){
                        $('#sub_courses').empty();
                        $('#sub_courses').append('<option value="">Please select sub Courses</option>');
                        $.each(data, function(key, value){
                            $('#sub_courses').append('<option value="'+ value.id +'">'+ value.sub_courses_name +'</option>');
                        });
    
                        // Retrieve the selected state ID from the hidden input field
                        var selectedStateId = $('#selected_sub_courses').val();
    
                        // Select the state in the dropdown
                        $('#sub_courses').val(selectedStateId);
                    }
                });
            } else {
                $('#sub_courses').empty();
                $('#sub_courses').append('<option value="">Please Select State</option>');
            }
        });
    
        // Trigger change event on #courses_id_g
        $('#courses').trigger('change');

})

var options = {
    "key": "rzp_test_Ctoq9lGccMcZwj", // Enter the Key ID generated from the Dashboard
    "amount": "1", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "RazorPay Infovistar",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    // "handler": function (response){
    //     // alert(response.razorpay_payment_id);
    //     // alert(response.razorpay_order_id);
    //     // alert(response.razorpay_signature)
    // },
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
// rzp1.on('payment.failed', function (response){
//         // alert(response.error.code);
//         // alert(response.error.description);
//         // alert(response.error.source);
//         // alert(response.error.step);
//         // alert(response.error.reason);
//         // alert(response.error.metadata.order_id);
//         // alert(response.error.metadata.payment_id);
// });



