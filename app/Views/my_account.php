<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/career.css">
    <link rel="stylesheet" href="public/css/profile.css">
    <link rel="stylesheet" href="public/css/my_account.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- fontawesome icon cdn -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->

</head>

<body>
<?php include('header.php');?>
    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>My Account</h1>


                </div>

            </div>

        </div>

    </section>
    <section class="cont-main-section">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-ul">
                        <li>
                            <a href="<?php echo base_url('home');?>">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            My Account
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-12 full-width">


                <article id="post-16" class="post-16 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="MyAccount">
                            <nav class="MyAccount-navigation">
                                <ul>
                                    <li
                                        class="MyAccount-navigation-link dashboard">
                                        <a href="">Dashboard</a>
                                    </li>
                                    <li
                                        class="MyAccount-navigation-link Orders">
                                        <a href="">Orders</a>
                                    </li>
                                    <li
                                        class="MyAccount-navigation-link Downloads">
                                        <a href="">Downloads</a>
                                    </li>
                                    <li
                                        class="MyAccount-navigation-link Addresses">
                                        <a href="">Addresses</a>
                                    </li>
                                    <li
                                        class="MyAccount-navigation-link Account">
                                        <a href="">Account
                                            details</a>
                                    </li>
                                </ul>
                            </nav>


                            <div class="MyAccount-content">
                                <div class="MyAccount-notices-wrapper"></div>


                                <div class="MyAccount-info">
                                    No order has been made yet. <a class="MyAccount-Button button"
                                        href="">Browse products</a> </div>


                            </div>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->



            </main>
        </div>
    </div>





    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
<?php include('footer.php'); ?>

</html>