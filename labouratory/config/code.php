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
    
        $sequence = $callclass->_get_sequence_count($conn, 'ACCTAPP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $account_appointment_id = 'ACCTAPP' . $no;
    
        $query = "INSERT INTO `account_appointment_tab`
                  (`patient_id`, `account_appointment_id`, `tests`, `total_amount`, `time`) 
                  VALUES ('$patient_id', '$account_appointment_id', '$tests', '$total_amount', now())";
    
        if (mysqli_query($conn, $query)) {
            echo json_encode(array("check" => "success"));
        } else {
            echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
        }
    break;

    }
    ?>