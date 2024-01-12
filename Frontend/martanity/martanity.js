const click_antenal_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.remove("hide")


    const show_postnatal_form = document.querySelector(".form_container_for_postnatal");
    show_postnatal_form.classList.add("hide")

//APPOITMENT
    const show_appoitment_form = document.querySelector(".appoitment_section");
    show_appoitment_form.classList.add("hide");

    //TREATMENT

    const treatment_prescribtion_form = document.querySelector(".treatment_prescribtion_container");
    treatment_prescribtion_form.classList.add("hidden");

    //VITAL
    const show_vital_form = document.querySelector(".new_vital");
    show_vital_form.classList.add("hidden");

}



const activeSection = document.querySelector(".current_section");
const inActiveSection = document.querySelector(".form_section");
const section1 = document.querySelector("#section1")
const section2 = document.querySelector("#section2");
const section3 = document.querySelector("#section3");
const next_btn1 = document.querySelector(".btn_next1");
const next_btn2 = document.querySelector(".btn_next2");
const back_btn2 = document.querySelector(".btn_back2");


section1.classList.add("current_section");
section2.classList.remove("current_section");
section3.classList.remove("current_section");


const nextForm1 = ()=>{
    section1.classList.remove("current_section");
    section2.classList.add("current_section");
    next_btn1.style.display = "none";
}   
const nextForm2 = ()=>{
    section1.classList.remove("current_section");
    section2.classList.remove("current_section");
    section3.classList.add("current_section");
}   

const backFrom2 = ()=>{
    section1.classList.add("current_section");
    section2.classList.remove("current_section");
    section3.classList.remove("current_section");
    next_btn1.style.display = "block";
}

const backFrom3 = ()=>{
    section1.classList.remove("current_section");
    section2.classList.add("current_section");
    section3.classList.remove("current_section");
    next_btn2.style.display = "block";
    back_btn2.style.display = "block";
    
}

//POSTNATAL FORM

const click_postnatal_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    const show_postnatal_form = document.querySelector(".form_container_for_postnatal");
    show_postnatal_form.classList.remove("hide")
    body_change_background.classList.add("hide");

//APPOITMENT
    const show_appoitment_form = document.querySelector(".appoitment_section");
    show_appoitment_form.classList.add("hide");

    //TREATMENT

    const treatment_prescribtion_form = document.querySelector(".treatment_prescribtion_container");
    treatment_prescribtion_form.classList.add("hidden");

    //VITAL
    const show_vital_form = document.querySelector(".new_vital");
    show_vital_form.classList.add("hidden");


    //ANTINATAL
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.add("hide")
}


const section1Pos = document.querySelector("#section1_pos")
const section2Pos = document.querySelector("#section2_pos");
const section3Pos = document.querySelector("#section3_pos");
const next_btn1Pos = document.querySelector(".btn_next1_pos");
const next_btn2Pos = document.querySelector(".btn_next2_pos");
const back_btn2Pos = document.querySelector(".btn_back2_pos");



section1Pos.classList.add("current_section");
section2Pos.classList.remove("current_section");
section3Pos.classList.remove("current_section");


const nextForm1Pos = ()=>{
    section1Pos.classList.remove("current_section");
    section2Pos.classList.add("current_section");
    next_btn1Pos.style.display = "none";
}   
const nextForm2Pos = ()=>{
    section1Pos.classList.remove("current_section");
    section2Pos.classList.remove("current_section");
    section3Pos.classList.add("current_section");
}   

const backFrom2Pos = ()=>{
    section1Pos.classList.add("current_section");
    section2Pos.classList.remove("current_section");
    section3Pos.classList.remove("current_section");
    next_btn1Pos.style.display = "block";
}

const backFrom3Pos = ()=>{
    section1Pos.classList.remove("current_section");
    section2Pos.classList.add("current_section");
    section3Pos.classList.remove("current_section");
    next_btn2Pos.style.display = "block";
    back_btn2Pos.style.display = "block";
    
}


//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};


const click_appoitment_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const show_appoitment_form = document.querySelector(".appoitment_section");
    show_appoitment_form.classList.remove("hide");
    document.querySelector("#btn_appoitment").style.display = "block";

    //TREATMENT

    const treatment_prescribtion_form = document.querySelector(".treatment_prescribtion_container");
    treatment_prescribtion_form.classList.add("hidden");

    //VITAL
    const show_vital_form = document.querySelector(".new_vital");
    show_vital_form.classList.add("hidden");


    
    //POSTNATAL

    const show_postnatal_form = document.querySelector(".form_container_for_postnatal");
    show_postnatal_form.classList.add("hide")

    //ANTINATAL
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.add("hide")
}



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
 renderCalendar()


//BOOK AN APPOINTMENT
const appoitment_booking = ()=>{
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.remove("hide");
}

//dont show appoitment booking button
document.querySelector("#btn_appoitment").style.display = "none";


const submitRoles = ()=>{
    const appoitment_form = document.querySelector(".appoitment_form");
    appoitment_form.classList.remove("hidden");
}

const close_appoitment_form = ()=>{
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.add("hide");
}


//VITALS
const click_vital_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const show_vital_form = document.querySelector(".new_vital");
    show_vital_form.classList.remove("hidden");



    //TREATMENT
    const treatment_prescribtion_form = document.querySelector(".treatment_prescribtion_container");
    treatment_prescribtion_form.classList.add("hidden");


    //APPOINTMENT
    const show_appoitment_form = document.querySelector(".appoitment_section");
    show_appoitment_form.classList.add("hide");
    
    //POSTNATAL

    const show_postnatal_form = document.querySelector(".form_container_for_postnatal");
    show_postnatal_form.classList.add("hide")

    //ANTINATAL
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.add("hide")
}

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


//show vitals
const showVitals = function(){
    const vital_container = document.querySelector(".vitals_input");
    vital_container.classList.toggle("hidden")
}


///TREATMENT AND PRESCRIBION

const click_prescribtion_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const treatment_prescribtion_form = document.querySelector(".treatment_prescribtion_container");
    treatment_prescribtion_form.classList.remove("hidden");

    //VITAL
    const show_vital_form = document.querySelector(".new_vital");
    show_vital_form.classList.add("hidden");

    //APPOINTMENT
    const show_appoitment_form = document.querySelector(".appoitment_section");
    show_appoitment_form.classList.add("hide");
    
    //POSTNATAL

    const show_postnatal_form = document.querySelector(".form_container_for_postnatal");
    show_postnatal_form.classList.add("hide")

    //ANTINATAL
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.add("hide")
}