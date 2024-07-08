'use strict';

///////////////////////////////////////
// Modal window
const modal = document.querySelector('.modal');
const blackBlur = document.querySelector('.black_blur');
const btnCloseModal = document.querySelector('.btn--close-modal');
const btnsOpenModal = document.querySelectorAll('.btn--show-modal');


const openModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.remove('hidden');
  blackBlur.classList.remove('hidden');
};

const closeModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.add('hidden');
  blackBlur.classList.add('hidden');
};
////////////////////////////////////////////////////////////////////


function displayUserProfile(){
    document.querySelector(".profile_account").classList.toggle("hide");
};
//////////////////////////////////////////

const sections = document.querySelectorAll('.section');
const allProfiles = document.querySelectorAll('.allProfiles');
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

const message = document.createElement('div');
const successMessage = function(text){
message.className= 'success alert';
message.innerHTML = `
  <div class="content">
      <div class="icon">
      <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
    </div>
      <h2>${text}</h2>
    </div>
`;
document.querySelector('body').appendChild(message);
setTimeout(() => message.classList.add('hide'),3000);
}

const infoMessage = function(text){
message.className= 'info alert';
message.innerHTML = text;
document.querySelector('body').appendChild(message);
setTimeout(() => message.classList.add('hide'),3000);
}
const warningMessage = function(text){
message.className= 'warning alert';
message.innerHTML = `
  <div class="content">
      <div class="icon">
      <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
    </div>
      <h2>${text}</h2>
    </div>
`;
document.querySelector('body').appendChild(message);
setTimeout(() => message.classList.add('hide'),3000);
}
const dangerMessage = function(text){
message.className= 'danger alert';
message.innerHTML = text;
document.querySelector('body').appendChild(message);
setTimeout(() => message.classList.add('hide'),3000);
}


function createNoDataMessage() {
const noDataMessage = document.createElement('tr');
noDataMessage.innerHTML = '<td colspan="11" style="text-align: center;">No data</td>';
return noDataMessage;
}
////////////////////////////////////////////

//Validate All Input Fields
function isInputValid(inputs) {
for (const input of inputs) {
    if (input.value.trim() === '') return false;
}
return true;
}
function isEmailValid(inputId) {
    const email = document.getElementById(inputId).value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}
function areSelectsValid(selects) {
    let allValid = true;
    selects.forEach(select => {
      if (select.value === "") {
        allValid = false;
      }
    });
    return allValid;
  }

const isNumberValid = function(numeric){
const number = document.querySelector(numeric).value
if(!+number) return false;
return true;
}
const inputChecked = function(checked){
const input = document.getElementById(checked);
if(!input) return false;
return input.checked;
}

function generateId() {
return`STAFF${Math.floor(Math.random() * 1000)}`
}
function isPhoneNumberValid(selector) {
  const phoneNumber = document.getElementById(selector).value.trim();
  const isNumeric = /^\d+$/.test(phoneNumber); 
  const startsWith090 = phoneNumber.startsWith('090');
  const startsWith081 = phoneNumber.startsWith('081');
  const startsWith080 = phoneNumber.startsWith('080');
  const startsWith091 = phoneNumber.startsWith('091');
  const startsWith442 = phoneNumber.startsWith('442');

  return phoneNumber.length === 11 && isNumeric && (
      startsWith090 || 
      startsWith081 || 
      startsWith080 || 
      startsWith091 || 
      startsWith442
  );
}
function removeNoDataMessage(tableBody, noDataMessage) {
if (tableBody.contains(noDataMessage)) {
    tableBody.removeChild(noDataMessage);
}
}
///////////////////////////////////////////////
let staffDb;
document.addEventListener('DOMContentLoaded', function() {
  loadStaffData();
});

// Function to load and render staff data from localStorage
function loadStaffData() {
   staffDb = JSON.parse(localStorage.getItem('formData')) || [];
  
  const staffList = document.querySelector('#staffList tbody');
  staffList.innerHTML = ''; // Clear existing rows

  if (staffDb.length === 0) {
    const noStaffList = createNoDataMessage();
    staffList.append(noStaffList);
  } else {
    staffDb.forEach(staff => {
      newStaffList(staffList, staff);
    });
  }
}

const staffFormInput = document.querySelectorAll('#staffFormInput input');
const staffFormSelect = document.querySelectorAll('#staffFormInput select');
const registerStaffButton = document.querySelector('#registerStaff'); // Changed to querySelector
const staffList = document.querySelector('#staffList tbody');
let videoElement = document.getElementById('passportVideo');
let canvasElement = document.getElementById('canvasPassport');
let capturedPassportElement = document.getElementById('capturedPassport'); // Fixed typo
let captureImage = document.getElementById('captureImage');
let recaptureImage = document.getElementById('recaptureImage');
const openCamera = document.getElementById('openCamera');
const capture__div = document.querySelector('.capture__div');
let stream;

openCamera.addEventListener('click', () => {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then((cameraStream) => {
      stream = cameraStream;
      videoElement.srcObject = cameraStream;
      capture__div.classList.remove('hide');
      openCamera.classList.add('hide');
    })
    .catch((error) => {
      alert('Error accessing Camera, please check if your camera is on');
    });
});

const stopCamera = function() {
  if (stream) {
    let track = stream.getTracks();
    track.forEach((track) => track.stop());
    videoElement.srcObject = null;
  }
};

captureImage.addEventListener('click', () => {
  let context = canvasElement.getContext('2d');
  canvasElement.width = videoElement.videoWidth;
  canvasElement.height = videoElement.videoHeight;
  context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
  let passportUrl = canvasElement.toDataURL('image/png');
  capturedPassportElement.src = passportUrl; // Fixed typo
  capturedPassportElement.style.display = 'block';
  canvasElement.classList.add('hide');
  stopCamera();
});

recaptureImage.addEventListener('click', () => {
  capturedPassportElement.style.display = 'none';
  canvasElement.classList.remove('hide');
  stopCamera();
  openCamera.click();
});

registerStaffButton.addEventListener('click', () => { // Changed to registerStaffButton
  if (!isInputValid(staffFormInput)) {
    warningMessage('Please Input Field');
  } else if (!isEmailValid('staffEmail')) {
    warningMessage('Please Input a Valid Email');
  } else if (!isPhoneNumberValid('staffPhoneNumber')) {
    warningMessage('Please Input a Valid Phone Number');
  } else if (!inputChecked('maleCheckbox') && !inputChecked('femaleCheckbox')) {
    warningMessage('Please Select your Gender');
  } else {
    // If all validations pass, proceed with staff registration
    removeNoDataMessage(staffList);
    const staffId = generateId();
    successMessage('Staff Registered Successfully');

    let staffDb = JSON.parse(localStorage.getItem('formData')) || [];
    const form = document.getElementById('staffFormInput');
    const formData = new FormData(form);
    const data = {};

    formData.forEach((value, key) => {
      data[key] = value;
    });

    // Function to read file and store in localStorage
    function readFile(inputId, key, callback) {
      const fileInput = document.getElementById(inputId);
      const file = fileInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (event) => {
          const pdfData = event.target.result;
          data[key] = pdfData;
          callback();
        };
        reader.readAsDataURL(file);
      } else {
        alert('Please select a PDF file for ' + key + '.');
      }
    }

    let filesProcessed = 0;
    const totalFiles = 3; // Total number of file inputs

    function checkCompletion() {
      filesProcessed++;
      if (filesProcessed === totalFiles) {
        // All files have been processed
        data.passport = capturedPassportElement.src; // Include captured passport photo
        data.staffId = staffId;
        staffDb.push(data);
        localStorage.setItem('formData', JSON.stringify(staffDb));
        newStaffList(staffList, data); // Assuming you have this function defined
        window.location.reload();
      }
    }

    // Process each file input
    readFile('qualification', 'qualificationPdf', checkCompletion);
    readFile('cerification', 'certificationPdf', checkCompletion); // Fixed ID
    readFile('resume', 'resumePdf', checkCompletion);
  }
});





















const newStaffList = function(staffList, staff) {
  const rowCount = staffList.rows.length + 1;
  const newRow = staffList.insertRow();
  newRow.insertCell(0).innerHTML = rowCount;
  const imageCell = newRow.insertCell(1);
  const images = document.createElement('img');
  images.src = staff.passport;
  images.alt = 'Staff Passport';
  images.style.width = '50px'; // Adjust size as needed
  images.style.height = '50px'; // Adjust size as needed
  imageCell.appendChild(images);

  newRow.insertCell(2).innerHTML = staff.staffName;
  newRow.insertCell(3).innerHTML = staff.staffId;
  newRow.insertCell(4).innerHTML = staff.gender;
  newRow.insertCell(5).innerHTML = staff.staffEmail;
  newRow.insertCell(6).innerHTML = staff.jobPosition;
  newRow.insertCell(7).innerHTML = staff.staffDepartment;
  newRow.insertCell(8).innerHTML = staff.staffStatus;
  newRow.insertCell(9).innerHTML = `<div class="notActiveStaff"></div>`;
};



// Function to handle staff list actions
const eachStaff = function() {
  staffList.addEventListener('click', function(e) {
    let staffName;
    let staffId;
    let popup;
    let staffPassport;

    // Check if the staff list contains noStaffList
    if(staffDb.length === 0) {
      warningMessage('No staff list found');
      return; 
    } else {
      // Create and show the options modal
      popup = document.createElement('div');
      staffName = e.target.closest('tr').children[2].textContent;
      staffId = e.target.closest('tr').children[3].textContent;
      staffDb.forEach(function(staff){
        if(staff.staffId === staffId) {
         staffPassport = staff.passport;
        }
      })

      popup.innerHTML = `
      <div class="modal hidden" id="selectOption">
        <button class="btn_submit" id="editStaffBtn">Edit Staff Information</button>
        <button class="btn_submit" id="checkProfileBtn">Check Staff Profile</button>
        <button class="btn_submit" id="printPayrollBtn1">Print Staff Payroll</button>
        <button class="btn_submit" id="closePopupBtn">Close</button>
      </div>
      `;
      document.querySelector('body').appendChild(popup);
      openModal('selectOption');

      // Add event listeners for the buttons
      document.getElementById('editStaffBtn').addEventListener('click', function(){
        openModal('staffForm');
        popup.remove();
      });

      document.getElementById('checkProfileBtn').addEventListener('click', function() {
        // Remove the existing profile modal if it exists
        const existingModal = document.getElementById('staffProfile');
        if (existingModal) {
          existingModal.remove();
        }
        
        // Create the staff profile modal dynamically
        const staffProfile = document.createElement('div');
        staffProfile.innerHTML = `
          <div class="modal hidden" id="staffProfile">
            <div class="staffPro">
              <img src="${staffPassport}" alt="staff Image">
              <div class="staffInfo">
                <div class="userNameId">
                  <div>${staffName} <br/> ${staffId}</div>
                <div id="viewmore">View more staff info</div>
                </div>
              </div>
            </div>
          </div>
        `;
        
        document.body.appendChild(staffProfile);
        closeModal('selectOption');

        // Add event listener for "view more" link
        document.querySelector('#viewmore').addEventListener('click', function(e) {
          e.preventDefault();
          closeModal('selectOption');
          closeModal('staffProfile');
          openModal('staffInfo');

          const row1 = document.createElement('tr');
          const column1 = document.createElement('td');
          const column2 = document.createElement('td');
          const column3 = document.createElement('td');
          const column4 = document.createElement('td');
          const staffData = document.querySelector('#staffData tbody');
           staffDb.forEach(staff => {
            if(staff.staffId === staffId){
              console.log(staff)
              column1.innerHTML = `
             Staff name:  ${staff.staffName} <br/>Staff Id: ${staff.staffId} <br/> Staff date of birth: ${staff.dob} </br>Staff gender: ${staff.gender} <br/> Staff address: ${staff.address} </br/> Staff phonenumber: ${staff.staffPhoneNumber} </br> Staff email: ${staff.staffEmail}
              `


              column2.innerHTML = `
              Staff employment id: ${staff.employmentId} </br> Staff job title: ${staff.jobPosition} <br/> Staff department: ${staff.staffDepartment} </br> Staff employment type${staff.employmentType} <br/> Date of hire: ${staff.doh} <br/> Staff Status: ${staff.staffStatus}
              `


              if (staff.staffId === staffId && staff.certificationPdf) {
                const certificationPdf = document.createElement('a');
                const qualificationPdf = document.createElement('a');
                const resumePdf = document.createElement('a');



                certificationPdf.href = staff.certificationPdf;
                console.log(staff.certificationPdf);
                certificationPdf.download = 'certificate.pdf';
                certificationPdf.id = "downloadIcon";
                certificationPdf.innerHTML = 'Staff Certificate: <i class="bi bi-download"></i> <br/>';

                qualificationPdf.href = staff.qualificationPdf;
                console.log(staff.qualificationPdf);
                qualificationPdf.download = 'qualification.pdf';
                qualificationPdf.id = "downloadIcon";
                qualificationPdf.innerHTML = 'Staff Qualification: <i class="bi bi-download"></i> <br/>';


                resumePdf.href = staff.resumePdf;
                console.log(staff.qualificationPdf);
                resumePdf.download = 'resume.pdf';
                resumePdf.id = "downloadIcon";
                resumePdf.innerHTML = 'Staff Resume: <i class="bi bi-download"></i>';



                column3.appendChild(certificationPdf);
                column3.appendChild(qualificationPdf);
                column3.appendChild(resumePdf);
                console.log('working');
              }

              column4.innerHTML = `
              Bank name: ${staff.bankName} <br/> Staff account number${staff.bankAccountNumber} <br/> Staff account name${staff.AccountName}
              `

              row1.appendChild(column1);
              row1.appendChild(column2);
              row1.appendChild(column3);
              row1.appendChild(column4);
              staffData.appendChild(row1);
            }
          });

        });

        // Add event listener to close modal on escape key press
        document.addEventListener('keydown', function(event) {
          if (event.key === 'Escape') {
            const staffData = document.querySelector('#staffData tbody');
            closeModal('staffProfile');
            closeModal('staffInfo');
            closeModal('selectOption');
            staffData.innerHTML = '';
          }
        });

        // Open the newly created profile modal
        openModal('staffProfile');
      });

      document.getElementById('printPayrollBtn1').addEventListener('click', function() {
        // Add your code to handle printing staff payroll
      });

      // Add event listener to close the popup
      document.getElementById('closePopupBtn').addEventListener('click', function() {
        closeModal('selectOption')
      });
    }
  });
};

// Initialize the eachStaff function
eachStaff();
