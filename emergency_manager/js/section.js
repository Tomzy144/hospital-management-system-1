const AllSection = function(section,show_container ){
const container = document.getElementById(section + '-container');
container.innerHTML = show_container
}

const Navbar = `
<!---SIDEBAR AND NAVBAR-->
<div class="navbar">
  <div class="section1">
  <!-- <i class="fa fa-long-arrow-left " id="back-arrow" onclick="backWardArrow()"></i> -->
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
          <i class="fa fa-user-md" id="icon"></i>
          <i class="fa fa-hospital-o" id="icon"onClick="show_emergency_patient_list()"></i>
          <i class="fa fa-sign-out" id="icon"></i>
      </div>
  </div>
`

AllSection('navbar', Navbar);

   //PROFILE IMAGE
   const profile_container  =  document.querySelector(".profile_account");
   const click_icon_for_profile = ()=>{
       profile_container.classList.toggle("hide");
   };
const show_emergency_patient_list = ()=>{
    document.querySelector(".patient_list_section").classList.remove("hide");
    document.querySelector(".emergency_form_container").style.display="none"
}


const landing_page = `
<div class="landing_page">
  <div class="sections_div">
  <div class="boxes">
  <div class="flex_two_box">
  <div class="box">
  
  </div>
  <div class="box">
  
  </div>
  </div>
  <div class="flex_two_box">
  <div class="box">
  <div class="emergency_form_container">
<form action="">
<h1>EMERGENCY FORM</h1>
    <span>Patient Info</span>
    <div class="form_control_group">
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
    </div>
    <span>Emergency Contact</span>
    <div class="form_control_group">
    <div class="form_control">
    <label for="">Full Name</label>
    <input type="text">
   </div>

   <div class="form_control">
    <label for="">Contact Number</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="">Relatonship</label>
    <input type="text">
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
    <input type="text">
    </div>
    </div>
    <button class="btn_submit" type="button" id="btn_submit"> Submit</button>
</form>
</div>
  </div>
  <div class="box">
<div class="nurse_section">
<h1>Nurse Station</h1>
<form>
<div class="form_control_flexs">
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="patient_name"/>
</div>
</div>
<div class="form_control_flexs">
<div class="form_control">
<label>Selected date</label>
<input type="date" name="patient_name"/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name="patient_name"/>
</div>
</div>
</form>
<button>Submit</button>
</div>
<div class="doc_section">
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
<button>Call in</button>
</div>
  </div>
  </div>
  <div class="flex_two_box">
  <div class="box">
  
<div class="lab_setion">
<h1>Labouratory</h1>
<form>
<div class="form_control_flexs">
<div class="form_control">
<label>Patient Name</label>
<input type="text" name="patient_name"/>
</div>
<div class="form_control">
<label>Patient Id</label>
<input type="text" name="patient_name"/>
</div>
</div>
<div class="form_control_flexs">
<div class="form_control">
<label>Selected date</label>
<input type="date" name="patient_name"/>
</div>
<div class="form_control">
<label>Selected time</label>
<input type="time" name="patient_name"/>
</div>
</div>
</form>
<button>Submit</button>
</div>
  </div>
  <div class="box">
  <div class="rad_setion">
  <h1>Radiology</h1>
  <form>
  <div class="form_control_flexs">
  <div class="form_control">
  <label>Patient Name</label>
  <input type="text" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Patient Id</label>
  <input type="text" name="patient_name"/>
  </div>
  </div>
  <div class="form_control_flexs">
  <div class="form_control">
  <label>Selected date</label>
  <input type="date" name="patient_name"/>
  </div>
  <div class="form_control">
  <label>Selected time</label>
  <input type="time" name="patient_name"/>
  </div>
  </div>
  </form>
  <button>Submit</button>
  </div>
  </div>
  </div>
  </div>
  </div>

  

</div>
`
AllSection("landing_page", landing_page);




