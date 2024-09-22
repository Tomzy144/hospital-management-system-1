<?php
// session variables//
    $s_staff_id=$_SESSION['staff_id']; 
?>




<?php
////////// login session
if ($_POST && !empty($_POST['email'])) {
$_SESSION['email'] = $_POST['email'];
}
$email=$_SESSION['email'];
if ($_POST && !empty($_POST['password'])) {
$_SESSION['password'] = $_POST['password'];

}
$spass=($_SESSION['password']);
?>

<?php 
//////for doctor

// session variables//
    $s_doctor_id=$_SESSION['doctor_id']; 



////////// login session
if ($_POST && !empty($_POST['doctor_email'])) {
    $_SESSION['doctor_email'] = $_POST['doctor_email'];
    }
    $doctor_email=$_SESSION['doctor_email'];
    if ($_POST && !empty($_POST['doctor_password'])) {
    $_SESSION['doctor_password'] = $_POST['doctor_password'];
    
    }
    $doctor_password=($_SESSION['doctor_password']);


?>



<?php 
//////for lab

// session variables//
    $s_lab_scientist_id=$_SESSION['lab_scientist_id']; 



////////// login session
if ($_POST && !empty($_POST['lab_scientist_email'])) {
    $_SESSION['lab_scientist_email'] = $_POST['lab_scientist_email'];
    }
    $lab_scientist_email=$_SESSION['lab_scientist_email'];
    if ($_POST && !empty($_POST['lab_scientist_password'])) {
    $_SESSION['lab_scientist_password'] = $_POST['lab_scientist_password'];
    
    }
    $lab_scientist_password=($_SESSION['lab_scientist_password']);


?>

<?php 
//////for nurse

// session variables//
    $s_nurse_id=$_SESSION['nurse_id']; 



////////// login session
if ($_POST && !empty($_POST['nurse_email'])) {
    $_SESSION['nurse_email'] = $_POST['nurse_email'];
    }
    $nurse_email=$_SESSION['nurse_email'];
    if ($_POST && !empty($_POST['nurse_password'])) {
    $_SESSION['nurse_password'] = $_POST['nurse_password'];
    
    }
    $nurse_password=($_SESSION['nurse_password']);

?>



<?php 

/////for emergency units
$s_emergency_unit_id=$_SESSION['emergency_unit_id']; 

if ($_POST && !empty($_POST['emergency_unit_email'])) {
    $_SESSION['emergency_unit_email'] = $_POST['emergency_unit_email'];
    }
    $emergency_unit_email=$_SESSION['emergency_unit_email'];
    if ($_POST && !empty($_POST['emergency_unit_password'])) {
    $_SESSION['emergency_unit_password'] = $_POST['emergency_unit_password'];
    
    }
    $emergency_unit_password=($_SESSION['emergency_unit_password']);


?>


<?php 

/////for account units
$s_account_unit_id=$_SESSION['account_unit_id']; 

if ($_POST && !empty($_POST['account_unit_email'])) {
    $_SESSION['account_unit_email'] = $_POST['account_unit_email'];
    }
    $account_unit_email=$_SESSION['account_unit_email'];
    if ($_POST && !empty($_POST['account_unit_password'])) {
    $_SESSION['account_unit_password'] = $_POST['account_unit_password'];
    
    }
    $account_unit_password=($_SESSION['account_unit_password']);


?>


<?php 

/////for surgical_suite
$s_surgical_unit_id=$_SESSION['surgical_unit_id']; 

if ($_POST && !empty($_POST['surgical_unit_email'])) {
    $_SESSION['surgical_unit_email'] = $_POST['surgical_unit_email'];
    }
    $surgical_unit_email=$_SESSION['surgical_unit_email'];
    if ($_POST && !empty($_POST['surgical_unit_password'])) {
    $_SESSION['surgical_unit_password'] = $_POST['surgical_unit_password'];
    
    }
    $surgical_unit_password=($_SESSION['surgical_unit_password']);


?>
