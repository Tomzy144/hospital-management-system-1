<?php include '../backend/config/connection.php';?>
<?php include '../config/doctor-session-validation.php';?>


<?php
$doctor_id = $_POST['doctor_id'];
?>

    

<?php    

$fetch_doctor_profile = $callclass->_get_doctor_details($conn, $s_doctor_id);
$doctor_profile_array = json_decode($fetch_doctor_profile, true);
$fullname = $doctor_profile_array[0]['fullname'];
$email = $doctor_profile_array[0]['email'];
$phonenumber = $doctor_profile_array[0]['phonenumber'];
// $role_id= $doctor_profile_array[0]['role_id'];
$status_id = $doctor_profile_array[0]['status_id'];
$date = $doctor_profile_array[0]['date'];
$last_login = $doctor_profile_array[0]['last_login'];
$passport = $doctor_profile_array[0]["passport"]; 
$fetch_status = $callclass->_get_status_details($conn, $status_id);
$status_array = json_decode($fetch_status, true);
$status_name = $status_array[0]['status_name'];
?>

<?php 
$page = "doctor_dash"; // Assign the value "doctor_dash" to the $page variable
?>



<?php 
    


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    ?>



<?php
    $fetch_appointment = $callclass->_get_appointment_details($conn, $s_doctor_id);
    $doctor_appointment_array = json_decode($fetch_appointment, true);

    // Check if decoding was successful
    if ($doctor_appointment_array !== null) {
        // Access values from the decoded array
        $apatient_name = $doctor_appointment_array[0]['patient_name'];
        $email = $doctor_appointment_array[0]['email'];
        $phonenumber = $doctor_appointment_array[0]['phonenumber'];
        $role_id = $doctor_appointment_array[0]['role_id'];
        $status_id = $doctor_appointment_array[0]['status_id'];
        $passport = $doctor_appointment_array[0]['passport'];
        $appointment_date = $doctor_appointment_array[0]['appointment_date'];
        $appointment_reason = $doctor_appointment_array[0]['reason'];

        // Now you can use these variables as needed in your code
    } else {
        // Handle the case where decoding failed
        echo "Failed to decode JSON";
    }

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <!-- <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href='css/awesome-font/css/font-awesome.min.css'>
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<?php include 'meta.php'?>
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
    <div class="navbar" >

        <div class="section1">
        <i class="fa fa-long-arrow-left hide " id="back-arrow" onclick="backWardArrow()"></i>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
</svg> -->
        <button class="hide" id="btn_appoitment" onClick="appoitment_booking()">Make an Appoitment</button>
        </div>
        <div class="section2">
            <div class="icons">
            <i class="bi bi-person-fill" id="icon">
        <div class="notification2">15</div>
        </i>

        <i class="bi bi-bell-fill" id="icon">
            <div class="notification1">9</div>
            </i>
            </div>
            <div class="profile">
                <div class="profile_account hide">
                <img id="image_profile_account" src="<?php echo $website_url ?>/doctor/images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                <h4><?php echo $fullname ?></h4>
                <button class="btn_submit">Upload Image</button>
                <span>change password</span>
            </div>
                <div class="image">
                <img src="<?php echo $website_url ?>/doctor/images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                <div class="active_on"></div>
                </div> 
                <span><?php echo $fullname ?></span>
                <i class="bi bi-caret-down-fill"  id="icon-drop" onClick="click_icon_for_profile()"></i>
            </div>
        </div>
    </div>

    <div class="sidebar">
            <div class="sidebar_contents">
            <img width="80px" height="80px" src="<?php echo $website_url ?>/doctor/images/Mount Tech Logo.jpg" alt="logo">
            </div>
        <div class="sidebar_icons">
        <i class="bi bi-chat-dots-fill icons"></i>
        <i class="bi bi-calendar-date-fill icons"></i>

            <i class=" bi-box-arrow-right icons"  onclick="document.getElementById('logoutform').submit();"></i>
            <form method="post" action="<?php echo $website_url ?>/config/code.php" id="logoutform">
                <input type="hidden" name="action" value="logout"/>    
            </form>
        </div>
    </div>

   <!---Script for dashboard-->
    <div class="container">
        <div class="contents" >
            <div class="head-sec">
                <span style="color:black;">Appoitment Details</span>
                        <div class="appoitment_input_control">
                            <i class="fa fa-search" id="search-icon"></i>
                            <input type="text" placeholder="Search here" class="appoitment_input">
                        </div>
            </div>

            <div class="body_sec" id="appointmentDetailsContainer">
                <?php
                    $sql = "SELECT * FROM appointment_tab WHERE doctor_id ='$s_doctor_id'";
                    $result = $conn->query($sql);
                    ?>
                    <table id="appointment_table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>PASSPORT</td>
                                <td>Patient Name</td>
                                <td>Patient ID</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Request Type</td>
                                <td>Accept</td>
                                <td>Reject</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $appointmentCount = 0; // Initialize appointment count
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $appointmentCount++; // Increment appointment count for each row
                                    echo "<tr>";
                                    echo "<td id=\"appointment_count\">" . $appointmentCount . "</td>"; // Display appointment count
                                    echo "<td>" . $row["patient_passport"] . "</td>";
                                    echo "<td>" . $row["patient_name"] . "</td>";
                                    echo "<td>" . $row["patient_id"] . "</td>";
                                    echo "<td>" . $row["appointment_date"] . "</td>";
                                    echo "<td>" . $row["time"] . "</td>";
                                    echo "<td>" . $row["reason"] . "</td>";
                                    echo "<td>";
                                    ?>
                                    <button class="accept_button" type="button"  onClick="accept('<?php echo $row["patient_id"]; ?>')">Accept</button>
                                    <?php
                                    echo "</td>";
                                    echo "<td>";
                                    ?>
                                <button class="button_reject" onClick="reject('<?php echo $row["patient_id"]; ?>')">Reject</button>
                                    <?php
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>No records found</td></tr>";
                            }
                        ?>
                </tbody>
                    </table>



                <!-- <div class="pending_appoitment_list_pagination">
                        <div class="flexs">
                            <p id="prev">Prev List</p>
                            <p id="next">Next List</p>
                        </div>
                </div> -->

                

                <script>
              function accept(patient_Id) {
                // Fade in elements with class 'all_sections_input'
                $('.all_sections_input').fadeIn(500);

                // Construct data string to send in the AJAX request
                var dataString = 'patient_Id=' + patient_Id;

                // Perform AJAX request
                $.ajax({
                    type: "POST", // HTTP method
                    url: 'config/display.php', // URL of the PHP script
                    data: dataString, // Data to send with the request
                    cache: false, // Disable caching
                    success: function(html) {
                        // On success, update content of elements with class 'all_sections_input' with the received HTML
                        $('.all_sections_input').html(html);

                        // Hide container with ID 'appointmentDetailsContainer'
                        var container = document.getElementById('appointmentDetailsContainer');
                        container.style.display = "none";

                        // Remove 'hide' class from elements with class 'all_sections_input'
                        var hidden = document.querySelector(".all_sections_input");
                        hidden.classList.remove("hide");
                    }
                });
                                document.addEventListener('click', function(event) {
                    console.log('Event type:', event.type); // Output the type of event
                    console.log('Event target:', event.target); // Output the target of the event
                });

            }



                    function reject(patient_Id) {
                        // delete_input(patient_Id);
                        alert("Rejected patient with ID: " + patient_Id);
                    }

                   
                </script>   


            </div>
            
            <div class="all_sections_input hidden"></div>

                <!----Start from here-->
               
               
         
        </div>
       
    </div>
    </div>
  
    <div class="appoitment_section hidden">
        <div class="appoitment_container">
            <section class="doctor_roles_name hide">
                <i class="fa fa-times" id="close_appoitment_form" onClick="close_appoitment_form()"></i>
            <div class="appoitment-calender">
                <div class="doc_roles">
            <label for="roles">Specialist</label>
<select id="roles"  onclick="getDoctors()">
<option>Select</option>
<option value="cardiologist">Cardiologist</option>
<option value="dermatologist">Dermatologist</option>
<option value="surgeon">Surgeon</option>
<option value="psychiatrist">Psychiatrist:</option>
<option value="family_medicine">Family Medicine</option>
<option value="dermatologist">Dermatologist</option>
<option value="anaesthesiology">Anaesthesiology</option>
<option value="rheumatologist">Rheumatologist</option>
<option value="endocrinologist">Endocrinologist</option>
<option value="nephrologist">Nephrologist</option>
<option value="neurologist">Neurologist</option>
<option value="pediatrician">Pediatrician</option>                
<option value="urologist">Urologist</option>
<option value="radiologist">Radiologist</option>
<option value="dentist">Dentist</option>
<option value="pulmonologist">Pulmonologist</option>
<option value="podiatristian">Podiatristian</option>
<option value="emergency_physician">Emergency Physician</option>
<option value="anaesthesiologist">Anaesthesiologist</option>
<option value="cardiologist">Cardiologist</option>
<option value="oncologist">Oncologist</option>
<option value="gastroenterologist">Gastroenterologist</option>
<option value="ophthanlmologist">Ophthanlmologist</option>
<option value="cardology">Cardology</option>
<option value="allergist">Allergist</option>
<option value="orthopedic_surgoen">Orthopedic Surgoen</option> 
<!-- Add more role options as needed-->
</select>
<label for="doctors">Roles</label>
<select id="doctors">
Doctors for the selected role will be dynamically added here
</select>
<button id="continue" type="submit" onClick="submitRoles()" >Continue</button>
</div>
<div class="appoitment_form hidden">
<div class="calendar">
        <div class="month">
            <i class="fa fa-angle-left prev"></i>
            <div class="date">
                <h1></h1>
                <p></p>
            </div>
            <i class="fa fa-angle-right next"></i>
        </div>
        <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="days"> </div>
    </div>
    <div class="form_appoitment">
        <h3>Fill in the neccessary Information</h3>
        <form action="" class="form">
            <div class="form_control">
                <label for="">Patient Name</label>
                <input type="text" placeholder="john">
            </div>
            <div class="form_control">
                <label for="">Patient Id</label>
                <input type="text" placeholder="id001">
            </div>
            <div class="form_control">
                <label for="">Selected Date</label>
                <div class="selected_date">03-01-2024</div>
            </div>
            <div class="form_control">
                <label for="">Selected Time</label>
                <input type="time">
            </div>
            <div class="form_control_text_area">
                <label for="">Doctor Comment</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button class="btn_submit_appoitment">Transfer</button>
            </div>
        </form>
    </div>
    </div>
            </section>
        <section class="appoitments">
        <h1>Appoitments</h1>
        <div class="cards_container">
        <div class="cards">
            <div class="profile">
                <img src="images/24cc97ebee8475a31c597fdb32b32d3a.jpg" alt="">
                <div class="name_role">
                <h3>Dr. Rita John</h3>
                <h4>Gynaecologist</h4>
                </div>
            </div>
            <div class="date_time">
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>2/03/2024</span>
                </div>
                <div class="time">
                <i class="fa fa-clock-o"></i>
                <span>2.30pm</span>
                </div>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_pending">Pending</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_accepted">Accepted</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_declined">Declined</button>
                </div>
        </div>
        <div class="cards">
            <div class="profile">
                <img src="images/513d2ccb77e948b687079bc2d6f42661.jpg" alt="">
                <div class="name_role">
                <h3>Dr. Mary Asuquo</h3>
                <h4>Gynaecologist</h4>
                </div>
            </div>
            <div class="date_time">
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>2/03/2024</span>
                </div>
                <div class="time">
                <i class="fa fa-clock-o"></i>
                <span>2.30pm</span>
                </div>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_pending">Pending</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_accepted">Accepted</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_declined">Declined</button>
                </div>
        </div>
        <div class="cards">
        <div class="profile">
                <img src="images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
                <div class="name_role">
                <h3>Dr. Patience Emmanuel</h3>
                <h4>Gynaecologist</h4>
                </div>
            </div>
            <div class="date_time">
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>2/03/2024</span>
                </div>
                <div class="time">
                <i class="fa fa-clock-o"></i>
                <span>2.30pm</span>
                </div>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_pending">Pending</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_accepted">Accepted</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_declined">Declined</button>
                </div>
        </div>
        <div class="cards">
        <div class="profile">
                <img src="images/486bb8db10b50c178cc502e861e64daf.jpg" alt="">
                <div class="name_role">
                <h3>Dr. Kingsley Patrick</h3>
                <h4>Gynaecologist</h4>
                </div>
            </div>
            <div class="date_time">
                <div class="date">
                    <i class="fa fa-calendar"></i>
                    <span>2/03/2024</span>
                </div>
                <div class="time">
                <i class="fa fa-clock-o"></i>
                <span>2.30pm</span>
                </div>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_pending">Pending</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_accepted">Accepted</button>
                </div>
                <div class="buttons">
                    <button class="btn" id="btn_declined">Declined</button>
                </div>
        </div>
        </div>
        </section>
        </div>
    </div>


  <!-- <div class="overlay hidden"></div> -->

</body>
</html>

