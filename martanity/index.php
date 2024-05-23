<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity Dashboard</title>
    <link rel="stylesheet" href="style/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style/icons-1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/martanity.css">
    <link rel="stylesheet" href="style/animate.css">

</head>
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
      <!--------------------------------------START OF SIDEBAR------------------------------------------------------>

      <div class="sidebar">
        <div class="sidebar__header">
     
        </div>
            <div class="sidebar-body">
                <ul>
                    <li onclick="antenatalSection()" id="links" class="active">
                        <i class="fa-solid fa-person-pregnant"></i>
                        <span>Aternatal unit</span>
                    </li>
                    <li onclick="anternatalPatientList()" id="links">
                        <i class="fa-solid fa-person-pregnant"></i>
                        <span>Anternatal patient list</span>
                    </li>
                    <li onclick="postnatalSection()" id="links">
                        <i class="fa-solid fa-baby"></i>
                        <span>Postnatal unit</span>
                    </li>
                    <li onclick="postnatalPatientList()" id="links">
                        <i class="fa-solid fa-baby"></i>
                        <span>Postnatal patient list</span>
                    </li>
                    <li onclick="labourSection()" id="links">
                        <i class="fa-solid fa-person-breastfeeding"></i>
                        <span>Labour unit</span>
                    </li>
                    <li onclick="labourPatientList()" id="links">
                        <i class="fa-solid fa-person-breastfeeding"></i>
                        <span>Labour patient list</span>
                    </li>
                    <li onclick="document.getElementById('logoutform').submit();" id="links">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                        <form method="post" action="../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
                    </li>
                </ul>
            </div>
        </div>
          <!---------------------------END OF NAVBAR AND SIDEBAR----------------------------------------------->





               <!----------------------------------START OF THE ANTERNATAL FORM-------------------------------------->
    <div class="container">
     <div class="form_container" id="antenatal_section">
         <form action="">
            <h3>Antenatal Registration Form</h3>
        <div class="upload_div">
             <video  id="videoElement_antenatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus capture_image_icon" id="capture_image_antenatal" onclick="openCamera2()"></i>
            <canvas id="canvasElement_antenatal" style="display: none"></canvas>
            <img class="capturedImage" id="capturedImage_antenatal" style="display: none">
        </div>
        <div class="flex_capture_button">
            <div class="btn_capture hide" id="capture_patient1" onclick="takePicture2()">Capture</div>
             <div class="btn_recapture hide" id="recapture_patient1"  onclick="retakePicture2()">Recapture</div>
        </div>

        <h3>Patient Info</h3>
     <div class="each_sections">
        <div class="form-control">
             <label for="anternatal__patient__name">Full name</label>
            <input type="text" name="anternatal__patient__name" id="anternatal__patient__name" autofocus = "true">
        </div>
        <div class="form-control">
            <label for="anternatal__patient__dob">Date of Birth</label>
            <input type="date" name="anternatal__patient__dob" id="anternatal__patient__dob">
        </div>
        <div class="form-control">
            <label for="anternatal__patient__address">Address</label>
            <input type="text" name="anternatal__patient__address" id="anternatal__patient__address">
        </div>
        <div class="form-control">
                <label for="anternatal__patient__phoneNumber">Contact Number</label>
                <input type="text" name="anternatal__patient__phoneNumber" id="anternatal__patient__phoneNumber">
        </div>
    </div>

        <h3>Spouse/Partner Information</h3>
 <div class="each_sections">
     <div class="form-control">
             <label for="anternatal__patient__partner__name">Full Name</label>
             <input type="text" name="anternatal__patient__partner__name" id="anternatal__patient__partner__name">
         </div>
     <div class="form-control">
            <label for="anternatal__patient__partner__phoneNumber">Contact Number</label>
            <input type="text" name="anternatal__patient__partner__phoneNumber" id="anternatal__patient__partner__phoneNumber">
    </div>
    </div>

        <h3>Medical History</h3>
    <div class="each_sections">
    <div class="form-control">
            <label for="anternatal__patient__previousPregnacies">Previous Pregnacies</label>
             <input type="text" name="anternatal__patient__previousPregnacies" id="anternatal__patient__previousPregnacies">
    </div>
    <div class="form-control">
             <label for="anternatal__patient__chronicCondition">Chronic Condition</label>
             <input type="text" name="anternatal__patient__chronicCondition" id="anternatal__patient__chronicCondition">
     </div>
    <div class="form-control">
                <label for="anternatal__patient__alergies">Alergies</label>
                <input type="text" name="anternatal__patient__alergies" id="anternatal__patient__alergies">
    </div>
    </div>

        <h3>Health Status</h3>
    <div class="each_sections">
    <div class="form-control">
            <label for="anternatal__patient__currentMedication">Current Medications</label>
            <input type="text" name="anternatal__patient__currentMedication" id="anternatal__patient__currentMedication">
    </div>
    <div class="form-control">
            <label for="anternatal__patient__vitalSign">Vital Signs</label>
            <input type="text" name="anternatal__patient__vitalSign" id="anternatal__patient__vitalSign">
    </div>
    </div>
        <button class="btn_submit" type="submit" id="submitAnternatalForm">Book</button>
    </form>
    </div>

   <!----------------------------- --------------------------------->


        <!----START OF THE ANTENATAL PATIENT PROFILE -->
        <div class="antenatal_patients_profile hide">
        <div class="patient_container hide" id="patient__input">
            <div class="patient_profile">
                <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                <div class="div_text">
                    <h3>Esther Patrick Samuel</h3>
                    <h3>PAT0003</h3>
                </div>
            </div>
                <div class="vitals_input">
                    <form action="">
                    <h1>Medical inputs</h1>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Height of Fundus</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Presentation and Position</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Relation of presenting part to brim</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Fostal Heart</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Urine</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">B.P</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Weight</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">P.C.V</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Oedema</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Remark</label>
                     <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="drug_prescription">
            <form action="" id="_inputs">
            <h1>Drugs prescription</h1>
            <div class="each_sections">
                                <div class="form-control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="drug">
                                </div>
                                <div class="form-control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="drug_strength">
                                </div>
                                <div class="form-control">
                                    <label for="">Mode</label>
                                    <select name="" id="drug_mode">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                  </div>
                <div class="form-control">
                    <label for="">Frequency</label>
                    <select name="" id="drug_freq">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form-control">
                    <label for="">Qty</label>
                  <input type="text" name="" id="drug_qty">
                </div>
                </div>
                <button type="button" class="btn add__drug">Add Drugs</button>
                <button type="button" class="btn" onclick="_bookDrugs()">Book Drugs</button>
                  </form>
            </div>

                  <!---Screening Examination Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="screening_input">
            <h1>Screening inputs</h1>
                <form action="">
                <div class="each_sections">
                <div class="each_sections">
                    <div class="form-control">
                        <label for="">Genetic Screening and Testing</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Group B Streptococcus (GBS) Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Gestational Age assement</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Cervical Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                    <h3>Screening for Infection</h3><br/>
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
        <button class="btn">Update data</button>
        <button class="btn" onclick="anternal_patient_hospital_record()">Check patient hospital record</button>
  </div>
  <!---------anternal drug booking------------------>
  <div class="drugs_booking hide" id="antenatal_drugs_booking">
  <i class="bi bi-x-square" onclick="_close_bookDrugs()"></i>
    <table id="dataTable">
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
    <button class="btn_submit">Book now</button>
    </div>   
</div>

<!----ANTENATAL PATIENT HOSPITAL RECORD INFORMATION-->
<div class="patient_container hide" id="patient_hospital_record">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
    <h3>Personal Information</h3>
        <ol>
            <li>Full Name: Moses Patrick Samuel</li>
            <li>Date of Birth: 7-03-2023</li>
            <li>Address: 23 Enebong Street Calabar</li>
            <li>Contact Number: 090328922</li>
        </ol>
 
        <h3>Spouse/Partner Information</h3>
        <ol>
            <li>Full Name: Esther Asuquo Etim</li>
            <li>Contact Number: 0907832832</li>
        </ol>
    </div>
    <div class="patient_inputs">
          <div class="_btn" id="_vital_1">Vitals/Data (8:30pm 13-09-2023)</div>
          <div class="_data" id="_data_1">
                    <div class="form-control">
                        <h4>Height of Fundus</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Presentation and Position</h4>
                        <span>23.033</span>
                    </div>
                    <div class="form-control">
                        <h4>Relation of presenting part to brim</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Fostal Heart</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>Urine</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>B.P</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Weight</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Weight</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>P.C.V</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Oedema</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Remark</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolorem magni eligendi autem eveniet ipsam dicta incidunt veniam sed? Ut ab maiores adipisci! Placeat repellendus, eveniet culpa non quis natus?</span>
                    </div>
    </div>
    <div class="_btn_info" onclick="_antenatal_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_lab()">Labouratory Examination</div>
    <table class="lab">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_rad()">Radiology Examination</div>
    <table class="rad">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_screening()">Screnning Examination</div>
    <div class="_data"  id="screening_div">
    <div class="form-control">
                        <h4>Genetic Screening and Testing</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Group B Streptococcus (GBS) Screening</h4>
                        <span>23.033</span>
                    </div>
                    <div class="form-control">
                        <h4>Fetal Monitoring</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Gestational Age assement</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>Cervical Screening</h4>
                        <span>Input</span>
                    </div>
                    <h3>Screnning for Infection</h3>
                    <table>
                        <thead>
                            <td>Hiv  Test</td>
                            <td>Syphilis Test</td>
                            <td>Hepatitis B Surface Antigen Test</td>
                            <td>Rubella Immunity Test</td>
                            <td>Rubella Immunity Test</td>
                            <td>Gonorrhea and Chlamydia Test</td>
                        </thead>
                        <tbody>
                            <td>Negative</td>
                            <td>Positive</td>
                            <td>Positive</td>
                            <td>Negative</td>
                            <td>Negative</td>
                            <td>Negative</td>
                        </tbody>
                    </table>
    </div>
    </div>
</div>
  </div>
</div>

<div class="list_div hide" id="anternatal_patient__list">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Anternal Patient Admission List</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Profile</td>
                        <td>Patient Name</td>
                        <td>Patient ID</td>
                        <td>Date of Admission</td>
                    </tr>
                </thead>
                <tbody>
                <tr onclick="anternatalPatientProfile()" id="patientProfile">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="bookPatient"></i>
                    </td>
                </tr>
                </tbody>
                <tbody>
                    <tr id="patientProfile">
                        <td>2</td>
                        <td>
                            <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                        </td>
                        <td>Mercy Patrick</td>
                        <td>PAT0002</td>
                        <td>22-09-2023</td>
                        <td>
                            <i class="bi bi-three-dots" id="bookPatient"></i>
                        </td>
                    </tr>
                </tbody>
        </table>
  </div>
  </div>

 
  
  
     <!----END OF THE ANTERNATAL -->



            <!----START OF THE POSTNATAL FORM-->
            <div class="container hide" id="postnatal_section">
           <div class="form_container">
               <form action="">
        <h3>Postnatal Registration Form</h3>
        <div class="upload_div">
             <video id="videoElement_postnatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus capture_image_icon" id="capture_image_postnatal" onclick="openCamera1()"></i>
            <canvas id="canvasElement_postnatal" style="display: none;"></canvas>
            <img class="capturedImage" id="capturedImage_postnatal" style="display: none;">
        </div>
        <div class="div_flex">
            <div class="btn_capture hide" id="capture_patient2"onClick="takePicture1()">Capture</div>
        <div class="btn_recapture hide"  id="recapture_patient2" onclick="retakePicture1()">Recapture</div>
    </div>
        <h3>Patient Info</h3>
        <div class="each_sections">
    <div class="form-control">
        <label for="">Full name</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form-control">
        <label for="">Address</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Occupation</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Next of Kin</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Relationship to Patient</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Next of Kin's Phone Number</label>
        <input type="text">
        </div>
        </div>

        <h3>Medical History</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="">Gestational Age</label>
        <input type="text">
       </div>
       <div class="form-control">
        <label for="">Complications during Pregnacy</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Medical Conditions/Allergies</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Previous Pregnacies/Births</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Medications/Supplements during Pregnacy</label>
        <input type="text">
        </div>
        </div>

        <h3>Delivery Details</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="">Date of Delivery</label>
        <input type="date">
        </div>
        <div class="form-control">
        <label for="">Time of Delivery</label>
        <input type="time">
        </div>
        <div class="form-control">
        <label for="">Mode of Delivery</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Birth Weight of Baby</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Apgar Scores</label>
        <input type="text"> 
        </div>
        <div class="form-control">
        <label for="">Complications During Delivery</label>
        <input type="text">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE POSTNATAL FORM-->

          

              
      <!----START OF THE POSTNATAL PATIENT PROFILE -->
      <div class="postnatal_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <h3>Esther Patrick Samuel</h3>
                    <h3>PAT0003</h3>
                </div>
            </div>
            <h1>Medical Inputs</h1>
                              <!---Pastnatal accessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <div class= "btn_patients_profile" id="postnatal_assessment_button"> Postnatal Assessment</div>
                    <div class="postnatal_accessment_form hide">
                        <form action="">
                        <span>Mother's Vital Sign:</span>
                            <div class="each_sections">
                                <div class="form-control">
                                    <label for="">Temperature (C)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Blood Pressure (mmHg)</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form-control">
                                    <label for="">Pulse (bpm)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Respiratory Rate (breaths/min)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Assessment of Uterine Involution</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Assessment of Perineal/Abdominal Wounds</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form-control">
                                    <label for="">Assessment of Breastfeeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Immediate Concerns/Complications</label>
                                    <input type="text" name="" id="" >
                                </div>
                            </div>
                        </form>
                    </div>

                                      <!---Neonatal assessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <div class= "btn_patients_profile" id="neonatal_assessment_button"> Neonatal Assessment</div>
                    <div class="neonatal_assessmen_form hide">
                        <form action="">
                        <span>Baby's Condition:</span>
                            <div class="each_sections">
                                <div class="form-control">
                                    <label for="">Feeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Urination</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Bowel Movements</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-control">
                                    <label for="">Signs of Jaundice or other concerns</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form-control">
                                    <label for="">Medications/Treatments Administered</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form-control">
                                    <label for="">Laboratory and Diagnostic Tests</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                        </form>
                        </div>
                                          <!---Drug Prescription Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                        <div class= "btn_patients_profile" id="drug_prescription_button2"> Drug Prescription</div>
                        <div class="drug_prescribtion2 hide">
                        <form action="" id="_inputs2">
                        <span>Drug Prescribion</span>
                        <div class="each_sections">
                                <div class="form-control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="drug2">
                                </div>
                                <div class="form-control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="drug_strength2">
                                </div>
                                <div class="form-control">
                                    <label for="">Mode</label>
                                    <select name="" id="drug_mode2">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                                </div>
                <div class="form-control">
                    <label for="">Frequency</label>
                    <select name="" id="drug_freq2">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form-control">
                    <label for="">Qty</label>
                    <input type="text" name="" id="drug_qty2">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon"  id="add_icon2"></i>
                </div>
                <button type = "button" class="btn_patients_profile btn_white" onclick="_bookDrugs2()">Book Drugs</button>
                        </form>
                        </div>
                        <button class="btn_patients_profile" onclick="update_postnatal_patient_data()">Update data</button>
                    </div>
                   <!----POSTNATAL PATIENT HOSPITAL RECORD INFORMATION----->
<div class="patient_container2">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
        <h3>Personal Information</h3>
        <span>Full Name: Moses Patrick Samuel</span>
        <span>Date of Birth: 7-03-2023</span>
        <span>Address: 23 Enebong Street Calabar</span>
        <span>Contact Number: 090328922</span>

        <h3>Spouse/Partner Information</h3>
        <span>Full Name: Esther Asuquo Etim</span>
        <span>Contact Number: 0907832832</span>
    </div>
    <div class="patient_inputs">
        <div class="_vital_info">
        <div class="_btn_info" id="_postnatal_assessment_input">Postnatal Assessment</div>
          <div class="_data hide" id="_postnatal_assessment_data_1">
                    <div class="form-control">
                        <h4>Temperature (C)</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Blood Pressure (mmHg)</h4>
                        <span>23.033</span>
                    </div>
                    <div class="form-control">
                        <h4>Pulse (bpm)</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Respiratory Rate (breaths/min)</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>Assessment of Uterine Involution</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Assessment of Perineal/Abdominal Wounds</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Assessment of Breastfeeding</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Immediate Concerns/Complications</h4>
                        <span>Input</span>
                    </div>
          </div>
        <div class="_btn_info" id="_neonatal_assessment_input">Neonatal Assessment</div>
          <div class="_data hide" id="_neonatal_assessment_data_1">
                    <div class="form-control">
                        <h4>Feeding</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Urination</h4>
                        <span>23.033</span>
                    </div>
                    <div class="form-control">
                        <h4>Bowel Movements</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Signs of Jaundice or other concerns</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>Medications/Treatments Administered</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Laboratory and Diagnostic Tests</h4>
                        <span>Input</span>
                    </div>
          </div>
    </div>
    <div class="_btn_info" onclick="_postnatal_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_lab()">Labouratory Examination</div>
    <table class="lab2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_rad()">Radiology Examination</div>
    <table class="rad2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_screening()">Screnning Examination</div>
    <div class="_data hide" id="screening_div2">
 
    </div>
    </div>
</div>
</div>
<div class="drugs_booking hide" id="postnatal_drugs_booking">
  <i class="bi bi-x-lg" id="close" onclick="_close_bookDrugs2()"></i>
    <h1>Drug Booking</h1>
    <table id="dataTable2">
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
    <button onclick="_check_selected_postnatal_drugs()">Book now</button>
    </div>   
                    </div>


                      <!----START OF THE POSTNATAL LIST-->
                <div class="list_div hide" id="postnatal_patient__list">
                <div class="table_container">
            <div class="search_bar_container">
                <h3>Postnatal Patient Admission List</h3>
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
                <tbody onclick="accessing_a_specific_postnatal_patients_profile()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon2" onclick="_transfer_dropdowns2()"></i>
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
                        <i class="bi bi-three-dots" id="_transfer_icon2" onclick="_transfer_dropdowns2()"></i>
                    </td>
                </tbody>
                <div class="tranfer_div hide" id="tranfer_box2">
                    <i class="bi bi-x-lg close_icon"  onclick="_close_transfer_dropdowns2()"></i>
                <ul>
                    <li onclick="_nurse_transfer_from_postnatal()">Call in Nurse Station</li>
                    <li onclick="_doc_transfer_from_postnatal()">Doctor Appoitment</li>
                    <li onclick="_select_postnatal_ward()">Choose ward for Patient</li>
                    <li onclick="_lab_transfer_from_postnatal()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_postnatal()">Transfer to Radiology</li>
                </ul>
            </div>
            </table>
            
             <!-----NURSE APPOITMENT--->
             <div class="appoitments_div hide" id="nurse_appoitment2">
            <i class="bi bi-x-lg close_icon" onclick="_close_all_appoitment2()"></i>
                <h3>Nurse Station</h3>
                <form action="" id="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
                </form>
            </div>


              <!-----DOCTOR APPOITMENT--->
              <div class="appoitments_div hide" id="doctor_appoitment2">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment2()"></i>
            <h3>Doctor Appoitment</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

          
   <!-----POSTNATAL WARD--->
   <div class="appoitments_div hide" id="postnatal_ward">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment2()"></i>
            <h3>Postnatal Ward</h3>
                <div class="form-control large">
                    <label for="">Ward  1</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Ward  2</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Ward  3</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <button class="btn_app">Request</button>
            </div>


           <!-----LABOURATORY APPOITMENT--->
           <div class="appoitments_div hide" id="lab_appoitment2">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment2()"></i>
            <h3>Labouratory Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

    <!-----RADIOLOGY APPOITMENT--->
    <div class="appoitments_div hide" id="radiology_appoitment2">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment2()"></i>
            <h3>Radiology Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

        </div>
    </div>
    <div class="dynamic_popup hide" id="accessing_postnatal_patient_profile">
    <span>Accessing Patient PAT0001</span>
            <div class="div_switch">
                <span id="comfirmed_patient">Comfirmed</span>
                <span onclick="reject_switch()">Reject</span>
            </div>
        </div>
    <div class="background_opacity hide" id="background_opacity2"></div>
  </div>
   <!----END OF THE POSTNATAL LIST-->





                    
                       <!----END OF THE POSTNATAL -->












   <!----START OF THE LABOUR FORM-->
   <div class="container hide" id="labour_section">
           <div class="form_container">
        <form action="">
        <h3>Labour Registration Form</h3>
        <div class="upload_div">
             <video id="videoElement_labor" width="400" height="300" autoplay></video>
            <i class="bi bi-plus capture_image_icon" id="capture_image_labor" onclick="openCamera3()"></i>
            <canvas id="canvasElement_labor" style="display: none;"></canvas>
            <img class="capturedImage" id="capturedImage_labor" style="display: none;">
        </div>
        <div class="flex_capture_button">
            <div class="btn_capture hide" id="capture_patient3" onclick="takePicture3()">Capture</div>
        <div class="btn_recapture hide" id="recapture_patient3"  onclick="retakePicture3()">Recapture</div>
    </div>
        <h3>Patient Info</h3>
        <div class="each_sections">
    <div class="form-control">
        <label for="">Full name</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form-control">
        <label for="">Address</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Occupation</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Next of Kin</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Next of Kin's Phone Number</label>
        <input type="text">
        </div>
        </div>

        <h3>Medical History</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="">Antenatal  Clinic Attended</label>
        <input type="text">
       </div>
       <div class="form-control">
        <label for="">Expected Due date of Delivery</label>
        <input type="date">
        </div>
       <div class="form-control">
        <label for="">Number of Pregnacies and Live Births</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Blood Group</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Rhesus Factor</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Hiv Status</label>
        <input type="text">
        </div>
       <div class="form-control">
        <label for="">Medical Condition</label>
        <input type="text">
        </div>
        </div>

        <h3>Labour Details</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="">Date of Onset of Labor</label>
        <input type="date">
        </div>
        <div class="form-control">
        <label for="">Time of Onset of Labor</label>
        <input type="time">
        </div>
        <div class="form-control">
        <label for="">Duration of Labor</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Constration</label>
        <input type="text">
        </div>
        <div class="form-control">
        <label for="">Fetal Movements</label>
        <input type="text"> 
        </div>
        <div class="form-control">
        <label for="">Pain Level</label>
        <input type="text">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE LABOUR FORM-->
   </div>

   <!----START OF THE LABOUR PROFILE-->
           <div class="labour_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <h3>Esther Patrick Samuel</h3>
                    <h3>PAT0003</h3>
                </div>
            </div>
            <h1>Medical Inputs</h1>
            <!---Vital Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="vital_button2">Vitals</div>
            <div class="vitals_input2 hide">
                <form action="" class="_inputs"> 
                <span>Blood Pressure</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <span>Pre-Labor Baseline</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <span>During Labour</span>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <span>Post Delivery</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Pulse Rate</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Pre-Labor Baseline (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">During Labor (bpm)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Post Delivery (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Respiratory Rate</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="">Pre-Labor Baseline (breaths/min)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">During Labor (breaths/min)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Post Delivery</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Temperature</span>
                    <div class="each_sections">
                    <div class="form-control">
                    <label for="">Pre-Labor Baseline (C/F)</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">During Labor (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Post Delivery (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input----->             <div class="btn_patients_profile" id="drug_prescription_button3">Drug Prescription</div>
            <div class="drug_prescribtion3 hide">
            <form action="" id="_inputs3">
            <div class="each_sections">
                                <div class="form-control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="drug3">
                                </div>
                                <div class="form-control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="drug_strength3">
                                </div>
                                <div class="form-control">
                                    <label for="">Mode</label>
                                    <select name="" id="drug_mode3">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                  </div>
                <div class="form-control">
                    <label for="">Frequency</label>
                    <select name="" id="drug_freq3">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form-control">
                    <label for="">Qty</label>
                    <input type="text" name="" id="drug_qty3">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" id="add_icon3"></i>
                </div>
                <button type="button" class="btn_patients_profile btn_white" onclick="_bookDrugs3()">Book Drugs</button>
                  </form>
            </div>

                  <!---Screening Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="screening_button2">Screening Examination</div>
            <div class="screening_input2 hide">
                <form action="" class="_inputs">
                <div class="each_sections">
                    <div class="form-control">
                        <label for="">Continous Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Cervical Dilatation Assessment</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Vaginal Examination</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Group B Streptococcus (GBS) Status Check</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Blood Pressure Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>
            <button class="btn_patients_profile" onclick="update_patient_data()">Update data</button>
            <div class="dynamic_popup hide" id="add_selected_drugs">
            <span>Drugs Added</span>
        </div>
        <div class="dynamic_popup hide" id="_check_selected_labour_drugs">
            <span>Are you sure you want to Book for this drugs</span>
            <div class="div_switch">
                <span onclick="comfirmed_labour_drugs()">Yes</span>
                <span  onclick="reject_switch()">No</span>
            </div>
        </div>
        <div class="dynamic_popup hide" id="_approved_labour_drugs">
            <span>Drugs is booked, go to the account unit and make payment</span>
        </div>
        <div class="dynamic_popup hide" id="update_labour_data">
            <span>PAT0003 Data is updated</span>
        </div>
        </div>
             <!---- PATIENT HOSPITAL RECORD INFORMATION----->
<div class="patient_container2">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
        <h3>Personal Information</h3>
        <span>Full Name: Moses Patrick Samuel</span>
        <span>Date of Birth: 7-03-2023</span>
        <span>Address: 23 Enebong Street Calabar</span>
        <span>Contact Number: 090328922</span>

        <h3>Spouse/Partner Information</h3>
        <span>Full Name: Esther Asuquo Etim</span>
        <span>Contact Number: 0907832832</span>
    </div>
        <div class="_btn_info" id="_labour_vital_input">Vitals</div>
          <div class="_data hide" id="labour_vital">

            <h3>Blood Pressure</h3>
            <div class="flexs">
                    <div class="form-control">
                        <h4>Pre-Labor Baseline</h4>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>During Labour</h4>
                        <h4>Time</h4>
                        <span>23:33</span>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Post Delivery</h4>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    </div>


                    <h3>Pulse Rate</h3>
                    <div class="flexs">
                    <div class="form-control">
                        <h4>Pre-Labor Baseline (bpm)</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>During Labor (bpm)</h4>
                        <h4>Time</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form-control">
                        <h4>Post Delivery (bpm)</h4>
                        <span>832</span>
                    </div>
                    </div>


                    <h3>Respiratory Rate</h3>
                    <div class="flexs">
                    <div class="form-control">
                        <h4>Pre-Labor Baseline (breaths/min)</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>During Labor (breaths/min)</h4>
                        <h4>Time</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form-control">
                        <h4>Post Delivery</h4>
                        <span>832</span>
                    </div>
                    </div>


                    <h3>Temperature</h3>
                    <div class="flexs">
                    <div class="form-control">
                        <h4>Pre-Labor Baseline (C/F)</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>During Labor (C/F)</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form-control">
                        <h4>Post Delivery (C/F)</h4>
                        <span>832</span>
                    </div>
                    </div>
          </div>


    <div class="_btn_info" onclick="_labour_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_lab()">Labouratory Examination</div>
    <table class="lab3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_rad()">Radiology Examination</div>
    <table class="rad3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_screening()">Screnning Examination</div>
    <div class="_data hide" id="screening_div3">
    <div class="form-control">
                        <h4>Continous Fetal Monitoring</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form-control">
                        <h4>Cervical Dilatation Assessment</h4>
                        <span>23.033</span>
                    </div>
                    <div class="form-control">
                        <h4>Vaginal Examination</h4>
                        <span>Input</span>
                    </div>
                    <div class="form-control">
                        <h4>Group B Streptococcus (GBS) Status Check</h4>
                        <span>323</span>
                    </div>
                    <div class="form-control">
                        <h4>Blood Pressure Monitoring</h4>
                        <span>Input</span>
                    </div>
    </div>
    </div>
</div>
</div>

  <div class="drugs_booking hide" id="labour_drugs_booking">
  <i class="bi bi-x-lg" id="close" onclick="_close_bookDrugs3()"></i>
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
    <button onclick="comfirmed_selected_labour__drugs()">Book now</button>
    </div>
  </div>
  <!----START OF THE LABOUR LIST-->
  <div class="list_div hide" id="labour_patient__list">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Labour Patient Admission List</h3>
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
                <tbody onclick="accessing_a_specific_labour_patients_profile()">
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
                <div class="tranfer_div hide" id="tranfer_box">
                    <i class="bi bi-x-lg close_icon"  onclick="_close_transfer_dropdowns()"></i>
                <ul>
                    <li onclick="_nurse_transfer_from_labour()">Call in Nurse Station</li>
                    <li onclick="_doc_transfer_from_labour()">Doctor Appoitment</li>
                    <li onclick="_surgical_suite_transfer_from_labour()">Transfer to Surgical Suite</li>
                    <li onclick="_select_labour_ward()">Choose ward for Patient</li>
                    <li onclick="_lab_transfer_from_labour()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_labour()">Transfer to Radiology</li>
                    <li onclick="_icu_transfer_from_labour()">Transfer to I.C.U</li>
                    <li onclick="_switch_from_labour_to_postnatal()">Transfer to Postnatal Unit</li>
                </ul>
            </div>
            </table>
             <!-----NURSE APPOITMENT--->
             <div class="appoitments_div hide" id="nurse_appoitment">
            <i class="bi bi-x-lg close_icon" onclick="_close_all_appoitment()"></i>
                <h3>Nurse Station</h3>
                <form action="" id="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
                </form>
            </div>


            <!-----DOCTOR APPOITMENT--->
            <div class="appoitments_div hide" id="doctor_appoitment">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment()"></i>
            <h3>Doctor Appoitment</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                    <!-----SURGICAL SUITE APPOITMENT--->
                    <div class="appoitments_div hide" id="surgical_suite_appoitment">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment()"></i>
            <h3>Surgical Suite Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----LABOUR WARD APPOITMENT--->
                        <div class="appoitments_div hide" id="labour_ward_appoitment">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment()"></i>
            <h3>Labour Ward Unit</h3>
            <div class="form-control large">
                    <label for="">Ward  1</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Ward  2</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form-control large">
                    <label for="">Ward  3</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <button class="btn_app">Request</button>
            </div>

                        <!-----LABOURATORY APPOITMENT--->
                        <div class="appoitments_div hide" id="lab_appoitment">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment()"></i>
            <h3>Labouratory Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----RADIOLOGY APPOITMENT--->
                        <div class="appoitments_div hide" id="radiology_appoitment">
            <i class="bi bi-x-lg close_icon"onclick="_close_all_appoitment()"></i>
            <h3>Radiology Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----I.C.U APPOITMENT--->
            <div class="appoitments_div hide" id="icu_appoitment">
            <i class="bi bi-x-lg close_icon" onclick="_close_all_appoitment()"></i>
            <h3>I.C.U Unit</h3>
            <form action="">
                <div class="form-control large">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form-control large">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id=""></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>
        </div>
     <!----END OF LABOUR-->


<!---END OF THE CODE WRITTEN BY KING--->

        <script src="js/jquery-3.7.1.js"></script>
<script src="js/martanity.js"></script>
</body>
</html>