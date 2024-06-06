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
            'type_of_property' => str_replace("'", "''", $_POST['types_of_property']),
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
//        echo json_encode($data);P
//        exit;

        $add_response = $property->add($data);
        $property_id = $property->getId($_POST['property_name']);

        $files = $_FILES['document_name']['name'];
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



        if($add_response) {
            $_SESSION['message']='<div class="alert alert-success">Property added successfully!</div>';?>
            <script>
                window.history.back();
            </script>
            <?php
        } else{
            $_SESSION['message']='<div class="alert alert-success">Problem in creating Property</div>';?>
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
