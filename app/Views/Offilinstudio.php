<?php include('header.php'); ?>
<style>
.address {
    display: flex;
    align-items: center;
}

.text {
    flex: 1;
}

.image {
    flex: 1;
    text-align: center;
}

.image img {
    max-width: 50%;
}
ul li{
 
    color: #fff;

}
.wcsf1{
    padding: 0% 0% 0% 22%;
}
.wcsf2{
    padding: 0% 0% 0% 14%;
}

.offiline-section{
    padding-top:50px;
}




</style>
<!-- <section class="contactus">
    <div class="container cont-width offline">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1><b>OFFLINESTUDIO</b></h1>
            </div>
        </div>
    </div>
</section> -->
<section class="">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 col-12 offilinestudeobaneer">
                    <img src="<?=base_url(); ?>public/images/offilinestudeo1.png" class="" style="width:100%">
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
                    Offline Studio
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="offiline-section ">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Unlock & Experience Excellence With Our World-Class Studio Facilities!</h3>
        
            <form class="offlineStudioform" action="<?php echo base_url(); ?>offlineAddress" method="post" id="offlineStudioform">
                <div class="col-md-12 col-12 text-col mt-5 text-center">
                    <h5 class="heading text-center">Enter Your Area Pincode To Discover Our Studios</h5>
                    <div class="text-center offlinei">
                        <input type="text" class="form-control mr-sm-2 small-input"  name="pincode" id="pincodeAdress" placeholder="pincode" title="Please enter maximum 6 digits">
                        <span id="pincodeError" class="text-danger" style="display: none;">Please enter a valid pin code.</span>

                    </div>
                    <!-- <div id="addressResult" style="display: none;"></div> -->
                    <input class="btn btnstart"  type="button" value="Find us" id="toggleForm"/>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container" id="joinForm" style="display: none;">
        <div class="row noStudioRow">
            
            <h4 class="text-center">We're sorry, but our studio services are not available in your area at the moment. Stay
                                tuned for updates! We'll keep you posted once we expand our services to your

                                location. Thank you for your interest and patience!
            </h4>
        </div>
    </div>
    <div class="container" id="getform" style="display: none;">
        <!-- <div class="row p-3 MusicSec1">
            <div class="col-md-6">
            <img src="<?=base_url(); ?>public/images/Dance/bollywood-dance.png" />
            </div>
            <div class="col-md-6">
            <h3 class="text-center">Enatyam Studio</h3>
            <h6 class="text-center mt-5"></h6>
            </div>
        </div> -->

        

        <div class="row p-3 ">
    <!-- <div class="col-md-6 col-12">
        <img id="image" src="" class="studioImg">
    </div> -->
    <div class="col-md-12 col-12 text-col mt-5" id="addressDetails">
        <!-- Address details will be appended here -->
    </div>
</div>

    </div>
</section>

<section class="MusicSec faculty-section p-5">

<div class="container ">
    <div class="row" >
    <h3 class="text-white pb-5" style="text-align:center">World-Class Studio Facilities!
        <span class="line linessf"></span> 
    </h3>
        <div class="col-lg-6 col-md-6 col-12 wcsf1" >
            <ul>
                <li>Waiting Area for Parents/Guardians</li>
                <li>CCTV Security</li>
                <li>Storage Space</li>
                <li>Natural Lighting</li>
                <li>Professional Lighting</li>
                <li>Safety Features</li>
            </ul>

        </div>
        <div class="col-lg-6 col-md-6 col-12 wcsf2"  >
        <ul>
                <li>Spacious Floors</li>
                <li>Large Mirrors</li>
                <li>Quality Sound System</li>
                <li>Climate Control</li>
                <li>Changing Rooms</li>
                <li>Wi-Fi Access</li>
            </ul>

        </div>
    </div>
</div>
</section>



<!-- <div class="container rcbtnoffline">
    <div class="row">
        <div class="col-lg-12 nsrad">

            <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request">Not sure ?? Request a call
                back</a>
        </div>
    </div>
</div> -->

<?php include('bookdemocallb.php'); ?>





<?php include('footer.php'); ?>
