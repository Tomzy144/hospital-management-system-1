
<?php include '../../../backend/config/connection.php';?>
<?php include '../../../backend/dashboardconfig/session-validation.php';?>




<?php
 $staff_id= $_POST['staff_id'];
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist</title>
    <link rel="stylesheet" href="css/patients-registration-form.css">
    <link rel="stylesheet" href="../../../Frontend/awesome-font/css/font-awesome.min.css">
    <script src="../../../js/scripts.js"></script>
    <script src="../../../js/jquery-v3.6.1.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Patient Admission Form</h1>
        </div>
             </nav>
<div class="container">
    <div class="form-container">
        <h2>Fill in the neccesary information</h2>
        <form action="">
            <div class="form-section current-section" id="section1">
            <h3 style="text-align: left; margin-top: 1rem;">Personal Details</h3>
            <div class="form-display">
            <div class="form-control">
            <label for="full_name">Full Name</label>
            <i class="fa fa-user-plus"></i>
            <input type="text" placeholder="full_name" id="fullname" autocapitalize="off" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="date_of_birth">Date of Birth</label>
            <i class="fa fa-calendar"></i>
            <input type="date" id="dob" placeholder="date_of_birth">
        </div>

    </div>
            <div class="form-display">
            <div class="form-control">
                <i class="fa fa-home"></i>
            <label for="home_address">Home Address</label>
            <input type="text" id="address" placeholder="home_address" autocomplete="off">
        </div>

            <div class="form-control">
            <label for="phone_number">Phone Number</label>
            <i class="fa fa-phone"></i>
            <input type="number" id="phonenumber" placeholder="Phone_ number">
        </div>

    </div>
    <label>Gender</label>
    <div class="form-display2">
       
    <label for="radio">
        <input type="radio" id="gender" name="gender" value="male">
        Male
      </label>
      <label for="radio">
        <input type="radio" id="gender" name="gender" value="female">
        Female
      </label>
    </div>
    <hr style="margin: 1rem; color: #fff;"/>
    <h3 style="text-align: left; margin-top: 1rem;">Next of Kins</h3>
    <div class="form-display">
        <div class="form-control">
        <label for="full_name">Full Name</label>
        <i class="fa fa-user-plus"></i>
        <input type="text" placeholder="full_name" id="kname" autocapitalize="off" autocomplete="off">
    </div>

        <div class="form-control">
        <label for="relationship">RelationShip</label>
        <i class="fa fa-users"></i>
        <input type="text"  id="krelationship" placeholder="relationship">
    </div>

</div>
        <div class="form-display">
        <div class="form-control">
            <i class="fa fa-home"></i>
        <label for="home_address">Home Address</label>
        <input type="text"  id="kaddress" placeholder="home_address" autocomplete="off">
    </div>

        <div class="form-control">
        <label for="phone_number">Phone Number</label>
        <i class="fa fa-phone"></i>
        <input type="number"  id="kphonenumber" placeholder="Phone_ number">
    </div>

</div>
<label>Gender</label>
<div class="form-display2">
   
<label for="radio">
    <input type="radio"  id="kgender" name="gender" value="male">
    Male
  </label>
  <label for="radio">
    <input type="radio" id="kgender" name="gender" value="female">
    Female
  </label>
</div>
<button type="button" class="btn-next">Next</button>
</div>
 <!--Section 2-->
 <div class="form-section current-section" id="section2">
<h3 style="text-align: left; margin-top: 1rem;">Social History</h3>
<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Occupation</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="occupation"  placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Obsterics</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="past_obsterics" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Medical History</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="medical_history" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Sexual History</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="sexual_history" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Disease</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="past_disease" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>

<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Family Disease</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="family_disease" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>
<div class="form-display">
    <div class="form-control">
    <label for="Occupation">Past Surgery</label>
    <i class="fa fa-twitch"></i>
    <input type="text" id="past_surgery" placeholder="Specify" autocapitalize="off" autofocus autocomplete="off">
</div>
</div>
<button type="button" class="btn-back">Back</button>

<button type="button" id ="proceed-btn" onclick="_add_patient();" class="btn-submit">Submit</button>
 </div>
        </form> 
       
    </div>
</div>
<script>

   const activeSection = document.querySelector(".current-section");
   const inactiveSection = document.querySelector(".form-section");
   const section1 = document.querySelector("#section1");
   const section2 = document.querySelector("#section2");
   const btnNext = document.querySelector(".btn-next");
   const btnBack = document.querySelector(".btn-back");

   //Current section
    section1.classList.add("current-section");
    section2.classList.remove("current-section");

    btnNext.style.display = "block";
    btnBack.style.display = "block";

   const nextForm =  btnNext.addEventListener("click", function(){
        section1.classList.remove("current-section");
        section2.classList.add("current-section");
        btnNext.style.display = "block";
    });
    const backForm = btnBack.addEventListener("click", function(){
        section1.classList.add("current-section");
        section2.classList.remove("current-section");
        btnNext.style.display = "block";
    })

    //reload page

    const reloadPage  = document.querySelector("#proceed-btn");

    reloadPage.addEventListener("click", function(){
        location.reload(true);
    })

   

</script>


</body>
</html>