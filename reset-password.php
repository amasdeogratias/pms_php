<?php
error_reporting(E_ALL);
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'estate360');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if (isset($_POST['password-reset-token'])) {
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['confirm_password'];

    if ($password !== $passwordRepeat) {
        echo "Passwords do not match.";
        exit();
    }

    $currentDate = date("U");

    $sql = "SELECT * FROM reset_password WHERE pwdResetSelector = ? AND pwdResetExpires >= ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

        if ($tokenCheck === false) {
            echo "You need to re-submit your reset request.";
            exit();
        } else {
            $tokenEmail = $row['pwdResetEmail'];
            $sqli = "SELECT * FROM usermaster WHERE EmailId = ?";
            $stmt_res = mysqli_prepare($conn, $sqli);
            mysqli_stmt_bind_param($stmt_res, "s", $tokenEmail);
            mysqli_stmt_execute($stmt_res);
            $result_res = mysqli_stmt_get_result($stmt_res);

            if (mysqli_num_rows($result_res) > 0) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $sql_update = "UPDATE usermaster SET Password = ? WHERE EmailId = ?";
                $stmt_update = mysqli_prepare($conn, $sql_update);
                mysqli_stmt_bind_param($stmt_update, "ss", $hashedPassword, $tokenEmail);
                $sql_result = mysqli_stmt_execute($stmt_update);

                if ($sql_result) {
                    ?>
                    <script>alert("Password was successfully reset");</script>
                    <?php
                    header("Location: index.php");
                    exit();
                } else {
                    ?>
                    <script>alert("Error resetting password.");</script>
                    <?php
                    header("Location: index.php");
                    exit();
                }
            }
        }
    }
}
?>

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
                <h6 class="text-center mt-3">
                    <?php

                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </h6>
                <form class="login-form mt-3" method="post" action="reset-password.php">
                    <div class="login-formhide">
                        <input type="hidden" class="form-control" name="selector" value="<?php echo $selector ?>">
                        <input type="hidden" class="form-control" name="validator" value="<?php echo $validator ?>">

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
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary full-width">Login</button>
                        </div>
                    </div>

                    <div class="login-reset" style="display: none;">
                        <div class="col-auto">
                            <button type="submit" name="password-reset-token" id="resetPasswordButton" class="btn btn-primary full-width">Reset Password</button>
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