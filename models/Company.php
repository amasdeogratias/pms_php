<?php
error_reporting(E_ALL & ~E_NOTICE);

class Company
{
    public $con = '';

    function __construct($db)
    {
        $this->con = $db;
    }

    public function fetch()
    {
        $query = "SELECT * FROM company GROUP BY Id";
        $stmt  = $this->con->prepare($query);
        $stmt->execute();
        $list = array();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            $list[] = $rows;
        }
        return $list;
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
    public function addUser($userData)
    {
        if(!empty($userData) && is_array($userData)){
            foreach($userData as $key => $value){
                if(is_null($value) || $value == '')
                    unset($userData[$key]);
            }

            $fields = implode(",", array_keys($userData));
            $values = implode("','", array_values($userData));
            $query = "INSERT INTO usermaster($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }
}





