
<?php include '../../backend/config/connection.php';?>


<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;
	

	default :
			
	break;

    case 'fetch_patient_profile':

        $patient_id = $_POST["patient_id"];
        
        // Fetch patient details from patient_tab
        $stmt = $conn->prepare("SELECT * FROM patient_tab WHERE patient_id = ?");
        $stmt->bind_param("s", $patient_id); // "s" denotes that $patient_id is a string
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $patient = $result->fetch_assoc();
    
            // Fetch patient vitals from patient_vitals_tab
            $stmt2 = $conn->prepare("SELECT * FROM patient_vital_tab WHERE patient_id = ?");
            $stmt2->bind_param("s", $patient_id);
            $stmt2->execute();
            $vitals_result = $stmt2->get_result();
            
            if ($vitals_result->num_rows > 0) {
                $patient_vitals = $vitals_result->fetch_assoc();
            } else {
                $patient_vitals = null; // No vitals found
            }
            
            // Send success response with patient data and vitals
            echo json_encode([
                'status' => 'success',
                'message' => 'Patient profile fetched successfully.',
                'data' => [
                    'patient_info' => $patient,
                    'patient_vitals' => $patient_vitals
                ]
            ]);
            
            // Close the second statement
            $stmt2->close();
    
        } else {
            // Send error response if no patient is found
            echo json_encode([
                'status' => 'error',
                'message' => 'Patient not found.'
            ]);
        }
    
        // Close the statement
        $stmt->close();
    
    break;


    
        case 'accept_appointment':
            $appointment_id = $_POST['appointment_id'];
            $surgical_unit_id = $_POST['surgical_unit_id'];
    
            // Select the appointment from the database
            $sql = "SELECT * FROM surgical_suite_appointment_tab WHERE surgical_suite_appointment_id = '$appointment_id'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                // If appointment is found, update the status_id to 2
                $update_sql = "UPDATE surgical_suite_appointment_tab 
                               SET status_id = 2,  	accepted_surgical_id  = '$surgical_unit_id' 
                               WHERE surgical_suite_appointment_id = '$appointment_id'";
    
                if (mysqli_query($conn, $update_sql)) {
                    echo json_encode(['status' => 'success', 'message' => 'Appointment accepted']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to update the appointment']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Appointment not found']);
            }
    
        break;
        case 'fetch_patient_lab_info':
            $patient_id = $_POST['patient_id'];
            
            // Prepare and execute the query
            $sql = "SELECT * FROM lab_appointment_tab WHERE patient_id = '$patient_id' AND status_id ='1'";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                $data = [];
        
                // Fetch all rows and store them in the array
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
        
                // Check if any data was fetched
                if (!empty($data)) {
                    // Return the data in a response
                    echo json_encode([
                        'success' => true,
                        'data' => $data
                    ]);
                } else {
                    // Return an error response if no data found
                    echo json_encode([
                        'success' => false,
                        'message' => 'No patient lab info found.'
                    ]);
                }
            } else {
                // Handle query execution error
                echo json_encode([
                    'success' => false,
                    'message' => 'Query execution error: ' . mysqli_error($conn)
                ]);
            }
        
            break;
        
    


    }
    
   