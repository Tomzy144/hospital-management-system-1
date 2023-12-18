<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Complaints</title>
    <link rel="stylesheet" href="complaint.css">
    <link rel="stylesheet" href="../../../awesome-font/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
    <nav class="navbar">
    <i class="fa fa-long-arrow-left " id="back_arrow" onClick="back_arrow()"></i>
    <div class="logo">
        <!---Please you would manipulate this span base on the patient clicked-->
        <span style="font-size:2rem; color:#fff;">Patient name complaint</span>
    </div>
    </form>
         </nav>
    <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-calendar-check-o active'></i>
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
   </div>
   <div class="complaint-section">
        <form action="">
            <div class="form-control">
            <label for="major_complaints">Major Complaints & Duration</label>
            <input type="text" placeholder = "edit text">
            </div>
            <div class="form-control">
            <label for="major_complaints">History of Presenting Complaints</label>
            <input type="text" placeholder = "edit text">
            </div>
            <div class="form-control">
            <label for="major_complaints">Family & Social History</label>
            <input type="text" placeholder = "edit text">
            </div>
            <div class="form-control">
            <label for="major_complaints">Past Surgical/Medical History</label>
            <input type="text" placeholder = "edit text">
            </div>
            <div class="form-control">
            <label for="major_complaints">Surgical Procedure</label>
            <div class="checkbox">
            <input type="checkbox" name="surgery" id="check1">
            <label for="surgery">Yes</label>
            <input type="checkbox" name="surgery" id="check2">
            <label for="surgery">No</label>
            </div>
            </div>
            <button id="btn">Enter Complaints</button>
        </form>
        
   </div>
   <div class="surgical_booking hidden">
    <i class="fa fa-times-circle" id='close-icon' onClick="close_procedure_form()"></i>
        <h1 class="login-form-h1">Surgical Procedure</h1>
        <form>
        <div class="form-control-precedure">
        <label for='full_name'>Full  name</label>
        <!-- <i class="fa fa-address-book" id="icons"></i> -->
        <input type="text" name="full_name" autoComplete='off'/> 
        </div>

        <div class="form-control-precedure">
        <label for='date'>Date</label>
        <!-- <i class="fa fa-key" id="icons"></i> -->
        <input type="date"  name="date" autoComplete='off'/> 
        </div>

        <div class="form-control-precedure">
        <label for='operation'>Type of Procedures</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="text" name="procedures" autoComplete='off'/> 
        </div>
        <div class="form-control-precedure">
        <label for='phone'>Phone Number</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="number" name="phone" autoComplete='off'/> 
        </div>
        <div class="form-control-precedure">
        <label for='email'>Email Address</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="email" name="email" autoComplete='off'/> 
        </div>
        <button type="button" class="btn" onClick="if_details_correct_login()">Submit</button>
        <form>
    </div>
    </div>
           <div class="overlay hidden" onClick="close_procedure_form()"></div>
           
    <script>
        const addEvent  = document.getElementById("btn");
        const show = document.querySelector(".drop-down")
        const calender = document.querySelector(".fa-calendar-check-o");
        const envelope = document.querySelector(".fa-envelope");
        const user = document.querySelector(".fa-user-circle-o");
        const toggleOpen = document.querySelector(".fa-bars");
        const toggleClose = document.querySelector(".fa-times");
        const sidebar = document.querySelector(".sidebar");


//Manipulate sidebar 
toggleOpen.addEventListener("click", function() {
    envelope.innerHTML = '  Chat';
    user.innerHTML =   '  Account';
    calender.innerHTML = '  Appoitment';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "none";
    toggleClose.style.display = "block";
})

toggleClose.addEventListener("click", function() {
    envelope.innerHTML = ' '
    user.innerHTML =   '  ';
    calender.innerHTML = '  ';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "block";
    toggleClose.style.display = "none";
    
})

addEvent.addEventListener("click", function(){
    show.classList.remove("hidden")

})
function back_arrow(){
    let url = "../../patients_list.php";
    window.parent(location = (url));
}

const check_1 = document.querySelector("#check1")
const check_2 = document.querySelector("#check2")


const handle_change = function(){
    if(check_1.checked){
    check_2.disabled = true;
    open_procedure_form();
}else{
    check_2.disabled = false;
}
if(check_2.checked){
    check_1.disabled = true;
}else{
    check_1.disabled = false;
}
}

check_1.addEventListener("change", handle_change);
check_2.addEventListener("change", handle_change);

const open_procedure_form = function(){
    document.querySelector(".surgical_booking").classList.remove("hidden");
    document.querySelector(".overlay").classList.remove("hidden");
}
const close_procedure_form = function(){
    document.querySelector(".surgical_booking").classList.add("hidden");
    document.querySelector(".overlay").classList.add("hidden");
}
    </script>
</body>
</html>