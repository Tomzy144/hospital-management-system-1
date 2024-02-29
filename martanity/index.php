<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martanity Dashboard</title>
    <link rel="stylesheet" href="style/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style/icons-1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/martanity.css">
</head>
<body>



    <!----START OF NAVBAR AND SIDEBAR-->
    <div class="navbar">
        <div class="section1">
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
            <img id="image_profile_account" src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
            <h4>Princess Esther Asuquo</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Princess Esther Asuquo</span>
            <i class="fa fa-caret-down" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
      <!----START OF SIDEBAR-->
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="bi bi-chat-dots-fill" id="icon"></i>
                <i class="fa-solid fa-person-pregnant" id="icon" onclick="antenatalSection()"></i>
                <i class="fa-solid fa-baby" id="icon" onclick="postnalSection()"></i>
                <i class="fa-solid fa-person-breastfeeding" id="icon" onclick="labourSection()"></i>
                <i class="bi bi-box-arrow-right" id="icon"></i>
            </div>
        </div>
          <!----END OF NAVBAR AND SIDEBAR-->









               <!----START OF THE ANTERNATAL FORM-->
               <div class="antenal_section">
          <div class="form_container_for_antenatal">
    <form action="">
        <h2>Antenatal Registration Form</h2>
        <div class="upload_image_antenatal">
             <video id="videoElement_antenatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_antenatal" onclick="openCamera2()"></i>
            <canvas id="canvasElement_antenatal" style="display: none;"></canvas>
            <img id="capturedImage_antenatal" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture2 hide"  onclick="retakePicture2()">Recapture</div>
        <div class="btn_capture2 hide" onClick="takePicture2()">Capture</div>
        </div>
        <span>Patient Info</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text" placeholder="Calabar">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 732 332 33">
        </div>
        </div>
        <span>Spouse/Partner Information</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Full Name</label>
        <input type="text" placeholder="John Smith">
       </div>
       <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 732 323 23">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Previous Pregnacies</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Chronic Condition</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Alergies</label>
        <input type="text" placeholder="input">
        </div>
        </div>


        <span>Health Status</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Current Medications</label>
        <input type="text" placeholder="input">
      </div>
      <div class="form_control">
        <label for="">Vital Signs</label>
        <input type="text" placeholder="input">
      </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
           <!----END OF THE ANTERNATAL FORM-->



        <!----START OF THE ANTERNATAL LIST-->
           <div class="anternal_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Anternal Patient Admission List</h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <td>S/N</td>
                    <td>Patient Profile</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Date of Admission</td>
                </thead>
                <tbody onclick="anternal_patient_profile_section()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon3" onclick="_transfer_dropdowns3()"></i>
                    </td>
                </tbody>
                <tbody  onclick="anternal_patient_profile_section()">
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon3" onclick="_transfer_dropdowns3()"></i>
                    </td>
                </tbody>
                <div class="tranfer_box1 hide">
                    <i class="bi bi-x-lg red" onclick="_close_transfer_dropdowns3()"></i>
                <ul>
                    <li onclick="_doc_transfer_from_antenatal()">Doctor Appoitment</li>
                    <li onclick="_transfer_patient_from_antenatal_to_labour()">Transfer to Labour Ward</li>
                    <li onclick="_lab_transfer_from_antenatal()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_antenatal()">Transfer to Radiology</li>
                </ul>
            </div>
        </table>
                 <!-----DOCTOR APPOITMENT--->
                 <div class="doctor_appoitment3 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment3()"></i>
            <span>Doctor Appoitment</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>


                   <!-----LABOUR WARD APPOITMENT--->
                   <div class="labour_ward_appoitment3 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment3()"></i>
            <span>Labour Ward Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>


              <!-----LABOURATORY APPOITMENT--->
              <div class="lab_appoitment3 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment3()"></i>
            <span>Labouratory Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>


                      <!-----RADIOLOGY APPOITMENT--->
                      <div class="radiology_appoitment3 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment3()"></i>
            <span>Radiology Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

    </div>
</div>
<div class="background_opacity3 hide"></div>
  </div>
  </div>
   <!----END OF ANTENATAL LIST -->

        <!----START OF THE ANTENATAL PATIENT PROFILE -->
        <div class="antenatal_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
            <h1>Medical Inputs</h1>
            <!---Vital Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="vital_button">Vitals</div>
            <div class="vitals_input hide">
                <form action="" class="_inputs">
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Height of Fundus</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Presentation and Position</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Relation of presenting part to brim</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Fostal Heart</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Urine</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">B.P</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Weight</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">P.C.V</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Oedema</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Remark</label>
                     <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="drug_prescription_button">Drug Prescription</div>
            <div class="drug_prescribtion hide">
            <form action="" class="_inputs">
            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                  </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button class="btn_patients_profile btn_white">Book Drugs</button>
                  </form>
            </div>

                  <!---Screening Examination Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="screening_button">Screening Examination</div>
            <div class="screening_input hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                <div class="flex_div">
                    <div class="form_control">
                        <label for="">Genetic Screening and Testing</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Group B Streptococcus (GBS) Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Gestational Age assement</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Cervical Screening</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <span>Screening for Infection</span><br/>
                        <div class="flex_wrap">
                        <div class="div">
                        <label for="">Hiv Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Syphilis Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Hepatitis B Surface Antigen Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Rubella Immunity Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        <div class="div">
                        <label for="">Gonorrhea and Chlamydia Test</label>
                        <div class="checkbox">
                            <label for="">Positive
                                <input type="checkbox" name="" id="">
                            </label>
                            <label for="">Negative
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <button class="btn_patients_profile">Save all</button>
  </div>


<!----ANTENATAL PATIENT HOSPITAL RECORD INFORMATION-->
<div class="patient_container2">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
        <h3>Personal Information</h3>
        <span>Full Name: Moses Patrick Samuel</span>
        <span>Date of Birth: 7-03-2023</span>
        <span>Address: 23 Enebong Street Calabar</span>
        <span>Contact Number: 090328922</span>

        <h3>Spouse/Partner Information</h3>
        <span>Full Name: Esther Asuquo Etim</span>
        <span>Contact Number: 0907832832</span>
    </div>
    <div class="patient_inputs">
        <div class="_vital_info">
        <div class="_btn_info" id="antenatal_successful_vital">Vitals</div>
        <div class="_btn_flexs hide">
          <div class="_btn" id="_vital_1">Vitals/Data (8:30pm 13-09-2023)</div>
          <div class="_data hide" id="_data_1">
                    <div class="form_control">
                        <label for="">Height of Fundus</label>
                        <span>78.00</span>
                    </div>
                    <div class="form_control">
                        <label for="">Presentation and Position</label>
                        <span>23.033</span>
                    </div>
                    <div class="form_control">
                        <label for="">Relation of presenting part to brim</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Fostal Heart</label>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <label for="">Urine</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">B.P</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Weight</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Weight</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">P.C.V</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Oedema</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Remark</label>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolorem magni eligendi autem eveniet ipsam dicta incidunt veniam sed? Ut ab maiores adipisci! Placeat repellendus, eveniet culpa non quis natus?</span>
                    </div>
          </div>
          <div class="_btn">Vitals/Data (8:30pm 13-09-2023)</div>
          </div>
    </div>
    <div class="_btn_info" onclick="_antenatal_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_lab()">Labouratory Examination</div>
    <table class="lab hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_rad()">Radiology Examination</div>
    <table class="rad hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_antenatal_successfull_screening()">Screnning Examination</div>
    <div class="_screening_div hide"  id="screening_div">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae, ipsam doloribus amet molestias nemo atque ducimus, eum eaque veritatis praesentium, debitis dignissimos eius. Accusantium iure quisquam libero quae fugit?
        Vitae corporis, totam doloremque ducimus iusto veritatis nam doloribus laudantium, officiis delectus fugiat nobis in tenetur commodi libero veniam animi soluta culpa iure. Ipsam nostrum et, laborum perspiciatis voluptate cupiditate.
        Ab dolorum et, voluptates aperiam delectus ea a. Provident harum alias omnis pariatur quia corporis odio, reiciendis aliquid qui sunt sequi officia quis incidunt debitis? Illum cupiditate corporis laboriosam vero!
        Fuga, id. Voluptatem aperiam a ratione sit fuga non cumque id laboriosam, recusandae veniam qui pariatur quisquam amet obcaecati odio ad aliquam quaerat, autem inventore provident! Impedit suscipit unde totam.
        Soluta, deleniti totam cupiditate distinctio a dolores aliquam dignissimos fugiat hic quae rem! Aperiam, dolorem corporis impedit recusandae eos laborum molestias sint iste eum quos? Dolorem saepe accusamus dignissimos fugit?
        Nihil totam natus tempore, voluptatem repellendus hic autem odit? Maxime, repellendus? Ducimus eaque aut reiciendis minima pariatur odio. Autem odit facilis molestiae reprehenderit omnis accusantium rem quae ducimus, cum quis!
        Alias nesciunt distinctio ad laborum suscipit quos voluptatibus quod beatae enim autem, officia maiores commodi consequuntur totam repellat nisi magnam natus nihil, molestias nobis accusantium sed quis ab quidem. Voluptatibus?
        Quam temporibus harum ipsa consequuntur at. Ducimus consequuntur iusto eligendi similique tempora! Dicta, at similique sit, quam possimus nesciunt ab vero libero consequuntur, quae repudiandae minima repellat repellendus ut animi!
        Quia aliquam porro dolor, mollitia architecto aliquid veniam accusantium animi molestiae obcaecati aspernatur laboriosam id cum incidunt commodi harum? Vero perferendis atque earum commodi nesciunt. Officiis ducimus facere vitae quas!
        Repellat eius omnis consequatur nam numquam architecto commodi ipsam! Ut rerum corrupti ipsa possimus odit tempora commodi perferendis neque iure quasi itaque dolores illo, architecto dignissimos, dolorum blanditiis incidunt. Necessitatibus.
        Consequatur sunt excepturi modi voluptas fugit eum quasi possimus maiores earum repellendus illo veniam officiis doloremque doloribus illum molestias iure, blanditiis suscipit expedita totam? Voluptatum magnam sit accusamus necessitatibus eveniet.
        Esse similique corporis animi itaque quas reiciendis enim asperiores adipisci beatae ullam vero odio ratione optio perspiciatis odit, modi labore explicabo nesciunt nisi quo cum omnis repellendus quod porro? Libero.
    </div>
    </div>
</div>
</div>
  </div>
     <!----END OF THE ANTERNATAL -->













            <!----START OF THE POSTNATAL FORM-->
            <div class="postnal_section hide">
           <div class="form_container_for_postnatal">
               <form action="">
            <i class="bi bi-x-lg white"  id="close_postnatal" onclick="_close_transfer_patient_from_labour_to_postnatal()"></i>
        <h2>Postnatal Registration Form</h2>
        <div class="upload_image_postnatal">
             <video id="videoElement_postnatal" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_postnatal" onclick="openCamera1()"></i>
            <canvas id="canvasElement_postnatal" style="display: none;"></canvas>
            <img id="capturedImage_postnatal" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture1 hide"  onclick="retakePicture1()">Recapture</div>
        <div class="btn_capture1 hide" onClick="takePicture1()">Capture</div>
    </div>
        <span>Patient Info</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text" placeholder="Calabar">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 238 323 33">
        </div>
        <div class="form_control">
        <label for="">Occupation</label>
        <input type="text" placeholder="Banker">
        </div>
        <div class="form_control">
        <label for="">Next of Kin</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Relationship to Patient</label>
        <input type="text" placeholder="Relation">
        </div>
        <div class="form_control">
        <label for="">Next of Kin's Phone Number</label>
        <input type="text" placeholder="+234 323 323 22">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Gestational Age</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Complications during Pregnacy</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medical Conditions/Allergies</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Previous Pregnacies/Births</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medications/Supplements during Pregnacy</label>
        <input type="text" placeholder="input">
        </div>
        </div>

        <span>Delivery Details</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Date of Delivery</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Time of Delivery</label>
        <input type="time">
        </div>
        <div class="form_control">
        <label for="">Mode of Delivery</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Birth Weight of Baby</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Apgar Scores</label>
        <input type="text" placeholder="input"> 
        </div>
        <div class="form_control">
        <label for="">Complications During Delivery</label>
        <input type="text" placeholder="input">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE POSTNATAL FORM-->

          

                <!----START OF THE POSTNATAL LIST-->
                <div class="postnatal_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Postnatal Patient Admission List</h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <td>S/N</td>
                    <td>Patient Profile</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Date of Admission</td>
                </thead>
                <tbody onclick="postnatal_patient_profile_section()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon2" onclick="_transfer_dropdowns2()"></i>
                    </td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon2" onclick="_transfer_dropdowns2()"></i>
                    </td>
                </tbody>
                <div class="tranfer_box2 hide">
                    <i class="bi bi-x-lg red"  onclick="_close_transfer_dropdowns2()"></i>
                <ul>
                    <li onclick="_nurse_transfer_from_postnatal()">Call in Nurse Station</li>
                    <li onclick="_doc_transfer_from_postnatal()">Doctor Appoitment</li>
                    <li onclick="postnatal_ward()">Transfer to Postnatal Ward</li>
                    <li onclick="_lab_transfer_from_postnatal()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_postnatal()">Transfer to Radiology</li>
                </ul>
            </div>
            </table>
            
             <!-----NURSE APPOITMENT--->
             <div class="nurse_appoitment2 hide">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment2()"></i>
                <span>Nurse Station</span>
                <form action="" id="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
                </form>
            </div>


              <!-----DOCTOR APPOITMENT--->
              <div class="doctor_appoitment2 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment2()"></i>
            <span>Doctor Appoitment</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

          
   <!-----POSTNATAL WARD--->
   <div class="postnatal_ward hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment2()"></i>
            <span>Postnatal Ward</span>
            <form action="">
                <div class="form_control">
                    <label for="">Ward  1</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Ward  2</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Ward  3</label>
                    <select name="" id="">
                        <option value="">Bed 1</option>
                        <option value="">Bed 2</option>
                        <option value="">Bed 3</option>
                        <option value="">Bed 4</option>
                        <option value="">Bed 5</option>
                        <option value="">Bed 6</option>
                        <option value="">Bed 7</option>
                    </select>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>


           <!-----LABOURATORY APPOITMENT--->
           <div class="lab_appoitment2 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment2()"></i>
            <span>Labouratory Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

    <!-----RADIOLOGY APPOITMENT--->
    <div class="radiology_appoitment2 hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment2()"></i>
            <span>Radiology Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

        </div>
    </div>
    <div class="background_opacity2 hide"></div>
  </div>
   <!----END OF THE POSTNATAL LIST-->

      <!----START OF THE POSTNATAL PATIENT PROFILE -->
      <div class="postnatal_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
            <h1>Medical Inputs</h1>
                              <!---Pastnatal accessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <div class= "btn_patients_profile" id="postnatal_assessment_button"> Postnatal Assessment</div>
                    <div class="postnatal_accessment_form hide">
                        <form action="">
                        <span>Mother's Vital Sign:</span>
                            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Temperature (C)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Blood Pressure (mmHg)</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Pulse (bpm)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Respiratory Rate (breaths/min)</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Uterine Involution</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Perineal/Abdominal Wounds</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Assessment of Breastfeeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Immediate Concerns/Complications</label>
                                    <input type="text" name="" id="" >
                                </div>
                            </div>
                        </form>
                    </div>

                                      <!---Neonatal assessment Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                    <div class= "btn_patients_profile" id="neonatal_assessment_button"> Neonatal Assessment</div>
                    <div class="neonatal_assessmen_form hide">
                        <form action="">
                        <span>Baby's Condition:</span>
                            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Feeding</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Urination</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Bowel Movements</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form_control">
                                    <label for="">Signs of Jaundice or other concerns</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Medications/Treatments Administered</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Laboratory and Diagnostic Tests</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                        </form>
                        </div>
                                          <!---Drug Prescription Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
                        <div class= "btn_patients_profile" id="drug_prescription_button2"> Drug Prescription</div>
                        <div class="drug_prescribtion2 hide">
                        <form action="">
                        <span>Drug Prescribion</span>
                        <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                                </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button class="btn_patients_profile btn_white">Book Drugs</button>
                        </form>
                        </div>
                        <button class="btn_patients_profile">Save all</button>
                    </div>
                   <!----POSTNATAL PATIENT HOSPITAL RECORD INFORMATION----->
<div class="patient_container2">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
        <h3>Personal Information</h3>
        <span>Full Name: Moses Patrick Samuel</span>
        <span>Date of Birth: 7-03-2023</span>
        <span>Address: 23 Enebong Street Calabar</span>
        <span>Contact Number: 090328922</span>

        <h3>Spouse/Partner Information</h3>
        <span>Full Name: Esther Asuquo Etim</span>
        <span>Contact Number: 0907832832</span>
    </div>
    <div class="patient_inputs">
        <div class="_vital_info">
        <div class="_btn_info" id="_postnatal_assessment_input">Postnatal Assessment</div>
          <div class="_data hide" id="_postnatal_assessment_data_1">
                    <div class="form_control">
                        <label for="">Temperature (C)</label>
                        <span>78.00</span>
                    </div>
                    <div class="form_control">
                        <label for="">Blood Pressure (mmHg)</label>
                        <span>23.033</span>
                    </div>
                    <div class="form_control">
                        <label for="">Pulse (bpm)</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Respiratory Rate (breaths/min)</label>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <label for="">Assessment of Uterine Involution</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Assessment of Perineal/Abdominal Wounds</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Assessment of Breastfeeding</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Immediate Concerns/Complications</label>
                        <span>Input</span>
                    </div>
          </div>
        <div class="_btn_info" id="_neonatal_assessment_input">Neonatal Assessment</div>
          <div class="_data hide" id="_neonatal_assessment_data_1">
                    <div class="form_control">
                        <label for="">Feeding</label>
                        <span>78.00</span>
                    </div>
                    <div class="form_control">
                        <label for="">Urination</label>
                        <span>23.033</span>
                    </div>
                    <div class="form_control">
                        <label for="">Bowel Movements</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Signs of Jaundice or other concerns</label>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <label for="">Medications/Treatments Administered</label>
                        <span>Input</span>
                    </div>
                    <div class="form_control">
                        <label for="">Laboratory and Diagnostic Tests</label>
                        <span>Input</span>
                    </div>
          </div>
    </div>
    <div class="_btn_info" onclick="_postnatal_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_lab()">Labouratory Examination</div>
    <table class="lab2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_rad()">Radiology Examination</div>
    <table class="rad2 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_postnatal_successfull_screening()">Screnning Examination</div>
    <div class="_screening_div hide" id="screening_div2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae, ipsam doloribus amet molestias nemo atque ducimus, eum eaque veritatis praesentium, debitis dignissimos eius. Accusantium iure quisquam libero quae fugit?
        Vitae corporis, totam doloremque ducimus iusto veritatis nam doloribus laudantium, officiis delectus fugiat nobis in tenetur commodi libero veniam animi soluta culpa iure. Ipsam nostrum et, laborum perspiciatis voluptate cupiditate.
        Ab dolorum et, voluptates aperiam delectus ea a. Provident harum alias omnis pariatur quia corporis odio, reiciendis aliquid qui sunt sequi officia quis incidunt debitis? Illum cupiditate corporis laboriosam vero!
        Fuga, id. Voluptatem aperiam a ratione sit fuga non cumque id laboriosam, recusandae veniam qui pariatur quisquam amet obcaecati odio ad aliquam quaerat, autem inventore provident! Impedit suscipit unde totam.
        Soluta, deleniti totam cupiditate distinctio a dolores aliquam dignissimos fugiat hic quae rem! Aperiam, dolorem corporis impedit recusandae eos laborum molestias sint iste eum quos? Dolorem saepe accusamus dignissimos fugit?
        Nihil totam natus tempore, voluptatem repellendus hic autem odit? Maxime, repellendus? Ducimus eaque aut reiciendis minima pariatur odio. Autem odit facilis molestiae reprehenderit omnis accusantium rem quae ducimus, cum quis!
        Alias nesciunt distinctio ad laborum suscipit quos voluptatibus quod beatae enim autem, officia maiores commodi consequuntur totam repellat nisi magnam natus nihil, molestias nobis accusantium sed quis ab quidem. Voluptatibus?
        Quam temporibus harum ipsa consequuntur at. Ducimus consequuntur iusto eligendi similique tempora! Dicta, at similique sit, quam possimus nesciunt ab vero libero consequuntur, quae repudiandae minima repellat repellendus ut animi!
        Quia aliquam porro dolor, mollitia architecto aliquid veniam accusantium animi molestiae obcaecati aspernatur laboriosam id cum incidunt commodi harum? Vero perferendis atque earum commodi nesciunt. Officiis ducimus facere vitae quas!
        Repellat eius omnis consequatur nam numquam architecto commodi ipsam! Ut rerum corrupti ipsa possimus odit tempora commodi perferendis neque iure quasi itaque dolores illo, architecto dignissimos, dolorum blanditiis incidunt. Necessitatibus.
        Consequatur sunt excepturi modi voluptas fugit eum quasi possimus maiores earum repellendus illo veniam officiis doloremque doloribus illum molestias iure, blanditiis suscipit expedita totam? Voluptatum magnam sit accusamus necessitatibus eveniet.
        Esse similique corporis animi itaque quas reiciendis enim asperiores adipisci beatae ullam vero odio ratione optio perspiciatis odit, modi labore explicabo nesciunt nisi quo cum omnis repellendus quod porro? Libero.
    </div>
    </div>
</div>
</div>
                </div>
                    </div>
                       <!----END OF THE POSTNATAL -->















   <!----START OF THE LABOUR FORM-->
   <div class="labour_section hide">
           <div class="form_container_for_labor">
        <form action="">
        <i class="bi bi-x-lg white"  id="close_labor" onclick="_close_transfer_patient_from_antenatal_to_labour()"></i>
        <h2>Labour Registration Form</h2>
        <div class="upload_image_labor">
             <video id="videoElement_labor" width="400" height="300" autoplay></video>
            <i class="bi bi-plus" id="capture_image_labor" onclick="openCamera3()"></i>
            <canvas id="canvasElement_labor" style="display: none;"></canvas>
            <img id="capturedImage_labor" style="display: none;">
        </div>
        <div class="flex_capture_div">
        <div class="btn_re_capture3 hide"  onclick="retakePicture3()">Recapture</div>
        <div class="btn_capture3 hide" onClick="takePicture3()">Capture</div>
    </div>
        <span>Patient Info</span>
        <div class="sections">
    <div class="form_control">
        <label for="">Full name</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Date of Birth</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Address</label>
        <input type="text" placeholder="Calabar">
        </div>
        <div class="form_control">
        <label for="">Contact Number</label>
        <input type="text" placeholder="+234 238 323 33">
        </div>
        <div class="form_control">
        <label for="">Occupation</label>
        <input type="text" placeholder="Banker">
        </div>
        <div class="form_control">
        <label for="">Next of Kin</label>
        <input type="text" placeholder="John Smith">
        </div>
        <div class="form_control">
        <label for="">Next of Kin's Phone Number</label>
        <input type="text" placeholder="+234 323 323 22">
        </div>
        </div>

        <span>Medical History</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Antenatal  Clinic Attended</label>
        <input type="text" placeholder="input">
       </div>
       <div class="form_control">
        <label for="">Expected Due date of Delivery</label>
        <input type="date" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Number of Pregnacies and Live Births</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Blood Group</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Rhesus Factor</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Hiv Status</label>
        <input type="text" placeholder="input">
        </div>
       <div class="form_control">
        <label for="">Medical Condition</label>
        <input type="text" placeholder="input">
        </div>
        </div>

        <span>Labour Details</span>
        <div class="sections">
        <div class="form_control">
        <label for="">Date of Onset of Labor</label>
        <input type="date">
        </div>
        <div class="form_control">
        <label for="">Time of Onset of Labor</label>
        <input type="time">
        </div>
        <div class="form_control">
        <label for="">Duration of Labor</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Constration</label>
        <input type="text" placeholder="input">
        </div>
        <div class="form_control">
        <label for="">Fetal Movements</label>
        <input type="text" placeholder="input"> 
        </div>
        <div class="form_control">
        <label for="">Pain Level</label>
        <input type="text" placeholder="input">
        </div>
        </div>
        <button class="btn_submit" type="button">Book</button>
        </form>
        </div>
          <!----END OF THE LABOUR FORM-->

          
                <!----START OF THE LABOUR LIST-->
                <div class="labor_list">
    <div class="table_container">
            <div class="search_bar_container">
                <h2>Labour Patient Admission List</h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table>
                <thead>
                    <td>S/N</td>
                    <td>Patient Profile</td>
                    <td>Patient Name</td>
                    <td>Patient ID</td>
                    <td>Date of Admission</td>
                </thead>
                <tbody onclick="labour_patient_profile_section()">
                    <td>1</td>
                    <td>
                        <img src="../images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                    </td>
                    <td>Esther Patrick</td>
                    <td>PAT0001</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon"></i>
                    </td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>
                        <img src="../images/0ba77c2878729044df4c28ba1830bbad.jpg" alt="">
                    </td>
                    <td>Mercy Patrick</td>
                    <td>PAT0002</td>
                    <td>22-09-2023</td>
                    <td>
                        <i class="bi bi-three-dots" id="_transfer_icon"></i>
                    </td>
                </tbody>
                <div class="tranfer_box hide">
                    <i class="bi bi-x-lg red"  onclick="_close_transfer_dropdowns()"></i>
                <ul>
                    <li onclick="_nurse_transfer_from_labour()">Call in Nurse Station</li>
                    <li onclick="_doc_transfer_from_labour()">Doctor Appoitment</li>
                    <li onclick="_surgical_suite_transfer_from_labour()">Transfer to Surgical Suite</li>
                    <li onclick="_labour_transfer_from_labour()">Transfer to Labour Ward</li>
                    <li onclick="_lab_transfer_from_labour()">Transfer to Labouratory</li>
                    <li onclick="_radiology_transfer_from_labour()">Transfer to Radiology</li>
                    <li onclick="_icu_transfer_from_labour()">Transfer to I.C.U</li>
                    <li onclick="_transfer_patient_from_labour_to_postnatal()">Transfer to Postnatal Unit</li>
                </ul>
            </div>
            </table>
             <!-----NURSE APPOITMENT--->
             <div class="nurse_appoitment hide">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
                <span>Nurse Station</span>
                <form action="" id="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
                </form>
            </div>


            <!-----DOCTOR APPOITMENT--->
            <div class="doctor_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <span>Doctor Appoitment</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Available Doctors </label>
                    <select name="" id="">
                        <option value="">Doc. Patrick(Gynaecologist)</option>
                        <option value="">Doc. Miracle(Surgeon)</option>
                        <option value="">Doc. Moses(Medical Personel)</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                    <!-----SURGICAL SUITE APPOITMENT--->
                    <div class="surgical_suite_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <span>Surgical Suite Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----LABOUR WARD APPOITMENT--->
                        <div class="labour_ward_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <span>Labour Ward Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----LABOURATORY APPOITMENT--->
                        <div class="lab_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <span>Labouratory Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----RADIOLOGY APPOITMENT--->
                        <div class="radiology_appoitment hide">
            <i class="bi bi-x-lg red"onclick="_close_all_appoitment()"></i>
            <span>Radiology Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>

                        <!-----I.C.U APPOITMENT--->
            <div class="icu_appoitment hide">
            <i class="bi bi-x-lg red" onclick="_close_all_appoitment()"></i>
            <span>I.C.U Unit</span>
            <form action="">
                <div class="form_control">
                    <label for="">Patient Name</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Patient Id</label>
                    <input type="text" name="" id="">
                </div>
                <div class="form_control">
                    <label for="">Reasons for Booking</label>
                    <textarea name="" id="" cols="20" rows="10"></textarea>
                </div>
                <button class="btn_app">Request</button>
            </form>
            </div>
        </div>
    </div>
    <div class="background_opacity hide"></div>
  </div>
   </div>

   <!----START OF THE LABOUR PROFILE-->
           <div class="labour_patients_profile hide">
        <div class="patient_container">
            <div class="patient_profile">
                <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
                <div class="div_text">
                    <span>Esther Patrick Samuel</span>
                    <span>PAT0003</span>
                </div>
            </div>
            <h1>Medical Inputs</h1>
            <!---Vital Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="vital_button2">Vitals</div>
            <div class="vitals_input2 hide">
                <form action="" class="_inputs"> 
                <span>Blood Pressure</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <span>Pre-Labor Baseline</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <span>During Labour</span>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <span>Post Delivery</span>
                        <label for="">Systolic (mmHG)</label>
                        <input type="text" name="" id="">
                        <label for="">Diastolic (mmHG)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Pulse Rate</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Pre-Labor Baseline (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (bpm)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery (bpm)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Respiratory Rate</span>
                    <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Pre-Labor Baseline (breaths/min)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (breaths/min)</label>
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                    <span>Temperature</span>
                    <div class="div_flexs">
                    <div class="form_control">
                    <label for="">Pre-Labor Baseline (C/F)</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">During Labor (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Post Delivery (C/F)</label>
                        <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>

                          <!---Prescribtion Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="drug_prescription_button3">Drug Prescription</div>
            <div class="drug_prescribtion3 hide">
            <form action="" class="_inputs">
            <div class="div_flexs">
                                <div class="form_control">
                                    <label for="">Drugs</label>
                                    <input type="text" name="" id="drugs">
                                </div>
                                <div class="form_control">
                                    <label for="">Strength</label>
                                    <input type="text" name="" id="drugs_strength">
                                </div>
                                <div class="form_control">
                                    <label for="">Mode</label>
                                    <select name="" id="drug_mode">
                            <option value="">Tablet</option>
                            <option value="">Capsule</option>
                   </select>
                  </div>
                <div class="form_control">
                    <label for="">Frequency</label>
                    <select name="" id="drug_freq">
                    <option value="">2 Days</option>
                    <option value="">24 Hours</option>
                   </select>
                </div>
                <div class="form_control">
                    <label for="">Qty</label>
                    <input type="text" name="" id="drug_qty">
                </div>
                <i class="fa-solid fa-prescription-bottle-medical add_icon" ></i>
                </div>
                <button type="button" class="btn_patients_profile btn_white" onclick="_bookDrugs()">Book Drugs</button>
                  </form>
            </div>

                  <!---Screening Input-----> <!---THIS WOULD BE SAVED TO THE DB-->
            <div class="btn_patients_profile" id="screening_button2">Screening Examination</div>
            <div class="screening_input2 hide">
                <form action="" class="_inputs">
                <div class="div_flexs">
                    <div class="form_control">
                        <label for="">Continous Fetal Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Cervical Dilatation Assessment</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Vaginal Examination</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Group B Streptococcus (GBS) Status Check</label>
                              <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Blood Pressure Monitoring</label>
                              <input type="text" name="" id="">
                    </div>
                    </div>
                </form>
            </div>
            <button class="btn_patients_profile">Save all</button>
        </div>
             <!----POSTNATAL PATIENT HOSPITAL RECORD INFORMATION----->
<div class="patient_container2">
    <h1>Patient Hospital Records</h1>
<div class="all_info">
    <div class="patient_personal_info">
        <h3>Personal Information</h3>
        <span>Full Name: Moses Patrick Samuel</span>
        <span>Date of Birth: 7-03-2023</span>
        <span>Address: 23 Enebong Street Calabar</span>
        <span>Contact Number: 090328922</span>

        <h3>Spouse/Partner Information</h3>
        <span>Full Name: Esther Asuquo Etim</span>
        <span>Contact Number: 0907832832</span>
    </div>
        <div class="_btn_info" id="_labour_vital_input">Vitals</div>
          <div class="_data hide" id="labour_vital">


            <h3>Blood Pressure</h3>
            <div class="flexs">
                    <div class="form_control">
                        <h4>Pre-Labor Baseline</h4>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form_control">
                        <h4>During Labour</h4>
                        <h4>Time</h4>
                        <span>23:33</span>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    <div class="form_control">
                        <h4>Post Delivery</h4>
                        <h4>Systolic (mmHG)</h4>
                        <span>78.00</span>
                        <h4>Diastolic (mmHG)</h4>
                        <span>78.00</span>
                    </div>
                    </div>


                    <h3>Pulse Rate</h3>
                    <div class="flexs">
                    <div class="form_control">
                        <h4>Pre-Labor Baseline (bpm)</h4>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <h4>During Labor (bpm)</h4>
                        <h4>Time</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form_control">
                        <h4>Post Delivery (bpm)</h4>
                        <span>832</span>
                    </div>
                    </div>


                    <h3>Respiratory Rate</h3>
                    <div class="flexs">
                    <div class="form_control">
                        <h4>Pre-Labor Baseline (breaths/min)</h4>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <h4>During Labor (breaths/min)</h4>
                        <h4>Time</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form_control">
                        <h4>Post Delivery</h4>
                        <span>832</span>
                    </div>
                    </div>


                    <h3>Temperature</h3>
                    <div class="flexs">
                    <div class="form_control">
                        <h4>Pre-Labor Baseline (C/F)</h4>
                        <span>323</span>
                    </div>
                    <div class="form_control">
                        <h4>During Labor (C/F)</h4>
                        <span>22:20</span>
                    </div>
                    <div class="form_control">
                        <h4>Post Delivery (C/F)</h4>
                        <span>832</span>
                    </div>
                    </div>
          </div>


    <div class="_btn_info" onclick="_labour_successfull_drug_prescription()">Drug Prescriptions</div>
    <table class="drug_prescription3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Drugs</td>
            <td>Strength</td>
            <td>Mode</td>
            <td>Frequency</td>
            <td>Quantity</td>
        </thead>
        <tbody>
            <td>23-09-2023</td>
            <td>21:19pm</td>
            <td>Maleria Drugs</td>
            <td>2 dose</td>
            <td>Tablet</td>
            <td>24/7</td>
            <td>2</td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_lab()">Labouratory Examination</div>
    <table class="lab3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td>Immunoassay Single Tests</td>
            <td>Drug Screening Test</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_rad()">Radiology Examination</div>
    <table class="rad3 hide">
        <thead>
            <td>Date</td>
            <td>Time</td>
            <td>Kind of Test</td>
            <td>Test Specific</td>
            <td>Test Result</td>
        </thead>
        <tbody>
            <td> 22-09-2023</td>
            <td>2:40pm</td>
            <td> 	X-ray (Radiography)</td>
            <td>Cervical Spine X-ray</td>
            <td><i class="bi bi-download"></i></td>
        </tbody>
    </table>
    <div class="_btn_info" onclick="_labour_successfull_screening()">Screnning Examination</div>
    <div class="_screening_div hide" id="screening_div3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae, ipsam doloribus amet molestias nemo atque ducimus, eum eaque veritatis praesentium, debitis dignissimos eius. Accusantium iure quisquam libero quae fugit?
        Vitae corporis, totam doloremque ducimus iusto veritatis nam doloribus laudantium, officiis delectus fugiat nobis in tenetur commodi libero veniam animi soluta culpa iure. Ipsam nostrum et, laborum perspiciatis voluptate cupiditate.
        Ab dolorum et, voluptates aperiam delectus ea a. Provident harum alias omnis pariatur quia corporis odio, reiciendis aliquid qui sunt sequi officia quis incidunt debitis? Illum cupiditate corporis laboriosam vero!
        Fuga, id. Voluptatem aperiam a ratione sit fuga non cumque id laboriosam, recusandae veniam qui pariatur quisquam amet obcaecati odio ad aliquam quaerat, autem inventore provident! Impedit suscipit unde totam.
        Soluta, deleniti totam cupiditate distinctio a dolores aliquam dignissimos fugiat hic quae rem! Aperiam, dolorem corporis impedit recusandae eos laborum molestias sint iste eum quos? Dolorem saepe accusamus dignissimos fugit?
        Nihil totam natus tempore, voluptatem repellendus hic autem odit? Maxime, repellendus? Ducimus eaque aut reiciendis minima pariatur odio. Autem odit facilis molestiae reprehenderit omnis accusantium rem quae ducimus, cum quis!
        Alias nesciunt distinctio ad laborum suscipit quos voluptatibus quod beatae enim autem, officia maiores commodi consequuntur totam repellat nisi magnam natus nihil, molestias nobis accusantium sed quis ab quidem. Voluptatibus?
        Quam temporibus harum ipsa consequuntur at. Ducimus consequuntur iusto eligendi similique tempora! Dicta, at similique sit, quam possimus nesciunt ab vero libero consequuntur, quae repudiandae minima repellat repellendus ut animi!
        Quia aliquam porro dolor, mollitia architecto aliquid veniam accusantium animi molestiae obcaecati aspernatur laboriosam id cum incidunt commodi harum? Vero perferendis atque earum commodi nesciunt. Officiis ducimus facere vitae quas!
        Repellat eius omnis consequatur nam numquam architecto commodi ipsam! Ut rerum corrupti ipsa possimus odit tempora commodi perferendis neque iure quasi itaque dolores illo, architecto dignissimos, dolorum blanditiis incidunt. Necessitatibus.
        Consequatur sunt excepturi modi voluptas fugit eum quasi possimus maiores earum repellendus illo veniam officiis doloremque doloribus illum molestias iure, blanditiis suscipit expedita totam? Voluptatum magnam sit accusamus necessitatibus eveniet.
        Esse similique corporis animi itaque quas reiciendis enim asperiores adipisci beatae ullam vero odio ratione optio perspiciatis odit, modi labore explicabo nesciunt nisi quo cum omnis repellendus quod porro? Libero.
    </div>
    </div>
</div>
</div>

  <div class="drugs_booking hide">
  <i class="bi bi-x-lg" id="close" onclick="_close_bookDrugs()"></i>
    <h1>Drug Booking</h1>
    <table id="dataTable3">
        <thead>
            <td>Drugs Name</td>
            <td>Strength </td>
            <td>Mode </td>
            <td>Frequency </td>
            <td>Quantity </td>
        </thead>
        <tbody>
          
        </tbody>
    </table>
    <button>Book now</button>
    </div>
  </div>

  <div class="overlay hide"></div>
     <!----END OF LABOUR-->


<!---END OF THE CODE WRITTEN BY KING--->

        <script src="js/jquery-3.7.1.js"></script>
<script src="js/martanity.js"></script>
</body>
</html>