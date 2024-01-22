//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

//BOOK SURGERY PAGE
const book_surgery = ()=>{
document.querySelector(".contents").style.display="none";
document.querySelector(".book_surgery").classList.remove("hide");
}