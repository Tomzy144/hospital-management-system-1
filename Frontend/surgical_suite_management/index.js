//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

//BOOK SURGERY PAGE
const booking_section = ()=>{
document.querySelector(".contents").style.display="none";
document.querySelector(".booking_section").classList.remove("hide");
document.querySelector(".conscent_container").classList.add("hide")
}

//CONSENT FORM PAGE
const consent_container = ()=>{
    document.querySelector(".contents").style.display="none";
    document.querySelector(".conscent_container").classList.remove("hide");
    document.querySelector(".booking_section").classList.add("hide");
}

//UPLOAD CONSENT FORM 
const upload_document = ()=>{
    document.querySelector(".search-container").style.display="none";
    document.querySelector(".patient_container").style.display="none";
    document.querySelector(".upload_document_page").classList.remove("hide");
}
//VITAL CONTAINER
const vital_section = ()=>{
    
}

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

