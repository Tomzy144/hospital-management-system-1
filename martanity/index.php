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
          <span>Anternatal unit</span>
        </li>
        <li id="anternatal_patient_list_link" class="links">
          <span>Anternatal patient list</span>
        </li>
        <li id="postnatal_unit_link" class="links">
          <span>Postnatal unit</span>
        </li>
        <li id="postnatal_patient_list_link" class="links">
          <span>Postnatal patient list</span>
        </li>
        <li id="labour_unit_link" class="links">
          <span>Labour unit</span>
        </li>
        <li id="labour_patient_list_link" class="links">
          <!-- <i class="fa-solid fa-person-breastfeeding"></i> -->
          <span>Labour patient list</span>
        </li>
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <!-- <i class="fa-solid fa-right-from-bracket"></i> -->
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
            <input type="text" class="anternatalInput" name="anternatal__patient__name" id="anternatal__patient__name" autofocus = "true">
        </div>
        <div class="form-control">
            <label for="anternatal__patient__dob">Date of Birth</label>
            <input type="date" name="anternatal__patient__dob" id="anternatal__patient__dob">
        </div>
        <div class="form-control">
            <label for="anternatal__patient__address">Address</label>
            <input type="text" class="anternatalInput" name="anternatal__patient__address" id="anternatal__patient__address">
        </div>
        <div class="form-control">
                <label for="anternatal__patient__phoneNumber">Contact Number</label>
                <input type="text" class="anternatalInput" name="anternatal__patient__phoneNumber" id="anternatal__patient__phoneNumber">
        </div>
    </div>

        <h3>Spouse/Partner Information</h3>
 <div class="each_sections">
     <div class="form-control">
             <label for="anternatal__patient__partner__name">Full Name</label>
             <input type="text" class="anternatalInput" name="anternatal__patient__partner__name" id="anternatal__patient__partner__name">
         </div>
     <div class="form-control">
            <label for="anternatal__patient__partner__phoneNumber">Contact Number</label>
            <input type="text" class="anternatalInput" name="anternatal__patient__partner__phoneNumber" id="anternatal__patient__partner__phoneNumber">
    </div>
    </div>

        <h3>Medical History</h3>
    <div class="each_sections">
    <div class="form-control">
            <label for="anternatal__patient__previousPregnacies">Previous Pregnacies</label>
             <input type="text" class="anternatalInput" name="anternatal__patient__previousPregnacies" id="anternatal__patient__previousPregnacies">
    </div>
    <div class="form-control">
             <label for="anternatal__patient__chronicCondition">Chronic Condition</label>
             <input type="text" class="anternatalInput" name="anternatal__patient__chronicCondition" id="anternatal__patient__chronicCondition">
     </div>
    <div class="form-control">
                <label for="anternatal__patient__alergies">Alergies</label>
                <input type="text" class="anternatalInput" name="anternatal__patient__alergies" id="anternatal__patient__alergies">
    </div>
    </div>

        <h3>Health Status</h3>
    <div class="each_sections">
    <div class="form-control">
            <label for="anternatal__patient__currentMedication">Current Medications</label>
            <input type="text" class="anternatalInput" name="anternatal__patient__currentMedication" id="anternatal__patient__currentMedication">
    </div>
    <div class="form-control">
            <label for="anternatal__patient__vitalSign">Vital Signs</label>
            <input type="text" class="anternatalInput" name="anternatal__patient__vitalSign" id="anternatal__patient__vitalSign">
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
                        <td>Transfer Patient to Labour Unit</td>
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
                        <button type="button" class="btn" id="transferPatient">Transfer</button>
                    </td>
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
                        <button type="button" class="btn" id="transferPatient">Transfer</button>
                    </td>
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
                    <form action="" id="patientAnternatalVitalInput">
                    <h1>Medical inputs</h1>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="heightOfFundus">Height of Fundus</label>
                        <input type="text" class="_input"   name="heightOfFundus" id="heightOfFundus">
                    </div>
                    <div class="form-control">
                        <label for="presentation&Position">Presentation and Position</label>
                        <input type="text" class="_input"   name="presentation&Position" id="presentation&Position">
                    </div>
                    <div class="form-control">
                        <label for="relationOfPresentingPartToBrim">Relation of presenting part to brim</label>
                        <input type="text" class="_input"   name="relationOfPresentingPartToBrim" id="relationOfPresentingPartToBrim">
                    </div>
                    <div class="form-control">
                        <label for="fostalHeart">Fostal Heart</label>
                        <input type="text" class="_input"   name="fostalHeart" id="fostalHeart">
                    </div>
                    <div class="form-control">
                        <label for="urine">Urine</label>
                        <input type="text" class="_input"   name="urine" id="urine">
                    </div>
                    <div class="form-control">
                        <label for="bp">B.P</label>
                        <input type="text" class="_input"   name="bp" id="bp">
                    </div>
                    <div class="form-control">
                        <label for="weight">Weight</label>
                        <input type="text" class="_input"   name="weight" id="weight">
                    </div>
                    <div class="form-control">
                        <label for="pcv">P.C.V</label>
                        <input type="text" class="_input"   name="pcv" id="pcv">
                    </div>
                    <div class="form-control">
                        <label for="oedema">Oedema</label>
                        <input type="text" class="_input"   name="oedema" id="oedema">
                    </div>
                    <div class="form-control">
                        <label for="remark">Remark</label>
                     <textarea name="remark" id=remark"" class="_input"  cols="30" rows="10"></textarea>
                    </div>
                    </div>
                </form>
            </div>

        
            <div class="screening_input">
            <h1>Screening inputs</h1>
                <form action="" id="patientAnternatalVitalInput">
                <div class="each_sections">
                <div class="each_sections">
                    <div class="form-control">
                        <label for="geneticScreeningTesting">Genetic Screening and Testing</label>
                              <input type="text"  class="_input"  name="geneticScreeningTesting" id="geneticScreeningTesting">
                    </div>
                    <div class="form-control">
                        <label for="groupBStreptococcus">Group B Streptococcus (GBS) Screening</label>
                              <input type="text"  class="_input"  name="groupBStreptococcus" id="groupBStreptococcus">
                    </div>
                    <div class="form-control">
                        <label for="">Fetal Monitoring</label>
                              <input type="text" name="" id="" class="_input" >
                    </div>
                    <div class="form-control">
                        <label for="gestationalAgeAssesment">Gestational Age assement</label>
                              <input type="text" name="gestationalAgeAssesment"  class="_input" id="gestationalAgeAssesment">
                    </div>
                    <div class="form-control">
                        <label for="cervicalScreening">Cervical Screening</label>
                              <input type="text"  class="_input" name="cervicalScreening" id="cervicalScreening">
                    </div>
                    <div class="form-control">
  <h3>Screening for Infection</h3><br/>
  <div class="flex_wrap">
    <div class="div">
      <label for="hivTest">HIV Test</label>
      <div class="checkbox">
        <label for="hivPositive">Positive
          <input type="radio" class="_input" name="hivTest" id="hivPositive">
        </label>
        <label for="hivNegative">Negative
          <input type="radio" class="_input" name="hivTest" id="hivNegative">
        </label>
      </div>
    </div>
    <div class="div">
      <label for="syphilisTest">Syphilis Test</label>
      <div class="checkbox">
        <label for="syphilisPositive">Positive
          <input type="radio" class="_input" name="syphilisTest" id="syphilisPositive">
        </label>
        <label for="syphilisNegative">Negative
          <input type="radio" class="_input" name="syphilisTest" id="syphilisNegative">
        </label>
      </div>
    </div>
    <div class="div">
      <label for="hepatitisTest">Hepatitis B Surface Antigen Test</label>
      <div class="checkbox">
        <label for="hepatitisPositive">Positive
          <input type="radio" class="_input" name="hepatitisTest" id="hepatitisPositive">
        </label>
        <label for="hepatitisNegative">Negative
          <input type="radio" class="_input" name="hepatitisTest" id="hepatitisNegative">
        </label>
      </div>
    </div>
    <div class="div">
      <label for="rubellaTest">Rubella Immunity Test</label>
      <div class="checkbox">
        <label for="rubellaPositive">Positive
          <input type="radio" class="_input" name="rubellaTest" id="rubellaPositive">
        </label>
        <label for="rubellaNegative">Negative
          <input type="radio" class="_input" name="rubellaTest" id="rubellaNegative">
        </label>
      </div>
    </div>
    <div class="div">
      <label for="gonorrheaTest">Gonorrhea and Chlamydia Test</label>
      <div class="checkbox">
        <label for="gonorrheaPositive">Positive
          <input type="radio" class="_input" name="gonorrheaTest" id="gonorrheaPositive">
        </label>
        <label for="gonorrheaNegative">Negative
          <input type="radio" class="_input" name="gonorrheaTest" id="gonorrheaNegative">
        </label>
      </div>
    </div>
  </div>
</div>
                </div>
                </form>
                <div class="drug_prescription" id="section1">
  <form action="">
    <h1>Drugs Prescription</h1>
    <div class="each_sections">
      <div class="form-control">
        <label for="drug1">Drugs</label>
        <input type="text" name="" id="drug1">
      </div>
      <div class="form-control">
        <label for="drug_strength1">Strength</label>
        <input type="text" name="" id="drug_strength1">
      </div>
      <div class="form-control">
        <label for="drug_mode1">Mode</label>
        <select name="" id="drug_mode1">
          <option value="tablet">Tablet</option>
          <option value="capsule">Capsule</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_freq1">Frequency</label>
        <select name="" id="drug_freq1">
          <option value="2_days">2 Days</option>
          <option value="24_hours">24 Hours</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_qty1">Qty</label>
        <input type="text" name="" id="drug_qty1">
      </div>
    </div>
    <button type="button" class="btn add__drug" data-section="section1">Add Drugs</button>
    <button type="button" class="btn" onclick="_bookDrugs()">Book Drugs</button>
  </form>
  <table id="dataTable1">
    <thead>
        <tr>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>
            </div>
        </div>
        <button class="btn" id="updateAnternatalPatientData">Update data</button>
        <button class="btn" >Check patient hospital record</button>
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
        <div class="flex_capture_button">
            <div class="btn_capture hide" id="capture_patient2"onClick="takePicture1()">Capture</div>
        <div class="btn_recapture hide"  id="recapture_patient2" onclick="retakePicture1()">Recapture</div>
    </div>
        <h3>Patient Info</h3>
        <div class="each_sections">
    <div class="form-control">
        <label for="postnatal_patient_name">Full name</label>
        <input type="text" class="postnalInput" name= "postnatal_patient_name" id="postnatal_patient_name">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_dob">Date of Birth</label>
        <input type="date" name="postnatal_patient_dob" id="postnatal_patient_dob">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_address">Address</label>
        <input type="text" class="postnalInput" name="postnatal_patient_address" id="postnatal_patient_address">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_contactNumber">Contact Number</label>
        <input type="text" class="postnalInput" name="postnatal_patient_contactNumber" id="postnatal_patient_contactNumber">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_occupation">Occupation</label>
        <input type="text" class="postnalInput" name="postnatal_patient_occupation" id="postnatal_patient_occupation">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_nextOfKin">Next of Kin</label>
        <input type="text" class="postnalInput" name="postnatal_patient_nextOfKin" id="postnatal_patient_nextOfKin">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_relationship">Relationship to Patient</label>
        <input type="text" class="postnalInput" name="postnatal_patient_relationship" id="postnatal_patient_relationship">
        </div>
        <div class="form-control">
        <label for="postnatal_patient_nextOfKinPhoneNumber">Next of Kin's Phone Number</label>
        <input type="text" class="postnalInput" name="postnatal_patient_nextOfKinPhoneNumber" id="postnatal_patient_nextOfKinPhoneNumber">
        </div>
        </div>

        <h3>Medical History</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="postnatal_patient_gestationAge">Gestational Age</label>
        <input type="text" class="postnalInput" name="postnatal_patient_gestationAge" id="postnatal_patient_gestationAge">
       </div>
       <div class="form-control">
        <label for="postnatal_patient_complicationDuringPregnacy">Complications during Pregnacy</label>
        <input type="text" class="postnalInput" name="postnatal_patient_complicationDuringPregnacy" id="postnatal_patient_complicationDuringPregnacy">
        </div>
       <div class="form-control">
        <label for="postnatal_patient_medicalCondition/Allergies">Medical Conditions/Allergies</label>
        <input type="text" class="postnalInput" name="postnatal_patient_medicalCondition/Allergies" id="postnatal_patient_medicalCondition/Allergies">
        </div>
       <div class="form-control">
        <label for="postnatal_patient_previousPregnacies/Births">Previous Pregnacies/Births</label>
        <input type="text" class="postnalInput" name="postnatal_patient_previousPregnacies/Births" id="postnatal_patient_previousPregnacies/Births">
        </div>
       <div class="form-control">
        <label for="postnatal_patient_medications/supplementsDuringPregnacy">Medications/Supplements during Pregnacy</label>
        <input type="text" class="postnalInput" name="postnatal_patient_medications/supplementsDuringPregnacy" id="postnatal_patient_medications/supplementsDuringPregnacy">
        </div>
        </div>

        <h3>Delivery Details</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="dateOfDelivery">Date of Delivery</label>
        <input type="date" name="dateOfDelivery" id="dateOfDelivery">
        </div>
        <div class="form-control">
        <label for="timeOfDelivery">Time of Delivery</label>
        <input type="time" name="timeOfDelivery" id="timeOfDelivery">
        </div>
        <div class="form-control">
        <label for="modeOfDelivery">Mode of Delivery</label>
        <input type="text" class="postnalInput" name="modeOfDelivery" id="modeOfDelivery">
        </div>
        <div class="form-control">
        <label for="birthWeightOfBaby">Birth Weight of Baby</label>
        <input type="text" class="postnalInput" name="birthWeightOfBaby" id="birthWeightOfBaby">
        </div>
        <div class="form-control">
        <label for="apgarScores">Apgar Scores</label>
        <input type="text" class="postnalInput" name="apgarScores" id="apgarScores"> 
        </div>
        <div class="form-control">
        <label for="complicationsDuringDelivery">Complications During Delivery</label>
        <input type="text" class="postnalInput" name="complicationsDuringDelivery" id="complicationsDuringDelivery">
        </div>
        </div>
        <button id="submitPostnatalForm" class="btn_submit" type="button">Book</button>
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
                        <form action="" id="patientPostnatalVitalInput">
                        <span>Mother's Vital Sign:</span>
                            <div class="each_sections">
                                <div class="form-control">
                                    <label for="temperature">Temperature (C)</label>
                                    <input type="text" class="_input" name="temperature" id="temperature" >
                                </div>
                                <div class="form-control">
                                    <label for="bloodPressure">Blood Pressure (mmHg)</label>
                                    <input type="text" class="_input" name="bloodPressure" id="bloodPressure">
                                </div>
                                <div class="form-control">
                                    <label for="pulse">Pulse (bpm)</label>
                                    <input type="text" class="_input" name="pulse" id="pulse" >
                                </div>
                                <div class="form-control">
                                    <label for="respiratoryRate">Respiratory Rate (breaths/min)</label>
                                    <input type="text" class="_input" name="respiratoryRate" id="respiratoryRate" >
                                </div>
                                <div class="form-control">
                                    <label for="assessmentOfUterineInvolution">Assessment of Uterine Involution</label>
                                    <input type="text" class="_input" name="assessmentOfUterineInvolution" id="assessmentOfUterineInvolution" >
                                </div>
                                <div class="form-control">
                                    <label for="assessmentPerinealAbdominalWounds">Assessment of Perineal/Abdominal Wounds</label>
                                    <input type="text" class="_input" name="assessmentPerinealAbdominalWounds" id="assessmentPerinealAbdominalWounds">
                                </div>
                                <div class="form-control">
                                    <label for="assessmentOfBreastfeeding">Assessment of Breastfeeding</label>
                                    <input type="text" class="_input" name="assessmentOfBreastfeeding" id="assessmentOfBreastfeeding" >
                                </div>
                                <div class="form-control">
                                    <label for="immediateConcernsComplications">Immediate Concerns/Complications</label>
                                    <input type="text" class="_input" name="immediateConcernsComplications" id="immediateConcernsComplications" >
                                </div>
                            </div>
                    </div>

                    <div class="neonatal_assessmen_form">
                        <h1>Baby's Condition</h1>
                            <div class="each_sections">
                                <div class="form-control">
                                    <label for="feeding">Feeding</label>
                                    <input type="text" class="_input" name="feeding" id="feeding" >
                                </div>
                                <div class="form-control">
                                    <label for="urination">Urination</label>
                                    <input type="text" class="_input" name="urination" id="urination" >
                                </div>
                                <div class="form-control">
                                    <label for="bowelMovements">Bowel Movements</label>
                                    <input type="text" class="_input" name="bowelMovements" id="bowelMovements" >
                                </div>
                                <div class="form-control">
                                    <label for="signsOfJaundice">Signs of Jaundice or other concerns</label>
                                    <input type="text" class="_input" name="signsOfJaundice" id="signsOfJaundice">
                                </div>
                                <div class="form-control">
                                    <label for="medicationsTreatments">Medications/Treatments Administered</label>
                                    <input type="text" class="_input" name="medicationsTreatments" id="medicationsTreatments">
                                </div>
                                <div class="form-control">
                                    <label for="labouratoryDiagnostic">Laboratory and Diagnostic Tests</label>
                                    <input type="text" class="_input" name="labouratoryDiagnostic" id="labouratoryDiagnostic">
                                </div>
                                </form>
                            </div>
                            <div class="drug_prescription" id="section2">
  <form action="" id="soo">
    <h1>Drugs Prescription</h1>
    <div class="each_sections">
      <div class="form-control">
        <label for="drug2">Drugs</label>
        <input type="text" name="" id="drug2">
      </div>
      <div class="form-control">
        <label for="drug_strength2">Strength</label>
        <input type="text" name="" id="drug_strength2">
      </div>
      <div class="form-control">
        <label for="drug_mode2">Mode</label>
        <select name="" id="drug_mode2">
          <option value="tablet">Tablet</option>
          <option value="capsule">Capsule</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_freq2">Frequency</label>
        <select name="" id="drug_freq2">
          <option value="2_days">2 Days</option>
          <option value="24_hours">24 Hours</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_qty2">Qty</label>
        <input type="text" name="" id="drug_qty2">
      </div>
    </div>
    <button type="button" class="btn add__drug" data-section="section2">Add Drugs</button>
    <button type="button" class="btn" onclick="_bookDrugs()">Book Drugs</button>
  </form>
  <table id="dataTable2">
    <thead>
        <tr>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>

                        </div>
                        <button class="btn" id="updatePostnatalPatientData">Update data</button>
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
        <label for="labour_patient_name">Full name</label>
        <input type= "text" class="labourInput" name="labour_patient_name" id="labour_patient_name">
        </div>
        <div class="form-control">
        <label for="labour_patient_dob">Date of Birth</label>
        <input type="date" class = "labourInput" name="labour_patient_dob" id="labour_patient_dob">
        </div>
        <div class="form-control">
        <label for="labour_patient_address">Address</label>
        <input type= "text" class="labourInput" name="labour_patient_address" id="labour_patient_address">
        </div>
        <div class="form-control">
        <label for="labour_patient_contactNumber">Contact Number</label>
        <input type= "text" class="labourInput" name="labour_patient_contactNumber" id="labour_patient_contactNumber">
        </div>
        <div class="form-control">
        <label for="labour_patient_occupation">Occupation</label>
        <input type= "text" class="labourInput" name="labour_patient_occupation" id="labour_patient_occupation">
        </div>
        <div class="form-control">
        <label for="labour_patient_nextOfKin">Next of Kin</label>
        <input type= "text" class="labourInput" name="labour_patient_nextOfKin" id="labour_patient_nextOfKin">
        </div>
        <div class="form-control">
        <label for="labour_patient_nexOfKinPhoneNumber">Next of Kin's Phone Number</label>
        <input type= "text" class="labourInput" name="labour_patient_nexOfKinPhoneNumber" id="labour_patient_nexOfKinPhoneNumber">
        </div>
        </div>

        <h3>Medical History</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="labour_patient_anternatalClininAttended">Antenatal  Clinic Attended</label>
        <input type= "text" class="labourInput" name="labour_patient_anternatalClininAttended" id="labour_patient_anternatalClininAttended">
       </div>
       <div class="form-control">
        <label for="labour_patient_expectedDueDateOfDelivery">Expected Due date of Delivery</label>
        <input type="date"  class="labourInput"  name="labour_patient_expectedDueDateOfDelivery" id="labour_patient_expectedDueDateOfDelivery">
        </div>
       <div class="form-control">
        <label for="labour_patient_numberOfPregnaciesAndLiveBirth">Number of Pregnacies and Live Births</label>
        <input type= "text" class="labourInput" name="labour_patient_numberOfPregnaciesAndLiveBirth" id="labour_patient_numberOfPregnaciesAndLiveBirth">
        </div>
       <div class="form-control">
        <label for="labour_patient_bloodGroup">Blood Group</label>
        <input type= "text" class="labourInput" name="labour_patient_bloodGroup" id="labour_patient_bloodGroup">
        </div>
       <div class="form-control">
        <label for="labour_patient_rhesusFactor">Rhesus Factor</label>
        <input type= "text" class="labourInput" name="labour_patient_rhesusFactor" id="labour_patient_rhesusFactor">
        </div>
       <div class="form-control">
        <label for="labour_patient_hivStatus">Hiv Status</label>
        <input type= "text" class="labourInput" name="labour_patient_hivStatus" id="labour_patient_hivStatus">
        </div>
       <div class="form-control">
        <label for="labour_patient_medicalCondition">Medical Condition</label>
        <input type= "text" class="labourInput" name="labour_patient_medicalCondition" id="labour_patient_medicalCondition">
        </div>
        </div>

        <h3>Labour Details</h3>
        <div class="each_sections">
        <div class="form-control">
        <label for="dateOfOnsetOfLobour">Date of Onset of Labor</label>
        <input type="date" class="labourInput"   name="dateOfOnsetOfLobour" id="dateOfOnsetOfLobour">
        </div>
        <div class="form-control">
        <label for="timeOfOnsetOfLobour">Time of Onset of Labor</label>
        <input type="time" class="labourInput"   name="timeOfOnsetOfLobour" id="timeOfOnsetOfLobour">
        </div>
        <div class="form-control">
        <label for="durationOfLabor">Duration of Labor</label>
        <input type= "text" class="labourInput" name="durationOfLabor" id="durationOfLabor">
        </div>
        <div class="form-control">
        <label for="constration">Constration</label>
        <input type= "text" class="labourInput" name="constration" id="constration">
        </div>
        <div class="form-control">
        <label for="fetalMovement">Fetal Movements</label>
        <input type= "text" class="labourInput" name="fetalMovement" id="fetalMovement"> 
        </div>
        <div class="form-control">
        <label for="painLevel">Pain Level</label>
        <input type= "text" class="labourInput" name="painLevel" id="painLevel">
        </div>
        </div>
        <button id="submitLaborForm" class="btn_submit" type="button">Book</button>
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
                        <td>Transfer Patient to Postnatal Unit</td>
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
                        <button type="button" class="btn" id="transferPatient">Transfer</button>
                        </td>
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
                        <td><button type="button" class="btn" id="transferPatient">Transfer</button></td>
                   
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
                <form action="" id="patientLabourVitalInput"> 
                <span>Blood Pressure</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <span>Pre-Labor Baseline</span>
                        <label for="pre_systolic">Systolic (mmHG)</label>
                        <input type="text" class="_input" name="pre_systolic" id="pre_systolic">
                        <label for="pre_diastolic">Diastolic (mmHG)</label>
                        <input type="text" class="_input" name="pre_diastolic" id="pre_diastolic">
                    </div>
                    <div class="form-control">
                        <span>During Labour</span>
                        <label for="">Time</label>
                        <input type="time" class="_input" name="" id="">
                        <label for="during_Systolic">Systolic (mmHG)</label>
                        <input type="text" class="_input" name="during_Systolic" id="during_Systolic">
                        <label for="during_diastolic">Diastolic (mmHG)</label>
                        <input type="text" class="_input" name="during_diastolic" id="during_diastolic">
                    </div>
                    <div class="form-control">
                        <span>Post Delivery</span>
                        <label for="post_Systolic">Systolic (mmHG)</label>
                        <input type="text" class="_input" name="post_Systolic" id="post_Systolic">
                        <label for="post_diastolic">Diastolic (mmHG)</label>
                        <input type="text" class="_input" name="post_diastolic" id="post_diastolic">
                    </div>
                    </div>
                    <span>Pulse Rate</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="pulseRate_Pre">Pre-Labor Baseline (bpm)</label>
                        <input type="text" class="_input" name="pulseRate_Pre" id="pulseRate_Pre">
                    </div>
                    <div class="form-control">
                        <label for="">During Labor (bpm)</label>
                        <label for="">Time</label>
                        <input type="time" class="_input" name="" id="">
                        <input type="text" class="_input" name="" id="pulseRate_During">
                    </div>
                    <div class="form-control">
                        <label for="pulseRate_Post">Post Delivery (bpm)</label>
                        <input type="text" class="_input" name="" id="pulseRate_Post">
                    </div>
                    </div>
                    <span>Respiratory Rate</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="respiratoryPre">Pre-Labor Baseline (breaths/min)</label>
                        <input type="text" class="_input" name="" id="respiratoryPre">
                    </div>
                    <div class="form-control">
                        <label for="respiratoryDuring">During Labor (breaths/min)</label>
                        <label for="respiratoryDuring">Time</label>
                        <input type="time" class="_input" name="respiratoryDuring" id="respiratoryDuring">
                        <input type="text" class="_input" name="respiratoryDuring" id="respiratoryDuring">
                    </div>
                    <div class="form-control">
                        <label for="respiratoryPost">Post Delivery</label>
                        <input type="text" class="_input" name="respiratoryPost" id="respiratoryPost">
                    </div>
                    </div>
                    <span>Temperature</span>
                    <div class="each_sections">
                    <div class="form-control">
                    <label for="tempPre">Pre-Labor Baseline (C/F)</label>
                    <input type="text" class="_input" name="tempPre" id="tempPre">
                    </div>
                    <div class="form-control">
                        <label for="tempDuring">During Labor (C/F)</label>
                        <input type="text" class="_input" name="tempDuring" id="tempDuring">
                    </div>
                    <div class="form-control">
                        <label for="tempPost">Post Delivery (C/F)</label>
                        <input type="text" class="_input" name="tempPost" id="tempPost">
                    </div>
                    </div>
            </div>


            <div class="screening_input2">
                  <div class="each_sections">
                    <div class="form-control">
                        <label for="continousFetalMonitoring">Continous Fetal Monitoring</label>
                              <input type="text" class="_input" name="continousFetalMonitoring" id="continousFetalMonitoring">
                    </div>
                    <div class="form-control">
                        <label for="certivalDilatationAssessment">Cervical Dilatation Assessment</label>
                              <input type="text" class="_input" name="certivalDilatationAssessment" id="certivalDilatationAssessment">
                    </div>
                    <div class="form-control">
                        <label for="vaginalExamination">Vaginal Examination</label>
                              <input type="text" class="_input" name="vaginalExamination" id="vaginalExamination">
                    </div>
                    <div class="form-control">
                        <label for="groupBStreptpcoccus">Group B Streptococcus (GBS) Status Check</label>
                              <input type="text" class="_input" name="groupBStreptpcoccus" id="groupBStreptpcoccus">
                    </div>
                    <div class="form-control">
                        <label for="bloodPressureMonitoring">Blood Pressure Monitoring</label>
                              <input type="text" class="_input" name="bloodPressureMonitoring" id="bloodPressureMonitoring">
                    </div>
                    </div>
                </form>
                <div class="drug_prescription" id="section3">
  <form action="">
    <h1>Drugs Prescription</h1>
    <div class="each_sections">
      <div class="form-control">
        <label for="drug3">Drugs</label>
        <input type="text" name="" id="drug3">
      </div>
      <div class="form-control">
        <label for="drug_strength3">Strength</label>
        <input type="text" name="" id="drug_strength3">
      </div>
      <div class="form-control">
        <label for="drug_mode3">Mode</label>
        <select name="" id="drug_mode3">
          <option value="tablet">Tablet</option>
          <option value="capsule">Capsule</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_freq3">Frequency</label>
        <select name="" id="drug_freq3">
          <option value="2_days">2 Days</option>
          <option value="24_hours">24 Hours</option>
        </select>
      </div>
      <div class="form-control">
        <label for="drug_qty3">Qty</label>
        <input type="text" name="" id="drug_qty3">
      </div>
    </div>
    <button type="button" class="btn add__drug" data-section="section3">Add Drugs</button>
    <button type="button" class="btn" onclick="_bookDrugs()">Book Drugs</button>
  </form>
  <table id="dataTable3">
  <thead>
        <tr>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>

            </div>
            <button class="btn" id="updateLabourPatientData">Update data</button>
        </div>
</div>
        <script src="js/jquery-3.7.1.js"></script>
<script src="js/martanity.js"></script>
</body>
</html>