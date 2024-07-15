<?php include '../backend/config/connection.php';?>
<?php include '../backend/dashboardconfig/session-validation.php';?>
<!-- ?php include '../backend/config/user-validation.php';?> -->















<!-- 
<div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <span>Doc. Henculus White</span>
            <button class="btn_submit">Upload Image</button>
           </div>

            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span>Doc. Henculus White</span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
    <div class="sidebar__header"></div>
    <div class="sidebar-body">
      <ul>
        <li class="links active" onclick="patient_admission_form_section()">
          <span>Patient admission form</span>
        </li>
        <li class="links" onclick="walkin_patient_form()" >
          <span>Walkin patient admission Form</span>
        </li>
        <li class="links" onclick="checkup_form()">
          <span>Check up</span>
        </li>
        <li class="links" onclick="patient_list()">
          <span>Patient list</span>
        </li>
        <li class="links" onclick="_walkin_patient_list()">
          <span>Walkin patient list</span>
        </li>
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <span>Logout</span>
          <form method="post" action="../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>
 -->





















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
        <div class="display__date">
        </div>
        <div class="section2">

          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <h4>Doc. Henculus White</h4>
            <button class="btn_submit">Upload Image</button>
            <!-- <h4>change password</h4> -->
        </div>
            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span>Doc. Henculus White</span>
            <i class="bi bi-caret-down-fill _profile_arrow_icon" onclick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>

    <div class="sidebar">
            <div class="sidebar-body">
                <ul>
                    <li onclick="patient_admission_form_section()" id="links" class="active">
                        <i class="fa-solid fa-bed"></i>
                       Patient admission form
                    </li>
                    <li onclick="walkin_patient_form()" id="links">
                        <i class="fa-solid fa-baby"></i>
                        <span>Walkin patient admission Form</span>
                    </li>
                    <li onclick="checkup_form()" id="links">
                        <i class="fa-solid fa-person-circle-check"></i>
                        <span>Check up</span>
                    </li>
                    <li onclick="patient_list()" id="links">
                        <i class="fa-solid fa-people-group"></i>
                        <span>Patient list</span>
                    </li>
                    <li onclick="_walkin_patient_list()" id="links">
                        <i class="fa-solid fa-people-group"></i>
                        <span>Walkin patient list</span>
                    </li>
                    <li onclick="document.getElementById('logoutform').submit();" id="links">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                        <form method="post" action="../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
                    </li>
                </ul>
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
            <!-- <div class="form-control">
                <label for="">Patient Name</label>
                <input type="text" name="" id="">
            </div>
            <div class="form-control">
            <label for="">Patient Id</label>
                <input type="text" name="" id="">
            </div> -->
            <div  id="authenticate" onclick="activateFingerPrint()">
            <i class="bi bi-fingerprint"></i> Fingerprint authentication</div>
            <div class="finger_print_div hide">
            <!-- <i class="bi bi-x-lg close_icon" onclick="deactivateFingerPrint()" ></i> -->
            <i class="bi bi-fingerprint print_icon" onclick="display_profile()"></i>
            </div> 
        </div>
        <!---END OF CHECKUP SECTION--->
    <div class="new_intake_admission_form">
    <div class="form-container">
        <h3>Patient admission form</h3>
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
            <h3>Personal details</h3>
            <div class="sections">
            <div class="form-control">
            <label for="full_name">Full name</label>
            <input type="text"  id="fullname" autocapitalize="off" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="date_of_birth">Date of birth</label>
            <input type="date" id="dob">
        </div>
        <div class="form-control">
            <label for="home_address">Home address</label>
            <input type="text" id="address" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="phone_number">Phone number</label>
            <input type="text" id="phonenumber">
        </div>
        <div class="form-control2">
    <label>Gender</label>
    <div class="wrap">
        <!-- Checkbox for Male -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="gender1" type="checkbox" style="display: none;" />
            <label class="cbx" for="gender1">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Male</span>
            </label>
        </div>

        <!-- Checkbox for Female -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="gender2" type="checkbox" style="display: none;" />
            <label class="cbx" for="gender2">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Female</span>
            </label>
        </div>
    </div>
</div>
        <div class="form-control">
        <label for="hmo" id ="hospital_plan">Hospital plans</label>
        <select name="" id="select_box">
            <option id="option" value="">Loading...</option>
        </select>

          
             
    </div>
        <!--Check if any existing family plan--->
        <div class="form-control2 hide" id="existing_plan_or_not"">
        <label for="">Any existing family plan?</label>
    <div class="wrap">
        <!-- Checkbox for Male -->
        <div class="checkbox-wrapper-46">
        <input class="inp-cbx" type="checkbox" name="yes" id="_family_plan" onchange="familyPlanSection()" style="display: none;">
            <label class="cbx" for="_family_plan">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Yes</span>
            </label>
        </div>

        <!-- Checkbox for Female -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" type="checkbox" id="_create_card"  name = "no" onchange="create_family_card()" style="display: none;" />
          
            <label class="cbx" for="_create_card">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>No</span>
            </label>
            <input type="hidden" id="accept" value="">
        <div class="generating-div" id="generation_alert" style="display:block"></div>
        </div>
    </div>
</div>
            <!--Family plan authentication--->
    <div class="family_plan_section hide">
            <label for="">Insert your family id</label>
            <input type="text" onkeyup="check_family_card_validity()" name="" id="family_card_id">
            <div class="valid" id="result"></div>
            <button class="btn" id ="users_checker" onclick="check_family_card_users();" type="button">Check for users</button>
            </div>
        </div>
    <h3>Next of kins</h3>
    <div class="sections">
        <div class="form-control">
        <label for="full_name" class="form_icon">Full name</label>
        <input type="text"  id="kname" autocapitalize="off" autocomplete="off">
    </div>
        <div class="form-control">
        <label for="relationship">RelationShip</label>
        <input type="text"  id="krelationship">
    </div>
        <div class="form-control">
        <label for="home_address">Home address</label>
        <input type="text"  id="kaddress"  autocomplete="off">
    </div>
        <div class="form-control">
        <label for="phone_number">Phone number</label>
        <input type="text"  id="kphonenumber">
    </div>
   <div class="form-control2">
    <label>Gender</label>
    <div class="wrap">
        <!-- Checkbox for Male -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="kgender1" type="checkbox" style="display: none;" />
            <label class="cbx" for="kgender1">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Male</span>
            </label>
        </div>

        <!-- Checkbox for Female -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="kgender2" type="checkbox" style="display: none;" />
            <label class="cbx" for="kgender2">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Female</span>
            </label>
        </div>
    </div>
</div>

    </div>

<h3>Social history</h3>
<div class="sections">
    <div class="form-control">
    <label for="Occupation">Occupation</label>
    <input type="text" id="occupation"  autocapitalize="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past obsterics</label>
    <input type="text" id="past_obsterics" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Medical history</label>
    <input type="text" id="medical_history" autocapitalize="off" autocomplete="off" >
</div>
    <div class="form-control">
    <label for="Occupation">Sexual history</label>
    <input type="text" id="sexual_history" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Past disease</label>
    <input type="text" id="past_disease" autocapitalize="off" autocomplete="off">
</div>

    <div class="form-control">
    <label for="Occupation">Family disease</label>
    <input type="text" id="family_disease" autocapitalize="off" autocomplete="off">
  
</div>
    <div class="form-control">
    <label for="Occupation">Past surgery</label>
    <input type="text" id="past_surgery" autocapitalize="off" autocomplete="off">
</div>
    <div class="form-control">
    <label for="Occupation">Health history</label>
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
            <i  class="bi bi-x-square close_icon" onclick="close_walkin_patient_form()"></i>
            <div class="form-container">
        <h3>WalkIn admission form</h3>
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
            <h3>Personal details</h3>
            <div class="sections">
            <div class="form-control">
            <label for="full_name">Full name</label>
            <input type="text"  id="wpatient_name" autocapitalize="off" autocomplete="off">
        </div>
            <div class="form-control">
            <label for="date_of_birth">Date of birth</label>
            <input type="date" id="wdob">
        </div>
        <div class="form-control">
            <label for="home_address">Home address</label>
            <input type="text" id="waddress" autocomplete="off">
        </div>
        <div class="form-control">
            <label for="phone_number">Phone number</label>
            <input type="text" id="wphonenumber">
        </div> 
        <div class="form-control2">
    <label>Gender</label>
    <div class="wrap">
        <!-- Checkbox for Male -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="wgender1" type="checkbox" style="display: none;" />
            <label class="cbx" for="wgender1">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Male</span>
            </label>
        </div>

        <!-- Checkbox for Female -->
        <div class="checkbox-wrapper-46">
            <input class="inp-cbx" id="wgender2" type="checkbox" style="display: none;" />
            <label class="cbx" for="wgender2">
                <span>
                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <span>Female</span>
            </label>
        </div>
    </div>
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
                <h3>Patient admission list</h3>
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
                        <td><?php echo $row["patient_id"]; ?></td>
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
        <i class="bi bi-x-square red" onclick="close_show_patient_transfer_popup()"></i>
        <div>
            <h5 onclick="nurse_appoitment()">Transfer to nurse unit</h5>
        </div>
        </div>
            <!----NURSE APPOITMENT-->
<div class="appoitment hide" id="nurse_appoitment">
            <i class="bi bi-x-square red" onclick="_close_all_patient_appoitments()"></i>
                <h3>Transfer to nurse unit</h3>
                <form action="" id="">
                    <div class="sections">
                <div class="form-control">
                    <label for="">Patient name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                </div>
                <button class="btn-submit">Request</button>
                </form>
            </div>
        </div>
      <!--END OF ADMITTED PATIENTS FOR LIST1-->






















        <!--START OF WALKIN PATIENTS FOR LIST2-->
    <div class="walkin_patient_list_div hide">
            <div class="search_bar_container">
                <h3>Walkin patient admission list</h3>
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
                    <td>action</td>
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
            
        <div class="_box_popup hide" id="walkin_popup">
        <i class="bi bi-x-square red" onclick="close_show_book_popup()"></i>
        <div>
            <h5 onclick="lab_appoitment()">Transfer to labouratory unit</h5>

            <h5 onclick="rad_appoitment()">Transfer to radiology unit</h5>
            </div>
</div>
<!----LAB APPOITMENT---->
<div class="appoitment hide" id="lab_appoitment">
            <i class="bi bi-x-square red" onclick="_close_all_appoitment()"></i>
                <h3>Labouratory unit</h3>
                <form action="" id="">
                <div class="form-control">
                    <label for="">Patient name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn-submit">Request</button>
                </form>
            </div>
            <!-----RADIOLOGY APPOITMENT-->
<div class="appoitment hide" id="rad_appoitment">
            <i class="bi bi-x-square red" onclick="_close_all_appoitment()"></i>
                <h3>Radiology unit</h3>
                <form action="" id="">
                <div class="form-control">
                    <label for="">Patient name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Patient id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control">
                    <label for="">Reasons for booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn-submit">Request</button>
                </form>
            </div>
    </div>
    </div>
  </div>
    <!--END OF WALKIN PATIENTS FOR LIST2-->



 

        <!-----START ALREADY EXISTING PROFILE-->
                <div class="profile_container hide">
                <!-- <i class="bi bi-x-lg close_icon" onclick="close_profile()"></i> -->
                    <div class="div1">
                    <h3>Date of birth : 23-09-2023</h3>
                        <h3>Address: 531 RockVale Dr, Piedmont, South Carolina.</h3>
                        <h3>Phone number: +122 3521 222</h3>
                    </div>
                    <div class="div2">
                        <img src="Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                        <h3>Juliet Patrick</h3>
                        <h3>PAT0003</h3>
                        <h3>Female</h3>
                        <h3>Active</h3>
                        <div>
                            <button class="btn-submit" onclick="close_profile()">Cancle</button>
                            <button class="btn-submit" onclick="appoitment_booking()">Book an Appoitment</button>
                        </div>
                    </div>
                </div>
        <!-----END ALREADY EXISTING PROFILE-->
        <div class="avalable_doctor">
            <div class="appoitment hide">
            <form action="" class="av_doctor_role hide">
    <div class="form-control">
        <label for="av-roles">Doctor roles</label>
        <select name="roles" id="av-roles" onchange="updateDoctors()">
            <option value="select">Select</option> 
            <option value="surgeon">Surgeon</option> 
            <option value="healthPractitioner">Health Practitioner</option>
            <option value="dentist">Dentist</option>
            <option value="heartDoctor">Heart Doctor</option>
        </select>
    </div>
    <div class="form-control">
        <label for="av-doctors">Available doctors</label>
        <select name="doctors" id="av-doctors">
            <!-- Options will be dynamically filled based on role selection -->
        </select>
    </div>
    <button type="button" class="btn-submit" onclick="bookPatient()">BOOK PATIENT</button>
</form>
                <form action="" class="book_patient hide">
                    <div class="form-control">
                        <label for="">Patient name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Patient id</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Date</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Reason for appoitment</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn-submit">Book</button>
                </form>
            </div>
            </div>

        <script src="js/receptionist.js"></script>
</body>
</html>
