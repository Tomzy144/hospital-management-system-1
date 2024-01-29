
        
   //PROFILE IMAGE
   const profile_container  =  document.querySelector(".profile_account");
   const click_icon_for_profile = ()=>{
       profile_container.classList.toggle("hide");
   };
   //hello
   
   
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
   
   
   //Patient Vital
   const btn_impatient_vital = document.querySelector(".btn_vital");
   const impatient_container = document.querySelector(".vitals_input");
   
   btn_impatient_vital.addEventListener("click",()=>{
       impatient_container.classList.toggle("hidden")
   });
   


   //PERONAL PROFILE SECTION
   const personal_profile_section = ()=>{
    document.querySelector(".appoitment_section").style.display="none";
    document.querySelector(".personal_profile_vital").classList.remove("hide");
   }


   //SHOW PROFILE LIST 

   const show_profile_list =()=>{
    document.querySelector(".appoitment_section").style.display="none";
    document.querySelector(".personal_profile_vital").classList.add("hide");
    document.querySelector(".new_vital").classList.remove("hide");
    document.querySelector(".appoitment_container").classList.add("hide");
    document.querySelector("#btn_appoitment").style.display = "none";
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


   //SHOW APPOITMENT SECTION FOR TRANSFERING PATIENTS TO DOCTOR
   const show_appoitment_section =()=>{
    document.querySelector(".personal_profile_vital").classList.add("hide");
    document.querySelector(".appoitment_section").style.display="none";
    document.querySelector("#btn_appoitment").style.display = "block";
    document.querySelector(".new_vital").classList.add("hide");
    document.querySelector(".appoitment_container").classList.remove("hide");

   }
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
