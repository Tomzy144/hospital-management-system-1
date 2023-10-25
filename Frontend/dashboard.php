<?php include '../backend/config/connection.php';?>
<?php include '../backend/dashboardconfig/session-validation.php';?>

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
    <link rel="stylesheet" href="dashboard.css">
     <!-- font aweasome link-->
     <!--Clould Font-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!--Tomiwa font-->
<link href="awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <title>Hospital management System</title>
</head>

<body>
<div class="navbar" > 
    <div class="toggle" id="open-toggle">
        <i class="fas fa-bars"></i>
        <!-- <i class="fa fa-heart"></i> -->

    </div>
    <div class="div-logo">
        <a href="#">Hospital management System</a>
    </div>
    
        <form method="post" action="../backend/dashboardconfig/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>    
          
            <button class="signIn"  onclick="document.getElementById('logoutform').submit();">SignOut</button>
        </form>
</div>

<nav class="sidebar" id="sidebar" >
    <div class="menu-content">  
        <div class="close-toggle" id="close-toggle">
        <i class="fas fa-times"></i>  
    </div>
        <ul class="menu-items">
            <li class="items">
                <i class="fas fa-user"></i>
                <a href="">Patients</a>
            </li>
            <li class="items">
                <i class="fas fa-user-md"></i>
                <a href="">Doctor</a>
            </li>
            <li class="items">
                <i class="fas fa-user-nurse"></i>
                <a href="">Nurse</a>
            </li>
            <li class="items">
                <i class="fas fa-prescription-bottle"></i>
                <a href="">Phamacy</a>
            </li>
            <li class="items">
                <i class="fas fa-flask"></i>
                <a href="">Labouratory</a>
            </li>
            <li class="items">
                <i class="fas fa-clipboard-list"></i> 
                <a href="">Precedures</a>
            </li>
            <li class="items">
               <i class="fas fa-money-bill"></i> 
                <a href="">Finance</a>
            </li>
            <li class="items">
                <i class="fas fa-user-tie"></i>
                <a href="">Receptionist</a>
            </li>
            <li class="items">
                <i class="fas fa-stethoscope"></i>
                <a href="">Physiotherapy</a>
            </li>
            <li class="items">
                <i class="fas fa-users"></i> 
                <a href="">Staffs</a>
            </li>
            <li class="items">
                <i class="fas fa-bed"></i>
                <a href="">Wards & Beds</a>
            </li>
        </ul>
    </div>
</nav>

<main>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="flex-cards">
            <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-user"  id="card-icons"></i>
            </div>
                <h2>Patients</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-user-md"  id="card-icons"></i>
            </div>
                <h2>Doctor</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-user-nurse" id="card-icons"></i>
            </div>
                <h2>Nurse</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-prescription-bottle"  id="card-icons"></i>
            </div>
                <h2>Phamacy</h2>
        </div>
    </a>
    </div>
        <div class="flex-cards">
     <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-flask" id="card-icons"></i>
            </div>
                <h2>Labouratory</h2>
        </div>
    </a>
        <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-clipboard-list" id="card-icons"></i> 
            </div>
                <h2>Precedures</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-money-bill" id="card-icons"></i> 
            </div>
                <h2>Finance</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-user-tie" id="card-icons"></i>
            </div>
                <h2>Receptionist</h2>
        </div>
    </a>
    </div>
        <div class="flex-cards">
     <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-stethoscope" id="card-icons"></i>
            </div>
                <h2>Physiotherapy</h2>
        </div>
    </a>
        <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-users" id="card-icons"></i> 
            </div>
                <h2>Staffs</h2>
        </div>
    </a>
    <a href="#">
        <div class="cards">
            <div class="card-icons">
                <i class="fas fa-bed" id="card-icons"></i>
            </div>
                <h2>Wards & Beds</h2>
        </div>
    </a>
      
    </div>
    </div>
</main>


       
  

    <script src="dashboard.js"></script>
</body>
</html>



<!--Font awesome Linking -->
    <!-- <i class="fas fa-home"></i>
    <i class="fas fa-heart"></i>
    <i class="fas fa-star"></i> -->

    <!-- You can customize icons as needed -->
    <!-- <i class="fas fa-smile fa-2x"></i>
    <i class="fas fa-camera fa-lg"></i> -->