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
          <i class="bi bi-person-rolodex" id="icon">
          <div class="notification1">9</div>
        </i>
        <i class="bi bi-bell-fill" id="icon">
        <div class="notification2">15</div></i>
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
          <i class="bi bi-caret-down-fill"  id="icon-drop" onClick="click_icon_for_profile()"></i>
        </div>
      </div>
    </div>
      <div class="sidebar">
             <div class="sidebar_contents">
              <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
             </div>
          <div class="sidebar_icons">
          <i class="bi bi-chat-dots-fill" id="icon"></i>
          <i class="bi bi-person" id="icon" onClick="open_admission_form_section()"></i>
              <i class=" bi-box-arrow-right" id="icon"></i
          </div>
      </div>
    `
    AllSection('navbar', Navbar);
