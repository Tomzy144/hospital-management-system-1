<?php include '../../backend/config/connection.php'?>



<?php
if ($s_staff_id != '') {
?>
    <script>
        window.location.href = "dashboard.php";
    </script>
<?php

}
?>



<!-- ?php 
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['staff_id'])) {
    // Redirect to the home page or another secure page
    header("Location:dashboard.php");
    exit();
}
?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="Frontend/superadmin/Images/1282798.jpg">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            <p class='text' onclick="homepage()">Log out</p>
        </form>
    </div>
  </div>

  
    <!-- <script src="signin-form-validation.js"></script> -->
    <script src="../../backend/js/scripts.js"></script>
    <script src="../../backend/js/jquery-v3.6.1.min.js"></script>
</body>
</html>