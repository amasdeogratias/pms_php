<?php
error_reporting(E_ALL & ~E_NOTICE);

class Property
{
    public $con = "";

    function __construct($db)
    {
        $this->con = $db;
    }

    public function add($data)
    {
        if(!empty($data) && is_array($data)){
            foreach($data as $key => $value){
                if(is_null($value) || $value == '')
                    unset($data[$key]);
            }

            $fields = implode(",", array_keys($data));
            $values = implode("','", array_values($data));
            $query = "INSERT INTO property($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
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

    public function getId($name)
    {
        $query = "SELECT max(id ) as id FROM property";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['id'];
    }

    public function addPropertyDocuments($data)
    {
        if(!empty($data) && is_array($data)){
            foreach($data as $key => $value){
                if(is_null($value) || $value == '')
                    unset($data[$key]);
            }

            $fields = implode(",", array_keys($data));
            $values = implode("','", array_values($data));
            $query = "INSERT INTO propertydocument($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }
}