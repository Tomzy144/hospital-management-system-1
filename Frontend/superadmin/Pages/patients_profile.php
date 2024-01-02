<!-- ?php include '../../backend/config/connection.php'?> -->
<?php include '../../../backend/config/code.php'?>

<?php include '../../backend/dashboardconfig/session-validation.php';
include '../../../backend/config/search.php'?>



<?php


$patient_id = $_POST['patient_id'];


// $case == 'patient_profile_page';

// if (isset($_POST['patient_id'])) {
//     $patient_id = $_POST['patient_id'];
//     // Now you can use $patient_id in your PHP code

//     echo json_encode(array('patient_id' => $patient_id));
// } else {
//     $response = ['result' => 'error', 'message' => 'No patient_id received'];
//     echo json_encode($response);
// }





    
$fetch_patient_profile = $callclass->_get_patient_details($conn, $patient_id);

$patient_profile_array = json_decode($fetch_patient_profile, true);

if ($patient_profile_array) {
    $sn = $patient_profile_array['sn'];
    $fullname = $patient_profile_array['fullname'];
    $email = $patient_profile_array['email'];
    $gender = $patient_profile_array['gender'];
    $dateofbirth = $patient_profile_array['dateofbirth'];
    $address = $patient_profile_array['address'];
    $phonenumber = $patient_profile_array['phonenumber'];
    $status_id = $patient_profile_array['status_id'];
    $category_id = $patient_profile_array['category_id'];
    $date = $patient_profile_array['date'];
    $last_login = $patient_profile_array['last_login'];
    $passport = $patient_profile_array['passport'];
    ///next of kin
    $kname = $patient_profile_array['kname'];
    $kgender = $patient_profile_array['kgender'];
    $kphonenumber = $patient_profile_array['kphonenumber'];
    $krelationship = $patient_profile_array['krelationship'];
    $kaddress = $patient_profile_array['kaddress'];





    $occupation = $patient_profile_array['occupation'];
    $past_obsterics = $patient_profile_array['past_obsterics'];
    $medical_history = $patient_profile_array['medical_history'];
    $sexual_history = $patient_profile_array['sexual_history'];
    $past_disease = $patient_profile_array['past_disease'];
    $family_disease = $patient_profile_array['family_disease'];
    $past_surgery = $patient_profile_array['past_surgery'];

} else {
    $fullname=  "error";
    // Handle the case where the patient details were not found.
    // You might want to return an error message or take other appropriate action.
}

    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    if ($status_id) {
        $status_name = $status_array['status_name'];
    } else {
        // Handle the case where status details were not found.
        // You might want to return an error message or take other appropriate action.
    }




    // $fetch_category = $callclass->_get_category_details($conn, $category_id);

    // Check if the category details were successfully retrieved
    if ($fetch_category !== false) {
        $category_array = json_decode($fetch_category, true);
    
        // Check if category_name exists in the response
        if (isset($category_array['category_name'])) {
            $category_name = $category_array['category_name'];
        } else {
            // Handle the case where category_name was not found in the response.
            // You might want to return an error message or take other appropriate action.
        }
    } else {
        // Handle the case where category details were not found.
        // You might want to return an error message or take other appropriate action.
    }
 ?>


<!-- end of php declarations -->












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/patients-profile.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <link href="../../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <script src ="js/patient.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script>

    <title>Patients Profiles</title>
</head>
<body>

   
            <div  class="patient-navbar">
                <i class="fa fa-long-arrow-left t" id='back-arrow-patientslist' onClick='backWardArrow()'></i>
                <h1>KING PROFILE</h1>
            </div>
            <!--timer-->
            <div class="container-timer">
                <div class="timer-box-content">
                <div class="timer-box" id="timer">5</div>
                <div class="timer-box">22</div>
                <div class="timer-box">16</div>
                <div class="timer-box">23</div>
            </div>
            <h3 class="timer-text">Days Hours Mins Secs</h3>
        </div>
        </div>
        <div class="content">
            <div class="all_input">
        <div class="patient_info">
            <h3>Patient Personal Information</h3> 
             <i class="fa fa-plus" id="info_open"></i> 
             <i class="fa fa-minus" id="info_close"></i>
         </div>
         <div class="info-accordion info-hidden" id="info">
            <div class="info_details">
             <i class="fa fa-user-circle-o"></i>
            <h2>BIO DATA</h2>
        </div>
            <div class="flex-info1">
                <h4 class="info">FULL NAME:</h4>
                <h4 class="info"><?php echo $fullname?> </h4>
            </div>
                <div class="flex-info1">
                    <h4 class="info">GENDER:</h4>
                    <h4 class="info"><?php echo $gender?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">DATE OF BIRTH:</h4>
                    <h4 class="info"><?php echo $dateofbirth?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">HOME ADDRESS:</h4>
                    <h4 class="info"><?php echo $address?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">PHONE NUMBER:</h4>
                    <h4 class="info"><?php echo $phonenumber?></h4>
                </div><br>
                    <div class="info_details">
                <i class="fa fa-user-circle-o"></i>
                <h2>NEXT OF KINS</h2>
            </div>
                <div class="flex-info1">
                    <h4 class="info">FULL NAME:</h4>
                    <h4 class="info"><?php echo $kname?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">GENDER:</h4>
                    <h4 class="info"><?php echo $kgender?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">HOME ADDRESS:</h4>
                    <h4 class="info"><?php echo $kaddress?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">PHONE NUMBER:</h4>
                    <h4 class="info"><?php echo $kphonenumber?></h4>
                </div>
                <div class="flex-info1">
                    <h4 class="info">RELATIONSHIP:</h4>
                    <h4 class="info"><?php echo $krelationship ?></h4>
                </div>
            <div class="info_details">
            <i class="fa fa-history"></i> 
            <h2>SOCAIL HISTORY</h2>
        </div>
                <div class="flex-info1">
                    <h4 class="info">Present Occupation:</h4>
                    <h4 class="info"><?php echo $occupation ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-hdd-o "></i> 
            <h2>PAST OBSTERICS</h2>
        </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_obsterics ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-hospital-o"></i> 
            <h2>MEDICAL HISTORY</h2>
        </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $medical_history ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-user-circle"></i> 
            <h2>SEXUAL HISTORY</h2>
        </div>  
                <div class="flex-info1">
                    <h4 class="info"><?php echo $sexual_history ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-tachometer"></i> 
            <h2>PAST DISEASE</h2>
        </div>  
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_disease ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-tachometer"></i> 
            <h2>FAMILY DISEASE</h2>
        </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $family_disease ?></h4>
                </div>
                <div class="info_details">
                <i class="fa fa-thermometer-0 (alias)"></i> 
            <h2>PAST SURGERY</h2>
        </div>
                <div class="flex-info1">
                    <h4 class="info"><?php echo $past_surgery ?></h4>
                </div>
</div>
<div class="lab_info">
            <h3>Labouratory Examination</h3> 
             <i class="fa fa-plus" id="lab_open"></i> 
             <i class="fa fa-minus" id="lab_close"></i>
         </div>
         <div class="lab_input hidden">
       <div class="immunoassay">
      <span>Immunoassay Single Tests</span>
      <i class="fa fa-plus" id="open_id_1"></i>
        <i class="fa fa-minus" id="close_id_1"></i>
       </div>
       <form action="" class="form1 hidden">
        <div class="form_control">
                <input type="checkbox">
                <label for="">Pregnancy Test (hCG) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">HIV Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Hepatitis B Surface Antigen (HBsAg) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Thyroid Stimulating Hormone (TSH) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Troponin Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">IgE Allergy Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Anti-Nuclear Antibody (ANA) Test(#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Drug Screening Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">C-reactive Protein (CRP) Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Rheumatoid Factor (RF) Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">D-dimer Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Insulin Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Cortisol Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Full electrolytes (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Sodium</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Potassium (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Bicarbonate (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Chloride (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Urea</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Electrolytes & urea (e & u) (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Creatinine</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Diabetes screening (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Hba 1c (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Urinalysis</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Fasting blood sugar (fbs)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Random blood sugar</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">2-hr pp blood sugar</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Kidney function test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Liver function test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Glycaemic Studies</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Lipid Profile (Full)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Thyroid Stimulating Hormone (TSH) Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Free Thyroxine (FT4) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Total Thyroxine (T4) Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Free Triiodothyronine (FT3) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Total Triiodothyronine (T3) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Thyroid Peroxidase Antibodies (TPOAb) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Prostate-Specific Antigen (PSA) Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Carcinoembryonic Antigen (CEA) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Alpha-Fetoprotein (AFP) Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">CA 125 Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">CA 19-9 Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">CA 15-3 Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Beta-2 Microglobulin (B2M) Test (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Human Chorionic Gonadotropin (hCG) Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Thyroglobulin Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Blood Typing (ABO and Rh) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Crossmatching</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Direct Antiglobulin Test (DAT) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Indirect Antiglobulin Test (IAT) (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Antibody Screen (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Blood Donor Screening</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Blood Component Separation (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Platelet Function Assay</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Coagulation Factor Assays (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Fecal Coliform Test (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Salmonella Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Staphylococcus aureus Test (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Escherichia coli (E. coli) Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Hepatitis A Test (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Norovirus Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Listeria Test (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Shigella Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Campylobacter Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Gram Stain (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">SAcid-Fast Stain</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Culture and Sensitivity (C&S) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Blood Culture (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Urine Culture (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Fungal Culture</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Parasitological Examination (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Widal Test</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Rapid Strep Test (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Biopsy (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Frozen Section</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Fine Needle Aspiration (FNA) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Immunohistochemistry (IHC) (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Hematoxylin and Eosin (H&E) Stain (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Special Stains</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Immunofluorescence (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">In Situ Hybridization (ISH)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Tumor Grading (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
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
                <input type="checkbox">
                <label for="">Complete Blood Count (CBC) (#3,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Hemoglobin Electrophoresis</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Erythrocyte Sedimentation Rate (ESR) (#1,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Coagulation Studies (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Peripheral Blood Smear (#2,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Reticulocyte Count</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Blood Film Examination (#5,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Bone Marrow Aspiration</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Platelet Count (#6,000)</label>
        </div>
        <div class="form_control">
                <input type="checkbox">
                <label for="">Bleeding Time and Clotting Time (#6,000)</label>
        </div>
       </form>
       </div>
       <div class="lab_info">
            <h3>Vitals</h3> 
             <i class="fa fa-plus" id="lab_open"></i> 
             <i class="fa fa-minus" id="lab_close"></i>
         </div>
</div>
        <script src ="js/patients-profile.js"></script>
</body>
</html>



