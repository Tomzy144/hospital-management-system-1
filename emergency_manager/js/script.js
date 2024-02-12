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
    document.querySelector(".section_list").classList.toggle("hidden")

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