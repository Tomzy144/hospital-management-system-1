
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


        //LABOURATORY 
    const labInfo = document.querySelector(".lab_info")
    const lab_open = document.querySelector("#lab_open");
    const lab_close = document.querySelector("#lab_close");
    const lab_input = document.querySelector(".lab_input");

    labInfo.addEventListener("click", function(){
        lab_input.classList.toggle("hidden");
        lab_open.style.display = "none";
        lab_close.style.display = "block";
    
            if(lab_input.classList.contains("hidden")){
                lab_open.style.display = "block";
                lab_close.style.display = "none";
            }
        })



//Lab 


//For immunoassay_section Dropdown
const immunoassay_section = document.querySelector(".immunoassay")
const immunoassay_open_icon1 = document.querySelector("#open_id_1")
const immunoassay_close_icon1 = document.querySelector("#close_id_1")
const form1 = document.querySelector(".form1");

immunoassay_section.addEventListener("click",()=>{
    form1.classList.toggle("hidden");
    immunoassay_open_icon1.style.display = "none";
    immunoassay_close_icon1.style.display = "block";
    if(form1.classList.contains("hidden")){
        immunoassay_close_icon1.style.display = "none";
        immunoassay_open_icon1.style.display = "block";
    }
})

//For immunoassay_section Dropdown
const clinical_chemistry_section = document.querySelector(".clinical_chemistry")
const clinical_chemistry_open_icon1 = document.querySelector("#open_id_2")
const clinical_chemistry_close_icon1 = document.querySelector("#close_id_2")
const form2 = document.querySelector(".form2");

clinical_chemistry_section.addEventListener("click",()=>{
    form2.classList.toggle("hidden");
    clinical_chemistry_open_icon1.style.display = "none";
    clinical_chemistry_close_icon1.style.display = "block";
    if(form2.classList.contains("hidden")){
        clinical_chemistry_close_icon1.style.display = "none";
        clinical_chemistry_open_icon1.style.display = "block";
    }
})
//For thyroid_section Dropdown
const thyroid_section = document.querySelector(".thyroid")
const thyroid_open_icon1 = document.querySelector("#open_id_3")
const thyroid_close_icon1 = document.querySelector("#close_id_3")
const form3 = document.querySelector(".form3");

thyroid_section.addEventListener("click",()=>{
    form3.classList.toggle("hidden");
    thyroid_open_icon1.style.display = "none";
    thyroid_close_icon1.style.display = "block";
    if(form3.classList.contains("hidden")){
        thyroid_close_icon1.style.display = "none";
        thyroid_open_icon1.style.display = "block";
    }
})

//For tumor_section Dropdown
const tumor_section = document.querySelector(".tumor")
const tumor_open_icon1 = document.querySelector("#open_id_4")
const tumor_close_icon1 = document.querySelector("#close_id_4")
const form4 = document.querySelector(".form4");

tumor_section.addEventListener("click",()=>{
    form4.classList.toggle("hidden");
    tumor_open_icon1.style.display = "none";
    tumor_close_icon1.style.display = "block";
    if(form4.classList.contains("hidden")){
        tumor_close_icon1.style.display = "none";
        tumor_open_icon1.style.display = "block";
    }
})

//For blood_section Dropdown
const blood_section = document.querySelector(".blood")
const blood_open_icon1 = document.querySelector("#open_id_5")
const blood_close_icon1 = document.querySelector("#close_id_5")
const form5 = document.querySelector(".form5");

blood_section.addEventListener("click",()=>{
    form5.classList.toggle("hidden");
    blood_open_icon1.style.display = "none";
    blood_close_icon1.style.display = "block";
    if(form5.classList.contains("hidden")){
        blood_close_icon1.style.display = "none";
        blood_open_icon1.style.display = "block";
    }
})
//For food_section Dropdown
const food_section = document.querySelector(".food")
const food_open_icon1 = document.querySelector("#open_id_6")
const food_close_icon1 = document.querySelector("#close_id_6")
const form6 = document.querySelector(".form6");

food_section.addEventListener("click",()=>{
    form6.classList.toggle("hidden");
    food_open_icon1.style.display = "none";
    food_close_icon1.style.display = "block";
    if(form6.classList.contains("hidden")){
        food_close_icon1.style.display = "none";
        food_open_icon1.style.display = "block";
    }
})

//For microbiology_section Dropdown
const microbiology_section = document.querySelector(".microbiology")
const microbiology_open_icon1 = document.querySelector("#open_id_7")
const microbiology_close_icon1 = document.querySelector("#close_id_7")
const form7= document.querySelector(".form7");

microbiology_section.addEventListener("click",()=>{
    form7.classList.toggle("hidden");
    microbiology_open_icon1.style.display = "none";
    microbiology_close_icon1.style.display = "block";
    if(form7.classList.contains("hidden")){
        microbiology_close_icon1.style.display = "none";
        microbiology_open_icon1.style.display = "block";
    }
})

//For histopathology Dropdown
const histopathology_section = document.querySelector(".histopathology")
const histopathology_open_icon1 = document.querySelector("#open_id_8")
const histopathology_close_icon1 = document.querySelector("#close_id_8")
const form8= document.querySelector(".form8");

histopathology_section.addEventListener("click",()=>{
    form8.classList.toggle("hidden");
    histopathology_open_icon1.style.display = "none";
    histopathology_close_icon1.style.display = "block";
    if(form8.classList.contains("hidden")){
        histopathology_close_icon1.style.display = "none";
        histopathology_open_icon1.style.display = "block";
    }
})
//For haematology Dropdown
const haematology_section = document.querySelector(".haematology")
const haematology_open_icon1 = document.querySelector("#open_id_9")
const haematology_close_icon1 = document.querySelector("#close_id_9")
const form9= document.querySelector(".form9");

haematology_section.addEventListener("click",()=>{
    form9.classList.toggle("hidden");
    haematology_open_icon1.style.display = "none";
    haematology_close_icon1.style.display = "block";
    if(form9.classList.contains("hidden")){
        haematology_close_icon1.style.display = "none";
        haematology_open_icon1.style.display = "block";
    }
})

const disabledCheckbox = ()=>{
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

       checkboxes.forEach(function(checkbox){
        checkbox.disabled = true;
       })
 
}
disabledCheckbox()



//Complaints Section
const complaint = document.querySelector(".complain");
const complaint_section = document.querySelector(".complaint-section ");
const complaint_section_icon_plus = document.querySelector("#complaint_icon_plus");
const complaint_section_icon_minus = document.querySelector("#complaint_icon_minus");
const check_1 = document.querySelector("#check1")
const check_2 = document.querySelector("#check2")



complaint.addEventListener("click", function(){
complaint_section.classList.toggle("hidden");
complaint_section_icon_plus.style.display = "none";
complaint_section_icon_minus.style.display = "block";
if(complaint_section.classList.contains("hidden")){
    complaint_section_icon_plus.style.display = "block";
complaint_section_icon_minus.style.display = "none";
}
})         
const readOnlyInput = ()=>{
    const complainInput = document.querySelectorAll(".complaint-input");
    complainInput.forEach(function(complaint){
       complaint.readOnly = true;
     complaint.value = "Testing";
    })
    
}
readOnlyInput()



// form input
//System Review dropdown
const system = document.querySelector(".system");
const system_review_section = document.querySelector(".system_review-section");
const system_review_section_icon_plus = document.querySelector("#system_icon_plus");
const system_review_section_icon_minus = document.querySelector("#system_icon_minus");



system.addEventListener("click", function(){
system_review_section.classList.toggle("hidden");
system_review_section_icon_plus.style.display = "none";
system_review_section_icon_minus.style.display = "block";
if(system_review_section.classList.contains("hidden")){
    system_review_section_icon_plus.style.display = "block";
    system_review_section_icon_minus.style.display = "none";
}
}) 

// For General Dropdown
const general_dropdown = document.querySelector(".drop-down1");
const showForm1 = document.querySelector(".gen_form1");
const closeIcon1 = document.querySelector("#close_1");
const openIcon1 = document.querySelector("#open_1");

general_dropdown.addEventListener("click", function(){
    showForm1.classList.toggle("hidden");
    closeIcon1.style.display = "block";
    openIcon1.style.display = "none";
    if(showForm1.classList.contains("hidden")){
        closeIcon1.style.display = "none";
        openIcon1.style.display = "block";
    }
});


//For Skin Dropdown
const skin_dropdown = document.querySelector(".drop-down2");
const showForm2 = document.querySelector(".skin_form2");
const closeIcon2 = document.querySelector("#close_2");
const openIcon2 = document.querySelector("#open_2");

skin_dropdown.addEventListener("click", function(){
    showForm2.classList.toggle("hidden");
    closeIcon2.style.display = "block";
    openIcon2.style.display = "none";
    if(showForm2.classList.contains("hidden")){
        closeIcon2.style.display = "none";
        openIcon2.style.display = "block";
    }
});

//For EndoCrine Dropdown
const endocrine_dropdown = document.querySelector(".drop-down3");
const showForm3 = document.querySelector(".endo_form3");
const closeIcon3 = document.querySelector("#close_3");
const openIcon3 = document.querySelector("#open_3");

endocrine_dropdown.addEventListener("click", function(){
    showForm3.classList.toggle("hidden");
    closeIcon3.style.display = "block";
    openIcon3.style.display = "none";
    if(showForm3.classList.contains("hidden")){
        closeIcon3.style.display = "none";
        openIcon3.style.display = "block";
    }
});

//For Hematopioetic Dropdown
const hematopioetice_dropdown = document.querySelector(".drop-down4");
const showForm4 = document.querySelector(".hermato_form4");
const closeIcon4 = document.querySelector("#close_4");
const openIcon4 = document.querySelector("#open_4");

hematopioetice_dropdown.addEventListener("click", function(){
    showForm4.classList.toggle("hidden");
    closeIcon4.style.display = "block";
    openIcon4.style.display = "none";
    if(showForm4.classList.contains("hidden")){
        closeIcon4.style.display = "none";
        openIcon4.style.display = "block";
    }
});
//For Muscoskeletal Dropdown
const muscoskeletal_dropdown = document.querySelector(".drop-down5");
const showForm5 = document.querySelector(".mus_form5");
const closeIcon5 = document.querySelector("#close_5");
const openIcon5 = document.querySelector("#open_5");

muscoskeletal_dropdown.addEventListener("click", function(){
    showForm5.classList.toggle("hidden");
    closeIcon5.style.display = "block";
    openIcon5.style.display = "none";
    if(showForm5.classList.contains("hidden")){
        closeIcon5.style.display = "none";
        openIcon5.style.display = "block";
    }
});

//For head & neck Dropdown
const head_neck_dropdown = document.querySelector(".drop-down6");
const showForm6 = document.querySelector(".head_neck_form6");
const closeIcon6 = document.querySelector("#close_6");
const openIcon6 = document.querySelector("#open_6");

head_neck_dropdown.addEventListener("click", function(){
    showForm6.classList.toggle("hidden");
    closeIcon6.style.display = "block";
    openIcon6.style.display = "none";
    if(showForm6.classList.contains("hidden")){
        closeIcon6.style.display = "none";
        openIcon6.style.display = "block";
    }
});

//For Ears, Nose, Sinuses, Mouth & Throat Dropdown
const ear_nose_sinuses_mouth_throat_dropdown = document.querySelector(".drop-down7");
const showForm7 = document.querySelector(".ear_nose_form7");
const closeIcon7 = document.querySelector("#close_7");
const openIcon7 = document.querySelector("#open_7");

ear_nose_sinuses_mouth_throat_dropdown.addEventListener("click", function(){
    showForm7.classList.toggle("hidden");
    closeIcon7.style.display = "block";
    openIcon7.style.display = "none";
    if(showForm7.classList.contains("hidden")){
        closeIcon7.style.display = "none";
        openIcon7.style.display = "block";
    }
});

//For Breast Dropdown
const breast_dropdown = document.querySelector(".drop-down8");
const showForm8 = document.querySelector(".breast_form8");
const closeIcon8 = document.querySelector("#close_8");
const openIcon8 = document.querySelector("#open_8");

breast_dropdown.addEventListener("click", function(){
    showForm8.classList.toggle("hidden");
    closeIcon8.style.display = "block";
    openIcon8.style.display = "none";
    if(showForm8.classList.contains("hidden")){
        closeIcon8.style.display = "none";
        openIcon8.style.display = "block";
    }
});

//For Respiratory Dropdown
const respiratory_dropdown = document.querySelector(".drop-down9");
const showForm9 = document.querySelector(".res_form9");
const closeIcon9 = document.querySelector("#close_9");
const openIcon9 = document.querySelector("#open_9");

respiratory_dropdown.addEventListener("click", function(){
    showForm9.classList.toggle("hidden");
    closeIcon9.style.display = "block";
    openIcon9.style.display = "none";
    if(showForm9.classList.contains("hidden")){
        closeIcon9.style.display = "none";
        openIcon9.style.display = "block";
    }
});
//For Cardiovascular Dropdown
const cardiovascular_dropdown = document.querySelector(".drop-down10");
const showForm10 = document.querySelector(".form10");
const closeIcon10 = document.querySelector("#close_10");
const openIcon10 = document.querySelector("#open_10");

cardiovascular_dropdown.addEventListener("click", function(){
    showForm10.classList.toggle("hidden");
    closeIcon10.style.display = "block";
    openIcon10.style.display = "none";
    if(showForm10.classList.contains("hidden")){
        closeIcon10.style.display = "none";
        openIcon10.style.display = "block";
    }
});
//For Gastrointestinal Dropdown
const gastrointestinal_dropdown = document.querySelector(".drop-down11");
const showForm11= document.querySelector(".form11");
const closeIcon11= document.querySelector("#close_11");
const openIcon11 = document.querySelector("#open_11");

gastrointestinal_dropdown.addEventListener("click", function(){
    showForm11.classList.toggle("hidden");
    closeIcon11.style.display = "block";
    openIcon11.style.display = "none";
    if(showForm11.classList.contains("hidden")){
        closeIcon11.style.display = "none";
        openIcon11.style.display = "block";
    }
});



   //BACK ARROW TO THE DASHBOARD
   function backWardArrow(){
    var urlBackwardArrow = 'patients.php';
    window.parent(location=(urlBackwardArrow));
  
}
    
const testInput = ()=>{
    const test13 = document.querySelector(".test")
    test13.value = "Hello, world!"
    complaint.value = test13
}
// testInput()

    
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

