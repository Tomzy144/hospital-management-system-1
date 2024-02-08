<?php include 'backend/config/connection.php'?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include 'meta.php'?>
<title><?php echo $thename?>  | Administrative Login </title>   
<meta name="keywords" content="Admin - <?php echo $thename?>" />
<meta name="description" content="Administrative Login <?php echo $thename?>"/>
</head>











<body>
<?php $page = 'login' ?>
<!-- <div class="preloader_background">
<div id="preloader">

    </div> -->
</div>
    
        <nav class="navbar">
            <div class="logo">
            <!-- <img width="200px" height="200px" src="Frontend/Images/Mount_Tech_Logo-removebg-preview.png" alt=""> -->
            </div>
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
                        <div class="sections-container">
                            <h2>For Radiography</h2>
                            <p>Radiologist can login here</p>
                            <button class="btn-radiography" onclick="open_radiologist_login_form()">Login as a Radiologist</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Emergency Manager</h2>
                            <p>Emergency Manager can login here</p>
                            <button class="btn-emergency_manager" onclick="open_emergency_manager_login_form()">Login as a Emergency Manager</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Intensive Care Unit </h2>
                            <p> Intensive Care Unit Manager can login here</p>
                            <button class="btn-nurse" onclick="open_emergency_manager_login_form()">Login as a  Intensive Care Unit Manager</button>
                        </div>
                    </div>
                    <div class="flexs-container">
                        <div class="sections-container">
                            <h2>For Health Records and Information</h2>
                            <p>Health Records and Information can login here</p>
                            <button class="btn-receptionist" onclick="open_recep_login_form()">Login as a Health Records and Information</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Matarnity</h2>
                            <p>Matarnity can login here</p>
                            <button class="btn-martanity" onclick="open_martanity_login_form()">Login as a Martanity</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Accounting</h2>
                            <p>Account Manager can login here</p>
                            <button class="btn-account_manager" onclick="open_account_manager_login_form()">Login as a Account Manager</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Pharmacist</h2>
                            <p>Pharmacist can login here</p>
                            <button class="btn-pharmacist" onclick="open_pharmacist_login_form()">Login as a Pharmacist</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Post Anesthesia Unit</h2>
                            <p>Post Anesthesia Unit Manager can login here</p>
                            <button class="btn-pharmacist" onclick="open_pharmacist_login_form()">Login as a Post Anesthesia Unit Manager</button>
                        </div>
                    </div>
                    <div class="flexs-container">
                        <div class="sections-container">
                            <h2>For Staff Manager</h2>
                            <p>Staff Manager can login here</p>
                            <button class="btn-staff_manager" onclick="open_staff_manager_login_form()">Login as a Staff Manager</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Surgical Suite Manager</h2>
                            <p>Surgical Suite Manager can login here</p>
                            <button class="btn-surgical_suite" onclick="open_surgical_suite_manager_login_form()">Login as a Surgical Suite Manager</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Lap Scientist</h2>
                            <p>Lab Scientist can login here</p>
                            <button class="btn-lab" onclick="open_lab_login_form()">Login as a Lab Scientist</button>
                        </div>
                        <div class="sections-container">
                            <h2>For Morgue Manager</h2>
                            <p>Morgue Manager can login here</p>
                            <button class="btn-lab" onclick="open_morgue_manager_login_form()">Login as a Morgue Manager</button>
                        </div>
                    </div>
                     </div>
                     <div class="sections-container">
                        <h2>For Super Admin</h2>
                        <p>Super Admin can login here</p>
                        <button class="btn-lab" onclick="log_in()">Super Admin</button>
                    </div>
                </main>

           <div id="doctor-container"></div>
           <div id="nurse-container"></div>
           <div id="recep-container"></div>
           <div id="lab-container"></div>
           <div id="staff_manager-container"></div>
           <div id="martanity-container"></div>
           <div id="radiologist-container"></div>
           <div id="account_manager-container"></div>
           <div id="surgical_suite_manager-container"></div>
           <div id="emergency_manager-container"></div>
           <div id="pharmacist-container"></div>
           <div id="morgue_manager-container"></div>
        <div class="overlay hidden"></div>
    </div>
<!--Animation-->
    <div class="loading-overlay"></div>
      </div>
  
        <!--Script-->
        <!-- <script src="js/index_landingpage.js"></script> -->
</body>
</html>