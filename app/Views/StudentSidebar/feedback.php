<?php include(APPPATH . 'Views/StudentSidebar/Studentsidebar.php'); 
        //  echo "<pre>";print_r($alldata);exit();

?>

<div class="content-wrapper" style="min-height: 1172.56px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        
        <!-- <h5 class="mb-2"><small><i>How would you rate your teacher</i></small></h5> -->
        <div class="row">
          <div class="col-md-4">
            <div class="card card-widget widget-user-2 shadow">
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="<?=base_url()?>public/images/user.png" alt="User Avatar">
                </div>
                <h3 class="widget-user-username">Nadia Carmichael</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <form  id="feedbackform" method="post">
                    <?php 
                    // echo "<pre>";print_r($_SESSION);exit();
                    ?>
                    <input type="hidden" name="student_id" id="student_id" value="<?php echo $_SESSION['sessiondata']['id']; ?>">
                    <input type="hidden" name="faculty_id" id="faculty_id" value="<?php if(!empty($alldataoff)){ echo $alldataoff->faculty_id;}?>">
                    <li class="nav-item p-4">
                      <select class='rating text-center' name="rating" id='faculty<?php //echo $rate['average_ue']; ?>' data-id='rating_ue_<?php //echo $rate['average_ue']; ?>'>
                          <option value="1" >1</option>
                          <option value="2" >2</option>
                          <option value="3" >3</option>
                          <option value="4" >4</option>
                          <option value="5" >5</option>
                      </select>
                      <textarea name="review_message" id="review_message" class="form-control" rows="5" placeholder="Write something..." required></textarea>
                      <button type="button" id="rate" class="btn btn-block btn-primary mt-4">Rate</button>
                    </li>
                  </form>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>