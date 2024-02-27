     //PROFILE IMAGE
     function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };


  

//DIFFERENT SECTIONS 
function postnalSection(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.remove("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function antenatalSection(){
  document.querySelector(".antenal_section").style.display = "flex";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function labourSection(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.remove("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function anternal_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.remove("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function postnatal_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.remove("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function labour_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.remove("hide");
}


//ANTERNATAL PATIENT PROFILE INPUTS
function _display_anternal_vital_input(){
  $('#vital_button').on('click', function(){
    $('.vitals_input').toggleClass('hide');
  });
}
function _display_anternal_drug_prescribtion_input(){
  $('#drug_prescription_button').on('click', function(){
    $('.drug_prescribtion').toggleClass('hide')
  })
}

function _display_anternal_lab_input(){
$('#lab_button').on('click', function(){
  $('.lab_input').toggleClass('hide')
})
}
function  _display_anternal_radiology_input(){
$('#radiology_button').on('click', function(){
  $('.radiology_input').toggleClass('hide')
})
}
function _display_anternal_screening_input(){
$('#screening_button').on('click', function(){
  $('.screening_input').toggleClass('hide')
})
}

_display_anternal_drug_prescribtion_input();
_display_anternal_screening_input();
_display_anternal_vital_input();
_display_anternal_lab_input();
_display_anternal_radiology_input();



//POSTNATAL PATIENT PROFILE INPUTS
function _display_postnatal_accessment_input(){
  $('#postnatal_assessment_button').on('click', function(){
    $('.postnatal_accessment_form').toggleClass('hide')
  })
}
function _display_neonatal_assessmen_input(){
  $('#neonatal_assessment_button').on('click', function(){
    $('.neonatal_assessmen_form').toggleClass('hide')
  })
}
function _labouratory_diagnostic_test_input(){
  $('#lab_diagnostic_button').on('click', function(){
    $('.labouratory_diagnostic_test_form').toggleClass('hide')
  })
}
function _drug_prescribtion_input2(){
  $('#drug_prescription_button2').on('click', function(){
    $('.drug_prescribtion2').toggleClass('hide')
  })
}
_drug_prescribtion_input2();
_labouratory_diagnostic_test_input();
_display_neonatal_assessmen_input();
_display_postnatal_accessment_input();

//BOOK DRUG PRESCRIPTION
function _bookDrugs(){
  $('.overlay').removeClass('hide');
  $('.drugs_booking').removeClass('hide');
}

function  _drug_prescribtion_tableData(){
        //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPTon update_table(){
                const tableBody = document.getElementById('dataTable3').getElementsByTagName('tbody')[0];
                
                tableBody.innerHTML = "";
                const drug = document.querySelectorAll("#drugs")
                drug.forEach(function(drug){
                    console.log(drug.value);

                    const newRow = tableBody.insertRow();
                    let cell0 = newRow.insertCell(0);
                    cell0.textContent = drug.value;
                })

                // const strength = document.querySelectorAll("#drugs_strength")
                // strength.forEach(function(drug_strength){
                //   const newRow = tableBody.insertRow();
                //   let cell1 = newRow.insertCell(1);
                //   cell1.textContent = drug_strength.value;
                // })

              }

              _drug_prescribtion_tableData()

//SUM ALL THE LAB TEST PRICES
window.onload = function() {
        const checkboxs = document.querySelectorAll(".checkbox");
        function updateSum(){
                let sum = 0;
        checkboxs.forEach(function(checkbox){
                      if(checkbox.checked){
                        sum += parseInt(checkbox.value, 10);
                      }
                      let testSum = document.querySelector("#total");
                    testSum.textContent = sum
        })
        }
        checkboxs.forEach(function(checkbox){
                checkbox.addEventListener('change', ()=>{
                        update_table();
                        updateSum();
                })
        })
}
//LABOR DROPDOWN
function _transfer_dropdowns(){
$('#_transfer_icon').on('click',function(event){
  event.stopPropagation();
  $('.tranfer_box').removeClass('hide');
  $('.background_opacity').removeClass('hide');
})
}
_transfer_dropdowns();

function _close_transfer_dropdowns(){
  $('.tranfer_box').addClass('hide');
  $('.background_opacity').addClass('hide');
}



////TRANSFER TO DIFFERENT SECTION
//NURSE
function _nurse_transfer_from_labour(){
  $('.nurse_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//DOCTOR
function _doc_transfer_from_labour(){
  $('.doctor_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//SURGICAL SUITES
function _surgical_suite_transfer_from_labour(){
  $('.surgical_suite_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//LABOUR
function _labour_transfer_from_labour(){
  $('.labour_ward_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//LABOURATORY
function  _lab_transfer_from_labour(){
  $('.lab_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_labour(){
  $('.radiology_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

// ICU
function _icu_transfer_from_labour(){
  $('.icu_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
}


//CLOSE ALL APPOITMENT
function _close_all_appoitment(){
    $('.icu_appoitment').addClass('hide');
    $('.radiology_appoitment').addClass('hide');
    $('.lab_appoitment').addClass('hide');
    $('.labour_ward_appoitment').addClass('hide');
    $('.doctor_appoitment').addClass('hide');
    $('.nurse_appoitment').addClass('hide');
    $('.surgical_suite_appoitment').addClass('hide');
    $('.background_opacity').removeClass('hide');
    $('.tranfer_box').removeClass('hide');
}





















////LABOR PATIENT PROFILE INPUTS
function _display_anternal_vital_input2(){
  $('#vital_button2').on('click', function(){
    $('.vitals_input2').toggleClass('hide');
  });
}
function _display_anternal_drug_prescribtion_input3(){
  $('#drug_prescription_button3').on('click', function(){
    $('.drug_prescribtion3').toggleClass('hide')
  })
}

function _display_anternal_lab_input2(){
$('#lab_button2').on('click', function(){
  $('.lab_input2').toggleClass('hide')
})
}
function  _display_anternal_radiology_input2(){
$('#radiology_button2').on('click', function(){
  $('.radiology_input2').toggleClass('hide')
})
}
function _display_anternal_screening_input2(){
$('#screening_button2').on('click', function(){
  $('.screening_input2').toggleClass('hide')
})
}

_display_anternal_drug_prescribtion_input3();
_display_anternal_screening_input2();
_display_anternal_vital_input2();
_display_anternal_lab_input2();
_display_anternal_radiology_input2();



//APPOITMENT SECTION
function _display_appoitment_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  document.querySelector(".appoitment_section").classList.remove("hide");
}

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


 //SHOW APPOITMENT SECTION FOR TRANSFERING PATIENTS TO DOCTOR
 function appoitment_booking(){
  const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
  form_doctor_roles_name.classList.remove("hide");
}

function submitRoles(){
  const appoitment_form = document.querySelector(".appoitment_form");
  appoitment_form.classList.remove("hidden");
}

function close_appoitment_form(){
  const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
  form_doctor_roles_name.classList.add("hide");
}

function back_to_appoitment_list(){
  document.querySelector(".personal_profile_vital").classList.add("hide");
  document.querySelector(".appoitment_section").style.display="flex";
  document.querySelector("#btn_appoitment").style.display = "none";
  document.querySelector(".new_vital").classList.add("hide");
  document.querySelector(".appoitment_container").classList.add("hide");
}

//Search Bar
// const select =  document.getElementById("select");
// const list = document.getElementById("list");
// const selectText = document.getElementById("selectText");
// const options = document.getElementsByClassName("options");
// const inputfield = document.getElementById("inputfield");
// const submitInput = document.getElementById("submit-input");
// const id = document.getElementById("id");

// select.addEventListener("click", function(){
//     list.classList.toggle("open");
// })

// const user_select = 1;
// submitInput.addEventListener("load", function(){
//     submitInput.innerHTML = user_select.toString();
// })

// for(option of options){
//     option.addEventListener("click", function(){
//         selectText.innerHTML = this.innerHTML,id;
//         inputfield.placeholder = 'Search In ' + selectText.innerHTML
//     })
// }


//camera for postnatal
let videoElement1 = document.getElementById('videoElement_postnatal');
let canvasElement1 = document.getElementById('canvasElement_postnatal');
let capturedImageElement1 = document.getElementById('capturedImage_postnatal');
let stream1;

function openCamera1() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      stream1 = cameraStream;
      videoElement1.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const capture_image = document.querySelector('#capture_image_postnatal');
    capture_image.style.display="none"

    const showClickButton = document.querySelector(".btn_capture1")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture1")
    showClickButtonForRecapture.classList.remove("hide")
}

function takePicture1() {
  if (stream1) {
    let context = canvasElement1.getContext('2d');
    canvasElement1.width = videoElement1.videoWidth;
    canvasElement1.height = videoElement1.videoHeight;
    context.drawImage(videoElement1, 0, 0, canvasElement1.width, canvasElement1.height);

    // Convert the canvas content to a data URL representing a PNG image
    let imageDataURL = canvasElement1.toDataURL('image/png');

    // Display the captured image
    capturedImageElement1.src = imageDataURL;
    capturedImageElement1.style.display = 'block';

    // Stop the camera stream
    stopCamera1();
  }
}
function retakePicture1() {
    // Hide the captured image
    capturedImageElement1.style.display = 'none';

    // Stop the camera stream
    stopCamera1();

    // Reopen the camera for retake
    openCamera1();
  }
function stopCamera1() {
  if (stream1) {
    let tracks = stream1.getTracks();

    // Stop all tracks
    tracks.forEach(track => track.stop());

    // Remove the stream from the video element
    videoElement1.srcObject = null;
  }
}



//camera for antenatal
let videoElement2 = document.getElementById('videoElement_antenatal');
let canvasElement2 = document.getElementById('canvasElement_antenatal');
let capturedImageElement2 = document.getElementById('capturedImage_antenatal');
let stream2;

function openCamera2() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      stream2 = cameraStream;
      videoElement2.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const capture_image = document.querySelector('#capture_image_antenatal');
    capture_image.style.display="none"

    const showClickButton = document.querySelector(".btn_capture2")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture2")
    showClickButtonForRecapture.classList.remove("hide")
}

function takePicture2() {
  if (stream2) {
    let context = canvasElement2.getContext('2d');
    canvasElement2.width = videoElement2.videoWidth;
    canvasElement2.height = videoElement2.videoHeight;
    context.drawImage(videoElement2, 0, 0, canvasElement2.width, canvasElement2.height);

    // Convert the canvas content to a data URL representing a PNG image
    let imageDataURL = canvasElement2.toDataURL('image/png');

    // Display the captured image
    capturedImageElement2.src = imageDataURL;
    capturedImageElement2.style.display = 'block';

    // Stop the camera stream
    stopCamera2();
  }
}
function retakePicture2() {
    // Hide the captured image
    capturedImageElement2.style.display = 'none';

    // Stop the camera stream
    stopCamera2();

    // Reopen the camera for retake
    openCamera2();
  }
function stopCamera2() {
  if (stream2) {
    let tracks = stream2.getTracks();

    // Stop all tracks
    tracks.forEach(track => track.stop());

    // Remove the stream from the video element
    videoElement2.srcObject = null;
  }
}

//camera for antenatal
let videoElement3 = document.getElementById('videoElement_labor');
let canvasElement3 = document.getElementById('canvasElement_labor');
let capturedImageElement3 = document.getElementById('capturedImage_labor');
let stream3;

function openCamera3() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      stream3 = cameraStream;
      videoElement3.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const capture_image = document.querySelector('#capture_image_labor');
    capture_image.style.display="none"

    const showClickButton = document.querySelector(".btn_capture3")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture3")
    showClickButtonForRecapture.classList.remove("hide")
}

function takePicture3() {
  if (stream3) {
    let context = canvasElement3.getContext('3d');
    canvasElement3.width = videoElement3.videoWidth;
    canvasElement3.height = videoElement3.videoHeight;
    context.drawImage(videoElement3, 0, 0, canvasElement3.width, canvasElement3.height);

    // Convert the canvas content to a data URL representing a PNG image
    let imageDataURL = canvasElement3.toDataURL('image/png');

    // Display the captured image
    capturedImageElement3.src = imageDataURL;
    capturedImageElement3.style.display = 'block';

    // Stop the camera stream
    stopCamera3();
  }
}
function retakePicture3() {
    // Hide the captured image
    capturedImageElement3.style.display = 'none';

    // Stop the camera stream
    stopCamera3();

    // Reopen the camera for retake
    openCamera3();
  }
function stopCamera3() {
  if (stream3) {
    let tracks = stream3.getTracks();

    // Stop all tracks
    tracks.forEach(track => track.stop());

    // Remove the stream from the video element
    videoElement3.srcObject = null;
  }
}
