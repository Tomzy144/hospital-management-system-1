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
        </div>
        <div class="section2">
        </div>
            <div class="profile">
                <div class="profile_account hide">
                <img id="image_profile_account" src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="">
                <h4><?php echo $fullname ?></h4>
                <button class="btn_submit">Upload Image</button>
                <span>change password</span>
            </div>
                <div class="image">
                <img src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="">
                <div class="active_on"></div>
                </div> 
                <span><?php echo $fullname ?></span>
                <i class="bi bi-caret-down-fill _profile_arrow_icon"  onclick="click_icon_for_profile()"></i>
            </div>
        </div>

        <div class="sidebar">
    <!-- <div class="sidebar-header">
            <div>
                <i class="bi bi-cloud-arrow-down-fill"></i>
                <span>cloudcash</span>
            </div>
    </div> -->
    <div class="sidebar-body">
        <ul>
            <li>
                <i class="bi bi-calendar2-plus"></i>
                <span>Appoitments</span>
            </li>
            <li onclick="document.getElementById('logoutform').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
                <form method="post" action="../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
            </li>
        </ul>
    </div>
    <!-- <div class="sidebar-footer">
            <div>
            <i class="bi bi-person"></i><span>USER0001</span>
            </div>
            <span>Cash: $0.00</span>
            <span>P0S:$0.00</span>
        </div> -->
    </div>
</div>
         <!--END OF SIDEBAR AND NAVBAR-->

    <div class="appoitment_section">
        <div class="patient_list_div" >
        <div class="search_bar_container">
                <h3>Appoitment details</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>

                <div class="body_sec" id="appointmentDetailsContainer">
    <?php
        // Ensure connection is established
        // Replace $conn with your database connection variable
       ; // Example doctor ID, replace it with the actual variable
        $sql = "SELECT doctor_appointment_tab.*, patient_tab.patient_passport 
                FROM doctor_appointment_tab
                JOIN patient_tab ON doctor_appointment_tab.patient_id = patient_tab.patient_id
                WHERE doctor_appointment_tab.doctor_id = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $s_doctor_id); // Bind the doctor ID
        $stmt->execute();
        $result = $stmt->get_result();
    ?>

    <table id="appointment_table">
        <thead>
            <tr>
                <th>S/N</th>
                <th>PASSPORT</th>
                <th>Patient Name</th>
                <th>Patient ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Request Type</th>
                <th>Accept</th>
                <th>Reject</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $appointmentCount = 0; // Initialize appointment count
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $appointmentCount++; // Increment appointment count for each row
                    echo "<tr>";
                    echo "<td>" . $appointmentCount . "</td>"; // Display appointment count
                    echo "<td><img src='" . htmlspecialchars($website_url . "/uploaded_files/profile_pix/patient/" . $row["patient_passport"]) . "' alt='Profile Picture' width='50' height='50'/></td>";
                    echo "<td>" . htmlspecialchars($row["patient_name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["patient_id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["doctor_appointment_date"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["time"]) . "</td>";
                    // echo "<td>" . htmlspecialchars($row["time"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["reason"]) . "</td>";
                    echo "<td>";
                    ?>
                    <button class="accept-btn" type="button" onClick="accept('<?php echo htmlspecialchars($row["patient_id"]); ?>')">Accept</button>
                    <?php
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <button class="reject-btn" type="button" onClick="reject('<?php echo htmlspecialchars($row["patient_id"]); ?>')">Reject</button>
                    <?php
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <script>
              function accept(patient_Id) {
                // Fade in elements with class 'all_sections_input'
                if (confirm("Are you sure you want to accept this patient?")) {
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
  
</body>
</html>

