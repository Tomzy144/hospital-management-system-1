<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoiment</title>
    <link rel="stylesheet" href="./appoitment.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <!-- <link rel="stylesheet" href="./receptionist/calendar/fullcalendar-6.1.10/dist/index.global.min.js" /> -->
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
   <div class="contents">
    <div class="add-new">
        <div class="flex">
        <button id='btn-drop-down' onclick="transitionContents()">
            <!-- <i class="fa fa-plus"></i> -->
            <span>Book an Appoitment</span>
           </button>
        </div>
        </div>
    <div class="activities">
        <div class="activities-container">
            <h3 style = 'font-size:1.5rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1rem'>Status: Pending</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <h3 style = 'font-size:1.5rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1.rem'>Status: Accepted</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <h3 style = 'font-size:1.5rem; padding:1rem'>Appoitment Schedule for a patient with Doctor Micheal</h3>
            <h4 style='font-size:1rem'>1hour, one-to-one meeting</h4>
            <h4 style='font-size:1rem'>Status: Rejected</h4>
            <button id='edit-schedule'>Edit Schedule</button>
            <button id='delete-schedule'>Delete Schedule</button>
        </div>
        </div>
    </div>

    <div class="event-form hidden">
    <div class="doctors-roles">
    <label for="roles">Doctor Role:</label>
<select id="roles" onchange="getDoctors()">
    <option value="cardiologist">Cardiologist</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="dermatologist">Dermatologist</option>
    <!-- Add more role options as needed -->
</select>

<label for="doctors">Select Doctor:</label>
<select id="doctors">
    <!-- Doctors for the selected role will be dynamically added here -->
</select>
<button id="continue" onClick="submitRoles()">Continue</button>
    </div>
    <div class="appoitment-calender hidden">
    <h2>Doctor Appointment Booking System</h2>

<div id="calendar"></div>
    </div>
    </div>
</body>
<script src="appoitment.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
   
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultView: 'month',
                events: [
                    {
                        title: 'Available Slot',
                        start: '2023-01-01T09:00:00',
                        end: '2023-01-01T10:00:00',
                    },
                    // Add more events as needed
                ],
                dayClick: function(date, jsEvent, view) {
                    // Redirect to another page with the selected date
                    window.location.href = 'anotherPage.html?selectedDate=' + moment(date).format('YYYY-MM-DD');
                },
            });
        });
    </script>
</html>