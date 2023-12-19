const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");


//Manipulate sidebar 
toggleOpen.addEventListener("click", function() {
envelope.innerHTML = '  Chat';
user.innerHTML =   '  Account';
calender.innerHTML = '  Appoitment';
sidebar.classList.toggle("active")
toggleOpen.style.display = "none";
toggleClose.style.display = "block";
})

toggleClose.addEventListener("click", function() {
envelope.innerHTML = ' '
user.innerHTML =   '  ';
calender.innerHTML = '  ';
sidebar.classList.toggle("active_toggle")
toggleOpen.style.display = "block";
toggleClose.style.display = "none";

})

//form input
//For General Dropdown
const general_dropdown = document.querySelector(".drop-down1");
const showForm1 = document.querySelector(".form1");
const closeIcon1 = document.querySelector("#close_id_1");
const openIcon1 = document.querySelector("#open_id_1");

general_dropdown.addEventListener("click", function(){
    showForm1.classList.toggle("hidden");
    closeIcon1.style.display = "block";
    openIcon1.style.display = "none";
    if(showForm1.classList.contains("hidden")){
        closeIcon1.style.display = "none";
        openIcon1.style.display = "block";
    }
});

//For Neurological Dropdown
const neurological_dropdown = document.querySelector(".drop-down2");
const showForm2 = document.querySelector(".form2");
const closeIcon2 = document.querySelector("#close_id_2");
const openIcon2 = document.querySelector("#open_id_2");

neurological_dropdown.addEventListener("click", function(){
    showForm2.classList.toggle("hidden");
    closeIcon2.style.display = "block";
    openIcon2.style.display = "none";
    if(showForm2.classList.contains("hidden")){
        closeIcon2.style.display = "none";
        openIcon2.style.display = "block";
    }
});
