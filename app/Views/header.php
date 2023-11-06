<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>

<!DOCTYPE html>
<html lang="en">
<?php  $session = \Config\Services::session(); ?>
<?php   $validation = \Config\Services::validation(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enatyam</title>
    <?php if ($page == 'enatyam' || $page == 'Home') {

        ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <link rel="stylesheet" href="public/css/commingsoon.css">
    <link rel="stylesheet" href="public/css/faq.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/s_header.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/courseOffering.css">
  

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- fontawesome icon cdn -->

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
    <?php }else if ($page == 'Dance'){ ?>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/dancepage.css">

    <link rel="stylesheet" href="public/css/commingsoon.css">

    <link rel="stylesheet" href="public/css/Dancefaq.css">
    <link rel="stylesheet" href="public/css/DanceInstructer.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/Instruments.css">
    <link rel="stylesheet" href="public/css/dancepage.css">
    <link rel="stylesheet" href="public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="public/css/Instrumentpage.css">

    <link rel="stylesheet" href="public/css/commingsoon.css">
   
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
    </script>
    
    <?php }else if ($page == 'music'){ ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/headerStyle.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/dancepage.css">
    <link rel="stylesheet" href="public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="public/css/DanceInstructer.css">

    <link rel="stylesheet" href="public/css/commingsoon.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


    <?php }else if ($page == 'Yoga'){ ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="public/css/dancepage.css"> -->
    <link rel="stylesheet" href="public/css/Yogapage.css">


    <link rel="stylesheet" href="public/css/Dancefaq.css">
    <link rel="stylesheet" href="public/css/commingsoon.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .tab-pane.fade.show .textPara1{
            font-size: 15px!important;
            font-weight: 400!important;
        }

    </style>
    <?php }else if($page == 'Instruments') { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/Instruments.css">

    <link rel="stylesheet" href="public/css/Instrumentsfaq.css">
    <link rel="stylesheet" href="public/css/Instrumentpage.css">

    <link rel="stylesheet" href="public/css/commingsoon.css">
   
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
    <?php }else if($page == 'Carrier'){ ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/demo.css">
    <link rel="stylesheet" href="public/css/demo1.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/demoprofile.css">
    <link rel="stylesheet" href="public/css/Carrier.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <?php }else if($page == 'demo'){ ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/demo.css">
    <link rel="stylesheet" href="public/css/demo1.css">
    <link rel="stylesheet" href="public/css/demoprofile.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <?php }else if($page == 'Contactus'){ 
            
      
            ?>
                <link rel="stylesheet" href="public/css/headerStyle.css">

            <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/contactus.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- fontawesome icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
       


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/demo.css">
    <link rel="stylesheet" href="public/css/demo1.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/demoprofile.css">
    <link rel="stylesheet" href="public/css/Carrier.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
       
       <?php }
                // echo $page;exit();
        ?>

    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/Login.css">
    <link rel="stylesheet" href="public/css/Register.css">
    <link rel="stylesheet" href="public/css/resposivestyle.css">
    
</head>
<body>
<section class="tophead ">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid  pd0">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>
                        <a href="tel:+91-70205%2009962" target="_blank" rel="nofollow noopener">
                            <span>
                                <i class="fa fa-phone" aria-hidden="true"></i> </span>
                            +91-70205 09962 </a>
                    </li>
                    <li>
                        <a href="mailto:hello@enatyam.com" target="_blank" rel="nofollow noopener">
                            <span>
                                <i aria-hidden="true" class="fa fa-envelope"></i> </span>
                            hello@enatyam.com </a>
                    </li>
                </ul>

                <div>
                    <div class="">
                        <div class="loginmenu">
                            <a class="Register" href="" data-bs-toggle="modal"
                                data-bs-target="#registerformpopup">Register</a>



                            <a class="login" href="" data-bs-toggle="modal" data-bs-target="#loginformpopup">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="nav-container" >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler hide" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="https://infobeckon.com/enatyam/" title="Enatyam - Best eLearning platform for dance and music"
                    rel="home" class="thim-logo">
                    <img src="public/images/logo1.png" alt="Enatyam"></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav main menu ms-auto">
                        <a class="nav-link active px-2" href="<?php echo base_url('Home');?>">Home </a>
                        <a class="nav-link px-2" href="<?php echo base_url('Dance');?>">Dance</a>
                        <a class="nav-link px-2" href="<?php echo base_url('music');?>">Music</a>
                        <a class="nav-link px-2" href="<?php echo base_url('Yoga');?>">Yoga</a>
                        <a class="nav-link px-2" href="<?php echo base_url('Instruments');?>">Instrumetents</a>
                        <a class="nav-link px-2" href="<?php echo base_url('Carrier');?>">Career</a>
                    </div>
                    <div class="navbar-nav">




                        <a href="<?php echo base_url('demo');?>" class="btn btndemo">BOOK YOUR FREE DEMO</a>
                    </div>
                </div>

            </div>
        </nav>
</section>


<div class="modal fade" id="registerformpopup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">

               
                <div class="register_form">
                    <h4 class="titel pt-3">Register a new account</h4>

                    <form name="registrationForm" onsubmit="return validateForm()" method="post"
                        action="<?php echo base_url();?>register">
                        <div class="form-group m-2">
                            <input type="text" name="full_name" id="full_name" class="form-control" aria-required="true"
                                placeholder="Username">
                            <span id="nameError" style="color: red;"></span>
                        </div>

                        <div class="form-group m-2">
                            <input type="email" name="email" id="email" class="form-control" aria-required="true"
                                placeholder="Email">
                            <span id="emailError" style="color: red;"></span>
                        </div>

                        <div class="form-group m-2">
                        <input type="mobile_no" name="mobile_no" id="mobile_no" class="form-control" aria-required="true"
                            placeholder="mobile number">
                        <span id="mobile_noError" style="color: red;"></span>
                        </div>

                        <!-- <div class="form-group m-2">
                            <select class="form-control required" name="role" id="role" aria-required="true">
                                <option value="">Open this to select Role </option>
                                <option value="Admin">Admin</option>
                                <option value="Student">Student</option>
                                <option value="Faculty">Faculty</option>
                            </select>
                            <span id="roleerror" style="color: red;"></span>
                        </div> -->


                        <div class="form-group m-2">
                            <input type="password" name="password" id="password"  class="form-control"
                                aria-required="true" placeholder="Password">
                            <span id="passwordError" style="color: red;"></span>
                        </div>

                        <div class="form-group m-2">
                            <input type="password" name="confirm_pass" id="confirm_pass" class="form-control"
                                aria-required="true" placeholder="Repeat password">
                            <span id="confirmpasswordError" style="color: red;"></span>
                        </div>

                        <div class="teacher">

                            <label for="become_teacher">

                                <input type="checkbox" name="become_teacher" id="become_teacher">

                                Want to become an instructor? </label>

                        </div>



                        <input type="submit" value="Sign Up" class="btn btn-light mt-3">
                        <p>Are you a member?<a class="Login"  href="javascript:void(0);" onclick="showLoginModal()" data-bs-toggle="modal"
                                data-bs-target="#loginformpopup">Login</a></p>
                    </form>




                </div>

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

                    <form name="loginForm" onsubmit="return validateFormLogin()" action="<?php echo base_url();?>login"
                        id="loginform" method="post">
                        <div class="form-group  m-2">
                            <input type="email" name="email" id="email" class="form-control" aria-required="true"
                                placeholder="Email">
                            <span id="emailError1" style="color: red;"></span>
                        </div>
                        <div class="form-group m-2">
                        <input type="text" name="mobile_no" id="mobile_no" class="form-control" aria-required="true"
                            placeholder="Mobile number">
                        <span id="mobile_noError1" style="color: red;"></span>
                        </div>
                        <div class="form-group  m-2">
                            <input type="password" name="password" id="password" class="form-control"
                                aria-required="true" placeholder="Password">
                            <span id="passwordError1" style="color: red;"></span>
                        </div>
                        <div class="forgetmenot login-remember">
                            <label for="popupRememberme">
                                <input name="rememberme" type="checkbox" value="forever" id="popupRememberme"> Remember
                                Me
                            </label>
                            <a class="lost-pass-link" href="javascript:void(0);" title="Lost Password"
                                onclick="showLostPasswordModal()">Lost your password?</a>
                        </div>
                </div>

                <input type="submit" value="Login" class="btn btn-light mt-3">
                <p>Not a member yet?
                    <a class="Register" href="javascript:void(0);" onclick="showRegistrationModal()"
                        data-bs-toggle="modal" data-bs-target="#registerformpopup">Register</a>
                </p>
                </form>
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
                    <form name="lostPasswordForm" action="<?php echo base_url(); ?>lostpassword" id="lostpasswordform"
                        method="post">
                        <div class="form-group">
                            <input type="email" name="lostpassword_email" id="lostpassword_email" class="form-control"
                                aria-required="true" placeholder="Email">
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
</div>


<!-- model  -->
