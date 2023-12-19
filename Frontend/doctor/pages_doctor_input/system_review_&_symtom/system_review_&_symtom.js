const show = document.querySelector(".drop-down")
const calender = document.querySelector(".fa-calendar-check-o");
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");


//Manipulate sidebar 
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


function back_arrow(){
    let url = "../../patients_list.php";
    window.parent(location = (url));
}

//form input
//For General Dropdown
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

