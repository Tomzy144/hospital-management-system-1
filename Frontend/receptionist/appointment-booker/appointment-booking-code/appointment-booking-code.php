
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
		$role=trim(strtoupper($_POST['role']));
		$doctor=$_POST['doctor'];
		$date=$_POST['date'];
        $reason=$_POST['reason'];
        $name=$_POST['name'];
        $time=$_POST['time'];
        
		
		$email_query=mysqli_query($conn, "SELECT * FROM staff_tab WHERE `email`='$email'");
        $check_query_count=mysqli_num_rows($email_query);

        if(($check_query_count>0)){	
			$check=0;//// invalid Email.
             }else{
				$check=1;
			

		///////////////////////geting sequence//////////////////////////
		// $sequence=$callclass->_get_sequence_count($conn, 'STF');
		// $array = json_decode($sequence, true);
		// $no= $array[0]['no'];
		// //$num= $array[0]['num'];
		// $staff_id='STF'.$no;
		
	
			mysqli_query($conn,"INSERT INTO `doctor_tab`
			-- (`staff_id`, `fullname`, `email`, `phonenumber`, `role_id`, `status_id`, `date`, `last_login`) VALUES 
            (`staff_id`, `fullname`, `email`, `phonenumber`, `role_id`, `status_id`, `date`, `last_login`) VALUES 
			('$staff_id', '$fullname', '$email', '$phonenumber', '$role_id', '$status_id', NOW(), NOW())")or die (mysqli_error($conn));
		/////////// get alert//////////////////////////////////
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