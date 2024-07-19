
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
};

function close_procedure_form(){
    document.querySelector(".surgical_booking").classList.add("hidden");
    document.querySelector(".overlay_popup").classList.add("hidden");
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

    }
     function close_tranfer_patient_lab(){
        document.querySelector(".investigation_form").classList.add("hide");
        document.querySelector(".overlay_popup").classList.add("hidden");
    }
    //TRANSFER TO RADIOLOGY
    function tranfer_patient_rad(){
        document.querySelector(".investigation_form").classList.remove("hide");

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



function save_input(){
var physical_examination = $("physical_examination").val();
var mental_status = $("mental_status").val();
var cranial_nerves = $("cranial_nerves").val();
var position_sense = $("position_sense").val();
var vibration_sense = $("vibration_sense").val();
var reflex_technique = $("reflex_technique").val();
var coordination_of_upper_extremities = $("coordination_of_upper_extremities").val();
var coordination_of_lower_extremities = $("coordination_of_lower_extremities").val();
var gait = $("gait").val();
var glasgow = $("glasgow").val();
var spontaneous = $("spontaneous").val();
var to_speech = $("to_speech").val();
var to_pain = $("to_pain").val();
var no_response = $("no_response").val();
var oriented = $("oriented").val();
var confused = $("confused").val();
var inappropraite = $("inappropraite").val();
var incmprehensible = $("incmprehensible").val();
var response = $("response").val();
var obey = $("obey").val();
var localized = $("localized").val();
var flexion = $("flexion").val();
var abnornal = $("abnornal").val();
var response = $("response").val();
var physical_blood_pressure = $("physical_blood_pressure").val();
var heart_rate = $("heart_rate").val();
var respiratory_rate = $("respiratory_rate").val();
var temperature = $("temperature").val();
var oxygen_saturation = $("oxygen_saturation").val();
var level = $("level").val();
var nutritional = $("nutritional").val();
var signs = $("signs").val();
var body_habitus = $("body_habitus").val();
var pigmentation = $("pigmentation").val();
var moisture_temperature = $("moisture_temperature").val();
var lesions = $("lesions/rashes").val();
var bruising = $("bruising").val();
var scars = $("scars").val();
var scalp_hair_nails = $("scalp_hair_nails").val();
var eyes_ears_nose_throat = $("eyes_ears_nose_throat").val();
var lesions_rashes = $("lesions_rashes").val();
var lymph_nodes = $("lymph_nodes").val();
var neck_rang_of_Motion = $("neck_rang_of_Motion").val();
var presence_of_Bruits = $("presence_of_Bruits").val();
var inspection_palpation_of_precordium = $("inspection_palpation_of_precordium").val();
var auscultation_of_heart_sounds_murmurs = $("auscultation_of_heart_sounds_murmurs").val();
var peripheral_pulses = $("peripheral_pulses").val();
var edema_assessment = $("edema_assessment").val();
var capillary_refill_time = $("capillary_refill_time").val();
var respiratory_effort_inspection = $("respiratory_effort_inspection").val();
var palpation_percussion_of_chest = $("palpation_percussion_of_chest").val();
var auscultation_of_breath = $("auscultation_of_breath").val();
var cough_sputum_assessment = $("cough_sputum_assessment").val();
var presence_of_tenderness_masses = $("presence_of_tenderness_masses").val();
var bowel_sounds_assessment_sounds = $("bowel_sounds_assessment_sounds").val();
var genitalia_inspection = $("genitalia_inspection").val();
var urinary_function_assessment = $("urinary_function_assessment").val();
var pelvic_examination_sounds = $("pelvic_examination_sounds").val();
var prostate_examination = $("prostate_examination").val();
var genitalia_inspection_of_joint = $("genitalia_inspection_of_joint").val();
var range_of_motion_assessment = $("range_of_motion_assessment").val();
var gait_balance_evaluation = $("gait_balance_evaluation").val();
var pine_examination = $("mental_status_assessment").val();
var pine_examination = $("cranial_nerve_examination").val();
// var pine_examination = $("cranial_nerve_examination").val();
var reflexes = $("reflexes").val();
var coordination_balance_assessment = $("coordination_balance_assessment").val();
var cardiovascular_system = $("cardiovascular_system").val();
var respiratory_system = $("respiratory_system").val();
var gastrointestinal_system = $("gastrointestinal_system").val();
var genitourinary_system = $("genitourinary_system").val();
var neurological_system = $("neurological_system").val();
var social = $("social_habits(smoking,alcohol,drugs)").val();
var family_medical_history = $("family_medical_history").val();
var occupation_environmental_exposures = $("occupation_environmental_exposures").val();
var living_conditions_support_system = $("living_conditions_support_system").val();
var treatment_prescribtion = $("treatment_prescribtion").val();
var drugs = $("drugs").val();
var strength = $("strength").val();
var mode = $("mode").val();
var dos = $("dos").val();
var unit = $("unit").val();
var frequency = $("frequency").val();
var duration = $("duration").val();
var major_complaints = $("major_complaints").val();
var history_of_presenting_complaints = $("history_of_presenting_complaints").val();
var family_social_history = $("family_social_history").val();
var past_sugical_medical_history = $("past_sugical_medical_history").val();
var selectedValue = document.getElementsByName('f1');
var fatigue;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = fatigue.value;
break; }}

var selectedValue = document.getElementsByName('h1');
var headache;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = headache.value;
break; }}

var selectedValue = document.getElementsByName('o1');
var weakness;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = weakness.value;
break; }}

var selectedValue = document.getElementsByName('ca1');
var appetite;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = appetite.value;
break; }}

var selectedValue = document.getElementsByName('cw1');
var weight;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = weight.value;
break; }}

var selectedValue = document.getElementsByName('fv1');
var Fever;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = Fever.value;
break; }}

var selectedValue = document.getElementsByName('cm');
var mole;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = mole.value;
break; }}

var selectedValue = document.getElementsByName('h/n');
var nail;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = nail.value;
break; }}

var selectedValue = document.getElementsByName('c/t');
var texture;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = texture.value;
break; }}

var selectedValue = document.getElementsByName('i/r');
var Rashes;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = Rashes.value;
break; }}

var selectedValue = document.getElementsByName('sores');
var sores;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = sores.value;
break; }}

var selectedValue = document.getElementsByName('et');
var thirst;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = thirst.value;
break; }}

var selectedValue = document.getElementsByName('e_hs');
var e_hs;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = e_hs.value;
break; }}

var selectedValue = document.getElementsByName('salt_craving');
var salt_craving;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = salt_craving.value;
break; }}

var selectedValue = document.getElementsByName('lsd');
var lsd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = lsd.value;
break; }}

var selectedValue = document.getElementsByName('hci');
var hci;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hci.value;
break; }}

var selectedValue = document.getElementsByName('ag');
var ag;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ag.value;
break; }}

var selectedValue = document.getElementsByName('ia');
var ia;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ia.value;
break; }}

var selectedValue = document.getElementsByName('iup');
var iup;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = iup.value;
break; }}

var selectedValue = document.getElementsByName('tr');
var tr;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = tr.value;
break; }}

var selectedValue = document.getElementsByName('es');
var es;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = es.value;
break; }}

var selectedValue = document.getElementsByName('diabetes');
var diabetes;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = diabetes.value;
break; }}

var selectedValue = document.getElementsByName('cmhd');
var cmhd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cmhd.value;
break; }}

var selectedValue = document.getElementsByName('rtihc');
var rtihc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = rtihc.value;
break; }}

var selectedValue = document.getElementsByName('ithd');
var ithd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ithd.value;
break; }}

var selectedValue = document.getElementsByName('sct');
var cmhd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cmhd.value;
break; }}

var selectedValue = document.getElementsByName('cmhd');
var sct;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = sct.value;
break; }}

var selectedValue = document.getElementsByName('am');
var am;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = am.value;
break; }}

var selectedValue = document.getElementsByName('ic');
var ic;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ic.value;
break; }}

var selectedValue = document.getElementsByName('hg');
var hg;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hg.value;
break; }}

var selectedValue = document.getElementsByName('bt');
var bt;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bt.value;
break; }}

var selectedValue = document.getElementsByName('etin');
var etin;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = etin.value;
break; }}

var selectedValue = document.getElementsByName('gcs');
var gcs;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = gcs.value;
break; }}

var selectedValue = document.getElementsByName('imin');
var imin;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = imin.value;
break; }}

var selectedValue = document.getElementsByName('pt');
var pt;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = pt.value;
break; }}

var selectedValue = document.getElementsByName('occpt');
var occpt;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = occpt.value;
break; }}

var selectedValue = document.getElementsByName('oc');
var oc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = oc.value;
break; }}

var selectedValue = document.getElementsByName('pm');
var pm;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = pm.value;
break; }}
var selectedValue = document.getElementsByName('ja');
var ja;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ja.value;
break; }}

var selectedValue = document.getElementsByName('mr');
var mr;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = mr.value;
break; }}

var selectedValue = document.getElementsByName('si');
var si;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = si.value;
break; }}

var selectedValue = document.getElementsByName('anti-in');
var anti_in;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = anti_in.value;
break; }}

var selectedValue = document.getElementsByName('assistive');
var assistive;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = assistive.value;
break; }}

var selectedValue = document.getElementsByName('shni');
var shni;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = shni.value;
break; }}

var selectedValue = document.getElementsByName('rente');
var rente;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = rente.value;
break; }}

var selectedValue = document.getElementsByName('hnc');
var hnc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hnc.value;
break; }}

var selectedValue = document.getElementsByName('doh');
var doh;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = doh.value;
break; }}

var selectedValue = document.getElementsByName('ssa');
var ssa;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ssa.value;
break; }}

var selectedValue = document.getElementsByName('bnm');
var bnm;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bnm.value;
break; }}

// var selectedValue = document.getElementsByName('doh');
// var doh;
// for (let radio of radios) {
//     if (radio.checked) {
//         selectedValue = doh.value;
// break; }}

var selectedValue = document.getElementsByName('tft');
var tft;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = tft.value;
break; }}

var selectedValue = document.getElementsByName('sgd');
var sgd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = sgd.value;
break; }}

var selectedValue = document.getElementsByName('tmj');
var tmj;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = tmj.value;
break; }}

var selectedValue = document.getElementsByName('is_b');
var is_b;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = is_b.value;
break; }}

var selectedValue = document.getElementsByName('hl');
var hl;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hl.value;
break; }}

var selectedValue = document.getElementsByName('te');
var te;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = te.value;
break; }}

var selectedValue = document.getElementsByName('ep');
var ep;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ep.value;
break; }}

var selectedValue = document.getElementsByName('ed');
var ed;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ed.value;
break; }}

var selectedValue = document.getElementsByName('nc');
var nc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = nc.value;
break; }}

var selectedValue = document.getElementsByName('sd');
var sd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = sd.value;
break; }}

var selectedValue = document.getElementsByName('ar');
var ar;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ar.value;
break; }}

var selectedValue = document.getElementsByName('op');
var op;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = op.value;
break; }}

var selectedValue = document.getElementsByName('tp');
var tp;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = tp.value;
break; }}

var selectedValue = document.getElementsByName('dysphagia');
var dysphagia;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = dysphagia.value;
break; }}

var selectedValue = document.getElementsByName('ml');
var ml;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ml.value;
break; }}


var selectedValue = document.getElementsByName('vc');
var vc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = vc.value;
break; }}

var selectedValue = document.getElementsByName('ml');
var ml;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ml.value;
break; }}

var selectedValue = document.getElementsByName('halitosis');
var halitosis;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = halitosis.value;
break; }}

var selectedValue = document.getElementsByName('gr');
var gr;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = gr.value;
break; }}

var selectedValue = document.getElementsByName('ot');
var ot;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ot.value;
break; }}

var selectedValue = document.getElementsByName('ml');
var ml;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ml.value;
break; }}

var selectedValue = document.getElementsByName('Tonsillitis');
var Tonsillitis;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = Tonsillitis.value;
break; }}



var selectedValue = document.getElementsByName('Hoarseness');
var Hoarseness;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = Hoarseness.value;
break; }}

var selectedValue = document.getElementsByName('oral_cancer');
var oral_cancer;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = oral_cancer.value;
break; }}

var selectedValue = document.getElementsByName('Tonsillitis');
var Tonsillitis;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = Tonsillitis.value;
break; }}

var selectedValue = document.getElementsByName('rsc');
var rsc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = rsc.value;
break; }}

var selectedValue = document.getElementsByName('bd');
var bd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bd.value;
break; }}

var selectedValue = document.getElementsByName('simbc');
var simbc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = simbc.value;
break; }}

var selectedValue = document.getElementsByName('hr');
var hr;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hr.value;
break; }}

var selectedValue = document.getElementsByName('bifu');
var bifu;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bifu.value;
break; }}

var selectedValue = document.getElementsByName('rs');
var rs;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = rs.value;
break; }}

var selectedValue = document.getElementsByName('bp');
var bp;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bp.value;
break; }}

var selectedValue = document.getElementsByName('nutritional');
var nutritional;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = nutritional.value;
break; }}

var selectedValue = document.getElementsByName('pi');
var pi;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = pi.value;
break; }}

// var selectedValue = document.getElementsByName('rs');
// var rs;
// for (let radio of radios) {
//     if (radio.checked) {
//         selectedValue = rs.value;
// break; }}

var selectedValue = document.getElementsByName('pft');
var pft;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = pft.value;
break; }}

var selectedValue = document.getElementsByName('cxi');
var cxi;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cxi.value;
break; }}

var selectedValue = document.getElementsByName('ot');
var ot;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ot.value;
break; }}

var selectedValue = document.getElementsByName('ventilator');
var ventilator;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ventilator.value;
break; }}

var selectedValue = document.getElementsByName('bronchoscopy');
var bronchoscopy;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bronchoscopy.value;
break; }}

var selectedValue = document.getElementsByName('pneumonia');
var pneumonia;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = pneumonia.value;
break; }}

var selectedValue = document.getElementsByName('aa');
var aa;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = aa.value;
break; }}

var selectedValue = document.getElementsByName('ri');
var ri;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = ri.value;
break; }}

var selectedValue = document.getElementsByName('copd');
var copd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = copd.value;
break; }}

var selectedValue = document.getElementsByName('st');
var st;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = st.value;
break; }}

var selectedValue = document.getElementsByName('sc');
var sc;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = sc.value;
break; }}


var selectedValue = document.getElementsByName('cardiovascular_condition');
var cardiovascular_condition;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cardiovascular_condition.value;
break; }}

var selectedValue = document.getElementsByName('cl');
var cl;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cl.value;
break; }}

var selectedValue = document.getElementsByName('antiplatelet');
var antiplatelet;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = antiplatelet.value;
break; }}


var selectedValue = document.getElementsByName('bb');
var bb;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bb.value;
break; }}

var selectedValue = document.getElementsByName('acei');
var acei;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = acei.value;
break; }}

var selectedValue = document.getElementsByName('anticoagulant');
var anticoagulant;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = anticoagulant.value;
break; }}

var selectedValue = document.getElementsByName('cardiac');
var cardiac;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = cardiac.value;
break; }}


var selectedValue = document.getElementsByName('hf_d');
var hf_d;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = hf_d.value;
break; }}

var selectedValue = document.getElementsByName('gastrointestinal_symptom');
var gastrointestinal_symptom;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = gastrointestinal_symptom.value;
break; }}


var selectedValue = document.getElementsByName('endoscopy');
var endoscopy;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = endoscopy.value;
break; }}

var selectedValue = document.getElementsByName('bd');
var bd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = bd.value;
break; }}


var selectedValue = document.getElementsByName('colonoscopy');
var colonoscopy;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = colonoscopy.value;
break; }}

var selectedValue = document.getElementsByName('gd');
var gd;
for (let radio of radios) {
    if (radio.checked) {
        selectedValue = gd.value;
break; }}

var patient_id = $("patient_id").val();

    // Make an asynchronous request using Fetch API
 

    var $btnSubmit = $('#doctor_input');
    var btnText = $btnSubmit.html();
    $btnSubmit.html('Processing...');
    $btnSubmit.prop('disabled', true);

    var action = 'doctor_input';
    var dataString = "action=" + action + "&patient_id=" + patient_id + "&patient_name=" + patient_name  + "&time=" + time + "&date=" + date +"&reason=" + reason + "&doctor_id=" + doctor_id
                      "";
  

    $.ajax({
      type: 'POST',
      url: "config/code.php",
      data: dataString,
      cache: false,
      dataType: 'json',
      success: function (data) {
        if (data.success) {

          alert("Patient Bio data saved Successful");
          $btnSubmit.html('Save All');
          $btnSubmit.prop('disabled', true);
          window.location.reload();
        } else {
          console.error('Error:', data.message);
          $btnSubmit.html(btnText);
          $btnSubmit.prop('disabled', false);
        }
      },
    });
}
