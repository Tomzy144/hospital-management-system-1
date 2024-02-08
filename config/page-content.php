




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



    <!-- /////////////////////////////////////////////////// -->



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
