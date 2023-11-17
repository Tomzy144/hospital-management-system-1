'use strict';
// const getStartedClickEvent =  document.querySelector("#getting-started-btn");
// const popUp = document.querySelector(".doctor-nurse-rep-popup-container");
// const overlay = document.querySelector(".overlay");

// //Create a clickEvent for the Get Started Button
// getStartedClickEvent.addEventListener("click", function(){
//          popUp.classList.remove("hidden");
//          overlay.classList.remove("hidden");
// });

// const closeGetStartedClickEvent = function(){
//          popUp.classList.add("hidden");
//          overlay.classList.add("hidden");
// }

// document.addEventListener("keydown", function(e){
//  if(e.key === 'Escape'){
//      closeGetStartedClickEvent(); 
//  }
// })
// overlay.addEventListener("click", closeGetStartedClickEvent);

// //Dcotor Click EventHandler

// const generateRegistrationForm = function(role, formHtml){
//     let container = document.getElementById(role + '-container');
//     container.innerHTML = formHtml;
// }


// let doctorFormHtml = `
// <div class="doctor-reg-form hidden">
// <h3>Doctor Registration</h3>
// <form method="post" enctype="multipart/form-data" >
// <span class="form-container">
//     <input type="text" placeholder="FullName" id="full_name_text">
//     <input type="number" placeholder="Phone Number" id="phone_number">
//     <input type="date" id="date">
//    <input type="password" placeholder="Password" id="password">
// </span>

// <span class="form-container">
//     <input type="text" placeholder="Doctor Id" id="id_text">
//     <input type="email" placeholder="Email" id="email">
//     <input type="text" placeholder="Address" id="address_text"> 
//    <input type="password" placeholder="Confirmed Password" id="confirmed_password">
// </span>
// <button type="button" class="btn-reg" onclick="_sign_in()">REGISTER</button>
// </form>
// </div>
// `;
// generateRegistrationForm('doctor', doctorFormHtml);

// let nurseFormHtml = `
// <div class="nurse-reg-form hidden">
// <h3>Nurse Registration</h3>
// <form method="post" enctype="multipart/form-data">
// <span class="form-container">
//     <input type="text" placeholder="FullName" id="full_name_text">
//     <input type="number" placeholder="Phone Number" id="phone_number">
//     <input type="date" id="date">
//    <input type="password" placeholder="Password" id="password">
// </span>

// <span class="form-container">
//     <input type="text" placeholder="Nurse Id" id="id_text">
//     <input type="email" placeholder="Email" id="email">
//     <input type="text" placeholder="Address" id="address_text"> 
//    <input type="password" placeholder="Confirmed Password" id="confirmed_password">
// </span>
// <button type="button" class="btn-reg" onclick="_sign_in()">REGISTER</button>
// </form>
// </div>
// `
// generateRegistrationForm('nurse', nurseFormHtml);

// let receptionistFormHtml =`
// <div class="receptionist-reg-form hidden">
// <h3>Receptionist Registration</h3>
// <form method="post" enctype="multipart/form-data">
// <span class="form-container">
//     <input type="text" placeholder="FullName" id="full_name_text">
//     <input type="number" placeholder="Phone Number" id="phone_number">
//     <input type="date" id="date">
//    <input type="password" placeholder="Password" id="password">
// </span>

// <span class="form-container">
//     <input type="text" placeholder="Receptionist Id" id="id_text">
//     <input type="email" placeholder="Email" id="email">
//     <input type="text" placeholder="Address" id="address_text"> 
//    <input type="password" placeholder="Confirmed Password" id="confirmed_password">
// </span>
// <button type="button" class="btn-reg" onclick="_sign_in()">REGISTER</button>
// </form>
// </div>
// `

// generateRegistrationForm('receptionist', receptionistFormHtml);

// let labFormHtml = `
// <div class="lab-reg-form hidden">
// <h3>Lab Doctor Registration</h3>
// <form method="post" enctype="multipart/form-data">
// <span class="form-container">
//     <input type="text" placeholder="FullName" id="full_name_text">
//     <input type="number" placeholder="Phone Number" id="phone_number">
//     <input type="date" id="date">
//    <input type="password" placeholder="Password" id="password">
// </span>

// <span class="form-container">
//     <input type="text" placeholder="Lab Doctor Id" id="id_text">
//     <input type="email" placeholder="Email" id="email">
//     <input type="text" placeholder="Address" id="address_text"> 
//    <input type="password" placeholder="Confirmed Password" id="confirmed_password">
// </span>
// <button type="button" class="btn-reg" onclick="_sign_in()">REGISTER</button>
// </form>
// </div>
// `
// generateRegistrationForm('lab', labFormHtml)

// //doctor handleclick
// const btnClickDoctor = document.querySelector("#btn-doctor");
// const PopUpDcotorReg = document.querySelector(".doctor-reg-form");

// btnClickDoctor.addEventListener("click", function(){
//  PopUpDcotorReg.classList.remove("hidden");
//  overlay.classList.remove("hidden");
// });
// const closebtnClickDoctor = function(){
//  PopUpDcotorReg.classList.add("hidden");
//  overlay.classList.add("hidden");
// }
// document.addEventListener("keydown", function(e){
//  if(e.key === 'Escape'){
//      closebtnClickDoctor(); 
//  }
// })



// //nurse handleclick
// const btnClickNurse = document.querySelector("#btn-nurse");
// const popUpNurseReg = document.querySelector(".nurse-reg-form");


// btnClickNurse.addEventListener("click", function(){
//     popUpNurseReg.classList.remove("hidden");
//     overlay.classList.remove("hidden");
// })

// const closebtnClickNurse = function(){
//     popUpNurseReg.classList.add("hidden");
//     overlay.classList.add("hidden");
// }


// //receptionist handleClick
// const btnClickReceptionist  = document.querySelector("#btn-receptionist");
// const popUpReceptionist = document.querySelector(".receptionist-reg-form")

// btnClickReceptionist.addEventListener("click", function(){
//     popUpReceptionist.classList.remove("hidden");
//     overlay.classList.remove("hidden");
// })

// const closebtnClickReceptionist = function(){
//     popUpReceptionist.classList.add("hidden");
//     overlay.classList.add("hidden");
// }


// //lab handleClick
// const btnClickLab  = document.querySelector("#btn-lab");
// const popUpLab = document.querySelector(".lab-reg-form")


// btnClickLab.addEventListener("click", function(){
//     popUpLab.classList.remove("hidden");
//     overlay.classList.remove("hidden");
// })

// const closebtnClickLab = function(){
//     popUpLab.classList.add("hidden");
//     overlay.classList.add("hidden");
// }

// overlay.addEventListener("click", function(){
//     closebtnClickDoctor();
//     closebtnClickNurse();
//     closebtnClickReceptionist()
//     closebtnClickLab();
// });

// function _sign_in(){ 
// var email = document.querySelector('#email').value;
// var password = document.querySelector('#password').value;
// var confirmedPassword = document.querySelector('#confirmed_password').value;
// var fullNameTexts = document.querySelector('#full_name_text').value;
// var doctoridTexts = document.querySelector('#id_text').value;
// var addressTexts = document.querySelector('#address_text').value;
// var date = document.querySelector('#date').value;
// var phoneNumber = document.querySelector('#phone_number').value;

// //check if the input field is empty.
// if((email!='')&&(password!='')&&(confirmedPassword!='') && (phoneNumber!='') && (fullNameTexts!='') && (doctoridTexts!='') && (addressTexts!='')&& (date!='')){
//  closebtnClickDoctor();
//  closeGetStartedClickEvent();
//  window.alert('Thank you for Registering, Click on your fied Login button to access your portal')
//  location.reload(true);
// }else{
//  window.alert("Fill the neccessary field");
// }
// };

// function log_in (){
//     let urlLogin = '../index.php';
//     window.parent(location=(urlLogin));
// }

function log_in(){
    let urlLogin = './frontend/superadmin/index.php';
    window.parent(location=(urlLogin));
};

