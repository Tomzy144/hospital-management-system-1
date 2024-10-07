
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
        
      
        $stmt = $conn->prepare("SELECT * FROM patient_tab WHERE patient_id = ?");
        $stmt->bind_param("s", $patient_id); // "s" denotes that $patient_id is a string
        
      
        $stmt->execute();
        
      
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $patient = $result->fetch_assoc();
            
           
            echo json_encode([
                'status' => 'success',
                'message' => 'Patient profile fetched successfully.',
                'data' => $patient
            ]);
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
    
   