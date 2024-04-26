// 'use strict';
//PASSWORD //KING CODE
function show_staff_password() {
    const staff_password = $('.all_password');
    const _showdoc_password = $('#_showdoc_password');
    const _show_nurse_password = $('#_show_nurse_password');
    const _show_recep_password = $('#_show_recep_password');
    const _show_lab_password = $('#_show_lab_password');
    const _lock_doc_password = $('#_lock_doc_password');
    const _lock_lab_password = $('#_lock_lab_password');
    const _lock_recep_password = $('#_lock_recep_password');
    const _lock_nurse_password = $('#_lock_nurse_password');

    if (!_lock_doc_password.hasClass('hide') || !_lock_recep_password.hasClass('hide') || !_lock_nurse_password.hasClass('hide')|| !_lock_lab_password.hasClass('hide')) {
        staff_password.prop('type', 'text');
        _showdoc_password.removeClass('hide');
        _show_recep_password.removeClass('hide');
        _show_nurse_password.removeClass('hide');
        _show_lab_password.removeClass('hide');
        _lock_doc_password.addClass('hide');
        _lock_lab_password.addClass('hide');
        _lock_recep_password.addClass('hide');
        _lock_nurse_password.addClass('hide');
        console.log('Shown password');
    } else {
        staff_password.prop('type', 'password');
        _showdoc_password.addClass('hide');
        _show_recep_password.addClass('hide');
        _show_nurse_password.addClass('hide');
        _show_lab_password.addClass('hide');
        _lock_doc_password.removeClass('hide');
        _lock_lab_password.removeClass('hide');
        _lock_recep_password.removeClass('hide');
        _lock_nurse_password.removeClass('hide');
        console.log('Hidden password');
    }
}


function show_admin_password() {
  const admin_password = $('#admin_password');
  const eyes_admin = $('#show_admin_password');
  const eyes_slash_admin = $('#lock_admin_password');

     if (!eyes_slash_admin.hasClass('hide')) {
        admin_password.prop('type', 'text');
        eyes_admin.removeClass('hide');
        eyes_slash_admin.addClass('hide');
        console.log('Shown password');
    } else {
        admin_password.prop('type', 'password');
        eyes_admin.addClass('hide');
        eyes_slash_admin.removeClass('hide');
        console.log('Hidden password');
    }
}


show_staff_password()
show_admin_password()



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
    $('.hidden')
    $('.login-div').hide(); // Hide elements with class 'login-div'
    $('.login-div').removeClass('hidden');
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
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
        $('#staff_verification').html(`Field in the neccessary field <i class="bi-exclamation-triangle"></i></i>`)
        $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
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
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').removeClass('vf');
    $('#staff_verification').html('<div>LOGIN SUCCESSFUL! <i class="bi bi-hand-thumbs-up-fill"></i></div> ').fadeIn(100).fadeOut(1000);
    $('#loginform').submit();
    
   }else if(scheck==2){
    $('#staff_verification').html(`Account does not exist <i class="bi-exclamation-triangle"></i>`)
    $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').addClass('vf');
           $('#staff_verification').html('<div></div> Account Suspended<br /><span>Contact the admin for help</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
    }else{
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
    $('#staff_verification').html('<div></div> Login Error!<br /><span>Invalid Login Details</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
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
   

        







// Delay the execution of existingFunction by 1 second
setTimeout(function() {
    getWards();
  }, 1000);
  
  
  document.addEventListener("DOMContentLoaded", function() {
    // Call the function to populate the dropdown when the page is fully loaded
    getWards();
  });
  
  


///////////////doctors


function _doctor_sign_in(){ 
    var doctor_email = $('#doctor_email').val();
    var doctor_password = $('#doctor_password').val();
    var doctor_id = $('#doctor_id').val();
    if((doctor_email!='')&&(doctor_password!='')&&(doctor_id!='')){
        doctor_login(doctor_email,doctor_password,doctor_id);
    }else{
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
        $('#staff_verification').html(`Field in the neccessary field <i class="bi-exclamation-triangle"></i></i>`)
        $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
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
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').removeClass('vf');
    $('#staff_verification').html('<div>LOGIN SUCCESSFUL! <i class="bi bi-hand-thumbs-up-fill"></i></div> ').fadeIn(100).fadeOut(1000);
    $('#doctor_loginform').submit();

    
    
   }else if(scheck==2){
    $('#staff_verification').html(`Account does not exist <i class="bi-exclamation-triangle"></i>`)
    $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').addClass('vf');
           $('#staff_verification').html('<div></div> Account Suspended<br /><span>Contact the admin for help</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
    }else{
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
    $('#staff_verification').html('<div></div> Login Error!<br /><span>Invalid Login Details</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
    // window.alert("Invalid Login Details")
    }
    $('#doctor_login_btn').html(btn_text);
    document.getElementById('doctor_login_btn').disabled=false;
       $('#doctor_login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
   }
   });
}



/////lab login



function lab_sign_in(){ 
    var lab_scientist_email = $('#lab_scientist_email').val();
    var lab_scientist_password = $('#lab_scientist_password').val();
    var lab_scientist_id = $('#lab_scientist_id').val();
    if((lab_scientist_email!='')&&(lab_scientist_password!='')&&(lab_scientist_id!='')){
        lab_login(lab_scientist_email,lab_scientist_password,lab_scientist_id);
    }else{
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
        $('#staff_verification').html(`Field in the neccessary field <i class="bi-exclamation-triangle"></i></i>`)
        $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
    }
};




///////////////////// doctor login ///////////////////////////////////////////
function lab_login(lab_scientist_email,lab_scientist_password,lab_scientist_id){
    var action='lab_login_check';
    
   //////////////// get btn text ////////////////
   var btn_text=$('#lab_login_btn').html();
   $('#lab_login_btn').html('Authenticating...');
   document.getElementById('lab_login_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var dataString ='action='+ action+'&lab_scientist_email='+ lab_scientist_email + '&lab_scientist_password='+ lab_scientist_password + '&lab_scientist_id='+ lab_scientist_id;
   
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   dataType: 'json',
   cache: false,
   success: function(data){
    var scheck = data.check;

   if(scheck==1){
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').removeClass('vf');
    $('#staff_verification').html('<div>LOGIN SUCCESSFUL! <i class="bi bi-hand-thumbs-up-fill"></i></div> ').fadeIn(100).fadeOut(1000);
    $('#lab_loginform').submit();
    // window.parent("location=doctor/");
    
    
   }else if(scheck==2){
    $('#staff_verification').html(`Account does not exist <i class="bi-exclamation-triangle"></i>`)
    $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').addClass('vf');
           $('#staff_verification').html('<div></div> Account Suspended<br /><span>Contact the admin for help</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
    }else{
        $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
    $('#staff_verification').html('<div></div> Login Error!<br /><span>Invalid Login Details</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
    }
    $('#lab_login_btn').html(btn_text);
    document.getElementById('lab_login_btn').disabled=false;
       $('#lab_login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
   }
   });
}

///////nurse login 







function _nurse_sign_in(){ 
  var nurse_email = $('#nurse_email').val();
  var nurse_password = $('#nurse_password').val();
  var nurse_id = $('#nurse_id').val();
  if((nurse_email!='')&&(nurse_password!='')&&(nurse_id!='')){
      nurse_login(nurse_email,nurse_password,nurse_id);
  }else{
    $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
        $('#staff_verification').html(`Field in the neccessary field <i class="bi-exclamation-triangle"></i></i>`)
        $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
  }
};




///////////////////// nurse login ///////////////////////////////////////////
function nurse_login(nurse_email,nurse_password,nurse_id){
  var action='nurse_login_check';
  
 //////////////// get btn text ////////////////
 var btn_text=$('#nurse_login_btn').html();
 $('#nurse_login_btn').html('Authenticating...');
 document.getElementById('nurse_login_btn').disabled=true;
 ////////////////////////////////////////////////	
  
  var dataString ='action='+ action+'&nurse_email='+ nurse_email + '&nurse_password='+ nurse_password + '&nurse_id='+ nurse_id;
 
 $.ajax({
 type: "POST",
 url: "config/code.php",
 data: dataString,
 dataType: 'json',
 cache: false,
 success: function(data){
  var scheck = data.check;

 if(scheck==1){
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').removeClass('vf');
    $('#staff_verification').html('<div>LOGIN SUCCESSFUL! <i class="bi bi-hand-thumbs-up-fill"></i></div> ').fadeIn(100).fadeOut(1000);
  $('#nurse_loginform').submit();
  // window.parent("location=nurse/");
  
  
 }else if(scheck==2){
    $('#staff_verification').html(`Account does not exist <i class="bi-exclamation-triangle"></i>`)
    $('#staff_verification').fadeIn(500).delay(2000).fadeOut(1000);
    $('#staff_verification').removeClass('hide');
    $('#staff_verification').addClass('vf');
           $('#staff_verification').html('<div></div> Account Suspended<br /><span>Contact the admin for help</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
  }else{
    $('#staff_verification').removeClass('hide');
        $('#staff_verification').addClass('vf');
    $('#staff_verification').html('<div></div> Login Error!<br /><span>Invalid Login Details</span> <i class="bi-exclamation-triangle"></i>').fadeIn(500).delay(2000).fadeOut(1000);
  }
  $('#nurse_login_btn').html(btn_text);
  document.getElementById('nurse_login_btn').disabled=false;
     $('#nurse_login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
 }
 });
}


