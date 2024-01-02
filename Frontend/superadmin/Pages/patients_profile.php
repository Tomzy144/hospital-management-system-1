<!-- ?php include '../../backend/config/connection.php'?> -->
<?php include '../../../backend/config/code.php'?>

<?php include '../../backend/dashboardconfig/session-validation.php';
include '../../../backend/config/search.php'?>



<?php


$patient_id = $_POST['patient_id'];


// $case == 'patient_profile_page';

// if (isset($_POST['patient_id'])) {
//     $patient_id = $_POST['patient_id'];
//     // Now you can use $patient_id in your PHP code

//     echo json_encode(array('patient_id' => $patient_id));
// } else {
//     $response = ['result' => 'error', 'message' => 'No patient_id received'];
//     echo json_encode($response);
// }





    
$fetch_patient_profile = $callclass->_get_patient_details($conn, $patient_id);

$patient_profile_array = json_decode($fetch_patient_profile, true);

if ($patient_profile_array) {
    $sn = $patient_profile_array['sn'];
    $fullname = $patient_profile_array['fullname'];
    $email = $patient_profile_array['email'];
    $gender = $patient_profile_array['gender'];
    $dateofbirth = $patient_profile_array['dateofbirth'];
    $address = $patient_profile_array['address'];
    $phonenumber = $patient_profile_array['phonenumber'];
    $status_id = $patient_profile_array['status_id'];
    $category_id = $patient_profile_array['category_id'];
    $date = $patient_profile_array['date'];
    $last_login = $patient_profile_array['last_login'];
    $passport = $patient_profile_array['passport'];
    ///next of kin
    $kname = $patient_profile_array['kname'];
    $kgender = $patient_profile_array['kgender'];
    $kphonenumber = $patient_profile_array['kphonenumber'];
    $krelationship = $patient_profile_array['krelationship'];
    $kaddress = $patient_profile_array['kaddress'];





    $occupation = $patient_profile_array['occupation'];
    $past_obsterics = $patient_profile_array['past_obsterics'];
    $medical_history = $patient_profile_array['medical_history'];
    $sexual_history = $patient_profile_array['sexual_history'];
    $past_disease = $patient_profile_array['past_disease'];
    $family_disease = $patient_profile_array['family_disease'];
    $past_surgery = $patient_profile_array['past_surgery'];

} else {
    $fullname=  "error";
    // Handle the case where the patient details were not found.
    // You might want to return an error message or take other appropriate action.
}

    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    if ($status_id) {
        $status_name = $status_array['status_name'];
    } else {
        // Handle the case where status details were not found.
        // You might want to return an error message or take other appropriate action.
    }




    // $fetch_category = $callclass->_get_category_details($conn, $category_id);

    // Check if the category details were successfully retrieved
    if ($fetch_category !== false) {
        $category_array = json_decode($fetch_category, true);
    
        // Check if category_name exists in the response
        if (isset($category_array['category_name'])) {
            $category_name = $category_array['category_name'];
        } else {
            // Handle the case where category_name was not found in the response.
            // You might want to return an error message or take other appropriate action.
        }
    } else {
        // Handle the case where category details were not found.
        // You might want to return an error message or take other appropriate action.
    }
 ?>


<!-- end of php declarations -->












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/patients-profile.css">
    <link href="../../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <script src ="js/patient.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script>

    <title>Patients Profiles</title>
</head>
<body>

   
            <div  class="patient-navbar">
                <i class="fa fa-long-arrow-left t" id='back-arrow-patientslist' onClick='backWardArrow()'></i>
                <h2>Patients Profile</h2>
            </div>
            <!--timer-->
            <div class="container-timer">
                <h3 class="timer-text">Ongoing Case Since</h3>
                <div class="timer-box-content">
                <div class="timer-box" id="timer">5</div>
                <div class="timer-box">22</div>
                <div class="timer-box">16</div>
                <div class="timer-box">23</div>
            </div>
            <h3 class="timer-text">Days Hours Mins Secs</h3>
        </div>
        </div>
        <div class="content">
            <div class="all_input">
        <div class="patient_info">
            <h3>Patient Personal Information</h3> 
             <i class="fa fa-plus" id="info_open"></i> 
             <i class="fa fa-minus" id="info_close"></i>
         </div>
         <div class="info-accordion info-hidden" id="info">
            <div style="display: flex; justify-content: center; align-items: center;">
             <i class="fa fa-user-circle-o"></i>
            <h2 style="color: black;">Bio Data</h2>
        </div>
            <div class="flex-info1">
                <h4 class="info">Full Name:</h4>
                <h4 class="info"><?php echo $fullname?> </h4>
            </div>
                <div class="flex-info1">
                    <h4 class="info">Gender:</h4>
                    <h4 class="info"><?php echo $gender?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Birth of Date:</h4>
                    <h4 class="info"><?php echo $dateofbirth?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Home Address:</h4>
                    <h4 class="info"><?php echo $address?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Phone Number:</h4>
                    <h4 class="info"><?php echo $phonenumber?></h4>
                </div><br>
                <h3 style="color: black;">Next of Kin</h3>
                <div class="flex-info1">
                    <h4 class="info">Full Name:</h4>
                    <h4 class="info"><?php echo $kname?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Gender:</h4>
                    <h4 class="info"><?php echo $kgender?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Home Address:</h4>
                    <h4 class="info"><?php echo $kaddress?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Phone Number:</h4>
                    <h4 class="info"><?php echo $kphonenumber?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">Relationship:</h4>
                    <h4 class="info"><?php echo $krelationship ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem;"> 
                    <i class="fa fa-history"></i> 
                <h2 style="color: black;">Social History</h2>
            </div>  
                <div class="flex-info1">
                    <h4 class="info">Present Occupation:</h4>
                    <h4 class="info"><?php echo $occupation ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-hdd-o "></i> 
                <h2 style="color: black;">Past Obsterics</h2>
            </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_obsterics ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-hospital-o"></i> 
                <h2 style="color: black;">Medical History</h2>
                </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $medical_history ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-user-circle"></i> 
                <h2 style="color: black;">Sexual History</h2>
                </div>
                
                <div class="flex-info1">
                    <h4 class="info"><?php echo $sexual_history ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-tachometer"></i> 
                <h2 style="color: black;">Past Disease</h2>
                </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_disease ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-tachometer"></i> 
                <h2 style="color: black;">Family Disease</h2>
                </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $family_disease ?></h4>
                </div>
                <hr style="color: rgb(245, 245, 244);"/>
                <div style="display: flex; justify-content: center; align-items: center; padding: 1rem"> 
                    <i class="fa fa-thermometer-0 (alias)"></i> 
                <h2 style="color: black;">Past Surgery</h2>
                </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_surgery ?></h4>
                </div>
</div>
</div>
        <script src ="js/patients-profile.js"></script>
</body>
</html>



