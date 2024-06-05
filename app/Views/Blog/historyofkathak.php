<?php include APPPATH . 'Views/header.php'; ?>

<style>
            .whatsapp-button {
position: fixed;
bottom: 20px; /* Adjust as needed */
right: 20px; /* Adjust as needed */
z-index: 999; /* Ensure it's above other content */
}

/* Additional styling if needed */
.whatsapp-button img {
width: 50px; /* Adjust as needed */
height: auto;
border: none;
}
        </style>
<section class="contactus">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php if(!empty($blog_data)){ echo $blog_data->title;} ?></h1>
                </div>
            </div>
        </div>
    </section>
<section class="mb-5">
    <div class="container-fluid">

        <!-- pills -->
        <div class="typesOfDance-tab">
            <div class="row p-3 ">
            <div class="col-md-12 col-12">
           
                </div>
                <div class="col-md-6 col-12">
                    <img src="<?=base_url(); ?>public/uploads/blog_img/<?php if(!empty($blog_data)){ echo $blog_data->image;}?>" class="danceimg1 home">
                    <!-- public/images/Home/4.webp -->
                </div>

                <div class="col-md-6 col-12 text-col mt-5">
                    <h3 class="heading"> <?php if(!empty($blog_data)){ echo $blog_data->title;} ?></h3>
                    <div class="text-right">
                            <!-- <div class="h1">History of Kathak</div> -->
                        </div>
                    <div class="text-right pt-5">
                            <!-- <div class="h3">Mughal Era Transformations:</div> -->
                    </div>
                       
                        <p class="fst-italic font-weight-bold text-justify">
                     <?php if(!empty($blog_data)){ echo $blog_data->short_desc;} ?>
                        </p>
                </div>

                <div class="col-md- col-12 text-col mt-5">
                <p class="text-justify">
                        <?php if(!empty($blog_data)){ echo $blog_data->long_desc;} ?>

                        </p>
                </div>
            </div>
        <!-- </div> -->

            

               
            </div>  
        </div>
    </div>
    </div>
</section>



<?php include APPPATH . 'Views/footer.php'; ?>