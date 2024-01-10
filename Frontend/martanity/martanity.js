const click_antenal_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const show_antenatal_form = document.querySelector(".form_container_for_antenatal");
    show_antenatal_form.classList.remove("hide")
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
    const show_antenatal_form = document.querySelector(".form_container_for_postnatal");
    show_antenatal_form.classList.remove("hide")
    body_change_background.classList.add("hide");
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
    const show_antenatal_form = document.querySelector(".appoitment_section");
    show_antenatal_form.classList.remove("hide");
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
  doctorsData[selectedRole].forEach(doctor => {
      const option = document.createElement('option');
      option.value = doctor;
      option.text = doctor;
      doctorsSelect.appendChild(option);
  });
}

// Initial population of doctors based on the default selected role
getDoctors();


//VITALS
const click_vital_button = ()=>{
    const body_change_background = document.querySelector('.contents');
    body_change_background.classList.add("hide");
    const show_antenatal_form = document.querySelector(".vital_input");
    show_antenatal_form.classList.remove("hide");
}
