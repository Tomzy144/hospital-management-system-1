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
            <span>Appoitment Schedule for a patient with Doctor Micheal</span>
            <span>Status: Pending</span>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <span>Appoitment Schedule for a patient with Doctor Micheal</span>
            <span>Status: Accepted</span>
            <button id='edit-schedule'>Edit Schedule</button>
            <button  id='delete-schedule'>Delete Schedule</button>
        </div>
        <div class="activities-container">
        <span>Appoitment Schedule for a patient with Doctor Micheal</span>
            <span style='font-size:1rem'>Status: Rejected</span>
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
    <option value="surgeon">Surgeon</option>
    <option value="psychiatrist">Psychiatrist:</option>
    <option value="family_medicine">Family Medicine</option>
    <option value="dermatologist">Dermatologist</option>
    <option value="anaesthesiology">Anaesthesiology</option>
    <option value="rheumatologist">Rheumatologist</option>
    <option value="endocrinologist">Endocrinologist</option>
    <option value="nephrologist">Nephrologist</option>
    <option value="neurologist">Neurologist</option>
    <option value="pediatrician">Pediatrician</option>
    <option value="urologist">Urologist</option>
    <option value="radiologist">Radiologist</option>
    <option value="dentist">Dentist</option>
    <option value="pulmonologist">Pulmonologist</option>
    <option value="podiatristian">Podiatristian</option>
    <option value="emergency_physician">Emergency Physician</option>
    <option value="anaesthesiologist">Anaesthesiologist</option>
    <option value="cardiologist">Cardiologist</option>
    <option value="oncologist">Oncologist</option>
    <option value="gastroenterologist">Gastroenterologist</option>
    <option value="ophthanlmologist">Ophthanlmologist</option>
    <option value="cardology">Cardology</option>
    <option value="allergist">Allergist</option>
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option>
    <!-- Add more role options as needed -->
</select>

<label for="doctors">Select Doctor:</label>
<select id="doctors">
    <!-- Doctors for the selected role will be dynamically added here -->
</select>
<button id="continue" onClick="submitRoles()">Continue</button>
    </div>
    <div class="appoitment-calender hidden">

<div id="calendar"></div>
<div class="appoitment-form hidden">
    <form id="form">
        <div class="form-control">
            <label for="name">Full Name</label>
            <input type="text" id="name" placeholder="Input name" autocomplete="off">
        </div>
        <div class="form-control">
            <label for="name">Selected Date</label>
            <span id="selectedDate">2023-10-3 </span>
        </div>
        <div class="form-control">
            <label for="name">Selected Time</label>
            <input type="time" id="time" name="time">
        </div>
            <div class="form-control">
            <label for="name">Reason for appoitment</label>
         <textarea name="" id="reason" cols="30" rows="10"></textarea>
            </div>
            <input type="hidden" id="date"  placeholder="Input name" value="">
            <button id="sub">Submit</button>
        </form>
    </div>
    </div>
    </div>

</body>
<script src="appoitment.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
   
    <script>
      $(document).ready(function() {

        let prevSelectedDate;

        var todayDate = moment().format('DD-MM-YYYY');
      $('#selectedDate').text(todayDate);
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
          // Use Moment.js to format the selected date
          var formattedDate = moment(date).format('DD-MM-YYYY');

          // Display the selected date on the page
          $('#selectedDate').text(formattedDate);
          if (prevSelectedDate) {
            prevSelectedDate.css('background-color', '');
          }

          // Change the background color of the clicked date cell to green
          $(this).css('background-color', 'green');

          // Update the previously selected date
          prevSelectedDate = $(this);

        },
      });
    });
    </script>
</html>