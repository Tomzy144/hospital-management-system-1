


<?php
if ($s_staff_id != '') {
?>
    <script>
        window.location.href = "<?php echo $website_url?>/doctor";
    </script>
<?php

}
 ?>

<div class="doctor-login hidden">
    <i class="bi bi-x-circle" id='close-icon-doctor' onclick="close_doctor_login_form()"></i>
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



    <!-- /////////////////////////////////////////////////// -->

<!-- 

    <div class="recep-login hidden">
<i class="fa fa-times-circle" id='close-icon-recep'></i>
    <h1 class="login-form-h1">Login (Health Records and Information)</h1>
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



<!-- lab -

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


<!-- staff Manager -


<div class="staff_manager-login hidden">
<i class="fa fa-times-circle" id='close-icon-staff_manager'></i>
    <h1 class="login-form-h1">Login (Staff Manager)</h1>
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
        <button type="button" id="login_btn" title="Login" onclick="isStaff_manager_active()"  class="btn">Login</button>
    <form>
</div>




<!-- martanity -


<div class="martanity-login hidden">
<i class="fa fa-times-circle" id='close-icon-martanity'></i>
    <h1 class="login-form-h1">Login (Martanity)</h1>
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
        <button type="button" id="login_btn" title="Login" onclick="isMartinity_active()"  class="btn">Login</button>
    <form>
</div>


<!-- account_manager  -



<div class="account_manager-login hidden">
<i class="fa fa-times-circle" id='close-icon-account_manager'></i>
    <h1 class="login-form-h1">Login (Account Manager)</h1>
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
        <button type="button" class="btn" onClick="isAccount_manager_active()">Login</button>
    <form>
</div>


<!-- surgical_suite_manager  -


<div class="surgical_suite_manager-login hidden">
<i class="fa fa-times-circle" id='close-icon-surgical_suite_manager'></i>
    <h1 class="login-form-h1">Login (Surgical Suite Manager)</h1>
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
    <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
    <form>
</div>


<!-- emergency_manager --


<div class="emergency_manager-login hidden">
<i class="fa fa-times-circle" id='close-icon-emergency_manager'></i>
    <h1 class="login-form-h1">Login (Emergency Manager)</h1>
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
    <button type="button" class="btn" onClick="isEmergency_manager_active()">Login</button>
    <form>
</div>


<!-- pharmacist --


<div class="pharmacist-login hidden">
<i class="fa fa-times-circle" id='close-icon-pharmacist'></i>
    <h1 class="login-form-h1">Login (Pharmacist)</h1>
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
    <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
    <form>
</div>

<!-- morgue_manager --

<div class="morgue_manager-login hidden">
<i class="fa fa-times-circle" id='close-icon-morgue_manager'></i>
    <h1 class="login-form-h1">Login (Morgue Manager)</h1>
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
    <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
    <form>
</div>


<!-- radiologist --


<div class="radiologist-login hidden">
<i class="fa fa-times-circle" id='close-icon-radiologist'></i>
    <h1 class="login-form-h1">Login (Radiologist)</h1>
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
    <button type="button" class="btn" onClick="isRadiologist_active()">Login</button>
    <form>
</div>


<!-- nurse --


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
</div> -->