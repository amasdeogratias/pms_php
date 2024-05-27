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



//        echo json_encode($data);
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
