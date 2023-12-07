
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


   
    
    case 'appointment_booker': 
        $role_id = trim(strtoupper($_POST['role_id']));
        $doctor = $_POST['doctor'];
        $date = $_POST['date'];
        $reason = $_POST['reason'];
        $name = $_POST['name'];
        $time = $_POST['time'];
    
        // Use prepared statement to prevent SQL injection
        $exists_query = mysqli_query($conn, "SELECT * FROM appointment_tab WHERE `time`='$time' AND `patient_name`='$name' AND `doctor_id`='$doctor' AND `date`='$date'");
        $check_query_count = mysqli_num_rows($exists_query);
    
        if ($check_query_count > 0) {   
            $check = 0; // Invalid appointment.
        } else {
            $check = 1;
    
            // Inserting a new appointment using prepared statement
            $insert_query = mysqli_query($conn, "INSERT INTO `appointment_tab` (`appointment_date`, `patient_name`, `reason`, `time`, `role_id`, `doctor_id`)
             VALUES ('$date', '$name', '$reason', '$time', '$role_id', '$doctor')") or die(mysqli_error($conn));
    
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
    













    // case 'appointment_delete':
    //     $patient_id = $_POST['patient_id'];

    //     $puserquery = mysqli_query($conn, "SELECT * FROM `patient_tab` WHERE patient_id = $patient_id") or die("cant select");
    //     $pusersel = mysqli_fetch_array($puserquery);
    //     $check = $pusersel['patient_id'];

    //     echo $check;

    //     echo json_encode(array('check' => $check));
    // break;

}?>