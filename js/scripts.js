

function _get_page(page){
    $('#more-info').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
    action='get_page';
    var dataString ='action='+ action+'&page='+ page;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
        $('#more-info').html(html);
    }
    });
}



function _next_page(next_id) {
    $('.overlay').css('display', 'block'); // Display overlay
    $('.login-div').hide(); // Hide elements with class 'login-div'
    $('#'+next_id).fadeIn(1000); // Fade in element with specified ID
}

function cancel(){
    $('.overlay').css('display', 'none'); // Display overlay
    $('.login-div').hide(); // Hide elements with class 'login-div'
}


function _sign_in(){ 
    var email = $('#email').val();
    var password = $('#password').val();
    var user_id = $('#user_id').val();
    if((email!='')&&(password!='')&&(user_id!='')){
        user_login(email,password,user_id);
    }else{
        $('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
        window.alert("Fill the neccessary field")
    }
};




///////////////////// user login ///////////////////////////////////////////
function user_login(email,password,user_id){
    var action='record_login_check';
    
   //////////////// get btn text ////////////////
   var btn_text=$('#login_btn').html();
   $('#login_btn').html('Authenticating...');
   document.getElementById('login_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var dataString ='action='+ action+'&email='+ email + '&password='+ password + '&user_id='+ user_id;
   
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   dataType: 'json',
   cache: false,
   success: function(data){
    var scheck = data.check;

   if(scheck==1){
    $('#success-div').html('<div><i class="fa fa-check"></i></div> LOGIN SUCCESSFUL!').fadeIn(500).delay(5000).fadeOut(100);
    $('#loginform').submit();
    window.alert("Welcome Back");
    
   }else if(scheck==2){
    window.alert("Account does not exists")
           $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Account Suspended<br /><span>Contact the admin for help</span>').fadeIn(500).delay(5000).fadeOut(100);
    }else{
    $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Login Error!<br /><span>Invalid Email or Password</span>').fadeIn(500).delay(5000).fadeOut(100);
    window.alert("Invalid Login Details")
    }
    $('#login_btn').html(btn_text);
    document.getElementById('login_btn').disabled=false;
       $('#login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
   }
   });
}




function _proceed_reset_password(){
    var email = $('#reset_password_email').val();
    if((email=='')||(email.indexOf('@')<=0)){
        window.alert("enter your email");
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Enter Your Email Address<br /><span></span>').fadeIn(500).delay(5000).fadeOut(100);
    }else{
   //////////////// get btn text ////////////////
   var btn_text=$('#reset_pwd_btn').html();
   $('#reset_pwd_btn').html('Processing...');
   document.getElementById('reset_pwd_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var action='proceed_reset_password';
    var dataString ='action='+ action+'&email='+ email;
    $.ajax({
    type: "POST",
    url: "backend/config/code.php",//otp-reset.php
    data: dataString,
    cache: false,
    dataType: 'json',
    cache: false,
    success: function(data){
            var scheck = data.check;
            var staff_id = data.staff_id;
                
            if(scheck==1){ //user Active
                window.alert("success");
                _reset_password(staff_id);
            }else if(scheck==2){ //user suspended
                window.alert("account suspended");
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Account Suspended<br /><span>Contact the admin for help</span>').fadeIn(500).delay(5000).fadeOut(100);
                window.alert("user suspended");
            }else{
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Login Error!<br /><span>Invalid INVALID  EMAIL ADDRESS</span>').fadeIn(500).delay(5000).fadeOut(100);
                window.alert("User does not exists");
            }
            $('#reset_pwd_btn').html(btn_text);
            document.getElementById('reset_pwd_btn').disabled=false;
   }
   });
   }
}



function _reset_password(staff_id){
    var action='reset_password';
    $('#next_2').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "backend/config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
        $('#next_2').html(html);
        // $('/../../frontend/otp.reset.php').html(html);
        // window.parent(location="../frontend/otp-reset.php").html(html);
    }
    });
}




function _check_password(){
	var password = $('#r_password').val();
	if (password==''){
    $('#pswd_info').hide();
    $('.pswd_info').fadeIn(500);
	}else{
    $('.pswd_info').hide();
		if(password.length<8){
			 $('#pswd_info').fadeIn(500);
		}else{
			if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
				$('#pswd_info').hide();
			  } else {
				 $('#pswd_info').fadeIn(500);
			  }
		}
	}
}





function _finish_reset_password(staff_id){
    var otp = $('#cotp').val();
    var password = $('#r_password').val();
    var cpassword = $('#r_cpassword').val();
    
    if((otp=='')||(password=='')||(cpassword=='')){
        window.alert("Please fill the neccessary field");
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill All Fields<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
    }else{
        
            if(password!=cpassword){
                window.alert("Passwords doesn't match");
                $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
            }else{
            if ((password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/))&&(password.length>=8)) {
    //////////////// get btn text ////////////////
            var btn_text=$('#finish-reset-btn').html();
            $('#finish-reset-btn').html('PROCESSING...');
            document.getElementById('finish-reset-btn').disabled=true;
    ////////////////////////////////////////////////	
        var action='finish_reset_password';
        var dataString ='action='+ action+'&staff_id='+ staff_id+'&otp='+ otp+'&password='+ password;
            $.ajax({
            type: "POST",
            url: "config/code.php",
            data: dataString,
            cache: false,
            dataType: 'json',
            cache: false,
            success: function(data){
            var scheck = data.check;
            if(scheck==1){
                _password_reset_completed(staff_id);
                window.alert("Password reset successful");
               window.parent(location="index.php").html(html);

            }else{
                $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> INVALID OTP<br /><span>Check the OTP and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
            $('#finish-reset-btn').html(btn_text);
            document.getElementById('finish-reset-btn').disabled=false;
            }
            }
        });
            }else{
            $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
              }
        
            }
    }
}



function _password_reset_completed(staff_id){
    var action='password_reset_completed';
    $('#next_2').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){$('#next_2').html(html);}
    });
}



 
function _resend_otp(ids,staff_id){
    var btn_text=$('#'+ids).html();
    $('#'+ids).html('SENDING...');
    var action='resend_otp';
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
            $('#success-div').html('<div><i class="bi-check"></i></div> OTP SENT<br /><span>Check your email inbox or spam</span>').fadeIn(500).delay(5000).fadeOut(100);
        $('#'+ids).html(btn_text);
    }
});
}


        // Simulated patient data
        const patients = [
            { id: 1, name: "John Doe" },
            { id: 2, name: "Jane Smith" },
            { id: 3, name: "Alice Johnson" },
            // Add more patient data here
        ];

        function searchPatients() {
            const searchInput = document.getElementById("searchInput");
            const searchResults = document.getElementById("searchResults");
            const searchTerm = searchInput.value.toLowerCase();
            
            // Clear previous search results
            searchResults.innerHTML = "";

            // Filter patients based on the search term
            const filteredPatients = patients.filter(patient => patient.name.toLowerCase().includes(searchTerm));

            // Display search results
            filteredPatients.forEach(patient => {
                const li = document.createElement("li");
                li.textContent = patient.name;
                searchResults.appendChild(li);
            });
        }
   

        
// function fetch_patient(patient_id){
//     var action='fetch_patient';
//     // $('#next_2').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
//     var dataString ='action='+ action+'&patient_id='+ patient_id;
//     $.ajax({
//     type: "POST",
//     url: "config/search.php",
//     data: dataString,
//     cache: false,
//     success: function(html){$('#next_2').html(html);}
//     });

// document.addEventListener('DOMContentLoaded', function() {
//     // Add 'fade-in' class to the body after the DOM content is loaded
//     document.body.classList.add('loaded');
// })


function _add_patient() {
    var fullname = $('#fullname').val();
    var phonenumber = $('#phonenumber').val();
    var dob = $('#dob').val();
    var gender1 = $('#gender1').is(':checked');
    var gender2 = $('#gender2').is(':checked');
    var address = $('#address').val();
    var kname = $('#kname').val();
    var krelationship = $('#krelationship').val();
    var kaddress = $('#kaddress').val();
    var kphonenumber = $('#kphonenumber').val();
    var kgender1 = $('#kgender1').is(':checked');
    var kgender2 = $('#kgender2').is(':checked');
    var occupation = $('#occupation').val();
    var past_obsterics = $('#past_obsterics').val();
    var medical_history = $('#medical_history').val();
    var sexual_history = $('#sexual_history').val();
    var past_disease = $('#past_disease').val();
    var family_disease = $('#family_disease').val();
    var past_surgery = $('#past_surgery').val();
    var category1 = $('#category1').is(':checked');
    var category2 = $('#category2').is(':checked');
    var category3 = $('#category3').is(':checked');
    var category4 = $('#category4').is(':checked');
    var category5 = $('#category5').is(':checked');
    var category6 = $('#category6').is(':checked');
    var category7 = $('#category7').is(':checked');
   
    var vgender;
    var vkgender;

    if (gender1) {
        vgender = 'Male';
    } else if (gender2) {
        vgender = 'Female';
    }

    if (kgender1) {
        vkgender = 'Female';
    } else if (kgender2) {
        vkgender = 'Male';
    }
/////for category
    var vcategory;

    if (category1) {
        vcategory = "1";
    } else if (category2) {
        vcategory = "2";
    } else if (category3) {
        vcategory = "3";
    } else if (category4) {
        vcategory = "4";
    } else if (category5) {
        vcategory = "5";
    } else if (category6) {
        vcategory = "6";
    } else if (category7) {
        vcategory = "7";
    }

    // if(wards.selectedIndex && beds.selectedIndex){
    //     var ward= `${wards.value}`;
    //     var bed =  `${beds.value}`;
    // }else{
    //     alert("Please select Ward And Bed")
    // }

    var bed = $('#beds option:selected').val();
    var ward = $('#wards option:selected').val();

    

	if((fullname=='')||(phonenumber=='')||(dob=='')||(address=='')||(vgender=='') ||(kname=='') ||(krelationship=='') ||(kaddress=='') ||(kphonenumber=='') ||(vkgender=='') ||(occupation=='')||(past_obsterics=='') ||(sexual_history=='') ||(past_disease=='')||(family_disease=='') ||(past_surgery=='')||(medical_history=='')||(vcategory=='')){
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> USER ERROR!<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
        window.alert("Fill All fields");
    }else{
		 //////////////// get btn text ////////////////
         $('#proceed-btn').html('PROCESSING...');
         document.getElementById('proceed-btn').disabled=true;
 ////////////////////////////////////////////////	
		
		  var action = 'add_patient';		 
          var dataString ='action='+ action+'&fullname='+ fullname + '&phonenumber='+ phonenumber +'&dob='+ dob+'&address='+ address+'&gender='+ vgender+'&kname='+ kname+'&krelationship='+ krelationship+'&kaddress='+ kaddress+'&kphonenumber='+ kphonenumber+'&kgender='+ vkgender+'&occupation='+ occupation+'&past_obsterics='+ past_obsterics+'&sexual_history='+ sexual_history+'&family_disease='+ family_disease+'&past_disease='+ past_disease+'&past_surgery='+ past_surgery+'&medical_history='+ medical_history+ '&category='+ vcategory + '&bed='+ bed+'&ward='+ ward;
          $.ajax({
          type: "POST",
          url: "config/code.php",
          data: dataString,
          cache: false,
          dataType: 'json',
          cache: false,
          success: function(data){
                  var scheck = data.check;
                  var  fpatient_id = data.patient_id;
                  var phonenumber = data.phonenumber;
                  
                  if(scheck==0){ //user Active
                    $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> REGISTRATION ERROR!<br /><span>Email Address Cannot Be Used</span>').fadeIn(500).delay(5000).fadeOut(100);
                    window.alert("Patient's phonenumber is already registered");
                }else{ //user suspended
					$('#success-div').html('<div><i class="bi-check"></i></div> STAFF REGISTERED SUCCESSFULLY').fadeIn(500).delay(5000).fadeOut(100);
                    // _get_page('active-staff','active-staff');
                    // alert_close();
                    window.alert("Registration Successful");
                    window.alert("This patient's ID is "+ fpatient_id );
                    location.reload(true);
                }
                $('#proceed-btn').html('<i class="bi-check2"></i> SUBMIT');
                document.getElementById('proceed-btn').disabled=false;
            } 
				});
	}
}	








// Delay the execution of existingFunction by 1 second
setTimeout(function() {
    getWards();
  }, 1000);
  
  
  document.addEventListener("DOMContentLoaded", function() {
    // Call the function to populate the dropdown when the page is fully loaded
    getWards();
  });
  
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
  


///////////////doctors


function _doctor_sign_in(){ 
    var doctor_email = $('#doctor_email').val();
    var doctor_password = $('#doctor_password').val();
    var doctor_id = $('#doctor_id').val();
    if((doctor_email!='')&&(doctor_password!='')&&(doctor_id!='')){
        doctor_login(doctor_email,doctor_password,doctor_id);
    }else{
        $('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
        window.alert("Fill the neccessary field")
    }
};




///////////////////// doctor login ///////////////////////////////////////////
function doctor_login(doctor_email,doctor_password,doctor_id){
    var action='doctor_login_check';
    
   //////////////// get btn text ////////////////
   var btn_text=$('#doctor_login_btn').html();
   $('#doctor_login_btn').html('Authenticating...');
   document.getElementById('doctor_login_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var dataString ='action='+ action+'&doctor_email='+ doctor_email + '&doctor_password='+ doctor_password + '&doctor_id='+ doctor_id;
   
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   dataType: 'json',
   cache: false,
   success: function(data){
    var scheck = data.check;

   if(scheck==1){
    $('#success-div').html('<div><i class="fa fa-check"></i></div> LOGIN SUCCESSFUL!').fadeIn(500).delay(5000).fadeOut(100);
    $('#doctor_loginform').submit();
    window.alert("Welcome Back");
    // window.parent("location=doctor/");
    
    
   }else if(scheck==2){
    window.alert("Account does not exists")
           $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Account Suspended<br /><span>Contact the admin for help</span>').fadeIn(500).delay(5000).fadeOut(100);
    }else{
    $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Login Error!<br /><span>Invalid Email or Password</span>').fadeIn(500).delay(5000).fadeOut(100);
    window.alert("Invalid Login Details")
    }
    $('#doctor_login_btn').html(btn_text);
    document.getElementById('doctor_login_btn').disabled=false;
       $('#doctor_login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
   }
   });
}


