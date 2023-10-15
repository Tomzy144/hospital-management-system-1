
//create a var for the open and the close toggle
const openToggleSidebar = document.getElementById("open-toggle");
const closeToggleSidebar = document.getElementById("close-toggle");



//making the sidebar to be invisible
sidebar.style.left = "-300px"


//this helps the toggle the sidebar open
openToggleSidebar.addEventListener("click", function(){
    const sidebar = document.getElementById("sidebar");
    if (sidebar.style.left === "-300px"){
        sidebar.style.left = "0px";
    }else{
        sidebar.style.left ="0px"
    }

})

//this helps the toggle the sidebar open
closeToggleSidebar.addEventListener("click", function(){
    const sidebar = document.getElementById("sidebar");
    if(sidebar.style.left === "-300px"){
        sidebar.style.left ="0px"
    }else{
        sidebar.style.left ="-300px"
    }

})



