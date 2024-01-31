<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgica Suite Management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                <i class="fa fa-book" id="icon" onClick="consent_container()"></i>
                <i class="fa fa-edit (alias)" id="icon"></i>
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
                <span>PRINCESS PRECIOUS</span>
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
          <div class="conscent_container hide">
          <div class="search-container">
    <div class="search-bar">
        <div id="select">
            <p id="selectText"></p>
            <i class="fa fa-sort-desc"></i>
            
    <ul id="list">
        <li class="options" id="0" onclick="showTable('All')">All</li>
        <li class="options" id="1" onclick="showTable('Inpatients')">Inpatients</li>
        <li class="options" id="2" onclick="showTable('Outpatients')">Outpatients</li>
        <li class="options" id="3" onclick="showTable('Waitinglist')">Waiting List</li>
        <li class="options" id="4" onclick="showTable('Appointment')">Appointment</li>
        <li class="options" id="5"  onclick="showTable('Test')">Test</li>
        <li class="options" id="6"  onclick="showTable('ANC')">ANC</li>
        <li class="options" id="7"  onclick="showTable('Todayinputs')">Today inputs</li>
        <!-- Add more options here -->
    </ul>
        </div>
            <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
            <i class="fa fa-search"  id="submit-input"></i>
    </div> 
    </div>

    <div class="patient_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    1.
                </div>
                <div class="patient_info">
                    <span>Precious Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_upload" onClick="upload_document()">Upload</button>
           </div>
          </div>
          </div>
          </div>

          <div class="upload_document_page hide">
            <h1>Upload Files & Documents</h1>
          <div class="flex_upload_div">
            <div class="upload_container">
              <i class="fa fa-folder-open" id="upload_icon"></i>
              <span>Drag and drop file</span>
              <h1>-OR-</h1>
              <input type="file" value="Upload File" class="browse_file">
            </div>
          </div>
          </div>
          </div>
          <div class="vital_section">
           
          </div>
        
        <script src="index.js"></script>
</body>
</html>