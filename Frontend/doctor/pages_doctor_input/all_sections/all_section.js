//Manipulate sidebar 
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");

toggleOpen.addEventListener("click", function() {
envelope.innerHTML = '  Chat';
user.innerHTML =   '  Account';
calender.innerHTML = '  Appoitment';
sidebar.classList.toggle("active_toggle")
toggleOpen.style.display = "none";
toggleClose.style.display = "block";
})

toggleClose.addEventListener("click", function() {
envelope.innerHTML = ' '
user.innerHTML =   '  ';
calender.innerHTML = '  ';
sidebar.classList.toggle("active_toggle")
toggleOpen.style.display = "block";
toggleClose.style.display = "none";

})
//back arrow to the patient list
function back_arrow(){
let url = "../../patients_list.php";
window.parent(location = (url));
}




//Complaints Section
const complaint_dropdown = document.querySelector(".complain_dropdown");
const complaint_section = document.querySelector(".complaint-section ");
const complaint_section_icon_plus = document.querySelector("#complaint_icon_plus");
const complaint_section_icon_minus = document.querySelector("#complaint_icon_minus");
const check_1 = document.querySelector("#check1")
const check_2 = document.querySelector("#check2")



complaint_dropdown.addEventListener("click", function(){
complaint_section.classList.toggle("hidden");
complaint_section_icon_plus.style.display = "none";
complaint_section_icon_minus.style.display = "block";
if(complaint_section.classList.contains("hidden")){
    complaint_section_icon_plus.style.display = "block";
complaint_section_icon_minus.style.display = "none";
}
}) 

//For the surgical form 
const handle_change = function(){
    if(check_1.checked){
    check_2.disabled = true;
    open_procedure_form();
}else{
    check_2.disabled = false;
}
if(check_2.checked){
    check_1.disabled = true;
}else{
    check_1.disabled = false;
}
}

check_1.addEventListener("change", handle_change);
check_2.addEventListener("change", handle_change);

const open_procedure_form = function(){
    document.querySelector(".surgical_booking").classList.remove("hidden");
    document.querySelector(".overlay").classList.remove("hidden");
}
const close_procedure_form = function(){
    document.querySelector(".surgical_booking").classList.add("hidden");
    document.querySelector(".overlay").classList.add("hidden");
};



// form input
//System Review dropdown
const system_dropdown = document.querySelector(".system_dropdown");
const system_review_section = document.querySelector(".system_review-section");
const system_review_section_icon_plus = document.querySelector("#system_icon_plus");
const system_review_section_icon_minus = document.querySelector("#system_icon_minus");



system_dropdown.addEventListener("click", function(){
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
const showForm1 = document.querySelector(".form1");
const closeIcon1 = document.querySelector("#close_id_1");
const openIcon1 = document.querySelector("#open_id_1");

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
const showForm2 = document.querySelector(".form2");
const closeIcon2 = document.querySelector("#close_id_2");
const openIcon2 = document.querySelector("#open_id_2");

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
const showForm3 = document.querySelector(".form3");
const closeIcon3 = document.querySelector("#close_id_3");
const openIcon3 = document.querySelector("#open_id_3");

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
const showForm4 = document.querySelector(".form4");
const closeIcon4 = document.querySelector("#close_id_4");
const openIcon4 = document.querySelector("#open_id_4");

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
const showForm5 = document.querySelector(".form5");
const closeIcon5 = document.querySelector("#close_id_5");
const openIcon5 = document.querySelector("#open_id_5");

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
const showForm6 = document.querySelector(".form6");
const closeIcon6 = document.querySelector("#close_id_6");
const openIcon6 = document.querySelector("#open_id_6");

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
const showForm7 = document.querySelector(".form7");
const closeIcon7 = document.querySelector("#close_id_7");
const openIcon7 = document.querySelector("#open_id_7");

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
const showForm8 = document.querySelector(".form8");
const closeIcon8 = document.querySelector("#close_id_8");
const openIcon8 = document.querySelector("#open_id_8");

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
const showForm9 = document.querySelector(".form9");
const closeIcon9 = document.querySelector("#close_id_9");
const openIcon9 = document.querySelector("#open_id_9");

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
const closeIcon10 = document.querySelector("#close_id_10");
const openIcon10 = document.querySelector("#open_id_10");

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
const closeIcon11= document.querySelector("#close_id_11");
const openIcon11 = document.querySelector("#open_id_11");

gastrointestinal_dropdown.addEventListener("click", function(){
    showForm11.classList.toggle("hidden");
    closeIcon11.style.display = "block";
    openIcon11.style.display = "none";
    if(showForm11.classList.contains("hidden")){
        closeIcon11.style.display = "none";
        openIcon11.style.display = "block";
    }
});


//form input
//System Review dropdown
const physical_dropdown = document.querySelector(".physical_dropdown");
const physical_section = document.querySelector(".physical_examination-section");
const physical_section_icon_plus = document.querySelector("#physical_icon_plus");
const physical_section_icon_minus = document.querySelector("#physical_icon_minus");



physical_dropdown.addEventListener("click", function(){
 physical_section.classList.toggle("hidden");
 physical_section_icon_plus.style.display = "none";
 physical_section_icon_minus.style.display = "block";
if(physical_section.classList.contains("hidden")){
    physical_section_icon_plus.style.display = "block";
    physical_section_icon_minus.style.display = "none";
}
}) 
//For General Dropdown

const physical_general_dropdown = document.querySelector(".physical_examination_drop-down1");
const physical_showForm1 = document.querySelector(".physical_examination_form1");
const physical_closeIcon1 = document.querySelector("#physical_examination_icon_minus1");
const physical_openIcon1 = document.querySelector("#physical_examination_icon_plus1");

physical_general_dropdown.addEventListener("click", function(){
    physical_showForm1.classList.toggle("hidden");
    physical_closeIcon1.style.display = "block";
    physical_openIcon1.style.display = "none";
    if(physical_showForm1.classList.contains("hidden")){
        physical_closeIcon1.style.display = "none";
        physical_openIcon1.style.display = "block";
    }
});

//For Neurological Dropdown
const neurological_dropdown = document.querySelector(".physical_examination_drop-down2");
const physical_showForm2 = document.querySelector(".physical_examination_form2");
const physical_closeIcon2 = document.querySelector("#physical_examination_icon_minus2")
const physical_openIcon2 = document.querySelector("#physical_examination_icon_plus2");

neurological_dropdown.addEventListener("click", function(){
    physical_showForm2.classList.toggle("hidden");
    physical_closeIcon2.style.display = "block";
    physical_openIcon2.style.display = "none";
    if(physical_showForm2.classList.contains("hidden")){
        physical_closeIcon2.style.display = "none";
        physical_openIcon2.style.display = "block";
    }
});
//For vital  Dropdown
const vital_dropdown = document.querySelector(".physical_examination_drop-down3");
const physical_showForm3 = document.querySelector(".physical_examination_form3");
const physical_closeIcon3 = document.querySelector("#physical_examination_icon_minus3")
const physical_openIcon3 = document.querySelector("#physical_examination_icon_plus3");

vital_dropdown.addEventListener("click", function(){
    physical_showForm3.classList.toggle("hidden");
    physical_closeIcon3.style.display = "block";
    physical_openIcon3.style.display = "none";
    if(physical_showForm3.classList.contains("hidden")){
        physical_closeIcon3.style.display = "none";
        physical_openIcon3.style.display = "block";
    }
});

//For General Apperance  Dropdown
const apperance_dropdown = document.querySelector(".physical_examination_drop-down4");
const physical_showForm4 = document.querySelector(".physical_examination_form4");
const physical_closeIcon4 = document.querySelector("#physical_examination_icon_minus4")
const physical_openIcon4 = document.querySelector("#physical_examination_icon_plus4");

apperance_dropdown.addEventListener("click", function(){
    physical_showForm4.classList.toggle("hidden");
    physical_closeIcon4.style.display = "block";
    physical_openIcon4.style.display = "none";
    if(physical_showForm4.classList.contains("hidden")){
        physical_closeIcon4.style.display = "none";
        physical_openIcon4.style.display = "block";
    }
});

//For Skin Examination  Dropdown
const skin_examination_dropdown = document.querySelector(".physical_examination_drop-down5");
const physical_showForm5 = document.querySelector(".physical_examination_form5");
const physical_closeIcon5 = document.querySelector("#physical_examination_icon_minus5")
const physical_openIcon5 = document.querySelector("#physical_examination_icon_plus5");

skin_examination_dropdown.addEventListener("click", function(){
    physical_showForm5.classList.toggle("hidden");
    physical_closeIcon5.style.display = "block";
    physical_openIcon5.style.display = "none";
    if(physical_showForm5.classList.contains("hidden")){
        physical_closeIcon5.style.display = "none";
        physical_openIcon5.style.display = "block";
    }
});

//For Head and Neck Dropdown
const pysical_head_neck_dropdown = document.querySelector(".physical_examination_drop-down6");
const physical_showForm6 = document.querySelector(".physical_examination_form6");
const physical_closeIcon6 = document.querySelector("#physical_examination_icon_minus6")
const physical_openIcon6 = document.querySelector("#physical_examination_icon_plus6");

pysical_head_neck_dropdown.addEventListener("click", function(){
    physical_showForm6.classList.toggle("hidden");
    physical_closeIcon6.style.display = "block";
    physical_openIcon6.style.display = "none";
    if(physical_showForm6.classList.contains("hidden")){
        physical_closeIcon6.style.display = "none";
        physical_openIcon6.style.display = "block";
    }
});

//For Cardiovascular Examination Dropdown
const physical_cardiovascular_dropdown = document.querySelector(".physical_examination_drop-down7");
const physical_showForm7 = document.querySelector(".physical_examination_form7");
const physical_closeIcon7 = document.querySelector("#physical_examination_icon_minus7")
const physical_openIcon7 = document.querySelector("#physical_examination_icon_plus7");

physical_cardiovascular_dropdown.addEventListener("click", function(){
    physical_showForm7.classList.toggle("hidden");
    physical_closeIcon7.style.display = "block";
    physical_openIcon7.style.display = "none";
    if(physical_showForm7.classList.contains("hidden")){
        physical_closeIcon7.style.display = "none";
        physical_openIcon7.style.display = "block";
    }
});

//For Respiratory Examination Dropdown
const physical_respiratory_dropdown = document.querySelector(".physical_examination_drop-down8");
const physical_showForm8 = document.querySelector(".physical_examination_form8");
const physical_closeIcon8 = document.querySelector("#physical_examination_icon_minus8")
const physical_openIcon8 = document.querySelector("#physical_examination_icon_plus8");

physical_respiratory_dropdown.addEventListener("click", function(){
    physical_showForm8.classList.toggle("hidden");
    physical_closeIcon8.style.display = "block";
    physical_openIcon8.style.display = "none";
    if(physical_showForm8.classList.contains("hidden")){
        physical_closeIcon8.style.display = "none";
        physical_openIcon8.style.display = "block";
    }
});

//For Adominal Examination Dropdown
const physical_abdominal_dropdown = document.querySelector(".physical_examination_drop-down9");
const physical_showForm9 = document.querySelector(".physical_examination_form9");
const physical_closeIcon9 = document.querySelector("#physical_examination_icon_minus9")
const physical_openIcon9 = document.querySelector("#physical_examination_icon_plus9");

physical_abdominal_dropdown.addEventListener("click", function(){
    physical_showForm9.classList.toggle("hidden");
    physical_closeIcon9.style.display = "block";
    physical_openIcon9.style.display = "none";
    if(physical_showForm9.classList.contains("hidden")){
        physical_closeIcon9.style.display = "none";
        physical_openIcon9.style.display = "block";
    }
});

//For Genitourinary Examination Dropdown
const physical_genitourinary_dropdown = document.querySelector(".physical_examination_drop-down10");
const physical_showForm10 = document.querySelector(".physical_examination_form10");
const physical_closeIcon10 = document.querySelector("#physical_examination_icon_minus10")
const physical_openIcon10 = document.querySelector("#physical_examination_icon_plus10");

physical_genitourinary_dropdown.addEventListener("click", function(){
    physical_showForm10.classList.toggle("hidden");
    physical_closeIcon10.style.display = "block";
    physical_openIcon10.style.display = "none";
    if(physical_showForm10.classList.contains("hidden")){
        physical_closeIcon10.style.display = "none";
        physical_openIcon10.style.display = "block";
    }
});

//For Musculoskeletal Examination Dropdown
const physical_musculoskeletal_dropdown = document.querySelector(".physical_examination_drop-down11");
const physical_showForm11 = document.querySelector(".physical_examination_form11");
const physical_closeIcon11= document.querySelector("#physical_examination_icon_minus11")
const physical_openIcon11= document.querySelector("#physical_examination_icon_plus11");

physical_musculoskeletal_dropdown.addEventListener("click", function(){
    physical_showForm11.classList.toggle("hidden");
    physical_closeIcon11.style.display = "block";
    physical_openIcon11.style.display = "none";
    if(physical_showForm11.classList.contains("hidden")){
        physical_closeIcon11.style.display = "none";
        physical_openIcon11.style.display = "block";
    }
});

//For Neurovascular Assessment of Extremities Dropdown
const physical_neurovascular_dropdown = document.querySelector(".physical_examination_drop-down12");
const physical_showForm12 = document.querySelector(".physical_examination_form12");
const physical_closeIcon12= document.querySelector("#physical_examination_icon_minus12")
const physical_openIcon12= document.querySelector("#physical_examination_icon_plus12");

physical_neurovascular_dropdown.addEventListener("click", function(){
    physical_showForm12.classList.toggle("hidden");
    physical_closeIcon12.style.display = "block";
    physical_openIcon12.style.display = "none";
    if(physical_showForm12.classList.contains("hidden")){
        physical_closeIcon12.style.display = "none";
        physical_openIcon12.style.display = "block";
    }
});

//For Review of Systems (ROS) of Extremities Dropdown
const physical_review_of_systems_dropdown = document.querySelector(".physical_examination_drop-down13");
const physical_showForm13 = document.querySelector(".physical_examination_form13");
const physical_closeIcon13= document.querySelector("#physical_examination_icon_minus13")
const physical_openIcon13= document.querySelector("#physical_examination_icon_plus13");

physical_review_of_systems_dropdown.addEventListener("click", function(){
    physical_showForm13.classList.toggle("hidden");
    physical_closeIcon13.style.display = "block";
    physical_openIcon13.style.display = "none";
    if(physical_showForm13.classList.contains("hidden")){
        physical_closeIcon13.style.display = "none";
        physical_openIcon13.style.display = "block";
    }
});

//For Social and Family History Dropdown
const physical_Social_and_family_history_dropdown = document.querySelector(".physical_examination_drop-down14");
const physical_showForm14 = document.querySelector(".physical_examination_form14");
const physical_closeIcon14= document.querySelector("#physical_examination_icon_minus14")
const physical_openIcon14= document.querySelector("#physical_examination_icon_plus14");

physical_Social_and_family_history_dropdown.addEventListener("click", function(){
    physical_showForm14.classList.toggle("hidden");
    physical_closeIcon14.style.display = "block";
    physical_openIcon14.style.display = "none";
    if(physical_closeIcon14.classList.contains("hidden")){
        physical_closeIcon14.style.display = "none";
        physical_openIcon14.style.display = "block";
    }
});



//Treatment and Prescribtion JS
const treatment_prescribtion_dropdown = document.querySelector(".treatment_prescribtion_dropdown");
const treatment_prescribtion_section = document.querySelector(".treatment_prescribtion-section");
const treatment_prescribtion_icon_plus = document.querySelector("#treatment_prescribtion_icon_plus");
const treatment_prescribtion_icon_minus = document.querySelector("#treatment_prescribtion_minus");



treatment_prescribtion_dropdown.addEventListener("click", function(){
treatment_prescribtion_section.classList.toggle("hidden");
treatment_prescribtion_icon_plus.style.display = "none";
treatment_prescribtion_icon_minus.style.display = "block";
if(treatment_prescribtion_section.classList.contains("hidden")){
    treatment_prescribtion_icon_plus.style.display = "block";
    treatment_prescribtion_icon_minus.style.display = "none";
}
}) 