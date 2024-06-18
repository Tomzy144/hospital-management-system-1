<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
    <title>Emergency Unit</title>
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
        <li  id="emergency__form__link" class="links active" onclick="emergencyForm()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Emergecy Unit Form</span>
        </li>
        <li id="emergency__link" class="links" onclick="emergencyList()">
          <i class="fa-solid fa-person-pregnant"></i>
          <span>Emergency Patient List</span>
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
<div class="emergency_form_container">
<form action="" id="emergencyInputData">
<h3>EMERGENCY FORM</h3>
  <h3>Patient Info</h3>
  <div class="each_sections">
<div class="form-control">
  <label for="fullName">Full name</label>
  <input type="text" name ="fullName" id="fullName" class="emergencyInput">
  </div>
  <div class="form-control">
  <label for="dob">Date of Birth</label>
  <input type="date" name="dob" id="dob" class="emergencyInput"> 
  </div>
  <div class="form-control">
  <label for="address">Address</label>
  <input type="text" name ="address" id=" address" class="emergencyInput">
  </div>
  </div>
  <h3>Emergency Contact</h3>
  <div class="each_sections">
  <div class="form-control">
  <label for="efullName">Full Name</label>
  <input type="text" name ="efullName" id="efullName" class="emergencyInput">
 </div>

 <div class="form-control">
  <label for="contactNumber">Contact Number</label>
  <input type="text" name ="contactNumber" id="contactNumber" class="emergencyInput">
  </div>
  <div class="form-control">
  <label for="relationship">Relatonship</label>
  <input type="text" name ="relationship" class="emergencyInput" id="relationship" >
  </div>

  </div>
  <h3>Incident Details</h3>
  <div class="each_sections">
  <div class="form-control">
  <label for="doi">Date of the Incident</label>
  <input type="date" name="doi" id="doi" class="emergencyInput"> 
 </div>

 <div class="form-control">
  <label for="toi">Time of the Incident</label>
  <input type="time" name="toi" id="toi" class="emergencyInput"> 
  </div>
 <div class="form-control">
  <label for="coi">Cause of the Incident</label>
  <input type="text" name ="coi" id="coi" class="emergencyInput">
  </div>
  </div>
  <button class="btn_submit" type="button" id="submitEmergencyInput"> Submit</button>
</form>
</div>
</div>


<div class="appoitment__div hide">
  <h3>AVAILABLE</h3>
<i class="bi bi-x-square cancle"></i>
  <form action="" id="bookForm">
  <div class="each_sections">
  <div class="form-control">
    <label>Patient Name</label>
    <input type="text" name="patient_name" />
  </div>
  <div class="form-control">
    <label>Patient Id</label>
    <input type="text" name="patient_id" />
  </div>
  </div>
  <div class="each_sections">
  <div class="form-control">
    <label>Selected date</label>
    <input type="date" name="selected_date" />
  </div>
  <div class="form-control">
    <label>Selected time</label>
    <input type="time" name="selected_time" />
  </div>
  </div>
  <div class="each_sections">
  <div class="form-control availableDoctor">
    <label for="">Role</label>
  <select  id="select_doc">
<option value="" id="opt">Gyancoligist</option>
<option value="">Surgeon</option>
<option value="">Dentist</option>
<option value="" id="opt">Gyancoligist</option>
<option value="">Surgeon</option>
<option value="">Dentist</option>
<option value="" id="opt">Gyancoligist</option>
<option value="">Surgeon</option>
<option value="">Dentist</option>
</select>
</div>

<div class="form-control availableDoctor">
<label>Available Doctor</label>
<select  id="select_doc">
<option value="" id="opt">Doc. Mathew </option>
<option value="">Doc. Prince</option>
<option value="">Doc. Peter</option>
<option value="">Doc. Patrick</option>
</select>
  </div>
  </div>
  <div class="each_sections">
  <div class="form-control">
    <label>Comment</label>
    <textarea ></textarea>
  </div>
  </div>
</form>
  <button class="btn_submit">Submit</button>  
  </form>
</div>


  <div class="list_div section hide" id="emergency_list_section">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Emergency Patient List</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="TableData">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient ID</td>
                        <td>Cause of Incident</td>
                        <td>Date of Incident</td>
                        <td>Time of Incident</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <!-- <tr>
                  <td colspan="7">No data</td>
                </tr> -->
                </tbody>
        </table>
  </div>
  </div>










  
  </div>

    <script src="js/section.js"></script> 
    <script src="js/script.js"></script> 
</body>
</html>