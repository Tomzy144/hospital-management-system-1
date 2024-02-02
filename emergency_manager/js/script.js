   //PROFILE IMAGE
   const profile_container  =  document.querySelector(".profile_account");
   const click_icon_for_profile = ()=>{
       profile_container.classList.toggle("hide");
   };
const show_emergency_patient_list = ()=>{
    document.querySelector(".patient_list_section").classList.remove("hide");
    document.querySelector(".emergency_form_container").style.display="none"
}