<?php include 'backend/config/connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_landingpage.css">
    <link href="frontend/awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script>

    <title>FRIDDA</title>
</head>
<body>
<?php $page = 'login' ?>

    <!--HTML-->
    <div id="preloader">

    </div>
    <!-- <div class="content-container"> -->
        <nav class="navbar">
            <div class="logo">
                <h1>MOUNT TECH SOLUTION</h1>
            </div>
                <!-- <button class="btn" id="getting-started-btn">Getting Started</button> -->
                 </nav>
                <main>
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
                </main>

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