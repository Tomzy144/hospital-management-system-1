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
                <i class="fa-solid fa-person-pregnant" id="icon" onclick="antenatalSection()"></i>
                <i class="fa-solid fa-baby" id="icon" onclick="postnalSection()"></i>
                <i class="fa-solid fa-person-breastfeeding" id="icon" onclick="labourSection()"></i>
                <i class="bi bi-calendar-date-fill icons" id="icon"onclick="_display_appoitment_section()"></i>
                <i class="bi bi-pencil-square" id="icon" onClick="click_vital_button()" ></i>
                <i class="bi bi-box-arrow-right" id="icon"></i>
            </div>
        </div>
          <!----END OF NAVBAR AND SIDEBAR-->


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
                <tbody onclick="anternal_patient_profile_section()">
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

        <!----START OF THE ANTENATAL PATIENT PROFILE -->
        <div class="antenatal_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
            <!---Vital Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="vital_button">Vitals</button>
            <div class="vitals_input hide">
                <form action="" class="_inputs">
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Height of Fundus</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Presentation and Position</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Relation of presenting part to brim</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Fostal Heart</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Urine</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">B.P</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Weight</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">P.C.V</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Oedema</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Remark</label>
                     <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="drug_prescription_button">Drug Prescription</button>
            <div class="drug_prescribtion hide">
            <form action="" class="_inputs">
            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
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
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button class="btn_patients_profile btn_white">Book Drugs</button>
                  </form>
            </div>

                  <!---Lab Examination Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="lab_button">Labouratory Examination</button>
            <div class="lab_input hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Blood Test</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Urine Test</label>
                        <input type="file" name="" id="">
                    </div>
                </div>
                </form>
            </div>

                  <!---Radiology Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="radiology_button">Radiology Examination</button>
            <div class="radiology_input hide">
                <form action="" class="_inputs">
                    <span>Ultrasound Scan</span>
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Dating Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Anomally Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Growth Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Doppler Ultrasound Scan</label>
                        <input type="file" name="" id="">
                    </div>
                </div>
                </form>
            </div>

                  <!---Screening Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="screening_button">Screening</button>
            <div class="screening_input hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                <div class="flex_div">
                    <div class="form_control">
                        <label for="">Genetic Screening and Testing</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Group B Streptococcus (GBS) Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Gestational Age assement</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Cervical Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <span>Screening for Infection</span><br/>
                        <div class="flex_wrap">
                        <div class="div">
                        <label for="">Hiv Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Syphilis Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Hepatitis B Surface Antigen Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Rubella Immunity Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Gonorrhea and Chlamydia Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <button class="btn_patients_profile">Save all</button>
  </div>
  </div>
     <!----END OF THE ANTERNATAL -->

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
                <tbody onclick="postnatal_patient_profile_section()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots"></i>
                    </td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots"></i>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
  </div>
   <!----END OF THE POSTNATAL LIST-->

      <!----START OF THE POSTNATAL PATIENT PROFILE -->
      <div class="postnatal_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
                              <!---Pastnatal accessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <button class= "btn_patients_profile" id="postnatal_assessment_button"> Postnatal Assessment</button>
                    <div class="postnatal_accessment_form hide">
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

                                      <!---Neonatal assessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <button class= "btn_patients_profile" id="neonatal_assessment_button"> Neonatal Assessment</button>
                    <div class="neonatal_assessmen_form hide">
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
                        </form>
                        </div>
                                          <!---Lab and Diagnotic Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                        <button class= "btn_patients_profile" id="lab_diagnostic_button">Laboratory and Diagnostic Tests</button>
                        <div class="labouratory_diagnostic_test_form hide">
                        <form action="">
                        <span>Laboratory and Diagnostic Tests</span>
                            <div class="sections">
                                <div class="form_control">
                                    <label for="">Blood Tests</label>
                                    <input type="file" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Urine Tests</label>
                                    <input type="file" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Imaging Studies</label>
                                    <input type="file" name="" id="">
                                </div>
                                </div>
                        </form>
                        </div>
                                          <!---Drug Prescription Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                        <button class= "btn_patients_profile" id="drug_prescription_button2"> Drug Prescription</button>
                        <div class="drug_prescribtion2 hide">
                        <form action="">
                        <span>Drug Prescribion</span>
                        <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
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
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button class="btn_patients_profile btn_white">Book Drugs</button>
                        </form>
                        </div>
                        <button class="btn_patients_profile">Save all</button>
                    </div>
                </div>
                    </div>
                       <!----END OF THE POSTNATAL PATIENT PROFILE -->


   <!----START OF THE LABOUR FORM-->
   <div class="labour_section hide">
           <div class="form_container_for_labor">
        <form action="">
        <h2>Labour Registration Form</h2>
        <div class="upload_image_labor">
             <video id="videoElement_labor" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_labor" onclick="openCamera3()"></i>
            <canvas id="canvasElement_labor" style="display: none;"></canvas>
            <img id="capturedImage_labor" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture3 hide"  onclick="retakePicture3()">Recapture</div>
        <div class="btn_capture3 hide" onClick="takePicture3()">Capture</div>
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
        <label for="">Next of Kin's Phone Number</label>
        <input type="text" placeholder="+234 323 323 22">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Antenatal  Clinic Attended</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Expected Due date of Delivery</label>
        <input type="date" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Number of Pregnacies and Live Births</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Blood Group</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Rhesus Factor</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Hiv Status</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medical Condition</label>
        <input type="text" placeholder="input">
        </div>
        </div>

        <span>Labour Details</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Date of Onset of Labor</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Time of Onset of Labor</label>
        <input type="time">
        </div>
        <div class="form_control">
        <label for="">Duration of Labor</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Constration</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Fetal Movements</label>
        <input type="text" placeholder="input"> 
        </div>
        <div class="form_control">
        <label for="">Pain Level</label>
        <input type="text" placeholder="input">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE LABOUR FORM-->

          
                <!----START OF THE LABOUR LIST-->
                <div class="labor_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Labour Patient Admission List</h2>
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
                <tbody onclick="labour_patient_profile_section()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon"></i>
                    </td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon"></i>
                    </td>
                </tbody>
                <div class="tranfer_box hide">
                    <i class="bi bi-x-lg red"  onclick="_close_transfer_dropdowns()"></i>
                <ul>
                    <li onclick="_nurse_transfer_from_labour()">Call in Nurse Station</li>
                    <li onclick="_doc_transfer_from_labour()">Doctor Appoitment</li>
                    <li onclick="_surgical_suite_transfer_from_labour()">Transfer to Surgical Suite</li>
                    <li onclick="_labour_transfer_from_labour()">Transfer to Labour Ward</li>
                    <li onclick="_lab_transfer_from_labour()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_labour()">Transfer to Radiology</li>
                    <li onclick="_icu_transfer_from_labour()">Transfer to I.C.U</li>
                </ul>
            </div>
            <!-----NURSE APPOITMENT--->
            <div class="nurse_appoitment hide">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Nurse Station</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>
            <!-----DOCTOR APPOITMENT--->
            <div class="doctor_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Doctor Appoitment</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                    <!-----SURGICAL SUITE APPOITMENT--->
                    <div class="surgical_suite_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Surgical Suite Unit</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----LABOUR WARD APPOITMENT--->
                        <div class="labour_ward_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Labour Ward Unit</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----LABOURATORY APPOITMENT--->
                        <div class="lab_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Labouratory Unit</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----RADIOLOGY APPOITMENT--->
                        <div class="radiology_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>Radiology Unit</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----I.C.U APPOITMENT--->
            <div class="icu_appoitment hide">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
            <form action="">
                <span>I.C.U Unit</span>
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

            <div class="background_opacity hide"></div>
            </table>
        </div>
    </div>
  </div>
   </div>

           <div class="labour_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
            <!---Vital Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="vital_button2">Vitals</button>
            <div class="vitals_input2 hide">
                <form action="" class="_inputs"> 
                <span>Blood Pressure</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <span>Pre-Labor Baseline</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <span>During Labour</span>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <span>Post Delivery</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Pulse Rate</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Pre-Labor Baseline (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (bpm)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Respiratory Rate</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Pre-Labor Baseline (breaths/min)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (breaths/min)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Temperature</span>
                    <div class="div_flexs">
                    <div class="form_control">
                    <label for="">Pre-Labor Baseline (C/F)</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="drug_prescription_button3">Drug Prescription</button>
            <div class="drug_prescribtion3 hide">
            <form action="" class="_inputs">
            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="drugs">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="drugs_strength">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="drug_mode">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                  </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="drug_freq">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text" name="" id="drug_qty">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button type="button" class="btn_patients_profile btn_white" onclick="_bookDrugs()">Book Drugs</button>
                  </form>
            </div>

                  <!---Lab Examination Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="lab_button2">Labouratory Examination</button>
            <div class="lab_input2 hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Blood Test</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Urine Test</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Fluid Analysis</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Cord Blood Sampling</label>
                        <input type="file" name="" id="">
                    </div>
                </div>
                </form>
            </div>

                  <!---Radiology Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="radiology_button2">Radiology Examination</button>
            <div class="radiology_input2 hide">
                <form action="" class="_inputs">
                    <span>Ultrasound Scan</span>
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Dating Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Anomally Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Growth Scan</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Doppler Ultrasound Scan</label>
                        <input type="file" name="" id="">
                    </div>
                </div>
                </form>
            </div>

                  <!---Screening Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <button class="btn_patients_profile" id="screening_button2">Screening</button>
            <div class="screening_input2 hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Continous Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Cervical Dilatation Assessment</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Vaginal Examination</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Group B Streptococcus (GBS) Status Check</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Blood Pressure Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>
            <button class="btn_patients_profile">Save all</button>
        </div>
  </div>
  <div class="drugs_booking hide">
  <i class="bi bi-x-lg" id="close" onClick="hide_test_booking()"></i>
    <h1>Drug Booking</h1>
    <table id="dataTable3">
        <thead>
            <td>Drugs Name</td>
            <td>Strength </td>
            <td>Mode </td>
            <td>Frequency </td>
            <td>Quantity </td>
        </thead>
        <tbody>
          
        </tbody>
    </table>
    <button>Book now</button>
    </div>
  </div>

  <div class="overlay hide"></div>
       <!----END OF THE ADMISSION SECTION-->














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
        <script src="js/jquery-3.7.1.js"></script>
<script src="js/martanity.js"></script>
</body>
</html>