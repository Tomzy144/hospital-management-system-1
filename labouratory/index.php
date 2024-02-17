<?php include '../backend/config/connection.php' ?>
<?php include 'config/lab_scientist-session-validation.php';?>
<?php include '../backend/config/user-validation.php';?>


<?php
    $lab_scientist_id = $_POST['lab_scientist_id'];
?>

    

<?php    

    $fetch_lab_scientist_profile = $callclass->_get_lab_scientist_details($conn, $s_lab_scientist_id);
    $lab_scientist_profile_array = json_decode($fetch_lab_scientist_profile, true);
    $fullname = $lab_scientist_profile_array[0]['fullname'];
    $email = $lab_scientist_profile_array[0]['email'];
    $phonenumber = $lab_scientist_profile_array[0]['phonenumber'];
    // $role_id= $lab_scientist_profile_array[0]['role_id'];
    $status_id = $lab_scientist_profile_array[0]['status_id'];
    $date = $lab_scientist_profile_array[0]['date'];
    $last_login = $lab_scientist_profile_array[0]['last_login'];
    $passport = $lab_scientist_profile_array[0]["passport"]; 
    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    $status_name = $status_array[0]['status_name'];
?>

<?php 
    $page = "lab_scientist_dash"; // Assign the value "lab_scientist_dash" to the $page variable
?>



<?php 
    


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    ?>



<?php
    $fetch_appointment = $callclass->_get_appointment_details($conn, $s_lab_scientist_id);
    $lab_scientist_appointment_array = json_decode($fetch_appointment, true);

    // Check if decoding was successful
    if ($lab_scientist_appointment_array !== null) {
        // Access values from the decoded array
        $apatient_name = $lab_scientist_appointment_array[0]['patient_name'];
        $email = $lab_scientist_appointment_array[0]['email'];
        $phonenumber = $lab_scientist_appointment_array[0]['phonenumber'];
        $role_id = $lab_scientist_appointment_array[0]['role_id'];
        $status_id = $lab_scientist_appointment_array[0]['status_id'];
        $passport = $lab_scientist_appointment_array[0]['passport'];
        $appointment_date = $lab_scientist_appointment_array[0]['appointment_date'];
        $appointment_reason = $lab_scientist_appointment_array[0]['reason'];

        // Now you can use these variables as needed in your code
    } else {
        // Handle the case where decoding failed
        echo "Failed to decode JSON";
    }

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $thename?>  | LabDoc Dashboard</title>
    <meta name="keywords" content="Admin - <?php echo $thename?>" />
    <meta name="description" content="Administrative Login <?php echo $thename?>"/>
    
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

         <!---SIDEBAR AND NAVBAR-->
    <div class="navbar">
        <div class="section1">
        <i class="fa fa-long-arrow-left" id="back-arrow" onclick="backWardArrow()"></i>
        <!-- <i class="fa fa-long-arrow-left" id="back-arrow_to_home" onclick="back_arrow_to_home()"></i> -->
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
            <img id="image_profile_account" src="<?php echo $website_url?>/Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <h4>Immaculater Odu</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="<?php echo $website_url?>/Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span>Doctor Kingsley Etete Effiong</span>
            <i class="bi-caret-down" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="<?php echo $website_url?>/Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="bi-envelope" id="icon"></i>
                <i class="bi-hospital-o" id="icon"onClick="click_appoitment_button()"></i>
                <i class="bi-sign-out" id="icon"></i>
            </div>
        </div>

       <div id="lab_section-container"></div>
       <div id="landing_page_content_section-container"></div>


      
</body>
</html>
