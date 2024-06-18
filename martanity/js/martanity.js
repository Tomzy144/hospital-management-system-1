  function displayUserProfile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };

  const sections = document.querySelectorAll('.section');
  const allProfiles = document.querySelectorAll('.allProfiles');
  const links = document.querySelectorAll('.sidebar-body ul li');
  const message = document.createElement('div');

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
        message.remove()
        showSection(this.id.replace('_link', '_section'));
        allProfiles.forEach(profile =>!profile.classList.contains('hide') ? profile.classList.add('hide') : null);
        console.log(allProfiles);
      });
    });
  

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
setInterval(() => createDate())




function anternatalForm(){
  const emergencyInputData = document.querySelectorAll('#anternatal_unit_section .anternatalInput');
  const message = document.createElement('div'); 

  document.querySelector('#submitAnternatalForm').addEventListener('click', function(event) {
    let isFormValid = true;
    AnternatalData.forEach(function(input) {
      if (input.value === '') {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      let patientName = document.querySelector('#anternatal__patient__name').value;
      message.className = 'alert_div';
      message.innerHTML = `Form submitted <br/> Patient Name: ${patientName}`.toUpperCase();
      message.style.backgroundColor = '#37383d';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
}
anternatalForm();


const postnatalForm = function() {
  const postnatalData = document.querySelectorAll('#postnatal_unit_section .postnalInput');
  const message = document.createElement('div'); 

  document.querySelector('#submitPostnatalForm').addEventListener('click', function(event) {
    let isFormValid = true;

    postnatalData.forEach(function(input) {
      if (input.value === '') {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      let patientName = document.querySelector('#postnatal_patient_name').value;
      message.className = 'alert_div';
      message.innerHTML = `Form submitted <br/> Patient Name: ${patientName}`.toUpperCase();
      message.style.backgroundColor = '#37383d';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
};
postnatalForm();


const labourForm = function(){
  const labourData = document.querySelectorAll('#labour_unit_section .labourInput');
  const message = document.createElement('div'); 
  document.querySelector('#submitLaborForm').addEventListener('click', function(event) {
    let isFormValid = true;
    labourData.forEach(function(input) {
      if (input.value === '') {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      let patientName = document.querySelector('#labour_patient_name').value; 
      message.className = 'alert_div';
      message.innerHTML = `Form submitted <br/> Patient Name: ${patientName}`.toUpperCase();
      message.style.backgroundColor = '#37383d';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
}
labourForm()




const hospitalRoleForBookingPatient = ['Nurse', 'Doctor', 'Lab', 'Radiology'];
function booking() {
  const sections = document.querySelectorAll('.section');
  const children = Array.from(sections)
  let grandchildren = [];
  children.forEach(child => {
      grandchildren.push(...Array.from(child.children));
      grandchildren.includes('table_container') 
  });
  message.className = 'alert_div';
  message.innerHTML = `
    <div>
      <ul class="unorderlist">
        <li class="lists" id="doc">Doctor Booking</li>
        <li class="lists" id="lab">Laboratory Booking</li>
        <li class="lists" id="rad">Radiology Booking</li> 
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
  patientIdInput.value = patientId;
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
    button.addEventListener('click', handleBookPatientClick);
  });
}

function handleBookPatientClick(event) {
  event.stopPropagation();
  const button = event.currentTarget;
  const patientProfile = button.closest('#patientProfile');
  const rows = patientProfile.children;
  const patientName = rows[2].textContent;
  const patientId = rows[3].textContent;
  const message = booking();
  document.body.prepend(message);
  hospitalRoleForBookingPatient.forEach(role => {
    document.body.insertAdjacentHTML('afterbegin', createAppointmentForm(role));
    setPatientDetails(role.toLowerCase(), patientName, patientId);
    document.getElementById(`${role.toLowerCase()}CancelButton`).addEventListener('click', () => {
      hideAppointmentForm(role);
    });
  });

  document.getElementById('doc').addEventListener('click', () => {
    showAppointmentForm('Doctor');
  });
  document.getElementById('lab').addEventListener('click', () => {
    showAppointmentForm('Lab');
  });
  document.getElementById('rad').addEventListener('click', () => {
    showAppointmentForm('Radiology');
  });
}
bookPatient();



function openPatientProfile() {
  const allProfiles = document.querySelectorAll('.allProfiles');
  const displayPatientNameId = document.querySelectorAll('.displayPatientNameIdContainer');
  document.querySelectorAll('#patientProfile').forEach(function(patientRow) {
    patientRow.addEventListener('click', function(){
      const rowType = patientRow.parentElement.parentElement.parentElement.children[0].children[0].innerHTML.split(' ')[0];
      displayPatientNameId.forEach(function(nameId) {
        nameId.innerHTML = `<div>${patientRow.children[2].innerHTML}</div> <br/> <div>${patientRow.children[3].innerHTML}</div>`;
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


function drugPrescription(section) {
  var form = document.querySelector(`#${section} form`);
  if (!form) {
    console.error(`Form not found for section: ${section}`);
    return;
  }
  var drugsInput = form.querySelector(`#drug${section.slice(-1)}`).value;
  var drugsStrengthInput = form.querySelector(`#drug_strength${section.slice(-1)}`).value;
  var drugModeSelect = form.querySelector(`#drug_mode${section.slice(-1)}`);
  var drugFreqSelect = form.querySelector(`#drug_freq${section.slice(-1)}`);
  var drugQtyInput = form.querySelector(`#drug_qty${section.slice(-1)}`).value;
  var drugModeSelectedText = drugModeSelect.options[drugModeSelect.selectedIndex].text;
  var drugFreqSelectedText = drugFreqSelect.options[drugFreqSelect.selectedIndex].text;
  var table = document.querySelector(`#dataTable${section.slice(-1)} tbody`);
  if (!table) {
    console.error(`Table not found for section: ${section}`);
    return;
  }
  var newRow = table.insertRow(table.rows.length);
  newRow.insertCell(0).innerHTML = drugsInput;
  newRow.insertCell(1).innerHTML = drugsStrengthInput;
  newRow.insertCell(2).innerHTML = drugModeSelectedText;
  newRow.insertCell(3).innerHTML = drugFreqSelectedText;
  newRow.insertCell(4).innerHTML = drugQtyInput;

  // Clear input fields
  form.querySelector(`#drug${section.slice(-1)}`).value = '';
  form.querySelector(`#drug_strength${section.slice(-1)}`).value = '';
  drugModeSelect.selectedIndex = 0;
  drugFreqSelect.selectedIndex = 0;
  form.querySelector(`#drug_qty${section.slice(-1)}`).value = '';
}

function add_drugs() {
  var addButtons = document.querySelectorAll('.add__drug');
  addButtons.forEach(button => {
    button.addEventListener('click', function() {
      var section = this.getAttribute('data-section');
      console.log(`Add button clicked for section: ${section}`);
      drugPrescription(section);
    });
  });
}

document.addEventListener('DOMContentLoaded', add_drugs);




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function getAnternatalPatientInput(){
  const patientAnternatalVitalInput = document.querySelectorAll('#patientAnternatalVitalInput ._input');
  const message = document.createElement('div'); 
  document.querySelector('#updateAnternatalPatientData').addEventListener('click', function(event) {
    let isFormValid = true;
    patientAnternatalVitalInput.forEach(function(input) {
      if (input.value === '' ) {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      message.className = 'alert_div';
      message.innerHTML = `Form submitted`
      message.style.backgroundColor = '#37383d';
     const inputValue =  document.querySelectorAll('._input')
     inputValue.forEach((value) => {
      value.value = ''
      if (value.type === 'radio') {
        value.checked = false;
      }
     })
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
}
getAnternatalPatientInput()



function getPostnatalPatientInput(){
  const patientPostnatalVitalInput = document.querySelectorAll('#patientPostnatalVitalInput ._input');
  const message = document.createElement('div'); 
  document.querySelector('#updatePostnatalPatientData').addEventListener('click', function(event) {
    let isFormValid = true;
    patientPostnatalVitalInput.forEach(function(input) {
      if (input.value === '' ) {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      message.className = 'alert_div';
      message.innerHTML = `Form submitted`
      message.style.backgroundColor = '#37383d';
     const inputValue =  document.querySelectorAll('._input')
     inputValue.forEach((value) => {
      value.value = ''
     })
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
}
getPostnatalPatientInput()



function getLabourPatientInput(){
  const patientLabourVitalInput = document.querySelectorAll('#patientLabourVitalInput ._input');
  const message = document.createElement('div'); 
  document.querySelector('#updateLabourPatientData').addEventListener('click', function(event) {
    let isFormValid = true;
    patientLabourVitalInput.forEach(function(input) {
      if (input.value === '' ) {
        isFormValid = false;
      }
    });
    if (!isFormValid) {
      message.className = 'alert_div';
      message.innerHTML = 'Alert!! <br/>Fill all fields';
      message.style.backgroundColor = 'red';
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
      event.preventDefault(); // Prevent form submission
    } else {
      message.className = 'alert_div';
      message.innerHTML = `Form submitted`
      message.style.backgroundColor = '#37383d';
     const inputValue =  document.querySelectorAll('._input')
     inputValue.forEach((value) => {
      value.value = ''
     } )
      document.querySelector('body').prepend(message);
      setTimeout(function() {
        message.classList.add('hide');
      }, 3000);
    }
  });
}
getLabourPatientInput()



function transferPatient(){
 const transferPatient =  document.querySelectorAll('#transferPatient');
 transferPatient.forEach((button)=>{
  button.addEventListener('click', function(e){
    e.stopPropagation();
   const row =  button.closest('tr').children
   const patientName = row[2].textContent
   const patientId= row[3].textContent
    const section =   button.closest('#labour_patient_list_section')  ? 'Postnatal Unit'  : 'Labour Unit';
      message.className = 'alert_div';
      message.innerHTML = `Are you sure you want to transfer Patient ${patientName} with an Id of ${patientId} to the ${section} <br/> <button class="btn_submit" type="button" id="transferToLabour">Yes</button> <button class="btn_submit" type="button" id="rejectTransferToLabour">No</button>`;
      message.style.backgroundColor = 'white';
      message.style.color = 'rgb(42, 87, 215)'
      document.querySelector('body').prepend(message);
  })
 })
}
transferPatient();















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
  console.log(navigator.mediaDevices.getUserMedia({ video: true }));
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

//////////////////////////////////////////////Thats all for kingsley script////////////////////////////////////////////////////////////////////////////////