//SHOWING PATIENT FORM 
const open_patient_form = ()=>{
    const hide_content_landing_page = document.querySelector('.contents');
    const open_patient_forms = document.querySelector('.patients_form_container');

    hide_content_landing_page.style.display = 'none';
    open_patient_forms.style.display = 'block';
}



//CONTENT PAGE LINKS TO DIFFERENT SECTION
const patientForm = function(){
    let url = 'patient-registration-form/';
    window.parent(location = (url));
}
const appoimentBooking = function(){
  const hide_content_page  = document.querySelector(".contents");
  hide_content_page.style.display="none";

  const show_appoitment_container = document.querySelector(".appoitment_section");
  show_appoitment_container.classList.remove("hide");
  document.querySelector("#btn_appoitment").style.display = "block";
}

const surgicalChemistry = function(){
    const hide_content_page  = document.querySelector(".contents");
    hide_content_page.style.display="none";

    const show_surgical_chemistry_page = document.querySelector(".surgical_booking");
    show_surgical_chemistry_page.classList.remove("hide");
}

const patient_list = ()=>{
    let url = "page/patients-lists.php";
    window.parent(location = (url));
}

//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
profile_container.classList.toggle("hide");
};






const activeSection = document.querySelector(".current-section");
const inactiveSection = document.querySelector(".form-section");
const section1 = document.querySelector("#section1");
const section2 = document.querySelector("#section2");
const section3 = document.querySelector("#section3");
const btnNext = document.querySelector(".btn-next");
const btnNextNext = document.querySelector(".btn-next_next");
const btnBack = document.querySelector(".btn-back");
const btnBackBack = document.querySelector(".btn-back_back");

//Current section
 section1.classList.add("current-section");
 section2.classList.remove("current-section");
 section3.classList.remove("current-section")

 btnNext.style.display = "block";
 btnNextNext.style.display = "block";
 btnBack.style.display = "block";

const nextForm =  btnNext.addEventListener("click", function(){
     section1.classList.remove("current-section");
     section3.classList.add("current-section");
     btnNext.style.display = "block";
     let upload_image = document.querySelector(".upload_image");
     upload_image.style.display = "none";
     const showClickButton = document.querySelector(".btn_capture")
     showClickButton.classList.add("hide");
 
     const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
     showClickButtonForRecapture.classList.add("hide")
  
 });
const nextNextForm =  btnNextNext.addEventListener("click", function(){
     section3.classList.remove("current-section");
     section2.classList.add("current-section");
     btnNextNext.style.display = "block";
     let upload_image = document.querySelector(".upload_image");
     upload_image.style.display = "none";

     const showClickButton = document.querySelector(".btn_capture")
     showClickButton.classList.add("hide");
 
     const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
     showClickButtonForRecapture.classList.add("hide")
  
 });


 const backForm = btnBack.addEventListener("click", function(){
     section3.classList.add("current-section");
     section2.classList.remove("current-section");
     btnNext.style.display = "block";
     const showClickButton = document.querySelector(".btn_capture")
     showClickButton.classList.add("hide");
 
     const showClickButtonForRecapture = document.querySelector(".btn_re_capture")
     showClickButtonForRecapture.classList.add("hide")
     
 })
 const backBackForm = btnBackBack.addEventListener("click", function(){
     section1.classList.add("current-section");
     section3.classList.remove("current-section");
     btnNextNext.style.display = "block";
     let upload_image = document.querySelector(".upload_image");
     upload_image.style.display = "block";
     
 })


 //dashboardPage link
 const dashboard = ()=>{
     let url = "../index.php";
     window.parent(location=(url))
 }


//FAMILY PLAN
const selectBox  = document.querySelector("#select_box");
const family_plan = document.querySelector(".family_plan")

selectBox.addEventListener("change", function(){
  if(selectBox.value === "family_plan"){
    family_plan.classList.remove("hide");
  }else{
    family_plan.classList.add("hide");
  }
});

const family_check_true = document.querySelector("#family_check_true");
const family_check_false = document.querySelector("#family_check_false");
const check_input_family_id_number = document.querySelector(".input_family_id_number")

const handleCheckboxFamiilyChange = ()=>{
    if(family_check_true.checked){
      family_check_false.disabled = true;
      check_input_family_id_number.classList.remove("hide");
      family_plan.classList.add("hide");
    }else{
      family_check_false.disabled = false;
    }

    if(family_check_false.checked){
      family_check_true.disabled = true;
    }else{
      family_check_true.disabled = false;
    }
}

family_check_true.addEventListener("change", handleCheckboxFamiilyChange);
family_check_false.addEventListener("change", handleCheckboxFamiilyChange);




//GENDER
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
//  const check_category1 = document.querySelector(".check_category1")
//  const check_category2= document.querySelector(".check_category2")
//  const check_category3 = document.querySelector(".check_category3")
//  const check_category4 = document.querySelector(".check_category4")
//  const check_category5 = document.querySelector(".check_category5")
//  const check_category6 = document.querySelector(".check_category6")


// const handleCheckboxCategoryChange1 = ()=>{
 //checked 1
    //  if(check_category1.checked){
    //      check_category2.disabled = true;
    //      check_category3.disabled = true;
    //      check_category4.disabled = true;
    //      check_category5.disabled = true;
    //      check_category6.disabled = true;
    //   document.querySelector(".ward").classList.remove("hidden")
    //  }else{
    //      check_category2.disabled = false;
    //      check_category3.disabled = false;
    //      check_category4.disabled = false;
    //      check_category5.disabled = false;
    //      check_category6.disabled = false;
    //      document.querySelector(".ward").classList.add("hidden")
    //  }
   
    //  }


//for checked2
//      const handleCheckboxCategoryChange2 = ()=>{

//      if(check_category2.checked){
//          check_category1.disabled = true;
//          check_category3.disabled = true;
//          check_category4.disabled = true;
//          check_category5.disabled = true;
//          check_category6.disabled = true;
//      }else{
//          check_category1.disabled = false;
//          check_category3.disabled = false;
//          check_category4.disabled = false;
//          check_category5.disabled = false;
//          check_category6.disabled = false;
//      }
//  }

     //for checked 3
//      const handleCheckboxCategoryChange3 = ()=>{
//      if(check_category3.checked){
//          check_category1.disabled = true;
//          check_category2.disabled = true;
//          check_category4.disabled = true;
//          check_category5.disabled = true;
//          check_category6.disabled = true;
//      }else{
//          check_category1.disabled = false;
//          check_category2.disabled = false;
//          check_category4.disabled = false;
//          check_category5.disabled = false;
//          check_category6.disabled = false;
//      }
//  }
     //for checked 4
//      const handleCheckboxCategoryChange4 = ()=>{
//      if(check_category4.checked){
//          check_category1.disabled = true;
//          check_category2.disabled = true;
//          check_category3.disabled = true;
//          check_category5.disabled = true;
//          check_category6.disabled = true;
//      }else{
//          check_category1.disabled = false;
//          check_category2.disabled = false;
//          check_category3.disabled = false;
//          check_category5.disabled = false;
//          check_category6.disabled = false;
//      }
//  }
     //for checked 5
//      const handleCheckboxCategoryChange5 = ()=>{
//      if(check_category5.checked){
//          check_category1.disabled = true;
//          check_category2.disabled = true;
//          check_category3.disabled = true;
//          check_category4.disabled = true;
//          check_category6.disabled = true;
//      }else{
//          check_category1.disabled = false;
//          check_category2.disabled = false;
//          check_category3.disabled = false;
//          check_category4.disabled = false;
//          check_category6.disabled = false;
//      }
//  }
     //for checked 6
//      const handleCheckboxCategoryChange6 = ()=>{
//      if(check_category6.checked){
//          check_category1.disabled = true;
//          check_category2.disabled = true;
//          check_category3.disabled = true;
//          check_category4.disabled = true;
//          check_category5.disabled = true;
//      }else{
//          check_category1.disabled = false;
//          check_category2.disabled = false;
//          check_category3.disabled = false;
//          check_category4.disabled = false;
//          check_category5.disabled = false;
//      }
//  }

// check_category1.addEventListener('change', handleCheckboxCategoryChange1);
// check_category2.addEventListener('change', handleCheckboxCategoryChange2);
// check_category3.addEventListener('change', handleCheckboxCategoryChange3);
// check_category4.addEventListener('change', handleCheckboxCategoryChange4);
// check_category5.addEventListener('change', handleCheckboxCategoryChange5);
// check_category6.addEventListener('change', handleCheckboxCategoryChange6);



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

//DOCTOR
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
  
  function getDoctors() {
    const selectedRole = document.getElementById('roles').value;
    const doctorsSelect = document.getElementById('doctors');
    doctorsSelect.innerHTML = ''; // Clear previous options
  
    // Populate the doctors select box based on the selected role
    // doctorsData[selectedRole].forEach(doctor => {
    //     const option = document.createElement('option');
    //     option.value = doctor;
    //     option.text = doctor;
    //     doctorsSelect.appendChild(option);
    // });
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
  
  
  //BOOK AN APPOINTMENT
  const appoitment_booking = ()=>{
      const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
      form_doctor_roles_name.classList.remove("hide");
  
  }
  const close_appoitment_form = ()=>{
    const form_doctor_roles_name = document.querySelector(".doctor_roles_name");
    form_doctor_roles_name.classList.add("hide");
}

  
  //dont show appoitment booking button
  document.querySelector("#btn_appoitment").style.display = "none";
  
  
  const submitRoles = ()=>{
      const appoitment_form = document.querySelector(".appoitment_form");
      appoitment_form.classList.remove("hidden");
  }
  
 

  ///SURGICAL BOOKING
