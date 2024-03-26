<?php include('header.php')?>

<body>
    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Us</h1>


                </div>

            </div>

        </div>

    </section>
    <section class="cont-main-section">
        <!-- <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-ul">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->


        <div class="container cont-width contact-card-section">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 cont-cardcp">
                    <div class="cont-card text-center cont-card1">
                        <img class="iconc" src="public/images/mobile-phone.png" />

                        <h3><a href="tel:+91-20-67873249">Call Us</a> </h3>
                        <p><b>Customer Support : </b><a href="tel:+91-20-67873249">+91-20-67873249</a><br>
                        <b>Whatsapp : </b><a>+91-9272122001</a><br>
                        <b>Teacher Support : </b><a href="tel:+91-7020509962">+91-7020509962</a>
                    </p>
                    



                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12 cont-cardcp">
                    <div class="cont-card text-center cont-card2">
                        <img class="iconc" src="public/images/mail.png" />

                        <h3><a href="mailTo:hello@enatyam.com">Mail Us</a> </h3>
                        <p><a href="mailTo:hello@enatyam.com">hello@enatyam.com



                            </a></p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12 cont-cardcp">
                    <div class="cont-card text-center cont-card3">
                        <img class="iconc" src="public/images/pin.png" />

                        <h3><a >Address</a> </h3>
                        <p><a >
                           ENATYAM INDIA PVT.LTD. <br> 
                            T3-GODREJ HILLS2 - BANER <br>
                            NEAR SUNNY'S WORLD <br>
                            PUNE, MAHARASTRA 411045.


                            </a></p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container cont-width cont-form">
            <div class="row">
                <div class="col-lg-12 text-center titleofcf">
                    <h2>Fill the form below so we can get to know you and your needs better.</h2>

                </div>
                <form name="contactUsForm" method="post" action="<?php echo base_url(); ?>contact" id="contactUsForm">

                    <form>

                        <div class="col-lg-12">

                            <input type="text" class="form-control" placeholder="Name *" name="name" />
                            <input type="text" class="form-control" placeholder="Email *" name="email" />
                            <input type="text" class="form-control" placeholder="Mobile number *" name="mobNumber" />
                            <input type="text" class="form-control" placeholder="Intrested In *" name="interestedIn" />

                            <textarea class="form-control" placeholder="Message*" rows="3" name="message"></textarea>


                        </div>
                        <div class="col-lg-12 submitbc">
                            <button class="button-content " role="button">
                                <span class="button-content-wrapper">
                                    <span class="button-text">submit</span>
                                </span>
                            </button>
                        </div>
                    </form>


                    <div class="col-lg-12 goglemap1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d100893.38204848353!2d-122.39173700000002!3d37.791957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085806511f79049%3A0xc9880f5d2f325396!2s58%20Howard%20St%20%232%2C%20San%20Francisco%2C%20CA%2094105!5e0!3m2!1sen!2sus!4v1692034029890!5m2!1sen!2sus"
                            width="100%" height="450" style="border:0;margin-top:40px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

            </div>

        </div>


        <div class="col-lg-12 goglemap2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d100893.38204848353!2d-122.39173700000002!3d37.791957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085806511f79049%3A0xc9880f5d2f325396!2s58%20Howard%20St%20%232%2C%20San%20Francisco%2C%20CA%2094105!5e0!3m2!1sen!2sus!4v1692034029890!5m2!1sen!2sus"
                width="100%" height="450" style="border:0;margin-top:40px" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>


    </section>
    <?php include('footer.php')?>