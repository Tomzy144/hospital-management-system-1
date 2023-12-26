<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="nurse_section.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <i class="fa fa-long-arrow-left" id='back-arrow' onClick='backWardArrow()'></i>
        <div class="logo">
            <span style="font-size:2rem; color:#fff;">FRIDDA</span>
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
        </div>
            <input id="search_term" name="search_term" type="text" placeholder="Type here to search..." title="Type here to search" />
            <i class="fa fa-search"  id="submit-input"></i>
    </div> 
    </div>
    <div class="patient_ward_bed_container">
        <div class="flex_container">
            <div class="each_container">
                <div class="number_container">
                    1.
                </div>
                <div class="patient_info">
                    <span>Precious Joseph</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pM, Born 20 Hune, 1990(age 54 years), Female</span>
                    <div class="ward_round_container hidden">
                        <label for="stage">Stage</label>
                        <select name="stage" id="stage">
                            <option value="no_selection"></option>
                            <option value="am">Am</option>
                            <option value="am">Pm</option>
                        </select>

                        <label for="note">WR Note</label>
                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        <button id="submit">Submit</button>
                    </div>
                    <div class="buttons">
                    <button>Ward 6</button>
                    <button>Bed 6</button>
                    <button  id="ward_round_btn">Ward Round</button>
                    <button>Inpatient Vitals</button>
                    </div>
                </div>
            </div>
            <div class="each_container">
                <div class="number_container">
                    2.
                </div>
                <div class="patient_info">
                    <span>Mercy Obong James</span>
                    <span>Admitted Tues 29 Nov, 2023 at 2.21pM, Born 20 Hune, 1990(age 54 years), Female</span>
                    <div class="ward_round_container hidden">
                        <label for="stage">Stage</label>
                        <select name="stage" id="stage">
                            <option value="no_selection"></option>
                            <option value="am">Am</option>
                            <option value="am">Pm</option>
                        </select>

                        <label for="note">WR Note</label>
                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                    </div>
                    <div class="buttons">
                    <button>Ward 6</button>
                    <button>Bed 6</button>
                    <button  id="ward_round_btn">Ward Round</button>
                    <button>Inpatient Vitals</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="nurse_section.js"></script>
</body>
</html>