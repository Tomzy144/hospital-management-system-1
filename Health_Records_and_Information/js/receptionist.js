'use strict';
//PROFILE IMAGE
function click_icon_for_profile (){
  document.querySelector(".profile_account").classList.toggle("hide");
}

//CAMERA FOR NEW INTAKE ADMISSION FORM
var videoElement = document.getElementById('videoElement');
var canvasElement = document.getElementById('canvasElement');
var capturedImageElement = document.getElementById('capturedImage');
var stream;

function openCamera() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      stream = cameraStream;
      videoElement.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const capture_image = document.querySelector('#capture_image');
    capture_image.style.display="none"

    const showClickButton = document.querySelector(".btn_capture")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
    showClickButtonForRecapture.classList.remove("hide")
}

function takePicture() {
  if (stream) {
    let context = canvasElement.getContext('2d');
    canvasElement.width = videoElement.videoWidth;
    canvasElement.height = videoElement.videoHeight;
    context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);

    // Convert the canvas content to a data URL representing a PNG image
    let imageDataURL = canvasElement.toDataURL('image/png');

    // Display the captured image
    capturedImageElement.src = imageDataURL;
    capturedImageElement.style.display = 'block';

    // Stop the camera stream
    stopCamera();
  }
}
function retakePicture() {
    // Hide the captured image
    capturedImageElement.style.display = 'none';

    // Stop the camera stream
    stopCamera();

    // Reopen the camera for retake
    openCamera();
  }
function stopCamera() {
  if (stream) {
    let tracks = stream.getTracks();

    // Stop all tracks
    tracks.forEach(track => track.stop());

    // Remove the stream from the video element
    videoElement.srcObject = null;
  }
}

//CAMERA FOR WALKIN PATIENT
var videoElement2 = document.getElementById('walkin_in_section_videoElement');
var canvasElement2 = document.getElementById('walkin_in_section_canvasElement');
var capturedImageElement2 = document.getElementById('walkin_in_section_capturedImage');
var stream2;

function openCamera2() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      stream2 = cameraStream;
      videoElement2.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const walkin_in_section_capture_image = document.querySelector('#walkin_in_section_capture_image');
    walkin_in_section_capture_image.style.display="none"

    const showWalkinClickButton = document.querySelector(".walkin_in_section_btn_capture")
    showWalkinClickButton.classList.remove("hide");

    const showWalkinClickButtonForRecapture = document.querySelector(".walkin_in_section_btn_re_capture")
    showWalkinClickButtonForRecapture.classList.remove("hide")
};

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
};
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
function display_profile(){
  document.querySelector('.all_patient_list').classList.add("hide")
  document.querySelector('.appoitment_section').classList.add("hide")
  document.querySelector('.profile_container').style.display = 'flex';
  document.querySelector('.overlay').classList.remove("hide")
  document.querySelector("#btn_appoitment").style.display = "none"
}
function patient_list(){
  document.querySelector('.form_sections').style.display = 'none';
  document.querySelector('.checkup_section').style.display = 'none';
  document.querySelector('.all_patient_list').classList.remove("hide")
  document.querySelector('.appoitment_section').classList.add("hide")
  document.querySelector("#btn_appoitment").style.display = "none"
  document.querySelector('.profile_container').style.display = 'none';
}

function form_section(){
  document.querySelector('.form_sections').style.display = 'flex';
  document.querySelector('.all_patient_list').classList.add("hide")
  document.querySelector('.checkup_section').style.display = 'block';
  document.querySelector('.appoitment_section').classList.add("hide")
  document.querySelector("#btn_appoitment").style.display = "none"
  document.querySelector('.profile_container').style.display = 'none';
};

function familyPlanSection(){
  document.querySelector('.family_plan_section').classList.toggle("hide");
}
function checkIfFamilyPlan(){
  document.querySelector('#existing_plan_or_not').classList.toggle("hide");
}
function activateFingerPrint(){
  document.querySelector('.finger_print_div').classList.remove("hide");
}
function deactivateFingerPrint(){
  document.querySelector('.finger_print_div').classList.add("hide");
}
function close_profile(){
  document.querySelector('.form_sections').style.display = 'flex';
  document.querySelector('.all_patient_list').classList.add("hide")
  document.querySelector('.appoitment_section').classList.add("hide")
  document.querySelector('.checkup_section').style.display = 'block';
  document.querySelector('.profile_container').style.display = 'none';
  document.querySelector('.overlay').classList.add("hide")
  document.querySelector("#btn_appoitment").style.display = "none"
}


function _show_book_popup() {
  $('#walkin_popup').removeClass('hide');
  $('.overlay').removeClass('hide');
}
function close_show_book_popup() {
  $('#walkin_popup').addClass('hide');
  $('.overlay').addClass('hide');
  };

function lab_appoitment(){
  $('#lab_appoitment').removeClass('hide');
  $('#walkin_popup').addClass('hide');
  $('.overlay').removeClass('hide');
}
function rad_appoitment(){
  $('#rad_appoitment').removeClass('hide');
  $('#walkin_popup').addClass('hide');
  $('.overlay').removeClass('hide');
}


function _close_all_appoitment(){
  $('#lab_appoitment').addClass('hide');
  $('#rad_appoitment').addClass('hide');
  $('#walkin_popup').removeClass('hide');
  $('.overlay').removeClass('hide');
}


function nurse_appoitment(){
  $('#nurse_appoitment').removeClass('hide');
  $('#patient_popup').addClass('hide');
  $('.overlay').removeClass('hide');
}
function _close_all_patient_appoitments() {
  $('#patient_popup').removeClass('hide');
  $('#nurse_appoitment').addClass('hide');
  $('.overlay').removeClass('hide');
}


function _show_patient_transfer_popup() {
  $('#patient_popup').removeClass('hide');
  $('.overlay').removeClass('hide');
}
function close_show_patient_transfer_popup() {
  $('#patient_popup').addClass('hide');
  $('.overlay').addClass('hide');
  };










document.querySelector("#btn_appoitment").style.display = "none"
function appoitment_booking(){
  document.querySelector('.form_sections').style.display = 'none';
  document.querySelector('.all_patient_list').classList.add("hide")
  document.querySelector('.appoitment_section').classList.remove("hide")
  document.querySelector("#btn_appoitment").style.display = "block"
  document.querySelector('.checkup_section').style.display = 'none';
  document.querySelector('.profile_container').style.display = 'none';
  document.querySelector('.overlay').classList.add("hide")
}
function book_appoitment(){
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
 renderCalendar();