   //PROFILE IMAGE
   function click_icon_for_profile(){
      document.querySelector(".profile_account").classList.toggle("hide");
   };



   
   //PERONAL PROFILE SECTION
   function personal_profile_section(){
    document.querySelector(".appoitment_section").classList.add("hide");
    document.querySelector(".patient-profile").classList.remove("hide");
    document.querySelector(".available-patient-list").classList.add("hide");
   }

   function availablePatientList(){
      document.querySelector(".appoitment_section").classList.add("hide");
      document.querySelector(".available-patient-list").classList.remove("hide");
      document.querySelector(".patient-profile").classList.add("hide");
   }
function appoitmentSection(){
   document.querySelector(".appoitment_section").classList.remove("hide");
   document.querySelector(".available-patient-list").classList.add("hide");
   document.querySelector(".patient-profile").classList.add("hide");
}

function selectDoc(){
  $('.avalable_doctor').removeClass('hide')
  $('.av_doctor_role').removeClass('hide')
}
function bookPatient(){
  $('.av_doctor_role').addClass('hide')
  $('.book_patient').removeClass('hide')
}

const roles = {
  surgeon: ['Dr. Patrick John', 'Dr. Amanda Smith'],
  healthPractitioner: ['Dr. Isreal Clarke', 'Dr. Issac Newton'],
  dentist: ['Dr. Tomiwa John', 'Dr. Kingsley John', 'Dr. Emmanuel Stone'],
  heartDoctor: ['Dr. Heartbeat', 'Dr. Ventricle', 'Dr. Aorta']
};

function updateDoctors() {
  const roleSelect = document.getElementById('av-roles');
  const doctorSelect = document.getElementById('av-doctors');
  const selectedRole = roleSelect.value;

  doctorSelect.innerHTML = ''; // Clear existing options
  roles[selectedRole].forEach(doctor => {
      const option = document.createElement('option');
      option.textContent = doctor;
      option.value = doctor.toLowerCase().replace(/ /g, '-'); // Convert name to a slug-like value
      doctorSelect.appendChild(option);
  });
}




  ////////////////

  function accept(patient_Id) {
   // Fade in elements with class 'all_sections_input'
   $('.booked-patient-container').fadeIn(500);

   // Construct data string to send in the AJAX request
   var dataString = 'patient_Id=' + patient_Id;

   // Perform AJAX request
   $.ajax({
       type: "POST", // HTTP method
       url: 'config/profile_input.php', // URL of the PHP script
       data: dataString, // Data to send with the request
       cache: false, // Disable caching
       success: function(html) {
           // On success, update content of elements with class 'all_sections_input' with the received HTML
           $('.booked-patient-container').html(html);

     
           // Hide container with ID 'appointmentDetailsContainer'
           var container = document.querySelector('.appoitment_section');
           container.classList.add('hide')

           // Remove 'hide' class from elements with class 'all_sections_input'
           var hidden = document.querySelector('.booked-patient-container');
           hidden.classList.remove("hide");
       }
   });
                   document.addEventListener('click', function(event) {
       console.log('Event type:', event.type); // Output the type of event
       console.log('Event target:', event.target); // Output the target of the event
   });

}



function getWards() {
  $('#wards').html('<option>LOADING...</option>'); // Set loading message
  $('#wards').prop('disabled', true); // Disable the dropdown

  var action = 'getWards';
  var data = { action: action }; // Use an object to define data

  $.ajax({
    type: "POST",
    url: "config/code.php",
    data: data, // Pass the data object directly
    cache: false,
    dataType: 'json',
    success: function (data) {
      // Check for success and populate the dropdown
      if (data.success) {
        populateWardsDropdown(data.wards); // Assuming 'wards' is the key for wards in your response
      } else {
        console.error('Error:', data.message);
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', status, error);
    }
  });
}

function populateWardsDropdown(wards) {
  var wardsDropdown = document.getElementById("wards");

  // Clear existing options
  wardsDropdown.innerHTML = '';

  // Add options based on the fetched data
  for (var i = 0; i < wards.length; i++) {
    var option = document.createElement("option");
    option.value = wards[i].ward_id;
    option.id= wards[i].ward_id;
    option.textContent = wards[i].ward_number;
    wardsDropdown.appendChild(option);
  }

  // Enable the dropdown after populating options
  $('#wards').prop('disabled', false);

  // Attach the change event to trigger getBeds when a ward is selected
  $('#wards').on('change', getBeds);
}

function getBeds() {
  $('#beds').html('<option>LOADING...</option>'); // Set loading message
  $('#beds').prop('disabled', true); // Disable the dropdown

  var action = 'getBeds';
  var wards = $('#wards').val();
  var data = { action: action, wards: wards };

  $.ajax({
    type: 'POST',
    url: "config/code.php",
    data: data,
    cache: false,
    dataType: 'json',
    success: function (data) {
      // Check for success and populate the dropdown
      if (data.success) {
        populateBedsDropdown(data.beds); // Pass the entire array of beds
      } else {
        console.error('Error:', data.message);
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', status, error);
    },
  });
}

function populateBedsDropdown(beds) {
  var bedsDropdown = document.getElementById('beds');

  // Clear existing options
  bedsDropdown.innerHTML = '';

  // Add options based on the fetched data
  for (var i = 0; i < beds.length; i++) {
    var option = document.createElement('option');
    option.value = beds[i].bed_id; // Assuming the bed object has a 'bed_id' property
    option.id= beds[i].bed_id;

    // Concatenate bed_number and bed_status_description
    var optionText = beds[i].bed_number + " - " + beds[i].bed_description;

    option.textContent = optionText;
    bedsDropdown.appendChild(option);
  }

  // Enable the dropdown after populating options
  $('#beds').prop('disabled', false);
}



function vital_input() {
  // Collect input values
  var patientData = {
    action: "vital_input",
    patient_id: $('#patient_id').val(),
    ward: $('#wards').val(),
    stage: $('#stage').val(),
    bed: $('#beds').val(),
    note: $('#note').val(),
    temperature: $('#temperature').val(),
    bp: $('#bp').val(),
    pulse: $('#pulse').val(),
    respiratory: $('#respiratory').val(),
    weight: $('#weight').val(),
    height: $('#height').val(),
    intake: $('#intake').val(),
    output: $('#output').val(),
    spo2: $('#spo2').val(),
    bmi: $('#bmi').val(),
    body_fat: $('#body_fat').val(),
    muscle_mass: $('#muscle_mass').val(),
    musc: $('#musc').val(), // Consider renaming this for clarity
    resting_metabolism: $('#resting_metabolism').val(),
    body_age: $('#body_age').val(),
    bmi_for_age: $('#bmi_for_age').val(),
    visceral_fat: $('#visceral_fat').val(),
    head_circumference: $('#head_circumference').val(),
    waist_circumference: $('#waist_circumference').val(),
    hip_circumference: $('#hip_circumference').val(),
    w_hr: $('#w_hr').val()
  };

  // Disable the submit button and change text
  var $btnSubmit = $('#btn_submit');
  var btnText = $btnSubmit.html();
  $btnSubmit.html('Processing...');
  $btnSubmit.prop('disabled', true);

  // Send AJAX request
  $.ajax({
    type: 'POST',
    url: "config/code.php",
    data: patientData,
    cache: false,
    dataType: 'json',
    success: function (data) {
      if (data.success) {

        alert("Patient Vital has been updated successfully");
        $btnSubmit.html('Save All...');
        $btnSubmit.prop('disabled', true);
      } else {
        console.error('Error:', data.message);
        $btnSubmit.html(btnText);
        $btnSubmit.prop('disabled', false);
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', status, error);
      $btnSubmit.html(btnText);
      $btnSubmit.prop('disabled', false);
    }
  });
}



//dont touch i would fix this later, good night😎

//  const links =  document.querySelectorAll('#links');
//  function toggleSidebarLinks(clickedLink){
//      links.forEach(link => link.classList.remove('active'));
//      clickedLink.classList.add('active');
//  }
 
//  links.forEach(link => {
//      link.addEventListener('click', function() {
//          toggleSidebarLinks(this);
//      });
//  });