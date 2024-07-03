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

  const message = document.createElement('div');
  const showMessage = function(text, backgroundColor){
    message.className= 'alert_div';
    message.innerHTML = text;
    message.style.backgroundColor = backgroundColor;
    document.querySelector('body').appendChild(message);
    setTimeout(() => message.classList.add('hide'),3000);
}

function createNoDataMessage() {
    const noDataMessage = document.createElement('tr');
    noDataMessage.innerHTML = '<td colspan="9" style="text-align: center;">No data</td>';
    return noDataMessage;
}

function isInputValid(inputs) {
    for (const input of inputs) {
        if (input.value.trim() === '') return false;
    }
    return true;
}

const isNumberValid = function(numeric){
    const number = document.querySelector(numeric).value
    if(!+number) return false;
    return true;
}
const inputChecked = function(checked){
    const input = document.querySelector(checked);
    if(!input) return false;
    return input.checked;
}

function generateId() {
    return`MORGUE${Math.floor(Math.random() * 1000)}`
}
function isPhoneNumberValid(selector) {
    const phoneNumber = document.querySelector(selector).value.trim();
    const isNumeric = /^\d+$/.test(phoneNumber); // Checks if the input is all digits
    const startsWith090 = phoneNumber.startsWith('090');
    const startsWith081 = phoneNumber.startsWith('081');
    const startsWith080 = phoneNumber.startsWith('080');
    const startsWith091 = phoneNumber.startsWith('091');
    const startsWith442 = phoneNumber.startsWith('442');
    return phoneNumber.length === 10 && isNumeric && startsWith090 || startsWith081 || startsWith080 || startsWith091 || startsWith442 ;
}
function removeNoDataMessage(tableBody, noDataMessage) {
    if (tableBody.contains(noDataMessage)) {
        tableBody.removeChild(noDataMessage);
    }
}

const relativeMorgueInputForm = document.querySelectorAll('#relativeDeasedForm input');
const incomingMorgueList = document.querySelector('#IncomingTableData tbody');
const noDataMessage = createNoDataMessage()
incomingMorgueList.appendChild(noDataMessage)
const morgueInputForm = document.querySelectorAll('#deceassedForm input');

  function validateDeceasedForm() {
      if(!isInputValid(morgueInputForm)) showMessage('Please fill all field', 'red');
       else if(!isNumberValid('#deposit') || !isNumberValid('#ageAtTimeOfDeath'))  showMessage('Enter a valid Number', 'red');
       else if(!inputChecked('#maleCheckbox') && !inputChecked('#femaleCheckbox') || !inputChecked('#autopsyPerformed') && !inputChecked('#autopsyNotPerformed')) showMessage('Please check the unchecked box', 'red');
       else{
        const patientId = generateId()
       const generatedDeceassedId =  document.querySelector('#deceasedId');
       generatedDeceassedId.value = patientId
        removeNoDataMessage(incomingMorgueList, noDataMessage);
        updateIncomingTable(incomingMorgueList,patientId);
        showMessage('Form has been validated successfully', 'green')
       }
    }

function validateRelativeForm(){
    if(!isInputValid(relativeMorgueInputForm)) showMessage('Please fill all field', 'red');
    else if(!isPhoneNumberValid("#relativePhoneNumber"))showMessage('Phone number is Invalid', 'red');
    else if(!inputChecked('#maleChecked') && !inputChecked('#femaleChecked') || !inputChecked('#arrangementTrue') && !inputChecked('#arrangementFalse')) showMessage('Please check the unchecked box', 'red');
    else showMessage('Form has been validated successfully', 'green')
}


const updateIncomingTable =function(incomingData, patientId){
    const rowCount = incomingData.rows.length + 1;
    const newRow = incomingData.insertRow();
    const deceasedName = document.querySelector('#deceasedName');
    const dob = document.querySelector('#dob');
    const doa = document.querySelector('#doa');
    const toa = document.querySelector('#toa');
    const dod = document.querySelector('#dod');
    const ageAtTimeOfDeath = document.querySelector('#ageAtTimeOfDeath');
    const deposit = document.querySelector('#deposit');

    newRow.insertCell(0).innerHTML = rowCount;
    newRow.insertCell(1).innerHTML =deceasedName.value // Use the passed ID
    newRow.insertCell(2).innerHTML = patientId;
    newRow.insertCell(3).innerHTML = dob.value;
    newRow.insertCell(4).innerHTML = toa.value;
    newRow.insertCell(5).innerHTML = doa.value;
    newRow.insertCell(6).innerHTML = dod.value;
    newRow.insertCell(7).innerHTML = ageAtTimeOfDeath.value;
    newRow.insertCell(8).innerHTML = `N${deposit.value}`;
}


function filterAvailablePatient() {
    const tableBody = document.querySelector('#IncomingTableData tbody');
    const tableRows = Array.from(tableBody.querySelectorAll('tr')); // Convert NodeList to Array
    const searchInput = document.querySelector('#incomingSearchInput').value.trim().toLowerCase();

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
    if (existingNoDataMessage) existingNoDataMessage.remove();

    if (!hasVisibleRows) {
        const noDataMessage = document.createElement('tr');
        noDataMessage.id = 'noDataMessage';
        noDataMessage.innerHTML = '<td colspan="9" style="text-align: center;">No User associated with this input</td>';
        tableBody.appendChild(noDataMessage);
    }
}
document.querySelector('#incomingSearchInput').addEventListener('input', filterAvailablePatient);
console.log(document.querySelector('#incomingSearchInput'));





function incomingAppoitment(){
    document.querySelector(".container").classList.add("hide");
    document.querySelector("#incomingDeceassed").classList.add("hide");
    document.querySelector("#outgoingDeceassed").classList.add("hide");
    document.querySelector("#incomingAppoitment").classList.remove("hide");
}
function admissionForm(){
    document.querySelector(".container").classList.remove("hide");
    document.querySelector("#incomingDeceassed").classList.add("hide");
    document.querySelector("#outgoingDeceassed").classList.add("hide");
    document.querySelector("#incomingAppoitment").classList.add("hide");
}
function incomingDeceassed(){
    document.querySelector(".container").classList.add("hide");
    document.querySelector(".list_div").classList.remove("hide");
    document.querySelector("#incomingDeceassed").classList.remove("hide");
    document.querySelector("#outgoingDeceassed").classList.add("hide");
    document.querySelector("#incomingAppoitment").classList.add("hide");

}
function outgoingDeceassed(){
    document.querySelector(".container").classList.add("hide");
    document.querySelector("#outgoingDeceassed").classList.remove("hide");
    document.querySelector("#incomingDeceassed").classList.add("hide");
    document.querySelector("#incomingAppoitment").classList.add("hide");
}