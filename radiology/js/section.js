const allSection = function(section, show_container){
    let container = document.getElementById(section + '-container');
    container.innerHTML = show_container;
}


const Navbar = `
<!---SIDEBAR AND NAVBAR-->
<div class="navbar">
  <div class="section1">
  <!-- <i class="fa fa-long-arrow-left " id="back-arrow" onclick="backWardArrow()"></i> -->
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
      <img id="image_profile_account" src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
      <h4>Peace Emmanuel Christopher</h4>
      <button class="btn_submit">Upload Image</button>
      <span>change password</span>
  </div>
      <div class="image">
      <img src="../Images/medium-shot-health-worker-with-equipment.jpg" alt="">
      <div class="active_on"></div>
      </div>
  </img>  
      <span>Peace Emmanuel Christopher</span>
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
`
allSection('navbar', Navbar);
const landingPageContainer  = `
<div class="contents">
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
      <button onClick="show_radiology_input()">Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button>Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button>Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button>Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button>Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button>Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
</table>
</div>
<div class="pending_transaction_list_pagination">
        <div class="flexs">
            <p id="prevPen">Prev List</p>
            <p id="nextPen">Next List</p>
        </div>
</div>
</div>
</div>
</div>
`

allSection('landing_page', landingPageContainer);

const  radiology_test_input_container = `
<div class="radiology_input hide">
<div class="radiology_container">
      <div class="radiography" onClick="show_radiography_form()">
        <span>X-ray (Radiography)</span>
        <i class="fa fa-plus" id="radiography_plus_icon"></i>
        <i class="fa fa-minus"  id="radiography_minus_icon"></i>
      </div>
      <form class="radiography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Chest X-ray (CXR)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Abdominal X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Skeletal X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Dental X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Barium Swallow</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Fluoroscopy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Voiding Cystourethrogram (VCUG)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Intravenous Pyelogram (IVP)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Mammography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Bone X-ray (Bone Radiography)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Sinus X-ray (Paranasal Sinus Radiography)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">X-ray Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Hysterosalpingography (HSG)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Cervical Spine X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Thoracic Spine X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Lumbar Spine X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">X-ray for Foreign Body Detection</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>

      <div class="tomography_scan" onClick="show_tomography_scan_form()">
        <span>Computed Tomography (CT) Scan</span>
        <i class="fa fa-plus" id="tomography_scan_plus_icon"></i>
        <i class="fa fa-minus"  id="tomography_scan_minus_icon"></i>
      </div>
      <form class="tomography_scan_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Head CT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Chest CT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Abdominal CT</label>Cardiac CT
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Whole-body CT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Cardiac CT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">CT Angiography (CTA)</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="magnetic" onClick="show_magnetic_form()">
        <span>Magnetic Resonance Imaging (MRI):</span>
        <i class="fa fa-plus" id="magnetic_plus_icon"></i>
        <i class="fa fa-minus"  id="magnetic_minus_icon"></i>
    </div>
    <form class="magnetic_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Brain MRIT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Spine MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Abdominal MRIT</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Pelvic MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Joint MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Cardiac MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Functional MRI (fMRI)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Magnetic Resonance Angiography (MRA)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Breast MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Breast MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Musculoskeletal MRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Whole-body MRI</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="ultrasound" onClick="show_ultrasound_form()">
        <span>Ultrasound (Sonography)</span>
        <i class="fa fa-plus" id="ultrasound_plus_icon"></i>
        <i class="fa fa-minus"  id="ultrasound_minus_icon"></i>
    </div>
    <form class="ultrasound_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Abdominal Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Pelvic Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Obstetric Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Breast Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Vascular Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Renal Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Thyroid Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Testicular Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Musculoskeletal Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Transcranial Doppler Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Echocardiography (Cardiac Ultrasound)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Carotid Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Transvaginal Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Transrectal Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Abdominal Aortic Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Pelvic Floor Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Endorectal Ultrasound</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="nuclear" onClick="show_nuclear_form()">
        <span>Nuclear Medicine Imaging</span>
        <i class="fa fa-plus" id="nuclear_plus_icon"></i>
        <i class="fa fa-minus"  id="nuclear_minus_icon"></i>
    </div>
    <form class="nuclear_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Positron Emission Tomography (PET) Scan</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Bone Scintigraphy (Bone Scan)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Thyroid Scan</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Renal Scintigraphy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Gallium Scan</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="fluoroscopy" onClick="show_fluoroscopy_form()">
        <span>Fluoroscopy</span>
        <i class="fa fa-plus" id="fluoroscopy_plus_icon"></i>
        <i class="fa fa-minus"  id="fluoroscopy_minus_icon"></i>
    </div>
    <form class="fluoroscopy_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Angiography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Discography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Gastrointestinal Fluoroscopy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Arthrography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Myelographyy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Arthrography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cholangiographyy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cystographyy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Hysterosalpingography (HSG)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Lumbar Puncture (Fluoroscopic Guidance)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Sinus Fluoroscopy</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="5000" class="checkbox_cal">
          <label for="">Swallowing Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="15000" class="checkbox_cal">
          <label for="">Catheter Placements</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Joint Injections</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="1500" class="checkbox_cal">
          <label for="">Barium Studies</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="mammography" onClick="show_mammography_form()">
        <span>Mammography</span>
        <i class="fa fa-plus" id="mammography_plus_icon"></i>
        <i class="fa fa-minus"  id="mammography_minus_icon"></i>
    </div>
    <form class="mammography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Screening Mammography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Diagnostic Mammography</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="interventional_radiology" onClick="show_interventional_radiology_form()">
        <span>Interventional Radiology Procedures</span>
        <i class="fa fa-plus" id="interventional_radiology_plus_icon"></i>
        <i class="fa fa-minus"  id="interventional_radiology_minus_icon"></i>
    </div>
    <form class="interventional_radiology_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Angiography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Embolization</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Biopsies (various types)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Drainage Procedures</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Stent Placement</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="magnetic_resonance" onClick="show_magnetic_resonance_form()">
        <span>Magnetic Resonance Angiography (MRA)</span>
        <i class="fa fa-plus" id="magnetic_resonance_plus_icon"></i>
        <i class="fa fa-minus"  id="magnetic_resonance_minus_icon"></i>
    </div>
    <form class="magnetic_resonance_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Head and Neck MRA</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Abdominal and Pelvic MRA</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Peripheral MRA</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="dual_energy" onClick="show_dual_energy_form()">
        <span>Dual-Energy X-ray Absorptiometry (DEXA or DXA) Scan</span>
        <i class="fa fa-plus" id="dual_energy_plus_icon"></i>
        <i class="fa fa-minus"  id="dual_energy_minus_icon"></i>
    </div>
    <form class="dual_energy_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Bone Mineral Density (BMD) Scan</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="chest_x_ray" onClick="show_chest_x_ray_form()">
        <span>Chest X-ray</span>
        <i class="fa fa-plus" id="chest_x_ray_plus_icon"></i>
        <i class="fa fa-minus"  id="chest_x_ray_minus_icon"></i>
    </div>
    <form class="chest_x_ray_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Routine Chest X-ray</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Portable Chest X-ray</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="myelography" onClick="show_myelography_form()">
        <span>Myelography</span>
        <i class="fa fa-plus" id="myelography_plus_icon"></i>
        <i class="fa fa-minus"  id="myelography_minus_icon"></i>
    </div>
    <form class="myelography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Spinal Cord Imaging</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Spinal Cord Imaging</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cervical Myelography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Thoracic Myelography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Lumbar Myelography</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="arthrography" onClick="show_arthrography_form()">
        <span>Arthrography</span>
        <i class="fa fa-plus" id="arthrography_plus_icon"></i>
        <i class="fa fa-minus"  id="arthrography_minus_icon"></i>
    </div>
    <form class="arthrography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Joint Imaging with Contrast</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Shoulder Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Knee Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Hip Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Wrist Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Ankle Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Temporomandibular Joint (TMJ) Arthrogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Elbow Arthrogram</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="hysterosalpingography" onClick="show_hysterosalpingography_form()">
        <span>Hysterosalpingography (HSG)</span>
        <i class="fa fa-plus" id="hysterosalpingography_plus_icon"></i>
        <i class="fa fa-minus"  id="hysterosalpingography_minus_icon"></i>
    </div>
    <form class="hysterosalpingography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Hysterosalpingogram (HSG)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Uterine Cavity Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Fallopian Tube Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Tubal Patency Evaluation</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="cholangiography" onClick="show_cholangiography_form()">
        <span>Cholangiography</span>
        <i class="fa fa-plus" id="cholangiography_plus_icon"></i>
        <i class="fa fa-minus"  id="cholangiography_minus_icon"></i>
    </div>
    <form class="cholangiography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Percutaneous Transhepatic Cholangiography (PTC)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Endoscopic Retrograde Cholangiopancreatography (ERCP)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Magnetic Resonance Cholangiopancreatography (MRCP)</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="angiography" onClick="show_angiography_form()">
        <span>CT Angiography (CTA)</span>
        <i class="fa fa-plus" id="angiography_plus_icon"></i>
        <i class="fa fa-minus"  id="angiography_minus_icon"></i>
    </div>
    <form class="angiography_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Head and Neck CTA</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Chest CTA</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Abdominal and Pelvic CTA</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Peripheral CTA</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="functional_mri" onClick="show_functional_mri_form()">
        <span>Functional MRI (fMRI)</span>
        <i class="fa fa-plus" id="functional_mri_plus_icon"></i>
        <i class="fa fa-minus"  id="functional_mri_minus_icon"></i>
    </div>
    <form class="functional_mri_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Brain Function Mapping</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cognitive Function Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Language Processing Evaluation</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Memory Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Pain Response Mapping</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Emotional Response Evaluation</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Motor Function Mapping</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Visual Processing Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Auditory Processing Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Task-Based fMRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Resting-State fMRI</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Connectivity Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Decision-Making Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Social Cognition Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Executive Function Evaluation</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
      <div class="cardiac_imaging" onClick="show_cardiac_imaging_form()">
        <span>Cardiac Imaging</span>
        <i class="fa fa-plus" id="cardiac_imaging_plus_icon"></i>
        <i class="fa fa-minus"  id="cardiac_imaging_minus_icon"></i>
    </div>
    <form class="cardiac_imaging_form hide">
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cardiac Magnetic Resonance Imaging (Cardiac MRI)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cardiac Computed Tomography (Cardiac CT)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Echocardiography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Nuclear Stress Test</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cardiac Catheterization</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Coronary Angiography</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Myocardial Perfusion Imaging</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Doppler Ultrasound</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Transesophageal Echocardiogram (TEE)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cardiac Positron Emission Tomography (Cardiac PET)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Cardiac Magnetic Resonance Angiography (Cardiac MRA)</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Stress Echocardiogram</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Decision-Making Assessment</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Social Cognition Studies</label>
        </div>
        <div class="form_control">
          <input type="checkbox" value="4000" class="checkbox_cal">
          <label for="">Executive Function Evaluation</label>
        </div>
        <div class="form_control">
          <label for="">Upload Test Result</label>
          <input type="file" value="1500" class="checkbox_cal">
        </div>
      </form>
</div>
</div>
</div>
`

allSection('radiology_test_container',  radiology_test_input_container)