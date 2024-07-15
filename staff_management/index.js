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

// Function to remove no data message
function removeNoDataMessage(tableBody, noDataMessage) {
  if (tableBody.contains(noDataMessage)) {
      tableBody.removeChild(noDataMessage);
  }
}
function createNoDataMessage() {
  const noDataMessage = document.createElement('tr');
  noDataMessage.innerHTML = '<td colspan="9">No data available</td>';
  return noDataMessage;
}
const noDataMessage = createNoDataMessage()



document.addEventListener('DOMContentLoaded', async () => {
  const dataExist = await fetchDataFromServer();
  if(!dataExist) {
    staffList.appendChild(noDataMessage);
    console.log('No data available')
  }
  else{
    console.log('Data fetch successfully');
    removeNoDataMessage(staffList, noDataMessage);
  }
});


// Selectors
const staffFormInput = document.querySelectorAll('#staffFormInput input');
const staffFormSelect = document.querySelectorAll('#staffFormInput select');
const registerStaffButton = document.querySelector('#registerStaff'); 
const staffList = document.querySelector('#staffList tbody');
const videoElement = document.getElementById('passportVideo');
const canvasElement = document.getElementById('canvasPassport');
const capturedPassportElement = document.getElementById('capturedPassport'); 
const captureImage = document.getElementById('captureImage');
const recaptureImage = document.getElementById('recaptureImage');
const openCamera = document.getElementById('openCamera');
const captureDiv = document.querySelector('.capture__div');
let stream;




// Open camera
openCamera.addEventListener('click', () => {
  navigator.mediaDevices.getUserMedia({ video: true })
      .then((cameraStream) => {
          stream = cameraStream;
          videoElement.srcObject = cameraStream;
          captureDiv.classList.remove('hide');
          openCamera.classList.add('hide');
      })
      .catch((error) => {
          alert('Error accessing Camera, please check if your camera is on');
      });
});

// Stop camera
const stopCamera = function() {
  if (stream) {
      let track = stream.getTracks();
      track.forEach((track) => track.stop());
      videoElement.srcObject = null;
  }
};

// Capture image
captureImage.addEventListener('click', () => {
  let context = canvasElement.getContext('2d');
  canvasElement.width = videoElement.videoWidth;
  canvasElement.height = videoElement.videoHeight;
  context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
  let passportUrl = canvasElement.toDataURL('image/png');
  capturedPassportElement.src = passportUrl; 
  capturedPassportElement.style.display = 'block';
  canvasElement.classList.add('hide');
  stopCamera();
});

// Recapture image
recaptureImage.addEventListener('click', () => {
  capturedPassportElement.style.display = 'none';
  canvasElement.classList.remove('hide');
  stopCamera();
  openCamera.click();
});

// Register staff
const registerStaff = async function() {
  if (!isInputValid(staffFormInput)) {
      warningMessage('Please fill all input fields');
  } else if (!isEmailValid('staffEmail')) {
      warningMessage('Please input a valid email');
  } else if (!isPhoneNumberValid('staffPhoneNumber')) {
      warningMessage('Please input a valid phone number');
  } else if (!inputChecked('maleCheckbox') && !inputChecked('femaleCheckbox')) {
      warningMessage('Please select your gender');
      nod
  } else {
      successMessage('Staff Registered Successfully');
      removeNoDataMessage(staffList, noDataMessage);
    
      function getSelectedGender() {
          const maleCheckbox = document.getElementById('maleCheckbox');
          const femaleCheckbox = document.getElementById('femaleCheckbox');
          return maleCheckbox.checked ? 'male' : femaleCheckbox.checked ? 'female' : null;
      }

      const formData = new FormData();
      formData.append('staffName', document.getElementById('staffName').value);
      formData.append('staffId', generateId());
      formData.append('dateOfBirth', document.getElementById('dateOfBirth').value);
      formData.append('gender', getSelectedGender());
      formData.append('staffAddress', document.getElementById('address').value);
      formData.append('staffPhoneNumber', document.getElementById('staffPhoneNumber').value);
      formData.append('staffEmail', document.getElementById('staffEmail').value);
      formData.append('staffPosition', document.getElementById('staffPosition').value);
      formData.append('staffDepartment', document.getElementById('staffDepartment').value);
      formData.append('employmentType', document.getElementById('employmentType').value);
      formData.append('dateOfHire', document.getElementById('dateOfHire').value);
      formData.append('salaryrate', document.getElementById('salaryrate').value);
      formData.append('bankName', document.getElementById('bankName').value);
      formData.append('bankAccountNumber', document.getElementById('bankAccountNumber').value);
      formData.append('AccountName', document.getElementById('AccountName').value);


      // Add the new file inputs to formData
      formData.append('qualification', document.getElementById('qualification').files[0]);
      formData.append('certification', document.getElementById('certification').files[0]);
      formData.append('resume', document.getElementById('resume').files[0]);

      



      // Add captured image to formData
      canvasElement.toBlob(async (blob) => {
          formData.append('capturedImage', blob, 'captured.png');

          try {
              const response = await fetch('http://localhost:5000/api/staffRegistrationForm', {
                  method: 'POST',
                  body: formData
              });

              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }

              const data = await response.json();
              console.log('Data from server:', data); // Debugging line
              if (data.staffEntry) {
                  newStaffList(staffList, data.staffEntry);
              } else {
                  console.error('staffEntry is undefined in the response');
              }
              console.log('Form submitted successfully:', data);
          } catch (error) {
              console.error('Error submitting form:', error);
          }
      }, 'image/png');
  }
};

document.getElementById('registerStaff').addEventListener('click', registerStaff);

// Create no data message
function createNoDataMessage() {
  const noDataRow = document.createElement('tr');
  const noDataCell = document.createElement('td');
  noDataCell.colSpan = 9;
  noDataCell.textContent = 'No staff data available';
  noDataRow.appendChild(noDataCell);
  return noDataRow;
}

function removeNoDataMessage(staffList) {
  const noDataMessage = staffList.querySelector('tr');
  if (noDataMessage && noDataMessage.textContent === 'No staff data available') {
    staffList.removeChild(noDataMessage);
  }
}
async function fetchDataFromServer() {
  try {
      const response = await fetch('http://localhost:5000/api/staffRegistrationForm');
      if (!response.ok) {
          throw new Error('Network response was not ok');
      }
      const data = await response.json();
      
      if (data.result > 0) {
          // Populate your staff list with the fetched data
          data.staffData.forEach(staff => {
              newStaffList(staffList, staff);
          });
          return true; // Data exists
      } else {
          return false; // No data
      }
  } catch (error) {
      console.error('Error fetching data:', error);
      return false; // Return false if an error occurs
  }
}



// Add new staff to the list
const newStaffList = function(staffList, staff) {
  const rowCount = staffList.rows.length +1;
  const newRow = staffList.insertRow();
  newRow.insertCell(0).innerHTML = rowCount;

  const imageCell = newRow.insertCell(1);
  const image = document.createElement('img');
  image.src = staff.capturedImage; // Assuming staff.capturedImage is a base64 string from the server
  image.alt = 'Staff Passport';
  image.style.width = '50px'; // Adjust size as needed
  image.style.height = '50px'; // Adjust size as needed
  imageCell.appendChild(image);

  newRow.insertCell(2).innerHTML = staff.formData.staffName;
  newRow.insertCell(3).innerHTML = staff.formData.staffId;
  newRow.insertCell(4).innerHTML = staff.formData.gender;
  newRow.insertCell(5).innerHTML = staff.formData.staffEmail;
  newRow.insertCell(6).innerHTML = staff.formData.staffPosition;
  newRow.insertCell(7).innerHTML = staff.formData.staffDepartment;
  newRow.insertCell(8).innerHTML = `<div class="notActiveStaff"></div>`;
};





const fetchStaffProfile = async function(staffId) {
  try {
    const response = await fetch(`http://localhost:5000/api/v1/staffProfile/${staffId}`);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const data = await response.json();
    if (data.status === 'success') {
      displayStaffProfile(data.staffProfile);
      return true; // Indicate success
    } else {
      console.log('Staff not found');
      warningMessage('Staff not found');
      return false; // Indicate failure
    }
  } catch (error) {
    console.log('Error fetching data', error);
    warningMessage('Error fetching data');
    return false; // Indicate failure
  }
};



// Function to display staff profile (you can customize this as needed)
const displayStaffProfile = function(staffProfile) {
  let staffName= staffProfile.formData.staffName;
  let staffid = staffProfile.formData.staffId;
  let dateOfBirth = staffProfile.formData.dateOfBirth;
  let gender = staffProfile.formData.gender;
  let staffAddress = staffProfile.formData.staffAddress;
  let staffPhoneNumber = staffProfile.formData.staffPhoneNumber;
  let staffEmail = staffProfile.formData.staffEmail;
  let staffDepartment = staffProfile.formData.staffDepartment;
  let salaryrate = staffProfile.formData.salaryrate;
  let bankName = staffProfile.formData.bankName;
  let bankAccountNumber = staffProfile.formData.bankAccountNumber;
  let AccountName = staffProfile.formData.AccountName;
  let employmentType = staffProfile.formData.employmentType;
  let dateOfHire = staffProfile.formData.dateOfHire;
  let staffImage = staffProfile.capturedImage; 
  let qualification = staffProfile.qualifications.qualification;
  let certification = staffProfile.qualifications.certification;
  let resume = staffProfile.qualifications.resume;
  let popUp = document.createElement("div");
  popUp.innerHTML = `
         <div class="modal hidden" id="selectOption">
           <button class="btn_submit" id="deleteStaff">Delete Staff</button>
           <button class="btn_submit" id="checkProfile">Check Staff Profile</button>
           <button class="btn_submit" id="printPayroll">Print Staff Payroll</button>
           <button class="btn_submit" id="closePopup">Close</button>
         </div>
         `;
         document.querySelector('body').appendChild(popUp);
         openModal('selectOption');

         document.getElementById('checkProfile').addEventListener('click', ()=>{
          const existingModal = document.getElementById('staffProfile');
                  if (existingModal) {
                    existingModal.remove();
                  }
                  
                  // Create the staff profile modal dynamically
                 const staffProfile = document.createElement('div');
                  staffProfile.innerHTML = `
                    <div class="modal hidden" id="staffProfile">
                      <div class="staffPro">
                        <img src="${staffImage}" alt="staff Image">
                        <div class="staffInfo">
                          <div class="userNameId">
                            <div>${staffName} <br/> ${staffid}</div>
                          <div id="viewMoreData">View staff informations</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  `;
                  document.body.appendChild(staffProfile);
                  closeModal('selectOption');
                  openModal('staffProfile')



                    // Add event listener for "view more" link
        document.getElementById('viewMoreData').addEventListener('click', function(e) {
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

          
              column1.innerHTML = `
             Staff name:  ${staffName} <br/>Staff Id: ${staffid} <br/> Staff date of birth: ${dateOfBirth} </br>Staff gender: ${gender} <br/> Staff address: ${staffAddress} </br/> Staff phonenumber: ${staffPhoneNumber} </br> Staff email: ${staffEmail}
              `


              column2.innerHTML = `
              Staff department: ${staffDepartment} </br> Staff employment type${employmentType} <br/> Date of hire: ${dateOfHire}
              `


        
                const certificationPdf = document.createElement('a');
                const qualificationPdf = document.createElement('a');
                const resumePdf = document.createElement('a');

      
                certificationPdf.href = certification;
                certificationPdf.download = 'certificate.pdf';
                certificationPdf.id = "downloadIcon";
                certificationPdf.innerHTML = 'Staff Certificate: <i class="bi bi-download"></i> <br/>';

                qualificationPdf.href = qualification;
                qualificationPdf.download = 'qualification.pdf';
                qualificationPdf.id = "downloadIcon";
                qualificationPdf.innerHTML = 'Staff Qualification: <i class="bi bi-download"></i> <br/>';


                resumePdf.href = resume
                resumePdf.download = 'resume.pdf';
                resumePdf.id = "downloadIcon";
                resumePdf.innerHTML = 'Staff Resume: <i class="bi bi-download"></i>';


                column3.appendChild(certificationPdf);
                column3.appendChild(qualificationPdf);
                column3.appendChild(resumePdf);


              column4.innerHTML = `
              Salary Rate: ${salaryrate} <br/>Bank name: ${bankName} <br/> Staff account number${bankAccountNumber} <br/> Staff account name${AccountName}
              `
              row1.appendChild(column1);
              row1.appendChild(column2);
              row1.appendChild(column3);
              row1.appendChild(column4);
              staffData.appendChild(row1);
          });
         })

         document.getElementById('closePopup').addEventListener('click', function() {
                  closeModal('selectOption')
        });
};






// Event listener to handle click on the staff list
document.getElementById('staffList').addEventListener('click', async function(event) {
  const target = event.target.closest('tr');
  if (target && target.children.length > 3) {
    const staffId = target.children[3].textContent;
    if (staffId) {
      const success = await fetchStaffProfile(staffId);
      if (!success) {
        warningMessage('Staff not found');
      }
    } else {
      warningMessage('Invalid staff ID');
    }
  } else {
    warningMessage('No staff data available');
  }
});


document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closeModal('staffInfo');
    closeModal('staffProfile');
  }
});

// Show Clock In Modal
function showClockInModal() {
  closeModal('staffTracking');
  openModal('clockInForm');
}

// Show Clock Out Modal
function showClockOutModal() {
  closeModal('staffTracking');
  openModal('clockOutForm');
}
// Clock In Function
document.getElementById('clockInButton').addEventListener('click', function() {
  const staffId = document.getElementById('clockInStaffId').value;
  if (!staffId) return warningMessage('Please enter your Staff ID');

  // Fetch staff profile first
  fetch(`http://localhost:5000/api/v1/staffProfile/${staffId}`)
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        const { staffProfile } = data;
        const staffName = staffProfile.formData.staffName; // Adjust based on your data structure
        const staffImage = staffProfile.capturedImage; // Adjust based on your data structure

        // Create and show the staff profile modal
        const staffProfileModal = document.createElement('div');
        staffProfileModal.className = 'modal';
        staffProfileModal.id = 'staffProfile';
        staffProfileModal.innerHTML = `
          <button class="btn--close-modal" onclick="closeModal('staffProfile')">&times;</button>
          <div class="staffPro">
            <img src="${staffImage}" alt="Staff Image">
            <div class="staffInfo">
              <div class="userNameId">
                <div>${staffName} <br/> ${staffId}</div>
                <button id="clockInNowButton" class="btn_submit">Clock In Now</button>
              </div>
            </div>
          </div>
        `;
        document.body.appendChild(staffProfileModal);
        closeModal('clockInForm');
        openModal('staffProfile');

        
        // Add event listener for the Clock In Now button
        document.getElementById('clockInNowButton').addEventListener('click', function() {
          closeModal('staffProfile');
          openModal('fingerPrint'); // Show fingerprint modal

          // Simulate fingerprint authentication (remove this when backend is ready)
          setTimeout(function() {
            document.getElementById('greenColourFingerPrint').style.color = 'green';
          }, 3000);

          setTimeout(() => {
            document.getElementById('greenColourFingerPrint').style.color = ''; // Reset color
            closeModal('fingerPrint');
            fetch(`http://localhost:5000/api/v1/clockinstaff/${staffId}`, {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              }
            })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                successMessage(`Clocked in at ${data.time}`);
                closeModal('staffProfile');
                updateClockInTable(staffId, staffName, staffImage);
              } else {
                warningMessage(data.message);
              }
            })
            .catch(error => console.error('Error:', error));
          }, 5000); // Simulate fingerprint scanning delay
        });
      } else {
        throw new Error(data.message);
      }
    })
    .catch(error => console.error('Error:', error));
});

// Function to update clock-in table
function updateClockInTable(staffId, staffName, staffImage) {
  const tableBody = document.getElementById('clockinStaffs').querySelector('tbody');
  const newRow = document.createElement('tr');

  const serialNumberCell = document.createElement('td');
  serialNumberCell.textContent = tableBody.rows.length + 1;

  const profileCell = document.createElement('td');
  const profileImage = document.createElement('img');
  profileImage.src = staffImage;
  profileImage.alt = 'Staff Image';
  profileImage.width = 50; // Adjust the width as needed
  profileCell.appendChild(profileImage);

  const staffNameCell = document.createElement('td');
  staffNameCell.textContent = staffName;

  const staffIdCell = document.createElement('td');
  staffIdCell.textContent = staffId;

  newRow.appendChild(serialNumberCell);
  newRow.appendChild(profileCell);
  newRow.appendChild(staffNameCell);
  newRow.appendChild(staffIdCell);

  tableBody.appendChild(newRow);

  // Optionally show the table if it's hidden
  const clockinStaffDiv = document.getElementById('clockinStaff');
  if (clockinStaffDiv.classList.contains('hide')) {
    clockinStaffDiv.classList.remove('hide');
    document.getElementById('staffList').classList.add('hide');
  }
}




// Clock Out Function
document.getElementById('clockOutButton').addEventListener('click', function() {
  const staffId = document.getElementById('clockOutStaffId').value;
  if (!staffId) return warningMessage('Please enter your Staff ID');

  // Fetch staff profile first
  fetch(`http://localhost:5000/api/v1/staffProfile/${staffId}`)
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        const { staffProfile } = data;
        const staffName = staffProfile.formData.staffName; // Adjust based on your data structure
        const staffImage = staffProfile.capturedImage; // Adjust based on your data structure

        // Create and show the staff profile modal
        const staffProfileModal = document.createElement('div');
        staffProfileModal.className = 'modal';
        staffProfileModal.id = 'staffProfile';
        staffProfileModal.innerHTML = `
          <button class="btn--close-modal" onclick="closeModal('staffProfile')">&times;</button>
          <div class="staffPro">
            <img src="${staffImage}" alt="Staff Image">
            <div class="staffInfo">
              <div class="userNameId">
                <div>${staffName} <br/> ${staffId}</div>
                <button id="clockOutNowButton" class="btn_submit">Clock Out Now</button>
              </div>
            </div>
          </div>
        `;
        document.body.appendChild(staffProfileModal);
        closeModal('clockOutForm');
        openModal('staffProfile');

        // Add event listener for the Clock Out Now button
        document.getElementById('clockOutNowButton').addEventListener('click', function() {
          closeModal('staffProfile');
          openModal('fingerPrint'); // Show fingerprint modal

          // Simulate fingerprint authentication (remove this when backend is ready)
          setTimeout(function() {
            document.getElementById('greenColourFingerPrint').style.color = 'green';
            closeModal('staffProfile');
          }, 3000);

          setTimeout(() => {
            document.getElementById('greenColourFingerPrint').style.color = ''; // Reset color
            closeModal('staffProfile');
            closeModal('fingerPrint');
            fetch(`http://localhost:5000/api/v1/clockoutstaff/${staffId}`, {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              }
            })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                successMessage(`Clocked out at ${data.time}`);
                closeModal('staffProfile');
                window.location.reload();
              } else {
                warningMessage(data.message);
              }
            })
            .catch(error => console.error('Error:', error));
          }, 5000); // Simulate fingerprint scanning delay
        });
      } else {
        warningMessage(data.message);
        // throw new Error(data.message);
      }
    })
    .catch(error => console.error('Error:', error));
});