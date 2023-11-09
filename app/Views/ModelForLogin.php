<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include(APPPATH . 'views/StudentSidebar/Studentsidebar.php'); ?>
    <!-- <link rel="stylesheet" href="<?=base_url(); ?>public/css/commingsoon.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <style>
    .card-container {
        display: flex;
        justify-content: space-between;
        /* To evenly distribute the cards */
    }

    .price-card-body {
        margin-left: 27px;
    }

    .button2-card {
        border-radius: 24px;
    }

    .button1-card {
        border-radius: 24px;
    }

    .card {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        width: 311px;
        height: 305px;
        display: none;
        /* Hide cards by default */
    }
 
    </style>
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="countainer" style="margin-left:22%;">
        <h2>You Have To Select Sessions...</h2>
        <label>
            <input type="radio" name="radioGroup" value="button1"> Private Session
        </label>

        <label>
            <input type="radio" name="radioGroup" value="button2">Group Session
        </label>


        <div class="card-container">
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #8c52ff 0%, #ff8161 100%);">
                <div class="price-card-body">
                    <h2>8 Sessions
                    </h2>
                    <h4>₹ 1200 per session</h4>
                    <h4>Total Price: 9600 <span class="del-price"><del>10105 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time Slot preference.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn Any 1 subject.

                            </span>

                        </li>



                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>



                    </ul>




                </div>
            </div>
            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(309deg, #191103 0%, #9d6a07 51%);">
                <!-- Content for Card 1 -->
                <div class="price-card-body">
                    <h2>21 Sessions
                    </h2>
                    <h4>₹ 475 per session</h4>
                    <h4>Total Price: 9990 <span class="del-price"><del>10500 </del></span></h4>


                    <ul class="" style="padding-left:9px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Learn Any 1 subject.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>

                    </ul>




                </div>
            </div>
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(309deg, #191103 0%, #9d6a07 51%);">
                <div class="price-card-body">
                    <h2>21 Sessions
                    </h2>
                    <h4>₹ 1090 per session</h4>
                    <h4>Total Price: 22890 <span class="del-price"><del>24880 </del></span></h4>

                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn Any 1 subject.

                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>




                </div>
            </div>
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #c420a2 0%, #ffadee 100%);">
                <!-- Content for Card 2 -->
                <div class="price-card-body">
                    <h2>51 Sessions</h2>
                    <h4>₹ 975 per session</h4>
                    <h4>Total Price: 49725 <span class="del-price"><del>59910 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time Slot preference.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn as many subject as you want.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>



                </div>
            </div>
            <!--  -->


            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #c420a2 0%, #ffadee 100%);">
                <!-- Content for Card 1 -->
                <div class="price-card-body">
                    <h2>51 Sessions
                    </h2>
                    <h4>₹ 450 per session</h4>
                    <h4>Total Price: 22950 <span class="del-price"><del>24950 </del></span></h4>


                    <ul class="" style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Group Live Class- upto 10 students.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Learn Any 1 subject.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>



                </div>
            </div>

            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #8c52ff 0%, #ff8161 100%);">
                <div class="price-card-body">
                    <h2>101 Sessions</h2>
                    <h4>₹ 423 per session</h4>
                    <h4>Total Price: 429777 <span class="del-price"><del>51777 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Group Live Class- upto 10 students.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn as many subject as you want.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>

                    </ul>


                </div>
            </div>


        </div>

        <script>
        // Function to show/hide cards based on radio button selection
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        const cards = document.querySelectorAll('.card');

        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                cards.forEach(card => card.style.display = 'none');
                const selectedValue = document.querySelector('input[name="radioGroup"]:checked').value;
                const selectedCards = document.querySelectorAll(`.card.${selectedValue}-card`);
                selectedCards.forEach(card => card.style.display = 'block');
            });
        });
        </script>


</body>

</html>