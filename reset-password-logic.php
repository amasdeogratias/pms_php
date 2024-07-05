<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'database/connection.php';
$conn = new mysqli('localhost', 'root', '', 'estate360');
if(mysqli_errno($conn)){
    die(mysqli_error($conn));
}

if(isset($_POST['submit'])) {

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
}else {
    echo "password_reset not set<br>";
}


//}
?>