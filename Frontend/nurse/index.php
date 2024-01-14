


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href='../awesome-font/css/font-awesome.min.css'>
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</head>
<body>

<div class="navbar">
        <div class="section1">
            
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
                <i class="fa fa-edit (alias)" id="icon" onClick="click_vital_button()" ></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
        <div class="new_vital">
    <div class="search-container">
    <div class="search-bar">
        <div id="select">
            <p id="selectText"></p>
            <i class="fa fa-sort-desc"></i>
            
    <ul id="list">
        <li class="options" id="0" onclick="showTable('All')">All</li>
        <li class="options" id="1" onclick="showTable('Inpatients')">Inpatients</li>
        <li class="options" id="2" onclick="showTable('Outpatients')">Outpatients</li>
        <li class="options" id="3" onclick="showTable('Waitinglist')">Waiting List</li>
        <li class="options" id="4" onclick="showTable('Appointment')">Appointment</li>
        <li class="options" id="5"  onclick="showTable('Test')">Test</li>
        <li class="options" id="6"  onclick="showTable('ANC')">ANC</li>
        <li class="options" id="7"  onclick="showTable('Todayinputs')">Today inputs</li>
        <!-- Add more options here -->
    </ul>
        </div>
            <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
            <i class="fa fa-search"  id="submit-input"></i>
    </div> 
    </div>
    <div class="patient_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    1.
                </div>
                <div class="patient_info">
                    <span>Precious Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_ward" onClick="showVitals()">Ward</button>
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

                    <button class= "btn_bed" onClick="showVitals()">Bed</button>
                    <div class="bed_container hidden">
                        <label for="bed">Change Bed</label>
                        <select name="bed" id="bed">
                            <option value="bed_select"></option>
                            <option value="bed_1">Bed 1</option>
                            <option value="bed_2">Bed 2</option>
                            <option value="bed_3">Bed 3</option>
                            <option value="bed_4">Bed 4</option>
                            <option value="bed_5">Bed 5</option>
                            <option value="bed_6">Bed 6</option>
                        </select>
                    </div>
                    <button class= "btn_ward_round" onClick="showVitals()">Ward Round</button>
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

                    <button class= "btn_vital" onClick="showVitals()">Vital Input</button>
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
                    </div>
</div>
</div>
<div class="each_container">
                <div class="number_container">
                    2.
                </div>
                <div class="patient_info">
                    <span>Michelle Prince</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pm, Born 20 Hune, 1990(age 54 years), Female</span>
                    <button class= "btn_vital" onClick="showVitals()">Ward</button>
                    <button class= "btn_vital" onClick="showVitals()">Bed</button>
                    <button class= "btn_vital" onClick="showVitals()">Ward Round</button>
                    <button class= "btn_vital" onClick="showVitals()">Vital Input</button>
                    <div class="vitals_input hidden">
                    </div>
</div>
    <script>

        
   //PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};


//Search Bar
const select =  document.getElementById("select");
const list = document.getElementById("list");
const selectText = document.getElementById("selectText");
const options = document.getElementsByClassName("options");
const inputfield = document.getElementById("inputfield");
const submitInput = document.getElementById("submit-input");
const id = document.getElementById("id");

select.addEventListener("click", function(){
    list.classList.toggle("open");
})

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


//Patient Ward Round
const btn_ward_round = document.querySelector(".btn_ward_round");
const ward_round_container = document.querySelector(".ward_round_container");

btn_ward_round.addEventListener("click",()=>{
    ward_round_container.classList.toggle("hidden")
});

//Patient Ward
const btn_ward = document.querySelector(".btn_ward");
const ward_container = document.querySelector(".ward_container");

btn_ward.addEventListener("click",()=>{
    ward_container.classList.toggle("hidden")
});

//Patient Bed
const btn_bed = document.querySelector(".btn_bed");
const bed_container = document.querySelector(".bed_container");

btn_bed.addEventListener("click",()=>{
    bed_container.classList.toggle("hidden")
});

//Patient Vital
const btn_impatient_vital = document.querySelector(".btn_vital");
const impatient_container = document.querySelector(".vitals_input");

btn_impatient_vital.addEventListener("click",()=>{
    impatient_container.classList.toggle("hidden")
});

    </script>
</body>
</html>

