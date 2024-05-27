<?php
error_reporting(E_ALL & ~E_NOTICE);

class Company
{
    public $con = '';

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
            $query = "INSERT INTO company($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }
}





