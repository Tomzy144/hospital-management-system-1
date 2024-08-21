<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
        case 'get_page':
        $page=$_POST['page'];
        include 'index.php';
        break;


        case 'paid':

            // Retrieve the patient_id and time from the POST request
            $patient_id = $_POST['patient_id'];
            $time = $_POST['time'];
        
            // SQL query to select the row(s) from account_appointment_tab based on patient_id and time
            $sql = "SELECT * FROM account_appointment_tab WHERE patient_id = '$patient_id' AND time = '$time'";
            $result = mysqli_query($conn, $sql);
        
            $response = array(); // Initialize the response array
        
            if (mysqli_num_rows($result) > 0) {
                // If a row is found, insert it into another table (e.g., account_appointment_confirm_tab)
                $insert_sql = "INSERT INTO account_appointment_confirm_tab (patient_id, account_appointment_id, total_amount, tests, time, approved_time, payment_status)
                               SELECT patient_id, account_appointment_id, total_amount, tests, time, NOW(), 'APPROVED'
                               FROM account_appointment_tab
                               WHERE patient_id = '$patient_id' AND time = '$time'";
                
                // Execute the insert query
                if (mysqli_query($conn, $insert_sql)) {
                    // Successfully inserted, now delete the original record
                    $delete_sql = "DELETE FROM account_appointment_tab WHERE patient_id = '$patient_id' AND time = '$time'";
                    if (mysqli_query($conn, $delete_sql)) {
                        $response['success'] = true;
                        $response['message'] = "Sucessful Payment.";
                    } else {
                        $response['success'] = false;
                        $response['message'] = "Error Confirmming payment: " . mysqli_error($conn);
                    }
                } else {
                    $response['success'] = false;
                    $response['message'] = "Error occured: " . mysqli_error($conn);
                }
            } else {
                $response['success'] = false;
                $response['message'] = "No record found with the given patient ID and time.";
            }
        
            // Return the response as JSON
            echo json_encode($response);
        
            break;
        
        
        
        
        

    }
?>