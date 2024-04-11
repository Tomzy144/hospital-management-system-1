   //PROFILE IMAGE
   function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
   };

   //PERONAL PROFILE SECTION
   function personal_profile_section(){
    document.querySelector(".appoitment_section").style.display="none";
    document.querySelector(".personal_profile_vital").classList.remove("hide");
   }


   //SHOW PROFILE LIST 
   function show_profile_list(){
    document.querySelector(".appoitment_section").style.display="none";
    document.querySelector(".personal_profile_vital").classList.add("hide");
    document.querySelector(".new_vital").classList.remove("hide");
    document.querySelector(".appoitment_container").classList.add("hide");
    document.querySelector("#btn_appoitment").style.display = "none";
   };

   //FOR PERSONAL PATIENT
//Patient Ward Round
function ward_round(){
   document.querySelector(".ward_round_container").classList.toggle("hidden")
   const overflowContainer = document.querySelector(".patient_info");
   if(!document.querySelector(".ward_round_container").classList.contains("hidden")){
      overflowContainer.style.height = "800px";
      overflowContainer.style.overflow = "auto";
   }else if(!document.querySelector(".vitals_input").classList.contains("hidden")){
      overflowContainer.style.height = "800px";
      overflowContainer.style.overflow = "auto";
   }
   else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }

};

//Patient Ward
function ward(){
   document.querySelector(".ward_container").classList.toggle("hidden");
   const overflowContainer = document.querySelector(".patient_info");
   if(!document.querySelector(".ward_container").classList.contains("hidden") && !document.querySelector(".vitals_input").classList.contains("hidden") ){
      overflowContainer.style.height = "800px";
      overflowContainer.style.overflow = "auto";
   }else if(!document.querySelector(".vitals_input").classList.contains("hidden")){
      overflowContainer.style.height = "800px";
      overflowContainer.style.overflow = "auto";
   }else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }
};

//Patient Vital
function patientVital(){
   document.querySelector(".vitals_input").classList.toggle("hidden")
   const overflowContainer = document.querySelector(".patient_info");
   if(!document.querySelector(".vitals_input").classList.contains("hidden")){
      overflowContainer.style.height = "800px";
      overflowContainer.style.overflow = "auto";
   }  else  if(!document.querySelector(".ward_round_container").classList.contains("hidden")){
      overflowContainer.style.height = "700px";
      overflowContainer.style.overflow = "auto";
   }
   else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }
 
};
   //FOR ALL SECTION PATIENT
//Patient Ward Round
function ward_round_all_section(){
   document.querySelector(".all_patient_ward_round_container").classList.toggle("hidden")
   const overflowContainer = document.querySelector(".all_patient_info");
   if(!document.querySelector(".all_patient_ward_round_container").classList.contains("hidden")){
      overflowContainer.style.height = "700px";
      overflowContainer.style.overflow = "auto";
   }
   else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }
};

//Patient Ward
function ward_all_section(){
   document.querySelector(".all_patient_ward_container").classList.toggle("hidden")
   const overflowContainer = document.querySelector(".all_patient_info");
   if(!document.querySelector(".all_patient_ward_container").classList.contains("hidden") && !document.querySelector(".vitals_input").classList.contains("hidden") ){
      overflowContainer.style.height = "700px";
      overflowContainer.style.overflow = "auto";
   }else if(!document.querySelector(".all_patient_vitals_input").classList.contains("hidden")){
      overflowContainer.style.height = "700px";
      overflowContainer.style.overflow = "auto";
   }else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }
};

//Patient Vital
function patientVital_all_section(){
   document.querySelector(".all_patient_vitals_input").classList.toggle("hidden")
   const overflowContainer = document.querySelector(".all_patient_info");
   if(!document.querySelector(".all_patient_vitals_input").classList.contains("hidden")){
      overflowContainer.style.height = "700px";
      overflowContainer.style.overflow = "auto";
   }else{
      overflowContainer.style.height = "auto";
      overflowContainer.style.overflow = "none";
   }
};



 //SHOW APPOITMENT SECTION FOR TRANSFERING PATIENTS TO DOCTOR
 function show_appoitment_section(){
   document.querySelector(".personal_profile_vital").classList.add("hide");
   document.querySelector(".appoitment_section").style.display="none";
   document.querySelector("#btn_appoitment").style.display = "block";
   document.querySelector(".new_vital").classList.add("hide");
   document.querySelector(".appoitment_container").classList.remove("hide");
 
  }
  function appoitment_booking(){
   const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
   form_doctor_roles_name.classList.remove("hide");
 }
 
 function submitRoles(){
   const appoitment_form = document.querySelector(".appoitment_form");
   appoitment_form.classList.remove("hidden");
 }
 
 function close_appoitment_form(){
   const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
   form_doctor_roles_name.classList.add("hide");
 }

 function back_to_appoitment_list(){
   document.querySelector(".personal_profile_vital").classList.add("hide");
   document.querySelector(".appoitment_section").style.display="block";
   document.querySelector("#btn_appoitment").style.display = "none";
   document.querySelector(".new_vital").classList.add("hide");
   document.querySelector(".appoitment_container").classList.add("hide");
 }



 
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
 
//  function getDoctors() {
//    const selectedRole = document.getElementById('roles').value;
//    const doctorsSelect = document.getElementById('doctors');
//    doctorsSelect.innerHTML = ''; // Clear previous options
 
//    // Populate the doctors select box based on the selected role
//    doctorsData[selectedRole].forEach(doctor => {
//        const option = document.createElement('option');
//        option.value = doctor;
//        option.text = doctor;
//        doctorsSelect.appendChild(option);
//    });
//  }
 
 // Initial population of doctors based on the default selected role
//  getDoctors();
 
 
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
 
 

  function show_sidebar(){
   document.querySelector(".responsive").classList.add("active_sidebar");
  }
  function close_sidebar(){
   document.querySelector(".responsive").classList.remove("active_sidebar");
  }