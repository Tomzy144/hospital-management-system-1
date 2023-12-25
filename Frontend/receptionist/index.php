<?php include '../../backend/config/connection.php';?>





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

    <nav class="navbar">

    <button id='btn' onClick="patient_list()">Patient Lists</button>
        <div class="logo">
            <span style="font-size:2rem; color:#fff;">Receptionist Dashboard</span>
        </div>
    <form method="post" action="./../../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>    
              <i class="fa fa-sign-out" id="sign-out"onclick="document.getElementById('logoutform').submit();"></i>
        </form>
             </nav>
             <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-calendar-check-o active'></i>
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
   </div>
   <div class="contents">
    <div class="container-dashboard">
        <button onclick="patientForm()">PATIENT ADMISSION FORM</button>
        <button onclick="appoimentBooking()">BOOKING APPOINTMENT SITTER</button>
        <button onclick="surgicalChemistry()">SURGICAL CHEMESTRY</button>
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
            let url = 'surgical chemistry(surgery-booking)/index.html';
            window.parent(location = (url));
        }

        const patient_list = ()=>{
            let url = "page/patients-lists.php";
            window.parent(location = (url));
        }
const addEvent  = document.getElementById("btn");
const show = document.querySelector(".drop-down")
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");


//Manipulate sidebar 
toggleOpen.addEventListener("click", function() {
    envelope.innerHTML = '  Chat';
    user.innerHTML =   '  Account';
    calender.innerHTML = '  Appoitment';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "none";
    toggleClose.style.display = "block";
})

toggleClose.addEventListener("click", function() {
    envelope.innerHTML = ' '
    user.innerHTML =   '  ';
    calender.innerHTML = '  ';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "block";
    toggleClose.style.display = "none";
    
})

addEvent.addEventListener("click", function(){
    show.classList.remove("hidden")

})
    </script>
</body>
</html>

