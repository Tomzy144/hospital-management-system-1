<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;

    
  case 'patients_profile':
    $patient_id = $_POST['patient_id'];
    $physical_examination = $_POST['physical_examination'];
    $mental_status = $_POST['mental_status'];
    $cranial_nerves = $_POST['cranial_nerves'];
    $position_sense = $_POST['position_sense'];
    $vibration_sense = $_POST['vibration_sense'];
    $reflex_technique = $_POST['reflex_technique'];
    $coordination_of_upper_extremities = $_POST['coordination_of_upper_extremities'];
    $coordination_of_lower_extremities = $_POST['coordination_of_lower_extremities'];
    $gait = $_POST['gait'];
    $glasgow = $_POST['glasgow'];
    $spontaneous = $_POST['spontaneous'];
    $to_speech = $_POST['to_speech'];
    $to_pain = $_POST['to_pain'];
    $no_response = $_POST['no_response'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];
    $patient_id = $_POST['patient_id'];    
    $patient_id = $_POST['patient_id'];

    // Confirm user existence
    $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");

    // Assuming $query is the result you want to send
    $result = mysqli_fetch_assoc($query);

    // Sending JSON response
    echo json_encode(array("check" => $result));

    // Do not redirect here

  break;


  case 'doctor_input':
  

    break;


    }

    ?>
