   //PROFILE IMAGE
   const profile_container  =  document.querySelector(".profile_account");
   const click_icon_for_profile = ()=>{
       profile_container.classList.toggle("hide");
   };


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