<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiology</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>
<body>
      <!---SIDEBAR AND NAVBAR-->
      <div class="navbar">
        <div class="section1">
        <!-- <i class="fa fa-long-arrow-left " id="back-arrow" onclick="backWardArrow()"></i> -->
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
            <!-- <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
            <h4>Peace Emmanuel Christopher</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div> -->
            <div class="image">
            <img src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span>Peace Emmanuel Christopher</span>
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
        <div class="contents">
          <div class="appiontment_booking_container">
        <div class="appiontment">
        <div class="head_sec">
            <span>Appoitment Details</span>
            <div class="appoitment_input_control">
            <i class="fa fa-search" id="search_icon"></i>
                <input type="text" placeholder="Search here" class="appoitment_input">
            </div>
        </div>
        <div class="table_container">
          <table>
            <thead>
              <td>Patient Name</td>
              <td>Patient Id</td>
              <td>Date</td>
              <td>Time</td>
              <td>Request Type</td>
              <td>Accept/Reject</td>
            </thead>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
          </table>
        </div>
        </div>
          </div>
        </div>

        <script src="dashboard.js"></script>
</body>
</html>