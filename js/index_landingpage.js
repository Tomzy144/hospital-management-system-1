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
    <div class="doctor-login hidden">
        <h1 class="login-form-h1">Login (Doctor)</h1>
        <form>
        <div class="form-control">
        <label for='email'>Email</label>
        <i class="fa fa-user-plus"></i>
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
        <button type="button" class="btn">Login</button>
        <form>
    </div>
`
log_inAll('doctor', doctor_login_form);



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
<div class="nurse-login hidden">
    <h1 class="login-form-h1">Login (Nurse)</h1>
    <form>
    <div class="form-control">
    <label for='email'>Email</label>
    <i class="fa fa-user-plus"></i>
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
    <button type="button" class="btn">Login</button>
    <form>
</div>
`
log_inAll('nurse', nurse_login_form);



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
<div class="recep-login hidden">
    <h1 class="login-form-h1">Login (Receptionist)</h1>
    <form>
    <div class="form-control">
    <label for='email'>Email</label>
    <i class="fa fa-user-plus"></i>
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
    <button type="button" class="btn">Login</button>
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
<div class="lab-login hidden">
    <h1 class="login-form-h1">Login (Lab Scientist)</h1>
    <form>
    <div class="form-control">
    <label for='email'>Email</label>
    <i class="fa fa-user-plus"></i>
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
    <button type="button" class="btn">Login</button>
    <form>
</div>
`
log_inAll('lab', lab_login_form);

//closeDarkBackground
const dark_background = document.querySelector(".overlay")
dark_background.addEventListener("click", function(){
    close_doctor_login_form();
    close_nurse_login_form();
    close_recep_login_form();
    close_lab_login_form();
    });


//superAdmin linking
function log_in(){
    let urlLogin = './frontend/superadmin/index.php';
    window.parent(location=(urlLogin));
};
document.addEventListener('DOMContentLoaded', function() {
    // Add 'fade-in' class to the body after the DOM content is loaded
    document.body.classList.add('loaded');
})

