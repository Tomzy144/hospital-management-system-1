'use strict';

///////////////////////////////////////
// Modal window
const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.btn--close-modal');
const btnsOpenModal = document.querySelectorAll('.btn--show-modal');

const openModal = function () {
// e.preventDefault();
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const closeModal = function () {
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};
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
document.querySelector('.display__date').textContent = dateTime
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
noDataMessage.innerHTML = '<td colspan="7" style="text-align: center;">No data</td>';
return noDataMessage;
}

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
const staffFormInput = document.querySelectorAll('#staffFormInput input');
const staffFormSelect = document.querySelectorAll('#staffFormInput select');
const staffList = document.querySelector('#staffList tbody');
const noStaffList = createNoDataMessage();
staffList.append(noStaffList);

const registerStaff = function(){
if(!isInputValid(staffFormInput)) showMessage('Please Input Field', 'red');
// if(!areSelectsValid(staffFormSelect)) showMessage('Please Input Field', 'red');
else if(!isEmailValid('staffEmail'))showMessage('Please Input a Valid Email', 'red');
else if(!inputChecked('maleCheckbox') && !inputChecked('femaleCheckbox')) showMessage('Please Select your Gender', 'red');

}
