<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;

    
 

    case 'emergency_input':

        // Capture POST data
        $Epatient_name = $_POST['fullName'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $ec_name = $_POST['emergencyFullName'];
        $ec_contact_no = $_POST['contactNumber'];
        $ec_relationship = $_POST['relationship'];
        $date_of_incident = $_POST['dateOfIncident'];
        $time_of_incident = $_POST['timeOfIncident'];
        $cause_of_incident = $_POST['causeOfIncident'];
        $status_id = "1";
    
        // Check for existing record with the same phone number
        $stmt = $conn->prepare("SELECT * FROM emergency_patient_tab WHERE `ec_contact_no` = ?");
        $stmt->bind_param("s", $ec_contact_no);
        $stmt->execute();
        $stmt->store_result();
        $check_query_count = $stmt->num_rows;
    
        if ($check_query_count > 0) {    
            echo json_encode(array("success" => false, "message" => "Phone number already exists."));
        } else {
    
            // Get sequence
            $sequence = $callclass->_get_sequence_count($conn, 'EPAT');
            $array = json_decode($sequence, true);
            $no = $array[0]['no'];
            $emergency_patient_id = 'Epat' . $no;
    
            // Prepare the insert query
            $stmt = $conn->prepare("INSERT INTO `emergency_patient_tab`
            (`emergency_patient_id`, `Epatient_name`, `status_id`, `dob`, `address`, `gender`, `ec_name`, `ec_contact_no`, `ec_relationship`, `date_of_incident`, `time_of_incident`, `cause_of_incident`, `date`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    
            $stmt->bind_param("ssssssssssss", $emergency_patient_id, $Epatient_name, $status_id, $dob, $address, $gender, $ec_name, $ec_contact_no, $ec_relationship, $date_of_incident, $time_of_incident, $cause_of_incident);
    
            if ($stmt->execute()) {
                echo json_encode(array("success" => true, "patient_id" => $emergency_patient_id));
            } else {
                echo json_encode(array("success" => false, "message" => $stmt->error));
            }
    
            $stmt->close();
        }
        
        break;

//         doctor
// nurse
// lab
// radiology
    }
    

    ?>
     
