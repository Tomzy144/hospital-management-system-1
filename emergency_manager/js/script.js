    //PROFILE IMAGE
    function displayUserProfile(){
        document.querySelector(".profile_account").classList.toggle("hide");
    };



    const sections = document.querySelectorAll('.section');
    const allProfiles = document.querySelectorAll('.allProfiles');
    const links = document.querySelectorAll('.sidebar-body ul li');
    // const message = document.createElement('div');
  
    function toggleSidebarLinks(clickedLink){
        links.forEach(link => link.classList.remove('active'));
        clickedLink.classList.add('active');
     }
    links.forEach(link => {
        link.addEventListener('click', function() {
            toggleSidebarLinks(this);
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


const messageContainer = document.createElement('div');
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


function addRowToTable(tableBody, patientId) {
        const rowCount = tableBody.rows.length + 1;
        const newRow = tableBody.insertRow();

        const fullName = document.querySelector('#fullName').value;
        const causeOfIncident = document.querySelector('#coi').value;
        const dateOfIncident = document.querySelector('#doi').value;
        const timeOfIncident = document.querySelector('#toi').value;
        
        const aliveStatus = document.createElement('div');
        const deadStatus = document.createElement('div');
        deadStatus.className = 'red'
        aliveStatus.className = 'green'


        newRow.insertCell(0).innerHTML = rowCount;
        newRow.insertCell(1).innerHTML =fullName; // Use the passed ID
        newRow.insertCell(2).innerHTML = patientId;
        newRow.insertCell(3).innerHTML = causeOfIncident;
        newRow.insertCell(4).innerHTML = dateOfIncident;
        newRow.insertCell(5).innerHTML = timeOfIncident;
        const statusCell =  newRow.insertCell(6);
        statusCell.appendChild(aliveStatus)
//    statusCell.appendChild(deadStatus)
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






////////////////////////////////////////////BOOK APPOITMENT////////////////////////// && TRANSFER///////////////////
const appoitment__div = document.querySelector('.appoitment__div');
function bookPatient(){
    const patient = document.querySelectorAll('#TableData tbody');
    patient.forEach(patient => {
       patient.addEventListener('click', function(e){
        const message = document.createElement('div');
          
           const formInput = document.querySelectorAll('#bookForm #select_doc, #bookForm input,#bookForm textarea');
           console.log(formInput);
           const patientName = e.target.closest('tr').children[1].innerHTML;
           const patientId = e.target.closest('tr').children[2].innerHTML;

           formInput[0].value = patientName
           formInput[1].value = patientId
           message.innerHTML = `
            <div>PATIENT: ${patientName.toUpperCase()}<br/> ID:  ${patientId.toUpperCase()}</div><br/>
            <div id ="sections">
            <ul>
                <li><button class="btn_submit" type="button" data-section="nurse">Call in Nurse</button><li>
                <li><button class="btn_submit" type="button" data-section="doctor">Call in Doctor</button><li>
                <li><button class="btn_submit" type="button" data-section="rad">Transfer to Radiology</button><li>
                <li><button class="btn_submit" type="button" data-section="lab">Transfer to Labouratory</button><li>
                <li><button class="btn_submit" type="button" data-section="matanity">Transfer to Matanity</button><li>
                <li><button class="btn_submit" type="button" data-section="icu">Transfer to ICU</button><li>
                <li><button class="btn_submit" type="button" data-section="surgicalSuite">Transfer to Surgical Suite</button><li>
            </ul>
            </div>
            `
            message.className = 'alert_div'
            message.style.color = 'rgb(42, 87, 215)',
            message.style.backgroundColor = '#fff'
            message.style.maxWidth = '500px'
            document.querySelector('body').prepend(message);

            const sectionButtons = document.querySelectorAll('#sections button');
            const originalFormContent = document.querySelector('#bookForm').innerHTML;
           
            sectionButtons.forEach((section) => {
                section.addEventListener('click', () => {
                    const sectionName = section.getAttribute('data-section');
                    const sectionText = section.innerHTML;
                    console.log(sectionText);
                    const form = document.querySelector('#bookForm');
                    form.innerHTML = originalFormContent;

                    if (sectionName === 'nurse' || sectionName === 'lab' || sectionName === 'rad' || sectionName === 'maternity' || sectionName === 'icu' || sectionName === 'surgicalSuite') {
                        document.querySelector('.appoitment__div h3').innerHTML = `Available ${sectionText}`.toUpperCase();
                        const selectElements = document.querySelectorAll('#bookForm .availableDoctor');
        
                        selectElements.forEach(element => {
                            element.remove();
                        });
                        
                        appoitment__div.classList.remove('hide');
                    } else {
                        document.querySelector('.appoitment__div h3').innerHTML = `Available ${sectionText}`.toUpperCase();
                        const sectionForm = appoitment__div.children[2];
                        console.log(sectionForm)
                        appoitment__div.classList.remove('hide');
                    }
            })
           })
       })
    })
}
document.querySelectorAll('.cancle').forEach(closeElement => {
    closeElement.addEventListener('click', () => {
        appoitment__div.classList.add('hide');
    });
    });
   
bookPatient()



function updateUI(sectionToShow, sectionToHide, linkToActivate, linkToDeactivate) {
    document.querySelector(sectionToShow).classList.remove('hide');
    document.querySelector(sectionToHide).classList.add('hide');
    document.querySelector(linkToActivate).classList.add('active');
    document.querySelector(linkToDeactivate).classList.remove('active');
}

function updateUIAfterSubmission() {
    updateUI('#emergency_list_section', '.container', '#emergency__link', '#emergency__form__link');
}

function emergencyForm() {
    updateUI('.container', '#emergency_list_section', '#emergency__form__link', '#emergency__link');
}

function emergencyList() {
    updateUI('#emergency_list_section', '.container', '#emergency__link', '#emergency__form__link');
}


emergencyForm(); // Initial UI state