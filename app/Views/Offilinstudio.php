<?php include('header.php'); ?>

</style>
<section class="contactus">
    <div class="container cont-width offline">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1><b>OFFLINESTUDIO</b></h1>
            </div>
        </div>
    </div>
</section>
<section class="cont-main-section">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 col-12">
                    <img src="<?=base_url(); ?>public/images/offlineStudio-2.png" class="">
                    <!-- public/images/Home/4.png -->
                </div>
            <div class="col-lg-12">
                <ul class="breadcrumb-ul">
                    <li>
                        <a href="<?php echo base_url('/'); ?>">Home</a>
                    </li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                    Offlinestudio
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="career-main-section">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Unlock & Experience Excellence with Our World-Class Studio Facilities!</h3>
           
            <form class="offlineStudioform" action="<?php echo base_url(); ?>offlineAddress" method="post" id="offlineStudioform">
    <div class="col-md-12 col-12 text-col mt-5 text-center">
        <h5 class="heading text-center">Enter Your area Pincode to Discover Our Studios</h5>
        <div class="text-center offlinei">
            <input type="text" class="form-control mr-sm-2 small-input"  name="pincode" id="pincodeAdress" placeholder="pincode" title="Please enter maximum 6 digits">
        </div>
        <span id="pincodeError" class="text-danger" style="display: none;">Please enter a valid pin code.</span>
        <!-- <div id="addressResult" style="display: none;"></div> -->
        <input class="btn btnstart"  type="button" value="Find us" id="toggleForm"/>
    </div>
</form>

        </div>
    </div>
    
    <div class="container" id="joinForm" style="display: none;">
        <div class="row">
            
            <h6 class="text-center mt-5">We're sorry, but our studio services are not available in your area at the moment. Stay
                tuned for updates! We'll keep you posted once we expand our services to your location. Thank you for your interest and patience!</h6>
        </div>
    </div>
    <div class="container" id="getform" style="display: none;">
        <div class="row">
            <div class="col-md-6">
            <!-- <img src="<?=base_url(); ?>public/images/happyfaces/1.png" /> -->
            </div>
            <div class="col-md-6">
            <h3 class="text-center">Enatyam Studio</h3>
            <h6 class="text-center mt-5"></h6>
            </div>
        </div>
    </div>
</section>



<div class="container rcbtnoffline">
    <div class="row">
        <div class="col-lg-12 nsrad">

            <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request">Not sure ?? Request a call
                back</a>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
