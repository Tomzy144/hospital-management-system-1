"use strict";

const open_admission_form_section = ()=>{
    document.querySelector(".admission_form_container").classList.remove("hide");
    document.querySelector(".appoitment_section").style.display = "none";
}
const autopsy_yes =   document.querySelector("#autopsy_yes")
const autopsy_no =   document.querySelector("#autopsy_no")
const checkAutopsy = ()=>{

  if(autopsy_yes.checked){
  autopsy_no.disabled = true;
    document.querySelector(".autopsy_message").classList.remove("hide");
  }else{
    autopsy_no.disabled = false;
    document.querySelector(".autopsy_message").classList.add("hide");
  }
  if(autopsy_no.checked){
  autopsy_yes.disabled = true;
  }else{
    autopsy_yes.disabled = false;

  }
};

autopsy_yes.addEventListener("change", checkAutopsy);
autopsy_no.addEventListener("change", checkAutopsy);

const arr_yes =   document.querySelector("#arr_yes")
const arr_no =   document.querySelector("#arr_no")
const arrMessage = ()=>{

  if(arr_yes.checked){
    arr_no.disabled = true;
    document.querySelector(".arr_message").classList.remove("hide");
  }else{
    arr_no.disabled = false;
    document.querySelector(".arr_message").classList.add("hide");
  }
  if(arr_no.checked){
    arr_yes.disabled = true;
  }else{
    arr_yes.disabled = false;
  }
};

arr_yes.addEventListener("change", arrMessage);
arr_no.addEventListener("change", arrMessage);

document.addEventListener("DOMContentLoaded", ()=>{
    const pending_appoitment = [
        {number:1, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:2, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:3, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:4, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:5, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:6, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:7, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:8, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:9, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:10, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:11, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:12, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:13, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:14, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:15, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:16, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:18, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:19, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"},
        {number:20, patient_name_id: {name:"John Obi", id:"PAT0003"}, date_time:{date:"23-02-2024", time:"00:00"}, request_type:"Medical test"}

    ];

    let currentIndex = 0;
    const appoitment_table = document.querySelector("#appoitment_table tbody");
    const prev_appoitment = document.querySelector("#prev_appoitment")
    const next_appoitment = document.querySelector("#next_appoitment")
    
    const updateAppoitmentTable = ()=>{
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
    

            cell0.innerHTML = `${pending_appoitment[i].number}`;
            cell1.innerHTML = `${pending_appoitment[i].patient_name_id.name} ${pending_appoitment[i].patient_name_id.id}`;
            cell2.innerHTML = `${pending_appoitment[i].date_time.date} ${pending_appoitment[i].date_time.time}`;
            cell3.innerHTML = `${pending_appoitment[i].request_type}`;
            //accept button
            const accept_appoitment_button = document.createElement('button');
            accept_appoitment_button.id = "accept_button";
            accept_appoitment_button.innerHTML = "Accept" ;
            // accept_appoitment_button.onclick = show_radiology_input;
           cell4.appendChild(accept_appoitment_button);
            //reject button
            const reject_appoitment_button = document.createElement('button');
            reject_appoitment_button.id = "reject_button";
            reject_appoitment_button.innerHTML = "Reject";
            cell5.appendChild(reject_appoitment_button);
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
    
    const updateApprovedTransaction = ()=>{
        //set table to blank
        approved_table.innerHTML = '';
        const endIndexApproved = Math.min(currentIndexApproved + 4, approved_appoitment.length)
        for(let n = currentIndexApproved; n < endIndexApproved; n++) {
            const row = approved_table.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            cell0.innerHTML = `${approved_appoitment[n].number}`    
            cell1.innerHTML = `${ approved_appoitment[n].patient_name}`;
            cell2.innerHTML = `${ approved_appoitment[n].patient_id}`;
            const icon = document.createElement('i');
            const dropdown = document.createElement('ul');
            const closeIcon = document.createElement('i');
            closeIcon.classList.add("bi", "bi-x-lg");
            closeIcon.style.position = "absolute";
            closeIcon.style.top = "3%";
            closeIcon.style.right = "10%";
            dropdown.id = 'list_dropdown'
            dropdown.classList.add("hide")
            dropdown.style.position = "absolute";
            dropdown.style.left = "12%";
            dropdown.style.height = "max-content";
            const list1  = document.createElement("li");
            list1.textContent = "Room"

            const list2  = document.createElement("li");
            list2.textContent = "Checkout"
          
             
            icon.classList.add ("bi", "bi-three-dots");
            // icon.style.position = "relative";
            icon.onclick = (event)=>{
                if (event.target === icon) {
                    dropdown.classList.remove('hide'); // Toggle the visibility of the dropdown
                } else if (event.target === closeIcon) {
                    dropdown.classList.add('hide'); // Hide the dropdown
                }
            }
            dropdown.appendChild(closeIcon);
            dropdown.appendChild(list1);
            dropdown.appendChild(list2);
            icon.appendChild(dropdown);
           ` ${cell3.appendChild(icon)}`
            
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
    