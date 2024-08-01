

<?php
$file = __DIR__ . "/Studentsidebar.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>

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
                        <div class="card-body box-profileData">
                            <div class="text-center">
                                <img class="profileData-user-img img-fluid img-circle" src="<?=base_url(); ?>public/AdmoinLogo.png" alt="User profileData picture">
                            </div>
                            <?php if (!empty($profileData)) { ?>
                                <h3 class="profileData-username text-center"><?= $profileData->full_name ?></h3>

                                <p class="text-muted text-center"><?= $profileData->email ?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>course</b> <a class="float-right"><?= $profileData->courses_name ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>sub course</b> <a class="float-right"><?= $profileData->sub_courses_name ?></a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Change Password</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Change
                                        Country
                                    </a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div id="success-message" style="display: none; padding: 5px; margin-bottom: 10px; font-size: 14px;" class="alert alert-success"></div>


                        <div class="card-body">
                            <!-- Display success message outside the card -->

                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <?php if (!empty($profileData)) { ?>

                                        <form id="updatePasswordForm" action="#" method="post">
                                            <input type="hidden" name="user_email" value="<?= $profileData->email ?>">

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
                                    <?php } ?>

                                </div>

                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <?php if (!empty($profileData)) { ?>

                                        <form action="<?= base_url() ?>changeCountry" method="post">
                                            <div class="timeline-item">
                                                <div class="timeline-item-content">
                                                    <div class="preCountry text-right">
                                                        <?php
                                                        // Suppose $studentCountryCode contains the student's country code, e.g., "vn"
                                                        $studentCountryCode = $profileData->code; // This would be dynamically fetched in a real-world scenario
                                                        // Generate the CSS class
                                                        $cssClass = "ip2location-flag-32 flag-square flag-" . strtolower($studentCountryCode);
                                                        // echo'<pre>';print_r($cssClass);die;
                                                        ?>
                                                        <span class="timeline-country"><?= $profileData->country ?></span>
                                                        <span class="timeline-country <?= $cssClass ?>"></span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 change-country">
                                                            <label for="changeCountry">Change Country:</label>
                                                            <select id="changeCountry" name="changeCountry" class="form-control">
                                                                <option value="">Select</option>
                                                                <?php if (!empty($country_data)) { ?>
                                                                    <?php foreach ($country_data as $data) : ?>
                                                                        <option value="<?= $data->name; ?>" <?= ($data->name == $profileData->country) ? 'selected' : ''; ?>>
                                                                            <?= $data->name; ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-6" style="margin-top: 2rem">
                                                            <button type="submit" class="btn btn-primary">Change
                                                                Country</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div>
            </div>
        </div>

    </section>
</div>

<?php
$file = __DIR__ . "/StudentFooter.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>