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
         populateWardsDropdown(data.wards); // Assuming 'roles' is the key for roles in your response
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
     option.textContent = wards[i].ward_number; 
     wardsDropdown.appendChild(option);
   }
 
   // Enable the dropdown after populating options
   $('#wards').prop('disabled', false);
 }




 function getBeds() {
   $('#beds').html('<option>LOADING...</option>'); // Set loading message
   $('#beds').prop('disabled', true); // Disable the dropdown
 
   var action = 'getBeds';
   var wards = $('#wards').val();
   var dataString = 'action=' + action + '&wards=' + wards;
 
   $.ajax({
     type: 'POST',
     url: "config/code.php",
     data: dataString,
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
 
     // Concatenate bed_number and bed_status_description
     var optionText = beds[i].bed_number + " - " + beds[i].bed_description;
 
     option.textContent = optionText; 
     bedsDropdown.appendChild(option);
   }
 
   // Enable the dropdown after populating options
   $('#beds').prop('disabled', false);
 }



 /////////////////////////
 function vital_input(){
   var btn_text=$('#btn_submit').html();
   $('#btn_submit').html('Processing...');
   document.getElementById('btn_submit').disabled=true;
   
 }