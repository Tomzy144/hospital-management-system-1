'use strict';

//using this function to pass into all the section login
const log_inAll = function(roles, formHtml){
    let container = document.getElementById(roles + '-container');
    container.innerHTML = formHtml;
}

//Doctor Login
const open_doctor_login_form = function(){
    const doctor_login = document.querySelector(".doctor-login");
    const dark_background = document.querySelector(".overlay")
    doctor_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};

const close_doctor_login_form = function(){
    const doctor_login = document.querySelector(".doctor-login");
    const dark_background = document.querySelector(".overlay")
    doctor_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

const doctor_login_form = `


<?php include '../backend/config/connection.php'?>



<?php
if ($s_staff_id != '') {
?>
    <script>
        window.location.href = "<?php echo $website_url?>/frontend/doctor";
    </script>
<?php

}
?>


    <div class="doctor-login hidden">
    <i class="fa fa-times-circle" id='close-icon-doctor'></i>
        <h1 class="login-form-h1">Login (Doctor)</h1>
        <form action="config/code.php" id="doctor_loginform" enctype="multipart/form-data" method="post">
            <div class="form-control">
            <label for='email'>Email</label>
            <i class="fa fa-address-book"></i>
            <input type="email" id="doctor_email" name="email" autoComplete='off'/> 
            </div>

            <div class="form-control">
            <label for='number'>Your ID</label>
            <i class="fa fa-key"></i>
            <input type="text" id="doctor_id"  name="number" autoComplete='off'/> 
            </div>

            <div class="form-control">
            <label for='password'>Password</label>
            <i class="fa fa-lock"></i>
            <input type="password" id="doctor_password" name="password" autoComplete='off'/> 
            </div>
            <input name="action" value="doctor_login" type="hidden" />
            <button type="button" class="btn" id="doctor_login_btn"title="Login" onclick="_doctor_sign_in();">Login</button>
        <form>
    </div>
`
log_inAll('doctor', doctor_login_form);

// const if_details_correct_login = function(){
//     let url = 'Frontend/doctor/index.php';
//     window.parent(location = (url));
// }


//Nurse Login
const open_nurse_login_form = function() {
    const nurse_login = document.querySelector(".nurse-login");
    const dark_background = document.querySelector(".overlay");
    nurse_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_nurse_login_form = function(){
    const nurse_login = document.querySelector(".nurse-login");
    const dark_background = document.querySelector(".overlay")
    nurse_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

const nurse_login_form = `
<script src="../../backend/js/scripts.js"></script>
<script src="../../backend/js/jquery-v3.6.1.min.js"></script>

<div class="nurse-login hidden">
<i class="fa fa-times-circle" id='close-icon-nurse'></i>
    <h1 class="login-form-h1">Login (Nurse)</h1>
    <form>
    <div class="form-control">
    <label for='email'>Email</label>
    <i class="fa fa-address-book"></i>
    <input type="email" name="email" autoComplete='off'/> 
    </div>

    <div class="form-control">
    <label for='number'>Your ID</label>
    <i class="fa fa-key"></i>
    <input type="number" name="number" autoComplete='off'/> 
    </div>

    <div class="form-control">
    <label for='password'>Password</label>
    <i class="fa fa-lock"></i>
    <input type="password" name="password" autoComplete='off'/> 
    </div>
    <button type="button" class="btn" onClick="isNurse_active()">Login</button>
    <form>
</div>
`
log_inAll('nurse', nurse_login_form);

const isNurse_active = ()=>{
    let url="Frontend/nurse/index.php"
    window.parent(location =(url))
}

//Receptionist Login;
const open_recep_login_form = function(){
    const recep_login = document.querySelector(".recep-login");
    const dark_background = document.querySelector(".overlay");
    recep_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};
const close_recep_login_form = function(){
    const recep_login = document.querySelector(".recep-login");
    const dark_background = document.querySelector(".overlay");
    recep_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

const recep_login_form = `


<?php include '../backend/config/connection.php'?>


<?php
if ($s_staff_id != '') {
?>
    <script>
        window.location.href = "<?php echo $website_url?>/frontend/receptionist";
    </script>
<?php

}
?>






<div class="recep-login hidden">
<i class="fa fa-times-circle" id='close-icon-recep'></i>
    <h1 class="login-form-h1">Login (Receptionist)</h1>
    <form action="config/code.php" id="loginform" enctype="multipart/form-data" method="post">
        <div class="form-control">
        <label for='email'>Email</label>
        <i class="fa fa-address-book"></i>
        <input type='email' id="email" name="email" autoComplete='off'/>
        </div>

        <div class="form-control">
        <label for='number'>Your ID</label>
        <i class="fa fa-key"></i>
        <input type="text" id= "user_id" name="user_id" autoComplete='off'/> 
        </div>

        <div class="form-control">
        <label for='password'>Password</label>
        <i class="fa fa-lock"></i>
        <input type="password" id="password" name="spass" autocomplete="off">
        </div>

        <input name="action" value="login" type="hidden" />
        <button type="button" class="btn" id="login_btn" title="Login" onclick="_sign_in();">Login</button>  
    <form>
</div>

    
`


log_inAll('recep', recep_login_form);

//Lab Login
const open_lab_login_form = function(){
    const lab_login = document.querySelector(".lab-login");
    const dark_background = document.querySelector(".overlay");
    lab_login.classList.remove("hidden");
    dark_background.classList.remove("hidden");
};

const close_lab_login_form = function() {
    const lab_login = document.querySelector(".lab-login");
    const dark_background = document.querySelector(".overlay");
    lab_login.classList.add("hidden");
    dark_background.classList.add("hidden");
}

const lab_login_form = `
<script src="../../backend/js/scripts.js"></script>
<script src="../../backend/js/jquery-v3.6.1.min.js"></script>

<div class="lab-login hidden">
<i class="fa fa-times-circle" id='close-icon-lab'></i>
    <h1 class="login-form-h1">Login (Lab Scientist)</h1>
    <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
        <div class="form-control">
        <label for='email'>Email</label>
        <i class="fa fa-address-book"></i>
        <input type='email' id="email" name="email" autoComplete='off'/>
        </div>

        <div class="form-control">
        <label for='number'>Your ID</label>
        <i class="fa fa-key"></i>
        <input type="text" name="number" autoComplete='off'/> 
        </div>

        <div class="form-control">
        <label for='password'>Password</label>
        <i class="fa fa-lock"></i>
        <input type="password" id="password" name="spass" autocomplete="off">
        </div>
        <button type="button" id="login_btn" title="Login" onclick="isLabDoc_active()"  class="btn">Login</button>
    <form>
</div>
`
log_inAll('lab', lab_login_form);

const isLabDoc_active = ()=>{
    let url="Frontend/labouratory/index.php"
    window.parent(location =(url))
}

//closeDarkBackground
const dark_background = document.querySelector(".overlay")
dark_background.addEventListener("click", function(){
    close_doctor_login_form();
    close_nurse_login_form();
    close_recep_login_form();
    close_lab_login_form();
    });

const closeIconDoc = document.querySelector("#close-icon-doctor");
const closeIconNurse = document.querySelector("#close-icon-nurse");
const closeIconRecep = document.querySelector("#close-icon-recep");
const closeIconLab = document.querySelector("#close-icon-lab");

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
    document.querySelector('content-container').style.display = 'block';
  }, preloaderDuration);
};

const submission_url = function(){
    let url = 'frontend/receptionist/index.php';
    window.parent(location =(url));
}

// const keyPress =   document.addEventListener("keypress")
// console.log(keyPress.key);

// document.windoow(addEventListener("DOMContentLoaded", function(){
//     if(windoow.keyPress === keyPress.key) {
// })
// // const escapeClose = function (){

// //     if(onclick("keypress") === "Escape"){
// //         close_doctor_login_form();
// //     }else{
// //         "Not woking and check on the code"
// //     }
// // }

// escapeClose();