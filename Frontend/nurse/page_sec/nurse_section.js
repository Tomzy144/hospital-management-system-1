const show = document.querySelector(".drop-down")
const envelope = document.querySelector(".fa-envelope");
const user = document.querySelector(".fa-user-circle-o");
const toggleOpen = document.querySelector(".fa-bars");
const toggleClose = document.querySelector(".fa-times");
const sidebar = document.querySelector(".sidebar");


//Manipulate sidebar 
toggleOpen.addEventListener("click", function() {
    envelope.innerHTML = '  Chat';
    user.innerHTML =   '  Account';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "none";
    toggleClose.style.display = "block";
})

toggleClose.addEventListener("click", function() {
    envelope.innerHTML = ' '
    user.innerHTML =   '  ';
    sidebar.classList.toggle("active")
    toggleOpen.style.display = "block";
    toggleClose.style.display = "none";
    
})

//Search Bar
const select =  document.getElementById("select");
const list = document.getElementById("list");
const selectText = document.getElementById("selectText");
const options = document.getElementsByClassName("options");
const inputfield = document.getElementById("inputfield");
const submitInput = document.getElementById("submit-input");
const id = document.getElementById("id");

select.addEventListener("click", function(){
    list.classList.toggle("open");
})

const user_select = 1;
submitInput.addEventListener("load", function(){
    submitInput.innerHTML = user_select.toString();
})

for(option of options){
    option.addEventListener("click", function(){
        selectText.innerHTML = this.innerHTML,id;
        inputfield.placeholder = 'Search In ' + selectText.innerHTML
    })
}

//Patient Ward Round
const btn_ward_round = document.querySelector("#ward_round_btn");
const ward_round_container = document.querySelector(".ward_round_container");

btn_ward_round.addEventListener("click",()=>{
    ward_round_container.classList.toggle("hidden")
});

//Patient Ward
const btn_ward = document.querySelector("#ward_btn");
const ward_container = document.querySelector(".ward_container");

btn_ward.addEventListener("click",()=>{
    ward_container.classList.toggle("hidden")
});

//Patient Bed
const btn_bed = document.querySelector("#bed_btn");
const bed_container = document.querySelector(".bed_container");

btn_bed.addEventListener("click",()=>{
    bed_container.classList.toggle("hidden")
});

//Patient Vital
const btn_impatient_vital = document.querySelector("#impatient_vital_btn");
const impatient_container = document.querySelector(".impatient_container");

btn_impatient_vital.addEventListener("click",()=>{
    impatient_container.classList.toggle("hidden")
});


const backWardArrow = ()=>{
    let url="../patients_list.php"
    window.parent(location =(url))
}

