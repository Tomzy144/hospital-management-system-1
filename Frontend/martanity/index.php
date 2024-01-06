<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity</title>
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="martanity.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <span style="font-size:2rem; color:#fff;">Matarnity Dashboard</span>
        </div>
    <form method="post" action="./../../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>    
              <i class="fa fa-sign-out" id="sign-out"onclick="document.getElementById('logoutform').submit();"></i>
        </form>
             </nav>
             <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
   </div>
   <div class="first_dashboard_content">
    <div class="container-dashboard">
    <button onClick="click_antenal_button()">Postnatal Admission</button>
    <button onClick="click_postnatal_button()">Antenatal Admission</button>
    <button>Vital</button>
    <button>Prescribtion</button>
    <button>Doctor Appoitment</button>
    </div>
<div class="antenal_form hidden">
    <form action="">
        <span>Patient Info</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Emergency Contact</label>
        <input type="text">
        </div>
        </div>
        <span>Spouse/Partner Information</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
</div>
        <span>Insurance Information</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>
</div>
        <span>Medical History</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Previous Pregnacies</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Chronic Condition</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Alergies</label>
        <input type="text">
        </div>
</div>
        <span>Antenatal Care Information</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Date of first prenatal visit</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Curent Gestational Age</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Prenatal visit</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Recent Ultrasound details</label>
        <input type="text">
        </div>
</div>
        <span>Health Status</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
        </div>
</div>
        <span>Informed Consent</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Consent for treatment</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Consent for Procedures</label>
        <input type="text">
        </div>
</div>
    </form>
</div>

<div class="postnatal_form hidden">
    <form action="">
        <span>Patient Info</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Emergency Contact</label>
        <input type="text">
        </div>
        </div>
        <span>Spouse/Partner Information</span>
        <div class="form_control_flexs">
        <div  class="form_control">
        <label for="">Full Name</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
</div>
        <span>Insurance Information</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>
</div>
        <span>Delievery Details</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Mode of Delievery</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Complications During Delievery</label>
        <input type="text">
        </div>
</div>
        <span>Postpartum Care Information</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Recovery Progress</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Breastfeeding Support</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Postpartum Checkup Schedule</label>
        <input type="text">
        </div>
</div>
        <span>Health Status</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Pain Assessment</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
        </div>
</div>
        <span>Informed Consent</span>
        <div class="form_control_flexs">
        <div class="form_control">
        <label for="">Consent for treatment</label>
        <input type="text">
        </div>
        <div class="form_control">
        <label for="">Consent for Procedures</label>
        <input type="text">
        </div>
</div>
    </form>
</div>
    </div>
    <script>
   
        const patient_list = ()=>{
            let url = "patients_list.php";
            window.parent(location = (url));
        }
        const click_antenal_button = ()=>{
            const containerDashboard = document.querySelector(".container-dashboard");
            const postnatal_form_container = document.querySelector(".postnatal_form");

            containerDashboard.classList.add("hidden");
            postnatal_form_container.classList.remove("hidden");
        }
        const click_postnatal_button = ()=>{
            const containerDashboard = document.querySelector(".container-dashboard");
            const postnatal_form_container = document.querySelector(".antenal_form");

            containerDashboard.classList.add("hidden");
            postnatal_form_container.classList.remove("hidden");
        }

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

    </script>

</body>
</html>