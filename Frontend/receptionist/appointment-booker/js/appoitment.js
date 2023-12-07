const addEvent  = document.getElementById("btn");
const show = document.querySelector(".drop-down")
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");
const eventfill = document.querySelector("#btn-drop-down")

const doctorsData = {
  cardiologist: ['Dr. Tomiwa', 'Dr. Johnson'],
  dermatologist: ['Dr. Kingsley', 'Dr. White'],
  surgeon:['Dr. Priceless', 'Dr John'],
  psychiatrist:['Dr. Towa', 'Dr Paul'],
  family_medicine:['Dr. Praise', 'Dr Trinity'],
  dermatologist: ['Dr.Tom', 'Dr Ruth' ],
  anaesthesiology:['Dr. Drake', 'Dr. Drake'],
  rheumatologist:['Dr. Peace', 'Dr Jude'],
  endocrinologist:['Dr. Grace', 'Dr. Houston'],
  nephrologist:['Dr. Goodness', 'Dr Goodnews'],
  neurologist:['Dr. Goodness', 'Dr.Peace'],
  pediatrician:['Dr. Fooad', 'Dr. Fooad'],
  urologist:['Dr. Uro', 'Dr. Fooad'],
  radiologist:['Dr. Fooad', 'Dr. Fooad'],
  dentist:['Dr. Gofade', 'Dr. Fooad'],
  pulmonologist:['Dr. Foatt', 'Dr. Fooad'],
  podiatristian:['Dr. Foatt', 'Dr. Fogad'],
  emergency_physician:['Dr. Good', 'Dr. Tom'],
  anaesthesiologist:['Dr. Green', 'Dr. Green'],
  cardiologist:['Dr Ben', 'Dr. White'],
  oncologist:['Dr. Bemson', 'Dr. Green'],
  gastroenterologist:['Dr. Houston', 'Dr. Green'],
  ophthanlmologist:['Dr. Jous', 'Dr. King'],
  cardology:['Dr. Funke', 'Dr Roseline'],
  allergist:['Dr. Postel', 'Dr.Houston'],
  orthopedic_surgoen:['Dr.Lookman', 'Dr. Chelsea'],
};

function getDoctors() {
  const selectedRole = document.getElementById('roles').value;
  const doctorsSelect = document.getElementById('doctors');
  doctorsSelect.innerHTML = ''; // Clear previous options

  // Populate the doctors select box based on the selected role
  doctorsData[selectedRole].forEach(doctor => {
      const option = document.createElement('option');
      option.value = doctor;
      option.text = doctor;
      doctorsSelect.appendChild(option);
  });
}

// Initial population of doctors based on the default selected role
getDoctors();
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
  alert(`Selected Doctor: ${selectedDoctor}\nRole: ${selectedRole}`);
  document.getElementById("doctor").value = selectedDoctor;
  document.getElementById("role").value = selectedRole;
} else {
  alert('Please select a doctor role and ait  doctor.');
}


}



// $(document).ready(function() {
//   $('#calendar').fullCalendar({
//       header: {
//           left: 'prev,next today',
//           center: 'title',
//           right: 'month,agendaWeek,agendaDay'
//       },
//       defaultView: 'month',
//       events: [
//           {
//               title: 'Available Slot',
//               start: '2023-01-01T09:00:00',
//               end: '2023-01-01T10:00:00',
//           },
//           // Add more events as needed
//       ],
//       dayClick: function(date, jsEvent, view) {
//           // Redirect to another page with the selected date
//           window.location.href = 'anotherPage.html?selectedDate=' + moment(date).format('YYYY-MM-DD');
//       },
//   });
// });




//////////////////////tomiwa's script


// <input type="hidden" id="date"  value="">
// <input type="hidden" id="role"  value="">
// <input type="hidden" id="doctor"  value="">



// function appoitment_booker(staff_id){
//   var action='appointment_booker';
//   var role = document.getElementById('role').value;
//   var doctor =document.getElementById('doctor').value
//   var dataString ='action='+ action+'&staff_id='+ staff_id+'&role='+role+'&doctor='+doctor;
//   $.ajax({
//   type: "POST",
//   url: "../appointment-booking-code/appointment-booking-code.php",
//   data: dataString,
//   cache: false,
//   success: function(html){
//       // $('#next_2').html(html);
//       alert("Appointment Sent");
//       // $('/../../frontend/otp.reset.php').html(html);
//       // window.parent(location="../frontend/otp-reset.php").html(html);
//   }
//   });
// }






function appointment_booker(){
	var role = $('#role').val();
	var doctor = $('#doctor').val();
  var date =$('#date').val();
  var name =$('#name').val();
  var reason =$('#reason').val();
  var time =$('#time').val();

	if((role=='')||(doctor=='')||(date=='')||(name=='')||(reason=='')||(time=='')){
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> USER ERROR!<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
    alert("error");
    }else{
		 //////////////// get btn text ////////////////
         $('#sub').html('PROCESSING...');
         document.getElementById('sub').disabled=true;
 ////////////////////////////////////////////////	
		
		  var action = 'appointment_booker';		 
          var dataString ='action='+ action+'&role='+ role +'&doctor='+ doctor+'&date='+ date+'&name='+ name+'&reason='+ reason+'&time='+ time;
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
                    $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> REGISTRATION ERROR!<br /><span>Email Address Cannot Be Used</span>').fadeIn(500).delay(5000).fadeOut(100);
                    alert("this appointment already exists");
                }else{ //user suspended
					$('#success-div').html('<div><i class="bi-check"></i></div> STAFF REGISTERED SUCCESSFULLY').fadeIn(500).delay(5000).fadeOut(100);
                    // _get_page('active-staff','active-staff');
                    // alert_close()
                    alert("appointment Submitted Successfully");
                }
                $('#sub').html('Continue');
                document.getElementById('sub').disabled=false;


            } 
				});
	}
}	













// function appoitment_deleter(staff_id){
//   var action='reset_password';
//   $('#next_2').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
//   var dataString ='action='+ action+'&staff_id='+ staff_id;
//   $.ajax({
//   type: "POST",
//   url: "../../backend/config/code.php",
//   data: dataString,
//   cache: false,
//   success: function(html){
//       $('#next_2').html(html);
//       // $('/../../frontend/otp.reset.php').html(html);
//       // window.parent(location="../frontend/otp-reset.php").html(html);
//   }
//   });
// }