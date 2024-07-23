<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));

// echo "<pre>";
// print_r($pages);
// exit();

$uri = service('uri');

// Get the second segment of the URI
$detail_pageblog = $uri->getSegment(1);

$session = \Config\Services::session();
$adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

$wherecond = array('is_deleted' => 'N');


$courses_data = $adminModel->getalldata('tbl_courses', $wherecond);

?>




<!DOCTYPE html>
<html lang="en">
<?php $session = \Config\Services::session(); ?>
<?php $validation = \Config\Services::validation(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enatyam</title>
    <style>
    div:where(.swal2-container) {
        display: grid !important;
    }
    </style>
    <style>
    .lmwotp .modal-dialog {
        text-align: center;
        max-width: 78%;
        margin: 0;
        margin-left: 138px;
        margin-top: 24px;
    }

    .modal-content {
        height: 100vh;
        display: flex;
    }

    .lmwotp .left-side img {
        width: 100%;
        height: auto;
        border-radius: 28px;
        padding: 13px;
        background-color: #F8F8F8;
    }

    .lmwotp .right-side {
        padding: 20px;
        /* border-left: 2px solid #ddd; Apply border */
    }

    .lmwotp .toggle {
        margin-bottom: 15px;
    }

    .lmwotp .otp-input {
        display: none;
    }

    input[type="radio"]+label {
        margin-right: 17px;
    }

    .lmwotp .btn-primary {
        background-color: #FF1561;
        border-color: #FF1561;
        width: 95px;
    }

    .lmwotp .form-group input {
        margin-left: 2px;
    }

    .month-row {
        margin-bottom: 0px !important;
    }
    .phonenumber input{
            width: 100%;
        }
        .phonenumber span{
            
    display: block;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

 
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.0/sweetalert2.css" rel="stylesheet">

    <?php if ($page == 'enatyam' || $page == 'Home' || $page == 'pricing' ) {

    ?>
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/intl.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/faq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/s_header.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/courseOffering.css">

    <link rel="stylesheet"
        href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
    <link rel="stylesheet"
        href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>

      
    .cart-a sup {
        background: #FF0067;
        border-radius: 50%;
        /* padding: 5px; */
        width: 23px;
        height: 23px;
        display: inline-block;
        text-align: center;
        line-height: 23px;
        font-size: 11px;
        font-weight: 600;
    }

    .btn-close-dark {
        position: absolute;
        right: -12px;
        top: -14px;

        break-after: avoid;
        border: 1px solid #000;
        padding: 6px;
        border-radius: 30px;
        background-color: #ff0067;
        opacity: 1;
        font-size: 15px;

    }

    .loader-container {
        display: none;
        /* Initially hide the loader */
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5);
        /* Semi-transparent white background */
    }

    .loader {
        border: 6px solid #f3f3f3;
        /* Light grey */
        border-top: 6px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        /* Apply animation */
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -25px;
        /* Half of loader height */
        margin-left: -25px;
        /* Half of loader width */
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>

    <?php } else if ($page == 'Dance' || $page == 'Kathak' || $page == 'Bharatnatyam' || $page == 'Odissi' || $page == 'Bollywood' || $page == 'Western' || $page == 'Semiclassical' || $page == 'Bhangra' || $page == 'Folk' || $page == 'HindustaniVocal' || $page == 'CarnaticVocal' || $page == 'SemiClassicals' || $page == 'WesternSinging' || $page == 'PlaybackSinging' ) { ?>

    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/corporateyoga.css">


    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/s_header.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->





    <?php } else if ($page == 'music') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/dancepage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/DanceInstructer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;
        height: 500px;
        object-fit: cover;
        z-index: -100;

    }
    </style>
    <?php } else if ($page == 'corporateyoga') { ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/corporateyoga.css">

    <style>
        #registerformpopup .modal-content {
  padding: 25px 33px !important;
}

#registerformpopup .iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {
  width: 181% !important;
  padding-left: 47% !important;
}

#registerformpopup .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container {
  left: -1px !important;
}
    </style>



    <?php } else if ($page == 'Yoga') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'PrenatalYoga') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'StressReduction') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'Flexibility') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'WeightLossYoga') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'EverydayYoga') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'YogaforChronic') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'YogaforKids') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'Meditation') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'CustomiseYoga') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>

    <?php } else if ($page == 'NutritionCounselling') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .tab-pane.fade.show .textPara1 {
        font-size: 15px !important;
        font-weight: 400 !important;
    }
    </style>


    <?php } else if ($page == 'Instruments') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>
    <?php } else if ($page == 'Guitar') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>
    <?php } else if ($page == 'Flute') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Tabla') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Sitar') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Veena') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Piano') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Violin') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Keyboard') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>

    <?php } else if ($page == 'Harmonium') { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/bharatnatyam.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .month-row .month-list .dancetypes .monthbtn {
        width: 109px !important;
        height: 60px;
    }

    body {
        background-color: #fad32c;
    }

    #danceVideo {

        width: 100%;

        object-fit: cover;
        z-index: -100;

    }
    </style>


    <?php } else if ($page == 'Career' ||$page == 'Offilinstudio' ) { ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php } else if ($page == 'Carrier') { ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php } else if ($page == 'demo') { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php }else if($page == 'demobooking'){ ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery Easing plugin after jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demobooking.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <?php } else if ($page == 'Checkout' || $page == 'BillingInformation') { ?>

    <link rel="stylesheet" href="public/css/Checkout.css">

    <link href="<?php echo base_url(); ?>public/extcss/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>

    <style>
    .error {
        color: red !important;
    }
    </style>




    <?php } else if ($page == 'Contactus') {


    ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/contactus.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <?php }else if($page == 'termsandconditions' || $page == 'PrivacyPolicy' || $page == 'blog' || $page == 'refundpolicy'||  $page == 'invester'){
    ?>
    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 999;
        /* Ensure it's above other content */
    }

    /* Additional styling if needed */
    .whatsapp-button img {
        width: 50px;
        /* Adjust as needed */
        height: auto;
        border: none;
    }
    </style>
    <link rel="stylesheet" href="public/css/footer.css">

    <link rel="stylesheet" href="public/css/TermsandConditions.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <?php } else if($detail_pageblog == 'HistoryofKathak' ){?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/hederresponsive.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/contactus.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/s_header.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/courseOffering.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/TermsandConditions.css">

    <?php }
    ?>

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Login.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Register.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/hederresponsive.css">



<link rel="stylesheet" href="<?= base_url(); ?>public/css/resposivestyle.css">


</head>

<body class="overlap" >
    <!-- Flash message container -->
    <div id="flash-message-container">
        <?php if (session()->has('errormessage')) : ?>
        <div class="flash-message">
            <?= session('errormessage') ?>
        </div>
        <?php endif; ?>
    </div>


    <div id="flash-success-container">
        <?php if (session()->has('success')) : ?>
        <div class="flash-success">
            <?= session('success') ?>
        </div>
        <?php endif; ?>
    </div>
    <section class="tophead">
        <nav class="navbar navbar-expand-lg">
            <div class="container pd0">
                <a href="<?php echo base_url(); ?>" title="Enatyam - Best eLearning platform for dance and music"
                    rel="home" class="thim-logo">
                    <img src="<?=base_url();?>public/images/logos.png" alt="Enatyam">
                </a>
                <ul class="navbar-nav main-menu ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('Dance'); ?>">Dance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('music'); ?>">Singing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('Instruments'); ?>">Instruments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('Yoga'); ?>">Yoga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('pricing'); ?>">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('Offilinstudio'); ?>">Offline Studio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="<?php echo base_url('corporateyoga'); ?>">Corporate Yoga</a>
                    </li>
                </ul>
                <?php if (!(session()->get('sessiondata'))) : ?>
                <div class="loginmenu">
                    <a href="<?php echo base_url('demobooking'); ?>" class="btn btndemoh btntft"
                        style="width: auto;">Book Demo</a>
                    <!-- <a class="Register" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Sign Up</a> -->
                    <a class="login" href="" data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a>
                </div>
                <?php else : ?>
                <div class="loginmenu">
                    <!-- <a class="Register" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Sign Up</a> -->
                    <a class="Dashboard" href="<?php echo base_url(); ?>Dashboard"
                        style="border-right: 1px solid #f7f7f7;">Dashboard</a>
                    <a class="logout" href="<?php echo base_url(); ?>logout">Logout</a>
                </div>
                <?php endif; ?>
            </div>
        </nav>


        <div class="nav-container">




            <!-- mobile nav -->
            <div class="container-fluid d-block d-lg-none">
                <div class="row mx-0">


                    <div class="col-8">
                        <a href="<?php echo base_url(); ?>"
                            title="Enatyam - Best eLearning platform for dance and music" rel="home" class="thim-logo">
                            <img src="<?=base_url();?>public/images/logos.png" alt="Enatyam" class="logoh">
                        </a>
                    </div>
                    <div class="col-4 text-right my-auto menub">
                        <i class="fa fa-bars" id="menu-icon"></i>
                    </div>
                </div>

            </div>

            <div id="fixed-menu">
                <div class="header-closed">
                    <i class="fa fa-times"></i>
                </div>
                <a class="nav-link active px-2" href="<?php echo base_url('Home'); ?>">Home</a>
                <a class="nav-link px-2" href="<?php echo base_url('Dance'); ?>">Dance</a>
                <a class="nav-link px-2" href="<?php echo base_url('music'); ?>">Singing</a>
                <a class="nav-link px-2" href="<?php echo base_url('Yoga'); ?>">Yoga</a>
                <a class="nav-link px-2" href="<?php echo base_url('Instruments'); ?>">Instruments</a>
                <a class="nav-link px-2" href="<?php echo base_url('Career'); ?>">Career</a>
                <a class="nav-link px-2" href="<?php echo base_url('pricing'); ?>">Pricing</a>
                <a class="nav-link px-2" href="<?php echo base_url('Offilinstudio'); ?>">Offline Studio</a>
                <a class="nav-link px-2" href="<?php echo base_url('corporateyoga'); ?>">Corporate-Yoga</a>
                <?php if (!(session()->get('sessiondata'))) : ?>

                <!-- <a class="nav-link px-2" data-bs-toggle="modal" data-bs-target="#registerformpopup">Sign Up</a> -->
                <a class="nav-link px-2" href="" data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a>
                <a href="<?php echo base_url('demobooking'); ?>" class="btn btndemoh mt-2">BOOK DEMO</a>

                <?php else : ?>

                <!-- <a class="nav-link px-2"  href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Sign Up</a> -->


                <a class="nav-link px-2" href="<?php echo base_url(); ?>Dashboard"
                    style="border-right: 1px solid #f7f7f7;">Dashboard</a>
                <a class="nav-link px-2" href="<?php echo base_url(); ?>logout">Logout</a>

                <?php endif; ?>


            </div>
            <div id="overlay"></div>
    </section>


    <div class="modal fade" id="registerformpopup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">


                    <div class="register_form">
                        <h4 class="titel pt-3">Sign Up a new account</h4>
                        <div id="loader" class="loader-container">
                            <div class="loader"></div>

                        </div>

                    </div>


                    <form name="registrationForm" method="post" action="<?php echo base_url(); ?>register"
                        id="registerform">

                        <div class="form-group m-2">
                            <input type="text" name="full_name" id="full_name" class="form-control" aria-required="true"
                                placeholder="Username">
                            <span id="nameError" class="d-none" class="error"></span>
                        </div>
                        <div class="form-group m-2">
                            <input type="email" name="email" id="email" class="form-control" aria-required="true"
                                placeholder="Email">
                            <span id="emailError" class="error"></span>
                        </div>


                        <!-- <div class="form-group m-2">

                                <input type="text" name="mobile_no" id="mobile_no" class="form-control" aria-required="true" placeholder="Enter your whatsapp number">

                                <span id="mobile_noError" class="error"></span>
                            </div> -->
                        <!-- <div class="form-group m-2">
                            <div class="row">
                                <div class="col-md-4 col-4 countrie_code">
                                    <select name="countrie_code" class="form-control countrycode lenValidate"
                                        id="lenValidate" required></select>
                                </div>
                                <div class="col-md-8 col-8">
                                    <input required type="text" autocomplete="off" class="form-control"
                                        value="<?php echo set_value("mobile_number");?>" name="mobile_number"
                                        id="txtMobileNo" placeholder="Enter your whatsapp number"
                                        onkeypress="$(this).val($(this).val().replace(/[^\d]/ig, ''))">
                                    <span id="mobile_noError" class="error"></span>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group m-2">
                            <div class="row">
                                <div class="col-md-12 col-12 phonenumber">
                                    <input  required type="text" autocomplete="off"
                                        class="form-control" value="<?php echo set_value('mobile_number');?>"
                                        name="mobile_number" id="txtMobileNo" placeholder="Enter your WhatsApp number"
                                        onkeypress="$(this).val($(this).val().replace(/[^\d]/ig, ''))">
                                    <input type="hidden" name="countrie_code" id="countrie_code">
                                    <input type="hidden" name="mobileWithCode" id="mobileWithCode">
                                    <span id="mobile_noError" class="error"></span>
                                </div>
                            </div>
                        </div>




                        <div class="form-group m-2">

                            <input type="text" name="emailotp" id="emailotp" class="form-control d-none"
                                placeholder="Enter otp sent to your whats app">
                            <span class="error" id="otpError" class="error" style="color:red"></span>
                        </div>


                        <div class="form-group m-2">

                            <input type="text" name="otp" id="otp" class="form-control d-none" placeholder="Enter otp">
                            <span class="error" id="otpError" class="error"></span>
                        </div>

                        <div class="form-group m-2">
                            <input type="password" name="password" id="password" class="form-control"
                                aria-required="true" placeholder="Password">
                            <span id="passwordError" class="error"></span>
                            <small class="smallnotedemo">(8 characters -1 uppercase, 1 lowercase, 1 numeric, 1
                                special character)</small>

                        </div>


                        <div class="form-group m-2">
                            <input type="password" name="confirm_pass" id="confirm_pass" class="form-control"
                                aria-required="true" placeholder="Repeat password">
                            <span id="confirmpasswordError" class="error"></span>
                        </div>

                        <input type="submit" id="signupbtn" value="Sign Up" class="btn btn-light mt-3">
                        <p>Are you a member ? <a class="Login" href="javascript:void(0);" onclick="showLoginModal()"
                                data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a></p>

                        <!-- <a href="googlelogin"><img src="<?php echo base_url('assets/images/google-sign-in-btn.png'); ?>" />Login with google</a> -->

                    </form>
                </div>

            </div>

        </div>

    </div>

    </div>

    <?php
    $adminModel = new \App\Models\AdminModel();
    $wherecond1 = array('is_deleted' => 'N');
    $data = $adminModel->getalldata('countries', $wherecond1);
    ?>

    <div class="modal fade" id="userformmodal" tabindex="-1" aria-labelledby="userformmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content userModal">
                <div class="modal-header">
                    <h5 class="modal-title" id="userformmodalLabel">User Form</h5>

                </div>
                <div class="modal-body">
                <div id="userformmodalloader" class="loader-container">
                            <div class="loader"></div>

                        </div>
                    <!-- Your User Form goes here -->
                    <form action="saveuserdata" method="post">
                        <input type="hidden" name="email" id="hiddenEmail">
                        <!-- <div class="form-group"> -->
                        <div class="form-group">
                            <label for="country">Please select Country:</label>
                            <select name="country" class="form-control" id="country">
                                <option value="">Select Country</option>

                                <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $country) : ?>
                                <option value="<?= $country->name; ?>">
                                    <?= $country->name; ?>
                                </option>
                                <?php endforeach; ?>
                                <?php } ?>

                                <span style="color:red;" id="Countryspanid">

                                </span>
                            </select>
                        </div>

                        <div class="form-group" id="category_div">
                            <label for="courses_id_g">Please select course:</label>

                            <select class="form-control" name="courses_id_g" id="courses_id_g" style="width: 100%;">
                                <option>Please select course</option>
                                <?php if (!empty($courses_data)) { ?>
                                <?php foreach ($courses_data as $data) { ?>
                                <option value="<?= $data->id; ?>" <?php if ((!empty($single_data)) && $single_data->courses_id === $data->id) {
                                                                                echo 'selected';
                                                                            } ?>>
                                    <?= $data->courses_name; ?>
                                </option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- </div> -->
                        <div class="sub_category_div form-group" id="sub_category_div">
                            <label for="sub_courses_id_g">Please select sub courses:</label>

                            <input type="hidden" id="selected_sub_courses_id_g" value="<?php if (isset($edit)) {
                                                                                            echo ($edit['sub_courses_id_g']);
                                                                                        } ?>">
                            <select name="sub_courses_id_g" id="sub_courses_id_g" class="form-control">
                                <option value="">Please select sub courses</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Please enter Your Age</label>
                            <input type="number" name="age" id="age" class="form-control" aria-required="true"
                                placeholder="Enter Your Age">
                        </div>
                       
                        <div class="form-group">
                            <label style="font-size: 14px;">Select Class Types</label><br>
                            <label style="margin-top: 15px;margin-left: 13px;font-size: 14px;">GroupSession</label>
                            <input type="radio" name="SessionType" value="GroupSession" class="experience-radio">
                            <label style="margin-left: 100px;font-size: 14px;">OneToOneSession</label>
                            <input type="radio" name="SessionType" value="OneToOneSession" class="experience-radio">
                        </div>
                        <label>
                            <input type="checkbox" id="termsCheckbox"> I agree to the <a href="#" id="termsLinhfgk"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">terms and conditions</a>
                        </label>
                        <input type="submit" onclick="get_data()" id="btncheck" disabled class="btn btn-light mt-3">
                        <a class="Register" href="javascript:void(0);" id="backToRegister" >Back to Sign Up</a>
                    </form>
                    <!-- End of User Form -->
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade login-modal lmwotp" id="loginformpopup" tabindex="-1" aria-labelledby="ModalFormLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="row no-gutters w-100">
                    <div class="col-12 col-md-4 col-lg-4 ">
                        <div class="left-side">
                            <img src="public/images/dance1.jpg" alt="Descriptive Alt Text">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="right-side">
                            <div class="card" style="background-color: #F8F8F8;">
                                <div class="card-body">
                                    <h4 class="card-title">Login</h4>
                                    <form id="loginForm" class="row" method="post"
                                        action="<?php echo base_url(); ?>validateotp">
                                        <div class="countrie_code form-group col-lg-4 col-md-4 col-4"
                                            id="countrieCodeSection">
                                            <select name="countrie_code" class="form-control countrycode lenValidate"
                                                id="lenValidate" required></select>
                                        </div>
                                        <div class="form-group col-lg-8 col-md-8 col-8" id="mobileNumberSection">
                                            <input type="text" name="mobilenumber" id="mobilenumber"
                                                class="form-control" placeholder="Enter Email or Phone Number" required>
                                        </div>
                                        <div class="toggle col-lg-12 col-md-12 col-12">
                                            <input type="radio" name="loginOption" id="otpOption" value="otp">
                                            <label for="otpOption">OTP</label>
                                            <input type="radio" name="loginOption" id="passwordOption" value="password"
                                                checked>
                                            <label for="passwordOption">Password</label>
                                        </div>
                                        <!-- OTP Input -->
                                        <div id="otpSection" class="otp-input col-lg-12 col-md-12 col-12"
                                            style="display: none;">
                                            <div class="form-group">
                                                <input type="text" name="insertotp" id="insertotp" class="form-control"
                                                    placeholder="Enter OTP" required>
                                            </div>
                                        </div>
                                        <!-- Password Input -->
                                        <div id="passwordSection" class="password-input col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">

                                            <input type="hidden" name="combinedMobile" id="combinedMobile">
                                            <button type="button" id="otpButton" class="btn btn-primary">OTP</button>
                                            <button type="submit" id="continueButton" class="btn btn-primary"
                                                style="display: none;">Continue</button>
                                        </div>
                                    </form>
                                    <p>Not a member yet?
                                        <a class="Register" href="javascript:void(0);" onclick="showRegistrationModal()"
                                            data-bs-toggle="modal" data-bs-target="#registerformpopup">Sign Up</a>
                                    </p>
                                    <div class="forgetmenot login-remember float-center">
                                        <a class="lost-pass-link m-2" href="javascript:void(0);" title="Lost Password"
                                            onclick="showLostPasswordModal()">Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                            <img src="public/images/boarder1.webp" class="border_img" alt="Descriptive Alt Text">
                        </div>
                    </div>






                </div>
            </div>
        </div>






    </div>

    <div class="modal fade terms" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
        id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><b>Terms and Conditions</b></h5>

                    </div>
                    <div class="modal-body">
                        <div class="termsConditions">Welcome to www.enatyam.com. These terms and conditions outline the
                            rules and regulations for using our website and accessing our online dance, music, and yoga
                            training services.</div>
                        <ul>
                            <li class="termsConditions"><b>1. Acceptance of Terms:</b> By accessing and using
                                www.enatyam.com, you agree to comply with and be bound by these terms and conditions. If
                                you do not agree with any part of these terms, please refrain from using our website.
                            </li>
                            <li class="termsConditions"><b>2. User Registration:</b> To access certain features or
                                services, you may be required to register an account. You are responsible for providing
                                accurate and current information. Keep your login credentials confidential, and notify
                                us immediately of any unauthorized use.</li>
                            <li class="termsConditions"><b>3. Payment and Refunds:</b> Payments for our online training
                                services are processed securely. Refund policies are outlined in each respective service
                                offering. Any additional charges, such as registration fee, convenience fee, currency
                                exchange fees, are your responsibility.</li>
                            <li class="termsConditions"><b>4. User Conduct: </b>
                                You agree not to use our website for any unlawful or prohibited activities. This
                                includes but is not limited to:<br>
                                • Violating any applicable laws or regulations.<br>
                                • Infringing on the rights of others.<br>
                                • Attempting to gain unauthorized access to our systems.</li>
                            <li class="termsConditions"><b>5.Termination of Services: </b>We reserve the right to
                                terminate or suspend your access to our services at any time, for any reason, without
                                notice. This includes the right to terminate services if we believe you have violated
                                these terms and conditions.</li>
                            <li class="termsConditions"> <b>6. Disclaimers:</b> Our website and services are provided
                                "as is" without any warranties, expressed or implied. We do not guarantee the accuracy,
                                completeness, or suitability of the information and materials found on our website.</li>
                            <li class="termsConditions"><b> Changes to Terms:</b> We reserve the right to modify these
                                terms and conditions at any time. Any changes will be effective immediately upon posting
                                on our website. It is your responsibility to review these terms regularly.</li>
                            <li class="termsConditions">If you have any questions or concerns about these terms and
                                conditions, please contact us at<br>
                                [Your Contact Information].</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lostpasswordmodal" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login_form">
                        <h4 class="titel pt-3" style="color: black;">Lost Password Recovery</h4>
                        <form name="lostPasswordForm" action="<?php echo base_url(); ?>lostpassword"
                            id="lostpasswordform" method="post">
                            <div class="form-group">
                                <input type="email" name="lostpassword_email" id="lostpassword_email"
                                    class="form-control" aria-required="true" placeholder="Email">
                                <span id="lostpassword_email_error" style="color: red;"></span>
                            </div>
                            <button type="submit" class="btn btn-light mt-3">Recover Password</button>
                        </form>
                        <!-- OTP input field and button (hidden initially) -->
                        <form name="otpValidateForm" action="<?php echo base_url(); ?>otpvalidate" id="otpValidateForm"
                            method="post">
                            <div id="otpField" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="entered_otp" id="entered_otp" class="form-control"
                                        placeholder="Enter OTP">
                                    <span id="invalidotp" style="color: red;"></span>
                                </div>
                                <button type="submit" class="btn btn-light mt-3">Submit OTP</button>
                            </div>
                        </form>

                        <form name="newPasswordForm" action="<?php echo base_url(); ?>newpassword" id="newPasswordForm"
                            method="post">
                            <div id="passwordField" style="display: none;">
                                <div class="form-group">
                                    <input type="password" name="new_password" id="new_password" class="form-control"
                                        aria-required="true" placeholder="Enter New Password">
                                    <input type="password" name="conf_password" id="conf_password" class="form-control"
                                        aria-required="true" placeholder="Confirm Password">
                                    <span id="password_match_error" style="color: red;"></span>
                                </div>
                                <button type="submit" class="btn btn-light mt-3">Submit New Password</button>
                            </div>
                        </form>
                        <!-- New Password input field (hidden initially) -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="loginwithotp" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login_form">
                        <h4 class="titel pt-3" style="color: black;">Enter Your Mobile Number</h4>
                        <form id="sendOtpForm" method="post">
                            <div class="form-group">
                                <input type="number" name="mobilenumber" id="mobilenumber" class="form-control"
                                    aria-required="true" placeholder="Mobile Number">
                                <span id="mobilenumber_error" style="color: red;"></span>
                            </div>
                            <button type="button" id="sendOtpButton" class="btn btn-light mt-3">Send OTP</button>
                        </form>

                        <!-- OTP input field and button (hidden initially) -->
                        <form name="loginotp" action="<?php echo base_url(); ?>loginotp" id="loginotpForm" method="post"
                            style="display: none;">
                            <div id="otpField">
                                <div class="form-group">
                                    <input type="text" name="entered_otp" id="entered_otp" class="form-control"
                                        placeholder="Enter OTP">
                                    <span id="otp_error" style="color: red;"></span>
                                </div>
                                <button type="submit" class="btn btn-light mt-3">Submit OTP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- model  -->