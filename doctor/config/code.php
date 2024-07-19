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
    $physical_examination = $_POST['physical_examination'];
    $mental_status = $_POST['mental_status'];
    $cranial_nerves = $_POST['cranial_nerves'];
    $position_sense = $_POST['position_sense'];
    $vibration_sense = $_POST['vibration_sense'];
    $reflex_technique = $_POST['reflex_technique'];
    $coordination_of_upper_extremities = $_POST['coordination_of_upper_extremities'];
    $coordination_of_lower_extremities = $_POST['coordination_of_lower_extremities'];
    $gait = $_POST['gait'];
    $glasgow = $_POST['glasgow'];
    $spontaneous = $_POST['spontaneous'];
    $to_speech = $_POST['to_speech'];
    $to_pain = $_POST['to_pain'];
    $no_response = $_POST['no_response'];
    $oriented = $_POST['oriented'];
    $confused = $_POST['confused'];    
    $inappropraite = $_POST['inappropraite'];
    $incmprehensible = $_POST['incmprehensible'];
    $response = $_POST['response'];
    $obey = $_POST['obey'];
    $localized = $_POST['localized'];
    $flexion = $_POST['flexion'];
    $abnornal = $_POST['abnornal'];
    $response = $_POST['response'];
    $physical_blood_pressure = $_POST['physical_blood_pressure'];
    $heart_rate = $_POST['heart_rate'];
    $respiratory_rate = $_POST['respiratory_rate'];    
    $temperature = $_POST['temperature'];
    $oxygen_saturation = $_POST['oxygen_saturation'];    
    $level = $_POST['level'];
    $nutritional = $_POST['nutritional'];
    $signs = $_POST['signs'];
    $body_habitus = $_POST['body_habitus'];
    $pigmentation = $_POST['pigmentation'];
    $moisture_temperature = $_POST['moisture_temperature'];
    $lesions = $_POST['lesions'];
    $bruising = $_POST['bruising'];    
    $scars = $_POST['scars'];
    $scalp_hair_nails = $_POST['scalp_hair_nails'];
    $eyes_ears_nose_throat = $_POST['eyes_ears_nose_throat'];
    $lesions_rashes = $_POST['lesions_rashes'];
    $lymph_nodes = $_POST['lymph_nodes'];
    $neck_rang_of_Motion = $_POST['neck_rang_of_Motion'];
    $presence_of_Bruits = $_POST['presence_of_Bruits'];
    $inspection_palpation_of_precordium = $_POST['inspection_palpation_of_precordium'];
    $auscultation_of_heart_sounds_murmurs = $_POST['auscultation_of_heart_sounds_murmurs'];    
    $peripheral_pulses = $_POST['peripheral_pulses'];
    $edema_assessment = $_POST['edema_assessment'];    
    $capillary_refill_time = $_POST['capillary_refill_time'];
    $respiratory_effort_inspection = $_POST['respiratory_effort_inspection'];
    $palpation_percussion_of_chest = $_POST['palpation_percussion_of_chest'];
    $auscultation_of_breath = $_POST['auscultation_of_breath'];
    $cough_sputum_assessment = $_POST['cough_sputum_assessment'];
    $presence_of_tenderness_masses = $_POST['presence_of_tenderness_masses']; 
    $bowel_sounds_assessment_sounds = $_POST['bowel_sounds_assessment_sounds'];
    $genitalia_inspection = $_POST['genitalia_inspection'];
    $urinary_function_assessment = $_POST['urinary_function_assessment'];
    $pelvic_examination_sounds = $_POST['pelvic_examination_sounds'];
    $prostate_examination = $_POST['prostate_examination'];
    $genitalia_inspection_of_joint = $_POST['genitalia_inspection_of_joint'];
    $range_of_motion_assessment = $_POST['range_of_motion_assessment'];
    $gait_balance_evaluation = $_POST['gait_balance_evaluation'];
    $mental_status_assessment = $_POST['mental_status_assessment'];
    $cranial_nerve_examination = $_POST['cranial_nerve_examination'];
    $reflexes = $_POST['reflexes'];
    $coordination_balance_assessment = $_POST['coordination_balance_assessment'];
    $cardiovascular_system = $_POST['cardiovascular_system'];
    $respiratory_system = $_POST['respiratory_system'];
    $gastrointestinal_system = $_POST['gastrointestinal_system'];
    $genitourinary_system = $_POST['genitourinary_system'];
    $neurological_system = $_POST['neurological_system'];
    $social = $_POST['social'];
    $family_medical_history = $_POST['family_medical_history'];
    $occupation_environmental_exposures = $_POST['occupation_environmental_exposures'];
    $living_conditions_support_system = $_POST['living_conditions_support_system']; 
    $treatment_prescribtion = $_POST['treatment_prescribtion'];
    $drugs = $_POST['drugs'];
    $strength = $_POST['strength'];
     $mode = $_POST['mode'];
     $dos = $_POST['dos'];
     $unit = $_POST['unit'];
     $frequency = $_POST['frequency'];
     $duration = $_POST['duration'];
     $major_complaints = $_POST['major_complaints'];
     $history_of_presenting_complaints = $_POST['history_of_presenting_complaints'];
     $family_social_history = $_POST['family_social_history'];
     $past_sugical_medical_history = $_POST['past_sugical_medical_history'];
     $fatigue = $_POST['fatigue'];
     $headache = $_POST['headache'];
     $weakness = $_POST['weakness'];
     $appetite = $_POST['appetite'];
     $weight = $_POST['weight'];
     $Fever = $_POST['Fever'];
     $mole = $_POST['mole'];
     $nail = $_POST['nail'];
     $texture = $_POST['texture'];
     $Rashes = $_POST['Rashes'];
     $sores = $_POST['sores'];
     $thirst = $_POST['thirst'];
     $e_hs = $_POST['e_hs'];
     $salt_craving = $_POST['salt_craving'];
     $lsd = $_POST['lsd'];
     $hci = $_POST['hci'];
     $ag = $_POST['ag'];
     $ia = $_POST['ia'];
     $iup = $_POST['iup'];
     $tr = $_POST['tr'];
     $es = $_POST['es'];
     $diabetes = $_POST['diabetes'];
     $cmhd = $_POST['cmhd'];
     $rtihc = $_POST['rtihc'];
     $ithd = $_POST['ithd'];
     $cmhd = $_POST['cmhd'];
     $sct = $_POST['sct'];
     $am = $_POST['am'];
     $ic = $_POST['ic'];
     $hg = $_POST['hg'];
     $bt = $_POST['bt'];
     $etin = $_POST['etin'];
     $gcs = $_POST['gcs'];
     $imin = $_POST['imin'];
     $pt = $_POST['pt'];
     $occpt = $_POST['occpt'];
     $oc = $_POST['oc'];
     $pm = $_POST['pm'];
     $ja = $_POST['ja'];
     $mr = $_POST['mr'];
     $si = $_POST['si'];
     $anti_in = $_POST['anti_in'];
     $assistive = $_POST['assistive'];
     $shni = $_POST['shni'];
     $rente = $_POST['rente'];
     $hnc = $_POST['hnc'];
     $doh = $_POST['doh'];
     $ssa = $_POST['ssa'];
     $bnm = $_POST['bnm'];
     $tft = $_POST['tft'];
     $sgd = $_POST['sgd'];
     $tmj = $_POST['tmj'];
     $is_b = $_POST['is_b'];
     $hl = $_POST['hl'];
     $te = $_POST['te'];
     $ep = $_POST['ep'];
     $nc = $_POST['nc'];
     $sd = $_POST['sd'];
     $ar = $_POST['ar'];
     $op = $_POST['op'];
     $tp = $_POST['tp'];
     $dysphagia = $_POST['dysphagia'];
     $ml = $_POST['ml'];
     $vc = $_POST['vc'];
     $ml = $_POST['ml'];
     $halitosis = $_POST['halitosis'];
     $gr = $_POST['gr'];
     $ot = $_POST['ot'];
     $ml = $_POST['ml'];
     $Tonsillitis = $_POST['Tonsillitis'];
     $Hoarseness = $_POST['Hoarseness'];
     $oral_cancer = $_POST['oral_cancer'];
     $Tonsillitis = $_POST['Tonsillitis'];
     $rsc = $_POST['rsc'];
     $bd = $_POST['bd'];
     $simbc = $_POST['simbc'];
     $hr = $_POST['hr'];
     $bifu = $_POST['bifu'];
     $rs = $_POST['rs'];
     $bp = $_POST['bp'];
     $nutritional = $_POST['nutritional'];
     $pi = $_POST['pi'];
     $pft = $_POST['pft'];
     $cxi = $_POST['cxi'];
     $ot = $_POST['ot'];
     $ventilator = $_POST['ventilator'];
     $bronchoscopy = $_POST['bronchoscopy'];
     $pneumonia = $_POST['pneumonia'];
     $aa = $_POST['aa'];
     $ri = $_POST['ri'];
     $copd = $_POST['copd'];
     $st = $_POST['st'];
     $sc = $_POST['sc'];
     $cardiovascular_condition = $_POST['cardiovascular_condition'];
     $cl = $_POST['cl'];
     $antiplatelet = $_POST['antiplatelet'];
     $bb = $_POST['bb'];
     $acei = $_POST['acei'];
     $anticoagulant = $_POST['anticoagulant'];
     $cardiac = $_POST['cardiac'];
     $hf_d = $_POST['hf_d'];
     $gastrointestinal_symptom = $_POST['gastrointestinal_symptom'];
     $endoscopy = $_POST['endoscopy'];
     $bd = $_POST['bd'];
     $colonoscopy = $_POST['colonoscopy'];
     $gd = $_POST['gd'];




    // Confirm user existence
    $query = mysqli_query($conn, "SELECT * FROM patient_tab WHERE patient_id='$patient_id'");

    // Assuming $query is the result you want to send
    $result = mysqli_fetch_assoc($query);

    // Sending JSON response
    echo json_encode(array("check" => $result));

    // Do not redirect here

  break;


  case 'doctor_input':
  

    break;


    }

    ?>
