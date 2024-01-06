<?php include '../../../backend/config/connection.php';?>
<?php include '../../../backend/dashboardconfig/session-validation.php';?>




<?php
 $staff_id= $_POST['staff_id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoiment</title>
    <link rel="stylesheet" href="./appoitment.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
</head>
<body onload="getRoles()">
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
        <button id='btn-drop-down'>
            <!-- <i class="fa fa-plus"></i> -->
            <span>Book an Appointment</span>
           </button>
        </div>
        </div>
    <div class="activities">
      <div class="three-container-row">
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
      <div class="three-container-row">
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
      <div class="three-container-row">
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
    </div>

    <div class="event-form hidden">
    <div class="doctors-roles">
    <label for="roles">Doctor Role:</label>
<select id="roles"  onclick="getDoctors()">

<option>Select</option>
    <!-- <option value="cardiologist">Cardiologist</option>
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
    <option value="pediatrician">Pediatrician</option>                 ///all commentented out bcause they will fetched from database 
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
    <option value="orthopedic_surgoen">Orthopedic Surgoen</option> -->
    <!-- Add more role options as needed -->
</select>

<label for="doctors">Select Doctor:</label>
<select id="doctors">
    <!-- Doctors for the selected role will be dynamically added here -->
</select>
<button id="continue" type="submit" onClick="submitRoles()" >Continue</button>
    </div>
    <div class="appoitment-calender hidden">

    <div class="calendar">
                <div class="month">
                    <i class="fa fa-angle-left prev"></i>
                    <div class="date">
                        <h1></h1>
                        <p></p>
                    </div>
                    <i class="fa fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days">
                    <!-- <div class="prev-date">26</div>
                    <div class="prev-date">27</div>
                    <div class="prev-date">28</div>
                    <div class="prev-date">30</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div class="today">13</div>
                    <div>14</div>
                    <div>15</div>
                    <div>16</div>
                    <div>17</div>
                    <div>18</div>
                    <div>19</div>
                    <div>20</div>
                    <div>21</div>
                    <div>22</div>
                    <div>23</div>
                    <div>24</div>
                    <div>25</div>
                    <div>26</div>
                    <div>27</div>
                    <div>28</div>
                    <div>29</div>
                    <div>30</div>
                    <div>31</div>
                    <div class="next-date">1</div>
                    <div class="next-date">2</div>
                    <div class="next-date">3</div>
                    <div class="next-date">4</div>
                    <div class="next-date">5</div>
                    <div class="next-date">6</div> -->
                </div>
            </div>
            <h3 class="content"></h3>
<div class="appoitment-form hidden">
    <form id="form">
        <div class="form-control">
            <label for="name">Patient Name</label>
            <input type="text" id="name" placeholder="Input name" autocomplete="off">
        </div>
        <div class="form-control">
            <label for="name">Patient ID</label>
            <input type="text" id="name" placeholder="Input id" autocomplete="off">
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
            <label for="text">Request Typet</label>
            <input type="text" id="text" name="text">          
        </div>
            <input type="hidden" id="date"  value="">
            <input type="hidden" id="role"  value="">
            <input type="hidden" id="doctor"  value="">
            <button id="sub" type="button" onClick="appointment_booker();" >Submit</button>
        </form>
    </div>
    </div>
    </div>

</body>
<script src="js/appoitment.js"></script>
<script src="js/jquery-v3.6.1.min.js"></script>

<script>
  //This help show the current date and time zone of today
const date =  new Date()

const renderCalendar = ()=>{
   date.setDate(1)
   console.log(date.getDay());
    //this help shows the current month we are in and its 0 based "which means its counts from 0 throgh the months"
    const month  = date.getMonth()
    const monthDays = document.querySelector(".days")
   const lastDay = new Date(date.getFullYear(), date.getMonth() +1, 0).getDate()
   
   const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate()
   
   const firstDayIndex = date.getDay() 
   
   const  lastDayIndex = new Date(date.getFullYear(), date.getMonth() +1, 0).getDay()
   const nextDays = 7 - lastDayIndex -1
   //this is the month array of all the selected month
   const months = [
       "January", 
       "February",
        "March",
         "April", 
         "May", 
         "June", 
         "July", 
         "August", 
         "September",
          "October", 
          "November",
          "December" 
   ] ; 
   
   document.querySelector(".date h1").innerHTML = months[date.getMonth()];
   document.querySelector(".date p").innerHTML = date.toDateString();
   // const showDate =  document.querySelector(".content");
   
   let days = "";
   
   for(let x =  firstDayIndex; x>0; x--){
       days += `<div class ="prev-date">${prevLastDay - x +1}</div>`;
   }
   
   for(let i = 1; i <=lastDay; i++) {
       if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
           
           days +=`
           <div class="calendar-date today" onclick="updateClickedDate(${i})">${i}</div>`;
       }else{
           
           days +=`
           <div class="calendar-date" onclick="updateClickedDate(${i})">${i}</div> `;
       }
   }
   
   for(let j =1; j<=nextDays; j++){
       days += `<div class="next-date">${j}</div>`;
       monthDays.innerHTML = days;
   }
}
function updateClickedDate(clickedDay) {
   document.querySelector("#selectedDate").textContent = `${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
   document.getElementById('date').value=`${clickedDay}-${date.getMonth() + 1}-${date.getFullYear()}`;
 }


document.querySelector(".prev").addEventListener("click", function(){
   date.setMonth(date.getMonth() -1)
   renderCalendar()
})
document.querySelector(".next").addEventListener("click", function(){
   date.setMonth(date.getMonth()+ 1)
   renderCalendar()
})
renderCalendar()
</script>

   
    
    </script>
</html>