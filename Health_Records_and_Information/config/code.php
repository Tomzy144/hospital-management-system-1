
<?php include '../../backend/config/connection.php';?>

<?php require_once('session-validation.php');?>

<?php 
	$action=$_POST['action'];
	  switch ($action){

	case 'get_page':
		$page=$_POST['page'];
		// require_once ('page-content.php');
	break;










case 'update_profile_pix': // Upload Profile Pix for first time login
		$passport=$_FILES['capturedImage']['name'];
		$datetime=date("Ymdhi");
		
		$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png","PNG","GIF");
		$extension = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);
		
		if (in_array($extension, $allowedExts)){
			
			$user_array=$callclass->_get_staff_details($conn, $s_staff_id);
			$u_array = json_decode($user_array, true);
			$db_passport= $u_array[0]['patient_passport'];
			if($db_passport==''){
				//// do nothing;
			}else{
				unlink("../uploaded_files/profile_pix/" .$db_passport);
			}
			
		$passport = $datetime.'_'.$passport;
		move_uploaded_file($_FILES["capturedImage"]["tmp_name"],"../uploaded_files/profile_pix/" .$passport);

		}
		
		mysqli_query($conn,"UPDATE pateint_tab SET patient_passport='$passport' WHERE patient_id='$pateint_id'") or die ("cannot update pateint_tab");

	break;

    } ?>