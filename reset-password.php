<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estate 360 | Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
<div class="loginpage">
    <div class="loginpic">
        <img src="assets/images/loginbg.jpg" class="img-fluid" alt="login" />
    </div>
    <div class="loginright d-flex align-items-center justify-content-center">
        <div class="logincenter">
            <div class="form-main">
                <div class="loginlogo text-center">
                    <img src="assets/images/login-logo.svg" class="img-fluid" alt="login" />
                    <span>Estate360</span>
                </div>
                <form class="login-form mt-3" action="reset-password-logic.php" method="POST">
                    <div class="login-formhide">
                        <input type="hidden" class="form-control" name="selector" value="<?php echo $_GET['selector'] ?>">
                        <input type="hidden" class="form-control" name="validator" value="<?php echo $_GET['validator'] ?>">

                        <div class="form-field mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter new password" required>
                            <span><img src="assets/images/icons/eye.svg" alt="eye" /></span>
                        </div>
                        <div class="form-field mb-4">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="cpassword" placeholder="Confirm password" required>
                            <span><img src="assets/images/icons/eye.svg" alt="eye" /></span>
                        </div>
                        <small id="showMessage"></small>
                    </div>

                    <div class="login-reset">
                        <div class="col-auto">
                            <button type="submit" name="submit" id="resetPasswordButton" class="btn btn-primary full-width">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="copyright text-center">
                <p>©GlobalSoftware</p>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready( function () {
        $('#cpassword').on('keyup',function() {
            var pass = $('#password').val()
            var cpass = $('#cpassword').val()
            if (cpass != pass) {
                $('#showMessage').html('Passwords do not match');
                $('#showMessage').css('color', 'red');
                return false;
            } else if (cpass == pass) {
                $('#showMessage').html('Passwords match');
                $('#showMessage').css('color', 'green');
                return false;
            } else {
                $('#showMessage').html('');
                return true;
            }
        });
    });
</script>
</body>

</html>