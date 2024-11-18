
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
$('.login-div').hide();
$('#'+next_id).fadeIn(1000);
}




function _expand_link(ids){
    //  $('#'+divid).toggle(500);
      $('#'+ids+'-li').toggle('slow');
}
 
   
function _expand_div(ids){
//  $('#'+divid).toggle(500);
    $('#'+ids+'-lis').toggle('slow');
}
 




function alert_close(){
    $('.overlay-div-in').html('').fadeOut(200);
}



$(function() {
    view = {
       UpdatePreview: function(obj){
          if (!window.FileReader){
             // do nothing
          }else{
          var reader= new FileReader();
          var target= null;
          reader.onload = function(e){
             target = e.target || e.srcElement;
          $('#my_passport').prop("src", target.result);
          };
                reader.readAsDataURL(obj.files[0]);
       }
    }
    };
});


$(function() {
    staff = {
       UpdatePreview: function(obj){
          if (!window.FileReader){
             // do nothing
          }else{
          var reader= new FileReader();
          var target= null;
          reader.onload = function(e){
             target = e.target || e.srcElement;
          $('#passport_staff').prop("src", target.result);
          };
                reader.readAsDataURL(obj.files[0]);
       }
    }
    };
});


$(function(){
    Test = {
        UpdatePreview: function(obj){
          // if IE < 10 doesn't support FileReader
          if(!window.FileReader){
             // don't know how to proceed to assign src to image tag
          } else {
			  _upload_profile_pix();
             var reader = new FileReader();
             var target = null;

             reader.onload = function(e) {
              target =  e.target || e.srcElement;
               $("#passport1,#passport2,#passport3").prop("src", target.result);
             };
              reader.readAsDataURL(obj.files[0]);
          }
        }
    };
});




    function _update_user_profile(staff_id){
        var fullname = $('#fullname').val();
        var email = $('#email').val();
        var phonenumber = $('#phonenumber').val();  
       // var role_id = $('#role_id').val();
        var status_id = $('#status_id').val();
        if((fullname=='')||(email=='')||(phonenumber=='')||(status_id=='')){
            $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> USER ERROR!<br /><span>Fill the neccessary Fields  to continue</span>').fadeIn(500).delay(5000).fadeOut(100);
                }else{
                

            $('#update-user-btn').html('Updating...');
            document.getElementById('update-user-btn').disabled=true;

        var action ='update_user_profile';
        var dataString ='action='+ action+'&staff_id='+ staff_id+'&fullname='+ fullname+'&email='+ email+'&phonenumber='+ phonenumber+'&status_id='+ status_id+'&passport='+ passport;
         $.ajax({
            type: "POST",
            url: "config/code.php",
            data: dataString,
            cache: false, 
            success: function(){
              $('#success-div').html('<div><i class="bi-check"></i></div> PROFILE UPDATED SUCCESSFULLY').fadeIn(500).delay(5000).fadeOut(100);
              _user_profile('dashboard',staff_id);
            
            $('#update-user-btn').html('<i class="bi-check2"></i> SUBMIT');
            document.getElementById('update-user-btn').disabled=false;
        }
    });
}
}	


function _upload_profile_pix(){
		var action = 'update_profile_pix';
        var file_data = $('#passport').prop('files')[0];
		if (file_data==''){}else{ 
        var form_data = new FormData();                  
        form_data.append('passport', file_data);
        form_data.append('action', action);
        $.ajax({
            url: "config/code.php",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(html){
		    $('#success-div').html('<div><i class="bi-check"></i></div> PROFILE PICTURE UPDATED SUCCESSFULLY').fadeIn(500).delay(5000).fadeOut(100);
            $('#passport').val('');
			}
        });
		}
}












    