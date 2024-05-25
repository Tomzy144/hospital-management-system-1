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
    <div class="sidebar__header"></div>
    <div class="sidebar-body">
      <ul>
        <li  id="anternatal_unit_link" class="links active">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Anternatal unit</span>
        </li>
        <li id="anternatal_patient_list_link" class="links">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Anternatal patient list</span>
        </li>
        <li id="postnatal_unit_link" class="links">
          <i class="fa-solid fa-baby"></i>
          <span>Postnatal unit</span>
        </li>
        <li id="postnatal_patient_list_link" class="links">
          <i class="fa-solid fa-baby"></i>
          <span>Postnatal patient list</span>
        </li>
        <li id="labour_unit_link" class="links">
          <i class="fa-solid fa-person-breastfeeding"></i>
          <span>Labour unit</span>
        </li>
        <li id="labour_patient_list_link" class="links">
          <i class="fa-solid fa-person-breastfeeding"></i>
          <span>Labour patient list</span>
        </li>
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




    <div class="container">
     <div class="form_container section" id="anternatal_unit_section">
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

  <!----------------------------------------------------------------------------------->

<div class="list_div section hide" id="anternatal_patient_list_section">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Anternatal Patient Admission List</h3>
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
                <tr id="patientProfile">
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
  <!----------------------------------------------------------------------------------->


    <div class="input__container allProfiles hide" id="anternatalInput">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                <div class="displayPatientNameIdContainer">

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


  <!----------------------------------------------------------------------------------->




            <div class="container section hide" id="postnatal_unit_section">
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
        </div>
  <!----------------------------------------------------------------------------------->


               <div class="list_div section hide" id="postnatal_patient_list_section">
                <div class="table_container">
            <div class="search_bar_container">
                <h3>Postnatal Patient Admission List</h3>
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
                    <tr id="patientProfile">
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
            </div>
            </table>
  </div>
  </div>

  <!----------------------------------------------------------------------------------->


      <div class="input__container allProfiles  hide" id="postnatalInput">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="displayPatientNameIdContainer">
                    <h3>Esther Patrick Samuel</h3>
                    <h3>PAT0003</h3>
                </div>
            </div>
            <h1>Medical Inputs</h1>
                    <div class="postnatal_accessment_form">
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

                    <div class="neonatal_assessmen_form">
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
                        </div>
                        </div>                           



  <!----------------------------------------------------------------------------------->



   <div class="container section hide" id="labour_unit_section">
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
   </div>

  <!----------------------------------------------------------------------------------->



<div class="list_div section hide" id="labour_patient_list_section">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Labour Patient Admission List</h3>
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
                    <tr id="patientProfile">
                        <td>1</td>
                        <td>
                            <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                        </td>
                        <td>Micheal John</td>
                        <td>PAT01</td>
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
                        <td>Linus Isreal</td>
                        <td>PAT0032</td>
                        <td>22-09-2023</td>
                        <td>
                            <i class="bi bi-three-dots" id="bookPatient"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>  

           <div class="input__container allProfiles hide" id="labourInput">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="displayPatientNameIdContainer">
                    <h3>Esther Patrick Samuel</h3>
                    <h3>PAT0003</h3>
                </div>
            </div>
            <h1>Medical Inputs</h1>
            <div class="vitals_input2">
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

            <div class="screening_input2">
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
        </div>
</div>
        <script src="js/jquery-3.7.1.js"></script>
<script src="js/martanity.js"></script>
</body>
</html>