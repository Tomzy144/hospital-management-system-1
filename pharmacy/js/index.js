    //PROFILE IMAGE
    function displayUserProfile(){
        document.querySelector(".profile_account").classList.toggle("hide");
    };

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
   document.querySelector('.display__date').textContent = dateTime;
  }
  setInterval(() => createDate());
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
    return phoneNumber.length === 11 && isNumeric && startsWith090 || startsWith081 || startsWith080 || startsWith091 ;
}
function removeNoDataMessage(tableBody, noDataMessage) {
    if (tableBody.contains(noDataMessage)) {
        tableBody.removeChild(noDataMessage);
    }
}


  const drug_prescription = document.querySelectorAll('#drug_prescription input');
function validataDrugBookInputField(){
if(!isInputValid(drug_prescription)) showMessage('Please fill field', 'red');
else if(!isNumberValid('#drugStrength') || !isNumberValid('#drugDose') || !isNumberValid('#drugQuantity'))showMessage('Input a valid Number', 'red');
else{
    showMessage('Drug Booked', 'green');
}
}


function confirmedDrugPurchase(){
    document.querySelector('#incomingDrugPurchasing').classList.add('hide')
    document.querySelector('#confirmedDrugPurchase').classList.remove('hide');
    document.querySelector('#drugStock').classList.add('hide');
    document.querySelector('.drug_presciption').classList.add('hide');
}
function incomingDrugPurchasing(){
    document.querySelector('#incomingDrugPurchasing').classList.remove('hide')
    document.querySelector('#confirmedDrugPurchase').classList.add('hide')
    document.querySelector('#drugStock').classList.add('hide');
    document.querySelector('.drug_presciption').classList.add('hide');
}
function drugStock(){
    document.querySelector('#incomingDrugPurchasing').classList.add('hide')
    document.querySelector('#confirmedDrugPurchase').classList.add('hide')
    document.querySelector('#drugStock').classList.remove('hide');
    document.querySelector('.drug_presciption').classList.add('hide');
}
function bookDrug(){
    document.querySelector('#incomingDrugPurchasing').classList.add('hide')
    document.querySelector('#confirmedDrugPurchase').classList.add('hide')
    document.querySelector('#drugStock').classList.add('hide');
    document.querySelector('.drug_presciption').classList.remove('hide');
}