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



    <?php $page = 'logins';?>




    <!-- normal index starts here -->

    <section class="login-section">
        <div class="_staff_login">
        <i class="cube bi bi-hospital"></i>
        <i class="cube bi bi-hospital"></i>
        <i class="cube bi bi-hospital"></i>
        <i class="cube bi bi-hospital"></i>
        <i class="cube bi bi-hospital"></i>
        <div class="_alert_div hide" id="staff_verification">
            <span>Verification Successful <i class="bi bi-hand-thumbs-up-fill"></i></span>
        </div>
        <div class="_alert_div vf hide">
            <span>Verification Failed <i class="bi bi-emoji-frown"></i></span>
        </div>
        <div class="staff_container">
            <div class="_staff_contents">
            <div class="fill-form-div" id="more-info">
            <?php include "config/page-content.php"?>
        </div>
        </div>
        </div>
        <div class="admin_section">
        <i class="cube_admin bi bi-hospital"></i>
        <i class="cube_admin bi bi-hospital"></i>
        <i class="cube_admin bi bi-hospital"></i>
        <i class="cube_admin bi bi-hospital"></i>
        <i class="cube_admin bi bi-hospital"></i>
    <div class="admin_container">
      <div class="_admin_contents">
      <h3>Admin Login</h3>
          <form action="">
            <div class="_form_control">
              <label for="email">Email</label>
              <i class="bi bi-envelope-open"></i>
              <input type="email" name="email" id="email">
            </div>
            <div class="_form_control">
              <label for="test">Password</label>
              <i class="bi bi-key"></i>
              <i class="bi bi-eye show_password hide" id="show_admin_password" onclick="show_admin_password()"></i>
              <i class="bi bi-eye-slash lock_password" id="lock_admin_password" onclick="show_admin_password()"></i>
              <input type="password" name="password" id="admin_password">
            </div>
            <div class="_fingerprint_authentication">
              <i class="bi bi-fingerprint"></i>
              <span>FingerPrint Authentication</span>
            </div>
            <button type="button" class="btn" onclick="log_in()">Login</button>
          </form>
    </div>
    <div class="admin_alert hide">
        <span>Verification Successful <i class="bi bi-hand-thumbs-up-fill"></i></span>
    </div>
    <div class="admin_alert vf hide">
      <span>Verification Failed <i class="bi bi-emoji-frown"></i></span>
  </div>
    </div>
    </div>
        </div>
       

        <!--Script-->
        <!-- <script src="js/index_landingpage.js"></script> -->
    </section>
</body>
</html>