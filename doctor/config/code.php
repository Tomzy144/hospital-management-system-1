<?php include '../../backend/config/connection.php';?>






<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;

    
  case 'patients_profile':
    $patient_id = $_POST['patient_id'];
   


    // Confirm user existence
    $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");

    // Assuming $query is the result you want to send
    $result = mysqli_fetch_assoc($query);

    // Sending JSON response
    echo json_encode(array("check" => $result));

    // Do not redirect here

  break;

  case 'doctor_input':
    $patient_id = $_POST['patient_id'];
    $physical_examination = $_POST['physical_examination'];
    $pigmentation = $_POST['pigmentation'];
    $moisture_temperature = $_POST['moisture_temperature'];
    $lesions_rashes = $_POST['lesions_rashes'];
    $bruising = $_POST['bruising'];
    $scars = $_POST['scars'];
    $social_habits = $_POST['social_habits'];
    $family_medical_history = $_POST['family_medical_history'];
    $occupation_environmental_exposures = $_POST['occupation_environmental_exposures'];
    $living_conditions_support_system = $_POST['living_conditions_support_system'];
    
    // Drugs Prescriptions
    $treatment_prescription = $_POST['treatment_prescription'];
    $drugs = $_POST['drugs'];
    $mode = $_POST['mode'];
    $dos = $_POST['dos'];
    $unit = $_POST['unit'];
    $frequency = $_POST['frequency'];
    $duration = $_POST['duration'];
    
    // Complaints section
    $major_complaints = $_POST['major_complaints'];
    $history_of_presenting_complaints = $_POST['history_of_presenting_complaints'];
    $family_social_history = $_POST['family_social_history'];
    $past_surgical_medical_history = $_POST['past_surgical_medical_history'];
    
    // System review section
    $selectedH1 = $_POST['h1'];
    $selectedF1 = $_POST['f1'];
    $selectedO1 = $_POST['o1'];
    $selectedCA1 = $_POST['ca1'];
    $selectedCW1 = $_POST['cw1'];
    $selectedFV1 = $_POST['fv1'];
    
    $selectedCM = $_POST['cm'];
    $selectedHN = $_POST['h/n'];
    $selectedCT = $_POST['c/t'];
    $selectedIR = $_POST['i/r'];
    $selectedSores = $_POST['sores'];
    
    $selectedEHS = $_POST['e_hs'];
    $selectedET = $_POST['et'];
    $selectedSaltCraving = $_POST['salt_craving'];
    $selectedLSD = $_POST['lsd'];
    $selectedHCI = $_POST['hci'];
    $selectedTE = $_POST['te'];
    $selectedAG = $_POST['ag'];
    $selectedIA = $_POST['ia'];
    $selectedIUP = $_POST['iup'];
    $selectedTR = $_POST['tr'];
    $selectedES = $_POST['es'];
    $selectedDiabetes = $_POST['diabetes'];
    
    $selectedPT = $_POST['pt'];
    $selectedOCCPT = $_POST['occpt'];
    $selectedOC = $_POST['oc'];
    $selectedPM = $_POST['pm'];
    $selectedJA = $_POST['ja'];
    $selectedMR = $_POST['mr'];
    $selectedSI = $_POST['si'];
    $selectedAntiIN = $_POST['anti-in'];
    $selectedAssistive = $_POST['assistive'];
    
    $selectedSHNI = $_POST['shni'];
    $selectedRENTE = $_POST['rente'];
    $selectedHNC = $_POST['hnc'];
    $selectedDOH = $_POST['doh'];
    $selectedSSA = $_POST['ssa'];
    $selectedBNM = $_POST['bnm'];
    $selectedTFT = $_POST['tft'];
    $selectedSGD = $_POST['sgd'];
    $selectedTMJ = $_POST['tmj'];
    $selectedISB = $_POST['is_b'];
    

    // Insert data into the database
    $sql = "INSERT INTO doctor_input_tab (
        patient_id,
        physical_examination,
        mental_status,
        cranial_nerves,
        position_sense,
        vibration_sense,
        reflex_technique,
        coordination_of_upper_extremities,
        coordination_of_lower_extremities,
        gait,
        glasgow,
        spontaneous,
        to_speech,
        to_pain,
        no_response,
        oriented,
        confused,
        inappropraite,
        incmprehensible,
        response,
        obey,
        localized,
        flexion,
        abnornal,
        physical_blood_pressure,
        heart_rate,
        respiratory_rate,
        temperature,
        oxygen_saturation,
        level,
        nutritional,
        signs,
        body_habitus,
        pigmentation,
        moisture_temperature,
        lesions,
        bruising,
        scars,
        scalp_hair_nails,
        eyes_ears_nose_throat,
        lesions_rashes,
        lymph_nodes,
        neck_rang_of_Motion,
        presence_of_Bruits,
        inspection_palpation_of_precordium,
        auscultation_of_heart_sounds_murmurs,
        peripheral_pulses,
        edema_assessment,
        capillary_refill_time,
        respiratory_effort_inspection,
        palpation_percussion_of_chest,
        auscultation_of_breath,
        cough_sputum_assessment,
        presence_of_tenderness_masses,
        bowel_sounds_assessment_sounds,
        genitalia_inspection,
        urinary_function_assessment,
        pelvic_examination_sounds,
        prostate_examination,
        genitalia_inspection_of_joint,
        range_of_motion_assessment,
        gait_balance_evaluation,
        mental_status_assessment,
        cranial_nerve_examination,
        reflexes,
        coordination_balance_assessment,
        cardiovascular_system,
        respiratory_system,
        gastrointestinal_system,
        genitourinary_system,
        neurological_system,
        social,
        family_medical_history,
        occupation_environmental_exposures,
        living_conditions_support_system,
        treatment_prescribtion,
        drugs,
        strength,
        mode,
        dos,
        unit,
        frequency,
        duration,
        major_complaints,
        history_of_presenting_complaints,
        family_social_history,
        past_sugical_medical_history,
        fatigue,
        headache,
        weakness,
        appetite,
        weight,
        Fever,
        mole,
        nail,
        texture,
        Rashes,
        sores,
        thirst,
        e_hs,
        salt_craving,
        lsd,
        hci,
        ag,
        ia,
        iup,
        tr,
        es,
        diabetes,
        cmhd,
        rtihc,
        ithd,
        sct,
        am,
        ic,
        hg,
        bt,
        etin,
        gcs,
        imin,
        pt,
        occpt,
        oc,
        pm,
        ja,
        mr,
        si,
        anti_in,
        assistive,
        shni,
        rente,
        hnc,
        doh,
        ssa,
        bnm,
        tft,
        sgd,
        tmj,
        is_b,
        hl,
        te,
        ep,
        nc,
        sd,
        ar,
        op,
        tp,
        dysphagia,
        vc,
        halitosis,
        gr,
        ot,
        Tonsillitis,
        Hoarseness,
        oral_cancer,
        rsc,
        bd,
        simbc,
        hr,
        bifu,
        rs,
        bp,
        pi,
        pft,
        cxi,
        ventilator,
        bronchoscopy,
        pneumonia,
        aa,
        ri,
        copd,
        st,
        sc,
        cardiovascular_condition,
        cl,
        antiplatelet,
        bb,
        acei,
        anticoagulant,
        cardiac,
        hf_d,
        gastrointestinal_symptom,
        endoscopy,
        colonoscopy,
        gd
    ) VALUES (
        '$patient_id',
        '$physical_examination',
        '$mental_status',
        '$cranial_nerves',
        '$position_sense',
        '$vibration_sense',
        '$reflex_technique',
        '$coordination_of_upper_extremities',
        '$coordination_of_lower_extremities',
        '$gait',
        '$glasgow',
        '$spontaneous',
        '$to_speech',
        '$to_pain',
        '$no_response',
        '$oriented',
        '$confused',
        '$inappropraite',
        '$incmprehensible',
        '$response',
        '$obey',
        '$localized',
        '$flexion',
        '$abnornal',
        '$physical_blood_pressure',
        '$heart_rate',
        '$respiratory_rate',
        '$temperature',
        '$oxygen_saturation',
        '$level',
        '$nutritional',
        '$signs',
        '$body_habitus',
        '$pigmentation',
        '$moisture_temperature',
        '$lesions',
        '$bruising',
        '$scars',
        '$scalp_hair_nails',
        '$eyes_ears_nose_throat',
        '$lesions_rashes',
        '$lymph_nodes',
        '$neck_rang_of_Motion',
        '$presence_of_Bruits',
        '$inspection_palpation_of_precordium',
        '$auscultation_of_heart_sounds_murmurs',
        '$peripheral_pulses',
        '$edema_assessment',
        '$capillary_refill_time',
        '$respiratory_effort_inspection',
        '$palpation_percussion_of_chest',
        '$auscultation_of_breath',
        '$cough_sputum_assessment',
        '$presence_of_tenderness_masses',
        '$bowel_sounds_assessment_sounds',
        '$genitalia_inspection',
        '$urinary_function_assessment',
        '$pelvic_examination_sounds',
        '$prostate_examination',
        '$genitalia_inspection_of_joint',
        '$range_of_motion_assessment',
        '$gait_balance_evaluation',
        '$mental_status_assessment',
        '$cranial_nerve_examination',
        '$reflexes',
        '$coordination_balance_assessment',
        '$cardiovascular_system',
        '$respiratory_system',
        '$gastrointestinal_system',
        '$genitourinary_system',
        '$neurological_system',
        '$social',
        '$family_medical_history',
        '$occupation_environmental_exposures',
        '$living_conditions_support_system',
        '$treatment_prescribtion',
        '$drugs',
        '$strength',
        '$mode',
        '$dos',
        '$unit',
        '$frequency',
        '$duration',
        '$major_complaints',
        '$history_of_presenting_complaints',
        '$family_social_history',
        '$past_sugical_medical_history',
        '$fatigue',
        '$headache',
        '$weakness',
        '$appetite',
        '$weight',
        '$Fever',
        '$mole',
        '$nail',
        '$texture',
        '$Rashes',
        '$sores',
        '$thirst',
        '$e_hs',
        '$salt_craving',
        '$lsd',
        '$hci',
        '$ag',
        '$ia',
        '$iup',
        '$tr',
        '$es',
        '$diabetes',
        '$cmhd',
        '$rtihc',
        '$ithd',
        '$sct',
        '$am',
        '$ic',
        '$hg',
        '$bt',
        '$etin',
        '$gcs',
        '$imin',
        '$pt',
        '$occpt',
        '$oc',
        '$pm',
        '$ja',
        '$mr',
        '$si',
        '$anti_in',
        '$assistive',
        '$shni',
        '$rente',
        '$hnc',
        '$doh',
        '$ssa',
        '$bnm',
        '$tft',
        '$sgd',
        '$tmj',
        '$is_b',
        '$hl',
        '$te',
        '$ep',
        '$nc',
        '$sd',
        '$ar',
        '$op',
        '$tp',
        '$dysphagia',
        '$vc',
        '$halitosis',
        '$gr',
        '$ot',
        '$Tonsillitis',
        '$Hoarseness',
        '$oral_cancer',
        '$rsc',
        '$bd',
        '$simbc',
        '$hr',
        '$bifu',
        '$rs',
        '$bp',
        '$pi',
        '$pft',
        '$cxi',
        '$ventilator',
        '$bronchoscopy',
        '$pneumonia',
        '$aa',
        '$ri',
        '$copd',
        '$st',
        '$sc',
        '$cardiovascular_condition',
        '$cl',
        '$antiplatelet',
        '$bb',
        '$acei',
        '$anticoagulant',
        '$cardiac',
        '$hf_d',
        '$gastrointestinal_symptom',
        '$endoscopy',
        '$colonoscopy',
        '$gd'
    )";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("check" => "success"));
    } else {
        echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
    }
    break;

   

    case 'transfer_to_lab':

      $patient_id = $_POST['patient_id'];
      $patient_name = $_POST['patient_name'];
      $message = $_POST['message'];
  
      $sequence = $callclass->_get_sequence_count($conn, 'LABAPP');
      $array = json_decode($sequence, true);
      $no = $array[0]['no'];
      $lab_scientist_appointment_id = 'LABAPP' . $no;
  
      $query = "INSERT INTO `lab_appointment_tab`
                (`patient_id`, `lab_scientist_appointment_id`, `message`, `patient_name`, `time`) 
                VALUES ('$patient_id', '$lab_scientist_appointment_id', '$message', '$patient_name', now())";
  
      if (mysqli_query($conn, $query)) {
          echo json_encode(array("check" => "success"));
      } else {
          echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
      }
  
    break;

    case 'transfer_to_rad':

        $patient_id = $_POST['patient_id'];
        $patient_name = $_POST['patient_name'];
        $message = $_POST['message'];
    
        $sequence = $callclass->_get_sequence_count($conn, 'RADAPP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $radiology_appointment_id = 'RADAPP' . $no;
    
        $query = "INSERT INTO `radiology_appointment_tab`
                  (`patient_id`, `radiology_appointment_id`, `message`, `patient_name`, `time`) 
                  VALUES ('$patient_id', '$radiology_appointment_id', '$message', '$patient_name', now())";
    
        if (mysqli_query($conn, $query)) {
            echo json_encode(array("check" => "success"));
        } else {
            echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
        }
    
      break;
  



    


    case 'getDoctorsRoles':
      // Execute the query to fetch all doctor roles
      $query = mysqli_query($conn, "SELECT * FROM doctor_role_tab");

      // Check if the query executed successfully
      if ($query) {
          $doctorRoles = array();

          // Fetch the data from the result set
          while ($row = mysqli_fetch_assoc($query)) {
              $doctorRoles[] = $row;
          }

          // Return the data as JSON
          echo json_encode(array("success" => true, "doctorRoles" => $doctorRoles));
      } else {
          // Return an error message if the query failed
          echo json_encode(array("success" => false, "message" => "Error executing the query"));
      }
      break;


  case 'getDoctors':
      $role = $_POST['roles'];

      // Sanitize the role input to prevent SQL injection
      $role = mysqli_real_escape_string($conn, $role);
  
      // Execute the query to fetch doctors based on the role
      $query = mysqli_query($conn, "SELECT doctor_tab.fullname, doctor_tab.doctor_id FROM doctor_tab
                              JOIN doctor_role_tab ON doctor_role_tab.doctor_role_id = doctor_tab.doctor_role_id 
                              WHERE doctor_tab.doctor_role_id ='$role'");
  
      // Check if the query executed successfully
      if ($query) {
          $doctor = array();
  
          // Fetch the data from the result set
          while ($row = mysqli_fetch_assoc($query)) {
              $doctor[] = $row;
          }
  
          // Return the data as JSON
          echo json_encode(array("success" => true, "doctor" => $doctor));
      } else {
          // Return an error message if the query failed
          echo json_encode(array("success" => false, "message" => "Error executing the query"));
      }
      break;

      case 'transfer_patient':
        $patient_id = $_POST['patient_id'];
        $patient_name = $_POST['patient_name'];
        $remark = $_POST['remark']; // Assuming 'remark' is the correct variable name
        $doctor_id = $_POST['doctor_id'];
        $status_id = "1";
    
        // Get the appointment ID sequence
        $sequence = $callclass->_get_sequence_count($conn, 'APP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $appointment_id = 'APP' . $no;
    
        // Prepare the SQL query with the correct number of placeholders
        $stmt = $conn->prepare("
        INSERT INTO doctor_appointment_tab
        (doctor_appointment_id, patient_id, patient_name, reason, time, doctor_appointment_status_id, doctor_id, doctor_appointment_date)
        VALUES (?, ?, ?, ?, NOW(), ?, ?, CURDATE())
    ");
    
    
        if ($stmt) {
            // Bind the parameters
            $stmt->bind_param(
                "ssssss",
                $appointment_id,
                $patient_id,
                $patient_name,
                $remark,
                $status_id,
                $doctor_id
            );
    
            // Execute the statement
            if ($stmt->execute()) {
                echo json_encode(array("success" => true, "message" => "Patient transferred successfully"));
            } else {
                echo json_encode(array("success" => false, "message" => "Error executing query: " . $stmt->error));
            }
    
            // Close the statement
            $stmt->close();
        } else {
            echo json_encode(array("success" => false, "message" => "Error preparing query: " . $conn->error));
        }
        break;
    
        case 'confirm_discharge':
            $patient_id = $_POST['patient_id'];
            $date_of_discharge = $_POST['discharged_date']; 
            $doctor_id = $_POST['doctor_id'];
            $time_of_discharge = $_POST['discharged_time']; 
            $discharge_message = $_POST['discharge_message']; 
        
            // Get the appointment ID sequence
            $sequence = $callclass->_get_sequence_count($conn, 'DDIS');
            $array = json_decode($sequence, true);
            $no = $array[0]['no'];
            $doctor_discharge_id = 'DDIS' . $no;
        
            // Prepare the first SQL query to insert into doctor_discharge_tab
            $stmt1 = $conn->prepare("
                INSERT INTO doctor_discharge_tab
                (doctor_discharge_id, patient_id, date_of_discharge, time_of_discharge, doctor_id, discharge_message )
                VALUES (?, ?, ?, ?, ?,?)
            ");
        
            if ($stmt1) {
                // Bind the parameters for the first query
                $stmt1->bind_param(
                    "ssssss",
                    $doctor_discharge_id,
                    $patient_id,
                    $date_of_discharge,
                    $time_of_discharge,
                    $doctor_id,
                    $discharge_message
                );
        
                if ($stmt1->execute()) {
                    // Prepare the second SQL query to update patient_tab
                    $stmt2 = $conn->prepare("
                        UPDATE patient_tab
                        SET category_id = 1
                        WHERE patient_id = ?
                    ");
        
                    if ($stmt2) {
                        // Bind the parameter for the second query
                        $stmt2->bind_param(
                            "s",
                            $patient_id
                        );
        
                        if ($stmt2->execute()) {
                            echo json_encode(array("success" => true, "message" => "Patient discharged successfully and category updated"));
                        } else {
                            echo json_encode(array("success" => false, "message" => "Error executing second query: " . $stmt2->error));
                        }
        
                        $stmt2->close();
                    } else {
                        echo json_encode(array("success" => false, "message" => "Error preparing second query: " . $conn->error));
                    }
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing first query: " . $stmt1->error));
                }
        
                $stmt1->close();
            } else {
                echo json_encode(array("success" => false, "message" => "Error preparing first query: " . $conn->error));
            }
            break;
        
        

/////////////////////////////
case 'confirm_death':
    $patient_id = $_POST['patient_id'];
    $date_of_death = $_POST['date_of_death'];
    $doctor_id = $_POST['doctor_id'];
    $time_of_death = $_POST['time_of_death'];
    
    // Get the appointment ID sequence
    $sequence = $callclass->_get_sequence_count($conn, 'MORGAPP');
    $array = json_decode($sequence, true);
    $no = $array[0]['no'];
    $morgue_appointment_id = 'MORGAPP' . $no;
    
    // Prepare the SQL query to insert into morgue_appointment_tab
    $stmt1 = $conn->prepare("
        INSERT INTO morgue_appointment_tab
        (doctor_id, patient_id, date_of_death, time_of_death, morgue_appointment_id)
        VALUES (?, ?, ?, ?, ?)
    ");
    
    if ($stmt1) {
        // Bind the parameters for the first query
        $stmt1->bind_param(
            "sssss",
            $doctor_id,
            $patient_id,
            $date_of_death,
            $time_of_death,
            $morgue_appointment_id
        );
        
        if ($stmt1->execute()) {
            // Prepare the second SQL query to update patient_tab
            $stmt2 = $conn->prepare("
                UPDATE patient_tab
                SET status_id = 2
                WHERE patient_id = ?
            ");
            
            if ($stmt2) {
                // Bind the parameter for the second query
                $stmt2->bind_param(
                    "s",
                    $patient_id
                );
                
                if ($stmt2->execute()) {
                    echo json_encode(array("success" => true, "message" => "Patient death confirmed and category updated"));
                } else {
                    echo json_encode(array("success" => false, "message" => "Error executing second query: " . $stmt2->error));
                }
                
                $stmt2->close();
            } else {
                echo json_encode(array("success" => false, "message" => "Error preparing second query: " . $conn->error));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Error executing first query: " . $stmt1->error));
        }
        
        $stmt1->close();
    } else {
        echo json_encode(array("success" => false, "message" => "Error preparing first query: " . $conn->error));
    }
    break;


    case 'surgical_procedure':

        $patient_id = $_POST['patient_id'];
        $past_surgery = $_POST['past_surgery'];
        $procedure = $_POST['procedure'];
        $phonenumber = $_POST['phonenumber'];
    
        $sequence = $callclass->_get_sequence_count($conn, 'SURGAPP');
        $array = json_decode($sequence, true);
        $no = $array[0]['no'];
        $surgial_appointment_id = 'SURGAPP' . $no;
    
        $query = "INSERT INTO `surgical_suite_appointment_tab`
                  (`patient_id`, `surgial_appointment_id`, `past_surgery`, `procedure`, `phonenumber`, `time`) 
                  VALUES ('$patient_id', '$surgial_appointment_id', '$past_surgery', '$procedure', '$phonenumber', now())";
    
        if (mysqli_query($conn, $query)) {
            echo json_encode(array("check" => "success"));
        } else {
            echo json_encode(array("check" => "failure", "error" => mysqli_error($conn)));
        }
    
      break;


        }

    ?>
     
