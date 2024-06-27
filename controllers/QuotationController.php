<?php
error_reporting(E_ALL);
session_start();
require ('../database/connection.php');
require ('../models/Quotation.php');

$database = new Database();
$db = $database->connect();

$quotation = new Quotation($db);

function createQuotation()
{
    global $quotation;

    try {
        //create array of data to insert
        $Quotation = array(
            "TypeOfCustomer" => $_POST['customer_type'],
            "QuotationDate" => $_POST['quotation_date'],
            "NameOfCustomer" => $_POST['customer_name'],
            "CustomerAddress" => $_POST['customer_address'],
            "ContactPerson" => $_POST['contact_person'],
            "TypeOfUnitOffered" => $_POST['unit_type'],
            "SelectFloor" => $_POST['floor'],
            "TypesOfProperty" => $_POST['property_type'],
            "Renewal" => $_POST['renewal'],
            "AvailableSqFit" => $_POST['available_sqfit'] ?? null,
            "SqFitRequestedByCustomerForLease" => $_POST['customer_sqfit_lease'],
            "RatePerSqFit" => $_POST['rate_per_sqfit'],
            "TotalAmount" => $_POST['total_amount'],
            "ProvisionIncreaseOrDecreaseRent" => $_POST['rent_increase_decrease'],
            "RentFrom" => $_POST['rent_from'],
            "RentTo" => $_POST['rent_to'],
            "CompanyName" => $_SESSION['company'],
            "CreatedBy" => $_SESSION['username'],
            "CreatedDate" => date('Y-m-d H:i:s'),
            "UpdatedBy" => null,
            "UpdatedDate" => null,
        );
//        echo json_encode($Quotation);
//        exit;
        $response = $quotation->add($Quotation);
        if($response) {
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

    }catch (Exception $exception){
        $_SESSION['message'] = '<div class="alert alert-danger">'.$exception->getMessage().'</div>';
        ?>
        <script>
            window.history.back();
        </script>
        <?php
    }
}

$f = $_GET['f'];
$f();
