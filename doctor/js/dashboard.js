'use strict';

///////////////////////////////////////
// Modal window
const modal = document.querySelector('.modal');
const blackBackground = document.querySelector('.black--background');




const openModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.remove('hidden');
  blackBackground.classList.remove('hidden');
};


const closeModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.add('hidden');
  blackBackground.classList.add('hidden');
};
////////


   function displayUserProfile(){
    document.querySelector(".profile_account").classList.toggle("hide");
};


const sections = document.querySelectorAll('.section');
const allProfiles = document.querySelectorAll('.allProfiles');
const links = document.querySelectorAll('.sidebar-body ul li');

function toggleSidebarLinks(clickedLink){
    links.forEach(link => link.classList.remove('available'));
    clickedLink.classList.add('available');
 }
links.forEach(link => {
    link.addEventListener('click', function() {
        toggleSidebarLinks(this);
    });
});
/////////////////////////////////////////////////////

function createDate(){
const now = new Date();
const options = {
day:'numeric',
month:'numeric',
year:'numeric',
hour:'numeric',
minute:'numeric',
second:'numeric',
}
const dateTime = new Intl.DateTimeFormat(navigator.language, options).format(now)
document.querySelector('.display__date').textContent = dateTime
}
setInterval(() => createDate());
////////////////////////////////////////////////////////////////////






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




// Example of advice_section toggle logic
function advice_section() {
    let adviceSection = document.querySelector(".advice-section");
    let iconPlus = document.querySelector("#advice_icon_plus");
    let iconMinus = document.querySelector("#advice_icon_minus");

    adviceSection.classList.toggle("hidden");
    iconPlus.classList.toggle("hidden");
    iconMinus.classList.toggle("hidden");

    let check_1 = document.querySelector("#check1");
    let check_2 = document.querySelector("#check2");

    function handle_change() {
        if (check_1.checked) {
            check_2.disabled = true;
            check_2.checked = false;
            open_procedure_form();
        } else {
            check_2.disabled = false;
        }

        if (check_2.checked) {
            check_1.disabled = true;
            check_1.checked = false;
        } else {
            check_1.disabled = false;
        }
    }

    function open_procedure_form() {
        openModal('procedure');
    }

    // Add event listeners inside the function
    check_1.addEventListener("change", handle_change);
    check_2.addEventListener("change", handle_change);
}




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
        openModal('available--doc');
        getDoctorsRoles();

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
       openModal('death--booking')
    }

    ///END OF DEATH FORM





//DISPLAY INPUT
function display_input () {
    document.querySelector(".all_sections_input").classList.remove("hide");
    document.querySelector(".appointmentDetailsContainer").style.display = "none";
}



function openModalTransferLab(){
   openModal('patient__transfer--lab');
};
function openModalTransferRad(){
   openModal('patient__transfer--rad');
}


function transfer_to_lab() {
    var patient_id = $("#patient_id").val();
    var patient_name = $("#patient_name").val();
    var message = $("#message").val();

    if (message === "") {
        alert("Fill the message field");
    } else {
        var $btnSubmit = $('#submit_btn');
        var btnText = $btnSubmit.html();
        $btnSubmit.html('Processing...');
        $btnSubmit.prop('disabled', true);

        var action = 'transfer_to_lab';
        var dataString = "action=" + action + "&patient_id=" + patient_id + "&patient_name=" + patient_name + "&message=" + message;

        $.ajax({
            type: 'POST',
            url: "config/code.php",
            data: dataString,
            cache: false,
            dataType: 'json',
            success: function (data) {
                if (data.check === "success") {
                    alert("Patient has been transferred to the Laboratory successfully");
                    $btnSubmit.html('Transfer');
                    $btnSubmit.prop('disabled', false);
                    close_tranfer_patient_lab();
                } else {
                    console.error('Error:', data.error);
                    $btnSubmit.html(btnText);
                    $btnSubmit.prop('disabled', false);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', error);
                $btnSubmit.html(btnText);
                $btnSubmit.prop('disabled', false);
            }
        });
    }
}



function getDoctorsRoles() {

    $('#roles').html('<option>LOADING...</option>'); // Set loading message
    $('#roles').prop('disabled', true); // Disable the dropdown
  
    var action = 'getDoctorsRoles';
    var roles = $('#roles').val();
    var data = { action: action, roles: roles };
  
    $.ajax({
      type: 'POST',
      url: "config/code.php",
      data: data,
      cache: false,
      dataType: 'json',
      success: function (data) {
        // Check for success and populate the dropdown
        if (data.success) {
          populaterolesDropdown(data.doctorRoles); // Pass the entire array of roles
        } else {
          console.error('Error:', data.message);
        }
      },
      error: function (xhr, status, error) {
        console.error('AJAX Error:', status, error);
      },
    });
  }
  
  function populaterolesDropdown(doctorRoles) {
    var rolesDropdown = document.getElementById('roles');
  
  
    // Clear existing options
    rolesDropdown.innerHTML = '';
  
    // Add options based on the fetched data
    for (var i = 0; i < doctorRoles.length; i++) {
      var option = document.createElement('option');
      option.value = doctorRoles[i].doctor_role_id; // Assuming the bed object has a 'bed_id' property
      option.id= doctorRoles[i].doctor_role_id;
  
      // Concatenate bed_number and bed_status_description
      var optionText = doctorRoles[i].doctor_role_name;
  
      option.textContent = optionText;
  
      rolesDropdown.appendChild(option);
       
    }
  
    // Enable the dropdown after populating options
    $('#roles').on('change', getDoctors);
    $('#roles').prop('disabled', false);
  }
  
  
  //////////////////////////////
  
  
  
  
  function getDoctors() {
    $('#doctors').html('<option>LOADING...</option>'); // Set loading message
    $('#doctors').prop('disabled', true); // Disable the dropdown
  
    var action = 'getDoctors';
    var roles = $('#roles').val();
    var data = { action: action, roles: roles };
  
    $.ajax({
      type: 'POST',
      url: "config/code.php",
      data: data,
      cache: false,
      dataType: 'json',
      success: function (data) {
        // Check for success and populate the dropdown
        if (data.success) {
          populatedoctorDropdown(data.doctor); // Pass the entire array of beds
        } else {
          console.error('Error:', data.message);
        }
      },
      error: function (xhr, status, error) {
        console.error('AJAX Error:', status, error);
      },
    });
  }
  
  function populatedoctorDropdown(doctor) {
    var doctorDropdown = document.getElementById('doctor');
  
    // Clear existing options
    doctorDropdown.innerHTML = '';
  
    // Add options based on the fetched data
    for (var i = 0; i < doctor.length; i++) {
      var option = document.createElement('option');
      option.value = doctor[i].doctor_id; // Assuming the bed object has a 'bed_id' property
  
      option.id= "doctor_id";
  
      // Concatenate bed_number and bed_status_description
      var optionText = doctor[i].fullname;
      $('#doctor_id2').val(doctor[i].doctor_id);
  
      option.textContent = optionText;
      doctorDropdown.appendChild(option);
     
    }
  
    // Enable the dropdown after populating options
    $('#doctor').prop('disabled', false);
  }
  
  
  
  
  function updateDoctors() {
    const roleSelect = document.getElementById('av-roles');
    const doctorSelect = document.getElementById('av-doctors');
    const selectedRole = roleSelect.value;
  
    doctorSelect.innerHTML = ''; // Clear existing options
    roles[selectedRole].forEach(doctor => {
        const option = document.createElement('option');
        option.textContent = doctor;
        option.value = doctor.toLowerCase().replace(/ /g, '-'); // Convert name to a slug-like value
        doctorSelect.appendChild(option);
    });
  }
  
  
  function transfer_to_doctor(){
  
    var patient_id = $('#patient_id').val();
    var remark =$('#remark').val();
    var doctor_id = $('#doctor_id2').val();
    var patient_name =$('#patient_name').val();
  
    if(remark==""){
      alert('Fill the remark field');
    }
    else{
      var $btnSubmit = $('#transfer_to_doctor_btn');
      var btnText = $btnSubmit.html();
      $btnSubmit.html('Processing...');
      $btnSubmit.prop('disabled', true);
  
      var action = 'transfer_patient';
      var dataString = "action=" + action + "&patient_id=" + patient_id +"&remark=" + remark + "&doctor_id=" + doctor_id + "&patient_name=" + patient_name;
    
  
      $.ajax({
        type: 'POST',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json',
        success: function (data) {
          if (data.success) {
  
            alert("Patient Transfer is Successful");
            $btnSubmit.html('BOOK');
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
  }
  
  
  
  