<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Complaints</title>
    <link rel="stylesheet" href="all_section.css">
    <link rel="stylesheet" href="../../../awesome-font/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
    <nav class="navbar">
    <i class="fa fa-long-arrow-left " id="back_arrow" onClick="back_arrow()"></i>
    <div class="logo">
        <!---Please you would manipulate this span base on the patient clicked-->
        <span style="font-size:2rem; color:#fff;">Precious John</span>
    </div>
         </nav>
    <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-calendar-check-o active'></i>
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
   </div>
   <div class="all_sections_input">
    <!--Start of the complaint section--->
   <div class="complain_dropdown">
    <span>Complaints</span>
    <i class="fa fa-plus" id="complaint_icon_plus"></i>
    <i class="fa fa-minus" id="complaint_icon_minus"></i>
   </div>
   <div class="complaint-section hidden">
        <form action="">
            <div class="complaint_form-control">
            <label for="major_complaints">Major Complaints & Duration</label>
            <input type="text"  class="complaint-input">
            </div>
            <div class="complaint_form-control">
            <label for="major_complaints">History of Presenting Complaints</label>
            <input type="text" class="complaint-input">
            </div>
            <div class="complaint_form-control">
            <label for="major_complaints">Family & Social History</label>
            <input type="text" class="complaint-input">
            </div>
            <div class="complaint_form-control">
            <label for="major_complaints">Past Surgical/Medical History</label>
            <input type="text"  class="complaint-input">
            </div>
            <div class="complaint_form-control">
            <label for="major_complaints">Surgical Procedure</label>
            <div class="checkbox">
            <input type="checkbox" name="surgery" id="check1">
            <label for="surgery">Yes</label>
            <input type="checkbox" name="surgery" id="check2">
            <label for="surgery">No</label>
            </div>
</div>
        </form>
   </div>
   <div class="surgical_booking hidden">
    <i class="fa fa-times-circle" id='close-icon' onClick="close_procedure_form()"></i>
        <h1 class="login-form-h1">Surgical Procedure</h1>
        <form>
        <div class="form-control-precedure">
        <label for='full_name'>Full  name</label>
        <!-- <i class="fa fa-address-book" id="icons"></i> -->
        <input type="text" name="full_name" autoComplete='off' class="surgical_input"/> 
        </div>

        <div class="form-control-precedure">
        <label for='date'>Date</label>
        <!-- <i class="fa fa-key" id="icons"></i> -->
        <input type="date"  name="date" autoComplete='off' class="surgical_input"'/> 
        </div>
        <div class="form-control-precedure">
        <label for='time'>Time</label>
        <!-- <i class="fa fa-key" id="icons"></i> -->
        <input type="time"  name="time" autoComplete='off' class="surgical_input"'/> 
        </div>

        <div class="form-control-precedure">
        <label for='operation'>Procedure</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="text" name="procedures" autoComplete='off' class="surgical_input"/> 
        </div>
        <div class="form-control-precedure">
        <label for='phone'>Phone Number</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="number" name="phone" autoComplete='off' class="surgical_input"/> 
        </div>
        <div class="form-control-precedure">
        <label for='number'>Cost</label>
        <!-- <i class="fa fa-lock" id="icons"></i> -->
        <input type="number" name="number" autoComplete='off' class="surgical_input"/> 
        </div>
        <button type="button" class="btn" onClick="if_details_correct_login()">Submit</button>
</form>
    </div>
           <!--End of the complaint section--->

               <!--Start of the System & Review section--->
               <div class="system_dropdown">
    <span>System Review and Symptom</span>
    <i class="fa fa-plus" id="system_icon_plus"></i>
    <i class="fa fa-minus" id="system_icon_minus"></i>
   </div>
               <div class="system_review-section hidden">
        <div class="drop-down1">
            <span>General</span>
            <i class="fa fa-minus" id="close_id_1"></i>
            <i class="fa fa-plus" id="open_id_1"></i>
        </div>
            <form action="" class="form1 hidden">
                <div class="form-control">
                <label for="headache">Headache</label>
                <div class="radio">
                <input type="radio" id="yes" name="h1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="h1" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Fatigue?</label>
                <div class="radio">
                <input type="radio" id="yes" name="f1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="f1" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Overall Weekness?</label>
                <div class="radio">
                <input type="radio" id="yes" name="o1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="01" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Change in appetite?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ca1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ca1" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Change in weight</label>
                <div class="radio">
                <input type="radio" id="yes" name="cw1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cw1" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Fever</label>
                <div class="radio">
                <input type="radio" id="yes" name="fv1" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="fv1" />
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down2">
            <span>Skin</span>
            <i class="fa fa-minus" id="close_id_2"></i>
            <i class="fa fa-plus" id="open_id_2"></i>
        </div>
        <form action="" class="form2 hidden">
                <div class="form-control">
                <label for="headache">Change in mole(s)?</label>
                <div class="radio">
                <input type="radio" id="yes" name="cm" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cm" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Hair or nail changes?</label>
                <div class="radio">
                <input type="radio" id="yes" name="h/n" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="h/n" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Color or texture change ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="c/t" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="c/t" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Itching or Rashes ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="i/r" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="i/r" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Sores </label>
                <div class="radio">
                <input type="radio" id="yes" name="s" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="s" />
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down3">
            <span>Endocrine</span>
            <i class="fa fa-minus" id="close_id_3"></i>
            <i class="fa fa-plus" id="open_id_3"></i>
        </div>
        <form action="" class="form3 hidden">
                <div class="form-control">
                <label for="headache">Enlarging glove or hat size?</label>
                <div class="radio">
                <input type="radio" id="yes" name="e/hs" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="e/hs" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Excessive thirst?</label>
                <div class="radio">
                <input type="radio" id="yes" name="et" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="et" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Salt craving ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="sc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="sc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Lost of Sexual drive (libido)?</label>
                <div class="radio">
                <input type="radio" id="yes" name="lsd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="lsd" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Heat or cold intolerance?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hci" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hci" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Thyriod enlargement?</label>
                <div class="radio">
                <input type="radio" id="yes" name="te" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="te" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Abnormal growth?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ag"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ag"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Increased appetite?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ia"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ia"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Increased urine production?</label>
                <div class="radio">
                <input type="radio" id="yes" name="iup"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="iup"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Thyriod trouble?</label>
                <div class="radio">
                <input type="radio" id="yes" name="tr"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="tr"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Excessive swearing?</label>
                <div class="radio">
                <input type="radio" id="yes" name="es"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="es"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Diabetes?</label>
                <div class="radio">
                <input type="radio" id="yes" name="d"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="d"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down4">
            <span>Hematopoietic</span>
            <i class="fa fa-minus" id="close_id_4"></i>
            <i class="fa fa-plus" id="open_id_4"></i>
        </div>
        <form action="" class="form4 hidden">
                <div class="form-control">
                <label for="headache">Chemotherapy Management for Hematopoietic Disorders?</label>
                <div class="radio">
                <input type="radio" id="yes" name="cmhd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cmhd" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Radiation therapy integration for Hermatopoietic condition?</label>
                <div class="radio">
                <input type="radio" id="yes" name="rtihc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rtihc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Immunotherapy traking for Hermatopoietic disorder ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ithd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ithd" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Steam cell transplantation?</label>
                <div class="radio">
                <input type="radio" id="yes" name="sct" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="sct" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Anticoagulant medication?</label>
                <div class="radio">
                <input type="radio" id="yes" name="am" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="am" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Iron chelation?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ic" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ic" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Hematopoietic growth?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hg"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hg"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Blood tranfusion?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bt"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bt"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Erthropoletin?</label>
                <div class="radio">
                <input type="radio" id="yes" name="etin"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="etin"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Granalocyte colony-stimulation?</label>
                <div class="radio">
                <input type="radio" id="yes" name="gcs"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="gcs"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Intravenous immunogubullin?</label>
                <div class="radio">
                <input type="radio" id="yes" name="imin"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="imin"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down5">
            <span>Muscoskeletal</span>
            <i class="fa fa-minus" id="close_id_5"></i>
            <i class="fa fa-plus" id="open_id_5"></i>
        </div>
        <form action="" class="form5 hidden">
                <div class="form-control">
                <label for="headache">Physical therapy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="pt" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="pt" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Occupational therapy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="occpt" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="occpt" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Orthopedic consultion ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="oc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="oc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Pain medication?</label>
                <div class="radio">
                <input type="radio" id="yes" name="pm" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="pm" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Join aspiration?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ja" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ja" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Muscle relaxant?</label>
                <div class="radio">
                <input type="radio" id="yes" name="mr" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="mr" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Surgical intervention?</label>
                <div class="radio">
                <input type="radio" id="yes" name="si"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="si"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Anti-inflammation?</label>
                <div class="radio">
                <input type="radio" id="yes" name="anti-in"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="anti-in"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Assistive?</label>
                <div class="radio">
                <input type="radio" id="yes" name="assistive"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="assistive"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down6">
            <span>Head & Neck</span>
            <i class="fa fa-minus" id="close_id_6"></i>
            <i class="fa fa-plus" id="open_id_6"></i>
        </div>
        <form action="" class="form6 hidden">
                <div class="form-control">
                <label for="headache">Symptom for head and neck issue?</label>
                <div class="radio">
                <input type="radio" id="yes" name="shni" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="shni" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Record ear, nose, throat (ENT) exams?</label>
                <div class="radio">
                <input type="radio" id="yes" name="rente" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rente" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Head and neck cancers ?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hnc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hnc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Dental and oral health?</label>
                <div class="radio">
                <input type="radio" id="yes" name="doh" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="doh" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Speech and swallowing assesment?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ssa" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ssa" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Biopsies for neck masses?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bnm" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bnm" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Thyriod function tests?</label>
                <div class="radio">
                <input type="radio" id="yes" name="tft"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="tft"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Salivary gland disorders?</label>
                <div class="radio">
                <input type="radio" id="yes" name="sgd"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="sgd"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">TMJ evaluations?</label>
                <div class="radio">
                <input type="radio" id="yes" name="tmj"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="tmj"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">imaging for skull and bones?</label>
                <div class="radio">
                <input type="radio" id="yes" name="is&b"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="is&b"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down7">
            <span>Ears, Nose, Sinuses, Mouth & Throat</span>
            <i class="fa fa-minus" id="close_id_7"></i>
            <i class="fa fa-plus" id="open_id_7"></i>
        </div>
        <form action="" class="form7 hidden">
                <div class="form-control">
                <label for="headache">Hearing loss?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hl" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hl" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Tinnitus Evalution?</label>
                <div class="radio">
                <input type="radio" id="yes" name="te" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="te" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Ear pain?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ep" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ep" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Ear discharge?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ed" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ed" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Nasal congestion?</label>
                <div class="radio">
                <input type="radio" id="yes" name="nc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="nc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Sinus discharge?</label>
                <div class="radio">
                <input type="radio" id="yes" name="sd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="sd" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Allergic Rhinitis?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ar"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ar"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Oral pain?</label>
                <div class="radio">
                <input type="radio" id="yes" name="op"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="op"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Throat pain?</label>
                <div class="radio">
                <input type="radio" id="yes" name="tp"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="tp"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Dysphagia?</label>
                <div class="radio">
                <input type="radio" id="yes" name="dysphagia"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="dysphagia"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Mouth Lessions?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ml"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ml"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Voice changes?</label>
                <div class="radio">
                <input type="radio" id="yes" name="vc"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="vc"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Halitosis(Bad breath)?</label>
                <div class="radio">
                <input type="radio" id="yes" name="halitosis"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="halitosis"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Gag reflex?</label>
                <div class="radio">
                <input type="radio" id="yes" name="gr"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="gr"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Oral thrush?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ot"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ot"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Tonsillitis?</label>
                <div class="radio">
                <input type="radio" id="yes" name="Tonsillitis"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="Tonsillitis"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Hoarseness?</label>
                <div class="radio">
                <input type="radio" id="yes" name="Hoarseness"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="Hoarseness"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Oral  cancer?</label>
                <div class="radio">
                <input type="radio" id="yes" name="oral_cancer"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="oral_cancer"/>
                <label for="no">No</label>
                </div>
</div>
                <div class="form-control">
                <label for="headache">Recurrent Sore Throat?</label>
                <div class="radio">
                <input type="radio" id="yes" name="rsc"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rsc"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down8">
            <span>Breast</span>
            <i class="fa fa-minus" id="close_id_8"></i>
            <i class="fa fa-plus" id="open_id_8"></i>
        </div>
        <form action="" class="form8 hidden">
                <div class="form-control">
                <label for="headache">Breast Disorder?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bd" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Surgical Invervention monitoring for breast condition?</label>
                <div class="radio">
                <input type="radio" id="yes" name="simbc" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="simbc" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Hormone replacement?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hr" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hr" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Breast imaging follow-up?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bifu" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bifu" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Reconstructive surgery?</label>
                <div class="radio">
                <input type="radio" id="yes" name="rs" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rs" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Breast pain?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bp" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bp" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Nutritional?</label>
                <div class="radio">
                <input type="radio" id="yes" name="n"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="n"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Pschosicial Intergration?</label>
                <div class="radio">
                <input type="radio" id="yes" name="pi"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="pi"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down9">
            <span>Respiratory</span>
            <i class="fa fa-minus" id="close_id_9"></i>
            <i class="fa fa-plus" id="open_id_9"></i>
        </div>
        <form action="" class="form9 hidden">
                <div class="form-control">
                <label for="headache">Respiratory symptom?</label>
                <div class="radio">
                <input type="radio" id="yes" name="rs" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rs" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Pulmonary function test?</label>
                <div class="radio">
                <input type="radio" id="yes" name="pft" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="pft" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Chest X-ray imaging?</label>
                <div class="radio">
                <input type="radio" id="yes" name="cxi" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cxi" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Oxygen therapy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ot" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ot" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Ventilator?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ventilator" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ventilator" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Bronchoscopy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bronchoscopy" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bronchoscopy" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Pneumonia?</label>
                <div class="radio">
                <input type="radio" id="yes" name="pneumonia"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="pneumonia"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Asthma action?</label>
                <div class="radio">
                <input type="radio" id="yes" name="aa"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="aa"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Respiratory infection?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ri"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ri"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">COPD?</label>
                <div class="radio">
                <input type="radio" id="yes" name="copd"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="copd"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Spiometer test?</label>
                <div class="radio">
                <input type="radio" id="yes" name="st"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="st"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Smoking cessation?</label>
                <div class="radio">
                <input type="radio" id="yes" name="sc"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="sc"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down10">
            <span>Cardiovascular</span>
            <i class="fa fa-minus" id="close_id_10"></i>
            <i class="fa fa-plus" id="open_id_10"></i>
        </div>
        <form action="" class="form10 hidden">
                <div class="form-control">
                <label for="headache">Cardiovascular condition?</label>
                <div class="radio">
                <input type="radio" id="yes" name="cardiovascular_condition" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cardiovascular_condition" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Bood pressure?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bp" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bp" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Cholesterol Level?</label>
                <div class="radio">
                <input type="radio" id="yes" name="cl" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="cl" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Antiplatelet?</label>
                <div class="radio">
                <input type="radio" id="yes" name="antiplatelet" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="antiplatelet" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Beta-Blocker?</label>
                <div class="radio">
                <input type="radio" id="yes" name="bb" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="bb" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Angiotensin-converting enzyme (ACE) inhibitor?</label>
                <div class="radio">
                <input type="radio" id="yes" name="acei" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="acei" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Anticoagulant?</label>
                <div class="radio">
                <input type="radio" id="yes" name="anticoagulant"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="anticoagulant"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Cardiac?</label>
                <div class="radio">
                <input type="radio" id="yes" name="c"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="c"/>
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Heart failure & Diuretic?</label>
                <div class="radio">
                <input type="radio" id="yes" name="hf&d"/>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="hf&d"/>
                <label for="no">No</label>
                </div>
  </div>
  </form>
  <div class="drop-down11">
            <span>Gastrointestinal</span>
            <i class="fa fa-minus" id="close_id_11"></i>
            <i class="fa fa-plus" id="open_id_11"></i>
</div>
<form action="" class="form11 hidden">
                <div class="form-control">
                <label for="headache">Gastrointestinal symptom?</label>
                <div class="radio">
                <input type="radio" id="yes" name="gastrointestinal_symptom" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="gastrointestinal_symptom" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Endoscopy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="endoscopy" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="endoscopy" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Colonoscopy?</label>
                <div class="radio">
                <input type="radio" id="yes" name="colonoscopy" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="colonoscopy" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Radiology Issue?</label>
                <div class="radio">
                <input type="radio" id="yes" name="ri" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="ri" />
                <label for="no">No</label>
                </div>
  </div>
                <div class="form-control">
                <label for="headache">Gastrointestinal disorder?</label>
                <div class="radio">
                <input type="radio" id="yes" name="gd" />
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="gd" />
                <label for="no">No</label>
                </div>
  </div>
  </form>
  </div>
        <!--End of the System & Review section--->

  <!--Start of Physica, Examination-->
  <div class="physical_dropdown">
    <span>Physical Examination</span>
    <i class="fa fa-plus" id="physical_icon_plus"></i>
    <i class="fa fa-minus" id="physical_icon_minus"></i>
   </div>
  <div class="physical_examination-section hidden">
        <div class="physical_examination_drop-down1">
            <span>General</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus1"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus1"></i>
        </div>
        <form action="" class="physical_examination_form1 hidden">
            <div class="physical_examination_form-control">
            <label for="physical_examination">Physical Examination</label>
            <input type="text">
</div>
        </form>
        <div class="physical_examination_drop-down2">
            <span>Neurological</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus2"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus2"></i>
        </div>
        <form action="" class="physical_examination_form2 hidden">
            <div class="physical_examination_form-control">
            <label for="phyical_status">Mental Status</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="cranial_nerves">Cranial Nerves</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="position_sense">Position Sense</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="vibration_sense">Vibration Sense</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="reflex_technique">Reflex Technique</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="coordination_of_upper">Coordination of upper extremities</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="coordination_of_lower">Coordination of lower extremities</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="gait">Gait</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="glasgow">Glasgow coma scale</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="headache">Eye opening response</label>
                <div class="radio">
                <input type="radio" id="spontaneous" name="eye"/>
                <label for="spontaneous">Spontaneous</label>
                <input type="radio" id="to_speech" name="eye"/>
                <label for="to_speech">To speech </label>
                <input type="radio" id="to_pain" name="eye"/>
                <label for="no_response">To Pain </label>
                <input type="radio" id="no_response" name="eye"/>
                <label for="no_response">No Response</label>
                </div>
</div>
            <div class="physical_examination_form-control">
            <label for="headache">Best verbal response</label>
                <div class="radio">
                <input type="radio" id="oriented" name="verbal"/>
                <label for="oriented">Oriented to time, place & person </label>
                <input type="radio" id="confused" name="verbal"/>
                <label for="confused">Confused 3</label>
                <input type="radio" id="inappropraite" name="verbal"/>
                <label for="no_response">Inappropraite words</label>
                <input type="radio" id="incmprehensible" name="verbal"/>
                <label for="response">Incomprehensible sounds</label>
                <input type="radio" id="response" name="verbal"/>
                <label for="response">No Response</label>
                </div>
</div>
            <div class="physical_examination_form-control">
            <label for="headache">Best motor response</label>
                <div class="radio">
                <input type="radio" id="obey" name="motor"/>
                <label for="obey">Obey command</label>
                <input type="radio" id="localized" name="motor"/>
                <label for="localized">Moved to localised pain</label>
                <input type="radio" id="flexion" name="motor"/>
                <label for="flexion">Flexion withdrawal from pain</label>
                <input type="radio" id="abnornal" name="motor"/>
                <label for="abnormal">Abnormal flexion(decorticate)</label>
                <input type="radio" id="response" name="motor"/>
                <label for="response">No Response</label>
                </div>
</div>
        
        </form>
        <div class="physical_examination_drop-down3">
            <span>Vital Sign</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus3"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus3"></i>
        </div>
        <form action="" class="physical_examination_form3 hidden">
            <div class="physical_examination_form-control">
            <label for="physical_blood_pressure">Blood Pressure</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="heart_rate">Heart Rate</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="respiratory_rate">Respiratory Rate</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="temperature">Temperature</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="oxygen_saturation">Oxygen Saturation</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down4">
            <span>General Apperance</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus4"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus4"></i>
        </div>
        <form action="" class="physical_examination_form4 hidden">
            <div class="physical_examination_form-control">
            <label for="level">Level of Consciousness</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="nutritional">Nutritional Status</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="signs">Signs of Distress/Discomfort</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="body_habitus">Body Habitus</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down5">
            <span>Skin Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus5"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus5"></i>
        </div>
        <form action="" class="physical_examination_form5 hidden">
            <div class="physical_examination_form-control">
            <label for="pigmentation">Color/Pigmentation</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="moisture/temperature">Moisture/Temperature</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="lesions/rashes">Lesions/Rashes/Abnormalities</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="bruising">Brusing/Petechiae</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="scars">Scars/Surgical Incisions</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down6">
            <span>Head and Neck</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus6"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus6"></i>
        </div>
        <form action="" class="physical_examination_form6 hidden">
            <div class="physical_examination_form-control">
            <label for="scalp/hair/nails">Scalp/Hair/Nails</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="eyes/ears/nose/throat:">Eyes/Ears/Nose/Throat:</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="lesions/rashes">Lesions/Rashes/Abnormalities</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="lymph_nodes">Lymph Nodes</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="neck_rang_of_Motion">Neck Range of Motion</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="presence_of_Bruits_(if applicable)">Presence of Bruits (if applicable)</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down7">
            <span>Cardiovascular Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus7"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus7"></i>
        </div>
        <form action="" class="physical_examination_form7 hidden">
            <div class="physical_examination_form-control">
            <label for="scalp/hair/nails">Inspection/Palpation of Precordium</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="auscultation_of_heart_sounds_murmurs">Auscultation of Heart Sounds/Murmurs</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="peripheral_pulses">Peripheral Pulses</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="edema_assessment">Edema Assessment</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="capillary_refill_time">Capillary Refill Time</label>
            <input type="text">
</div>
</form>
<div class="physical_examination_drop-down8">
            <span>Respiratory Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus8"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus8"></i>
        </div>
           <form action="" class="physical_examination_form8 hidden">
            <div class="physical_examination_form-control">
            <label for="respiratory_effort_inspection">Respiratory Effort Inspection</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="palpation/Percussion_of_chest">Palpation/Percussion of Chest</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="auscultation_of_breath Sounds">Auscultation of Breath Sounds</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="cough/sputum_assessment">Cough/Sputum Assessment</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="cough/sputum_assessment">Cough/Sputum Assessment</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down9">
            <span>Abdominal Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus9"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus9"></i>
        </div>
        <form action="" class="physical_examination_form9 hidden">
            <div class="physical_examination_form-control">
            <label for="inspection/auscultation/percussion/palpation">Inspection/Auscultation/Percussion</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="presence_of _tenderness/Masses">Presence of Tenderness/Masses</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="bowel_sounds_assessment Sounds">Bowel Sounds Assessment</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down10">
            <span>Genitourinary Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus10"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus10"></i>
        </div>
        <form action="" class="physical_examination_form10 hidden">
            <div class="physical_examination_form-control">
            <label for="genitalia_inspection">Genitalia Inspection</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="urinary_function_assessment">Urinary Function Assessment</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="pelvic_examination_(if applicable)_sounds">Pelvic Examination (if applicable)</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="prostate_examination_(if_applicable">Prostate Examination (if applicable)</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down11">
            <span>Musculoskeletal Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus11"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus11"></i>
        </div>
        <form action="" class="physical_examination_form11 hidden">
            <div class="physical_examination_form-control">
            <label for="genitalia_in*Inspection/Palpation of joints_musclesspection">Inspection/Palpation of Joints</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="range_of_motion_assessment">Range of Motion Assessment</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="gait/balance_evaluation">Gait/Balance Evaluation</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="pine_examination">pine Examination</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down12">
            <span>Neurological Examination</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus12"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus12"></i>
        </div>
        <form action="" class="physical_examination_form12 hidden">
            <div class="physical_examination_form-control">
            <label for="mental_status_assessment">Mental Status Assessment</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="cranial_nerve_examination">Cranial Nerve Examination</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="motor/sensory_function">Motor/Sensory Function</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="reflexes">Reflexes</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="coordination/balance_assessment">Coordination/Balance Assessment</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down13">
            <span>Review of Systems (ROS)</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus13"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus13"></i>
        </div>
        <form action="" class="physical_examination_form13 hidden">
            <div class="physical_examination_form-control">
            <label for="cardiovascular_system">Cardiovascular System</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="respiratory_system">Respiratory System</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="gastrointestinal_system">Gastrointestinal System</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="genitourinary_system">Genitourinary System</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="neurological_system">Neurological System</label>
            <input type="text">
            </div>
</form>
<div class="physical_examination_drop-down14">
            <span>Social and Family History</span>
            <i class="fa fa-minus" id="physical_examination_icon_minus14"></i>
            <i class="fa fa-plus" id="physical_examination_icon_plus14"></i>
        </div>
        <form action="" class="physical_examination_form14 hidden">
            <div class="physical_examination_form-control">
            <label for="social_habits(smoking,alcohol,drugs)">Social Habits (smoking, alcohol)</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="family_medical_history">Family Medical History</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="occupation/environmental_exposures">Occupation/Environmental</label>
            <input type="text">
            </div>
            <div class="physical_examination_form-control">
            <label for="living_conditions/support_system">Living Conditions/Support System</label>
            <input type="text">
            </div>
</form>
    </div>
      <!--End of Physica, Examination-->

    <!--Start for Treatment and Prescribtion--->
    <div class="treatment_prescribtion_dropdown">
    <span>Treatment & Prescription</span>
    <i class="fa fa-plus" id="treatment_prescribtion_icon_plus"></i>
    <i class="fa fa-minus" id="treatment_prescribtion_minus"></i>
   </div>
   <div class="treatment_prescribtion-section hidden">
        <form action="" class="treatment_prescribtion_form1">
            <div class="treatment_prescribtion_form-control">
            <label for="drugs">Drugs</label>
            <input type="text" class="treatment_prescribtion-input_change_width">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="strength">Strength</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="mode">Mode</label>
            <select name="mode" id="mode" class="treatment_prescribtion-input">
                <option value="injection">Injection</option>
                <option value="capsule">Capsule</option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="administration">Administration</label>
            <select name="administration" id="administration" class="treatment_prescribtion-input">
                <option value="im">IM</option>
                <option value="others">Others</option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="dos">Dos</label>
            <input type="number" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="unit">Unit</label>
            <select name="unit" id="unit" class="treatment_prescribtion-input">
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="frequency">Frequency</label>
            <select name="frequency" id="frequency" class="treatment_prescribtion-input">
                <option value="hours">24 hourly</option>
                <option value="others">others</option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="duration">Duration</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="remark">Remark</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="qty">Qty</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="cost">Cost</label>
            <input type="number" class="treatment_prescribtion-input">
            </div>
            <i class="fa fa-window-close" id="prescribe_close"></i>
            <!---Second Sec--->
            <div class="treatment_prescribtion_form-control">
            <label for="drugs">Drugs</label>
            <input type="text" class="treatment_prescribtion-input_change_width">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="strength">Strength</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="mode">Mode</label>
            <select name="mode" id="mode" class="treatment_prescribtion-input">
                <option value="injection">Injection</option>
                <option value="capsule">Capsule</option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="dos">Dos</label>
            <input type="number" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="unit">Unit</label>
            <select name="unit" id="unit" class="treatment_prescribtion-input">
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="frequency">Frequency</label>
            <select name="frequency" id="frequency" class="treatment_prescribtion-input">
                <option value="hours">24 hourly</option>
                <option value="others">others</option>
            </select>
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="duration">Duration</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="remark">Remark</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="qty">Qty</label>
            <input type="text" class="treatment_prescribtion-input">
            </div>
            <div class="treatment_prescribtion_form-control">
            <label for="cost">Cost</label>
            <input type="number" class="treatment_prescribtion-input">
            </div>
            <button id="btn_prescribe">Prescribe</button>      
        </div>
        </form>
        <button id="btn" class="save">Enter</button>
   </div>

   </div>
  </div>
  <div class="overlay hidden" onClick="close_procedure_form()"></div>
    <script src="all_section.js"></script>
</body>
</html>