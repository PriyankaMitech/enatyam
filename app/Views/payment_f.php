<!-- failure -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Checkout.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>

<body>

    <div class="content-wrapper">
        <section class="content-header">
            <!-- <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Payment Status</h1>
                    </div>
                </div>
            </div>/.container-fluid -->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <a href="<?= base_url(); ?>" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Back</a>
                        <div class=" d-flex align-items-center justify-content-center">
                            <h1>Payment Status</h1>
                        </div>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="paymentDiv">
                    <div class="card payment-card">
                        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i class="fa fa-times larger-icon" aria-hidden="true"></i>
                        </div>
                        <h1 class="paymentFailure">Failure</h1>
                        <p class="paymentPara">Oh no, Your payment failed.<br /> Please try again later.</p>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>