//SHOWING PATIENT FORM 
function open_patient_form(){
    const hide_content_landing_page = document.querySelector('.contents');
    const open_patient_forms = document.querySelector('.patients_form_container');

    hide_content_landing_page.style.display = 'none';
    open_patient_forms.style.display = 'block';
}



//CONTENT PAGE LINKS TO DIFFERENT SECTION
function patientForm(){
    let url = 'patient-registration-form/';
    window.parent(location = (url));
}
function appoimentBooking(){
  const hide_content_page  = document.querySelector(".contents");
  hide_content_page.style.display="none";

  const show_appoitment_container = document.querySelector(".appoitment_section");
  show_appoitment_container.classList.remove("hide");
  document.querySelector("#btn_appoitment").style.display = "block";
}

function surgicalChemistry(){
    const hide_content_page  = document.querySelector(".contents");
    hide_content_page.style.display="none";

    const show_surgical_chemistry_page = document.querySelector(".surgical_booking");
    show_surgical_chemistry_page.classList.remove("hide");
}

function patient_list(){
    let url = "page/patients-lists.php";
    window.parent(location = (url));
}

//PROFILE IMAGE

function click_icon_for_profile (){
  const profile_container  =  document.querySelector(".profile_account");
profile_container.classList.toggle("hide");
}






// const activeSection = document.querySelector(".current-section");
// const inactiveSection = document.querySelector(".form-section");
// const section1 = document.querySelector("#section1");
// const section2 = document.querySelector("#section2");
// const section3 = document.querySelector("#section3");
// const btnNext = document.querySelector(".btn-next");
// const btnNextNext = document.querySelector(".btn-next_next");
// const btnBack = document.querySelector(".btn-back");
// const btnBackBack = document.querySelector(".btn-back_back");

//Current section
//  section1.classList.add("current-section");
//  section2.classList.remove("current-section");
//  section3.classList.remove("current-section")

//  btnNext.style.display = "block";
//  btnNextNext.style.display = "block";
//  btnBack.style.display = "block";

// const nextForm =  btnNext.addEventListener("click", function(){
//      section1.classList.remove("current-section");
//      section3.classList.add("current-section");
//      btnNext.style.display = "block";
//      let upload_image = document.querySelector(".upload_image");
//      upload_image.style.display = "none";
//      const showClickButton = document.querySelector(".btn_capture")
//      showClickButton.classList.add("hide");
 
//      const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
//      showClickButtonForRecapture.classList.add("hide")
  
//  });
// const nextNextForm =  btnNextNext.addEventListener("click", function(){
//      section3.classList.remove("current-section");
//      section2.classList.add("current-section");
//      btnNextNext.style.display = "block";
//      let upload_image = document.querySelector(".upload_image");
//      upload_image.style.display = "none";

//      const showClickButton = document.querySelector(".btn_capture")
//      showClickButton.classList.add("hide");
 
//      const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
//      showClickButtonForRecapture.classList.add("hide")
  
//  });


//  const backForm = btnBack.addEventListener("click", function(){
//      section3.classList.add("current-section");
//      section2.classList.remove("current-section");
//      btnNext.style.display = "block";
//      const showClickButton = document.querySelector(".btn_capture")
//      showClickButton.classList.add("hide");
 
//      const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
//      showClickButtonForRecapture.classList.add("hide")
     
//  })
//  const backBackForm = btnBackBack.addEventListener("click", function(){
//      section1.classList.add("current-section");
//      section3.classList.remove("current-section");
//      btnNextNext.style.display = "block";
//      let upload_image = document.querySelector(".upload_image");
//      upload_image.style.display = "block";
     
//  })


 //dashboardPage link
 function dashboard(){
     let url = "../index.php";
     window.parent(location=(url))
 }


//FAMILY PLAN



//camera
let videoElement = document.getElementById('videoElement');
let canvasElement = document.getElementById('canvasElement');
let capturedImageElement = document.getElementById('capturedImage');
let stream;

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




///APPOITMENT

// // DOCTOR
// const doctorsData = {
//     cardiologist: ['Dr. Tomiwa', 'Dr. Johnson'],
//     dermatologist: ['Dr. Kingsley', 'Dr. White'],
//     surgeon:['Dr. Priceless', 'Dr John'],
//     psychiatrist:['Dr. Towa', 'Dr Paul'],
//     family_medicine:['Dr. Praise', 'Dr Trinity'],
//     dermatologist: ['Dr.Tom', 'Dr Ruth' ],
//     anaesthesiology:['Dr. Drake', 'Dr. Drake'],
//     rheumatologist:['Dr. Peace', 'Dr Jude'],
//     endocrinologist:['Dr. Grace', 'Dr. Houston'],
//     nephrologist:['Dr. Goodness', 'Dr Goodnews'],
//     neurologist:['Dr. Goodness', 'Dr.Peace'],
//     pediatrician:['Dr. Fooad', 'Dr. Fooad'],
//     urologist:['Dr. Uro', 'Dr. Fooad'],
//     radiologist:['Dr. Fooad', 'Dr. Fooad'],
//     dentist:['Dr. Gofade', 'Dr. Fooad'],
//     pulmonologist:['Dr. Foatt', 'Dr. Fooad'],
//     podiatristian:['Dr. Foatt', 'Dr. Fogad'],
//     emergency_physician:['Dr. Good', 'Dr. Tom'],
//     anaesthesiologist:['Dr. Green', 'Dr. Green'],
//     cardiologist:['Dr Ben', 'Dr. White'],
//     oncologist:['Dr. Bemson', 'Dr. Green'],
//     gastroenterologist:['Dr. Houston', 'Dr. Green'],
//     ophthanlmologist:['Dr. Jous', 'Dr. King'],
//     cardology:['Dr. Funke', 'Dr Roseline'],
//     allergist:['Dr. Postel', 'Dr.Houston'],
//     orthopedic_surgoen:['Dr.Lookman', 'Dr. Chelsea'],
//   };
  
//   function getDoctors() {
//     const selectedRole = document.getElementById('roles').value;
//     const doctorsSelect = document.getElementById('doctors');
//     doctorsSelect.innerHTML = ''; // Clear previous options
  
//     // Populate the doctors select box based on the selected role
//     doctorsData[selectedRole].forEach(doctor => {
//         const option = document.createElement('option');
//         option.value = doctor;
//         option.text = doctor;
//         doctorsSelect.appendChild(option);
//     });
//   }
  
//   // Initial population of doctors based on the default selected role
//   getDoctors();
  
  
  
//   //CALENDAR
//    //This help show the current date and time zone of today
//    const date =  new Date()
  
//    function renderCalendar(){
//       date.setDate(1)
//       // console.log(date.getDay());
//        //this help shows the current month we are in and its 0 based "which means its counts from 0 throgh the months"
//       //  const month  = date.getMonth()
//        const monthDays = document.querySelector(".days")
//       const lastDay = new Date(date.getFullYear(), date.getMonth() +1, 0).getDate()
      
//       const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate()
      
//       const firstDayIndex = date.getDay() 
      
//       const  lastDayIndex = new Date(date.getFullYear(), date.getMonth() +1, 0).getDay()
//       const nextDays = 7 - lastDayIndex -1
//       //this is the month array of all the selected month
//       const months = [
//           "January", 
//           "February",
//            "March",
//             "April", 
//             "May", 
//             "June", 
//             "July", 
//             "August", 
//             "September",
//              "October", 
//              "November",
//              "December" 
//       ] ; 
      
//       document.querySelector(".date h1").innerHTML = months[date.getMonth()];
//       document.querySelector(".date p").innerHTML = new Date().toDateString();
//       // const showDate =  document.querySelector(".content");
      
//       let days = "";
      
//       for(let x =  firstDayIndex; x>0; x--){
//           days += `<div class ="prev-date">${prevLastDay - x +1}</div>`;
//       }
      
//       for(let i = 1; i <=lastDay; i++) {
//           if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
              
//               days +=`
//               <div class="calendar-date today" onclick="updateClickedDate(${i})">${i}</div>`;
//           }else{
              
//               days +=`
//               <div class="calendar-date" onclick="updateClickedDate(${i})">${i}</div> `;
//           }
//       }
      
//       for(let j =1; j<=nextDays; j++){
//           days += `<div class="next-date">${j}</div>`;
//           monthDays.innerHTML = days;
//       }
//    }
//    function updateClickedDate(clickedDay) {
//       document.querySelector(".selected_date").textContent = `${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
//       document.getElementById('date').value=`${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
//     }
   
   
//    document.querySelector(".prev").addEventListener("click", function(){
//       date.setMonth(date.getMonth() -1)
//       renderCalendar()
//    })
//    document.querySelector(".next").addEventListener("click", function(){
//       date.setMonth(date.getMonth()+ 1)
//       renderCalendar()
//    })
//    renderCalendar()
  
  
  //BOOK AN APPOINTMENT
  function appoitment_booking() {
      const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
      form_doctor_roles_name.classList.remove("hide");
  
  }
  function close_appoitment_form(){
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.add("hide");
}

  
  //dont show appoitment booking button
  // document.querySelector("#btn_appoitment").style.display = "none";
  
  
  function submitRoles(){
      const appoitment_form = document.querySelector(".appoitment_form");
      appoitment_form.classList.remove("hidden");
  }
  
 

//WALKIN PATIENT FORM
function walkin_patient_form(){
  document.querySelector(".contents").style.display = "none";
  document.querySelector(".surgical_booking").classList.add("hide");
  document.querySelector(".appoitment_section").classList.add("hide");
  document.querySelector(".patients_form_container").classList.add("hide");
  document.querySelector(".walkin_patient_section").classList.remove("hide");
}

//WALKIN CAMERA PATIENT FORM
//camera
let walkin_patient_videoElement = document.getElementById('walkin_in_section_videoElement');
let walkin_patient_canvasElement = document.getElementById('walkin_in_section_canvasElement');
let walkin_patient_capturedImageElement = document.getElementById('walkin_in_section_capturedImage');
let walkin_patient_stream;

function walkin_patient_openCamera() {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (cameraStream) {
      walkin_patient_stream = cameraStream;
      walkin_patient_videoElement.srcObject = cameraStream;
    })
    .catch(function (error) {
      console.error('Error accessing the camera: ', error);
    });

    const walkin_in_section_capturedImage = document.querySelector('#walkin_in_section_capturedImage');
    walkin_in_section_capturedImage.style.display="none"

    const walkin_in_section_capture_image = document.querySelector('#walkin_in_section_capture_image');
    walkin_in_section_capture_image.style.display="none"
    
    const showClickButton = document.querySelector(".walkin_in_section_btn_capture")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".walkin_in_section_btn_re_capture")
    showClickButtonForRecapture.classList.remove("hide")
}

function walkin_patient_takePicture() {
  if (walkin_patient_stream) {
    let context = walkin_patient_canvasElement.getContext('2d');
    walkin_patient_canvasElement.width = walkin_patient_videoElement.videoWidth;
    walkin_patient_canvasElement.height = walkin_patient_videoElement.videoHeight;
    context.drawImage(walkin_patient_videoElement, 0, 0, walkin_patient_canvasElement.width, walkin_patient_canvasElement.height);

    // Convert the canvas content to a data URL representing a PNG image
    let imageDataURL = walkin_patient_canvasElement.toDataURL('image/png');

    // Display the captured image
    walkin_patient_capturedImageElement.src = imageDataURL;
    walkin_patient_capturedImageElement.style.display = 'block';

    // Stop the camera stream
    stopCamera();
  }
}
function walkin_patient_retakePicture() {
    // Hide the captured image
    capturedImageElement.style.display = 'none';

    // Stop the camera stream
    walkin_patient_stopCamera();

    // Reopen the camera for retake
    walkin_patient_openCamera();
  }
function walkin_patient_stopCamera() {
  if (walkin_patient_stream) {
    let tracks = walkin_patient_stream.getTracks();

    // Stop all tracks
    tracks.forEach(track => track.stop());

    // Remove the stream from the video element
    walkin_patient_videoElement.srcObject = null;
  }
}

//GENDER
const walkinin_check1 =  document.querySelector(".walkinin_check1")
const walkinin_check2 =  document.querySelector(".walkinin_check2")


function handleCheckboxChangeWalkin() {
    //checked1
  if (walkinin_check1.checked) {
    walkinin_check2.disabled = true;
  } else {
    walkinin_check2.disabled = false;
  }
  
  if (walkinin_check2.checked) {
    walkinin_check1.disabled = true;
  } else {
    walkinin_check1.disabled = false;
  }
}

walkinin_check1.addEventListener('change', handleCheckboxChangeWalkin);
walkinin_check2.addEventListener('change', handleCheckboxChangeWalkin);




//BACK TO HOMEPAGE 
function homepage_section(){
  document.querySelector(".contents").style.display = "flex";
  document.querySelector(".surgical_booking").classList.add("hide");
  document.querySelector(".appoitment_section").classList.add("hide");
  document.querySelector(".patients_form_container").style.display = "none";
  document.querySelector("#btn_appoitment").style.display = "none";
  document.querySelector(".walkin_patient_section").classList.add("hide");
  document.querySelector(".checkup_section").classList.add("hide");
}
//CHECKUP SECTION
function checkup_page(){
  document.querySelector(".contents").style.display = "none";
  document.querySelector(".surgical_booking").classList.add("hide");
  document.querySelector(".appoitment_section").classList.add("hide");
  document.querySelector(".patients_form_container").classList.add("hide");
  document.querySelector(".checkup_section").classList.remove("hide");
  document.querySelector(".walkin_patient_section").classList.add("hide");
}