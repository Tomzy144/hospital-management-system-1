const AllSection = function(section, show_container){
    let container = document.getElementById(section + '-container');
    container.innerHTML = show_container;
};


const Navbar =`
    
<div class="navbar">
<div class="section1">
<button class="hide" id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
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
    <img id="image_profile_account" src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
    <h4>Esther John Ronald</h4>
    <button class="btn_submit">Upload Image</button>
    <span>change password</span>
</div>
    <div class="image">
    <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
    <div class="active"></div>
    </div>
</img>  
    <span>Esther John Ronald</span>
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
        <i class="bi bi-calendar-date-fill icons"></i>
        <i class="bi bi-pencil-square icons"  onClick="show_profile_list()" ></i>
        <i class=" bi-box-arrow-right icons"></i>
    </div>
</div>
`
AllSection('navbar', Navbar);

const personal_profile = `
<!--PERSONAL PROFILE VITAL AFTER CLICKING ON THE ACCEPT BUTTON--->
<div class="personal_profile_vital hide">
  <div class="patient_container">
      <div class="patient_info">
      <div class="patient_profile">
      <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="" />
      <div class="patient_name_id">
          <span>Precious Joseph</span>
          <span>  PATOOO1</span>
          </div>
          </div>
          <button class= "btn_ward" onClick="ward()">Ward</button>
              <!--Wards--->
              <div class="ward_container hidden">
              <label for="ward">Change Ward</label>
              <select name="ward" id="ward">
                  <option value="ward_select"></option>
                  <option value="ward_1">Ward 1</option>
                  <option value="ward_2">Ward 2</option>
                  <option value="ward_3">Ward 3</option>
                  <option value="ward_4">Ward 4</option>
                  <option value="ward_5">Ward 5</option>
                  <option value="ward_6">Ward 6</option>
              </select>
          </div>

          <button class= "btn_ward_round" onClick="ward_round()">Ward Round</button>
          <div class="ward_round_container hidden">
              <label for="stage">Stage</label>
              <select name="stage" id="stage">
                  <option value="no_selection"></option>
                  <option value="am">Am</option>
                  <option value="am">Pm</option>
              </select>
              <label for="note">WR Note</label>
              <textarea name="note" id="note" cols="30" rows="10"></textarea>
          </div>

          <button class= "btn_vital" onClick="patientVital()">Vital Input</button>
          <div class="vitals_input hidden">
          <form action="">
              <div class="form_control">
    <label for="temperature">Temperature</label>
    <input type="text">
    </div>
          
              <div class="form_control">
    <label for="b/p">B/P(mm/HG)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="pulse">Pulse(bp/m)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="respiratory">Respiratory(cm)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="weight">Weight(kg)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="height">Height(cm)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="intake">Intake(m/s)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="output">Output(m/s)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="spo2">SPO2(%)</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="bmi">BMI</label>
    <input type="text">
    </div>
           <div class="form_control">
    <label for="body_fat">Body fat(%)</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="muscle_mass">Muscle mass</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="musc">MUAC</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="resting_metabolism">Restinng metabolism</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="body_age">Body age</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="bmi_for_age">BMI for age</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="visceral_fat">Visceral fat</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="head_circumference">Head circumference</label>
    <input type="text">
    </div>
    <div class="form_control">
    <label for="wfa">WFA</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="waist_circumference">Waist Circumference</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="hip_circumference">Hip Circumference</label>
    <input type="text">
    </div>
              <div class="form_control">
    <label for="w_hr">W-HR</label>
    <input type="text">
    </form>
</div>
<button class="btn_submit">Save</button>
</div>
<button class="btn_submit" onClick="show_appoitment_section()">Transfer</button>
</div>
</div>
</div>
`
AllSection('personal_patient', personal_profile);

const landing_page = `
<!----APPOITMENT SECTION-->
<div class="appoitment_section">
<div class="container">
<div class="contents">
<div class="head-sec">
  <span style="color:black;">Appoitment Details</span>
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
  <td>PASSPORT</td>
  <td>Patient Name</td>
  <td>Patient ID</td>
  <td>Date</td>
  <td>Time</td>
  <td>Accept</td>
  <td>Reject</td>
</tr>
</thead>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
<tbody>
<tr>
  <td>1</td>
  <td>
      <div class="image">
      <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
      </div>
  </td>
  <td>Precious Bassey</td>
  <td>001</td>
  <td>22-02-2024</td>
  <td>2:30PM</td>
  <td>
  <button class="accept-btn" type="button" onClick="personal_profile_section()">Accept</button>
  </td>
  <td>
  <button class="reject-btn">Reject</button>
  </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
      </div>
`
AllSection('landing_section', landing_page);

const patients_list = `
<div class="new_vital hide">
<div class="search-container">
<div class="search-bar">
    <div id="select" onClick="select()">
        <p id="selectText"></p>
        <i class="fa fa-sort-desc"></i>
        
<ul id="list">
    <li class="options" id="0" onclick="showTable('All')">All</li>
    <li class="options" id="1" onclick="showTable('Inpatients')">Inpatients</li>
    <li class="options" id="2" onclick="showTable('Outpatients')">Outpatients</li>
    <li class="options" id="7"  onclick="showTable('Todayinputs')">Today inputs</li>
    <!-- Add more options here -->
</ul>
    </div>
        <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
        <i class="fa fa-search"  id="submit-input"></i>
</div> 
</div>
<div class="all_patient_container">
    <div class="flex_container">
        <div class="each_container">
            <div class="number_container">
                1.
            </div>
            <div class="patient_info">
            <div class="patient_profile">
            <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="" />
            <div class="patient_name_id">
                <span>Precious Joseph</span>
                <span>  PATOOO1</span>
                </div>
                </div>
                <button class= "btn_ward" onClick="ward_all_section()">Ward</button>
                    <!--Wards--->
                    <div class="all_patient_ward_container hidden">
                    <label for="ward">Change Ward</label>
                    <select name="ward" id="ward">
                        <option value="ward_select"></option>
                        <option value="ward_1">Ward 1</option>
                        <option value="ward_2">Ward 2</option>
                        <option value="ward_3">Ward 3</option>
                        <option value="ward_4">Ward 4</option>
                        <option value="ward_5">Ward 5</option>
                        <option value="ward_6">Ward 6</option>
                    </select>
                </div>

                <button class= "btn_ward_round" onClick="ward_round_all_section()">Ward Round</button>
                <div class="all_patient_ward_round_container hidden">
                    <label for="stage">Stage</label>
                    <select name="stage" id="stage">
                        <option value="no_selection"></option>
                        <option value="am">Am</option>
                        <option value="am">Pm</option>
                    </select>
                    <label for="note">WR Note</label>
                    <textarea name="note" id="note" cols="30" rows="10"></textarea>
                </div>

                <button class= "btn_vital" onClick="patientVital_all_section()">Vital Input</button>
                <div class="all_patient_vitals_input hidden">
                <form action="">
                    <div class="form_control">
          <label for="temperature">Temperature</label>
          <input type="text">
          </div>
                
                    <div class="form_control">
          <label for="b/p">B/P(mm/HG)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="pulse">Pulse(bp/m)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="respiratory">Respiratory(cm)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="weight">Weight(kg)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="height">Height(cm)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="intake">Intake(m/s)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="output">Output(m/s)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="spo2">SPO2(%)</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="bmi">BMI</label>
          <input type="text">
          </div>
                 <div class="form_control">
          <lacenter; for="body_fat">Body fat(%)</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="muscle_mass">Muscle mass</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="musc">MUAC</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="resting_metabolism">Restinng metabolism</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="body_age">Body age</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="bmi_for_age">BMI for age</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="visceral_fat">Visceral fat</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="head_circumference">Head circumference</label>
          <input type="text">
          </div>
          <div class="form_control">
          <label for="wfa">WFA</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="waist_circumference">Waist Circumference</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="hip_circumference">Hip Circumference</label>
          <input type="text">
          </div>
                    <div class="form_control">
          <label for="w_hr">W-HR</label>
          <input type="text">
          </div>
          <button class="btn_submit">Save</button>
          </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
`
AllSection('patient_list', patients_list)
   //Search Bar
   const list = document.getElementById("list");
   const selectText = document.getElementById("selectText");
   const options = document.getElementsByClassName("options");
   const inputfield = document.getElementById("inputfield");
   const submitInput = document.getElementById("submit-input");
   const id = document.getElementById("id");
   function select(){
    list.classList.toggle("open");
   }   
   const user_select = 1;
   submitInput.addEventListener("load", function(){
       submitInput.innerHTML = user_select.toString();
   })
   
   for(option of options){
       option.addEventListener("click", function(){
           selectText.innerHTML = this.innerHTML,id;
           inputfield.placeholder = 'Search In ' + selectText.innerHTML
       })
   }



const book_appoitment = `
<div class="appoitment_container hide">
                <section class="doctor_roles_name hide">
                    <i  class="bi bi-x-lg" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
                <div class="appoitment-calender">
                    <div class="doc_roles">
                <label for="roles">Specialist</label>
<select id="roles"  onclick="getDoctors()">
<option>Select</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="surgeon">Surgeon</option>
    <option value="psychiatrist">Psychiatrist:</option>
    <option value="family_medicine">Family Medicine</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="anaesthesiology">Anaesthesiology</option>
    <option value="rheumatologist">Rheumatologist</option>
    <option value="endocrinologist">Endocrinologist</option>
    <option value="nephrologist">Nephrologist</option>
    <option value="neurologist">Neurologist</option>
    <option value="pediatrician">Pediatrician</option>                
    <option value="urologist">Urologist</option>
    <option value="radiologist">Radiologist</option>
    <option value="dentist">Dentist</option>
    <option value="pulmonologist">Pulmonologist</option>
    <option value="podiatristian">Podiatristian</option>
    <option value="emergency_physician">Emergency Physician</option>
    <option value="anaesthesiologist">Anaesthesiologist</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="oncologist">Oncologist</option>
    <option value="gastroenterologist">Gastroenterologist</option>
    <option value="ophthanlmologist">Ophthanlmologist</option>
    <option value="cardology">Cardology</option>
    <option value="allergist">Allergist</option>
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option> 
    <!-- Add more role options as needed-->
</select>
<label for="doctors">Roles</label>
<select id="doctors">
    Doctors for the selected role will be dynamically added here
</select>
<button id="continue" type="submit" onClick="submitRoles()" >Continue</button>
</div>
    <div class="appoitment_form hidden">
<div class="calendar">
            <div class="month">
                <i class="fa fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fa fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"> </div>
        </div>
        <div class="form_appoitment">
            <h3>Fill in the neccessary Information</h3>
            <form action="" class="form">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" placeholder="john">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" placeholder="id001">
                </div>
                <div class="form_control">
                    <label for="">Selected Date</label>
                    <div class="selected_date">03-01-2024</div>
                </div>
                <div class="form_control">
                    <label for="">Selected Time</label>
                    <input type="time">
                </div>
                <div class="form_control_text_area">
                    <label for="">Doctor Comment</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="btn_submit_appoitment">Transfer</button>
                </div>
            </form>
        </div>
        </div>
                </section>
            <section class="appoitments">
            <h1>Appoitments</h1>
            <div class="cards_container">
            <div class="cards">
                <div class="profile">
                    <img src="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Rita John</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
                <div class="profile">
                    <img src="../Images/513d2ccb77e948b687079bc2d6f42661.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Mary Asuquo</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Patience Emmanuel</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            <div class="cards">
            <div class="profile">
                    <img src="../Images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                    <div class="name_role">
                    <h3>Dr. Kingsley Patrick</h3>
                    <h4>Gynaecologist</h4>
                    </div>
                </div>
                <div class="date_time">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>2/03/2024</span>
                    </div>
                    <div class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2.30pm</span>
                    </div>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_pending">Pending</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_accepted">Accepted</button>
                    </div>
                    <div class="buttons">
                        <button class="btn" id="btn_declined">Declined</button>
                    </div>
            </div>
            </div>
            </section>
            </div>
`

AllSection('book_appoitment', book_appoitment)


    //BEGINNING OF THE APPOITMENT 

//DOCTOR
const doctorsData = {
  cardiologist: ['Dr. Tomiwa', 'Dr. Johnson'],
  dermatologist: ['Dr. Kingsley', 'Dr. White'],
  surgeon:['Dr. Priceless', 'Dr John'],
  psychiatrist:['Dr. Towa', 'Dr Paul'],
  family_medicine:['Dr. Praise', 'Dr Trinity'],
  dermatologist: ['Dr.Tom', 'Dr Ruth' ],
  anaesthesiology:['Dr. Drake', 'Dr. Drake'],
  rheumatologist:['Dr. Peace', 'Dr Jude'],
  endocrinologist:['Dr. Grace', 'Dr. Houston'],
  nephrologist:['Dr. Goodness', 'Dr Goodnews'],
  neurologist:['Dr. Goodness', 'Dr.Peace'],
  pediatrician:['Dr. Fooad', 'Dr. Fooad'],
  urologist:['Dr. Uro', 'Dr. Fooad'],
  radiologist:['Dr. Fooad', 'Dr. Fooad'],
  dentist:['Dr. Gofade', 'Dr. Fooad'],
  pulmonologist:['Dr. Foatt', 'Dr. Fooad'],
  podiatristian:['Dr. Foatt', 'Dr. Fogad'],
  emergency_physician:['Dr. Good', 'Dr. Tom'],
  anaesthesiologist:['Dr. Green', 'Dr. Green'],
  cardiologist:['Dr Ben', 'Dr. White'],
  oncologist:['Dr. Bemson', 'Dr. Green'],
  gastroenterologist:['Dr. Houston', 'Dr. Green'],
  ophthanlmologist:['Dr. Jous', 'Dr. King'],
  cardology:['Dr. Funke', 'Dr Roseline'],
  allergist:['Dr. Postel', 'Dr.Houston'],
  orthopedic_surgoen:['Dr.Lookman', 'Dr. Chelsea'],
};

function getDoctors() {
  const selectedRole = document.getElementById('roles').value;
  const doctorsSelect = document.getElementById('doctors');
  doctorsSelect.innerHTML = ''; // Clear previous options

  // Populate the doctors select box based on the selected role
//   doctorsData[selectedRole].forEach(doctor => {
//       const option = document.createElement('option');
//       option.value = doctor;
//       option.text = doctor;
//       doctorsSelect.appendChild(option);
//   });
}

// Initial population of doctors based on the default selected role
getDoctors();


//CALENDAR
 //This help show the current date and time zone of today
 const date =  new Date()

 const renderCalendar = ()=>{
    date.setDate(1)
    // console.log(date.getDay());
     //this help shows the current month we are in and its 0 based "which means its counts from 0 throgh the months"
    //  const month  = date.getMonth()
     const monthDays = document.querySelector(".days")
    const lastDay = new Date(date.getFullYear(), date.getMonth() +1, 0).getDate()
    
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate()
    
    const firstDayIndex = date.getDay() 
    
    const  lastDayIndex = new Date(date.getFullYear(), date.getMonth() +1, 0).getDay()
    const nextDays = 7 - lastDayIndex -1
    //this is the month array of all the selected month
    const months = [
        "January", 
        "February",
         "March",
          "April", 
          "May", 
          "June", 
          "July", 
          "August", 
          "September",
           "October", 
           "November",
           "December" 
    ] ; 
    
    document.querySelector(".date h1").innerHTML = months[date.getMonth()];
    document.querySelector(".date p").innerHTML = new Date().toDateString();
    // const showDate =  document.querySelector(".content");
    
    let days = "";
    
    for(let x =  firstDayIndex; x>0; x--){
        days += `<div class ="prev-date">${prevLastDay - x +1}</div>`;
    }
    
    for(let i = 1; i <=lastDay; i++) {
        if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
            
            days +=`
            <div class="calendar-date today" onclick="updateClickedDate(${i})">${i}</div>`;
        }else{
            
            days +=`
            <div class="calendar-date" onclick="updateClickedDate(${i})">${i}</div> `;
        }
    }
    
    for(let j =1; j<=nextDays; j++){
        days += `<div class="next-date">${j}</div>`;
        monthDays.innerHTML = days;
    }
 }
 function updateClickedDate(clickedDay) {
    document.querySelector(".selected_date").textContent = `${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
    document.getElementById('date').value=`${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
  }
 
 
 document.querySelector(".prev").addEventListener("click", function(){
    date.setMonth(date.getMonth() -1)
    renderCalendar()
 })
 document.querySelector(".next").addEventListener("click", function(){
    date.setMonth(date.getMonth()+ 1)
    renderCalendar()
 })
 renderCalendar();
