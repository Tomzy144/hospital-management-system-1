<?php include '../../backend/config/connection.php';?>
<?php include '../../config/doctor-session-validation.php';?>



<?php
$doctor_id = $_POST['doctor_id'];
?>

<?php    
$fetch_doctor_profile = $callclass->_get_doctor_details($conn, $s_doctor_id);
$doctor_profile_array = json_decode($fetch_doctor_profile, true);
$fullname = $doctor_profile_array[0]['fullname'];
$email = $doctor_profile_array[0]['email'];
$phonenumber = $doctor_profile_array[0]['phonenumber'];
// $role_id= $doctor_profile_array[0]['role_id'];
$status_id = $doctor_profile_array[0]['status_id'];
$date = $doctor_profile_array[0]['date'];
$last_login = $doctor_profile_array[0]['last_login'];
$passport = $doctor_profile_array[0]["passport"];
    
$fetch_status = $callclass->_get_status_details($conn, $status_id);
$status_array = json_decode($fetch_status, true);
$status_name = $status_array[0]['status_name'];
?>

<?php 
$page = "doctor_dash"; // Assign the value "doctor_dash" to the $page variable
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
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
    <nav class="navbar">
        <div class="logo">
            <span style="font-size:2rem; color:#fff;">Doctor Dashboard</span>
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
        <button onclick="patient_list()">PATIENT LIST</button>
        <button onclick="appoitment()">APPOINTMENT</button>
    </div>
    </div>
    <script>
   
        const patient_list = ()=>{
            let url = "patients_list.php";
            window.parent(location = (url));
        }
        const appoitment = ()=>{
            let url = "appoitment.php";
            window.parent(location = (url));
        }

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

    </script>
</body>
</html>

