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

<body >

    <script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
            
    
            <div class="navbar">
        <div class="display__date animatetext">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="">
            <span class="animatetext"><?php echo $fullname ?></span>
           </div>

            <div class="image">
            <img src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="userImage"/>
            </div>
            <span class="animatetext"><?php echo $fullname ?></span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
            <div class="sidebar-body">
            <ul>
        <li class="links active" onclick="appoitmentSection()">
          <span>Appoitments</span>
        </li>
        <li class="links" onclick="availablePatientList()">
          <span>Patient list</span>
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
           
  <script src="js/script.js"></script>
<?php include 'config/page-content.php'?>
<script>
  const sections = document.querySelectorAll('.section');
const links = document.querySelectorAll('.sidebar-body ul li');

function toggleSidebarLinks(clickedLink){
  links.forEach(link => link.classList.remove('active'));
  clickedLink.classList.add('active');
}
links.forEach(link => {
  link.addEventListener('click', function() {
      toggleSidebarLinks(this);
  });
});
</script>
</body>
</html>

