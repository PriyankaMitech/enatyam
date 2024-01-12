<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));

// echo "<pre>";
// print_r($pages);
// exit();

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.0/sweetalert2.css" rel="stylesheet">
    <?php if ($page == 'enatyam' || $page == 'Home') {

    ?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/faq.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/s_header.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/courseOffering.css">

        <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
        <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <!-- fontawesome icon cdn -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                /* background: crimson; */
                /* opacity: 1; */
                /* color: #fff!important; */
                break-after: avoid;
                border: 1px solid #000;
                padding: 6px;
                border-radius: 30px;
                background-color: #ff0067;
                opacity: 1;
                font-size: 15px;

            }
        </style>

    <?php } else if ($page == 'Dance') { ?>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/DanceInstructer.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </script>

    <?php } else if ($page == 'music') { ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/headerStyle.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/dancepage.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/DanceInstructer.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


    <?php } else if ($page == 'Yoga') { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="<?= base_url(); ?>public/css/dancepage.css"> -->
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Yogapage.css">


        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Dancefaq.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <style>
            .tab-pane.fade.show .textPara1 {
                font-size: 15px !important;
                font-weight: 400 !important;
            }
        </style>
    <?php } else if ($page == 'Instruments') { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instruments.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentsfaq.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Instrumentpage.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/commingsoon.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
    <?php } else if ($page == 'Career') { ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php } else if ($page == 'Carrier') { ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php } else if ($page == 'demo') { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php } else if ($page == 'Checkout' || $page == 'BillingInformation') { ?>

        <link rel="stylesheet" href="public/css/Checkout.css">

        <link href="<?php echo base_url(); ?>public/extcss/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>

        <style>
            .error {
                color: red !important;
            }
        </style>




    <?php } else if ($page == 'Contactus') {


    ?>
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">

        <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/contactus.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- fontawesome icon cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo1.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/demoprofile.css">
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/Carrier.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php }
    // echo $page;exit();
    ?>

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/footer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Login.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/Register.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/hederresponsive.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/resposivestyle.css">
    <style>
        .termsConditions {
            font-size: 12px;
            font-weight: 400;
        }
    </style>

</head>

<body class="overlap">
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
    <section class="tophead ">
        <nav class="navbar navbar-expand-lg">
            <div class="container  pd0">
                <!-- <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

                <div class="collapse navbar-collapse nav1" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li>
                            <a href="tel:+91-70205%2009962" target="_blank" rel="nofollow noopener">
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <span class="text">+91-70205 09962</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:hello@enatyam.com" target="_blank" rel="nofollow noopener">
                                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <span class="text">hello@enatyam.com</span>
                            </a>
                        </li>
                    </ul>

                    <div>
                        <div class="">
                            <?php if (!(session()->get('sessiondata'))) : ?>
                                <div class="loginmenu">
                                    <a class="Register" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Register</a>
                                    <a class="login" href="" data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a>
                                </div>
                            <?php else : ?>
                                <div class="loginmenu">
                                    <!-- <a class="Register" href="" data-bs-toggle="modal" data-bs-target="#registerformpopup">Register</a> -->
                                    <a class="Dashboard" href="<?php echo base_url(); ?>Dashboard">Dashboard</a>
                                    <a class="logout" href="<?php echo base_url(); ?>logout">Logout</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="nav-container">

            <!-- desktop nav -->
            <nav class="navbar navbar-expand-lg d-none d-lg-block">
                <div class="container">
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> -->
                    <a href="<?php echo base_url(); ?>" title="Enatyam - Best eLearning platform for dance and music" rel="home" class="thim-logo">
                        <img src="public/images/logo1.png" alt="Enatyam">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav main menu ms-auto">
                            <a href="https://api.whatsapp.com/send?phone=+919421796800&amp;text=Got%20reference%20from%20your%20Digital%20vCard.%20Want%20to%20know%20more%20about%20your%20products%20and%20services." target="_blank">Whatsapp</a>
                            <a class="nav-link active px-2" href="<?php echo base_url('Home'); ?>">Home</a>
                            <a class="nav-link px-2" href="<?php echo base_url('Dance'); ?>">Dance</a>
                            <a class="nav-link px-2" href="<?php echo base_url('music'); ?>">Music</a>
                            <a class="nav-link px-2" href="<?php echo base_url('Yoga'); ?>">Yoga</a>
                            <a class="nav-link px-2" href="<?php echo base_url('Instruments'); ?>">Instruments</a>
                            <a class="nav-link px-2" href="<?php echo base_url('Career'); ?>">Career</a>
                        </div>
                        <div class="navbar-nav">
                            <a href="<?php echo base_url('demo'); ?>" class="btn btndemoh" style="width: auto;">BOOK
                                YOUR FREE DEMO</a>
                        </div>
                    </div>
                </div>


            </nav>

            <!--  -->

            <!-- mobile nav -->
            <div class="container-fluid d-block d-lg-none">
                <div class="row mx-0">
                    <div class="col-6">
                        <a href="<?php echo base_url(); ?>" title="Enatyam - Best eLearning platform for dance and music" rel="home" class="thim-logo">
                            <img src="public/images/logo1.png" alt="Enatyam">
                        </a>
                    </div>
                    <div class="col-6 text-right my-auto menub">
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
                <a class="nav-link px-2" href="<?php echo base_url('music'); ?>">Music</a>
                <a class="nav-link px-2" href="<?php echo base_url('Yoga'); ?>">Yoga</a>
                <a class="nav-link px-2" href="<?php echo base_url('Instruments'); ?>">Instruments</a>
                <a class="nav-link px-2" href="<?php echo base_url('Career'); ?>">Career</a>
                <a href="<?php echo base_url('demo'); ?>" class="btn btndemoh mt-2">BOOK YOUR FREE DEMO</a>

            </div>
            <div id="overlay"></div>
    </section>


    <div class="modal fade" id="registerformpopup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">


                    <div class="register_form">
                        <h4 class="titel pt-3">Register a new account</h4>


                        <form name="registrationForm" method="post" action="<?php echo base_url(); ?>register" id="registerform">

                            <div class="form-group m-2">
                                <input type="text" name="full_name" id="full_name" class="form-control" aria-required="true" placeholder="Username">
                                <span id="nameError" class="d-none" class="error"></span>
                            </div>
                            <div class="form-group m-2">
                                <input type="email" name="email" id="email" class="form-control" aria-required="true" placeholder="Email">
                                <span id="emailError" class="error"></span>
                            </div>

                            <div class="form-group m-2">

                                <input type="text" name="emailotp" id="emailotp" class="form-control d-none" placeholder="Enter otp sent to your email id">
                                <span class="error" id="otpError" class="error"></span>
                            </div>

                            <div class="form-group m-2">

                                <input type="text" name="mobile_no" id="mobile_no" class="form-control" aria-required="true" placeholder="Enter your whatsapp number">

                                <span id="mobile_noError" class="error"></span>
                            </div>

                            <div class="form-group m-2">

                                <input type="text" name="otp" id="otp" class="form-control d-none" placeholder="Enter otp">
                                <span class="error" id="otpError" class="error"></span>
                            </div>

                            <div class="form-group m-2">
                                <input type="password" name="password" id="password" class="form-control" aria-required="true" placeholder="Password">
                                <span id="passwordError" class="error"></span>
                            </div>

                            <div class="form-group m-2">
                                <input type="password" name="confirm_pass" id="confirm_pass" class="form-control" aria-required="true" placeholder="Repeat password">
                                <span id="confirmpasswordError" class="error"></span>
                            </div>

                            <input type="submit" id="signupbtn" value="Sign Up" class="btn btn-light mt-3">
                            <p>Are you a member?<a class="Login" href="javascript:void(0);" onclick="showLoginModal()" data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a></p>

                            <a href="googlelogin"><img src="<?php echo base_url('assets/images/google-sign-in-btn.png'); ?>" />Login with google</a>

                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="userformmodal" tabindex="-1" aria-labelledby="userformmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userformmodalLabel">User Form</h5>

                </div>
                <div class="modal-body">
                    <!-- Your User Form goes here -->
                    <form action="saveuserdata" method="post">
                        <input type="hidden" name="email" id="hiddenEmail">
                        <!-- <div class="form-group"> -->
                        <div class="form-group">
                            <label for="country">Please select Country:</label>
                            <select name="country" class="form-control" id="country">
                                <option value="">Select Country</option>
                                <!-- JavaScript will populate this list -->
                                <?php if (!empty($country_data)) { ?>
                                    <?php foreach ($country_data as $data) : ?>
                                        <option value="<?= $data->name; ?>">
                                            <?= $data->name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php } ?>

                                <span style="color:red;" id="Countryspanid">

                                </span>
                            </select>
                        </div>

                        <div class="form-group" id="category_div">
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
                            <input type="hidden" id="selected_sub_courses_id_g" value="<?php if (isset($edit)) {
                                                                                            echo ($edit['sub_courses_id_g']);
                                                                                        } ?>">
                            <select name="sub_courses_id_g" id="sub_courses_id_g" class="form-control">
                                <option value="">Please select sub courses</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Please enter Your Age</label>
                            <input type="number" name="age" id="age" class="form-control" aria-required="true" placeholder="Enter Your Age">
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;">Are you practicing this art (any experience in this
                                sector)?</label><br>
                            <label style="margin-left: 100px;font-size: 14px;" for="yes">Yes</label>
                            <input type="radio" name="experience" id="yes" value="yes" class="experience-radio">
                            <label style="margin-left: 100px;font-size: 14px;" for="no">No</label>
                            <input type="radio" name="experience" id="no" value="no" class="experience-radio">
                        </div>
                        <div class="form-group" id="experienceDetails" style="display: none;">
                            <label for="experienceInput">Please provide details of your experience:</label>
                            <input type="text" name="experienceInput" id="experienceInput" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;">Select Class Types</label><br>
                            <label style="margin-top: 15px;margin-left: 13px;font-size: 14px;">GroupSession</label>
                            <input type="radio" name="SessionType" value="GroupSession" class="experience-radio">
                            <label style="margin-left: 100px;font-size: 14px;">OneToOneSession</label>
                            <input type="radio" name="SessionType" value="OneToOneSession" class="experience-radio">
                        </div>
                        <label>
                            <input type="checkbox" id="termsCheckbox"> I agree to the <a href="#" id="termsLinhfgk" data-bs-toggle="modal" data-bs-target="#staticBackdrop">terms and conditions</a>
                        </label>
                        <input type="submit" id="btncheck" disabled class="btn btn-light mt-3">
                        <a class="Register" href="javascript:void(0);" id="backToRegister">Back to Register</a>
                    </form>
                    <!-- End of User Form -->
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="loginformpopup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login_form">
                        <h4 class="titel pt-3" color="black">Login with your site account</h4>

                        <form action="<?php echo base_url(); ?>login" id="loginform" method="post">
                            <div class="form-group m-2">
                                <input type="text" name="username" id="username" class="form-control" aria-required="true" placeholder="Email or Mobile number">
                                <span id="usernameError" style="color: red;"></span>
                            </div>

                            <div class="form-group  m-2">
                                <input type="password" name="password" id="password" class="form-control" aria-required="true" placeholder="Password">
                                <span id="passwordError1" style="color: red;"></span>
                            </div>
                            <div class="forgetmenot login-remember">

                                <a class="lost-pass-link" href="javascript:void(0);" title="Lost Password" onclick="showLostPasswordModal()">Lost your password?</a>
                            </div>
                    </div>

                    <input type="submit" value="Login" id="submitButton" class="btn btn-light mt-3 submitButton">

                    <!-- <button class="btn btn-light mt-3 submitButton" value="Login" id="submitButton" type="submit">Login</button> -->

                    <p>Not a member yet?
                        <a class="Register" href="javascript:void(0);" onclick="showRegistrationModal()" data-bs-toggle="modal" data-bs-target="#registerformpopup">Register</a>
                    </p>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade terms" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><b>Terms and Conditions</b></h5>

                    </div>
                    <div class="modal-body">
                        <ul>
                            <li class="termsConditions">1. Register for an account: To access and purchase the online courses, you must first register for an account on the website. If you already have an account, simply log in using your username and password.</li>
                            <li class="termsConditions">2. Select and purchase courses: Browse through the list of courses available on the website and select the ones you wish to purchase. Each course is treated as a separate offer, so make sure to add each course to your cart individually.</li>
                            <li class="termsConditions">3. Review and agree to the fees: Before completing the purchase, carefully review the fees indicated for each course. By selecting a course, you agree to pay the specified fees.</li>
                            <li class="termsConditions">4. Provide valid payment information: During the checkout process, you will be prompted to provide valid payment information. This may include credit card details or other payment methods accepted by the company. Ensure that the information provided is accurate and up to date.</li>
                            <li class="termsConditions">5. Complete the payment: Once you have provided the payment information, proceed to complete the payment. The company or its affiliates will process the payment based on the chosen payment method.</li>
                            <li class="termsConditions"> 6. Access the purchased courses: After successful payment, you will gain access to the courses you have purchased. Log in to your account and navigate to the course section to start learning.</li>
                            <li class="termsConditions">7. Comply with course terms: While accessing and using the courses, make sure to comply with the terms outlined in the agreement. This includes not sharing or distributing course material to third parties.</li>
                            <li class="termsConditions">8. Complete the course: Work through the course material at your own pace and complete all the required activities and assessments. Take advantage of any interactive features or forums available to enhance your learning experience.</li>
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
                        <form name="lostPasswordForm" action="<?php echo base_url(); ?>lostpassword" id="lostpasswordform" method="post">
                            <div class="form-group">
                                <input type="email" name="lostpassword_email" id="lostpassword_email" class="form-control" aria-required="true" placeholder="Email">
                                <span id="lostpassword_email_error" style="color: red;"></span>
                            </div>
                            <button type="submit" class="btn btn-light mt-3">Recover Password</button>
                        </form>
                        <!-- OTP input field and button (hidden initially) -->
                        <form name="otpValidateForm" action="<?php echo base_url(); ?>otpvalidate" id="otpValidateForm" method="post">
                            <div id="otpField" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="entered_otp" id="entered_otp" class="form-control" placeholder="Enter OTP">
                                    <span id="invalidotp" style="color: red;"></span>
                                </div>
                                <button type="submit" class="btn btn-light mt-3">Submit OTP</button>
                            </div>
                        </form>

                        <form name="newPasswordForm" action="<?php echo base_url(); ?>newpassword" id="newPasswordForm" method="post">
                            <div id="passwordField" style="display: none;">
                                <div class="form-group">
                                    <input type="password" name="new_password" id="new_password" class="form-control" aria-required="true" placeholder="Enter New Password">
                                    <input type="password" name="conf_password" id="conf_password" class="form-control" aria-required="true" placeholder="Confirm Password">
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

    <!-- model  -->