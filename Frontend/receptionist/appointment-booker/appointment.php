<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoiment</title>
    <link rel="stylesheet" href="./appoitment.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar">
        <h1>FRIDDA</h1>
    </div>
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
   <div class="container-add-new-event">
    <div class="add-new">
        <div class="flex">
            <h2>Events</h2>
        </div>
        <div class="flex">
           <button id='btn'>
            <i class="fa fa-plus"></i>
            <span>Add</span>
            <i class="fa fa-caret-down"></i>
           </button>
        </div>
        </div>
        <div class="drop-down hidden">
    <button id='btn-drop-down'>
            <i class="fa fa-plus"></i>
            <span>New Event</span>
           </button>
    </div>
    </div>
    <div class="activities">
        <div class="activities-container">
            <h3 style = 'font-size:2rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1.4rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1.4rem'>Status: Pending</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <h3 style = 'font-size:2rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1.4rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1.4rem'>Status: Accepted</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <h3 style = 'font-size:2rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1.4rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1.4rem'>Status: Rejected</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button id='delete-schedule'>Delete Schedule</button>
        </div>
    </div>
</body>
<script src="appoitment.js"></script>
</html>