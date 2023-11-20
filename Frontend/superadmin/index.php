<?php include '../../backend/config/connection.php'?>



<?php
if($s_staff_id!=''){
?>
    <script>
	window.parent(location="dashboard.php/");
	</script>
<?php }?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="Frontend/superadmin/Images/1282798.jpg">
    <title>SignIn</title>

</head>
<body>
<?php $page = 'login';?>

  <div class="container">
    <div class="form-container">
        <h2>Please SignIn</h2>
        <form action="../../backend/config/code.php" id="loginform" enctype="multipart/form-data" method="post">
            <div class='form-control'>
            <label for='email'>Email</label>
                <input type='email' id="email" name="email" autoComplete='off'/>
            </div>
         
            <div class='form-control'>
            <label for="password">Password</label>
                <input type="password" id="password" name="spass" autocomplete="off">
            </div>
            <input name="action" value="login" type="hidden" />
            <button type="button"  class='btn' id="login_btn" title="Login" onclick="_sign_in()" >Submit</button>
           
            <p class='text'>
             <a href='forgotten-password.php' class="password-link">Forgotten Password</a>
            </p>
        </form>
    </div>
  </div>

    <!-- <script src="signin-form-validation.js"></script> -->
    <script src="../../backend/js/scripts.js"></script>
    <script src="../../backend/js/jquery-v3.6.1.min.js"></script>
</body>
</html>