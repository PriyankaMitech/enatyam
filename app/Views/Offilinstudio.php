<?php include('header.php'); ?>

</style>
<section class="contactus">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1><b>Career</b></h1>
            </div>
        </div>
    </div>
</section>
<section class="cont-main-section">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-ul">
                    <li>
                        <a href="<?php echo base_url('/'); ?>">Home</a>
                    </li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                        Career
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="career-main-section">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Find us we are here for you !</h3>
            <div class="col-md-6 col-12">
                <img src="public/images/guitar.jpg" style="border-radius: 100px;" class="danceimg1 home">
            </div>

            <div class="col-md-6 col-12 text-col mt-5">
                <h4 class="heading">Find us we are here for you</h4>
                <ul class="list-unstyled">
                    <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>##</li>
                    <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> ##</li>
                    <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> ##</li>
                    <li class="mt-3"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span> ##</li>
                </ul>
                <input type="text" class="form-control mr-sm-2" id="inputPassword2" placeholder="pincode"
                    title="Please enter maximum 6 digits">
                <span id="pincodeError" class="text-danger" style="display: none;">Please enter the pin code.</span>
                <input class="btn btnstart" onclick="toggleForm()" type="button" value="Find us" />
            </div>
        </div>
    </div>
    <div class="container" id="joinForm" style="display: none;">
        <div class="row">
            <h3 class="text-center mt-5">Coming soon!</h3>
        </div>
    </div>
</section>



<div class="container ">
    <div class="row">
        <div class="col-lg-12 nsrad">

            <a href="<?php echo base_url('Contactus'); ?>" class="btnnew btn-request">Not sure ?? Request a call
                back</a>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
