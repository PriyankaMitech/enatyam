<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order confirmation</title>
    <meta name="robots" content="noindex,nofollow">
</head>
<body>

<table style="max-width: 650px; border: 1px solid #eee; margin: auto; padding: 20px; width: 100%;">
    <tr>
        <td colspan="2" style="text-align: right;">
            <img src="https://enatyam.com/public/images/logos1.png" style="width: 20%;" alt="Logo">
        </td>
    </tr>
    <tr>
        <td style="width: 50%; vertical-align: top;">
            <h2>PAYMENT RECEIPT</h2>
            <p>Order ID: <?php echo $merchant_order_id; ?> </p>
        </td>
        <td style="width: 50%; text-align: right;">
            <p class="invoice-date">04.03.2024</p>
        </td>
    </tr>
    <tr style="vertical-align: top;">
        <td colspan="">
            <div style="margin-top: 20px;">
                <p style="margin-bottom: 5px;margin-top:0px">Invoice To:</p>
                <p style="font-size: 16px; font-weight: bold; margin: 0;"><?php echo $fullname; ?></p>
                <p style="margin: 0;"><b>Mobile No.:</b><?php echo $mobile; ?></p>
                <!-- <p style="margin: 0;"><b>Address</b></p> -->
                <!-- <p style="margin: 0;">Student Name : jsbale</p> -->
            </div>
        </td>

        <td  style="text-align: right;">
          <div style="margin-top: 20px;">
              <p style="font-size:18px;font-weight:600;margin:0;">enatyam India Pvt Ltd.</p>
              <p style="margin: 0;">Registered Office</p>
              <p style="margin: 0;">Enatyam India Pvt Ltd.<br>
              T3 Godrej Hill -2 Pune<br>
              411022<br>
              Landline: 02067873249<br>
              Email: hello@enatyam.com<br>
              Website: www.enatyam.com</p>
          </div>
      </td>
    </tr>
 
    <tr>
        <td colspan="2">
            <div style="margin-top: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <tr style="border-bottom: 1px solid #eee;">
                        <th style="font-size: 18px; padding: 10px;">Description</th>
                        <th style="font-size: 18px; padding: 10px;">Price</th>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Sessions</td>
                        <td style="padding: 10px;"><?php echo $SessionsCount; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Fees for One session</td>
                        <td style="padding: 10px;"><?php echo $per_session_price; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">One Time registration and convenience fees</td>
                        <td style="padding: 10px;">0</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="">
            <div style="margin-top: 20px;">
                <p style="font-size: 16px;"><b>PAYMENT METHOD</b></p>
                <p>Transaction Id : <?php echo $merchant_trans_id; ?></p>
            </div>
        </td>

        <td colspan="">
          <div style="margin-top: 20px;">
              <table style="width: 100%; border-collapse: collapse;">
                  <tr>
                      <td style="width: 50%; padding: 5px;">Subtotal</td>
                      <td style="border-bottom: 1px solid #eee; width: 50%; padding: 5px;"></td>
                  </tr>
                  <tr>
                      <td style="width: 50%; padding: 5px;">Discount</td>
                      <td style="border-bottom: 1px solid #eee; width: 50%; padding: 5px;"></td>
                  </tr>
                  <tr>
                      <td style="width: 50%; padding: 5px; font-weight: 600; text-transform: uppercase;font-size: 13px;">Total Amount</td>
                      <td style="border-bottom: 1px solid #eee; width: 50%; padding: 5px;"><?php echo $amount1; ?></td>
                  </tr>
                  <tr>
                      <td style="width: 50%; padding: 5px; font-weight: 600; text-transform: uppercase;font-size: 13px;">Received Amount</td>
                      <td style="border-bottom: 1px solid #eee; width: 50%; padding: 5px;"><?php echo $amount1; ?></td>
                  </tr>
                  <!-- <tr>
                      <td style="width: 50%; padding: 5px; font-weight: 600; text-transform: uppercase;font-size: 13px;">BALANCE Amount</td>
                      <td style="border-bottom: 1px solid #eee; width: 50%; padding: 5px;">0</td>
                  </tr> -->
              </table>
          </div>
      </td>
    </tr>
  
    <tr>
        <td colspan="2">
            <div style="margin-top: 20px;">
                <p style="margin: 0;">Razorpay Payment no.: <?php echo $razorpay_payment_id; ?></p>
                <p style="margin: 0;">This is a payment receipt for your transaction on enatyam enrollment fees.</p>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right;">
            <div style="width: 150px; border-bottom: 1px solid #ddd; display: inline-block; margin-bottom: 0;"></div>
            <p>Enatyam India</p>
        </td>
    </tr>
</table>

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