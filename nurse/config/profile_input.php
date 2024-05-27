<?php include "../../backend/config/connection.php";



$patient_id = $_POST['patient_Id'];

 

    // Fetch patient details using your _get_patient_details function
    $fetch_patient_profile = $callclass->_get_patient_details($conn, $patient_id);

    // Decode the JSON response
    $patient_profile_array = json_decode($fetch_patient_profile, true);

    if ($patient_profile_array) {
        // Extract patient details from the response
        $sn = $patient_profile_array['sn'];
        $patient_name = $patient_profile_array['fullname'];
        $email = $patient_profile_array['email'];
        $gender = $patient_profile_array['gender'];
        $dateofbirth = $patient_profile_array['dateofbirth'];
        $address = $patient_profile_array['address'];
        $phonenumber = $patient_profile_array['phonenumber'];
        $status_id = $patient_profile_array['status_id'];
        $category_id = $patient_profile_array['category_id'];
        $date = $patient_profile_array['date'];
        $last_login = $patient_profile_array['last_login'];
        $passport = $patient_profile_array['patient_passport'];
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

        // // Prepare the HTML content to be sent back as the response
        // $html_response = '<div class="all_sections_input">';
        // // Construct HTML content with patient details
        // // ...
        // $html_response .= '</div>';

        // // Send the HTML response back to the client
        // echo $html_response;
    } else {
        // Send an error message back if patient details not found
        echo '<p>Error: Patient details not found</p>';
    }


?>



<!-- PERSONAL PROFILE VITAL AFTER CLICKING ON THE ACCEPT BUTTON -->
<div class="patient-personal-detail"></div>
<div class="patient-profile">
  <div class="patient-info">
    <img src="<?php echo $website_url; ?>/uploaded_files/profile_pix/patient/<?php echo $passport; ?>" alt="Profile Picture" />
    <div class="patient_name_id">
      <span><?php echo $patient_name ?></span> -----------
      <span><?php echo $patient_id ?></span>
    </div>
  </div>
  <div class="flex-div">
    <div class="ward-div">
      <label for="ward">Change Ward</label>
      <select name="ward" id="wards">
        <option>SELECT WARD</option>
      </select>
    </div>
    <div class="ward-div bed">
      <label for="bed">Change Bed</label>
      <select name="bed" id="beds">
        <option>SELECT BED</option>
      </select>
    </div>
    <div class="ward-div">
      <label for="stage">Stage</label>
      <select name="stage" id="stage">
        <option value="no_selection"></option>
        <option value="am">Am</option>
        <option value="pm">Pm</option>
      </select>
      <label for="note">WR Note</label>
      <textarea name="note" id="note" cols="30" rows="10"></textarea>
    </div>
  </div>

  <div class="ward-div">
    <form id="vital_input" enctype="multipart/form-data" method="post">
        <input type ="hidden" value="<?php echo $patient_id?>" id="patient_id"/>
      <div class="form_control">
        <label for="temperature">Temperature</label>
        <input type="text" id="temperature" name="temperature">
      </div>
      <div class="form_control">
        <label for="bp">B/P (mm/HG)</label>
        <input type="text" id="bp" name="bp">
      </div>
      <div class="form_control">
        <label for="pulse">Pulse (bp/m)</label>
        <input type="text" id="pulse" name="pulse">
      </div>
      <div class="form_control">
        <label for="respiratory">Respiratory (cm)</label>
        <input type="text" id="respiratory" name="respiratory">
      </div>
      <div class="form_control">
        <label for="weight">Weight (kg)</label>
        <input type="text" id="weight" name="weight">
      </div>
      <div class="form_control">
        <label for="height">Height (cm)</label>
        <input type="text" id="height" name="height">
      </div>
      <div class="form_control">
        <label for="intake">Intake (m/s)</label>
        <input type="text" id="intake" name="intake">
      </div>
      <div class="form_control">
        <label for="output">Output (m/s)</label>
        <input type="text" id="output" name="output">
      </div>
      <div class="form_control">
        <label for="spo2">SPO2 (%)</label>
        <input type="text" id="spo2" name="spo2">
      </div>
      <div class="form_control">
        <label for="bmi">BMI</label>
        <input type="text" id="bmi" name="bmi">
      </div>
      <div class="form_control">
        <label for="body_fat">Body Fat (%)</label>
        <input type="text" id="body_fat" name="body_fat">
      </div>
      <div class="form_control">
        <label for="muscle_mass">Muscle Mass</label>
        <input type="text" id="muscle_mass" name="muscle_mass">
      </div>
      <div class="form_control">
        <label for="musc">MUAC</label>
        <input type="text" id="musc" name="musc">
      </div>
      <div class="form_control">
        <label for="resting_metabolism">Resting Metabolism</label>
        <input type="text" id="resting_metabolism" name="resting_metabolism">
      </div>
      <div class="form_control">
        <label for="body_age">Body Age</label>
        <input type="text" id="body_age" name="body_age">
      </div>
      <div class="form_control">
        <label for="bmi_for_age">BMI for Age</label>
        <input type="text" id="bmi_for_age" name="bmi_for_age">
      </div>
      <div class="form_control">
        <label for="visceral_fat">Visceral Fat</label>
        <input type="text" id="visceral_fat" name="visceral_fat">
      </div>
      <div class="form_control">
        <label for="head_circumference">Head Circumference</label>
        <input type="text" id="head_circumference" name="head_circumference">
      </div>
      <div class="form_control">
        <label for="wfa">WFA</label>
        <input type="text" id="wfa" name="wfa">
      </div>
      <div class="form_control">
        <label for="waist_circumference">Waist Circumference</label>
        <input type="text" id="waist_circumference" name="waist_circumference">
      </div>
      <div class="form_control">
        <label for="hip_circumference">Hip Circumference</label>
        <input type="text" id="hip_circumference" name="hip_circumference">
      </div>
      <div class="form_control">
        <label for="w_hr">W-HR</label>
        <input type="text" id="w_hr" name="w_hr">
      </div>
    </form>
  </div>
  <div class="flex">
  <button class="btn_submit" id="btn_submit" onclick="vital_input()">Save all</button>
  <button class="btn_submit" onclick="selectDoc(),getDoctorsRoles()">Transfer patient</button>
</div>
</div>

