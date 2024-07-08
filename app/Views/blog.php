<?php include('header.php'); ?>
<style>
    .text-black{
        color:#000 !important;
    }
    </style>


<section class="contactus">

    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12">
                <h1>blog</h1>
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
                    blog
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="cont-main-section">
<div class="container-fluid">
   <div class="row pdblog">
      <!-- Video Section -->
      <div class="col-lg-8 col-md-6 col-12 video videoofblog">
         <!-- Video Here -->
         <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- Button Section -->
      <div class="col-lg-4 col-md-6 col-12">
   <!-- First Row of Buttons -->
   <div class="row pdblog1">
    <?php if(!empty($courses_data)){
         ?>
        <?php foreach($courses_data as $data){ 
              $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

              $wherecond = array('course' => $data->id);
              
              
              $blog_data = $adminModel->getalldata('blogs', $wherecond);
              
            ?>
              <?php if(!empty($blog_data)){ ?>
            
            <div class="col-lg-6 col-md-6 col-6 btnblocks p-2">
                <a href="#blog_<?=$data->id;?>" class="btn btn-primary btn-block active"><?=$data->courses_name;?></a>
            </div>
        <?php } ?>
      <?php } ?>
      <?php } ?>

  
</div>


   </div>
</div>


    <div class="row" style="margin-top: 30px;">
        <div class="MusicSec">
        <?php if(!empty($courses_data)){ ?>
            <?php $counter = 0; ?>
        <?php foreach($courses_data as $data){ 
          
            $adminModel = new \App\Models\AdminModel(); // Adjust the namespace and model name accordingly

              $wherecond = array('course' => $data->id);
              
              
              $blog_data = $adminModel->getalldata('blogs', $wherecond);
            ?>
            <?php $counter++; ?>

           
                <!-- 1st -->
                <div class="row <?= $counter % 2 == 0 ? 'text-lg-start1' : 'text-lg-start'; ?>" id="blog_<?=$data->id;?>" id="#blog_<?=$data->id;?>">
                <?php if(!empty($blog_data)){ ?>
                <h3 class=" <?= $counter % 2 == 0 ? 'text-black' : 'text-white'; ?>" style="padding-top: 1% !important; padding-bottom: 1% !important; text-align:center"><?=$data->courses_name;?>
                        <span class="line linessf"></span> </h3>
                       
                            <?php foreach($blog_data as $blog_datas){?>
                              

                        <div class="col-lg-3 col-md-4 col-6 ">
                        <h5 class="text-white " id="blog_<?=$data->id;?>" style="text-align: center;"><?=$blog_datas->title;?></h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?=base_url(); ?>HistoryofKathak/<?=$blog_datas->id?>" target="_blank" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail" src="<?php echo  base_url(); ?>public/uploads/blog_img/<?=$blog_datas->image;?>"
                                        alt="<?=$blog_datas->image;?>" >
                                </a>
                            </div>
                            
                        </div>
                        
                        <?php } ?>
                       
                   
                        <?php } ?>

                    
                </div>
                            

                <?php } ?>
      <?php } ?>
                
        
                
               
                </div>
                </div>

</section>

<?php include('footer.php'); ?>