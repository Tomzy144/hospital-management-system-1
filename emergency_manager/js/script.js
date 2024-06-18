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
    //   function hideAllSections() {
    //     sections.forEach(section => section.classList.add('hide'));
    //   }
    //   function showSection(sectionId) {
    //     document.getElementById(sectionId).classList.remove('hide');
    //   }
    //   function deactivateAllLinks() {
    //     links.forEach(link => link.classList.remove('active'));
    //   }
    //   links.forEach(link => {
    //     link.addEventListener('click', function() {
    //       deactivateAllLinks();
    //       this.classList.add('active');
    //       hideAllSections();
    //       message.remove()
    //       showSection(this.id.replace('_link', '_section'));
    //       allProfiles.forEach(profile =>!profile.classList.contains('hide') ? profile.classList.add('hide') : null);
    //       console.log(allProfiles);
    //     });
    //   });
    
  
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



//   function EmergencyPatient() {
//     const emergencyInputData = document.querySelectorAll('#emergencyInputData .emergencyInput');
//     const tableBody = document.querySelector('#TableData tbody');
//     const noDataMessage = createNoDataMessage();
//     tableBody.appendChild(noDataMessage);

//     document.getElementById('submitEmergencyInput').addEventListener('click', (event) => {
//         event.preventDefault();
//         const message = document.createElement('div');

//         if (!isFormValid(emergencyInputData)) {
//             showMessage(message, 'Alert!! <br/>Fill all fields', 'red');
//         } else if (!isPhoneNumberValid('#contactNumber')) {
//             showMessage(message, 'Alert!! <br/>Phone number must be a valid 11-digit number', 'red');
//         } else {
//             const patientName = document.querySelector('#fullName').value;
//             const patientId = generateId(); // Generate the ID here
//             const formData = {
//                 patientId,
//                 patientName,
//                 contactNumber: document.querySelector('#contactNumber').value,
//                 causeOfIncident: document.querySelector('#coi').value,
//                 dateOfIncident: document.querySelector('#doi').value,
//                 timeOfIncident: document.querySelector('#toi').value
//             };
//                  // Send the POST request to the server
//                  fetch('/api/emergencyPatient',{
//                     method: 'POST',
//                     body: JSON.stringify(formData),
//                     headers: {
//                         'Content-Type': 'application/json'
//                     },
//                 })
//                 .then(response => response.json())
//                 .then(data => {
//                     console.log('Success:', data);
//                     showMessage(message, `Form submitted <br/> Patient Name: ${patientName} with an ID of ${patientId}`, '#37383d');
//                     removeNoDataMessage(tableBody, noDataMessage);
//                     addRowToTable(tableBody, formData);
//                     updateUIAfterSubmission();
//                 })
//                 .catch((error) => {
//                     console.error('Error:', error);
//                     showMessage(message, 'Error submitting form', 'red');
//                 });
//         }
//     });
// }

// function createNoDataMessage() {
//     const noDataMessage = document.createElement('tr');
//     noDataMessage.innerHTML = '<td colspan="7" style="text-align: center;">No data</td>';
//     return noDataMessage;
// }

// function isFormValid(inputs) {
//     for (const input of inputs) {
//         if (input.value.trim() === '') {
//             return false;
//         }
//     }
//     return true;
// }

// function isPhoneNumberValid(selector) {
//     const phoneNumber = document.querySelector(selector).value;
//     return !isNaN(phoneNumber) && phoneNumber.trim() !== '' && phoneNumber.length === 11;
// }

// function showMessage(message, text, backgroundColor) {
//     message.className = 'alert_div';
//     message.innerHTML = text;
//     message.style.backgroundColor = backgroundColor;
//     document.querySelector('body').prepend(message);
//     setTimeout(() => message.classList.add('hide'), 3000);
// }

// function removeNoDataMessage(tableBody, noDataMessage) {
//     if (tableBody.contains(noDataMessage)) {
//         tableBody.removeChild(noDataMessage);
//     }
// }
// function generateId() {
//     return`EMG${Math.floor(Math.random() * 1000)}`
// }
// function addRowToTable(tableBody, formData) {
//     const rowCount = tableBody.rows.length + 1;
//     const newRow = tableBody.insertRow();


//     newRow.insertCell(0).innerHTML = rowCount;
//     newRow.insertCell(1).innerHTML = formData.patientId;
//     newRow.insertCell(2).innerHTML = formData.patientName;
//     newRow.insertCell(3).innerHTML = formData.causeOfIncident;
//     newRow.insertCell(4).innerHTML = formData.dateOfIncident;
//     newRow.insertCell(5).innerHTML = formData.timeOfIncident;
// }

// function updateUIAfterSubmission() {
//     document.querySelector('#emergency_list_section').classList.remove('hide');
//     document.querySelector('.container').classList.add('hide');
//     document.querySelector('#emergency__link').classList.add('active');
//     document.querySelector('#emergency__form__link').classList.remove('active');
// }

// EmergencyPatient();

// function emergencyForm() {
//     document.querySelector('#emergency_list_section').classList.add('hide');
//     document.querySelector('.container').classList.remove('hide');
//     document.querySelector('#emergency__link').classList.remove('active');
//     document.querySelector('#emergency__form__link').classList.add('active');
// }
// function emergencyList() {
//     document.querySelector('#emergency_list_section').classList.remove('hide');
//     document.querySelector('.container').classList.add('hide');
//     document.querySelector('#emergency__link').classList.add('active');
//     document.querySelector('#emergency__form__link').classList.remove('active');
// }

// emergencyForm()









function EmergencyPatient() {
    const emergencyInputData = document.querySelectorAll('#emergencyInputData .emergencyInput');
    const tableBody = document.querySelector('#TableData tbody');
    const noDataMessage = createNoDataMessage();
    tableBody.appendChild(noDataMessage);

    document.getElementById('submitEmergencyInput').addEventListener('click', (event) => {
    event.preventDefault();
    const message = document.createElement('div');

        if (!isFormValid(emergencyInputData)) {
            showMessage(message, '<i class="bi bi-exclamation-triangle-fill"></i> Alert<br/>Fill all fields', 'red');
        } else if (!isPhoneNumberValid('#contactNumber')) {
            showMessage(message, '<i class="bi bi-exclamation-triangle-fill"></i> Alert<br/>Phone number must be a valid', 'red');
        } else {
            const patientName = document.querySelector('#fullName').value;
            const patientId = generateId(); // Generate the ID here
              showMessage(message, `Registered <br/> ${patientName} <br/>${patientId}`, 'rgb(42, 87, 215)');
             removeNoDataMessage(tableBody, noDataMessage);
            addRowToTable(tableBody, patientId);
            updateUIAfterSubmission();
        }
    });
}

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

function isPhoneNumberValid(selector) {
    const phoneNumber = document.querySelector(selector).value;
    return !isNaN(phoneNumber) && phoneNumber.trim() !== '' && phoneNumber.length === 11;
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
            <div>Which section are you transfering patient ${patientName} with an Id of ${patientId}</div> <br/>
            <div id ="sections">
            <button class="btn_submit" type="button" data-section="nurse"> Nurse</button>
            <button class="btn_submit" type="button" data-section="doctor"> Doctor</button>
            <button class="btn_submit" type="button" data-section="rad"> Radiology</button>
            <button class="btn_submit" type="button" data-section="matanity"> Matanity</button>
            <button class="btn_submit" type="button" data-section="lab"> Labouratory</button>
            </div>
            `
            message.className = 'alert_div'
            message.style.color = 'rgb(42, 87, 215)',
            message.style.backgroundColor = '#fff'
            message.style.maxWidth = '500px'
            document.querySelector('body').prepend(message);

           const sectionButtons = document.querySelectorAll('#sections button');
           sectionButtons.forEach((section) =>{
            section.addEventListener('click', ()=>{
                if(
                    section.getAttribute('data-section') === 'nurse' ||
                    section.getAttribute('data-section') === 'lab' ||
                    section.getAttribute('data-section') === 'rad' ||
                    section.getAttribute('data-section') === 'matanity'
                ){
                    document.querySelector('.appoitment__div h3').innerHTML = `Available ${section.innerHTML}`.toUpperCase()
                    const formValue = Array.from(formInput).map(input => input.tagName.toLowerCase())
                    if(formValue.includes('select')){
                        const selectElement = document.querySelectorAll('#bookForm .availableDoctor');
                        selectElement.forEach(element =>{
                            element.remove();
                            appoitment__div.classList.remove('hide');
                        })
                    }
                    }else{
                         document.querySelector('.appoitment__div h3').innerHTML = `Available ${section.innerHTML}`.toUpperCase()
                        appoitment__div.classList.remove('hide');
                }
            })
           })
       })
    })
}
document.querySelectorAll('.cancle').forEach(closeElement  =>closeElement.addEventListener('click', ()=>{
    appoitment__div.classList.remove('hide');
    window.location.reload();
}))
   
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
EmergencyPatient();
emergencyForm(); // Initial UI state