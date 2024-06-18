<?php
session_start();
error_reporting(E_ALL);
require('../database/connection.php');
require('../models/Property.php');
$database = new Database();
$db = $database->connect();
$property = new Property($db);


function create()
{
    global $property;
    global $db;

    try {
        $data = array(
            'property_type' => str_replace("'", "''", $_POST['property_type']),
            'type_of_property' => json_encode($_POST['types_of_property']),
            'property_name' => str_replace("'", "''", $_POST['property_name']),
            'location' => str_replace("'", "''", $_POST['address_location']),
            'total_area' => str_replace("'", "''", $_POST['total_area']),
            'floor_units' => str_replace("'", "''", $_POST['floor_or_units']),
            'amenities_by_unit' => str_replace("'", "''", $_POST['amenities']),
            'common_area' => $_POST['common_area'] ?? null,
            'lifts' => $_POST['lifts'] ?? null,
            'parking_slots' => $_POST['parking_slots'] ?? null,
            'other_amenities' => str_replace("'", "''", $_POST['other_amenities']),
            'unit_calculation_matrix' => $_POST['unit_matrix'],
            'unit_wise_offer_rate' => $_POST['unit_rate'],
            'select_wing' => str_replace("'", "''", $_POST['select_wing']),
            'total_floors_no' => str_replace("'", "''", $_POST['total_floor']),
            'company_name' => str_replace("'", "''", $_SESSION['company']),
            'created_by' => $_SESSION['username'],
            'created_date' => date('Y-m-d H:i:s'),
            'updated_by' => null,
            'updated_date' => null,
        );
//        echo json_encode($data);
//        exit;
        $add_response = $property->add($data);
        $property_id = $property->getId($_POST['property_name']);

        $total_floors = $_POST['total_floor'];
        $floorDetails = array();
//        $shopDetails = array();
        for($i = 1; $i <= $total_floors; $i++){
            $floor_number = $i;
            $property_area = $_POST["floor_{$i}_property_area"];
            $total_sqfit = $_POST["floor_{$i}_total_sqfit"] ?? null;
            $floorDetail = array(
                'PropertyID' => $property_id,
                'Wing' => str_replace("'", "''", $_POST['select_wing']),
                'FloorNo' => $floor_number,
                'PropertyArea' => $property_area,
                'TotalSqFeet' => $total_sqfit,
                'CreatedBy' => $_SESSION['username'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => null,
                'UpdatedDate' => null,
            );
            array_push($floorDetails, $floorDetail);


            // Handle shop details
            if (isset($_POST["floor_{$i}_shop_number"])) {
                $shopNumbers = $_POST["floor_{$i}_shop_number"];
                $shopSqFits = $_POST["floor_{$i}_shop_sqfit"];

                foreach ($shopNumbers as $index => $shopNumber) {
                    $shopSqFit = $shopSqFits[$index];

                    $shopDetail = array(
                        'PropertyId' => $property_id,
                        'Wing' => str_replace("'", "''", $_POST['select_wing']),
                        'FloorNo' => $floor_number,
                        'ShopNo' => $shopNumber,
                        'ShopSqtFit' => $shopSqFit,
                        'CreatedBy' => $_SESSION['username'],
                        'CreatedDate' => date('Y-m-d H:i:s'),
                        'UpdatedBy' => null,
                        'UpdatedDate' => null
                    );
                    $property->addShop($shopDetail);
                }
            }
        }

        foreach ($floorDetails as $key => $detail){
            $floorData = array(
                'PropertyID' => $detail['PropertyID'],
                'Wing' => $detail['Wing'],
                'FloorNo' => $detail['FloorNo'],
                'PropertyArea' => $detail['PropertyArea'],
                'TotalSqFeet' => $detail['TotalSqFeet'],
                'CreatedBy' => $_SESSION['username'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => null,
                'UpdatedDate' => null,
            );
            $property->addFloor($floorData);
        }


        $files = $_FILES['document_name']['name'];
        if(!$files){
            foreach ($files as $key => $file) {
            $Files = array(
                'property_id' => $property_id,
                'document' => $file, // Pass document content here
                'company_name' => str_replace("'", "''", $_SESSION['company']),
                'CreatedBy' => $_SESSION['username'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => null,
                'UpdatedDate' => null,
            );

            $property->addPropertyDocuments($Files);

            $tmp_name = $_FILES['document_name']['tmp_name'][$key];
            $filename = $_FILES['document_name']['name'][$key];
            $destination = "../documents/" . $filename; // Change path as needed


            // Move uploaded file to a designated location
            if (move_uploaded_file($tmp_name, $destination) === false) {
                $_SESSION['message'] = '<div class="alert alert-warning">There was some error moving the file to upload directory.</div>';
                ?>
                <script>
                    window.history.back();
                </script>
                <?php
                exit;
            }
        }
        }


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

function getPropertyType()
{
    global $property;
    $property_type = $_POST['property_type'];
    if (isset($property_type)){
        $results = $property->fetchPropertyType($property_type);
        if ($results){
            echo json_encode($results);
        }
    }
}


$f = $_GET['f'];
$f();
