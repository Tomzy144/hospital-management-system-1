    //PROFILE IMAGE
    let profile_container  =  document.querySelector(".profile_account");
    function click_icon_for_profile (){
        profile_container.classList.toggle("hide");
    };

    function show_emergency_patient_list(){
        document.querySelector(".patient_list_section").classList.remove("hide");
        document.querySelector(".emergency_form_container").style.display="none"
    }

const click_on_nurse_button = ()=>{
    document.querySelector(".nurse_section").classList.toggle("hide")
}
const click_on_doctor_button = ()=>{
    document.querySelector(".doc_section").classList.toggle("hide")
}
const click_on_lab_button = ()=>{
    document.querySelector(".lab_setion").classList.toggle("hide")
}
const click_on_rad_button = ()=>{
    document.querySelector(".rad_setion").classList.toggle("hide")
}
const click_on_surgical_button = ()=>{
    document.querySelector(".surgical_suite_section").classList.toggle("hide")
}
const click_on_icu_button = ()=>{
    document.querySelector(".icu_section").classList.toggle("hide")
}
const click_on_morgue_button = ()=>{
    document.querySelector(".morgue_section").classList.toggle("hide")
}
const show_list = ()=>{
    document.querySelector(".section_list").classList.remove("hidden")
}
const close_list = ()=>{
    document.querySelector(".section_list").classList.add("hidden")
}

const show_wards = ()=>{
   const wards =  document.querySelector(".ward");
   wards.classList.remove("hidden")

}
const show_ward1_beds = ()=>{
    document.querySelector(".ward1_beds").classList.toggle("hide");
}
const show_ward2_beds = ()=>{
    document.querySelector(".ward2_beds").classList.toggle("hide");
}
const show_ward3_beds = ()=>{
    document.querySelector(".ward3_beds").classList.toggle("hide");
}