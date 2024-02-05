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
<div class="landing_section">
<button onClick="view_emergency_form()">EMERGENCY FORM</button>
<button onClick="view_emergency_form()">DOCTOR</button>
<button onClick="view_emergency_form()">NURSE</button>
<button onClick="view_emergency_form()">RADIOLOGY</button>
<button onClick="view_emergency_form()">LABOURATORY</button>
<button onClick="view_emergency_form()">SURGICAL SUITE</button>
<button onClick="view_emergency_form()">ICU</button>
<button onClick="view_emergency_form()">MORGUE</button>
</div>
</div>
`
AllSection("landing_page", landing_page)

const emergency_form = `
<div class="emergency_form_container hide">
<form action="">
<h1>EMERGENCY FORM</h1>
    <h2>Fill in the neccesary information</h2> 
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
    <label for="">Contact Number (After Hour)</label>
    <input type="text">
    </div>
    </div>
    <div class="form_control">
    <label for="">Relatonship</label>
    <input type="text">
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
    </div>
</form>
</div>
`
AllSection('emergency_form', emergency_form)

const view_emergency_form = ()=>{
  document.querySelector(".emergency_form_container").classList.remove("hide");
  document.querySelector(".landing_page").style.display = "none";
}


const patient_list_page = `
<!----APPOITMENT SECTION-->
<div class="patient_list_section hide">
<div class="container">
<div class="contents">
<div class="head-sec">
  <span style="color:black;">Patient Lists</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search-icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="body_sec">
<table>
<thead>
<tr>
  <td>#</td>
  <td>Patient Name</td>
  <td>Patient ID</td>
  <td>Phone Number</td>
  <td>Cause of the Incident</td>
  <td>Status</td>
  <td>Responses</td>
</tr>
</thead>
<tbody>
<tr>
  <td>1</td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>0903278232</td>
  <td>Accident</td>
  <td>
    <div class="green"></div>
  </td>
  <td>
  <button class="switch_plan">Switch to plan</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>0903278232</td>
  <td>Accident</td>
  <td>
  <div class="red"></div>
  </td>
  <td>
<button class="transfer">Transfer to Morgue</button>
</td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>0903278232</td>
  <td>Accident</td>
  <td>
  <div class="yellow"></div>
  </td>
  <td>
  <button class="transfer">Transfer to Surgical Unit</button>
  </td>
</tr>
</tbody>
</table>
<div class="emergency_patient_list_pagination">
<div class="flexs">
    <p id="prevPen">Prev List</p>
    <p id="nextPen">Next List</p>
</div>
</div>
</div>
</div>
</div>
      </div>
`
AllSection('patient_list_page', patient_list_page);

const doctors = `
<div class="doctor_container hide">

</div>
`
AllSection('doctor', doctors);


