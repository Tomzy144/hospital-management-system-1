<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity Dashboard</title>
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="martanity.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="section1">
            <button id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
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
            <img id="image_profile_account" src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
            <h4>Princess Esther Asuquo</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
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
                <i class="fa fa-medkit" id="icon" onClick="click_prescribtion_button()"></i>
                <i class="fa fa-user" id="icon" onClick="click_antenal_button()"></i>
                <i class="fa fa-users" id="icon" onClick="click_postnatal_button()"></i>
                <i class="fa fa-hospital-o" id="icon"onClick="click_appoitment_button()"></i>
                <i class="fa fa-edit (alias)" id="icon" onClick="click_vital_button()" ></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
        <div class="contents">
    <div class="button_container">
    <button onClick="click_postnatal_button()" id="btn_sections">Postnatal Admission</button>
    <button onClick="click_antenal_button()" id="btn_sections">Antenatal Admission</button>
    <button onClick="click_appoitment_button()" id="btn_sections">Doctor Appoitment</button>
    <button id="btn_sections" onClick="click_prescribtion_button()">Prescribtion</button>
    <button onClick="click_vital_button()" id="btn_sections">Vital</button>
    </div>
    </div>

<div class="appoitment_section hide">
            <div class="appoitment_container">
                <section class="doctor_roles_name hide">
                    <i class="fa fa-times" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
                <div class="appoitment-calender">
                    <div class="doc_roles">
                <label for="roles">Doctor Role:</label>
<select id="roles"  onclick="getDoctors()">
<option>Select</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="surgeon">Surgeon</option>
    <option value="psychiatrist">Psychiatrist:</option>
    <option value="family_medicine">Family Medicine</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="anaesthesiology">Anaesthesiology</option>
    <option value="rheumatologist">Rheumatologist</option>
    <option value="endocrinologist">Endocrinologist</option>
    <option value="nephrologist">Nephrologist</option>
    <option value="neurologist">Neurologist</option>
    <option value="pediatrician">Pediatrician</option>                
    <option value="urologist">Urologist</option>
    <option value="radiologist">Radiologist</option>
    <option value="dentist">Dentist</option>
    <option value="pulmonologist">Pulmonologist</option>
    <option value="podiatristian">Podiatristian</option>
    <option value="emergency_physician">Emergency Physician</option>
    <option value="anaesthesiologist">Anaesthesiologist</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="oncologist">Oncologist</option>
    <option value="gastroenterologist">Gastroenterologist</option>
    <option value="ophthanlmologist">Ophthanlmologist</option>
    <option value="cardology">Cardology</option>
    <option value="allergist">Allergist</option>
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option> 
    <!-- Add more role options as needed-->
</select>
<label for="doctors">Select Doctor:</label>
<select id="doctors">
    Doctors for the selected role will be dynamically added here
</select>
<button id="continue" type="submit" onClick="submitRoles()" >Continue</button>
</div>
    <div class="appoitment_form hidden">
<div class="calendar">
            <div class="month">
                <i class="fa fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fa fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"> </div>
        </div>
        <div class="form_appoitment">
            <h3>Fill in the neccessary Information</h3>
            <form action="" class="form">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" placeholder="john">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" placeholder="id001">
                </div>
                <div class="form_control">
                    <label for="">Selected Date</label>
                    <div class="selected_date">03-01-2024</div>
                </div>
                <div class="form_control">
                    <label for="">Selected Time</label>
                    <input type="time">
                </div>
                <div class="form_control_text_area">
                    <label for="">Request Type</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="btn_submit_appoitment">Submit</button>
                </div>
            </form>
        </div>
        </div>
                </section>
            <section class="appoitments">
            <h1>Appoitments</h1>
            <div class="cards_container">
            <div class="cards">
                <div class="profile">
                    <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Rita John</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
                <div class="profile">
                    <img src="../Images/513d2ccb77e948b687079bc2d6f42661.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Mary Asuquo</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Patience Emmanuel</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Kingsley Patrick</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            </div>
            </section>
            </div>
        </div>

    <div class="form_container_for_antenatal hide">
    <form action="">
        <div class="form_section current_section" id="section1">
        <h1>Antenatal Registration Form</h1>
        <div class="upload_image_antenatal">
             <video id="videoElement_antenatal" width="400" height="300" autoplay></video>
            <i class="fa fa-plus" id="capture_image_antenatal" onclick="openCamera2()"></i>
            <canvas id="canvasElement_antenatal" style="display: none;"></canvas>
            <img id="capturedImage_antenatal" style="display: none;">
        </div>
        <div class="btn_re_capture2 hide"  onclick="retakePicture2()">Recapture</div>
        <div class="btn_capture2 hide" onClick="takePicture2()">Capture</div>
        <h2>Fill in the neccesary information</h2>
        <span>Patient Info</span>
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>

        <div class="form_control">
        <label for="">Address</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Emergency Contact</label>
        <input type="text">
        </div>
 
        <span>Spouse/Partner Information</span>
   
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text">
       </div>

       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <button class="btn_next1" type="button" id="btn_next" onClick="nextForm1()">Next</button>
        </div>
    <div class="form_section current_section" id="section2">

        <span>Insurance Information</span>
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
   
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>

        <span>Medical History</span>
    <div class="form_control">
        <label for="">Previous Pregnacies</label>
        <input type="text">
       </div>
       <div class="form_control">
        <label for="">Chronic Condition</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Alergies</label>
        <input type="text">
        </div>
        <button class="btn_back2" type="button" id="btn_next" onClick="backFrom2()">Back</button>
        <button class="btn_next2" type="button" id="btn_next" onClick="nextForm2()">Next</button>
</div>


<div class="form_section current_section" id="section3">
        <span>Antenatal Care Information</span>
        <div class="form_control">
        <label for="">Date of first prenatal visit</label>
        <input type="date">
    </div>
    <div class="form_control">
        <label for="">Curent Gestational Age</label>
        <input type="text">
    </div>
    <div class="form_control">
        <label for="">Prenatal visit</label>
        <input type="text">
    </div>

    <div class="form_control">
        <label for="">Recent Ultrasound details</label>
        <input type="text">
    </div>
        <span>Health Status</span>
  <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text">
      </div>

      <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
      </div>
        <button class="btn_back3" type="button" id="btn_next" onClick="backFrom3()">Back</button>
        <button class="btn_submit" type="button">Submit</button>
        </div>
    </form>
    </div>

<div class="form_container_for_postnatal hide">
<form action="">
        <div class="form_section current_section" id="section1_pos">
        <h1>Postnatal Registration Form</h1>
        <div class="upload_image_postnatal">
             <video id="videoElement_postnatal" width="400" height="300" autoplay></video>
            <i class="fa fa-plus" id="capture_image_postnatal" onclick="openCamera1()"></i>
            <canvas id="canvasElement_postnatal" style="display: none;"></canvas>
            <img id="capturedImage_postnatal" style="display: none;">
        </div>
        <div class="btn_re_capture1 hide"  onclick="retakePicture1()">Recapture</div>
        <div class="btn_capture1 hide" onClick="takePicture1()">Capture</div>
        <h2>Fill in the neccesary information</h2>
        <span>Patient Info</span>
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>

        <div class="form_control">
        <label for="">Address</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Emergency Contact</label>
        <input type="text">
        </div>
 
        <span>Spouse/Partner Information</span>
   
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text">
       </div>

       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <button class="btn_next1" type="button" id="btn_next_pos" onClick="nextForm1Pos()">Next</button>
        </div>
    <div class="form_section current_section" id="section2_pos">

        <span>Insurance Information</span>
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
   
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>

        <span>Delivery Details</span>
    <div class="form_control">
        <label for="">Date and time of the Delievery</label>
        <input type="datetime-local">
       </div>
       <div class="form_control">
        <label for="">Mode of Delivery</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Complications During Delivery</label>
        <input type="text">
        </div>
        <button class="btn_back2" type="button" id="btn_next_pos" onClick="backFrom2Pos()">Back</button>
        <button class="btn_next2" type="button" id="btn_next_pos" onClick="nextForm2Pos()">Next</button>
</div>
<div class="form_section current_section" id="section3_pos">
        <span>Postpartum Care Information</span>
        <div class="form_control">
        <label for="">Recovery Progress</label>
        <input type="text">
    </div>
    <div class="form_control">
        <label for="">Breastfeeding Support</label>
        <input type="text">
    </div>
    <div class="form_control">
        <label for="">Postpartum Checkup Schedule</label>
        <input type="text">
    </div>

        <span>Health Status</span>
  <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
      </div>

      <div class="form_control">
        <label for="">Pain Assessment</label>
        <input type="text">
      </div>
      <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text">
      </div>
        <button class="btn_back3" type="button" id="btn_next_pos" onClick="backFrom3Pos()">Back</button>
        <button class="btn_submit" type="button">Submit</button>
        </div>
    </form>
    </div>
    <div class="treatment_prescribtion_container hidden">
        <div class="flex_contain">
                <div class="form_container">
                <div class="calpsule">
                    <span>Calpsule</span>
                </div>
                <form action="" class="prescribtion_form">
                <div class="form_control">
                    <label for="">CHLOROQUINE 150mg</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Strength</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Administration</label>
                   <select name="" id="">
                    <option value="">Im</option>
                    <option value="">Null</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Dos</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Unit</label>
                    <select name="" id="">
                    <option value="">Nulll</option>
                    <option value="">True</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Duration</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Cost</label>
                    <input type="text">
                </div>
</form>
                </div>
                <div class="form_container">
                <div class="calpsule">
                    <span>Injection</span>
                </div>
                <form action="" class="prescribtion_form">
                <div class="form_control">
                    <label for="">CHLOROQUINE 150mg</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Strength</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Dos</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Unit</label>
                    <select name="" id="">
                    <option value="">Nulll</option>
                    <option value="">True</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Duration</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <div class="form_control">
                    <label for="">Cost</label>
                    <input type="text">
                </div>
</form>
                </div>
                </div>
               
    </div>
    <div class="new_vital hidden">
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
                    <button class= "btn_vital" onClick="showVitals()">Vital Input</button>
                    <div class="vitals_input hidden">
                        <form action="" class="vital_form">
                            <div class="form_control">
                                <label for="">Height of Fundus</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Presentation and position</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Relation of presenting part of brim</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Fostal heart</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Urine</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">B.P</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Weight</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">P.C.V</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Oe.dema</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Initial of Examiner</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Return Date</label>
                                <input type="date">
                            </div>
                            <div class="form_control">
                                <label for="">Remark</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
</div>
</div>
<div class="each_container">
                <div class="number_container">
                    2.
                </div>
                <div class="patient_info">
                    <span>Michelle Prince</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_vital" onClick="showVitals()">Vital Input</button>
                    <div class="vitals_input hidden">
                        <form action="" class="vital_form">
                            <div class="form_control">
                                <label for="">Height of Fundus</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Presentation and position</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Relation of presenting part of brim</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Fostal heart</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Urine</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">B.P</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Weight</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">P.C.V</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Oe.dema</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Initial of Examiner</label>
                                <input type="text">
                            </div>
                            <div class="form_control">
                                <label for="">Return Date</label>
                                <input type="date">
                            </div>
                            <div class="form_control">
                                <label for="">Remark</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
</div>
    </div>
<script src="martanity.js"></script>
</body>
</html>