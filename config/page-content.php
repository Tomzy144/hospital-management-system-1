
<?php if($page == 'logins') { ?>
    <select class="select_staffs" name="logins" id="logins">
        <option value="all">All Staff Login</option>
        <option value="doctor" onclick="_next_page('next_2');">Doctor Login</option>
        <option value="health_record" onclick="_next_page('next_3');">Health Record & Infomation Manager Login</option>
        <option value="nurse" onclick="_next_page('next_13');">Nurse Login</option>
        <option value="matanity" onclick="_next_page('next_6');">Matanity Manager Login</option>
        <option value="emergency" onclick="_next_page('next_9');">Emergency Manager Login</option>
        <option value="radiology" onclick="_next_page('next_12');">Radiologist Login</option>
        <option value="labouratory" onclick="_next_page('next_4');">labouratory Login</option>
        <option value="intensive_care" onclick="_next_page('next_15');">Intensive Care Manager Login</option>
        <option value="staff_manager" onclick="_next_page('next_5');">Staff Manager Login</option>
        <option value="surgical_suite" onclick="_next_page('next_8');">Surgical Suite Manager Login</option>
        <option value="account_manager" onclick="_next_page('next_7');">Account Manager Login</option>
        <option value="morgue_manager" onclick="_next_page('next_11');">Morgue Manager Login</option>
        <option value="phamacist" onclick="_next_page('next_10');">Pharmacist Manager Login</option>
        <option value="post_anesthesia_unit" onclick="_next_page('next_14');">Post Anesthesia Unit Manager Login</option>
    </select>
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
    <!--Animation-->

<?php 

// doctor starts here 
 
 ($page =='doctor_login');


if($s_staff_id != '') {
?>
    <script>
        window.location.href = "<?php echo $website_url?>/doctor";
    </script>
 <?php } ?>
    <div class="fill-form-div login-div" id="next_2">
        <div class="doctor-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-square" onclick="cancel();"></i>

            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Doctor)</h1>
            <!-- Doctor login form -->
            <form action="config/code.php" id="doctor_loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
               <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" id="doctor_login_btn" title="Login" onclick="_doctor_sign_in();">Login</button>
            </form>
        </div>

    </div>
    

    <!-- record -->
    <?php  ($page=='record_login')  ?>
    
    <div class="fill-form-div login-div" id="next_3">
            <div class="recep-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-recep' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Health Records and Information)</h1>
            <!-- Receptionist login form -->
            <form action="config/code.php" id="loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" id="login_btn" title="Login" onclick="_sign_in();">Login</button>  
            </form>
        </div>

    </div>


    <!-- lab - -->


            <?php if ($page=='lab_login') 
            
       ?>

    <div class="fill-form-div login-div" id="next_4">
        <div class="lab-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-lab' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Lab Scientist)</h1>
            <!-- Lab scientist login form -->
            <form action="config/code.php" id="lab_loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" id="lab_login_btn" title="Login" onclick="lab_sign_in()" class="btn">Login</button>
            </form>
        </div>

    </div>



 <!-- staff Manager - -->

        <?php if ($page=='staffM_login') ?>
        <div class="fill-form-div login-div" id="next_5">
            <div class="staff_manager-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-staff_manager' onclick="cancel();"></i>
            <i class="fa fa-times-circle"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Staff Manager)</h1>
            <!-- Staff manager login form -->
            <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" id="login_btn" title="Login" onclick="isStaff_manager_active()" class="btn">Login</button>
            </form>
        </div>

    </div>




 <!-- martanity - -->


    <?php if ($page=='martanity_login') ?>
    <div class="fill-form-div login-div" id="next_6">
        <div class="martanity-login hidden">
        <!-- Close icon for the login form -->
        <i class="bi bi-x-circle" id='close-icon-martanity' onclick="cancel();"></i>
        <!-- Title for the login form -->
        <h1 class="login-form-h1">Login (Martanity)</h1>
        <!-- Martanity login form -->
            <form action="../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" id="login_btn" title="Login" onclick="isMartinity_active()" class="btn">Login</button>
            </form>
        </div>

    </div>




 <!-- account_manager  - -->


    <?php if ($page=='account_manager_login') ?>
    <div class="fill-form-div login-div" id="next_7">
        <div class="account_manager-login hidden">
        <i class="bi bi-x-circle"  id='close-icon-account_manager' onclick="cancel();"></i>
        <h1 class="login-form-h1">Login (Account Manager)</h1>
            <form>
            <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <button type="button" class="btn" onClick="isAccount_manager_active()">Login</button>
            <form>
        </div>
    </div>



 <!-- surgical_suite_manager  - -->

    <?php if ($page=='surgical_suite_manager_login') ?>
    <div class="fill-form-div login-div" id="next_8">
            <div class="surgical_suite_manager-login hidden">
            <!-- Close icons for the login form -->
            <i class="bi bi-x-circle" id='close-icon-surgical_suite_manager' onclick="cancel();"></i>
            <i class="fa fa-times-circle" id='close-icon-surgical_suite_manager'></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Surgical Suite Manager)</h1>
            <!-- Surgical Suite Manager login form -->
            <form>
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" onClick="isSurgical_suite_active()">Login</button>
            </form>
        </div>

    </div>



 <!-- emergency_manager -- -->

    <?php if ($page=='emergency_manager_login') ?>
    <div class="fill-form-div login-div" id="next_9">
            <div class="emergency_manager-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-emergency_manager' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Emergency Manager)</h1>
            <!-- Emergency Manager login form -->
            <form>
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" onClick="isEmergency_manager_active()">Login</button>
            </form>
        </div>

    </div>


<!-- pharmacist -- -->

    <?php if ($page=='pharmacist_login') ?>
    <div class="fill-form-div login-div" id="next_10">
            <div class="pharmacist-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-pharmacist' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Pharmacist)</h1>
            <!-- Pharmacist login form -->
            <form>
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
        </div>
    </div>



<!--  morgue_manager -- -->

    <?php if ($page=='morgue_manager_login') ?>
    <div class="fill-form-div login-div" id="next_11">
            <div class="morgue_manager-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-morgue_manager' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Morgue Manager)</h1>
            <!-- Morgue Manager login form -->
            <form>
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
        </div>

    </div>



<!-- - radiologist -- -->

    <?php if ($page=='radiologist_login') ?>
    <div class="fill-form-div login-div" id="next_12">
            <div class="radiologist-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-radiologist' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Radiologist)</h1>
            <!-- Radiologist login form -->
            <form>
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" onClick="isRadiologist_active()">Login</button>
            </form>
        </div>

    </div>



 <!-- nurse -- -->

    <?php if ($page=='nurse_login') ?>
    <div class="fill-form-div login-div" id="next_13">
            <div class="nurse-login hidden">
            <!-- Close icon for the login form -->
            <i class="bi bi-x-circle" id='close-icon-nurse' onclick="cancel();"></i>
            <!-- Title for the login form -->
            <h1 class="login-form-h1">Login (Nurse)</h1>
            <!-- Nurse login form -->
            <form action="config/code.php" id="nurse_loginform" enctype="multipart/form-data" method="post">
                <!-- Email field -->
                <div class="_form_control">
                    <label for="email">Email</label>
                    <i class="bi bi-envelope-open"></i>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="_form_control">
                    <label for="staff">ID</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="id" name="id" id="id">
                  </div>
                  <div class="_form_control">
                    <label for="password">Password</label>
                    <i class="bi bi-key"></i>
                    <i class="bi bi-eye show_password hide" id="show_staff_password"></i>
                    <i class="bi bi-eye-slash lock_password" id="lock_staff_password"></i>
                    <input type="password" name="password" id="staff_password">
                  </div>
                  <div class="_fingerprint_authentication">
                    <i class="bi bi-fingerprint"></i>
                    <span>FingerPrint Authentication</span>
                  </div>
                <!-- Login button -->
                <button type="button" class="btn" id="nurse_login_btn" title="Login" onclick="_nurse_sign_in();">Login</button>
            </form>
        </div>
    </div>
<?php } ?>