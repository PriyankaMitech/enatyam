<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<style>
    /* Style for the form container */
.login_form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style for form labels */
.form-control-label {
    font-weight: bold;
    color: #333;
}

/* Style for form input fields */
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style for error message */
.error {
    color: #f44336;
    font-size: 14px;
}

/* Style for submit button */
.submitButton {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

/* Hover effect for the submit button */
.submitButton:hover {
    background-color: #0056b3;
}

</style>
<?php include(APPPATH . 'views/Navbar.php'); ?>
   <?php include(APPPATH . 'views/FacultySidebar.php'); ?>
<body>
    <form method="post" id="login_form" class="login_form" action="<?=base_url();?>send_mail">
        
        <div class="form-group">
            <label class="form-control-label">Email Id </label>
            <input type="email" name="email" id="email" class="form-control">
            <span class="error" id="message"></span>
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-block btn-primary w-100 submitButton" id="submitButton" type="submit">Send
                Verification Code</button>
        </div>

    </form>
    <?php if (isset($zoomMeetingLink)): ?>
        <p>Zoom Meeting Link: <a href="<?= $zoomMeetingLink ?>" target="_blank"><?= $zoomMeetingLink ?></a></p>
    <?php endif; ?>
</body>

</html>