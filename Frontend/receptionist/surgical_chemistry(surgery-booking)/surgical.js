//Manipulate sidebar 
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");

toggleOpen.addEventListener("click", function() {
envelope.innerHTML = '  Chat';
user.innerHTML =   '  Account';
calender.innerHTML = '  Appoitment';
sidebar.classList.toggle("active_toggle")
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
//back arrow to the Dashboard;
function back_arrow(){
    let url = "../index.php";
    window.parent(location = (url));
    }