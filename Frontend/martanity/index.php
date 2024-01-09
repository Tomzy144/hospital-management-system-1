<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity</title>
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="martanity.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="section1">
            <button id="btn_appoitment">Make an Appoitment</button>
        </div>
        <div class="section2">
            <div class="icons">
          <i class="fa fa-user" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="fa fa-bell" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="image">
            <img src="../Images/IMG_3745.JPG" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Kingsley Etete Effiong</span>
          </div>
        </div>
    </div>
    <div class="dashboard_contents">
        <div class="sidebar">
               <div class="sidebar_contents">
                <span>Hi Sir</span>
               </div>
        
        </div>
        <div class="contents">
    <div class="button_container">
    <button onClick="click_postnatal_button()">Postnatal Admission</button>
    <button onClick="click_antenal_button()">Antenatal Admission</button>
    <button>Vital</button>
    <button>Prescribtion</button>
    <button>Doctor Appoitment</button>
    </div>
    </div>

    <div class="form_container_for_antenatal hide">
    <form action="">
        <div class="form_section current_section" id="section1">
        <h1>Antenatal Registration Form</h1>
        <span>Patient Info</span>
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
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
 
        <span>Spouse/Partner Information</span>
   
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text">
       </div>

       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <button class="btn_next1" type="button" id="btn_next" onClick="nextForm1()">Next</button>
        </div>
    <div class="form_section current_section" id="section2">

        <span>Insurance Information</span>
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
   
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>

        <span>Medical History</span>
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
        <button class="btn_back2" type="button" id="btn_next" onClick="backFrom2()">Back</button>
        <button class="btn_next2" type="button" id="btn_next" onClick="nextForm2()">Next</button>
</div>
<div class="form_section current_section" id="section3">
        <span>Antenatal Care Information</span>
        <div class="form_control">
        <label for="">Date of first prenatal visit</label>
        <input type="date">
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
        <span>Health Status</span>
  <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text">
      </div>

      <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
      </div>

        <span>Informed Consent</span>
        <div class="form_control">
        <label for="">Consent for treatment</label>
        <input type="text">
   </div>
   <div class="form_control">
        <label for="">Consent for Procedures</label>
        <input type="text">
        </div>
        <button class="btn_back3" type="button" id="btn_next" onClick="backFrom3()">Back</button>
        <button class="btn_submit" type="button">Submit</button>
        </div>
    </form>
    </div>

<div class="form_container_for_postnatal hide">
<form action="">
        <div class="form_section current_section" id="section1_pos">
        <h1>Postnatal Registration Form</h1>
        <span>Patient Info</span>
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
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
 
        <span>Spouse/Partner Information</span>
   
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text">
       </div>

       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text">
        </div>
        <button class="btn_next1" type="button" id="btn_next_pos" onClick="nextForm1Pos()">Next</button>
        </div>
    <div class="form_section current_section" id="section2_pos">

        <span>Insurance Information</span>
        <div class="form_control">
        <label for="">Insurance Provider</label>
        <input type="text">
        </div>
   
        <div class="form_control">
        <label for="">Policy Number</label>
        <input type="text">
        </div>

        <span>Delivery Details</span>
    <div class="form_control">
        <label for="">Date and time of the Delievery</label>
        <input type="datetime-local">
       </div>
       <div class="form_control">
        <label for="">Mode of Delivery</label>
        <input type="text">
        </div>

        <div class="form_control">
        <label for="">Complications During Delivery</label>
        <input type="text">
        </div>
        <button class="btn_back2" type="button" id="btn_next_pos" onClick="backFrom2Pos()">Back</button>
        <button class="btn_next2" type="button" id="btn_next_pos" onClick="nextForm2Pos()">Next</button>
</div>
<div class="form_section current_section" id="section3_pos">
        <span>Postpartum Care Information</span>
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

        <span>Health Status</span>
  <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text">
      </div>

      <div class="form_control">
        <label for="">Pain Assessment</label>
        <input type="text">
      </div>
      <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text">
      </div>

        <span>Informed Consent</span>
        <div class="form_control">
        <label for="">Consent for treatment</label>
        <input type="text">
   </div>
   <div class="form_control">
        <label for="">Consent for Procedures</label>
        <input type="text">
        </div>
        <button class="btn_back3" type="button" id="btn_next_pos" onClick="backFrom3Pos()">Back</button>
        <button class="btn_submit" type="button">Submit</button>
        </div>
    </form>
    </div>
    </div>
<script src="martanity.js"></script>
</body>
</html>