<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Checkout.css">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="content-wrapper ">
        <section class="content">
            <div class="container-fluid">
                <div class="paymentDiv">
                    <div class="card payment-card">
                        <a href="<?= base_url(); ?>" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Back</a>
                        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i class="checkmark paymentIcon">✓</i>
                        </div>
                        <h1 class="paymentH1">Success</h1>
                        <p class="paymentPara">We received your purchase request;<br /> we'll be in touch shortly!</p>
                    </div>
                </div>
            </div>
        </section>

</body>

</html>