     //PROFILE IMAGE
     function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };


  

//DIFFERENT SECTIONS 
function antenatalSection(){
  document.querySelector("#antenatal_section").style.display = "flex";
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function postnatalSection(){
  document.querySelector("#antenatal_section").style.display = "none";
  document.querySelector("#postnatal_section").classList.remove("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}

function labourSection(){
  document.querySelector("#antenatal_section").style.display = "none";
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.remove("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function anternal_patient_profile_section(){
  document.querySelector("#antenatal_section").style.display = "none";
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.remove("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function postnatal_patient_profile_section(){
  document.querySelector("#antenatal_section").style.display = "none";
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.remove("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function labour_patient_profile_section(){
  document.querySelector("#antenatal_section").style.display = "none";
  document.querySelector("#postnatal_section").classList.add("hide");
  document.querySelector("#labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.remove("hide");
}






















//ANTERNATAL PATIENT PROFILE INPUTS
function _display_anternal_vital_input(){
  $('#vital_button').on('click', function(){
    $('.vitals_input').toggleClass('hide');
  });
}
function _display_anternal_drug_prescribtion_input(){
  $('#drug_prescription_button').on('click', function(){
    $('.drug_prescribtion').toggleClass('hide')
  })
}

function _display_anternal_lab_input(){
$('#lab_button').on('click', function(){
  $('.lab_input').toggleClass('hide')
})
}
function  _display_anternal_radiology_input(){
$('#radiology_button').on('click', function(){
  $('.radiology_input').toggleClass('hide')
})
}
function _display_anternal_screening_input(){
$('#screening_button').on('click', function(){
  $('.screening_input').toggleClass('hide')
})
}

_display_anternal_drug_prescribtion_input();
_display_anternal_screening_input();
_display_anternal_vital_input();
_display_anternal_lab_input();
_display_anternal_radiology_input();




////TRANSFER TO DIFFERENT SECTION FOR ANTENATAL

//DOCTOR
function _doc_transfer_from_antenatal(){
  $('#doctor_appoitment3').removeClass('hide');
  $('#background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};

//POSTNATAL WARD
function _labour_transfer_from_antenal(){
  $('#labour_ward_appoitment3').removeClass('hide');
  $('#background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};


//LABOURATORY
function  _lab_transfer_from_antenatal(){
  $('#lab_appoitment3').removeClass('hide');
  $('#background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_antenatal(){
  $('#radiology_appoitment3').removeClass('hide');
  $('#background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};


//CLOSE ALL APPOITMENT
function _close_all_appoitment3(){;
    $('#doctor_appoitment3').addClass('hide');
    $('#labour_ward_appoitment3').addClass('hide');
    $('#lab_appoitment3').addClass('hide');
    $('#radiology_appoitment3').addClass('hide');
    $('#background_opacity3').removeClass('hide');
}



//ANTENATAL PATIENT INPUTS
function _antenatal_successfull_vitals(){
  $('#antenatal_successful_vital').on('click', function(){
      $('._btn_flexs').toggleClass('hide')
  })
}
_antenatal_successfull_vitals();

function _antenatal_successfull_vital_data(){
    $('#_vital_1').on('click', function(){
      $('#_data_1').toggleClass("hide");
    })
}
_antenatal_successfull_vital_data()

function _antenatal_successfull_drug_prescription(){
  $('.drug_prescription').toggleClass('hide');
}
function _antenatal_successfull_lab(){
  $('.lab').toggleClass('hide');
}
function _antenatal_successfull_rad(){
  $('.rad').toggleClass('hide');
}
function _antenatal_successfull_screening(){
  $('#screening_div').toggleClass('hide');
}


//POSTNATAL PATIENT INPUTS
function _postnatal_successfull_assessment(){
  $('#_postnatal_assessment_input').on('click', function(){
      $('#_postnatal_assessment_data_1').toggleClass('hide')
  })
}
_postnatal_successfull_assessment()

function _neonatal_successfull_assessment(){
  $('#_neonatal_assessment_input').on('click', function(){
      $('#_neonatal_assessment_data_1').toggleClass('hide')
  })
}
_neonatal_successfull_assessment()

function _postnatal_successfull_drug_prescription(){
  $('.drug_prescription2').toggleClass('hide');
}

function _postnatal_successfull_lab(){
  $('.lab2').toggleClass('hide');
}
function _postnatal_successfull_rad(){
  $('.rad2').toggleClass('hide');
}
function _postnatal_successfull_screening(){
  $('#screening_div2').toggleClass('hide');
}






//POSTNATAL PATIENT PROFILE INPUTS
function _display_postnatal_accessment_input(){
  $('#postnatal_assessment_button').on('click', function(){
    $('.postnatal_accessment_form').toggleClass('hide')
  })
}
function _display_neonatal_assessmen_input(){
  $('#neonatal_assessment_button').on('click', function(){
    $('.neonatal_assessmen_form').toggleClass('hide')
  })
}
function _labouratory_diagnostic_test_input(){
  $('#lab_diagnostic_button').on('click', function(){
    $('.labouratory_diagnostic_test_form').toggleClass('hide')
  })
}
function _drug_prescribtion_input2(){
  $('#drug_prescription_button2').on('click', function(){
    $('.drug_prescribtion2').toggleClass('hide')
  })
}
_drug_prescribtion_input2();
_labouratory_diagnostic_test_input();
_display_neonatal_assessmen_input();
_display_postnatal_accessment_input();




////TRANSFER TO DIFFERENT SECTION FOR POSTNATAL
//NURSE
function _nurse_transfer_from_postnatal(){
  $('#nurse_appoitment2').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  $('#tranfer_box2').addClass('hide');
};

//DOCTOR
function _doc_transfer_from_postnatal(){
  $('#doctor_appoitment2').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  $('#tranfer_box2').addClass('hide');
};

//SURGICAL SUITES
function postnatal_ward(){
  $('.#postnatal_ward').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  $('#tranfer_box2').addClass('hide');
};


//LABOURATORY
function  _lab_transfer_from_postnatal(){
  $('#lab_appoitment2').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  $('#tranfer_box2').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_postnatal(){
  $('#radiology_appoitment2').removeClass('hide');
  $('#background_opacity2').removeClass('hide');
  $('#tranfer_box2').addClass('hide');
};


//CLOSE ALL APPOITMENT
function _close_all_appoitment2(){
    $('#radiology_appoitment2').addClass('hide');
    $('#lab_appoitment2').addClass('hide');
    $('.labour_ward_appoitment2').addClass('hide');
    $('#doctor_appoitment2').addClass('hide');
    $('#nurse_appoitment2').addClass('hide');
    $('#postnatal_ward').addClass('hide');
    $('#background_opacity2').removeClass('hide');
    $('#tranfer_box2').removeClass('hide');
}





















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
});
}

// Call the function to add drugs
add_drugs3();

///////////////////////////





//ANTENATAL PRESCRIPTION DRUGS BOOKING
function _bookDrugs(){
  $('.overlay').removeClass('hide');
  $('#antenatal_drugs_booking').removeClass('hide');
}
function _close_bookDrugs(){
  $('.overlay').addClass('hide');
  $('#antenatal_drugs_booking').addClass('hide');
}
function addRow() {
  var form = document.querySelector('.drug_prescribtion #_inputs');

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
$('#add_icon').on('click', function(){
  addRow();
});
}

// Call the function to add drugs
add_drugs();

///////////////////////////
































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
});
}

// Call the function to add drugs
add_drugs2();

//////////////////////////////
































//ANTERNATAL  DROPDOWN
function _transfer_dropdowns3(){
  $('#_transfer_icon3').on('click', function(ev){
    ev.stopPropagation();
    $('#tranfer_box1').removeClass('hide');
    $('#background_opacity3').removeClass('hide');
  })
}
_transfer_dropdowns3();

function _close_transfer_dropdowns3(){
  $('#tranfer_box1').addClass('hide');
  $('#background_opacity3').addClass('hide');
}



//POSTNATAL DROPDOWN
function _transfer_dropdowns2(){
  $('#_transfer_icon2').on('click',function(e){
    e.stopPropagation();
    $('#tranfer_box2').removeClass('hide');
    $('#background_opacity2').removeClass('hide');
  })
  }
  _transfer_dropdowns2();
  
  function _close_transfer_dropdowns2(){
    $('#tranfer_box2').addClass('hide');
    $('#background_opacity2').addClass('hide');
  }
  



















//LABOR
//LABOR DROPDOWN
function _transfer_dropdowns(){
$('#_transfer_icon').on('click',function(event){
  event.stopPropagation();
  $('#tranfer_box').removeClass('hide');
  $('#background_opacity').removeClass('hide');
})
}
_transfer_dropdowns();

function _close_transfer_dropdowns(){
  $('#tranfer_box').addClass('hide');
  $('#background_opacity').addClass('hide');
}



////TRANSFER TO DIFFERENT SECTION FOR LABOR
//NURSE
function _nurse_transfer_from_labour(){
  $('#nurse_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

//DOCTOR
function _doc_transfer_from_labour(){
  $('#doctor_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

//SURGICAL SUITES
function _surgical_suite_transfer_from_labour(){
  $('#surgical_suite_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

//LABOUR
function _labour_transfer_from_labour(){
  $('#labour_ward_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

//LABOURATORY
function  _lab_transfer_from_labour(){
  $('#lab_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_labour(){
  $('#radiology_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
};

// ICU
function _icu_transfer_from_labour(){
  $('#icu_appoitment').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
}
// SWITCH TO POSTNATAL UNIT
function _switch_to_postnatal_labour(){
  $('#switch_to_postnatal').removeClass('hide');
  $('#background_opacity').removeClass('hide');
  $('#tranfer_box').addClass('hide');
}


//CLOSE ALL APPOITMENT
function _close_all_appoitment(){
    $('#icu_appoitment').addClass('hide');
    $('#radiology_appoitment').addClass('hide');
    $('#lab_appoitment').addClass('hide');
    $('#labour_ward_appoitment').addClass('hide');
    $('#doctor_appoitment').addClass('hide');
    $('#nurse_appoitment').addClass('hide');
    $('#surgical_suite_appoitment').addClass('hide');
    $('#background_opacity').removeClass('hide');
    $('#tranfer_box').removeClass('hide');
}





















////LABOR PATIENT PROFILE INPUTS
function _display_labour_vital_input(){
  $('#vital_button2').on('click', function(){
    $('.vitals_input2').toggleClass('hide');
  });
}
function _display_labour_drug_prescribtion_input(){
  $('#drug_prescription_button3').on('click', function(){
    $('.drug_prescribtion3').toggleClass('hide')
  })
}

function _display_labour_lab_input(){
$('#lab_button2').on('click', function(){
  $('.lab_input2').toggleClass('hide')
})
}
function  _display_labour_radiology_input(){
$('#radiology_button2').on('click', function(){
  $('.radiology_input2').toggleClass('hide')
})
}
function _display_labour_screening_input(){
$('#screening_button2').on('click', function(){
  $('.screening_input2').toggleClass('hide')
})
}

_display_labour_drug_prescribtion_input();
_display_labour_screening_input();
_display_labour_vital_input();
_display_labour_lab_input();
_display_labour_radiology_input();

//LABOUR INPUTS

function _labour_vital_input(){
  $('#_labour_vital_input').on('click', function(){
      $('#labour_vital').toggleClass('hide')
  })
}
_labour_vital_input()

function _labour_successfull_drug_prescription(){
  $('.drug_prescription3').toggleClass('hide');
}
function _labour_successfull_lab(){
  $('.lab3').toggleClass('hide');
}
function _labour_successfull_rad(){
  $('.rad3').toggleClass('hide');
}
function _labour_successfull_screening(){
  $('#screening_div3').toggleClass('hide');
}














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
    let context = canvasElement3.getContext('3d');
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
