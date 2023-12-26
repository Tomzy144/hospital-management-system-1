<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="nurse_section.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <i class="fa fa-long-arrow-left" id='back-arrow' onClick='backWardArrow()'></i>
        <div class="logo">
            <span style="font-size:2rem; color:#fff;">FRIDDA</span>
        </div>
             </nav>
             <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
   </div>
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
    <div class="patient_ward_bed_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    1.
                </div>
                <div class="patient_info">
                    <span>Precious Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <!--Wards--->
                    <div class="ward_container hidden">
                        <label for="ward">Change Ward</label>
                        <select name="ward" id="ward">
                            <option value="ward_select"></option>
                            <option value="ward_1">Ward 1</option>
                            <option value="ward_2">Ward 2</option>
                            <option value="ward_3">Ward 3</option>
                            <option value="ward_4">Ward 4</option>
                            <option value="ward_5">Ward 5</option>
                            <option value="ward_6">Ward 6</option>
                        </select>
                        <button id="submit">Submit</button>
                    </div>
                    <!--Beds--->
                    <div class="bed_container hidden">
                        <label for="bed">Change Bed</label>
                        <select name="bed" id="bed">
                            <option value="bed_select"></option>
                            <option value="bed_1">Bed 1</option>
                            <option value="bed_2">Bed 2</option>
                            <option value="bed_3">Bed 3</option>
                            <option value="bed_4">Bed 4</option>
                            <option value="bed_5">Bed 5</option>
                            <option value="bed_6">Bed 6</option>
                        </select>
                        <button id="submit">Submit</button>
                    </div>
                    <!--Ward-- Round-->  
                    <div class="ward_round_container hidden">
                        <label for="stage">Stage</label>
                        <select name="stage" id="stage">
                            <option value="no_selection"></option>
                            <option value="am">Am</option>
                            <option value="am">Pm</option>
                        </select>
                        <label for="note">WR Note</label>
                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        <button id="submit">Submit</button>
                    </div>

                    <div class="impatient_container hidden">
                        <div class="form_control">
              <label for="temperature">Temperature</label>
              <input type="text">
              </div>
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
              </div>
              <button id="submit">Submit</button>
                  </div>
                    <div class="buttons">
                    <button id="ward_btn">Ward 6</button>
                    <button id="bed_btn">Bed 6</button>
                    <button  id="ward_round_btn">Ward Round</button>
                    <button id="impatient_vital_btn">Inpatient Vitals</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="nurse_section.js"></script>
</body>
</html>

             
            
                    
                  