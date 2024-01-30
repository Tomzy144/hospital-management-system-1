<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
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
            <h4>Princess Esther Asuquo</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/iii.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Princess Esther Asuquo</span>
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
        <div class="transaction_Section">
        <div class="pending_transaction_section">
    <div class="contents">
        <div class="head-sec">
            <span>Pending Transactions</span>
            <div class="pending_transaction_input_control">
            <i class="fa fa-search" id="search-icon"></i>
                <input type="text" placeholder="Search here" class="pending_transaction_input">
            </div>
        </div>
        <div class="body_sec">
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>PASSPORT</td>
            <td>Patient Name</td>
            <td>Patient ID</td>
            <td>Date</td>
            <td>Time</td>
            <td>Request Type</td>
            <td>Amount</td>
            <td>Paid/Cancelled</td>
        </tr>
    </thead>
   <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>Precious Bassey</td>
            <td>001</td>
            <td>22-02-2024</td>
            <td>2:30PM</td>  
            <td>Rendered service of malaria test</td>  
            <td>30,000.00</td>  
            <td>
            <button class="accept-btn" type="button" onClick="personal_profile_section()">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
   <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>Precious Bassey</td>
            <td>001</td>
            <td>22-02-2024</td>
            <td>2:30PM</td>  
            <td>Rendered service of malaria test</td>  
            <td>30,000.00</td>  
            <td>
            <button class="accept-btn" type="button" onClick="personal_profile_section()">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
</table>
        </div>
        </div>
        </div>
        </div>
    <script src="index.js"></script>
</body>
</html>