<?php include('header.php'); ?>

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
 --player-border-color: rgb(252 39 104); --player-border-width: 5px; /* <-- 0 = no border */
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
  max-width: var(--parent-container-max-width);
  margin: 0 auto;
  padding-top:50px;
}
@media only screen and (max-width: 980px) {
  .parent-container {
  padding-top:0;
}
  
}


/* BEGIN YOUTUBE PLAYER CSS */

#video-player {
  border: var(--player-border-width) solid var(--player-border-color);
  background-color: var(--player-background-color);
}

#video-player iframe {
  aspect-ratio: var(--video-aspect-ratio); 
  width: 100% !important;
  height: auto !important;
  backgroun:black;
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
  background-color: #ff1561;
  overflow: scroll-x;
  padding-top: 15px;
  padding-bottom: 25px;
  /* grid layout for playlist */
  display: grid;
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

  aspect-ratio: var(--video-aspect-ratio);
  width: var(--playlist-button-width);
  font-size: var(--playlist-button-font-size);
  color: #000;
  text-transform: var(--playlist-button-text-transform);
  overflow: hidden;
   border: solid 2px var(--playlist-button-border-color);
  filter: brightness(0.7);
  height: 100%;
  background-size: cover;
  background-position: center;
  padding-left: 10px;
  padding-right:10px;
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
    border:solid 2px var(--playlist-button-border-active-color);
  cursor:none !important;
}

#playlist button:active {
  transform: scale(0.95);
  color:#000;
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
                    <video class="video-dance bannerv" autoplay loop muted  controls="1">
                        <source src="<?=base_url(); ?>public/images/Home/Video for home page header.mp4" type="video/mp4">
                    </video>                
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 bsimg">
            <div class="banneris">
                <img src="<?=base_url(); ?>public/images/Home/ball.png" class="img-fluid mt-5" alt="Image 4">
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

           
            <div class="MusicSec">
                <div class="">

                    <!-- <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Thumbnail Gallery</h1> -->

                    <hr class="mt-2 mb-5">

                    <div class="row text-lg-start">
                    <div class="col-lg-12 col-md-12 col-12 coh">
                        <h3 class="text-white" style="text-align:center">Courses Offering
                        <span class="line linessf"></span> </h3>
                    </div>

  

                        <div class="col-lg-3 col-md-4 col-6 ">
                            <h5 class="text-white" style="text-align: center;">Kathak </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php base_url(); ?>public/images/Home/4-rbg.png" alt="">
                                </a>
                            </div>

                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList"> 
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem thumbnailListItemp">
                                        <p>3569</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($katakc)) { 
                                            foreach($katakc as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>


                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Bharatanatyam </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/5-rbg.png" alt=""
                                       >
                                </a>
                            </div>

                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item thumbnailListItem"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                   
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($bharatanatyam)) { 
                                            foreach($bharatanatyam as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }
                                             
                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Bollywood </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/1-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->

                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($bollywood)) { 
                                            foreach($bollywood as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Western Dance </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Dance" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/1-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($westerndnce)) { 
                                            foreach($westerndnce as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Hindustani Vocal </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($hindustanivocal)) { 
                                            foreach($hindustanivocal as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                   
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Carnatic Vocal </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($carnaticvocal)) { 
                                            foreach($carnaticvocal as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                  
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Bollywood Singing </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($bollywoodsinging)) { 
                                            foreach($bollywoodsinging as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Playback Singing </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>music" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Home/11-rbg.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($playbacksinging)) { 
                                            foreach($playbacksinging as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                    
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Yoga </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->

                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($yoga)) { 
                                            foreach($yoga as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Meditation </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($meditation)) { 
                                            foreach($meditation as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                                 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Nuitritional Guidance </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Yoga/CopyOfMeditations.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($nuitritionalguidance)) { 
                                            foreach($nuitritionalguidance as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                           
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <h5 class="text-white" style="text-align: center;">Musical Instruments </h5>
                            <div class="ThumbnailImg mb-4" style="text-align: center;">
                                <a href="<?= base_url(); ?>Yoga" target="" class="d-block h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="<?php echo base_url(); ?>public/images/Music/music.png" alt=""
                                       >
                                </a>
                            </div>
                            <div class="float-left cimgb cimgbr"  >
                                <ul class="list-inline thumbnailList">
                                    <li class="list-inline-item"> <i class="fa fa-users text-white mt-2"
                                            aria-hidden="true"></i></li>
                                    <li class="list-inline-item text-white thumbnailListItemp">
                                        <p>2698</p>
                                    </li>
                                    <!-- <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>
                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star-half-full" style="color:#fad32c"></i></li> -->
                                    <li class="list-inline-item text-white">
                                        <?php
                                        if (!empty($musicalinstruments)) { 
                                            foreach($musicalinstruments as $datas){
                                            
if($datas->total_ratings != ''){
                                            
                                            echo $datas->total_ratings; // Echo the total_ratings value

                                                }else{
                                                echo "4.99";
                                                }                                            }
                                        } else { 
                                            echo "4.99"; // Default value if the data is not available
                                        } 
                                        ?>
                                    </li>                                    <li class="list-inline-item text-white thumbnailListItem"><i class="fa fa-star" style="color:#fad32c"></i></li></li>

                               
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


            <div class="row p-3 MusicSec1">
                <div class="col-md-6 col-12">
                    <img src="<?=base_url(); ?>public/images/Home/4.png" class="danceimg1 home">
                    <!-- public/images/Home/4.png -->
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
                        <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Dance">Explore More</a>
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
                            nurturing your musical journey. At enatyam , we
                            harmonize tradition with innovation, ensuring a
                            melodious learning experience that resonates with the
                            essence of Indian music. Join us and let your musical
                            aspirations reach new heights!
                        </p>

                        <div class="text-center mt-4">
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>music">Explore More</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 p-0 text-center">
                        <img src="<?=base_url(); ?>public/images/Home/11.png" class="danceimg home">

                    </div>
                </div>
            </div>

            <div class="p-3 MusicSec1">
                <div class="row m-0">
                    <div class="col-md-6 col-12 p-0">
                        <img src="<?=base_url(); ?>public/images/Home/14.png" class="danceimg1 home">

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
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Yoga">Explore More</a>
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
                            <a type="button" class="btn btndemoh" href="<?= base_url(); ?>Instruments">Explore More</a>

                        </div>

                    </div>

                    <div class="col-md-6 col-12 p-0 text-center omici">
                        <img src="<?=base_url(); ?>public/images/instrument/c-2.svg" class="danceimg home">
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
                    <div class="item" onclick="showModal('Aditya', 'Yoga Faculty', 'public/images/facultyProfileLatest/2.png','M.Sc.(Human Consciousness and Yogic Science)','Certification YTTC: 200 Hours & E-RYT 500','4 years +','Hath Yoga, Yoga for Strength and Fitness-Weight management- Yoga for anxiety and stress management , Mindfulness practices - Weight Loss, Flexibility and Fitness,Chronic illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/2.png" />
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
                                    <!-- <p>Certification YTTC: 200 Hours & E-RYT 500</p> -->
                                    <p>Experience 4+ years</p>
                                    <p>Read more...</p>                                        
                                    <p></p>
                             </div>
                        </div>
                    </div>
                    <!-- <div class="item" onclick="showModal('Veera', 'Yoga', 'public/images/veera.jpg')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/veera.jpg" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Veera</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>

                             <div class="overlay-text">
                                <h4 class="hedingfsf">Veera</h4>
                                    <p>What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
                                    <p>
                             </div>

                        </div>
                    </div> -->
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
                                <p>Read more...</p>

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
                                <p>Read more...</p>    

                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Supriya', 'Yoga Faculty', 'public/images/facultyProfileLatest/4.png','Post Gratuate Diploma in Yoga Science','YTTC 100hrs','Experience 3 Years +','Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/4.png" />
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
                                <!-- <p>Certification: YTTC 100hrs</p> -->
                                <p>Experience - 3 Years + </p>
                                    <!-- <p>techniques : Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains</p>       -->
                                    <p class="">Read More...</p>
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Amrita M', 'Yoga', 'public/images/facultyProfileLatest/6.png', 'M.Sc.(Human Consciousness and Yogic Science)', 'YTTC 125 Hrs', '3+ years','Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains')">


                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/6.png" />
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
                                <!-- <p>Certification: YTTC 125 Hrs</p> -->
                                <p>Experience 3+ years </p>
                                <p>Read more...</p>
                                    <!-- <p>techniques : Prenatal Yoga - Yoga for chronic disease - Weight management - Yoga for Kids - Meditation and mindfulness vinayasa Flow, Pranayama, Yoga nidra, Yoga Therapy, Back, neck and Knee pains</p>       -->
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Shekhar Pathak', 'Yoga Faculty', 'public/images/facultyProfileLatest/8.png','Phd - Yogic Science, M.Sc.(Human Consciousness and Yogic Science)','Certification: YTTC 125 Hrs','10 years +','Yogic management of Diseases - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/8.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Shekhar Pathak</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Shekhar Pathak</h4>
                                <p>Phd - Yogic Science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <!-- <p>Certification: YTTC 125 Hrs</p> -->
                                <p>Experience 10 years + </p>
                                <p>Read more...</p>
                                    <!-- <p>techniques : Yogic management of Techniques - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness</p>       -->
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Vivek R', 'Yoga Faculty', 'public/images/facultyProfileLatest/10.png','Phd - Yogic and Sports science, M.Sc.(Human Consciousness and Yogic Science), Diploma in Counselling Psychotherapy, B.Sc. in Military Science','YTTC 125 Hrs','4 years +','Hath Yoga, Yoga Nidra, Yoga for Strength and General Fitness, Weight management, Yoga for anxiety and stress management, Mindfulness practices, Weight Loss, Flexibility and Fitness, Chronic illness')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/facultyProfileLatest/10.png" />
                            </div>
                            <div class="faculty-content mt-lg-4">
                                <div class="faculty-content-team__member-name text-white">Vivek R</div>
                                <div class="faculty-content-team__member-position text-white">
                                    Yoga
                                </div>
                            </div>
                            <div class="overlay-text">
                                <h4 class="hedingfsf">Vivek R</h4>
                                <p>Phd - Yogic and Sports science<br></p>
                                <p>M.Sc.(Human Consciousness and Yogic Science)<br></p>
                                <p>Diploma in Counselling Psychotherapy<br></p>
                                <p>Read more...</p>
                                <!-- <p>Certification: YTTC 125 Hrs</p>
                                <p>Experience 3+ years </p>
                                
                                    <p>techniques : Yogic management of Techniques - Accupressure therpis - Pranic Healer - Hatha Yoga - Yoga for anxiety and stress management, Mindfulness Practices - Weight loss, Flexibility and Fitness</p>       -->
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
                                   <p>Read more...</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="item" onclick="showModal('Jaya', 'Bharatanatyam Dance' ,'public/images/jaya.png')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/jaya.png" />
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
                    <div class="item" onclick="showModal('Ketki M', 'Hindustani Music Faculty', 'public/images/ketki.jpg','MA in Hindustani Vocal','Doordarshan Grade Artist','6 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal cords, ragas and sur')">
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
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Koyali S', 'Hindustani Music Faculty', 'public/images/Koyali.png','MA in Hindustani Vocal','Doordarshan Grade Artist, Trained 500+ students, nurturing musical excellence', '10 Years +','Hindustani Vocal, Bollywood Singing, Plyback Singing, Expert in Vocal cords, ragas and sur')">
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
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>
                    <div class="item" onclick="showModal('Krutika B', 'Bollywood Dance Faculty' ,'public/images/krutika.jpg','Bollywood Dance','Certified Bollywood Dance faculty with training from Shaimak Davar Institute','4 Years +','Collaborated with renowned choreographers, blending expertise in Choreography and performance for a dynamic teaching approach')">
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
                                <p>Read more...</p>
                                   
                             </div>
                        </div>
                    </div>
                    <!-- <div class="item" onclick="showModal('Anika S', 'MA in Hindustani Vocal Faculty' ,'public/images/user.png','Hindustani Vocal','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.png" />
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
                                <p>Read more...</p>    
                             </div>
                        </div>
                    </div>

                    <div class="item" onclick="showModal('Malvika', 'MA in Bharatnatyam Faculty' ,'public/images/user.png','Bharatnatyam','Doordarshan Grade Artist','10 Years +','Hindustani Vocal, Bollywood Singing, Playback Singing, Raga')">
                        <div class="faculty-div">
                            <div class="faculty-div1">
                                <img src="<?=base_url(); ?>public/images/user.png" />
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
                                <p>Read more...</p>
                                   
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
        </div>
    </div>
</section>

<section class="how_Started-section pb-3">
    <div class="container">
        <div class="row m-0">
            <div class="heading_new text-center">
                <b>
                    <h3 class="title_4 "> How To Get Started? <span class="line"></span></h3>
                </b>
            </div>
        </div>

        <div class="row justify-content-center htgs">

            <div class="col-lg-1"></div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon1">
                    <span class="fas fa-bell"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">1. Choose the Right course</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Choose the right course of your choice.</div>
                </div>
                <!-- End of Icon box -->
            </div>


            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon2">
                    <span class="fas fa-book-reader"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">2. Demo class</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Book a FREE live demo session.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon3">
                    <span class="fas fa-pen"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">3. Enroll</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Register with us in any of our program.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon4">
                    <span class="fas fa-search-plus"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">4. Start Learning</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Start learning from your home with the help of our
                        experienced mentors.</div>
                </div>
                <!-- End of Icon box -->
            </div>


            <div class="col-lg-2 col-md-4 col-6 text-center mb-4 mb-lg-0">
                <!-- Icon box -->
                <div class="icon icon-shape icon-shape-secondary rounded-circle icon5">
                    <span class="fas fa-certificate"></span>
                </div>
                <div class="sc-heading">
                    <h3 class="heading__primary">5. Certification</h3>
                </div>
                <div class="desc-icon-box">
                    <div class="desc-content">Get successfully complete all assessments to
                        demonstrate your proficiency and get certification.</div>
                </div>
                <!-- End of Icon box -->
            </div>

            <div class="col-lg-1"></div>

        </div>

    </div>
</section>








<section class="stories-section MusicSec homapageview p-3">
    <div class="container">
        <div class="line_1">
            <div class="row">
                <h3 class="text-white p-3" style="text-align:center"> Testimonials<br>
                    <span class="line"></span> 
                </h3> 
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div>
                                        <iframe class="ST_Inspire-video ST_Inspire-video1" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                         
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- <div class="col-md-6 col-lg-6 col-12"> -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                        <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                         
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                         
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="ST_Inspire-element ST_Inspire-element-6b952c1 ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="6b952c1" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/XLAu2-6zcxQ","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                    <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                         
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-12">
                        <div class="ST_Inspire-element ST_Inspire-element-66164fa ST_Inspire-widget ST_Inspire-widget-video"
                                data-id="66164fa" data-element_type="widget" data-settings="{"
                                youtube_url":"https:\/\/youtu.be\/96eSNaPxFBc","video_type":"youtube","controls":"yes"}"
                                data-widget_type="video.default">
                                <div class="ST_Inspire-widget-container">
                                <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                                        <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="fatema learning experience on enatyam platform testimonial"
                                         
                                            src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
                                            id="widget8"></iframe>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-4 col-lg-4 col-12">
                    <div class="ST_Inspire-element ST_Inspire-element-aa0bc0c ST_Inspire-widget ST_Inspire-widget-video" data-id="aa0bc0c" data-element_type="widget" data-settings="{"youtube_url":"https:\/\/youtu.be\/aV_xErXRUYE","video_type":"youtube","controls":"yes"}" data-widget_type="video.default">
                    <div class="ST_Inspire-widget-container">
                    <div class="ST_Inspire-wrapper ST_Inspire-open-inline">
                    <iframe class="ST_Inspire-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Kathak online learning expereince on enatyam II Tia Canada II kids kathak learning from beginners" width="640" height="360" src="https://www.youtube.com/embed/aV_xErXRUYE?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=11" id="widget12"></iframe>
                    </div>
                    </div>
                    </div>

                    </div> -->

                <!-- <div class="col-md-12 col-lg-12 col-12 ST_Inspire-widget-container2 mb-5">
                    <a class="btn join-now-btn" href="<? // php // echo base_url('demo');
                    ?>">Inspired ?<br>Join Now!</a>
                    </div> -->
            </div>
        </div>
    </div>
</section>
<section class="stories-section MusicSec homapageview p-3">
    <section class="parent-container">
      <aside class="row" id="video-player">
        <div class="col-md-6">
        <iframe
          id="YouTube-Iframe"
          class="lazyload"
          src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <div class="text-white" id="video-caption">Chapal Hart ♩ AMERICAN PRIDE</div>
                    </div>
        <div id="playlist" class="col-md-6">

          <button
            class="lazyload"
            data-iframe="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
            data-caption="Chapal Hart ♩ American Pride">
            <img src="<?php echo base_url('public/images/play.jpg'); ?>" alt="Thumbnail Image" width="100%">

            Chapal Hart ♩ AMERICAN PRIDE
        </button>
                  <button
    class="lazyload active"
    data-iframe="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
    data-caption="Jon Batiste ♩  FREEDOM"
>
    <img src="<?php echo base_url('public/images/neha.jpg'); ?>" alt="Thumbnail Image" width="100%">
    Jon Batiste ♩  FREEDOM
</button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/3YHVC1DcHmo/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
            data-caption="Jon Batiste ♩  FREEDOM"
          >
          <img src="<?php echo base_url('public/images/kathakhome.jpeg'); ?>" alt="Thumbnail Image" width="100%">

            Jon Batiste
          </button>

          <!-- MORE VIDEO BUTTONS  -->

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/1GupNeliuLA/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
            data-caption="Luke James ♩ SHINE ON"
          >
          <img src="<?php echo base_url('public/images/jaya.png'); ?>" alt="Thumbnail Image" width="100%">

            Luke James
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/cGoguR2gYn8/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
            data-caption="Luke James ♩ 2013 .  Beyoncé .  Mrs. Carter Show"
          >
          <img src="<?php echo base_url('public/images/palayv.jpeg'); ?>" alt="Thumbnail Image" width="100%">

            Luke James
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/QlOfJTeXqKU/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/QlOfJTeXqKU?autoplay=1"
            data-caption="Shamarr Allen ♩ Dance with Me"
          >
          <img src="<?php echo base_url('public/images/musiclass1.jpg'); ?>" alt="Thumbnail Image" width="100%">

            Shamarr Allen
          </button>

          
        </div>
      </aside>
    </section>
</section>


<section class="stories-section MusicSec mobilepageview p-3">
    <section class="parent-container">
      <aside id="video-player">
        <iframe
          id="YouTube-Iframe"
          class="lazyload"
          src="https://www.youtube.com/embed/XLAu2-6zcxQ?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Finfobeckon.com&widgetid=7"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <div id="video-caption">Chapal Hart ♩ AMERICAN PRIDE</div>

        <div id="playlist">
          <button
            class="lazyload active"
            data-bg="//img.youtube.com/vi/DjfMEE2krr4/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/DjfMEE2krr4?autoplay=1"
            data-caption="Chapal Hart ♩ American Pride"
          >
            Chapal Hart
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/3YHVC1DcHmo/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/3YHVC1DcHmo?autoplay=1"
            data-caption="Jon Batiste ♩  FREEDOM"
          >
            Jon Batiste
          </button>

          <!-- MORE VIDEO BUTTONS  -->

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/1GupNeliuLA/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/1GupNeliuLA?autoplay=1"
            data-caption="Luke James ♩ SHINE ON"
          >
            Luke James
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/cGoguR2gYn8/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/cGoguR2gYn8?autoplay=1"
            data-caption="Luke James ♩ 2013 .  Beyoncé .  Mrs. Carter Show"
          >
            Luke James
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/QlOfJTeXqKU/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/QlOfJTeXqKU?autoplay=1"
            data-caption="Shamarr Allen ♩ Dance with Me"
          >
            Shamarr Allen
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/Hit10kFN2BQ/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/Hit10kFN2BQ?autoplay=1"
            data-caption="Shamarr Allen ♩ I LOVE YOU"
          >
            Shamarr Allen
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/4WtmkES0X48/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/4WtmkES0X48?autoplay=1"
            data-caption="Kermit Ruffins ♩ Drop me Off in New Orleans"
          >
            Kermit Ruffins
          </button>

          <button
            class="lazyload"
            data-bg="//img.youtube.com/vi/89Lum1zkRuU/sddefault.jpg"
            data-iframe="https://www.youtube.com/embed/89Lum1zkRuU?autoplay=1"
            data-caption="Luke James x Nu Deco Ensemble ♩ reprise two"
          >
            Luke James
          </button>

          <button
            class="lazyload"
            data-bg="https://assets.codepen.io/191814/palyer-codepen.jpg?width=300&height=216&format=auto"
            data-iframe="https://codepen.io/mark_sottek/embed/zYWKKmz?default-tab=result&theme-id=dark"
            data-caption="Oz Cylone ♩ Codepen Iframe Embed"
          >
            Codepen
          </button>
        </div>
      </aside>
    </section>
</section>


<!-- Happy faces -->
<!-- superstar slide -->
<section class="faculty-section faculty-section1 p-3">
    <div class="container cont-width mt-5">
        <div class="row heading-div m-0">
            <div class="col-lg-12 col-12 text-center">
                <h3>Happy Faces
                </h3>
                <span class="line"></span>

            </div>

        </div>
        <div class="row homapageview">
            <div class="col-lg-12 hpb">
                <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item in" onclick="showReview('Aiden C ( London -Uk)', 'public/images/happyfaces/1h.png', 'Enatyam\'s yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It\'s like having a personal yoga guide right in my living room.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.png" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me... 
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" onclick="showReview('Sweta (Australia)', 'public/images/happyfaces/2h.png', 'I\'m new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that\'s easy to understand. Feeling more zen already!')">
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.png" />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point...</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" onclick="showReview('Sneha (Canada)', 'public/images/happyfaces/3h.png', 'Enatyam\'s yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It\'s become a daily ritual that I genuinely look forward to.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.png" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" onclick="showReview('Kavita (Pune)', 'public/images/happyfaces/4h.png', 'I\'ve tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.png" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" onclick="showReview('Ayesha ( Singapore )', 'public/images/happyfaces/6h.png', 'Enatyam\'s yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.png" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item in" onclick="showReview('Rajiv ( Lucknow )', 'public/images/happyfaces/7h.png', 'The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there\'s something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/7h.png" />
                                        <div class="hft">
                                            <h5>Rajiv ( Lucknow )</h5>

                                            <p class="reviewName">The variety of yoga classes on Enatyam is impressive...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   

                        <div class="item"> 
                            <div class="item in" onclick="showReview('Vikram ( Delhi )', 'public/images/happyfaces/8h.png', 'Enatyam\'s yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.png" />
                                        
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone...</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                    
                            <div class="item in" onclick="showReview('Vishal ( Chandigarh )', 'public/images/happyfaces/10h.png', 'I\'ve always struggled to stick with a workout routine, but Enatyam\'s yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors\' encouragement keeps me motivated.')">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.png" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" onclick="showReview('Kajal ( Delhi )', 'public/images/happyfaces/11h.png', 'I appreciate how Enatyam\'s yoga classes cater to various levels. Whether you\'re a beginner or an experienced yogi, there\'s always room for growth. The instructors make sure everyone feels welcome.')">
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.png" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels... </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" onclick="showReview('Scarlett family ( Germany )', 'public/images/happyfaces/12h.png', 'Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!')">
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mt-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.png" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me... </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" onclick="showReview('Emma ( UK )', 'public/images/happyfaces/14h.png', 'Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It\'s a simple yet powerful practice that has become a non-negotiable in my routine.')">
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.png" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle...</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="item in" onclick="showReview('Michael (Mike) ( USA)', 'public/images/happyfaces/15h.png', 'Enatyam\'s yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative')">
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mt-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/15h.png" />
                                    <div class="hft">
                                        <h5>Michael (Mike) ( USA)</h5>
                                        <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home...</p>
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
                            <div class="item in" onclick="showReview('Aiden C ( London -Uk)', 'public/images/happyfaces/1h.png', 'Enatyam\'s yoga courses are a total game-changer for me. The instructors keep it real, making every pose feel achievable. It\'s like having a personal yoga guide right in my living room.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/1h.png" />
                                            <div class="hft">
                                                <h5>Aiden C ( London -Uk)</h5>
                                                <p>Enatyam's yoga courses are a total game-changer for me... 
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" onclick="showReview('Sweta (Australia)', 'public/images/happyfaces/2h.png', 'I\'m new to yoga, and Enatyam is the perfect starting point. The classes are not intimidating, and the instructors break down each pose in a way that\'s easy to understand. Feeling more zen already!')">
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mb-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/2h.png" />
                                            <div class="hft">
                                                <h5>Sweta ( Australia)</h5>
                                                <p>I'm new to yoga, and Enatyam is the perfect starting point...</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="item in" onclick="showReview('Sneha (Canada)', 'public/images/happyfaces/3h.png', 'Enatyam\'s yoga classes are like a breath of fresh air. The instructors create a friendly atmosphere, making the sessions enjoyable. It\'s become a daily ritual that I genuinely look forward to.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/3h.png" />
                                        <div class="hft">
                                            <h5>Sneha (Canada )</h5>
                                        <p class="reviewName">Enatyam's yoga classes are like a breath of fresh air...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="item in" onclick="showReview('Kavita (Pune)', 'public/images/happyfaces/4h.png', 'I\'ve tried a few online yoga platforms, but Enatyam stands out. The variety of classes keeps things interesting, and the instructors feel like friends guiding you through a mindful journey. Highly recommend!')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/4h.png" />
                                        <div class="hft">
                                            <h5>Kavita ( Pune)</h5>
                                            <p class="reviewName">I've tried a few online yoga platforms, but Enatyam stands out...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item in" onclick="showReview('Ayesha ( Singapore )', 'public/images/happyfaces/6h.png', 'Enatyam\'s yoga is a perfect fit for a busy mom like me. The quick sessions are manageable, and the instructors make it feel like a mini wellness retreat. Grateful for this accessible and effective platform!')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/6h.png" />
                                        <div class="hft">
                                            <h5>Ayesha ( Singapore )</h5>
                                            <p class="reviewName">Enatyam's yoga is a perfect fit for a busy mom like me...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="item">
                            <div class="item in" onclick="showReview('Rajiv ( Lucknow )', 'public/images/happyfaces/7h.png', 'The variety of yoga classes on Enatyam is impressive. Whether I need a gentle stretch or an energizing flow, there\'s something for every mood. The instructors make it easy for anyone to enjoy the benefits of yoga.')">
                                    <div class="happyFaces-div">
                                        <div class="happyFaces-div1 mt-5">
                                            <img src="<?=base_url(); ?>public/images/happyfaces/7h.png" />
                                            <div class="hft">
                                                <h5>Rajiv ( Lucknow )</h5>

                                                <p class="reviewName">The variety of yoga classes on Enatyam is impressive...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                   

                        <div class="item"> 
                            <div class="item in" onclick="showReview('Vikram ( Delhi )', 'public/images/happyfaces/8h.png', 'Enatyam\'s yoga classes have made me realize that yoga is for everyone. The inclusive approach of the instructors and the straightforward guidance make it a comfortable and enjoyable practice.')">
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mb-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/8h.png" />
                                        
                                        <div class="hft">
                                        <h5>Vikram ( Delhi )</h5>
                                        <p class="reviewName">Enatyam's yoga classes have made me realize that yoga is for everyone...</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                    
                            
                        </div>

                        <div class="item">
                            <div class="item in" onclick="showReview('Vishal ( Chandigarh )', 'public/images/happyfaces/10h.png', 'I\'ve always struggled to stick with a workout routine, but Enatyam\'s yoga has been a consistent part of my day. The short sessions fit into my schedule, and the instructors\' encouragement keeps me motivated.')">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                        <img src="<?=base_url(); ?>public/images/happyfaces/10h.png" />
                                        <div class="hft">
                                            <h5>Vishal ( Chandigarh )</h5>
                                            <p class="reviewName">I've always struggled to stick with a workout routine, but Enatyam's yoga has been a consistent part of my day...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="item"> 
                        <div class="item in" onclick="showReview('Kajal ( Delhi )', 'public/images/happyfaces/11h.png', 'I appreciate how Enatyam\'s yoga classes cater to various levels. Whether you\'re a beginner or an experienced yogi, there\'s always room for growth. The instructors make sure everyone feels welcome.')">
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/11h.png" />
                                    <div class="hft">
                                        <h5>Kajal ( Delhi )</h5>
                                        <p class="reviewName">I appreciate how Enatyam's yoga classes cater to various levels... </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="item">
                        <div class="item in" onclick="showReview('Scarlett family ( Germany )', 'public/images/happyfaces/12h.png', 'Yoga is a daily dose of positivity for me . The instructors radiate good vibes, and the classes have become my source of calm in the midst of a busy schedule. A fantastic platform for holistic well-being!')">
                        <!-- Your content here -->
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mt-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/12h.png" />
                                    <div class="hft">
                                        <h5>Scarlett family ( Germany )</h5>
                                        <p class="reviewName">Yoga is a daily dose of positivity for me... </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item"> 
                        <div class="item in" onclick="showReview('Emma ( UK )', 'public/images/happyfaces/14h.png', 'Yoga is my daily escape from the hustle. The instructors make it easy to disconnect and focus on the present moment. It\'s a simple yet powerful practice that has become a non-negotiable in my routine.')">
                            <div class="happyFaces-div">
                                <div class="happyFaces-div1 mb-5">
                                <img src="<?=base_url(); ?>public/images/happyfaces/14h.png" />
                                    <div class="hft">
                                        <h5>Emma ( UK )</h5>
                                        <p class="reviewName">Yoga is my daily escape from the hustle...</p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="item">
                        <div class="item in" onclick="showReview('Michael (Mike) ( USA)', 'public/images/happyfaces/15h.png', 'Enatyam\'s yoga is like a personal wellness retreat at home. The instructors create a serene atmosphere, and the classes feel like a journey into both physical and mental well-being. Truly transformative')">
                            <!-- Your content here -->
                                <div class="happyFaces-div">
                                    <div class="happyFaces-div1 mt-5">
                                    <img src="<?=base_url(); ?>public/images/happyfaces/15h.png" />
                                        <div class="hft">
                                            <h5>Michael (Mike) ( USA)</h5>
                                            <p class="reviewName">Enatyam's yoga is like a personal wellness retreat at home...</p>
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
<section class="faq-section MusicSec">
<div class="container cont-width">
<!-- <div class="row">
<div class="col-lg-1 col-md-1 col-12 faqd"><img src="<?=base_url(); ?>public/images/logo2.png" class="dancefimg" /></div> -->
<div class="row">
<h3 class="text-white p-3" style="text-align:center"> FAQ<br>
        <span class="line"></span> 
                </h3>
<div class="col-lg-6 col-md-6 col-12 faqdance">

<div class="">
        <div class="accordion-item">
        <div class="accordion-item-header text-white">
        <span class="question-text"> What types of yoga classes do you offer online? </span>
        </div>
        <div class="accordion-item-body">
        <div class="accordion-item-body-content text-white">
        We offer a variety of yoga classes online, including vinyasa, hatha, restorative, yin,
        and more..</div>
        </div>
        </div>
</div>
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Do I need to have any prior experience with yoga to join your online classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            No, our online classes are suitable for all levels, from beginner to advanced.</div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What equipment do I need for online yoga classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            You will need a yoga mat and any additional props that your instructor recommends, such
            as blocks, straps, or blankets.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How do I join an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Simply sign up for a class on our website and we will provide you with a link to join
            the class online. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I join a class at any time, or do I need to join at a speciﬁc time? </span> </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Our online classes are offered at speciﬁc times, so you will need to join the class
            at the designated time. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What if I can't make it to a live online class?</span> </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            We also offer on-demand classes that you can access at any time, so you can
            practice yoga on your own schedule.</div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Is there any special software or technology required to join an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            You will need a device (such as a computer, tablet, or smartphone) with internet
            access and a webcam in order to join our online classes. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How long are your online yoga classes?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Our classes typically run for 60-90 minutes, depending on the type of class.
            </div>
            </div>
            </div>
<!-- </div> -->

<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I interact with the instructor during an online class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Yes, our online classes include interactive elements such as Q&A sessions
            and feedback from the instructor. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What is online yoga? </span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Online yoga is the practice of yoga that is done through a virtual platform
            like Zoom, Skype, or YouTube. It allows you to practice yoga from the
            comfort of your own home.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> What equipment do I need for online yoga?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            All you need is a yoga mat, comfortable clothing, and a stable internet
            connection. Some classes may also require additional props like blocks,
            straps, and blankets.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> How do I choose the right online yoga class for me?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Consider your experience level, the type of yoga you prefer, and your
            goals when choosing an online yoga class. Look for classes that are
            tailored to your needs and interests.
            </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
            <div class="accordion-item">
            <div class="accordion-item-header text-white">
            <span class="question-text"> Can I ask questions during an online yoga class?</span>
            </div>
            <div class="accordion-item-body">
            <div class="accordion-item-body-content text-white">
            Yes, most online yoga classes offer the opportunity to ask questions and
            receive feedback. You can use the chat feature or unmute yourself to ask
            questions during the class. </div>
            </div>
            </div>
<!-- </div> -->
<!-- <div class="accordion"> -->
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
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Is online yoga as effective as in-person yoga? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Online yoga can be just as effective as in-person yoga, as long as you
                                have a good internet connection and a dedicated space to practice. Many
                                online yoga classes offer personalized instruction and modiﬁcations to
                                help you get the most out of your practice. </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Can I practice online yoga if I am a beginner?</span> </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Yes, online yoga is suitable for beginners. Many online yoga classes
                                offer modiﬁed poses and variations to accommodate different experience
                                levels. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How often should I practice online yoga?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                The frequency of your online yoga practice depends on your goals and
                                schedule. It's generally recommended to practice yoga at least 2-3 times
                                a week for maximum beneﬁts. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What are the beneﬁts of practicing online yoga?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                The beneﬁts of practicing online yoga are similar to those of in-person
                                yoga, including improved ﬂexibility, strength, balance, and stress
                                relief. Additionally, practicing yoga from home can save you time and
                                money on commuting to a studio.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What would be my batch timing ? </span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                <ul style="padding-left: 1rem;">
                                    <li>Age group 6 to 13: 1-4 PM</li>
                                    <li>Age group 14 to 20: 4-7 PM</li>
                                    <li>Age group 21 to 45: 7 to 9 PM</li>
                                    <li>Age group 45+: 6:30-10:30 PM</li>
                                    <li>International Students (USA/Europe): 8PM to 12PM IST</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How many students will be accommodated in a single batch?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                Per batch maximum 6 students will be admitted.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> Will the course provide a certificate?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                Yes, we do provide certifications after completion of course.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
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
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text">What are the policies for refund if i am not comfortable with the class?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                We have no question asked refund policy and all the balances will be
                                transferred within a weeks time. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> What are the minimum qualifications and prerequisites to attend the classes?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                No, minimum qualifications required, anyone above 6+ can attend.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> How can I arrange a doubt clearing session?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                You can record your practice video and our mentors will do counselling after every class
                                and give you suggestions if required. </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text">How do I contact the team in case of any doubts and queries?</span>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content text-white">
                                You can drop a mail at contact@www.enatyam.org and our team will get in touch with you
                                within 24-48 hours.
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="accordion"> -->
                    <div class="accordion-item">
                        <div class="accordion-item-header text-white">
                        <span class="question-text"> I’ve done the payment but haven’t received the access to my classes yet? </span></div>
                        <div class="accordion-item-body"> 
                            <div class="accordion-item-body-content text-white">
                                You can drop a mail at contact@www.enatyam.org and our team will get in touch with you
                                within 24-48 hours. </div>
                        </div>
                    </div>
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
            <!-- <div class="row heading-div m-0"> -->
            <!-- <div class="col-lg-12 col-12 text-center"> -->
            <h1 class="studioText text-center ">The Studio That Moves With You</h1>
            <!-- <span class="line"></span> -->
            <img src="<?php echo base_url(); ?>public/images/Home/GoesWhereverGo!.png" />
            <!-- </div> -->
            <!-- </div> -->


            <!-- C:\xampp\htdocs\enatyam\public\images\Home\GoesWherever YouGo!-2.png -->
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
                <!-- <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is...</p> -->
                <!-- <a href="mailto:">sstark@asn-online.org</a> -->
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



<?php include('footer.php'); ?>

<script>
    // Vanilla JS 
document.querySelectorAll("#video-player button").forEach(button => {
    button.addEventListener("click", function () {
        // Get data attributes for buttons
        var iframesrc = this.getAttribute("data-iframe");
        var caption = this.getAttribute("data-caption");
        
        // Target the respective iframe and caption elements in HTML by ID
        // and update with content of data-attribute in PLAYLIST BUTTON HTML MARK-UP
        document.querySelector("#video-player #video-caption").innerHTML = caption;
        document.querySelector("#video-player iframe").setAttribute("src", iframesrc);
        
        // Toggle button active class
        document.querySelectorAll("#video-player button").forEach(btn => {
            btn.classList.remove("active");
        });
        this.classList.add("active");
    });
});

// Scroll Playlist horizontally with mousewheel on hover
const scrollContainer = document.querySelector("#playlist");
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});
</script>

