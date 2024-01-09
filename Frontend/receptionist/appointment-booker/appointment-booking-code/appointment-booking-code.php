
<?php include '../../../../backend/config/connection.php';?>


<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;


    // case 'appointment_booker':
	// 	$staff_id = $_POST['staff_id'];
	
	// 	$puserquery = mysqli_query($conn, " INSERT INTO `doctor_tab` WHERE role_id = $role_id") or die("cant select");
	// 	$pusersel = mysqli_fetch_array($puserquery);
	// 	$check = $pusersel['patient_id'];

	// 	echo $check;
	
	// 	echo json_encode(array('check' => $check));
	// break;


   
    
    case 'appointment_booker_check': 
        $patient_id = $_POST['patient_id'];
        $fullname = $_POST['fullname'];
      
    
        // Use prepared statement to prevent SQL injection
        $exists_query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE `fullname`= '$fullname' AND `patient_id`='$patient_id'");
        $check_query_count = mysqli_num_rows($exists_query);
    
        if ($check_query_count > 0) {   
            $check = 1; // exists.
        } else {
            $check = 0; //patient info doesnt not exits 
    
            // // Inserting a new appointment using prepared statement
            // $insert_query = mysqli_query($conn, "INSERT INTO `appointment_tab` (`appointment_date`, `patient_name`, `reason`, `time`, `role_id`, `doctor_id`,`patient_id`)
            //  VALUES ('$date', '$name', '$reason', '$time', '$role_id', '$doctor','$patient_id')") or die(mysqli_error($conn));
    
            // // Check if the insertion was successful
            // if ($insert_query) {
            //     // Success
            //     // You can add additional code here if needed
            // } else {
            //     // Failure
            //     $check = 0;
            // }
        }
    
        echo json_encode(array("check" => $check)); 
        break;
    


    
        case 'appointment_booker': 
            $role_id = $_POST['role_id'];
            $doctor = $_POST['doctor'];
            $date = $_POST['date'];
            $reason = $_POST['reason'];
            $name = $_POST['name'];
            $time = $_POST['time'];
            $patient_id= $_POST['patient_id'];
            // $patient_id= $_POST['patient_id'];
            $appointment_status_id= "1";
        
            // Use prepared statement to prevent SQL injection
            $exists_query = mysqli_query($conn, "SELECT * FROM appointment_tab WHERE `time`= '$time' AND `patient_name`='$name' AND `doctor_id`='$doctor' AND `appointment_date`='$date'");
            $check_query_count = mysqli_num_rows($exists_query);
        
            if ($check_query_count > 0) {   
                $check = 0; // Invalid appointment.
            } else {
                $check = 1;
                $sequence=$callclass->_get_sequence_count($conn, 'APP');
                $array = json_decode($sequence, true);
                $no= $array[0]['no'];
                //$num= $array[0]['num'];
                $appointment_id='APP'.$no;

                // Inserting a new appointment using prepared statement
                $insert_query = mysqli_query($conn, "INSERT INTO `appointment_tab` (`appointment_date`, `patient_name`, `reason`, `time`, `role_id`, `doctor_id`,`patient_id`,`appointment_id`,`appointment_status_id`)
                 VALUES ('$date', '$name', '$reason', '$time', '$role_id', '$doctor','$patient_id','$appointment_id','$appointment_status_id')") or die(mysqli_error($conn));
        
                // Check if the insertion was successful
                if ($insert_query) {
                    // Success
                    // You can add additional code here if needed
                } else {
                    // Failure
                    $check = 0;
                }
            }
        
            echo json_encode(array("check" => $check)); 
            break;
        
    


 
        case 'getRoles': 

            try {
                // Assuming you have a valid database connection established with $conn
        
                $query = mysqli_query($conn, "SELECT * FROM doctor_role_tab");
                
                if ($query) {
                    $roles = array();
        
                    // Fetch the data from the result set
                    while ($row = mysqli_fetch_assoc($query)) {
                        $roles[] = $row;
                    }
        
                    echo json_encode(array("success" => true, "roles" => $roles));
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing the query"));
                }
            } catch (Exception $e) {
                echo json_encode(array("success" => false, "message" => "Exception: " . $e->getMessage()));
            }
            break;


        
            case 'getDoctors':
                // Assuming the role is sent via POST, make sure to sanitize it
                $role = mysqli_real_escape_string($conn, $_POST['role']);
            
                $query = mysqli_query($conn, "SELECT doctor_tab.doctor_id, doctor_tab.fullname
                    FROM doctor_tab
                    JOIN doctor_role_tab ON doctor_tab.doctor_role_id = doctor_role_tab.doctor_role_id
                    WHERE doctor_role_tab.doctor_role_name = '$role'");
            
                // Debugging: Output the role to see if it's received correctly
            
            
                if ($query) {
                    $doctors = array();
            
                    // Fetch the data from the result set
                    while ($row = mysqli_fetch_assoc($query)) {
                        $doctors[] = $row;
                    }
            
                    echo json_encode(array("success" => true, "doctors" => $doctors));
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing the query"));
                }
                break;
            


    



}?>


<?php
// Assuming you have a database connection established

if (isset($_POST['getAllRoles'])) {
    try {
        // Perform a database query to get all roles
        // Replace 'your_database_table' and 'your_column_name' with your actual table and column names
     
        $statement = $pdo->prepare($query);
        $statement->execute();
        $roles = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Return the data as JSON
        echo json_encode($roles);
    } catch (PDOException $e) {
        // Handle database error
        echo json_encode(['error' => 'Database error']);
    }
    exit();
}

// Handle other cases or functions in your script if needed
?>
