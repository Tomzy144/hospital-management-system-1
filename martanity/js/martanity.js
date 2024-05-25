  //PROFILE IMAGE
     function displayUserProfile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };
  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.section');
    const links = document.querySelectorAll('.sidebar-body ul li');
  
  function toggleSidebarLinks(clickedLink){
      links.forEach(link => link.classList.remove('active'));
      clickedLink.classList.add('active');
  }
  links.forEach(link => {
      link.addEventListener('click', function() {
          toggleSidebarLinks(this);
      });
  });
  
    function hideAllSections() {
      sections.forEach(section => section.classList.add('hide'));
    }
  
    function showSection(sectionId) {
      document.getElementById(sectionId).classList.remove('hide');
    }
  
    function deactivateAllLinks() {
      links.forEach(link => link.classList.remove('active'));
    }
  
    links.forEach(link => {
      link.addEventListener('click', function() {
        deactivateAllLinks();
        this.classList.add('active');
        hideAllSections();
        showSection(this.id.replace('_link', '_section'));
      });
    });
  });
  




function createDate(){
 const now = new Date();
const options = {
  day:'numeric',
  month:'numeric',
  year:'numeric',
  // weekday:'long',
  hour:'numeric',
  minute:'numeric',
  second:'numeric',
}
const dateTime = new Intl.DateTimeFormat(navigator.language, options).format(now)
 document.querySelector('.display__date').textContent = dateTime
}
setInterval(() => createDate())
const message = document.createElement('div');

function anternatalForm(){
const anternalPatientName = document.querySelector("#anternatal__patient__name");
const anternalPatientDob = document.querySelector("#anternatal__patient__dob");
const anternalPatientAddress = document.querySelector("#anternatal__patient__address");
const anternalPatientPatnerName = document.querySelector("#anternatal__patient__partner__name");
const anternalPatientPhonenumber = document.querySelector("#anternatal__patient__phoneNumber");
const anternalPatientPreviousPregnacies = document.querySelector("#anternatal__patient__previousPregnacies");
const anternalPatientchronicCondition = document.querySelector("#anternatal__patient__chronicCondition");
const anternalPatientAlergies = document.querySelector("#anternatal__patient__alergies");
const anternalPatientCurrentMedication = document.querySelector("#anternatal__patient__currentMedication");
const anternalPatientVitalSign = document.querySelector("#anternatal__patient__vitalSign");
document.querySelector('#submitAnternatalForm').addEventListener('click', function(e){
  e.preventDefault();

  if(anternalPatientName.value == "" || anternalPatientDob.value == "" || anternalPatientAddress.value == "" || anternalPatientPatnerName.value == "" || anternalPatientPhonenumber.value == "" || anternalPatientPreviousPregnacies.value == "" || anternalPatientchronicCondition.value == "" || anternalPatientAlergies.value == "" || anternalPatientCurrentMedication.value == "" || anternalPatientVitalSign.value == ""){
  message.className = 'alert_div'
  message.innerHTML = 'Alert!! <br/>Fill all field';
  document.querySelector('body').prepend(message);
  setTimeout(function(){
    message.classList.add('hide')
  },3000);
    }else{
      message.className = 'alert_div'
      message.innerHTML =`Form submitted <br/> patient Name : ${anternalPatientName.value}`.toLocaleUpperCase();
      message.style.backgroundColor = '#37383d'
      document.querySelector('body').prepend(message);
      setTimeout(function(){
        message.classList.add('hide')
      },3000);
    }
})
}
anternatalForm();

const hospitalRoleForBookingPatient = ['Nurse', 'Doctor', 'Lab', 'Radiology'];
const differentMatanitySection = ['Anternatal Unit', 'Postnatal Unit', 'Labour Unit']
const callInRole = ['iCU', 'Surgical Suite'];

function booking() {
  const sections = document.querySelectorAll('.section');
  console.log(sections);
  const children = Array.from(sections)
  let grandchildren = [];
  children.forEach(child => {
      grandchildren.push(...Array.from(child.children));
  });
  
  console.log(grandchildren);
  const message = document.createElement('div');
  message.className = 'alert_div';
  message.innerHTML = `
    <div>
      <ul class="unorderlist">
        <li class="lists" id="doc">Doctor Booking</li>
        <li class="lists" id="lab">Laboratory Booking</li>
        <li class="lists" id="rad">Radiology Booking</li> 
        <li class="lists" id="transferTo${differentMatanitySection[2]}">Transfer to ${differentMatanitySection[2]}</li>
      </ul>
    </div>`;
  message.style.backgroundColor = '#fff';
  message.style.color = 'rgb(42, 87, 215)';
  return message;


  
}

function createAppointmentForm(role) {
  return `
    <div class="appointment__div" id="${role.toLowerCase()}AppointmentDiv">
      <span>${role} Appointment</span>
      <form action="" id="${role.toLowerCase()}__booking">
        <div class="each_sections">
          <div class="form-control">
            <label for="${role.toLowerCase()}__role">${role} Role</label>
            <select name="${role.toLowerCase()}__role" id="${role.toLowerCase()}__role">
              <option value="surgeon">Surgeon</option>
              <option value="heartDoctor">Heart Doctor</option>
              <option value="dentist">Dentist</option>
            </select>
          </div>
          <div class="form-control">
            <label for="${role.toLowerCase()}__name">${role} Name</label>
            <select name="${role.toLowerCase()}__name" id="${role.toLowerCase()}__name">
              <option value="d1">Kingsley</option>
              <option value="d2">Esther</option>
              <option value="d3">Michael</option>
            </select>
          </div>
        </div>
        <div class="each_sections">
          <div class="form-control">
            <label for="patientName">Patient Name</label>
            <input type="text" id="${role.toLowerCase()}_patient__name">
          </div>
          <div class="form-control">
            <label for="patientId">Patient ID</label>
            <input type="text" id="${role.toLowerCase()}_patientId">
          </div>
        </div>
        <button type="submit" class="btn_submit">Book Appointment</button>
        <button type="button" class="btn_submit" id="${role.toLowerCase()}CancelButton">Cancel Appointment</button>
      </form>
    </div>`;
}

function setPatientDetails(role, patientName, patientId) {
  const patientNameInput = document.querySelector(`#${role.toLowerCase()}_patient__name`);
  const patientIdInput = document.querySelector(`#${role.toLowerCase()}_patientId`);
  patientNameInput.value = patientName;
  console.log(patientNameInput);
  patientIdInput.value = patientId;
  console.log(patientIdInput.value);
}

function showAppointmentForm(role) {
  const appointmentDiv = document.getElementById(`${role.toLowerCase()}AppointmentDiv`);
  if (appointmentDiv.style.display = 'none') {
    appointmentDiv.style.display = 'block';
    document.querySelector('.alert_div').remove();
  }
}

function hideAppointmentForm(role) {
  const appointmentDiv = document.getElementById(`${role.toLowerCase()}AppointmentDiv`);
  appointmentDiv.style.display = 'none'
  window.location.reload();
}

function bookPatient() {
  const bookPatientButtons = document.querySelectorAll('#bookPatient');

  bookPatientButtons.forEach(button => {
    button.addEventListener('click', function (e) {
      e.stopPropagation();
      console.log(button);

      const rows = button.parentElement.parentElement.children;
      const patientName = rows[2].textContent;
      const patientId = rows[3].textContent;
      console.log(patientName);

      const message = booking();
      document.body.prepend(message);

      hospitalRoleForBookingPatient.forEach(role => {
        document.body.insertAdjacentHTML('afterbegin', createAppointmentForm(role));
        setPatientDetails(role.toLowerCase(), patientName, patientId);

        document.getElementById(role.toLowerCase() + 'CancelButton').addEventListener('click', function () {
          hideAppointmentForm(role);
        });
      });

      function transferPatient(){
        const transfer = document.createElement('div');
        transfer.innerHTML = `Are you sure you want to transfer ${patientName} with an Id of ${patientId} to the ${differentMatanitySection[2]}? <br/> <button class="btn_submit" id="transferTrue">Yes</button> <button class="btn_submit" id="transferFalse">No</button>`;
        transfer.className = 'transfer'
        transfer.style.display = 'block';
        document.body.prepend(transfer);
        booking(message.style.display = 'none');

        document.querySelectorAll('#transferTrue').forEach(function(button){
          button.addEventListener('click', function(e){
            e.preventDefault();
            transfer.innerHTML = '';
            transfer.style.backgroundColor = 'green';
            transfer.style.color = '#fff'
            transfer.innerHTML = `Patient ${patientName} with an Id of ${patientId} is been transfered to  ${differentMatanitySection[2]}? `;
            setTimeout(function(){
              transfer.style.display = 'none';
            },3000)
            window.location.reload();
          })
        })

        document.querySelectorAll('#transferFalse').forEach(function(button){
          button.addEventListener('click', function(e){
            e.preventDefault();
            window.location.reload();
          })
        })
      }
      
      document.getElementById(`transferTo${differentMatanitySection[2]}`).addEventListener('click', transferPatient)
      
      document.getElementById('doc').addEventListener('click', function () {
        showAppointmentForm('Doctor');
      });

      document.getElementById('lab').addEventListener('click', function () {
        showAppointmentForm('Lab');
      });

      document.getElementById('rad').addEventListener('click', function () {
        showAppointmentForm('Radiology');
      });
    });
  });
}

bookPatient();


function openPatientProfile() {
  const allProfiles = document.querySelectorAll('.allProfiles');
  const displayPatientNameId = document.querySelectorAll('.displayPatientNameIdContainer');

  document.querySelectorAll('#patientProfile').forEach(function(patientRow) {
    patientRow.addEventListener('click', function() {
      const rowType = patientRow.parentElement.parentElement.parentElement.children[0].children[0].innerHTML.split(' ')[0];
      displayPatientNameId.forEach(function(nameId) {
        nameId.innerHTML = `<div>${patientRow.children[2].innerHTML}</div> <br/> <div>${patientRow.children[3].innerHTML}</div>`;
        console.log(`${patientRow.children[2]}`);
      });

      allProfiles.forEach(function(section) {
        const sections = document.querySelectorAll('.section');
        const sectionId = rowType.toLowerCase() + 'Input';
        console.log(sectionId);

        if (section.id === sectionId) {
          section.classList.remove('hide');
        } else {
          section.classList.add('hide');
          sections.forEach(section => section.classList.add('hide'));
        }
      });
    });
  });
}

openPatientProfile();




//different sections

// function allSection(){
//   const anternatal_form = document.getElementById('anternatal_form');
//   const anternatal_patient__list = document.getElementById('anternatal_patient__list');
//   const anternatalInput = document.getElementById('anternatalInput');
//   const postnatal_form = document.getElementById('postnatal_form');
//   const postnatal_patient__list = document.getElementById('postnatal_patient__list');
//   const postnatalInput = document.getElementById('postnatalInput');
//   const labour_form = document.getElementById('labour_form');
//   const labour_patient__list = document.getElementById('labour_patient__list');
//   const labourInput = document.getElementById('labourInput');
// }





























//ANTENATAL PRESCRIPTION DRUGS BOOKING
function _bookDrugs(){
  $('#antenatal_drugs_booking').removeClass('hide');
}
function _close_bookDrugs(){
  $('#antenatal_drugs_booking').addClass('hide');
}
function addRow() {
  var form = document.querySelector('.drug_prescription #_inputs');

  var drugsInput = form.querySelector('#drug').value;
  var drugsStrengthInput = form.querySelector('#drug_strength').value;
  var drugModeSelect = form.querySelector('#drug_mode');
  var drugFreqSelect = form.querySelector('#drug_freq');
  var drugQtyInput = form.querySelector('#drug_qty').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText = drugModeSelect.options[drugModeSelect.selectedIndex].text;
  var drugFreqSelectedText = drugFreqSelect.options[drugFreqSelect.selectedIndex].text;

  var table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput;
  cells[1].innerHTML = drugsStrengthInput;
  cells[2].innerHTML = drugModeSelectedText; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput;

  // Clear input fields
  form.querySelector('#drug').value = '';
  form.querySelector('#drug_strength').value = '';
  form.querySelector('#drug_mode').selectedIndex = 0;
  form.querySelector('#drug_freq').selectedIndex = 0;
  form.querySelector('#drug_qty').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs(){
$('.add__drug').on('click', function(){
  addRow();
});
}

// Call the function to add drugs
add_drugs();
////////////////////////////////////////////////////////////





//POSTINATAL PRESCRIPTION DRUGS BOOKING
function _bookDrugs2(){
  $('.overlay').removeClass('hide');
  $('#postnatal_drugs_booking').removeClass('hide');
}
function _close_bookDrugs2(){
  $('.overlay').addClass('hide');
  $('#postnatal_drugs_booking').addClass('hide');
}
function addRow2() {
  var form2 = document.querySelector('.drug_prescribtion2 #_inputs2');

  var drugsInput2 = form2.querySelector('#drug2').value;
  var drugsStrengthInput2 = form2.querySelector('#drug_strength2').value;
  var drugModeSelect2 = form2.querySelector('#drug_mode2');
  var drugFreqSelect2 = form2.querySelector('#drug_freq2');
  var drugQtyInput2 = form2.querySelector('#drug_qty2').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText2 = drugModeSelect2.options[drugModeSelect2.selectedIndex].text;
  var drugFreqSelectedText2 = drugFreqSelect2.options[drugFreqSelect2.selectedIndex].text;

  var table = document.getElementById("dataTable2").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput2;
  cells[1].innerHTML = drugsStrengthInput2;
  cells[2].innerHTML = drugModeSelectedText2; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText2; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput2;

  // Clear input fields
  form2.querySelector('#drug2').value = '';
  form2.querySelector('#drug_strength2').value = '';
  form2.querySelector('#drug_mode2').selectedIndex = 0;
  form2.querySelector('#drug_freq2').selectedIndex = 0;
  form2.querySelector('#drug_qty2').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs2(){
$('#add_icon2').on('click', function(){
  addRow2();
    $('#add_selected_postnatal_drugs').removeClass('hide');
  setTimeout(function(){
    $('#add_selected_postnatal_drugs').addClass('hide');
  }, timeInterval)
});
}

// Call the function to add drugs
add_drugs2();



//LABOUR PRESCRIPTION DRUGS BOOKING
function _bookDrugs3(){
  $('.overlay').removeClass('hide');
  $('#labour_drugs_booking').removeClass('hide');
}
function _close_bookDrugs3(){
  $('.overlay').addClass('hide');
  $('#labour_drugs_booking').addClass('hide');
}
function addRow3() {
  var form3 = document.querySelector('.drug_prescribtion3 #_inputs3');

  var drugsInput3 = form3.querySelector('#drug3').value;
  var drugsStrengthInput3 = form3.querySelector('#drug_strength3').value;
  var drugModeSelect3 = form3.querySelector('#drug_mode3');
  var drugFreqSelect3 = form3.querySelector('#drug_freq3');
  var drugQtyInput3 = form3.querySelector('#drug_qty3').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText3 = drugModeSelect3.options[drugModeSelect3.selectedIndex].text;
  var drugFreqSelectedText3 = drugFreqSelect3.options[drugFreqSelect3.selectedIndex].text;

  var table = document.getElementById("dataTable3").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput3;
  cells[1].innerHTML = drugsStrengthInput3;
  cells[2].innerHTML = drugModeSelectedText3; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText3; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput3;

  // Clear input fields
  form3.querySelector('#drug3').value = '';
  form3.querySelector('#drug_strength3').value = '';
  form3.querySelector('#drug_mode3').selectedIndex = 0;
  form3.querySelector('#drug_freq3').selectedIndex = 0;
  form3.querySelector('#drug_qty3').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs3(){
$('#add_icon3').on('click', function(){
  addRow3();
  $('#add_selected_drugs').removeClass('hide');
  setTimeout(function(){
    $('#add_selected_drugs').addClass('hide');
  }, timeInterval)
});
}

// Call the function to add drugs
add_drugs3();
/////////////////////////////////////////////


























//////////////////////////////////////////////CAMERA//////////////////////////////////////////////////



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

    const showClickButton = document.querySelector("#capture_patient2")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector("#recapture_patient2")
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

    const showClickButton = document.querySelector("#capture_patient1")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector("#recapture_patient1")
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

//camera for labour
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

    const showClickButton = document.querySelector("#capture_patient3")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector("#recapture_patient3")
    showClickButtonForRecapture.classList.remove("hide")
}

function takePicture3() {
  if (stream3) {
    let context = canvasElement3.getContext('2d');
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
