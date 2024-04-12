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
            <div class="sidebar_icons">
            <i class="bi bi-x-square-fill" id="sidebar_close" onclick="close_sidebar()"></i>
                <i class="bi bi-calendar-date-fill icons" onClick="back_to_appoitment_list()">
                    &nbsp;<span>APPOITMENT</span>
                </i>
                <i class="bi bi-pencil-square icons"  onClick="show_profile_list()" >
                &nbsp;<span>PATIENT PROFILE</span>
                </i>
                <i class=" bi-box-arrow-right icons">
                &nbsp;<span>LOG OUT</span>
                </i>
            </div>
        </div>
    </div>
<?php include 'config/page-content.php'?>
    <script src="js/script.js"></script>
    <!-- <script src="js/section.js"></script> -->
</body>
</html>

