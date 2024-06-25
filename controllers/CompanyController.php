<?php
session_start();
error_reporting(0);
require('../database/connection.php');
require('../models/Company.php');
$database = new Database();
$db = $database->connect();
$company = new Company($db);


function create()
{
    global $company;
    global $db;

    try {
        $data = array(
            'CompanyName' => str_replace("'", "''", $_POST['company_name']),
            'MailingName' => str_replace("'", "''", $_POST['mailing_name']),
            'Address' => str_replace("'", "''", $_POST['address']),
            'District' => str_replace("'", "''", $_POST['district']),
            'Country' => str_replace("'", "''", $_POST['country']),
            'Pincode' => str_replace("'", "''", $_POST['pincode']),
            'TelephoneNo' => str_replace("'", "''", $_POST['telephone']),
            'MobileNo' => str_replace("'", "''", $_POST['mobile']),
            'FaxNo' => str_replace("'", "''", $_POST['fax']),
            'EmailId' => str_replace("'", "''", $_POST['email']),
            'Website' => str_replace("'", "''", $_POST['website']),
            'CompanyStartDate' => str_replace("'", "''", $_POST['start_date']),
            'CreatedBy' => $_SESSION['username'],
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedBy' => null,
            'UpdatedDate' => null,
        );

        $UserDetails = array();
        $formDetails = array();
        if (!empty($_POST['userNameOrEmail'])){
            for($i = 0; $i < count($_POST['userNameOrEmail']); $i++) {
                $userInput = $_POST['userNameOrEmail'][$i];

                // Validate the input (optional, but recommended)
                $isValidEmail = filter_var($userInput, FILTER_VALIDATE_EMAIL);
                $UserDetails = array(
                        'UserName' => !$isValidEmail ? $userInput : NULL,
                        'EmailId' =>  $isValidEmail ? $userInput : NULL,
                        'MobileNo' => '',
                        'Password' => $_POST['userPassword'][$i],
                        'UserType' => str_replace("'", "''", $_POST['userType'][$i]),
                        'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                        'CreatedBy' => $_SESSION['username'],
                        'CreatedDate' => date('Y-m-d H:i:s'),
                        'UpdatedBy' => null,
                        'UpdatedDate' => null,
                    );
                $output[] = array_merge($UserDetails);
            }

            //        echo json_encode($output);
            //        exit;
            foreach ($output as $val) {
                $userData = array(
                    'UserName' => str_replace("'", "''", $val['UserName']),
                    'EmailId' => str_replace("'", "''", $val['EmailId']),
                    'MobileNo' => '',
                    'Password' => password_hash($val['Password'], PASSWORD_DEFAULT),
                    'UserType' => str_replace("'", "''", $val['UserType']),
                    'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                    'CreatedBy' => $_SESSION['username'],
                    'CreatedDate' => date('Y-m-d H:i:s'),
                    'UpdatedBy' => null,
                    'UpdatedDate' => null,
                );

                $company->addUser($userData);
            }
        }

        $userInput = $_POST['username_or_email'];
        if (!empty($_POST['username_or_email'])){

            // Validate the input (optional, but recommended)
            $isValidEmail = filter_var($userInput, FILTER_VALIDATE_EMAIL);
            $formDetails= array(
                'UserName' => !$isValidEmail ? $userInput : NULL,
                'EmailId' => $isValidEmail ? $userInput : NULL,
                'MobileNo' => '',
                'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'UserType' => str_replace("'", "''", $_POST['usertype']),
                'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                'CreatedBy' => $_SESSION['username'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => null,
                'UpdatedDate' => null,
            );
            $company->addUser($formDetails);
        }
//        echo json_encode($userData);
//        exit;

        $add_response = $company->add($data);
        if($add_response) {
            $_SESSION['message']='success';?>
            <script>
                window.history.back();
            </script>
            <?php
        } else{
            $_SESSION['message']='error';?>
            <script>
                window.history.back();
            </script>
            <?php
        }
    }catch (Exception $e) {
        $_SESSION['message'] = '<div class="alert alert-danger">'.$e->getMessage().'</div>';
        ?>
        <script>
            window.history.back();
        </script>
        <?php
    }
}

function update()
{
    global $company;
    global $db;

    try {
        $data = array(
            'CompanyName' => str_replace("'", "''", $_POST['company_name']),
            'MailingName' => str_replace("'", "''", $_POST['mailing_name']),
            'Address' => str_replace("'", "''", $_POST['address']),
            'District' => str_replace("'", "''", $_POST['district']),
            'Country' => str_replace("'", "''", $_POST['country']),
            'Pincode' => str_replace("'", "''", $_POST['pincode']),
            'TelephoneNo' => str_replace("'", "''", $_POST['telephone']),
            'MobileNo' => str_replace("'", "''", $_POST['mobile']),
            'FaxNo' => str_replace("'", "''", $_POST['fax']),
            'Email' => str_replace("'", "''", $_POST['email']),
            'Website' => str_replace("'", "''", $_POST['website']),
            'CompanyStartDate' => str_replace("'", "''", $_POST['start_date']),
            'UpdatedBy' => $_SESSION['username'],
            'UpdatedDate' => date('Y-m-d H:i:s'),
        );
//        echo json_encode($data);
//        exit;

        $UserDetails = array();
        $formDetails = array();
        if (!empty($_POST['userNameOrEmail'])){
            for($i = 0; $i < count($_POST['userNameOrEmail']); $i++) {
                $userInput = $_POST['userNameOrEmail'][$i];

                // Validate the input (optional, but recommended)
                $isValidEmail = filter_var($userInput, FILTER_VALIDATE_EMAIL);
                $UserDetails = array(
                    'UserName' => !$isValidEmail ? $userInput : NULL,
                    'EmailId' =>  $isValidEmail ? $userInput : NULL,
                    'Password' => $_POST['userPassword'][$i],
                    'UserType' => str_replace("'", "''", $_POST['userType'][$i]),
                    'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                    'UpdatedBy' => $_SESSION['username'],
                    'UpdatedDate' => date('Y-m-d H:i:s'),
                );
                $output[] = array_merge($UserDetails);
            }

//                    echo json_encode($output);
//                    exit;
            foreach ($output as $val) {
                $userData = array(
                    'UserName' => $val['UserName'],
                    'EmailId' => $val['EmailId'],
                    'Password' => password_hash($val['Password'], PASSWORD_DEFAULT),
                    'UserType' => str_replace("'", "''", $val['UserType']),
                    'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                    'UpdatedBy' => $_SESSION['username'],
                    'UpdatedDate' => date('Y-m-d H:i:s'),
                );
//                echo json_encode($userData);
//                exit;

                $company->updateUser($userData,$_POST['company']);
            }
        }

        $userInput = $_POST['username_or_email'];
        if (!empty($_POST['username_or_email'])){

            // Validate the input (optional, but recommended)
            $isValidEmail = filter_var($userInput, FILTER_VALIDATE_EMAIL);
            $formDetails= array(
                'UserName' => !$isValidEmail ? $userInput : NULL,
                'EmailId' => $isValidEmail ? $userInput : NULL,
                'MobileNo' => '',
                'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'UserType' => str_replace("'", "''", $_POST['usertype']),
                'CompanyName' => str_replace("'", "''", $_POST['company_name']),
                'CreatedBy' => $_SESSION['username'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => null,
                'UpdatedDate' => null,
            );
            $company->updateUser($formDetails,$_POST['company']);
        }
//        echo json_encode($userData);
//        exit;

        $add_response = $company->update($data,$_POST['company']);
        if($add_response) {
            $_SESSION['message']='success';?>
            <script>
                setTimeout({
                    location.href = '../views/company-list.php';
                },3000);
            </script>
            <?php
        } else{
            $_SESSION['message']='error';?>
            <script>
                window.history.back();
            </script>
            <?php
        }
    }catch (Exception $e) {
        $_SESSION['message'] = '<div class="alert alert-danger">'.$e->getMessage().'</div>';
        ?>
        <script>
            window.history.back();
        </script>
        <?php
    }
}
$f = $_GET['f'];
$f();
