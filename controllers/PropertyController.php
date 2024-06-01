<?php
session_start();
error_reporting(0);
require('../database/connection.php');
require('../models/Property.php');
$database = new Database();
$db = $database->connect();
$property = new Property($db);




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
