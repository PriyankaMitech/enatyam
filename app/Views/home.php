<?php 

$file = __DIR__ . "/header.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";
}
?>


<style>

    
    /* 
    
░░░░░░░░░░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░
██░░██░░░░░░░░░░░▄█░░░░░░████░░████████▄
██▄▄██░░░░░░░░░░░████░░██████░░█████████
▀████▀░████░█░░█░████░░█░██░█░▄▄░█░░▄▄██
░░██░░░█░░█░█▄▄█░████░░█░░░░█░▀▀░█░░▄▄██
░░██░░░████░████░▀███▄▄█▄▄▄▄█▄▄▄▄█▄▄▄▄█▀
░░░░░░░░░░░░░░░░░░░▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀░░


 */




:root {
  /* DEFAULT YOUTUBE VIDEO ASPECT RATIO */
  --video-aspect-ratio: 16 / 9; 
/* PLAYER CONTAINER STYLES*/
 --player-font: Montserrat;
 --player-background-color: #000000;
 --player-border-color: #000000; --player-border-width: 5px; /* <-- 0 = no border */
  /* PLAYLIST STYLES */
  --playlist-background-color: rgba(32, 58, 144, 0.75);
    /* PLAYLIST BUTTON STYLES */
  --playlist-button-font-size: 18px;
  --playlist-button-mobile-font-size 15px;
  --playlist-button-text-color: rgba(255, 255, 255, 1);
  --playlist-button-border-color: rgba(255, 255, 255, 0.5);
  --playlist-button-border-hover-color: rgba(223, 197, 111, 0.90);
  --playlist-button-border-active-color: rgba(255, 255, 255, 0.8);
  --playlist-button-text-color: rgba(255, 255, 255, 1);
  --playlist-button-text-transform: lowercase; /* <--  uppercase - lowercase- normal - etc.*/
  /* PLAYER BUTTON WIDTH 
     Sets aspect ratio width and height in scrolling playlist grid */
 --playlist-button-width: 190px;
 --playlist-button-mobile-width: 163px;

    /* CAPTION STYLES */
  --caption-container-padding: 15px; /* <-- PADDING SETS CONTAINER HEIGHT*/
  --caption-container-mobile-padding: 15px; 
  --caption-font-size: 20px;
  --caption-font-mobile-size: 18px;
  --caption-text-transform: uppercase; /* <--  uppercase - lowercase- normal - etc.*/

  /* MAX WIDTH of PLAYER */
  --parent-container-max-width: 980px; /* <-- PLAY WITH ME */
}


 /* FOR DEMO */
.parent-container {
  width: 100%;
  /* max-width: var(--parent-container-max-width); */
  margin: 0 auto;
  padding:0px 40px 0px 40px;
}



/* BEGIN YOUTUBE PLAYER CSS */

#video-player {
  border: var(--player-border-width) solid var(--player-border-color);
  background-color: var(--player-background-color);
}

#video-player iframe {
    aspect-ratio: var(--video-aspect-ratio);
    width: 100% !important;
    height: 416px ;
      background:black;
}

#video-caption {
  font-size: var(--caption-text-size);
  letter-spacing: 2px;
  text-transform: var(--caption-text-transform);
  width: 100%;
  overflow: hidden;
  padding-left: 15px;
  padding-right: 15px;
  /* top padding less 5 pixels.  Looked nicer.  */
  padding-top: calc(var(--caption-container-padding) - 5px);
  padding-bottom: var(--caption-container-padding);
}

/* MEDIA QUERY for CAPTION */

@media only screen and (max-width: 980px) {
 #video-caption {
  letter-spacing: 0px;
  padding-top: calc(var(--caption-container-mobile-padding) - 5px);
  padding-bottom: var(--caption-container-mobile-padding);
}

}

#playlist {
  background-color: #000;
  overflow: scroll-x;
  padding-right: 23px;
  /* padding-top: 15px;
  padding-bottom: 25px; */
  /* grid layout for playlist */
  /* display: grid; */
  grid-gap: 10px;
  grid-template-columns: repeat(
    auto-fill,
    minmax(var(--playlist-button-width), 1fr)
  );
  grid-auto-flow: column;
  grid-auto-columns: minmax(var(--playlist-button-width), 1fr);
  overflow-x: auto;
  
}  

/* MEDIA QUERY for PLAYLIST GRID */

@media only screen and (max-width: 980px) {
  #playlist {
   grid-auto-columns: minmax(var(--playlist-button-mobile-width), 1fr);
   grid-template-columns: repeat(
    auto-fill,
    minmax(var(--playlist-button-mobile-width), 1fr)
  ); }
}

#playlist button {
    background-color: #00ffff00;

  aspect-ratio: var(--video-aspect-ratio);
  width: var(--playlist-button-width);
  font-size: var(--playlist-button-font-size);
  color: #000;
  text-transform: var(--playlist-button-text-transform);
  overflow: hidden;
  filter: brightness(0.7);
  /* height: 100%; */
  width:100%;
  height: 208px;  
  background-size: cover;
  background-position: center;
  /* padding-left: 10px;
  padding-right:10px; */
  padding: 10px;
    margin: 10px;
  letter-spacing:1px;
    transition: all 300ms ease;
  
/* CUSTOM PLAYLIST BUTTON CURSOR  */
 
  cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMi1jMDAwIDc5LjU2NmViYzViNCwgMjAyMi8wNS8wOS0wODoyNTo1NSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QURDQ0ZGRURGMUFBMTFFQ0JCQTFDMDBCMDE0NDg5M0QiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QURDQ0ZGRUVGMUFBMTFFQ0JCQTFDMDBCMDE0NDg5M0QiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBRENDRkZFQkYxQUExMUVDQkJBMUMwMEIwMTQ0ODkzRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBRENDRkZFQ0YxQUExMUVDQkJBMUMwMEIwMTQ0ODkzRCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ps/vyusAAAdxSURBVHjazFlpTJNZFH1AEQUsFFqobLKGIY4wyKIsA5RNkE1kEs0kjsaEYIjx1/z2x4zbD2NixnVcYlBQJBkHhYAFhlGgbBqkSADFRERZBodFFCnrnNvp17RQFZEWbvJS2u+1Pdzv3HPPfTVh/4f92rVrs52cnLLx97fj4+NjeBzEmmIrMEywxO7u7r/k5OQEnDhxwkIikbhMTU3F9PT0uI+NjSlwvRdrZkWBtrS0/LmgoMA3OjqamZiYMGdnZ7Z9+3YWERHhhOdRT58+XT8xMTGNvS9XCmgjDw+PvM7OTuHHNtTU1LD8/Hx27tw5Ge5ABV6qWvZMg8sJe/bssV6zZo3ODS4uLiwxMZFt3brVGXsimpqa/GZmZj4sZ+ZN+Hx+UmZmpsDCwkL5wuzsrHIZGRlpbUSREnijtLQ0Ma5taW9v3wzaULH2GBy0lZVVyv79+wXm5ubKFxoaGhieKwCKBxVhXl5eWm+wt7dnCQkJvB07dojevn0b1t3d/R32DarUZtpgoLOystSgu7q62OHDh2srKioqOzo6hM+ePePTNUdHR2ZsbKzcQ48ikYilp6fztm3bJh4ZGYnt6+vzgNoQbQb0DX4e6NevXzOoSdeHDx/O9Pb2VshksnEoiKC5udnazc2NQW2YqampVuYzMjJYVFSUE7guwT/tivdO6ZPz80C/evWK3bhx4yW+uA5PKXMtoEA1aKPAsm5ra7MiylC2NYuX7kRqaipJpfPq1asj5XK52zRCH+A/BbpG4zaPYzWj4dQC+GhJSYlwYGCAb2try+h9AKn+QNJ5UIZRk8JdiXz48OE3KOyJpQS/UNBcUHtvGRwcrG1sbPznzp07zsi4JfSbrVu3jvF4vHlSmZyc7IjXQ588eRKIfSP0FYYGzcV78LdtdHS0CvHm/v37rpOTk+ZQk3lqQ/8MwJugaO0UCkUoGlkQpPINLv272IJdLGh15kHbtqGhoQfl5eUjra2tDni/JVGZipbTenq0s7NjKSkpPAKP/VFQGx+ozagK/JQhQWvS5kl/f//fyPx7ZFOAQrSmLAsEAjVtCDxJJdTGOC4uzgGZj4ZauQH8pKpJzRgSNNMo2BZ8xgNSm5aWFmsC7+npqZRJMzMz9UaxWKw2ZrgWiWa2YGO21KC5IEsrh1TKULBjlZWVNi9evLAiZaGsa0ol2YOkpCTSeU5tPKE2nwSvL9BckM7LIY/1ADNYWFjogGxaUsZtbGzYqlWrtKSSM2Z4/fvHjx+TMXuPS92GBq1WG2SvFepSVVdXN1BaWuoKfpu/e/dOWbCcPdDIvNKY4T0hsBLBKmPWR37OkKC11AZe5QEoM/zo0SNnKIkFClGnMUPmyZjZYX84qOYPY/Ycl4YMDVoNHre+FbQh8KPwNiJklA9vzxwcHNRKwxkzAOfFxsaKsdcLja2Zt8xDCDWZPBRrMVZyfX19kI+Pj9ehQ4dMiSaaERAQwK5du+YdHx+fZbxCxj5q77nV1dW/Xbx48S3ooHPT5s2b6U7481YIaCus5PDwcMo0H5TVuYkGFJi2puUGTQN1fFBQUByajCP58uDg4HmjHgWKlu3evbsDCvT7coEWoclEe3t7p+7cuVMUGBio1Oi5QR4GkxM7evSooqioqB1Kc47mFEODFqKxREDOfjhw4IDQ19eXQRWU5y1zAxaAnT17VnH9+vXn0PNcSjbnTQwF2h7AImGgkvft2ydG12N+fn6MOwHQDCgIqcQMCrIFTeVPOnqZu0ffoG2xEjds2CCJiYlxzszMVOowtfC5UVtbqzwUOn36dB1oUfapQyGeHtUgNTQ0NMLf33/9wYMHla6Oz+frVIScnBxaNRgq6ASr+nMfvtSgBZTZkJAQCYprPajAIGFalpQLGCJ26tQpVlxcXI/OKKVkL3QYWCrQIqwY8DQJM6F9ZGQkAx20jBB3egXfzI4cOTItlUqbAfYPcoEqH77g+FrQQtjISNjKDPBVuHHjRuUkPjfgM5RgT548qSgoKOiE1uaqwE4s5ksXC9oO00Y4zEw6pMt+y5YtDJTQOkrgoqmpiV2+fHnqypUr7TBhBSoafFXwFkGDOIxPsRiVnHbt2sU8PDyYtbW1ziPiW7dusTNnzjRCDUqX8oiY9wUFloJ2GwHT4kJqIBQKlUOrLunKzc1lly5dqsbgWqmP8+yPgZ5V8c0SKy0sLCyKpCs7O5u5uroyXWfZsJbswoUL7Pbt2zJ43vKFSNeSgaaiwYRAjuVHeNhYiUTihNFHydmPtdvjx4+zsrKyBqhBEdFYNdgyg4GmaRmSFbxp06bvCaguNSAjg2mDHTt2jIwMHdbk07mHvsFqgp4l/eSCrOHdu3fN5mosF3K5nJ0/f14Bf0BGJo+YwQ2chgoevKuJ5m0nL6vLz5KRQYHNArB8cnKyUJ+c/Sxo6K25LsniQiaTsZs3b66oX7d4/f39HVVVVSJqvXMze/XqVZaXl1eDDvbXSgCrGWI3N7cL9+7dk0JXpdBZ6d69e6Xodr/iWpgBPfeCgyMv/Tb+E4D6DQ8PP4XOlpCafamRMVT8J8AAbDP/FBn3n78AAAAASUVORK5CYII=),
    auto;
}


#playlist button:hover {
  filter: brightness(1);
   border:solid 2px var(--playlist-button-border-hover-color);
}


#playlist button:focus, #playlist button.active {
   filter: brightness(1);
    /* border:solid 2px var(--playlist-button-border-active-color);
  cursor:none !important; */
}

#playlist button:active {
  transform: scale(0.95);
  color:#000;
  padding: 10px;
    margin: 10px;
}

/* MEDIA QUERY for PLAYLIST BUTTON*/

@media only screen and (max-width: 979px) {
  #playlist button {
  width: var(--playlist-button-mobile-width);
  font-size: var(--playlist-button-mobile-font-size);
  padding-top: calc(var(--caption-container-mobile-padding) - 5px);
  padding-bottom: var(--caption-container-mobile-padding);
  font-size: var( --caption-font-mobile-size);
  letter-spacing: 0px;
}

}


/*  END PLAYER MARK-UP */


/* DEMO PAGE STUFF */


/* ADD STROKE TO TEXT  */

#video-player h2,
h3,
button,
#video-caption
{
  text-transform:letter-spacing:2px;

}


article {padding-top:50px;padding-bottom:300px;opacity:0.90}
article h2, h3 {line-height:1;margin:0;}
article h2 {padding-bottom:5px;font-size:30px;text-transform:uppercase;letter-spacing:2px;}
article h3 {font-size:25px;letter-spacing:1px;}
article p {font-size:21px;letter-spacing:1px;}


@media only screen and (max-width: 980px) {
  article {padding-top:35px;padding-left:20px;padding-right:20px;padding-bottom:300px;}
article h2, h3 {line-height:1;margin:0;}
article h2 {padding-bottom:5px;font-size:21px;text-transform:uppercase;letter-spacing:2px;}
article h3 {font-size:18px;letter-spacing:1px;}
article p {font-size:16px;letter-spacing:1px;}
}

body, html {  text-rendering: optimizeLegibility;
  font-smoothing: antialiased;
  -webkit-font-smoothing: antialiased;
  -moz-osx-fon-smoothing: grayscale;
}


body {
  background: #111;

}

@media only screen and (max-width: 980px) {
  
body {
  padding-top: 0px;
}

}






/* ===================================================*
    
     ."".    ."",       
     |  |   /  /
     |  |  /  /
     |  | /  /
     |  |/  ;-._ 
     }  ` _/  / ;
     |  /` ) /  /             PEACE and LOVE
     | /  /_/\_/\
     |/  /      |           Mark in New Orleans
     (  ' \ '-  |
      \    `.  /
       |      |
       |      |

	
	
/* ===================================================*/
</style>



<section class="s_header-section">
    <div class="container-fluid mt-2">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-12 p-5">
                <div class="bannervs">
                    <video class="video-dance bannerv" autoplay loop muted  >                        
                        <source src="<?=base_url(); ?>public/images/Home/Home Page video enatyam-2.mp4" type="video/mp4">
                    </video>                
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 bsimg">
            <div class="banneris">
                <img src="<?=base_url(); ?>public/images/Home/ball.webp" class="img-fluid mt-5" alt="Image 4">
                </div>
            </div> -->
        </div>
    </div>
</section>



<div class="howenatyamWorks mt-5" style="display:none">
    <div class="heading text-center">
        <b<h3 class="title-3">How enatyam Works?</h3></b><span class="line"></span>
    </div>



    <div class="howItWorkSteps">
        <span class="indStep activeStep">
            <span class="stepNum">1</span>
        </span>
        <span class="stepLine"></span>
        <span class="indStep">
            <span class="stepNum">2</span>
        </span>
        <span class="stepLine"></span>
        <span class="indStep">
            <span class="stepNum">3</span>
        </span>
    </div>


    <div>

        <div class="row workSections text-center m-0">
            <div class="col-md-4 col-4 howWorkBlock howWorkBlock1">
                <img src="<?=base_url(); ?>public/images/hew1.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">1</span> <span>Book a Demo</span></p>
                <p class="hwDesc">Book a Free Demo Class with a Tutor.</p>
            </div>
            <div class="col-md-4 col-4 howWorkBlock">
                <img src="<?=base_url(); ?>public/images/hew2.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">2</span> <span>Join LIVE Demo Class</span></p>
                <p class="hwDesc">Attend the Demo class as scheduled.</p>
            </div>

            <div class="col-md-4 col-4 howWorkBlock howWorkBlock3">
                <img src="<?=base_url(); ?>public/images/hew3.png" class="lazyImage" width="14" height="14" alt="" />
                <p class="hwTitle"><span class="mobStepNum">3</span> <span>Pay and Start</span></p>
                <p class="hwDesc">Use enatyam SecurePay to pay and start your Classes.</p>
            </div>
            <div class="col-md-4 col-4"></div>
            <div class="col-md-4 col-4"><a href="<?php echo base_url('demo'); ?>" class="btn btnstart textAlignCen">Get
                    Started</a> </div>
            <div class="col-md-4 col-4"></div>
        </div>

    </div>


    <!-- <a href="" class="textAlignCen">Get Started</a>
    </div> -->

    <!-- <div class="textAlignCen getStarted">
        <a href="#showCategory" class="primaryButton toCapitalize loud" style="padding: 7px 30px;">Get Started</a>
    </div> -->

</div>
<!-- Line Sepretor Part -->


<section class="mb-5">
    <div class="">

        <!-- pills -->
        <div class="typesOfDance-tab">

           
            <div class="MusicSec copage">
                <div class="">



                    <div class="row text-lg-start">
                    <div class="col-lg-12 col-md-12 col-12 coh">
                        <h3 class="text-white" style="text-align:center">Courses Offering
                        <span class="line linessf"></span> </h3>

                        
                    </div>

  

                        <div class="col-lg-3 col-md-4 col-6 ">
                             <h5 class="cocolor" style="text-align: center;">Kathak </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo  base_url(); ?>public/images/courseoffering/1-rbg.webp" alt="">
                                </a>
                            </div>

                            <div class="cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList"> 
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($katakr)){ ?>
                                                <?php  $totalValue = 3569 + $katakr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                3569
                                            <?php } ?>
                                    </li>
                            
                             


                                    <li class="list-inline-item thumbnailListItem">  <?php
                                        if (!empty($katakc)) { 
                                            $average_rating = number_format($katakc['average_rating'], 2);
                                            if($average_rating != 0.00){
                                            echo $average_rating; ?>
                                            <?php 
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                    }
                                        ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Bharatanatyam </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/2-rbg.webp" alt=""
                                       >
                                </a>
                            </div>

                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($bharatanatyamr)){ ?>
                                                <?php  $totalValue = 2698 + $bharatanatyamr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                2698
                                            <?php } ?>
                                            
                                    </li>
                                    <li class="list-inline-item thumbnailListItem"> <?php
                                        if (!empty($bharatanatyam)) { 
                                            $average_rating = number_format($bharatanatyam['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Bollywood </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/3-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($bollywoodr)){ ?>
                                                <?php  $totalValue = 1525 + $bollywoodr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                1525
                                            <?php } ?>
                                            </li>                        
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($bollywood)) { 
                                            $average_rating = number_format($bollywood['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.8"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Western Dance </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/4-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($westerndncer)){ ?>
                                                <?php  $totalValue = 354 + $westerndncer;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                354
                                            <?php } ?>
                                            </li>                                   
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($westerndnce)) { 
                                            $average_rating = number_format($westerndnce['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.78"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Hindustani Vocal </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/5-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($hindustanivocalr)){ ?>
                                                <?php  $totalValue = 2969 + $hindustanivocalr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                2969
                                            <?php } ?>
                                    </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($hindustanivocal)) { 
                                            $average_rating = number_format($hindustanivocal['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                   
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Carnatic Vocal </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/6-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($carnaticvocalr)){ ?>
                                                <?php  $totalValue = 1896 + $carnaticvocalr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                1896
                                            <?php } ?>
                                    </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($carnaticvocal)) { 
                                            $average_rating = number_format($carnaticvocal['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                  
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Western Singing </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/7-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true">
                                            </i>
                                            <?php if(!empty($bollywoodsingingr)){ ?>
                                                <?php  $totalValue = 1525 + $bollywoodsingingr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                1525
                                            <?php } ?>
                                        </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($bollywoodsinging)) { 
                                            $average_rating = number_format($bollywoodsinging['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.8"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Playback Singing </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/8-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($playbacksingingr)){ ?>
                                                <?php  $totalValue = 505 + $playbacksingingr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                505
                                            <?php } ?>
                                            </li>                                 
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($playbacksinging)) { 
                                            $average_rating = number_format($playbacksinging['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.65"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Yoga </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/9-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($yogar)){ ?>
                                                <?php  $totalValue = 3796 + $yogar;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                3796
                                            <?php } ?>
                                            </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($yoga)) { 
                                            $average_rating = number_format($yoga['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Meditation </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/10-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($meditationr)){ ?>
                                                <?php  $totalValue = 2136 + $meditationr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                2136
                                            <?php } ?>
                                            </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($meditation)) { 
                                            $average_rating = number_format($meditation['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Nuitritional Guidance </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/11-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($nuitritionalguidancer)){ ?>
                                                <?php  $totalValue = 356 + $nuitritionalguidancer;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                356
                                            <?php } ?>
                                            
                                            </li>
                                    <li class="list-inline-item thumbnailListItem"> <?php
                                        if (!empty($nuitritionalguidance)) { 
                                            $average_rating = number_format($nuitritionalguidance['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.9"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                           
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                             <h5 class="cocolor" style="text-align: center;">Musical Instruments </h5>
                            <div class="ThumbnailImg " style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/courseoffering/12-rbg.webp" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i>
                                            <?php if(!empty($musicalinstrumentsr)){ ?>
                                                <?php  $totalValue = 289 + $musicalinstrumentsr;
                                                echo $totalValue; ?>
                                            <?php }else{ ?>
                                                289
                                            <?php } ?>
                                            </li>
                                    <li class="list-inline-item thumbnailListItem"><?php
                                        if (!empty($musicalinstruments)) { 
                                            $average_rating = number_format($musicalinstruments['average_rating'], 2);
                                            if($average_rating != 0.00){
                                                echo $average_rating; ?>
                                                <?php 
                                            } else { 
                                                echo "4.8"; // Default value if the data is not available
                                            } 
                                        }
                                            ?> <i class="fa fa-star" style="color:#fad32c"></i></li></li>

                               
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


            <div class="row p-3 MusicSec1">
                <div class="col-md-6 col-12">
                    <img src="<?=base_url(); ?>public/images/Home/4.webp" class="danceimg1 home">
                    <!-- public/images/Home/4.webp -->
                </div>

                <div class="col-md-6 col-12 text-col mt-5">
                    <!-- <h3 class="heading"> Kathak</h3> -->
                    <div class="text-right">
                        <div class="h1">Online Dance Classes</div>
                   </div>
                    <p class="text-justify">
                        Embark on a dance adventure like never before with
                        our diverse range of online classes. Immerse yourself in
                        the classical elegance of Kathak, the grace of
                        Bharatanatyam, the vibrant energy of Bollywood, and
                        the contemporary flair of Western dance forms. Our
                        expert instructors bring these styles to life, providing
                        personalized guidance in every online session. Whether
                        you're a beginner or a seasoned dancer, our platform
                        ensures a seamless and enjoyable learning experience.
                        Join us and let the rhythm fuel you passion .

                    </p>

                    <div class="text-center mt-4">
                        <!-- <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Dance">Explore More</a> -->
                        <a type="button" class="btn btndemoh" href="<?= base_url(); ?>demobooking">Book A Free Trial</a>

                    </div>
                </div>
            </div>

            <div class="MusicSec MusicSec1">
                <div class="row m-0 omcd">
                    <div class="col-md-6 col-12 text-col p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right">
                            <div class="h1  text-white">Online Music Classes</div>
                        </div>
                        <p class="text-justify text-white ">
                            Dive into the soulful world of Indian music with our
                            diverse online classes. Elevate your vocal prowess with
                            Hindustani and Carnatic vocal classes, where classical
                            traditions meet modern techniques. Unleash your
                            Bollywood dreams through our specialized Bollywood
                            singing classes, and delve into the art of playback singing
                            for a truly immersive experience. Our faculty, renowned
                            for their exceptional talent, guide you through each note,
                            nurturing your musical journey. At enatyam, we
                            harmonize tradition with innovation, ensuring a
                            melodious learning experience that resonates with the
                            essence of Indian music. Join us and let your musical
                            aspirations reach new heights!
                        </p>

                        <div class="text-center mt-4">
                            <!-- <a type="button" class="btn btndemoh" href="<?= base_url(); ?>music">Explore More</a> -->
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>demobooking">Book A Free Trial</a>

                        </div>
                    </div>

                    <div class="col-md-6 col-12 p-0 text-center">
                        <img src="<?=base_url(); ?>public/images/Home/11.webp" class="danceimg home">

                    </div>
                </div>
            </div>

            <div class="p-3 MusicSec1">
                <div class="row m-0">
                    <div class="col-md-6 col-12 p-0">
                        <img src="<?=base_url(); ?>public/images/Home/14.webp" class="danceimg1 home">

                    </div>

                    <div class="col-md-6 col-12 text-col mt-3 p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right">
                            <div class="h1 ">Online Yoga Classes</div>
                        </div>
                        <p class="text-justify ">
                            Embark on a transformative journey with our online platform, offering
                            a holistic blend of yoga, meditation, and nutritional guidance. Immerse
                            yourself in rejuvenating online yoga and meditation classes, where
                            tranquility meets strength. Seek solace in our expert-led sessions,
                            designed to heal chronic diseases through the therapeutic power of
                            yoga. Complementing our mindful practices is personalized online
                            nutritional guidance, ensuring a comprehensive approach to your wellbeing. Our renowned
                            faculty, known for their expertise, are dedicated
                            to guiding you towards a harmonious life. Join enatyam for a
                            profound experience that nurtures your mind, body, and soul to
                            achieve optimal wellness.
                        </p>

                        <div class="text-center mt-4">
                            <!-- <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Yoga">Explore More</a> -->
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>demobooking">Book A Free Trial</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="MusicSec MusicSec1">
                <div class="row m-0 omcd">
                    <div class="col-md-6 col-12 text-col p-0">
                        <!-- <h3 class="heading"> Kathak</h3> -->
                        <div class="text-right ">
                            <div class="h1 text-white">Online Music Instruments Classes</div>
                        </div>
                        <p class="text-justify text-white ">
                            Strum, Pluck, and Play: Unleash Your Musical Potential
                            Online!
                            Discover the joy of playing musical instruments with our
                            diverse online training. From the soulful strumming of guitars
                            to the intricate melodies of sitars, and the classic notes of
                            keyboards and pianos, our platform offers a harmonious
                            journey for every music enthusiast. Our renowned faculty,
                            brimming with talent and expertise, ensures that your musical
                            aspirations are met with precision and passion. Join enatyam
                            for an immersive experience, where every chord, key, and note
                            is a step towards unlocking your musical prowess. Let the
                            melody begin – learn, play, and create with us!
                        </p>
   
                        <div class="text-center mt-4 ">
                            <!-- <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Instruments">Explore More</a> -->
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>demobooking">Book A Free Trial</a>

                        </div>
                    </div>

                    <div class="col-md-6 col-12 p-0 text-center omici">
                        <img src="<?=base_url(); ?>public/images/instrument/OnlineMusicHome.png" class="danceimg home">
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- Stories That Inspire - Section -->

<section class="learning_Platform-section mb-3">
    <div class="container">
        <div class="row">
            <div class="heading_new text-center imlalp">
                <b>
                    <h3 class="title_4"> India's Most Loved Art Learning Platform<span class="line"></span>
                </b></h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-1">
            </div>


            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">10000</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Students</div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">100</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Instructors</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-4 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">25</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Courses</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 Alp-main">
                <div class="Alp-populated">
                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">50</span>
                            <span class="Alp-number-suffix">+</span>
                        </div>
                        <div class="Alp-title">Countries</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 Alp-main">
                <div class="Alp-populated">

                    <div class="Alp pt-3">
                        <div class="Alp-number-wrapper">
                            <span class="Alp-number-prefix"></span>
                            <span class="counter-value">5</span>
                            <span class="Alp-number-suffix">*</span>
                        </div>
                        <div class="Alp-title">Rated Platform</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-12 col-md-12 col-12 connectwusbtn">
                <a type="button" class="btn btndemoh connectwus " href="<?= base_url(); ?>Contactus">Connect With Us</a>
            </div>

        </div>

    </div>

</section>



<!-- superstar slide -->


<section class="MusicSec faculty-section p-5">
    <div class="cont-width">

        <div class="row ">
        <h3 class="text-white pb-5" style="text-align:center">Superstar Faculty
        <span class="line linessf"></span>
        </h3>     
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    <div class="item" onclick="showModal('Aditya', 'Yoga Faculty', 'public/images/facultyProfileLatest/2.webp','M.Sc.(Human Consciousness and Yogic Science)','Certification YTTC: 200 Hours & E-RYT 500','4 years +','Hath Yoga, Yoga for Strength and Fitness - Weight Management - Yoga for Anxiety and Stress Management, Mindfulness Practices - Weight Loss, Flexibility and Fitness, Chronic Illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/2.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Aditya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>

                             <div class="overlay-text">
                                <h4 class="hedingfsf">Aditya</h4>
                                    <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                    <p>Experience 4+ years</p>
                                    <p><b>Read more...</b></p>                                        
                                    <p></p>
                             </div>
                        </div>
                    </div>
                 
                    <div class="item" onclick="showModal('Priti S', 'Kathak Dance Faculty', 'public/images/priti.jpg','M.A. in Performing Arts(Kathak)', 'Gold Medalist in Kathak (University Topper)','15 Years +','Kathak, Semi classical and Choreography, An internationally acclaimed kathak artist and professionally trained and graced many international stage')">
                        <div class="faculty-div">
                            <div class="faculty-div1">  
                                <img src="<?=base_url(); ?>public/images/priti.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Priti S</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Kathak Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Priti</h4>
                                <p>M.A. in Performing Arts(Kathak), Gold Medalist in Kathak (University Topper)<br></p>
                                <p>Experience 15 Years +</p>
                                <p><b>Read more...</b></p> 
                             </div>
                        </div>
                    </div>
                    <!-- <div class="item" onclick="showModal('Neha', 'Semi Classical Dance' ,'public/images/neha.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/neha.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Neha</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Semi Classical Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Neha</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <div class="item" onclick="showModal('Priyanka B', 'Kathak Dance Faculty', 'public/images/priyanka.jpeg','M.A. in Performing Arts(Kathak)','','5 Years +','Kathak, Semi classical and Choreography, Worked with many Bollywood choreographer and performed at many national level renowed stages')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/priyanka.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Priyanka B</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Kathak Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Priyanka B</h4>
                                <p>M.A. in Performing Arts(Kathak)<br></p>
                                <p>Experience: 5 Years +</p>
                                <p><b>Read more...</b></p>    

                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Supriya', 'Yoga Faculty', 'public/images/facultyProfileLatest/4.webp','Post Gratuate Diploma in Yoga Science','YTTC 100hrs','Experience 3 Years +','Prenatal Yoga - Yoga for Chronic Disease - Weight Management - Yoga for Kids - Meditation and Mindfulness Vinayasa Flow, Pranayama, Yoga Nidra, Yoga Therapy, Back, Neck and Knee Pains')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/4.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Supriya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga 
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Supriya</h4>
                                <p>Yoga Faculty</p>
                                <p>Post Gratuate Diploma in Yoga Science</p>
                                <p>Experience - 3 Years + </p>
                                <p><b>Read more...</b></p>                             
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Amrita M', 'Yoga Faculty', 'public/images/facultyProfileLatest/6.webp', 'M.Sc.(Human Consciousness and Yogic Science)', 'YTTC 125 Hrs', '3+ years','Prenatal Yoga - Yoga for Chronic Disease - Weight Management - Yoga for Kids - Meditation and Mindfulness Vinayasa Flow, Pranayama, Yoga Nidra, Yoga Therapy, Back, Neck and Knee Pains')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/6.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Amrita M</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Amrita M</h4>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <p>Experience 3+ years </p>
                                <p><b>Read more...</b></p> 
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Shekhar Pathak', 'Yoga Faculty', 'public/images/facultyProfileLatest/8.webp','Ph.D. - Yogic Science, M.Sc.(Human Consciousness and Yogic Science)','Certification: YTTC 125 Hrs','10 years +','Yogic Management of Diseases - Accupressure Therpis - Pranic Healer - Hatha Yoga - Yoga for Anxiety and Stress Management, Mindfulness Practices - Weight Loss, Flexibility and Fitness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/8.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Shekhar Pathak</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Shekhar Pathak</h4>
                                <p>Ph.D. - Yogic Science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <p>Experience 10 years + </p>
                                <p><b>Read more...</b></p>   
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Vivek R', 'Yoga Faculty', 'public/images/facultyProfileLatest/10.webp','Ph.D. - Yogic and Sports Science, M.Sc.(Human Consciousness and Yogic Science), Diploma in Counselling Psychotherapy, B.Sc. in Military Science','YTTC 125 Hrs','4 years +','Hath Yoga, Yoga Nidra, Yoga for Strength and General Fitness, Weight Management, Yoga for Anxiety and Stress Management, Mindfulness Practices, Weight Loss, Flexibility and Fitness, Chronic Illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/10.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Vivek R</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Vivek R</h4>
                                <p>Ph.D. - Yogic and Sports science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <p>Diploma in Counselling Psychotherapy<br></p>
                                <p><b>Read more...</b></p>                                  
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Swetha', 'Carnatic Music', 'public/images/sweta.jpg','MA in Carnatic Vocal','Trained over 500 students in Carnatic classical music','Teaching Experience 10 Years +','Carnatic Vocal and Sanskrit Chanting')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/sweta.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Swetha</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Carnatic Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Swetha</h4>
                                   <p>MA in Carnatic Vocal</p>
                                   <p>Experience 10 Years +</p>
                                    <p><b>Read more...</b></p>     
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="item" onclick="showModal('Jaya', 'Bharatanatyam Dance' ,'public/images/jaya.webp')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/jaya.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Jaya</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bharatanatyam Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Jaya</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <div class="item" onclick="showModal('Ketki M', 'Hindustani Music Faculty', 'public/images/ketki.jpg','MA in Hindustani Vocal','Doordarshan Grade Artist','6 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal Cords, Ragas and Sur')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/ketki.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Ketki M</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Hindustani Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">ketki</h4>
                                <p>MA in Hindustani Vocal<br></p>
                                <p>Experience 6 years +</p>    
                                <p><b>Read more...</b></p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Koyali S', 'Hindustani Music Faculty', 'public/images/Koyali.png','MA in Hindustani Vocal','Doordarshan Grade Artist, Trained 500+ students, Nurturing musical excellence', '10 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal Cords, Ragas and Sur')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Koyali.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Koyali S</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Hindustani Music
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Koyali S</h4>
                                <p>MA in Hindustani Vocal<br></p>
                                <p>Experience 10 Years +</p>
                                <p><b>Read more...</b></p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Krutika B', 'Bollywood Dance Faculty' ,'public/images/krutika.jpg','Bollywood Dance','Certified Bollywood Dance Faculty with training from Shaimak Davar Institute','4 Years +','Collaborated with renowned choreographers, Blending expertise in Choreography and performance for a dynamic teaching approach')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/krutika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Krutika B</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Krutika B</h4>
                                <p>Bollywood Dance</p>
                                <p>Certified Bollywood Dance faculty with training from Shaimak Davar Institute</p>
                                <p><b>Read more...</b></p>                                    
                             </div>
                        </div>
                    </div>
                    <!-- <div class="item" onclick="showModal('Anika S', 'MA in Hindustani Vocal Faculty' ,'public/images/user.webp','Hindustani Vocal','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anika S</div>
                                <div class="faculty-content-team__member-position text-white">
                                Hindustani Vocal
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika S</h4>
                                <p>Hindustani Vocal</p>
                                <p>Doordarshan Grade Artist</p>
                                <p><b>Read more...</b></p>    
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Malvika', 'MA in Bharatnatyam Faculty' ,'public/images/user.webp','Bharatnatyam','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.webp" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Malvika</div>
                                <div class="faculty-content-team__member-position text-white">
                                Bharatnatyam
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika S</h4>
                                <p>Hindustani Dance</p>
                                <p>MA in Bharatnatyam</p>
                        <p><b>Read more...</b></p>                                    
                             </div>
                        </div>
                    </div> -->
                    <!-- <div class="item" onclick="showModal('Anila', 'Bollywood Dance' ,'public/images/Anila.jpeg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Anila.jpeg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anila</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Dance
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anila</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <!-- <div class="item" onclick="showModal('Anika', 'Yoga' ,'public/images/Anika.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Anika.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Anika</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Anika</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <!-- <div class="item" onclick="showModal('Ila', 'Bollywood Singing', 'public/images/Ila.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Ila.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Ila</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Bollywood Singing
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Ila</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <!-- <div class="item" onclick="showModal('Samira', 'Yoga', 'public/images/Samira.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/Samira.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Samira</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Samira</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                    <!-- <div class="item" onclick="showModal('Sanjay', 'Yoga', 'public/images/sanjay.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/sanjay.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Sanjay</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Sanjay</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12 connectwusbtnb">
                <a type="button" class="btn btndemoh connectwus " href="<?= base_url(); ?>Career">Become A Teacher</a>
            </div>
        </div>
    </div>
</section>

<section class="how_Started-section pb-3">
    <div class="container">
        <div class="row m-0">
            <div class="heading_new text-center">
                <b>
                    <h3 class="title_4 "> How To Get Started ? <span class="line"></span></h3>
                </b>
            </div>
        </div>

        <div class="row justify-content-center htgs">

            <div class="col-lg-1"></div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
    <!-- Icon box -->
                <div class="d-flex justify-content-center">
                    <div class="icon icon-shape icon-shape-secondary rounded-circle icon1">
                        <span class="fas fa-bell"></span>
                    </div>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">1. Choose Your Course </h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content text-center">
                        Explore our diverse range of courses covering various subjects. Discover your passion and select the perfect course to embark on your learning journey.
                    </div>
                </div>
                <!-- End of Icon box -->
            </div>



            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="d-flex justify-content-center">
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon2">
                    <span class="fas fa-book-reader"></span>
                </div>
                                    </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">2. Book Demo</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content text-center    ">Schedule a personalized demo to experience firsthand how our courses work. Get a glimpse of our interactive learning platform and meet your potential instructors.
                    </div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="d-flex justify-content-center">
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon3">
                    <span class="fas fa-pen"></span>
                </div>
                                    </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">3. Enroll</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content text-center">Ready to dive in? Enroll in your chosen course hassle-free. Our user-friendly enrollment process ensures you're on your way to expanding your knowledge.
                    </div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="d-flex justify-content-center">
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon4">
                    <span class="fas fa-search-plus"></span>
                </div>
                                    </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">4. Start Learning</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content text-center">Begin your learning adventure! Access engaging course materials, interactive lessons, and expert guidance from industry professionals. Start mastering new skills at your own pace.
                    </div>
                </div>
                <!-- End of Icon box -->
            </div>


            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="d-flex justify-content-center">
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon5">
                    <span class="fas fa-certificate"></span>
                </div>
                                    </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">5. Certifications</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content text-center">Upon successful completion of your course, earn valuable certifications recognized in your field. Showcase your expertise and take your career to new heights with our accredited credentials.
                    </div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-1"></div>
            <div class="col-lg-12 col-md-12 col-12 connectwusbtns">
                <a type="button" class="btn btndemoh connectwus " data-bs-toggle="modal" data-bs-target="#registerformpopup">Start Now</a>
            </div>

        </div>

    </div>
</section>







<section class="stories-section MusicSec  p-3">
    <section class="parent-container">
        <h3 class="text-white p-3 title_4" style="text-align:center"> Testimonials<br>
            <span class="line"></span> 
        </h3> 
        <aside class="row" id="video-player">
            <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                <iframe src="https://www.youtube.com/embed/LxDF2EzI-8Y?si=3Wn_7WSJj0wgu-B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen muted></iframe>
            </div>
            <div id="playlist" class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                <div class="col-6">
                        <button class="lazyload active" data-iframe="https://www.youtube.com/embed/LxDF2EzI-8Y?si=3Wn_7WSJj0wgu-B" data-caption="Jon Batiste ♩ FREEDOM">
                            <img src="https://img.youtube.com/vi/LxDF2EzI-8Y/maxresdefault.jpg" alt="Thumbnail Image" width="100%">
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="lazyload" data-iframe="https://www.youtube.com/embed/NzijGFASF-g?si=X06ri0G3t8iOEpM8" data-caption="Jon Batiste ♩ FREEDOM">
                            <img src="https://img.youtube.com/vi/NzijGFASF-g/maxresdefault.jpg" alt="Thumbnail Image" width="100%">
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="lazyload" data-iframe="https://www.youtube.com/embed/b69s332yQnc?si=9I8c5ZlkC5zbeS9F" data-caption="Jon Batiste ♩ FREEDOM">
                            <img src="https://img.youtube.com/vi/b69s332yQnc/maxresdefault.jpg" alt="Thumbnail Image" width="100%">
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="lazyload" data-iframe="https://www.youtube.com/embed/eKR1C0KdLYQ?si=T3vlx1me-63_gNmg" data-caption="Luke James ♩ SHINE ON">
                            <img src="https://img.youtube.com/vi/eKR1C0KdLYQ/maxresdefault.jpg" alt="Thumbnail Image" width="100%">
                        </button>
                    </div>
                </div>
            </div>
        </aside>
    </section>
</section>









<!-- Happy faces -->
<!-- superstar slide -->
<section class="faculty-section faculty-sectiononhome p-3">
    <div class="container cont-width mt-5">
        <div class="row heading-div m-0">
            <div class="col-lg-12 col-12 text-center">
                <h3 class="title_4 ">Happy Faces
                </h3>
                <span class="line"></span>
            </div>
        </div>
        <div class="row homapageview">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It's like having a personal yoga guide right in my living room.
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.webp" class="centered-image"  />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that's easy to understand. Feeling more zen already!</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It's become a daily ritual that I genuinely look forward to.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                           
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/7h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Rajiv ( Lucknow )</h5>
                                            <p class="reviewName">The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there's something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.webp" class="centered-image" />
                                        
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                    
                            <div class="item in">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors' encouragement keeps me motivated.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels. Whether you're a beginner or an experienced yogi, there's always room for growth. The instructors make sure everyone feels welcome. </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It's a simple yet powerful practice that has become a non-negotiable in my routine.</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                <img src="<?=base_url(); ?>public/images/happyfaces/15h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Michael (Mike) ( USA)</h5>
                                        <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>


        <div class="row mobilepageview">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It's like having a personal yoga guide right in my living room.
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that\'s easy to understand. Feeling more zen already!</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It's become a daily ritual that I genuinely look forward to.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="item">
                            <div class="item in" >
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 ">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/7h.webp" class="centered-image" />
                                            <div class="hft">
                                                <h5>Rajiv ( Lucknow )</h5>
                                                <p class="reviewName">The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there's something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.'</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                   
                        <div class="item"> 
                            <div class="item in" >
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.webp" class="centered-image" />
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>    
                        </div>

                        <div class="item">
                            <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors encouragement keeps me motivated.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels. Whether you're a beginner or an experienced yogi, there's always room for growth. The instructors make sure everyone feels welcome. </p>
                                    </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                    <div class="item">
                        <div class="item in" >
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" >
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.webp" class="centered-image" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It's a simple yet powerful practice that has become a non-negotiable in my routine.</p>
                                    </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                    <div class="item">
                        <div class="item in" >
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 ">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/15h.webp" class="centered-image" />
                                        <div class="hft">
                                            <h5>Michael (Mike) ( USA)</h5>
                                            <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> 
                </div>
            </div>
        </div>



 
</section>


<!-- Line Sepretor Part -->



<!-- Indias Most Loved Art learning Platform -->

<?php include('pricingforhome.php'); ?>


<!-- one stop solution -->


<!-- comming soon -->
<section class="comming-section" style="display:none">
    <div class="container cont-width">
        <div class="row">
            <div class="col-lg-12 text-center coming-soon-img "><img src="<?=base_url(); ?>public/images/logo3.png" width="15%"
                    class="commingsoonimg" /></div>
            <div class="col-lg-12" style="padding-left:opx">
                <div class="accordion-item">
                </div>
                <div class="row coms-row">
                    <div class="col-lg-6 col-md-7 col-xs-6 col-sm-4">
                        <ul class="coming-soon-ul">
                            <li> Super Speaker : Public Speaking</li>
                            <li>Young Shakespeare : Creative Writing</li>
                            <li>Super Coder : Coding for Kids</li>
                            <li>Video Editing</li>
                            <li>Art & Craft</li>
                            <li>Creative Thinking</li>
                            <li>Vedic Mathematics</li>
                            <li>Language Learning</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5  ">
                        <p class="comming-soon-p">Exciting times ahead! We are thrilled to announce that a new
                            <br>subject tailored specifically for kids is on its way to our eLearning<br> platform.
                            Currently in the test phase, this engaging and educational <br> content is designed to spark
                            curiosity and fuel young minds. Stay <br> tuned as we prepare to
                            launch an enriching learning experience for<br> children everywhere!</p>
                        <P class="comming-soon-p">
                            Join our exclusive test run program and experience the future of education firsthand.
                            Limited spots available!
                        </P>
                        <P class="comming-soon-p">
                            write us to be the part of our test run program :<br><b><a href="mailTo:hello@enatyam.com">
                                    hello@enatyam.com</a></b>
                        </p>
                    </div>
                </div>
</section>

<?php include('bookdemocallb.php'); ?>
<section class="MusicSec faq-sectionforhome">
<div class="container cont-width">
<!-- <div class="row">
<div class="col-lg-1 col-md-1 col-12 faqd"><img src="<?=base_url(); ?>public/images/logo2.webp" class="dancefimg" /></div> -->
<div class="row">
<h3 class="text-white p-3 title_4 " style="text-align:center"> FAQ<br>
        <span class="line"></span> 
                </h3>
    <div class="col-lg-6 col-md-6 col-12 faqdance">
        <div class="accordion-item">
            <div class="accordion-item-header text-white">
                <span class="question-text"> A brief idea about Enatyam and Mission & Vision of Enatyam </span>
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content text-white">
                Enatyam is an online platform dedicated to the promotion and preservation of Indian performing arts. Through our comprehensive courses, students can explore a wide
                range of dance styles, singing, music instruments, and yoga. We believe in enabling everyone to pursue their hobbies, even amidst busy schedules and other constraints. Enatyam
                started with the vision to promote Indian art, encourage participation, and make it accessible to everyone, thereby allowing individuals to rekindle their passion for dance, music, and
                other artistic pursuits.
                <b>Mission: </b> The enatyam India is a technology enable most trusted and innovative e-learning platform for Indian Classical art forms.<br>
                <b>Vision : </b> To be the most trusted and respected company setting the highest standards of quality education and make classical art accessible to global audience at affordable Price.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header text-white">
                <span class="question-text"> Is Enatyam.com's operation and services limited to India or available worldwide? </span>
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content text-white">
                    Enatyam.com is available worldwide. Our online platform allows students from any corner of the globe to access our courses and resources, enabling us to reach a diverse
                    community of learners passionate about Indian performing arts.
                </div>
            </div>
        </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> What makes Enatyam.com different from other online platforms?</span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Enatyam.com stands out from other online platforms due to its focus on Indian performing arts, personalized instruction, interactive learning environment, and
                    commitment to cultural authenticity and diversity. Our platform offers a holistic approach to dance education, combining tradition with innovation to inspire and empower students
                    worldwide.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> how can I sign up for a trial class on Enatyam.com?</span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    To sign up for a trial class, navigate to the course you're interested in, and check if a trial session is available. Follow the prompts to register for the trial class and experience our
                    teaching firsthand.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> What types of courses are offered on Enatyam.com? </span> 
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Enatyam.com offers a diverse array of courses in performing arts including dance, music, singing, yoga, and more. Explore our catalog to find courses tailored to your interests and
                    skill level. 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> What is the registration process for enrolling in a course? </span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Registration on Enatyam.com is effortless. Simply create an account, select your desired course, and follow prompts to enroll securely. Need assistance? Our team is ready to help.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> Can I get a refund if I need to cancel my enrollment in a course?</span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    If you're unsatisfied with your course experience, you may be eligible for a refund within a specified period as per our <a href="<?php echo base_url();?>refundpolicy">refund policy.</a> Please refer to our terms and conditions for
                    detailed information.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> Can I temporarily pause my membership?</span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Yes, we understand that life can sometimes get in the way of your studies. You have the flexibility to pause your membership for a predefined period, allowing you to take
                    a break without losing access to your course materials or progress.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> Do courses on Enatyam.com offer certification upon completion? </span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    While some courses may offer certificates of completion, our primary focus is on imparting practical skills and knowledge that you can apply in your artistic endeavors. 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> Is attendance mandatory for online courses on Enatyam.com? </span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Attendance is mandatory for Enatyam.com's online courses. Students must log in and mark attendance. While batch class students cannot cancel, those in private one-on-one
                    classes can cancel with 12-hour notice. Your dedication to attendance enriches your learning journey and course progress.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> How can I purchase a course on Enatyam.com? </span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    Purchasing a course is simple. Select your desired course, proceed to checkout, and complete the purchase securely using our online payment system.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header text-white">
                    <span class="question-text"> What billing options are available for course purchases?</span>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content text-white">
                    We accept payments via major credit cards, debit cards, net banking, PayPal, and other popular methods ensuring a seamless and protected transaction process.
                    </div>
                </div>
            </div>       

            <div class="accordion-item">
            <!-- <div class="accordion-item-header">
            <span class="question-text"> Is online yoga as effective as in-person yoga? </span>
            </div> -->
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Online yoga can be just as effective as in-person yoga, as long as you
            have a good internet connection and a dedicated space to practice. Many
            online yoga classes offer personalized instruction and modiﬁcations to
            help you get the most out of your practice. </div>
            </div>
            </div>
            </div>
<!-- </div> -->

                <div class="col-lg-6 col-md-6 col-12 faqdance">
              
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> Are there any prerequisites for enrolling in courses on Enatyam.com?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Most of our courses welcome learners of all levels. Check the course description for any specific prerequisites or recommended skill levels. 
                            </div>
                        </div>
                    </div>
             
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> What qualifications do the faculty members at Enatyam.com have? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Our faculty members are seasoned professionals with extensive experience in their respective fields of performing arts. They bring expertise, passion, and dedication to
                            their teaching. 
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> How is the curriculum structured for your online courses? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Our online course curriculum is meticulously organized to ensure a comprehensive learning experience. It encompasses a structured progression through fundamental
                            concepts to advanced techniques, accompanied by engaging multimedia content and interactive exercises tailored to each student's level.
                            </div>
                        </div>
                    </div>
                  
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> Are practice videos available for courses? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Yes, many of our courses include practice videos to supplement your learning experience, providing visual demonstrations and guidance.
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> What if I didn’t like a class? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            If you're dissatisfied with a class, please reach out to us with your feedback. We'll do our best to address your concerns and ensure your satisfaction.
                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> What if I miss a class? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Don't worry if you miss a class; recordings or supplementary materials may be available for you to catch up on missed content. Additionally, you can communicate with
                            instructors for further assistance or clarification.
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> Can I switch to a different course after enrolling in one?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            Yes, you may be able to switch to a different course depending on availability and our policy. Contact our support team for assistance with course changes.
                            </div>
                        </div>
                    </div>
                 
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text">Can I receive individualized feedback on my assignments or performances?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Yes, our instructors provide personalized feedback to help you improve your skills and refine your performances. Reach out to instructors for feedback on your work.
                            </div>
                        </div>
                    </div>
               
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How to cover up if I missed a session?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                We provide recorded content of the class to cover whatever is missed.
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text">Are there networking opportunities with other students or professionals in the field? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            Yes, our platform facilitates networking opportunities through discussion forums, live events, and community features where you can connect with other students and
                            professionals.
                             </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                            <span class="question-text"> How can I get assistance with technical issues while taking a course? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                            If you encounter technical issues, our dedicated support team is here to assist you. Reach out to us via email or through our website, and we'll promptly address your
                            concerns
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

</section>


<!-- The studio that goes with you -->
<section class="tstmwy">
    <div class="container ">
        <div class="row">
            <h1 class="studioText text-center ">The Studio That Moves With You</h1>
            <img src="<?php echo base_url(); ?>public/images/Home/GoesWhereverGo!.webp" /> 
        </div>
    </div>
</section>


<div id="facultyModal" class="modal">

    <div class="modal-content wm">
    <span class="close" onclick="closeModal()">×</span>
            <div class="staff-wrapper maxwidth"> 
    
            <article class="staff-box"> 
                <img src="" alt="Susan Stark"  id="imgf" />
                <header id="facultyName"></header>
                <div id="facultyDesignation"></div>
                <div id="facultyQualifications"></div>
                <div id="facultyCertifications"></div>
                <div id="facultyExperience"></div>
                <div id="FacultyDetails"></div>
            </article>
        </div>
    </div>
</div>

<div id="reviewModal" class="modal">
    <div class="modal-content wm">
        <span class="close" onclick="closeModal1()">&times;</span>
        <div class="staff-wrapper maxwidth"> 
            <article class="staff-box"> 
                <img src="" alt="Susan Stark"  id="imgh" />
                <header id="ReviewName"></header>
                <div id="ReviewDetails"></div>
            </article>
        </div>
    </div>
</div>

<?php 
$file = __DIR__ . "/footer.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";
}
?>


<script>
    $(document).ready(function() {
        $("#video-player button").click(function() {
            var iframesrc = $(this).data("iframe") + "&autoplay=1"; // Append autoplay parameter
            var caption = $(this).data("caption");

            $("#video-player #video-caption").html(caption);
            $("#video-player iframe").attr("src", iframesrc);

            $("#video-player button").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
