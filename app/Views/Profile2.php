<!DOCTYPE html>
<html lang="en">
<?php $session = \Config\Services::session(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile2</title>
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/career.css">
    <link rel="stylesheet" href="public/css/Profile2.css">

    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- fontawesome icon cdn -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->

</head>

<body>
    <?php include('header.php');?>
    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Profile2</h1>


                </div>

            </div>

        </div>

    </section>
    <section class="cont-main-section">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-ul">
                        <li>
                            <a href="<?php echo base_url('home');?>">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            Profile2
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-12 full-width">


                <article id="post-19" class="post-19 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="learnpress">
                            <div id="learn-press-profile" class="lp-user-profile current-user no-bio-user">


                                <div class="lp-content-area">

                                    <aside id="profile-sidebar">
                                        <div class="wrapper-profile-header wrap-fullwidth">
                                            <div class="lp-content-area lp-profile-content-area">
                                                <div class="lp-profile-left">
                                                    <div class="lp-user-profile-avatar">
                                                        <img alt="User Avatar"
                                                            src="https://secure.gravatar.com/avatar/d61511c491e0eac2cc1d516d53b78479?s=250&amp;d=mm&amp;r=g"
                                                            class="avatar avatar-250 photo" height="250" width="250"
                                                            loading="lazy">
                                                    </div>
                                                    <div class="lp-user-username-social">
                                                        <div class="lp-profile-username">
                                                            <?php
                                                                $full_name = $session->get('username');
                                                                echo $full_name;
                                                            ?>
                                                             </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div id="profile-nav">


                                            <ul class="lp-profile-nav-tabs">


                                                <li class="courses active">
                                                    <a href="" data-slug="">
                                                        <i class="tk tk-book"></i> Courses </a>


                                                </li>

                                                <li class="quizzes">
                                                    <a href="" data-slug="">
                                                        <i class="tk tk-question-circle"></i> Quizzes </a>


                                                </li>

                                                <li class="orders">
                                                    <a href="" data-slug="">
                                                        <i class="tk tk-shopping-bag"></i> Orders </a>


                                                </li>

                                                <li class="lp_orders_woocommerce">
                                                    <a href="" data-slug="">
                                                        <i class="fas fa-shopping-cart" aria-hidden="true"></i> Order
                                                        Woocommerce </a>


                                                </li>
                                                

                                                <li class="settings has-child">
                                                    <a href="" data-slug="">
                                                        <i class="tk tk-cog"></i> Settings </a>


                                                    <ul class="profile-tab-sections">

                                                        <li class="basic-information">
                                                            <a href="">
                                                                <i class="tk tk-home"></i> General </a>
                                                        </li>


                                                        <li class="avatar">
                                                            <a href="">
                                                                <i class="tk tk-user"></i> Avatar </a>
                                                        </li>


                                                        <li class="change-password">
                                                            <a href="">
                                                                <i class="tk tk-key"></i> Password </a>
                                                        </li>


                                                        <li class="privacy">
                                                            <a href="">
                                                                <i class="fas fa-user-secret"></i> Privacy </a>
                                                        </li>


                                                    </ul>


                                                </li>

                                                <li class="logout">
                                                    <a href="" data-slug="">
                                                        <i class="tk tk-alternate-sign-out"></i> Logout </a>


                                                </li>

                                            </ul>


                                        </div>

                                    </aside>

                                    <article id="profile-content" class="lp-profile-content">

                                        <div id="profile-content-courses">


                                            <div class="learn-press-subtab-content">
                                                <div class="learn-press-profile-course__statistic">
                                                    <div id="dashboard-general-statistic">


                                                        <div class="dashboard-general-statistic__row">


                                                            <div class="statistic-box">

                                                                <span class="statistic-box__number">0</span>
                                                                <p class="statistic-box__text">Enrolled Courses</p>
                                                            </div>
                                                            <div class="statistic-box">

                                                                <span class="statistic-box__number">0</span>
                                                                <p class="statistic-box__text">Active Courses</p>
                                                            </div>
                                                            <div class="statistic-box">

                                                                <span class="statistic-box__number">0</span>
                                                                <p class="statistic-box__text">Completed Courses</p>
                                                            </div>



                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="learn-press-profile-course__tab">
                                                    <ul class="learn-press-profile-course__tab__inner">
                                                        <li>
                                                            <a class="active" data-tab="enrolled">
                                                                Enrolled </a>
                                                        </li>

                                                    </ul>

                                                    <div class="learn-press-course-tab-enrolled learn-press-course-tab-filters"
                                                        data-tab="enrolled" style="">
                                                        <ul class="learn-press-filters">
                                                            <li>
                                                                <a class="" data-tab="all">
                                                                    All </a>
                                                            </li>
                                                            <li>
                                                                <a class="active" data-tab="in-progress">
                                                                    In Progress </a>
                                                            </li>
                                                            <li>
                                                                <a class="" data-tab="finished">
                                                                    Finished </a>
                                                            </li>
                                                            <li>
                                                                <a class="" data-tab="passed">
                                                                    Passed </a>
                                                            </li>
                                                            <li>
                                                                <a class="" data-tab="failed">
                                                                    Failed </a>
                                                            </li>
                                                        </ul>

                                                        <div class="learn-press-profile-course__progress">
                                                            <div class="learn-press-course-tab__filter__content"
                                                                data-tab="all" style="display: none">
                                                                <div class="lp-ajax-message" style="display:block">No
                                                                    Course available!</div>
                                                            </div>
                                                            <div class="learn-press-course-tab__filter__content"
                                                                data-tab="in-progress" style="">
                                                                <div class="lp-ajax-message" style="display:block">No
                                                                    Course available!</div>
                                                            </div>
                                                            <div class="learn-press-course-tab__filter__content"
                                                                data-tab="finished" style="display: none">
                                                                <ul class="lp-skeleton-animation" style="">
                                                                    <li
                                                                        style="width: 72%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 98%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 69%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 97%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="learn-press-course-tab__filter__content"
                                                                data-tab="passed" style="display: none">
                                                                <ul class="lp-skeleton-animation" style="">
                                                                    <li
                                                                        style="width: 62%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 80%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 68%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 78%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="learn-press-course-tab__filter__content"
                                                                data-tab="failed" style="display: none">
                                                                <ul class="lp-skeleton-animation" style="">
                                                                    <li
                                                                        style="width: 72%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 97%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 93%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                    <li
                                                                        style="width: 99%; height: 30px;border-radius:4px;">
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <input class="lp_profile_tab_input_param" type="hidden"
                                                                name="args_query_user_courses_attend"
                                                                value="{&quot;userID&quot;:13,&quot;query&quot;:&quot;purchased&quot;,&quot;layout&quot;:&quot;list&quot;}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div>

                    </div>
                </article>
            </main>
        </div>

    </div>
</body>
<?php include('footer.php'); ?>

</html>