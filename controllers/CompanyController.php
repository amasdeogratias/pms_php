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
        if (!empty($_POST['userEmail'])){
            for($i = 0; $i < count($_POST['userEmail']); $i++) {
                $UserDetails = array(
                        'UserName' => '',
                        'EmailId' => str_replace("'", "''", $_POST['userEmail'][$i]),
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
                    'UserName' => '',
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

        if (!empty($_POST['user_email'])){
            $formDetails= array(
                'UserName' => '',
                'EmailId' => str_replace("'", "''", $_POST['user_email']),
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
            $_SESSION['message']='<div class="alert alert-success">Company added successfully!</div>';?>
            <script>
                window.history.back();
            </script>
            <?php
        } else{
            $_SESSION['message']='<div class="alert alert-success">Problem in creating company</div>';?>
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
