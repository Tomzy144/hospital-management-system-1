
//PROFILE IMAGE
   //PROFILE IMAGE

   function click_icon_for_profile(){
    document.querySelector(".profile_account").classList.toggle("hide");
   };


function appointmentCountin() {
    // Counting the number of appointments based on the number of rows in the table
    const count = $('#appointment_table tbody tr').length;
    $('#appointment_count').html(count); // Setting the count as the HTML content of the element with id 'appointment_count'
}

// Assuming appointments are already listed in the table, so no need for additional numbering function

$(document).ready(function() {
    // Call the appointment counting function when the document is ready
    appointmentCountin();
});


//BACK ARROW
function backWardArrow(){
document.querySelector(".head-sec").style.display="flex";
document.querySelector(".body_sec").style.display="block";
document.querySelector(".all_sections_input").classList.toggle("hide");
document.querySelector("#back-arrow").style.display="none";
}

//hide backarrow
document.querySelector("#back-arrow").style.display="none";


//PERSONAL INFORMATION SECTION AS READ ONLY
function personal_info_section(){
    document.querySelector(".info_section").classList.toggle("hide");
    document.querySelector("#info_icon_plus").style.display="none";

    document.querySelector("#info_icon_minus").style.display="block";
    if(document.querySelector(".info_section").classList.contains("hide")){
        document.querySelector("#info_icon_plus").style.display="block";
        document.querySelector("#info_icon_minus").style.display="none";
    }
}



//LAB SECTION AS READ ONLY
function lab_section(){
    document.querySelector(".lab_section").classList.toggle("hide");
    document.querySelector("#lab_icon_plus").style.display="none";
    document.querySelector("#lab_icon_minus").style.display="block";
    if(document.querySelector(".lab_section").classList.contains("hide")){
        document.querySelector("#lab_icon_plus").style.display="block";
        document.querySelector("#lab_icon_minus").style.display="none";
    }
}
//RADIOLOOGY SECTION AS READ ONLY
function radiology_section(){
    document.querySelector(".radiology_section").classList.toggle("hide");
    document.querySelector("#radiology_icon_plus").style.display="none";
    document.querySelector("#radiology_icon_minus").style.display="block";
    if(document.querySelector(".radiology_section").classList.contains("hide")){
        document.querySelector("#radiology_icon_plus").style.display="block";
        document.querySelector("#radiology_icon_minus").style.display="none";
    }
}
//RADIOLOOGY SECTION AS READ ONLY
function vitals_section(){
    document.querySelector(".vitals_section").classList.toggle("hide");
    document.querySelector("#vitals_icon_plus").style.display="none";
    document.querySelector("#vitals_icon_minus").style.display="block";
    if(document.querySelector(".vitals_section").classList.contains("hide")){
        document.querySelector("#vitals_icon_plus").style.display="block";
        document.querySelector("#vitals_icon_minus").style.display="none";
    }
}



    //Doctor Inputs
    




function complain_section(){
    document.querySelector(".complaint-section").classList.toggle("hidden");
    document.querySelector("#complaint_icon_plus").style.display = "none";
    document.querySelector("#complaint_icon_minus").style.display = "block";
    if(document.querySelector(".complaint-section").classList.contains("hidden")){
        document.querySelector("#complaint_icon_plus").style.display = "block";
        document.querySelector("#complaint_icon_minus").style.display = "none";
    }
}



//CHECK IF THE SURGERY IS DONE OR CANCELLED
function click_when_surgery_is_done_or_canceled(){
    document.querySelector(".complaint_button_for_surgery_done").classList.remove("hide");
    document.querySelector(".complaint_button_for_surgery_cancelled").classList.remove("hide");
    document.querySelector("#button_to_check_surgery").style.display="none";
}

// form input
//System Review dropdown

function  system_review_section(){
    document.querySelector(".system_review-section").classList.toggle("hidden");
    document.querySelector("#system_icon_plus").style.display = "none";
    document.querySelector("#system_icon_minus").style.display = "block";
    if( document.querySelector(".system_review-section").classList.contains("hidden")){
        document.querySelector("#system_icon_plus").style.display = "block";
        document.querySelector("#system_icon_minus").style.display = "none";
    }
}


// For General Dropdown

function showForm1(){
    document.querySelector(".form1").classList.toggle("hidden");
    document.querySelector("#close_id_1").style.display = "block";
   document.querySelector("#open_id_1").style.display = "none";
    if(document.querySelector(".form1").classList.contains("hidden")){
        document.querySelector("#close_id_1").style.display = "none";
       document.querySelector("#open_id_1").style.display = "block";
    }
}


//For Skin Dropdown
function showForm2(){
    document.querySelector(".form2").classList.toggle("hidden");
    document.querySelector("#close_id_2").style.display = "block";
    document.querySelector("#open_id_2").style.display = "none";
    if(document.querySelector(".form2").classList.contains("hidden")){
        document.querySelector("#close_id_2").style.display = "none";
        document.querySelector("#open_id_2").style.display = "block";
    }
}

//For EndoCrine Dropdown
function showForm3(){
    document.querySelector(".form3").classList.toggle("hidden");
    document.querySelector("#close_id_3").style.display = "block";
    document.querySelector("#open_id_3").style.display = "none";
    if(document.querySelector(".form3").classList.contains("hidden")){
        document.querySelector("#close_id_3").style.display = "none";
        document.querySelector("#open_id_3").style.display = "block";
    }
}

//For Hematopioetic Dropdown
function showForm4(){
     document.querySelector(".form4").classList.toggle("hidden");
    document.querySelector("#close_id_4").style.display = "block";
    document.querySelector("#open_id_4").style.display = "none";
    if( document.querySelector(".form4").classList.contains("hidden")){
        document.querySelector("#close_id_4").style.display = "none";
        document.querySelector("#open_id_4").style.display = "block";
    }
}

//For Muscoskeletal Dropdown
function showForm5(){
     document.querySelector(".form5").classList.toggle("hidden");
    document.querySelector("#close_id_5").style.display = "block";
    document.querySelector("#open_id_5").style.display = "none";
    if( document.querySelector(".form5").classList.contains("hidden")){
        document.querySelector("#close_id_5").style.display = "none";
        document.querySelector("#open_id_5").style.display = "block";
    }
}


//For head & neck Dropdown
function showForm6(){
    document.querySelector(".form6").classList.toggle("hidden");
    document.querySelector("#close_id_6").style.display = "block";
    document.querySelector("#open_id_6").style.display = "none";
    if(document.querySelector(".form6").classList.contains("hidden")){
        document.querySelector("#close_id_6").style.display = "none";
        document.querySelector("#open_id_6").style.display = "block";
    }
}

//For Ears, Nose, Sinuses, Mouth & Throat Dropdown
function showForm7(){
    document.querySelector(".form7").classList.toggle("hidden");
    document.querySelector("#close_id_7").style.display = "block";
    document.querySelector("#open_id_7").style.display = "none";
    if(document.querySelector(".form7").classList.contains("hidden")){
        document.querySelector("#close_id_7").style.display = "none";
        document.querySelector("#open_id_7").style.display = "block";
    }
}

//For Breast Dropdown
function showForm8(){
     document.querySelector(".form8").classList.toggle("hidden");
    document.querySelector("#close_id_8").style.display = "block";
    document.querySelector("#open_id_8").style.display = "none";
    if( document.querySelector(".form8").classList.contains("hidden")){
        document.querySelector("#close_id_8").style.display = "none";
        document.querySelector("#open_id_8").style.display = "block";
    }
}

//For Respiratory Dropdown
function showForm9(){
    document.querySelector(".form9").classList.toggle("hidden");
    document.querySelector("#close_id_9").style.display = "block";
    document.querySelector("#open_id_9").style.display = "none";
    if(document.querySelector(".form9").classList.contains("hidden")){
        document.querySelector("#close_id_9").style.display = "none";
        document.querySelector("#open_id_9").style.display = "block";
    }
}

//For Cardiovascular Dropdown
function showForm10(){
    document.querySelector(".form10").classList.toggle("hidden");
     document.querySelector("#close_id_10").style.display = "block";
    document.querySelector("#open_id_10").style.display = "none";
    if(document.querySelector(".form10").classList.contains("hidden")){
         document.querySelector("#close_id_10").style.display = "none";
        document.querySelector("#open_id_10").style.display = "block";
    }
}
   
//For Gastrointestinal Dropdown
function showForm11(){
    document.querySelector(".form11").classList.toggle("hidden");
    document.querySelector("#close_id_11").style.display = "block";
    document.querySelector("#open_id_11").style.display = "none";
    if(document.querySelector(".form11").classList.contains("hidden")){
        document.querySelector("#close_id_11").style.display = "none";
        document.querySelector("#open_id_11").style.display = "block";
    }
}


//form input
//Physical dropdown
function physical_section(){
    document.querySelector(".physical_examination-section").classList.toggle("hidden");
    document.querySelector("#physical_icon_plus").style.display = "none";
    document.querySelector("#physical_icon_minus").style.display = "block";
   if(document.querySelector(".physical_examination-section").classList.contains("hidden")){
    document.querySelector("#physical_icon_plus").style.display = "block";
       document.querySelector("#physical_icon_minus").style.display = "none";
   }
}

//For General Dropdown
function physical_showForm1(){
    document.querySelector(".physical_examination_form1").classList.toggle("hidden");
     document.querySelector("#physical_examination_icon_minus1").style.display = "block";
    document.querySelector("#physical_examination_icon_plus1").style.display = "none";
    if(document.querySelector(".physical_examination_form1").classList.contains("hidden")){
         document.querySelector("#physical_examination_icon_minus1").style.display = "none";
        document.querySelector("#physical_examination_icon_plus1").style.display = "block";
    }
}


//For Neurological Dropdown
function physical_showForm2(){
    document.querySelector(".physical_examination_form2").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus2").style.display = "block";
    document.querySelector("#physical_examination_icon_plus2").style.display = "none";
    if(document.querySelector(".physical_examination_form2").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus2").style.display = "none";
        document.querySelector("#physical_examination_icon_plus2").style.display = "block";
    }
}


//For vital  Dropdown
function physical_showForm3(){
    document.querySelector(".physical_examination_form3").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus3").style.display = "block";
    document.querySelector("#physical_examination_icon_plus3").style.display = "none";
    if(document.querySelector(".physical_examination_form3").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus3").style.display = "none";
        document.querySelector("#physical_examination_icon_plus3").style.display = "block";
    }
}


//For General Apperance  Dropdown
function physical_showForm4(){
    document.querySelector(".physical_examination_form4").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus4").style.display = "block";
    document.querySelector("#physical_examination_icon_plus4").style.display = "none";
    if(document.querySelector(".physical_examination_form4").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus4").style.display = "none";
        document.querySelector("#physical_examination_icon_plus4").style.display = "block";
    }
}

//For Skin Examination  Dropdown
function physical_showForm5(){
    document.querySelector(".physical_examination_form5").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus5").style.display = "block";
    document.querySelector("#physical_examination_icon_minus5").style.display = "none";
    if(document.querySelector(".physical_examination_form5").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus5").style.display = "none";
        document.querySelector("#physical_examination_icon_minus5").style.display = "block";
    }
}

//For Head and Neck Dropdown
function physical_showForm6(){
    document.querySelector(".physical_examination_form6").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus6").style.display = "block";
    document.querySelector("#physical_examination_icon_plus6").style.display = "none";
    if(document.querySelector(".physical_examination_form6").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus6").style.display = "none";
        document.querySelector("#physical_examination_icon_plus6").style.display = "block";
    }
}

//For Cardiovascular Examination Dropdown
function physical_showForm7(){
    document.querySelector(".physical_examination_form7").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus7").style.display = "block";
    document.querySelector("#physical_examination_icon_plus7").style.display = "none";
    if(document.querySelector(".physical_examination_form7").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus7").style.display = "none";
        document.querySelector("#physical_examination_icon_plus7").style.display = "block";
    }
}


//For Respiratory Examination Dropdown
function physical_showForm8(){
    document.querySelector(".physical_examination_form8").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus8").style.display = "block";
    document.querySelector("#physical_examination_icon_plus8").style.display = "none";
    if(document.querySelector(".physical_examination_form8").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus8").style.display = "none";
        document.querySelector("#physical_examination_icon_plus8").style.display = "block";
    }
}


//For Adominal Examination Dropdown

function physical_showForm9(){
    document.querySelector(".physical_examination_form9").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus9").style.display = "block";
    document.querySelector("#physical_examination_icon_plus9").style.display = "none";
    if(document.querySelector(".physical_examination_form9").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus9").style.display = "none";
        document.querySelector("#physical_examination_icon_plus9").style.display = "block";
    }
}


//For Genitourinary Examination Dropdown
function physical_showForm10(){
    document.querySelector(".physical_examination_form10").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus10").style.display = "block";
    document.querySelector("#physical_examination_icon_plus10").style.display = "none";
    if(document.querySelector(".physical_examination_form10").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus10").style.display = "none";
        document.querySelector("#physical_examination_icon_plus10").style.display = "block";
    }
}


//For Musculoskeletal Examination Dropdown
function physical_showForm11(){
    document.querySelector(".physical_examination_form11").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus11").style.display = "block";
    document.querySelector("#physical_examination_icon_plus11").style.display = "none";
    if(document.querySelector(".physical_examination_form11").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus11").style.display = "none";
        document.querySelector("#physical_examination_icon_plus11").style.display = "block";
    }
}

//For Neurovascular Assessment of Extremities Dropdown
function physical_showForm12(){
    document.querySelector(".physical_examination_form12").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus12").style.display = "block";
    document.querySelector("#physical_examination_icon_plus12").style.display = "none";
    if(document.querySelector(".physical_examination_form12").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus12").style.display = "none";
        document.querySelector("#physical_examination_icon_plus12").style.display = "block";
    }
}

//For Review of Systems (ROS) of Extremities Dropdown
function physical_showForm13(){
    document.querySelector(".physical_examination_form13").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus13").style.display = "block";
    document.querySelector("#physical_examination_icon_plus13").style.display = "none";
    if(document.querySelector(".physical_examination_form13").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus13").style.display = "none";
        document.querySelector("#physical_examination_icon_plus13").style.display = "block";
    }
}


//For Social and Family History Dropdown

function  physical_showForm14(){
    document.querySelector(".physical_examination_form14").classList.toggle("hidden");
    document.querySelector("#physical_examination_icon_minus14").style.display = "block";
    document.querySelector("#physical_examination_icon_plus14").style.display = "none";
    if(document.querySelector("#physical_examination_icon_minus14").classList.contains("hidden")){
        document.querySelector("#physical_examination_icon_minus14").style.display = "block"
        document.querySelector("#physical_examination_icon_plus14").style.display = "block";
    }
}




//Treatment and Prescribtion JS
function treatment_prescribtion_section(){
    document.querySelector(".treatment_prescribtion-section").classList.toggle("hidden");
    document.querySelector("#treatment_prescribtion_icon_plus").style.display = "none";
    document.querySelector("#treatment_prescribtion_minus").style.display = "block";
    if(document.querySelector(".treatment_prescribtion-section").classList.contains("hidden")){
        document.querySelector("#treatment_prescribtion_icon_plus").style.display = "block";
        document.querySelector("#treatment_prescribtion_minus").style.display = "none";
}
}

//DIAGNOSIS
function diagnosis_section(){
    document.querySelector(".diagnosis-section").classList.toggle("hidden");
    document.querySelector("#diagnosis_icon_plus").style.display = "none";
    document.querySelector("#diagnosis_icon_minus").style.display = "block";
    if(document.querySelector(".diagnosis-section").classList.contains("hidden")){
        document.querySelector("#diagnosis_icon_plus").style.display = "block";
        document.querySelector("#diagnosis_icon_minus").style.display = "none";
    }
}

//ADVICE
function advice_section(){
    document.querySelector(".advice-section").classList.toggle("hidden");
    document.querySelector("#advice_icon_plus").style.display = "none";
    document.querySelector("#advice_icon_minus").style.display = "block";
    if(document.querySelector(".advice-section").classList.contains("hidden")){
        document.querySelector("#advice_icon_plus").style.display = "block";
        document.querySelector("#advice_icon_minus").style.display = "none";
    }
}


const check_1 = document.querySelector("#check1")
const check_2 = document.querySelector("#check2")
//For the surgical form 
function handle_change(){
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
function open_procedure_form(){
    document.querySelector(".surgical_booking").classList.remove("hidden");
    document.querySelector(".overlay_popup").classList.remove("hidden");
    document.querySelector("#back-arrow").style.display = "none";
};

function close_procedure_form(){
    document.querySelector(".surgical_booking").classList.add("hidden");
    document.querySelector(".overlay_popup").classList.add("hidden");
    document.querySelector("#back-arrow").style.display = "block";
};

check_1.addEventListener("change", handle_change);
check_2.addEventListener("change", handle_change);



    //INVESTIGATION AND PROCEDURE
function investigation_section(){
    document.querySelector(".investigation-section").classList.toggle("hidden");
    document.querySelector("#investigation_icon_plus").style.display = "none";
    document.querySelector("#investigation_icon_minus").style.display = "block";
    if(document.querySelector(".investigation-section").classList.contains("hidden")){
        document.querySelector("#investigation_icon_plus").style.display = "block";
        document.querySelector("#investigation_icon_minus").style.display = "none";
    }
}

    //TRANFER TO LABORATORY
     function tranfer_patient_lab(){
        document.querySelector(".investigation_form").classList.remove("hide");
        document.querySelector(".overlay_popup").classList.remove("hidden");
    }
     function close_tranfer_patient_lab(){
        document.querySelector(".investigation_form").classList.add("hide");
        document.querySelector(".overlay_popup").classList.add("hidden");
    }
    //TRANSFER TO RADIOLOGY
    function tranfer_patient_rad(){
        document.querySelector(".investigation_form").classList.remove("hide");
        document.querySelector(".overlay_popup").classList.remove("hidden");
    }
    //  function close_tranfer_patient_rad(){
    //     document.querySelector(".investigation_form").classList.add("hide");
    //     document.querySelector(".overlay_popup").classList.add("hidden");
    // }

    //TRANSFER TO OTHERS DOCTORS AVAILABLE
function refer_doc_section(){
    document.querySelector(".refer_doc-section").classList.toggle("hidden");
    document.querySelector("#refer_doc_icon_plus").style.display = "none";
    document.querySelector("#refer_doc_icon_minus").style.display = "block";
    if(document.querySelector(".refer_doc-section").classList.contains("hidden")){
        document.querySelector("#refer_doc_icon_plus").style.display = "block";
        document.querySelector("#refer_doc_icon_minus").style.display = "none";
    }
}

    //TRANFER TO OTHERS DOC
     function tranfer_patient_doc(){
        document.querySelector(".refer_doc_form").classList.remove("hidden");
        document.querySelector(".overlay_popup").classList.remove("hidden");
    }
     function close_tranfer_patient_doc(){
        document.querySelector(".refer_doc_form").classList.add("hidden");
        document.querySelector(".overlay_popup").classList.add("hidden");
    }



//SHOW LIST OF APPOITMENT 
function show_appoitment_list_section (){
    document.querySelector(".container").style.display="block";
    document.querySelector(".appoitment_section").classList.add("hidden");
    document.querySelector("#btn_appoitment").style.display = "none";
    document.querySelector(".head-sec").style.display="flex";
    document.querySelector(".body_sec").style.display="block";
    document.querySelector("#back-arrow").style.display="none";
    document.querySelector(".all_sections_input").classList.add("hide");
}





//DISCHARGE INPUT
function discharged_section(){
    document.querySelector(".discharged-section").classList.toggle("hidden");
    document.querySelector("#discharged_icon_plus").style.display = "none";
    document.querySelector("#discharged_icon_minus").style.display = "block";
    if(document.querySelector(".discharged-section").classList.contains("hidden")){
        document.querySelector("#discharged_icon_plus").style.display = "block";
        document.querySelector("#discharged_icon_minus").style.display = "none";
    }
}


    //DISCHARGED BUTTONS
    function toogle_on_discharged(){
        document.querySelector("#discharge_on").style.display = "block";
        document.querySelector("#discharge_off").style.display = "none";
        document.querySelector(".discharge_form").classList.toggle("hidden")
    }
    function toogle_off_discharged(){
        document.querySelector("#discharge_on").style.display = "none";
        document.querySelector("#discharge_off").style.display = "block";
        document.querySelector(".discharge_form").classList.add("hidden")
    }

    
//DEAD INPUT

function confirmed_death_section(){
    document.querySelector(".confirmed_death-section").classList.toggle("hidden");
    document.querySelector("#confirmed_death_icon_plus").style.display = "none";
    document.querySelector("#confirmed_death_icon_minus").style.display = "block";
    if(document.querySelector(".confirmed_death-section").classList.contains("hidden")){
        document.querySelector("#confirmed_death_icon_plus").style.display = "block";
        document.querySelector("#confirmed_death_icon_minus").style.display = "none";
    }
}


    //DEATH BUTTONS
    function toogle_on_confirmed_death(){
        document.querySelector("#confirmed_death_on").style.display = "block";
        document.querySelector("#confirmed_death_off").style.display = "none";
        document.querySelector(".confirmed_death_form").classList.toggle("hidden")
    }
    function toogle_off_confirmed_death(){
        document.querySelector("#confirmed_death_on").style.display = "none";
        document.querySelector("#confirmed_death_off").style.display = "block";
        document.querySelector(".confirmed_death_form").classList.add("hidden")
    }


    //DEATH FORM

    function show_death_form(){
        document.querySelector(".death_form_booking").classList.remove("hidden");
        document.querySelector(".overlay_popup").classList.remove("hidden");
        document.querySelector("#back-arrow").style.display="none";
    }

    function close_death_form(){
        document.querySelector(".death_form_booking").classList.add("hidden");
        document.querySelector(".overlay_popup").classList.add("hidden");
        document.querySelector("#back-arrow").style.display="block";
    }
    ///END OF DEATH FORM





//DISPLAY INPUT
function display_input () {
    document.querySelector(".all_sections_input").classList.remove("hide");
    document.querySelector(".appointmentDetailsContainer").style.display = "none";
}































////tomzy's script 


// document.querySelector('[data-patient-id]').addEventListener('click', function() {
//     // Get the patient ID from the data attribute of the clicked element
//     var patientId = this.getAttribute('data-patient-id');
//     // display_input();

//     // Call the loadPatientProfile function with the retrieved patient ID
//     // loadPatientProfile(patientId);
  

// });


// function loadPatientProfile(patient_id) {
//     // Make an asynchronous request to fetch patient details using AJAX
//     alert(patient_id);
    
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'index.php', true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Update the patientDetailsContainer with the received HTML

//             var container = document.getElementById('appointmentDetailsContainer');
//             var hidden = document.querySelector(".all_sections_input");
//             if (container) {
//                 container.innerHTML = xhr.responseText;
//                 container.style.display = "none"; // Hide container
//                 hidden.classList.remove("hide"); // Remove the "hide" class from hide element
//                 // display_input();
//             } else {
//                 console.error("Element with ID 'appointmentDetailsContainer' not found");
//             }
//         }
//     };
   
//     // Send the patient_id and page parameters to the PHP script
//     xhr.send('load_patient_profile=1&patient_id=' + encodeURIComponent(patient_id) + '&page=patient');
// }























































    //BEGINNING OF THE APPOITMENT 

//DOCTOR
const doctorsData = {
    cardiologist: ['Dr. Tomiwa', 'Dr. Johnson'],
    dermatologist: ['Dr. Kingsley', 'Dr. White'],
    surgeon:['Dr. Priceless', 'Dr John'],
    psychiatrist:['Dr. Towa', 'Dr Paul'],
    family_medicine:['Dr. Praise', 'Dr Trinity'],
    dermatologist: ['Dr.Tom', 'Dr Ruth' ],
    anaesthesiology:['Dr. Drake', 'Dr. Drake'],
    rheumatologist:['Dr. Peace', 'Dr Jude'],
    endocrinologist:['Dr. Grace', 'Dr. Houston'],
    nephrologist:['Dr. Goodness', 'Dr Goodnews'],
    neurologist:['Dr. Goodness', 'Dr.Peace'],
    pediatrician:['Dr. Fooad', 'Dr. Fooad'],
    urologist:['Dr. Uro', 'Dr. Fooad'],
    radiologist:['Dr. Fooad', 'Dr. Fooad'],
    dentist:['Dr. Gofade', 'Dr. Fooad'],
    pulmonologist:['Dr. Foatt', 'Dr. Fooad'],
    podiatristian:['Dr. Foatt', 'Dr. Fogad'],
    emergency_physician:['Dr. Good', 'Dr. Tom'],
    anaesthesiologist:['Dr. Green', 'Dr. Green'],
    cardiologist:['Dr Ben', 'Dr. White'],
    oncologist:['Dr. Bemson', 'Dr. Green'],
    gastroenterologist:['Dr. Houston', 'Dr. Green'],
    ophthanlmologist:['Dr. Jous', 'Dr. King'],
    cardology:['Dr. Funke', 'Dr Roseline'],
    allergist:['Dr. Postel', 'Dr.Houston'],
    orthopedic_surgoen:['Dr.Lookman', 'Dr. Chelsea'],
  };
  
  function getDoctors() {
    const selectedRole = document.getElementById('roles').value;
    const doctorsSelect = document.getElementById('doctors');
    doctorsSelect.innerHTML = ''; // Clear previous options
  
    // Populate the doctors select box based on the selected role
  //   doctorsData[selectedRole].forEach(doctor => {
  //       const option = document.createElement('option');
  //       option.value = doctor;
  //       option.text = doctor;
  //       doctorsSelect.appendChild(option);
  //   });
  }
  
  // Initial population of doctors based on the default selected role
  getDoctors();
  
  
  //CALENDAR
   //This help show the current date and time zone of today
   const date =  new Date()
  
   const renderCalendar = ()=>{
      date.setDate(1)
      // console.log(date.getDay());
       //this help shows the current month we are in and its 0 based "which means its counts from 0 throgh the months"
      //  const month  = date.getMonth()
       const monthDays = document.querySelector(".days")
      const lastDay = new Date(date.getFullYear(), date.getMonth() +1, 0).getDate()
      
      const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate()
      
      const firstDayIndex = date.getDay() 
      
      const  lastDayIndex = new Date(date.getFullYear(), date.getMonth() +1, 0).getDay()
      const nextDays = 7 - lastDayIndex -1
      //this is the month array of all the selected month
      const months = [
          "January", 
          "February",
           "March",
            "April", 
            "May", 
            "June", 
            "July", 
            "August", 
            "September",
             "October", 
             "November",
             "December" 
      ] ; 
      
      document.querySelector(".date h1").innerHTML = months[date.getMonth()];
      document.querySelector(".date p").innerHTML = new Date().toDateString();
      // const showDate =  document.querySelector(".content");
      
      let days = "";
      
      for(let x =  firstDayIndex; x>0; x--){
          days += `<div class ="prev-date">${prevLastDay - x +1}</div>`;
      }
      
      for(let i = 1; i <=lastDay; i++) {
          if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
              
              days +=`
              <div class="calendar-date today" onclick="updateClickedDate(${i})">${i}</div>`;
          }else{
              
              days +=`
              <div class="calendar-date" onclick="updateClickedDate(${i})">${i}</div> `;
          }
      }
      
      for(let j =1; j<=nextDays; j++){
          days += `<div class="next-date">${j}</div>`;
          monthDays.innerHTML = days;
      }
   }
   function updateClickedDate(clickedDay) {
      document.querySelector(".selected_date").textContent = `${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
      document.getElementById('date').value=`${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
    }
   
   
   document.querySelector(".prev").addEventListener("click", function(){
      date.setMonth(date.getMonth() -1)
      renderCalendar()
   })
   document.querySelector(".next").addEventListener("click", function(){
      date.setMonth(date.getMonth()+ 1)
      renderCalendar()
   })
   renderCalendar()

//SHOW APPOITMENT SECTION
const show_appoitment_section = ()=>{
    document.querySelector(".container").style.display="none";
    document.querySelector(".appoitment_section").classList.remove("hidden");
    document.querySelector("#btn_appoitment").style.display = "block";
    document.querySelector("#back-arrow").style.display="none";
}

const appoitment_booking = ()=>{
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.remove("hide");
}

//dont show appoitment booking button
document.querySelector("#btn_appoitment").style.display = "none";
const submitRoles = ()=>{
    const appoitment_form = document.querySelector(".appoitment_form");
    appoitment_form.classList.remove("hidden");
}

const close_appoitment_form = ()=>{
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.add("hide");
}





// ////////tomzy's script
// //DISPLAY INPUT
// const display_input = (data) => {
//     document.getElementById('resultContainer').innerHTML = data;
//     document.querySelector(".all_sections_input").classList.remove("hide");
//     document.querySelector(".body_sec").style.display = "none";
// }

// function accept_input(patient_id) {
//     // Display an alert with the patient_id
//     alert(patient_id);

//     // Create a FormData object to store form data
//     var formData = new FormData();
//     formData.append('patient_id', patient_id);

//     // Make an asynchronous request using Fetch API
//     fetch('index.php', {
//         method: 'POST',
//         body: formData,
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Network response was not ok');
//         }
//         return response.text();
//     })
//     .then(data => {
//         // Assuming the server sends back HTML content
//         display_input(data);
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// }

