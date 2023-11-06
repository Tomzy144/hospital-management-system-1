
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


//patient page redirect

function openPatientsList(){
    let urlPatient = 'pages/patients.php';

    window.parent(location=(urlPatient));
};
function openDoctorPage(){
    let urlDoctor = '/';
    window.parent(location=(urlDoctor));
};
function openNursePage(){
    let urlNurse = '/';
    window.parent(location=(urlNurse));
};
function openPharmacyPage(){
    let urlPharmacy = '/';
    window.parent(location=(urlPharmacy));
};
function openLabPage(){
    let urlLab = '/';
    window.parent(location=(urlLab));
};
function openPrecedurePage(){
    let urlPrecedure = '/';
    window.parent(location=(urlPrecedure));
};
function openFinancePage(){
    let urlFinance = '/';
    window.parent(location=(urlFinance));
}
function openRecepPage(){
    let urlRecep = '/';
    window.parent(location=(urlRecep));
};
function openPhysiotherapyPage(){
    let urlPhysiotherapy = '/';
    window.parent(location=(urlPhysiotherapy));
};
function openStaffPage(){
    let urlStaff = '/';
    window.parent(location=(urlStaff));
};
function openWardBed(){
    let urlWardBed = '/';
    window.parent(location=(urlWardBed));
};







