

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
            accept_appoitment_button.onclick = show_radiology_input;
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
            cell0.innerHTML = `${approved_appoitment[n].number}`    
            cell1.innerHTML = `${ approved_appoitment[n].patient_name}`;
            const button = document.createElement('button');
            const button2 = document.createElement('button');
    
            //close appoitment for in progress appoitment
            const close_appoitment_in_progress = document.createElement("close_appoitment_in_progress");
            close_appoitment_in_progress.className = "fa fa-times";
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
            close_appoitment_completed.className = "fa fa-times";
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
    

   //SHOW RADIOLOGY INPUT SECTION
   const show_radiology_input = ()=>{
    document.querySelector(".radiology_input").classList.remove("hide");
    document.querySelector(".contents").style.display="none";
   }

   //RADIOGRAPHY SECTION
   const show_radiography_form = ()=>{
    document.querySelector(".radiography_form").classList.toggle("hide");
    document.querySelector("#radiography_plus_icon").style.display="none";
    document.querySelector("#radiography_minus_icon").style.display="block";
    if(document.querySelector(".radiography_form").classList.contains("hide")){
        document.querySelector("#radiography_plus_icon").style.display="block";
        document.querySelector("#radiography_minus_icon").style.display="none";
    }
   }

   //Tomography SECTION
   const show_tomography_scan_form = ()=>{
    document.querySelector(".tomography_scan_form").classList.toggle("hide");
    document.querySelector("#tomography_scan_plus_icon").style.display="none";
    document.querySelector("#tomography_scan_minus_icon").style.display="block";
    if(document.querySelector(".tomography_scan_form").classList.contains("hide")){
        document.querySelector("#tomography_scan_plus_icon").style.display="block";
        document.querySelector("#tomography_scan_minus_icon").style.display="none";
    }
   }
   //MAGNETIC SECTION
   const show_magnetic_form = ()=>{
    document.querySelector(".magnetic_form").classList.toggle("hide");
    document.querySelector("#magnetic_plus_icon").style.display="none";
    document.querySelector("#magnetic_minus_icon").style.display="block";
    if(document.querySelector(".magnetic_form").classList.contains("hide")){
        document.querySelector("#magnetic_plus_icon").style.display="block";
        document.querySelector("#magnetic_minus_icon").style.display="none";
    }
   }
   //ultrasound SECTION
   const show_ultrasound_form = ()=>{
    document.querySelector(".ultrasound_form").classList.toggle("hide");
    document.querySelector("#ultrasound_plus_icon").style.display="none";
    document.querySelector("#ultrasound_minus_icon").style.display="block";
    if(document.querySelector(".ultrasound_form").classList.contains("hide")){
        document.querySelector("#ultrasound_plus_icon").style.display="block";
        document.querySelector("#ultrasound_minus_icon").style.display="none";
    }
   }
   //nuclear SECTION
   const show_nuclear_form = ()=>{
    document.querySelector(".nuclear_form").classList.toggle("hide");
    document.querySelector("#nuclear_plus_icon").style.display="none";
    document.querySelector("#nuclear_minus_icon").style.display="block";
    if(document.querySelector(".nuclear_form").classList.contains("hide")){
        document.querySelector("#nuclear_plus_icon").style.display="block";
        document.querySelector("#nuclear_minus_icon").style.display="none";
    }
   }
   //fluoroscopy SECTION
   const show_fluoroscopy_form = ()=>{
    document.querySelector(".fluoroscopy_form").classList.toggle("hide");
    document.querySelector("#fluoroscopy_plus_icon").style.display="none";
    document.querySelector("#fluoroscopy_minus_icon").style.display="block";
    if(document.querySelector(".fluoroscopy_form").classList.contains("hide")){
        document.querySelector("#mammography_plus_icon").style.display="block";
        document.querySelector("#fluoroscopyr_minus_icon").style.display="none";
    }
   }
   //mammography SECTION
   const show_mammography_form = ()=>{
    document.querySelector(".mammography_form").classList.toggle("hide");
    document.querySelector("#mammography_plus_icon").style.display="none";
    document.querySelector("#mammography_minus_icon").style.display="block";
    if(document.querySelector(".mammography_form").classList.contains("hide")){
        document.querySelector("#mammography_plus_icon").style.display="block";
        document.querySelector("#mammography_minus_icon").style.display="none";
    }
   }
   //interventional_radiology SECTION
   const show_interventional_radiology_form = ()=>{
    document.querySelector(".interventional_radiology_form").classList.toggle("hide");
    document.querySelector("#interventional_radiology_plus_icon").style.display="none";
    document.querySelector("#interventional_radiology_minus_icon").style.display="block";
    if(document.querySelector(".interventional_radiology_form").classList.contains("hide")){
        document.querySelector("#interventional_radiology_plus_icon").style.display="block";
        document.querySelector("#interventional_radiology_minus_icon").style.display="none";
    }
   }
   //Magnetic Resonance SECTION
   const show_magnetic_resonance_form = ()=>{
    document.querySelector(".magnetic_resonance_form").classList.toggle("hide");
    document.querySelector("#magnetic_resonance_plus_icon").style.display="none";
    document.querySelector("#magnetic_resonance_minus_icon").style.display="block";
    if(document.querySelector(".magnetic_resonance_form").classList.contains("hide")){
        document.querySelector("#magnetic_resonance_plus_icon").style.display="block";
        document.querySelector("#magnetic_resonance_minus_icon").style.display="none";
    }
   }
   //Dual Energy SECTION
   const show_dual_energy_form = ()=>{
    document.querySelector(".dual_energy_form").classList.toggle("hide");
    document.querySelector("#dual_energy_plus_icon").style.display="none";
    document.querySelector("#dual_energy_minus_icon").style.display="block";
    if(document.querySelector(".dual_energy_form").classList.contains("hide")){
        document.querySelector("#dual_energy_plus_icon").style.display="block";
        document.querySelector("#dual_energy_minus_icon").style.display="none";
    }
   }
   //Chest X-ray SECTION
   const show_chest_x_ray_form = ()=>{
    document.querySelector(".chest_x_ray_form").classList.toggle("hide");
    document.querySelector("#chest_x_ray_plus_icon").style.display="none";
    document.querySelector("#chest_x_ray_minus_icon").style.display="block";
    if(document.querySelector(".chest_x_ray_form").classList.contains("hide")){
        document.querySelector("#chest_x_ray_plus_icon").style.display="block";
        document.querySelector("#chest_x_ray_minus_icon").style.display="none";
    }
   }
   //Myelography SECTION
   const show_myelography_form = ()=>{
    document.querySelector(".myelography_form").classList.toggle("hide");
    document.querySelector("#myelography_plus_icon").style.display="none";
    document.querySelector("#myelography_minus_icon").style.display="block";
    if(document.querySelector(".myelography_form").classList.contains("hide")){
        document.querySelector("#myelography_plus_icon").style.display="block";
        document.querySelector("#myelography_minus_icon").style.display="none";
    }
   }
   //Arthrography SECTION
   const show_arthrography_form = ()=>{
    document.querySelector(".arthrography_form").classList.toggle("hide");
    document.querySelector("#arthrography_plus_icon").style.display="none";
    document.querySelector("#arthrography_minus_icon").style.display="block";
    if(document.querySelector(".arthrography_form").classList.contains("hide")){
        document.querySelector("#arthrography_plus_icon").style.display="block";
        document.querySelector("#arthrography_minus_icon").style.display="none";
    }
   }
   //Hysterosalpingography SECTION
   const show_hysterosalpingography_form = ()=>{
    document.querySelector(".hysterosalpingography_form").classList.toggle("hide");
    document.querySelector("#hysterosalpingography_plus_icon").style.display="none";
    document.querySelector("#hysterosalpingography_minus_icon").style.display="block";
    if(document.querySelector(".hysterosalpingography_form").classList.contains("hide")){
        document.querySelector("#hysterosalpingography_plus_icon").style.display="block";
        document.querySelector("#hysterosalpingography_minus_icon").style.display="none";
    }
   }
   //Cholangiography SECTION
   const show_cholangiography_form = ()=>{
    document.querySelector(".cholangiography_form").classList.toggle("hide");
    document.querySelector("#cholangiography_plus_icon").style.display="none";
    document.querySelector("#cholangiography_minus_icon").style.display="block";
    if(document.querySelector(".cholangiography_form").classList.contains("hide")){
        document.querySelector("#cholangiography_plus_icon").style.display="block";
        document.querySelector("#cholangiography_minus_icon").style.display="none";
    }
   }
   //Angiography SECTION
   const show_angiography_form = ()=>{
    document.querySelector(".angiography_form").classList.toggle("hide");
    document.querySelector("#angiography_plus_icon").style.display="none";
    document.querySelector("#angiography_minus_icon").style.display="block";
    if(document.querySelector(".angiography_form").classList.contains("hide")){
        document.querySelector("#angiography_plus_icon").style.display="block";
        document.querySelector("#angiography_minus_icon").style.display="none";
    }
   }
   //Functional MRI SECTION
   const show_functional_mri_form = ()=>{
    document.querySelector(".functional_mri_form").classList.toggle("hide");
    document.querySelector("#functional_mri_plus_icon").style.display="none";
    document.querySelector("#functional_mri_minus_icon").style.display="block";
    if(document.querySelector(".functional_mri_form").classList.contains("hide")){
        document.querySelector("#functional_mri_plus_icon").style.display="block";
        document.querySelector("#functional_mri_minus_icon").style.display="none";
    }
   }
   //Cardiac Imaging SECTION
   const show_cardiac_imaging_form = ()=>{
    document.querySelector(".cardiac_imaging_form").classList.toggle("hide");
    document.querySelector("#cardiac_imaging_plus_icon").style.display="none";
    document.querySelector("#cardiac_imaging_minus_icon").style.display="block";
    if(document.querySelector(".cardiac_imaging_form").classList.contains("hide")){
        document.querySelector("#cardiac_imaging_plus_icon").style.display="block";
        document.querySelector("#cardiac_imaging_minus_icon").style.display="none";
    }
   }