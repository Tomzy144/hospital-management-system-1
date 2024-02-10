<?php include 'backend/config/connection.php'?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include 'meta.php'?>
<title><?php echo $thename?>  | Administrative Login </title>   
<meta name="keywords" content="Admin - <?php echo $thename?>" />
<meta name="description" content="Administrative Login <?php echo $thename?>"/>
</head>


<body>



<?php $page == 'logins';?>



<!-- normal index starts here -->

  
    <div class="navbar">
            <div class="logo">
            <!-- <img width="200px" height="200px" src="Frontend/Images/Mount_Tech_Logo-removebg-preview.png" alt=""> -->
            </div>
        </div>
         
    <section class="login-section">
        <div class="fill-form-div" id="more-info">
            <?php include "config/page-content.php"?>
        </div>

        <!--Script-->
        <!-- <script src="js/index_landingpage.js"></script> -->
    </section>


    



   
</body>
</html>