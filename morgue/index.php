<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgue</title>
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="style/icons-1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style/animate.css">
</head>
<body>

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
        <li  id="emergency__form__link" class="links active" onclick="incomingAppoitment()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Incoming Appoitment</span>
        </li>
        <li  id="emergency__form__link" class="links" onclick="incomingDeceassed()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Incoming Deceased</span>
        </li>
        <li id="emergency__link" class="links" onclick="admissionForm()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Admission Form</span>
        </li>
        <li id="emergency__link" class="links" onclick="outgoingDeceassed()"">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Outgoing Deceased</span>
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



  <div class="list_div" id="incomingAppoitment">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Incoming Appoitment</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No Appoitment</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>


  <!---------------------------------------------------------APPOITMENT----------------------------------->

<!---------------------------------------------LIST OF DECEASSED------------------------------------------------>  
<div class="list_div hide" id="incomingDeceassed">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Incoming Deceased List</h3>
                <input type="text" name="" placeholder="Search" id="incomingSearchInput">
            </div>
            <table id="IncomingTableData">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Deceased Name</td>
                        <td>Deceased ID</td>
                        <td>Date of Birth</td>
                        <td>Date of Incident</td>
                        <td>Time of Incident</td>
                        <td>Date of Death</td>
                        <td>Age of Deceased</td>
                        <td>Amount Deposited</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
  </div>
  </div>

<div class="list_div hide" id="outgoingDeceassed">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Outgoing Deceased List</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="TableData">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Deceased Name</td>
                        <td>Deceased Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Relative Name</td>
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

<!---------------------------------------------FORM FOR DECEASSED & RELATIVE------------------------------------------------>  
<div class="container hide">
        <div class="deceased_form">
          <form action="" class="form" id="deceassedForm">
                  <span>Deceased Admission form</span>
                    <div class="each_sections">
                    <div class="form-control">
                        <label for="deceasedName">Deceased Name</label>
                        <input type="text" name="deceasedName" id="deceasedName">
                    </div>
                    <div class="form-control">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob">
                    </div>
                    <div class="form-control">
                        <label for="toa">Time of Admission</label>
                        <input type="date" name="toa" id="toa">
                    </div>
                    <div class="form-control">
                        <label for="doa">Date of Admission</label>
                        <input type="time" name="doa" id="doa">
                    </div>
                    <div class="form-control">
                        <label for="dod">Date of Death</label>
                        <input type="date" name="dod" id="dod">
                    </div>
                    <div class="form-control">
                        <label for="ageAtTimeOfDeath">Age at time of Death</label>
                        <input type="text" name="ageAtTimeOfDeath" id="ageAtTimeOfDeath">
                    </div>

                    <div class="form-control">
                      <label for="gender">Gender</label>
                    <div class="radio-group">
              <label>
                  Male
                  <input type="radio" name="gender" value="male" id="maleCheckbox">
                  <span class="custom-radio"></span>
              </label>
              <label>
                  Female
                  <input type="radio" name="gender" value="female" id="femaleCheckbox">
                  <span class="custom-radio"></span>
              </label>
            </div>
                    </div>
                    <div class="form-control">
                    <label for="placeOfDeath">Place of Death</label>
                    <input type="text" name=placeOfDeath" id="placeOfDeath">
                    </div>
                    <div class="form-control">
                        <label for="autopsy">Was an autopsy perfomed</label>
                    <div class="radio-group">
              <label>
                Yes
            <input type="radio" name="autopsy" value="yes" id="autopsyPerformed">
            <span class="custom-radio"></span>
        </label>
        <label>
            No
                <input type="radio" name="autopsy" value="no" id="autopsyNotPerformed">
                <span class="custom-radio"></span>
            </label>
        </div>
                    </div>
                    <div class="autopsy_message">
                      <div class="form-control">
                        <label for="message">Message</label>
                  <input class="" name="message" id="message"></input>
                  </div>
                  </div>
                    <div class="form-control">
                    <label for="casuseOfDeath">Cause of death</label>
                    <input type="text" name="casuseOfDeath" id="casuseOfDeath">
                    </div>
                    <div class="form-control">
                    <label for="durationOfIllness">Duration of Illness</label>
                    <input type="text" name="durationOfIllness" id="durationOfIllness">
                    </div>
                    <div class="form-control">
                    <label for="deposit">Deposit</label>
                    <input type="text" name="deposit" id="deposit">
                    </div>
                    <div class="form-control">
                    <label for="morguePlan">Morgue Plan</label>
                    <select name="morguePlan" id="morguePlan">
                        <option value="preservative">Preservative</option>
                        <option value="storage">Storage</option>
                    </select>
                    </div>
                    <div class="form-control">
                    <label for="uploadDeathCertificate">Upload Death Certificate</label>
                    <input type="file" name="uploadDeathCertificate" id="uploadDeathCertificate">
                    </div>
                    <div class="form-control">
                    <label for="uploadPoliceReport">Upload Police Report (In a cese of Armed robbery, <br/> bullet wound, stabbed wound that lead to death). </label>
                    <input type="file" name="uploadPoliceReport" id="uploadPoliceReport">
                    </div>
                    </div>
                    <button type="button" class="btn_submit" onclick="validateDeceasedForm()">Book</button>
                </form>
            </div>

            <div class="relative_form">
              <form action="" class="form" id="relativeDeasedForm">
                  <span>Relative form</span>
                <div class="each_sections">
                    <div class="form-control">
                        <label for="relativeName>Relative Name</label>
                        <input type="text" name="relativeName" id="relativeName">
                    </div>
                    <div class="form-control">
                        <label for="relationshipwithDeceased">Relationship with deceased</label>
                        <input type="text" name="relationshipwithDeceased" id="relationshipwithDeceased">
                    </div>
                    <div class="form-control">
                        <label for="relativePhoneNumber">Phone Number</label>
                        <input type="text" name="relativePhoneNumber" id="relativePhoneNumber" >
                    </div>
                    <div class="form-control">
                        <label for="mentalStatus">Mental Status</label>
                        <input type="text" name="mentalStatus" id="mentalStatus" >
                    </div>
                    <div class="form-control">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" id="occupation" >
                    </div>
                    <div class="form-control">
                    <label for="">Gender</label>
                    <div class="radio-group">
        <label>
            Male
            <input type="radio" name="rgender" value="male" id="maleChecked">
            <span class="custom-radio"></span>
        </label>
        <label>
            Female
            <input type="radio" name="rgender" value="female" id="femaleChecked">
            <span class="custom-radio"></span>
        </label>
    </div>
                    </div>
                    <div class="form-control">
                    <label for="religion">Religion</label>
                    <input type="text" name="religion" id="religion">
                    </div>
                    <div class="form-control">
                    <label for="deceasedId">Deceased ID</label>
                    <input type="text" name="deceasedId" id="deceasedId">
                    </div>
                    <div class="form-control">
                    <label for="uploadId">Upload ID</label>
                    <input type="file" name="uploadId" id="uploadId">
                    </div>
                    <div class="form-control">
                        <label for="arrangementForFeneral">Are they any specific arrangement regarding <br/>the relative affairs or funeral arrangement</label>
                    <div class="radio-group">
        <label>
            Yes
            <input type="radio" name="specificArrangement" value="yes" id="arrangementTrue">
            <span class="custom-radio"></span>
        </label>
        <label>
            No
            <input type="radio" name="specificArrangement" value="no" id="arrangementFalse">
            <span class="custom-radio"></span>
            </label>
        </div>
                        </div>
                    <div class="form-control">
                    <label for="uploadConsentForm">Upload Consent form</label>
                    <input type="file" name="uploadConsentForm" id="uploadConsentForm">
                    </div>
                    </div>
                    <button type="button" class="btn_submit" onclick="validateRelativeForm()">Book</button>
                </form>
            </div>
</div>
    <script src="js/index.js"></script>
</body>
</html>