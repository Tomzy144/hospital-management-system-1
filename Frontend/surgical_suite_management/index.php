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
              <td>Doctor Name</td>
              <td>Procedure</td>
              <td>Phone Number</td>
              <td>Accept/Reject</td>
            </thead>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>Doc. John</td>
              <td>Head Surgery</td>
              <td>0816973232</td>
              <td>
                <button onClick="booking_section()">Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
            <td>Princess Precious</td>
              <td>Pat001</td>
              <td>Doc. John</td>
              <td>Head Surgery</td>
              <td>0816973232</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
            <td>Princess Precious</td>
              <td>Pat001</td>
              <td>Doc. John</td>
              <td>Head Surgery</td>
              <td>0816973232</td>
              <td>
                <button>Accept</button>
                <button>Reject</button>
              </td>
            </tbody>
            <tbody>
            <td>Princess Precious</td>
              <td>Pat001</td>
              <td>Doc. John</td>
              <td>Head Surgery</td>
              <td>0816973232</td>
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
        <div class="booking_section hide">
            <div class="booking_container">
                <span>Princess Precious</span>
                <form action="">
                    <div class="form_control_group">
                    <div class="form_control">
                        <label for="">Type of Surgery & Amount</label>
                        <input type="text">
                    </div>
                    <div class="form_control">
                        <label for="">Amount</label>
                        <input type="text">
                    </div>
                    </div>
                    <div class="form_control_group">
                    <div class="form_control">
                        <label for="">Special Equipment</label>
                        <input type="text">
                    </div>
                    <div class="form_control">
                        <label for="">Date of Surgery</label>
                        <input type="date">
                    </div>
                    <div class="form_control">
                        <label for="">Time of Surgery</label>
                        <input type="time">
                    </div>
                    .</div>
                    <div class="form_control_group">
                    <div class="form_control">
                        <label for="">Select Surgeon</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form_control">
                        <label for="">Select Anostologist</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    </div>
                    <div class="form_control_group">
                    <div class="form_control">
                        <label for="">Select Nurse</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form_control">
                        <label for="">Select Opeating Room</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    </div>
                    <button>Book</button>
                </form>
            </div>
        </div>
        <script src="index.js"></script>
</body>
</html>