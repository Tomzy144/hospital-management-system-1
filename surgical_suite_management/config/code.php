
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
    
    


    }
    
   