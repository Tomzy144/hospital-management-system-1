//SHOWING PATIENT FORM 
const open_patient_form = ()=>{
    const hide_content_landing_page = document.querySelector('.contents');
    const open_patient_forms = document.querySelector('.patients_form_container');

    hide_content_landing_page.style.display = 'none';
    open_patient_forms.style.display = 'block';
}



//CONTENT PAGE LINKS TO DIFFERENT SECTION
const patientForm = function(){
    let url = 'patient-registration-form/';
    window.parent(location = (url));
}
const appoimentBooking = function(){
    let url = 'appointment-booker/';
    window.parent(location = (url));
}

const surgicalChemistry = function(){
    let url = 'surgical_chemistry(surgery-booking)/index.php';
    window.parent(location = (url));
}

const patient_list = ()=>{
    let url = "page/patients-lists.php";
    window.parent(location = (url));
}

//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
profile_container.classList.toggle("hide");
};






const activeSection = document.querySelector(".current-section");
const inactiveSection = document.querySelector(".form-section");
const section1 = document.querySelector("#section1");
const section2 = document.querySelector("#section2");
const btnNext = document.querySelector(".btn-next");
const btnBack = document.querySelector(".btn-back");

//Current section
 section1.classList.add("current-section");
 section2.classList.remove("current-section");

 btnNext.style.display = "block";
 btnBack.style.display = "block";

const nextForm =  btnNext.addEventListener("click", function(){
     section1.classList.remove("current-section");
     section2.classList.add("current-section");
     btnNext.style.display = "block";
  
 });


 const backForm = btnBack.addEventListener("click", function(){
     section1.classList.add("current-section");
     section2.classList.remove("current-section");
     btnNext.style.display = "block";
 })


 //dashboardPage link
 const dashboard = ()=>{
     let url = "../index.php";
     window.parent(location=(url))
 }


 const checked1 =  document.querySelector(".check1")
 const checked2 =  document.querySelector(".check2")
 const checked3 =  document.querySelector(".check3")
 const checked4 =  document.querySelector(".check4")

 function handleCheckboxChange() {
     //checked1
   if (checked1.checked) {
     checked2.disabled = true;
   } else {
     checked2.disabled = false;
   }
   
   if (checked2.checked) {
     checked1.disabled = true;
   } else {
     checked1.disabled = false;
   }
   //checked2
   if (checked3.checked) {
     checked4.disabled = true;
   } else {
     checked4.disabled = false;
   }
   
   if (checked4.checked) {
     checked3.disabled = true;
   } else {
     checked3.disabled = false;
   }
 }

 // Attach the event listener to both checkboxes
 checked1.addEventListener('change', handleCheckboxChange);
 checked2.addEventListener('change', handleCheckboxChange);
 checked3.addEventListener('change', handleCheckboxChange);
 checked4.addEventListener('change', handleCheckboxChange);


 //kind of category
 const check_category1 = document.querySelector(".check_category1")
 const check_category2= document.querySelector(".check_category2")
 const check_category3 = document.querySelector(".check_category3")
 const check_category4 = document.querySelector(".check_category4")
 const check_category5 = document.querySelector(".check_category5")
 const check_category6 = document.querySelector(".check_category6")


const handleCheckboxCategoryChange1 = ()=>{
 //checked 1
     if(check_category1.checked){
         check_category2.disabled = true;
         check_category3.disabled = true;
         check_category4.disabled = true;
         check_category5.disabled = true;
         check_category6.disabled = true;
      document.querySelector(".ward").classList.remove("hidden")
     }else{
         check_category2.disabled = false;
         check_category3.disabled = false;
         check_category4.disabled = false;
         check_category5.disabled = false;
         check_category6.disabled = false;
         document.querySelector(".ward").classList.add("hidden")
     }
   
     }


//for checked2
     const handleCheckboxCategoryChange2 = ()=>{

     if(check_category2.checked){
         check_category1.disabled = true;
         check_category3.disabled = true;
         check_category4.disabled = true;
         check_category5.disabled = true;
         check_category6.disabled = true;
     }else{
         check_category1.disabled = false;
         check_category3.disabled = false;
         check_category4.disabled = false;
         check_category5.disabled = false;
         check_category6.disabled = false;
     }
 }

     //for checked 3
     const handleCheckboxCategoryChange3 = ()=>{
     if(check_category3.checked){
         check_category1.disabled = true;
         check_category2.disabled = true;
         check_category4.disabled = true;
         check_category5.disabled = true;
         check_category6.disabled = true;
     }else{
         check_category1.disabled = false;
         check_category2.disabled = false;
         check_category4.disabled = false;
         check_category5.disabled = false;
         check_category6.disabled = false;
     }
 }
     //for checked 4
     const handleCheckboxCategoryChange4 = ()=>{
     if(check_category4.checked){
         check_category1.disabled = true;
         check_category2.disabled = true;
         check_category3.disabled = true;
         check_category5.disabled = true;
         check_category6.disabled = true;
     }else{
         check_category1.disabled = false;
         check_category2.disabled = false;
         check_category3.disabled = false;
         check_category5.disabled = false;
         check_category6.disabled = false;
     }
 }
     //for checked 5
     const handleCheckboxCategoryChange5 = ()=>{
     if(check_category5.checked){
         check_category1.disabled = true;
         check_category2.disabled = true;
         check_category3.disabled = true;
         check_category4.disabled = true;
         check_category6.disabled = true;
     }else{
         check_category1.disabled = false;
         check_category2.disabled = false;
         check_category3.disabled = false;
         check_category4.disabled = false;
         check_category6.disabled = false;
     }
 }
     //for checked 6
     const handleCheckboxCategoryChange6 = ()=>{
     if(check_category6.checked){
         check_category1.disabled = true;
         check_category2.disabled = true;
         check_category3.disabled = true;
         check_category4.disabled = true;
         check_category5.disabled = true;
     }else{
         check_category1.disabled = false;
         check_category2.disabled = false;
         check_category3.disabled = false;
         check_category4.disabled = false;
         check_category5.disabled = false;
     }
 }

check_category1.addEventListener('change', handleCheckboxCategoryChange1);
check_category2.addEventListener('change', handleCheckboxCategoryChange2);
check_category3.addEventListener('change', handleCheckboxCategoryChange3);
check_category4.addEventListener('change', handleCheckboxCategoryChange4);
check_category5.addEventListener('change', handleCheckboxCategoryChange5);
check_category6.addEventListener('change', handleCheckboxCategoryChange6);
