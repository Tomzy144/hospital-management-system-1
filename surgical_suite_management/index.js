//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

//BOOK SURGERY PAGE
const booking_section = ()=>{
document.querySelector(".contents").style.display="none";
document.querySelector(".booking_section").classList.remove("hide");
document.querySelector(".conscent_container").classList.add("hide")
document.querySelector(".vital_section").classList.add("hide");
}

//CONSENT FORM PAGE
const consent_container = ()=>{
    document.querySelector(".contents").style.display="none";
    document.querySelector(".conscent_container").classList.remove("hide");
    document.querySelector(".booking_section").classList.add("hide");
    document.querySelector(".vital_section").classList.add("hide");
}

//UPLOAD CONSENT FORM 
const upload_document = ()=>{
    // document.querySelector(".search-container").style.display="none";
    // document.querySelector(".patient_container").style.display="none";
    document.querySelector(".all_patient_container").style.display="none";
    document.querySelector(".upload_document_page").classList.remove("hide");
    document.querySelector(".vital_section").classList.add("hide");
}
//VITAL CONTAINER
const vital_section = ()=>{
    document.querySelector(".contents").style.display="none";
    document.querySelector(".conscent_container").classList.add("hide");
    document.querySelector(".booking_section").classList.add("hide");
    document.querySelector(".vital_section").classList.remove("hide");
}

const show_vital_container = ()=> {
    document.querySelector(".vital_form").classList.remove("hide");
}
const close_show_vital_container = ()=> {
    document.querySelector(".vital_form").classList.add("hide");
}

const show_threatre_container = ()=> {
    document.querySelector(".threatre").classList.remove("hide");
}
const close_show_threatre_container = ()=> {
    document.querySelector(".threatre").classList.add("hide");
}

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
            accept_appoitment_button.onclick = booking_section;
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
        {number:1, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:2, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:3, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:4, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:5, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:6, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:7, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:8, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:9, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:10, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
        {number:11, patient_name: "John Smith", patient_id:"PAT0001", type_of_surgery:"Head Surgery", date_time: {date: "22-09-2023", time:"00:00:00"}},
     
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
            let cell4 = row.insertCell(4);
            let cell5 = row.insertCell(5);
            cell0.innerHTML = `${approved_appoitment[n].number}`    
            cell1.innerHTML = `${ approved_appoitment[n].patient_name}`;
            cell2.innerHTML = `${ approved_appoitment[n].patient_id}`
            cell3.innerHTML = `${ approved_appoitment[n].type_of_surgery}`
            cell4.innerHTML = `${ approved_appoitment[n].date_time.date} <br/> ${ approved_appoitment[n].date_time.time}`;
            const icon = document.createElement('i');
            icon.classList.add("bi",  "bi-three-dots");
            icon.addEventListener("click",() =>{
                    //VITAL SECTION
                    const list1  = document.createElement("li");
                    list1.textContent = "Call in Nurse for Vital"
                    list1.onclick = show_vital_container;
                


                    //CONSENT FORM
                    const list2 = document.createElement("li");
                    list2.textContent = "Consent Form"
                    list2.onclick = consent_container;


                    //SELECTING WARD SECTION
             
                    const selectWard  =document.getElementById("selectWard");
                    const list3 = document.createElement("li");
                    list3.textContent = "Surgical Ward";
                    list3.appendChild(selectWard);
                    list3.addEventListener("click",() =>{
                        const selectWard  =document.getElementById("selectWard");
                        selectWard.classList.toggle("hide");
                    });
                    const ul = document.createElement('ul');
                    ul.className = "dropdown hide";
                    ul.classList.remove("hide");
                    ul.style.position = "absolute";
                    ul.style.left = "50%";
                    ul.style.height = "max-content";
                    // ul.appendChild(closeIcon);
                    // const closeIcon = document.createElement('i');
                    // closeIcon.classList.add("bi", "bi-x-lg");
                    // closeIcon.style.position = "absolute";
                    // closeIcon.style.top = "3%";
                    // closeIcon.style.right = "10%";
                    // closeIcon.addEventListener("click",() =>{
                    //     const ul = document.createElement('ul');
                   
                    // });
                    // ul.appendChild(closeIcon);

                                      //TRANSFER TO THREATER
               const list4 = document.createElement("li");
                list4.textContent = "Transfer to threatre"
                list4.onclick = show_threatre_container
                    ul.appendChild(list1);
                    ul.appendChild(list2);
                    ul.appendChild(list3);
                    ul.appendChild(list4);


      
                  `${icon.appendChild(ul)}`
        
            })
            cell5.appendChild(icon);
            //END OF SELECTING WARD AND ALSO THE DROPDOWN
            
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
    