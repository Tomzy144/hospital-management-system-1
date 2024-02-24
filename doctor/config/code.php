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

    // Confirm user existence
    $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");

    // Assuming $query is the result you want to send
    $result = mysqli_fetch_assoc($query);

    // Sending JSON response
    echo json_encode(array("check" => $result));

    // Do not redirect here

    break;


    }

    ?>
