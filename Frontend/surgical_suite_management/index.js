//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

//BOOK SURGERY PAGE
const booking_section = ()=>{
document.querySelector(".contents").style.display="none";
document.querySelector(".booking_section").classList.remove("hide");
}