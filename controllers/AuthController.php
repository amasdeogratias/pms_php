<?php
session_start();
error_reporting(0);
require('../database/connection.php');
require('../models/Auth.php');
$database = new Database();
$db = $database->connect();
$authenticate = new Auth($db);


function login()
{
    global $db;
    global $authenticate;
//    checkRememberMe();
    try {

        $email = str_replace("'", "\'", $_POST['username_or_email']);
        $password = str_replace("'", "\'", $_POST['password']);

        $rememberMe = isset($_POST['remember_me']) ? true : false;

        $response = $authenticate->login($email);
        $num = $response->rowCount();

        if ($num > 0) {
            $user = $response->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['Password'])) {
                $userId               = $user['Id'];
                $name                 = $user['UserName'];
                $email                = $user['EmailId'];
                $usertype             = $user['UserType'];
                $mobile               = $user['MobileNo'];
                $company               = $user['CompanyName'];

                $_SESSION['userid']    = $userId;
                $_SESSION['username']  = $name;
                $_SESSION['email']     = $email;
                $_SESSION['usertype']  = $usertype;
                $_SESSION['mobile']    = $mobile;
                $_SESSION['company']    = $company;

                if ($rememberMe) {
                    $token = bin2hex(random_bytes(16));
                    $authenticate->updateRememberToken($userId, $token);
                    setcookie('remember_me', $token, time() + (86400 * 30), "/"); // 30 days expiration
                }
                ?>
                <script>
                    window.location.href = "../views/select-company.php"
                </script>
                <?php


            } else {
                $_SESSION['message'] = 'password_error';
                ?>
                <script>
                    window.history.back();
                </script>
                <?php
            }
        } else {
            $_SESSION['message'] = 'username_error';
            ?>
            <script>
                window.history.back();
            </script>
            <?php
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}


function autoLogin()
{
    global $authenticate;

    if (isset($_COOKIE['remember_me'])) {
        $token = $_COOKIE['remember_me'];
        $response = $authenticate->getUserByRememberToken($token);
        $num = $response->rowCount();

        if ($num > 0) {
            $user = $response->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userid'] = $user['Id'];
            $_SESSION['username'] = $user['UserName'];
            $_SESSION['email'] = $user['EmailId'];
            $_SESSION['usertype'] = $user['UserType'];
            $_SESSION['mobile'] = $user['MobileNo'];
            $_SESSION['company'] = $user['CompanyName'];

            return true; // User auto-logged in
        }
    }

    return false; // No auto-login
}
session_start();
if (!isset($_SESSION['userid'])) {
    autoLogin();
}

function fetchCompany()
{
    global $authenticate;
    if($_SESSION['userid']) {
        $company_name = $_POST['company_name'];
        if ($company_name == $_SESSION['company']){
            ?>
            <script>
                window.location.href = "../views/dashboard.php"
            </script>
            <?php
        }else{
            $_SESSION['message'] = '<div class="alert alert-danger">Incorrect company selected</div>';
            ?>
            <script>
                window.history.back();
            </script>
            <?php
        }

    }else{
        $_SESSION['message'] = '<div class="alert alert-danger">Login first then you can select the company</div>';
        ?>
        <script>
            window.history.back();
        </script>
        <?php
    }
}

function create()
{
    global $authenticate;
    $options = [
        'cost' => 12,
    ];

    $id = $_POST['id'] ?? '';

    if($_POST['password'] != $_POST['confirm_password']) {
        $_SESSION['message']='<div class="alert alert-danger">Passwords do not match!</div>'; ?>
        <script>
            window.history.back();
        </script>
        <?php
        return;
    }

    $data=array(
        'name'      => str_replace("'","\'",$_POST['name']),
        'password'      => password_hash($_POST['password'], PASSWORD_BCRYPT, $options),
        'email'         => str_replace("'","\'",$_POST['email']),
        'created_at'     => date('Y-m-d H:m:s'),
        'updated_at'     => date('Y-m-d H:m:s')
    );

    try {

        if($id) {
            $user = $authenticate->update($data, $id);
            $message = 'User update successfully';
        } else {
            $user = $authenticate->add($data);
            $message = 'User created successfully';
        }

        if($user) {
            $_SESSION['message'] = $message;
            ?>
            <script>
                window.location.href="../views/users.php"</script>
            <?php
        } else{
            $_SESSION['message']='Problem in user creation!'; ?>
            <script>
                window.history.back();
            </script>
            <?php
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
        ?>
        <script>
            window.history.back();
        </script>
        <?php
    }
}

function Logout()
{
    session_destroy();
    ?>
    <script>
        window.location.href="../index.php"</script>
    <?php
}

$f = $_GET['f'];
$f();
