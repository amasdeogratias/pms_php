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
    global $authenticate;
    try {

        $email = str_replace("'", "\'", $_POST['email_mobile']);
        $password = str_replace("'", "\'", $_POST['password']);

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

                if(!empty($_POST['sync_data'])) {
                    ?>
                    <script>
                        window.location.href = "../sync/home.php"
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        window.location.href = "../views/select-company.php"
                    </script>
                    <?php
                }

            } else {
                $_SESSION['message'] = '<div class="alert alert-danger">Incorrect username or password</div>';
                ?>
                <script>
                    window.history.back();
                </script>
                <?php
            }
        } else {
            $_SESSION['message'] = '<div class="alert alert-danger">Incorrect username or password</div>';
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

function fetchCompany()
{
    global $authenticate;
    if($_SESSION['userid']) {
        $company = $authenticate->getCompanies($_SESSION['userid']);
        if($company == $_SESSION['company']) {
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
