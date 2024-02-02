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
          <i class="fa fa-hospital-o" id="icon"onClick="click_appoitment_button()"></i>
          <i class="fa fa-sign-out" id="icon"></i>
      </div>
  </div>
`

AllSection('navbar', Navbar)

const emergency_form = `
<div class="emergency_form_container">
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