<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;

    

    case'bookLabouratoryTest':

        $tests = $_POST['tests'];
        $total_amount = $_POST['total_amount'];
        $patient_id = $_POST['patient_id'];
    
        $sequence = $callclass->_get_sequence_count($conn, 'LABAPP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $lab_scientist_appointment_id = 'LABAPP' . $no;
    
        $query = "INSERT INTO `lab_appointment_tab`
                  (`patient_id`, `lab_scientist_appointment_id`, `message`, `patient_name`, `time`) 
                  VALUES ('$patient_id', '$lab_scientist_appointment_id', '$message', '$patient_name', now())";
    
        if (mysqli_query($conn, $query)) {
            echo json_encode(array("check" => "success"));
        } else {
            echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
        }
    break;

    }
    ?>