
   let firstTimerTextChange = document.querySelector('#timer');
   firstTimerTextChange.style.color = '#ff0000';
    

   //DROPDOWN FOR LABOURATORY EXAMINATION


//PATIENT PERSONAL INFORMATION
    const patientInfo = document.querySelector(".patient_info")
    const info_open = document.querySelector("#info_open");
    const info_close = document.querySelector("#info_close");
    const info = document.querySelector("#info");

        patientInfo.addEventListener("click", function(){
        info.classList.toggle("info-hidden");
        info_open.style.display = "none";
        info_close.style.display = "block";
    
            if(info.classList.contains("info-hidden")){
                info_open.style.display = "block";
                info_close.style.display = "none";
            }

        })


        
   //BACK ARROW TO THE DASHBOARD
   function backWardArrow(){
    var urlBackwardArrow = 'patients.php';
    window.parent(location=(urlBackwardArrow));
  
}
    
    
////////////////////////////////////////////////////


//////////////tomzy's script 


function patients_profile_page(patient_id) {
    // var patient_id = row.getAttribute('data-patient-id');
    var action = 'patients_page';
    var dataString = 'action=' + action + '&patient_id=' + patient_id;

    $.ajax({
        type: "POST",
        url: "../../../backend/config/code.php",
        data: dataString,
        dataType: 'json',
        cache: false,
        success: function(data) {
            // Handle the response from the server
            // You can use the 'patient_id' sent from the server if needed
            var receivedPatientId = data.patient_id;
            console.log(receivedPatientId);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle AJAX request errors
            console.error("AJAX Error: " + textStatus, errorThrown);
        }
    });
}

