<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgica Suite Management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
<body>
<!--------------------------------------------START OF NAVBAR------------------------------------------------------>
<div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <span>Doc. Henculus White</span>
            <button class="btn_submit">Upload Image</button>
           </div>
            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span>Doc. Henculus White</span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>


    <div class="sidebar">
    <div class="sidebar__header"></div>
    <div class="sidebar-body">
      <ul>
        <li  id="emergency__form__link" class="links active" onclick="surgeryAppoitment()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Appoitment for surgery</span>
        </li>
        <li id="emergency__link" class="links" onclick="pendingSurgeryList()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Pending Surgery List</span>
        </li>
        <li id="emergency__link" class="links" onclick="patientProfile()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Patient Profile</span>
        </li>
        <!-- <li id="emergency__link" class="links" onclick="bookinSection()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Booking Surgery</span>
        </li> -->
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Logout</span>
          <form method="post" action="../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>
  <!----------------------------------------------------------------------------------->



  <div class="list_div" id="surgeryAppoitment">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Surgery List</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="TableData">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Rquest type</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No data</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>

  <div class="list_div hide" id="pendingSurgeryList">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Pending Surgery List</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="TableData">
                <thead>
                    <tr>
                    <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Rquest type</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No data</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>




<div class="patientProfile hide">
 <div class="profileInfo listing">
  <h3 class="heading">PERSONAL INFORMATION</h3>
  <img src="Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
 </div>
 <div class="bioData listing">
  <h3 class="heading">BIO DATA</h3>
  <div>
  <h3>KINGSLEY PATRICK</h3>
  <h3>PAT0003</h3>
  <h3>MALE</h3>
  <h3>23 SEPTEMBER 1998</h3>
  <h3>40 MAIN LONDON ROAD</h3>
  <h3>+23488993034</h3>
  </div>
  <h3 class="heading">NEXT OF KINS DETAIL</h3>
  <div>
  <h3>MERCY PATRICK</h3>
  <h3>FEMALE</h3>
  <h3>23 AUGUST 1498</h3>
  <h3>40 MAIN LONDON ROAD</h3>
  <h3>+2348893334</h3>
  </div>
  <h3 class="heading">SOCIAL HISTORY</h3>
  <div>
  <h3>NAN</h3>
  </div>
  <h3 class="heading">MEDICAL HISTORY</h3>
  <div>
  <h3>NAN</h3>
  </div>
  <h3 class="heading">SEXUAL HISTORY</h3>
  <div>
  <h3>NAN</h3>
  </div>
  <h3 class="heading">PAST DISEASE</h3>
  <div>
  <h3>NAN</h3>
  </div>
  <h3 class="heading">FAMILY DISEASE</h3>
  <div>
  <h3>NAN</h3>
  </div>
  <h3 class="heading">PAST SURGERY</h3>
  <div>
  <h3>NAN</h3>
  </div>
 </div>
 <div class="labouratoryData">
 <h3 class="heading">LABOURATORY TESTS</h3>
  <table>
    <thead>
      <tr>
      <td>Date</td>
      <td>Time</td>
      <td>Kind of Test</td>
      <td>Test Specific</td>
      <td>Test Result</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>23-08-2023</td>
        <td>23:10</td>
        <td>Immunoassay Single Tests</td>
        <td> Drug Screening Test</td>
        <td>download</td>
      </tr>
    </tbody>
  </table>
 </div>
 <div class="radiologyData">
 <h3 class="heading">RADIOLOGY TESTS</h3>
  <table>
    <thead>
      <tr>
      <td>Date</td>
      <td>Time</td>
      <td>Kind of Test</td>
      <td>Test Specific</td>
      <td>Test Result</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>23-08-2023</td>
        <td>23:10</td>
        <td>Immunoassay Single Tests</td>
        <td> Drug Screening Test</td>
        <td>download</td>
      </tr>
    </tbody>
  </table>
 </div>

 <div class="vitalData">
 <h3 class="heading">VITAL DATA</h3>
  <table>
    <thead>
      <tr>
      <td> 24/7</td> 	 	 	
      <td>Temp(C)</td>
      <td>BP(mmdg)</td>
      <td>Pulse(bp/m)</td>
      <td>Resp.(cm)</td>
      <td>Spo2(%)</td>
      <td>Weigdt(kg)</td>
      <td>Intake(m/s)</td>
      <td>Output</td>
      <td>BMI</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <div>1st Jan. 2024</div>
          <div>2:30pm</div>
      </td>
        <td>36</td>
        <td>120/60</td>
        <td>60</td>
        <td>16</td>
        <td>97</td>
        <td>0</td>
        <td>0 </td>
        <td>0 </td>
        <td>0 </td>
      </tr>
    </tbody>
  </table>
 </div>

 <div class="select-ward listing">
  <h3>Select Ward</h3>
  <div class="each_sections">
    <div class="form-control">
    <label>Ward 1</label>
  <select name="" id="">
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  </select>
    </div>

    <div class="form-control">
  <label>Ward 2</label>
  <select name="" id="">
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  </select>
  </div>
 </div>
 <button class="btn_submit">Book ward</button>
 <button class="btn_submit" onclick="uploadSection()">Upload consent form</button>
 <button class="btn_submit" onclick="bookinSection()">Book patient</button>
</div>
</div>


        <div class="booking_section hide">
            <div class="booking_container">
                <form action="">
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Type of Surgery & Amount</label>
                        <input type="text">
                    </div>
                    <div class="form-control">
                        <label for="">Amount</label>
                        <input type="text">
                    </div>
                    </div>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Special Equipment</label>
                        <input type="text">
                    </div>
                    <div class="form-control">
                        <label for="">Date of Surgery</label>
                        <input type="date">
                    </div>
                    <div class="form-control">
                        <label for="">Time of Surgery</label>
                        <input type="time">
                    </div>
                    .</div>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Select Surgeon</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-control">
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
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Select Nurse</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-control">
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


          <div class="upload-section hide">
            <h3>Upload Files & Documents</h3>
          <div class="flex_upload_div">
            <div class="upload_container">
              <i class="fa fa-folder-open" id="upload_icon"></i>
              <span>Drag and drop file</span>
              <h3>-OR-</h3>
              <input type="file" value="Upload File" class="browse_file">
            </div>
          </div>
          </div>
          </div>
          <!-- <div class="vital_section">
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
          </div> -->
        
        <script src="index.js"></script>
</body>
</html>