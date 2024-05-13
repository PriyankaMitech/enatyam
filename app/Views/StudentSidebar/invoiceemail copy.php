<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
}

.logo-container {
    text-align: center;
    
}

.invoice-form {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    font-family: 'Times New Roman', Times, serif;
}

.letter {
    border: 1px solid black;
    border-radius: 5px;
    padding: 20px;
    font-family: 'Times New Roman', Times, serif;
}

@media screen and (max-width: 768px) {
    .logo-container {
        text-align: center;
       
    }
 

}

@media screen and (max-width: 576px) {
    .sp {
        max-width: 100%; /* Make the image responsive */
    }
    .logo-container {
        text-align: center; /* Center the content */
    }
    .logo-container p {
        text-align: center; /* Center the text */
        max-width: 90%; /* Limit the width of the text to avoid overflowing */
        margin: 0 auto; /* Center the text horizontally */
        font-size: 14px; /* Adjust font size for smaller screens */
    }
    body {
        padding: 10px; /* Adjust overall padding for smaller screens */
    }
    .invoice-form {
        padding: 10px; /* Adjust padding for smaller screens */
        font-size: 14px; /* Adjust font size for smaller screens */
        overflow-x: auto; /* Enable horizontal scrolling for the table */
    }
    .table {
        width: 100%; /* Ensure table width fits within its container */
    }
}




    </style>
</head>
<body>
    <div class="container-fluid letter">
    <div class="row invoice-header">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 logo-container mt-3 ss order-lg-last">
        <img src="<?=base_url(); ?>public/images/logo1.png" alt="Enatyam" class="img-fluid sp">
        <p class="mt-3 invoice-date">Invoice Date: [Date]<br></p>

        <p>enatyam India Pvt Ltd.</p>
        <p>Registered Office<br>Enatyam India Pvt.Ltd.<br>T3 Godrej Hills -2 ,Baner Pune<br>Maharastra 411022<br>Landline 020-67873249<br>Email : hello@enatyam.com <br>website :www.enatyam.com</p>
    </div>
    <div class="col-lg-4"></div>
</div>

        <div class="row bill-to mt-4">
            <div class="col">
                <h3><b>PAYMENT RECEIPT</b></h3>
                <p>Order ID: paypal 1X34450930286301P</p>
                <p>INVOICE TO:<br><b><?php echo $fullname; ?></b><br>Mobile No :<?php echo $mobile; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item No.</th>
                                <th>Sessions</th>
                                <th>Fees for session</th>
                                <th>One time registration and convenience fees</th>
                                <th>Kit</th>
                                <th>Merchandise</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Insert rows for each service/product -->
                            <tr>
                                <td>1</td>
                                <td><?php echo $SessionsCount; ?></td>
                                <td><?php echo $amount1; ?></td>
                                <td>0</td>
                                <td>1</td>
                                <td><?php echo $merchant_order_id; ?></td>
                                <td><?php echo $amount1; ?></td>
                            </tr>
                            <!-- Add more rows if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row totals mt-5">
            <div class="col-lg-5"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
                <p>Thank you for your business!</p>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    // Get today's date
    var today = new Date();

    // Format the date as required (e.g., YYYY-MM-DD)
    var formattedDate = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();

    // Replace the placeholder [Date] with the formatted date
    document.addEventListener('DOMContentLoaded', function() {
        var invoiceDateElement = document.querySelector('.invoice-date');
        if (invoiceDateElement) {
            invoiceDateElement.innerHTML = 'Invoice Date: ' + formattedDate;
        }
    });
</script>