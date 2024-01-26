<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabDoc Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href='../awesome-font/css/font-awesome.min.css'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Montserrat:wght@100&family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,100&family=Quicksand:wght@500;600;700&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<body>
         <!---SIDEBAR AND NAVBAR-->
    <div class="navbar">
        <div class="section1">
        <i class="fa fa-long-arrow-left" id="back-arrow" onclick="backWardArrow()"></i>
        <i class="fa fa-long-arrow-left" id="back-arrow_to_home" onclick="back_arrow_to_home()"></i>
        </div>
        <div class="section2">
            <div class="icons">
          <i class="fa fa-user" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="fa fa-bell" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <h4>Immaculater Odu</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span>Doctor Kingsley Etete Effiong</span>
            <i class="fa fa-caret-down" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="fa fa-envelope" id="icon"></i>
                <i class="fa fa-hospital-o" id="icon"onClick="click_appoitment_button()"></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
        <div class="contents">
    <div class="button_container hide">
    <button onClick="click_labouratory_examination()" id="btn_sections">Labouratory Examination</button>
    <button onClick="click_diagnosis()" id="btn_sections">Diagnosis</button>
    </div>

    
    <div class="appiontment_booking_container">
        <div class="appiontment">
        <div class="head_sec">
            <span>Appoitment Details</span>
            <div class="appoitment_input_control">
            <i class="fa fa-search" id="search_icon"></i>
                <input type="text" placeholder="Search here" class="appoitment_input">
            </div>
        </div>
        <div class="table_container">
          <table>
            <thead>
              <td>Patient Name</td>
              <td>Patient Id</td>
              <td>Date</td>
              <td>Time</td>
              <td>Request Type</td>
              <td>Accept/Reject</td>
            </thead>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button onClick="show_buttons()" id="accept_button">Accept</button>
                <button id="reject_button">Reject</button>
                <button id="reject_button">Pending</button>
                <i class="fa fa-times" id="cancel_appoitment" ></i>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button id="accept_button">Accept</button>
                <button id="reject_button">Reject</button>
                <button id="reject_button">Pending</button>
                <i class="fa fa-times" id="cancel_appoitment"></i>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button id="accept_button">Accept</button>
                <button id="reject_button">Reject</button>
                <button id="reject_button">Pending</button>
                <i class="fa fa-times" id="cancel_appoitment"></i>
              </td>
            </tbody>
            <tbody>
              <td>Princess Precious</td>
              <td>Pat001</td>
              <td>22-02-2024</td>
              <td>2:30PM</td>
              <td>Medical Test</td>
              <td>
                <button id="accept_button">Accept</button>
                <button id="reject_button">Reject</button>
                <button id="reject_button">Pending</button>
                <i class="fa fa-times" id="cancel_appoitment"></i>
              </td>
            </tbody>
          </table>
        </div>
        </div>
          </div>
    <!---DIAGNOSIS---->
    </div>
    <div class="diagnosis hide">

    </div>
       <!---LABOURATORY EXAMINATION---->

    <div class="lab_input hide">
        <div class="lab_container">
       <div class="immunoassay">
      <span>Immunoassay Single Tests</span>
      <i class="fa fa-plus" id="open_id_1"></i>
        <i class="fa fa-minus" id="close_id_1"></i>
       </div>
       <form action="" class="form1 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Pregnancy Test (hCG) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">HIV Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Hepatitis B Surface Antigen (HBsAg) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Thyroid Stimulating Hormone (TSH) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Troponin Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">IgE Allergy Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Anti-Nuclear Antibody (ANA) Test(#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Drug Screening Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">C-reactive Protein (CRP) Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Rheumatoid Factor (RF) Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">D-dimer Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Insulin Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Cortisol Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Digoxin Test</label>
        </div>
       </form>

       <div class="clinical_chemistry">
      <span>Clinical Chemistry</span>
      <i class="fa fa-plus" id="open_id_2"></i>
        <i class="fa fa-minus" id="close_id_2"></i>
       </div>
       <form action="" class="form2 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Full electrolytes (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Sodium</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Potassium (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Bicarbonate (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Chloride (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Urea</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Electrolytes & urea (e & u) (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Creatinine</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Diabetes screening (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Hba 1c (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Urinalysis</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Fasting blood sugar (fbs)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Random blood sugar</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">2-hr pp blood sugar</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Kidney function test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Liver function test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Glycaemic Studies</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Lipid Profile (Full)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Renal Function Test (#6,000)</label>
        </div>
       </form>
       <div class="thyroid">
      <span>Thyroid function test</span>
      <i class="fa fa-plus" id="open_id_3"></i>
        <i class="fa fa-minus" id="close_id_3"></i>
       </div>
       <form action="" class="form3 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Thyroid Stimulating Hormone (TSH) Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Free Thyroxine (FT4) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Total Thyroxine (T4) Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Free Triiodothyronine (FT3) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Total Triiodothyronine (T3) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Thyroid Peroxidase Antibodies (TPOAb) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Thyroglobulin Antibodies (TgAb) Test(#5,000)</label>
        </div>
       </form>
       <div class="tumor">
      <span>Tumor markers</span>
      <i class="fa fa-plus" id="open_id_4"></i>
        <i class="fa fa-minus" id="close_id_4"></i>
       </div>
       <form action="" class="form4 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Prostate-Specific Antigen (PSA) Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Carcinoembryonic Antigen (CEA) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Alpha-Fetoprotein (AFP) Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">CA 125 Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">CA 19-9 Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">CA 15-3 Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Beta-2 Microglobulin (B2M) Test (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Human Chorionic Gonadotropin (hCG) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Thyroglobulin Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Neuron-Specific Enolase (NSE) Test(#6,000)</label>
        </div>
       </form>
       <div class="blood">
      <span>Blood banking</span>
      <i class="fa fa-plus" id="open_id_5"></i>
        <i class="fa fa-minus" id="close_id_5"></i>
       </div>
       <form action="" class="form5 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Blood Typing (ABO and Rh) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Crossmatching</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Direct Antiglobulin Test (DAT) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Indirect Antiglobulin Test (IAT) (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Antibody Screen (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Blood Donor Screening</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Blood Component Separation (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Platelet Function Assay</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Coagulation Factor Assays (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Hemoglobin Electrophoresis (#6,000)</label>
        </div>
       </form>
       <div class="food">
      <span>Food handler test</span>
      <i class="fa fa-plus" id="open_id_6"></i>
        <i class="fa fa-minus" id="close_id_6"></i>
       </div>
       <form action="" class="form6 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Fecal Coliform Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Salmonella Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Staphylococcus aureus Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Escherichia coli (E. coli) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Hepatitis A Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Norovirus Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Listeria Test (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Shigella Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Campylobacter Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">otal Plate Count (TPC) Test (#6,000)</label>
        </div>
       </form>
       <div class="microbiology">
      <span>Microbiology and parasitology</span>
      <i class="fa fa-plus" id="open_id_7"></i>
        <i class="fa fa-minus" id="close_id_7"></i>
       </div>
       <form action="" class="form7 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Gram Stain (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">SAcid-Fast Stain</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Culture and Sensitivity (C&S) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Blood Culture (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Urine Culture (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Fungal Culture</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Parasitological Examination (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Widal Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Rapid Strep Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Giemsa Stain (#6,000)</label>
        </div>
       </form>
       <div class="histopathology">
      <span>Histopathology</span>
      <i class="fa fa-plus" id="open_id_8"></i>
        <i class="fa fa-minus" id="close_id_8"></i>
       </div>
       <form action="" class="form8 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Biopsy (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Frozen Section</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Fine Needle Aspiration (FNA) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Immunohistochemistry (IHC) (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Hematoxylin and Eosin (H&E) Stain (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Special Stains</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Immunofluorescence (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">In Situ Hybridization (ISH)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Tumor Grading (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="6000" class="checkbox">
                <label for="">Tumor Markers in Histopathology (#6,000)</label>
        </div>
       </form>
       <div class="haematology">
      <span>Haematology</span>
      <i class="fa fa-plus" id="open_id_9"></i>
        <i class="fa fa-minus" id="close_id_9"></i>
       </div>
       <form action="" class="form9 hidden">
        <div class="form_control">
                <input type="checkbox" value="3000" class="checkbox">
                <label for="">Complete Blood Count (CBC) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Hemoglobin Electrophoresis</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="1000" class="checkbox">
                <label for="">Erythrocyte Sedimentation Rate (ESR) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="2000" class="checkbox">
                <label for="">Coagulation Studies (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value ="2000" class="checkbox">
                <label for="">Peripheral Blood Smear (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="0" class="checkbox">
                <label for="">Reticulocyte Count</label>
        </div>
        <div class="form_control">
                <input type="checkbox" value="5000" class="checkbox">
                <label for="">Blood Film Examination (#5,000)</label>
        </div>
        <div class="form_control">
          
                <input type="checkbox" value="8000" class="checkbox">
                <label for="">Bone Marrow Aspiration 8,000</label>
        </div>
        <div class="form_control">
               
                <input type="checkbox" id="platelet" value="6000" class="checkbox"
                <label for="">Platelet Count (#6,000)</label>
        </div>
        <div class="form_control">
                
                <input type="checkbox" value="12000" class="checkbox">
                <label for="">Bleeding Time and Clotting Time (#12,000)</label>
        </div>
       </form>
       <button id="btn" class="save" onClick="show_test_booking()">Enter</button>
       <button id="btn" class="save">Edit</button>
       </div>
       <div class="test_booking hide">
        <i class="fa fa-times" id="close" onClick="hide_test_booking()"></i>
        <img class="booking_hospital_logo" src="../Images/logo gif.gif" alt="" >
        <h1>Test Booking</h1>
        <table id="dataTable">
                <thead>
                        <td>Amount </td>
                        <td>Tests</td>
                </thead>
                <tbody>
                </tbody>
        </table>
        <div class="total">
                <p>Total</p>
                <p id="total">#100,000.00</p>
        </div>
        <button class="btn">Book Now</button>
       </div>
       <div class="overlay hide"></div>
       </div>
    <script>


        //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPT
        const checkboxes = document.querySelectorAll(".checkbox");
        checkboxes.forEach(function(checkbox){
        checkbox.checked = false;
        });


        const update_table = ()=>{
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
const show_test_booking = ()=>{
        document.querySelector(".overlay").classList.remove("hide");
        document.querySelector(".test_booking").classList.remove("hide");
}
const hide_test_booking = ()=>{
        document.querySelector(".overlay").classList.add("hide");
        document.querySelector(".test_booking").classList.add("hide");
        const checkboxs = document.querySelectorAll(".checkbox");
        checkboxs.forEach(function(checkbox){
              checkbox.checked = false;
                })

}
   
     //PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

const click_labouratory_examination = ()=>{
    document.querySelector(".contents").style.display = "none";
    document.querySelector(".lab_input ").classList.remove("hide");
    document.querySelector("#back-arrow").style.display = "flex";
    document.querySelector("#back-arrow_to_home").style.display = "none";
}
document.querySelector("#back-arrow").style.display = "none";


//SHOW BUTTONS FOR SECELECTIONS
const show_buttons = ()=>{
    document.querySelector(".button_container").style.display = "flex";
  const appoitment_container = document.querySelector(".appiontment_booking_container");
  appoitment_container.style.display = "none";
  document.querySelector("#back-arrow_to_home").style.display = "flex";
  document.querySelector("button").style.display = "none";
}


//Lab 

//For immunoassay_section Dropdown
const immunoassay_section = document.querySelector(".immunoassay")
const immunoassay_open_icon1 = document.querySelector("#open_id_1")
const immunoassay_close_icon1 = document.querySelector("#close_id_1")
const form1 = document.querySelector(".form1");

immunoassay_section.addEventListener("click",()=>{
    form1.classList.toggle("hidden");
    immunoassay_open_icon1.style.display = "none";
    immunoassay_close_icon1.style.display = "block";
    if(form1.classList.contains("hidden")){
        immunoassay_close_icon1.style.display = "none";
        immunoassay_open_icon1.style.display = "block";
    }
})

//For immunoassay_section Dropdown
const clinical_chemistry_section = document.querySelector(".clinical_chemistry")
const clinical_chemistry_open_icon1 = document.querySelector("#open_id_2")
const clinical_chemistry_close_icon1 = document.querySelector("#close_id_2")
const form2 = document.querySelector(".form2");

clinical_chemistry_section.addEventListener("click",()=>{
    form2.classList.toggle("hidden");
    clinical_chemistry_open_icon1.style.display = "none";
    clinical_chemistry_close_icon1.style.display = "block";
    if(form2.classList.contains("hidden")){
        clinical_chemistry_close_icon1.style.display = "none";
        clinical_chemistry_open_icon1.style.display = "block";
    }
})
//For thyroid_section Dropdown
const thyroid_section = document.querySelector(".thyroid")
const thyroid_open_icon1 = document.querySelector("#open_id_3")
const thyroid_close_icon1 = document.querySelector("#close_id_3")
const form3 = document.querySelector(".form3");

thyroid_section.addEventListener("click",()=>{
    form3.classList.toggle("hidden");
    thyroid_open_icon1.style.display = "none";
    thyroid_close_icon1.style.display = "block";
    if(form3.classList.contains("hidden")){
        thyroid_close_icon1.style.display = "none";
        thyroid_open_icon1.style.display = "block";
    }
})

//For tumor_section Dropdown
const tumor_section = document.querySelector(".tumor")
const tumor_open_icon1 = document.querySelector("#open_id_4")
const tumor_close_icon1 = document.querySelector("#close_id_4")
const form4 = document.querySelector(".form4");

tumor_section.addEventListener("click",()=>{
    form4.classList.toggle("hidden");
    tumor_open_icon1.style.display = "none";
    tumor_close_icon1.style.display = "block";
    if(form4.classList.contains("hidden")){
        tumor_close_icon1.style.display = "none";
        tumor_open_icon1.style.display = "block";
    }
})

//For blood_section Dropdown
const blood_section = document.querySelector(".blood")
const blood_open_icon1 = document.querySelector("#open_id_5")
const blood_close_icon1 = document.querySelector("#close_id_5")
const form5 = document.querySelector(".form5");

blood_section.addEventListener("click",()=>{
    form5.classList.toggle("hidden");
    blood_open_icon1.style.display = "none";
    blood_close_icon1.style.display = "block";
    if(form5.classList.contains("hidden")){
        blood_close_icon1.style.display = "none";
        blood_open_icon1.style.display = "block";
    }
})
//For food_section Dropdown
const food_section = document.querySelector(".food")
const food_open_icon1 = document.querySelector("#open_id_6")
const food_close_icon1 = document.querySelector("#close_id_6")
const form6 = document.querySelector(".form6");

food_section.addEventListener("click",()=>{
    form6.classList.toggle("hidden");
    food_open_icon1.style.display = "none";
    food_close_icon1.style.display = "block";
    if(form6.classList.contains("hidden")){
        food_close_icon1.style.display = "none";
        food_open_icon1.style.display = "block";
    }
})

//For microbiology_section Dropdown
const microbiology_section = document.querySelector(".microbiology")
const microbiology_open_icon1 = document.querySelector("#open_id_7")
const microbiology_close_icon1 = document.querySelector("#close_id_7")
const form7= document.querySelector(".form7");

microbiology_section.addEventListener("click",()=>{
    form7.classList.toggle("hidden");
    microbiology_open_icon1.style.display = "none";
    microbiology_close_icon1.style.display = "block";
    if(form7.classList.contains("hidden")){
        microbiology_close_icon1.style.display = "none";
        microbiology_open_icon1.style.display = "block";
    }
})

//For histopathology Dropdown
const histopathology_section = document.querySelector(".histopathology")
const histopathology_open_icon1 = document.querySelector("#open_id_8")
const histopathology_close_icon1 = document.querySelector("#close_id_8")
const form8= document.querySelector(".form8");

histopathology_section.addEventListener("click",()=>{
    form8.classList.toggle("hidden");
    histopathology_open_icon1.style.display = "none";
    histopathology_close_icon1.style.display = "block";
    if(form8.classList.contains("hidden")){
        histopathology_close_icon1.style.display = "none";
        histopathology_open_icon1.style.display = "block";
    }
})
//For haematology Dropdown
const haematology_section = document.querySelector(".haematology")
const haematology_open_icon1 = document.querySelector("#open_id_9")
const haematology_close_icon1 = document.querySelector("#close_id_9")
const form9= document.querySelector(".form9");

haematology_section.addEventListener("click",()=>{
    form9.classList.toggle("hidden");
    haematology_open_icon1.style.display = "none";
    haematology_close_icon1.style.display = "block";
    if(form9.classList.contains("hidden")){
        haematology_close_icon1.style.display = "none";
        haematology_open_icon1.style.display = "block";
    }
})


const click_diagnosis= ()=>{
    document.querySelector(".contents").style.display = "none";
    document.querySelector(".diagnosis").classList.remove("hide");
    document.querySelector("#back-arrow").style.display = "flex";
    document.querySelector("#back-arrow_to_home").style.display = "none";
}

const backWardArrow = ()=>{
    document.querySelector(".contents").style.display = "flex";
    document.querySelector(".diagnosis").classList.add("hide");
    document.querySelector(".lab_input").classList.add("hide");
    document.querySelector("#back-arrow").style.display = "none";
    document.querySelector("#back-arrow_to_home").style.display = "block";

}
document.querySelector("#back-arrow_to_home").style.display = "none";

const back_arrow_to_home = ()=>{
    document.querySelector(".button_container").style.display = "none";
    document.querySelector("#back-arrow_to_home").style.display = "none";
    const appoitment_container = document.querySelector(".appiontment_booking_container");
  appoitment_container.style.display = "block";
  document.querySelector("#accept_button").style.display = "none";
  document.querySelector("#reject_button").style.display = "none";
}
    </script>
</body>
</html>
