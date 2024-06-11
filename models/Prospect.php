<?php
error_reporting(E_ALL & ~E_NOTICE);

class Prospect
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
            $query = "INSERT INTO prospect($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }
	
	public function getProspect() {
        $stmt = $this->con->prepare("SELECT * FROM prospect");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
	
	public function addDocument($documentDetails)
    {
        if(!empty($documentDetails) && is_array($documentDetails)){
            foreach($documentDetails as $key => $value){
                if(is_null($value) || $value == '')
                    unset($documentDetails[$key]);
            }

            $fields = implode(",", array_keys($documentDetails));
            $values = implode("','", array_values($documentDetails));
            $query = "INSERT INTO prospectdocument($fields) VALUES ('$values')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;

        }else{
            return false;
        }
    }
	
	public function getProspectById($id) {
        $stmt = $this->con->prepare("SELECT * FROM prospect p LEFT JOIN prospectdocument pd ON p.Id=pd.ProspectId where p.Id=:id");
		$stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        $prospect = [];
        $documents = [];

        foreach ($rows as $row) {
            if (empty($prospect)) {
                // Assume all columns from the `prospect` table are not null
                $prospect = [
                    'ContactPersonName' => $row['ContactPersonName'],
                    'ContactPersonMobile' => $row['ContactPersonMobile'],
                    'ContactPersonEmailID' => $row['ContactPersonEmailID'],
                    'TINNumber' => $row['TINNumber'],
                    'VRNNumber' => $row['VRNNumber'],
                    // Add other columns from `prospect` table here
                ];
            }

            // Collect related documents
            if ($row['ProspectId']) {
                $documents[] = [
                    'ProspectId' => $row['ProspectId'],
                    'Document' => $row['Document'],
                    // Add other columns from `prospectdocument` table here
                ];
            }
        }

        // Combine into final result
        $result['prospect'] = $prospect;
        $result['documents'] = $documents;

        return $result;
    }
	
	public function getId($name)
	{
		$query = "SELECT MAX(Id) AS id FROM prospect";
		$stmt  = $this->con->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row['id'];
	}
	

}





