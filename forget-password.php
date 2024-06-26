<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$conn=mysqli_connect('localhost','root','','estate360');
$db_conn=mysqli_select_db($conn,'estate360');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    error_reporting(0);
    $conn=mysqli_connect('localhost','root','','estate360');
    $db_conn=mysqli_select_db($conn,'estate360');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/estate360/reset-password.php?selector=". $selector .
        "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    $userEmail = $_POST['email'];

    $sql = "Delete from reset_password where pwdResetEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was error";
        exit();
    }else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO reset_password (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) 
     VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was error";
        exit();
    }else {
        $hashToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
//    mysqli_close();

    //Send email
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/phpmailer/phpmailer/src/Exception.php';


    $mail = new PHPMailer;
    $mail->IsSMTP();								//Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.office365.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = 587;								//Sets the default SMTP server port
    $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->SMTPDebug = false;
    $mail->Username = 'system@globalsoftwares.net';					//Sets SMTP username
    $mail->Password = 'Oneistwo@4567';					//Sets SMTP password
    $mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'system@globalsoftwares.net';			//Sets the From email address for the message
    $mail->FromName = 'Estate 360';			//Sets the From name of the message
    $mail->addAddress($userEmail, '');		//Adds a "To" address
    $mail->WordWrap = 100;							//Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);							//Sets message type to HTML

    // $mail->Subject = 'Customer Details';

    //  $to = $userEmail;
    $subject = "Reset your password";
    $message = '<p>We received a password reset request. The link to reset your
     your password make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';


    $mail->Body  = $message;
    $mail->Subject = $subject;
    if($mail->Send())
    {
        ?>
        <script>
            alert("Check Your Email and Click on the link sent to your email")
        </script>
        <?php
        // echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
        echo "Mail Error - >".$mail->ErrorInfo;
    }
}
// else{
// header("Location: ../index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estate 360 | Login</title>
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
                    session_start();
                    if (isset($_SESSION['message'])) {
                        if ($_SESSION['message'] == 'password_error') {
                            echo '<script>
                                swal({
                                    title: "Error!",
                                    text: "Incorrect password. Please try again.",
                                    icon: "error",
                                    confirmButtonText: "OK"
                                });
                            </script>';
                        } elseif ($_SESSION['message'] == 'username_error') {
                            echo '<script>
                            swal({
                                title: "Error!",
                                text: "Incorrect username or password",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        </script>';
                        }
                        unset($_SESSION['message']);
                    }
                    ?>
                </h6>
                <form class="login-form mt-3" method="POST" action="forget-password.php">
                    <div class="login-reset">
                        <div class="form-field mb-3">
                            <label for="resetEmail" class="form-label">Password Reset</label>
                            <input type="email" class="form-control" name="email" id="resetEmail" placeholder="Email or phone number">
                        </div>
                        <div class="col-auto">
                            <button id="resetPasswordButton" type="submit" name="password-reset-token" class="btn btn-primary full-width">Reset Password</button>
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
    document.getElementById('forgotPasswordLink').addEventListener('click', function(event) {
        event.preventDefault();
        toggleForms();
    });

    document.getElementById('resetPasswordButton').addEventListener('click', function(event) {
        event.preventDefault();
        toggleForms();
    });

    function toggleForms() {
        var loginForm = document.querySelector('.login-formhide');
        var resetForm = document.querySelector('.login-reset');

        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            resetForm.style.display = 'none';
        } else {
            loginForm.style.display = 'none';
            resetForm.style.display = 'block';
        }
    }
</script>
</body>

</html>