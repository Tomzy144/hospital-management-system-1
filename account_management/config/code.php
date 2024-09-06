<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
        case 'get_page':
        $page=$_POST['page'];
        include 'index.php';
        break;



        case 'pending_transactions':

            // Retrieve the patient_id from the POST request (optional if needed)
            $patient_id = $_POST['patient_id'];
        
            $response = array(); // Initialize the response array
        
            // SQL query to fetch appointment details for the specific patient or all records
            $sql = "SELECT * FROM account_appointment_tab"; // Add WHERE clause to filter by patient_id if needed
        
            $result = mysqli_query($conn, $sql);
        
            // Check if any rows are returned
            if (mysqli_num_rows($result) > 0) {
                $pending_appointments = array(); // Initialize an array to hold all rows
        
                // Loop through all rows and store them in the array
                while ($row = mysqli_fetch_assoc($result)) {
                    $pending_appointments[] = $row; // Add each row to the array
                }
        
                // Pass the array to the JSON response
                $response['success'] = true;
                $response['data'] = $pending_appointments; // Send the array of rows as data in the response
        
            } else {
                $response['success'] = false;
                $response['message'] = "No pending transactions found.";
            }
        
            // Return the response as JSON
            echo json_encode($response);
        
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
                // Prepare SQL queries to insert the record into two tables
                $insert_sql1 = "
                    INSERT INTO account_appointment_confirm_tab (patient_id, account_appointment_id, total_amount, tests, time, approved_time, payment_status)
                    SELECT patient_id, account_appointment_id, total_amount, tests, time, NOW(), 'APPROVED'
                    FROM account_appointment_tab
                    WHERE patient_id = '$patient_id' AND time = '$time'";
        
                $insert_sql2 = "
                    INSERT INTO account_appointment_overall_tab (patient_id, account_appointment_id, total_amount, tests, time, approved_time, payment_status)
                    SELECT patient_id, account_appointment_id, total_amount, tests, time, NOW(), 'APPROVED'
                    FROM account_appointment_tab
                    WHERE patient_id = '$patient_id' AND time = '$time'";
        
                // Execute the first insert query
                if (mysqli_query($conn, $insert_sql1) && mysqli_query($conn, $insert_sql2)) {
                    // If both insertions are successful, delete the original record
                    $delete_sql = "DELETE FROM account_appointment_tab WHERE patient_id = '$patient_id' AND time = '$time'";
                    if (mysqli_query($conn, $delete_sql)) {
                        $response['success'] = true;
                        $response['message'] = "Successful Payment.";
                    } else {
                        $response['success'] = false;
                        $response['message'] = "Error confirming payment: " . mysqli_error($conn);
                    }
                } else {
                    $response['success'] = false;
                    $response['message'] = "Error occurred during insertion: " . mysqli_error($conn);
                }
            } else {
                $response['success'] = false;
                $response['message'] = "No record found with the given patient ID and time.";
            }
        
            // Return the response as JSON
            echo json_encode($response);
        
            break;
        



            case 'fetch_appointment_list':

                // Retrieve the patient_id from the POST request
                $patient_id = $_POST['patient_id'];
            
                $response = array(); // Initialize the response array
            
                // SQL query to fetch appointment details along with patient details
                $sql = "SELECT * account_appointment_confirm_tab ";
                $result = mysqli_query($conn, $sql);
            
                // Check if any rows are returned
                if (mysqli_num_rows($result) > 0) {
                    $appointments = array();
                    
                    // Fetch each row and add to the appointments array
                    while ($row = mysqli_fetch_assoc($result)) {
                        $appointments[] = $row;
                    }
            
                    $response['success'] = true;
                    $response['data'] = $appointments; // Add the appointments data to the response
            
                } else {
                    $response['success'] = false;
                    $response['message'] = "No appointments found for this patient.";
                }
            
                // Return the response as JSON
                echo json_encode($response);
            
                break;


                case 'fetch_overall_appointment_list':

                    // Retrieve the patient_id from the POST request
                    $patient_id = $_POST['patient_id'];
                
                    $response = array(); // Initialize the response array
                
                    // SQL query to fetch appointment details along with patient details
                    $sql = "SELECT a.*, p.fullname, p.patient_passport 
                            FROM account_appointment_overall_tab a
                            INNER JOIN patient_tab p ON a.patient_id = p.patient_id
                            WHERE a.patient_id = '$patient_id'";
                    $result = mysqli_query($conn, $sql);
                
                    // Check if any rows are returned
                    if (mysqli_num_rows($result) > 0) {
                        $appointments = array();
                        
                        // Fetch each row and add to the appointments array
                        while ($row = mysqli_fetch_assoc($result)) {
                            $appointments[] = $row;
                        }
                
                        $response['success'] = true;
                        $response['data'] = $appointments; // Add the appointments data to the response
                
                    } else {
                        $response['success'] = false;
                        $response['message'] = "No appointments found for this patient.";
                    }
                
                    // Return the response as JSON
                    echo json_encode($response);
                
                    break;
            
           
        
        
        
        

    }
?>