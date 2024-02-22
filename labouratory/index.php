<?php include '../backend/config/connection.php' ?>
<?php include 'config/lab_scientist-session-validation.php';?>



<?php
    $lab_scientist_id = $_POST['lab_scientist_id'];
?>

    

<?php    

    $fetch_lab_scientist_profile = $callclass->_get_lab_scientist_details($conn, $s_lab_scientist_id);
    $lab_scientist_profile_array = json_decode($fetch_lab_scientist_profile, true);
    $fullname = $lab_scientist_profile_array[0]['lab_scientist_name'];
    $email = $lab_scientist_profile_array[0]['email'];
    $phonenumber = $lab_scientist_profile_array[0]['phonenumber'];
    // $role_id= $lab_scientist_profile_array[0]['role_id'];
    $status_id = $lab_scientist_profile_array[0]['status_id'];
    $date = $lab_scientist_profile_array[0]['date'];
    $last_login = $lab_scientist_profile_array[0]['last_login'];
    $passport = $lab_scientist_profile_array[0]["passport"]; 
    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    $status_name = $status_array[0]['status_name'];
?>

<?php 
    $page == "lab_scientist_dash"; // Assign the value "lab_scientist_dash" to the $page variable
?>



<?php 
    


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    ?>



<?php
    $fetch_appointment = $callclass->_get_appointment_details($conn, $s_lab_scientist_id);
    $lab_scientist_appointment_array = json_decode($fetch_appointment, true);

    // Check if decoding was successful
    if ($lab_scientist_appointment_array !== null) {
        // Access values from the decoded array
        $apatient_name = $lab_scientist_appointment_array[0]['patient_name'];
        $email = $lab_scientist_appointment_array[0]['email'];
        $phonenumber = $lab_scientist_appointment_array[0]['phonenumber'];
        $role_id = $lab_scientist_appointment_array[0]['role_id'];
        $status_id = $lab_scientist_appointment_array[0]['status_id'];
        $passport = $lab_scientist_appointment_array[0]['passport'];
        $appointment_date = $lab_scientist_appointment_array[0]['appointment_date'];
        $appointment_reason = $lab_scientist_appointment_array[0]['reason'];

        // Now you can use these variables as needed in your code
    } else {
        // Handle the case where decoding failed
        echo "Failed to decode JSON";
    }

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $thename?>  | LabDoc Dashboard</title>
    <meta name="keywords" content="Admin - <?php echo $thename?>" />
    <meta name="description" content="Administrative Login <?php echo $thename?>"/>
    
</head>

<body>



<script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>

         <!---SIDEBAR AND NAVBAR-->
    <div class="navbar">
        <div class="section1">
        <i class="bi bi-arrow-left-short" id="back-arrow" onclick="backWardArrow()"></i>
        </div>
        <div class="section2">
            <div class="icons">
            <i class="bi bi-person-fill" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="bi bi-bell-fill" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url?>/Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <h4>Immaculater Odu</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="<?php echo $website_url?>/Images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span><?php echo $fullname ?></span>
            <i class="bi bi-caret-down-fill"  id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="<?php echo $website_url?>/Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
            <i class="bi bi-chat-dots-fill icons"></i>
        <i class="bi bi-calendar-date-fill icons" onClick="click_appoitment_button()"></i>
        <i class=" bi-box-arrow-right icons"></i>
            </div>
        </div>
        
        <div class="appoitment_section">
<div class="available_appoitment">
<div class="search_bar_container">
  <span>Appoitment Details</span>
      <input type="text" placeholder="Search here">
  </div>
<div class="table_container">
<table id="appoitment_table">
  <thead>
    <td>S/N</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
    <td>Date</td>
    <td>Time</td>
    <td>Request Type</td>
    <td>Accept</td>
    <td>Reject</td>
  </thead>
  <tbody>
  
  </tbody>
</table>
</div>
</div>

<div class="approved_appoitment">
<div class="search_bar_container">
  <span>Available Appoitment</span>
      <input type="text" placeholder="Search here">
</div>
<div class="table_container">
<table id="approved_table">
  <thead>
    <td>S/N</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
    <td>Status</td>
  </thead>
  <tbody>

  </tbody>
  </table>
</div>
</div>
</div>

        <div class="lab_input hide">
<div class="lab_container">
<div class="immunoassay" onClick="form1()">
<span>Immunoassay Single Tests</span>
<i class="bi bi-plus-lg" id="open_id_1"></i>
<i class="bi bi-dash-lg" id="close_id_1"></i>
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

<div class="clinical_chemistry" onClick="form2()">
<span>Clinical Chemistry</span>
<i class="bi bi-plus-lg" id="open_id_2"></i>
<i class="bi bi-dash-lg" id="close_id_2"></i>
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
<div class="thyroid" onClick="form3()">
<span>Thyroid function test</span>
<i class="bi bi-plus-lg" id="open_id_3"></i>
<i class="bi bi-dash-lg" id="close_id_3"></i>
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
<div class="tumor" onClick="form4()">
<span>Tumor markers</span>
<i class="bi bi-plus-lg" id="open_id_4"></i>
<i class="bi bi-dash-lg" id="close_id_4"></i>
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
<div class="blood" onClick="form5()">
<span>Blood banking</span>
<i class="bi bi-plus-lg" id="open_id_5"></i>
<i class="bi bi-dash-lg" id="close_id_5"></i>
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
<div class="food" onClick="form6()">
<span>Food handler test</span>
<i class="bi bi-plus-lg" id="open_id_6"></i>
<i class="bi bi-dash-lg" id="close_id_6"></i>
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
<div class="microbiology" onClick="form7()">
<span>Microbiology and parasitology</span>
<i class="bi bi-plus-lg" id="open_id_7"></i>
<i class="bi bi-dash-lg" id="close_id_7"></i>
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
<div class="histopathology" onClick="form8()">
<span>Histopathology</span>
<i class="bi bi-plus-lg" id="open_id_8"></i>
<i class="bi bi-dash-lg" id="close_id_8"></i>
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
<div class="haematology" onClick="form9()">
<span>Haematology</span>
<i class="bi bi-plus-lg" id="open_id_9"></i>
<i class="bi bi-dash-lg" id="close_id_9"></i>
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
</div>
<div class="test_booking hide">
<i class="bi bi-x-lg" id="close" onClick="hide_test_booking()"></i>
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
        <p id="total">0.000.00</p>
</div>
<button class="btn">Book Now</button>
</div>
<div class="overlay hide"></div>
<div class="result">
<h1>LABORATORY RESULT</h1>
<div class="profile_div">
<div class="profile_name">
<span>Kingsley Effiong</span>
<span>PAT0002</span>
</div>
<div class="img_div">
<img src ="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg"></img>
</img>
</div>
</div>
<div class="result_for_dia_complaint_upload">
        <div class="flex_control">
        <label>Diagnosis</label>
        <input type= "text"></input>
        </div>
        <div class="flex_control">
        <label>Complaints</label>
        <textarea col="10" row="10"></textarea>
        </div>
        <div class="flex_control">
        <label>Upload Test Result</label>
        <input type= "file"></input>
        </div>
</div>
</div>             
<script src="js/script.js"></script>
</body>
</html>
