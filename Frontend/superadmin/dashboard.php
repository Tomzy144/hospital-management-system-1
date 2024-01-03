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
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
<!--Tomiwa font-->
<link href="../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <title>Hospital management System</title>



      <!-- <script>
        // Function to be executed when the user leaves the page
        window.onbeforeunload = function() {
            // Perform an AJAX request to notify the server
            // that the user is leaving the page
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'logout_script.php', false);
            xhr.send();
        };
    </script> -->
    <script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
</head>

<body>
<div class="navbar" > 
    <div class="toggle" id="open-toggle">
        <i class="fa fa-navicon (alias)"></i>

    </div>
    <div class="div-logo">
        <a href="#">Mount Tech Solution</a>
    </div>
    
        <form method="post" action="../../backend/dashboardconfig/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>    
          
            <button class="signIn"  onclick="document.getElementById('logoutform').submit();"><i class="fa fa-sign-out"></i></button>
        </form>
</div>
<div class="contents">
<nav class="sidebar" id="sidebar" >
    <div class="profile_container">
    <div class="profile"></div>
        <span>DOCTOR SAM</span>
        <span>ADMIN</span>
    </div>
    <div class="display_profile_container hide">
        <div class="flexs">
        <img src="../Images/doctor-offering-medical-teleconsultation.jpg" alt="">
        <!-- <h1>DOCTOR SAM</h1> -->
        <button class="profile_btn">UPLOAD PASSPORT</button>
        <span style ="cursor:pointer;">Change password</span>
        </div>
    </div>
        <ul class="menu-items">
            <li class="items" onClick='openPatientsList()'>
                <i class="fa fa-user" id="sidebar_icons"></i>
              <span class="lists hide">Patients</span> 
            </li>
            <li class="items" onClick='openDoctorPage()'>
            <i class="fa fa-user-md" id="sidebar_icons"></i>
               <span class="lists hide">Doctor</span> 
            </li>
            <li class="items" onClick='openNursePage()'>
                <i class="fa fa-user-md" id="sidebar_icons"></i>
                <span class="lists hide">Nurse</span>
            </li>
            <li class="items" onClick='openPharmacyPage()'>
                <i class="fa fa-plus-square" id="sidebar_icons"></i>
              <span class="lists hide">Phamacy</span>  
            </li>
            <li class="items" onClick='openLabPage()'>
                <i class="fa fa-flask" id="sidebar_icons"></i>
              <span class="lists hide">Labouratory</span>  
            </li>
            <li class="items" onClick='openPrecedurePage()'>
                <i class="fa fa-hospital-o" id="sidebar_icons"></i> 
               <span class="lists hide">Precedures</span> 
            </li>
            <li class="items"  onClick='openFinancePage()'>
               <i class="fa fa-money" id="sidebar_icons"></i> 
                <span class="lists hide">Finance</span>
            </li>
            <li class="items" onClick='openRecepPage()'>
                <i class="fa fa-user-circle-o" id="sidebar_icons"></i>
                <span class="lists hide">Receptionist</span>
            </li>
            <!-- <li class="items" onClick='openPhysiotherapyPage()'>
                <i class="fa fa-stethoscope" id="sidebar_icons"></i>
               <span class="lists hide">Physiotherapy</span> 
            </li> -->
            <li class="items" onClick='openStaffPage()'>
                <i class="fa fa-users" id="sidebar_icons"></i> 
                <span class="lists hide">Staffs</span>
            </li>
            <li class="items" onClick='openWardBed()'>
                <i class="fa fa-bed" id="sidebar_icons"></i>
                <span class="lists hide">Wards & Beds</span>
            </li>
            <li class="items"onClick="show_profile_upload()">
                <i class="fa fa-gear (alias)" id="sidebar_icons" ></i>
                <span class="lists hide">Account</span>
            </li>
        </ul>
</nav>
<main>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="flex_wrap">
        <div class="cards" onClick='openPatientsList()'>
            <div class="card-icons">
                <i class="fa fa-user"  id="card-icons"></i>
            </div>
                <h2>Patients</h2>
        </div>
        <div class="cards" onClick='openDoctorPage()'>
            <div class="card-icons">
                <i class="fa fa-user-md"  id="card-icons"></i>
            </div>
                <h2>Doctor</h2>
        </div>
        <div class="cards" onClick='openNursePage()'>
            <div class="card-icons">
                <i class="fa fa-user-md" id="card-icons"></i>
            </div>
                <h2>Nurse</h2>
        </div>
        <div class="cards" onClick='openPharmacyPage()'>
            <div class="card-icons">
                <i class="fa fa-plus-square "  id="card-icons"></i>
            </div>
                <h2>Phamacy</h2>
        </div>
        <div class="cards" onClick='openLabPage()'>
            <div class="card-icons">
                <i class="fa fa-flask" id="card-icons"></i>
            </div>
                <h2>Labouratory</h2>
        </div>
        <div class="cards" onClick='openPrecedurePage()'>
            <div class="card-icons">
                <i class="fa fa-hospital-o" id="card-icons"></i> 
            </div>
                <h2>Precedures</h2>
        </div>
        <div class="cards" onClick='openFinancePage()'>
            <div class="card-icons">
                <i class="fa fa-money " id="card-icons"></i> 
            </div>
                <h2>Finance</h2>
        </div>
        <div class="cards" onClick='openRecepPage()'>
            <div class="card-icons">
                <i class="fa fa-user-circle-o" id="card-icons"></i>
            </div>
                <h2>Receptionist</h2>
        </div>
        <!-- <div class="cards" onClick='openPhysiotherapyPage()'>
            <div class="card-icons">
                <i class="fa fa-stethoscope" id="card-icons"></i>
            </div>
                <h2>Physiotherapy</h2>
        </div> -->
        <div class="cards" onClick='openStaffPage()'>
            <div class="card-icons">
                <i class="fa fa-users" id="card-icons"></i> 
            </div>
                <h2>Staffs</h2>
        </div>
        <div class="cards" onClick='openWardBed()'>
            <div class="card-icons">
                <i class="fa fa-bed" id="card-icons"></i>
            </div>
                <h2>Wards & Beds</h2>
                </div>
    </div>
    </div>
</main>
</div>
    <script src="js/dashboard.js"></script>
</body>
</html>
