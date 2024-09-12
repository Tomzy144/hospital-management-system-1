<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;

    

    case 'bookLabouratoryTest':

        // Retrieve POST data
        $tests = json_encode($_POST['tests']); // Convert the tests array to a JSON string
        $total_amount = $_POST['totalAmount'];
        $patient_id = $_POST['patient_id'];
        $payment_status = "PENDING";
    
        // Get the sequence number for generating the account_appointment_id
        $sequence = $callclass->_get_sequence_count($conn, 'ACCTAPP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $account_appointment_id = 'ACCTAPP' . $no;
    
        // Prepare the SQL query with placeholders
        $query = "INSERT INTO `account_appointment_tab`
                  (`patient_id`, `account_appointment_id`, `tests`, `total_amount`, `payment_status` ,`time`) 
                  VALUES (?, ?, ?, ?, ?, now())";
    
        // Use a prepared statement to avoid SQL injection
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $patient_id, $account_appointment_id, $tests, $total_amount, $payment_status);
    
        // Execute the query and check for success
        if ($stmt->execute()) {
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false, "message" => $stmt->error));
        }
    
        $stmt->close();
        break;
    
        

    }
    ?>