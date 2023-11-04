<?php include '../../backend/config/connection.php'?>


<?php include '../../backend/dashboardconfig/session-validation.php';
include '../../backend/config/search.php'?>

<?php
 $patient_id= $_POST['patient_id'];
?>

<?php    
    
$fetch_patient_profile = $callclass->_get_patient_details($conn, $patient_id);

$patient_profile_array = json_decode($fetch_patient_profile, true);

if ($patient_profile_array) {
    $sn = $patient_profile_array['sn'];
    $fullname = $patient_profile_array['fullname'];
    $email = $patient_profile_array['email'];
    $phonenumber = $patient_profile_array['phonenumber'];
    $status_id = $patient_profile_array['status_id'];
    $category_id = $patient_profile_array['category_id'];
    $date = $patient_profile_array['date'];
    $last_login = $patient_profile_array['last_login'];
    $passport = $patient_profile_array['passport'];
} else {
    $fullname=  "error";
    // Handle the case where the patient details were not found.
    // You might want to return an error message or take other appropriate action.
}


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    if ($status_id) {
        $status_name = $status_array['status_name'];
    } else {
        // Handle the case where status details were not found.
        // You might want to return an error message or take other appropriate action.
    }




    $fetch_category = $callclass->_get_category_details($conn, $category_id);

    // Check if the category details were successfully retrieved
    if ($fetch_category !== false) {
        $category_array = json_decode($fetch_category, true);
    
        // Check if category_name exists in the response
        if (isset($category_array['category_name'])) {
            $category_name = $category_array['category_name'];
        } else {
            // Handle the case where category_name was not found in the response.
            // You might want to return an error message or take other appropriate action.
        }
    } else {
        // Handle the case where category details were not found.
        // You might want to return an error message or take other appropriate action.
    }
    
    $fetch_pcount = $callclass->_get_total_count($conn, $pcount);
    $pcount_array = json_decode($fetch_pcount, true);
    $pcount = $pcount_array['counter_id'];
    
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
        <li class="options" id="0" onclick="showTable('All')">All</li>
        <li class="options" id="1" onclick="showTable('Inpatients')">Inpatients</li>
        <li class="options" id="2" onclick="showTable('Outpatients')">Outpatients</li>
        <li class="options" id="3" onclick="showTable('Waitinglist')">Waiting List</li>
        <li class="options" id="4" onclick="showTable('Appointment')">Appointment</li>
        <li class="options" id="5"  onclick="showTable('Test')">Test</li>
        <li class="options" id="6"  onclick="showTable('ANC')">ANC</li>
        <li class="options" id="7"  onclick="showTable('Todayinputs')">Today inputs</li>
        <!-- Add more options here -->
    </ul>




    <!-- <ul id="list">
    <li class="options" id="0" onclick="showTable('categoryAll')">All</li>
    <li class="options" id="1" onclick="showTable('categoryInpatients')">Inpatients</li>
     Add similar list items for other categories
</ul> -->




        </div>

      
            <input id="search_term" onkeyup="_fetch_patient_list()" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
          
            <i class="fa fa-search" onclick="_fetch_patient_list()" id="submit-input"> <?php echo $pcount ?></i>
      
    </div> 
    </div>
    <!-- </form> -->
  
    <div class="div-table" >
    <table id="All" >
    <?php $sql = "SELECT * FROM patient_tab"; 
    $result = $conn->query($sql);
    ?>
    <thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    //updated kingsley added a link tag here
                    echo "<td><a href='patients_profile.html' class='patients-links-to-profile'>" . $row["patient_id"] . "</a></td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>



<!-- inpatients table -->


    

<!-- <table id="All" class="category-table">
    Table content for "All" category 
</table> -->

<table id="Inpatients" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '1'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
    <!-- Table content for "Inpatients" category -->
</table>


<!-- outpatients table -->

<table id="Outpatients" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '2'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
       
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
    <!-- Table content for "Inpatients" category -->
</table>

<!-- WaitingList table -->

<table id="Waitinglist" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '3'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
</table>


<!-- Appointment table -->
<table id="Appointment" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '4'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
</table>

<!-- Test table -->
<table id="Test" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '5'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <a href =""<d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
</table>



<!-- ANC table -->
<table id="ANC" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '6'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody">
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
</table>






<!-- todaysinput table -->
<table id="Todayinputs" class="category-table" style="display: none;">

<?php $sql = "SELECT * FROM patient_tab WHERE category_id = '7'" or die("cant fetch"); 
    $result = $conn->query($sql);
    ?>

<thead> 
        <th>
             <d>#</d>
        </th>
        <th>
             <d>id</d>
        </th>
        <th>
            <d>Patient's Name</d>
        </th>
        <th>
            <d>Number</d>
        </th>
        <!-- <th>
            <d>Category</d>
        </th> -->
        <th>
            <d>Date</d>
        </th>
        <th>
            <d>Status</d>
        </th>
    </thead>              
        <tbody id="searchResultsBody" >
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["sn"] . "</td>";
                    echo "<td>" . $row["patient_id"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["phonenumber"] . "</td>";
                    
                    // echo "<td>" . $row["status_id"] . "</td>";
                    // echo "<td>" .$row['$category_name'] . $category_name . "</td>";
              
                echo "<td>" . $row["date"] . "</td>";
                echo "<td><i class='fa fa-circle' data-value='" . $row["status_id"] . "' data-status='" . $row["status_name"] . "'></i> " . $row["status_name"] . "</td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
</table>



<!-- end of tables -->





</div>
   </div>
   <script>
    const select =  document.getElementById("select");
    const list = document.getElementById("list");
    const selectText = document.getElementById("selectText");
    const options = document.getElementsByClassName("options");
    const inputfield = document.getElementById("inputfield");
    const submitInput = document.getElementById("submit-input");
    const id = document.getElementById("id");

    select.addEventListener("click", function(){
        list.classList.toggle("open");
    })

    const user = 1;
    submitInput.addEventListener("load", function(){
        submitInput.innerHTML = user.toString();
    })

    for(option of options){
        option.addEventListener("click", function(){
            selectText.innerHTML = this.innerHTML,id;
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
            element.style.color = "#00ff00";
        } else if (value === "2") {
            element.style.color = "#ffe200";
        }
    });


        //////////////////////////////////////////////////////



    function _fetch_patient_list() {
    

        const search_term = document.getElementById("search_term").value;
        const searchResultsBody = document.getElementById("searchResultsBody");

        // Clearing the existing search results
        searchResultsBody.innerHTML = "";

        //  an AJAX request to fetch search results
        fetch('../../backend/config/search.php?search_term=' + search_term)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Filtering patients based on the search term
                const searchTerm = search_term.toLowerCase();
                const filteredPatients = data.filter(patient => (
                    patient.sn.toLowerCase().includes(searchTerm) ||
                    patient.patient_id.toLowerCase().includes(searchTerm) ||
                    patient.fullname.toLowerCase().includes(searchTerm) ||
                    patient.email.toLowerCase().includes(searchTerm) ||
                    patient.phonenumber.toLowerCase().includes(searchTerm) ||
                    patient.date.toLowerCase().includes(searchTerm) ||
                    patient.status_id.toLowerCase().includes(searchTerm) ||
                    patient.last_login.toLowerCase().includes(searchTerm)
                ));




        // Displaying search results in the table
        filteredPatients.forEach(patient => {
        const row = searchResultsBody.insertRow();
        row.insertCell(0).textContent = patient.sn;
        row.insertCell(1).textContent = patient.patient_id;
        row.insertCell(2).textContent = patient.fullname;
        // row.insertCell(3).textContent = patient.email;
        row.insertCell(3).textContent = patient.phonenumber;
        row.insertCell(4).textContent = patient.date;

        const statusCell = row.insertCell(5);
        const icon = document.createElement("i");
        icon.className = "fa fa-circle"; // Replace with the desired Font Awesome icon class

        if (patient.status_id === "1") {
            icon.style.color = "rgb(0, 255, 0)";
        } else if (patient.status_id === "2") {
            icon.style.color = "rgb(255, 226, 0";
        }

        statusCell.appendChild(icon);
    });

        })
        .catch(error => {
            console.error('Error during AJAX request:', error);
        });
    }


        ////////////////////////////////////////////////////////////////


    function showTable(category) {
        var tables = document.getElementsByClassName("category-table");

        // Hide the "All" table
        var allTable = document.getElementById('All');
        if (allTable) {
            allTable.style.display = 'none';
        }

        // Hide all other tables
        for (var i = 0; i < tables.length; i++) {
            if (tables[i].id !== category) {
                tables[i].style.display = 'none';
            }
        }

        // Show the selected table
        var selectedTable = document.getElementById(category);
        if (selectedTable) {
            selectedTable.style.display = 'table';
        }
    }

    //Patient Page redirecting
    function openNewPage() {
      // Check if the link has been clicked before
      if (sessionStorage.getItem('linkClicked') === null) {
        //The URL of the page you want to open.
        var url = 'patients_profile.html';

        // Open the new page in a new browser window or tab.
        window.parent(location=(url));

        // Set a session storage flag to indicate that the link has been clicked
        sessionStorage.setItem('linkClicked', 'true');
      }
    }

</script>



