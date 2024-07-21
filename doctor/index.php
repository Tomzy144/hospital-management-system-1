<?php include '../backend/config/connection.php';?>
<?php include '../config/doctor-session-validation.php';?>


<!-- ?php
$s_doctor_id = $_POST['doctor_id'];
?> -->

    

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
    $fetch_appointment = $callclass->_get_appointment_details($conn, $doctor_id);
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
<link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
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

        <div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="">
            <span><?php echo $fullname ?></span>
            <button class="btn_submit">Upload Image</button>
           </div>

            <div class="image">
            <img src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="userImage"/>
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
        <li class="links available">
          <span>Appoitments</span>
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



    <div class="list_div">
        <div class="patient_list_div" >
        <div class="search_bar_container">
                <h3>Appoitment details</h3>
                    <input type="text" placeholder="Search here">
                </div>

                <div class="body_sec" id="appointmentDetailsContainer">
                    <?php 
                    $s_doctor_id_escaped = $conn->real_escape_string($s_doctor_id);
                   
                // SQL query to join doctor_appointment_tab with patient_tab to get appointment and patient details
                $sql = "SELECT doctor_appointment_tab.*, patient_tab.patient_passport 
                FROM doctor_appointment_tab
                JOIN patient_tab ON doctor_appointment_tab.patient_id = patient_tab.patient_id
                WHERE doctor_appointment_tab.doctor_id = '$s_doctor_id_escaped'";
        
        $result = $conn->query($sql);
                    ?>

    <table id="appointment_table">
        <thead>
            <tr>
                <td>S/N</td>
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
                    <button class="accept-btn" type="button" onclick="accept('<?php echo htmlspecialchars($row["patient_id"]); ?>')">Accept</button>
                    <?php
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <button class="reject-btn" type="button" onclick="reject('<?php echo htmlspecialchars($row["patient_id"]); ?>')">Reject</button>
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

const messageContainer = document.createElement('div');
document.body.appendChild(messageContainer);

const createAlertMessage = (text, className, duration = 5000) => {
  const message = document.createElement('div');
  message.className = className + ' alert';
  message.innerHTML = `
    <div class="content">
      <div class="icon">
        <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
      </div>
      <h2>${text}</h2>
    </div>
  `;
  messageContainer.appendChild(message);
  setTimeout(() => {
    message.classList.add('hide');
    setTimeout(() => message.remove(), 500); 
  }, duration);
  return message;
}

const successMessage = (text) => createAlertMessage(text, 'success');
const infoMessage = (text) => createAlertMessage(text, 'info');
const warningMessage = (text) => createAlertMessage(text, 'warning');
const dangerMessage = (text) => createAlertMessage(text, 'danger', 4000); 

const confirmDialog = (text, onConfirm) => {
  const message = createAlertMessage(text, 'info');
  const buttonContainer = document.createElement('div');
  buttonContainer.innerHTML = `  <br/><br/><br/>
    <button class="confirm-yes">Yes</button>
    <button class="confirm-no">No</button>
  `;
  message.querySelector('.content').appendChild(buttonContainer);

  const yesButton = buttonContainer.querySelector('.confirm-yes');
  const noButton = buttonContainer.querySelector('.confirm-no');

  yesButton.addEventListener('click', () => {
    onConfirm();
    successMessage(`You ca now have access `)
    message.remove();
  });

  noButton.addEventListener('click', () => {
    dangerMessage('Patient rejected');
    message.remove();
  });
};

function accept(patient_Id) {
  confirmDialog("Are you sure you want to accept this patient?", () => {
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
        $('.search_bar_container').addClass('hide');
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

    // document.addEventListener('click', function(event) {
    //   console.log('Event type:', event.type); // Output the type of event
    //   console.log('Event target:', event.target); // Output the target of the event
    // });
  });
}




                    function reject(patient_Id) {
                        // delete_input(patient_Id);
                        dangerMessage(`Rejected patient with ID: ${patient_Id}`);

                    }

                   
                </script>
</div>
            
            <div class="all_sections_input hidden"></div>

                <!----Start from here-->
               
        </div>
        
    </div>
</div>
<div class="black--background hidden"></div>
  
</body>
</html>

