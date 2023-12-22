<?php echo view('Studentsidebar/Studentsidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="public/AdmoinLogo.png"
                                    alt="User profile picture">
                            </div>
                            <?php foreach ($profileData as $profile) : ?>
                            <h3 class="profile-username text-center"><?= $profile->full_name ?></h3>

                            <p class="text-muted text-center"><?= $profile->email ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>course</b> <a class="float-right"><?= $profile->course ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>sub course</b> <a class="float-right"><?= $profile->sub_course ?></a>
                                </li>
                                <!-- <li class="list-group-item">
                                         <b>Friends</b> <a class="float-right">13,287</a>
                                         </li> -->
                            </ul>
                            <?php endforeach; ?>
                            <!-- <a href="#" class="btn btn-primary btn-block"><b>Chenge</b></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Change Password</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Change
                                        Country
                                    </a></li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                            <div class="active tab-pane" id="activity">
    <!-- Post -->
    <?php foreach ($profileData as $profile) : ?>
    <form id="updatePasswordForm" action="#" method="post">
        <input type="hidden" name="user_email" value="<?= $profile->email ?>">

        <div class="form-group">
            <label for="old-password">Old Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="old-password" name="old-password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-eye" id="toggleOldPassword" onclick="togglePassword('old-password', 'toggleOldPassword')"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="new-password">New Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="new-password" name="new-password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-eye" id="toggleNewPassword" onclick="togglePassword('new-password', 'toggleNewPassword')"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-eye" id="toggleConfirmPassword" onclick="togglePassword('confirm-password', 'toggleConfirmPassword')"></i>
                    </span>
                </div>
            </div>
            <div id="password-error" class="text-danger"></div>
        </div>

        <button type="button" id="updatePasswordBtn" class="btn btn-primary" onclick="updatePassword()">Update Password</button>
    </form>
    <?php endforeach; ?>

    <!-- Display success message -->
    <div id="success-message" class="alert alert-success" style="display: none;"></div>
</div>


                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <?php foreach ($profileData as $country) : ?>
                                    <form action="<?= base_url('changeCountry') ?>" method="post">
                                        <div class="timeline-item">
                                            <div class="timeline-item-content">
                                                <div class="preCountry" style="margin-left: 85%;">
                                                    <h3 class="timeline-country"><?= $country->country ?></h3>
                                                </div>
                                                <div class="change-country">
                                                    <label for="changeCountry">Change Country:</label>
                                                    <select id="changeCountry" name="changeCountry"
                                                        class="form-control">
                                                        <!-- Populate this dropdown with your country options -->
                                                        <option value="USA" data-country-code="us" class="flag flag-us">
                                                            USA</option>
                                                        <option value="Canada" data-country-code="ca"
                                                            class="flag flag-ca">Canada</option>
                                                        <option value="UK" data-country-code="gb" class="flag flag-gb">
                                                            United Kingdom</option>
                                                        <option value="India" data-country-code="In"
                                                            class="flag flag-gb">India</option>
                                                        <!-- Add more countries as needed -->
                                                    </select>
                                                    <div class="chngec" style="margin-top: 10px;">
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Country</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.tab-pane -->


                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>

<?php echo view('StudentSidebar/StudentFooter.php');?>