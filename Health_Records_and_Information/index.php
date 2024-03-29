<?php include '../backend/config/connection.php';?>
<?php include '../backend/dashboardconfig/session-validation.php';?>
<?php include '../backend/config/user-validation.php';?>




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












<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $thename?> | Health Records and Information Dashboard</title>
    <meta name="keywords" content="Admin - <?php echo $thename?>" />
    <meta name="description" content="Administrative Login <?php echo $thename?>"/>
    <?php include 'meta.php'?>
</head>

<body onload="ChooseSelectBox()">

    <script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
    
  <!--START OF SIDEBAR AND NAVBAR -->
   <div class="navbar">
        <div class="section1">
        <button id="btn_appoitment" onclick="book_appoitment()">Make an Appoitment</button>
        </div>
        <div class="section2">
            <div class="icons">
            <i class="bi bi-person-fill" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="bi bi-bell-fill" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url ?>/Images/imaculater.jpg" alt="">
            <h4><?php echo $fullname ?> </h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="<?php echo $website_url ?>/Images/imaculater.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span><?php echo $fullname?> </span>
            <i class="bi bi-caret-down-fill" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents" onClick="homepage_section()">
                <!-- <img width="80px" height="80px" src="<?php echo $website_url ?>/Images/Mount Tech Logo.jpg" alt="logo"> -->
                <h2>MOUNT TECH SOLUTIONS </h2>
               </div>
            <div class="sidebar_icons">
                <!-- <i class="bi bi-chat-dots-fill" id="icon">&nbsp;<span>Chat</span></i> -->
                <i class="fa-solid fa-bed"  id="icon" onclick="patient_admission_form_section()">&nbsp;<span>Patient Admission Form</span></i>
                <i class="fa-solid fa-person-walking-arrow-right"  id="icon" onclick="walkin_patient_form()">&nbsp;<span>Walkin Patient Admission Form</span></i>
                <i class="fa-solid fa-person-circle-check"  id="icon" onclick="checkup_form()">&nbsp;<span>Check Up</span></i>
            <i class="fa-solid fa-people-group"  id="icon" onclick="patient_list()">&nbsp;<span>Patient List</span></i>
            <i class="fa-solid fa-people-group"  id="icon" onclick="_walkin_patient_list()">&nbsp;<span>WalkIn Patient List</span></i>
                <i class="fa-solid fa-right-from-bracket"  id="icon" onclick="document.getElementById('logoutform').submit();">&nbsp;<span>Logout</span></i>
                <form method="post" action="../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
            </div>
        </div>
         <!--END OF SIDEBAR AND NAVBAR-->

         <!----ALERTS DIV-->
 <!--START OF ADMISSION FORM1-->
 <div class="overlay_div hide"></div>
    <div class="form_sections">
    <div class="alert_div hide" id='generating_id'></div>
    <div class="alert_div hide" id='generated_id'></div>
    <div class="alert_div hide" id='successful_registered'></div>
    <div class="alert_div hide" id='patient_id'></div>
               <!----START OF CHECKUP SECTION-->
               <div class="checkup_section hide">
               <i class="bi bi-x-lg close_icon" onclick="close_checkup_form()" ></i>
            <h2>Patient Check Up Form</h2>
            <div class="form-control">
                <label for="">Patient Name</label>
                <input type="text" name="" id="">
            </div>
            <div class="form-control">
            <label for="">Patient Id</label>
                <input type="text" name="" id="">
            </div>
            <button class ="btn-submit" id="authenticate" onclick="activateFingerPrint()">Fingerprint authentication</button>
            <div class="finger_print_div hide">
            <i class="bi bi-x-lg close_icon" onclick="deactivateFingerPrint()" ></i>
            <i class="bi bi-fingerprint print_icon" onclick="display_profile()"></i>
            </div> 
        </div>
        <!---END OF CHECKUP SECTION--->
    <div class="new_intake_admission_form">
    <div class="form-container">
        <h3>Patient Admission Form</h3>
        <form action="config/code.php?update_profile_pix" id="add_patient_pic" enctype="multipart/form-data" method="post">
            <div class="upload_image" action ="config/code?=update_profile_pix" title="update profile picture">
                <video id="videoElement" width="400" height="300" autoplay></video>
                <i class="bi bi-plus" id="capture_image" onclick="openCamera()"></i>
                <canvas id="canvasElement" style="display: none;"></canvas>

                <?php if ($passport==''){?>
                    <img src="<?php echo $website_url; ?>/uploaded_files/profile_pix/patient/19374.jpg" id="capturedImage" style="display: none;" alt="profile picture"/>
                    <!-- <input type="file" id="passport" style="display:none"  accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>  -->
                <?php } else {?>

                <img src="<?php echo $website_url; ?>/uploaded_files/profile_pix/<?php echo $passport; ?>" id="my_passport" alt="profile picture"/>
                <!-- <input type="file" id="passport" style="display:none" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>  -->
                <?php } ?>
               
            </div>
       
            <div class="flex_capture_div">
                <div class="btn_re_capture hide"  onclick="retakePicture()">Recapture</div>
                <div class="btn_capture hide" onClick="takePicture()">Capture</div>
                <!-- <button class="btn_re_capture" style="display:none" type="button" id="uploadButton" title="Submit"  onclick="_upload_profile_pix();"> Submit PASSPORT <i class="bi-check"></i></button> -->
            </div>
        </form>

        <form action="" id="registeration_form" enctype="multipart/form-data" method="post">
            <h3>Personal Details</h3>
            <div class="sections">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <input type="text"  id="fullname" autocapitalize="off" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="dob">
        </div>
        <div class="form-control">
            <label for="home_address">Home Address</label>
            <input type="text" id="address" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phonenumber">
        </div>
        <div class="form-control2">
        <label for="">Gender</label>
        <div class="wrap">
        <input type="checkbox" name="" id="gender1" value="male">
                Male
        </input>
        <input type="checkbox" name="" id="gender2" value="female">
                Female
        </input>
        </div>
        </div>
        <div class="form-control">
        <label for="hmo" id ="hospital_plan">Hospital Plans</label>
        <select name="" id="select_box">
            <option id="option" value="">Loading...</option>
        </select>

          
             
    </div>
        <!--Check if any existing family plan--->
    <div class="form-control2 hide" id="existing_plan_or_not">
        <label for="">Any existing family plan?</label>
        <div class="wrap">
        <input type="checkbox" name="yes" id="yes_checkbox" onchange="familyPlanSection()">
            Yes
        </input>
        <input type="checkbox" name="no" id="no_checkbox" onClick="create_family_card();">
            No
        </input>
        <input type="hidden" id="accept" value="">
        <div class="generating-div" id="generation_alert" style="display:block"></div>
       
        </div>
        </div>
            <!--Family plan authentication--->
    <div class="family_plan_section hide">
            <label for="">Insert your Family Id</label>
            <input type="text" onkeyup="check_family_card_validity();" name="" id="family_card_id">
            <div class="valid" id="result"></div>
            <button id ="users_checker" onclick="check_family_card_users();" type="button">Check for users</button>
            </div>
        </div>
    <h3>Next of Kins</h3>
    <div class="sections">
        <div class="form-control">
        <label for="full_name" class="form_icon">Full Name</label>
        <input type="text"  id="kname" autocapitalize="off" autocomplete="off">
    </div>
        <div class="form-control">
        <label for="relationship">RelationShip</label>
        <input type="text"  id="krelationship">
    </div>
    <div class="form-control2">
        <label for="">Gender</label>
        <div class="wrap">
        <input type="checkbox" name="" id="kgender1" value="male">
                Male
        </input>
        <input type="checkbox" name="" id="kgender2" value="female">
                Female
        </input>
        </div>
        </div>
        <div class="form-control">
        <label for="home_address">Home Address</label>
        <input type="text"  id="kaddress"  autocomplete="off">
    </div>
        <div class="form-control">
        <label for="phone_number">Phone Number</label>
        <input type="text"  id="kphonenumber">
    </div>
    </div>

<h3>Social History</h3>
<div class="sections">
    <div class="form-control">
    <label for="Occupation">Occupation</label>
    <input type="text" id="occupation"  autocapitalize="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past Obsterics</label>
    <input type="text" id="past_obsterics" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Medical History</label>
    <input type="text" id="medical_history" autocapitalize="off" autocomplete="off" >
</div>
    <div class="form-control">
    <label for="Occupation">Sexual History</label>
    <input type="text" id="sexual_history" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past Disease</label>
    <input type="text" id="past_disease" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Family Disease</label>
    <input type="text" id="family_disease" autocapitalize="off" autocomplete="off">
  
</div>
    <div class="form-control">
    <label for="Occupation">Past Surgery</label>
    <input type="text" id="past_surgery" autocapitalize="off" autocomplete="off">
</div>
    <div class="form-control">
    <label for="Occupation">Health History</label>
    <input type="text" id="health_history" autocapitalize="off" autocomplete="off">
</div>
</div>
<button type="button" id ="proceed-btn" onclick="_add_patient();" class="btn-submit">Book</button>
        </form>
        </div>
        </div>
             <!--END OF ADMISSION FORM1-->





        <!--START OF WALKIN ADMISSION FORM2-->
            <div class="walkin_admission_form hide">
            <div class="form-container">
                <i  class="bi bi-x-lg close_icon" onclick="close_walkin_patient_form()"></i>
        <h3>WalkIn Admission Form</h3>
        <div class="walkin_in_section_upload_image">
             <video id="walkin_in_section_videoElement" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="walkin_in_section_capture_image" onclick="openCamera2()"></i>
            <canvas id="walkin_in_section_canvasElement" style="display: none;"></canvas>
            <!-- <img id="walkin_in_section_capturedImage" style="display: none;"> -->

            <?php if ($passport==''){?>
                    <img src="<?php echo $website_url; ?>/uploaded_files/profile_pix/walkin_patient/19374.jpg" id="walkin_in_section_capturedImage" style="display: none;" alt="profile picture"/>
                    <!-- <input type="file" id="passport" style="display:none"  accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>  -->
                <?php } else {?>

                <img src="<?php echo $website_url; ?>/uploaded_files/profile_pix/walkin_patient<?php echo $passport; ?>" id="walkin_in_section_capturedImage" alt="profile picture"/>
                <!-- <input type="file" id="passport" style="display:none" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>  -->
                <?php } ?>

        </div>
        <div class="flex_capture_div">
        <div class="walkin_in_section_btn_re_capture hide"  onclick="retakePicture2()">Recapture</div>
        <div class="walkin_in_section_btn_capture hide" onclick="takePicture2()">Capture</div>
        </div>
        <form action="walkin_registration_form">
            <h3>Personal Details</h3>
            <div class="sections">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <input type="text"  id="wpatient_name" autocapitalize="off" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="wdob">
        </div>
        <div class="form-control2">
        <label for="">Gender</label>
        <div class="wrap">
        <input type="checkbox" name="" id="wgender1" value="male">
                Male
        </input>
        <input type="checkbox" name="" id="wgender2" value="female">
                Female
        </input>
        </div>
        </div>
        </div>
        <div class="sections">
        <div class="form-control">
            <label for="home_address">Home Address</label>
            <input type="text" id="waddress" autocomplete="off">
        </div>
        <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="wphonenumber">
        </div> 
        </div> 
    <button type="button" id="wproceed-btn" onclick="_add_patient2();" class="btn-submit">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
<!--END OF WALKIN ADMISSION FORM2-->







  <!---START OF ALL PATIENT LISTS SECTION -->
  <!--START OF ADMITTED PATIENTS FOR LIST1-->
  <div class="all_patient_list hide">
    <div class="patient_list_div">
            <div class="search_bar_container">
                <span>Patient Admission List</span>
                <i class = "bi bi-search"></i>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <?php 
    $sql = "SELECT * FROM patient_tab";
    $result = $conn->query($sql);
?>

            <table id="table1">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient ID</td>
                        <td>Patient Profile</td>
                        <td>Date of Admission</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $patient_id = $row["patient_id"];
                ?>
                    <tr data-patient-id="<?php echo $patient_id; ?>" onClick="next_page(this);">
                        <td><?php echo $row["sn"]; ?></td>
                        <td><?php echo $row["fullname"]; ?></td>
                        <td><img src="<?php echo $website_url . "/uploaded_files/profile_pix/patient/" . $row["patient_passport"]; ?>" alt="Profile Picture"></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><i class="bi bi-three-dots _action" onclick="_show_patient_transfer_popup()"></i></td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No patients found</td></tr>";
                }
                ?>
                </tbody>
            </table>



            <div class="_box_popup hide" id="patient_popup">
        <i class="bi bi-x-lg red" onclick="close_show_patient_transfer_popup()"></i>
        <ul>
        <li onclick="nurse_appoitment()">Transfer to Nurse Unit</li>
        </ul>
        </div>
            <!----NURSE APPOITMENT-->
<div class="appoitment hide" id="nurse_appoitment">
            <i class="bi bi-x-lg red" onclick="_close_all_patient_appoitments()"></i>
                <h3>Transfer to Nurse Unit</h3>
                <form action="" id="">
                    <div class="sections">
                <div class="form-control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                </div>
                <button>Request</button>
                </form>
            </div>
        </div>
      <!--END OF ADMITTED PATIENTS FOR LIST1-->






















        <!--START OF WALKIN PATIENTS FOR LIST2-->
    <div class="walkin_patient_list_div hide">
    <div class="table_container">
            <div class="search_bar_container">
                <span>Walkin Patient Admission List</span>
                <i class="bi bi-search"></i>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <?php 
    $sql = "SELECT * FROM walkin_patient_tab";
    $result = $conn->query($sql);
?>
               <table id="table2">
                <thead>
                    <td>S/N</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Patient Profile</td>
                    <td>date of Admission</td>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $patient_id = $row["wpatient_id"];
                ?>
                    <tr data-patient-id="<?php echo $patient_id; ?>" onClick="next_page(this);">
                        <td><?php echo $row["sn"]; ?></td>
                        <td><?php echo $row["wpatient_name"]; ?></td>
                        <td><?php echo $row["wpatient_id"]; ?></td>
                        <td><img src="<?php echo $website_url . "/uploaded_files/profile_pix/walkin_patient/" . $row["wpassport"]; ?>" alt="Profile Picture"></td>
                        <td><img src="<?php echo $row["walkin_patient"]; ?>" alt="Patient Profile"></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><i class="bi bi-three-dots _action" onclick="_show_book_popup()"></i></td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No patients found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="_box_popup hide" id="walkin_popup">
        <i class="bi bi-x-lg red" onclick="close_show_book_popup()"></i>
        <ul>
            <li onclick="lab_appoitment()">Transfer to Labouratory Unit</li>
            <li onclick="rad_appoitment()">Transfer to Radiology Unit</li>
        </ul>
</div>
<!----LAB APPOITMENT---->
<div class="appoitment hide" id="lab_appoitment">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
                <span>Labouratory Unit</span>
                <form action="" id="">
                <div class="form-control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button>Request</button>
                </form>
            </div>
            <!-----RADIOLOGY APPOITMENT-->
<div class="appoitment hide" id="rad_appoitment">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
                <span>Radiology Unit</span>
                <form action="" id="">
                <div class="form-control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button>Request</button>
                </form>
            </div>
    </div>
    </div>
  </div>
    <!--END OF WALKIN PATIENTS FOR LIST2-->



 

        <!-----START ALREADY EXISTING PROFILE-->
                <div class="profile_container hide">
                <i class="bi bi-x-lg close_icon" onclick="close_profile()"></i>
                    <div class="div1">
                    <span>Date of Birth : 23-09-2023</span>
                        <span>Address: 23 Enebong Street Calabar</span>
                        <span>Phone Number: 090232325</span>
                    </div>
                    <div class="div2">
                        <img src="Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                        <span>Juliet Patrick</span>
                        <span>PAT0003</span>
                        <span>Female</span>
                        <span>Active</span>
                        <button onclick="appoitment_booking()">Book an Appoitment</button>
                    </div>
                </div>
                <div class="overlay hide"></div>
        <!-----END ALREADY EXISTING PROFILE-->


          <!---APPOITMENT SECTION -->
        <div class="appoitment_section hide">
            <div class="appoitment_container">
                <section class="doctor_roles_name hide">
                    <i class="bi bi-x-lg" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
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
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option> 
    Add more role options as needed -->
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
        <!----END OF APPOITMENT SECTION-->
        <script src="js/receptionist.js"></script>
</body>
</html>

