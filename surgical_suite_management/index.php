<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgica Suite Management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
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
<table id="appoitment_table">
  <thead>
    <td>Number</td>
    <td>Patient Name/Patient Id</td>
    <td>Date/Time</td>
    <td>Request Type</td>
    <td>Accept</td>
    <td>Reject</td>
  </thead>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button onClick="show_radiology_input()">Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
   
</table>
</div>
<div class="pending_transaction_list_pagination">
        <div class="flexs">
            <p id="prev_appoitment">Prev List</p>
            <p id="next_appoitment">Next List</p>
        </div>
</div>
</div>
</div>

<div class="approved_appoitment">
<div class="table_container">
<table id="approved_table">
  <thead>
    <td>Number</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
    <td> Type of Surgery</td>
    <td> Date </td>
  </thead>
  <tbody>

  </tbody>
  </table>
  <div class="hideselect">
      <ul class="hide" id="selectWard">
        <li id="ward">Ward 1
        <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
        </li>
        <li id="ward">Ward 2
        <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
        </li>
        <li id="ward">Ward 3
        <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
        </li>
        <li id="ward">Ward 4
        <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
        </li>
        <li id="ward">Ward 5
        <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
        </li>
      </ul>
    <select name="" id="selectBed">
      <option value="">Bed 1</option>
      <option value="">Bed 2</option>
      <option value="">Bed 3</option>
      <option value="">Bed 4</option>
      <option value="">Bed 5</option>
    </select>
    </div>
</div>
      <div class="vital_form hide">
      <i class="bi bi-x-lg" id="close_icon" onClick="close_show_vital_container()"></i>
      <span>Call in Nurse</span>
        <form action="">
            <div class="form_control">
              <label for="">Patient Name</label>
              <input type="text" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Patient Id</label>
              <input type="text" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Date</label>
              <input type="date" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Time</label>
              <input type="time" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Message</label>
              <textarea name="" id="" cols="10" rows="10"></textarea>
            </div>
        </form>
      </div>

      <div class="threatre hide">
      <i class="bi bi-x-lg" id="close_icon" onClick="close_show_threatre_container()"></i>
      <span>Transfer to Threatre</span>
        <form action="">
            <div class="form_control">
              <label for="">Patient Name</label>
              <input type="text" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Patient Id</label>
              <input type="text" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Date</label>
              <input type="date" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Time</label>
              <input type="time" name="" id="">
            </div>
            <div class="form_control">
              <label for="">Message</label>
              <textarea name="" id="" cols="10" rows="10"></textarea>
            </div>
        </form>
      </div>
<div class="surgical_pagination">
        <div class="flexs">
            <p id="prev_approved_appoitment">Prev List</p>
            <p id="next_approved_appoitment">Next List</p>
        </div>
</div>
</div>

</div>
        <div class="booking_section hide">
            <div class="booking_container">
                <span>PAT0001</span>
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
          <div class="all_patient_container">
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

    <div class="patient_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    2.
                </div>
                <div class="patient_info">
                    <span>Esther Patrick Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_upload">Upload</button>
           </div>
          </div>
          </div>
          </div>
    <div class="patient_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    3.
                </div>
                <div class="patient_info">
                    <span>Aniekan Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_upload">Upload</button>
           </div>
          </div>
          </div>
          </div>
    <div class="patient_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    4.
                </div>
                <div class="patient_info">
                    <span>Asuquo Eyo Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_upload">Upload</button>
           </div>
          </div>
          </div>
          </div>
          <div class="patient_container_pagination">
        <div class="flexs">
            <p id="prev_approved_appoitment">Prev List</p>
            <p id="next_approved_appoitment">Next List</p>
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
          <div class="vital_section hide">
            <div class="vital_input">
            <form action="">
                    <div class="form_control">
          <label for="temperature">Temperature</label>
          <input type="text">
          </div>
                
                    <div class="form_control">
          <label for="b/p">B/P(mm/HG)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="pulse">Pulse(bp/m)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="respiratory">Respiratory(cm)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="weight">Weight(kg)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="height">Height(cm)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="intake">Intake(m/s)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="output">Output(m/s)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="spo2">SPO2(%)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="bmi">BMI</label>
          <input type="text">
          </div>
             <div class="form_control">
          <label for="body_fat">Body fat(%)</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="muscle_mass">Muscle mass</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="musc">MUAC</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="resting_metabolism">Restinng metabolism</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="body_age">Body age</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="bmi_for_age">BMI for age</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="visceral_fat">Visceral fat</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="head_circumference">Head circumference</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="wfa">WFA</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="waist_circumference">Waist Circumference</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="hip_circumference">Hip Circumference</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="w_hr">W-HR</label>
          <input type="text">
          </form>
        </div>
        <button id="btn_submit">Submit</button>
          </div>
        
        <script src="index.js"></script>
</body>
</html>