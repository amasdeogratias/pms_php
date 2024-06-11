<?php
session_start();
error_reporting(0);
require('../database/connection.php');
require('../models/Prospect.php');
$database = new Database();
$db = $database->connect();
$prospect = new Prospect($db);


function create()
{
    global $prospect;
    global $db;

	date_default_timezone_set('Asia/Kolkata');
	$date = date('d-m-Y H:i:s');
	
    try {
		
        $data = array(
            'NameOfOrganization' => str_replace("'", "''", $_POST['organization']),
            'Address' => str_replace("'", "''", $_POST['address']),
			'OfficialMobileNumber' => str_replace("'", "''", $_POST['official_mobile_number']),
			'OfficialEMailID' => str_replace("'", "''", $_POST['official_email_id']),
            'ContactPersonName' => str_replace("'", "''", $_POST['contact_person']),
            'ContactPersonMobile' => str_replace("'", "''", $_POST['mobile_number']),
            'ContactPersonEmailID' => str_replace("'", "''", $_POST['email_id']),
            'TINNumber' => str_replace("'", "''", $_POST['tin']),
            'VRNNumber' => str_replace("'", "''", $_POST['vrn']),
			//'OfficialDocument' => $_FILES['document']['name'],
			'CompanyName' => $_SESSION['company'],
            'CreatedBy' => $_SESSION['username'],
            'CreatedDate' => $date,
            'UpdatedBy' => null,
            'UpdatedDate' => null,
        );

		
		//echo json_encode($_FILES['document']['name']);
		//exit;
		$add_response = $prospect->add($data);
		$prospect_id = $prospect->getId($_POST['organization']);
		
        if (!empty($_FILES['document']['name'])){
            foreach ($_FILES['document']['name'] as $key => $name){
                
                // Validate the input (optional, but recommended)
                $documentDetails = array(
                        'ProspectId' => $prospect_id,
                        'Document' => $name,
                        'CompanyName' => $_SESSION['company'],
                        'CreatedBy' => $_SESSION['username'],
                        'CreatedDate' => $date,
                        'UpdatedBy' => null,
                        'UpdatedDate' => null,
                    );
                $prospect->addDocument($documentDetails);
				move_uploaded_file($_FILES['document']['tmp_name'][$key], '../prospectDocument/' . $_FILES['document']['name'][$key]);
            }
		}
            
		
        if($add_response) {
            $_SESSION['message']='<div class="alert alert-success">Prospect added successfully! Thank you.</div>';?>
            <script>
                window.history.back();
            </script>
            <?php
        } else{
            $_SESSION['message']='<div class="alert alert-success">Problem in creating Prospect, try again.</div>';?>
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

function fetchProspectById()
{
	global $prospect;
    global $db;
	$prospect_id = $_POST['id'];
	if(isset($prospect_id)){
		$results = $prospect->getProspectById($prospect_id);
		echo json_encode($results);
	}
}

$f = $_GET['f'];
$f();
