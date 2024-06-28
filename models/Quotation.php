<?php
error_reporting(E_ALL & ~E_NOTICE);

class Quotation
{
    public $conn = "";

    function __construct($db)
    {
        $this->conn = $db;
    }

    //add new quotation
    public function add($Quotation)
    {
        if(!empty($Quotation) && is_array($Quotation))
        {
            foreach($Quotation as $key => $value){
                if(is_null($value) || $value == '')
                    unset($Quotation[$key]);
            }

            $fields = implode(",", array_keys($Quotation));
            $values = implode("','", array_values($Quotation));
            $query = "INSERT INTO quotation($fields) VALUES ('$values')";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }

    public function fetchCustomer()
    {
        try {
            $query = "SELECT NameOfCustomer FROM quotation GROUP BY NameOfCustomer";
            $stmt  = $this->conn->prepare($query);
            $list = array();
            $stmt->execute();
            while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                $list[] = $rows;
            }
            return $list;

        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}