
<?php include '../../backend/config/connection.php';?>



<?php 
	$action=$_POST['action'];
	  switch ($action){

	case 'get_page':
		$page=$_POST['page'];
		// require_once ('page-content.php');
	break;




	case 'update_profile_pix':
		$passport = $_POST['capturedImage'];
		$datetime = date("Ymdhi");
		$patient_id = $_POST['id']; // Corrected variable name
	
		$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png", "PNG", "GIF");
		$extension = pathinfo($passport, PATHINFO_EXTENSION);
	
		if (in_array($extension, $allowedExts)) {
			$user_array = $callclass->_get_patient_details($conn, $patient_id);
			$u_array = json_decode($user_array, true);
			$db_passport = $u_array[0]['patient_passport'];
	
			if ($db_passport != '') {
				unlink("../../uploaded_files/profile_pix/" . $db_passport);
			}
	
			$temp_file_basename = basename($_FILES["capturedImage"]["tmp_name"]);
	
			// $passport = $datetime . '_' . $passport;
			move_uploaded_file($_FILES["capturedImage"]["tmp_name"], "../../uploaded_files/profile_pix/patient" . $passport);
	
			mysqli_query($conn, "UPDATE patient_tab SET patient_passport='$passport' WHERE patient_id='$patient_id'") or die ("cannot update patient_tab");
		} else {
			echo "Invalid file format";
		}
		break;
	
	

	case 'get_hospital_plan':
		$sql = "SELECT Hospital_plan_cat_name, hospital_plan_cat_id FROM hospital_plan_tab";
		$result = $conn->query($sql);
		
		// Store the fetched data in an array of objects
		$data = array();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// Create an object with plan name and ID
				$plan = array(
					'name' => $row['Hospital_plan_cat_name'],
					'id' => $row['hospital_plan_cat_id']
				);
				$data[] = $plan;
			}
		}
		// Encode the data as JSON
		$json_data = json_encode($data);
		
		// Output the JSON data
		echo $json_data;
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
		// $category = $_POST['category'];
		$hospital_plan = $_POST['hospital_plan'];
		$family_card_id =$_POST['family_card_id'];

		// $bed = $_POST['bed'];
		// $ward = $_POST['ward'];

		
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
			(`patient_id`, `fullname`,`status_id`,  `phonenumber`, `dateofbirth`, `address`,`gender`,`kname`,`krelationship`,`kphonenumber`,`kgender`,`kaddress`,`occupation`,`past_obsterics`,`sexual_history`,`past_disease`,`family_disease`,`past_surgery`,`medical_history`,`date`,`hospital_card_id`,`family_card_id`) VALUES 
			('$patient_id', '$fullname', '$status_id', '$phonenumber', '$dateofbirth', '$address', '$gender', '$kname', '$krelationship', '$kphonenumber', '$kgender', '$kaddress', '$occupation', '$past_obsterics', '$sexual_history', '$past_disease', '$family_disease','$past_surgery','$medical_history', NOW(),'$hospital_plan','$family_card_id')") or die (mysqli_error($conn));

			mysqli_query($conn,"INSERT INTO `family_card_tab`(`family_card_id`) VALUES('$family_card_id')") or die (mysqli_error($conn));
		}
	
		echo json_encode(array("check" => $check, "patient_id" => $patient_id));
		break;


		case 'create_family_card':
		
			$family_card_id = 'FAM';

			for ($i = 0; $i < 6; $i++) {
				$family_card_id .= rand(0, 9); // Concatenate a random digit between 0 and 9 to the family card ID
			
			}
		

			$check_query = mysqli_query($conn, "SELECT family_card_id FROM family_card_tab WHERE `family_card_id`='$family_card_id'");
			$check_query_count = mysqli_num_rows($check_query);

			if ($check_query_count > 0) {
				// If the generated family card ID already exists, keep generating a new one until a unique one is found
				do {
					$family_card_id = 'FAM';
					for ($i = 0; $i < 6; $i++) {
						$family_card_id .= rand(0, 9); // Concatenate a random digit between 0 and 9 to the family card ID
					}

					$check_query = mysqli_query($conn, "SELECT family_card_id FROM family_card_tab WHERE `family_card_id`='$family_card_id'");
					$check_query_count = mysqli_num_rows($check_query);
				} while ($check_query_count > 0);
			}

			// Output the generated (or re-generated) family card ID as JSON
			echo json_encode(array('result' => $family_card_id));



		break;
		
		case 'check_for_users':
			$family_card_id = $_POST['family_card_id'];
			$check_query = mysqli_query($conn, "SELECT COUNT(*) AS user_count FROM patient_tab WHERE `family_card_id`='$family_card_id'");
			
			if ($check_query) {
				$row = mysqli_fetch_assoc($check_query);
				$check_query_count = $row['user_count'];
			
				if ($check_query_count == 4) {
					$check = 4; // the card is saturated.
				} elseif ($check_query_count == 3) {
					$check = 3; // one user left.
				} elseif ($check_query_count == 2) {
					$check = 2; // 2 users left.
				} elseif ($check_query_count == 1) {
					$check = 1; // 1 user left.
				} else {
					$check = 0; // no users associated.
				}
			} else {
				// Query execution failed
				$check = -1; // Indicate error
			}
			
			echo json_encode(array('users' => $check));
			break;
		
		
		
	
	case 'add_patient2': 
		$wpatient_name = trim(strtoupper($_POST['wpatient_name']));
		// $email = $_POST['email'];
		$wphonenumber = $_POST['wphonenumber'];
		$wdob = $_POST['wdob'];
		$waddress = $_POST['waddress'];
		$gender = $_POST['gender'];
		
		$status_id= '1';

	

		
		$phonenumber_query = mysqli_query($conn, "SELECT * FROM walkin_patient_tab WHERE `wphonenumber`='$wphonenumber'");
		$check_query_count = mysqli_num_rows($phonenumber_query);
	
		if ($check_query_count > 0) {	
			$check = 0; // invalid phonenumber.
		} else {
			$check = 1;
	
			// get sequence
			$sequence = $callclass->_get_sequence_count($conn, 'wpat');
			$array = json_decode($sequence, true);
			$no = $array[0]['no'];
			$patient_id = 'wpat' . $no;
	
			mysqli_query($conn,"INSERT INTO `walkin_patient_tab`
			(`wpatient_id`, `wpatient_name`,`status_id`,  `wphonenumber`, `wdob`, `waddress`,`wgender`,`date`) VALUES 
			('$patient_id', '$wpatient_name', '$status_id', '$wphonenumber', '$wdob', '$waddress', '$gender',NOW())") or die (mysqli_error($conn));

			
		}
	
		echo json_encode(array("check" => $check, "patient_id" => $patient_id));
		break;


		case 'update_profile_pix2':
			$passport = $_POST['walkin_in_section_capturedImage'];
			$datetime = date("Ymdhi");
			$patient_id = $_POST['id']; // Corrected variable name
		
			$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png", "PNG", "GIF");
			$extension = pathinfo($passport, PATHINFO_EXTENSION);
		
			if (in_array($extension, $allowedExts)) {
				$user_array = $callclass->_get_walkin_patient_details($conn, $patient_id);
				$u_array = json_decode($user_array, true);
				$db_passport = $u_array[0]['wpassport'];
		
				if ($db_passport != '') {
					unlink("../../uploaded_files/profile_pix/walkin_patient" . $db_passport);
				}
		
				$temp_file_basename = basename($_FILES["walkin_in_section_capturedImage"]["tmp_name"]);
		
				// $passport = $datetime . '_' . $passport;
				move_uploaded_file($_FILES["walkin_in_section_capturedImage"]["tmp_name"], "../../uploaded_files/profile_pix/walkin_patient" . $passport);
		
				mysqli_query($conn, "UPDATE walkin_patient_tab SET wpassport='$passport' WHERE wpatient_id='$patient_id'") or die ("cannot update patient_tab");
			} else {
				echo "Invalid file format";
			}
			break;


			case 'transfer_to_nurse':
				// Retrieve data from POST request
				$reason = $_POST['reason'];
				$patient_name = $_POST['patient_name'];
				$patient_id = $_POST['patient_id'];
				$staff_id = $_POST['staff_id']; // Assuming staff_id is needed for reference
			
				// Get the appointment ID sequence
				$sequence = $callclass->_get_sequence_count($conn, 'APP');
				$array = json_decode($sequence, true);
				$no = $array[0]['no'];
				$appointment_id = 'APP' . $no;
			
				// Define the appointment status ID (assuming it's passed or predefined)
				$appointment_status_id = 1; // Replace with the actual value if needed
			
				// Prepare the SQL INSERT query
				$sql = "INSERT INTO nurse_appointment_tab 
						(nurse_appointment_id, patient_id, patient_name, reason, time, nurse_appointment_status_id, staff_id) 
						VALUES (?, ?, ?, ?, NOW(), ?, ?)"; // Use NOW() for the current timestamp
			
				// Prepare the statement
				$stmt = $conn->prepare($sql);
			
				// Bind the parameters ('ssssii' -> string, string, string, string, integer, string)
				$stmt->bind_param('ssssis', $appointment_id, $patient_id, $patient_name, $reason, $appointment_status_id, $staff_id);
			
				// Execute the query
				if ($stmt->execute()) {
					$response['success'] = true;
					$response['message'] = "Patient transferred to nurse successfully.";
				} else {
					$response['success'] = false;
					$response['message'] = "Error transferring patient: " . $stmt->error;
				}
			
				// Return the response as JSON
				echo json_encode($response);
			
				break;
			
			

	
	
		



		}
 	?>