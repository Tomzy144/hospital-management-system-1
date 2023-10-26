<?php include '../../backend/config/connection.php'?>


<?php include '../../backend/dashboardconfig/session-validation.php';?>

<?php
 $staff_id= $_POST['patient_id'];
?>

<?php    
    $fetch_patient_profile=$callclass->_get_patient_details($conn, $patient_id);
    $patient_profile_array = json_decode($fetch_patient_profile, true);
    $fullname= $patient_profile_array[0]['fullname'];
    $email= $patient_profile_array[0]['email'];
    $phonenumber= $patient_profile_array[0]['phonenumber'];
   // $role_id= $staff_profile_array[0]['role_id'];
    $status_id= $patient_profile_array[0]['status_id'];
    $date= $patient_profile_array[0]['date'];
    $last_login= $patient_profile_array[0]['last_login'];
   $passport = $patientf_profile_array[0]["passport"];
    
        
    $fetch_status=$callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    $status_name= $status_array[0]['status_name'];
   
    // function _get_sequence_count($conn, $item){
    //     $count=mysqli_fetch_array(mysqli_query($conn,"SELECT counter_value FROM counter_tab WHERE counter_id = '$item' FOR UPDATE"));
    //      $num=$count[0]+1;
    //      mysqli_query($conn,"UPDATE `counter_tab` SET `counter_value` = '$num' WHERE counter_id = '$item'")or die (mysqli_error($conn));
    //      if ($num<10){$no='00'.$num;}elseif($num>=10 && $num<100){$no='0'.$num;}else{$no=$num;}
    //      return '[{"num":"'.$num.'","no":"'.$no.'"}]';
    // }


    $fetch_pcount = $callclass->_get_total_count($conn, $pcount);
    $pcount_array = json_decode($fetch_pcount, true);
    $pcount = $pcount_array['counter_id'];
    


   ////for search
    // $status_id=$_POST['status_id'];
	// 	$all_search_txt=$_POST['all_search_txt'];
	// 	$search_page='staff-list';
	// 	require_once('search-code.php');


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
        <i class="fa fa-search" id="submit-input"><?php echo $pcount ?></i>
    </div> 
</div>
    <div class="div-table">
    <table border="2">
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
            <tr>
                <td>1</td>
                <td>Loveth</td>
                <td>DE-17012</td>
                <td><i class="fa fa-circle" id="color-changing"></i></td>
            </tr>
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
</body>
</html> 