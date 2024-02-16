      //PROFILE IMAGE
      function click_icon_for_profile (){
        const profile_container  =  document.querySelector(".profile_account");
        profile_container.classList.toggle("hide");
      };

      document.addEventListener("DOMContentLoaded", ()=>{
        const pending_appoitment = [
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
            {number:1, doctor_name: "Doc. John Obi", patient_name:"John Samuel", patient_id: "PAT0003", date:"23-02-2024", time:"00:00"},
        ];
    
        let currentIndex = 0;
        const appoitment_table = document.querySelector("#appoitment_table tbody");
        const prev_appoitment = document.querySelector("#prev_appoitment")
        const next_appoitment = document.querySelector("#next_appoitment")
        
        const updateAppoitmentTable = ()=>{
            //set table to blank;
            appoitment_table.innerHTML = ""
    
            const endIndex  = Math.min(currentIndex + 12, pending_appoitment.length);
            for(let i = currentIndex; i < endIndex; i++) {
                const row = appoitment_table.insertRow();
                let cell0 = row.insertCell(0);
                let cell1 = row.insertCell(1);
                let cell2 = row.insertCell(2);
                let cell3 = row.insertCell(3);
                let cell4 = row.insertCell(4);
                let cell5 =row.insertCell(5);
                let cell6 =row.insertCell(6);
                let cell7=row.insertCell(7);
        
    
                cell0.innerHTML = `${pending_appoitment[i].number}`;
                cell1.innerHTML = `${pending_appoitment[i].doctor_name}`;
                cell2.innerHTML = `${pending_appoitment[i].patient_name}`;
                cell3.innerHTML = `${pending_appoitment[i].patient_id}`;
                cell4.innerHTML = `${pending_appoitment[i].date}`;
                cell5.innerHTML = `${pending_appoitment[i].time}`;
                //accept button
                const accept_appoitment_button = document.createElement('button');
                accept_appoitment_button.id = "accept_button";
                accept_appoitment_button.innerHTML = "Accept" ;
                // accept_appoitment_button.onclick = show_radiology_input;
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
            currentIndex = Math.max(currentIndex - 12, 0);
            updateAppoitmentTable();
        })
        next_appoitment.addEventListener("click", ()=>{
            currentIndex += 8
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
            {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
            {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
            {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
            {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
            {number:7, patient_name: "John Smith", patient_id:"PAT0001"},
        ];
        let currentIndexApproved = 0;
        const approved_table = document.querySelector("#approved_table tbody");
        const prev_approved_appoitment = document.querySelector("#prev_approved_appoitment")
            const next_approved_appoitment = document.querySelector("#next_approved_appoitment")
        
        const updateApprovedTransaction = ()=>{
            //set table to blank
            approved_table.innerHTML = '';
            const endIndexApproved = Math.min(currentIndexApproved + 9, approved_appoitment.length)
            for(let n = currentIndexApproved; n < endIndexApproved; n++) {
                const row = approved_table.insertRow();
                let cell0 = row.insertCell(0);
                let cell1 = row.insertCell(1);
                let cell2 = row.insertCell(2);
                let cell3 = row.insertCell(3);
                cell0.innerHTML = `${approved_appoitment[n].number}`    
                cell1.innerHTML = `${ approved_appoitment[n].patient_name}`;
                cell2.innerHTML = `${ approved_appoitment[n].patient_id}`;
                
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
        });

        function showPrescriptionForm(){

        }