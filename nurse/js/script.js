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
    document.querySelector(".patient_info").classList.add("hide");
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
   document.querySelector(".patient_info").classList.add("hide"); 
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


  ////////////////

  function accept(patient_Id) {
   // Fade in elements with class 'all_sections_input'
   $('.personal_profile_vital').fadeIn(500);

   // Construct data string to send in the AJAX request
   var dataString = 'patient_Id=' + patient_Id;

   // Perform AJAX request
   $.ajax({
       type: "POST", // HTTP method
       url: 'config/profile_input.php', // URL of the PHP script
       data: dataString, // Data to send with the request
       cache: false, // Disable caching
       success: function(html) {
           // On success, update content of elements with class 'all_sections_input' with the received HTML
           $('.personal_profile_vital').html(html);

     
           // Hide container with ID 'appointmentDetailsContainer'
           var container = document.querySelector('.appoitment_section');
           container.style.display = "none";

           // Remove 'hide' class from elements with class 'all_sections_input'
           var hidden = document.querySelector('.personal_profile_vital');
           hidden.classList.remove("hide");
       }
   });
                   document.addEventListener('click', function(event) {
       console.log('Event type:', event.type); // Output the type of event
       console.log('Event target:', event.target); // Output the target of the event
   });

}




function getWards() {
  
   $('#wards').html('<option>LOADING...</option>'); // Set loading message
   $('#wards').prop('disabled', true); // Disable the dropdown
 
   var action = 'getWards';
   var data = { action: action }; // Use an object to define data
 
   $.ajax({
     type: "POST",
     url: "config/code.php",
     data: data, // Pass the data object directly
     cache: false,
     dataType: 'json',
     success: function (data) {
       // Check for success and populate the dropdown
       if (data.success) {
         populateWardsDropdown(data.wards); // Assuming 'roles' is the key for roles in your response
       } else {
         console.error('Error:', data.message);
       }
     },
     error: function (xhr, status, error) {
       console.error('AJAX Error:', status, error);
     }
   });
 }
 
 function populateWardsDropdown(wards) {
   var wardsDropdown = document.getElementById("wards");
 
   // Clear existing options
   wardsDropdown.innerHTML = '';
 
   // Add options based on the fetched data
   for (var i = 0; i < wards.length; i++) {
     var option = document.createElement("option");
     option.value = wards[i].ward_id; 
     option.textContent = wards[i].ward_number; 
     wardsDropdown.appendChild(option);
   }
 
   // Enable the dropdown after populating options
   $('#wards').prop('disabled', false);
 }




 function getBeds() {
   $('#beds').html('<option>LOADING...</option>'); // Set loading message
   $('#beds').prop('disabled', true); // Disable the dropdown
 
   var action = 'getBeds';
   var wards = $('#wards').val();
   var dataString = 'action=' + action + '&wards=' + wards;
 
   $.ajax({
     type: 'POST',
     url: "config/code.php",
     data: dataString,
     cache: false,
     dataType: 'json',
     success: function (data) {
       // Check for success and populate the dropdown
       if (data.success) {
         populateBedsDropdown(data.beds); // Pass the entire array of beds
       } else {
         console.error('Error:', data.message);
       }
     },
     error: function (xhr, status, error) {
       console.error('AJAX Error:', status, error);
     },
   });
 }
 
 function populateBedsDropdown(beds) {
   var bedsDropdown = document.getElementById('beds');
 
   // Clear existing options
   bedsDropdown.innerHTML = '';
 
   // Add options based on the fetched data
   for (var i = 0; i < beds.length; i++) {
     var option = document.createElement('option');
     option.value = beds[i].bed_id; // Assuming the bed object has a 'bed_id' property
 
     // Concatenate bed_number and bed_status_description
     var optionText = beds[i].bed_number + " - " + beds[i].bed_description;
 
     option.textContent = optionText; 
     bedsDropdown.appendChild(option);
   }
 
   // Enable the dropdown after populating options
   $('#beds').prop('disabled', false);
 }



 /////////////////////////
 function vital_input(){
   var btn_text=$('#btn_submit').html();
   $('#btn_submit').html('Processing...');
   document.getElementById('btn_submit').disabled=true;
   
 }