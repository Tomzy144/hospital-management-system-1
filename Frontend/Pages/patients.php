<?php include '../../backend/config/connection.php'?>


<?php include '../../backend/dashboardconfig/session-validation.php';?>

<?php
 $patient_id= $_POST['patient_id'];
?>

<?php    
//     $fetch_patient_profile=$callclass->_get_patient_details($conn, $patient_id);
//     $patient_profile_array = json_decode($fetch_patient_profile, true);
//     $sn= $patient_profile_array[0]['sn'];
//     $fullname= $patient_profile_array[0]['fullname'];
//     $email= $patient_profile_array[0]['email'];
//     $phonenumber= $patient_profile_array[0]['phonenumber'];
//    // $role_id= $staff_profile_array[0]['role_id'];
//     $status_id= $patient_profile_array[0]['status_id'];
//     $date= $patient_profile_array[0]['date'];
//     $last_login= $patient_profile_array[0]['last_login'];
//    $passport = $patientf_profile_array[0]["passport"];
    

$fetch_patient_profile = $callclass->_get_patient_details($conn, $patient_id);

$patient_profile_array = json_decode($fetch_patient_profile, true);

if ($patient_profile_array) {
    $sn = $patient_profile_array['sn'];
    $fullname = $patient_profile_array['fullname'];
    $email = $patient_profile_array['email'];
    $phonenumber = $patient_profile_array['phonenumber'];
    $status_id = $patient_profile_array['status_id'];
    $date = $patient_profile_array['date'];
    $last_login = $patient_profile_array['last_login'];
    $passport = $patient_profile_array['passport'];
} else {
    $fullname=  "error";
    // Handle the case where the patient details were not found.
    // You might want to return an error message or take other appropriate action.
}





        
    // $fetch_status=$callclass->_get_status_details($conn, $status_id);
    // $status_array = json_decode($fetch_status, true);
    // $status_name= $status_array[0]['status_name'];
   
    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    if ($status_id) {
        $status_name = $status_array['status_name'];
    } else {
        // Handle the case where status details were not found.
        // You might want to return an error message or take other appropriate action.
    }
    




    $fetch_pcount = $callclass->_get_total_count($conn, $pcount);
    $pcount_array = json_decode($fetch_pcount, true);
    $pcount = $pcount_array['counter_id'];
    


//    //for search
//     $status_id=$_POST['status_id'];
// 		$all_search_txt=$_POST['all_search_txt'];
// 		$search_page='staff-list';
// 		require_once('../../backend/config/search-code.php');


?>
 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="../index.css">
    <title>Patient</title>
</head>
<body>
   <div class="patient-container">
    <div  class="patient-navbar">
        <h2>Patient Admission Lists</h2>
    </div>
        <div class="nav-menu">

            <ul class="menu-items">
                <a href="#">
                <li class="items">
                    <i class="fa fa-book "></i>
                    <h4>Notes</h4>
                </li>
            </a>
                <a href="#">
                <li class="items">
                    <i class="fa fa-check "></i>
                    <h4>Activity Log</h4>
                </li>
            </a>
                <a href="#">
                <li class="items">
                    <i class="fa fa-registered"></i>
                    <h4>Results</h4>
                </li>
            </a>
                <a href="#">
                <li class="items">
                    <i class="fa fa-bed"></i>
                    <h4>Wards</h4>
                </li>
            </a>
                <a href="#">
                <li class="items">
                    <i class="fa fa-user-circle-o"></i>
                    <h4>Reception</h4>
                </li>
            </a>
            </ul>
    </div>
    <div class="search-container">
    <div class="search-bar">
        <div id="select">
            <p id="selectText"></p>
            <i class="fa fa-sort-desc"></i>
            <ul id="list">
                <li class="options">All </li>
                <li class="options">Inpatients </li>
                <li class="options">Outpatients</li>
                <li class="options">Waiting List</li>
                <li class="options">Appointment</li>
                <li class="options">Test</li>
                <li class="options">ANC</li>
                <li class="options">Today inputs</li>
            </ul>
        </div>
        <input type="search" id="inputfield" placeholder="Search In All Categories">
        <i class="fa fa-search" id="submit-input"> <?php echo $pcount ?></i>
    </div> 
</div>
    <div class="div-table">
    <table border="2">
    <?php $sql = "SELECT * FROM patient_tab"; 
    $result = $conn->query($sql);
    ?>
    <thead> 
        <th>
             <d>#</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>
  
                        
        <tbody>
             <?php
           if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sn"] . "</td>";
                echo "<td>" . $row["fullname"] . "</td>";
                echo "<td>" . $row["phonenumber"] . "</td>";
                // echo "<td>" . $row["status_id"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        $conn->close();?>
        
                            
               

        </tbody>



    </table>
</div>
   </div>
   <script>
    const select =  document.getElementById("select");
    const list = document.getElementById("list");
    const selectText = document.getElementById("selectText");
    const options = document.getElementsByClassName("options");
    const inputfield = document.getElementById("inputfield");
    const submitInput = document.getElementById("submit-input");


    select.addEventListener("click", function(){
        list.classList.toggle("open");
    })

    const user = 1;
    submitInput.addEventListener("load", function(){
        submitInput.innerHTML = user.toString();
    })

    for(option of options){
        option.addEventListener("click", function(){
            selectText.innerHTML = this.innerHTML;
            inputfield.placeholder = 'Search In ' + selectText.innerHTML
        })
    }
    </script>



<!-- ////tomzy's script  -->
<script>



    // Select all elements with the class "color_change_class"
    var elements = document.querySelectorAll('.fa-circle');

    // Iterate through the elements and apply the color change
    elements.forEach(function (element) {
        var value = element.getAttribute('data-value');

        if (value === "1") {
            element.style.color = "green";
        } else if (value === "2") {
            element.style.color = "red";
        }
    });





</script>

 
  
</body>
</html> 