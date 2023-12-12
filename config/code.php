
<?php include '../backend/config/connection.php';?>


<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;


	  
 	case 'login_check': // for user login
		$email=trim($_POST['email']);
	///	$temp_password=trim(($_POST['password']));
		$password=trim(($_POST['password']));
		$user_id=trim(($_POST['user_id']));

			$query=mysqli_query($conn,"SELECT * FROM staff_tab WHERE `email`='$email' AND `password`='$password' AND `staff_id` = '$user_id'");
			$usercount = mysqli_num_rows($query);
			if ($usercount>0){
				$usersel=mysqli_fetch_array($query);
				$staff_id=$usersel['staff_id'];
				$status_id=$usersel['status_id'];
				
					if ($status_id==1){
						$check=1; ///// account is active

						
					}else if($status_id==2){
						$check=2; ///// account is suspended
						
					}else {
						$check=0;
					}
			}else{
				$check=0;
			}
							
			echo json_encode(array("check" => $check, )); 
	break;


	case 'login': // login from index
		$userquery = mysqli_query ($conn,"SELECT * FROM `staff_tab` WHERE email = '$email' AND `password` = '$spass' AND status_id=1") ;
				$usersel=mysqli_fetch_array($userquery);
				$staff_id=$usersel['staff_id'];
				$_SESSION['staff_id'] = $staff_id;
				$s_staff_id=$_SESSION['staff_id'];
				mysqli_query($conn,"UPDATE `staff_tab` SET last_login=NOW() WHERE staff_id='$s_staff_id'") or die("cannot update") ; //// update last login
							
		?>
					<script>

						window.parent(location="../frontend/receptionist/index.php");
					</script>
		<?php
			
	break;


	case 'proceed_reset_password':
		$email=$_POST['email'];
		/////////// confirm user exitence//////////////////////////////////
		$query=mysqli_query($conn,"SELECT * FROM staff_tab WHERE email='$email'");
				$checkemail=mysqli_num_rows($query);
				if ($checkemail>0){
				  $fetch=mysqli_fetch_array($query);
					$staff_id= $fetch['staff_id'];
					$status_id= $fetch['status_id'];
					if ($status_id==1){
						$check=1; /// user  Active
					}else if($status_id==2){
						$check=2; /// user Suspended
				}else{
					$check=0; /// user Not Exist
				}

			}else{
				$check=0; /// user Not Exist
			}
		  ////////sending json///////////////////////////
				  echo json_encode(array("check" => $check,"staff_id" => $staff_id)); 
	break;

	case 'reset_password':
		$staff_id=$_POST['staff_id'];		  
		$user_array=$callclass->_get_staff_details($conn, $staff_id);
		$u_array = json_decode($user_array, true);
		$fullname= $u_array[0]['fullname'];
		$email= $u_array[0]['email'];
  
		  $otp = rand(111111,999999);
		  ////////////////update user OTP///////////////
		  mysqli_query($conn,"UPDATE staff_tab SET otp='$otp' WHERE staff_id ='$staff_id'") or die("cannot update staff_tab");
		  ////////////////send OTP through email///////////////
		//   $mail_to_send='send_reset_password_otp';
		//   require_once('mail/mail.php');
		$page=$action;
	 require_once('../../frontend/superadmin/otp-reset.php');
	 ?>
	<!-- <script>
	 	window.parent(location="../frontend/otp-reset.php");
 	</script> -->
 <?php 
	
	break;


	case 'resend_otp':
		$staff_id=$_POST['staff_id'];		  
		$user_array=$callclass->_get_staff_details($conn, $staff_id);
		$u_array = json_decode($user_array, true);
		$fullname= $u_array[0]['fullname'];
		$email= $u_array[0]['email'];
		
		$otp = rand(111111,999999);
		////////////////update user OTP///////////////
		mysqli_query($conn,"UPDATE staff_tab SET otp='$otp' WHERE staff_id ='$staff_id'")or die("cannot update staff_tab");
		////////////////send OTP true email///////////////
		//$mail_to_send='send_reset_password_otp';
		// require_once('../../frontend/otp-reset.php');
	break;	


	case 'finish_reset_password':
		$staff_id=trim($_POST['staff_id']);
		$password=($_POST['password']);
		$otp=trim($_POST['otp']); 
		
		$fetch=$callclass->_get_staff_details($conn, $staff_id);
		$array = json_decode($fetch, true);
		$fullname=$array[0]['fullname'];
		$db_otp=$array[0]['otp'];
		$role_id=$array[0]['role_id'];
		
		  if ($otp==$db_otp){ ///// check 1
		  mysqli_query($conn,"UPDATE staff_tab SET password='$password' WHERE staff_id='$staff_id'")or die (mysqli_error($conn));
		  $check=1;
		  }else{						
		  $check=0;
		  }
		  echo json_encode(array("check" => $check)); 
	  break;
  
	   case 'password_reset_completed':
		$page=$action;
	  	require_once('index.php');
	  break;


	  case 'logout':
		session_destroy();
		?>
		<script>
			window.alert("Logging Out");
		window.parent(location="../");
		</script>
		<?php
	break;


	  
	case 'fetch_patient':
		$staff_id=$_POST['staff_id'];		  
		$user_array=$callclass->_get_staff_details($conn, $staff_id);
		$u_array = json_decode($user_array, true);
		$fullname= $u_array[0]['fullname'];
		$email= $u_array[0]['email'];
		
		// $otp = rand(111111,999999);
		// ////////////////update user OTP///////////////
		mysqli_query($conn,"SELECT * FROM patient_tab WHERE patient_id ='$patient_id'")or die("cannot select patient_tab");
		////////////////send OTP true email///////////////
		//$mail_to_send='send_reset_password_otp';
		// require_once('../../frontend/otp-reset.php');
	break;	






	case 'patients_page':
		$patient_id = $_POST['patient_id'];
	
		$userquery = mysqli_query($conn, "SELECT * FROM `patient_tab` WHERE patient_id = '$patient_id'") or die("cant select");
		$usersel = mysqli_fetch_array($userquery);
		$check = $usersel['patient_id'];

		echo json_encode(array('check' => $check));		
	break;
	



	





	case 'patients_profile_page':
		$patient_id = $_POST['patient_id'];
	
		$puserquery = mysqli_query($conn, "SELECT * FROM `patient_tab` WHERE patient_id = $patient_id") or die("cant select");
		$pusersel = mysqli_fetch_array($puserquery);
		$check = $pusersel['patient_id'];

		echo $check;
	
		echo json_encode(array('check' => $check));
	break;
	



	



	
	case 'add_patient': 
		$fullname = trim(strtoupper($_POST['fullname']));
		// $email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$dateofbirth = $_POST['dob'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$kname = $_POST['kname'];
		$krelationship = $_POST['krelationship'];
		$kaddress = $_POST['kaddress'];
		$kphonenumber = $_POST['kphonenumber'];
		$kgender = $_POST['kgender'];
		$occupation = $_POST['occupation'];
		$past_obsterics = $_POST['past_obsterics'];
		$sexual_history = $_POST['sexual_history'];
		$past_disease = $_POST['past_disease'];
		$family_disease = $_POST['family_disease'];
		$past_surgery = $_POST['past_surgery'];
		$medical_history = $_POST['medical_history'];
		$status_id= '1';
		$category = $_POST['category'];
		$bed = $_POST['bed'];
		$ward = $_POST['ward'];

		
		$phonenumber_query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE `phonenumber`='$phonenumber'");
		$check_query_count = mysqli_num_rows($phonenumber_query);
	
		if ($check_query_count > 0) {	
			$check = 0; // invalid phonenumber.
		} else {
			$check = 1;
	
			// get sequence
			$sequence = $callclass->_get_sequence_count($conn, 'pat');
			$array = json_decode($sequence, true);
			$no = $array[0]['no'];
			$patient_id = 'pat' . $no;
	
			mysqli_query($conn,"INSERT INTO `patient_tab`
			(`patient_id`, `fullname`,`status_id`,  `phonenumber`, `dateofbirth`, `address`,`gender`,`kname`,`krelationship`,`kphonenumber`,`kgender`,`kaddress`,`occupation`,`past_obsterics`,`sexual_history`,`past_disease`,`family_disease`,`past_surgery`,`medical_history`,`date`,`category_id`,`bed`,`ward`) VALUES 
			('$patient_id', '$fullname', '$status_id', '$phonenumber', '$dateofbirth', '$address', '$gender', '$kname', '$krelationship', '$kphonenumber', '$kgender', '$kaddress', '$occupation', '$past_obsterics', '$sexual_history', '$past_disease', '$family_disease','$past_surgery','$medical_history', NOW(),'$category','$bed','$ward')") or die (mysqli_error($conn));
		}
	
		echo json_encode(array("check" => $check, "patient_id" => $patient_id));
		break;
	












		case 'getWards': 

            try {
                // Assuming you have a valid database connection established with $conn
        
                $query = mysqli_query($conn, "SELECT * FROM ward_tab");
                
                if ($query) {
                    $wards = array();
        
                    // Fetch the data from the result set
                    while ($row = mysqli_fetch_assoc($query)) {
                        $wards[] = $row;
                    }
        
                    echo json_encode(array("success" => true, "wards" => $wards));
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing the query"));
                }
            } catch (Exception $e) {
                echo json_encode(array("success" => false, "message" => "Exception: " . $e->getMessage()));
            }
            break;





	
            case 'getBeds':
                // Assuming the role is sent via POST, make sure to sanitize it
                $wards = mysqli_real_escape_string($conn, $_POST['wards']);
            
                $query = mysqli_query($conn, "SELECT bed_tab.bed_id, bed_tab.bed_number, bed_status_tab.bed_description
				FROM bed_tab
				JOIN bed_status_tab ON bed_tab.bed_status_id = bed_status_tab.bed_status_id
				JOIN ward_tab ON bed_tab.ward_id = ward_tab.ward_id
				WHERE ward_tab.ward_id = '$wards'");
            
                // Debugging: Output the role to see if it's received correctly
            
            
                if ($query) {
                    $beds = array();
            
                    // Fetch the data from the result set
                    while ($row = mysqli_fetch_assoc($query)) {
                        $beds[] = $row;
                    }
            
                    echo json_encode(array("success" => true, "beds" => $beds));
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing the query"));
                }
                break;










}




?>