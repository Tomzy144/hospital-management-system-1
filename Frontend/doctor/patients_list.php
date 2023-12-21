<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/index.css">
    <script src ="js/patient.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script>
    <title>Patient</title>
</head>
<body>
   <div class="patient-container">
    <div  class="patient-navbar">
        <!---BACK ARROW-->
        <i class="fa fa-long-arrow-left " id='back-arrow' onClick='backWardArrow()'></i>
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

      
            <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
          
            <i class="fa fa-search"  id="submit-input"></i>
      
    </div> 
    </div>
    <div class="div-table" >
    <table id="All" >
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

    <tbody onClick="all_section_page_for_this_patient()"> 
        <tr>
             <td>1</td>
             <td>pat01</td>
             <td>PRECIOUS</td>
             <td>903788322</td>
             <td>2023-8-6</td>
             <td><i class='fa fa-circle'></i></td>
        </tr>
    </tbody>   

    <tbody onClick="all_section_page_for_this_patient()"> 
        <tr>
             <td>1</td>
             <td>pat01</td>
             <td>MERCY</td>
             <td>903788322</td>
             <td>2023-8-6</td>
             <td><i class='fa fa-circle'></i></td>
        </tr>
    </tbody> 

    <tbody onClick="all_section_page_for_this_patient()"> 
        <tr>
             <td>1</td>
             <td>pat01</td>
             <td>GOODNESS</td>
             <td>903788322</td>
             <td>2023-8-6</td>
             <td><i class='fa fa-circle'></i></td>
        </tr>
    </tbody>   
</table>     
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


















// end of tomiwa's script
   

// //     //Patient Page redirecting
//     function openNewPage(patient_id) {
//     // The URL of the page you want to open.
//     var url = 'patients_profile.php?id=' + patient_id; // Include the patient_id as a query parameter

//     // Open the new page in the current browser window or tab.
//     window.parent(location =( url));
// }


///////////////////
    //BACK ARROW TO THE DASHBOARD
    function backWardArrow(){
        var urlBackwardArrow = 'index.php';
        window.parent(location=(urlBackwardArrow));
    }

    function all_section_page_for_this_patient(){
        let url = 'pages_doctor_input/all_sections/all_section.php';
        window.parent(location = (url));
    }
</script>



