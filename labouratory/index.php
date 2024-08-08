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

    <div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url?>/Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <span>Doc. Henculus White</span>
            <button class="btn_submit">Upload Image</button>
           </div>

            <div class="image">
            <img src="<?php echo $website_url?>/Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span><?php echo $fullname ?></span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
    <div class="sidebar__header"></div>
    <div class="sidebar-body">
      <ul>
        <li class="links active" onclick="appoitment_list_section()">
          <span>Available appoitments</span>
        </li>
        <li class="links" onclick="approved_appoitment__section()">
          <span>Accepted appoitments</span>
        </li>
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <span>Logout</span>
          <form method="post" action="../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>

                 <!--- END OF SIDEBAR AND NAVBAR-->

                 <!--- START OF AVAILABLE APPOITMENT AND APPROVED APPOITMENT SECTION-->
                 <div class="appoitment_section">
            <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Appoitment details</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                    <table>
                                            <thead>
                                                <tr>
                                                    <td>S/N</td>
                                                    <td>Patient Name</td>
                                                    <td>PASSPORT</td>
                                                    <td>Patient ID</td>
                                                    <td>Date</td>
                                                    <td>Time</td>
                                                    <td>Accept</td>
                                                    <td>Reject</td>
                                                </tr>
                                            </thead>
                                            <?php 
                                            //$sql = "SELECT * FROM lab_appointment_tab";
                                           
                                            
                                            
                                            $sql = "SELECT lab_appointment_tab.*, patient_tab.patient_passport 
                                            FROM lab_appointment_tab
                                            JOIN patient_tab ON lab_appointment_tab.patient_id = patient_tab.patient_id";
                                            
                                            $result = $conn->query($sql);
                                            
                                            
                                            
                                            
                                            
                                            ?>
                                            <tbody>
            <?php $appointmentCount = 0;
             while ($appointment = $result->fetch_assoc()): 
                 
                  $appointmentCount++;
                  ?>
                <tr>
                    <td><?php echo $appointmentCount ?></td>
                    
                    <td><?php echo htmlspecialchars($appointment['patient_name']); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($website_url . '/uploaded_files/profile_pix/patient/' . $appointment['patient_passport']); ?>" alt="Profile Picture" width="50" height="50">
                    </td>
                    <td><?php echo htmlspecialchars($appointment['patient_id']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['appointment_date']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['time']); ?></td>
                    <td>
                        <button class="accept-btn" type="button" onclick="click_labouratory_examination(<?php echo htmlspecialchars($appointment['patient_id']); ?>)">Accept</button>
                    </td>
                    <td>
                        <button class="reject-btn" type="button" onclick="reject_labouratory_examination(<?php echo htmlspecialchars($appointment['patient_id']); ?>)">Reject</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>


<div class="approved_appoitment hide">  
<div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Approved appoitments</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                <table>
                                        <thead>
                                        <tr>
                                                <td>S/N</td>
                                                <td>PASSPORT</td>
                                                <td>Patient Name</td>
                                                <td>patient id</td>
                                                <td>Status</td>
                                                <td>Delete Patient</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>
                                                <img src="" alt="">
                                        </td>
                                        <td>Kingsley effiong</td>
                                        <td>PAT0001</td>
                                        <td>Pending transaction</td>
                                <td><i class="bi bi-x-square"></i></td>
                                        </tr>
                                        </tbody>
                                        <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>
                                                <img src="" alt="">
                                        </td>
                                        <td>Kingsley effiong</td>
                                        <td>PAT0001</td>
                                        <td>
                                                <button class="accept-btn" onclick="uploadResult()">Upload test result</button>
                                        </td>
                                <td>
                                        <i class="bi bi-x-square"></i>
                                </td>
                                        </tr>
                                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
   <!--- END OF AVAILABLE APPOITMENT AND APPROVED APPOITMENT SECTION-->

           <!--- START OF LABOURATORY INPUT-->
        <div class="lab_input hide">
<div class="lab_container">
                 <!--- INPUT 1-->
<div class="immunoassay" onClick="form1()">
<h3>Immunoassay Single Tests</h3>
<i class="bi bi-plus-lg" id="open_id_1"></i>
<i class="bi bi-dash-lg" id="close_id_1"></i>
</div>
<form action="" class="form1 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Pregnancy Test (hCG)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">HIV Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Hepatitis B Surface Antigen (HBsAg)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Thyroid Stimulating Hormone (TSH) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Troponin Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">IgE Allergy Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Anti-Nuclear Antibody (ANA) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Drug Screening Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">C-reactive Protein (CRP) Test </label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Rheumatoid Factor (RF) Test</label>
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

                 <!--- INPUT 2-->
<div class="clinical_chemistry" onClick="form2()">
<h3>Clinical Chemistry</h3>
<i class="bi bi-plus-lg" id="open_id_2"></i>
<i class="bi bi-dash-lg" id="close_id_2"></i>
</div>
<form action="" class="form2 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Full electrolytes</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Sodium</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Potassium</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Bicarbonate</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Chloride</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Urea</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Electrolytes & urea (e & u)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Creatinine</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Diabetes screening</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Hba 1c</label>
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
        <label for="">Kidney function test</label>
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
        <label for="">Renal Function Test</label>
</div>
</form>

                <!--- INPUT 3-->
<div class="thyroid" onClick="form3()">
<h3>Thyroid function test</h3>
<i class="bi bi-plus-lg" id="open_id_3"></i>
<i class="bi bi-dash-lg" id="close_id_3"></i>
</div>
<form action="" class="form3 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Thyroid Stimulating Hormone (TSH) Test </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Free Thyroxine (FT4) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Total Thyroxine (T4) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Free Triiodothyronine (FT3) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Total Triiodothyronine (T3) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Thyroid Peroxidase Antibodies (TPOAb) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Thyroglobulin Antibodies (TgAb) Test</label>
</div>
</form>
                         <!--- INPUT 4-->
<div class="tumor" onClick="form4()">
<h3>Tumor markers</h3>
<i class="bi bi-plus-lg" id="open_id_4"></i>
<i class="bi bi-dash-lg" id="close_id_4"></i>
</div>
<form action="" class="form4 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Prostate-Specific Antigen (PSA) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Carcinoembryonic Antigen (CEA) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Alpha-Fetoprotein (AFP) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">CA 125 Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">CA 19-9 Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">CA 15-3 Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Beta-2 Microglobulin (B2M) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Human Chorionic Gonadotropin (hCG) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Thyroglobulin Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Neuron-Specific Enolase (NSE) Test</label>
</div>
</form>
                        <!--- INPUT 5-->
<div class="blood" onClick="form5()">
<h3>Blood banking</h3>
<i class="bi bi-plus-lg" id="open_id_5"></i>
<i class="bi bi-dash-lg" id="close_id_5"></i>
</div>
<form action="" class="form5 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Blood Typing (ABO and Rh)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Crossmatching</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Direct Antiglobulin Test (DAT)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Indirect Antiglobulin Test (IAT) </label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Antibody Screen</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Blood Donor Screening</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Blood Component Separation </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Platelet Function Assay</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Coagulation Factor Assays /label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Hemoglobin Electrophoresis</label>
</div>
</form>
                        <!--- INPUT 6-->
<div class="food" onClick="form6()">
<h3>Food handler test</h3>
<i class="bi bi-plus-lg" id="open_id_6"></i>
<i class="bi bi-dash-lg" id="close_id_6"></i>
</div>
<form action="" class="form6 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Fecal Coliform Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Salmonella Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Staphylococcus aureus Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Escherichia coli (E. coli) Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Hepatitis A Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Norovirus Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Listeria Test </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Shigella Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Campylobacter Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">otal Plate Count (TPC) Test</label>
</div>
</form>

                         <!--- INPUT 7-->
<div class="microbiology" onClick="form7()">
<h3>Microbiology and parasitology</h3>
<i class="bi bi-plus-lg" id="open_id_7"></i>
<i class="bi bi-dash-lg" id="close_id_7"></i>
</div>
<form action="" class="form7 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Gram Stain</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">SAcid-Fast Stain</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Culture and Sensitivity (C&S)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Blood Culture </label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Urine Culture </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Fungal Culture</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Parasitological Examination</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Widal Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Rapid Strep Test</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Giemsa Stain </label>
</div>
</form>

                        <!--- INPUT 8-->
<div class="histopathology" onClick="form8()">
<h3>Histopathology</h3>
<i class="bi bi-plus-lg" id="open_id_8"></i>
<i class="bi bi-dash-lg" id="close_id_8"></i>
</div>
<form action="" class="form8 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Biopsy</label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Frozen Section</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Fine Needle Aspiration (FNA)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Immunohistochemistry (IHC) </label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Hematoxylin and Eosin (H&E) Stain </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Special Stains</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Immunofluorescence /label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">In Situ Hybridization (ISH)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Tumor Grading </label>
</div>
<div class="form_control">
        <input type="checkbox" value="6000" class="checkbox">
        <label for="">Tumor Markers in Histopathology</label>
</div>
</form>
                        <!--- INPUT 10-->
<div class="haematology" onClick="form9()">
<h3>Haematology</h3>
<i class="bi bi-plus-lg" id="open_id_9"></i>
<i class="bi bi-dash-lg" id="close_id_9"></i>
</div>
<form action="" class="form9 hidden">
<div class="form_control">
        <input type="checkbox" value="3000" class="checkbox">
        <label for="">Complete Blood Count (CBC) </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Hemoglobin Electrophoresis</label>
</div>
<div class="form_control">
        <input type="checkbox" value="1000" class="checkbox">
        <label for="">Erythrocyte Sedimentation Rate (ESR) </label>
</div>
<div class="form_control">
        <input type="checkbox" value="2000" class="checkbox">
        <label for="">Coagulation Studies </label>
</div>
<div class="form_control">
        <input type="checkbox" value ="2000" class="checkbox">
        <label for="">Peripheral Blood Smear </label>
</div>
<div class="form_control">
        <input type="checkbox" value="0" class="checkbox">
        <label for="">Reticulocyte Count</label>
</div>
<div class="form_control">
        <input type="checkbox" value="5000" class="checkbox">
        <label for="">Blood Film Examination </label>
</div>
<div class="form_control">
        <input type="checkbox" value="8000" class="checkbox">
        <label for="">Bone Marrow Aspiration </label>
</div>
<div class="form_control">
        <input type="checkbox" id="platelet" value="6000" class="checkbox">
        <label for="">Platelet Count (#6,000)</label>
</div>
<div class="form_control">
        <input type="checkbox" value="12000" class="checkbox">
        <label for="">Bleeding Time and Clotting Time</label>
</div>
</form>
<button id="btn" class="save" onclick="showtestBooking()">Book</button>
</div>
<!--- END OF LABOURATORY INPUT-->

<!--- END OF TEST BOOKING SECTION-->







<div class="modal hidden" id="test--booking">
<button class="btn--close-modal" onclick="closeModal('test--booking'); uncheckLabTest()">&times;</button>

        <h2 class="modal__header">
            Book 
            <span class="highlight">labouartory test</span>
        </h2>
        <table id="dataTable">
        <thead>
                <td>Test </td>
                <td>Amount</td>
        </thead>
        <tbody>
        </tbody>
</table>
<div class="totalprice">
        <p>Total</p>
        <p id="totalLabTest"></p>
        <p style="display:none" id="patient_id"><?php echo" $patient_id"?></p>
</div>
<button onclick="bookNow()">Book Now</button>
<button onclick="collapseTestBooking()">Add more test</button>
    </div>


<!--- START OF TEST RESULT UPLOAD-->
<div class="result hide">
<i class="bi bi-x-square" onclick="closeResult()"></i>
<h3>LABORATORY RESULT</h3>
<div class="profile_div">
<div class="profile_name">
<h3>Kingsley Effiong</h3>
<h3>PAT0002</h3>
</div>
<div class="img_div">
<img src ="../Images/24cc97ebee8475a31c597fdb32b32d3a.jpg"></img>
</img>
</div>
</div>
<div class="result_for_diagnosis_and_complaint_upload">
        <form action="">
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
        </form>
</div>
<button>Submit</button>

</div>   
<div class="overlay hidden"></div>          
<script src="js/script.js"></script>
<script src="js/jquery-v3.6.1.min.js"></script>
</body>
</html>
