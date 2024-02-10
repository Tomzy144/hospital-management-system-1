
<?php if($page== $logins){?>
    <div class="login-container ">
        <div class="flexs-container">
            <div class="sections-container">
                <h2>For Doctors</h2>
                <p>Doctors can login here</p>
                <button class="btn-doctor" onclick="_next_page('next_2');">Login as a Doctors</button>
            </div>
            <div class="sections-container">
                <h2>For Nurse</h2>
                <p>Nurse can login here</p>
                <button class="btn-nurse" onclick="open_nurse_login_form()">Login as a Nurse</button>
            </div>
            <div class="sections-container">
                <h2>For Radiography</h2>
                <p>Radiologist can login here</p>
                <button class="btn-radiography" onclick="open_radiologist_login_form()">Login as a Radiologist</button>
            </div>
            <div class="sections-container">
                <h2>For Emergency Manager</h2>
                <p>Emergency Manager can login here</p>
                <button class="btn-emergency_manager" onclick="open_emergency_manager_login_form()">Login as a Emergency Manager</button>
            </div>
            <div class="sections-container">
                <h2>For Intensive Care Unit </h2>
                <p> Intensive Care Unit Manager can login here</p>
                <button class="btn-nurse" onclick="open_emergency_manager_login_form()">Login as a  Intensive Care Unit Manager</button>
            </div>
        </div>
        <div class="flexs-container">
            <div class="sections-container">
                <h2>For Health Records and Information</h2>
                <p>Health Records and Information can login here</p>
                <button class="btn-receptionist" onclick="_next_page('next_3');">Login as a Health Records and Information</button>
            </div>
            <div class="sections-container">
                <h2>For Matarnity</h2>
                <p>Matarnity can login here</p>
                <button class="btn-martanity" onclick="open_martanity_login_form()">Login as a Martanity</button>
            </div>
            <div class="sections-container">
                <h2>For Accounting</h2>
                <p>Account Manager can login here</p>
                <button class="btn-account_manager" onclick="open_account_manager_login_form()">Login as a Account Manager</button>
            </div>
            <div class="sections-container">
                <h2>For Pharmacist</h2>
                <p>Pharmacist can login here</p>
                <button class="btn-pharmacist" onclick="open_pharmacist_login_form()">Login as a Pharmacist</button>
            </div>
            <div class="sections-container">
                <h2>For Post Anesthesia Unit</h2>
                <p>Post Anesthesia Unit Manager can login here</p>
                <button class="btn-pharmacist" onclick="open_pharmacist_login_form()">Login as a Post Anesthesia Unit Manager</button>
            </div>
        </div>
        <div class="flexs-container">
            <div class="sections-container">
                <h2>For Staff Manager</h2>
                <p>Staff Manager can login here</p>
                <button class="btn-staff_manager" onclick="open_staff_manager_login_form()">Login as a Staff Manager</button>
            </div>
            <div class="sections-container">
                <h2>For Surgical Suite Manager</h2>
                <p>Surgical Suite Manager can login here</p>
                <button class="btn-surgical_suite" onclick="open_surgical_suite_manager_login_form()">Login as a Surgical Suite Manager</button>
            </div>
            <div class="sections-container">
                <h2>For Lap Scientist</h2>
                <p>Lab Scientist can login here</p>
                <button class="btn-lab" onclick="open_lab_login_form()">Login as a Lab Scientist</button>
            </div>
            <div class="sections-container">
                <h2>For Morgue Manager</h2>
                <p>Morgue Manager can login here</p>
                <button class="btn-lab" onclick="open_morgue_manager_login_form()">Login as a Morgue Manager</button>
            </div>
        </div>
    </div>
    <div class="sections-container">
        <h2>For Super Admin</h2>
        <p>Super Admin can login here</p>
        <button class="btn-lab" onclick="log_in()">Super Admin</button>
    </div>

    <div id="doctor-container"></div>
    <div id="nurse-container"></div>
    <div id="recep-container"></div>
    <div id="lab-container"></div>
    <div id="staff_manager-container"></div>
    <div id="martanity-container"></div>
    <div id="radiologist-container"></div>
    <div id="account_manager-container"></div>
    <div id="surgical_suite_manager-container"></div>
    <div id="emergency_manager-container"></div>
    <div id="pharmacist-container"></div>
    <div id="morgue_manager-container"></div>
    <div class="overlay"></div>
    <!--Animation-->
<div class="loading-overlay"></div>


<?php 

// doctor starts here 
 
 if($page=='doctor_login');


if($s_staff_id != '') {
?>
    <script>
        window.location.href = "<?php echo $website_url?>/doctor";
    </script>
 <?php } ?>

    <div class="fill-form-div login-div" id="next_2">

        <div class="doctor-login ">
            <i class="bi bi-x-circle" id='close-icon-doctor' onclick="cancel();"></i>
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
    </div>
    
<?php }  if ($page=='record_login'){ ?>


    <!-- record -->

    
    <div class="fill-form-div login-div" id="next_2">
        <div class="recep-login ">
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
    </div>

    <?php }?>

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