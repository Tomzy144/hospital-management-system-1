const addEvent  = document.getElementById("btn");
const show = document.querySelector(".drop-down")
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");
const eventfill = document.querySelector("#btn-drop-down")

// const doctorsData = {
//   cardiologist: ['Dr. Tomiwa', 'Dr. Johnson'],
//   dermatologist: ['Dr. Kingsley', 'Dr. White'],
//   surgeon:['Dr. Priceless', 'Dr John'],
//   psychiatrist:['Dr. Towa', 'Dr Paul'],
//   family_medicine:['Dr. Praise', 'Dr Trinity'],
//   dermatologist: ['Dr.Tom', 'Dr Ruth' ],
//   anaesthesiology:['Dr. Drake', 'Dr. Drake'],
//   rheumatologist:['Dr. Peace', 'Dr Jude'],
//   endocrinologist:['Dr. Grace', 'Dr. Houston'],
//   nephrologist:['Dr. Goodness', 'Dr Goodnews'],
//   neurologist:['Dr. Goodness', 'Dr.Peace'],
//   pediatrician:['Dr. Fooad', 'Dr. Fooad'],
//   urologist:['Dr. Uro', 'Dr. Fooad'],
//   radiologist:['Dr. Fooad', 'Dr. Fooad'],
//   dentist:['Dr. Gofade', 'Dr. Fooad'],
//   pulmonologist:['Dr. Foatt', 'Dr. Fooad'],
//   podiatristian:['Dr. Foatt', 'Dr. Fogad'],
//   emergency_physician:['Dr. Good', 'Dr. Tom'],
//   anaesthesiologist:['Dr. Green', 'Dr. Green'],
//   cardiologist:['Dr Ben', 'Dr. White'],
//   oncologist:['Dr. Bemson', 'Dr. Green'],
//   gastroenterologist:['Dr. Houston', 'Dr. Green'],
//   ophthanlmologist:['Dr. Jous', 'Dr. King'],
//   cardology:['Dr. Funke', 'Dr Roseline'],
//   allergist:['Dr. Postel', 'Dr.Houston'],
//   orthopedic_surgoen:['Dr.Lookman', 'Dr. Chelsea'],
// };

// function getDoctors() {
//   const selectedRole = document.getElementById('roles').value;
//   const doctorsSelect = document.getElementById('doctors');
//   doctorsSelect.innerHTML = ''; // Clear previous options

//   // Populate the doctors select box based on the selected role
//   doctorsData[selectedRole].forEach(doctor => {
//       const option = document.createElement('option');
//       option.value = doctor;
//       option.text = doctor;
//       doctorsSelect.appendChild(option);
//   });
// }

// // Initial population of doctors based on the default selected role
// getDoctors();
//Manipulate sidebar 
toggleOpen.addEventListener("click", function() {
    envelope.innerHTML = '  Chat';
    user.innerHTML =   '  Account';
    calender.innerHTML = '  Appoitment';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "none";
    toggleClose.style.display = "block";

})

toggleClose.addEventListener("click", function() {
    envelope.innerHTML = ' '
    user.innerHTML =   '  ';
    calender.innerHTML = '  ';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "block";
    toggleClose.style.display = "none";
    
})

eventfill.addEventListener("click", function() {
  document.querySelector(".event-form").classList.toggle("hidden")
  const pageContent = document.querySelector('.contents');
  pageContent.style.display = "none"
})


// function transitionContent() {
//   document.body.style.opacity = '1'; /* Set opacity to 1 for the body */
//   const pageContent = document.querySelector('.contents');
//   pageContent.style.transform = 'translate(-0, -65%)'; /* Move in from the right */
//   pageContent.style.width = '100%'; /* Change the width, adjust as needed */
// }
 
// window.onload = transitionContent;


addEvent.addEventListener("click", function(){
    show.classList.remove("hidden")

})
document.addEventListener('DOMContentLoaded', function () {
    // Select the body element
    var body = document.body;

    // Animate the body element
    body.animate([
      { opacity: 0, transform: 'translateY(-50px)' },
      { opacity: 1, transform: 'translateY(0)' }
    ], {
      duration: 1000, // 1 second duration
      easing: 'ease-in-out', // Use ease-in-out timing function
      fill: 'forwards' // The element will retain the styles from the last keyframe
    });
  });




function submitRoles(){
const roles = document.querySelector(".doctors-roles")
roles.classList.toggle("hidden")
const appoitment = document.querySelector(".appoitment-calender");
appoitment.classList.toggle("hidden")
const appoitment_form = document.querySelector(".appoitment-form")
appoitment_form.classList.remove("hidden")

const selectedRole = document.getElementById('roles').value;
const selectedDoctor = document.getElementById('doctors').value;

if (selectedRole && selectedDoctor) {
  // alert(`Selected Doctor: ${selectedDoctor}\nRole: ${selectedRole}`);
  document.getElementById("doctor").value = selectedDoctor;
  document.getElementById("role").value = selectedRole;
} else {
  alert('Please select a doctor role and it  doctor.');
}


}







//////////////////////tomiwa's script









// Delay the execution of existingFunction by 1 second
setTimeout(function() {
  getRoles();
}, 1000);


document.addEventListener("DOMContentLoaded", function() {
  // Call the function to populate the dropdown when the page is fully loaded
  getRoles();
});

function getRoles() {

  $('#roles').html('<option>LOADING...</option>'); // Set loading message
  $('#roles').prop('disabled', true); // Disable the dropdown

  var action = 'getRoles';
  var data = { action: action }; // Use an object to define data

  $.ajax({
    type: "POST",
    url: "appointment-booking-code/appointment-booking-code.php",
    data: data, // Pass the data object directly
    cache: false,
    dataType: 'json',
    success: function (data) {
      // Check for success and populate the dropdown
      if (data.success) {
        populateRolesDropdown(data.roles); // Assuming 'roles' is the key for roles in your response
      } else {
        console.error('Error:', data.message);
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', status, error);
    }
  });
}

function populateRolesDropdown(roles) {
  var rolesDropdown = document.getElementById("roles");

  // Clear existing options
  rolesDropdown.innerHTML = '';

  // Add options based on the fetched data
  for (var i = 0; i < roles.length; i++) {
    var option = document.createElement("option");
    option.value = roles[i].doctor_role_name; // Assuming the role object has a 'role_id' property
    option.textContent = roles[i].doctor_role_name; // Assuming the role object has a 'doctor_role_name' property
    rolesDropdown.appendChild(option);
  }

  // Enable the dropdown after populating options
  $('#roles').prop('disabled', false);
}

/////////////////////////////////







function getDoctors() {
  $('#doctors').html('<option>LOADING...</option>'); // Set loading message
  $('#doctors').prop('disabled', true); // Disable the dropdown

  var action = 'getDoctors';
  var role = $('#roles').val(); 
  var dataString = 'action=' + action + '&role=' + role;

  $.ajax({
    type: 'POST',
    url: 'appointment-booking-code/appointment-booking-code.php',
    data: dataString,
    cache: false,
    dataType: 'json',
    success: function (data) {
      // Check for success and populate the dropdown
      if (data.success) {
        populateDoctorsDropdown(data.doctors); // Pass the entire array of doctors
      
      } else {
        console.error('Error:', data.message);
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', status, error);
    },
  });
}

function populateDoctorsDropdown(doctors) {
  var doctorsDropdown = document.getElementById('doctors');

  // Clear existing options
  doctorsDropdown.innerHTML = '';

  // Add options based on the fetched data
  for (var i = 0; i < doctors.length; i++) {
    var option = document.createElement('option');
    option.value = doctors[i].doctor_id; // Assuming the doctor object has a 'doctor_id' property
    option.textContent = doctors[i].fullname; // Assuming the doctor object has a 'fullname' property
    doctorsDropdown.appendChild(option);
  }

  // Enable the dropdown after populating options
  $('#doctors').prop('disabled', false);
}






function appointment_booker_validation(){

  var patient_id = $('#patient_id').val();
	var fullname = $('#name').val();



  if((patient_id=='')||(fullname=='')){
		//$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> USER ERROR!<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
    alert("Fill in the neccessary field");
    }else{
		
  var action='appointment_booker_check';
    
   //////////////// get btn text ////////////////
   var btn_text=$('#sub').html();
   $('#sub').html('Authenticating...');
   document.getElementById('sub').disabled=true;
   ////////////////////////////////////////////////	


    var dataString ='action='+ action+'&patient_id='+ patient_id + '&fullname='+ fullname;
   
   $.ajax({
   type: "POST",
   url: "appointment-booking-code/appointment-booking-code.php",
   data: dataString,
   dataType: 'json',
   cache: false,
   success: function(data){
    var scheck = data.check;

   if(scheck==1){
   // $('#success-div').html('<div><i class="fa fa-check"></i></div> LOGIN SUCCESSFUL!').fadeIn(500).delay(5000).fadeOut(100);
 
    appointment_booker();
    
    // window.alert("Welcome Back")
   }else {
    window.alert("This Patient Profile does not exists\n Please Check the Patient Name and Patient_ID for possible Error(s)");
          // $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Account Suspended<br /><span>Contact the admin for help</span>').fadeIn(500).delay(5000).fadeOut(100);
    }
    $('#sub').html(btn_text);
    document.getElementById('sub').disabled=false;
       $('#sub').html('Submit');
   }
   });
}


}




function appointment_booker(){
  var role = $('#roles').val();
	var doctor = $('#doctors').val();
  var date =$('#date').val();
  var name =$('#name').val();
  var reason =$('#reason').val();
  var time =$('#time').val();
  var patient_id = $('#patient_id').val();
  var role_id;


  // Map the role to the corresponding doctor_role_id
  switch (role) {
    case 'cardiologist':
      role_id = '1';
      break;
    case 'dermatologist':
      role_id = '2';
      break;
    case 'surgeon':
      role_id = '3';
      break;
    case 'psychiatrist':
      role_id = '4';
      break;
    case 'family_medicine':
      role_id = '5';
      break;
    case 'anaesthesiology':
      role_id = '7';
      break;
    case 'rheumatologist':
      role_id = '8';
      break;
    case 'endocrinologist':
      role_id = '9';
      break;
    case 'nephrologist':
      role_id = '10';
      break;
    case 'neurologist':
      role_id = '11';
      break;
    case 'pediatrician':
      role_id = '12';
      break;
    case 'urologist':
      role_id = '13';
      break;
    case 'radiologist':
      role_id = '14';
      break;
    case 'dentist':
      role_id = '15';
      break;
    case 'pulmonologist':
      role_id = '16';
      break;
    case 'podiatristian':
      role_id = '17';
      break;
    case 'emergency_physician':
      role_id = '18';
      break;
    case 'anaesthesiologist':
      role_id = '19';
      break;
    case 'oncologist':
      role_id = '21';
      break;
    case 'gastroenterologist':
      role_id = '22';
      break;
    case 'ophthalmologist':
      role_id = '23';
      break;
    case 'cardology':
      role_id = '24';
      break;
    case 'allergist':
      role_id = '25';
      break;
    case 'orthopedic_surgeon':
      role_id = '26';
      break;
    default:
      role_id = ''; // Set a default value or handle the case when the role is not recognized
  }


	if((role_id=='')||(doctor=='')||(date=='')||(patient_id=='')||(name=='')||(reason=='')||(time=='')){
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> USER ERROR!<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
    alert("Fill the neccessary fields");
    }else{
		 //////////////// get btn text ////////////////
         $('#sub').html('PROCESSING...');
         document.getElementById('sub').disabled=true;
//  ////////////////////////////////////////////////	
		
		  var action = 'appointment_booker';		 
          var dataString ='action='+ action+'&role_id='+ role_id +'&doctor='+ doctor+'&date='+ date +'&patient_id='+ patient_id+'&name='+ name+'&reason='+ reason+'&time='+ time;
          $.ajax({
          type: "POST",
          url: "appointment-booking-code/appointment-booking-code.php",
          data: dataString,
          cache: false,
          dataType: 'json',
          cache: false,
          success: function(data){
                  var scheck = data.check;
                  // var email = data.email;
                  if(scheck==0){ //user Active
                   // $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> REGISTRATION ERROR!<br /><span>Email Address Cannot Be Used</span>').fadeIn(500).delay(5000).fadeOut(100);
                    alert("This appointment already exists");
                }else{ //user suspended
				//	$('#success-div').html('<div><i class="bi-check"></i></div> STAFF REGISTERED SUCCESSFULLY').fadeIn(500).delay(5000).fadeOut(100);
                
                    alert("appointment Submitted Successfully");
                    location.reload(true);
                }
                $('#sub').html('Continue');
                document.getElementById('sub').disabled=false;


            } 
				});
	}
}	


