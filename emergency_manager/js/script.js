    //PROFILE IMAGE
    function displayUserProfile(){
        document.querySelector(".profile_account").classList.toggle("hide");
    };


    
  
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
/////////////////////////////////////////////////////////////////////////////////////////////////



function createNoDataMessage() {
    const noDataMessage = document.createElement('tr');
    noDataMessage.innerHTML = '<td colspan="7" style="text-align: center;">No data</td>';
    return noDataMessage;
}

function isFormValid(inputs) {
    for (const input of inputs) {
        if (input.value.trim() === '') {
            return false;
        }
    }
    return true;
}

function isInputChecked(selector) {
    const inputElement = document.querySelector(selector);
    if (!inputElement) {
        console.error('No element found with the given selector.');
        return false;
    }
    return inputElement.checked;
 }

    function isPhoneNumberValid(selector) {
        const phoneNumber = document.querySelector(selector).value.trim();
        const isNumeric = /^\d+$/.test(phoneNumber);
        const startsWith090 = phoneNumber.startsWith('090');
        const startsWith081 = phoneNumber.startsWith('081');
        const startsWith080 = phoneNumber.startsWith('080');
        const startsWith091 = phoneNumber.startsWith('091');
        const startsWith442 = phoneNumber.startsWith('442');

        return phoneNumber.length === 10 && isNumeric && startsWith090 || startsWith081 || startsWith080 || startsWith091 || startsWith442 ;
    }

function showMessage(message, text, backgroundColor) {
    message.className = 'alert_div';
    message.innerHTML = text;
    message.style.backgroundColor = backgroundColor;
    document.querySelector('body').prepend(message);
    setTimeout(() => message.classList.add('hide'), 3000);
}

function removeNoDataMessage(tableBody, noDataMessage) {
    if (tableBody.contains(noDataMessage)) {
        tableBody.removeChild(noDataMessage);
    }
}
function generateId() {
    return`EMG${Math.floor(Math.random() * 1000)}`
}


let messageContainer = document.createElement('div');
document.body.appendChild(messageContainer);

const createAlertMessage = (text, className, duration = 5000) => {
  const message = document.createElement('div');
  message.className = className + ' alert';
  message.innerHTML = `
    <div class="content">
    <div class="message">
      <div class="icon">
        <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
        </div>
        <h2>${text}</h2>
        </div>
    </div>
  `;
  messageContainer.appendChild(message);
  setTimeout(() => {
    message.classList.add('hide');
    setTimeout(() => message.remove(), 500); 
  }, duration);
  return message;
}

const successMessage = (text) => createAlertMessage(text, 'success');
const infoMessage = (text) => createAlertMessage(text, 'info');
const warningMessage = (text) => createAlertMessage(text, 'warning');
const dangerMessage = (text) => createAlertMessage(text, 'danger', 4000); 



    function EmergencyPatient() {
    const emergencyInputData = document.querySelectorAll('#emergencyInputData .emergencyInput');
        let oppositeGender;
        function saveOppositeGender() {
      const maleCheckbox = document.getElementById('maleCheckbox');
      const femaleCheckbox = document.getElementById('femaleCheckbox');
      maleCheckbox.addEventListener('change', () => {
        if (maleCheckbox.checked) oppositeGender = 'female';
      });
      femaleCheckbox.addEventListener('change', () => {
        if (femaleCheckbox.checked) oppositeGender = 'male';
      });
    }
    saveOppositeGender();

        if (!isFormValid(emergencyInputData)) {
            warningMessage('Please input field');
        } else if (!isPhoneNumberValid('#contactNumber')) {
            warningMessage('Invalid Phone Number');
        }else if(!isInputChecked('#maleCheckbox') && !isInputChecked('#femaleCheckbox')){
            warningMessage('Select Gender');
        }
         else {
            const fullName = document.getElementById('fullName');
            const dob = document.getElementById('dob');
            const gender = oppositeGender
            const address = document.getElementById('address');
            const emergencyFullName = document.getElementById('efullName');
            const contactNumber = document.getElementById('contactNumber');
            const relationship = document.getElementById('relationship');
            const dateOfIncident = document.getElementById('doi');
            const timeOfIncident = document.getElementById('toi');
            const causeOfIncident = document.getElementById('coi');

                  var action = 'surgical_procedure';
                    var dataString = "action=" + action + "&fullName=" + fullName + "&dob=" + dob + "&gender=" + gender + "&address=" + address + "&emergencyFullName="+ emergencyFullName + "&contactNumber="+ contactNumber + "&relationship="+ relationship + "&dateOfIncident="+ dateOfIncident + "&timeOfIncident="+ timeOfIncident + "&causeOfIncident="+ causeOfIncident ;

      $.ajax({
          type: 'POST',
          url: "config/code.php",
          data: dataString,
          cache: false,
          dataType: 'json',
          success: function (data) {
              if (data.check === "success") {
                  successMessage('Patient has been transferred to the Surgical suit successfully')
                  $btnSubmit.html('Transfer');
                  $btnSubmit.prop('disabled', false);
                  close_tranfer_patient_lab();
              } else {
                  console.error('Error:', data.error);
                  dangerMessage('Error:', data.error);
                  $btnSubmit.html(btnText);
                  $btnSubmit.prop('disabled', false);
              }
          },
          error: function (xhr, status, error) {
              console.error('AJAX Error:', error);
              dangerMessage('Error:', data.error);
              $btnSubmit.html(btnText);
              $btnSubmit.prop('disabled', false);
          }
      });
        }
}







function filterAvailablePatient() {
    const tableBody = document.querySelector('#TableData tbody');
    const tableRows = Array.from(tableBody.querySelectorAll('tr')); // Convert NodeList to Array
    const searchInput = document.querySelector('#searchInput').value.trim().toLowerCase();

    let hasVisibleRows = false;
    tableRows.forEach((row) => {
        if (row.children.length < 2)  return;

        const patientName = row.children[1].textContent.trim().toLowerCase();
        const patientId = row.children[2].textContent.trim().toLowerCase();
        if (patientName.includes(searchInput) || patientId.includes(searchInput)){
            row.style.display = ''; // Show the row
            hasVisibleRows = true;
           
        } else row.style.display = 'none'; // Hide the row
    });

    const existingNoDataMessage = document.querySelector('#noDataMessage');
    if (existingNoDataMessage) {
        existingNoDataMessage.remove();
    }
    if (!hasVisibleRows) {
        const noDataMessage = document.createElement('tr');
        noDataMessage.id = 'noDataMessage';
        noDataMessage.innerHTML = '<td colspan="8" style="text-align: center;">No User associated with this input</td>';
        tableBody.appendChild(noDataMessage);
    }
}
document.querySelector('#searchInput').addEventListener('input', filterAvailablePatient);


