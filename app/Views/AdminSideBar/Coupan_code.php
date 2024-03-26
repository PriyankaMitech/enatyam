<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper" style="min-height: 1172.73px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Coupan code</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Coupan code</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div id="layout-wrapper">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <!-- Card header code -->
        </div>
        <div class="card-body">
            <form id="couponForm" action="<?php echo base_url('coupon_code_generate'); ?>" method="post">
                <div class="form-group">
                    <!-- Form fields -->
                    <label for="percentage">Percentage Discount</label>
                    <input type="number" name="percentage" class="form-control" id="percentage" required>
                </div>
                <div class="form-group">
                    <!-- Form fields -->
                    <label>Select Expiry Date</label>
                    <input type="date" name="expiry_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <!-- Form fields -->
                    <label for="Coupan_code">Coupon Code</label>
                    <input type="text" name="Coupan_code" class="form-control" id="Coupan_code" readonly>
                </div>
                <div class="col-md-6 offset-md-4">
                    <button type="button" class="btn btn-primary" onclick="generateCoupon()">Generate Code</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h4>Available Coupon Codes</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Coupon Code</th>
                                                    <th>Percentage</th>
                                                    <th>Expiry Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($Coupan_code as $coupon): ?>
                                                <tr>
                                                    <td><?php echo $coupon->Coupan_code; ?></td>
                                                    <td><?php echo $coupon->percentage; ?>%</td>
                                                    <td><?php echo $coupon->expiry_date; ?></td>
                                                   
                                                    <td>
                                                        <!-- Add copy button -->
                                                        <button class="btn btn-sm btn-secondary"
                                                            onclick="copyToClipboard('<?php echo $coupon->Coupan_code; ?>')">Copy</button>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>
<script>
function generateCoupon() {
    // Generate a random alphanumeric coupon code
    var couponCode = generateRandomCouponCode();
    // Set the generated code to the input field
    document.getElementById("Coupan_code").value = couponCode;
}

function generateRandomCouponCode() {
    // This function generates a random alphanumeric coupon code
    var length = 8;
    var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    var result = "";
    for (var i = 0; i < length; i++) {
        result += charset.charAt(Math.floor(Math.random() * charset.length));
    }
    return result;
}
</script>
<script>
function copyToClipboard(text) {
    // Create a textarea element
    var textarea = document.createElement("textarea");
    // Set the value of the textarea to the text to be copied
    textarea.value = text;
    // Append the textarea to the body
    document.body.appendChild(textarea);
    // Select the text inside the textarea
    textarea.select();
    // Execute the copy command
    document.execCommand('copy');
    // Remove the textarea
    document.body.removeChild(textarea);
    // Optionally, provide feedback to the user
    alert("Coupon code copied to clipboard: " + text);
}
</script>