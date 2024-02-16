<?php include '../backend/config/connection.php' ?>

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
