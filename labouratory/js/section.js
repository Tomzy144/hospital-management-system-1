//using this function to pass into all the two section
const AllSection = function(section, show_container) {
    let container = document.getElementById(section + '-container');
    container.innerHTML = show_container;
}



const lab_sec = `
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

`
AllSection('lab_section', lab_sec);

const diagnosis_sec=`
<div class="diagnosis hide">
    <h1>Diagnosis</h1>
    </div>
`
AllSection('diagnosis_section', diagnosis_sec);

const landing_page_section = `
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
`

AllSection('landing_page_content_section', landing_page_section);