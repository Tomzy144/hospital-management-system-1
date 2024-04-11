<?php include '../backend/config/connection.php';?>
<?php include '../config/nurse-session-validation.php';?>


<?php
$nurse_id = $_POST['nurse_id'];
?>

    

<?php    

$fetch_nurse_profile = $callclass->_get_nurse_details($conn, $s_nurse_id);
$nurse_profile_array = json_decode($fetch_nurse_profile, true);
$fullname = $nurse_profile_array[0]['fullname'];
$email = $nurse_profile_array[0]['email'];
$phonenumber = $nurse_profile_array[0]['phonenumber'];
// $role_id= $nurse_profile_array[0]['role_id'];
$status_id = $nurse_profile_array[0]['status_id'];
$date = $nurse_profile_array[0]['date'];
$last_login = $nurse_profile_array[0]['last_login'];
$passport = $nurse_profile_array[0]["passport"]; 
$fetch_status = $callclass->_get_status_details($conn, $status_id);
$status_array = json_decode($fetch_status, true);
$status_name = $status_array[0]['status_name'];
?>

<?php 
$page = "nurse_dash"; // Assign the value "nurse_dash" to the $page variable
?>



<?php 
    


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    ?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href='awesome-font/css/font-awesome.min.css'> -
    <link rel="stylesheet" href="style/icons-1.10.2/font/bootstrap-icons.css">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --> -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $thename?> | Nurse Dashboard </title>
    <meta name="keywords" content="Admin - <?php echo $thename?>" />
    <meta name="description" content="Administrative Login <?php echo $thename?>"/>
    <?php include 'meta.php'?>
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
            <button class="hide" id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
            <i class="bi bi-justify-left" id="show_sidebar" onclick="show_sidebar()"></i>
            </div>
            <div class="section2">
                    <div class="notification_div">
                        <i class="bi bi-person-fill" id="notification_icon">
                            <div class="notification1">9</div>
                        </i>
                        <i class="bi bi-bell-fill" id="notification_icon">
                        <div class="notification2">15</div>
                        </i>
                    </div>
                <div class="profile">
                    <div class="profile_account hide">
                        <img id="image_profile_account" src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                        <h4><?php echo $fullname ?></h4>
                        <button class="btn_submit">Upload Image</button>
                        <span>change password</span>
                    </div>
                    <div class="image">
                        <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                        <div class="active"></div>
                    </div> 
                    <span><?php echo $fullname ?></span>
                    <i class="bi bi-caret-down-fill" id="icon-drop" onClick="click_icon_for_profile()"></i>
                </div>
            </div>
        </div>
        <div class="sidebar responsive">
            <div class="sidebar_contents">
            </div>
            <div class="flex_sidebar_icon">
            <i class="bi bi-x-square-fill"  id="sidebar_close" onclick="close_sidebar()"></i>
                <i class="bi bi-calendar-date-fill" id="sidebar_icon" onClick="back_to_appoitment_list()">
                &nbsp;&nbsp;<span>Appoitments</span>
                </i>
                <i class="bi bi-pencil-square" id="sidebar_icon"  onClick="show_profile_list()">
                &nbsp;&nbsp;<span>Patients Vitals</span>
                </i>
                <i class=" bi-box-arrow-right" id="sidebar_icon" >
                &nbsp;&nbsp; <span>Log Out</span>
                </i>
            </div>
        </div>
    </div>
                 <!----APPOITMENT SECTION-->
                 <div class="appoitment_section">
            <div class="appoitment_contents">
                <div class="head_section">
                <span>APPOITMENT DETAILS</span>
                <div class="appoitment_input_control">
                <i class="bi bi-search" id="search-icon"></i>
                    <input type="text" placeholder="Search here" class="appoitment_input">
                </div>
                </div>
                    <div class="body_sec">
                        <table>
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>PASSPORT</td>
                                    <td>Patient Name</td>
                                    <td>Patient ID</td>
                                    <td>Date</td>
                                    <td>Time</td>
                                    <td>Accept</td>
                                    <td>Reject</td>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="image">
                                            <img width="70px" height="70px" src="../Images/WHITE.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Sandra Macdonald</td>
                                        <td>PAT001</td>
                                        <td>22-02-2024</td>
                                        <td>2:30PM</td>
                                        <td>
                                            <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
                                        </td>
                                        <td>
                                            <button class="reject-btn">Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="image">
                                        <img width="70px" height="70px" src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                                        
                                        </div>
                                    </td>
                                        <td>Lincoln Brown</td>
                                        <td>PAT002</td>
                                        <td>22-02-2024</td>
                                        <td>2:30PM</td>
                                    <td>
                                        <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
                                    </td>
                                    <td>
                                        <button class="reject-btn">Reject</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<!--PERSONAL PROFILE VITAL AFTER CLICKING ON THE ACCEPT BUTTON--->
<div class="personal_profile_vital hide">
  <div class="patient_container">
      <div class="patient_info">
      <div class="patient_profile">
      <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="" />
      <div class="patient_name_id">
          <span>Precious Joseph</span>
          <span>  PATOOO1</span>
          </div>
          </div>
          <button class= "btn_ward" onClick="ward()">Ward</button>
              <!--Wards--->
              <div class="ward_container hidden">
              <label for="ward">Change Ward</label>
              <select name="ward" id="ward">
                  <option value="ward_select"></option>
                  <option value="ward_1">Ward 1</option>
                  <option value="ward_2">Ward 2</option>
                  <option value="ward_3">Ward 3</option>
                  <option value="ward_4">Ward 4</option>
                  <option value="ward_5">Ward 5</option>
                  <option value="ward_6">Ward 6</option>
              </select>
          </div>

          <button class= "btn_ward_round" onClick="ward_round()">Ward Round</button>
          <div class="ward_round_container hidden">
              <label for="stage">Stage</label>
              <select name="stage" id="stage">
                  <option value="no_selection"></option>
                  <option value="am">Am</option>
                  <option value="am">Pm</option>
              </select>
              <label for="note">WR Note</label>
              <textarea name="note" id="note" cols="30" rows="10"></textarea>
          </div>

          <button class= "btn_vital" onClick="patientVital()">Vital Input</button>
          <div class="vitals_input hidden">
          <form action="">
              <div class="form_control">
    <label for="temperature">Temperature</label>
    <input type="text">
    </div>
          
              <div class="form_control">
    <label for="b/p">B/P(mm/HG)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="pulse">Pulse(bp/m)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="respiratory">Respiratory(cm)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="weight">Weight(kg)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="height">Height(cm)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="intake">Intake(m/s)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="output">Output(m/s)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="spo2">SPO2(%)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="bmi">BMI</label>
    <input type="text">
    </div>
           <div class="form_control">
    <label for="body_fat">Body fat(%)</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="muscle_mass">Muscle mass</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="musc">MUAC</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="resting_metabolism">Restinng metabolism</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="body_age">Body age</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="bmi_for_age">BMI for age</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="visceral_fat">Visceral fat</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="head_circumference">Head circumference</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="wfa">WFA</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="waist_circumference">Waist Circumference</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="hip_circumference">Hip Circumference</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="w_hr">W-HR</label>
    <input type="text">
    </form>
</div>
</div>
<button class="btn_submit">Save all</button>
<button class="btn_submit" onClick="show_appoitment_section()">Transfer</button>
</div>
</div>
</div>
 

    <div id="patient_list-container">
        <div class="new_vital hide">
            <div class="search-container">
                <div class="search-bar">
                    <div id="select" onClick="select()">
                        <p id="selectText"></p>
                        <i class="fa fa-sort-desc"></i>
                        
                        <ul id="list">
                            <li class="options" id="0" onclick="showTable('All')">All</li>
                            <li class="options" id="1" onclick="showTable('Inpatients')">Inpatients</li>
                            <li class="options" id="2" onclick="showTable('Outpatients')">Outpatients</li>
                            <li class="options" id="7"  onclick="showTable('Todayinputs')">Today inputs</li>
                            <!-- Add more options here -->
                        </ul>
                    </div>
                    <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
                    <i class="fa fa-search"  id="submit-input"></i>
                </div> 
            </div>
            <div class="all_patient_container">
                <div class="flex_container">
                    <div class="each_container">
                        <div class="number_container">
                            1.
                        </div>
                    <div class="all_patient_info">
                        <div class="patient_profile">
                            <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="" />
                            <div class="patient_name_id">
                                <span>Precious Joseph</span>
                                <span>  PATOOO1</span>
                            </div>
                        </div>
                        <button class= "btn_ward" onClick="ward_all_section()">Ward</button>
                            <!--Wards--->
                        <div class="all_patient_ward_container hidden">
                            <label for="ward">Change Ward</label>
                            <select name="ward" id="ward">
                                <option value="ward_select"></option>
                                <option value="ward_1">Ward 1</option>
                                <option value="ward_2">Ward 2</option>
                                <option value="ward_3">Ward 3</option>
                                <option value="ward_4">Ward 4</option>
                                <option value="ward_5">Ward 5</option>
                                <option value="ward_6">Ward 6</option>
                            </select>
                        </div>

                        <button class= "btn_ward_round" onClick="ward_round_all_section()">Ward Round</button>
                        <div class="all_patient_ward_round_container hidden">
                            <label for="stage">Stage</label>
                            <select name="stage" id="stage">
                                <option value="no_selection"></option>
                                <option value="am">Am</option>
                                <option value="am">Pm</option>
                            </select>
                            <label for="note">WR Note</label>
                            <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        </div>

                        <button class= "btn_vital" onClick="patientVital_all_section()">Vital Input</button>
                        <div class="all_patient_vitals_input hidden">
                            <form action="">
                                <div class="form_control">
                                    <label for="temperature">Temperature</label>
                                    <input type="text">
                                </div>
                                        
                                <div class="form_control">
                                    <label for="b/p">B/P(mm/HG)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="pulse">Pulse(bp/m)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="respiratory">Respiratory(cm)</label>
                                    <input type="text">
                                </div>
                                            
                                <div class="form_control">
                                    <label for="weight">Weight(kg)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="height">Height(cm)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="intake">Intake(m/s)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="output">Output(m/s)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="spo2">SPO2(%)</label>
                                    <input type="text">
                                </div>
                                            
                                <div class="form_control">
                                    <label for="bmi">BMI</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <lacenter; for="body_fat">Body fat(%)</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="muscle_mass">Muscle mass</label>
                                    <input type="text">
                                </div>
                                        
                                <div class="form_control">
                                    <label for="musc">MUAC</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="resting_metabolism">Restinng metabolism</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="body_age">Body age</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="bmi_for_age">BMI for age</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="visceral_fat">Visceral fat</label>
                                    <input type="text">
                                </div>
                                        
                                <div class="form_control">
                                    <label for="head_circumference">Head circumference</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="wfa">WFA</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="waist_circumference">Waist Circumference</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="hip_circumference">Hip Circumference</label>
                                    <input type="text">
                                </div>

                                <div class="form_control">
                                    <label for="w_hr">W-HR</label>
                                    <input type="text">
                                </div>

                            </form>
                        </div>
                        <button class="btn_submit">Save All</button>
                    </div>
                </div>
                <div class="each_container">
                    <div class="number_container">
                        2.
                    </div>
                    <div class="all_patient_info">
                    <div class="patient_profile">
                    <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="" />
                    <div class="patient_name_id">
                        <span>Esther Patrick Joseph</span>
                        <span>  PATOOO2</span>
                        </div>
                        </div>
                        <button class= "btn_ward" onClick="ward_all_section()">Ward</button>
                            <!--Wards--->
                            <div class="all_patient_ward_container hidden">
                            <label for="ward">Change Ward</label>
                            <select name="ward" id="ward">
                                <option value="ward_select"></option>
                                <option value="ward_1">Ward 1</option>
                                <option value="ward_2">Ward 2</option>
                                <option value="ward_3">Ward 3</option>
                                <option value="ward_4">Ward 4</option>
                                <option value="ward_5">Ward 5</option>
                                <option value="ward_6">Ward 6</option>
                            </select>
                        </div>

                        <button class= "btn_ward_round" onClick="ward_round_all_section()">Ward Round</button>
                        <div class="all_patient_ward_round_container hidden">
                            <label for="stage">Stage</label>
                            <select name="stage" id="stage">
                                <option value="no_selection"></option>
                                <option value="am">Am</option>
                                <option value="am">Pm</option>
                            </select>
                            <label for="note">WR Note</label>
                            <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        </div>

                        <button class= "btn_vital" onClick="patientVital_all_section()">Vital Input</button>
                        <div class="all_patient_vitals_input hidden">
                        <form action="">
                            <div class="form_control">
                <label for="temperature">Temperature</label>
                <input type="text">
                </div>
                        
                            <div class="form_control">
                <label for="b/p">B/P(mm/HG)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="pulse">Pulse(bp/m)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="respiratory">Respiratory(cm)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="weight">Weight(kg)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="height">Height(cm)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="intake">Intake(m/s)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="output">Output(m/s)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="spo2">SPO2(%)</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="bmi">BMI</label>
                <input type="text">
                </div>
                        <div class="form_control">
                <lacenter; for="body_fat">Body fat(%)</label>
                <input type="text">
                </div>
                <div class="form_control">
                <label for="muscle_mass">Muscle mass</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="musc">MUAC</label>
                <input type="text">
                </div>
                <div class="form_control">
                <label for="resting_metabolism">Restinng metabolism</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="body_age">Body age</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="bmi_for_age">BMI for age</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="visceral_fat">Visceral fat</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="head_circumference">Head circumference</label>
                <input type="text">
                </div>
                <div class="form_control">
                <label for="wfa">WFA</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="waist_circumference">Waist Circumference</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="hip_circumference">Hip Circumference</label>
                <input type="text">
                </div>
                            <div class="form_control">
                <label for="w_hr">W-HR</label>
                <input type="text">
                </div>
                </form>
        </div>
        <button class="btn_submit">Save All</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>

    <div class="appoitment_container hide">
    <section class="doctor_roles_name hide">
                    <i class="bi bi-x-lg" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
                <div class="appoitment-calender">
                    <div class="doc_roles">
                <label for="roles">Doctor Role:</label>
<select id="roles" >
<option  onclick="getDoctors()">Select</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="surgeon">Surgeon</option>
    <option value="psychiatrist">Psychiatrist:</option>
    <option value="family_medicine">Family Medicine</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="anaesthesiology">Anaesthesiology</option>
    <option value="rheumatologist">Rheumatologist</option>
    <option value="endocrinologist">Endocrinologist</option>
    <option value="nephrologist">Nephrologist</option>
    <option value="neurologist">Neurologist</option>
    <option value="pediatrician">Pediatrician</option>                
    <option value="urologist">Urologist</option>
    <option value="radiologist">Radiologist</option>
    <option value="dentist">Dentist</option>
    <option value="pulmonologist">Pulmonologist</option>
    <option value="podiatristian">Podiatristian</option>
    <option value="emergency_physician">Emergency Physician</option>
    <option value="anaesthesiologist">Anaesthesiologist</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="oncologist">Oncologist</option>
    <option value="gastroenterologist">Gastroenterologist</option>
    <option value="ophthanlmologist">Ophthanlmologist</option>
    <option value="cardology">Cardology</option>
    <option value="allergist">Allergist</option>
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option> 
    <!-- Add more role options as needed -->
</select>
<label for="doctors">Select Doctor:</label>
<select id="doctors">
    <!-- Doctors for the selected role will be dynamically added here -->
</select>
<button id="continue" type="submit" onClick="submitRoles()" >Continue</button>
</div>
    <div class="appoitment_form hidden">
<div class="calendar">
            <div class="month">
                <i class="fa fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fa fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"> </div>
        </div>
        <div class="form_appoitment">
            <h3>Fill in the neccessary Information</h3>
            <form action="" class="form">
                <div class="_flexs">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Selected Date</label>
                    <div class="selected_date">03-01-2024</div>
                </div>
                <div class="form_control">
                    <label for="">Selected Time</label>
                    <input type="time">
                </div>
                <div class="form_control">
                    <label for="">Request Type</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                </div>
            </div>
            <button class="btn_submit_appoitment">Submit</button>
            </form>
        </div>
        </div>
                </section>
            <section class="appoitments">
            <div class="cards_container">
            <div class="cards">
                <div class="profile">
                    <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Rita Glass</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
                <div class="profile">
                    <img src="../Images/513d2ccb77e948b687079bc2d6f42661.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Mary Walter</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Cathrine Emmanuel</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Romeo Patrick</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            </div>
            </section>
            </div>
    <script src="js/script.js"></script>
    <!-- <script src="js/section.js"></script> -->
</body>
</html>

