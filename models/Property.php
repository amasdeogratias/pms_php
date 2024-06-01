<?php
error_reporting(E_ALL & ~E_NOTICE);

class Property
{
    public $con = "";

    function __construct($db)
    {
        $this->con = $db;
    }


    public function fetchPropertyType($property)
    {
        if ($property === 'Both') {
            $query = "SELECT TypeOfProperty FROM propertytype";
        } else {
            $query = "SELECT TypeOfProperty FROM propertytype WHERE PropertyType = :property";
        }

        $stmt = $this->con->prepare($query);

        if ($property !== 'Both') {
            $stmt->bindParam(':property', $property, PDO::PARAM_STR);
        }

        $stmt->execute();
        $results = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        return $results;
    }
}