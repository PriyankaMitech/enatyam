<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/career.css">
    <link rel="stylesheet" href="public/css/profile.css">
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

    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Profile</h1>


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
                            <a href="">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            Profile
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>





    <section class="form-section">
        <div class="container content">
            <div class="row">

                <div class="col-lg-6 full-width">

                    <div class="login-form">

                        <h3>Login</h3>


                        <form name="learn-press-login" method="post" action="">


                            <div class="form-fields">
                                <div class="form-field">
                                    <label for="username">Username or email&nbsp;<span class="required">*</span></label>
                                    <input type="text" name="username" id="username" placeholder="Email or username"
                                        autocomplete="username">
                                </div>
                                <div class="form-field">
                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                    <span class="lp-password-input">
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            autocomplete="current-password"><span
                                            class="lp-show-password-input"></span></span>
                                </div>
                            </div>

                            <p>
                                <label>
                                    <input type="checkbox" name="rememberme">
                                    Remember me </label>
                            </p>


                            <p>
                                <input type="hidden" name="learn-press-login-nonce" value="3f6a7be523">
                                <button type="submit">Login</button>
                            </p>
                            <p>
                                <a href="">Lost
                                    your password?</a>
                            </p>
                        </form>
                    </div>

                </div>
                <div class="col-lg-6 full-width">
                    <div class="register-form ">

                        <h3>Register</h3>


                        <form name="learn-press-register" method="post" action="">

                            <div class="form-fields">


                                <div class="form-field">
                                    <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                    <input id="reg_email" name="reg_email" type="text" placeholder="Email"
                                        autocomplete="email" value="">
                                </div>
                                <div class="form-field">
                                    <label for="reg_username">Username&nbsp;<span class="required">*</span></label>
                                    <input id="reg_username" name="reg_username" type="text" placeholder="Username"
                                        autocomplete="username" value="">
                                </div>
                                <div class="form-field">
                                    <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                    <span class="lp-password-input"><input id="reg_password" name="reg_password"
                                            type="password" placeholder="Password" autocomplete="new-password"><span
                                            class="lp-show-password-input"></span></span>
                                </div>
                                <div class="form-field">
                                    <label for="reg_password2">Confirm Password&nbsp;<span
                                            class="required">*</span></label>
                                    <span class="lp-password-input"><input id="reg_password2" name="reg_password2"
                                            type="password" placeholder="Password" autocomplete="off"><span
                                            class="lp-show-password-input"></span></span>
                                </div>


                            </div>

                            <p>
                                <label for="become_teacher">
                                    <input type="checkbox" name="become_teacher" id="become_teacher">
                                    Want to become an instructor? </label>
                            </p>

                            <p>
                                <input type="hidden" id="learn-press-register-nonce" name="learn-press-register-nonce"
                                    value="14cd6456be"><input type="hidden" name="_wp_http_referer"
                                    value="/enatyam/profile/">
                                <button type="submit">Register</button>
                            </p>

                        </form>


                    </div>
                </div>
            </div>
        </div>


    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
<?php include('footer.php'); ?>

</html>