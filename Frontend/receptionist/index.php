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
    <script src="../../js/scripts.js"></script>
    <script src="../../js/jquery-v3.6.1.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">

   
</head>
<body onload="getWards()">

<script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
    <!----SIDEBAR AND  NAVBAR-->
   <div class="navbar">
        <div class="section1">
        <button id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
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
               <div class="sidebar_contents" onClick="homepage_section()">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="fa fa-envelope" id="icon"></i>
                <i class="fa fa-file" id="icon"></i>
                <i class="fa fa-hospital-o" id="icon"></i>
                <i class="fa fa-edit (alias)" id="icon" onClick="click_vital_button()" ></i>
                <!-- <i class="fa fa-sign-out" id="icon"></i> -->
                <i class="fa fa-sign-out"  id="icon" onclick="document.getElementById('logoutform').submit();"></i>
                <form method="post" action="../../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
            </div>
        </div>
        <!----LANDING PAGE OF THIS SECTION--->
   <div class="contents">
    <div class="button_container">
        <button onclick="open_patient_form()">PATIENT ADMISSION FORM</button>
        <!-- <button onclick="appoimentBooking()">CHECKUP</button> -->
        <button onclick="checkup_page()">CHECKUP </button>
        <!-- <button onclick="surgicalChemistry()">PROCEDURE LIST</button> -->
        <button onclick="walkin_patient_form()">WALK-IN PATIENT BOOKING</button>
        </div>
    </div>
            <div class="checkup_section hide">

            </div>
            <div class="walkin_patient_section hide">
            <div class="form-container">
        <h1>WalkIn Admission Form</h1>
        <div class="walkin_in_section_upload_image">
             <video id="walkin_in_section_videoElement" width="400" height="300" autoplay></video>
            <i class="fa fa-plus" id="walkin_in_section_capture_image" onclick="walkin_patient_openCamera()"></i>
            <canvas id="walkin_in_section_canvasElement" style="display: none;"></canvas>
            <img id="walkin_in_section_capturedImage" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="walkin_in_section_btn_re_capture hide"  onclick="walkin_patient_retakePicture()">Recapture</div>
        <div class="walkin_in_section_btn_capture hide" onClick="walkin_patient_takePicture()">Capture</div>
        </div>
        <form action="">
            <h3 style="text-align: left; margin-top: 1rem;">Personal Details</h3>
            <div class="form_control_group">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <input type="text"  id="fullname" autocapitalize="off" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="dob">
        </div>
        </div>
        <div class="form_control_group">
            <div class="form-control">
            <label for="home_address">Home Address</label>
            <input type="text" id="address" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phonenumber">
        </div>
    </div>

    <label>Gender</label>
    <div class="form-display2">
    <label for="checkbox">
        <input type="checkbox" class="walkinin_check1"  name="gender" value="Male">
        Male
      </label>
      <label for="checkbox">
        <input type="checkbox" class="walkinin_check2"  name="gender" value="Female">
        Female
      </label>
    </div>
    <h3 style="text-align: left; margin-top: 1rem;">Emergency Details</h3>
    <div class="form_control_group">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <input type="text"  id="fullname" autocapitalize="off" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="date_of_birth">RelationShip</label>
            <input type="text" id="relationship">
        </div>
        </div>
        <div class="form_control_group">
            <div class="form-control">
            <label for="home_address">Phone Number</label>
            <input type="text" id="address" autocomplete="off">
        </div>
    </div>
    <button type="button" class="btn-submit">Submit</button>
    </form>
    </div>
            </div>
    <!----SURGICAL BOOKING BASE ON THE DOCTOR INPUT--->
  <div class="surgical_booking hide">
    <div class="table_container">
        <table>
            <thead>
                       <th>Doctor Name</th>
                        <th>Doctor ID & Profile</th>
                        <th>Patient Name</th>
                        <th>Patient ID & Profile</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Procedure</th>
                        <th>Phone Number</th>
                        <th>Cost</th>
                        <th>Status</th>
            </thead>
            <tbody>
                    <td>Doc. Esther Udo</td>
                    <td>Doc.0001</td>
                    <td>Gift John</td>
                    <td>Doc.002</td>
                    <td>12-02-2023</td>
                    <td>5.00</td>
                    <td><span>Head Surgery</span></td>
                    <td>08177829333</td>
                    <td>#20,000.00</td>
                    <td><div class="circle_red"></div></td>
                </tbody>
            <tbody>
                    <td>Doc. Esther Udo</td>
                    <td>Doc.0001 <img src=../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt=""></img></td>
                    <td>Gift John</td>
                    <td>Doc.002</td>
                    <td>12-02-2023</td>
                    <td>5.00</td>
                    <td><span>Head Surgery</span></td>
                    <td>08177829333</td>
                    <td>#20,000.00</td>
                    <td><div class="circle_yellow"></div></td>
                </tbody>
            <tbody>
                    <td>Doc. Esther Udo</td>
                    <td>Doc.0001</td>
                    <td>Gift John</td>
                    <td>Doc.002</td>
                    <td>12-02-2023</td>
                    <td>5.00</td>
                    <td><span>Head Surgery</span></td>
                    <td>08177829333</td>
                    <td>#20,000.00</td>
                    <td><div class="circle_green"></div></td>
                </tbody>
            <tbody>
                    <td>Doc. Esther Udo</td>
                    <td>Doc.0001</td>
                    <td>Gift John</td>
                    <td>Doc.002</td>
                    <td>12-02-2023</td>
                    <td>5.00</td>
                    <td><span>Head Surgery</span></td>
                    <td>08177829333</td>
                    <td>#20,000.00</td>
                    <td><div class="circle_red"></div></td>
                </tbody>
        </table>
    </div>
  </div>
  <!---APPOITMENT SECTION -->
<div class="appoitment_section hide">
            <div class="appoitment_container">
                <section class="doctor_roles_name hide">
                    <i class="fa fa-times" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
                <div class="appoitment-calender">
                    <div class="doc_roles">
                <label for="roles">Doctor Role:</label>
<select id="roles" >
<option  onclick="getDoctors()">Select</option>
    <!-- <option value="cardiologist">Cardiologist</option>
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
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option>  -->
    <!-- Add more role options as needed-->
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
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" placeholder="john">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" placeholder="id001">
                </div>
                <div class="form_control">
                    <label for="">Selected Date</label>
                    <div class="selected_date">03-01-2024</div>
                </div>
                <div class="form_control">
                    <label for="">Selected Time</label>
                    <input type="time">
                </div>
                <div class="form_control_text_area">
                    <label for="">Request Type</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="btn_submit_appoitment">Submit</button>
                </div>
            </form>
        </div>
        </div>
                </section>
            <section class="appoitments">
            <h1>Appoitments</h1>
            <div class="cards_container">
            <div class="cards">
                <div class="profile">
                    <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Rita John</h3>
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
                    <h3>Dr. Mary Asuquo</h3>
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
                    <h3>Dr. Patience Emmanuel</h3>
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
                    <h3>Dr. Kingsley Patrick</h3>
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
        </div>
      >
<!----PATIENT FORM -->
    <div class="patients_form_container hide">
    <div class="form-container">
        <h1>Patient Admission Form</h1>
        <div class="upload_image">
             <video id="videoElement" width="400" height="300" autoplay></video>
            <i class="fa fa-plus" id="capture_image" onclick="openCamera()"></i>
            <canvas id="canvasElement" style="display: none;"></canvas>
            <img id="capturedImage" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture hide"  onclick="retakePicture()">Recapture</div>
        <div class="btn_capture hide" onClick="takePicture()">Capture</div>
        </div>
        <form action="">
            <!-- <h2>Fill in the neccesary information</h2> -->
            <div class="form-section current-section" id="section1">
            <h3 style="text-align: left; margin-top: 1rem;">Personal Details</h3>
            <div class="form_control_group">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <!-- <i class="fa fa-user" class="form_icon"></i> -->
            <input type="text"  id="fullname" autocapitalize="off" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <!-- <i class="fa fa-calendar" class="form_icon"></i> -->
            <input type="date" id="dob">
        </div>
        </div>
        <div class="form_control_group">
            <div class="form-control">
                <!-- <i class="fa fa-home" class="form_icon"></i> -->
            <label for="home_address">Home Address</label>
            <input type="text" id="address" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <!-- <i class="fa fa-phone" class="form_icon"></i> -->
            <input type="text" id="phonenumber">
        </div>
        </div>
        <div class="form-control">
        <label for="hmo">Hospital Plans</label>
            <select name="" id="select_box">
                <option value=""></option>
                <option value="family_plan" onClick="family_plan()">Family Plan</option>
                <option value="">Personal</option>
                <option value="">Hygeia</option>
                <option value="">Novo Africa Healthcare</option>
                <option value="">NHIS</option>
                <option value="">Biz Ben School</option>
                <option value="">Novo Health Africa</option>
                <option value="">Online Clinic</option>
                <option value="">Roding</option>
                <option value="">Clearline</option>
                <option value="">United Health</option>
                <option value="">Infinity</option>
                <option value="">KnownTech</option>
                <option value="">Sterling</option>
                <option value="">Avon</option>
                <option value="">Wellness</option>
                <option value="">Scan</option>
                <option value="">Reliance</option>
                <option value="">Lab Patients</option>
                <option value="">Scan</option>
                <option value="">Axiom</option>
                <option value="">Clearline HMO</option>
                <option value="">Century Medicaid</option>
            </select>
        </div>
        <div class="family_plan hide">
        <label for="">Do you have any Registered Family Member?</label>
        <div class="form-display2">
        <label for="checkbox">
        <input type="checkbox" name="yes" value="Yes" id="family_check_true">
            Yes
        </label>
        <label for="checkbox">
        <input type="checkbox" name="no" value="No" id="family_check_false">
            No
        </label>
        </div>
        </div>
        <div class="input_family_id_number hide">
            <label for="">Insert Id number for Verification</label>
            <input type="text">
            <button type="button" class="btn_verify">Verify</button>
        </div>

    <label>Gender</label>
    <div class="form-display2">
       
    <label for="checkbox">
        <input type="checkbox" id="gender1" name="gender" value="Male" class='check1'>
        Male
      </label>
      <label for="checkbox">
        <input type="checkbox" id="gender2" name="gender" value="Female" class='check2'>
        Female
      </label>
    </div>
    <!-- <label>What kind  of patient Category are you?</label>
<div class="form-display2">
<label for="radio">
    <input type="checkbox" id="category1" name="gender" value="Inpatients"  class='check_category1'>
    Inpatients
  </label>
<label for="radio">
    <input type="checkbox" id="category2" name="gender" value="Outpatients"  class='check_category2'>
    Outpatients
  </label>
<label for="radio">
    <input type="checkbox" id="category3" name="gender" value="Waiting_List"  class='check_category3'>
    Waiting List
  </label>
</div> -->
<!-- 
<div class="form-display2">
<label for="radio">
    <input type="checkbox"  id="category4"name="gender" value="Appointment"  class='check_category4'>
    Appointment
  </label>
<label for="radio">
    <input type="checkbox" id="category5" name="gender" value="Test"  class='check_category5'>
    Test
  </label>
<label for="radio">
    <input type="checkbox" id="category6" name="gender" value="ANC"  class='check_category6'>
    ANC
  </label>
</div> -->
<div class="ward hidden">
        <select id="wards" onclick="getBeds();">
    <option>Choose a Ward</option>
    <!-- <option value="ward1">Ward 1</option>
    <option value="ward2">Ward 2</option>
    <option value="ward3">Ward 3</option>     ///coming from database now 
    <option value="ward4">Ward 4</option>
    <option value="ward5">Ward 5</option>
    <option value="ward6">Ward 6</option>
    <option value="ward7">Ward 7</option> -->
</select>
        <select id="beds">
    <!-- <option>Choose a Bed</option> -->
    <!-- <option value="bed1">Bed1</option>
    <option value="bed2">Bed 2</option>
    <option value="bed3">Bed 3</option>           ////////same
    <option value="bed4">Bed 4</option>
    <option value="bed5">Bed 5</option>
    <option value="bed6">Bed 6</option>
    <option value="bed7">Bed 7</option> -->
</select>
        </div>
    <button type="button" class="btn-next">Next</button>
    </div>
    <div class="form-section current-section" id="section3">
    <h3 style="text-align: left; margin-top: 1rem;">Next of Kins</h3>
    <div class="form_control_group">
        <div class="form-control">
        <label for="full_name" class="form_icon">Full Name</label>
        <!-- <i class="fa fa-user"></i> -->
        <input type="text"  id="kname" autocapitalize="off" autocomplete="off">
    </div>

        <div class="form-control">
        <label for="relationship">RelationShip</label>
        <!-- <i class="fa fa-users" class="form_icon"></i> -->
        <input type="text"  id="krelationship">
    </div>
    </div>
    <div class="form_control_group">
        <div class="form-control">
            <!-- <i class="fa fa-home" class="form_icon"></i> -->
        <label for="home_address">Home Address</label>
        <input type="text"  id="kaddress"  autocomplete="off">
    </div>

        <div class="form-control">
        <label for="phone_number">Phone Number</label>
        <!-- <i class="fa fa-phone" class="form_icon"></i> -->
        <input type="text"  id="kphonenumber">
    </div>
    </div>
<label>Gender</label>
<div class="form-display2">
<label for="radio">
    <input type="checkbox" id="kgender1" name="gender" value="Female"  class='check4'>
    Female
  </label>
<label for="radio">
    <input type="checkbox"  id="kgender2" name="gender" value="Male"  class='check3'>
    Male
  </label>

</div>


        <button type="button" class="btn-back_back">Back</button>
<button type="button" class="btn-next_next">Next</button>
    </div>
 <!--Section 2-->
 <div class="form-section current-section" id="section2">
<h3 style="text-align: left; margin-top: 1rem;">Social History</h3>
    <div class="form-control">
    <label for="Occupation">Occupation</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="occupation"  autocapitalize="off" autofocus autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past Obsterics</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_obsterics" autocapitalize="off" autofocus autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Medical History</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="medical_history" autocapitalize="off" autofocus autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Sexual History</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="sexual_history" autocapitalize="off" autofocus autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past Disease</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_disease" autocapitalize="off" autofocus autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Family Disease</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="family_disease" autocapitalize="off" autofocus autocomplete="off">
</div>
    <div class="form-control">
    <label for="Occupation">Past Surgery</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_surgery" autocapitalize="off" autofocus autocomplete="off">
</div>
<button type="button" class="btn-back">Back</button>
<button type="button" id ="proceed-btn" onclick="_add_patient();" class="btn-submit">Submit</button>
 </div>
        </form>
        </div>
    </div>
    </div>
    <script src="receptionist.js"></script>
    <script>
       
    </script>
</body>
</html>

