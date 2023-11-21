<?php include 'backend/config/connection.php'?>



<?php
if($s_staff_id!=''&& $page = 'receptionist_dash'){
?>
    <script>
	window.parent(location="frontend/receptionist/index.php");
	</script>
<?php }?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_landingpage.css">
    <link href="frontend/awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <script src="js/scripts.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script>

    <title>FRIDDA</title>
</head>
<body>
<?php $page = 'login' ?>

    <!--HTML-->
    <div id="preloader">

    </div>
    <div class="content-container">
    <div class="index-container">
        <nav class="navbar">
            <div class="logo">
                <h1>HOSPITAL MANAGEMENT SYSTEM</h1>
            </div>
                <!-- <button class="btn" id="getting-started-btn">Getting Started</button> -->
                 </nav>
                <main>
                     <h1 style="font-size: 2.3rem; line-height: 3.2rem;">Your Journey to Better  <br/> <span style="border: 2px solid rgb(255, 255, 255); padding: 0.4rem; border-radius: 6px;">Health Start Here</span></h1>
                     <p style="  color: #fff;
                     font-size: 1.5rem;
                     padding: 2rem 0;">We work as a team to make the life <br/>of our patients wonderful.<br>Make yourself useful</p>
                     <div class="login-container">
                        <div class="flexs-container">
                        <div class="sections-container">
                            <h2>For Doctors</h2>
                            <p>Doctors can login here</p>
                            <button class="btn-doctor" onclick="open_doctor_login_form()">Login as a Doctors</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Nurse</h2>
                            <p>Nurse can login here</p>
                            <button class="btn-nurse" onclick="open_nurse_login_form()">Login as a Nurse</button>
                        </div>
                    </div>
                    <div class="flexs-container">
                        <div class="sections-container">
                            <h2>For Receptionist</h2>
                            <p>Receptionist can login here</p>
                            <button class="btn-receptionist" onclick="open_recep_login_form()">Login as a Receptionist</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Lap Scientist</h2>
                            <p>Lab Scientist can login here</p>
                            <button class="btn-lab" onclick="open_lab_login_form()">Login as a Lab Scientist</button>
                        </div>
                    </div>
                    
                     </div>
                     <div class="sections-container">
                        <h2>For Super Admin</h2>
                        <p>Super Admin can login here</p>
                        <button class="btn-lab" onclick="log_in()">Super Admin</button>
                    </div>
                </main>
            </div>

           <div id="doctor-container"></div>
           <div id="nurse-container"></div>
           <div id="recep-container"></div>
           <div id="lab-container"></div>
        <div class="overlay hidden"></div>
    </div>
<!--Animation-->
    <div class="loading-overlay"></div>
      </div>
  
        <!--Script-->
        <script src="js/index_landingpage.js"></script>
</body>
</html>