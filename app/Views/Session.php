<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cource</title>
    <link rel="stylesheet" href="public/css/Session.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/Session.css">
       <link rel="stylesheet" href="public/css/headerStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


</head>
<?php include('header.php');?>
<body>
    <div class="container">
        <div class="section">
            <!-- First row with 1 column -->
            <div class="row">
                <div class="col">
                    <h4> One to One Session-Basic</h4>
                </div>
            </div>

            <!-- Second row with 2 columns -->
            <div class="row">
                <div class="col-md-6">
                    <div class="cart-section">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="price-card-body">
                            <h4><span class="del-price"><del>₹10,105.00</del> <b> ₹9,600.00</b></span></h4>
                        </div>
                        <div class="w-100 ">
                            <div class="place-btn">
                                <button class="button-content" type="submit" role="button">
                                    <a href="<?php echo base_url('cart');?>" class="button-text">View cart</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Third row with 1 column -->
            <div class="row">
                <div class="col">
                    <div class="social-div ">
                        <h3>Share:<a href="https://twitter.com/e_natyam?s=08" class="twitter-div"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://m.facebook.com/enatyam/" class="facebook-div"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <section class="faculty-section">
        <div class="container cont-width">
            <div class="row heading-div ">


            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">






                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>Group Session-Elite</h4>
                                    </div>
                                    <div class="faculty-content-team__member-position">
                                    <span class="del-price"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>Group Session-Pro</h4>
                                    </div>
                                    <div class="faculty-content-team__member-position">
                                    <span class="del-price"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>Group Session-Basic</h4>
                                    </div>
                                    <div class="faculty-content-team__member-position">
                                    <span class="del-price"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>One to One Session-Elite</h4>
                                    </div>
                                    <div class="faculty-content-team__member-position">
                                    <span class="del-price"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>One to One Session-Pro</h4>
                                    </div>
                                    <div class="faculty-content-team__member-position">
                                    <span class="del-price"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="faculty-div">
                                <div class="faculty-div1">
                                    <img src="<?=base_url(); ?>public/images/Session.jpg" />
                                </div>
                                <div class="faculty-content mt-lg-4">
                                    <div class="faculty-content-team__member-name">
                                        <h4>One to One Session-Basic</h4>
                                    </div>
                                    
                                    <span class="del-price down"><del>₹10,105.00</del><br> <b> ₹9,600.00</b></span>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


    <!-- owl carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl-carousel script -->
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        // autoplay: true,
        //  slideTransition: 'linear',
        autoplaySpeed: 3000,
        slideSpeed: 3000,
        paginationSpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
    <script>
    jQuery(document).ready(function() {

        jQuery(".owl-prev").append("<i ></i>");
        jQuery(".owl-prev i").attr("class", "fa fa-arrow-left");
        jQuery(".owl-next").append("<i ></i>");
        jQuery(".owl-next i").attr("class", "fa fa-arrow-right");


    });
    </script>

</body>

</html>