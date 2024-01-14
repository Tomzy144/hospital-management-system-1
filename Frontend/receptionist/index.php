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
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="fa fa-envelope" id="icon"></i>
                <i class="fa fa-file" id="icon"></i>
                <i class="fa fa-hospital-o" id="icon"></i>
                <i class="fa fa-edit (alias)" id="icon" onClick="click_vital_button()" ></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
   <div class="contents">
    <div class="button_container">
        <button onclick="open_patient_form()">PATIENT ADMISSION FORM</button>
        <button onclick="appoimentBooking()">BOOKING APPOINTMENT SITTER</button>
        <button onclick="surgicalChemistry()">PROCEDURE LIST</button>
        </div>
    </div>
    <div class="patients_form_container hide">
    <div class="form-container">
        <h2>Fill in the neccesary information</h2>
        <form action="">
            <div class="form-section current-section" id="section1">
            <h3 style="text-align: left; margin-top: 1rem;">Personal Details</h3>
            <div class="form-display">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <i class="fa fa-user-plus" class="form_icon"></i>
            <input type="text" placeholder="full_name" id="fullname" autocapitalize="off" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <i class="fa fa-calendar" class="form_icon"></i>
            <input type="date" id="dob" placeholder="date_of_birth">
        </div>

    </div>
            <div class="form-display">
            <div class="form-control">
                <i class="fa fa-home" class="form_icon"></i>
            <label for="home_address">Home Address</label>
            <input type="text" id="address" placeholder="home_address" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <i class="fa fa-phone" class="form_icon"></i>
            <input type="number" id="phonenumber" placeholder="Phone_ number">
        </div>

    </div>
    <label>Gender</label>
    <div class="form-display2">
       
    <label for="radio">
        <input type="checkbox" id="gender1" name="gender" value="Male" class='check1'>
        Male
      </label>
      <label for="radio">
        <input type="checkbox" id="gender2" name="gender" value="Female" class='check2'>
        Female
      </label>
    </div>
    <hr style="margin: 1rem; color: #fff;"/>
    <h3 style="text-align: left; margin-top: 1rem;">Next of Kins</h3>
    <div class="form-display">
        <div class="form-control">
        <label for="full_name" class="form_icon">Full Name</label>
        <i class="fa fa-user-plus"></i>
        <input type="text" placeholder="full_name" id="kname" autocapitalize="off" autocomplete="off">
    </div>

        <div class="form-control">
        <label for="relationship">RelationShip</label>
        <i class="fa fa-users" class="form_icon"></i>
        <input type="text"  id="krelationship" placeholder="relationship">
    </div>

</div>
        <div class="form-display">
        <div class="form-control">
            <i class="fa fa-home" class="form_icon"></i>
        <label for="home_address">Home Address</label>
        <input type="text"  id="kaddress" placeholder="home_address" autocomplete="off">
    </div>

        <div class="form-control">
        <label for="phone_number">Phone Number</label>
        <i class="fa fa-phone" class="form_icon"></i>
        <input type="number"  id="kphonenumber" placeholder="Phone_ number">
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
<label>What kind  of patient Category are you?</label>
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
</div>

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
</div>
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
 <!--Section 2-->
 <div class="form-section current-section" id="section2">
<h3 style="text-align: left; margin-top: 1rem;">Social History</h3>
<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Occupation</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="occupation"  placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Obsterics</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_obsterics" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Medical History</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="medical_history" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Sexual History</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="sexual_history" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Disease</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_disease" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Family Disease</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="family_disease" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>
<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Surgery</label>
    <i class="fa fa-twitch" class="form_icon"></i>
    <input type="text" id="past_surgery" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
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

