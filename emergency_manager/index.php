<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Emergency Unit</title>
</head>
<body>
    
<!---SIDEBAR AND NAVBAR-->
<div class="navbar">
  <div class="section1">
  <!-- <i class="fa fa-long-arrow-left " id="back-arrow" onclick="backWardArrow()"></i> -->
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
      <img id="image_profile_account" src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
      <h4>Peace Emmanuel Christopher</h4>
      <button class="btn_submit">Upload Image</button>
      <span>change password</span>
  </div>
      <div class="image">
      <img src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
      <div class="active_on"></div>
      </div>
  </img>  
      <span>Peace Emmanuel Christopher</span>
      <i class="bi bi-caret-down-fill" id="icon-drop" onClick="click_icon_for_profile()"></i>
    </div>
  </div>
</div>
  <div class="sidebar">
         <div class="sidebar_contents">
          <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
         </div>
      <div class="sidebar_icons">
      <i class="bi bi-chat-dots-fill icons"></i>
      <i class="bi bi-calendar-date-fill icons" onClick="show_emergency_patient_list()"></i>
             <i class=" bi-box-arrow-right icons"></i>
      </div>
  </div>
  
<div class="landing_page_section">
<div class="section1">
<div class="emergency_form_container">
<form action="">
<h1>EMERGENCY FORM</h1>
  <span>Patient Info</span>
  <div class="form_control_group">
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
  <input type="text" placeholder="23 Marian Road">
  </div>
  </div>
  <span>Emergency Contact</span>
  <div class="form_control_group">
  <div class="form_control">
  <label for="">Full Name</label>
  <input type="text" placeholder="John Smith">
 </div>

 <div class="form_control">
  <label for="">Contact Number</label>
  <input type="text" placeholder="+234 434 432 422">
  </div>
  <div class="form_control">
  <label for="">Relatonship</label>
  <input type="text" placeholder="Brother">
  </div>

  </div>
  <span>Incident Details</span>
  <div class="form_control_group">
  <div class="form_control">
  <label for="">Date of the Incident</label>
  <input type="date">
 </div>

 <div class="form_control">
  <label for="">Time of the Incident</label>
  <input type="time">
  </div>
 <div class="form_control">
  <label for="">Cause of the Incident</label>
  <input type="text" placeholder="Car accident">
  </div>
  </div>
  <button class="btn_submit" type="button" id="btn_submit"> Submit</button>
</form>
</div>
<div class="sections">
  <div class="buttons">
  <button type="button" onClick="click_on_nurse_button()"> Nurse Station</button>
  <button type="button" onClick="click_on_doctor_button()"> Refer to Doctor</button>
  <button type="button" onClick="click_on_lab_button()"> Labouratory Examination</button>
  <button type="button" onClick="click_on_rad_button()"> Radiology Procedure</button>
  <button type="button" onClick="click_on_surgical_button()"> Refer to Surgical Suite</button>
  <button type="button" onClick="click_on_icu_button()"> Refer to ICU</button>
  <button type="button" onClick="click_on_morgue_button()"> Transfer to Morgue</button>
  </div>
  <div class="show_sec">
  <div class="nurse_section hide">
  <h1>Nurse Station</h1>
  <form>
  <div class="form_control">
  <label>Patient Name</label>
  <input type="text" name="patient_name" placeholder="John Smith"/>
  </div>
  <div class="form_control">
  <label>Patient Id</label>
  <input type="text" name="patient_name" placeholder="PAT0003"/>
  </div>
  <div class="form_control">
  <label>Selected date</label>
  <input type="date" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Selected time</label>
  <input type="time" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Comment</label>
 <textarea placeholder="message"></textarea>
  </div>
  </form>
  <button>Submit</button>
  </div>
  
<div class="doc_section hide">
<h1>Available Dotors</h1>
<label>Roles</label>
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
<label>Names</label>
<select  id="select_doc">
<option value="" id="opt">Doc. Mathew </option>
<option value="">Doc. Prince</option>
<option value="">Doc. Peter</option>
<option value="">Doc. Patrick</option>
</select>
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name" placeholder="John Smith"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="patient_name" placeholder="PAT0003"/>
</div>
<label>Comment</label>
<textarea placeholder="message"></textarea>
<button>Call in</button>
</div>

<div class="lab_setion hide">
<h1>Labouratory</h1>
<form>
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name" placeholder="John Smith"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="" placeholder="PAT0003"/>
</div>
<div class="form_control">
<label>Selected date</label>
<input type="date" name="patient_name"/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name="patient_name"/>
</div>
<div class="form_control">
<label>Comment</label>
<textarea placeholder="message"></textarea>
</div>
</form>
<button>Submit</button>
</div>

  <div class="rad_setion hide">
  <h1>Radiology</h1>
  <form>
  <div class="form_control">
  <label>Patient Name</label>
  <input type="text" name="patient_name" placeholder="John Smith"/>
  </div>
  <div class="form_control">
  <label>Patient Id</label>
  <input type="text" name="patient_name" placeholder="PAT0003"/>
  </div>

  <div class="form_control">
  <label>Selected date</label>
  <input type="date" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Selected time</label>
  <input type="time" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Comment</label>
 <textarea placeholder="message"></textarea>
  </div>
  </form>
  <button>Submit</button>
  </div>
  
<div class="surgical_suite_section hide">
<h1>Surgical Suite</h1>
<form>
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name" placeholder="John Smith"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="" placeholder="PAT0003"/>
</div>
<div class="form_control">
<label>Selected date</label>
<input type="date" name=""/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name=""/>
</div>
<div class="form_control">
<label>Comment</label>
<textarea placeholder="message"></textarea>
</div>
</form>
<button>Submit</button>
</div>

<div class="icu_section hide">
<h1>ICU</h1>
<form>
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name" placeholder="John Smith"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="" placeholder="PAT0003"/>
</div>
<div class="form_control">
<label>Selected date</label>
<input type="date" name=""/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name=""/>
</div>
<div class="form_control">
<label>Comment</label>
<textarea placeholder="message"></textarea>
</div>
</form>
<button>Submit</button>
</div>

<div class="morgue_section hide">
<h1>Morgue</h1>
<form>
<div class="form_control">
<label>Deceased Name</label>
<input type="text" name="patient_name" placeholder="John Smith"/>
</div>
<div class="form_control">
<label>Deceased Id</label>
<input type="text" name="" placeholder="PAT0003"/>
</div>
<div class="form_control">
<label>Selected date</label>
<input type="date" name=""/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name=""/>
</div>
<div class="form_control">
<label>Cause of Death</label>
<textarea placeholder="message"></textarea>
</div>
</form>
<button>Transfer</button>
</div>
  </div>
  </div>
</div>

  <div class ="section2">
  <div class ="table_container">
  <div class="head_sec">
  <span>Patient List</span>
  <input type="text" placeholder="Search here"/>
  </div>
    <table>
    <thead>
    <td>S/N</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
    <td>Cause of Incident</td>
    <td>Status</td>
    <td></td>
   
    </thead>
    <tbody>
    <td>1</td>
    <td>Princess Etete Effiong</td>
    <td>PAT0002</td>
    <td>Fire Accident</td>
    <td>
    <div class="yellow"></div>
    </td>
    <td>
    <div class="ward_sec">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots color" viewBox="0 0 16 16" onClick="show_list()">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
</svg>

  <ul class="section_list hidden">
  <i class="bi bi-x-lg" id="close_icon" onClick="close_list()"></i>
  <li class="section" onClick="show_wards()">Emergency Ward 
  <ul class="ward hidden">
  <li class="section_ward_bed" onClick="show_ward1_beds()">Ward 1  </li>
  <select class="ward1_beds hide">
    <option value="">Bed 1</option>
    <option value="">Bed 2</option>
    <option value="">Bed 3</option>
    <option value="">Bed 4</option>
    <option value="">Bed 5</option>
  </select>


  <li class="section_ward_bed" onClick="show_ward2_beds()">Ward 2 </li>
  <select class="ward2_beds hide">
  <option value="">Bed 1</option>
  <option value="">Bed 2</option>
  <option value="">Bed 3</option>
  <option value="">Bed 4</option>
  <option value="">Bed 5</option>
</select>

  <li class="section_ward_bed" onClick="show_ward3_beds()">Ward 3</li>
  <select class="ward3_beds hide">
  <option value="">Bed 1</option>
  <option value="">Bed 2</option>
  <option value="">Bed 3</option>
  <option value="">Bed 4</option>
  <option value="">Bed 5</option>
</select>
  </ul>
  </li>
  <li class="section">Switch to plan</li>
  </ul>

</select>
</div>
  </td>
   
    </table>
  </div>
  </div>
  </div>

    <script src="js/section.js"></script> 
    <script src="js/script.js"></script> 
</body>
</html>