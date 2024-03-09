
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
			(`patient_id`, `fullname`,`status_id`,  `phonenumber`, `dateofbirth`, `address`,`gender`,`kname`,`krelationship`,`kphonenumber`,`kgender`,`kaddress`,`occupation`,`past_obsterics`,`sexual_history`,`past_disease`,`family_disease`,`past_surgery`,`medical_history`,`date`,`hospital_card_id`) VALUES 
			('$patient_id', '$fullname', '$status_id', '$phonenumber', '$dateofbirth', '$address', '$gender', '$kname', '$krelationship', '$kphonenumber', '$kgender', '$kaddress', '$occupation', '$past_obsterics', '$sexual_history', '$past_disease', '$family_disease','$past_surgery','$medical_history', NOW(),'$hospital_plan')") or die (mysqli_error($conn));
		}
	
		echo json_encode(array("check" => $check, "patient_id" => $patient_id));
		break;
	




    
    } ?>




	