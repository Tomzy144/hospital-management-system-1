<?php include '../../backend/config/connection.php';?>
<?php include '../../backend/dashboardconfig/session-validation.php';?>
<?php include '../../backend/config/user-validation.php';?>




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
    <link rel="stylesheet" href='../awesome-font/css/font-awesome.min.css'>

   
</head>
<body>
<script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
   <div class="navbar">
        <div class="section1">
            
        </div>
        <div class="section2">
            <div class="icons">
          <i class="fa fa-user" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="fa fa-bell" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/imaculater.jpg" alt="">
            <h4>Immaculater Odu</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/imaculater.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Immaculater Odu Peter</span>
            <i class="fa fa-caret-down" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="fa fa-envelope" id="icon"></i>
                <i class="fa fa-file" id="icon"></i>
                <i class="fa fa-hospital-o" id="icon"></i>
                <i class="fa fa-edit (alias)" id="icon" onClick="click_vital_button()" ></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
   <div class="contents">
    <div class="button_container">
        <button onclick="patientForm()">PATIENT ADMISSION FORM</button>
        <button onclick="appoimentBooking()">BOOKING APPOINTMENT SITTER</button>
        <button onclick="surgicalChemistry()">PROCEDURE LIST</button>
        </div>
    </div>
    <script>
        const patientForm = function(){
            let url = 'patient-registration-form/';
            window.parent(location = (url));
        }
        const appoimentBooking = function(){
            let url = 'appointment-booker/';
            window.parent(location = (url));
        }

        const surgicalChemistry = function(){
            let url = 'surgical_chemistry(surgery-booking)/index.php';
            window.parent(location = (url));
        }

        const patient_list = ()=>{
            let url = "page/patients-lists.php";
            window.parent(location = (url));
        }


   //PROFILE IMAGE
   const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};
    </script>
</body>
</html>

