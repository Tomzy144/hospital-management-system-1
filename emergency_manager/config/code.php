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
        $Epatient_name = $_POST['fullname'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $ec_name = $_POST['ec_name'];
        $ec_contact_no = $_POST['ec_contact_no'];
        $ec_relationship = $_POST['ec_relationship'];
        $date_of_incident = $_POST['date_of_incident'];
        $time_of_incident = $_POST['time_of_incident'];
        $cause_of_incident = $_POST['cause_of_incident'];
        $status_id = "1";
    
        // Assuming wphonenumber is a part of the form data, make sure to capture it.
        $wphonenumber = $_POST['wphonenumber'];
    
        // Check for existing record with the same phone number
        $phonenumber_query = mysqli_query($conn, "SELECT * FROM emergency_patient_tab WHERE `wphonenumber`='$wphonenumber'");
        $check_query_count = mysqli_num_rows($phonenumber_query);
    
        if ($check_query_count > 0) {    
            $check = 0; // invalid phone number.
            echo json_encode(array("success" => false, "message" => "Phone number already exists."));
        } else {
            $check = 1;
    
            // Get sequence
            $sequence = $callclass->_get_sequence_count($conn, 'Epat');
            $array = json_decode($sequence, true);
            $no = $array[0]['no'];
            $emergency_patient_id = 'Epat' . $no;
    
            // Insert the new emergency patient record
            $insert_query = "INSERT INTO `emergency_patient_tab`
            (`emergency_patient_id`, `Epatient_name`, `status_id`, `dob`, `address`, `gender`, `ec_name`, `ec_contact_no`, `ec_relationship`, `date_of_incident`, `time_of_incident`, `cause_of_incident`, `date`) 
            VALUES ('$emergency_patient_id', '$Epatient_name', '$status_id', '$dob', '$address', '$gender','$ec_name','$ec_contact_no','$ec_relationship','$date_of_incident','$time_of_incident','$cause_of_incident', NOW())";
    
            if (mysqli_query($conn, $insert_query)) {
                echo json_encode(array("success" => true, "patient_id" => $emergency_patient_id));
            } else {
                echo json_encode(array("success" => false, "message" => mysqli_error($conn)));
            }
        }
        
        break;
    }    

    ?>
     
