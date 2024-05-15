     //PROFILE IMAGE
     function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };


  const links =  document.querySelectorAll('#links');
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
 const  day = now.getDate();
 const month = now.getMonth();
 const year = now.getFullYear()
 const hour = `${now.getHours()}`.padStart(2,0);
 const min = `${now.getMinutes()}`.padStart(2,0);
 document.querySelector('.display__date').textContent = `${day}/${month}/${year}, ${hour}:${min}`
}

createDate()
  
//DIFFERENT SECTIONS 
function antenatalSection(){
  document.querySelector("#antenatal_section").classList.remove('hide');
  document.querySelector("#anternatal_patient__list").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  $('#change_to_antenatal_section').addClass('hide');
}


function anternatalPatientList(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#anternatal_patient__list").classList.remove('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  $('#change_to_antenatal_section').addClass('hide');
}

function postnatalSection(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#postnatal_section").classList.remove("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  $('#change_to_postnatal_section').addClass('hide');
}

function labourSection(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.remove("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}

////////////////////////////////////////////////////////////////////////////

function anternatalPatientProfile(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#anternatal_patient__list").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.remove("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}



function anternal_patient_profile_section(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.remove("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  document.querySelector("#logout_patient").classList.remove("hide");
}

function accessing_a_specific_postnatal_patients_profile(){
  $('#accessing_postnatal_patient_profile').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  if(!$('#postnatal_section').hasClass('hide')){
    $('#accessing_postnatal_patient_profile #comfirmed_patient').on('click', function(){
      postnatal_patient_profile_section()
    })
  }
  }


function postnatal_patient_profile_section(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.remove("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
  document.querySelector("#logout_patient").classList.remove("hide");
  $('#accessing_postnatal_patient_profile').addClass('hide');
  $('#background_opacity2').addClass('hide');
}

function accessing_a_specific_labour_patients_profile(){
  $('#accessing_labour_patient_profile').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  if(!$('#labour_section').hasClass('hide')){
    $('#accessing_labour_patient_profile #comfirmed_patient').on('click', function(){
      labour_patient_profile_section()
    })
  }
  }
function labour_patient_profile_section(){
  document.querySelector("#antenatal_section").classList.add('hide');
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.remove("hide");
  $('#accessing_labour_patient_profile').addClass('hide');
  $('#background_opacity').addClass('hide');
  document.querySelector("#logout_patient").classList.remove("hide");
}




//ANTENATAL PRESCRIPTION DRUGS BOOKING
function _bookDrugs(){
  $('#antenatal_drugs_booking').removeClass('hide');
}
function _close_bookDrugs(){
  $('#antenatal_drugs_booking').addClass('hide');
}
function addRow() {
  var form = document.querySelector('.drug_prescription #_inputs');

  var drugsInput = form.querySelector('#drug').value;
  var drugsStrengthInput = form.querySelector('#drug_strength').value;
  var drugModeSelect = form.querySelector('#drug_mode');
  var drugFreqSelect = form.querySelector('#drug_freq');
  var drugQtyInput = form.querySelector('#drug_qty').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText = drugModeSelect.options[drugModeSelect.selectedIndex].text;
  var drugFreqSelectedText = drugFreqSelect.options[drugFreqSelect.selectedIndex].text;

  var table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput;
  cells[1].innerHTML = drugsStrengthInput;
  cells[2].innerHTML = drugModeSelectedText; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput;

  // Clear input fields
  form.querySelector('#drug').value = '';
  form.querySelector('#drug_strength').value = '';
  form.querySelector('#drug_mode').selectedIndex = 0;
  form.querySelector('#drug_freq').selectedIndex = 0;
  form.querySelector('#drug_qty').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs(){
$('.add__drug').on('click', function(){
  addRow();
});
}

// Call the function to add drugs
add_drugs();

function savedInput(){
  $('#save_inputs').removeClass('hide');
  setTimeout(function(){
    $('#save_inputs').addClass('hide');
  }, timeInterval)
}
function _check_selected_antenatal_drugs(){
  $('#_check_selected_antenatal_drugs').removeClass('hide')
  $('#antenatal_drugs_booking').addClass('hide');
}
function comfirmed_antenatal_drugs(){
  $('#_approved_antenatal_drugs').removeClass('hide');
  $('#_check_selected_antenatal_drugs').addClass('hide');
  setTimeout(function(){
    $('#_approved_antenatal_drugs').addClass('hide');
    $('.overlay').addClass('hide');
  }, timeInterval)
}
////////////////////////////////////////////////////////////





//POSTINATAL PRESCRIPTION DRUGS BOOKING
function _bookDrugs2(){
  $('.overlay').removeClass('hide');
  $('#postnatal_drugs_booking').removeClass('hide');
}
function _close_bookDrugs2(){
  $('.overlay').addClass('hide');
  $('#postnatal_drugs_booking').addClass('hide');
}
function addRow2() {
  var form2 = document.querySelector('.drug_prescribtion2 #_inputs2');

  var drugsInput2 = form2.querySelector('#drug2').value;
  var drugsStrengthInput2 = form2.querySelector('#drug_strength2').value;
  var drugModeSelect2 = form2.querySelector('#drug_mode2');
  var drugFreqSelect2 = form2.querySelector('#drug_freq2');
  var drugQtyInput2 = form2.querySelector('#drug_qty2').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText2 = drugModeSelect2.options[drugModeSelect2.selectedIndex].text;
  var drugFreqSelectedText2 = drugFreqSelect2.options[drugFreqSelect2.selectedIndex].text;

  var table = document.getElementById("dataTable2").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput2;
  cells[1].innerHTML = drugsStrengthInput2;
  cells[2].innerHTML = drugModeSelectedText2; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText2; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput2;

  // Clear input fields
  form2.querySelector('#drug2').value = '';
  form2.querySelector('#drug_strength2').value = '';
  form2.querySelector('#drug_mode2').selectedIndex = 0;
  form2.querySelector('#drug_freq2').selectedIndex = 0;
  form2.querySelector('#drug_qty2').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs2(){
$('#add_icon2').on('click', function(){
  addRow2();
    $('#add_selected_postnatal_drugs').removeClass('hide');
  setTimeout(function(){
    $('#add_selected_postnatal_drugs').addClass('hide');
  }, timeInterval)
});
}

// Call the function to add drugs
add_drugs2();



//LABOUR PRESCRIPTION DRUGS BOOKING
function _bookDrugs3(){
  $('.overlay').removeClass('hide');
  $('#labour_drugs_booking').removeClass('hide');
}
function _close_bookDrugs3(){
  $('.overlay').addClass('hide');
  $('#labour_drugs_booking').addClass('hide');
}
function addRow3() {
  var form3 = document.querySelector('.drug_prescribtion3 #_inputs3');

  var drugsInput3 = form3.querySelector('#drug3').value;
  var drugsStrengthInput3 = form3.querySelector('#drug_strength3').value;
  var drugModeSelect3 = form3.querySelector('#drug_mode3');
  var drugFreqSelect3 = form3.querySelector('#drug_freq3');
  var drugQtyInput3 = form3.querySelector('#drug_qty3').value;

  // Get the selected option text for mode and frequency
  var drugModeSelectedText3 = drugModeSelect3.options[drugModeSelect3.selectedIndex].text;
  var drugFreqSelectedText3 = drugFreqSelect3.options[drugFreqSelect3.selectedIndex].text;

  var table = document.getElementById("dataTable3").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.rows.length);
  var cells = [];
  for (var i = 0; i < 5; i++) {
      cells.push(newRow.insertCell(i));
  }
  cells[0].innerHTML = drugsInput3;
  cells[1].innerHTML = drugsStrengthInput3;
  cells[2].innerHTML = drugModeSelectedText3; // Insert selected option text for mode
  cells[3].innerHTML = drugFreqSelectedText3; // Insert selected option text for frequency
  cells[4].innerHTML = drugQtyInput3;

  // Clear input fields
  form3.querySelector('#drug3').value = '';
  form3.querySelector('#drug_strength3').value = '';
  form3.querySelector('#drug_mode3').selectedIndex = 0;
  form3.querySelector('#drug_freq3').selectedIndex = 0;
  form3.querySelector('#drug_qty3').value = '';
}

// Function to add drugs when the add icon is clicked
function add_drugs3(){
$('#add_icon3').on('click', function(){
  addRow3();
  $('#add_selected_drugs').removeClass('hide');
  setTimeout(function(){
    $('#add_selected_drugs').addClass('hide');
  }, timeInterval)
});
}

// Call the function to add drugs
add_drugs3();
/////////////////////////////////////////////


























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
