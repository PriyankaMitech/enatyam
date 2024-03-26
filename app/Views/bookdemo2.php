<?php echo view('StudentSidebar/Studentsidebar'); ?>
<style>
   .content .card-body p{
        font-size: 22px;
        text-align: center;
        font-weight: 700;
        line-height: normal;
        }


    /* .nav-sidebar>.nav-item {
    background-color: transparent;
    background-image: linear-gradient(90deg, #ff68f8 0%, #dde100 100%);
    } */
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Book Demo</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Book Demo</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Book Demo</h3>
                    </div> 
                    <div class="card-body">
                        <div class="container-fluid">
                        <?php if(!empty($demo_data)){?>
                                <?php if($demo_data->meetlink != ''){ ?>
                                    <?php
                                        $bookDateTime = strtotime($demo_data->Book_Date . ' ' . $demo_data->Book_Date_Time); // Convert date and time to timestamp
                                        $formattedDateTime = date('d M Y', $bookDateTime); // Format timestamp as '26 Mar 2024'
                                        $formattedTime = date('ga', $bookDateTime); // Format time as '1pm'
                                        ?>
                                        <p>Your demo session is confirmed for <?= $formattedTime ?> , <?= $formattedDateTime ?>. No need to book again. We'll keep you <br>posted!</p>
                                <?php }else{ ?>
                                    <p>Thank you for booking the demo! We'll reach out to arrange mutual time alots and keep you updated. See you soon!</p>
                                    <?php } ?>


                            <?php }else{  ?>
                            <form method="post" action="set_data_demo_booking">
                                <div class="row ">
                                    <div class="col-lg-4 col-md-4 col-12 form-group seletbook" id="category_div">
                                    <label for="menu_name">Please select course :*</label>
    
                                    <select class="form-control" name="courses_id_d" id="courses_id_d"
                                            style="width: 100%;">

                                            <option>Please select course</option>
                                            <?php if (!empty($courses_data)) { ?>
                                                <?php foreach ($courses_data as $data) { ?>
                                                    <option value="<?= $data->id; ?>" <?php if ((!empty($single_data)) && $single_data->courses_id === $data->id) {
                                                                                            echo 'selected';
                                                                                        }
                                                                                        ?>>
                                                        <?= $data->courses_name; ?>
                                                    </option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                        <span style="color:red;" id="coursespanid"></span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 sub_category_div form-group seletbook"  id="sub_category_div">
                                    <label for="menu_name">Please select sub courses :*</label>
    
                                    <input type="hidden" id="selected_sub_courses_id_d"
                                            value="<?php if (isset($edit)) {echo ($edit['sub_courses_id_d']);} ?>">

                                        <select name="sub_courses_id_d" id="sub_courses_id_d" class="form-control">
                                            <option value="">Please select sub courses</option>
                                        </select>
                                        <span style="color:red;" id="sub_coursespanid"></span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                    <label for="menu_name">Demo Class Date :*</label>
                                        <span >
                                            <input type="date" class="form-control" name="Book_Date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                                                value="">

                                            <span>

                                    </div>
                                </div>  
                                <div class="text-right">
                                <button type="submit" value="" name="submit" id="submit" value="submit" class="btn btn-primary submitButton">Submit</button>
                            </div>   
                            </form>                       
                            <?php } ?> 
                               
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
  <?php echo view('StudentSidebar/StudentFooter.php');?>
  <script>
    $(document).ready(function() {
        $('#courses_id_d').on('change', function() {
            var countryId = $(this).val();
            console.log(countryId)
            if (countryId) {
                $.ajax({
                    url: '<?= base_url(); ?>get_sub_courses_data',
                    type: 'POST',
                    data: {
                        courses_id_g: countryId
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#sub_courses_id_d').empty();
                        $('#sub_courses_id_d').append(
                            '<option value="">Please select sub Courses</option>');
                        $.each(data, function(key, value) {
                            $('#sub_courses_id_d').append('<option value="' + value.id +
                                '">' + value.sub_courses_name + '</option>');
                        });

                        // Retrieve the selected state ID from the hidden input field
                        var selectedStateId = $('#selected_sub_courses_id_d').val();

                        // Select the state in the dropdown
                        $('#sub_courses_id_d').val(selectedStateId);
                    }
                });
            } else {
                $('#sub_courses_id_d').empty();
                $('#sub_courses_id_d').append('<option value="">Please Select State</option>');
            }
        });

        // Trigger change event on #courses_id_d
        $('#courses_id_d').trigger('change');
    });
</script>
