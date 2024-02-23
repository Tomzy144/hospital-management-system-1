<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity Dashboard</title>
    <link rel="stylesheet" href="style/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style/icons-1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/martanity.css">
</head>
<body>
    <!----START OF NAVBAR AND SIDEBAR-->
    <div class="navbar">
        <div class="section1">
            <button id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
        </div>
        <div class="section2">
            <div class="icons">
            <i class="bi bi-person-fill" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="bi bi-bell-fill" id="icon">
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
      <!----START OF SIDEBAR-->
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="bi bi-chat-dots-fill" id="icon"></i>
                <i class="fa-solid fa-baby" id="icon" onclick="postnalSection()"></i>
                <i class="fa-solid fa-person-pregnant" id="icon" onclick="antenatalSection()"></i>
                <i class="bi bi-calendar-date-fill icons" id="icon"onClick="click_appoitment_button()"></i>
                <i class="bi bi-pencil-square" id="icon" onClick="click_vital_button()" ></i>
                <i class="bi bi-box-arrow-right" id="icon"></i>
            </div>
        </div>
          <!----END OF NAVBAR AND SIDEBAR-->


               <!----START OF THE ADMISSION SECTION-->
               
               <!----START OF THE ANTERNATAL FORM-->
               <div class="antenal_section">
          <div class="form_container_for_antenatal">
    <form action="">
        <h2>Antenatal Registration Form</h2>
        <div class="upload_image_antenatal">
             <video id="videoElement_antenatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_antenatal" onclick="openCamera2()"></i>
            <canvas id="canvasElement_antenatal" style="display: none;"></canvas>
            <img id="capturedImage_antenatal" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture2 hide"  onclick="retakePicture2()">Recapture</div>
        <div class="btn_capture2 hide" onClick="takePicture2()">Capture</div>
        </div>
        <span>Patient Info</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text" placeholder="Calabar">
        </div>
        <div class="form_control">
        <label for="">Emergency Contact</label>
        <input type="text" placeholder="+234 832 323 32">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 732 332 33">
        </div>
        </div>
        <span>Spouse/Partner Information</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text" placeholder="John Smith">
       </div>
       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 732 323 23">
        </div>
        </div>

        <span>Insurance Information</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text" placeholder="Mtn Ltd">
        </div>
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text" placeholder="32312">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Previous Pregnacies</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Chronic Condition</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Alergies</label>
        <input type="text" placeholder="input">
        </div>
        </div>

        <span>Antenatal Care Information</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Date of first prenatal visit</label>
        <input type="date">
    </div>
    <div class="form_control">
        <label for="">Curent Gestational Age</label>
        <input type="text" placeholder="input">
    </div>
    <div class="form_control">
        <label for="">Prenatal visit</label>
        <input type="text" placeholder="input">
    </div>
    <div class="form_control">
        <label for="">Recent Ultrasound details</label>
        <input type="text" placeholder="input">
    </div>
    </div>

        <span>Health Status</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text" placeholder="input">
      </div>
      <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text" placeholder="input">
      </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
           <!----END OF THE ANTERNATAL FORM-->

        <!----START OF THE ANTERNATAL LIST-->
           <div class="anternal_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Anternal Patient Admission List</h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <td>S/N</td>
                    <td>Patient Profile</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Date of Admission</td>
                </thead>
                <tbody onclick="paitentProfile()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                </tbody>
            </table>
        </div>
    </div>
  </div>
   <!----END OF THE ANTERNATAL LIST-->
  </div>

            <!----START OF THE POSTNATAL FORM-->
            <div class="postnal_section hide">
           <div class="form_container_for_postnatal">
        <form action="">
        <h2>Postnatal Registration Form</h2>
        <div class="upload_image_postnatal">
             <video id="videoElement_postnatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_postnatal" onclick="openCamera1()"></i>
            <canvas id="canvasElement_postnatal" style="display: none;"></canvas>
            <img id="capturedImage_postnatal" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture1 hide"  onclick="retakePicture1()">Recapture</div>
        <div class="btn_capture1 hide" onClick="takePicture1()">Capture</div>
    </div>
        <span>Patient Info</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text" placeholder="Calabar">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 238 323 33">
        </div>
        <div class="form_control">
        <label for="">Occupation</label>
        <input type="text" placeholder="Banker">
        </div>
        <div class="form_control">
        <label for="">Next of Kin</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Relationship to Patient</label>
        <input type="text" placeholder="Relation">
        </div>
        <div class="form_control">
        <label for="">Next of Kin's Phone Number</label>
        <input type="text" placeholder="+234 323 323 22">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Gestational Age</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Complications during Pregnacy</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medical Conditions/Allergies</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Previous Pregnacies/Births</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medications/Supplements during Pregnacy</label>
        <input type="text" placeholder="input">
        </div>
        </div>

        <span>Delivery Details</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Date of Delivery</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Time of Delivery</label>
        <input type="time">
        </div>
        <div class="form_control">
        <label for="">Mode of Delivery</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Birth Weight of Baby</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Apgar Scores</label>
        <input type="text" placeholder="input"> 
        </div>
        <div class="form_control">
        <label for="">Complications During Delivery</label>
        <input type="text" placeholder="input">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE POSTNATAL FORM-->

          
                <!----START OF THE POSTNATAL LIST-->
                <div class="postnatal_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Postnatal Patient Admission List</h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <td>S/N</td>
                    <td>Patient Profile</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Date of Admission</td>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                </tbody>
            </table>
        </div>
    </div>
  </div>
   <!----END OF THE ANTERNATAL LIST-->
        </div>

       <!----END OF THE ADMISSION SECTION-->
   
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
    <div class="patient_profile hidden">
    <!-- <div class="search-container">
    <div class="search-bar">
        <div id="select">
            <p id="selectText"></p>
            <i class="fa fa-sort-desc"></i>
            
    <ul id="list">
        <li class="options" id="0" onclick="showTable('All')">All</li>
        <li class="options" id="1" onclick="showTable('POC')">POC</li>
        <li class="options" id="6"  onclick="showTable('ANC')">ANC</li>
    </ul>
        </div>
            <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
    </div> 
    </div> -->
            <div class="patient_container">
                <div class="patient_info">
                <div class="patient_profile">
                <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="" />
                <div class="patient_name_id">
                    <span>Precious Joseph</span>
                    <span>  PATOOO1</span>
                    </div>
                    </div>
                    <button class= "btn" onclick="dispalyPostalAccessmentForm()"> Postal Assessment</button>
                    <div class="postal_accessment_form hidden">
                        <form action="">
                        <span>Mother's Vital Sign:</span>
                            <div class="sections">
                                <div class="form_control">
                                    <label for="">Temperature (C)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Blood Pressure (mmHg)</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Pulse (bpm)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Respiratory Rate (breaths/min)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Uterine Involution</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Perineal/Abdominal Wounds</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Breastfeeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Immediate Concerns/Complications</label>
                                    <input type="text" name="" id="" >
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class= "btn" onclick="dispalyNeonatalAccessmentForm()"> Neonatal Assessment</button>
                    <div class="neonatal_assessmen_form hidden">
                        <form action="">
                        <span>Baby's Condition:</span>
                            <div class="sections">
                                <div class="form_control">
                                    <label for="">Feeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Urination</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Bowel Movements</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Signs of Jaundice or other concerns</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Medications/Treatments Administered</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Laboratory and Diagnostic Tests</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <span>Results of Tests:</span>
                            <div class="sections">
                                <div class="form_control">
                                    <label for="">Blood Tests</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Urine Tests</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Imaging Studies</label>
                                    <input type="text" name="" id="">
                                </div>
                                </div>
                        </form>
                        </div>
                        <button class= "btn" onclick="dispalyTreatmentPlanForm()">Treatment Plan for Mother and Baby</button>
                        <div class="treatment_plan_form hidden">
                        <form action="">
                            <div class="sections">
                                <div class="form_control">
                                    <label for="">Follow-up Appointments</label>
                                    <input type="date" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Consent for Treatment</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Discharge Planning</label>
                                    <input type="date" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Counseling/Education Provided</label>
                                    <input type="text" name="" id="" >
                                </div>
                            </div>
                        </form>
                        </div>
                        <button>Save all</button>
                    </div>
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
<script src="js/martanity.js"></script>
</body>
</html>