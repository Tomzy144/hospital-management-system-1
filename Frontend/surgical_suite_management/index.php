<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgica Suite Management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
</head>
<body>
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
            <img id="image_profile_account" src="../Images/iii.jpg" alt="">
            <h4>Roseline Asuquo Etim</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/iii.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Roseline Asuquo Etim</span>
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
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div> 
        <div class="contents">
    <div class="button_container">
    <!-- <button onClick="book_surgery()" id="btn_sections">Book Surgery</button>
    <button onClick="click_antenal_button()" id="btn_sections">Consent Form</button>
    <button onClick="click_appoitment_button()" id="btn_sections">Vitals</button>
    <button id="btn_sections" onClick="click_prescribtion_button()">Surgical Management</button> -->
    
    </div>
    </div>
    <div class="book_surgery hide">
            <div class="form_container">
                <h1>Book Surgery</h1>
            </div>
    </div>
        <script src="index.js"></script>
</body>
</html>