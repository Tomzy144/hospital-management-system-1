     //PROFILE IMAGE
     function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
  };


  

//DIFFERENT SECTIONS 
function postnalSection(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.remove("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".form_container_for_postnatal").classList.remove("pop_up");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function antenatalSection(){
  document.querySelector(".antenal_section").style.display = "flex";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function labourSection(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.remove("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function anternal_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.remove("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function postnatal_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.remove("hide");
  document.querySelector(".labour_patients_profile").classList.add("hide");
}
function labour_patient_profile_section(){
  document.querySelector(".antenal_section").style.display = "none";
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".antenatal_patients_profile").classList.add("hide");
  document.querySelector(".postnatal_patients_profile").classList.add("hide");
  document.querySelector(".labour_patients_profile").classList.remove("hide");
}




$('#close_postnatal').css({
  display: 'none',
})

//TRANSFER FROM LABOUR UNIT TO POSTNATAL UNIT
function _transfer_patient_from_labour_to_postnatal(){
  document.querySelector(".form_container_for_postnatal").classList.remove("hide");
  $('.form_container_for_postnatal').css({
    position:'absolute',
    zIndex: '13',
    left:'18%'
});
$('#close_postnatal').css({
  display: 'block',
})
  document.querySelector(".postnatal_list").classList.add("hide");
  document.querySelector(".postnal_section").classList.remove("hide");
  document.querySelector(".overlay").classList.remove("hide");
};

function _close_transfer_patient_from_labour_to_postnatal(){
  document.querySelector(".form_container_for_postnatal").classList.remove("hide");
  $('.form_container_for_postnatal').css({
    position:'relative',
    zIndex: '0',
    left:'0%'
});
$('#close_postnatal').css({
  display: 'none',
})
  document.querySelector(".postnatal_list").classList.remove("hide");
  document.querySelector(".postnal_section").classList.add("hide");
  document.querySelector(".overlay").classList.add("hide");
};

$('#close_labor').css({
  display: 'none',
})

//TRANSFER FROM ANTENATAL UNIT TO LABOUR UNIT
function _transfer_patient_from_antenatal_to_labour(){
  document.querySelector(".form_container_for_labor").classList.remove("hide");
  $('.form_container_for_labor').css({
    position:'absolute',
    zIndex: '13',
    left:'18%',
    top:'0',
});
$('#close_labor').css({
  display: 'block',
})
  document.querySelector(".labor_list").classList.add("hide");
  document.querySelector(".labour_section").classList.remove("hide");
  document.querySelector(".overlay").classList.remove("hide");
};

function _close_transfer_patient_from_antenatal_to_labour(){
  document.querySelector(".form_container_for_labor").classList.remove("hide");
  $('.form_container_for_labor').css({
    position:'relative',
    zIndex: '0',
    left:'0%'
});
$('#close_labor').css({
  display: 'none',
})
  document.querySelector(".labor_list").classList.remove("hide");
  document.querySelector(".labour_section").classList.add("hide");
  document.querySelector(".overlay").classList.add("hide");
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
  $('.doctor_appoitment3').removeClass('hide');
  $('.background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};

//POSTNATAL WARD
function _labour_transfer_from_antenal(){
  $('.labour_ward_appoitment3').removeClass('hide');
  $('.background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};


//LABOURATORY
function  _lab_transfer_from_antenatal(){
  $('.lab_appoitment3').removeClass('hide');
  $('.background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_antenatal(){
  $('.radiology_appoitment3').removeClass('hide');
  $('.background_opacity3').removeClass('hide');
  $('.tranfer_box3').addClass('hide');
};


//CLOSE ALL APPOITMENT
function _close_all_appoitment3(){;
    $('.doctor_appoitment3').addClass('hide');
    $('.labour_ward_appoitment3').addClass('hide');
    $('.lab_appoitment3').addClass('hide');
    $('.radiology_appoitment3').addClass('hide');
    $('.background_opacity3').removeClass('hide');
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
  $('.nurse_appoitment2').removeClass('hide');
  $('.background_opacity2').removeClass('hide');
  $('.tranfer_box2').addClass('hide');
};

//DOCTOR
function _doc_transfer_from_postnatal(){
  $('.doctor_appoitment2').removeClass('hide');
  $('.background_opacity2').removeClass('hide');
  $('.tranfer_box2').addClass('hide');
};

//SURGICAL SUITES
function postnatal_ward(){
  $('.postnatal_ward').removeClass('hide');
  $('.background_opacity2').removeClass('hide');
  $('.tranfer_box2').addClass('hide');
};


//LABOURATORY
function  _lab_transfer_from_postnatal(){
  $('.lab_appoitment2').removeClass('hide');
  $('.background_opacity2').removeClass('hide');
  $('.tranfer_box2').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_postnatal(){
  $('.radiology_appoitment2').removeClass('hide');
  $('.background_opacity2').removeClass('hide');
  $('.tranfer_box2').addClass('hide');
};


//CLOSE ALL APPOITMENT
function _close_all_appoitment2(){
    $('.radiology_appoitment2').addClass('hide');
    $('.lab_appoitment2').addClass('hide');
    $('.labour_ward_appoitment2').addClass('hide');
    $('.doctor_appoitment2').addClass('hide');
    $('.nurse_appoitment2').addClass('hide');
    $('.postnatal_ward').addClass('hide');
    $('.background_opacity2').removeClass('hide');
    $('.tranfer_box2').removeClass('hide');
}





















//BOOK DRUG PRESCRIPTION
function _bookDrugs(){
  $('.overlay').removeClass('hide');
  $('.drugs_booking').removeClass('hide');
}
function _close_bookDrugs(){
  $('.overlay').addClass('hide');
  $('.drugs_booking').addClass('hide');
}

function  _drug_prescribtion_tableData(){
        //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPTon update_table(){
                const tableBody = document.getElementById('dataTable3').getElementsByTagName('tbody')[0];
                
                tableBody.innerHTML = "";
                const drug = document.querySelectorAll("#drugs")
                drug.forEach(function(drug){
                    console.log(drug.value);

                    const newRow = tableBody.insertRow();
                    let cell0 = newRow.insertCell(0);
                    cell0.textContent = drug.value;
                })

                // const strength = document.querySelectorAll("#drugs_strength")
                // strength.forEach(function(drug_strength){
                //   const newRow = tableBody.insertRow();
                //   let cell1 = newRow.insertCell(1);
                //   cell1.textContent = drug_strength.value;
                // })

              }

              _drug_prescribtion_tableData()

//SUM ALL THE LAB TEST PRICES
window.onload = function() {
        const checkboxs = document.querySelectorAll(".checkbox");
        function updateSum(){
                let sum = 0;
        checkboxs.forEach(function(checkbox){
                      if(checkbox.checked){
                        sum += parseInt(checkbox.value, 10);
                      }
                      let testSum = document.querySelector("#total");
                    testSum.textContent = sum
        })
        }
        checkboxs.forEach(function(checkbox){
                checkbox.addEventListener('change', ()=>{
                        update_table();
                        updateSum();
                })
        })
}




//ANTERNATAL  DROPDOWN
function _transfer_dropdowns3(){
  $('#_transfer_icon3').on('click', function(ev){
    ev.stopPropagation();
    $('.tranfer_box1').removeClass('hide');
    $('.background_opacity3').removeClass('hide');
  })
}
_transfer_dropdowns3();

function _close_transfer_dropdowns3(){
  $('.tranfer_box1').addClass('hide');
  $('.background_opacity3').addClass('hide');
}



//POSTNATAL DROPDOWN
function _transfer_dropdowns2(){
  $('#_transfer_icon2').on('click',function(e){
    e.stopPropagation();
    $('.tranfer_box2').removeClass('hide');
    $('.background_opacity2').removeClass('hide');
  })
  }
  _transfer_dropdowns2();
  
  function _close_transfer_dropdowns2(){
    $('.tranfer_box2').addClass('hide');
    $('.background_opacity2').addClass('hide');
  }
  



















//LABOR
//LABOR DROPDOWN
function _transfer_dropdowns(){
$('#_transfer_icon').on('click',function(event){
  event.stopPropagation();
  $('.tranfer_box').removeClass('hide');
  $('.background_opacity').removeClass('hide');
})
}
_transfer_dropdowns();

function _close_transfer_dropdowns(){
  $('.tranfer_box').addClass('hide');
  $('.background_opacity').addClass('hide');
}



////TRANSFER TO DIFFERENT SECTION FOR LABOR
//NURSE
function _nurse_transfer_from_labour(){
  $('.nurse_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//DOCTOR
function _doc_transfer_from_labour(){
  $('.doctor_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//SURGICAL SUITES
function _surgical_suite_transfer_from_labour(){
  $('.surgical_suite_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//LABOUR
function _labour_transfer_from_labour(){
  $('.labour_ward_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//LABOURATORY
function  _lab_transfer_from_labour(){
  $('.lab_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

//RADIOLOGY
function _radiology_transfer_from_labour(){
  $('.radiology_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
};

// ICU
function _icu_transfer_from_labour(){
  $('.icu_appoitment').removeClass('hide');
  $('.background_opacity').removeClass('hide');
  $('.tranfer_box').addClass('hide');
}


//CLOSE ALL APPOITMENT
function _close_all_appoitment(){
    $('.icu_appoitment').addClass('hide');
    $('.radiology_appoitment').addClass('hide');
    $('.lab_appoitment').addClass('hide');
    $('.labour_ward_appoitment').addClass('hide');
    $('.doctor_appoitment').addClass('hide');
    $('.nurse_appoitment').addClass('hide');
    $('.surgical_suite_appoitment').addClass('hide');
    $('.background_opacity').removeClass('hide');
    $('.tranfer_box').removeClass('hide');
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

    const showClickButton = document.querySelector(".btn_capture1")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture1")
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

    const showClickButton = document.querySelector(".btn_capture2")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture2")
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

//camera for antenatal
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

    const showClickButton = document.querySelector(".btn_capture3")
    showClickButton.classList.remove("hide");

    const showClickButtonForRecapture = document.querySelector(".btn_re_capture3")
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
