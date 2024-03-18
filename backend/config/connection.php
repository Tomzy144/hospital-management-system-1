<?php
ini_set('session.use_only_cookies', 1);
session_start();
session_regenerate_id();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
header("Acces-Control-Allow-Origin: *");/// to call API and clear the error from the web-page//
?>

<?php 
$website_url= "http://localhost/hospital-management-system"
?>

<?php
$thename='Hospital Management System'; 
?>

<?php
    // Database Configuration //
    $HOST_NAME = "localhost";
    $SERVER_USERNAME = "root";
    $SERVER_PASSWORD = "";
    $DATABASE_NAME="hms_db";

    // Create Connection To Database//
    $conn = mysqli_connect($HOST_NAME, $SERVER_USERNAME, $SERVER_PASSWORD) or die("connection error");
    mysqli_select_db($conn,$DATABASE_NAME);
?>


<?php
// session variables//
    $s_staff_id=$_SESSION['staff_id']; 
?>




<?php
////////// login session
if ($_POST && !empty($_POST['email'])) {
$_SESSION['email'] = $_POST['email'];
}
$email=$_SESSION['email'];
if ($_POST && !empty($_POST['password'])) {
$_SESSION['password'] = $_POST['password'];

}
$spass=($_SESSION['password']);
?>

<?php 
//////for doctor

// session variables//
    $s_doctor_id=$_SESSION['doctor_id']; 



////////// login session
if ($_POST && !empty($_POST['doctor_email'])) {
    $_SESSION['doctor_email'] = $_POST['doctor_email'];
    }
    $doctor_email=$_SESSION['doctor_email'];
    if ($_POST && !empty($_POST['doctor_password'])) {
    $_SESSION['doctor_password'] = $_POST['doctor_password'];
    
    }
    $doctor_password=($_SESSION['doctor_password']);


?>



<?php 
//////for lab

// session variables//
    $s_lab_scientist_id=$_SESSION['lab_scientist_id']; 



////////// login session
if ($_POST && !empty($_POST['lab_scientist_email'])) {
    $_SESSION['lab_scientist_email'] = $_POST['lab_scientist_email'];
    }
    $lab_scientist_email=$_SESSION['lab_scientist_email'];
    if ($_POST && !empty($_POST['lab_scientist_password'])) {
    $_SESSION['lab_scientist_password'] = $_POST['lab_scientist_password'];
    
    }
    $lab_scientist_password=($_SESSION['lab_scientist_password']);


?>


























<?php
class allClass{
/////////////////////////////////////////

function _get_role_details($conn, $role_id){
    $query=mysqli_query($conn, "SELECT * FROM role_tab WHERE role_id='$role_id'");    
    $fetch=mysqli_fetch_array($query);
    $role_name=$fetch['role_name'];

    return '[{"role_name":"'.$role_name.'"}]';
}

/////////////////////////////////////////
// function _get_status_details($conn, $status_id){
//     $query=mysqli_query($conn, "SELECT * FROM status_tab WHERE status_id='$status_id'");    
//     $fetch=mysqli_fetch_array($query);
//     $status_name=$fetch['status_name'];

//     return '[{"status_name":"'.$status_name.'"}]';
// }
function _get_status_details($conn, $status_id) {
    $query = mysqli_query($conn, "SELECT status_name FROM status_tab WHERE status_id = '$status_id'");
    
    if ($fetch = mysqli_fetch_assoc($query)) {
        // Fetch the result as an associative array

        // Encode the associative array as a JSON string
        return json_encode($fetch);
    } else {
        // Handle the case where no results were found for the given status_id.
        return json_encode(array("error" => "Status not found"));
    }
}



// function _get_category_details($conn, $category_id) {
//     $query = mysqli_query($conn, "SELECT category_name FROM category_tab WHERE category_id = '$category_id'");

//     if ($fetch = mysqli_fetch_assoc($query)) {
//         // Fetch the result as an associative array
//         return json_encode($fetch);
//     } else {
//         // Handle the case where no results were found for the given category_id.
//         // header('Content-Type: application/json');
//         echo json_encode(array("error" => "Category not found"));
//         exit; // Terminate the script after sending the error response
//     }
// }





function _get_user_details($conn, $s_staff_id){
    $query=mysqli_query($conn, "SELECT * FROM staff_tab WHERE staff_id='$s_staff_id'");    
    $fetch=mysqli_fetch_array($query);
    $staff_id=$fetch['staff_id'];
    $fullname=$fetch['fullname'];
    $email=$fetch['email'];
    $phonenumber=$fetch['phonenumber'];
    $role_id=$fetch['role_id'];
    $status_id=$fetch['status_id'];
    $passport=$fetch['passport'];
    $date=$fetch['date'];
    $last_login=$fetch['last_login'];

    return '[{"staff_id":"'.$staff_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}
//////////////////////////////////////////

function _get_doctor_details($conn, $s_doctor_id){
    $query=mysqli_query($conn, "SELECT * FROM doctor_tab WHERE doctor_id='$s_doctor_id'");    
    $fetch=mysqli_fetch_array($query);
    $doctor_id=$fetch['doctor_id'];
    $fullname=$fetch['fullname'];
    $email=$fetch['email'];
    $phonenumber=$fetch['phonenumber'];
    $role_id=$fetch['role_id'];
    $status_id=$fetch['status_id'];
    $passport=$fetch['passport'];
    $date=$fetch['date'];
    $last_login=$fetch['last_login'];

    return '[{"doctor_id":"'.$doctor_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}
	



//////////////////////////////////////////////////////////////////////////////////////////////////////
function _get_staff_details($conn, $staff_id){
		$query=mysqli_query($conn, "SELECT * FROM staff_tab WHERE staff_id='$staff_id'");
   	 	$fetch=mysqli_fetch_array($query);
        $staff_id=$fetch['staff_id'];
        $fullname=$fetch['fullname'];
        $email=$fetch['email'];
        $phonenumber=$fetch['phonenumber'];
        $role_id=$fetch['role_id'];
        $status_id=$fetch['status_id'];
        $passport=$fetch['passport'];
        $otp=$fetch['otp'];
		$date=$fetch['date'];
		$last_login=$fetch['last_login'];
       

    return '[{"staff_id":"'.$staff_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","otp":"'.$otp.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}



function _get_staff_profile_details($conn, $staff_id){
    $query=mysqli_query($conn, "SELECT * FROM staff_tab WHERE staff_id='$staff_id'");
    $fetch=mysqli_fetch_array($query);
        $staff_id=$fetch['staff_id'];
        $fullname=$fetch['fullname'];
        $email=$fetch['email'];
        $phonenumber=$fetch['phonenumber'];
        $role_id=$fetch['role_id'];
        $status_id=$fetch['status_id'];
        $passport=$fetch['passport'];
		$date=$fetch['date'];
		$last_login=$fetch['last_login'];

    return '[{"staff_id":"'.$staff_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}



function _get_patient_profile_details($conn, $patient_id){
    $query=mysqli_query($conn, "SELECT * FROM patient WHERE patient_id='$patient_id'");
    $fetch=mysqli_fetch_array($query);
        $patient_id=$fetch['patient_id'];
        $fullname=$fetch['fullname'];
        $email=$fetch['email'];
        $phonenumber=$fetch['phonenumber'];
        $role_id=$fetch['role_id'];
        $status_id=$fetch['status_id'];
        $category_id=$fetch['category_id'];
        $passport=$fetch['passport'];
		$date=$fetch['date'];
		$last_login=$fetch['last_login'];

    return '[{"patient_id":"'.$patient_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","category_id":"'.$category_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}


/////////////////////////////////////////
function _get_sequence_count($conn, $item){
	$count=mysqli_fetch_array(mysqli_query($conn,"SELECT counter_value FROM counter_tab WHERE counter_id = '$item' FOR UPDATE"));
	 $num=$count[0]+1;
	 mysqli_query($conn,"UPDATE `counter_tab` SET `counter_value` = '$num' WHERE counter_id = '$item'")or die (mysqli_error($conn));
	 if ($num<10){$no='00'.$num;}elseif($num>=10 && $num<100){$no='0'.$num;}else{$no=$num;}
	 return '[{"num":"'.$num.'","no":"'.$no.'"}]';
}






function _get_total_count($conn, $pcount) {
    // Query the database to get the counter_value
    $queryResult = mysqli_query($conn, "SELECT * FROM `counter_tab` WHERE `counter_id`  = 'PAT'");//$pcount
    
    if (!$queryResult) {
        return '{"error": "Database query error"}';
    }
    
    $pquery = mysqli_fetch_assoc($queryResult);

    if ($pquery) {
        
        $counterValue = $pquery['counter_value'];

      
        return '{"counter_id": "' . $counterValue . '"}';
    } else {
       
        return '{"error": "Counter not found"}';
    }
}













// function _get_patient_details($conn, $patient_id){
//     $patient_id ="pat0001";
//     $query=mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");    
//     $fetch=mysqli_fetch_array($query);
//     $sn=$fetch['sn'];
//     $patient_id=$fetch['patient_id'];
//     $fullname=$fetch['fullname'];
//     $email=$fetch['email'];
//     $phonenumber=$fetch['phonenumber'];
//     $role_id=$fetch['role_id'];
//     $status_id=$fetch['status_id'];
//     $passport=$fetch['passport'];
//     $date=$fetch['date'];
//     $last_login=$fetch['last_login'];

//     return '[{"patient_id":"'.$patient_id.'","fullname":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'","sn":"'.$sn.'"}]';
// }
	
function _get_patient_details($conn, $patient_id) {
    // Query to check if the patient_id exists
//    $patient_id = "pat0001";
  $_POST['patient_id'] = $patient_id;
    $checkQuery = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");
    
    if ($checkResult = mysqli_fetch_assoc($checkQuery)) {
        // If a patient with the given ID exists, fetch their details
        $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");
        
        if ($fetch = mysqli_fetch_assoc($query)) {
            return json_encode($fetch);
        } else {
            return json_encode(array("error" => "Patient details not found"));
        }
    } else {
        return json_encode(array("error" => "Patient not found"));
    }
}


function _get_walkin_patient_details($conn, $patient_id) {
    // Query to check if the patient_id exists
//    $patient_id = "pat0001";
  $_POST['patient_id'] = $patient_id;
    $checkQuery = mysqli_query($conn, "SELECT * FROM walkin_patient_tab WHERE wpatient_id='$patient_id'");
    
    if ($checkResult = mysqli_fetch_assoc($checkQuery)) {
        // If a patient with the given ID exists, fetch their details
        $query = mysqli_query($conn, "SELECT * FROM walkin_patient_tab WHERE wpatient_id='$patient_id'");
        
        if ($fetch = mysqli_fetch_assoc($query)) {
            return json_encode($fetch);
        } else {
            return json_encode(array("error" => "Patient details not found"));
        }
    } else {
        return json_encode(array("error" => "Patient not found"));
    }
}




// function _get_patient_details($conn, $patient_id) {
//     // Sanitize the input to prevent SQL injection (if not already done)
//     $patient_id = mysqli_real_escape_string($conn, $patient_id);

//     // Query to retrieve patient details based on the provided patient_id
//     $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");

//     if ($query) {
//         if ($fetch = mysqli_fetch_assoc($query)) {
//             return json_encode($fetch);
//         } else {
//             return json_encode(array("error" => "Patient not found"));
//         }
//     } else {
//         return json_encode(array("error" => "Query failed"));
//     }
// }


function _get_appointment_details($conn, $s_doctor_id){
    // Query the database to select all fields from the appointment_tab table where doctor_id matches $s_doctor_id
    $query = mysqli_query($conn, "SELECT * FROM appointment_tab WHERE doctor_id='$s_doctor_id'");    
    
    // Fetch the first row from the result set
    $fetch = mysqli_fetch_array($query);
    
    // Extract individual fields from the fetched row
    $doctor_id = $fetch['doctor_id'];
    $patient_name = $fetch['patient_name'];
    $email = $fetch['email'];
    $phonenumber = $fetch['phonenumber'];
    $role_id = $fetch['role_id'];
    $status_id = $fetch['status_id'];
    $passport = $fetch['passport'];
    $appointment_date = $fetch['appointment_date'];
    $appointment_reason = $fetch['reason'];

    // Create and return a JSON-formatted string containing the extracted data
    return '[{"doctor_id":"'.$doctor_id.'","patient_name":"'.$patient_name.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","appointment_date":"'.$appointment_date.'","reason":"'.$appointment_reason.'"}]';
}




function search_patient($conn, $total_patient) {
    $query=mysqli_query($conn, "SELECT * FROM patient_tab");    
    $fetch=mysqli_fetch_array($query);
    $total_patient=$fetch['role_name'];

    return '[{"totalp":"'.$total_patient.'"}]';
}


function _get_lab_scientist_details($conn, $s_lab_scientist_id){
    $query=mysqli_query($conn, "SELECT * FROM lab_scientist_tab WHERE lab_scientist_id='$s_lab_scientist_id'");    
    $fetch=mysqli_fetch_array($query);
    $lab_scientist_id=$fetch['lab_scientist_id'];
    $fullname=$fetch['lab_scientist_name'];
    $email=$fetch['email'];
    $phonenumber=$fetch['phonenumber'];
    $role_id=$fetch['role_id'];
    $status_id=$fetch['status_id'];
    $passport=$fetch['passport'];
    $date=$fetch['date'];
    $last_login=$fetch['last_login'];

    return '[{"lab_scientist_id":"'.$lab_scientist_id.'","lab_scientist_name":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}
	

function _get_family_card_details($conn,$s_family_card_id){
    $query=mysqli_query($conn, "SELECT fullname FROM patient_tab WHERE family_card_id ='$s_family_card_id'");    
    $fetch=mysqli_fetch_array($query);
    $fullname=$fetch['patient_name'];
    $email=$fetch['email'];
    $phonenumber=$fetch['phonenumber'];
    $role_id=$fetch['role_id'];
    $status_id=$fetch['status_id'];
    $passport=$fetch['passport'];
    $date=$fetch['date'];
    $last_login=$fetch['last_login'];

    return '[{"lab_scientist_name":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
}

// function _check_family_card_details($conn,$s_family_card_id){
//     $query=mysqli_query($conn, "SELECT * FROM family_card_tab WHERE family_card_id ='$s_family_card_id'");    
//     $fetch=mysqli_fetch_array($query);
   

//     return '[{"lab_scientist_name":"'.$fullname.'","email":"'.$email.'","phonenumber":"'.$phonenumber.'","role_id":"'.$role_id.'","status_id":"'.$status_id.'","passport":"'.$passport.'","date":"'.$date.'","last_login":"'.$last_login.'"}]';
// }






}//end of class
$callclass=new allClass();


//$array = $callclass->_get_setup_backend_settings_detail($conn, 'BK_ID001',$staff_id);