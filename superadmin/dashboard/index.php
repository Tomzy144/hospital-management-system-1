<?php include '../../backend/config/connection.php';?>
<?php include 'dashboardconfig/session-validation.php';?>
<!-- ?php include '../../backend/config/user-validation.php';?> -->



<?php
 $staff_id= $_POST['staff_id'];
?>

<?php    
    $fetch_staff_profile=$callclass->_get_user_details($conn, $s_staff_id);
    $staff_profile_array = json_decode($fetch_staff_profile, true);
    $fullname= $staff_profile_array[0]['fullname'];
    $email= $staff_profile_array[0]['email'];
    $phonenumber= $staff_profile_array[0]['phonenumber'];
   // $role_id= $staff_profile_array[0]['role_id'];
    $status_id= $staff_profile_array[0]['status_id'];
    $date= $staff_profile_array[0]['date'];
    $last_login= $staff_profile_array[0]['last_login'];
   $passport = $staff_profile_array[0]["passport"];
    
        
    $fetch_status=$callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    $status_name= $status_array[0]['status_name'];
   
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
l
<link href="awesome-font/css/font/bootstrap-icons.css" type="text/css" rel="stylesheet"/>
<link href="../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <title>Hospital management System</title>



      <!-- <script>
        // Function to be executed when the user leaves the page
        window.onbeforeunload = function() {
            // Perform an AJAX request to notify the server
            // that the user is leaving the page
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'logout_script.php', false);
            xhr.send();
        };
    </script> -->
    <script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>
</head>
<body>
<div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <span>Super admin</span>
            <button class="btn_submit">Upload Image</button>
           </div>

            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span><?php echo $fullname?></span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
    <div class="sidebar-body">
      <ul>
        <li class="links active">
          <span>Patients</span>
        </li>
        <li class="links">
          <span>Staff manager</span>
        </li>
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <span>Logout</span>
          <form method="post" action="dashboardconfig/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>
  <div class="list_div" id="availablePatientList">
      <div class="table_container">
            <div class="search_bar_container">
            <h2 class="modal__header">
        Staff 
      <span class="highlight">lists</span>
      </h2>
      <input type="text" name="" id="incomingSearchInput" placeholder="Search">
            </div>
            <table id="availablePatientList">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Profile</td>
                        <td>StaffName</td>
                        <td>Staff Id</td>
                        <td>Gender</td>
                        <td>Phone number</td>
                        <td>Hospital card Id</td>
                        <td>Address</td>
                        <td>Occupation</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
  </div>
</div>


<!----PATIENT PROFILE-->
<div class="modal hidden" id="patientProfile">
      <button class="btn--close-modal" onclick="closeModal('patientProfile')">&times;</button>
      <h2 class="modal__header">
        Staff 
      <span class="highlight">Profile</span>
      </h2>

    <div class="personalInfo">
      <img src="" alt="" id="patient_passport">
      <div class="details">
      <button id="fullname"></button>
      <button id="patient_id"></button>
      <button id="phonenumber"></button>
      <button id="status_id"></button>
      <button id="hospital_card_id"></button>
      <button id="family_card_id"></button>
      <button id="gender"></button>
      <button id="dateofbirth"></button>
      <button id="family_disease"></button>
      <button id="kaddress"></button>
      <button id="kgender"></button>
      <button id="kname"></button>
      <button id="kphonenumber"></button>
      <button id="krelationship"></button>
      <button id="medical_history"></button>
      <button id="occupation"></button>
      <button id="past_disease"></button>
      <button id="past_obsterics"></button>
      <button id="past_surgery"></button>
      <button id="sexual_history"></button>
      <button id="more--datails">View all details</button>
      </div>
    </div>
    </div>


    <!----Staff Management--->
    <div class="overlay hidden"></div>






  


    <script src="js/dashboard.js"></script>
</body>
</html>
