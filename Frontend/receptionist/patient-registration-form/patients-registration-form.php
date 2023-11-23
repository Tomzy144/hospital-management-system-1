
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
    <i class="fa fa-mail-reply (alias)" id='sign-out' onClick='dashboard()'></i>
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
        <input type="checkbox" id="gender" name="gender" value="Male" class='check1'>
        Male
      </label>
      <label for="radio">
        <input type="checkbox" id="gender" name="gender" value="Female" class='check2'>
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
    <input type="checkbox" id="kgender" name="gender" value="Female"  class='check4'>
    Female
  </label>
<label for="radio">
    <input type="checkbox"  id="kgender" name="gender" value="Male"  class='check3'>
    Male
  </label>

</div>
<label>What kind  of patient Category are you?</label>
<div class="form-display2">
<label for="radio">
    <input type="checkbox" name="gender" value="Inpatients"  class='check_category1'>
    Inpatients
  </label>
<label for="radio">
    <input type="checkbox" name="gender" value="Outpatients"  class='check_category2'>
    Outpatients
  </label>
<label for="radio">
    <input type="checkbox" name="gender" value="Waiting List"  class='check_category3'>
    Waiting List
  </label>
</div>

<div class="form-display2">
<label for="radio">
    <input type="checkbox" name="gender" value="Appointment"  class='check_category4'>
    Appointment
  </label>
<label for="radio">
    <input type="checkbox" name="gender" value="Test"  class='check_category5'>
    Test
  </label>
<label for="radio">
    <input type="checkbox" name="gender" value="ANC"  class='check_category6'>
    ANC
  </label>
<label for="radio">
    <input type="checkbox" name="gender" value="Today Input"  class='check_category7'>
    Today Input
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


    //dashboardPage link
    const dashboard = ()=>{
        let url = "../index.php";
        window.parent(location=(url))
    }
  
   
    const checked1 =  document.querySelector(".check1")
    const checked2 =  document.querySelector(".check2")
    const checked3 =  document.querySelector(".check3")
    const checked4 =  document.querySelector(".check4")

    function handleCheckboxChange() {
        //checked1
      if (checked1.checked) {
        checked2.disabled = true;
      } else {
        checked2.disabled = false;
      }
      
      if (checked2.checked) {
        checked1.disabled = true;
      } else {
        checked1.disabled = false;
      }
      //checked2
      if (checked3.checked) {
        checked4.disabled = true;
      } else {
        checked4.disabled = false;
      }
      
      if (checked4.checked) {
        checked3.disabled = true;
      } else {
        checked3.disabled = false;
      }
    }

    // Attach the event listener to both checkboxes
    checked1.addEventListener('change', handleCheckboxChange);
    checked2.addEventListener('change', handleCheckboxChange);
    checked3.addEventListener('change', handleCheckboxChange);
    checked4.addEventListener('change', handleCheckboxChange);


    //kind of category
    const check_category1 = document.querySelector(".check_category1")
    const check_category2= document.querySelector(".check_category2")
    const check_category3 = document.querySelector(".check_category3")
    const check_category4 = document.querySelector(".check_category4")
    const check_category5 = document.querySelector(".check_category5")
    const check_category6 = document.querySelector(".check_category6")
    const check_category7 = document.querySelector(".check_category7")


   const handleCheckboxCategoryChange1 = ()=>{
    //checked 1
        if(check_category1.checked){
            check_category2.disabled = true;
            check_category3.disabled = true;
            check_category4.disabled = true;
            check_category5.disabled = true;
            check_category6.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category2.disabled = false;
            check_category3.disabled = false;
            check_category4.disabled = false;
            check_category5.disabled = false;
            check_category6.disabled = false;
            check_category7.disabled = false;
        }
      
        }
  //for checked2
        const handleCheckboxCategoryChange2 = ()=>{

        if(check_category2.checked){
            check_category1.disabled = true;
            check_category3.disabled = true;
            check_category4.disabled = true;
            check_category5.disabled = true;
            check_category6.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category3.disabled = false;
            check_category4.disabled = false;
            check_category5.disabled = false;
            check_category6.disabled = false;
            check_category7.disabled = false;
        }
    }

        //for checked 3
        const handleCheckboxCategoryChange3 = ()=>{
        if(check_category3.checked){
            check_category1.disabled = true;
            check_category2.disabled = true;
            check_category4.disabled = true;
            check_category5.disabled = true;
            check_category6.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category2.disabled = false;
            check_category4.disabled = false;
            check_category5.disabled = false;
            check_category6.disabled = false;
            check_category7.disabled = false;
        }
    }
        //for checked 4
        const handleCheckboxCategoryChange4 = ()=>{
        if(check_category4.checked){
            check_category1.disabled = true;
            check_category2.disabled = true;
            check_category3.disabled = true;
            check_category5.disabled = true;
            check_category6.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category2.disabled = false;
            check_category3.disabled = false;
            check_category5.disabled = false;
            check_category6.disabled = false;
            check_category7.disabled = false;
        }
    }
        //for checked 5
        const handleCheckboxCategoryChange5 = ()=>{
        if(check_category5.checked){
            check_category1.disabled = true;
            check_category2.disabled = true;
            check_category3.disabled = true;
            check_category4.disabled = true;
            check_category6.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category2.disabled = false;
            check_category3.disabled = false;
            check_category4.disabled = false;
            check_category6.disabled = false;
            check_category7.disabled = false;
        }
    }
        //for checked 6
        const handleCheckboxCategoryChange6 = ()=>{
        if(check_category6.checked){
            check_category1.disabled = true;
            check_category2.disabled = true;
            check_category3.disabled = true;
            check_category4.disabled = true;
            check_category5.disabled = true;
            check_category7.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category2.disabled = false;
            check_category3.disabled = false;
            check_category4.disabled = false;
            check_category5.disabled = false;
            check_category7.disabled = false;
        }
    }
        //for checked 7
        const handleCheckboxCategoryChange7 = ()=>{
        if(check_category7.checked){
            check_category1.disabled = true;
            check_category2.disabled = true;
            check_category3.disabled = true;
            check_category4.disabled = true;
            check_category5.disabled = true;
            check_category6.disabled = true;
        }else{
            check_category1.disabled = false;
            check_category2.disabled = false;
            check_category3.disabled = false;
            check_category4.disabled = false;
            check_category5.disabled = false;
            check_category6.disabled = false;
        }
    }

   check_category1.addEventListener('change', handleCheckboxCategoryChange1);
   check_category2.addEventListener('change', handleCheckboxCategoryChange2);
   check_category3.addEventListener('change', handleCheckboxCategoryChange3);
   check_category4.addEventListener('change', handleCheckboxCategoryChange4);
   check_category5.addEventListener('change', handleCheckboxCategoryChange5);
   check_category6.addEventListener('change', handleCheckboxCategoryChange6);
   check_category7.addEventListener('change', handleCheckboxCategoryChange7);


</script>
</body>
</html>