// 'use strict';

//using this function to pass into all the section login
const log_inAll = function(roles, formHtml){
    let container = document.getElementById(roles + '-container');
    container.innerHTML = formHtml;
}

//Doctor Login
function open_doctor_login_form(){
    var doctor_login = document.querySelector(".doctor-login");
    var dark_background = document.querySelector(".overlay")
    doctor_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
}

function close_doctor_login_form (){
    const doctor_login = document.querySelector(".doctor-login");
    const dark_background = document.querySelector(".overlay")
    doctor_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const doctor_login_form = `


// <?php include '../backend/config/connection.php'?>



// <?php
// if ($s_staff_id != '') {
// ?>
//     <script>
//         window.location.href = "<?php echo $website_url?>/frontend/doctor";
//     </script>
// <?php

// }
// ?>


//     <div class="doctor-login hidden">
//     <i class="fa fa-times-circle" id='close-icon-doctor'></i>
//         <h1 class="login-form-h1">Login (Doctor)</h1>
//         <form action="config/code.php" id="doctor_loginform" enctype="multipart/form-data" method="post">
//             <div class="form-control">
//             <label for='email'>Email</label>
//             <i class="fa fa-address-book"></i>
//             <input type="email" id="doctor_email" name="email" autoComplete='off'/> 
//             </div>

//             <div class="form-control">
//             <label for='number'>Your ID</label>
//             <i class="fa fa-key"></i>
//             <input type="text" id="doctor_id"  name="number" autoComplete='off'/> 
//             </div>

//             <div class="form-control">
//             <label for='password'>Password</label>
//             <i class="fa fa-lock"></i>
//             <input type="password" id="doctor_password" name="password" autoComplete='off'/> 
//             </div>
//             <input name="action" value="doctor_login" type="hidden" />
//             <button type="button" class="btn" id="doctor_login_btn"title="Login" onclick="_doctor_sign_in();">Login</button>
//         <form>
//     </div>
// `
// log_inAll('doctor', doctor_login_form);

// const if_details_correct_login = function(){
//     let url = 'Frontend/doctor/index.php';
//     window.parent(location = (url));
// }


//Nurse Login
function open_nurse_login_form() {
    const nurse_login = document.querySelector(".nurse-login");
    const dark_background = document.querySelector(".overlay");
    nurse_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
function close_nurse_login_form (){
    const nurse_login = document.querySelector(".nurse-login");
    const dark_background = document.querySelector(".overlay")
    nurse_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const nurse_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="nurse-login hidden">
// <i class="fa fa-times-circle" id='close-icon-nurse'></i>
//     <h1 class="login-form-h1">Login (Nurse)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isNurse_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('nurse', nurse_login_form);

const isNurse_active = ()=>{
    let url="nurse/index.php"
    window.parent(location =(url))
}
//Radiologist Login
function open_radiologist_login_form() {
    const radiologist_login = document.querySelector(".radiologist-login");
    const dark_background = document.querySelector(".overlay");
    radiologist_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
function close_radiologist_login_form (){
    const radiologist_login = document.querySelector(".radiologist-login");
    const dark_background = document.querySelector(".overlay")
    radiologist_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const radiologist_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="radiologist-login hidden">
// <i class="fa fa-times-circle" id='close-icon-radiologist'></i>
//     <h1 class="login-form-h1">Login (Radiologist)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isRadiologist_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('radiologist', radiologist_login_form);

const isRadiologist_active = ()=>{
    let url="radiology/index.php"
    window.parent(location =(url))
}

//Receptionist Login;
function open_recep_login_form (){
    const recep_login = document.querySelector(".recep-login");
    const dark_background = document.querySelector(".overlay");
    recep_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
 function close_recep_login_form (){
    const recep_login = document.querySelector(".recep-login");
    const dark_background = document.querySelector(".overlay");
    recep_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const recep_login_form = `


// <?php include '../backend/config/connection.php'?>


// <?php
// if ($s_staff_id != '') {
// ?>
//     <script>
//         window.location.href = "<?php echo $website_url?>/frontend/receptionist";
//     </script>
// <?php

// }
// ?>






// <div class="recep-login hidden">
// <i class="fa fa-times-circle" id='close-icon-recep'></i>
//     <h1 class="login-form-h1">Login (Health Records and Information)</h1>
//     <form action="config/code.php" id="loginform" enctype="multipart/form-data" method="post">
//         <div class="form-control">
//         <label for='email'>Email</label>
//         <i class="fa fa-address-book"></i>
//         <input type='email' id="email" name="email" autoComplete='off'/>
//         </div>

//         <div class="form-control">
//         <label for='number'>Your ID</label>
//         <i class="fa fa-key"></i>
//         <input type="text" id= "user_id" name="user_id" autoComplete='off'/> 
//         </div>

//         <div class="form-control">
//         <label for='password'>Password</label>
//         <i class="fa fa-lock"></i>
//         <input type="password" id="password" name="spass" autocomplete="off">
//         </div>

//         <input name="action" value="login" type="hidden" />
//         <button type="button" class="btn" id="login_btn" title="Login" onclick="_sign_in();">Login</button>  
//     <form>
// </div>

    
// `


// log_inAll('recep', recep_login_form);

//Lab Login
function open_lab_login_form(){
    const lab_login = document.querySelector(".lab-login");
    const dark_background = document.querySelector(".overlay");
    lab_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};

function close_lab_login_form() {
    const lab_login = document.querySelector(".lab-login");
    const dark_background = document.querySelector(".overlay");
    lab_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const lab_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="lab-login hidden">
// <i class="fa fa-times-circle" id='close-icon-lab'></i>
//     <h1 class="login-form-h1">Login (Lab Scientist)</h1>
//     <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
//         <div class="form-control">
//         <label for='email'>Email</label>
//         <i class="fa fa-address-book"></i>
//         <input type='email' id="email" name="email" autoComplete='off'/>
//         </div>

//         <div class="form-control">
//         <label for='number'>Your ID</label>
//         <i class="fa fa-key"></i>
//         <input type="text" name="number" autoComplete='off'/> 
//         </div>

//         <div class="form-control">
//         <label for='password'>Password</label>
//         <i class="fa fa-lock"></i>
//         <input type="password" id="password" name="spass" autocomplete="off">
//         </div>
//         <button type="button" id="login_btn" title="Login" onclick="isLabDoc_active()"  class="btn">Login</button>
//     <form>
// </div>
// `
// log_inAll('lab', lab_login_form);

const isLabDoc_active = ()=>{
    let url="labouratory/index.php"
    window.parent(location =(url))
}

//Staff Manager Login
function open_staff_manager_login_form (){
    const staff_manager_login = document.querySelector(".staff_manager-login");
    const dark_background = document.querySelector(".overlay");
    staff_manager_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};

function close_staff_manager_login_form() {
    const staff_manager_login = document.querySelector(".staff_manager-login");
    const dark_background = document.querySelector(".overlay");
    staff_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const staff_manager_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="staff_manager-login hidden">
// <i class="fa fa-times-circle" id='close-icon-staff_manager'></i>
//     <h1 class="login-form-h1">Login (Staff Manager)</h1>
//     <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
//         <div class="form-control">
//         <label for='email'>Email</label>
//         <i class="fa fa-address-book"></i>
//         <input type='email' id="email" name="email" autoComplete='off'/>
//         </div>

//         <div class="form-control">
//         <label for='number'>Your ID</label>
//         <i class="fa fa-key"></i>
//         <input type="text" name="number" autoComplete='off'/> 
//         </div>

//         <div class="form-control">
//         <label for='password'>Password</label>
//         <i class="fa fa-lock"></i>
//         <input type="password" id="password" name="spass" autocomplete="off">
//         </div>
//         <button type="button" id="login_btn" title="Login" onclick="isStaff_manager_active()"  class="btn">Login</button>
//     <form>
// </div>
// `
// log_inAll('staff_manager', staff_manager_login_form);

const isStaff_manager_active = ()=>{
    let url="staff_management/index.php"
    window.parent(location =(url))
}

//Martanity Login
function open_martanity_login_form (){
    const martanity_login = document.querySelector(".martanity-login");
    const dark_background = document.querySelector(".overlay");
    martanity_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};

function close_martanity_login_form() {
    const staff_manager_login = document.querySelector(".martanity-login");
    const dark_background = document.querySelector(".overlay");
    staff_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const martanity_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="martanity-login hidden">
// <i class="fa fa-times-circle" id='close-icon-martanity'></i>
//     <h1 class="login-form-h1">Login (Martanity)</h1>
//     <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
//         <div class="form-control">
//         <label for='email'>Email</label>
//         <i class="fa fa-address-book"></i>
//         <input type='email' id="email" name="email" autoComplete='off'/>
//         </div>

//         <div class="form-control">
//         <label for='number'>Your ID</label>
//         <i class="fa fa-key"></i>
//         <input type="text" name="number" autoComplete='off'/> 
//         </div>

//         <div class="form-control">
//         <label for='password'>Password</label>
//         <i class="fa fa-lock"></i>
//         <input type="password" id="password" name="spass" autocomplete="off">
//         </div>
//         <button type="button" id="login_btn" title="Login" onclick="isMartinity_active()"  class="btn">Login</button>
//     <form>
// </div>
// `
// log_inAll('martanity', martanity_login_form);

const isMartinity_active = ()=>{
    let url="martanity/index.php";
    window.parent(location =(url))
}

//Account Manager Login
const open_account_manager_login_form = function() {
    const account_manager_login = document.querySelector(".account_manager-login");
    const dark_background = document.querySelector(".overlay");
    account_manager_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_account_manager_login_form = function(){
    const account_manager_login = document.querySelector(".account_manager-login");
    const dark_background = document.querySelector(".overlay")
    account_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const account_manager_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="account_manager-login hidden">
// <i class="fa fa-times-circle" id='close-icon-account_manager'></i>
//     <h1 class="login-form-h1">Login (Account Manager)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isAccount_manager_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('account_manager', account_manager_login_form);

const isAccount_manager_active = ()=>{
    let url="account_management/index.php"
    window.parent(location =(url))
}

//Surgical Suite Manager Login
const open_surgical_suite_manager_login_form = function() {
    const surgical_suite_manager_login = document.querySelector(".surgical_suite_manager-login");
    const dark_background = document.querySelector(".overlay");
    surgical_suite_manager_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_surgical_suite_manager_login_form = function(){
    const surgical_suite_manager_login = document.querySelector(".surgical_suite_manager-login");
    const dark_background = document.querySelector(".overlay")
    surgical_suite_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const surgical_suite_manager_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="surgical_suite_manager-login hidden">
// <i class="fa fa-times-circle" id='close-icon-surgical_suite_manager'></i>
//     <h1 class="login-form-h1">Login (Surgical Suite Manager)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('surgical_suite_manager', surgical_suite_manager_login_form);

const isSurgical_suite_active = ()=>{
    let url="surgical_suite_management/index.php"
    window.parent(location =(url))
}
//Emergency Manager Login
const open_emergency_manager_login_form = function() {
    const emergency_manager_login = document.querySelector(".emergency_manager-login");
    const dark_background = document.querySelector(".overlay");
    emergency_manager_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_emergency_manager_login_form = function(){
    const emergency_manager_login = document.querySelector(".emergency_manager-login");
    const dark_background = document.querySelector(".overlay")
    emergency_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const emergency_manager_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="emergency_manager-login hidden">
// <i class="fa fa-times-circle" id='close-icon-emergency_manager'></i>
//     <h1 class="login-form-h1">Login (Emergency Manager)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isEmergency_manager_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('emergency_manager', emergency_manager_login_form);

const isEmergency_manager_active = ()=>{
    let url="emergency_manager/index.php";
    window.parent(location =(url))
}

//Pharmacist Login
const open_pharmacist_login_form = function() {
    const pharmacist_login = document.querySelector(".pharmacist-login");
    const dark_background = document.querySelector(".overlay");
    pharmacist_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_pharmacist_login_form = function(){
    const pharmacist_login = document.querySelector(".pharmacist-login");
    const dark_background = document.querySelector(".overlay")
    pharmacist_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const pharmacist_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="pharmacist-login hidden">
// <i class="fa fa-times-circle" id='close-icon-pharmacist'></i>
//     <h1 class="login-form-h1">Login (Pharmacist)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('pharmacist', pharmacist_login_form);

// const isSurgical_suite_active = ()=>{
//     let url="Frontend/surgical_suite_management/index.php"
//     window.parent(location =(url))
// }

//Morgue Manager Login
const open_morgue_manager_login_form = function() {
    const morgue_manager_login = document.querySelector(".morgue_manager-login");
    const dark_background = document.querySelector(".overlay");
    morgue_manager_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_morgue_manager_login_form = function(){
    const morgue_manager_login = document.querySelector(".morgue_manager-login");
    const dark_background = document.querySelector(".overlay")
    morgue_manager_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

// const morgue_manager_login_form = `
// <script src="../../backend/js/scripts.js"></script>
// <script src="../../backend/js/jquery-v3.6.1.min.js"></script>

// <div class="morgue_manager-login hidden">
// <i class="fa fa-times-circle" id='close-icon-morgue_manager'></i>
//     <h1 class="login-form-h1">Login (Morgue Manager)</h1>
//     <form>
//     <div class="form-control">
//     <label for='email'>Email</label>
//     <i class="fa fa-address-book"></i>
//     <input type="email" name="email" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='number'>Your ID</label>
//     <i class="fa fa-key"></i>
//     <input type="number" name="number" autoComplete='off'/> 
//     </div>

//     <div class="form-control">
//     <label for='password'>Password</label>
//     <i class="fa fa-lock"></i>
//     <input type="password" name="password" autoComplete='off'/> 
//     </div>
//     <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
//     <form>
// </div>
// `
// log_inAll('morgue_manager', morgue_manager_login_form);

// const isSurgical_suite_active = ()=>{
//     let url="Frontend/surgical_suite_management/index.php"
//     window.parent(location =(url))
// }

//closeDarkBackground
const dark_background = document.querySelector(".overlay")
dark_background.addEventListener("click", function(){
    close_doctor_login_form();
    close_nurse_login_form();
    close_radiologist_login_form();
    close_recep_login_form();
    close_lab_login_form();
    close_staff_manager_login_form();
    close_martanity_login_form()
    close_account_manager_login_form()
    close_surgical_suite_manager_login_form()
    close_emergency_manager_login_form()
    close_pharmacist_login_form()
    close_morgue_manager_login_form()
    });

const closeIconDoc = document.querySelector("#close-icon-doctor");
const closeIconNurse = document.querySelector("#close-icon-nurse");
const closeIconRadiologist = document.querySelector("#close-icon-radiologist");
const closeIconRecep = document.querySelector("#close-icon-recep");
const closeIconLab = document.querySelector("#close-icon-lab");
const closeIconStaff_manager = document.querySelector("#close-icon-staff_manager");
const closeIconMartanity = document.querySelector("#close-icon-martanity");
const closeIconAccount_manager = document.querySelector("#close-icon-account_manager");
const closeIconSurgical_suite_manager = document.querySelector("#close-icon-surgical_suite_manager");
const closeIconEmergency_manager = document.querySelector("#close-icon-emergency_manager");
const closeIconPharmacist = document.querySelector("#close-icon-pharmacist");
const closeIconMorgue_manager = document.querySelector("#close-icon-morgue_manager");

closeIconDoc.addEventListener("click", function(){
        close_doctor_login_form();
})
closeIconNurse.addEventListener("click", function(){
    close_nurse_login_form();
})
closeIconRecep.addEventListener("click", function(){
    close_recep_login_form();;
})
closeIconLab.addEventListener("click", function(){
    close_lab_login_form();
})
closeIconRadiologist.addEventListener("click", function(){
    close_radiologist_login_form();
})

closeIconStaff_manager.addEventListener("click", function(){
    close_staff_manager_login_form()
})
closeIconMartanity.addEventListener("click", function(){
    close_martanity_login_form()
})
closeIconAccount_manager.addEventListener("click", function(){
    close_account_manager_login_form()
})
closeIconSurgical_suite_manager.addEventListener("click", function(){
    close_surgical_suite_manager_login_form()
})
closeIconEmergency_manager.addEventListener("click", function(){
    close_emergency_manager_login_form()
})
closeIconPharmacist.addEventListener("click", function(){
    close_pharmacist_login_form()
})
closeIconMorgue_manager.addEventListener("click", function(){
    close_morgue_manager_login_form()
})

//superAdmin linking
function log_in(){
    let urlLogin = './frontend/superadmin/index.php';
    window.parent(location=(urlLogin));
};
document.addEventListener('DOMContentLoaded', function() {
    // Add 'fade-in' class to the body after the DOM content is loaded
    document.body.classList.add('loaded');
})

//preloader
const preloaderDuration = 2000; // 2 seconds

// Wait for the window to load
window.onload = function() {
  // Hide the preloader after the specified duration
  setTimeout(function() {
    document.getElementById('preloader').style.display = 'none';
    document.querySelector('.preloader_background').style.display = 'none';
    document.querySelector('content-container').style.display = 'block';
  }, preloaderDuration);
};

const submission_url = function(){
    let url = 'frontend/receptionist/index.php';
    window.parent(location =(url));
}
