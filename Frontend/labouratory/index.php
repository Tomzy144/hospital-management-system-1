<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabDoc Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href='../awesome-font/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<body>
         <!---SIDEBAR AND NAVBAR-->
    <div class="navbar">
        <div class="section1">
        <i class="fa fa-long-arrow-left" id="back-arrow" onclick="backWardArrow()"></i>
        <i class="fa fa-long-arrow-left" id="back-arrow_to_home" onclick="back_arrow_to_home()"></i>
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
            <img id="image_profile_account" src="../Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <h4>Immaculater Odu</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span>Doctor Kingsley Etete Effiong</span>
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
                <i class="fa fa-hospital-o" id="icon"onClick="click_appoitment_button()"></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>

       <div id="diagnosis_section-container"></div>
       <div id="lab_section-container"></div>
       <div id="landing_page_content_section-container"></div>

       <script src="js/section.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
