<?php include '../../backend/config/connection.php';?>
<?php include '../../backend/dashboardconfig/session-validation.php';?>




<?php
 $staff_id= $_POST['staff_id'];
?>





<?php    
    $fetch_staff_profile=$callclass->_get_user_details($conn, $s_staff_id);
    $staff_profile_array = json_decode($fetch_staff_profile, true);
    $fullname= $staff_profile_array[0]['fullname'];
    $email= $staff_profile_array[0]['email'];
    $phonenumber= $staff_profile_array[0]['phonenumber'];
   // $role_id= $staff_profile_array[0]['role_id'];
    $status_id= $staff_profile_array[0]['status_id'];
    $date= $staff_profile_array[0]['date'];
    $last_login= $staff_profile_array[0]['last_login'];
   $passport = $staff_profile_array[0]["passport"];
    
        
    $fetch_status=$callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    $status_name= $status_array[0]['status_name'];
   
?>
 
<?php $page === "receptionist_dash"?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <h1>Receptionist Dashboard</h1>
        </div>
             </nav>
    <div class="container-dashboard">
        <button onclick="patientForm()">PATIENT ADMISSION FORM</button>
        <button onclick="AppoimentBooking()">BOOKING APPOINTMENT SITTER</button>
    </div>
    <script>
        const patientForm = function(){
            let url = 'patient-registration-form/patients-registration-form.html';
            window.parent(location = (url));
        }
        const AppoimentBooking = function(){
            let url = 'appointment-booker/appointment.html';
            window.parent(location = (url));
        }
    </script>
</body>
</html>

