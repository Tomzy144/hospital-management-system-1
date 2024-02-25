   //PROFILE IMAGE
   const click_icon_for_profile = ()=>{
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
   document.querySelector(".appoitment_section").style.display="flex";
   document.querySelector("#btn_appoitment").style.display = "none";
   document.querySelector(".new_vital").classList.add("hide");
   document.querySelector(".appoitment_container").classList.add("hide");
 }