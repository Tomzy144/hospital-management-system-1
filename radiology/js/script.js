
const sections = document.querySelectorAll('.section');
const allProfiles = document.querySelectorAll('.allProfiles');
const links = document.querySelectorAll('.sidebar-body ul li');

function toggleSidebarLinks(clickedLink){
    links.forEach(link => link.classList.remove('active'));
    clickedLink.classList.add('active');
 }
links.forEach(link => {
    link.addEventListener('click', function() {
        toggleSidebarLinks(this);
    });
});
/////////////////////////////////////////////////////

function createDate(){
const now = new Date();
const options = {
day:'numeric',
month:'numeric',
year:'numeric',
hour:'numeric',
minute:'numeric',
second:'numeric',
}
const dateTime = new Intl.DateTimeFormat(navigator.language, options).format(now)
document.querySelector('.display__date').textContent = dateTime
}
setInterval(() => createDate());     
     
     //PROFILE IMAGE
     function displayUserProfile(){
        document.querySelector(".profile_account").classList.toggle("hide");
    };

    


   function appoitment_list_section(){
    $(".appoitment_section").removeClass('hide')
    $(".radiology_input").addClass("hide");
    $('.approved_appoitment').addClass('hide')
}
function approved_appoitment__section(){
    $('.approved_appoitment').removeClass('hide')
    $('.appoitment_section').addClass('hide')
    $('.radiology_input').addClass('hide')
}

function uploadResult(){
    $('.result').removeClass('hide')
    $('.radiology_input').removeClass('hide')
    $('.radiology_container').addClass('hide')
    }
    function closeResult(){
        $('.result').addClass('hide')
    $('.radiology_input').addClass('hide')
    $('.lab_container').addClass('hide')
    }
    
   //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPT
   const checkboxes = document.querySelectorAll(".checkbox_cal");
   checkboxes.forEach(function(checkbox){
   checkbox.checked = false;
   });
   function update_table(){
           const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
           
           tableBody.innerHTML = "";
           const checkboxes = document.querySelectorAll(".checkbox_cal");
           checkboxes.forEach(function(checkbox){
                   if(checkbox.checked){
                             // Create a new row
                           var newRow = tableBody.insertRow();

                   // Insert cells with checkbox value and label
                   var cell1 = newRow.insertCell(0);
                    cell1.textContent =checkbox.parentNode.textContent.trim().replace(/[^a-zA-Z\s]/g, '');
                   var cell2 = newRow.insertCell(1);
                   cell2.textContent = checkbox.value; 
                   }
           })
   }


//SUM ALL THE LAB TEST PRICES
window.onload = function() {
   const checkboxs = document.querySelectorAll(".checkbox_cal");
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

//TEST  BOOKING
function show_test_booking(){
   document.querySelector(".overlay").classList.remove("hide");
   document.querySelector(".test_booking").classList.remove("hide");
}
function hide_test_booking(){
   document.querySelector(".overlay").classList.add("hide");
   document.querySelector(".test_booking").classList.add("hide");
   const checkboxs = document.querySelectorAll(".checkbox");
   checkboxs.forEach(function(checkbox){
         checkbox.checked = false;
           })
}

   //SHOW RADIOLOGY INPUT SECTION
   function show_radiology_input(){
    $(".appoitment_section").addClass('hide')
    $(".radiology_input").removeClass("hide");
    $('.approved_appoitment').addClass('hide')
   }

   //RADIOGRAPHY SECTION
   function show_radiography_form(){
    document.querySelector(".radiography_form").classList.toggle("hide");
    document.querySelector("#radiography_plus_icon").style.display="none";
    document.querySelector("#radiography_minus_icon").style.display="block";
    if(document.querySelector(".radiography_form").classList.contains("hide")){
        document.querySelector("#radiography_plus_icon").style.display="block";
        document.querySelector("#radiography_minus_icon").style.display="none";
    }
   }

   //Tomography SECTION
   function show_tomography_scan_form (){
    document.querySelector(".tomography_scan_form").classList.toggle("hide");
    document.querySelector("#tomography_scan_plus_icon").style.display="none";
    document.querySelector("#tomography_scan_minus_icon").style.display="block";
    if(document.querySelector(".tomography_scan_form").classList.contains("hide")){
        document.querySelector("#tomography_scan_plus_icon").style.display="block";
        document.querySelector("#tomography_scan_minus_icon").style.display="none";
    }
   }
   //MAGNETIC SECTION
   function show_magnetic_form(){
    document.querySelector(".magnetic_form").classList.toggle("hide");
    document.querySelector("#magnetic_plus_icon").style.display="none";
    document.querySelector("#magnetic_minus_icon").style.display="block";
    if(document.querySelector(".magnetic_form").classList.contains("hide")){
        document.querySelector("#magnetic_plus_icon").style.display="block";
        document.querySelector("#magnetic_minus_icon").style.display="none";
    }
   }
   //ultrasound SECTION
   function show_ultrasound_form(){
    document.querySelector(".ultrasound_form").classList.toggle("hide");
    document.querySelector("#ultrasound_plus_icon").style.display="none";
    document.querySelector("#ultrasound_minus_icon").style.display="block";
    if(document.querySelector(".ultrasound_form").classList.contains("hide")){
        document.querySelector("#ultrasound_plus_icon").style.display="block";
        document.querySelector("#ultrasound_minus_icon").style.display="none";
    }
   }
   //nuclear SECTION
   function show_nuclear_form(){
    document.querySelector(".nuclear_form").classList.toggle("hide");
    document.querySelector("#nuclear_plus_icon").style.display="none";
    document.querySelector("#nuclear_minus_icon").style.display="block";
    if(document.querySelector(".nuclear_form").classList.contains("hide")){
        document.querySelector("#nuclear_plus_icon").style.display="block";
        document.querySelector("#nuclear_minus_icon").style.display="none";
    }
   }
   //fluoroscopy SECTION
   function show_fluoroscopy_form(){
    document.querySelector(".fluoroscopy_form").classList.toggle("hide");
    document.querySelector("#fluoroscopy_plus_icon").style.display="none";
    document.querySelector("#fluoroscopy_minus_icon").style.display="block";
    if(document.querySelector(".fluoroscopy_form").classList.contains("hide")){
        document.querySelector("#mammography_plus_icon").style.display="block";
        document.querySelector("#fluoroscopyr_minus_icon").style.display="none";
    }
   }
   //mammography SECTION
   function show_mammography_form(){
    document.querySelector(".mammography_form").classList.toggle("hide");
    document.querySelector("#mammography_plus_icon").style.display="none";
    document.querySelector("#mammography_minus_icon").style.display="block";
    if(document.querySelector(".mammography_form").classList.contains("hide")){
        document.querySelector("#mammography_plus_icon").style.display="block";
        document.querySelector("#mammography_minus_icon").style.display="none";
    }
   }
   //interventional_radiology SECTION
   function show_interventional_radiology_form(){
    document.querySelector(".interventional_radiology_form").classList.toggle("hide");
    document.querySelector("#interventional_radiology_plus_icon").style.display="none";
    document.querySelector("#interventional_radiology_minus_icon").style.display="block";
    if(document.querySelector(".interventional_radiology_form").classList.contains("hide")){
        document.querySelector("#interventional_radiology_plus_icon").style.display="block";
        document.querySelector("#interventional_radiology_minus_icon").style.display="none";
    }
   }
   //Magnetic Resonance SECTION
   function show_magnetic_resonance_form(){
    document.querySelector(".magnetic_resonance_form").classList.toggle("hide");
    document.querySelector("#magnetic_resonance_plus_icon").style.display="none";
    document.querySelector("#magnetic_resonance_minus_icon").style.display="block";
    if(document.querySelector(".magnetic_resonance_form").classList.contains("hide")){
        document.querySelector("#magnetic_resonance_plus_icon").style.display="block";
        document.querySelector("#magnetic_resonance_minus_icon").style.display="none";
    }
   }
   //Dual Energy SECTION
   function show_dual_energy_form(){
    document.querySelector(".dual_energy_form").classList.toggle("hide");
    document.querySelector("#dual_energy_plus_icon").style.display="none";
    document.querySelector("#dual_energy_minus_icon").style.display="block";
    if(document.querySelector(".dual_energy_form").classList.contains("hide")){
        document.querySelector("#dual_energy_plus_icon").style.display="block";
        document.querySelector("#dual_energy_minus_icon").style.display="none";
    }
   }
   //Chest X-ray SECTION
   function show_chest_x_ray_form(){
    document.querySelector(".chest_x_ray_form").classList.toggle("hide");
    document.querySelector("#chest_x_ray_plus_icon").style.display="none";
    document.querySelector("#chest_x_ray_minus_icon").style.display="block";
    if(document.querySelector(".chest_x_ray_form").classList.contains("hide")){
        document.querySelector("#chest_x_ray_plus_icon").style.display="block";
        document.querySelector("#chest_x_ray_minus_icon").style.display="none";
    }
   }
   //Myelography SECTION
   function show_myelography_form(){
    document.querySelector(".myelography_form").classList.toggle("hide");
    document.querySelector("#myelography_plus_icon").style.display="none";
    document.querySelector("#myelography_minus_icon").style.display="block";
    if(document.querySelector(".myelography_form").classList.contains("hide")){
        document.querySelector("#myelography_plus_icon").style.display="block";
        document.querySelector("#myelography_minus_icon").style.display="none";
    }
   }
   //Arthrography SECTION
   function show_arthrography_form(){
    document.querySelector(".arthrography_form").classList.toggle("hide");
    document.querySelector("#arthrography_plus_icon").style.display="none";
    document.querySelector("#arthrography_minus_icon").style.display="block";
    if(document.querySelector(".arthrography_form").classList.contains("hide")){
        document.querySelector("#arthrography_plus_icon").style.display="block";
        document.querySelector("#arthrography_minus_icon").style.display="none";
    }
   }
   //Hysterosalpingography SECTION
   function show_hysterosalpingography_form(){
    document.querySelector(".hysterosalpingography_form").classList.toggle("hide");
    document.querySelector("#hysterosalpingography_plus_icon").style.display="none";
    document.querySelector("#hysterosalpingography_minus_icon").style.display="block";
    if(document.querySelector(".hysterosalpingography_form").classList.contains("hide")){
        document.querySelector("#hysterosalpingography_plus_icon").style.display="block";
        document.querySelector("#hysterosalpingography_minus_icon").style.display="none";
    }
   }
   //Cholangiography SECTION
   function show_cholangiography_form(){
    document.querySelector(".cholangiography_form").classList.toggle("hide");
    document.querySelector("#cholangiography_plus_icon").style.display="none";
    document.querySelector("#cholangiography_minus_icon").style.display="block";
    if(document.querySelector(".cholangiography_form").classList.contains("hide")){
        document.querySelector("#cholangiography_plus_icon").style.display="block";
        document.querySelector("#cholangiography_minus_icon").style.display="none";
    }
   }
   //Angiography SECTION
   function show_angiography_form(){
    document.querySelector(".angiography_form").classList.toggle("hide");
    document.querySelector("#angiography_plus_icon").style.display="none";
    document.querySelector("#angiography_minus_icon").style.display="block";
    if(document.querySelector(".angiography_form").classList.contains("hide")){
        document.querySelector("#angiography_plus_icon").style.display="block";
        document.querySelector("#angiography_minus_icon").style.display="none";
    }
   }
   //Functional MRI SECTION
   function show_functional_mri_form(){
    document.querySelector(".functional_mri_form").classList.toggle("hide");
    document.querySelector("#functional_mri_plus_icon").style.display="none";
    document.querySelector("#functional_mri_minus_icon").style.display="block";
    if(document.querySelector(".functional_mri_form").classList.contains("hide")){
        document.querySelector("#functional_mri_plus_icon").style.display="block";
        document.querySelector("#functional_mri_minus_icon").style.display="none";
    }
   }
   //Cardiac Imaging SECTION
   function show_cardiac_imaging_form(){
    document.querySelector(".cardiac_imaging_form").classList.toggle("hide");
    document.querySelector("#cardiac_imaging_plus_icon").style.display="none";
    document.querySelector("#cardiac_imaging_minus_icon").style.display="block";
    if(document.querySelector(".cardiac_imaging_form").classList.contains("hide")){
        document.querySelector("#cardiac_imaging_plus_icon").style.display="block";
        document.querySelector("#cardiac_imaging_minus_icon").style.display="none";
    }
   }