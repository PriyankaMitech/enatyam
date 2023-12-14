<?php echo view('Studentsidebar/Studentsidebar');?>
    <style>
    .card-container {
        display: flex;
        justify-content: space-between;
       
    }

    .price-card-body {
        margin-left: 27px;
    }

    .button2-card {
        border-radius: 24px;
    }

    .button1-card {
        border-radius: 24px;
    }

    .card {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        width: 311px;
        height: 305px;
        display: none;
        /* Hide cards by default */
    }
 
    </style>

<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
        <div class="countainer">
        <h2>You Have To Select Sessions...</h2>
        <label>
            <input type="radio" name="radioGroup" value="button1"> Private Session
        </label>

        <label>
            <input type="radio" name="radioGroup" value="button2">Group Session
        </label>


        <div class="card-container">
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #8c52ff 0%, #ff8161 100%);">
                <div class="price-card-body">
                    <h2>8 Sessions
                    </h2>
                    <h4>₹ 1200 per session</h4>
                    <h4>Total Price: 9600 <span class="del-price"><del>10105 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time Slot preference.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn Any 1 subject.

                            </span>

                        </li>



                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>



                    </ul>




                </div>
            </div>
            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(309deg, #191103 0%, #9d6a07 51%);">
                <!-- Content for Card 1 -->
                <div class="price-card-body">
                    <h2>21 Sessions
                    </h2>
                    <h4>₹ 475 per session</h4>
                    <h4>Total Price: 9990 <span class="del-price"><del>10500 </del></span></h4>


                    <ul class="" style="padding-left:9px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Learn Any 1 subject.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>

                    </ul>




                </div>
            </div>
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(309deg, #191103 0%, #9d6a07 51%);">
                <div class="price-card-body">
                    <h2>21 Sessions
                    </h2>
                    <h4>₹ 1090 per session</h4>
                    <h4>Total Price: 22890 <span class="del-price"><del>24880 </del></span></h4>

                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- weekly 2 Video.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn Any 1 subject.

                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>




                </div>
            </div>
            <div class="card button1-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #c420a2 0%, #ffadee 100%);">
                <!-- Content for Card 2 -->
                <div class="price-card-body">
                    <h2>51 Sessions</h2>
                    <h4>₹ 975 per session</h4>
                    <h4>Total Price: 49725 <span class="del-price"><del>59910 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                One on One Private Live Class.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time Slot preference.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn as many subject as you want.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>



                </div>
            </div>
            <!--  -->


            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #c420a2 0%, #ffadee 100%);">
                <!-- Content for Card 1 -->
                <div class="price-card-body">
                    <h2>51 Sessions
                    </h2>
                    <h4>₹ 450 per session</h4>
                    <h4>Total Price: 22950 <span class="del-price"><del>24950 </del></span></h4>


                    <ul class="" style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Group Live Class- upto 10 students.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>

                                Learn Any 1 subject.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>


                    </ul>



                </div>
            </div>

            <div class="card button2-card"
                style="background-color: transparent;background-image: linear-gradient(90deg, #8c52ff 0%, #ff8161 100%);">
                <div class="price-card-body">
                    <h2>101 Sessions</h2>
                    <h4>₹ 423 per session</h4>
                    <h4>Total Price: 429777 <span class="del-price"><del>51777 </del></span></h4>


                    <ul style="padding-left:7px!important">

                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Group Live Class- upto 10 students.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Practice Video- Unlimited.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Time : IST 5 Pm to 7 PM.

                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Weekly -quiz.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>

                            </span>
                            <span>
                                Learn as many subject as you want.
                            </span>

                        </li>

                        <span style="margin-left: 50px;">
                            <a href="/enatyam/#pricing-section" target="_blank">Know More</a>
                        </span>

                    </ul>


                </div>
            </div>


        </div>
    </div>
    
        </div>
    </section>
</div>
    
        <?php echo view('StudentSidebar/StudentFooter.php');?>      

