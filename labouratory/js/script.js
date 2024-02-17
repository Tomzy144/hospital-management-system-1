function backWardArrow(){
    document.querySelector(".contents").style.display = "flex";
    document.querySelector(".lab_input").classList.add("hide");
    document.querySelector("#back-arrow").style.display = "none";
}
document.addEventListener("DOMContentLoaded", ()=>{
    const pending_appoitment = [
        {number:1, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:2, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:3, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:4, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:5, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:6, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:7, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:8, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:9, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:10, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:11, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:12, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:13, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:14, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:15, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:16, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},
        {number:17, patient_name:"John Obi", id:"PAT0003", date:"23-02-2024", time:"00:00", request_type:"Medical test"},

    ];

    let currentIndex = 0;
    const appoitment_table = document.querySelector("#appoitment_table tbody");
    const prev_appoitment = document.querySelector("#prev_appoitment")
    const next_appoitment = document.querySelector("#next_appoitment")
    
    function updateAppoitmentTable(){
        //set table to blank;
        appoitment_table.innerHTML = ""

        const endIndex  = Math.min(currentIndex + 8, pending_appoitment.length);
        for(let i = currentIndex; i < endIndex; i++) {
            const row = appoitment_table.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            let cell4 = row.insertCell(4);
            let cell5 =row.insertCell(5);
            let cell6 =row.insertCell(6);
            let cell7 =row.insertCell(7);
    

            cell0.innerHTML = `${pending_appoitment[i].number}`;
            cell1.innerHTML = `${pending_appoitment[i].patient_name}`;
            cell2.innerHTML = `${pending_appoitment[i].id}`;
            cell3.innerHTML = `${pending_appoitment[i].date}`;
            cell4.innerHTML = `${pending_appoitment[i].time}`;
            cell5.innerHTML = `${pending_appoitment[i].request_type}`;
            //accept button
            const accept_appoitment_button = document.createElement('button');
            accept_appoitment_button.id = "accept_button";
            accept_appoitment_button.innerHTML = "Accept" ;
            accept_appoitment_button.onclick = click_labouratory_examination;
           cell6.appendChild(accept_appoitment_button);
            //reject button
            const reject_appoitment_button = document.createElement('button');
            reject_appoitment_button.id = "reject_button";
            reject_appoitment_button.innerHTML = "Reject";
            cell7.appendChild(reject_appoitment_button);
        }
    }
updateAppoitmentTable()

    prev_appoitment.addEventListener("click", ()=>{
        currentIndex = Math.max(currentIndex - 8, 0);
        updateAppoitmentTable();
    })
    next_appoitment.addEventListener("click", ()=>{
        currentIndex += 4
        if(currentIndex >= pending_appoitment.length){
            currentIndex = 0;
        }
        updateAppoitmentTable()
    })
})


document.addEventListener("DOMContentLoaded",()=>{
const approved_appoitment = [
    {number:1, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:2, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:3, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:4, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:5, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:6, patient_name: "John Smith", patient_id:"PAT0001"},
    {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
];
let currentIndexApproved = 0;
const approved_table = document.querySelector("#approved_table tbody");
const prev_approved_appoitment = document.querySelector("#prev_approved_appoitment")
    const next_approved_appoitment = document.querySelector("#next_approved_appoitment")

function updateApprovedTransaction(){
    //set table to blank
    approved_table.innerHTML = '';
    const endIndexApproved = Math.min(currentIndexApproved + 4, approved_appoitment.length)
    for(let n = currentIndexApproved; n < endIndexApproved; n++) {
        const row = approved_table.insertRow();
        let cell0 = row.insertCell(0);
        let cell1 = row.insertCell(1);
        let cell2 = row.insertCell(2);
        cell0.innerHTML = `${approved_appoitment[n].number}`    
        cell1.innerHTML = `${ approved_appoitment[n].patient_name}`;
        const button = document.createElement('button');
        const button2 = document.createElement('button');

        //close appoitment for in progress appoitment
        const close_appoitment_in_progress = document.createElement("close_appoitment_in_progress");
        close_appoitment_in_progress.className = "bi bi-x-lg";
        close_appoitment_in_progress.style.position = "absolute";
        close_appoitment_in_progress.style.top = "-10%";
        close_appoitment_in_progress.style.right = "-1%";
        close_appoitment_in_progress.style.backgroundColor ="#fff";
        close_appoitment_in_progress.style.height ="17px";
        close_appoitment_in_progress.style.width ="17px";
        close_appoitment_in_progress.style.justifyContent ="center";
        close_appoitment_in_progress.style.alignItems ="center";
        close_appoitment_in_progress.style.display ="flex";
        close_appoitment_in_progress.style.cursor ="pointer";
        close_appoitment_in_progress.style.color ="red";
        close_appoitment_in_progress.style.borderRadius ="100%";
        button.id = "in_progress";
        button2.id = "completed";
        button.innerHTML = `In Progress`
        button2.innerHTML = `Completed`
        button.appendChild(close_appoitment_in_progress);

        //close appoitment for completed appoitment
        const close_appoitment_completed = document.createElement("close_appoitment_completed");
        close_appoitment_completed.className = "bi bi-x-lg";
        close_appoitment_completed.style.position = "absolute";
        close_appoitment_completed.style.top = "-10%";
        close_appoitment_completed.style.right = "-1%";
        close_appoitment_completed.style.backgroundColor ="#fff";
        close_appoitment_completed.style.height ="17px";
        close_appoitment_completed.style.width ="17px";
        close_appoitment_completed.style.justifyContent ="center";
        close_appoitment_completed.style.alignItems ="center";
        close_appoitment_completed.style.display ="flex";
        close_appoitment_completed.style.cursor ="pointer";
        close_appoitment_completed.style.color ="red";
        close_appoitment_completed.style.borderRadius ="100%";
        button2.appendChild(close_appoitment_completed);

        //append the two buttons //
        `${cell2.appendChild(button)} <br/> ${cell2.appendChild(button2)}`
    }
}
updateApprovedTransaction()
prev_approved_appoitment.addEventListener("click", ()=>{
    currentIndexApproved = Math.max(currentIndexApproved - 8, 0);
    updateApprovedTransaction();
})
next_approved_appoitment.addEventListener("click", ()=>{
    currentIndexApproved += 4
    if(currentIndexApproved >= approved_appoitment.length){
        currentIndexApproved = 0;
    }
    updateApprovedTransaction()
})
})




        //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPT
        const checkboxes = document.querySelectorAll(".checkbox");
        checkboxes.forEach(function(checkbox){
        checkbox.checked = false;
        });
        function update_table(){
                const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
                
                tableBody.innerHTML = "";
                const checkboxes = document.querySelectorAll(".checkbox");
                checkboxes.forEach(function(checkbox){
                        if(checkbox.checked){
                                  // Create a new row
                                var newRow = tableBody.insertRow();

                        // Insert cells with checkbox value and label
                        var cell1 = newRow.insertCell(0);
                         cell1.textContent = checkbox.parentNode.textContent.trim().replace(/[^a-zA-Z\s]/g, '');
                        var cell2 = newRow.insertCell(1);
                        cell2.textContent = checkbox.value;
                        }
                })
        }


//SUM ALL THE LAB TEST PRICES
window.onload = function() {
        const checkboxs = document.querySelectorAll(".checkbox");
        const updateSum = ()=>{
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
   
     //PROFILE IMAGE
function click_icon_for_profile(){
    document.querySelector(".profile_account").classList.toggle("hide");
};

function click_labouratory_examination(){
    document.querySelector(".contents").style.display = "none";
    document.querySelector(".lab_input ").classList.remove("hide");
    document.querySelector("#back-arrow").style.display = "flex";
}
document.querySelector("#back-arrow").style.display = "none";



//Lab  Inputs
//For immunoassay_section Dropdown
function form1(){
    document.querySelector(".form1").classList.toggle("hidden");
document.querySelector("#open_id_1").style.display = "none";
document.querySelector("#close_id_1").style.display = "block";
    if(document.querySelector(".form1").classList.contains("hidden")){
        document.querySelector("#close_id_1").style.display = "none";
        document.querySelector("#open_id_1").style.display = "block";
    }
};

//For immunoassay_section Dropdown
function form2 () {
    document.querySelector(".form2").classList.toggle("hidden");
    document.querySelector("#open_id_2").style.display = "none";
    document.querySelector("#close_id_2").style.display = "block";
    if(document.querySelector(".form2").classList.contains("hidden")){
        document.querySelector("#close_id_2").style.display = "none";
        document.querySelector("#open_id_2").style.display = "block";
    }
};


//For thyroid_section Dropdown
function form3(){
    document.querySelector(".form3").classList.toggle("hidden");
    document.querySelector("#open_id_3").style.display = "none";
    document.querySelector("#close_id_3").style.display = "block";
    if(document.querySelector(".form3").classList.contains("hidden")){
        document.querySelector("#close_id_3").style.display = "none";
        document.querySelector("#open_id_3").style.display = "block";
    }
};


//For tumor_section Dropdown
function form4() {

    document.querySelector(".form4").classList.toggle("hidden");
    document.querySelector("#open_id_4").style.display = "none";
    document.querySelector("#close_id_4").style.display = "block";
    if(document.querySelector(".form4").classList.contains("hidden")){
        document.querySelector("#close_id_4").style.display = "none";
        document.querySelector("#open_id_4").style.display = "block";
    }
};


//For blood_section Dropdown
function form5(){
    document.querySelector(".form5").classList.toggle("hidden");
    document.querySelector("#open_id_5").style.display = "none";
    document.querySelector("#close_id_5").style.display = "block";
    if(document.querySelector(".form5").classList.contains("hidden")){
        document.querySelector("#close_id_5").style.display = "none";
        document.querySelector("#open_id_5").style.display = "block";
    }
};


//For food_section Dropdown
function form6(){
    document.querySelector(".form6").classList.toggle("hidden");
    document.querySelector("#open_id_6").style.display = "none";
    document.querySelector("#close_id_6").style.display = "block";
    if(document.querySelector(".form6").classList.contains("hidden")){
        document.querySelector("#close_id_6").style.display = "none";
        document.querySelector("#open_id_6").style.display = "block";
    }
};

//For microbiology_section Dropdown
function form7(){
    document.querySelector(".form7").classList.toggle("hidden");
    document.querySelector("#open_id_7").style.display = "none";
    document.querySelector("#close_id_7").style.display = "block";
    if(document.querySelector(".form7").classList.contains("hidden")){
        document.querySelector("#close_id_7").style.display = "none";
        document.querySelector("#open_id_7").style.display = "block";
    }
};


//For histopathology Dropdown
function form8(){
    document.querySelector(".form8").classList.toggle("hidden");
    document.querySelector("#open_id_8").style.display = "none";
    document.querySelector("#close_id_8").style.display = "block";
    if(document.querySelector(".form8").classList.contains("hidden")){
        document.querySelector("#close_id_8").style.display = "none";
        document.querySelector("#open_id_8").style.display = "block";
    }
};

//For haematology Dropdown
function form9(){
    document.querySelector(".form9").classList.toggle("hidden");
    document.querySelector("#open_id_9").style.display = "none";
    document.querySelector("#close_id_9").style.display = "block";
    if(document.querySelector(".form9").classList.contains("hidden")){
        document.querySelector("#close_id_9").style.display = "none";
        document.querySelector("#open_id_9").style.display = "block";
    }
};

